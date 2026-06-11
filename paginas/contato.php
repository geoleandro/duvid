<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Duvid - Contato</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
        @font-face {
            src: url('/fontes/FreePixel.woff');
            font-family: pixel;
        }

        h1,
        h2,
        h3 {
            font-family: 'pixel', sans-serif;
            text-transform: uppercase;
            color: #2e7d32;
        }

        p,
        li,
        strong {
            font-family: 'Verdana', 'Geneva', 'Tahoma', sans-serif;
            line-height: 1.6;
            font-size: 1.05em;
        }

        .contato-info {
            margin-bottom: 20px;
            padding: 16px;
            border-left: 5px solid #4ade80;
            background-color: rgba(0, 0, 0, 0.02);
            border-radius: 0 8px 8px 0;
        }

        body.dark-mode .contato-info {
            background-color: rgba(255, 255, 255, 0.05);
        }
    </style>
</head>

<body class="w3-light-grey">

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <div class="w3-content" style="max-width:800px; margin-top:80px; margin-bottom:100px;">

        <div class="w3-container w3-white w3-card-4 w3-margin w3-padding-32 w3-round-large">

            <h1 class="w3-center w3-text-green"><b>Contato</b></h1>
            <p class="w3-center w3-opacity">Fale com o professor responsável pelo projeto</p>
            <hr>

            <div class="contato-info">
                <p><i class="fa fa-map-marker w3-text-green"></i> <strong>Localização:</strong> Poços de Caldas, Minas
                    Gerais.</p>
            </div>

            <div class="contato-info">
                <p><i class="fa fa-envelope w3-text-green"></i> <strong>E-mail:</strong>
                    leandro.hsilva@ifsuldeminas.edu.br</p>
            </div>

            <div class="contato-info">
                <p><i class="fa fa-graduation-cap w3-text-green"></i> <strong>Instituição:</strong> IFSULDEMINAS — Campus
                    Poços de Caldas</p>
            </div>

            <div class="w3-container w3-center w3-margin-top">
                <p class="w3-small">Interessado em colaborar com o projeto, sugerir conteúdos ou reportar erros? Mande
                    um e-mail!</p>
            </div>
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
