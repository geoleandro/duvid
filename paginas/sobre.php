<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid | Sobre o Projeto</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

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
        /* ── Section title ────────────────────────────────── */
        .sobre-section-title {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 0 0 24px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #1b1b1b;
        }
        body.dark-mode .sobre-section-title { color: #eee; }
        .sobre-section-title::before {
            content: '';
            width: 32px; height: 2px;
            background: #4caf50;
            flex-shrink: 0;
        }

        /* ── Section spacing ──────────────────────────────── */
        .sobre-section { margin-bottom: 48px; }

        /* ── Missão card ──────────────────────────────────── */
        .missao-card {
            background: #1b5e20;
            border-radius: 20px;
            padding: 32px 36px;
            position: relative;
            overflow: hidden;
            margin-bottom: 48px;
        }
        .missao-card::after {
            content: '🌍';
            position: absolute; right: 32px; top: 50%;
            transform: translateY(-50%);
            font-size: 7rem; opacity: .08; line-height: 1;
            pointer-events: none;
        }
        .missao-card p {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.05rem;
            color: rgba(255,255,255,.92);
            line-height: 1.75;
            margin: 0;
            max-width: 680px;
            position: relative; z-index: 1;
        }
        .missao-card strong {
            color: #a5d6a7;
        }

        /* ── Q&A cards ────────────────────────────────────── */
        .qa-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .qa-item {
            background: #fff;
            border-radius: 16px;
            border: 1.5px solid #e8e8e8;
            overflow: hidden;
            transition: box-shadow .2s;
        }
        .qa-item:hover { box-shadow: 0 4px 16px rgba(0,0,0,.08); }
        body.dark-mode .qa-item { background: #1e1e1e; border-color: #333; }

        .qa-pergunta {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 20px 24px 16px;
            border-bottom: 1px solid #f0f0f0;
        }
        body.dark-mode .qa-pergunta { border-color: #2a2a2a; }

        .qa-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            flex-shrink: 0;
            margin-top: 2px;
            padding: 4px 10px;
            border-radius: 8px;
        }
        .qa-label-d {
            background: #e8f5e9;
            color: #2e7d32;
        }
        .qa-label-p {
            background: #f3f4f5;
            color: #555;
        }
        body.dark-mode .qa-label-d { background: #1a3020; color: #81c784; }
        body.dark-mode .qa-label-p { background: #2a2a2a; color: #aaa; }

        .qa-texto {
            font-family: 'Montserrat', sans-serif;
            font-size: .88rem;
            color: #555;
            line-height: 1.65;
            margin: 0;
        }
        body.dark-mode .qa-texto { color: #bbb; }

        .qa-resposta {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 16px 24px 20px;
            background: #fafafa;
        }
        body.dark-mode .qa-resposta { background: #181818; }

        .qa-resposta .qa-texto {
            color: #222;
            font-size: .9rem;
            font-weight: 500;
        }
        body.dark-mode .qa-resposta .qa-texto { color: #ddd; }

        /* ── Jogo/Video section ───────────────────────────── */
        .jogo-card {
            background: #fff;
            border-radius: 20px;
            border: 1.5px solid #e8e8e8;
            overflow: hidden;
        }
        body.dark-mode .jogo-card { background: #1e1e1e; border-color: #333; }

        .jogo-header {
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
            padding: 20px 28px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        body.dark-mode .jogo-header { background: #252525; border-color: #2a2a2a; }

        .jogo-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            background: #e8f5e9;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem; flex-shrink: 0;
        }
        body.dark-mode .jogo-icon { background: #1a3020; }

        .jogo-header-info h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem; font-weight: 700;
            color: #1b1b1b; margin: 0 0 2px;
        }
        .jogo-header-info p {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #888; margin: 0;
        }
        body.dark-mode .jogo-header-info h3 { color: #eee; }

        .jogo-body {
            padding: 28px;
        }

        .video-wrap {
            border-radius: 12px;
            overflow: hidden;
            background: #111;
            margin-bottom: 20px;
            max-width: 580px;
        }
        .video-wrap video {
            display: block;
            width: 100%;
            height: auto;
        }

        .video-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }
        @media (max-width: 640px) {
            .video-grid { grid-template-columns: 1fr; }
        }

        .video-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
            margin: 0 0 8px;
        }

        .btn-jogo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: .92rem;
            font-weight: 700;
            color: #fff;
            background: #2e7d32;
            border-radius: 12px;
            padding: 14px 28px;
            text-decoration: none;
            transition: background .18s, transform .12s;
            box-shadow: 0 4px 12px rgba(46,125,50,.25);
        }
        .btn-jogo:hover {
            background: #1b5e20;
            transform: translateY(-2px);
        }

        /* ── Contato ──────────────────────────────────────── */
        .contato-card {
            background: #fff;
            border-radius: 16px;
            border: 1.5px solid #e8e8e8;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
        }
        body.dark-mode .contato-card { background: #1e1e1e; border-color: #333; }

        .contato-icon {
            width: 48px; height: 48px;
            border-radius: 14px;
            background: #e8f5e9;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem; flex-shrink: 0;
            color: #2e7d32;
        }
        body.dark-mode .contato-icon { background: #1a3020; color: #81c784; }

        .contato-info { flex: 1; min-width: 200px; }
        .contato-info p {
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; color: #888; margin: 0 0 4px;
        }
        .contato-info a {
            font-family: 'Montserrat', sans-serif;
            font-size: .95rem; font-weight: 700;
            color: #2e7d32; text-decoration: none;
        }
        .contato-info a:hover { text-decoration: underline; }
        body.dark-mode .contato-info a { color: #81c784; }

        .btn-creditos {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; font-weight: 600;
            color: #2e7d32;
            border: 1.5px solid #c8e6c9;
            border-radius: 10px;
            padding: 10px 18px;
            text-decoration: none;
            transition: background .18s;
        }
        .btn-creditos:hover { background: #e8f5e9; }
        body.dark-mode .btn-creditos { border-color: #2e7d32; color: #81c784; }
        body.dark-mode .btn-creditos:hover { background: #1a3020; }
    </style>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-sobre.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">🌍 Projeto</span>
            </div>
            <h1 class="texto-hero-title">Sobre o Duvid</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <!-- ══ MISSÃO ══ -->
        <div class="missao-card">
            <p>
                O <strong>Duvid Geografia</strong> nasceu para ser um livro vivo: personalizado, interativo e gratuito.
                A ideia é registrar a evolução do aluno e de sua turma enquanto ele mergulha na geografia do ensino médio,
                unindo <strong>conteúdo de qualidade, gamificação e tecnologia</strong>.
            </p>
        </div>

        <!-- ══ ENTREVISTA ══ -->
        <div class="sobre-section">
            <h2 class="sobre-section-title">Entrevista com o Professor</h2>

            <div class="qa-list">

                <div class="qa-item">
                    <div class="qa-pergunta">
                        <span class="qa-label qa-label-d">Duvid</span>
                        <p class="qa-texto">Professor, como surgiu a ideia de criar esse projeto? Do que se trata?</p>
                    </div>
                    <div class="qa-resposta">
                        <span class="qa-label qa-label-p">Prof. Leandro</span>
                        <p class="qa-texto">Surgiu da minha atividade no IFSP. Em 2019, idealizei um produto
                            multiplataforma (site, jogo e app offline) para o ensino médio.</p>
                    </div>
                </div>

                <div class="qa-item">
                    <div class="qa-pergunta">
                        <span class="qa-label qa-label-d">Duvid</span>
                        <p class="qa-texto">É um livro eletrônico?</p>
                    </div>
                    <div class="qa-resposta">
                        <span class="qa-label qa-label-p">Prof. Leandro</span>
                        <p class="qa-texto">É um livro personalizado e interativo, gratuito e colaborativo,
                            focado no registro da evolução do aluno. Cada um avança no seu ritmo, acompanhandodo seu progresso em tempo real.</p>
                    </div>
                </div>

                <div class="qa-item">
                    <div class="qa-pergunta">
                        <span class="qa-label qa-label-d">Duvid</span>
                        <p class="qa-texto">E o acesso offline?</p>
                    </div>
                    <div class="qa-resposta">
                        <span class="qa-label qa-label-p">Prof. Leandro</span>
                        <p class="qa-texto">É fundamental. Nem todos têm internet constante, por isso o projeto
                            prevê formas de estudar em qualquer lugar, inclusive através do jogo digital, que funciona sem conexão.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ══ JOGO ══ -->
        <div class="sobre-section">
            <h2 class="sobre-section-title">Aventura Geográfica: O Jogo</h2>

            <div class="jogo-card">
                <div class="jogo-header">
                    <div class="jogo-icon">🎮</div>
                    <div class="jogo-header-info">
                        <h3>Aventura Geográfica</h3>
                        <p>Jogo digital desenvolvido pelo projeto de ensino · IFSULDEMINAS</p>
                    </div>
                </div>
                <div class="jogo-body">
                    <p style="font-family:'Montserrat',sans-serif; font-size:.9rem; color:#555; line-height:1.7; margin:0 0 24px;">
                        O jogo conta a história de <strong style="color:#2e7d32;">Jéssica</strong> e sua investigação ambiental,
                        unindo enredo e conteúdo geográfico de forma imersiva. Disponível na versão web abaixo.
                    </p>

                    <div class="video-grid">
                        <div>
                            <p class="video-label">Gameplay: Visão geral</p>
                            <div class="video-wrap">
                                <video controls preload="none">
                                    <source src="/audios/JogoGeografia.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div>
                            <p class="video-label">Cena: Módulo África</p>
                            <div class="video-wrap">
                                <video controls preload="none">
                                    <source src="/audios/VideoAfrica02.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <a href="/jogo/index.html" target="_blank" class="btn-jogo">
                        <i class="fa fa-gamepad"></i>
                        Jogar Aventura Geográfica (Versão Web)
                    </a>
                </div>
            </div>
        </div>

        <!-- ══ CONTATO ══ -->
        <div class="sobre-section">
            <h2 class="sobre-section-title">Colabore com o Projeto</h2>

            <div class="contato-card">
                <div class="contato-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="contato-info">
                    <p>Interessado em colaborar, contribuir com conteúdo ou tirar dúvidas?</p>
                    <a href="mailto:leandro.hsilva@ifsuldeminas.edu.br">leandro.hsilva@ifsuldeminas.edu.br</a>
                </div>
                <a href="/paginas/creditos.php" class="btn-creditos">
                    <i class="fa fa-users"></i>
                    Ver equipe completa
                </a>
            </div>
        </div>

    </div><!-- /.texto-body-pad -->

</main>

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
