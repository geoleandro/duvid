<?php
// =============================================================
//  api/turma.php
//
//  ROTAS:
//  POST → cria uma turma nova e devolve o código gerado
//  GET ?codigo=XXX → verifica se um código existe e retorna info
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../includes/conexao.php';

$pdo    = getDB();
$metodo = $_SERVER['REQUEST_METHOD'];

// ── GET: verifica se código existe ──────────────────────────
if ($metodo === 'GET') {
    $codigo = strtoupper(trim($_GET['codigo'] ?? ''));
    if (!$codigo) jsonResponse(['erro' => 'Informe o código.'], 400);

    $st = $pdo->prepare("SELECT id, nome, ano_escolar FROM turmas WHERE codigo = :c AND ativa = 1 LIMIT 1");
    $st->execute([':c' => $codigo]);
    $turma = $st->fetch();

    if (!$turma) jsonResponse(['encontrada' => false], 404);

    jsonResponse([
        'encontrada'  => true,
        'id'          => (int)$turma['id'],
        'nome'        => $turma['nome'],
        'codigo'      => $codigo,
        'ano_escolar' => (int)$turma['ano_escolar'],
    ]);
}

// ── POST: cria turma nova ───────────────────────────────────
if ($metodo === 'POST') {
    $body       = json_decode(file_get_contents('php://input'), true) ?? [];
    $nome       = trim($body['nome'] ?? '');
    $ano        = (int)($body['ano_escolar'] ?? 0); // 0 = livre/misto

    if (strlen($nome) < 3) {
        jsonResponse(['erro' => 'Nome da turma deve ter pelo menos 3 caracteres.'], 400);
    }

    // Gera código: 3 letras + 3 números, ex: GEO482, MAT731
    // Tenta até 10x para evitar colisão (raro, mas seguro)
    $codigo = null;
    for ($i = 0; $i < 10; $i++) {
        $tentativa = strtoupper(substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ'), 0, 3))
                   . rand(100, 999);
        $chk = $pdo->prepare("SELECT id FROM turmas WHERE codigo = :c LIMIT 1");
        $chk->execute([':c' => $tentativa]);
        if (!$chk->fetch()) { $codigo = $tentativa; break; }
    }

    if (!$codigo) {
        jsonResponse(['erro' => 'Não foi possível gerar um código único. Tente novamente.'], 500);
    }

    $ins = $pdo->prepare(
        "INSERT INTO turmas (nome, codigo, ano_escolar, ativa) VALUES (:nome, :codigo, :ano, 1)"
    );
    $ins->execute([':nome' => $nome, ':codigo' => $codigo, ':ano' => $ano]);

    jsonResponse([
        'criada' => true,
        'id'     => (int)$pdo->lastInsertId(),
        'nome'   => $nome,
        'codigo' => $codigo,
        'ano_escolar' => $ano,
    ], 201);
}

jsonResponse(['erro' => 'Método não suportado.'], 405);
