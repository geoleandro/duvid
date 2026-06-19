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
//  GET /api/ranking.php                    → ranking geral
//  GET /api/ranking.php?turma=GEO-1A-2026  → só alunos da turma
//  GET /api/ranking.php?ano_escolar=1      → só alunos do 1º ano
//  GET /api/ranking.php?estado=SP          → ranking do estado
//  GET /api/ranking.php?escola=ETEC+Centro → ranking da escola
//  GET /api/ranking.php?top=10             → só os 10 primeiros
//
//  COLUNAS RETORNADAS (além das antigas):
//  total_questoes_respondidas, total_acertos, media_acertos_pct,
//  estado, cidade, escola
// =============================================================

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    jsonResponse(['erro' => 'Apenas GET é aceito.'], 405);
}

$pdo         = getDB();
$turma       = $_GET['turma']       ?? null;  // código da turma, ex: "GEO-1A-2026"
$ano_escolar = $_GET['ano_escolar'] ?? null;  // 1, 2 ou 3
$estado      = $_GET['estado']      ?? null;  // sigla, ex: "SP"
$escola      = $_GET['escola']      ?? null;  // nome exato ou parcial
$top         = min((int)($_GET['top'] ?? 50), 100);

// -----------------------------------------------------------
// Por que usar a VIEW "ranking" em vez de uma query grande?
// A view já faz os JOINs e cálculos — a query aqui fica simples
// e fácil de manter. Se precisar mudar o cálculo, muda só a view.
// -----------------------------------------------------------
$sql    = "SELECT * FROM ranking";
$wheres = [];
$params = [];

if ($turma) {
    // Filtra pelo código da turma — útil para o professor ver só sua sala
    $wheres[]          = "turma_codigo = :turma";
    $params[':turma']  = strtoupper(trim($turma));
}

if ($ano_escolar && in_array((int)$ano_escolar, [1, 2, 3])) {
    $wheres[]           = "turma_codigo LIKE :ano_esc";
    $params[':ano_esc'] = (int)$ano_escolar . '%';
}

if ($estado) {
    // Ranking por estado — filtra pela sigla (ex: SP, RJ)
    $wheres[]            = "estado = :estado";
    $params[':estado']   = strtoupper(trim($estado));
}

if ($escola) {
    // Busca parcial — "ETEC" encontra "ETEC Centro" e "ETEC Sul"
    $wheres[]            = "escola LIKE :escola";
    $params[':escola']   = '%' . trim($escola) . '%';
}

if ($wheres) {
    $sql .= " WHERE " . implode(" AND ", $wheres);
}

$sql .= " LIMIT :top";

$stmt = $pdo->prepare($sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->bindValue(':top', $top, PDO::PARAM_INT);
$stmt->execute();

$ranking = $stmt->fetchAll();

// Adiciona posição e normaliza tipos
$posicao = 1;
foreach ($ranking as &$r) {
    $r['posicao']                     = $posicao++;
    $r['globinhos_total']             = (int)$r['globinhos_total'];
    $r['aulas_100']                   = (int)$r['aulas_100'];
    $r['conquistas']                  = (int)$r['conquistas'];
    $r['lvl']                         = (int)$r['lvl'];
    $r['total_questoes_respondidas']  = (int)$r['total_questoes_respondidas'];
    $r['total_acertos']               = (int)$r['total_acertos'];
    $r['media_acertos_pct']           = $r['media_acertos_pct'] !== null
                                        ? (float)$r['media_acertos_pct']
                                        : null;
}
unset($r);

$filtro_desc = 'geral';
if ($turma)       $filtro_desc = "turma:{$turma}";
if ($ano_escolar) $filtro_desc = "ano:{$ano_escolar}";
if ($estado)      $filtro_desc = "estado:{$estado}";
if ($escola)      $filtro_desc = "escola:{$escola}";

jsonResponse([
    'total'   => count($ranking),
    'filtro'  => $filtro_desc,
    'ranking' => $ranking,
]);
