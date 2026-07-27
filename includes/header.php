<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
$ehAtividades = ($paginaAtual === 'atividades.php');
$ehBlog       = ($paginaAtual === 'blog.php');
$ehSimulados  = ($paginaAtual === 'capasimuladogeral.php');
?>

<style>
/* ── Header nav links ── */
.header-nav-link {
    display: inline-block;
    padding: 6px 14px;
    color: #555;
    text-decoration: none;
    font-size: .88rem;
    font-weight: 500;
    border-radius: 8px;
    transition: color .15s, background .15s;
    position: relative;
}
.header-nav-link:hover {
    color: #2e7d32;
    background: #f0f7f0;
}
.header-nav-link.active {
    color: #1b5e20;
    font-weight: 700;
}
.header-nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 14px;
    right: 14px;
    height: 2px;
    background: #4caf50;
    border-radius: 2px;
}

/* ── Avatar ring ── */
#header-avatar-img {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #4caf50;
    display: block;
}

/* ── Painel XP ── */
#painel-pontos {
    display: none;          /* oculto por padrão — JS mostra */
    flex-direction: column;
    align-items: flex-end;
    margin-right: 4px;
    gap: 0;
}
#painel-pontos.visivel {
    display: flex !important;
}

/* Esconde elementos antigos que não cabem no novo design */
#imagem50 { display: none; }
</style>

<!-- ══════════════════════════════════════════
     HEADER PRINCIPAL — Clean Pixel
══════════════════════════════════════════ -->
<div class="w3-top" style="z-index:1000; left:0; right:0;">
<nav style="background:#fff; height:56px; display:flex; align-items:center;
            padding:0 16px 0 20px; border-bottom:1px solid #eeeeee;
            gap:0; box-sizing:border-box; box-shadow:0 1px 4px rgba(0,0,0,.06);">

    <!-- Logo -->
    <a href="/home.php"
       style="display:flex; align-items:center; gap:10px; text-decoration:none;
              flex-shrink:0; margin-right:28px;">
        <div style="width:32px; height:32px; background:#2e7d32; border-radius:8px;
                    display:flex; align-items:center; justify-content:center;
                    font-weight:900; color:#fff; font-size:1.1rem; flex-shrink:0;">D</div>
        <span style="color:#2e7d32; font-weight:700; font-size:.95rem;
                     letter-spacing:-.3px; white-space:nowrap;"
              class="w3-hide-small">Duvid Geografia</span>
    </a>

    <!-- Nav links (desktop) -->
    <div class="w3-hide-small" style="display:flex; align-items:center; gap:2px; flex:1;">
        <a href="/atividades/atividades.php"
           class="header-nav-link <?= $ehAtividades ? 'active' : '' ?>">Atividades</a>
        <a href="/blog/blog.php"
           class="header-nav-link <?= $ehBlog ? 'active' : '' ?>">Blog</a>
        <a href="/simulados/capasimuladogeral.php"
           class="header-nav-link <?= $ehSimulados ? 'active' : '' ?>">Simulados</a>
    </div>

    <!-- Lado direito -->
    <div style="display:flex; align-items:center; gap:6px; margin-left:auto; flex-shrink:0;">

        <!-- XP + Nível (mostrado quando logado) -->
        <div id="painel-pontos">
            <span style="font-size:.82rem; font-weight:700; color:#4caf50; line-height:1.2;">
                XP: <span id="saldoTotalHeader" class="fontePixel">0</span>
            </span>
            <span style="font-size:.6rem; font-weight:700; color:#f9a825; letter-spacing:1px; text-transform:uppercase; line-height:1.2;">
                <span id="header-nivel-txt">NÍVEL 1</span> · <span id="header-rank-txt">NOVATO</span>
            </span>
            <!-- Mantidos para compatibilidade com JS existente (ocultos visualmente) -->
            <span id="notaFixa" style="display:none;">0</span>
        </div>

        <!-- Avatar / Medalha (mostrado quando logado) -->
        <div id="header-avatar" style="display:none;">
            <img id="header-avatar-img"
                 src="/fotoIndex/icones/duvid-patentes-novato.png"
                 alt="Patente">
        </div>

        <!-- Status dot do sistema -->
        <a href="/status.php" id="status-dot-link" title="Verificando..." target="_blank"
           style="display:flex; align-items:center; gap:4px; text-decoration:none;
                  padding:4px 8px; border-radius:20px; background:#f5f5f5;
                  transition:background .15s;"
           onmouseover="this.style.background='#eeeeee'"
           onmouseout="this.style.background='#f5f5f5'">
            <span id="status-dot"
                  style="width:8px; height:8px; border-radius:50%; background:#aaa;
                         display:inline-block; flex-shrink:0; transition:background .4s;"></span>
            <span id="status-label"
                  style="font-size:.68rem; color:#777; display:none;"></span>
        </a>

        <!-- Hamburger (mobile) -->
        <button class="w3-hide-large w3-hide-medium"
                onclick="AbrirNavBar(); return false;"
                style="background:none; border:none; color:#555; padding:6px 10px;
                       cursor:pointer; font-size:1.1rem;">
            <i class="fa fa-bars"></i>
        </button>

    </div>
</nav>
</div>

<!-- ══════════════════════════════════════════
     NAV MOBILE — drawer sobreposto
══════════════════════════════════════════ -->
<div id="navDemo"
     class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top w3-left-align"
     style="margin-top:56px; z-index:999; background:#fff;
            border-top:1px solid #eee; box-shadow:0 4px 12px rgba(0,0,0,.08);">

    <a href="/atividades/atividades.php"
       class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Atividades</a>

    <div class="w3-dropdown-click w3-left-align">
        <button onclick="AbrirDropDown('aulas-mobile')"
                class="w3-button w3-block w3-padding-large"
                style="text-align:left; width:100%; border:none; background:inherit; color:#333;">
            Aulas <i class="fa fa-caret-down"></i>
        </button>
        <div id="aulas-mobile" class="w3-dropdown-content w3-bar-block w3-card-4 w3-white">
            <a href="/Duvid1Ano.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">🌿 Natureza</a>
            <a href="/Duvid2Ano.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">🇧🇷 Brasil</a>
            <a href="/Duvid3Ano.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">🌍 Mundo</a>
        </div>
    </div>

    <a href="/blog/blog.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Blog</a>
    <a href="/simulados/capasimuladogeral.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Simulados</a>
    <a href="/paginas/ranking.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Ranking</a>
    <a href="/paginas/criar-turma.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Turma</a>
    <a href="/paginas/instrucoes.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Instruções</a>
    <a href="/paginas/creditos.php" class="w3-bar-item w3-button w3-padding-large"
       style="color:#333;" onclick="AbrirNavBar()">Créditos</a>

    <!-- Controles rápidos (mobile only) -->
    <div style="display:flex; align-items:center; justify-content:space-between;
                padding:12px 16px; border-top:1px solid #eee; margin-top:4px;">
        <div style="display:flex; gap:6px;">
            <button id="toggle-som-mob" title="Som"
                    onclick="document.getElementById('toggle-som')?.click()"
                    style="width:38px;height:38px;border-radius:8px;border:1px solid #e0e0e0;
                           background:#f8f9fa;color:#555;font-size:.95rem;cursor:pointer;">
                <i class="fa fa-volume-up fa-fw"></i></button>
            <button id="toggle-dark-mob" title="Dark mode"
                    onclick="document.getElementById('toggle-dark-mode')?.click()"
                    style="width:38px;height:38px;border-radius:8px;border:1px solid #e0e0e0;
                           background:#f8f9fa;color:#555;font-size:.95rem;cursor:pointer;">
                <i class="fa fa-moon fa-fw"></i></button>
        </div>
        <div style="display:flex; gap:4px;">
            <button onclick="document.getElementById('decrease-font')?.click()"
                    style="width:38px;height:38px;border-radius:8px;border:1px solid #e0e0e0;
                           background:#f8f9fa;color:#555;font-size:.8rem;font-weight:700;cursor:pointer;">A-</button>
            <button onclick="document.getElementById('increase-font')?.click()"
                    style="width:38px;height:38px;border-radius:8px;border:1px solid #e0e0e0;
                           background:#f8f9fa;color:#555;font-size:.85rem;font-weight:700;cursor:pointer;">A+</button>
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

// Sincroniza XP, nível, rank e avatar no header quando duvid-core.js preencher os dados
(function () {
    function syncHeader() {
        var nomeEl    = document.getElementById('nome-aluno-texto');
        var lvlEl     = document.getElementById('lvl-tag');
        var rankEl    = document.getElementById('rank-nome');
        var medalhaEl = document.getElementById('medalha-patente');
        var xpAtualEl = document.getElementById('xp-atual');

        // Só mostra se o aluno estiver identificado
        if (!nomeEl || !nomeEl.textContent.trim()) return;

        // Mostra o painel XP
        var painel = document.getElementById('painel-pontos');
        if (painel) painel.classList.add('visivel');

        // XP total (usa xp-atual se saldoTotalHeader não for atualizado pelo core)
        var xpSpan = document.getElementById('saldoTotalHeader');
        if (xpSpan && xpAtualEl && !xpSpan.textContent.trim()) {
            xpSpan.textContent = xpAtualEl.textContent;
        }

        // Nível
        var nivelTxt = document.getElementById('header-nivel-txt');
        if (nivelTxt && lvlEl && lvlEl.textContent.trim()) {
            nivelTxt.textContent = lvlEl.textContent.toUpperCase();
        }

        // Rank/patente (ex: "EXPLORADOR" — remove o "Rank #12" se vier junto)
        var rankTxt = document.getElementById('header-rank-txt');
        if (rankTxt && rankEl && rankEl.textContent.trim()) {
            var rankLimpo = rankEl.textContent.replace(/rank\s*#?\d+\s*/i, '').trim();
            rankTxt.textContent = rankLimpo || 'NOVATO';
        }

        // Avatar (usa imagem da patente)
        var avatarDiv = document.getElementById('header-avatar');
        var avatarImg = document.getElementById('header-avatar-img');
        if (avatarDiv && medalhaEl && medalhaEl.src) {
            avatarImg.src = medalhaEl.src;
            avatarDiv.style.display = 'block';
        }
    }

    function iniciar() {
        var nomeEl = document.getElementById('nome-aluno-texto');
        if (!nomeEl) { setTimeout(iniciar, 150); return; }
        new MutationObserver(syncHeader)
            .observe(nomeEl, { childList: true, subtree: true, characterData: true });
        syncHeader();
    }
    document.addEventListener('DOMContentLoaded', iniciar);
})();
</script>

<?php include __DIR__ . '/sidebar.php'; ?>
