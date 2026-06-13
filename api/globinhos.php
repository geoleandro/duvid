<?php
// =============================================================
//  api/globinhos.php
//
//  Persiste adições incrementais de globinhos que não estão
//  ligadas a conclusão de aula (glossário, feedback por questão,
//  bônus avulsos). Chamado por DuvidDB.addGlobinhos().
//
//  POST { aluno_id, quantidade, tipo? }
//  GET  { aluno_id }  → retorna saldo atual
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/rpg.php';

// jsonResponse() já vem de conexao.php — não redeclarar (causava fatal error).
// Conexão obtida pelo singleton getDB() (não existe $pdo global em conexao.php).
$pdo = getDB();

// ── GET: saldo atual ──────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = (int)($_GET['aluno_id'] ?? 0);
    if (!$id) jsonResponse(['erro' => 'aluno_id obrigatorio'], 400);
    $st = $pdo->prepare("SELECT globinhos_total FROM alunos WHERE id = :id");
    $st->execute([':id' => $id]);
    $row = $st->fetch();
    if (!$row) jsonResponse(['erro' => 'aluno nao encontrado'], 404);
    jsonResponse(['novo_total' => (int)$row['globinhos_total']]);
}

// ── POST: adicionar globinhos ─────────────────────────────────
$body = json_decode(file_get_contents('php://input'), true) ?? [];
$alunoId    = (int)($body['aluno_id']  ?? 0);
$quantidade = max(0, (int)($body['quantidade'] ?? 0));
$tipo       = trim($body['tipo'] ?? 'bonus');

if (!$alunoId || $quantidade <= 0) {
    jsonResponse(['erro' => 'aluno_id e quantidade obrigatorios'], 400);
}

$pdo->beginTransaction();
try {
    // UPDATE atômico: lê e soma em uma única operação SQL,
    // evitando race condition quando várias chamadas chegam em paralelo.
    $pdo->prepare(
        "UPDATE alunos SET globinhos_total = globinhos_total + :q WHERE id = :id"
    )->execute([':q' => $quantidade, ':id' => $alunoId]);

    // Lê o total real pós-update dentro da mesma transação
    $st = $pdo->prepare("SELECT globinhos_total, lvl FROM alunos WHERE id = :id");
    $st->execute([':id' => $alunoId]);
    $row = $st->fetch();
    if (!$row) { $pdo->rollBack(); jsonResponse(['erro' => 'aluno nao encontrado'], 404); }

    $novoTotal = (int)$row['globinhos_total'];
    $rpg = calcularRPG($novoTotal);

    // Atualiza lvl/patente se mudou
    if ($rpg['lvl'] !== (int)$row['lvl']) {
        $pdo->prepare("UPDATE alunos SET lvl = :lvl, patente = :pat WHERE id = :id")
            ->execute([':lvl' => $rpg['lvl'], ':pat' => $rpg['patente'], ':id' => $alunoId]);
    }

    $pdo->prepare("INSERT INTO globinhos_log (aluno_id, aula_id, tipo, quantidade) VALUES (:a, NULL, :t, :q)")
        ->execute([':a' => $alunoId, ':t' => $tipo, ':q' => $quantidade]);

    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    jsonResponse(['erro' => 'Erro ao salvar: ' . $e->getMessage()], 500);
}

jsonResponse([
    'novo_total'   => $novoTotal,
    'lvl_novo'     => $rpg['lvl'],
    'patente_nova' => $rpg['patente'],
    'subiu_nivel'  => $rpg['lvl'] > (int)$row['lvl'],
]);
