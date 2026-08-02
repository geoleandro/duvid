<?php
// ── Detecta vestibulares disponíveis em /simulados/bancos/ ────────────
$bancosDir = __DIR__ . '/bancos';
$arquivos  = glob($bancosDir . '/*.json') ?: [];

// Mapeamento fixo: nome do vestibular → imagem da capa
$configVest = [
    'ENEM'    => ['img' => '/simulados/enem/capaenem.png',       'alt' => 'Simulado ENEM'],
    'FUVEST'  => ['img' => '/simulados/fuvest/capafuvest.png',   'alt' => 'Simulado FUVEST'],
    'UNESP'   => ['img' => '/simulados/unesp/capaunesp.png',     'alt' => 'Simulado UNESP'],
    'UNICAMP' => ['img' => '/simulados/unicamp/capaunicamp.png', 'alt' => 'Simulado UNICAMP'],
];

// Agrupa anos por vestibular (só os que têm JSON)
$disponiveis = [];
foreach ($arquivos as $f) {
    $nome = basename($f, '.json');
    if (preg_match('/^([a-z]+)(\d{4})/', $nome, $m)) {
        $vest = strtoupper($m[1]);
        $disponiveis[$vest][] = $m[2];
    }
}
foreach ($disponiveis as &$anos) { rsort($anos); }
unset($anos);
ksort($disponiveis);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="/simulados/duvid-simulado.png">
    <title>Duvid — Simulados de Geografia</title>

    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>
    <script src="/js/jessica-walker.js" defer></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>

    <style>
        .grid-simulados {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            padding: 8px 0 32px;
        }

        .card-simulado {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            padding: 20px 16px 16px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,.06);
            transition: transform .2s, box-shadow .2s;
            position: relative;
        }
        .card-simulado:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0,0,0,.12);
        }
        .card-simulado img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,.1);
        }
        .card-simulado h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: #1b5e20;
            margin: 12px 0 4px;
        }
        .badge-anos {
            display: inline-block;
            background: #e8f5e9;
            color: #2e7d32;
            border-radius: 20px;
            padding: 2px 10px;
            font-size: .72rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .btn-iniciar-card {
            display: block;
            margin: 0 auto;
            padding: 7px 20px;
            background: #4CAF50;
            color: #fff;
            border-radius: 20px;
            font-size: .82rem;
            font-weight: 700;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            transition: background .15s;
        }
        .btn-iniciar-card:hover { background: #2e7d32; }

        /* intro box */
        .sim-intro {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            padding: 28px 32px;
            margin-bottom: 28px;
            box-shadow: 0 4px 12px rgba(0,0,0,.05);
        }
        .sim-intro p {
            font-family: 'Montserrat', sans-serif;
            font-size: .95rem;
            color: #555;
            line-height: 1.7;
            margin: 0 0 16px;
        }
        .sim-intro .sim-highlight {
            background: #f1f8e9;
            border-left: 4px solid #4caf50;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: .9rem;
            color: #2e7d32;
            margin-bottom: 0;
        }

        /* dark mode */
        body.dark-mode .card-simulado { background: #1e1e1e !important; border-color: #333 !important; }
        body.dark-mode .card-simulado h3 { color: #a5d6a7 !important; }
        body.dark-mode .badge-anos { background: #1b5e20 !important; color: #a5d6a7 !important; }
        body.dark-mode .sim-intro { background: #1e1e1e !important; border-color: #333 !important; }
        body.dark-mode .sim-intro p { color: #aaa !important; }
    </style>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO BANNER ══════════════════════════════════════════════════ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-simulados.webp')">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📝 Simulados</span>
                <?php if (!empty($disponiveis)):
                    $listaVest = implode(' · ', array_keys($disponiveis)); ?>
                <span class="texto-badge"><?= $listaVest ?></span>
                <?php endif; ?>
            </div>
            <h1 class="texto-hero-title">📋 Simulados de Geografia</h1>
        </div>
    </div>

    <!-- ══ CORPO ════════════════════════════════════════════════════════ -->
    <div style="max-width: 1376px; margin: 0 auto; padding: 0 48px 48px; box-sizing: border-box;">

        <!-- Introdução -->
        <div class="sim-intro">
            <p>O <b>Duvid Simulado</b> traz questões de vestibulares organizadas por banca e ano. Cada questão tem dica e gabarito comentado — ideal para treinar no seu próprio ritmo.</p>
            <p class="sim-highlight"><b>Diferencial:</b> dicas contextuais para te guiar na resolução, sem spoiler do gabarito.</p>
        </div>

        <div style="text-align:center; padding: 8px 0 32px;">
            <a href="/simulados/simulado.php"
               style="display:inline-block; padding:14px 40px; background:#2e7d32; color:#fff;
                      border-radius:24px; font-family:'Montserrat',sans-serif; font-weight:700;
                      text-decoration:none; font-size:1rem; transition:background .15s;
                      box-shadow:0 4px 16px rgba(46,125,50,.25);"
               onmouseover="this.style.background='#1b5e20'"
               onmouseout="this.style.background='#2e7d32'">
                <i class="fa fa-play"></i> &nbsp;Escolher Simulado
            </a>
        </div>

    </div>

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
