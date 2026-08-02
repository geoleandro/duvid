<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid — Instruções</title>

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
        /* ─── Cards de conteúdo ──────────────────────────── */
        .instr-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
            padding: 28px 32px;
            margin-bottom: 20px;
        }
        body.dark-mode .instr-card { background: #1e1e1e; }

        /* ─── Section heading ────────────────────────────── */
        .instr-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 16px;
        }
        .instr-heading-icon {
            width: 30px; height: 30px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: .8rem; flex-shrink: 0;
        }
        .instr-heading-icon.green  { background: #e8f5e9; color: #2e7d32; }
        .instr-heading-icon.orange { background: #fff3e0; color: #e65100; }
        .instr-heading h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem; font-weight: 700; color: #1b5e20; margin: 0;
        }
        .instr-heading.orange h2 { color: #bf360c; }

        /* ─── Dinâmica: 4 step cards ─────────────────────── */
        .instr-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 0;
        }
        @media (max-width: 800px) { .instr-steps { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 480px) { .instr-steps { grid-template-columns: 1fr; } }

        .step-card {
            border-radius: 12px;
            border-top: 4px solid;
            padding: 16px 14px;
            background: #fafafa;
        }
        body.dark-mode .step-card { background: #2a2a2a; }
        .step-card.c-green  { border-color: #4caf50; }
        .step-card.c-orange { border-color: #ff9800; }
        .step-card.c-blue   { border-color: #2196f3; }
        .step-card.c-yellow { border-color: #ffc107; }

        .step-icon {
            width: 28px; height: 28px;
            border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            font-size: .75rem; margin-bottom: 10px;
        }
        .step-card.c-green  .step-icon { background: #e8f5e9; color: #2e7d32; }
        .step-card.c-orange .step-icon { background: #fff3e0; color: #e65100; }
        .step-card.c-blue   .step-icon { background: #e3f2fd; color: #1565c0; }
        .step-card.c-yellow .step-icon { background: #fffde7; color: #f57f17; }
        .step-card h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; font-weight: 700; color: #333; margin: 0 0 5px;
        }
        .step-card p {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #666; line-height: 1.5; margin: 0;
        }
        body.dark-mode .step-card h4 { color: #e0e0e0; }
        body.dark-mode .step-card p  { color: #aaa; }

        /* ─── Pedagogia ──────────────────────────────────── */
        .pedagogy-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            align-items: start;
        }
        @media (max-width: 680px) { .pedagogy-grid { grid-template-columns: 1fr; gap: 20px; } }

        .pedagogy-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: #e8f5e9; color: #2e7d32;
            font-family: 'Montserrat', sans-serif;
            font-size: .67rem; font-weight: 700; letter-spacing: .07em;
            text-transform: uppercase; padding: 3px 9px; border-radius: 20px;
            margin-bottom: 10px;
        }
        .pedagogy-grid h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem; font-weight: 800; color: #1b5e20; margin: 0 0 8px;
        }
        .pedagogy-grid > div > p {
            font-family: 'Montserrat', sans-serif;
            font-size: .85rem; color: #555; line-height: 1.65; margin: 0;
        }
        body.dark-mode .pedagogy-grid h3 { color: #a5d6a7; }
        body.dark-mode .pedagogy-grid > div > p { color: #bbb; }

        .step-list { list-style: none; margin: 0; padding: 0; }
        .step-list li { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 14px; }
        .step-list li:last-child { margin-bottom: 0; }
        .step-num {
            width: 24px; height: 24px; border-radius: 50%; background: #4caf50;
            color: #fff; font-family: 'Montserrat', sans-serif; font-size: .7rem;
            font-weight: 700; display: flex; align-items: center; justify-content: center;
            flex-shrink: 0; margin-top: 1px;
        }
        .step-txt strong {
            display: block; font-family: 'Montserrat', sans-serif;
            font-size: .82rem; font-weight: 700; color: #2e7d32; margin-bottom: 2px;
        }
        .step-txt span {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #666; line-height: 1.45;
        }
        body.dark-mode .step-txt strong { color: #81c784; }
        body.dark-mode .step-txt span  { color: #aaa; }

        /* ─── Avaliação: 3 itens verticais ──────────────── */
        .peso-item {
            border-left: 4px solid;
            padding: 14px 18px;
            border-radius: 0 10px 10px 0;
            background: #fafafa;
            margin-bottom: 12px;
        }
        .peso-item:last-child { margin-bottom: 0; }
        body.dark-mode .peso-item { background: #2a2a2a; }
        .peso-item.red    { border-color: #e53935; }
        .peso-item.orange { border-color: #fb8c00; }
        .peso-item.blue   { border-color: #1e88e5; }

        .peso-header {
            display: flex; align-items: center;
            justify-content: space-between; margin-bottom: 5px;
        }
        .peso-header span {
            font-family: 'Montserrat', sans-serif;
            font-size: .88rem; font-weight: 700; color: #333;
        }
        body.dark-mode .peso-header span { color: #ddd; }
        .peso-badge {
            font-family: 'Montserrat', sans-serif;
            font-size: .7rem; font-weight: 700; padding: 2px 9px;
            border-radius: 20px; color: #fff;
        }
        .peso-badge.red    { background: #e53935; }
        .peso-badge.orange { background: #fb8c00; }
        .peso-badge.blue   { background: #1e88e5; }
        .peso-item p {
            font-family: 'Montserrat', sans-serif;
            font-size: .8rem; color: #666; line-height: 1.5; margin: 0;
        }
        body.dark-mode .peso-item p { color: #aaa; }

        /* ─── CTA Aventura Geográfica ────────────────────── */
        .instr-cta {
            background: #1b5e20;
            border-radius: 16px;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 0;
        }
        @media (max-width: 600px) {
            .instr-cta { flex-direction: column; align-items: flex-start; padding: 22px 20px; }
        }
        .instr-cta h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem; font-weight: 800; color: #fff; margin: 0 0 6px;
        }
        .instr-cta p {
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; color: rgba(255,255,255,.78); margin: 0; line-height: 1.5;
        }
        .cta-btns { display: flex; flex-direction: column; gap: 9px; flex-shrink: 0; }
        .cta-btn {
            display: inline-flex; align-items: center; gap: 7px;
            padding: 9px 18px; border-radius: 9px;
            font-family: 'Montserrat', sans-serif;
            font-size: .83rem; font-weight: 700;
            text-decoration: none; white-space: nowrap;
            transition: opacity .2s; cursor: pointer;
        }
        .cta-btn:hover { opacity: .85; }
        .cta-btn.white  { background: #fff; color: #1b5e20; }
        .cta-btn.accent { background: #ff9800; color: #fff; }

        /* ─── Hero com Jéssica ───────────────────────────── */
        .instr-hero {
            background-position: right center, center center;
            background-size: auto 100%, cover;
            background-repeat: no-repeat, no-repeat;
        }
        /* fallback enquanto imagem não existe: usa só o fundo-natureza */
        .instr-hero-overlay {
            background: linear-gradient(90deg, rgba(0,0,0,.30) 0%, rgba(0,0,0,.10) 60%, transparent 100%);
        }
        .instr-hero-text {
            max-width: 520px;
        }
        .instr-hero-sub {
            font-family: 'Montserrat', sans-serif;
            font-size: .92rem;
            color: rgba(255,255,255,.85);
            margin: 8px 0 0;
            line-height: 1.55;
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero instr-hero" style="background-image:url('/fotoIndex/tileset/fundo-jessica.webp'), url('/fotoIndex/tileset/fundo-natureza.webp');">
        <div class="texto-hero-overlay instr-hero-overlay">
            <div class="instr-hero-text">
                <div class="texto-hero-badges">
                    <span class="texto-badge texto-badge-green">📖 Metodologia</span>
                </div>
                <h1 class="texto-hero-title">Como serão nossas aulas?</h1>
                <p class="instr-hero-sub">Jéssica vai te guiar pela Aventura Geográfica: conteúdo, desafios e muito mais.</p>
            </div>
        </div>
    </div>

    <div class="texto-body-pad">

        <!-- ── Dinâmica das Aulas ── -->
        <div class="instr-card">
            <div class="instr-heading">
                <div class="instr-heading-icon green"><i class="fa fa-rotate"></i></div>
                <h2>Dinâmica das Aulas</h2>
            </div>
            <div class="instr-steps">
                <div class="step-card c-green">
                    <div class="step-icon"><i class="fa fa-graduation-cap"></i></div>
                    <h4>Introdução</h4>
                    <p>Problematização do tema através de elementos cotidianos.</p>
                </div>
                <div class="step-card c-orange">
                    <div class="step-icon"><i class="fa fa-book-open"></i></div>
                    <h4>Leitura</h4>
                    <p>Exploração de textos e mídias ricas na plataforma.</p>
                </div>
                <div class="step-card c-blue">
                    <div class="step-icon"><i class="fa fa-gamepad"></i></div>
                    <h4>Desafios</h4>
                    <p>Prática gamificada para fixação do conteúdo.</p>
                </div>
                <div class="step-card c-yellow">
                    <div class="step-icon"><i class="fa fa-check-circle"></i></div>
                    <h4>Revisão</h4>
                    <p>Consolidação e feedback imediato da trilha.</p>
                </div>
            </div>
        </div>

        <!-- ── Pedagogia Histórico-Crítica ── -->
        <div class="instr-card">
            <div class="pedagogy-grid">
                <div>
                    <span class="pedagogy-badge"><i class="fa fa-seedling"></i> Abordagem Pedagógica</span>
                    <h3>Pedagogia Histórico-Crítica</h3>
                    <p>Utilizamos uma metodologia que valoriza o conhecimento prévio e busca a transformação social através da ciência geográfica.</p>
                </div>
                <ul class="step-list">
                    <li>
                        <div class="step-num">1</div>
                        <div class="step-txt">
                            <strong>Prática Social Inicial</strong>
                            <span>Identificamos o que você já sabe sobre o tema no mundo real.</span>
                        </div>
                    </li>
                    <li>
                        <div class="step-num">2</div>
                        <div class="step-txt">
                            <strong>Problematização</strong>
                            <span>Desafiamos sua visão atual para gerar a necessidade de novo conhecimento.</span>
                        </div>
                    </li>
                    <li>
                        <div class="step-num">3</div>
                        <div class="step-txt">
                            <strong>Instrumentalização</strong>
                            <span>Acesso às ferramentas teóricas e científicas da geografia.</span>
                        </div>
                    </li>
                    <li>
                        <div class="step-num">4</div>
                        <div class="step-txt">
                            <strong>Catarse &amp; Prática Final</strong>
                            <span>A nova síntese mental e a aplicação prática do aprendizado.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ── Avaliação e Pesos ── -->
        <div class="instr-card">
            <div class="instr-heading orange">
                <div class="instr-heading-icon orange"><i class="fa fa-chart-bar"></i></div>
                <h2>Avaliação e Pesos</h2>
            </div>

            <div class="peso-item red">
                <div class="peso-header">
                    <span>Avaliação objetiva</span>
                    <span class="peso-badge red">Peso 4</span>
                </div>
                <p>Realizada em laboratório com correção automática para verificação da síntese mental (Catarse).</p>
            </div>

            <div class="peso-item orange">
                <div class="peso-header">
                    <span>Estudo Dirigido</span>
                    <span class="peso-badge orange">Peso 3</span>
                </div>
                <p>Exercícios de instrumentalização no caderno com acompanhamento docente.</p>
            </div>

            <div class="peso-item blue">
                <div class="peso-header">
                    <span>Práticas Sociais e Coletivas</span>
                    <span class="peso-badge blue">Peso 3</span>
                </div>
                <p>Trabalhos em grupo com quadrinhos, leitura de textos e atividades como debates, criação de conteúdo, etc., disponíveis na plataforma Duvid.</p>
            </div>
        </div>

        <!-- ── Aventura Geográfica CTA ── -->
        <div class="instr-cta">
            <div>
                <h3>🌍 Aventura Geográfica</h3>
                <p>Participe do jogo e explore o mundo através de missões, batalhas e desafios geográficos. A Jéssica está esperando por você!</p>
            </div>
            <div class="cta-btns">
                <a href="/jogo/index.html" class="cta-btn white" target="_blank">
                    <i class="fa fa-play"></i> Jogar agora
                </a>
                <a href="https://drive.google.com/drive/folders/15cTExhiIohHhbDrESx7xycLqXgfYRUgA?usp=sharing"
                   class="cta-btn accent" target="_blank">
                    <i class="fa fa-palette"></i> Pixel Art Kit
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
