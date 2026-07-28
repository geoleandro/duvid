<?php
// ── Configuração do módulo ──────────────────────────────────────────────────
$ano          = 1;
$tituloModulo = 'Natureza';
$emojiModulo  = '🌿';
$tagModulo    = 'Módulo · 1º Ano';
$descModulo   = 'Explore as dinâmicas do Planeta Terra em uma jornada pixelada. Descubra os segredos dos climas, relevos e biomas que compõem nosso mundo.';
$fundoBanner  = '/fotoIndex/tileset/fundo-natureza.webp';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid — <?= $emojiModulo ?> <?= $tituloModulo ?></title>
    <meta name="description" content="<?= $descModulo ?>">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/aulas-estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>
</head>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main>

    <!-- ══ HERO BANNER ══════════════════════════════════════════════════ -->
    <div class="aulas-hero" style="background-image:url('<?= $fundoBanner ?>')">
        <div class="aulas-hero-overlay">
            <div class="aulas-hero-content">

                <div class="aulas-hero-text">
                    <span class="aulas-hero-tag"><?= $tagModulo ?></span>
                    <h1 class="aulas-hero-h1"><?= $emojiModulo ?> <?= $tituloModulo ?></h1>
                    <p class="aulas-hero-desc"><?= $descModulo ?></p>
                </div>

                <div class="aulas-hero-badge">
                    <span class="hero-badge-num" id="hero-porc">0%</span>
                    <span class="hero-badge-label">Concluído</span>
                </div>

            </div>
        </div>
    </div>

    <!-- ══ CORPO ════════════════════════════════════════════════════════ -->
    <div class="aulas-body">

        <!-- ── Coluna principal ── -->
        <div class="aulas-main">

            <!-- Progress card (preenchido pelo JS) -->
            <div id="painel-usuario"></div>

            <!-- Grid de aulas (preenchido pelo JS) -->
            <div id="grid-aulas"></div>

        </div>

        <!-- ── Coluna lateral direita ── -->
        <aside class="aulas-aside">

            <!-- Google Play -->
            <div class="widget-card widget-app">
                <div class="widget-head"><span>📱 App Offline</span></div>
                <p class="widget-desc" style="margin-bottom:10px;">Estude sem internet com o app do módulo Natureza.</p>
                <a href="https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid1ano"
                   target="_blank" rel="noopener"
                   style="display:block; text-align:center;">
                    <img src="/fotoIndex/imagensCapa/google-play-badge1.png"
                         alt="Disponível no Google Play"
                         style="width:100%; max-width:160px; height:auto;">
                </a>
            </div>

            <!-- Inventário -->
            <div class="widget-card">
                <div class="widget-head">
                    <span>🎒 Inventário</span>
                    <span class="widget-head-sub" id="inv-contagem">0/4</span>
                </div>
                <div class="inventario-lista" id="inventario-lista">
                    <!-- preenchido pelo JS depois do progresso -->
                </div>
            </div>

            <!-- Comunidade -->
            <div class="widget-card widget-comunidade">
                <div class="widget-head">
                    <span>✏️ Contribua com o Duvid</span>
                </div>
                <p class="widget-desc">Tem uma questão, ideia ou pixel art para contribuir com o Duvid?</p>
                <button onclick="abrirModalMural()" class="widget-btn">Contribuir →</button>
            </div>

        </aside>
    </div>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){ dataLayer.push(arguments); }
gtag('js', new Date());
gtag('config', 'G-DPX55DSFZ0');
</script>

<script>
document.addEventListener('DOMContentLoaded', async function () {
    if (typeof DuvidDB !== 'undefined' && DuvidDB.pronto) await DuvidDB.pronto;
    if (typeof carregarAulas === 'function') await carregarAulas('<?= $ano ?>');
    if (typeof sincronizarNomeGlobal === 'function') sincronizarNomeGlobal();
});
</script>

</body>
</html>
