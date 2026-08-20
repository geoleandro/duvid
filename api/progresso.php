<?php
// =============================================================
//  api/progresso.php
//
//  POR QUÊ ESTE ARQUIVO EXISTE?
//  É o coração da migração. Hoje o DuvidDB.js chama:
//    - DuvidDB.salvarConclusao(idAula, tipo)  → localStorage
//    - DuvidDB.addGlobinhos(quantidade)        → localStorage
//  Este endpoint substitui os dois em uma única chamada atômica:
//  salva a conclusão E soma os globinhos ao mesmo tempo,
//  garantindo que nunca fique um sem o outro (ex: aba fechada
//  no meio do processo).
//
//  ROTA:
//  POST {aluno_id, aula_id, tipo: "texto"|"questoes"}
//
//  RETORNO:
//  {
//    globinhos_ganhos: 10,
//    novo_total: 450,
//    lvl_anterior: 1,
//    lvl_novo: 2,          ← se subiu de nível
//    patente_nova: "EXPLORADOR",
//    conquistas_novas: []  ← badges desbloqueados agora
//  }
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
$sessionAlunoId = requireAuth();   // encerra com 401 se não estiver logado

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Recompensas — espelham as constantes do duvid-db.js e jsquestoes-padrao.js
// RECOMPENSA_QUESTOES = 20 porque o JS usa RECOMPENSA_GERAL (20) ao completar questões
const RECOMPENSA_TEXTO    = 10;
const RECOMPENSA_QUESTOES = 20;

// -----------------------------------------------------------
// Mesma lógica RPG do aluno.php
// Por que copiar? Porque cada API é independente — não importa
// -----------------------------------------------------------
require_once __DIR__ . '/../includes/rpg.php';
require_once __DIR__ . '/../includes/certificados.php';

// -----------------------------------------------------------
// Verifica e desbloqueia conquistas que o aluno ainda não tem.
// Por que fazer isso aqui? Porque é o momento certo — logo
// depois de somar globinhos e salvar conclusão.
// Retorna array com as conquistas recém-desbloqueadas.
// -----------------------------------------------------------
function verificarConquistas(int $alunoId, int $totalGlobinhos, PDO $pdo): array {
    // Conta aulas 100% concluídas (texto + questões)
    $stmt = $pdo->prepare(
        "SELECT COUNT(*) FROM progresso_aulas
         WHERE aluno_id = :id AND concluido_texto = 1 AND concluido_questoes = 1"
    );
    $stmt->execute([':id' => $alunoId]);
    $aulasConcluidas = (int)$stmt->fetchColumn();

    // Conquistas que ele já tem (para não desbloquear duas vezes)
    $stmt = $pdo->prepare(
        "SELECT conquista_id FROM conquistas_alunos WHERE aluno_id = :id"
    );
    $stmt->execute([':id' => $alunoId]);
    $jaTemIds = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Busca todas as conquistas ainda não desbloqueadas
    $todas = $pdo->query("SELECT * FROM conquistas")->fetchAll();
    $novas = [];

    foreach ($todas as $c) {
        if (in_array($c['id'], $jaTemIds)) continue; // já tem, pula

        $desbloqueou = false;

        switch ($c['tipo']) {
            case 'aulas_concluidas':
                $desbloqueou = $aulasConcluidas >= $c['valor_necessario'];
                break;
            case 'globinhos_total':
                $desbloqueou = $totalGlobinhos >= $c['valor_necessario'];
                break;
        }

        if ($desbloqueou) {
            // Registra no banco
            $ins = $pdo->prepare(
                "INSERT IGNORE INTO conquistas_alunos (aluno_id, conquista_id)
                 VALUES (:aluno, :conquista)"
            );
            $ins->execute([':aluno' => $alunoId, ':conquista' => $c['id']]);
            $novas[] = ['nome' => $c['nome'], 'icone' => $c['icone']];
        }
    }

    return $novas;
}

// -----------------------------------------------------------
// ROTA PRINCIPAL
// -----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['erro' => 'Apenas POST é aceito.'], 405);
}

$body    = json_decode(file_get_contents('php://input'), true) ?? [];
$alunoId = (int)($body['aluno_id'] ?? 0);
$aulaId  = (int)($body['aula_id']  ?? 0);
$tipo    = $body['tipo'] ?? '';   // "texto" ou "questoes"
$bonus   = max(0, (int)($body['bonus']    ?? 0));  // globinhos extras (ex: BONUS_VIDAS)

// Validação básica
if (!$alunoId || !$aulaId || !in_array($tipo, ['texto', 'questoes'])) {
    jsonResponse(['erro' => 'aluno_id, aula_id e tipo (texto|questoes) são obrigatórios.'], 400);
}

// Valida que o aluno_id do body bate com a sessão autenticada
if ($alunoId !== $sessionAlunoId) {
    jsonResponse(['erro' => 'Acesso negado.'], 403);
}

$pdo = getDB();

// Verifica se aluno e aula existem
$a = $pdo->prepare("SELECT id, globinhos_total, lvl FROM alunos WHERE id = :id");
$a->execute([':id' => $alunoId]);
$aluno = $a->fetch();
if (!$aluno) jsonResponse(['erro' => 'Aluno não encontrado.'], 404);

$au = $pdo->prepare("SELECT id FROM aulas WHERE id = :id");
$au->execute([':id' => $aulaId]);
if (!$au->fetch()) jsonResponse(['erro' => 'Aula não encontrada.'], 404);

// Verifica se já concluiu este tipo (evita dar globinhos duas vezes)
$check = $pdo->prepare(
    "SELECT concluido_texto, concluido_questoes FROM progresso_aulas
     WHERE aluno_id = :aluno AND aula_id = :aula"
);
$check->execute([':aluno' => $alunoId, ':aula' => $aulaId]);
$progAtual = $check->fetch();

$campoConcluido = "concluido_{$tipo}";      // "concluido_texto" ou "concluido_questoes"
$campoGlobinhos = "globinhos_{$tipo}_ganhos";

// Se já concluiu este tipo, retorna sem somar globinhos de novo
// Por quê? Evita que o aluno recarregue a página e ganhe pontos infinitos.
if ($progAtual && $progAtual[$campoConcluido] == 1) {
    jsonResponse([
        'ja_concluido'  => true,
        'globinhos_ganhos' => 0,
        'novo_total'    => (int)$aluno['globinhos_total'],
        'mensagem'      => 'Esta atividade já foi concluída anteriormente.',
    ]);
}

// Define quantidade de globinhos a ganhar (+ bonus por vidas intactas, se houver)
$baseQuantidade = ($tipo === 'texto') ? RECOMPENSA_TEXTO : RECOMPENSA_QUESTOES;
$quantidade     = $baseQuantidade + $bonus;
$lvlAnterior = (int)$aluno['lvl'];

// -----------------------------------------------------------
// TRANSAÇÃO: tudo junto ou nada
// Por que transação? Se o servidor cair entre somar globinhos
// e salvar a conclusão, o aluno ficaria sem o registro mas com
// os pontos (ou vice-versa). A transação evita isso.
// -----------------------------------------------------------
try {
    $pdo->beginTransaction();

    // 1. Upsert no progresso_aulas
    //    INSERT se nunca acessou esta aula, UPDATE se já tinha registro.
    $upsert = $pdo->prepare("
        INSERT INTO progresso_aulas (aluno_id, aula_id, {$campoConcluido}, {$campoGlobinhos})
        VALUES (:aluno, :aula, 1, :qtd1)
        ON DUPLICATE KEY UPDATE
            {$campoConcluido}   = 1,
            {$campoGlobinhos}   = :qtd2
    ");
    $upsert->execute([':aluno' => $alunoId, ':aula' => $aulaId, ':qtd1' => $quantidade, ':qtd2' => $quantidade]);

    // 2. Soma globinhos atomicamente (UPDATE direto evita race condition
    //    com chamadas paralelas de globinhos.php)
    $pdo->prepare("UPDATE alunos SET globinhos_total = globinhos_total + :q WHERE id = :id")
        ->execute([':q' => $quantidade, ':id' => $alunoId]);

    // Lê o total real pós-update dentro da mesma transação
    $stTotal = $pdo->prepare("SELECT globinhos_total FROM alunos WHERE id = :id");
    $stTotal->execute([':id' => $alunoId]);
    $novoTotal = (int)$stTotal->fetchColumn();
    $rpg       = calcularRPG($novoTotal);

    $pdo->prepare("UPDATE alunos SET lvl = :lvl, patente = :patente WHERE id = :id")
        ->execute([':lvl' => $rpg['lvl'], ':patente' => $rpg['patente'], ':id' => $alunoId]);

    $pdo->commit();

} catch (Exception $e) {
    $pdo->rollBack();
    jsonResponse(['erro' => 'Erro ao salvar progresso.', 'detalhe' => $e->getMessage()], 500);
}

// 4. Verifica conquistas desbloqueadas (fora da transação — não é crítico)
$conquistasNovas = verificarConquistas($alunoId, $novoTotal, $pdo);

// 5. Verifica certificados de bloco/módulo (mesmo motivo — fora da transação)
$certificadosNovos = verificarCertificados($alunoId, $pdo);

// Resposta final para o JS
jsonResponse([
    'ja_concluido'        => false,
    'globinhos_ganhos'    => $quantidade,
    'novo_total'          => $novoTotal,
    'lvl_anterior'        => $lvlAnterior,
    'lvl_novo'            => $rpg['lvl'],
    'patente_nova'        => $rpg['patente'],
    'subiu_nivel'         => $rpg['lvl'] > $lvlAnterior,
    'conquistas_novas'    => $conquistasNovas,
    'certificados_novos'  => $certificadosNovos,
]);
