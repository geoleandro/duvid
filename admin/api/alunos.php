<?php
// =============================================================
//  admin/api/alunos.php  —  Ações AJAX para gestão de alunos
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

// ── Reset PIN ────────────────────────────────────────────────
if ($acao === 'reset_pin') {
    $id  = (int)($body['id']  ?? 0);
    $pin = trim($body['pin']  ?? '');

    if ($id <= 0) {
        echo json_encode(['erro' => 'ID inválido.']);
        exit;
    }
    if (!preg_match('/^\d{4}$/', $pin)) {
        echo json_encode(['erro' => 'PIN deve ter exatamente 4 dígitos.']);
        exit;
    }

    // Verifica se o aluno existe
    $st = $pdo->prepare("SELECT id, nome FROM alunos WHERE id = :id AND tipo = 'aluno' LIMIT 1");
    $st->execute([':id' => $id]);
    $aluno = $st->fetch();
    if (!$aluno) {
        echo json_encode(['erro' => 'Aluno não encontrado.']);
        exit;
    }

    $hash = password_hash($pin, PASSWORD_DEFAULT);
    $pdo->prepare("UPDATE alunos SET pin_hash = :hash WHERE id = :id")
        ->execute([':hash' => $hash, ':id' => $id]);

    echo json_encode([
        'ok'       => true,
        'mensagem' => "PIN de {$aluno['nome']} resetado com sucesso."
    ]);
    exit;
}

// ── Mover de turma ───────────────────────────────────────────
if ($acao === 'mover_turma') {
    $id       = (int)($body['id']       ?? 0);
    $turma_id = (int)($body['turma_id'] ?? 0);

    if ($id <= 0 || $turma_id <= 0) {
        echo json_encode(['erro' => 'Parâmetros inválidos.']);
        exit;
    }

    // Verifica se a turma existe e está ativa
    $st_t = $pdo->prepare("SELECT id, nome FROM turmas WHERE id = :id AND ativa = 1 LIMIT 1");
    $st_t->execute([':id' => $turma_id]);
    $turma = $st_t->fetch();
    if (!$turma) {
        echo json_encode(['erro' => 'Turma não encontrada ou inativa.']);
        exit;
    }

    // Verifica se o aluno existe
    $st_a = $pdo->prepare("SELECT id, nome FROM alunos WHERE id = :id AND tipo = 'aluno' LIMIT 1");
    $st_a->execute([':id' => $id]);
    $aluno = $st_a->fetch();
    if (!$aluno) {
        echo json_encode(['erro' => 'Aluno não encontrado.']);
        exit;
    }

    $pdo->prepare("UPDATE alunos SET turma_id = :turma WHERE id = :id")
        ->execute([':turma' => $turma_id, ':id' => $id]);

    echo json_encode([
        'ok'       => true,
        'mensagem' => "{$aluno['nome']} movido(a) para {$turma['nome']}."
    ]);
    exit;
}

echo json_encode(['erro' => 'Ação desconhecida.']);
