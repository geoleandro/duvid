<?php
$titulo    = "A nossa Guerra de cada dia";
$descricao = "O temor de uma Terceira Guerra Mundial surge na mídia constantemente, mas ignoramos as guerras invisíveis do cotidiano.";
$imagem    = "/blog/artigos/artigo03/artigo03f01.jpg";
$data      = "20 de abril de 2024";
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

                    <p>A todo momento, o temor de uma Terceira Guerra Mundial surge na mídia e se prolonga por alguns
                        dias ou até semanas, e isso tem se repetido há muito tempo. No entanto, o que não é suficiente
                        para produzir uma mudança efetiva em nós diante das tragédias que presenciamos.</p>

                    <p>Isso significa que os fatores causadores da Guerra têm se perpetuado no ser humano desde sua
                        origem e, repetidamente, manifestado em nosso cotidiano. Há os poderosos e os subjugados; os
                        ricos e os pobres; a ganância e a busca pelo poder em todos os níveis; as classes e os
                        preconceitos, e isso não cessa nem mesmo com os conflitos atuais existentes.</p>

                    <p><strong>Por que o ser humano não muda?</strong> Ou melhor, nem mesmo sendo conhecedor de sua
                        própria finitude, continuamos alimentando essa devoção a nações, posições de mando, ideologias ou acúmulo de
                        posses diversas?</p>

                    <p>O fato é que transformamos nosso próprio cotidiano em uma verdadeira guerra interna, o que irá,
                        com certeza, transbordar para o mundo externo. <strong>O que somos, a sociedade será</strong>,
                        e, depois, a própria sociedade torna-se quase uma entidade separada do indivíduo, mas sabemos que não o é
                        verdadeiramente.</p>

                    <p>Essa competição que impelimos às crianças e jovens desde a idade escolar virá à tona mais tarde
                        em forma de conflitos. Estamos na era tecnológica e entrando na era da inteligência artificial,
                        mas não conseguimos trabalhar juntos em uma equipe de 3 pessoas, por exemplo. Por quê? Uma das
                        razões é justamente esse desejo de identificação: somos dessa nação ou dessa ideologia, temos
                        essa determinada crença ou aquela outra; mas nunca questionamos a razão de apelar para objetos
                        ou ideias, ou mesmo seguir ou repetir frases alheias.</p>

                    <p>Os conflitos estão presentes em todas as relações sociais. Nos pequenos golpes, cobrança abusiva;
                        nas vantagens, seja no suborno ou aproveitando-se de conexões pessoais para obter privilégios;
                        na força ou na pequena corrupção aceita como manifestação cultural.</p>

                    <blockquote>
                        <p><i>"Não sabemos quantas guerras existirão, mas temos conhecimento da nossa
                                própria ambição e de nossa ganância. Do conflito que existe entre o que somos e o que gostaríamos de ser no futuro
                                que nunca virá."</i></p>
                    </blockquote>

                    <p>Estamos perfeitamente conscientes da brutalidade deste mundo criado por nós. Dos
                        políticos e grupos que somente querem comandar nossos pensamentos.</p>

                    <p>Somos refinados intelectualmente e temos explicações para tudo, mas por dentro sentimos <strong>o medo do
                            fracasso</strong>, de não ser reconhecido ou, pior, aconselhamos nossos próximos a se moldarem a essa
                        mesma sociedade em guerra contínua.</p>

                    <p>A Guerra não é algo externo, mas sim resultado das relações entre indivíduos. O mundo é humano,
                        apesar de qualquer crença, ideologia ou teoria. A origem da Guerra envolve domínio territorial,
                        mas não é culpa do território e sim da vontade de se sentir seguro, sem conflitos.</p>

                    <p><strong>Queremos estar seguros</strong> agora e no futuro e esse desejo produzirá,
                        inevitavelmente, mais guerras. Nenhuma lei encerrará o desejo de poder do ser humano nem fará seus dogmas desaparecerem.</p>

                    <p>Não chegaremos a um estado de paz apenas com discursos, com leis, ou com algo externo que nos
                        faça sentir pertencentes a determinado grupo. <strong>O ser humano não pode ser
                            fragmentado</strong>, pois o mesmo chinês, europeu ou africano sentem as mesmas dores, medos ou ambição que qualquer um. O
                        que nos resta é observar a nós mesmos diariamente, como nascem os conflitos e como os
                        alimentamos, para que não perpetuemos novas guerras para as gerações futuras.</p>

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
