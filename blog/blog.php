<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="/blog/blog-estilo.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">



    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <script src="/blog/scripts-blog.js" defer></script>




    <title>Duvid Blog</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->


</head>


<body class="w3-light-grey">

    <!-- Navigation (Stays on Top) -->
    <?php include __DIR__ . '/../includes/header.php'; ?>



    <!-- Banner do blog -->
    <div id="home">
        <img src="/blog/capaBlog.svg" alt="Mapa mundi pixel art - Duvid Blog">
    </div>




    <!-- Grid -->
    <div class="w3-row  w3-border larguraBar  ">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">

            <!-- Área dos posts-->

            <div id="post-destaque" class="w3-container w3-margin-bottom"></div>

            <div class="w3-row" id="posts-grid"></div>

            <div class="w3-center w3-padding-32">
                <div class="w3-bar pagination" id="blog-pagination"></div>
            </div>

            <!-- Fim do row -->

            <!-- END BLOG ENTRIES -->
        </div>




        <!-- About/Information menu -->
        <div class="w3-col l4">
            <!-- About Card -->
            <div class="w3-white w3-margin">
                <img src="/blog/fotos/fotoPerfilblog.jpeg" alt="Duvid Geografia" style="width:100%"
                    class="w3-grayscale">
                <div class="w3-container w3-green">
                    <h4>Leandro</h4>
                    <p>Leitor; professor; aspirante a pixel artista; programador de fundo de
                        quintal...</p>
                </div>
            </div>
            <hr>

            <!-- Posts Recentes -->

            <div id="tags-container"></div>
            <div id="posts-recentes-container"></div>
            <div id="leia-tambem-container"></div>
            <div id="viagens-container"></div>




            <div id="modal-galeria" class="w3-modal" onclick="this.style.display='none'" style="z-index: 9999;">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent">
                    <img id="img-modal" style="max-width:95%; max-height:80vh; border: 5px solid white;">
                    <div id="legenda-modal" class="w3-container w3-text-white w3-padding-16 w3-large"></div>
                </div>
            </div>

            <!-- Arquivo Blog -->

            <div id="arquivo-blog-container"></div>


        </div>



    </div>


    <!-- END GRID -->


    <!-- Footer -->

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
