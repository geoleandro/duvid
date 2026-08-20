<?php
require_once __DIR__ . '/../includes/auth_aluno.php';
require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/certificados.php';

$pdo     = getDB();
$alunoId = (int)$_SESSION['aluno_id'];

$stmt = $pdo->prepare(
    "SELECT tipo, referencia, conquistado_em FROM certificados_alunos WHERE aluno_id = :id"
);
$stmt->execute([':id' => $alunoId]);
$conquistados = [];
foreach ($stmt->fetchAll() as $r) {
    $conquistados[$r['tipo'] . ':' . $r['referencia']] = $r['conquistado_em'];
}

$blocosPorAno = getBlocosPorAno($pdo);

$totalPossivel = 0;
foreach ($blocosPorAno as $blocos) $totalPossivel += count($blocos) + 1; // +1 = certificado do módulo
$totalConquistado = count($conquistados);

$iconeModulo = [1 => '🌿', 2 => '🇧🇷', 3 => '🌍'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Meus Certificados — Duvid</title>

    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
        .mc-body-pad {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 48px 64px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        @media (max-width: 1024px) { .mc-body-pad { padding: 0 24px 48px; } }
        @media (max-width: 640px)  { .mc-body-pad { padding: 0 12px 40px; } }
        body:has(#sidebar-duvid) main.texto-layout { margin-left: 200px !important; }
        @media (max-width: 800px) {
            body:has(#sidebar-duvid) main.texto-layout { margin-left: 0 !important; }
        }

        .mc-hero {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            box-shadow: 0 4px 16px rgba(0,0,0,.06);
            padding: 24px 28px;
            margin-bottom: 32px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .mc-hero-icone { width: 56px; height: 56px; flex-shrink: 0; }
        .mc-hero-num { font-size: 1.5rem; font-weight: 800; color: #1c1b1b; margin: 0; }
        .mc-hero-label { font-size: .82rem; color: #757575; margin: 2px 0 0; }

        .mc-secao { margin-bottom: 48px; }
        .mc-secao-titulo {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1c1b1b;
            margin: 0 0 14px;
        }

        .mc-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }
        @media (min-width: 640px)  { .mc-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 900px)  { .mc-grid { grid-template-columns: repeat(3, 1fr); } }

        /* Card individual (bloco de Revisão) */
        .mc-card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 4px 12px rgba(0,0,0,.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 4px;
            text-decoration: none;
            transition: transform .15s, box-shadow .15s;
        }
        a.mc-card:hover { transform: translateY(-2px); box-shadow: 0 6px 18px rgba(0,0,0,.09); }

        .mc-card.mc-conquistado { border: 2px solid #2e7d32; background: #f4faf4; }

        /* Bloqueado: o cadeado fica esmaecido, mas o texto continua legível */
        .mc-card-icone {
            font-size: 2.75rem;
            line-height: 1;
            margin-bottom: 10px;
        }
        .mc-card.mc-bloqueado .mc-card-icone { opacity: .6; }

        .mc-card-titulo { font-size: .95rem; font-weight: 800; color: #1c1b1b; margin: 0 0 4px; line-height: 1.35; }
        .mc-card-sub    { font-size: .78rem; color: #757575; margin: 0; }
        .mc-card-data   { font-size: .76rem; color: #2e7d32; font-weight: 700; margin-top: 4px; }

        /* Card especial — módulo 100% completo */
        .mc-card.mc-modulo {
            grid-column: span 2;
            background: #fff9e6;
            border: 2px solid #fbc02d;
            padding: 40px;
        }
        .mc-card.mc-modulo.mc-conquistado { border: 3px solid #ffb300; background: #fff8e1; }
        @media (max-width: 640px) { .mc-card.mc-modulo { grid-column: span 1; } }

        body.dark-mode .mc-hero, body.dark-mode .mc-card { background: #1e1e1e; border-color: #333; }
        body.dark-mode .mc-hero-num, body.dark-mode .mc-card-titulo, body.dark-mode .mc-secao-titulo { color: #f0f0f0; }
        body.dark-mode .mc-card.mc-conquistado { background: #16281a; border-color: #4caf50; }
        body.dark-mode .mc-card.mc-modulo { background: #241f10; border-color: #6d5300; }
        body.dark-mode .mc-card.mc-modulo.mc-conquistado { background: #2a2405; border-color: #ffb300; }
    </style>
</head>

<body>

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="texto-layout">

        <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo.webp');">
            <div class="texto-hero-overlay">
                <div class="texto-hero-badges">
                    <span class="texto-badge texto-badge-green">🎖️ Certificados</span>
                </div>
                <h1 class="texto-hero-title">Meus Certificados</h1>
                <p style="font-family:'Montserrat',sans-serif; color:rgba(255,255,255,.82); font-size:.97rem; margin:0; max-width:500px;">
                    Cada bloco concluído — incluindo a Revisão — vira um certificado. Complete um módulo inteiro para o certificado especial.
                </p>
            </div>
        </div>

        <div class="mc-body-pad">

            <div class="mc-hero">
                <span class="mc-hero-icone">🎖️</span>
                <div>
                    <p class="mc-hero-num"><?= $totalConquistado ?> / <?= $totalPossivel ?></p>
                    <p class="mc-hero-label">certificados conquistados</p>
                </div>
            </div>

            <?php foreach ($blocosPorAno as $ano => $blocos):
                $nomeModulo = CERT_NOME_MODULO[$ano] ?? ('Ano ' . $ano);
                $icone      = $iconeModulo[$ano] ?? '🎓';
            ?>
            <div class="mc-secao">
                <p class="mc-secao-titulo"><?= $icone ?> Módulo <?= htmlspecialchars($nomeModulo) ?></p>
                <div class="mc-grid">

                    <?php foreach ($blocos as $bloco):
                        $chave = 'bloco:' . $bloco['revisao_id'];
                        $ganho = $conquistados[$chave] ?? null;
                        $link  = '/paginas/certificado.php?tipo=bloco&ref=' . $bloco['revisao_id'];
                        $tag   = $ganho ? 'a' : 'div';
                    ?>
                        <<?= $tag ?> <?= $ganho ? 'href="' . $link . '"' : '' ?> class="mc-card <?= $ganho ? 'mc-conquistado' : 'mc-bloqueado' ?>">
                            <span class="mc-card-icone"><?= $ganho ? '🎓' : '🔒' ?></span>
                            <div>
                                <p class="mc-card-titulo"><?= htmlspecialchars($bloco['titulo']) ?></p>
                                <?php if ($ganho): ?>
                                    <p class="mc-card-data"><?= (new DateTime($ganho))->format('d/m/Y') ?></p>
                                <?php else: ?>
                                    <p class="mc-card-sub">Complete texto + questões de todo o bloco</p>
                                <?php endif; ?>
                            </div>
                        </<?= $tag ?>>
                    <?php endforeach; ?>

                    <?php
                        $chaveModulo = 'modulo:' . $ano;
                        $ganhoModulo = $conquistados[$chaveModulo] ?? null;
                        $linkModulo  = '/paginas/certificado.php?tipo=modulo&ref=' . $ano;
                        $tagModulo   = $ganhoModulo ? 'a' : 'div';
                    ?>
                    <<?= $tagModulo ?> <?= $ganhoModulo ? 'href="' . $linkModulo . '"' : '' ?> class="mc-card mc-modulo <?= $ganhoModulo ? 'mc-conquistado' : 'mc-bloqueado' ?>">
                        <span class="mc-card-icone"><?= $ganhoModulo ? '🏅' : '🔒' ?></span>
                        <div>
                            <p class="mc-card-titulo">Módulo <?= htmlspecialchars($nomeModulo) ?> completo</p>
                            <?php if ($ganhoModulo): ?>
                                <p class="mc-card-data"><?= (new DateTime($ganhoModulo))->format('d/m/Y') ?></p>
                            <?php else: ?>
                                <p class="mc-card-sub">Certificado especial — 100% do módulo</p>
                            <?php endif; ?>
                        </div>
                    </<?= $tagModulo ?>>

                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
