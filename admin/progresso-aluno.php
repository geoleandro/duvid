<?php
// =============================================================
//  admin/progresso-aluno.php  —  Progresso por Aluno
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/certificados.php';

$pdo = getDB();

$busca        = trim($_GET['q']     ?? '');
$filtro_turma = (int)($_GET['turma'] ?? 0);
$filtro_ano   = (int)($_GET['ano']   ?? 0);

// Turmas para o filtro
$turmas = $pdo->query("SELECT id, nome, codigo FROM turmas ORDER BY nome")->fetchAll();

// Total de aulas por ano (para a barra de progresso)
$total_aulas_por_ano = [];
$rows = $pdo->query("SELECT ano_escolar, COUNT(*) AS total FROM aulas GROUP BY ano_escolar")->fetchAll();
foreach ($rows as $r) $total_aulas_por_ano[$r['ano_escolar']] = (int)$r['total'];
$total_aulas_geral = array_sum($total_aulas_por_ano);

// Alunos com resumo de progresso
$where  = ["a.tipo = 'aluno'"];
$params = [];
if ($busca) {
    $where[] = "(a.nome LIKE :busca1 OR a.email LIKE :busca2)";
    $params[':busca1'] = '%' . $busca . '%';
    $params[':busca2'] = '%' . $busca . '%';
}
if ($filtro_turma) {
    $where[] = "a.turma_id = :turma";
    $params[':turma'] = $filtro_turma;
}
$where_sql = implode(' AND ', $where);

$stmt = $pdo->prepare("
    SELECT
        a.id, a.nome, a.email, a.globinhos_total, a.lvl,
        a.escola, a.cidade, a.estado, a.ultimo_acesso,
        t.nome AS turma_nome, t.codigo AS turma_codigo,
        SUM(p.concluido_texto    = 1 AND (:ano1a = 0 OR au.ano_escolar = :ano1b)) AS textos_ok,
        SUM(p.concluido_questoes = 1 AND (:ano2a = 0 OR au.ano_escolar = :ano2b)) AS questoes_ok,
        SUM(p.concluido_texto = 1 AND p.concluido_questoes = 1
            AND (:ano3a = 0 OR au.ano_escolar = :ano3b)) AS aulas_100,
        (SELECT COUNT(*) FROM certificados_alunos ca WHERE ca.aluno_id = a.id) AS certificados_count
    FROM alunos a
    LEFT JOIN turmas t          ON t.id = a.turma_id
    LEFT JOIN progresso_aulas p ON p.aluno_id = a.id
    LEFT JOIN aulas au          ON au.id = p.aula_id
    WHERE $where_sql
    GROUP BY a.id
    ORDER BY a.nome ASC
");
$params[':ano1a'] = $filtro_ano;
$params[':ano1b'] = $filtro_ano;
$params[':ano2a'] = $filtro_ano;
$params[':ano2b'] = $filtro_ano;
$params[':ano3a'] = $filtro_ano;
$params[':ano3b'] = $filtro_ano;
$stmt->execute($params);
$alunos = $stmt->fetchAll();

// Se clicou em um aluno, busca detalhe completo
$aluno_detalhe = null;
$progresso_detalhe = [];
$aluno_id_sel = (int)($_GET['aluno'] ?? 0);

if ($aluno_id_sel) {
    $aluno_detalhe = $pdo->prepare("
        SELECT a.*, t.nome AS turma_nome
        FROM alunos a LEFT JOIN turmas t ON t.id = a.turma_id
        WHERE a.id = :id
    ");
    $aluno_detalhe->execute([':id' => $aluno_id_sel]);
    $aluno_detalhe = $aluno_detalhe->fetch();

    // Todas as aulas com progresso desse aluno
    $stmt2 = $pdo->prepare("
        SELECT
            au.id, au.titulo, au.ano_escolar, au.tipo,
            COALESCE(p.concluido_texto,    0) AS concluido_texto,
            COALESCE(p.concluido_questoes, 0) AS concluido_questoes,
            COALESCE(ra.acertos,           0) AS acertos,
            COALESCE(ra.total_questoes,    0) AS total_questoes,
            COALESCE(ra.tentativas,        0) AS tentativas,
            p.atualizado_em
        FROM aulas au
        LEFT JOIN progresso_aulas p  ON p.aula_id  = au.id AND p.aluno_id  = :id
        LEFT JOIN respostas_aulas ra ON ra.aula_id = au.id AND ra.aluno_id = :id2
        " . ($filtro_ano ? "WHERE au.ano_escolar = :ano" : "") . "
        ORDER BY au.ano_escolar ASC, au.id ASC
    ");
    $p2 = [':id' => $aluno_id_sel, ':id2' => $aluno_id_sel];
    if ($filtro_ano) $p2[':ano'] = $filtro_ano;
    $stmt2->execute($p2);
    $progresso_detalhe = $stmt2->fetchAll();

    // Certificados conquistados por esse aluno
    $stmt3 = $pdo->prepare(
        "SELECT tipo, referencia, conquistado_em FROM certificados_alunos
         WHERE aluno_id = :id ORDER BY conquistado_em DESC"
    );
    $stmt3->execute([':id' => $aluno_id_sel]);
    $certificados_detalhe = $stmt3->fetchAll();

    // Resolve título de cada bloco (referencia = id da aula de revisão)
    $blocoIds = array_column(array_filter($certificados_detalhe, fn($c) => $c['tipo'] === 'bloco'), 'referencia');
    $titulosBloco = [];
    if ($blocoIds) {
        $in = implode(',', array_fill(0, count($blocoIds), '?'));
        $st = $pdo->prepare("SELECT id, titulo FROM aulas WHERE id IN ($in)");
        $st->execute($blocoIds);
        foreach ($st->fetchAll() as $row) $titulosBloco[$row['id']] = $row['titulo'];
    }
}

$PAGINA_ATUAL  = 'progresso-aluno';
$PAGINA_TITULO = 'Progresso por Aluno';
require_once __DIR__ . '/_layout.php';
?>

<style>
.filtros { display:flex; gap:.6rem; align-items:center; flex-wrap:wrap; margin-bottom:1.2rem; }
.filtros input[type=text] {
    background:var(--card2); border:1px solid var(--borda); color:var(--texto);
    padding:.35rem .7rem; border-radius:6px; font-size:.85rem; min-width:180px;
}
.filtros select {
    background:var(--card2); border:1px solid var(--borda); color:var(--texto);
    padding:.35rem .7rem; border-radius:6px; font-size:.85rem;
}
.tabela-wrap { overflow-x:auto; }
table.duvid { width:100%; border-collapse:collapse; font-size:.83rem; }
table.duvid th { background:var(--card2); color:var(--texto2); font-weight:600;
    padding:.55rem .8rem; text-align:left; border-bottom:1px solid var(--borda); white-space:nowrap; }
table.duvid td { padding:.55rem .8rem; border-bottom:1px solid var(--borda); vertical-align:middle; }
table.duvid tr:last-child td { border-bottom:none; }
table.duvid tr:hover td { background:rgba(255,255,255,.03); }
.prog-bar { height:6px; background:var(--card2); border-radius:3px; min-width:80px; }
.prog-bar-fill { height:6px; border-radius:3px; background:var(--verde); }
.badge-sm { display:inline-block; padding:2px 8px; border-radius:100px; font-size:.72rem; font-weight:700; }
.badge-ok  { background:rgba(76,175,80,.15); color:#4CAF50; }
.badge-mid { background:rgba(255,152,0,.15);  color:#FF9800; }
.badge-no  { background:rgba(255,255,255,.06); color:var(--texto2); }
.tag-turma { font-size:.72rem; color:var(--texto2); }

/* Detalhe */
.detalhe-header { display:flex; align-items:center; gap:1rem; margin-bottom:1rem; flex-wrap:wrap; }
.detalhe-nome   { font-size:1.1rem; font-weight:700; color:var(--texto); }
.detalhe-sub    { font-size:.8rem; color:var(--texto2); }
.grade-aulas    { display:grid; grid-template-columns: repeat(auto-fill, minmax(240px,1fr)); gap:.6rem; }
.aula-card {
    background:var(--card2); border:1px solid var(--borda); border-radius:8px;
    padding:.6rem .8rem; display:flex; flex-direction:column; gap:.3rem;
}
.aula-card.completa { border-color:#4CAF50; background:rgba(76,175,80,.07); }
.aula-titulo { font-size:.8rem; font-weight:600; color:var(--texto); line-height:1.3; }
.aula-ano    { font-size:.7rem; color:var(--texto2); }
.aula-status { display:flex; gap:.4rem; align-items:center; margin-top:.2rem; }
.st-pill { font-size:.68rem; font-weight:700; padding:2px 7px; border-radius:100px; }
.st-ok   { background:rgba(76,175,80,.2);  color:#4CAF50; }
.st-no   { background:rgba(255,255,255,.07); color:var(--texto2); }
.acerto-txt { font-size:.72rem; color:var(--texto2); margin-left:auto; }
.back-btn { margin-bottom:1rem; }
</style>

<?php if ($aluno_detalhe): ?>
<!-- ══ DETALHE DE UM ALUNO ══════════════════════════════════════ -->
<a href="?<?= http_build_query(array_filter(['q'=>$busca,'turma'=>$filtro_turma,'ano'=>$filtro_ano])) ?>"
   class="btn btn-cinza back-btn">← Voltar à lista</a>

<div class="card" style="margin-bottom:1rem;">
    <div class="detalhe-header">
        <div>
            <div class="detalhe-nome"><?= htmlspecialchars($aluno_detalhe['nome']) ?></div>
            <div class="detalhe-sub">
                <?= htmlspecialchars($aluno_detalhe['email']) ?>
                <?php if ($aluno_detalhe['turma_nome']): ?>
                    · Turma: <b><?= htmlspecialchars($aluno_detalhe['turma_nome']) ?></b>
                <?php endif; ?>
                <?php if ($aluno_detalhe['escola']): ?>
                    · <?= htmlspecialchars($aluno_detalhe['escola']) ?>
                <?php endif; ?>
            </div>
        </div>
        <div style="margin-left:auto; text-align:right;">
            <div style="font-size:1.1rem; font-weight:700; color:var(--verde);">
                <?= number_format($aluno_detalhe['globinhos_total']) ?> globinhos
            </div>
            <div class="detalhe-sub">Nível <?= $aluno_detalhe['lvl'] ?></div>
        </div>
    </div>

    <!-- Filtro de ano dentro do detalhe -->
    <form method="GET" style="display:flex;gap:.5rem;align-items:center;flex-wrap:wrap;">
        <input type="hidden" name="aluno" value="<?= $aluno_id_sel ?>">
        <select name="ano" onchange="this.form.submit()" style="background:var(--card2);border:1px solid var(--borda);color:var(--texto);padding:.3rem .6rem;border-radius:6px;font-size:.82rem;">
            <option value="0">Todos os anos</option>
            <?php foreach ([1,2,3] as $a): ?>
                <option value="<?= $a ?>" <?= $filtro_ano === $a ? 'selected':'' ?>><?= $a ?>º Ano</option>
            <?php endforeach; ?>
        </select>
        <?php if ($filtro_ano): ?>
            <a href="?aluno=<?= $aluno_id_sel ?>" class="btn btn-cinza">✕</a>
        <?php endif; ?>
        <span style="font-size:.8rem;color:var(--texto2);margin-left:auto;">
            <?= count($progresso_detalhe) ?> aula(s)
        </span>
    </form>
</div>

<div class="card" style="margin-bottom:1rem;">
    <div style="font-weight:700;color:var(--texto);font-size:.9rem;margin-bottom:.6rem;">
        🎓 Certificados (<?= count($certificados_detalhe) ?>)
    </div>
    <?php if (!$certificados_detalhe): ?>
        <div style="font-size:.82rem;color:var(--texto2);">Nenhum certificado conquistado ainda.</div>
    <?php else: ?>
        <div style="display:flex;flex-wrap:wrap;gap:.5rem;">
        <?php foreach ($certificados_detalhe as $c):
            $ehModulo = $c['tipo'] === 'modulo';
            $titulo   = $ehModulo
                ? 'Módulo ' . (CERT_NOME_MODULO[(int)$c['referencia']] ?? $c['referencia'])
                : ($titulosBloco[$c['referencia']] ?? ('Bloco #' . $c['referencia']));
            $link = '/paginas/certificado.php?tipo=' . urlencode($c['tipo'])
                  . '&ref=' . urlencode($c['referencia'])
                  . '&aluno_id=' . $aluno_id_sel;
        ?>
            <a href="<?= $link ?>" target="_blank" class="badge-sm badge-ok" style="text-decoration:none;">
                <?= $ehModulo ? '🏅' : '🎓' ?> <?= htmlspecialchars($titulo) ?>
                <span style="opacity:.7;">· <?= (new DateTime($c['conquistado_em']))->format('d/m/Y') ?></span>
            </a>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php
// Agrupar por ano
$por_ano = [];
foreach ($progresso_detalhe as $a) $por_ano[$a['ano_escolar']][] = $a;
foreach ($por_ano as $ano => $lista):
    $total_ano = count($lista);
    $ok_ano    = count(array_filter($lista, fn($a) => $a['concluido_texto'] && $a['concluido_questoes']));
?>
<div style="margin-bottom:1.4rem;">
    <div style="display:flex;align-items:center;gap:.8rem;margin-bottom:.6rem;">
        <span style="font-weight:700;color:var(--texto);font-size:.9rem;">
            <?= ['','🌿 1º Ano — Natureza','🇧🇷 2º Ano — Brasil','🌍 3º Ano — Mundo'][$ano] ?? $ano.'º Ano' ?>
        </span>
        <span class="badge-sm <?= $ok_ano === $total_ano ? 'badge-ok' : ($ok_ano > 0 ? 'badge-mid' : 'badge-no') ?>">
            <?= $ok_ano ?>/<?= $total_ano ?> completas
        </span>
    </div>
    <div class="grade-aulas">
    <?php foreach ($lista as $au):
        $completa = $au['concluido_texto'] && $au['concluido_questoes'];
        $pct = $au['total_questoes'] > 0 ? round($au['acertos'] / $au['total_questoes'] * 100) : null;
    ?>
        <div class="aula-card <?= $completa ? 'completa' : '' ?>">
            <div class="aula-ano">Aula <?= str_pad($au['id'], 2, '0', STR_PAD_LEFT) ?> · <?= $au['tipo'] === 'revisao' ? 'Revisão' : 'Normal' ?></div>
            <div class="aula-titulo"><?= htmlspecialchars($au['titulo']) ?></div>
            <div class="aula-status">
                <span class="st-pill <?= $au['concluido_texto']    ? 'st-ok' : 'st-no' ?>">📖 Texto</span>
                <span class="st-pill <?= $au['concluido_questoes'] ? 'st-ok' : 'st-no' ?>">❓ Questões</span>
                <?php if ($pct !== null): ?>
                    <span class="acerto-txt"><?= $pct ?>% acerto</span>
                <?php endif; ?>
            </div>
            <?php if ($au['tentativas'] > 1): ?>
                <div style="font-size:.68rem;color:var(--texto2);"><?= $au['tentativas'] ?> tentativas</div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php endforeach; ?>

<?php else: ?>
<!-- ══ LISTA DE ALUNOS ══════════════════════════════════════════ -->
<form class="filtros" method="GET">
    <input type="text" name="q" value="<?= htmlspecialchars($busca) ?>"
           placeholder="🔍 Buscar por nome ou e-mail" oninput="debounce(this.form)">

    <select name="turma" onchange="this.form.submit()">
        <option value="0">Todas as turmas</option>
        <?php foreach ($turmas as $t): ?>
            <option value="<?= $t['id'] ?>" <?= $filtro_turma === (int)$t['id'] ? 'selected':'' ?>>
                <?= htmlspecialchars($t['nome']) ?> (<?= $t['codigo'] ?>)
            </option>
        <?php endforeach; ?>
    </select>

    <select name="ano" onchange="this.form.submit()">
        <option value="0">Todos os anos</option>
        <?php foreach ([1,2,3] as $a): ?>
            <option value="<?= $a ?>" <?= $filtro_ano === $a ? 'selected':'' ?>><?= $a ?>º Ano</option>
        <?php endforeach; ?>
    </select>

    <?php if ($busca || $filtro_turma || $filtro_ano): ?>
        <a href="/admin/progresso-aluno.php" class="btn btn-cinza">✕ Limpar</a>
    <?php endif; ?>

    <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
        <?= count($alunos) ?> aluno(s)
    </span>
</form>

<div class="card" style="padding:0;overflow:hidden;">
    <div class="tabela-wrap">
        <table class="duvid">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Turma</th>
                    <th>Textos lidos</th>
                    <th>Questões feitas</th>
                    <th>Aulas 100%</th>
                    <th>🎓 Certificados</th>
                    <th>Progresso</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($alunos as $al):
                $pct = $total_aulas_geral > 0 ? round((int)$al['aulas_100'] / $total_aulas_geral * 100) : 0;
                $cor = $pct >= 70 ? '#4CAF50' : ($pct >= 30 ? '#FF9800' : 'var(--borda)');
            ?>
                <tr>
                    <td>
                        <div style="font-weight:600;color:var(--texto);"><?= htmlspecialchars($al['nome']) ?></div>
                        <div style="font-size:.72rem;color:var(--texto2);"><?= htmlspecialchars($al['email']) ?></div>
                    </td>
                    <td>
                        <?php if ($al['turma_nome']): ?>
                            <span class="tag-turma"><?= htmlspecialchars($al['turma_nome']) ?><br>
                            <b><?= $al['turma_codigo'] ?></b></span>
                        <?php else: ?>
                            <span style="color:var(--texto2);font-size:.75rem;">LIVRE</span>
                        <?php endif; ?>
                    </td>
                    <td><?= (int)$al['textos_ok'] ?> <span style="color:var(--texto2);font-size:.75rem;">/ <?= $total_aulas_geral ?></span></td>
                    <td><?= (int)$al['questoes_ok'] ?> <span style="color:var(--texto2);font-size:.75rem;">/ <?= $total_aulas_geral ?></span></td>
                    <td>
                        <span class="badge-sm <?= (int)$al['aulas_100'] > 0 ? ($pct >= 70 ? 'badge-ok' : 'badge-mid') : 'badge-no' ?>">
                            <?= (int)$al['aulas_100'] ?>
                        </span>
                    </td>
                    <td>
                        <span class="badge-sm <?= (int)$al['certificados_count'] > 0 ? 'badge-ok' : 'badge-no' ?>">
                            🎓 <?= (int)$al['certificados_count'] ?>
                        </span>
                    </td>
                    <td style="min-width:100px;">
                        <div class="prog-bar">
                            <div class="prog-bar-fill" style="width:<?= $pct ?>%;background:<?= $cor ?>;"></div>
                        </div>
                        <div style="font-size:.7rem;color:var(--texto2);margin-top:2px;"><?= $pct ?>%</div>
                    </td>
                    <td>
                        <a href="?aluno=<?= $al['id'] ?>&<?= http_build_query(array_filter(['q'=>$busca,'turma'=>$filtro_turma,'ano'=>$filtro_ano])) ?>"
                           class="btn btn-azul" style="font-size:.75rem;padding:.3rem .7rem;">
                            Ver detalhe →
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (!$alunos): ?>
                <tr><td colspan="8" style="text-align:center;color:var(--texto2);padding:2rem;">Nenhum aluno encontrado.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
let _dt;
function debounce(form) {
    clearTimeout(_dt);
    _dt = setTimeout(() => form.submit(), 500);
}
</script>
<?php endif; ?>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
