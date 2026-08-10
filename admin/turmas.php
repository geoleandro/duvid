<?php
// =============================================================
//  admin/turmas.php  —  Gestão de Turmas
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

// Filtros
$filtro_ano    = (int)($_GET['ano'] ?? 0);
$filtro_estado = strtoupper(trim($_GET['estado'] ?? ''));

$where  = ['1=1'];
$params = [];
if ($filtro_ano)    { $where[] = 't.ano_escolar = :ano';    $params[':ano']    = $filtro_ano; }
if ($filtro_estado) { $where[] = 't.estado = :estado';      $params[':estado'] = $filtro_estado; }

$sql = "
    SELECT
        t.id, t.nome, t.codigo, t.ano_escolar, t.ativa, t.criado_em,
        t.escola, t.cidade, t.estado,
        COUNT(DISTINCT a.id) AS total_alunos
    FROM turmas t
    LEFT JOIN alunos a ON a.turma_id = t.id AND a.tipo = 'aluno'
    WHERE " . implode(' AND ', $where) . "
    GROUP BY t.id
    ORDER BY t.ativa DESC, t.criado_em DESC
";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$turmas = $stmt->fetchAll();

// Estados disponíveis (para o filtro)
$estados = $pdo->query(
    "SELECT DISTINCT estado FROM turmas WHERE estado IS NOT NULL ORDER BY estado"
)->fetchAll(PDO::FETCH_COLUMN);

$PAGINA_ATUAL  = 'turmas';
$PAGINA_TITULO = 'Gestão de Turmas';
require_once __DIR__ . '/_layout.php';
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

  <select name="estado" onchange="this.form.submit()">
    <option value="">Todos os estados</option>
    <?php foreach ($estados as $uf): ?>
      <option value="<?= $uf ?>" <?= $filtro_estado === $uf ? 'selected' : '' ?>>
        <?= $uf ?>
      </option>
    <?php endforeach; ?>
  </select>

  <?php if ($filtro_ano || $filtro_estado): ?>
    <a href="/admin/turmas.php" class="btn btn-cinza">✕ Limpar</a>
  <?php endif; ?>

  <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
    <?= count($turmas) ?> turma(s)
  </span>
</form>

<!-- Tabela -->
<div class="card" style="padding:0;overflow:hidden;">
  <div class="tabela-wrap">
    <table class="duvid">
      <thead>
        <tr>
          <th>Nome / Código</th>
          <th>Ano</th>
          <th>Escola / Cidade</th>
          <th>Estado</th>
          <th>Alunos</th>
          <th>Criada em</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($turmas as $t): ?>
        <tr>
          <td>
            <strong><?= htmlspecialchars($t['nome']) ?></strong>
            <?php if ($t['codigo']): ?>
              <br><code style="font-size:.72rem;color:var(--texto2);"><?= htmlspecialchars($t['codigo']) ?></code>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($t['ano_escolar']): ?>
              <span class="badge badge-azul"><?= $t['ano_escolar'] ?>º</span>
            <?php else: ?>
              <span class="badge badge-cinza">Livre</span>
            <?php endif; ?>
          </td>
          <td>
            <?= htmlspecialchars($t['escola'] ?? '—') ?>
            <?php if ($t['cidade']): ?>
              <br><span style="font-size:.75rem;color:var(--texto2);"><?= htmlspecialchars($t['cidade']) ?></span>
            <?php endif; ?>
          </td>
          <td><?= htmlspecialchars($t['estado'] ?? '—') ?></td>
          <td>
            <strong style="color:var(--azul);"><?= $t['total_alunos'] ?></strong>
          </td>
          <td style="color:var(--texto2);font-size:.78rem;">
            <?= date('d/m/Y', strtotime($t['criado_em'])) ?>
          </td>
          <td>
            <span class="badge <?= $t['ativa'] ? 'badge-verde' : 'badge-cinza' ?>">
              <?= $t['ativa'] ? 'Ativa' : 'Inativa' ?>
            </span>
          </td>
          <td style="white-space:nowrap;">
            <button class="btn <?= $t['ativa'] ? 'btn-laranja' : 'btn-verde' ?>"
                    onclick="toggleTurma(<?= $t['id'] ?>, <?= $t['ativa'] ? 0 : 1 ?>, this)">
              <?= $t['ativa'] ? '⏸ Desativar' : '▶ Ativar' ?>
            </button>
            <button class="btn btn-vermelho"
                    onclick="deletarTurma(<?= $t['id'] ?>, <?= htmlspecialchars(json_encode($t['nome'])) ?>, <?= (int)$t['total_alunos'] ?>)"
                    title="Excluir turma">
              🗑️
            </button>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($turmas)): ?>
        <tr>
          <td colspan="8" style="text-align:center;color:var(--texto2);padding:2rem;">
            Nenhuma turma encontrada.
          </td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<script>
async function deletarTurma(id, nome, totalAlunos) {
  if (totalAlunos > 0) {
    toast(`Não é possível excluir: a turma tem ${totalAlunos} aluno(s). Mova-os primeiro.`, 'erro');
    return;
  }
  if (!confirm(`Excluir a turma "${nome}"? Esta ação não pode ser desfeita.`)) return;

  try {
    const r = await fetch('/admin/api/turmas.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({ acao: 'deletar', id })
    });
    const dados = await r.json();
    if (dados.ok) {
      toast(dados.mensagem, 'ok');
      setTimeout(() => location.reload(), 800);
    } else {
      toast(dados.erro || 'Erro ao excluir.', 'erro');
    }
  } catch(e) {
    toast('Erro de conexão.', 'erro');
  }
}

async function toggleTurma(id, novoStatus, btn) {
  btn.disabled = true;
  try {
    const r = await fetch('/admin/api/turmas.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({ acao: 'toggle', id, ativa: novoStatus })
    });
    const dados = await r.json();
    if (dados.ok) {
      toast(dados.mensagem, 'ok');
      setTimeout(() => location.reload(), 800);
    } else {
      toast(dados.erro || 'Erro ao atualizar.', 'erro');
      btn.disabled = false;
    }
  } catch(e) {
    toast('Erro de conexão.', 'erro');
    btn.disabled = false;
  }
}
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
