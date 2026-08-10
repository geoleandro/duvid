<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
$ativo = fn($p) => $paginaAtual === $p ? 'active' : '';
?>

<aside id="sidebar-duvid">

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
        <a href="/paginas/conquistas.php" class="sidebar-nav-item <?= $ativo('conquistas.php') ?>">
            <i class="fa fa-star"></i> Conquistas
        </a>

        <div class="sidebar-sep"></div>

        <a href="/atividades/atividades.php" class="sidebar-nav-item <?= $ativo('atividades.php') ?>">
            <i class="fa fa-puzzle-piece"></i> Atividades
        </a>
        <a href="/blog/blog.php" class="sidebar-nav-item <?= $ativo('blog.php') ?>">
            <i class="fa fa-newspaper"></i> Blog
        </a>
        <a href="/paginas/filmes-geografia.php" class="sidebar-nav-item <?= $ativo('filmes-geografia.php') ?>">
            <i class="fa fa-film"></i> Filmes e séries
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
                display:flex; align-items:center; justify-content:flex-end;">
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
        var topo = 56;
        var gap  = 16;
        var maxH = window.innerHeight - topo - gap;

        // Usa APENAS o id do rodapé real — querySelector('footer') é perigoso:
        // pode capturar <footer> dentro de modais com display:none (offsetTop=0)
        var footer = document.getElementById('site-footer');
        if (footer) {
            var fTop  = footer.getBoundingClientRect().top;
            var dispF = fTop - topo - gap;
            if (dispF > 0 && dispF < maxH) maxH = dispF;
        }

        sidebar.style.height = Math.max(maxH, 200) + 'px';
    }

    ajustarAltura();
    window.addEventListener('scroll', ajustarAltura, { passive: true });
    window.addEventListener('resize', ajustarAltura, { passive: true });

    // Re-ajusta após JS de questões/textos injetar conteúdo dinamicamente
    setTimeout(ajustarAltura, 200);
    setTimeout(ajustarAltura, 800);
    setTimeout(ajustarAltura, 2000);
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

</script>
