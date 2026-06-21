<?php
// =============================================================
//  api/reporte.php — Salva reporte de problema em questão
//  POST { aula_id, questao_num, tipo, mensagem }
//  Requer sessão de aluno autenticado.
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';

$alunoId = requireAuth();

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['erro' => 'Método não permitido.'], 405);
}

$body = json_decode(file_get_contents('php://input'), true);

$aulaId     = trim($body['aula_id']   ?? '');
$questaoNum = (int)($body['questao_num'] ?? 0);
$tipo       = $body['tipo']            ?? 'outro';
$mensagem   = trim($body['mensagem']   ?? '');

$tiposValidos = ['gabarito', 'ortografia', 'confusa', 'imagem', 'outro'];

if (!$aulaId || $questaoNum < 0) {
    jsonResponse(['erro' => 'Dados inválidos.'], 400);
}
if (!in_array($tipo, $tiposValidos)) {
    $tipo = 'outro';
}
$mensagem = mb_substr($mensagem, 0, 500);

// Evita reporte duplicado do mesmo aluno para a mesma questão nas últimas 24h
$pdo = getDB();
$dup = $pdo->prepare(
    "SELECT id FROM reportes
     WHERE aluno_id = :a AND aula_id = :au AND questao_num = :q
       AND criado_em > NOW() - INTERVAL 24 HOUR
     LIMIT 1"
);
$dup->execute([':a' => $alunoId, ':au' => $aulaId, ':q' => $questaoNum]);
if ($dup->fetchColumn()) {
    jsonResponse(['ok' => true, 'aviso' => 'Você já reportou este problema recentemente.']);
}

$st = $pdo->prepare(
    "INSERT INTO reportes (aluno_id, aula_id, questao_num, tipo, mensagem)
     VALUES (:a, :au, :q, :t, :m)"
);
$st->execute([
    ':a'  => $alunoId,
    ':au' => $aulaId,
    ':q'  => $questaoNum,
    ':t'  => $tipo,
    ':m'  => $mensagem ?: null,
]);

jsonResponse(['ok' => true]);
