<?php
// =============================================================
//  api/ranking.php
//
//  POR QUÊ ESTE ARQUIVO EXISTE?
//  Com localStorage, o ranking era impossível — cada aluno só
//  via seus próprios pontos. Com o banco, todos os alunos estão
//  na mesma tabela e podemos ordenar, filtrar por turma e ano.
//
//  ROTAS:
//  GET /api/ranking.php              → ranking geral
//  GET /api/ranking.php?turma=1ano   → só alunos do 1º ano
//  GET /api/ranking.php?top=10       → só os 10 primeiros
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    jsonResponse(['erro' => 'Apenas GET é aceito.'], 405);
}

$pdo   = getDB();
$turma = $_GET['turma'] ?? null;   // código da turma, ex: "GEO-1A-2026"
$top   = min((int)($_GET['top'] ?? 50), 100); // máx 100 por segurança

// -----------------------------------------------------------
// Por que usar a VIEW "ranking" em vez de uma query grande?
// A view já faz os JOINs e cálculos — a query aqui fica simples
// e fácil de manter. Se precisar mudar o cálculo, muda só a view.
// -----------------------------------------------------------
$sql    = "SELECT * FROM ranking";
$params = [];

if ($turma) {
    // Filtra pelo código da turma — útil para o professor ver só sua sala
    $sql .= " WHERE turma_codigo = :turma";
    $params[':turma'] = strtoupper(trim($turma));
}

$sql .= " LIMIT :top";

$stmt = $pdo->prepare($sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->bindValue(':top', $top, PDO::PARAM_INT);
$stmt->execute();

$ranking = $stmt->fetchAll();

// Adiciona posição (#1, #2...) ao resultado
$posicao = 1;
foreach ($ranking as &$r) {
    $r['posicao']            = $posicao++;
    $r['globinhos_total']    = (int)$r['globinhos_total'];
    $r['aulas_100']          = (int)$r['aulas_100'];
    $r['conquistas']         = (int)$r['conquistas'];
    $r['lvl']                = (int)$r['lvl'];
}
unset($r);

jsonResponse([
    'total'   => count($ranking),
    'filtro'  => $turma ?? 'geral',
    'ranking' => $ranking,
]);
