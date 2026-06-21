<?php
// =============================================================
//  api/respostas-simulado.php
//
//  Salva o resultado de um simulado e concede globinhos de
//  conclusão (acertos × 2) como bônus ao aluno.
//  Cada tentativa gera uma nova linha (histórico completo).
//
//  POST { aluno_id, vestibular, ano, acertos, total }
//  Retorna { ok, globinhos_ganhos, novo_total, lvl_novo, patente_nova }
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/rpg.php';

$sessionAlunoId = requireAuth();   // encerra com 401 se não autenticado

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['erro' => 'Apenas POST é aceito.'], 405);
}

$body      = json_decode(file_get_contents('php://input'), true) ?? [];
$alunoId   = (int)($body['aluno_id']   ?? 0);
$vestibular = strtoupper(trim($body['vestibular'] ?? ''));
$ano       = trim($body['ano']        ?? '');
$acertos   = max(0, (int)($body['acertos'] ?? 0));
$total     = max(1, (int)($body['total']   ?? 1));

// Validações
if (!$alunoId || !$vestibular || !$ano) {
    jsonResponse(['erro' => 'aluno_id, vestibular e ano são obrigatórios.'], 400);
}
if ($alunoId !== $sessionAlunoId) {
    jsonResponse(['erro' => 'Acesso negado.'], 403);
}
// Sanitiza campos de texto
if (!preg_match('/^[A-Z]{2,10}$/', $vestibular)) {
    jsonResponse(['erro' => 'vestibular inválido.'], 400);
}
if (!preg_match('/^\d{4}$/', $ano)) {
    jsonResponse(['erro' => 'ano inválido.'], 400);
}
$acertos = min($acertos, $total); // nunca mais acertos do que questões

// Fórmula de recompensa: acertos × 2 globinhos (bônus de conclusão)
$globinhosGanhos = $acertos * 2;

$pdo = getDB();
$pdo->beginTransaction();

try {
    // 1. Salva o resultado (nova linha por tentativa — histórico completo)
    $pdo->prepare(
        "INSERT INTO respostas_simulados (aluno_id, vestibular, ano, acertos, total, globinhos_ganhos)
         VALUES (:aluno, :vest, :ano, :ac, :tot, :glob)"
    )->execute([
        ':aluno' => $alunoId,
        ':vest'  => $vestibular,
        ':ano'   => $ano,
        ':ac'    => $acertos,
        ':tot'   => $total,
        ':glob'  => $globinhosGanhos,
    ]);

    // 2. Soma globinhos ao aluno (UPDATE atômico — evita race condition)
    $pdo->prepare(
        "UPDATE alunos SET globinhos_total = globinhos_total + :q WHERE id = :id"
    )->execute([':q' => $globinhosGanhos, ':id' => $alunoId]);

    // 3. Lê o novo total dentro da mesma transação
    $st = $pdo->prepare("SELECT globinhos_total, lvl FROM alunos WHERE id = :id");
    $st->execute([':id' => $alunoId]);
    $row = $st->fetch();
    if (!$row) { $pdo->rollBack(); jsonResponse(['erro' => 'Aluno não encontrado.'], 404); }

    $novoTotal = (int)$row['globinhos_total'];
    $rpg       = calcularRPG($novoTotal);

    // 4. Atualiza nível/patente se mudou
    if ($rpg['lvl'] !== (int)$row['lvl']) {
        $pdo->prepare("UPDATE alunos SET lvl = :lvl, patente = :pat WHERE id = :id")
            ->execute([':lvl' => $rpg['lvl'], ':pat' => $rpg['patente'], ':id' => $alunoId]);
    }

    $pdo->commit();

} catch (Exception $e) {
    $pdo->rollBack();
    error_log('[Simulado] Erro ao salvar resultado: ' . $e->getMessage());
    jsonResponse(['erro' => 'Erro ao salvar resultado.'], 500);
}

jsonResponse([
    'ok'              => true,
    'globinhos_ganhos' => $globinhosGanhos,
    'novo_total'      => $novoTotal,
    'lvl_novo'        => $rpg['lvl'],
    'patente_nova'    => $rpg['patente'],
    'subiu_nivel'     => $rpg['lvl'] > (int)$row['lvl'],
]);
