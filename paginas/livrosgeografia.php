<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid | Biblioteca</title>

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
        .bib-card {
            background: #fff;
            border-radius: 20px;
            border: 1.5px solid #e8e8e8;
            overflow: hidden;
            max-width: 640px;
            margin: 0 auto;
        }
        body.dark-mode .bib-card { background: #1e1e1e; border-color: #333; }

        .bib-card-header {
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
            padding: 20px 28px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        body.dark-mode .bib-card-header { background: #252525; border-color: #2a2a2a; }

        .bib-card-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            background: #e8f5e9;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem; color: #2e7d32; flex-shrink: 0;
        }
        body.dark-mode .bib-card-icon { background: #1a3020; color: #81c784; }

        .bib-card-header-info h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem; font-weight: 700;
            color: #1b1b1b; margin: 0 0 2px;
        }
        .bib-card-header-info p {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem; color: #888; margin: 0;
        }
        body.dark-mode .bib-card-header-info h3 { color: #eee; }

        .bib-card-body {
            padding: 32px 28px;
        }

        .bib-descricao {
            font-family: 'Montserrat', sans-serif;
            font-size: .9rem;
            color: #555;
            line-height: 1.7;
            margin: 0 0 28px;
        }
        body.dark-mode .bib-descricao { color: #bbb; }

        .bib-aviso {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: #fffde7;
            border: 1.5px solid #f9a825;
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 28px;
        }
        body.dark-mode .bib-aviso { background: #2a2200; border-color: #f9a825; }
        .bib-aviso i { color: #f9a825; margin-top: 2px; flex-shrink: 0; }
        .bib-aviso p {
            font-family: 'Montserrat', sans-serif;
            font-size: .8rem; color: #555; line-height: 1.55; margin: 0;
        }
        body.dark-mode .bib-aviso p { color: #ccc; }

        .btn-drive {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: .95rem; font-weight: 700;
            color: #fff;
            background: #2e7d32;
            border-radius: 14px;
            padding: 16px 32px;
            text-decoration: none;
            transition: background .18s, transform .12s;
            box-shadow: 0 4px 12px rgba(46,125,50,.25);
            width: 100%;
            justify-content: center;
            box-sizing: border-box;
        }
        .btn-drive:hover {
            background: #1b5e20;
            transform: translateY(-2px);
        }

        .bib-nota {
            font-family: 'Montserrat', sans-serif;
            font-size: .74rem; color: #aaa;
            text-align: center;
            margin-top: 16px;
        }

        /* Links relacionados */
        .bib-links {
            display: flex;
            gap: 12px;
            margin-top: 48px;
            flex-wrap: wrap;
        }
        .bib-link-card {
            flex: 1;
            min-width: 200px;
            background: #fff;
            border: 1.5px solid #e8e8e8;
            border-radius: 16px;
            padding: 20px 22px;
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            transition: box-shadow .2s, transform .12s;
        }
        .bib-link-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,.08); transform: translateY(-2px); }
        body.dark-mode .bib-link-card { background: #1e1e1e; border-color: #333; }

        .bib-link-icon {
            width: 40px; height: 40px;
            border-radius: 10px;
            background: #e8f5e9;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem; color: #2e7d32; flex-shrink: 0;
        }
        body.dark-mode .bib-link-icon { background: #1a3020; color: #81c784; }

        .bib-link-info span {
            display: block;
            font-family: 'Montserrat', sans-serif;
        }
        .bib-link-info .lbl { font-size: .62rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #aaa; }
        .bib-link-info .nome { font-size: .88rem; font-weight: 700; color: #1b1b1b; }
        body.dark-mode .bib-link-info .nome { color: #ddd; }
    </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-biblioteca.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📚 Acervo</span>
            </div>
            <h1 class="texto-hero-title">Biblioteca</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <!-- ══ CARD PRINCIPAL ══ -->
        <div class="bib-card">
            <div class="bib-card-header">
                <div class="bib-card-icon">
                    <i class="fa fa-book-open"></i>
                </div>
                <div class="bib-card-header-info">
                    <h3>Acervo de Livros de Geografia</h3>
                    <p>Pasta compartilhada no Google Drive</p>
                </div>
            </div>
            <div class="bib-card-body">
                <p class="bib-descricao">
                    Compilado de livros e materiais de apoio para aprofundar seus estudos em Geografia.
                    O acervo reúne obras de referência em Geografia Física, Humana, Cartografia e temas afins.
                </p>

                <div class="bib-aviso">
                    <i class="fa fa-circle-info"></i>
                    <p>Certifique-se de estar logado em sua conta Gmail antes de abrir o link.</p>
                </div>

                <a href="https://drive.google.com/drive/folders/1R4m3e9N0f3a8tgrTAJNeLwRJ8rEPP-Y5?usp=sharing"
                   class="btn-drive" target="_blank" rel="noopener">
                    <i class="fa fa-folder-open"></i>
                    Abrir Biblioteca no Google Drive
                </a>

                <p class="bib-nota">Material disponibilizado exclusivamente para fins educacionais.</p>
            </div>
        </div>

        <!-- ══ LINKS RELACIONADOS ══ -->
        <div class="bib-links">
            <a href="/paginas/bibliografia.php" class="bib-link-card">
                <div class="bib-link-icon"><i class="fa fa-list"></i></div>
                <div class="bib-link-info">
                    <span class="lbl">Referências</span>
                    <span class="nome">Bibliografia completa</span>
                </div>
            </a>
            <a href="/atividades/atividades.php" class="bib-link-card">
                <div class="bib-link-icon"><i class="fa fa-pen-to-square"></i></div>
                <div class="bib-link-info">
                    <span class="lbl">Praticar</span>
                    <span class="nome">Atividades</span>
                </div>
            </a>
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
