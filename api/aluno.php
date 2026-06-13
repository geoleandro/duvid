<?php
// =============================================================
//  api/aluno.php
//
//  POR QUÊ ESTE ARQUIVO EXISTE?
//  O DuvidDB.js guarda nome e globinhos no localStorage —
//  isso some se o aluno troca de dispositivo ou limpa o cache.
//  Este endpoint substitui essa função: o aluno se identifica
//  pelo nome e o PHP devolve TODO o seu estado salvo no banco.
//
//  ROTAS:
//  GET  ?nome=João         → busca aluno, retorna estado
//  POST {nome, turma?}     → cria aluno se não existir, retorna estado
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');          // permite chamadas do JS local
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../includes/conexao.php';

// -----------------------------------------------------------
// SISTEMA RPG — espelho exato do RANKING_SISTEMA do duvid-db.js
// Por que duplicar aqui? Porque o PHP precisa atualizar lvl e
// patente no banco sempre que os globinhos mudarem. Manter a
// mesma tabela nos dois lugares garante consistência.
// -----------------------------------------------------------
function calcularRPG(int $globinhos): array {
    $ranking = [
        ['lvl'=>1, 'patente'=>'NOVATO',           'min'=>0,     'max'=>1000,  'cor'=>'#9d9d9d'],
        ['lvl'=>2, 'patente'=>'EXPLORADOR',        'min'=>1001,  'max'=>3500,  'cor'=>'#4caf50'],
        ['lvl'=>3, 'patente'=>'CARTÓGRAFO',        'min'=>3501,  'max'=>8000,  'cor'=>'#2196f3'],
        ['lvl'=>4, 'patente'=>'ESTRATEGISTA',      'min'=>8001,  'max'=>15000, 'cor'=>'#9c27b0'],
        ['lvl'=>5, 'patente'=>'GEÓGRAFO SÊNIOR',   'min'=>15001, 'max'=>20000, 'cor'=>'#ff9800'],
        ['lvl'=>6, 'patente'=>'LENDA DA TERRA',    'min'=>20001, 'max'=>99999, 'cor'=>'#f44336'],
    ];

    $info = end($ranking); // padrão: último nível
    foreach ($ranking as $r) {
        if ($globinhos >= $r['min'] && $globinhos <= $r['max']) {
            $info = $r;
            break;
        }
    }

    $progressoBarra = min(max(($globinhos / $info['max']) * 100, 2), 100);

    return [
        'lvl'            => $info['lvl'],
        'patente'        => $info['patente'],
        'cor'            => $info['cor'],
        'proximoLvl'     => $info['max'],
        'progressoBarra' => round($progressoBarra, 1),
    ];
}

// -----------------------------------------------------------
// Monta o objeto de resposta completo do aluno.
// Por que função separada? Para reusar tanto no GET quanto no POST.
// -----------------------------------------------------------
function montarRespostaAluno(array $aluno, PDO $pdo): array {
    $id = $aluno['id'];

    // Progresso por ano (conta aulas com texto + questões concluídos)
    $sql = "SELECT au.ano_escolar,
                   COUNT(*) AS total,
                   SUM(p.concluido_texto = 1 AND p.concluido_questoes = 1) AS concluidas
            FROM progresso_aulas p
            JOIN aulas au ON au.id = p.aula_id
            WHERE p.aluno_id = :id
            GROUP BY au.ano_escolar";
    $prog = $pdo->prepare($sql);
    $prog->execute([':id' => $id]);
    $progressoPorAno = [];
    foreach ($prog->fetchAll() as $row) {
        $progressoPorAno[$row['ano_escolar']] = [
            'concluidas' => (int)$row['concluidas'],
            'total'      => (int)$row['total'],
        ];
    }

    // Conquistas desbloqueadas
    $stmt = $pdo->prepare(
        "SELECT c.nome, c.icone, ca.desbloqueada_em
         FROM conquistas_alunos ca
         JOIN conquistas c ON c.id = ca.conquista_id
         WHERE ca.aluno_id = :id
         ORDER BY ca.desbloqueada_em DESC"
    );
    $stmt->execute([':id' => $id]);
    $conquistas = $stmt->fetchAll();

    $rpg = calcularRPG((int)$aluno['globinhos_total']);

    return [
        'id'             => (int)$id,
        'nome'           => $aluno['nome'],
        'turma'          => $aluno['turma'],
        'globinhos'      => (int)$aluno['globinhos_total'],
        'lvl'            => $rpg['lvl'],
        'patente'        => $rpg['patente'],
        'cor'            => $rpg['cor'],
        'proximoLvl'     => $rpg['proximoLvl'],
        'progressoBarra' => $rpg['progressoBarra'],
        'progressoPorAno'=> $progressoPorAno,
        'conquistas'     => $conquistas,
    ];
}

// -----------------------------------------------------------
// ROTEAMENTO
// -----------------------------------------------------------
$metodo = $_SERVER['REQUEST_METHOD'];
$pdo    = getDB();

// ── GET: busca aluno pelo nome ──────────────────────────────
if ($metodo === 'GET') {
    $nome = trim($_GET['nome'] ?? '');

    if ($nome === '') {
        jsonResponse(['erro' => 'Parâmetro "nome" obrigatório.'], 400);
    }

    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
    $stmt->execute([':nome' => $nome]);
    $aluno = $stmt->fetch();

    if (!$aluno) {
        // Aluno não encontrado — o JS vai chamar POST para criar
        jsonResponse(['encontrado' => false, 'nome' => $nome], 404);
    }

    jsonResponse(['encontrado' => true] + montarRespostaAluno($aluno, $pdo));
}

// ── POST: cria aluno ou retorna o existente ─────────────────
if ($metodo === 'POST') {
    $body              = json_decode(file_get_contents('php://input'), true) ?? [];
    $nome              = trim($body['nome'] ?? '');
    $turma             = $body['turma'] ?? 'livre';
    $globinhosIniciais = max(0, (int)($body['globinhos_iniciais'] ?? 0));

    if ($nome === '') {
        jsonResponse(['erro' => 'Campo "nome" obrigatório.'], 400);
    }

    // Verifica se já existe (evita duplicatas por nome)
    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
    $stmt->execute([':nome' => $nome]);
    $aluno = $stmt->fetch();

    if (!$aluno) {
        $rpg = calcularRPG($globinhosIniciais);
        $ins = $pdo->prepare(
            "INSERT INTO alunos (nome, turma, globinhos_total, lvl, patente)
             VALUES (:nome, :turma, :glob, :lvl, :patente)"
        );
        $ins->execute([
            ':nome'    => $nome,
            ':turma'   => $turma,
            ':glob'    => $globinhosIniciais,
            ':lvl'     => $rpg['lvl'],
            ':patente' => $rpg['patente'],
        ]);
        $novoId = $pdo->lastInsertId();

        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
        $stmt->execute([':id' => $novoId]);
        $aluno = $stmt->fetch();
    }

    jsonResponse(['criado' => true] + montarRespostaAluno($aluno, $pdo));
}

jsonResponse(['erro' => 'Método não suportado.'], 405);
