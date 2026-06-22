<?php
// =============================================================
//  api/mural.php — Salva contribuição do aluno via Modal Mural
//  POST { tipo, conteudo }
//  Requer sessão de aluno autenticado.
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';

$alunoId = requireAuth();

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['erro' => 'Método não permitido.'], 405);
}

$body    = json_decode(file_get_contents('php://input'), true);
$tipo    = trim($body['tipo']     ?? '');
$conteudo = trim($body['conteudo'] ?? '');

$tiposValidos = ['questao', 'texto', 'pixelart', 'sugestao'];

if (!in_array($tipo, $tiposValidos)) {
    jsonResponse(['erro' => 'Tipo inválido.'], 400);
}
if (strlen($conteudo) < 5) {
    jsonResponse(['erro' => 'Conteúdo muito curto.'], 400);
}

$conteudo = mb_substr($conteudo, 0, 2000);

// Evita spam: máx 5 contribuições por aluno nas últimas 24h
$pdo = getDB();
$spam = $pdo->prepare(
    "SELECT COUNT(*) FROM mural
     WHERE aluno_id = :a AND criado_em > NOW() - INTERVAL 24 HOUR"
);
$spam->execute([':a' => $alunoId]);
if ((int)$spam->fetchColumn() >= 5) {
    jsonResponse(['erro' => 'Limite de contribuições diárias atingido.'], 429);
}

$st = $pdo->prepare(
    "INSERT INTO mural (aluno_id, tipo, conteudo)
     VALUES (:a, :t, :c)"
);
$st->execute([
    ':a' => $alunoId,
    ':t' => $tipo,
    ':c' => $conteudo,
]);

jsonResponse(['ok' => true]);
