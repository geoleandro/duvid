<?php
// =============================================================
//  admin/mural.php  —  Moderação do Mural Duvid
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

// Filtros
$filtro_status = $_GET['status'] ?? 'pendente';
$filtro_tipo   = $_GET['tipo']   ?? '';
$pagina        = max(1, (int)($_GET['pg'] ?? 1));
$por_pagina    = 30;
$offset        = ($pagina - 1) * $por_pagina;

$status_validos = ['pendente', 'aprovado', 'recusado'];
if (!in_array($filtro_status, $status_validos)) $filtro_status = 'pendente';

$where  = ['m.status = :status'];
$params = [':status' => $filtro_status];
if ($filtro_tipo) {
    $where[] = 'm.tipo = :tipo';
    $params[':tipo'] = $filtro_tipo;
}
$where_sql = implode(' AND ', $where);

// Contagem total para paginação
$stmt_count = $pdo->prepare("SELECT COUNT(*) FROM mural m WHERE $where_sql");
$stmt_count->execute($params);
$total = (int) $stmt_count->fetchColumn();
$total_paginas = max(1, (int) ceil($total / $por_pagina));

// Listagem
$stmt = $pdo->prepare("
    SELECT m.id, m.tipo, m.conteudo, m.status,
           m.criado_em,
           a.nome AS aluno, a.id AS aluno_id
    FROM mural m
    JOIN alunos a ON a.id = m.aluno_id
    WHERE $where_sql
    ORDER BY m.criado_em DESC
    LIMIT :lim OFFSET :off
");
foreach ($params as $k => $v) $stmt->bindValue($k, $v);
$stmt->bindValue(':lim', $por_pagina, PDO::PARAM_INT);
$stmt->bindValue(':off', $offset,     PDO::PARAM_INT);
$stmt->execute();
$itens = $stmt->fetchAll();

// KPIs por status
$kpis = $pdo->query("
    SELECT status, COUNT(*) AS total FROM mural GROUP BY status
")->fetchAll();
$kpi_map = ['pendente' => 0, 'aprovado' => 0, 'recusado' => 0];
foreach ($kpis as $k) $kpi_map[$k['status']] = (int)$k['total'];

// KPIs por tipo (só pendentes)
$por_tipo = $pdo->query("
    SELECT tipo, COUNT(*) AS total FROM mural
    WHERE status = 'pendente' GROUP BY tipo ORDER BY total DESC
")->fetchAll();

$PAGINA_ATUAL  = 'mural';
$PAGINA_TITULO = 'Mural — Moderação';
require_once __DIR__ . '/_layout.php';

// Labels e ícones dos tipos
$tipo_info = [
    'questao'  => ['label' => 'Questão',   'icone' => '❓', 'badge' => 'badge-azul'],
    'texto'    => ['label' => 'Texto',     'icone' => '📝', 'badge' => 'badge-cinza'],
    'pixelart' => ['label' => 'Pixel Art', 'icone' => '🎨', 'badge' => 'badge-roxo'],
    'sugestao' => ['label' => 'Sugestão',  'icone' => '💡', 'badge' => 'badge-laranja'],
];
?>

<style>
.badge-roxo { background: rgba(156,39,176,.2); color: #ce93d8; }
.conteudo-preview {
    max-width: 420px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: .83rem;
    color: var(--texto);
}
.conteudo-completo {
    white-space: pre-wrap;
    word-break: break-word;
    font-size: .83rem;
    color: var(--texto);
    background: var(--card2);
    border: 1px solid var(--borda);
    border-radius: 8px;
    padding: .8rem 1rem;
    margin-top: .5rem;
    display: none;
    max-height: 300px;
    overflow-y: auto;
}
.row-expandida .conteudo-completo { display: block; }
</style>

<!-- KPIs -->
<div class="kpi-grid" style="grid-template-columns:repeat(auto-fill,minmax(160px,1fr));margin-bottom:1.2rem;">
  <div class="kpi" style="--kpi-cor:#FF9800;cursor:pointer;" onclick="location.href='?status=pendente'">
    <span class="icone-kpi">⏳</span>
    <div class="valor"><?= $kpi_map['pendente'] ?></div>
    <div class="label">Pendentes</div>
  </div>
  <div class="kpi" style="--kpi-cor:#4CAF50;cursor:pointer;" onclick="location.href='?status=aprovado'">
    <span class="icone-kpi">✅</span>
    <div class="valor"><?= $kpi_map['aprovado'] ?></div>
    <div class="label">Aprovados</div>
  </div>
  <div class="kpi" style="--kpi-cor:#F44336;cursor:pointer;" onclick="location.href='?status=recusado'">
    <span class="icone-kpi">🚫</span>
    <div class="valor"><?= $kpi_map['recusado'] ?></div>
    <div class="label">Recusados</div>
  </div>
  <?php foreach ($por_tipo as $pt): ?>
  <div class="kpi" style="--kpi-cor:#9C27B0;">
    <span class="icone-kpi"><?= $tipo_info[$pt['tipo']]['icone'] ?? '📌' ?></span>
    <div class="valor"><?= $pt['total'] ?></div>
    <div class="label"><?= $tipo_info[$pt['tipo']]['label'] ?? $pt['tipo'] ?> pendente(s)</div>
  </div>
  <?php endforeach; ?>
</div>

<!-- Filtros -->
<form class="filtros" method="GET">
  <!-- Abas de status -->
  <div style="display:flex;gap:.3rem;border:1px solid var(--borda);border-radius:8px;overflow:hidden;">
    <?php foreach (['pendente'=>'⏳ Pendentes','aprovado'=>'✅ Aprovados','recusado'=>'🚫 Recusados'] as $s => $l): ?>
      <a href="?status=<?= $s ?><?= $filtro_tipo ? '&tipo='.$filtro_tipo : '' ?>"
         style="padding:.4rem .9rem;font-size:.8rem;font-weight:600;text-decoration:none;
                background:<?= $filtro_status===$s ? 'var(--azul)' : 'var(--card2)' ?>;
                color:<?= $filtro_status===$s ? '#fff' : 'var(--texto2)' ?>;">
        <?= $l ?>
      </a>
    <?php endforeach; ?>
  </div>

  <select name="tipo" onchange="this.form.submit()" style="margin-left:.3rem;">
    <option value="">Todos os tipos</option>
    <?php foreach ($tipo_info as $val => $info): ?>
      <option value="<?= $val ?>" <?= $filtro_tipo===$val ? 'selected' : '' ?>>
        <?= $info['icone'] ?> <?= $info['label'] ?>
      </option>
    <?php endforeach; ?>
  </select>
  <input type="hidden" name="status" value="<?= $filtro_status ?>">

  <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
    <?= $total ?> item(s)
  </span>
</form>

<!-- Tabela -->
<div class="card" style="padding:0;overflow:hidden;">
  <div class="tabela-wrap">
    <table class="duvid">
      <thead>
        <tr>
          <th>Data</th>
          <th>Aluno</th>
          <th>Tipo</th>
          <th>Conteúdo</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($itens as $item):
          $ti = $tipo_info[$item['tipo']] ?? ['label'=>$item['tipo'],'icone'=>'📌','badge'=>'badge-cinza'];
          $preview = mb_strimwidth($item['conteudo'], 0, 80, '…');
        ?>
        <tr id="row-<?= $item['id'] ?>">
          <td style="white-space:nowrap;color:var(--texto2);font-size:.78rem;">
            <?= date('d/m/y H:i', strtotime($item['criado_em'])) ?>
          </td>
          <td>
            <a href="/admin/alunos.php?q=<?= urlencode($item['aluno']) ?>"
               style="color:var(--azul);text-decoration:none;font-weight:600;">
              <?= htmlspecialchars($item['aluno']) ?>
            </a>
          </td>
          <td>
            <span class="badge <?= $ti['badge'] ?>">
              <?= $ti['icone'] ?> <?= $ti['label'] ?>
            </span>
          </td>
          <td>
            <div class="conteudo-preview" onclick="expandir(<?= $item['id'] ?>)"
                 style="cursor:pointer;" title="Clique para ver completo">
              <?= htmlspecialchars($preview) ?>
            </div>
            <div class="conteudo-completo" id="full-<?= $item['id'] ?>">
              <?= htmlspecialchars($item['conteudo']) ?>
            </div>
          </td>
          <td style="white-space:nowrap;">
            <?php if ($filtro_status === 'pendente'): ?>
              <button class="btn btn-verde"
                      onclick="moderar(<?= $item['id'] ?>, 'aprovado')">
                ✅ Aprovar
              </button>
              <button class="btn btn-vermelho"
                      onclick="moderar(<?= $item['id'] ?>, 'recusado')"
                      style="margin-top:.25rem;">
                🚫 Recusar
              </button>
            <?php elseif ($filtro_status === 'aprovado'): ?>
              <button class="btn btn-vermelho"
                      onclick="moderar(<?= $item['id'] ?>, 'recusado')">
                🚫 Recusar
              </button>
            <?php else: ?>
              <button class="btn btn-verde"
                      onclick="moderar(<?= $item['id'] ?>, 'aprovado')">
                ✅ Aprovar
              </button>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($itens)): ?>
        <tr>
          <td colspan="7" style="text-align:center;color:var(--texto2);padding:3rem;">
            <?php if ($filtro_status === 'pendente'): ?>
              🎉 Nenhum item pendente de moderação!
            <?php else: ?>
              Nenhum item <?= $filtro_status ?> encontrado.
            <?php endif; ?>
          </td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Paginação -->
<?php if ($total_paginas > 1): ?>
<div style="display:flex;gap:.4rem;justify-content:center;margin-top:1rem;flex-wrap:wrap;">
  <?php for ($i = 1; $i <= $total_paginas; $i++):
    $url = '?' . http_build_query(array_merge($_GET, ['pg' => $i]));
  ?>
    <a href="<?= $url ?>" class="btn <?= $i === $pagina ? 'btn-azul' : 'btn-cinza' ?>">
      <?= $i ?>
    </a>
  <?php endfor; ?>
</div>
<?php endif; ?>

<script>
// Expandir conteúdo completo
function expandir(id) {
  const row  = document.getElementById('row-' + id);
  const full = document.getElementById('full-' + id);
  row.classList.toggle('row-expandida');
}

// Moderar item
async function moderar(id, acao) {
  const row = document.getElementById('row-' + id);
  if (row) row.style.opacity = '.4';

  try {
    const r = await fetch('/admin/api/mural-moderar.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ id, acao })
    });
    const dados = await r.json();

    if (dados.ok) {
      toast(dados.mensagem, 'ok');
      // Remove a linha da tabela após 600ms
      setTimeout(() => {
        if (row) row.remove();
        // Atualiza contador no KPI pendente
        const kpiPend = document.querySelector('.kpi .valor');
        if (kpiPend) {
          const atual = parseInt(kpiPend.textContent) || 0;
          if (atual > 0) kpiPend.textContent = atual - 1;
        }
      }, 600);
    } else {
      toast(dados.erro || 'Erro ao moderar.', 'erro');
      if (row) row.style.opacity = '1';
    }
  } catch(e) {
    toast('Erro de conexão.', 'erro');
    if (row) row.style.opacity = '1';
  }
}
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
