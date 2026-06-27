<?php
// ═══════════════════════════════════════════════════════════════
//  DADOS DO ARTIGO
// ═══════════════════════════════════════════════════════════════
$titulo    = "Você não está competindo com seu colega";
$descricao = "O Duvid não é um cursinho gamificado. É uma plataforma de aprendizado coletivo. Esse artigo explica por que essa distinção importa.";
$imagem    = "/blog/capaBlog.svg";
$data      = "25 de junho de 2026";
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
                         style="width:100%; border-radius:8px; max-height:320px; object-fit:cover;">
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

                <!-- Citação em destaque do artigos.json (injetada pelo scripts-blog.js) -->
                <div id="citacao-dinamica"></div>

                <!-- ═══ CORPO DO ARTIGO ═══ -->
                <div class="corpo-artigo">

                    <p>
                        Quando comecei a construir o Duvid, em 2019, eu tinha uma preocupação muito clara: não queria criar mais um lugar onde o aluno chegasse com medo e saísse mais ansioso do que entrou. Esse é o problema com boa parte do que chamamos de "estudo para o vestibular". A escola vira um torneio. Quem chega primeiro, quem tira mais, quem acerta mais rápido. E o estudante que tropeça no caminho aprende, acima de tudo, a se sentir inadequado.
                    </p>

                    <p>Não quero isso aqui.</p>

                    <h5><strong>O que o Duvid não é</strong></h5>

                    <p>
                        Preciso ser direto, porque esse equívoco aparece com frequência: o Duvid não é um cursinho gamificado. Não é o Duolingo de Geografia. Não é uma plataforma onde você compete individualmente contra seus colegas para ver quem acumula mais pontos.
                    </p>

                    <p>
                        Eu sei que tem globinhos, níveis, conquistas, ranking. Entendo a confusão. Mas a mecânica de jogo aqui existe com um propósito invertido: usar a linguagem da gamificação (que normalmente gera ansiedade e comparação) para fazer exatamente o oposto.
                    </p>

                    <blockquote>
                        <em>"Não é sinal de saúde estar bem ajustado a uma sociedade profundamente doente."</em><br>
                        <span class="w3-small w3-opacity">— Krishnamurti</span>
                    </blockquote>

                    <p>
                        Krishnamurti foi um dos pensadores que mais me influenciou como professor. Ele questionava não o conteúdo, mas a estrutura inteira do processo educativo: a competição, o medo do julgamento, a obsessão por resultados. Quando ele diz que "não é sinal de saúde estar ajustado a uma sociedade doente", está falando também sobre a escola que fabrica ansiedade e chama isso de mérito.
                    </p>

                    <h5><strong>O erro não é fracasso</strong></h5>

                    <p>
                        Nas questões do Duvid, quando o aluno erra, o feedback não diz "errou". Ele diz "pensa assim...". Essa distinção parece pequena, mas não é. A maioria dos estudantes que conheço não tem medo de não saber. Tem medo de <em>parecer</em> que não sabe. São coisas diferentes. Uma tem solução pedagógica. A outra tem solução emocional.
                    </p>

                    <p>
                        O Globinho, nosso mascote, não aparece quando você erra para te cobrar. Ele aparece quando você aparece. Quando você está aqui, tentando, explorando, errando e tentando de novo. Esse é o comportamento que o site quer celebrar: a presença, não a perfeição.
                    </p>

                    <h5><strong>A turma aprende junto</strong></h5>

                    <p>
                        Aqui está o coração do projeto. O ranking do Duvid é por escola e por turma, não por indivíduo isolado. Quando você estuda, sua turma avança. Quando vários alunos puxam juntos, a escola sobe no ranking. As conquistas mais significativas da plataforma são coletivas: a turma inteira desbloqueando um tema, um bloco de aulas concluído pela classe.
                    </p>

                    <p>
                        Eu aprendi isso na sala de aula antes de aprender no código. Quando um aluno explica para o outro, ambos aprendem mais do que quando o professor explica para os dois. Quando a turma resolve um problema juntos, o conhecimento cola diferente. Tem contexto, tem história, tem rosto.
                    </p>

                    <p>É por isso que a frase que resume o Duvid não é "seja o melhor". É:</p>

                    <blockquote>
                        <strong>"Você não está competindo com seu colega.<br>Estão construindo algo juntos."</strong>
                    </blockquote>

                    <h5><strong>Por que isso importa agora</strong></h5>

                    <p>
                        Vivemos um momento em que as plataformas de educação estão cada vez mais sofisticadas em capturar a atenção do aluno, mas cada vez menos preocupadas com o que fazem com essa atenção. Notificações de streak que criam culpa quando você para. Rankings que expõem quem está atrás. Sistemas de recompensa desenhados para criar dependência, não aprendizado.
                    </p>

                    <p>
                        Não estou dizendo que toda gamificação é ruim. Estou dizendo que ela pode ser usada de formas muito diferentes. E o Duvid escolheu um caminho específico: celebrar a presença, não punir a ausência. Fortalecer o coletivo, não isolar o indivíduo. Tirar o medo, não ampliá-lo.
                    </p>

                    <p>
                        Antes de qualquer nova funcionalidade que eu adiciono ao site, eu faço três perguntas: isso tira o medo de aprender ou aumenta? Isso fortalece o coletivo ou isola o indivíduo? O Globinho estaria orgulhoso disso?
                    </p>

                    <p>São perguntas simples. Mas elas mudam tudo.</p>

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
