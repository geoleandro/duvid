<?php
// =============================================================
//  admin/index.php  —  Dashboard principal
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

// ── KPIs ─────────────────────────────────────────────────────
$total_alunos = (int) $pdo->query(
    "SELECT COUNT(*) FROM alunos WHERE tipo = 'aluno'"
)->fetchColumn();

$total_turmas = (int) $pdo->query(
    "SELECT COUNT(*) FROM turmas WHERE ativa = 1"
)->fetchColumn();

$ativos_7d = (int) $pdo->query(
    "SELECT COUNT(DISTINCT a.id) FROM alunos a
      WHERE a.tipo = 'aluno'
        AND (
            a.ultimo_acesso >= DATE_SUB(NOW(), INTERVAL 7 DAY)
            OR a.criado_em  >= DATE_SUB(NOW(), INTERVAL 7 DAY)
            OR EXISTS (SELECT 1 FROM progresso_aulas p  WHERE p.aluno_id = a.id AND p.atualizado_em  >= DATE_SUB(NOW(), INTERVAL 7 DAY))
            OR EXISTS (SELECT 1 FROM respostas_aulas ra WHERE ra.aluno_id = a.id AND ra.atualizado_em >= DATE_SUB(NOW(), INTERVAL 7 DAY))
        )"
)->fetchColumn();

$questoes_hoje = (int) $pdo->query(
    "SELECT COALESCE(SUM(total_questoes), 0)
       FROM respostas_aulas
      WHERE DATE(atualizado_em) = CURDATE()"
)->fetchColumn();

// ── Gráfico: alunos cadastrados por dia (últimos 14 dias) ──
$stmt = $pdo->query(
    "SELECT
         DATE(criado_em) AS dia,
         COUNT(*)        AS total
     FROM alunos
     WHERE tipo = 'aluno'
       AND criado_em >= DATE_SUB(CURDATE(), INTERVAL 13 DAY)
     GROUP BY DATE(criado_em)
     ORDER BY dia ASC"
);
$grafico_rows = $stmt->fetchAll();
// Preenche dias sem cadastro com 0
$grafico_map = [];
foreach ($grafico_rows as $r) $grafico_map[$r['dia']] = (int) $r['total'];
$grafico_labels = [];
$grafico_dados  = [];
for ($i = 13; $i >= 0; $i--) {
    $dia = date('Y-m-d', strtotime("-{$i} days"));
    $grafico_labels[] = date('d/m', strtotime($dia));
    $grafico_dados[]  = $grafico_map[$dia] ?? 0;
}

// ── Top 5 turmas mais ativas (alunos ativos 7d) ──
$top_turmas = $pdo->query(
    "SELECT t.nome, COUNT(a.id) AS ativos
     FROM alunos a
     JOIN turmas t ON t.id = a.turma_id
     WHERE a.tipo = 'aluno' AND a.ultimo_acesso >= DATE_SUB(NOW(), INTERVAL 7 DAY)
     GROUP BY t.id
     ORDER BY ativos DESC
     LIMIT 5"
)->fetchAll();

// ── Últimos 10 alunos cadastrados ──
$novos_alunos = $pdo->query(
    "SELECT a.nome, a.globinhos_total, a.patente, t.nome AS turma, a.criado_em
     FROM alunos a
     LEFT JOIN turmas t ON t.id = a.turma_id
     WHERE a.tipo = 'aluno'
     ORDER BY a.criado_em DESC
     LIMIT 10"
)->fetchAll();

// ── Aulas com pior desempenho (últimos 30 dias) ──
$aulas_ruins = $pdo->query(
    "SELECT au.titulo,
            COUNT(DISTINCT ra.aluno_id) AS respondentes,
            ROUND(AVG(ra.acertos/ra.total_questoes*100),1) AS media_pct
     FROM respostas_aulas ra
     JOIN aulas au ON au.id = ra.aula_id
     WHERE ra.total_questoes > 0
       AND ra.atualizado_em >= DATE_SUB(NOW(), INTERVAL 30 DAY)
     GROUP BY ra.aula_id
     HAVING media_pct < 50
     ORDER BY media_pct ASC
     LIMIT 5"
)->fetchAll();

// ── Layout ──
$PAGINA_ATUAL  = 'index';
$PAGINA_TITULO = 'Dashboard';
require_once __DIR__ . '/_layout.php';
?>

<!-- KPIs -->
<div class="kpi-grid">
  <div class="kpi" style="--kpi-cor:#2196F3">
    <span class="icone-kpi">👥</span>
    <div class="valor"><?= number_format($total_alunos) ?></div>
    <div class="label">Alunos cadastrados</div>
  </div>
  <div class="kpi" style="--kpi-cor:#4CAF50">
    <span class="icone-kpi">🏫</span>
    <div class="valor"><?= number_format($total_turmas) ?></div>
    <div class="label">Turmas ativas</div>
  </div>
  <div class="kpi" style="--kpi-cor:#FF9800">
    <span class="icone-kpi">⚡</span>
    <div class="valor"><?= number_format($ativos_7d) ?></div>
    <div class="label">Alunos ativos (7 dias)</div>
  </div>
  <div class="kpi" style="--kpi-cor:#9C27B0">
    <span class="icone-kpi">📝</span>
    <div class="valor"><?= number_format($questoes_hoje) ?></div>
    <div class="label">Questões respondidas hoje</div>
  </div>
</div>

<!-- Gráfico + Top turmas -->
<div style="display:grid;grid-template-columns:2fr 1fr;gap:1rem;margin-bottom:1.2rem;">
  <div class="card">
    <h3>Novos alunos (últimos 14 dias)</h3>
    <canvas id="graficoAlunos" height="220"></canvas>
  </div>

  <div class="card">
    <h3>Top turmas (7 dias)</h3>
    <?php if (empty($top_turmas)): ?>
      <p style="color:var(--texto2);font-size:.83rem;">Sem dados de acesso recente.</p>
    <?php else: ?>
      <?php foreach ($top_turmas as $t): ?>
        <div style="margin-bottom:.8rem;">
          <div style="display:flex;justify-content:space-between;font-size:.82rem;margin-bottom:.25rem;">
            <span><?= htmlspecialchars($t['nome']) ?></span>
            <span style="color:var(--azul);font-weight:700;"><?= $t['ativos'] ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

<!-- Novos alunos + Aulas com baixo desempenho -->
<div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
  <div class="card">
    <h3>Últimos cadastros</h3>
    <div class="tabela-wrap">
      <table class="duvid">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Turma</th>
            <th>Globinhos</th>
            <th>Cadastro</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($novos_alunos as $a): ?>
          <tr>
            <td><?= htmlspecialchars($a['nome']) ?></td>
            <td><span class="badge badge-azul"><?= htmlspecialchars($a['turma'] ?? '—') ?></span></td>
            <td>🪙 <?= number_format($a['globinhos_total']) ?></td>
            <td style="color:var(--texto2);font-size:.78rem;">
              <?= date('d/m/Y H:i', strtotime($a['criado_em'])) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <h3>⚠️ Aulas com baixo desempenho (&lt;50%)</h3>
    <?php if (empty($aulas_ruins)): ?>
      <p style="color:var(--verde);font-size:.83rem;">✅ Nenhuma aula com desempenho crítico nos últimos 30 dias!</p>
    <?php else: ?>
      <div class="tabela-wrap">
        <table class="duvid">
          <thead>
            <tr><th>Aula</th><th>Alunos</th><th>Média</th></tr>
          </thead>
          <tbody>
            <?php foreach ($aulas_ruins as $r): ?>
            <tr>
              <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"
                  title="<?= htmlspecialchars($r['titulo']) ?>">
                <?= htmlspecialchars($r['titulo']) ?>
              </td>
              <td><?= $r['respondentes'] ?></td>
              <td>
                <span class="badge badge-vermelho"><?= $r['media_pct'] ?>%</span>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</div>

<script>
// Gráfico Chart.js
document.addEventListener('DOMContentLoaded', () => {
  const ctx = document.getElementById('graficoAlunos').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($grafico_labels) ?>,
      datasets: [{
        label: 'Novos alunos',
        data: <?= json_encode($grafico_dados) ?>,
        backgroundColor: 'rgba(33,150,243,.45)',
        borderColor: '#2196F3',
        borderWidth: 2,
        borderRadius: 5,
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { mode: 'index' }
      },
      scales: {
        x: {
          ticks: { color: '#8b9ec7', font: { size: 11 } },
          grid:  { color: 'rgba(42,63,95,.4)' }
        },
        y: {
          beginAtZero: true,
          ticks: { color: '#8b9ec7', font: { size: 11 }, precision: 0 },
          grid:  { color: 'rgba(42,63,95,.4)' }
        }
      }
    }
  });
});
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
