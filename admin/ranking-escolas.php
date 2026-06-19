<?php
// =============================================================
//  admin/ranking-escolas.php  —  Ranking Interescolar
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

$filtro_estado = strtoupper(trim($_GET['estado'] ?? ''));

$where  = ["a.escola IS NOT NULL AND a.escola != ''", "a.tipo = 'aluno'"];
$params = [];
if ($filtro_estado) {
    $where[] = "a.estado = :estado";
    $params[':estado'] = $filtro_estado;
}
$where_sql = implode(' AND ', $where);

$escolas = $pdo->prepare("
    SELECT
        a.escola,
        a.cidade,
        a.estado,
        COUNT(DISTINCT a.id)                     AS total_alunos,
        ROUND(AVG(a.globinhos_total), 0)          AS media_globinhos,
        COALESCE(ROUND(AVG(
            CASE WHEN ra_tot.total_q > 0
                 THEN ra_tot.acertos / ra_tot.total_q * 100
                 ELSE NULL END
        ), 1), 0)                                 AS media_acertos_pct,
        MAX(a.globinhos_total)                    AS maior_globinhos,
        SUM(CASE WHEN a.ultimo_acesso >= DATE_SUB(NOW(), INTERVAL 7 DAY) THEN 1 ELSE 0 END)
                                                  AS ativos_7d
    FROM alunos a
    LEFT JOIN (
        SELECT aluno_id,
               SUM(total_questoes) AS total_q,
               SUM(acertos)        AS acertos
        FROM respostas_aulas
        GROUP BY aluno_id
    ) ra_tot ON ra_tot.aluno_id = a.id
    WHERE $where_sql
    GROUP BY a.escola, a.cidade, a.estado
    ORDER BY media_globinhos DESC
");
$escolas->execute($params);
$escolas = $escolas->fetchAll();

// Estados disponíveis
$estados = $pdo->query(
    "SELECT DISTINCT estado FROM alunos
      WHERE estado IS NOT NULL AND escola IS NOT NULL AND tipo = 'aluno'
      ORDER BY estado"
)->fetchAll(PDO::FETCH_COLUMN);

// Dados para gráfico de barras: top 10 escolas
$top10 = array_slice($escolas, 0, 10);
$grafico_nomes    = array_map(fn($e) => mb_strimwidth($e['escola'], 0, 25, '…'), $top10);
$grafico_globinhos = array_map(fn($e) => (int)$e['media_globinhos'], $top10);
$grafico_acertos   = array_map(fn($e) => (float)$e['media_acertos_pct'], $top10);

$PAGINA_ATUAL  = 'ranking-escolas';
$PAGINA_TITULO = 'Ranking Interescolar';
require_once __DIR__ . '/_layout.php';
?>

<!-- Filtro -->
<form class="filtros" method="GET" style="margin-bottom:1.2rem;">
  <select name="estado" onchange="this.form.submit()">
    <option value="">Todos os estados</option>
    <?php foreach ($estados as $uf): ?>
      <option value="<?= $uf ?>" <?= $filtro_estado === $uf ? 'selected' : '' ?>>
        <?= $uf ?>
      </option>
    <?php endforeach; ?>
  </select>
  <?php if ($filtro_estado): ?>
    <a href="/admin/ranking-escolas.php" class="btn btn-cinza">✕ Limpar</a>
  <?php endif; ?>
  <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
    <?= count($escolas) ?> escola(s)
  </span>
</form>

<!-- Gráfico top 10 -->
<?php if (!empty($top10)): ?>
<div class="card" style="margin-bottom:1.2rem;">
  <h3>Top 10 — Média de Globinhos por Escola</h3>
  <canvas id="graficoEscolas" height="160"></canvas>
</div>
<?php endif; ?>

<!-- Tabela -->
<div class="card" style="padding:0;overflow:hidden;">
  <div class="tabela-wrap">
    <table class="duvid">
      <thead>
        <tr>
          <th>#</th>
          <th>Escola</th>
          <th>Cidade / Estado</th>
          <th>Alunos</th>
          <th>Ativos 7d</th>
          <th>Média Globinhos</th>
          <th>Média Acertos</th>
          <th>Maior Score</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($escolas as $i => $e): ?>
        <tr>
          <td style="color:var(--texto2);font-weight:700;">
            <?php if ($i === 0)     echo '🥇';
              elseif ($i === 1)     echo '🥈';
              elseif ($i === 2)     echo '🥉';
              else                  echo '#' . ($i + 1); ?>
          </td>
          <td><strong><?= htmlspecialchars($e['escola']) ?></strong></td>
          <td style="color:var(--texto2);font-size:.82rem;">
            <?= htmlspecialchars($e['cidade'] ?? '—') ?>
            <?= $e['estado'] ? ' · ' . $e['estado'] : '' ?>
          </td>
          <td><strong style="color:var(--azul);"><?= $e['total_alunos'] ?></strong></td>
          <td>
            <?php
              $pct_ativos = $e['total_alunos'] > 0
                ? round($e['ativos_7d'] / $e['total_alunos'] * 100)
                : 0;
            ?>
            <?= $e['ativos_7d'] ?>
            <span style="color:var(--texto2);font-size:.75rem;">(<?= $pct_ativos ?>%)</span>
          </td>
          <td>
            🪙 <strong><?= number_format($e['media_globinhos']) ?></strong>
          </td>
          <td>
            <?php
              $pct = (float)$e['media_acertos_pct'];
              $cls = $pct >= 70 ? 'badge-verde' : ($pct >= 50 ? 'badge-laranja' : 'badge-vermelho');
            ?>
            <span class="badge <?= $cls ?>"><?= $pct ?>%</span>
          </td>
          <td>🪙 <?= number_format($e['maior_globinhos']) ?></td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($escolas)): ?>
        <tr>
          <td colspan="8" style="text-align:center;color:var(--texto2);padding:2rem;">
            Nenhuma escola com dados suficientes.
          </td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php if (!empty($top10)): ?>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const ctx = document.getElementById('graficoEscolas').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($grafico_nomes) ?>,
      datasets: [
        {
          label: 'Média Globinhos',
          data: <?= json_encode($grafico_globinhos) ?>,
          backgroundColor: 'rgba(33,150,243,.5)',
          borderColor: '#2196F3',
          borderWidth: 2,
          borderRadius: 4,
          yAxisID: 'y',
        },
        {
          label: 'Média Acertos (%)',
          data: <?= json_encode($grafico_acertos) ?>,
          type: 'line',
          borderColor: '#4CAF50',
          backgroundColor: 'rgba(76,175,80,.1)',
          borderWidth: 2,
          pointRadius: 4,
          yAxisID: 'y2',
        }
      ]
    },
    options: {
      responsive: true,
      interaction: { mode: 'index' },
      plugins: {
        legend: { labels: { color: '#8b9ec7', font: { size: 11 } } }
      },
      scales: {
        x: {
          ticks: { color: '#8b9ec7', font: { size: 10 } },
          grid:  { color: 'rgba(42,63,95,.4)' }
        },
        y: {
          position: 'left',
          ticks: { color: '#8b9ec7', font: { size: 11 } },
          grid:  { color: 'rgba(42,63,95,.4)' },
          title: { display: true, text: 'Globinhos', color: '#8b9ec7' }
        },
        y2: {
          position: 'right',
          min: 0, max: 100,
          ticks: { color: '#4CAF50', font: { size: 11 }, callback: v => v + '%' },
          grid:  { drawOnChartArea: false },
          title: { display: true, text: 'Acertos %', color: '#4CAF50' }
        }
      }
    }
  });
});
</script>
<?php endif; ?>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
