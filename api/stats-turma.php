<?php
// =============================================================
//  api/stats-turma.php
//
//  Retorna estatísticas anônimas de uma turma em uma aula.
//
//  GET ?turma_id=X&aula_id=Y
//      → distribuição de acertos + média da sala
//
//  GET ?turma_id=X          (sem aula_id)
//      → lista de aulas que a turma já fez questões
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/conexao.php';
$pdo = getDB();

$turma_id = (int)($_GET['turma_id'] ?? 0);
$aula_id  = isset($_GET['aula_id']) ? (int)$_GET['aula_id'] : null;

if (!$turma_id) {
    jsonResponse(['erro' => 'Informe turma_id.'], 400);
}

// ── Sem aula_id: lista quais aulas a turma já tem dados ─────
if ($aula_id === null) {
    $st = $pdo->prepare("
        SELECT
            ra.aula_id,
            COUNT(DISTINCT ra.aluno_id) AS total_alunos
        FROM respostas_aulas ra
        INNER JOIN alunos a ON a.id = ra.aluno_id
        WHERE a.turma_id = :tid
        GROUP BY ra.aula_id
        ORDER BY ra.aula_id
    ");
    $st->execute([':tid' => $turma_id]);
    jsonResponse(['aulas' => $st->fetchAll(PDO::FETCH_ASSOC)]);
}

// ── Com aula_id: distribuição de acertos ────────────────────
//
// Por que LEFT JOIN alunos + WHERE turma_id?
// Porque respostas_aulas não guarda turma — ela guarda aluno.
// Chegamos à turma pelo aluno.
//
$st = $pdo->prepare("
    SELECT
        ra.acertos,
        ra.total_questoes
    FROM respostas_aulas ra
    INNER JOIN alunos a ON a.id = ra.aluno_id
    WHERE a.turma_id = :tid
      AND ra.aula_id  = :aid
");
$st->execute([':tid' => $turma_id, ':aid' => $aula_id]);
$rows = $st->fetchAll(PDO::FETCH_ASSOC);

if (empty($rows)) {
    jsonResponse([
        'turma_id'        => $turma_id,
        'aula_id'         => $aula_id,
        'total_alunos'    => 0,
        'total_questoes'  => 0,
        'media_acertos'   => 0,
        'media_pct'       => 0,
        'distribuicao'    => [],
    ]);
}

// Número máximo de questões (pega do primeiro registro — todos devem ser iguais)
$total_q = (int)$rows[0]['total_questoes'];

// Monta array de distribuição: chave = nº de acertos, valor = nº de alunos
$dist = [];
$soma_acertos = 0;

foreach ($rows as $r) {
    $ac = (int)$r['acertos'];
    $soma_acertos += $ac;
    $dist[$ac] = ($dist[$ac] ?? 0) + 1;
}

$total_alunos  = count($rows);
$media_acertos = round($soma_acertos / $total_alunos, 1);
$media_pct     = $total_q > 0 ? round($media_acertos / $total_q * 100, 1) : 0;

// Garante que todos os slots de 0 até total_q existam (mesmo que zerados)
$dist_completa = [];
for ($i = 0; $i <= $total_q; $i++) {
    $dist_completa[] = [
        'acertos'      => $i,
        'qtd_alunos'   => $dist[$i] ?? 0,
    ];
}

jsonResponse([
    'turma_id'       => $turma_id,
    'aula_id'        => $aula_id,
    'total_alunos'   => $total_alunos,
    'total_questoes' => $total_q,
    'media_acertos'  => $media_acertos,
    'media_pct'      => $media_pct,
    'distribuicao'   => $dist_completa,
]);
