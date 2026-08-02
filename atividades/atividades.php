<?php
$tituloPagina = 'Atividades';
$emojiPagina  = '🧩';
$tagPagina    = 'Recursos Didáticos';
$descPagina   = 'Materiais prontos para imprimir e aplicar em sala de aula. Mapas, infográficos, fichas e muito mais.';
$fundoBanner  = '/fotoIndex/tileset/fundo-atividades.webp';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid — <?= $emojiPagina ?> <?= $tituloPagina ?></title>
    <meta name="description" content="<?= $descPagina ?>">

    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/atividades-estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>

    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>
    <script src="/js/jessica-walker.js" defer></script>
    <script src="/js/atividades-duvid.js" defer></script>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO BANNER ══════════════════════════════════════════════════ -->
    <div class="texto-hero" style="background-image:url('<?= $fundoBanner ?>')">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green"><?= $tagPagina ?></span>
            </div>
            <h1 class="texto-hero-title"><?= $emojiPagina ?> <?= $tituloPagina ?></h1>
        </div>
    </div>

    <!-- ══ CORPO ════════════════════════════════════════════════════════ -->
    <div class="atv-body-pad">

        <!-- Barra de busca e filtros -->
        <div class="atv-toolbar">
            <div class="atv-busca-wrap">
                <i class="fa fa-search atv-busca-icon"></i>
                <input id="inputBusca" class="atv-busca-input" type="text"
                    placeholder="Buscar por tema, ex: Clima, Escala...">
            </div>
            <div id="botoes-filtro-atv" class="atv-filtros"></div>
        </div>

        <!-- Grid de atividades (preenchido pelo JS) -->
        <div id="container-atividades" class="atv-grid"></div>

    </div>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<button onclick="voltarAoTopo()" id="btn-topo" class="w3-button w3-green w3-padding w3-round-large"
    style="position:fixed; bottom:20px; right:20px; display:none;">
    <i class="fa fa-arrow-up"></i>
</button>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-DPX55DSFZ0');
</script>

</body>
</html>
