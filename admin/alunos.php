<?php
// =============================================================
//  admin/alunos.php  —  Gestão de Alunos
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

// ── DELETE ──────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['deletar_id'])) {
    $del_id = (int)$_POST['deletar_id'];
    $pdo->prepare("DELETE FROM alunos WHERE id = :id AND tipo = 'aluno'")->execute([':id' => $del_id]);
    header('Location: /admin/alunos.php?deletado=1');
    exit;
}

// Busca e filtros
$busca      = trim($_GET['q']      ?? '');
$filtro_turma = (int)($_GET['turma'] ?? 0);
$pagina     = max(1, (int)($_GET['pg'] ?? 1));
$por_pagina = 40;
$offset     = ($pagina - 1) * $por_pagina;

$where  = ["a.tipo = 'aluno'"];
$params = [];
if ($busca) {
    $where[] = "(a.nome LIKE :busca OR a.email LIKE :busca OR a.escola LIKE :busca)";
    $params[':busca'] = '%' . $busca . '%';
}
if ($filtro_turma) {
    $where[] = "a.turma_id = :turma";
    $params[':turma'] = $filtro_turma;
}
$where_sql = implode(' AND ', $where);

// Total para paginação
$stmt_count = $pdo->prepare("SELECT COUNT(*) FROM alunos a WHERE $where_sql");
$stmt_count->execute($params);
$total = (int) $stmt_count->fetchColumn();
$total_paginas = (int) ceil($total / $por_pagina);

$stmt = $pdo->prepare("
    SELECT
        a.id, a.nome, a.email, a.globinhos_total, a.lvl, a.patente,
        a.criado_em, a.ultimo_acesso, a.escola, a.cidade, a.estado,
        t.nome AS turma_nome, t.id AS turma_id, t.codigo AS turma_codigo,
        (SELECT COUNT(*) FROM progresso_aulas p
          WHERE p.aluno_id = a.id
            AND p.concluido_texto = 1
            AND p.concluido_questoes = 1) AS aulas_concluidas
    FROM alunos a
    LEFT JOIN turmas t ON t.id = a.turma_id
    WHERE $where_sql
    ORDER BY a.ultimo_acesso DESC, a.criado_em DESC
    LIMIT :limit OFFSET :offset
");
foreach ($params as $k => $v) $stmt->bindValue($k, $v);
$stmt->bindValue(':limit',  $por_pagina, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset,     PDO::PARAM_INT);
$stmt->execute();
$alunos = $stmt->fetchAll();

// Lista de turmas para o filtro e modal
$turmas_lista = $pdo->query(
    "SELECT id, nome, codigo FROM turmas WHERE ativa = 1 ORDER BY nome"
)->fetchAll();

$PAGINA_ATUAL  = 'alunos';
$PAGINA_TITULO = 'Gestão de Alunos';
require_once __DIR__ . '/_layout.php';
?>

<!-- Filtros -->
<form class="filtros" method="GET">
  <input type="search" name="q" placeholder="🔍 Buscar por nome, e-mail ou escola..."
         value="<?= htmlspecialchars($busca) ?>" style="min-width:280px;">

  <select name="turma" onchange="this.form.submit()">
    <option value="0">Todas as turmas</option>
    <?php foreach ($turmas_lista as $t): ?>
      <option value="<?= $t['id'] ?>" <?= $filtro_turma === (int)$t['id'] ? 'selected' : '' ?>>
        <?= htmlspecialchars($t['nome']) ?> (<?= $t['codigo'] ?>)
      </option>
    <?php endforeach; ?>
  </select>

  <button type="submit" class="btn btn-azul">Buscar</button>
  <?php if ($busca || $filtro_turma): ?>
    <a href="/admin/alunos.php" class="btn btn-cinza">✕ Limpar</a>
  <?php endif; ?>

  <span style="margin-left:auto;color:var(--texto2);font-size:.82rem;">
    <?= number_format($total) ?> aluno(s)
  </span>
</form>

<!-- Tabela -->
<div class="card" style="padding:0;overflow:hidden;">
  <div class="tabela-wrap">
    <table class="duvid">
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Turma</th>
          <th>Globinhos / Nível</th>
          <th>Aulas 100%</th>
          <th>Último acesso</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($alunos as $a): ?>
        <tr>
          <td>
            <strong><?= htmlspecialchars($a['nome']) ?></strong>
            <?php if ($a['escola']): ?>
              <br><span style="font-size:.73rem;color:var(--texto2);">
                <?= htmlspecialchars($a['escola']) ?>
                <?= $a['cidade'] ? ' · ' . htmlspecialchars($a['cidade']) : '' ?>
              </span>
            <?php endif; ?>
          </td>
          <td style="color:var(--texto2);font-size:.82rem;">
            <?= htmlspecialchars($a['email'] ?? '—') ?>
          </td>
          <td>
            <span class="badge badge-azul">
              <?= htmlspecialchars($a['turma_nome'] ?? '—') ?>
            </span>
          </td>
          <td>
            🪙 <strong><?= number_format($a['globinhos_total']) ?></strong>
            <br><span style="font-size:.73rem;color:var(--texto2);">
              Lv.<?= $a['lvl'] ?> <?= htmlspecialchars($a['patente']) ?>
            </span>
          </td>
          <td style="text-align:center;">
            <strong style="color:var(--azul);"><?= $a['aulas_concluidas'] ?></strong>
          </td>
          <td style="font-size:.78rem;color:var(--texto2);">
            <?= $a['ultimo_acesso']
                ? date('d/m/Y H:i', strtotime($a['ultimo_acesso']))
                : '<span style="color:#555;">nunca</span>' ?>
          </td>
          <td>
            <button class="btn btn-cinza"
                    onclick='abrirResetPin(<?= $a['id'] ?>, <?= json_encode($a['nome']) ?>)'
                    title="Resetar PIN">
              🔑 PIN
            </button>
            <button class="btn btn-cinza"
                    onclick='abrirMoveTurma(<?= $a['id'] ?>, <?= json_encode($a['nome']) ?>, <?= $a['turma_id'] ?>)'
                    title="Mover de turma">
              🔀 Turma
            </button>
            <form method="POST" style="display:inline;"
                  onsubmit="return confirm('Excluir <?= addslashes(htmlspecialchars($a['nome'])) ?>? Esta ação não pode ser desfeita.')">
              <input type="hidden" name="deletar_id" value="<?= $a['id'] ?>">
              <button type="submit" class="btn btn-vermelho" title="Excluir aluno">🗑️</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($alunos)): ?>
        <tr>
          <td colspan="7" style="text-align:center;color:var(--texto2);padding:2rem;">
            Nenhum aluno encontrado.
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
    $params_pg = array_merge($_GET, ['pg' => $i]);
    $url = '/admin/alunos.php?' . http_build_query($params_pg);
  ?>
    <a href="<?= $url ?>"
       class="btn <?= $i === $pagina ? 'btn-azul' : 'btn-cinza' ?>">
      <?= $i ?>
    </a>
  <?php endfor; ?>
</div>
<?php endif; ?>

<!-- Modal: Reset PIN -->
<div class="modal-overlay" id="modal-pin">
  <div class="modal-box">
    <h4>🔑 Resetar PIN do aluno</h4>
    <p id="pin-aluno-nome" style="color:var(--texto2);font-size:.85rem;margin-bottom:.8rem;"></p>
    <label for="novo-pin">Novo PIN (4 dígitos)</label>
    <input type="text" id="novo-pin" maxlength="4" pattern="\d{4}"
           placeholder="Ex: 1234" inputmode="numeric">
    <div class="modal-acoes">
      <button class="btn btn-cinza" onclick="fecharModal('modal-pin')">Cancelar</button>
      <button class="btn btn-azul" onclick="confirmarResetPin()">Salvar PIN</button>
    </div>
  </div>
</div>

<!-- Modal: Mover Turma -->
<div class="modal-overlay" id="modal-turma">
  <div class="modal-box">
    <h4>🔀 Mover aluno de turma</h4>
    <p id="move-aluno-nome" style="color:var(--texto2);font-size:.85rem;margin-bottom:.8rem;"></p>
    <label for="nova-turma">Selecionar turma</label>
    <select id="nova-turma">
      <?php foreach ($turmas_lista as $t): ?>
        <option value="<?= $t['id'] ?>">
          <?= htmlspecialchars($t['nome']) ?> (<?= $t['codigo'] ?>)
        </option>
      <?php endforeach; ?>
    </select>
    <div class="modal-acoes">
      <button class="btn btn-cinza" onclick="fecharModal('modal-turma')">Cancelar</button>
      <button class="btn btn-verde" onclick="confirmarMoveTurma()">Mover</button>
    </div>
  </div>
</div>

<script>
let _alunoId = null;

function fecharModal(id) {
  document.getElementById(id).classList.remove('aberto');
}

// Reset PIN
function abrirResetPin(id, nome) {
  _alunoId = id;
  document.getElementById('pin-aluno-nome').textContent = 'Aluno: ' + nome;
  document.getElementById('novo-pin').value = '';
  document.getElementById('modal-pin').classList.add('aberto');
}

async function confirmarResetPin() {
  const pin = document.getElementById('novo-pin').value.trim();
  if (!/^\d{4}$/.test(pin)) {
    toast('O PIN deve ter exatamente 4 dígitos.', 'erro');
    return;
  }
  const r = await fetch('/admin/api/alunos.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({ acao: 'reset_pin', id: _alunoId, pin })
  });
  const dados = await r.json();
  if (dados.ok) {
    toast(dados.mensagem, 'ok');
    fecharModal('modal-pin');
  } else {
    toast(dados.erro || 'Erro ao resetar PIN.', 'erro');
  }
}

// Mover turma
function abrirMoveTurma(id, nome, turmaAtual) {
  _alunoId = id;
  document.getElementById('move-aluno-nome').textContent = 'Aluno: ' + nome;
  const sel = document.getElementById('nova-turma');
  sel.value = turmaAtual;
  document.getElementById('modal-turma').classList.add('aberto');
}

async function confirmarMoveTurma() {
  const turma_id = parseInt(document.getElementById('nova-turma').value);
  const r = await fetch('/admin/api/alunos.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({ acao: 'mover_turma', id: _alunoId, turma_id })
  });
  const dados = await r.json();
  if (dados.ok) {
    toast(dados.mensagem, 'ok');
    fecharModal('modal-turma');
    setTimeout(() => location.reload(), 800);
  } else {
    toast(dados.erro || 'Erro ao mover aluno.', 'erro');
  }
}

// Fecha modais clicando fora
document.querySelectorAll('.modal-overlay').forEach(o => {
  o.addEventListener('click', e => {
    if (e.target === o) o.classList.remove('aberto');
  });
});
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
