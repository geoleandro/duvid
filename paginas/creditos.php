<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid — Créditos e Apoio</title>

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
        /* ── Section divider title ─────────────────────── */
        .cred-section-title {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 0 0 24px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #1b1b1b;
        }
        body.dark-mode .cred-section-title { color: #eee; }
        .cred-section-title::before {
            content: '';
            width: 32px; height: 2px;
            background: #4caf50;
            flex-shrink: 0;
        }

        /* ── Institution cards (3 cols) ────────────────── */
        .inst-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 48px;
        }
        @media (max-width: 700px) { .inst-grid { grid-template-columns: 1fr; } }

        .inst-card {
            background: #fff;
            border: 1.5px solid #e8e8e8;
            border-radius: 14px;
            padding: 24px 20px;
            text-align: center;
            transition: box-shadow .2s;
        }
        .inst-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,.08); }
        body.dark-mode .inst-card { background: #1e1e1e; border-color: #333; }

        .inst-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            background: #f0f7f0;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 14px;
            font-size: 1.1rem; color: #2e7d32;
        }
        body.dark-mode .inst-icon { background: #1a3020; color: #81c784; }

        .inst-card h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: .92rem; font-weight: 800;
            color: #1b1b1b; margin: 0 0 4px;
        }
        .inst-card p {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #888; margin: 0; line-height: 1.4;
        }
        body.dark-mode .inst-card h4 { color: #eee; }
        body.dark-mode .inst-card p  { color: #888; }

        /* ── Coordinator card ──────────────────────────── */
        .coord-card {
            background: #1b5e20;
            border-radius: 16px;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            gap: 28px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }
        .coord-card::after {
            content: '🌍';
            position: absolute; right: 28px; top: 50%;
            transform: translateY(-50%);
            font-size: 6rem; opacity: .08; line-height: 1;
            pointer-events: none;
        }
        @media (max-width: 600px) { .coord-card { flex-direction: column; gap: 16px; } }

        .coord-photo {
            width: 90px; height: 90px; border-radius: 50%;
            object-fit: cover; flex-shrink: 0;
            border: 3px solid rgba(255,255,255,.25);
        }
        .coord-info { flex: 1; min-width: 0; }
        .coord-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .65rem; font-weight: 700;
            letter-spacing: .1em; text-transform: uppercase;
            color: rgba(255,255,255,.6); margin-bottom: 4px;
        }
        .coord-info h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.25rem; font-weight: 800;
            color: #fff; margin: 0 0 6px;
        }
        .coord-info p {
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; color: rgba(255,255,255,.78);
            line-height: 1.55; margin: 0 0 14px;
        }
        .coord-lattes {
            display: inline-flex; align-items: center; gap: 6px;
            font-family: 'Montserrat', sans-serif;
            font-size: .75rem; font-weight: 700;
            color: #fff; text-decoration: none;
            border: 1.5px solid rgba(255,255,255,.4);
            padding: 6px 14px; border-radius: 8px;
            transition: background .2s;
        }
        .coord-lattes:hover { background: rgba(255,255,255,.12); }

        /* ── Year sections ─────────────────────────────── */
        .year-block { margin-bottom: 24px; }
        .year-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .7rem; font-weight: 700;
            letter-spacing: .1em; text-transform: uppercase;
            color: #4caf50; margin: 0 0 12px;
        }

        .team-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        @media (max-width: 580px) { .team-columns { grid-template-columns: 1fr; } }

        .team-col-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .68rem; font-weight: 700;
            letter-spacing: .08em; text-transform: uppercase;
            color: #999; margin-bottom: 10px;
        }

        .member-row {
            display: flex; align-items: center; gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .member-row:last-child { border-bottom: none; }
        body.dark-mode .member-row { border-color: #2a2a2a; }

        .member-avatar {
            width: 34px; height: 34px; border-radius: 8px;
            background: #e8f5e9; color: #2e7d32;
            font-family: 'Montserrat', sans-serif;
            font-size: .72rem; font-weight: 700;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        body.dark-mode .member-avatar { background: #1a3020; color: #81c784; }

        .member-name {
            font-family: 'Montserrat', sans-serif;
            font-size: .82rem; font-weight: 600; color: #222;
            margin: 0; line-height: 1.2;
        }
        .member-role {
            font-family: 'Montserrat', sans-serif;
            font-size: .73rem; color: #888; margin: 0;
        }
        body.dark-mode .member-name { color: #ddd; }

        /* Card branco para equipe ───────────────────────── */
        .team-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,.05);
            padding: 24px 28px;
            margin-bottom: 24px;
        }
        body.dark-mode .team-card { background: #1e1e1e; }

        /* ── Fontes e Tecnologia: 3 cols ───────────────── */
        .fontes-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 0;
        }
        @media (max-width: 680px) { .fontes-grid { grid-template-columns: 1fr; } }

        .fonte-item h4 {
            display: flex; align-items: center; gap: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: .88rem; font-weight: 700; color: #222;
            margin: 0 0 8px;
        }
        body.dark-mode .fonte-item h4 { color: #ddd; }
        .fonte-item h4 i {
            width: 22px; height: 22px; border-radius: 6px;
            background: #e8f5e9; color: #2e7d32;
            display: flex; align-items: center; justify-content: center;
            font-size: .68rem; flex-shrink: 0;
        }
        .fonte-item p, .fonte-item ul {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #666; line-height: 1.6; margin: 0;
        }
        body.dark-mode .fonte-item p,
        body.dark-mode .fonte-item ul { color: #aaa; }
        .fonte-item ul { padding-left: 0; list-style: none; }
        .fonte-item ul li::before { content: '·  '; color: #4caf50; }

        /* ── Apoio imagens ─────────────────────────────── */
        .apoio-logos {
            display: flex; align-items: center;
            gap: 32px; flex-wrap: wrap;
            padding: 24px 0 0;
            border-top: 1px solid #eee;
            margin-top: 32px;
        }
        body.dark-mode .apoio-logos { border-color: #333; }
        .apoio-logos img { max-height: 56px; width: auto; opacity: .85; }

        /* ── Section spacing ───────────────────────────── */
        .cred-section { margin-bottom: 48px; }
    </style>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-creditos.webp'), url('/fotoIndex/tileset/fundo.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">🤝 Reconhecimento</span>
            </div>
            <h1 class="texto-hero-title">Créditos e Apoio</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <!-- ══ APOIO INSTITUCIONAL ══ -->
        <div class="cred-section">
            <h2 class="cred-section-title">Apoio Institucional</h2>
            <div class="inst-grid">
                <div class="inst-card">
                    <div class="inst-icon"><i class="fa fa-university"></i></div>
                    <h4>IFSP</h4>
                    <p>Reitoria</p>
                </div>
                <div class="inst-card">
                    <div class="inst-icon"><i class="fa fa-rocket"></i></div>
                    <h4>INOVA-IFSP</h4>
                    <p>Inovação e Tecnologia</p>
                </div>
                <div class="inst-card">
                    <div class="inst-icon"><i class="fa fa-graduation-cap"></i></div>
                    <h4>IFSULDEMINAS</h4>
                    <p>Câmpus Poços de Caldas</p>
                </div>
            </div>
        </div>

        <!-- ══ EQUIPE ══ -->
        <div class="cred-section">
            <h2 class="cred-section-title">Equipe</h2>

            <!-- Coordenação -->
            <div class="coord-card">
                <img src="/fotoIndex/fotoperfil2.jpeg" alt="Prof. Dr. Leandro" class="coord-photo"
                     onerror="this.style.display='none'">
                <div class="coord-info">
                    <p class="coord-label">Coordenação Geral</p>
                    <h3>Prof. Dr. Leandro Henrique da Silva</h3>
                    <p>Coordena a programação, artes e visão pedagógica do Duvid Geografia.</p>
                    <a href="http://lattes.cnpq.br/4928799349990756" target="_blank" class="coord-lattes">
                        Ver Currículo Lattes <i class="fa fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>

            <!-- 2025 — Extensão IFSULDEMINAS -->
            <div class="team-card">
                <div class="year-block">
                    <p class="year-label">2025 — Projeto de Extensão · IFSULDEMINAS</p>
                    <div class="team-columns">
                        <div>
                            <p class="team-col-label">Desenvolvimento</p>
                            <div class="member-row">
                                <div class="member-avatar">JM</div>
                                <div>
                                    <p class="member-name">João Miguel Soares Mansano</p>
                                    <p class="member-role">Eng. Computação · IFSULDEMINAS</p>
                                </div>
                            </div>
                            <div class="member-row">
                                <div class="member-avatar">TS</div>
                                <div>
                                    <p class="member-name">Thauan Stanziola Souza Vieira</p>
                                    <p class="member-role">Integrado Téc. em Informática</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="team-col-label">Conteúdo Pedagógico</p>
                            <div class="member-row">
                                <div class="member-avatar">FC</div>
                                <div>
                                    <p class="member-name">Felipe Coutinho Bernardes</p>
                                    <p class="member-role">Licenciatura em Geografia · UNIFAL</p>
                                </div>
                            </div>
                            <div class="member-row">
                                <div class="member-avatar">GB</div>
                                <div>
                                    <p class="member-name">Gabrielle Barbosa Lopes</p>
                                    <p class="member-role">Mestrado em Geografia · UNIFAL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2026 — Arte Visual -->
            <div class="team-card">
                <div class="year-block">
                    <p class="year-label">2026 — Arte Visual</p>
                    <div class="team-columns">
                        <div>
                            <p class="team-col-label">Pixel Art</p>
                            <div class="member-row">
                                <div class="member-avatar">SS</div>
                                <div>
                                    <p class="member-name">Samuel Silva</p>
                                    <p class="member-role">Integrado Téc. em Informática · IFSULDEMINAS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projeto de Ensino — Jogo Digital -->
            <div class="team-card">
                <div class="year-block">
                    <p class="year-label">2025–2026 — Projeto de Ensino · Jogo Digital</p>
                    <div class="team-columns">
                        <div>
                            <p class="team-col-label">Programação</p>
                            <div class="member-row">
                                <div class="member-avatar">CR</div>
                                <div>
                                    <p class="member-name">Cecília Ramos da Silva</p>
                                    <p class="member-role">Eng. Computação · IFSULDEMINAS</p>
                                </div>
                            </div>
                            <div class="member-row">
                                <div class="member-avatar">LM</div>
                                <div>
                                    <p class="member-name">Leticia Maria Batista Carneiro</p>
                                    <p class="member-role">Eng. Computação · IFSULDEMINAS</p>
                                </div>
                            </div>
                            <div class="member-row">
                                <div class="member-avatar">PV</div>
                                <div>
                                    <p class="member-name">Paulo Vitor Moterani Fulaneto</p>
                                    <p class="member-role">Eng. Computação · IFSULDEMINAS</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="team-col-label">Arte e Ilustração</p>
                            <div class="member-row">
                                <div class="member-avatar">EM</div>
                                <div>
                                    <p class="member-name">Elisa Miglioranzi Monteiro</p>
                                    <p class="member-role">Integrado Téc. em Informática</p>
                                </div>
                            </div>
                            <div class="member-row">
                                <div class="member-avatar">MC</div>
                                <div>
                                    <p class="member-name">Miguel Caetano Carneiro</p>
                                    <p class="member-role">Integrado Téc. em Informática</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ══ FONTES E TECNOLOGIA ══ -->
        <div class="cred-section">
            <h2 class="cred-section-title">Fontes e Tecnologia</h2>
            <div class="fontes-grid">
                <div class="fonte-item">
                    <h4><i class="fa fa-file-alt"></i> Questões</h4>
                    <ul>
                        <li>CONVEST · UNICAMP</li>
                        <li>COPS · UEL</li>
                        <li>UERJ</li>
                        <li>Brasil Escola / Mundo Educação</li>
                        <li>ENEM (INEP)</li>
                    </ul>
                </div>
                <div class="fonte-item">
                    <h4><i class="fa fa-image"></i> Imagens e Ícones</h4>
                    <ul>
                        <li>Pixabay</li>
                        <li>Public Vectors</li>
                        <li>Pixel Art original (equipe Duvid)</li>
                    </ul>
                </div>
                <div class="fonte-item">
                    <h4><i class="fa fa-code"></i> Tecnologia</h4>
                    <ul>
                        <li>PHP 8 + MySQL</li>
                        <li>W3.CSS Framework</li>
                        <li>Font Awesome Icons</li>
                        <li>Aseprite (Pixel Art)</li>
                    </ul>
                </div>
            </div>

            <!-- Logos de apoio -->
            <div class="apoio-logos">
                <img src="/fotoIndex/inova.png" alt="INOVA-IFSP">
                <img src="/fotoIndex/imagensCapa/cnpq.png" alt="CNPq">
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
