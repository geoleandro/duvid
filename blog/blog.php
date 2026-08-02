<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid Blog — Geografia e Mundo</title>
    <meta name="description" content="Blog de Geografia do Duvid: artigos, curiosidades e novidades sobre o mundo.">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/blog/blog-estilo.css">

    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>
    <script src="/js/jessica-walker.js" defer></script>
    <script src="/blog/scripts-blog.js" defer></script>

</head>

<body>

    <?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO BANNER ══════════════════════════════════════════════════ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-blog.webp')">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📰 Novidades</span>
            </div>
            <h1 class="texto-hero-title">📖 Blog do Duvid</h1>
        </div>
    </div>

    <!-- ══ CORPO ════════════════════════════════════════════════════════ -->
    <div class="blog-body-pad">

        <!-- Grid de posts + sidebar direita do blog -->
        <div class="blog-grid-row">

            <!-- Coluna principal: posts -->
            <div class="blog-col-main">
                <div id="post-destaque" class="w3-margin-bottom"></div>
                <div id="posts-grid"></div>
                <div class="w3-center w3-padding-32">
                    <div class="w3-bar pagination" id="blog-pagination"></div>
                </div>
            </div>

            <!-- Coluna lateral do blog: perfil + tags + arquivo -->
            <aside class="blog-col-aside">

                <!-- Card do autor -->
                <div class="blog-widget">
                    <img src="/blog/fotos/fotoPerfilblog.jpeg" alt="Duvid Geografia"
                         style="width:100%; border-radius:16px 16px 0 0;" class="w3-grayscale">
                    <div style="padding:12px 16px; background:#2e7d32; border-radius:0 0 16px 16px;">
                        <h4 style="margin:0 0 4px; color:#fff; font-family:'Montserrat',sans-serif; font-size:.95rem;">Leandro</h4>
                        <p style="margin:0; color:rgba(255,255,255,.8); font-size:.8rem; line-height:1.4;">Professor · pixel artista · programador de fundo de quintal</p>
                    </div>
                </div>

                <div id="tags-container"></div>
                <div id="posts-recentes-container"></div>
                <div id="leia-tambem-container"></div>
                <div id="viagens-container"></div>
                <div id="arquivo-blog-container"></div>

            </aside>

        </div>

    </div>

</main>

<!-- Modal galeria -->
<div id="modal-galeria" class="w3-modal" onclick="this.style.display='none'" style="z-index:9999;">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent">
        <img id="img-modal" style="max-width:95%; max-height:80vh; border:5px solid white;">
        <div id="legenda-modal" class="w3-container w3-text-white w3-padding-16 w3-large"></div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-DPX55DSFZ0');
</script>

</body>
</html>
