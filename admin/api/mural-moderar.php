<?php
// =============================================================
//  admin/api/mural-moderar.php  —  Aprovar ou recusar item do mural
//  POST { id: int, acao: "aprovado" | "recusado" }
//  Requer sessão admin.
// =============================================================
require_once __DIR__ . '/../../admin/auth.php';
require_once __DIR__ . '/../../includes/conexao.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não suportado.']);
    exit;
}

$body = json_decode(file_get_contents('php://input'), true) ?? [];
$id   = (int)($body['id']   ?? 0);
$acao = trim($body['acao']  ?? '');

if ($id <= 0) {
    echo json_encode(['erro' => 'ID inválido.']);
    exit;
}

$acoes_validas = ['aprovado', 'recusado'];
if (!in_array($acao, $acoes_validas)) {
    echo json_encode(['erro' => 'Ação inválida. Use "aprovado" ou "recusado".']);
    exit;
}

$pdo = getDB();

// Verifica se o item existe
$st = $pdo->prepare("SELECT id, tipo, status FROM mural WHERE id = :id LIMIT 1");
$st->execute([':id' => $id]);
$item = $st->fetch();

if (!$item) {
    echo json_encode(['erro' => 'Item não encontrado.']);
    exit;
}

// Atualiza status e registra timestamp
// (coluna moderado_em adicionada via database/migrations — ver install_completo.sql)
$pdo->prepare("UPDATE mural SET status = :acao, moderado_em = NOW() WHERE id = :id")
    ->execute([':acao' => $acao, ':id' => $id]);

$label = $acao === 'aprovado' ? 'aprovado ✅' : 'recusado 🚫';
echo json_encode([
    'ok'       => true,
    'mensagem' => "Item #{$id} ({$item['tipo']}) $label.",
    'id'       => $id,
    'acao'     => $acao,
]);
