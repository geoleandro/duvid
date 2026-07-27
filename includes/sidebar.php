<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
$ativo = fn($p) => $paginaAtual === $p ? 'active' : '';
?>

<style>
/* =============================================
   SIDEBAR DUVID — inclusa automaticamente via header.php
   ============================================= */

#sidebar-duvid {
    width: 200px;
    position: fixed;
    top: 56px;
    left: 0;
    height: calc(100vh - 80px); /* JS ajusta para parar antes do footer */
    background: #fff;
    border-right: 1px solid #eeeeee;
    border-bottom: 1px solid #eeeeee;
    border-radius: 0 0 16px 0;
    display: flex;
    flex-direction: column;
    padding: 14px 10px 12px;
    z-index: 99;
    box-sizing: border-box;
    overflow: hidden;
    transition: height .15s ease;
}

/* Desloca qualquer <main> automaticamente quando sidebar existe */
body:has(#sidebar-duvid) main {
    margin-left: 200px;
}

/* ── Perfil ── */
#sidebar-user-card {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 12px;
    margin-bottom: 14px;
    display: none;
}

/* ── Separadores ── */
.sidebar-sep {
    height: 1px;
    background: #eeeeee;
    margin: 6px 4px;
}

/* ── Nav items ── */
.sidebar-nav-item {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 8px 10px;
    border-radius: 8px;
    text-decoration: none;
    color: #555;
    font-size: .84rem;
    font-weight: 500;
    transition: background .15s, color .15s;
    margin-bottom: 1px;
    cursor: pointer;
    line-height: 1.3;
}
.sidebar-nav-item:hover { background: #f0f7f0; color: #2e7d32; }
.sidebar-nav-item.active { background: #2e7d32; color: #fff; font-weight: 700; }
.sidebar-nav-item i { width: 15px; text-align: center; font-size: .85rem; flex-shrink: 0; color: #999; }
.sidebar-nav-item:hover i, .sidebar-nav-item.active i { color: inherit; }

/* Sub-itens */
.sidebar-sub-item { font-size: .8rem; padding: 6px 10px; color: #777; }
.sidebar-sub-item:hover { color: #2e7d32; }
.sidebar-sub-item.active { background: #e8f5e9; color: #2e7d32; font-weight: 600; }

/* Botão grupo */
.sidebar-group-btn { color: #555; font-size: .84rem; font-weight: 500; }

/* ── Rodapé controles ── */
.sidebar-ctrl-btn {
    background: #f5f5f5; border: none; color: #777;
    width: 32px; height: 32px; border-radius: 8px;
    cursor: pointer; font-size: .85rem;
    display: flex; align-items: center; justify-content: center;
    transition: background .15s, color .15s;
}
.sidebar-ctrl-btn:hover { background: #e8f5e9; color: #2e7d32; }

.sidebar-font-btn {
    background: #f5f5f5; border: none; color: #777;
    padding: 4px 8px; border-radius: 7px; cursor: pointer;
    font-size: .7rem; font-weight: 600;
    transition: background .15s, color .15s;
}
.sidebar-font-btn:hover { background: #e8f5e9; color: #2e7d32; }

/* ── Dark Mode ── */
body.dark-mode #sidebar-duvid { background: #1a1a2a !important; border-color: rgba(255,255,255,.08) !important; }
body.dark-mode #sidebar-user-card { background: rgba(255,255,255,.06) !important; }
body.dark-mode #sidebar-nome-aluno { color: #e0e0e0 !important; }
body.dark-mode #sidebar-nivel-txt,
body.dark-mode #sidebar-rank-txt { color: rgba(255,255,255,.45) !important; }
body.dark-mode .sidebar-sep { background: rgba(255,255,255,.08) !important; }
body.dark-mode .sidebar-nav-item { color: rgba(255,255,255,.6) !important; }
body.dark-mode .sidebar-nav-item:hover { background: rgba(255,255,255,.07) !important; color: #fff !important; }
body.dark-mode .sidebar-nav-item.active { background: #2e7d32 !important; color: #fff !important; }
body.dark-mode .sidebar-nav-item i { color: rgba(255,255,255,.35) !important; }
body.dark-mode .sidebar-nav-item:hover i,
body.dark-mode .sidebar-nav-item.active i { color: inherit !important; }
body.dark-mode .sidebar-sub-item { color: rgba(255,255,255,.4) !important; }
body.dark-mode .sidebar-group-btn { color: rgba(255,255,255,.6) !important; }
body.dark-mode .sidebar-ctrl-btn,
body.dark-mode .sidebar-font-btn { background: rgba(255,255,255,.08) !important; color: rgba(255,255,255,.5) !important; }
body.dark-mode .sidebar-ctrl-btn:hover,
body.dark-mode .sidebar-font-btn:hover { background: rgba(255,255,255,.15) !important; color: #fff !important; }

/* ── Mobile: esconde sidebar ── */
@media (max-width: 900px) {
    #sidebar-duvid { display: none; }
    body:has(#sidebar-duvid) main { margin-left: 0; }
}
</style>

<aside id="sidebar-duvid">

    <!-- ══ PERFIL ══ -->
    <div id="sidebar-user-card">
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
            <img id="sidebar-medalha-img"
                 src="/fotoIndex/icones/duvid-patentes-novato.png"
                 alt="Patente"
                 style="width:38px; height:38px; border-radius:50%; object-fit:cover; border:2px solid #4caf50; flex-shrink:0;">
            <div style="min-width:0;">
                <div id="sidebar-nome-aluno"
                     style="font-size:.85rem; font-weight:700; color:#1b5e20;
                            white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"></div>
                <div style="font-size:.7rem; color:#888; margin-top:1px;">
                    <span id="sidebar-nivel-txt">Nível 1</span> · <span id="sidebar-rank-txt">Novato</span>
                </div>
            </div>
        </div>
        <div style="background:#e0e0e0; border-radius:4px; height:4px; overflow:hidden;">
            <div id="sidebar-xp-bar" style="height:100%; width:0%; background:#4caf50; border-radius:4px; transition:width 1.2s ease;"></div>
        </div>
    </div>

    <!-- ══ NAVEGAÇÃO ══ -->
    <nav style="flex:1; overflow-y:auto; padding-right:2px;">

        <a href="/home.php" class="sidebar-nav-item <?= $ativo('home.php') ?>">
            <i class="fa fa-compass"></i> Início
        </a>

        <!-- Aulas (expansível) -->
        <div class="sidebar-group">
            <button onclick="toggleSidebarGroup(this)"
                    class="sidebar-nav-item sidebar-group-btn"
                    style="width:100%; background:none; border:none; text-align:left; cursor:pointer;">
                <i class="fa fa-book-open"></i> Aulas
                <i class="fa fa-chevron-down sidebar-chevron" style="margin-left:auto; font-size:.65rem; transition:transform .2s;"></i>
            </button>
            <div class="sidebar-sub" style="display:none; padding-left:12px;">
                <a href="/Duvid1Ano.php" class="sidebar-nav-item sidebar-sub-item <?= $ativo('Duvid1Ano.php') ?>">🌿 Natureza</a>
                <a href="/Duvid2Ano.php" class="sidebar-nav-item sidebar-sub-item <?= $ativo('Duvid2Ano.php') ?>">🇧🇷 Brasil</a>
                <a href="/Duvid3Ano.php" class="sidebar-nav-item sidebar-sub-item <?= $ativo('Duvid3Ano.php') ?>">🌍 Mundo</a>
            </div>
        </div>

        <a href="/simulados/capasimuladogeral.php" class="sidebar-nav-item <?= $ativo('capasimuladogeral.php') ?>">
            <i class="fa fa-pen-to-square"></i> Simulados
        </a>

        <div class="sidebar-sep"></div>

        <a href="/paginas/criar-turma.php" class="sidebar-nav-item <?= $ativo('criar-turma.php') ?>">
            <i class="fa fa-users"></i> Turma
        </a>
        <a href="/paginas/ranking.php" class="sidebar-nav-item <?= $ativo('ranking.php') ?>">
            <i class="fa fa-trophy"></i> Ranking
        </a>
        <a href="/paginas/stats-turma.php" class="sidebar-nav-item <?= $ativo('stats-turma.php') ?>">
            <i class="fa fa-chart-line"></i> Desempenho
        </a>
        <a href="#conquistas" class="sidebar-nav-item">
            <i class="fa fa-star"></i> Conquistas
        </a>

        <div class="sidebar-sep"></div>

        <a href="/atividades/atividades.php" class="sidebar-nav-item <?= $ativo('atividades.php') ?>">
            <i class="fa fa-puzzle-piece"></i> Atividades
        </a>
        <a href="/blog/blog.php" class="sidebar-nav-item <?= $ativo('blog.php') ?>">
            <i class="fa fa-newspaper"></i> Blog
        </a>

        <div class="sidebar-sep"></div>

        <a href="/paginas/instrucoes.php" class="sidebar-nav-item <?= $ativo('instrucoes.php') ?>">
            <i class="fa fa-circle-question"></i> Instruções
        </a>
        <a href="/paginas/creditos.php" class="sidebar-nav-item <?= $ativo('creditos.php') ?>">
            <i class="fa fa-heart"></i> Créditos
        </a>

    </nav>

    <!-- ══ RODAPÉ ══ -->
    <div style="border-top:1px solid #eee; padding-top:12px; margin-top:8px;
                display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:4px;">
            <button id="toggle-som"   title="Som"       class="sidebar-ctrl-btn"><i class="fa fa-volume-up fa-fw"></i></button>
            <button id="toggle-dark-mode" title="Dark mode" class="sidebar-ctrl-btn"><i class="fa fa-moon fa-fw"></i></button>
        </div>
        <div class="font-controls" style="display:flex; align-items:center; gap:3px;">
            <button id="decrease-font" class="sidebar-font-btn">A-</button>
            <button id="increase-font" class="sidebar-font-btn">A+</button>
        </div>
    </div>

</aside>

<script>
// ── Altura dinâmica: para antes do footer ──
document.addEventListener('DOMContentLoaded', function () {
    var sidebar = document.getElementById('sidebar-duvid');
    if (!sidebar) return;

    function ajustarAltura() {
        var footer = document.querySelector('footer');
        var topo   = 56;
        var gap    = 16;
        var maxH   = window.innerHeight - topo - gap;

        if (footer) {
            var fTop = footer.getBoundingClientRect().top;
            var dispF = fTop - topo - gap;
            if (dispF < maxH) maxH = dispF;
        }
        sidebar.style.height = Math.max(maxH, 200) + 'px';
    }

    ajustarAltura();
    window.addEventListener('scroll', ajustarAltura, { passive: true });
    window.addEventListener('resize', ajustarAltura, { passive: true });
});

// ── Grupos expansíveis (Aulas) ──
function toggleSidebarGroup(btn) {
    var sub  = btn.nextElementSibling;
    var chev = btn.querySelector('.sidebar-chevron');
    var open = sub.style.display !== 'none';
    sub.style.display  = open ? 'none' : 'block';
    if (chev) chev.style.transform = open ? '' : 'rotate(180deg)';
}

// Abre automaticamente o grupo da página atual
document.addEventListener('DOMContentLoaded', function () {
    var paginasAulas = ['Duvid1Ano.php', 'Duvid2Ano.php', 'Duvid3Ano.php'];
    if (paginasAulas.includes('<?= $paginaAtual ?>')) {
        var btn = document.querySelector('.sidebar-group-btn');
        if (btn) toggleSidebarGroup(btn);
    }
});

// ── Espelha dados do aluno ──
(function () {
    function sync() {
        var nomeEl    = document.getElementById('nome-aluno-texto');
        var lvlEl     = document.getElementById('lvl-tag');
        var rankEl    = document.getElementById('rank-nome');
        var barraEl   = document.getElementById('barra-xp-total');
        var medalhaEl = document.getElementById('medalha-patente');

        if (!nomeEl || !nomeEl.textContent.trim()) return;

        var card = document.getElementById('sidebar-user-card');
        if (card) card.style.display = 'block';

        var sNome = document.getElementById('sidebar-nome-aluno');
        if (sNome) sNome.textContent = nomeEl.textContent;

        var sNivel = document.getElementById('sidebar-nivel-txt');
        if (sNivel && lvlEl) sNivel.textContent = lvlEl.textContent;

        var sRank = document.getElementById('sidebar-rank-txt');
        if (sRank && rankEl) {
            sRank.textContent = rankEl.textContent.replace(/rank\s*#?\d+\s*/i, '').trim() || 'Novato';
        }

        var sMedalha = document.getElementById('sidebar-medalha-img');
        if (sMedalha && medalhaEl && medalhaEl.src) sMedalha.src = medalhaEl.src;

        var sXp = document.getElementById('sidebar-xp-bar');
        if (sXp && barraEl) sXp.style.width = barraEl.style.width;
    }

    function iniciar() {
        var el = document.getElementById('nome-aluno-texto');
        if (!el) { setTimeout(iniciar, 150); return; }
        new MutationObserver(sync).observe(el, { childList: true, subtree: true, characterData: true });
        sync();
    }
    document.addEventListener('DOMContentLoaded', iniciar);
})();
</script>
