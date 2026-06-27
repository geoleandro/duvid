<?php
// ═══════════════════════════════════════════════════════════════
//  DADOS DO ARTIGO — edite apenas esta seção para cada artigo
// ═══════════════════════════════════════════════════════════════
$titulo    = "Título do Artigo Aqui";
$descricao = "Resumo de uma ou duas frases para SEO e redes sociais.";
$imagem    = "/blog/fotos/nome-da-imagem.jpg";   // caminho absoluto a partir de /
$data      = "DD de mês de AAAA";
$autor     = "Leandro Henrique da Silva";
// ═══════════════════════════════════════════════════════════════
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="<?= htmlspecialchars($descricao) ?>">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title"       content="<?= htmlspecialchars($titulo) ?> — Duvid Blog">
    <meta property="og:description" content="<?= htmlspecialchars($descricao) ?>">
    <meta property="og:image"       content="https://duvid.com.br<?= htmlspecialchars($imagem) ?>">
    <meta property="og:type"        content="article">

    <!-- Google AdSense -->
    <meta name="google-adsense-account" content="ca-pub-5408157966429216">

    <!-- Estilos -->
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/blog/blog-estilo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    <script src="/blog/scripts-blog.js" defer></script>
    <script src="/js/carregar.js"       defer></script>
    <script src="/js/abrirmenu.js"      defer></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <title><?= htmlspecialchars($titulo) ?> — Duvid Blog</title>
</head>

<body class="w3-light-grey">

    <!-- SDK do Facebook (para comentários) -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0"></script>

    <!-- Cabeçalho do site -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <!-- ─── Conteúdo principal ─── -->
    <div class="w3-row w3-content" style="max-width:1600px; margin-top:20px;">

        <!-- Coluna do artigo (8/12) -->
        <div class="w3-col l8 s12">
            <div class="w3-container artigo-texto w3-white w3-margin-bottom w3-padding-32">

                <h2 class="w3-center">
                    <strong id="artigo-titulo-principal"><?= htmlspecialchars($titulo) ?></strong>
                </h2>

                <div class="w3-margin w3-center">
                    <img id="imagem-principal"
                         src="<?= htmlspecialchars($imagem) ?>"
                         alt="<?= htmlspecialchars($titulo) ?>"
                         class="w3-mobile"
                         style="width:100%; border-radius:8px; max-height:400px; object-fit:cover;">
                </div>

                <ul>
                    <li class="w3-small sem-pontos">
                        Por <span id="artigo-autor"><?= htmlspecialchars($autor) ?></span>
                    </li>
                    <li class="w3-opacity w3-small sem-pontos" id="artigo-data">
                        <?= htmlspecialchars($data) ?>
                    </li>
                </ul>

                <hr>

                <!-- Citação em destaque vinda do artigos.json (injetada pelo scripts-blog.js) -->
                <div id="citacao-dinamica"></div>

                <!-- ═══════════════════════════════════════
                     CORPO DO ARTIGO
                     Escreva parágrafos, subtítulos e
                     blockquotes abaixo.
                ═══════════════════════════════════════ -->
                <div class="corpo-artigo">

                    <p>Escreva o primeiro parágrafo aqui.</p>

                    <h5><strong>Subtítulo de seção</strong></h5>

                    <p>Continua o texto...</p>

                    <!-- Citação estilizada — a borda verde vem do blog-estilo.css -->
                    <blockquote>
                        <em>"Texto da citação aqui."</em><br>
                        <span class="w3-small w3-opacity">— Autor da citação</span>
                    </blockquote>

                    <p>Mais parágrafos...</p>

                    <!-- Assinatura do autor (opcional) -->
                    <p class="assinatura-autor">
                        — <?= htmlspecialchars($autor) ?>, professor de Geografia e criador do Duvid
                    </p>

                </div>
                <!-- ═══ FIM DO CORPO ═══ -->

                <!-- Botões de compartilhamento (injetados pelo scripts-blog.js) -->
                <div id="icones-compartilhamento" class="w3-padding-16"></div>
                <hr>

                <!-- Comentários do Facebook (injetados pelo scripts-blog.js) -->
                <div id="comentarios-fb"></div>

            </div>
        </div>

        <!-- Sidebar (4/12) — preenchida pelo scripts-blog.js -->
        <div class="w3-col l4 s12">
            <div id="tags-container"></div>
            <div id="posts-recentes-container"></div>
            <div id="leia-tambem-container"></div>
            <div id="arquivo-blog-container"></div>
        </div>

    </div>

    <!-- Rodapé do site -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>

</body>
</html>
