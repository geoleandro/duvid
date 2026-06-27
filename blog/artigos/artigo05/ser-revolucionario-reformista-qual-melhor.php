<?php
$titulo    = "Ser Revolucionário ou Reformista: Qual é a melhor opção?";
$descricao = "Na jornada das ideias políticas e sociais, duas visões se destacam: ser revolucionário ou reformista. Qual delas é a melhor?";
$imagem    = "/blog/artigos/artigo05/artigo05f01.jpg";
$data      = "05 de maio de 2024";
$autor     = "Leandro Henrique da Silva";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($descricao) ?>">
    <meta property="og:title"       content="<?= htmlspecialchars($titulo) ?> — Duvid Blog">
    <meta property="og:description" content="<?= htmlspecialchars($descricao) ?>">
    <meta property="og:image"       content="https://duvid.com.br<?= htmlspecialchars($imagem) ?>">
    <meta property="og:type"        content="article">
    <meta name="google-adsense-account" content="ca-pub-5408157966429216">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/blog/blog-estilo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="/blog/scripts-blog.js" defer></script>
    <script src="/js/carregar.js"       defer></script>
    <script src="/js/abrirmenu.js"      defer></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>
    <title><?= htmlspecialchars($titulo) ?> — Duvid Blog</title>
</head>
<body class="w3-light-grey">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0"></script>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <div class="w3-row w3-content" style="max-width:1600px; margin-top:20px;">
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
                         style="width:100%; border-radius:8px; max-height:500px; object-fit:cover;">
                </div>
                <ul>
                    <li class="w3-small sem-pontos">Por <span id="artigo-autor"><?= htmlspecialchars($autor) ?></span></li>
                    <li class="w3-opacity w3-small sem-pontos" id="artigo-data"><?= htmlspecialchars($data) ?></li>
                </ul>
                <hr>
                <div id="citacao-dinamica"></div>
                <div class="corpo-artigo">

                    <p>Na jornada das ideias políticas e sociais, duas visões se destacam: ser revolucionário ou
                        reformista. Ambas têm seus pontos positivos e negativos, mas qual delas é a melhor para criar
                        mudanças reais na sociedade?</p>

                    <p>Os reformistas dizem que devemos fazer mudanças gradativas. Eles querem trabalhar dentro do
                        sistema atual para fazer reformas aos poucos. Isso evita os problemas que podem acontecer em
                        revoluções, como violência e caos. Mas muitas vezes, as mudanças são lentas demais,
                        especialmente, para quem sofre com as injustiças do sistema.</p>

                    <p>Por outro lado, os revolucionários querem mudanças rápidas e radicais. Eles acham que fazer
                        pequenas mudanças não resolve problemas sérios, como desigualdade, injustiça e opressão. Mas
                        revoluções podem ser perigosas e incertas.</p>

                    <p>Na vida real, nos deparamos com muita hipocrisia e pressão para seguir o grupo. Às vezes, falamos
                        uma coisa e fazemos outra. E pode ser complicado expressar nossas opiniões se elas nos tornam
                        diferentes dos nossos amigos. Isso é especialmente evidente nas escolas, onde passamos a maior
                        parte do tempo. Se você tem uma opinião diferente, é como se fosse convidado a se retirar.</p>

                    <p>Voltando para os reformistas, podemos perguntar se eles realmente querem mudar as coisas ou só
                        querem manter o poder. Por exemplo, um político pode propor leis para ajudar os pobres, mas
                        talvez não queira brigar com os ricos que têm o controle da estrutura socioeconômica.</p>

                    <p>Os revolucionários podem estar determinados a derrubar o governo, mas será que têm um plano
                        sólido para o que acontecerá em seguida? Eles realmente querem mudar as coisas para melhor, ou
                        estão agindo impulsivamente por conta da frustração com o status quo?</p>

                    <p>É importante notar que, muitas vezes, vemos outro grupo assumir o poder depois de uma revolução,
                        e as coisas acabam permanecendo iguais ou até piorando. Além disso, podemos olhar para dentro de
                        nós mesmos. Às vezes, tentamos mudar o mundo porque não queremos encarar nossos próprios
                        problemas. Por exemplo, podemos nos envolver muito em política para fugir dos nossos próprios
                        medos e tristezas.</p>

                    <blockquote>
                        <p><i>"Temos receio de enfrentar os desafios sozinhos e, por isso, buscamos orientação de
                                figuras que consideramos ter autoridade, seja ela de natureza reformista,
                                revolucionária, religiosa, ou de qualquer outra vertente."</i></p>
                    </blockquote>

                    <p>Até percebermos que eles são tão humanos quanto qualquer um, cheios de falhas e ambições
                        desmedidas. A partir desse momento, podemos voltar nosso olhar para dentro de nós mesmos antes
                        de tentar transformar o mundo exterior. Descobrimos que não precisamos seguir cegamente ninguém,
                        pois tudo o que vemos no outro também existe dentro de cada um.</p>

                    <p>Enfim, não há uma resposta certa. Depende da situação de cada sociedade. Mas talvez a verdadeira
                        mudança comece quando questionamos as ideias que nos ensinam desde sempre e começamos a pensar
                        por conta própria. Nossa interação diária com os outros molda a sociedade em que vivemos.
                        Algumas mudanças dependem apenas de nós mesmos, mas outras parecem impossíveis. É crucial
                        entendermos isso, pois somente assim podemos contribuir verdadeiramente para a revolução
                        necessária ou para a manutenção do que já existe.</p>

                </div>
                <div id="icones-compartilhamento" class="w3-padding-16"></div>
                <hr>
                <div id="comentarios-fb"></div>
            </div>
        </div>
        <div class="w3-col l4 s12">
            <div id="tags-container"></div>
            <div id="posts-recentes-container"></div>
            <div id="leia-tambem-container"></div>
            <div id="arquivo-blog-container"></div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>
</body>
</html>
