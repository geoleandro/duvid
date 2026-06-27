<?php
$titulo    = "A Sociedade só valoriza a Escola quando lhe convém";
$descricao = "Vivemos em uma sociedade que frequentemente proclama a importância da educação, mas o valor real só aparece em momentos específicos.";
$imagem    = "/blog/artigos/artigo07/artigo07f01.jpg";
$data      = "14 de maio de 2024";
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

                    <p>Vivemos em uma sociedade que frequentemente proclama a importância da educação. Os pais, as
                        autoridades e os meios de comunicação exaltam o valor da escola como o caminho para um futuro
                        melhor. No entanto, essa valorização é genuína ou é apenas conveniente?
                        Quando a rotina escolar é interrompida por greves, muitas vezes vemos uma indignação que revela
                        a verdadeira natureza do interesse pela educação. Vamos explorar essa questão e refletir sobre o
                        que realmente significa valorizar a escola.</p>

                    <p>A educação é frequentemente vista como a pedra angular do desenvolvimento pessoal e social.
                        Contudo, esse respeito aparente pela escola é, muitas vezes, superficial. Quando os professores
                        entram em greve para reivindicar melhores condições de trabalho e salários justos, a reação de
                        muitos pais não é de apoio, mas de irritação. Eles veem a greve como uma inconveniência, uma
                        interrupção em suas rotinas, e não como um reflexo da desvalorização sistêmica do papel do
                        educador.</p>

                    <p>Por que essa discrepância? Por que a educação é valorizada apenas quando as escolas estão
                        funcionando sem problemas? A resposta está na hipocrisia que permeia nossa sociedade.</p>

                    <blockquote>
                        <p><i>"Valorizamos a escola como um meio de manter as crianças ocupadas, como uma guardiã
                                conveniente que nos permite seguir nossas próprias rotinas. Quando esse serviço é
                                interrompido, o verdadeiro valor que atribuímos à educação — ou a falta dele — se torna
                                evidente."</i></p>
                    </blockquote>

                    <p>A indignação dos pais durante as greves revela uma visão míope. Em vez de enxergar as greves
                        como um sintoma de problemas mais profundos no sistema educacional, muitos veem apenas a
                        superfície do problema: a inconveniência temporária. Isso reflete uma abordagem utilitária da
                        educação, onde a escola é valorizada não por seu papel transformador na vida das crianças e dos jovens, mas por
                        sua função prática de cuidado durante o dia.</p>

                    <p>Devemos questionar se realmente valorizamos a educação ou se estamos apenas interessados em
                        torná-la uma extensão de nossas próprias ambições. Em quase 20 anos trabalhando em escolas,
                        poucas vezes presenciei a participação efetiva da comunidade no desenvolvimento das instituições
                        escolares.</p>

                    <p>A sociedade quer ganhos e recompensas, assim como os políticos oportunistas e burocratas de
                        plantão. No entanto, a escola não é um palco isolado da sociedade, e tampouco será uma empresa;
                        ela possui outras finalidades. Esse conjunto de ideias advindas do senso comum permeia a escola
                        atualmente, transformando-a em um espaço de competição e comparação, com o objetivo de obter
                        bons resultados em rankings de provas.</p>

                    <p>Os jovens sofrem pressão para se adaptarem a um sistema focado apenas na transmissão de
                        conhecimento, enquanto carregam a arrogância e o desrespeito por aqueles que vivem as mazelas
                        dos problemas sociais no ambiente escolar, ao mesmo tempo, em que resistem para manter a
                        existência do espaço escolar livre. Nos afastamos da verdadeira finalidade da escola: o
                        desenvolvimento integral do ser humano. Para que isso ocorra, precisamos valorizar genuinamente
                        os educadores e o processo educativo.</p>

                    <p>É essencial refletir sobre nossa atitude em relação às greves dos servidores da educação. Em vez de reagir com
                        frustração, deveríamos nos perguntar: por que os trabalhadores sentem a necessidade de recorrer a
                        greves? Quais são as condições que levam a tais ações? Valorizar a escola plenamente significa
                        apoiar aqueles que dedicam suas vidas à educação, reconhecendo suas lutas e necessidades.</p>

                    <p>A sociedade, portanto, só valoriza a escola quando lhe convém. Este é um fato desconfortável que
                        precisamos enfrentar. Para realmente valorizar a educação, devemos olhar além da conveniência
                        imediata e nos comprometer com um apoio genuíno e constante ao sistema educacional e seus
                        profissionais. Só assim poderemos criar um ambiente onde a verdadeira educação, aquela que transforma vidas e sociedades, seja possível.</p>

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
