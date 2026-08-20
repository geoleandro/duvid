<?php
// =============================================================
//  api/aluno.php  —  v2.3  (session auth)
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/rate_limit.php';
startSecureSession();   // deve vir antes de qualquer header()

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH');
header('Access-Control-Allow-Headers: Content-Type');

function calcularRPG(int $globinhos): array {
    $ranking = [
        ['lvl'=>1, 'patente'=>'NOVATO',          'min'=>0,     'max'=>1499,  'cor'=>'#9d9d9d'],
        ['lvl'=>2, 'patente'=>'EXPLORADOR',       'min'=>1500,  'max'=>3499,  'cor'=>'#4caf50'],
        ['lvl'=>3, 'patente'=>'CARTÓGRAFO',       'min'=>3500,  'max'=>6499,  'cor'=>'#2196f3'],
        ['lvl'=>4, 'patente'=>'ESTRATEGISTA',     'min'=>6500,  'max'=>9499,  'cor'=>'#9c27b0'],
        ['lvl'=>5, 'patente'=>'GEÓGRAFO SÊNIOR',  'min'=>9500,  'max'=>12999, 'cor'=>'#ff9800'],
        ['lvl'=>6, 'patente'=>'LENDA DA TERRA',   'min'=>13000, 'max'=>99999, 'cor'=>'#f44336'],
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

    // Certificados (blocos de revisão + módulo completo)
    $stmtCert = $pdo->prepare(
        "SELECT tipo, referencia, conquistado_em FROM certificados_alunos WHERE aluno_id = :id"
    );
    $stmtCert->execute([':id' => $id]);
    $certificados = [];
    foreach ($stmtCert->fetchAll() as $row) {
        $certificados[] = [
            'tipo'       => $row['tipo'],
            'referencia' => (int)$row['referencia'],
        ];
    }

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
        'estado'         => $aluno['estado']  ?? null,
        'cidade'         => $aluno['cidade']  ?? null,
        'escola'         => $aluno['escola']  ?? null,
        'globinhos'      => (int)$aluno['globinhos_total'],
        'lvl'            => $rpg['lvl'],
        'patente'        => $rpg['patente'],
        'cor'            => $rpg['cor'],
        'proximoLvl'     => $rpg['proximoLvl'],
        'progressoBarra' => $rpg['progressoBarra'],
        'progressoPorAno'=> $progressoPorAno,
        'conquistas'     => $conquistas,
        'certificados'   => $certificados,
        'conclusoes'     => $conclusoes,
        'criado_em'      => $aluno['criado_em'] ?? null,
    ];
}

// -----------------------------------------------------------
// ROTEAMENTO
// -----------------------------------------------------------
$metodo = $_SERVER['REQUEST_METHOD'];
$pdo    = getDB();

// Lê a sessão de forma passiva (sem criar nova se não existir)
if (session_status() === PHP_SESSION_NONE) {
    // só inicia se já existe um cookie de sessão válido
    if (!empty($_COOKIE[session_name()])) {
        startSecureSession();
    }
}

// GET: busca por id (sync rapido) ou nome (fallback)
if ($metodo === 'GET') {
    $id   = (int)($_GET['id']   ?? 0);
    $nome = trim($_GET['nome']  ?? '');

    // Indica ao front se há uma sessão PHP ativa para este aluno
    $sessaoAtiva = !empty($_SESSION['aluno_id']) && (int)$_SESSION['aluno_id'] === $id;

    if ($id > 0) {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $id]);
        $aluno = $stmt->fetch();
        if (!$aluno) jsonResponse(['encontrado' => false], 404);
        // Atualiza ultimo_acesso se for o próprio aluno autenticado
        if ($sessaoAtiva) {
            $pdo->prepare("UPDATE alunos SET ultimo_acesso = NOW() WHERE id = :id")
                ->execute([':id' => $id]);
        }
        jsonResponse(['encontrado' => true, 'sessao_ativa' => $sessaoAtiva] + montarRespostaAluno($aluno, $pdo));
    }

    if ($nome !== '') {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
        $stmt->execute([':nome' => $nome]);
        $aluno = $stmt->fetch();
        if (!$aluno) jsonResponse(['encontrado' => false, 'nome' => $nome], 404);
        $sessaoAtivaNome = !empty($_SESSION['aluno_id']) && (int)$_SESSION['aluno_id'] === (int)$aluno['id'];
        jsonResponse(['encontrado' => true, 'sessao_ativa' => $sessaoAtivaNome] + montarRespostaAluno($aluno, $pdo));
    }

    jsonResponse(['erro' => 'Informe id ou nome.'], 400);
}

// POST: cadastro ou login com nome + email + PIN
if ($metodo === 'POST') {
    $body  = json_decode(file_get_contents('php://input'), true) ?? [];

    // Sub-ação: entrar em turma (aluno já logado digita o código)
    if (($body['acao'] ?? '') === 'entrar_turma') {
        $sessionAlunoId = requireAuth();
        $codigo  = strtoupper(trim($body['turma_codigo'] ?? ''));
        $turmaId = resolverTurmaId($codigo, $pdo);
        if ($turmaId === null) {
            jsonResponse(['erro' => 'Código de turma inválido ou inativo.'], 400);
        }
        $pdo->prepare("UPDATE alunos SET turma_id = :t WHERE id = :id")
            ->execute([':t' => $turmaId, ':id' => $sessionAlunoId]);
        $st = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
        $st->execute([':id' => $sessionAlunoId]);
        jsonResponse(montarRespostaAluno($st->fetch(), $pdo));
    }

    // Sub-ação: editar perfil (rota alternativa ao PATCH, para hospedagens que bloqueiam PATCH)
    if (($body['acao'] ?? '') === 'editar_perfil') {
        $sessionAlunoId = requireAuth();

        $id  = (int)($body['id']  ?? 0);
        $pin = trim($body['pin']  ?? '');

        if (!$id || $pin === '') {
            jsonResponse(['erro' => 'id e pin sao obrigatorios.'], 400);
        }
        if ($id !== $sessionAlunoId) {
            jsonResponse(['erro' => 'Acesso negado.'], 403);
        }

        $st = $pdo->prepare("SELECT * FROM alunos WHERE id = :id LIMIT 1");
        $st->execute([':id' => $id]);
        $aluno = $st->fetch();
        if (!$aluno) jsonResponse(['erro' => 'Aluno nao encontrado.'], 404);

        if (!$aluno['pin_hash'] || !password_verify($pin, $aluno['pin_hash'])) {
            jsonResponse(['erro' => 'PIN incorreto.', 'campo' => 'pin'], 401);
        }

        $novoNome   = isset($body['nome'])         ? trim($body['nome'])                      : null;
        $novoEst    = isset($body['estado'])       ? strtoupper(trim($body['estado']))        : null;
        $novaCid    = isset($body['cidade'])       ? trim($body['cidade'])                    : null;
        $novaEsc    = isset($body['escola'])       ? trim($body['escola'])                    : null;
        $novoTurma  = isset($body['codigo_turma']) ? trim($body['codigo_turma'])              : null;

        if ($novoNome !== null) {
            if (strlen($novoNome) < 2)
                jsonResponse(['erro' => 'Nome deve ter pelo menos 2 caracteres.', 'campo' => 'nome'], 400);
            $chk = $pdo->prepare("SELECT id FROM alunos WHERE nome = :nome AND id != :id LIMIT 1");
            $chk->execute([':nome' => $novoNome, ':id' => $id]);
            if ($chk->fetch())
                jsonResponse(['erro' => 'Este nome ja esta em uso por outro aluno.', 'campo' => 'nome'], 409);
        }

        // Resolve código de turma se foi enviado
        $novoTurmaId = null;
        if ($novoTurma !== null) {
            $novoTurmaId = resolverTurmaId($novoTurma, $pdo);
            if ($novoTurmaId === null)
                jsonResponse(['erro' => 'Código de turma inválido.', 'campo' => 'codigo_turma'], 400);
        }

        $sets = []; $params = [':id' => $id];
        if ($novoNome    !== null) { $sets[] = 'nome = :nome';       $params[':nome']     = $novoNome; }
        if ($novoEst     !== null) { $sets[] = 'estado = :estado';   $params[':estado']   = $novoEst ?: null; }
        if ($novaCid     !== null) { $sets[] = 'cidade = :cidade';   $params[':cidade']   = $novaCid ?: null; }
        if ($novaEsc     !== null) { $sets[] = 'escola = :escola';   $params[':escola']   = $novaEsc ?: null; }
        if ($novoTurmaId !== null) { $sets[] = 'turma_id = :turma';  $params[':turma']    = $novoTurmaId; }

        if (empty($sets)) jsonResponse(['erro' => 'Nenhum campo para atualizar.'], 400);

        $pdo->prepare("UPDATE alunos SET " . implode(', ', $sets) . " WHERE id = :id")->execute($params);

        $st = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
        $st->execute([':id' => $id]);
        jsonResponse(['atualizado' => true] + montarRespostaAluno($st->fetch(), $pdo));
    }

    // Rate limit: bloqueia IPs que erraram o PIN muitas vezes
    $clientIp = getClientIp();
    checarRateLimit($clientIp, $pdo);

    $nome   = trim($body['nome']   ?? '');
    $email  = trim($body['email']  ?? '');
    $pin    = trim($body['pin']    ?? '');
    $codigoTurma = trim($body['codigo_turma'] ?? '');
    $globinhosIniciais = max(0, (int)($body['globinhos_iniciais'] ?? 0));
    // Campos opcionais de localização (ranking nacional)
    $estado = strtoupper(trim($body['estado'] ?? ''));
    $cidade = trim($body['cidade'] ?? '');
    $escola = trim($body['escola'] ?? '');

    if ($nome === '') jsonResponse(['erro' => 'Nome e obrigatorio.'], 400);
    if ($pin === '')  jsonResponse(['erro' => 'PIN e obrigatorio.', 'campo' => 'pin'], 400);
    if (!preg_match('/^\d{4}$/', $pin))
        jsonResponse(['erro' => 'PIN deve ter exatamente 4 digitos.', 'campo' => 'pin'], 400);

    // Nome ja existe?
    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE nome = :nome LIMIT 1");
    $stmt->execute([':nome' => $nome]);
    $aluno = $stmt->fetch();

    if ($aluno) {
        if ($aluno['pin_hash']) {
            // Conta já tem PIN: login — só nome + PIN, sem precisar de e-mail
            if (!password_verify($pin, $aluno['pin_hash'])) {
                registrarFalha($clientIp, $pdo);  // contabiliza tentativa errada
                jsonResponse([
                    'erro'     => 'PIN incorreto. Tente novamente.',
                    'bloqueado'=> true,
                ], 401);
            }
        } else {
            // Conta antiga SEM PIN: para reivindicar precisa de e-mail
            if ($email === '') jsonResponse(['erro' => 'E-mail e obrigatorio para ativar esta conta.', 'campo' => 'email'], 400);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                jsonResponse(['erro' => 'E-mail invalido.', 'campo' => 'email'], 400);
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
        // Login bem-sucedido — zera contador e grava sessão
        limparFalhas($clientIp, $pdo);
        session_regenerate_id(true);
        $_SESSION['aluno_id'] = (int)$aluno['id'];
        jsonResponse(['criado' => false] + montarRespostaAluno($aluno, $pdo));
    }

    // Novo aluno: e-mail obrigatório para criar conta
    if ($email === '') jsonResponse(['erro' => 'E-mail e obrigatorio.', 'campo' => 'email'], 400);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        jsonResponse(['erro' => 'E-mail invalido.', 'campo' => 'email'], 400);

    // Resolve a turma
    $turmaId = resolverTurmaId($codigoTurma, $pdo);
    if ($turmaId === null)
        jsonResponse(['erro' => 'Código de turma inválido.', 'campo' => 'codigo_turma'], 400);

    // Novo aluno: cria conta
    $pinHash = $pin !== '' ? password_hash($pin, PASSWORD_DEFAULT) : null;
    $rpg     = calcularRPG($globinhosIniciais);

    try {
        $ins = $pdo->prepare(
            "INSERT INTO alunos (nome, email, pin_hash, turma_id, globinhos_total, lvl, patente, estado, cidade, escola)
             VALUES (:nome, :email, :pin, :turma, :glob, :lvl, :patente, :estado, :cidade, :escola)"
        );
        $ins->execute([
            ':nome'    => $nome,
            ':email'   => $email,
            ':pin'     => $pinHash,
            ':turma'   => $turmaId,
            ':glob'    => $globinhosIniciais,
            ':lvl'     => $rpg['lvl'],
            ':patente' => $rpg['patente'],
            ':estado'  => $estado ?: null,
            ':cidade'  => $cidade ?: null,
            ':escola'  => $escola ?: null,
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

    // Novo cadastro bem-sucedido — zera contador e grava sessão
    limparFalhas($clientIp, $pdo);
    session_regenerate_id(true);
    $_SESSION['aluno_id'] = (int)$aluno['id'];
    jsonResponse(['criado' => true] + montarRespostaAluno($aluno, $pdo));
}

// PATCH: editar perfil (nome, estado, cidade, escola)
// Requer: sessão válida + pin para confirmar. Nome novo deve ser único.
if ($metodo === 'PATCH') {
    $sessionAlunoId = requireAuth();

    $body  = json_decode(file_get_contents('php://input'), true) ?? [];
    $id    = (int)($body['id']  ?? 0);
    $pin   = trim($body['pin']  ?? '');

    if (!$id || $pin === '') {
        jsonResponse(['erro' => 'id e pin sao obrigatorios.'], 400);
    }

    // Garante que o aluno só edita o próprio perfil
    if ($id !== $sessionAlunoId) {
        jsonResponse(['erro' => 'Acesso negado.'], 403);
    }

    // Carrega o aluno atual
    $st = $pdo->prepare("SELECT * FROM alunos WHERE id = :id LIMIT 1");
    $st->execute([':id' => $id]);
    $aluno = $st->fetch();

    if (!$aluno) jsonResponse(['erro' => 'Aluno nao encontrado.'], 404);

    // Valida PIN — o aluno precisa se autenticar antes de alterar dados
    if (!$aluno['pin_hash'] || !password_verify($pin, $aluno['pin_hash'])) {
        jsonResponse(['erro' => 'PIN incorreto.', 'campo' => 'pin'], 401);
    }

    // Campos editáveis (só atualiza o que foi enviado)
    $novoNome  = isset($body['nome'])   ? trim($body['nome'])           : null;
    $novoEst   = isset($body['estado']) ? strtoupper(trim($body['estado'])) : null;
    $novaCid   = isset($body['cidade']) ? trim($body['cidade'])         : null;
    $novaEsc   = isset($body['escola']) ? trim($body['escola'])         : null;

    // Valida nome novo se foi enviado
    if ($novoNome !== null) {
        if (strlen($novoNome) < 2) {
            jsonResponse(['erro' => 'Nome deve ter pelo menos 2 caracteres.', 'campo' => 'nome'], 400);
        }
        // Verifica unicidade (ignora o próprio id)
        $chk = $pdo->prepare("SELECT id FROM alunos WHERE nome = :nome AND id != :id LIMIT 1");
        $chk->execute([':nome' => $novoNome, ':id' => $id]);
        if ($chk->fetch()) {
            jsonResponse(['erro' => 'Este nome ja esta em uso por outro aluno.', 'campo' => 'nome'], 409);
        }
    }

    // Monta SET dinâmico — só atualiza campos enviados
    $sets   = [];
    $params = [':id' => $id];

    if ($novoNome !== null) { $sets[] = 'nome = :nome';     $params[':nome']   = $novoNome; }
    if ($novoEst  !== null) { $sets[] = 'estado = :estado'; $params[':estado'] = $novoEst ?: null; }
    if ($novaCid  !== null) { $sets[] = 'cidade = :cidade'; $params[':cidade'] = $novaCid ?: null; }
    if ($novaEsc  !== null) { $sets[] = 'escola = :escola'; $params[':escola'] = $novaEsc ?: null; }

    if (empty($sets)) {
        jsonResponse(['erro' => 'Nenhum campo para atualizar.'], 400);
    }

    $pdo->prepare("UPDATE alunos SET " . implode(', ', $sets) . " WHERE id = :id")
        ->execute($params);

    // Retorna aluno atualizado
    $st = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
    $st->execute([':id' => $id]);
    $aluno = $st->fetch();

    jsonResponse(['atualizado' => true] + montarRespostaAluno($aluno, $pdo));
}

jsonResponse(['erro' => 'Metodo nao suportado.'], 405);
