<?php
// =============================================================
//  api/respostas.php
//  Registra, por aluno×aula, as questões ERRADAS da última
//  tentativa (versão enxuta: 1 linha por aluno×aula).
//  Serve para o professor ver onde a turma erra.
//
//  POST { aluno_id, aula_id, total, acertos, erradas: [{pergunta, correta}] }
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
$sessionAlunoId = requireAuth();   // encerra com 401 se não estiver logado

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }

$pdo = getDB();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['erro' => 'Apenas POST é aceito.'], 405);
}

$body    = json_decode(file_get_contents('php://input'), true) ?? [];
$alunoId = (int)($body['aluno_id'] ?? 0);
$aulaId  = (int)($body['aula_id']  ?? 0);
$total   = max(0, (int)($body['total']   ?? 0));
$acertos = max(0, (int)($body['acertos'] ?? 0));
$erradas = $body['erradas'] ?? [];

if (!$alunoId || !$aulaId) {
    jsonResponse(['erro' => 'aluno_id e aula_id são obrigatórios.'], 400);
}

// Valida que o aluno_id do body bate com a sessão autenticada
if ($alunoId !== $sessionAlunoId) {
    jsonResponse(['erro' => 'Acesso negado.'], 403);
}
if (!is_array($erradas)) $erradas = [];

// Mantém só os campos esperados e limita o tamanho (segurança / volume)
$limpa = [];
foreach ($erradas as $e) {
    if (!is_array($e)) continue;
    $limpa[] = [
        'pergunta' => mb_substr((string)($e['pergunta'] ?? ''), 0, 500),
        'correta'  => mb_substr((string)($e['correta']  ?? ''), 0, 500),
    ];
    if (count($limpa) >= 50) break; // teto defensivo
}
$json = json_encode($limpa, JSON_UNESCAPED_UNICODE);

try {
    // Upsert: uma linha por aluno×aula; cada tentativa sobrescreve e conta +1.
    $st = $pdo->prepare(
        "INSERT INTO respostas_aulas (aluno_id, aula_id, total_questoes, acertos, erradas_json, tentativas)
         VALUES (:a, :au, :t, :ac, :j, 1)
         ON DUPLICATE KEY UPDATE
            total_questoes = :t2,
            acertos        = :ac2,
            erradas_json   = :j2,
            tentativas     = tentativas + 1"
    );
    $st->execute([
        ':a' => $alunoId, ':au' => $aulaId,
        ':t' => $total,   ':ac' => $acertos, ':j' => $json,
        ':t2' => $total,  ':ac2' => $acertos, ':j2' => $json,
    ]);
} catch (Exception $e) {
    jsonResponse(['erro' => 'Erro ao salvar respostas.'], 500);
}

jsonResponse(['ok' => true, 'erradas' => count($limpa)]);
