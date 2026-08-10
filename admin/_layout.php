<?php
// =============================================================
//  admin/_layout.php  —  Header + Sidebar compartilhados
//  Uso:
//    $PAGINA_ATUAL = 'index';   // slug da página ativa
//    $PAGINA_TITULO = 'Dashboard';
//    require_once __DIR__ . '/_layout.php';
//  Depois, ao final da página:
//    require_once __DIR__ . '/_layout_fim.php';
// =============================================================
$PAGINA_ATUAL  = $PAGINA_ATUAL  ?? '';
$PAGINA_TITULO = $PAGINA_TITULO ?? 'Admin';

$nav = [
    ['slug'=>'index',           'icone'=>'📊', 'label'=>'Dashboard',          'href'=>'/admin/index.php'],
    ['slug'=>'turmas',          'icone'=>'🏫', 'label'=>'Turmas',              'href'=>'/admin/turmas.php'],
    ['slug'=>'alunos',          'icone'=>'👥', 'label'=>'Alunos',              'href'=>'/admin/alunos.php'],
    ['slug'=>'ranking-escolas', 'icone'=>'🏆', 'label'=>'Ranking Escolar',     'href'=>'/admin/ranking-escolas.php'],
    ['slug'=>'aulas-stats',      'icone'=>'📚', 'label'=>'Desempenho por Aula', 'href'=>'/admin/aulas-stats.php'],
    ['slug'=>'progresso-aluno', 'icone'=>'🎯', 'label'=>'Progresso por Aluno', 'href'=>'/admin/progresso-aluno.php'],
    ['slug'=>'mural',           'icone'=>'🖼️',  'label'=>'Mural (moderação)',    'href'=>'/admin/mural.php'],
    ['slug'=>'filmes',          'icone'=>'🎬', 'label'=>'Filmes (imagem/nota)', 'href'=>'/admin/filmes.php'],
    // ['slug'=>'reportes', 'icone'=>'⚠️', 'label'=>'Reportes', 'href'=>'/admin/reportes.php'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($PAGINA_TITULO) ?> — Duvid Admin</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" defer></script>
<style>
/* ── Variáveis de cor (dark mode fixo para o admin) ── */
:root {
  --bg:       #0f1117;
  --sidebar:  #16213e;
  --card:     #1e2a3a;
  --card2:    #243447;
  --borda:    #2a3f5f;
  --texto:    #e0e6f0;
  --texto2:   #8b9ec7;
  --azul:     #2196F3;
  --azul2:    #1565C0;
  --verde:    #4CAF50;
  --laranja:  #FF9800;
  --vermelho: #F44336;
  --roxo:     #9C27B0;
  --sidebar-w: 220px;
}
* { box-sizing: border-box; margin: 0; padding: 0; }
body {
  background: var(--bg);
  color: var(--texto);
  font-family: 'Segoe UI', system-ui, sans-serif;
  font-size: 14px;
  display: flex;
  min-height: 100vh;
}

/* ── Sidebar ── */
#sidebar {
  width: var(--sidebar-w);
  background: var(--sidebar);
  border-right: 1px solid var(--borda);
  display: flex;
  flex-direction: column;
  position: fixed;
  top: 0; left: 0; bottom: 0;
  z-index: 100;
  transition: transform .25s;
}
#sidebar .logo {
  padding: 1.4rem 1.2rem 1rem;
  border-bottom: 1px solid var(--borda);
}
#sidebar .logo h1 {
  font-size: 1rem;
  font-weight: 700;
  color: #fff;
  letter-spacing: .5px;
}
#sidebar .logo p {
  font-size: .72rem;
  color: var(--texto2);
  margin-top: .2rem;
}
#sidebar nav { flex: 1; padding: .8rem 0; overflow-y: auto; }
#sidebar nav a {
  display: flex;
  align-items: center;
  gap: .7rem;
  padding: .65rem 1.2rem;
  color: var(--texto2);
  text-decoration: none;
  font-size: .85rem;
  border-left: 3px solid transparent;
  transition: background .15s, color .15s, border-color .15s;
}
#sidebar nav a:hover {
  background: rgba(33,150,243,.08);
  color: #fff;
}
#sidebar nav a.ativo {
  background: rgba(33,150,243,.15);
  color: var(--azul);
  border-left-color: var(--azul);
  font-weight: 600;
}
#sidebar nav a .icone { font-size: 1.05rem; min-width: 20px; }
#sidebar .rodape {
  padding: .8rem 1.2rem;
  border-top: 1px solid var(--borda);
  font-size: .78rem;
  color: var(--texto2);
}
#sidebar .rodape a {
  color: var(--vermelho);
  text-decoration: none;
  display: block;
  margin-top: .3rem;
}

/* ── Main ── */
#main {
  margin-left: var(--sidebar-w);
  flex: 1;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
#topbar {
  background: var(--card);
  border-bottom: 1px solid var(--borda);
  padding: .9rem 1.6rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: sticky;
  top: 0;
  z-index: 50;
}
#topbar h2 { font-size: 1rem; font-weight: 600; color: #fff; }
#topbar .info { font-size: .78rem; color: var(--texto2); }
#conteudo { padding: 1.6rem; flex: 1; }

/* ── Cards KPI ── */
.kpi-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1rem;
  margin-bottom: 1.6rem;
}
.kpi {
  background: var(--card);
  border: 1px solid var(--borda);
  border-radius: 10px;
  padding: 1.2rem 1.4rem;
  position: relative;
  overflow: hidden;
}
.kpi::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--kpi-cor, var(--azul));
}
.kpi .valor {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  line-height: 1;
}
.kpi .label {
  font-size: .78rem;
  color: var(--texto2);
  margin-top: .4rem;
}
.kpi .icone-kpi {
  position: absolute;
  top: .8rem; right: 1rem;
  font-size: 1.8rem;
  opacity: .25;
}

/* ── Tabelas ── */
.tabela-wrap { overflow-x: auto; }
table.duvid {
  width: 100%;
  border-collapse: collapse;
  font-size: .83rem;
}
table.duvid thead th {
  background: var(--card2);
  color: var(--texto2);
  text-align: left;
  padding: .7rem 1rem;
  font-weight: 600;
  text-transform: uppercase;
  font-size: .72rem;
  letter-spacing: .5px;
  border-bottom: 1px solid var(--borda);
  white-space: nowrap;
}
table.duvid tbody tr {
  border-bottom: 1px solid rgba(42,63,95,.5);
  transition: background .12s;
}
table.duvid tbody tr:hover { background: rgba(33,150,243,.05); }
table.duvid tbody td {
  padding: .65rem 1rem;
  color: var(--texto);
  vertical-align: middle;
}

/* ── Badges ── */
.badge {
  display: inline-block;
  padding: .18rem .55rem;
  border-radius: 20px;
  font-size: .72rem;
  font-weight: 600;
  white-space: nowrap;
}
.badge-verde   { background: rgba(76,175,80,.2);  color: #81c784; }
.badge-cinza   { background: rgba(120,120,120,.2);color: #aaa; }
.badge-laranja { background: rgba(255,152,0,.2);  color: #ffb74d; }
.badge-vermelho{ background: rgba(244,67,54,.2);  color: #ef9a9a; }
.badge-azul    { background: rgba(33,150,243,.2); color: #64b5f6; }

/* ── Botões ── */
.btn {
  display: inline-flex;
  align-items: center;
  gap: .35rem;
  padding: .38rem .8rem;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  font-size: .8rem;
  font-weight: 600;
  transition: opacity .15s;
  text-decoration: none;
}
.btn:hover { opacity: .85; }
.btn-azul    { background: var(--azul);     color: #fff; }
.btn-verde   { background: var(--verde);    color: #fff; }
.btn-laranja { background: var(--laranja);  color: #fff; }
.btn-cinza   { background: var(--card2);    color: var(--texto); border: 1px solid var(--borda); }
.btn-vermelho{ background: var(--vermelho); color: #fff; }

/* ── Filtros / busca ── */
.filtros {
  display: flex;
  gap: .7rem;
  flex-wrap: wrap;
  margin-bottom: 1rem;
  align-items: center;
}
.filtros input, .filtros select {
  background: var(--card2);
  border: 1px solid var(--borda);
  border-radius: 7px;
  color: var(--texto);
  padding: .45rem .8rem;
  font-size: .83rem;
  outline: none;
  transition: border-color .2s;
}
.filtros input:focus, .filtros select:focus { border-color: var(--azul); }
.filtros input::placeholder { color: var(--texto2); }

/* ── Card genérico ── */
.card {
  background: var(--card);
  border: 1px solid var(--borda);
  border-radius: 10px;
  padding: 1.2rem 1.4rem;
  margin-bottom: 1.2rem;
}
.card h3 {
  font-size: .9rem;
  color: var(--texto2);
  font-weight: 600;
  margin-bottom: 1rem;
  text-transform: uppercase;
  letter-spacing: .5px;
}

/* ── Toast / feedback ── */
#toast {
  position: fixed;
  bottom: 1.5rem; right: 1.5rem;
  background: #1e3a5f;
  color: #fff;
  padding: .8rem 1.2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0,0,0,.4);
  font-size: .85rem;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity .3s, transform .3s;
  z-index: 9999;
  max-width: 320px;
}
#toast.visivel { opacity: 1; transform: translateY(0); }
#toast.erro    { background: #7f1d1d; }
#toast.ok      { background: #1a3a1a; }

/* ── Responsivo ── */
#menu-toggle {
  display: none;
  background: none;
  border: none;
  color: #fff;
  font-size: 1.4rem;
  cursor: pointer;
  margin-right: .8rem;
}
@media (max-width: 768px) {
  #sidebar { transform: translateX(-100%); }
  #sidebar.aberto { transform: translateX(0); }
  #main { margin-left: 0; }
  #menu-toggle { display: block; }
}

/* ── Progress bar ── */
.prog-bar {
  background: var(--borda);
  border-radius: 4px;
  height: 6px;
  overflow: hidden;
  min-width: 80px;
}
.prog-bar-fill {
  height: 100%;
  background: var(--azul);
  border-radius: 4px;
  transition: width .3s;
}
.prog-bar-fill.bom     { background: var(--verde); }
.prog-bar-fill.alerta  { background: var(--laranja); }
.prog-bar-fill.ruim    { background: var(--vermelho); }

/* ── Modal ── */
.modal-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,.6);
  z-index: 200;
  align-items: center;
  justify-content: center;
}
.modal-overlay.aberto { display: flex; }
.modal-box {
  background: var(--card);
  border: 1px solid var(--borda);
  border-radius: 12px;
  padding: 1.8rem;
  width: 90%;
  max-width: 420px;
  box-shadow: 0 16px 48px rgba(0,0,0,.5);
}
.modal-box h4 { font-size: 1rem; color: #fff; margin-bottom: 1rem; }
.modal-box label { display: block; font-size: .78rem; color: var(--texto2); margin: .8rem 0 .3rem; }
.modal-box input, .modal-box select {
  width: 100%;
  background: var(--card2);
  border: 1px solid var(--borda);
  border-radius: 6px;
  color: var(--texto);
  padding: .5rem .8rem;
  font-size: .9rem;
  outline: none;
}
.modal-box input:focus, .modal-box select:focus { border-color: var(--azul); }
.modal-acoes { display: flex; gap: .6rem; justify-content: flex-end; margin-top: 1.2rem; }
</style>
</head>
<body>

<!-- Sidebar -->
<nav id="sidebar">
  <div class="logo">
    <h1>🌍 Duvid Admin</h1>
    <p>Painel Administrativo</p>
  </div>
  <nav>
    <?php foreach ($nav as $item): ?>
      <a href="<?= $item['href'] ?>" class="<?= $PAGINA_ATUAL === $item['slug'] ? 'ativo' : '' ?>">
        <span class="icone"><?= $item['icone'] ?></span>
        <?= $item['label'] ?>
      </a>
    <?php endforeach; ?>
  </nav>
  <div class="rodape">
    <span><?= htmlspecialchars($ADMIN_NOME) ?></span>
    <a href="/admin/logout.php">⏻ Sair</a>
  </div>
</nav>

<!-- Main -->
<div id="main">
  <div id="topbar">
    <div style="display:flex;align-items:center;">
      <button id="menu-toggle" onclick="document.getElementById('sidebar').classList.toggle('aberto')">☰</button>
      <h2><?= htmlspecialchars($PAGINA_TITULO) ?></h2>
    </div>
    <div class="info">
      <?= date('d/m/Y H:i') ?>
    </div>
  </div>
  <div id="conteudo">
<!-- ↑ conteúdo da página começa aqui -->
