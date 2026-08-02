<?php
// =============================================================
//  api/desempenho-aluno.php
//  Retorna as últimas aulas com erros do aluno (para o card
//  "Assuntos mais errados" no painel de questões).
//
//  GET → { aulas: [{aula_id, acertos, total_questoes, erros, tentativas}] }
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
$alunoId = requireAuth();

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$pdo = getDB();

// Últimas 3 aulas com pelo menos 1 erro, ordenadas pela mais recente
$st = $pdo->prepare(
    "SELECT aula_id,
            acertos,
            total_questoes,
            (total_questoes - acertos) AS erros,
            tentativas,
            atualizado_em
     FROM respostas_aulas
     WHERE aluno_id = :id
       AND total_questoes > acertos
     ORDER BY atualizado_em DESC
     LIMIT 3"
);
$st->execute([':id' => $alunoId]);
$rows = $st->fetchAll(PDO::FETCH_ASSOC);

jsonResponse(['aulas' => $rows]);
