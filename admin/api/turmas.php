<?php
// =============================================================
//  admin/api/turmas.php  —  Ações AJAX para gestão de turmas
//  Protegido por sessão: só admins chegam aqui.
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
$acao = $body['acao'] ?? '';
$pdo  = getDB();

// ── Toggle ativa/inativa ──────────────────────────────────────
if ($acao === 'toggle') {
    $id    = (int)($body['id']    ?? 0);
    $ativa = (int)($body['ativa'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['erro' => 'ID inválido.']);
        exit;
    }

    $stmt = $pdo->prepare("UPDATE turmas SET ativa = :ativa WHERE id = :id");
    $stmt->execute([':ativa' => $ativa ? 1 : 0, ':id' => $id]);

    $label = $ativa ? 'ativada' : 'desativada';
    echo json_encode(['ok' => true, 'mensagem' => "Turma $label com sucesso."]);
    exit;
}

echo json_encode(['erro' => 'Ação desconhecida.']);
