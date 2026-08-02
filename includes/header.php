<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
$ehAtividades = ($paginaAtual === 'atividades.php');
$ehBlog       = ($paginaAtual === 'blog.php');
$ehSimulados  = ($paginaAtual === 'capasimuladogeral.php');
?>

<!-- Fontes globais: Roboto (corpo) + Montserrat (navbar/sidebar) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/estilos/header.css">
<link rel="stylesheet" href="/estilos/sidebar.css">

<!-- ══════════════════════════════════════════
     HEADER PRINCIPAL — Clean Pixel
══════════════════════════════════════════ -->
<div class="w3-top hdr-top-wrap">
<nav class="hdr-nav">

    <!-- Logo -->
    <a href="/home.php" class="hdr-logo">
        <div class="hdr-logo-icon">D</div>
        <span class="hdr-logo-name w3-hide-small">Duvid Geografia</span>
    </a>

    <!-- Nav links (desktop) -->
    <div class="hdr-nav-links w3-hide-small">
        <a href="/atividades/atividades.php"
           class="header-nav-link <?= $ehAtividades ? 'active' : '' ?>">Atividades</a>
        <a href="/blog/blog.php"
           class="header-nav-link <?= $ehBlog ? 'active' : '' ?>">Blog</a>
        <a href="/simulados/capasimuladogeral.php"
           class="header-nav-link <?= $ehSimulados ? 'active' : '' ?>">Simulados</a>
    </div>

    <!-- Lado direito -->
    <div class="hdr-right">

        <!-- XP + Nível — Pill Badge -->
        <div id="painel-pontos">

            <!-- Globinho + XP -->
            <div class="hdr-xp-group">
                <img src="/fotoIndex/globinhoPe.png" alt="" class="hdr-globinho-img"
                     onerror="this.outerHTML='<span class=\'hdr-globinho-emoji\'>🌍</span>'">
                <div class="hdr-xp-texts">
                    <span class="hdr-pill-label">XP Total</span>
                    <span id="saldoTotalHeader">0</span>
                </div>
            </div>

            <!-- Divisor -->
            <div class="hdr-divider"></div>

            <!-- Nível -->
            <div class="hdr-nivel-group">
                <span class="hdr-pill-label">Nível</span>
                <span id="header-nivel-num">1</span>
            </div>

            <span id="notaFixa"        class="hdr-hidden">0</span>
            <span id="header-nivel-txt" class="hdr-hidden">NÍVEL 1</span>
            <span id="header-rank-txt"  class="hdr-hidden">NOVATO</span>
        </div>

        <!-- Status dot do sistema -->
        <a href="/status.php" id="status-dot-link" title="Verificando..." target="_blank">
            <span id="status-dot"></span>
            <span id="status-label"></span>
        </a>

        <!-- Som -->
        <button id="toggle-som" title="Som" class="hdr-icon-btn w3-hide-small">
            <i class="fa fa-volume-up fa-fw"></i>
        </button>

        <!-- Dark mode -->
        <button id="toggle-dark-mode" title="Dark mode" class="hdr-icon-btn w3-hide-small">
            <i class="fa fa-moon fa-fw"></i>
        </button>

        <!-- Bloco usuário: sair + avatar (mostrado quando logado) -->
        <div id="hdr-user">
            <a href="#" class="hdr-sair-btn w3-hide-small"
               onclick="abrirModalSairGlobal(); return false;">
                <i class="fa fa-right-from-bracket"></i> Sair
            </a>
            <div class="hdr-avatar" id="hdr-avatar" title="Sair" onclick="abrirModalSairGlobal()">
                <span id="hdr-avatar-inicial">A</span>
                <img id="hdr-avatar-foto" src="" alt="">
            </div>
        </div>

        <!-- Avatar antigo (compatibilidade JS) -->
        <div id="header-avatar">
            <img id="header-avatar-img" src="/fotoIndex/icones/duvid-patentes-novato.png" alt="Patente">
        </div>

        <!-- Hamburger (mobile) -->
        <button class="hdr-hamburger w3-hide-large w3-hide-medium"
                onclick="AbrirNavBar(); return false;">
            <i class="fa fa-bars"></i>
        </button>

    </div>
</nav>
</div>

<!-- ══════════════════════════════════════════
     NAV MOBILE — drawer sobreposto
══════════════════════════════════════════ -->
<div id="navDemo"
     class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top w3-left-align">

    <!-- ── Início ── -->
    <a href="/home.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-compass mob-nav-icon"></i> Início
    </a>

    <!-- ── Aulas (dropdown) ── -->
    <div class="w3-dropdown-click w3-left-align">
        <button onclick="AbrirDropDown('aulas-mobile')" class="w3-button w3-block mob-dropdown-btn">
            <i class="fa fa-book-open mob-nav-icon"></i>
            Aulas <i class="fa fa-caret-down" style="margin-left:auto;"></i>
        </button>
        <div id="aulas-mobile" class="w3-dropdown-content w3-bar-block w3-white mob-submenu">
            <a href="/Duvid1Ano.php"  class="w3-bar-item w3-button mob-submenu-item" onclick="AbrirNavBar()">🌿 Natureza</a>
            <a href="/Duvid2Ano.php"  class="w3-bar-item w3-button mob-submenu-item" onclick="AbrirNavBar()">🇧🇷 Brasil</a>
            <a href="/Duvid3Ano.php"  class="w3-bar-item w3-button mob-submenu-item" onclick="AbrirNavBar()">🌍 Mundo</a>
        </div>
    </div>

    <!-- ── Simulados ── -->
    <a href="/simulados/capasimuladogeral.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-pen-to-square mob-nav-icon"></i> Simulados
    </a>

    <div class="mob-separator"></div>

    <!-- ── Turma ── -->
    <a href="/paginas/criar-turma.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-users mob-nav-icon"></i> Turma
    </a>

    <!-- ── Ranking ── -->
    <a href="/paginas/ranking.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-trophy mob-nav-icon"></i> Ranking
    </a>

    <!-- ── Desempenho ── -->
    <a href="/paginas/stats-turma.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-chart-line mob-nav-icon"></i> Desempenho
    </a>

    <!-- ── Conquistas ── -->
    <a href="/paginas/conquistas.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-star mob-nav-icon"></i> Conquistas
    </a>

    <div class="mob-separator"></div>

    <!-- ── Atividades ── -->
    <a href="/atividades/atividades.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-puzzle-piece mob-nav-icon"></i> Atividades
    </a>

    <!-- ── Blog ── -->
    <a href="/blog/blog.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-newspaper mob-nav-icon"></i> Blog
    </a>

    <div class="mob-separator"></div>

    <!-- ── Instruções ── -->
    <a href="/paginas/instrucoes.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-circle-question mob-nav-icon"></i> Instruções
    </a>

    <!-- ── Créditos ── -->
    <a href="/paginas/creditos.php" class="w3-bar-item w3-button mob-nav-item" onclick="AbrirNavBar()">
        <i class="fa fa-heart mob-nav-icon"></i> Créditos
    </a>

    <!-- ── Controles rápidos ── -->
    <div class="mob-controls">
        <div class="mob-btn-group">
            <button id="toggle-som-mob" title="Som" class="mob-ctrl-btn"
                    onclick="document.getElementById('toggle-som')?.click()">
                <i class="fa fa-volume-up fa-fw"></i>
            </button>
            <button id="toggle-dark-mob" title="Dark mode" class="mob-ctrl-btn"
                    onclick="document.getElementById('toggle-dark-mode')?.click()">
                <i class="fa fa-moon fa-fw"></i>
            </button>
        </div>
        <div class="mob-btn-group">
            <button id="mob-decrease-font" class="mob-ctrl-btn">A-</button>
            <button id="mob-increase-font" class="mob-ctrl-btn">A+</button>
        </div>
    </div>
</div>

<!-- ══ Modal Sair Global ══════════════════════════════════════════ -->
<div id="modal-sair-global" onclick="if(event.target===this)fecharModalSairGlobal()">
    <div class="modal-sair-card">
        <img src="/fotoIndex/globinhoPe.png" width="64" class="modal-sair-img">
        <h3 class="modal-sair-title">Sair da conta</h3>
        <p id="modal-sair-msg"></p>
        <div class="modal-sair-btns">
            <button onclick="executarSaidaGlobal()" class="modal-sair-btn-confirm">Sim, sair</button>
            <button onclick="fecharModalSairGlobal()" class="modal-sair-btn-cancel">Cancelar</button>
        </div>
    </div>
</div>

<!-- Script: status do sistema -->
<script>
(function () {
    var dot   = document.getElementById('status-dot');
    var label = document.getElementById('status-label');
    var link  = document.getElementById('status-dot-link');
    function checarStatus() {
        fetch('/api/status-check.php', { cache: 'no-store' })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                if (data.ok) {
                    dot.style.background = '#4ade80';
                    dot.style.boxShadow  = '0 0 6px #4ade80';
                    link.title           = 'Todos os sistemas online';
                    label.style.display  = 'none';
                } else {
                    dot.style.background = '#f87171';
                    dot.style.boxShadow  = '0 0 6px #f87171';
                    label.textContent    = 'Instável';
                    label.style.display  = 'inline';
                    link.title           = 'Sistema instável';
                }
            })
            .catch(function () {
                dot.style.background = '#f87171';
                dot.style.boxShadow  = '0 0 6px #f87171';
                label.textContent    = 'Offline';
                label.style.display  = 'inline';
                link.title           = 'Sistema offline';
            });
    }
    checarStatus();
    setInterval(checarStatus, 60000);
})();

// ── Modal sair global ────────────────────────────────────────────
function abrirModalSairGlobal() {
    var nome     = localStorage.getItem('duvid_nome') || 'Estudante';
    // Cache em memória (populado no sync da sessão atual) tem prioridade sobre localStorage
    var criadoEm = (typeof DuvidDB !== 'undefined' && DuvidDB._cache && DuvidDB._cache.criadoEm)
                   || localStorage.getItem('duvid_criado_em');
    var membroStr = '';
    if (criadoEm) {
        // Garante parsing correto em todos os browsers (Safari não aceita espaço, só 'T')
        var d = new Date(criadoEm.replace(' ', 'T'));
        if (!isNaN(d.getTime())) {
            var meses = ['janeiro','fevereiro','março','abril','maio','junho',
                         'julho','agosto','setembro','outubro','novembro','dezembro'];
            membroStr = '<br><span style="font-size:.75rem;color:#aaa;">🗓 Membro desde ' +
                        meses[d.getMonth()] + ' de ' + d.getFullYear() + '</span>';
        }
    }
    document.getElementById('modal-sair-msg').innerHTML =
        'Olá <b>' + nome.toUpperCase() + '</b>, deseja sair neste aparelho?<br>' +
        '<span style="font-size:.8rem;color:#888;">Seu progresso fica salvo.</span>' +
        membroStr;
    var m = document.getElementById('modal-sair-global');
    m.style.display = 'flex';
}
function fecharModalSairGlobal() {
    document.getElementById('modal-sair-global').style.display = 'none';
}
function executarSaidaGlobal() {
    fetch('/api/logout.php', { method: 'POST' }).catch(function(){});
    localStorage.removeItem('duvid_nome');
    localStorage.removeItem('duvid_pin');
    window.location.href = '/home.php';
}

// ── Sincroniza header com DuvidDB + localStorage (funciona em todas as páginas) ──
(function () {
    var CORES = ['#2e7d32','#1565c0','#6a1b9a','#c62828','#e65100','#00695c'];

    function corPorNome(nome) {
        var c = 0;
        for (var i = 0; i < nome.length; i++) c += nome.charCodeAt(i);
        return CORES[c % CORES.length];
    }

    function preencherHeader() {
        var nome = localStorage.getItem('duvid_nome') || '';
        if (!nome) return;

        var hdrUser   = document.getElementById('hdr-user');
        var nomeTxt   = document.getElementById('hdr-nome-txt');
        var inicial   = document.getElementById('hdr-avatar-inicial');
        var avatarDiv = document.getElementById('hdr-avatar');
        var fotoImg   = document.getElementById('hdr-avatar-foto');

        if (nomeTxt) nomeTxt.textContent = nome.length > 14 ? nome.slice(0, 13) + '…' : nome;
        if (inicial) inicial.textContent = nome.charAt(0).toUpperCase();
        if (avatarDiv) avatarDiv.style.background = corPorNome(nome);

        var fotoUrl = localStorage.getItem('duvid_foto');
        if (fotoImg && fotoUrl) {
            fotoImg.src = fotoUrl;
            fotoImg.style.display = 'block';
            if (inicial) inicial.style.display = 'none';
        }

        if (hdrUser) hdrUser.style.display = 'flex';

        if (typeof DuvidDB === 'undefined') return;

        var saldo    = DuvidDB.getSaldo ? DuvidDB.getSaldo() : (DuvidDB.getSaldoGlobinhos ? DuvidDB.getSaldoGlobinhos() : 0);
        var progresso = DuvidDB.getProgressoRPG ? DuvidDB.getProgressoRPG() : null;

        var painel = document.getElementById('painel-pontos');
        if (painel) painel.classList.add('visivel');

        var xpSpan = document.getElementById('saldoTotalHeader');
        if (xpSpan) xpSpan.textContent = Math.floor(saldo);

        if (progresso) {
            var nivelTxt = document.getElementById('header-nivel-txt');
            if (nivelTxt) nivelTxt.textContent = 'NÍVEL ' + progresso.lvl;
            var nivelNum = document.getElementById('header-nivel-num');
            if (nivelNum) nivelNum.textContent = progresso.lvl;

            var rankTxt = document.getElementById('header-rank-txt');
            if (rankTxt) rankTxt.textContent = (progresso.patente || 'NOVATO').toUpperCase();
        }
    }

    function aguardarDuvidDB() {
        if (typeof DuvidDB !== 'undefined') {
            preencherHeader();
        } else {
            setTimeout(aguardarDuvidDB, 200);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        preencherHeader();
        aguardarDuvidDB();

        var nomeEl = document.getElementById('nome-aluno-texto');
        if (nomeEl) {
            new MutationObserver(preencherHeader)
                .observe(nomeEl, { childList: true, subtree: true, characterData: true });
        }
    });
})();
</script>

<?php include __DIR__ . '/sidebar.php'; ?>
