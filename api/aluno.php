<?php
// =============================================================
//  api/aluno.php  —  v2.2  (com email + PIN + conclusoes no cache)
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../includes/conexao.php';

function calcularRPG(int $globinhos): array {
    $ranking = [
        ['lvl'=>1, 'patente'=>'NOVATO',          'min'=>0,     'max'=>1000,  'cor'=>'#9d9d9d'],
        ['lvl'=>2, 'patente'=>'EXPLORADOR',       'min'=>1001,  'max'=>3500,  'cor'=>'#4caf50'],
        ['lvl'=>3, 'patente'=>'CARTOGRAFO',       'min'=>3501,  'max'=>8000,  'cor'=>'#2196f3'],
        ['lvl'=>4, 'patente'=>'ESTRATEGISTA',     'min'=>8001,  'max'=>15000, 'cor'=>'#9c27b0'],
        ['lvl'=>5, 'patente'=>'GEOGRAFO SENIOR',  'min'=>15001, 'max'=>20000, 'cor'=>'#ff9800'],
        ['lvl'=>6, 'patente'=>'LENDA DA TERRA',   'min'=>20001, 'max'=>99999, 'cor'=>'#f44336'],
    ];
    $info = end($ranking);
    foreach ($ranking as $r) {
        if ($globinhos >= $r['min'] && $globinhos <= $r['max']) { $info = $r; break; }
    }
    $progressoBarra = min(max(($globinhos / max($info['max'], 1)) * 100, 2), 100);
    return [
        'lvl'            => $info['lvl'],
        'patente'        => $info['patente'],
        'cor'            => $info['cor'],
        'proximoLvl'     => $info['max'],
        'progressoBarra' => round($progressoBarra, 1),
    ];
}

// Resolve o código de turma digitado no cadastro para um turma_id.
// - código vazio  → turma "Livre" (LIVRE)
// - código válido → id da turma ativa
// - código inválido → null (o chamador trata como erro)
function resolverTurmaId(string $codigo, PDO $pdo): ?int {
    $codigo = strtoupper(trim($codigo));
    if ($codigo === '') $codigo = 'LIVRE';
    $st = $pdo->prepare("SELECT id FROM turmas WHERE codigo = :c AND ativa = 1 LIMIT 1");
    $st->execute([':c' => $codigo]);
    $id = $st->fetchColumn();
    return $id ? (int)$id : null;
}

function montarRespostaAluno(array $aluno, PDO $pdo): array {
    $id = $aluno['id'];

    // Progresso por ano
    $prog = $pdo->prepare(
        "SELECT au.ano_escolar,
                COUNT(*) AS total,
                SUM(p.concluido_texto = 1 AND p.concluido_questoes = 1) AS concluidas
         FROM progresso_aulas p
         JOIN aulas au ON au.id = p.aula_id
         WHERE p.aluno_id = :id
         GROUP BY au.ano_escolar"
    );
    $prog->execute([':id' => $id]);
    $progressoPorAno = [];
    foreach ($prog->fetchAll() as $row) {
        $progressoPorAno[$row['ano_escolar']] = [
            'concluidas' => (int)$row['concluidas'],
            'total'      => (int)$row['total'],
        ];
    }

    // Conquistas
    $stmt = $pdo->prepare(
        "SELECT c.nome, c.icone, ca.desbloqueada_em
         FROM conquistas_alunos ca
         JOIN conquistas c ON c.id = ca.conquista_id
         WHERE ca.aluno_id = :id
         ORDER BY ca.desbloqueada_em DESC"
    );
    $stmt->execute([':id' => $id]);
    $conquistas = $stmt->fetchAll();

    // Conclusoes individuais por aula (substitui leitura do localStorage)
    $stmtConc = $pdo->prepare(
        "SELECT aula_id, concluido_texto, concluido_questoes
         FROM progresso_aulas WHERE aluno_id = :id"
    );
    $stmtConc->execute([':id' => $id]);
    $conclusoes = [];
    foreach ($stmtConc->fetchAll() as $row) {
        if ($row['concluido_texto'])    $conclusoes[] = ['aula_id' => (int)$row['aula_id'], 'tipo' => 'texto'];
        if ($row['concluido_questoes']) $conclusoes[] = ['aula_id' => (int)$row['aula_id'], 'tipo' => 'questoes'];
    }

    $rpg = calcularRPG((int)$aluno['globinhos_total']);

    // Turma (nome + código) — usada pelo ranking do professor
    $turmaNome = null; $turmaCodigo = null;
    if (!empty($aluno['turma_id'])) {
        $t = $pdo->prepare("SELECT nome, codigo FROM turmas WHERE id = :id");
        $t->execute([':id' => $aluno['turma_id']]);
        if ($row = $t->fetch()) { $turmaNome = $row['nome']; $turmaCodigo = $row['codigo']; }
    }

    return [
        'id'             => (int)$id,
        'nome'           => $aluno['nome'],
        'turma_id'       => isset($aluno['turma_id']) ? (int)$aluno['turma_id'] : null,
        'turma_nome'     => $turmaNome,
        'turma_codigo'   => $turmaCodigo,
        'globinhos'      => (int)$aluno['globinhos_total'],
        'lvl'            => $rpg['lvl'],
        'patente'        => $rpg['patente'],
        'cor'            => $rpg['cor'],
        'proximoLvl'     => $rpg['proximoLvl'],
        'progressoBarra' => $rpg['progressoBarra'],
        'progressoPorAno'=> $progressoPorAno,
        'conquistas'     => $conquistas,
        'conclusoes'     => $conclusoes,
    ];
}

// -----------------------------------------------------------
// ROTEAMENTO
// -----------------------------------------------------------
$metodo = $_SERVER['REQUEST_METHOD'];
$pdo    = getDB();

// GET: busca por id (sync rapido) ou nome (fallback)
if ($metodo === 'GET') {
    $id   = (int)($_GET['id']   ?? 0);
    $nome = trim($_GET['nome']  ?? '');

    if ($id > 0) {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $id]);
        $aluno = $stmt->fetch();
        if (!$aluno) jsonResponse(['encontrado' => false], 404);
        jsonResponse(['encontrado' => true] + montarRespostaAluno($aluno, $pdo));
    }

    if ($nome !== '') {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
        $stmt->execute([':nome' => $nome]);
        $aluno = $stmt->fetch();
        if (!$aluno) jsonResponse(['encontrado' => false, 'nome' => $nome], 404);
        jsonResponse(['encontrado' => true] + montarRespostaAluno($aluno, $pdo));
    }

    jsonResponse(['erro' => 'Informe id ou nome.'], 400);
}

// POST: cadastro ou login com nome + email + PIN
if ($metodo === 'POST') {
    $body  = json_decode(file_get_contents('php://input'), true) ?? [];
    $nome  = trim($body['nome']  ?? '');
    $email = trim($body['email'] ?? '');
    $pin   = trim($body['pin']   ?? '');
    $codigoTurma = trim($body['codigo_turma'] ?? '');
    $globinhosIniciais = max(0, (int)($body['globinhos_iniciais'] ?? 0));

    // E-mail e PIN agora são OBRIGATÓRIOS — não criamos mais contas sem credenciais.
    if ($nome === '')  jsonResponse(['erro' => 'Nome e obrigatorio.'], 400);
    if ($email === '') jsonResponse(['erro' => 'E-mail e obrigatorio.', 'campo' => 'email'], 400);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        jsonResponse(['erro' => 'E-mail invalido.', 'campo' => 'email'], 400);
    if ($pin === '')   jsonResponse(['erro' => 'PIN e obrigatorio.', 'campo' => 'pin'], 400);
    if (!preg_match('/^\d{4}$/', $pin))
        jsonResponse(['erro' => 'PIN deve ter exatamente 4 digitos.', 'campo' => 'pin'], 400);

    // Resolve a turma a partir do código (vazio → Livre; inválido → erro)
    $turmaId = resolverTurmaId($codigoTurma, $pdo);
    if ($turmaId === null)
        jsonResponse(['erro' => 'Código de turma inválido.', 'campo' => 'codigo_turma'], 400);

    // Nome ja existe?
    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
    $stmt->execute([':nome' => $nome]);
    $aluno = $stmt->fetch();

    if ($aluno) {
        if ($aluno['pin_hash']) {
            // Conta já tem PIN: precisa bater para entrar (login)
            if (!password_verify($pin, $aluno['pin_hash'])) {
                jsonResponse([
                    'erro'     => 'Nome ja em uso. Verifique seu PIN ou escolha outro nome.',
                    'bloqueado'=> true,
                ], 401);
            }
        } else {
            // Conta antiga SEM credenciais: reivindica agora gravando email/PIN/turma.
            try {
                $pdo->prepare(
                    "UPDATE alunos SET email = :email, pin_hash = :pin, turma_id = :turma WHERE id = :id"
                )->execute([
                    ':email' => $email,
                    ':pin'   => password_hash($pin, PASSWORD_DEFAULT),
                    ':turma' => $turmaId,
                    ':id'    => $aluno['id'],
                ]);
            } catch (PDOException $e) {
                $msg = $e->getCode() == 23000
                    ? 'Este e-mail ja esta cadastrado em outra conta.'
                    : 'Erro ao salvar credenciais: ' . $e->getMessage();
                jsonResponse(['erro' => $msg, 'bloqueado' => true], 409);
            }
            $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
            $stmt->execute([':id' => $aluno['id']]);
            $aluno = $stmt->fetch();
        }
        jsonResponse(['criado' => false] + montarRespostaAluno($aluno, $pdo));
    }

    // Novo aluno: cria conta
    $pinHash = $pin !== '' ? password_hash($pin, PASSWORD_DEFAULT) : null;
    $rpg     = calcularRPG($globinhosIniciais);

    try {
        $ins = $pdo->prepare(
            "INSERT INTO alunos (nome, email, pin_hash, turma_id, globinhos_total, lvl, patente)
             VALUES (:nome, :email, :pin, :turma, :glob, :lvl, :patente)"
        );
        $ins->execute([
            ':nome'    => $nome,
            ':email'   => $email,
            ':pin'     => $pinHash,
            ':turma'   => $turmaId,
            ':glob'    => $globinhosIniciais,
            ':lvl'     => $rpg['lvl'],
            ':patente' => $rpg['patente'],
        ]);
        $novoId = $pdo->lastInsertId();
    } catch (PDOException $e) {
        $msg = $e->getCode() == 23000
            ? 'Este e-mail ja esta cadastrado. Use outro ou faca login.'
            : 'Erro ao criar conta: ' . $e->getMessage();
        jsonResponse(['erro' => $msg, 'bloqueado' => true], 409);
    }

    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
    $stmt->execute([':id' => $novoId]);
    $aluno = $stmt->fetch();

    jsonResponse(['criado' => true] + montarRespostaAluno($aluno, $pdo));
}

jsonResponse(['erro' => 'Metodo nao suportado.'], 405);
