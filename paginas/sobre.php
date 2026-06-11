<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid - Sobre o projeto</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>


    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
        /* Tipografia Híbrida seguindo o padrão da página de Instruções */
        h1,
        h2,
        h3,
        h4 {
            font-family: 'pixel', sans-serif;
            text-transform: uppercase;
            color: #2e7d32;
            /* Verde tema */
        }

        p,
        li,
        strong {
            font-family: 'Verdana', 'Geneva', 'Tahoma', sans-serif;
            line-height: 1.6;
            font-size: 1.05em;
        }

        .sessao-entrevista {
            margin-bottom: 25px;
            padding: 20px;
            border-left: 5px solid #4ade80;
            background-color: rgba(0, 0, 0, 0.02);
            border-radius: 0 8px 8px 0;
        }

        body.dark-mode .sessao-entrevista {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .video-container {
            margin: 20px 0;
            background: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="w3-light-grey">

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <div class="w3-content" style="max-width:900px; margin-top: 80px; margin-bottom: 100px;">

        <div class="w3-container w3-white w3-card-4 w3-margin w3-padding-32 w3-round-large">

            <h1 class="w3-center w3-text-green"><b>Conheça o Projeto Duvid</b></h1>
            <p class="w3-center w3-opacity">Educação, Geografia e Tecnologia</p>
            <hr>

            <div class="w3-center w3-padding-16">
                <img class="w3-round w3-card-4" src="/fotoIndex/fotoperfil.jpg" alt="Prof. Leandro"
                    style="width: 100%; max-width: 500px; height: auto;">
            </div>

            <div class="w3-container">
                <h2 class="w3-center">Entrevista com o professor</h2>

                <div class="sessao-entrevista">
                    <p><strong>Duvid:</strong> Professor, como foi a ideia de criar esse projeto, do que se trata?</p>
                    <p><strong>Prof. Leandro:</strong> Surgiu da minha atividade no IFSP. Em 2019, idealizei um produto
                        multiplataforma: site, jogo e app offline para o ensino médio.</p>
                </div>

                <div class="sessao-entrevista">
                    <p><strong>Duvid:</strong> É um livro eletrônico?</p>
                    <p><strong>Prof. Leandro:</strong> É um livro personalizado e interativo, gratuito e colaborativo,
                        focado no registro da evolução do aluno.</p>
                </div>

                <div class="sessao-entrevista">
                    <p><strong>Duvid:</strong> E o acesso offline?</p>
                    <p><strong>Prof. Leandro:</strong> Fundamental. Nem todos têm internet constante, por isso o app
                        permite estudar com facilidade em qualquer lugar.</p>
                </div>

                <hr>

                <h2 class="w3-center"><i class="fa fa-gamepad"></i> Jogo Aventura Geográfica</h2>

                <div class="w3-center video-container">
                    <video class="w3-mobile" width="580" controls>
                        <source src="/audios/JogoGeografia.mp4" type="video/mp4">
                    </video>
                </div>

                <p>O jogo conta a história de Jéssica e sua investigação ambiental, unindo o enredo ao conteúdo
                    geográfico.</p>

                <div class="w3-center video-container">
                    <video class="w3-mobile" width="320" controls>
                        <source src="/audios/VideoAfrica02.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="w3-container w3-center w3-margin-top">
                <p class="w3-small">Interessado em colaborar? <br><b>leandro.hsilva@ifsuldeminas.edu.br</b></p>
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
