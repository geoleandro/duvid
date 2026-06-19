<?php
// =============================================================
//  admin/aulas-stats.php  —  Desempenho por Aula
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

$filtro_ano   = (int)($_GET['ano']   ?? 0);
$filtro_tipo  = $_GET['tipo']  ?? '';
$filtro_ruim  = !empty($_GET['ruim']);  // mostrar só as com < 50%

$where_aula  = ['1=1'];
$params_aula = [];
if ($filtro_ano)  { $where_aula[] = "au.ano_escolar = :ano";  $params_aula[':ano']  = $filtro_ano; }
if ($filtro_tipo) { $where_aula[] = "au.tipo = :tipo";         $params_aula[':tipo'] = $filtro_tipo; }

$having = $filtro_ruim ? 'HAVING media_acertos < 50' : '';

$stmt = $pdo->prepare("
    SELECT
        au.id,
        au.titulo,
        au.ano_escolar,
        au.tipo,
        COUNT(DISTINCT p.aluno_id)  AS alunos_com_progresso,
        SUM(p.concluido_texto = 1 AND p.concluido_questoes = 1) AS alunos_100,
        COUNT(DISTINCT ra.id)       AS tentativas,
        COALESCE(ROUND(AVG(
            CASE WHEN ra.total_questoes > 0
                 THEN ra.acertos / ra.total_questoes * 100
                 ELSE NULL END
        ), 1), 0) AS media_acertos,
        COALESCE(SUM(ra.total_questoes), 0) AS total_questoes_resp,
        COALESCE(SUM(ra.acertos), 0)        AS total_acertos
    FROM aulas au
    LEFT JOIN progresso_aulas p  ON p.aula_id  = au.id
    LEFT JOIN respostas_aulas ra ON ra.aula_id = au.id
    WHERE " . implode(' AND ', $where_aula) . "
    GROUP BY au.id
    $having
    ORDER BY au.ano_escolar ASC, au.id ASC
");
$stmt->execute($params_aula);
$aulas = $stmt->fetchAll();

// Métricas globais
$total_alunos_plat = (int) $pdo->query(
    "SELECT COUNT(*) FROM alunos WHERE tipo = 'aluno'"
)->fetchColumn();

$PAGINA_ATUAL  = 'aulas-stats';
$PAGINA_TITULO = 'Desempenho por Aula';
require_once __DIR__ . '/_layout.php';

// Preparar dados para o gráfico de radar (médias por ano escolar)
$medias_ano = [];
foreach ([1,2,3] as $ano) {
    $vals = array_filter($aulas, fn($a) => $a['ano_escolar'] === $ano && $a['tentativas'] > 0);
    if ($vals) {
        $medias_ano[$ano] = round(array_sum(array_column($vals, 'media_acertos')) / count($vals), 1);
    } else {
        $medias_ano[$ano] = 0;
    }
}
?>

<!-- Filtros -->
<form class="filtros" method="GET">
  <select name="ano" onchange="this.form.submit()">
    <option value="0">Todos os anos</option>
    <?php foreach ([1,2,3] as $a): ?>
      <option value="<?= $a ?>" <?= $filtro_ano === $a ? 'selected' : '' ?>>
        <?= $a ?>º Ano
      </option>
    <?php endforeach; ?>
  </select>

  <select name="tipo" onchange="this.form.submit()">
    <option value="">Todos os tipos</option>
    <option value="normal"  <?= $filtro_tipo === 'normal'  ? 'selected' : '' ?>>Normal</option>
    <option value="revisao" <?= $filtro_tipo === 'revisao' ? 'selected' : '' ?>>Revisão</option>
  </select>

  <label style="display:flex;align-items:center;gap:.4rem;color:var(--texto2);font-size:.83rem;cursor:pointer;">
    <input type="checkbox" name="ruim" value="1" <?= $filtro_ruim ? 'checked' : '' ?>
           onchange="this.form.submit()">
    Só críticas (&lt;50%)
  </label>

  <?php if ($filtro_ano || $filtro_tipo || $filtro_ruim): ?>
    <a href="/admin/aulas-stats.php" class="btn btn-cinza">✕ Limpar</a>
  <?php endif; ?>

  <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
    <?= count($aulas) ?> aula(s)
  </span>
</form>

<!-- Sumário por ano -->
<div class="kpi-grid" style="margin-bottom:1.2rem;">
  <?php foreach ([1,2,3] as $ano):
    $aulas_ano = array_filter($aulas, fn($a) => (int)$a['ano_escolar'] === $ano);
    $cnt = count($aulas_ano);
    $med = $cnt ? round(array_sum(array_column($aulas_ano, 'media_acertos')) / $cnt, 1) : 0;
    $cls_cor = $med >= 70 ? '#4CAF50' : ($med >= 50 ? '#FF9800' : '#F44336');
  ?>
  <div class="kpi" style="--kpi-cor:<?= $cls_cor ?>">
    <span class="icone-kpi">📖</span>
    <div class="valor"><?= $med ?>%</div>
    <div class="label"><?= $ano ?>º Ano — média acertos (<?= $cnt ?> aulas)</div>
  </div>
  <?php endforeach; ?>
</div>

<!-- Tabela -->
<div class="card" style="padding:0;overflow:hidden;">
  <div class="tabela-wrap">
    <table class="duvid">
      <thead>
        <tr>
          <th>ID</th>
          <th>Aula</th>
          <th>Ano</th>
          <th>Tipo</th>
          <th>% Conclusão</th>
          <th>Tentativas</th>
          <th>Média Acertos</th>
          <th>Total Q / Acertos</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($aulas as $au):
          $pct_conclusao = $total_alunos_plat > 0
            ? round($au['alunos_100'] / $total_alunos_plat * 100, 1)
            : 0;
          $media = (float)$au['media_acertos'];
          $media_cls = $media >= 70 ? 'bom' : ($media >= 50 ? 'alerta' : 'ruim');
          $media_badge = $media >= 70 ? 'badge-verde' : ($media >= 50 ? 'badge-laranja' : 'badge-vermelho');
        ?>
        <tr <?= $media < 50 && $au['tentativas'] > 0 ? 'style="background:rgba(244,67,54,.05)"' : '' ?>>
          <td style="color:var(--texto2);font-size:.78rem;"><?= $au['id'] ?></td>
          <td>
            <?= $media < 50 && $au['tentativas'] > 0 ? '⚠️ ' : '' ?>
            <?= htmlspecialchars($au['titulo']) ?>
          </td>
          <td><span class="badge badge-azul"><?= $au['ano_escolar'] ?>º</span></td>
          <td>
            <span class="badge <?= $au['tipo'] === 'revisao' ? 'badge-laranja' : 'badge-cinza' ?>">
              <?= $au['tipo'] === 'revisao' ? 'Revisão' : 'Normal' ?>
            </span>
          </td>
          <td>
            <div style="display:flex;align-items:center;gap:.5rem;">
              <div class="prog-bar" style="flex:1;">
                <div class="prog-bar-fill <?= $pct_conclusao >= 70 ? 'bom' : ($pct_conclusao >= 40 ? 'alerta' : 'ruim') ?>"
                     style="width:<?= $pct_conclusao ?>%"></div>
              </div>
              <span style="font-size:.78rem;min-width:38px;text-align:right;"><?= $pct_conclusao ?>%</span>
            </div>
            <span style="font-size:.72rem;color:var(--texto2);">
              <?= $au['alunos_100'] ?> / <?= $total_alunos_plat ?> alunos
            </span>
          </td>
          <td style="text-align:center;">
            <strong><?= $au['tentativas'] ?></strong>
          </td>
          <td>
            <?php if ($au['tentativas'] > 0): ?>
              <span class="badge <?= $media_badge ?>"><?= $media ?>%</span>
            <?php else: ?>
              <span style="color:var(--texto2);font-size:.78rem;">sem dados</span>
            <?php endif; ?>
          </td>
          <td style="font-size:.8rem;color:var(--texto2);">
            <?= number_format($au['total_acertos']) ?> / <?= number_format($au['total_questoes_resp']) ?>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($aulas)): ?>
        <tr>
          <td colspan="8" style="text-align:center;color:var(--texto2);padding:2rem;">
            Nenhuma aula encontrada com os filtros selecionados.
          </td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Legenda -->
<div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:.8rem;font-size:.78rem;color:var(--texto2);">
  <span><span class="badge badge-verde">≥70%</span> Bom</span>
  <span><span class="badge badge-laranja">50–69%</span> Atenção</span>
  <span><span class="badge badge-vermelho">&lt;50%</span> Crítico ⚠️</span>
  <span style="margin-left:auto;">% Conclusão = alunos que terminaram texto + questões / total de alunos na plataforma</span>
</div>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
