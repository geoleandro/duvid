<?php
/* =====================================================================
   simulados/simulado.php  —  Duvid Geografia
   ---------------------------------------------------------------------
   Fase 1 (sem ?prova=): tela de seleção — escolhe vestibular, ano e qtd.
   Fase 2 (?prova= definido): motor de questões.
   ===================================================================== */

// ── Parâmetros e detecção de fase ────────────────────────────────────
$prova = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['prova'] ?? '');
$qtd   = max(0, (int)($_GET['qtd'] ?? 0));
$dif   = in_array($_GET['dif'] ?? '', ['facil','media','dificil']) ? $_GET['dif'] : '';
$fase  = ($prova !== '') ? 2 : 1;

$tagsRaw = array_filter(array_map('trim', explode(',', $_GET['tags'] ?? '')));
$tags    = array_values(array_filter($tagsRaw, fn($t) => preg_match('/^[\p{L}0-9 _\-\/]+$/u', $t)));

$erroArquivo = false;

// ── Fase 2: valida se o arquivo JSON existe ───────────────────────────
if ($fase === 2) {
    $bancosDir = __DIR__ . '/bancos';
    $arquivo   = $bancosDir . '/' . $prova . '.json';
    if (!file_exists($arquivo)) {
        $fase = 1;
        $erroArquivo = true;
    }
}

// ── Fase 1: escaneia /simulados/bancos/ para montar a seleção ────────
$provas = [];
if ($fase === 1) {
    $bancosDir = __DIR__ . '/bancos';
    $todosFile = $bancosDir . '/simulados-todos.json';

    $arquivos = array_filter(
        glob($bancosDir . '/*.json') ?: [],
        fn($f) => basename($f) !== 'simulados-todos.json'
    );

    $precisaGerar = !file_exists($todosFile);
    if (!$precisaGerar) {
        $todosTime = filemtime($todosFile);
        foreach ($arquivos as $f) {
            if (filemtime($f) > $todosTime) { $precisaGerar = true; break; }
        }
    }
    if ($precisaGerar) {
        $todos = [];
        foreach ($arquivos as $f) {
            $banco = basename($f, '.json');
            $data  = json_decode(file_get_contents($f), true) ?: [];
            foreach ($data as $q) {
                $q['_banco'] = $banco;
                $todos[] = $q;
            }
        }
        file_put_contents($todosFile, json_encode($todos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    foreach ($arquivos as $f) {
        $nome = basename($f, '.json');
        if (preg_match('/^([a-z]+)(\d{4})/', $nome, $m)) {
            $vest = strtoupper($m[1]);
            $provas[$vest][] = ['ano' => $m[2], 'arquivo' => $nome];
        }
    }
    foreach ($provas as &$anos) {
        usort($anos, fn($a, $b) => $b['ano'] <=> $a['ano']);
    }
    unset($anos);
    ksort($provas);
}

$opcQtd = [5 => '5 questões', 10 => '10 questões', 15 => '15 questões', 20 => '20 questões', 0 => 'Todas'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($fase === 2):
        if ($prova === 'simulados-todos') {
            $tituloVest = '🌍 Todos os vestibulares';
            $tituloAno  = '';
        } else {
            preg_match('/^([a-zA-Z]+)(\d{4})/', $prova, $m2);
            $tituloVest = isset($m2[1]) ? strtoupper($m2[1]) : 'Simulado';
            $tituloAno  = $m2[2] ?? '';
        }
    ?>
    <title>Simulado <?= htmlspecialchars($tituloVest . ' ' . $tituloAno) ?> — Duvid Geografia</title>
    <meta name="description" content="Simulado de Geografia <?= htmlspecialchars($tituloVest . ' ' . $tituloAno) ?> com questões comentadas.">
    <?php else: ?>
    <title>Simulados de Geografia — Duvid</title>
    <meta name="description" content="Escolha o vestibular, ano e quantidade de questões para iniciar seu simulado de Geografia.">
    <?php endif; ?>

    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/questoes-estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/jsquestoes-padrao.js" defer></script>
    <script src="/js/jssimulado-padrao.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/js/jssimulado-padrao.js') ?>" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>

    <style>
        @font-face { src: url('/fontes/FreePixel.woff'); font-family: pixel; }

        /* ── Fase 1: Seleção — Clean Pixel ──────────────────────────── */
        .sim-sel-pad {
            padding: 0 48px 48px;
            box-sizing: border-box;
        }
        .sim-sel-inner {
            max-width: 660px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sel-card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,.05);
        }
        .sel-label {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: .72rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #999;
            margin-bottom: 12px;
        }
        .sel-group {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .sel-btn {
            padding: 8px 18px;
            border: 1.5px solid #e0e0e0;
            border-radius: 20px;
            background: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: .85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .15s;
            color: #555;
        }
        .sel-btn:hover   { border-color: #4caf50; color: #2e7d32; background: #f0f7f0; }
        .sel-btn.ativo   { border-color: #2e7d32; background: #2e7d32; color: #fff; }
        .sel-btn:disabled { opacity: .4; cursor: not-allowed; }

        .sel-btn-tag.ativo  { border-color: #1976d2; background: #1976d2; color: #fff; }
        .sel-btn-tag:hover  { border-color: #1976d2; color: #1976d2; background: #e3f2fd; }
        #card-temas { display: none; }

        .btn-iniciar {
            width: 100%;
            padding: 14px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .04em;
            border: none;
            border-radius: 14px;
            background: #2e7d32;
            color: #fff;
            cursor: pointer;
            transition: background .15s, transform .1s;
        }
        .btn-iniciar:hover   { background: #1b5e20; }
        .btn-iniciar:active  { transform: scale(.98); }
        .btn-iniciar:disabled { background: #ccc; cursor: not-allowed; }

        /* ── Fase 2: Quiz layout ─────────────────────────────────────── */
        .sim-quiz-main {
            max-width: 780px;
            margin: 0 auto;
            padding: 80px 24px 120px;
            box-sizing: border-box;
        }

        .sim-quiz-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }
        .sim-back-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            background: #f5f5f5;
            border: 1px solid #e0e0e0;
            color: #555;
            font-family: 'Montserrat', sans-serif;
            font-size: .8rem;
            font-weight: 600;
            text-decoration: none;
            transition: background .15s;
        }
        .sim-back-btn:hover { background: #e8f5e9; color: #2e7d32; border-color: #4caf50; }

        .sim-titulo {
            font-family: 'Montserrat', sans-serif;
            font-size: .9rem;
            font-weight: 700;
            color: #333;
        }

        .badge-qtd {
            display: inline-block;
            background: #e8f5e9;
            color: #2e7d32;
            border-radius: 20px;
            padding: 2px 12px;
            font-size: .78rem;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }
        .badge-dif-facil   { background: #e8f5e9; color: #2e7d32; }
        .badge-dif-media   { background: #fff8e1; color: #f57f17; }
        .badge-dif-dificil { background: #fce4ec; color: #b71c1c; }
        .badge-tags { background: #e3f2fd; color: #1565c0; }

        /* Progress bar */
        .sim-progress-wrap {
            background: #f0f0f0;
            border-radius: 20px;
            height: 10px;
            overflow: hidden;
            margin-bottom: 24px;
        }
        #barra-progresso-simulado {
            height: 10px;
            background: linear-gradient(90deg, #2e7d32, #4caf50);
            border-radius: 20px;
            width: 0%;
            transition: width .5s ease;
        }

        /* Feedback bar */
        #barra-feedback {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 200;
            padding: 20px 24px;
            background: #fff;
            border-top: 1px solid #e0e0e0;
            box-shadow: 0 -4px 20px rgba(0,0,0,.1);
            display: none;
        }
        #barra-feedback.w3-show,
        #barra-feedback:not(.w3-hide) { display: block; }
        #barra-feedback .w3-content { max-width: 780px; margin: 0 auto; }

        /* GIF overlay */
        #duvid-gif-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }
        #duvid-gif-overlay img {
            max-height: 260px;
            filter: drop-shadow(0 8px 32px rgba(0,0,0,.35));
            animation: gifEntrar .35s cubic-bezier(.34,1.56,.64,1) forwards;
        }
        #duvid-gif-overlay img.duvid-gif-acerto    { max-height: 320px; }
        #duvid-gif-overlay img.duvid-gif-inteligente { max-height: 200px; }
        #duvid-gif-overlay.saindo img { animation: gifSair .45s ease-in forwards; }
        @keyframes gifEntrar {
            from { transform: scale(.3) translateY(40px); opacity: 0; }
            to   { transform: scale(1)  translateY(0);    opacity: 1; }
        }
        @keyframes gifSair {
            from { transform: scale(1);   opacity: 1; }
            to   { transform: scale(.7) translateY(-30px); opacity: 0; }
        }
        .duvid-gif-erro   { display:block; height:200px; margin:0 auto 8px; filter:drop-shadow(0 4px 12px rgba(0,0,0,.25)); }
        .duvid-gif-duvida { display:block; height:200px; margin:0 auto 6px; filter:drop-shadow(0 3px 8px rgba(0,0,0,.2)); }

        /* Modal resultado */
        .sim-modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }
        .sim-modal-overlay.aberto { display: flex; }
        .sim-modal-box {
            background: #fff;
            border-radius: 24px;
            padding: 36px 32px;
            max-width: 460px;
            width: 92%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,.2);
            animation: zoomIn .3s cubic-bezier(.34,1.56,.64,1);
        }
        @keyframes zoomIn { from { transform: scale(.8); opacity:0; } to { transform: scale(1); opacity:1; } }

        /* Modal dica */
        .dica-modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        /* ── Dark mode ───────────────────────────────────────────────── */
        body.dark-mode .sel-card   { background: #1e1e1e !important; border-color: #333 !important; }
        body.dark-mode .sel-label  { color: #777; }
        body.dark-mode .sel-btn    { border-color: #444; color: #ccc; background: #1e1e1e; }
        body.dark-mode .sel-btn:hover { background: #1e3a1e; border-color: #66bb6a; color: #81c784; }
        body.dark-mode .sel-btn.ativo { background: #2e7d32; border-color: #2e7d32; color: #fff; }
        body.dark-mode .badge-qtd      { background: #1b5e20; color: #a5d6a7; }
        body.dark-mode .badge-dif-facil   { background: #1b5e20; color: #a5d6a7; }
        body.dark-mode .badge-dif-media   { background: #4a3000; color: #ffe082; }
        body.dark-mode .badge-dif-dificil { background: #4a0010; color: #f48fb1; }
        body.dark-mode .badge-tags        { background: #0d2a4e; color: #90caf9; }
        body.dark-mode .sim-progress-wrap { background: #333; }
        body.dark-mode #barra-feedback    { background: #1a1a1a; border-color: #333; }
        body.dark-mode .sim-back-btn      { background: #2a2a2a; border-color: #444; color: #ccc; }
        body.dark-mode .sim-titulo        { color: #e0e0e0; }
        body.dark-mode .sim-modal-box     { background: #1e1e1e; color: #e0e0e0; }
        body.dark-mode #busca-temas       { border-color: #444; color: #ddd; background: #2a2a2a; }
        body.dark-mode #sugestoes-temas   { background: #1e1e1e; border-color: #444; }
        body.dark-mode #sugestoes-temas div { border-color: #333; color: #ddd; }
        body.dark-mode #sugestoes-temas div:hover { background: #2a2a2a !important; }

        /* Responsive */
        @media (max-width: 900px) {
            .sim-sel-pad { padding: 0 16px 40px; }
        }
        @media (max-width: 600px) {
            .sim-quiz-main { padding: 70px 12px 100px; }
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<div id="duvid-gif-overlay"></div>

<?php if ($fase === 1): ?>
<!-- ═══════════════════════════════════════════════════════
     FASE 1 — SELEÇÃO
     ═══════════════════════════════════════════════════════ -->
<main class="texto-layout">

    <!-- Hero banner -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-simulados.webp')">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📝 Simulados</span>
                <?php if (!empty($provas)): ?>
                <span class="texto-badge"><?= implode(' · ', array_keys($provas)) ?></span>
                <?php endif; ?>
            </div>
            <h1 class="texto-hero-title">⚡ Simulado de Geografia</h1>
        </div>
    </div>

    <!-- Seleção -->
    <div class="sim-sel-pad">
        <div class="sim-sel-inner">

        <?php if ($erroArquivo): ?>
        <div style="background:#fff5f5; border:1.5px solid #f44336; border-radius:16px; padding:16px 20px;
                    font-family:'Montserrat',sans-serif; font-size:.9rem; color:#c62828;">
            <i class="fa fa-exclamation-triangle"></i>
            <b>Banco de questões não encontrado.</b> Verifique o endereço e tente novamente.
        </div>
        <?php endif; ?>

        <?php if (empty($provas)): ?>
        <div style="background:#fff; border:1px solid #e0e0e0; border-radius:20px; padding:48px 24px;
                    text-align:center; box-shadow:0 4px 12px rgba(0,0,0,.05);">
            <i class="fa fa-folder-open" style="font-size:3rem; color:#ccc;"></i>
            <p style="font-family:'Montserrat',sans-serif; color:#aaa; margin:16px 0 8px; font-size:1rem; font-weight:600;">
                Nenhum banco de questões disponível.
            </p>
            <p style="font-family:'Montserrat',sans-serif; font-size:.8rem; color:#bbb;">
                Adicione arquivos <code>.json</code> em <code>/simulados/bancos/</code>
            </p>
            <a href="/simulados/capasimuladogeral.php"
               style="display:inline-block; margin-top:16px; padding:10px 24px; background:#2e7d32;
                      color:#fff; border-radius:20px; text-decoration:none; font-family:'Montserrat',sans-serif;
                      font-size:.88rem; font-weight:700;">
                Ver simulados
            </a>
        </div>

        <?php else: ?>
        <form id="form-simulado" onsubmit="iniciarSimulado(event)">

            <!-- 1. Vestibular -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-university" style="margin-right:6px;"></i>Vestibular</span>
                <div class="sel-group" id="grupo-vest">
                    <button type="button" class="sel-btn" data-vest="__todos__" onclick="selecionarVestibular(this)">
                        🌍 Todos
                    </button>
                    <?php foreach (array_keys($provas) as $vest): ?>
                    <button type="button" class="sel-btn" data-vest="<?= htmlspecialchars($vest) ?>"
                            onclick="selecionarVestibular(this)">
                        <?= htmlspecialchars($vest) ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 2. Ano -->
            <div class="sel-card" id="card-ano">
                <span class="sel-label"><i class="fa fa-calendar" style="margin-right:6px;"></i>Ano</span>
                <div class="sel-group" id="grupo-ano">
                    <p style="font-family:'Montserrat',sans-serif; font-size:.85rem; color:#bbb; margin:0;"
                       id="hint-ano">Selecione um vestibular primeiro.</p>
                </div>
            </div>

            <!-- 3. Dificuldade -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-signal" style="margin-right:6px;"></i>Dificuldade</span>
                <div class="sel-group" id="grupo-dif">
                    <button type="button" class="sel-btn ativo" data-dif=""        onclick="selecionarDif(this)">Todas</button>
                    <button type="button" class="sel-btn"       data-dif="facil"   onclick="selecionarDif(this)">🟢 Fácil</button>
                    <button type="button" class="sel-btn"       data-dif="media"   onclick="selecionarDif(this)">🟡 Médio</button>
                    <button type="button" class="sel-btn"       data-dif="dificil" onclick="selecionarDif(this)">🔴 Difícil</button>
                </div>
            </div>

            <!-- 3.5. Temas -->
            <div class="sel-card" id="card-temas">
                <span class="sel-label">
                    <i class="fa fa-tags" style="margin-right:6px;"></i>Temas
                    <span style="font-weight:400; text-transform:none; font-size:.78rem; color:#bbb; margin-left:4px;">(opcional)</span>
                </span>
                <div id="chips-temas" style="display:flex; flex-wrap:wrap; gap:6px; margin-bottom:10px;"></div>
                <input type="text" id="busca-temas"
                       placeholder="🔍 Buscar tema…"
                       autocomplete="off"
                       style="width:100%; padding:9px 14px; border:1.5px solid #e0e0e0; border-radius:12px;
                              font-family:'Montserrat',sans-serif; font-size:.88rem; background:transparent;
                              color:inherit; box-sizing:border-box; outline:none; transition:border-color .15s;"
                       onfocus="this.style.borderColor='#4caf50'"
                       onblur="this.style.borderColor='#e0e0e0'"
                       oninput="filtrarTemas(this.value)">
                <div id="sugestoes-temas"
                     style="display:none; border:1.5px solid #e0e0e0; border-top:none;
                            border-radius:0 0 12px 12px; max-height:220px; overflow-y:auto;
                            background:#fff;"></div>
            </div>

            <!-- 4. Quantidade -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-list-ol" style="margin-right:6px;"></i>Quantidade de questões</span>
                <div class="sel-group" id="grupo-qtd">
                    <?php foreach ($opcQtd as $valor => $label): ?>
                    <button type="button"
                            class="sel-btn <?= ($valor === 10) ? 'ativo' : '' ?>"
                            data-qtd="<?= $valor ?>"
                            onclick="selecionarQtd(this)">
                        <?= htmlspecialchars($label) ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <button type="submit" class="btn-iniciar" id="btn-iniciar" disabled>
                <i class="fa fa-play"></i> &nbsp;INICIAR SIMULADO
            </button>
        </form>
        <?php endif; ?>

        </div><!-- /sim-sel-inner -->
    </div><!-- /sim-sel-pad -->

</main>

<!-- Dados das provas para o JS -->
<script>
const PROVAS_DISPONIVEIS = <?= json_encode($provas, JSON_UNESCAPED_UNICODE) ?>;

let vestSelecionado  = null;
let anoSelecionado   = null;
let _simuladosFeitos = {};

(async function() {
    try {
        const r = await fetch('/api/respostas-simulado.php');
        if (r.ok) {
            const d = await r.json();
            _simuladosFeitos = d.feitos || {};
            if (vestSelecionado && vestSelecionado !== '__todos__') renderizarAnos();
        }
    } catch(e) {}
})();

let qtdSelecionada   = 10;
let difSelecionada   = '';
let tagsSelecionadas = [];

function selecionarVestibular(btn) {
    document.querySelectorAll('#grupo-vest .sel-btn').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    vestSelecionado = btn.dataset.vest;
    anoSelecionado  = null;
    const cardAno = document.getElementById('card-ano');
    if (vestSelecionado === '__todos__') {
        cardAno.style.display = 'none';
        anoSelecionado = 'simulados-todos';
        carregarTags('simulados-todos');
        atualizarBotao();
    } else {
        cardAno.style.display = 'block';
        renderizarAnos();
        atualizarBotao();
    }
}

function renderizarAnos() {
    const grupo = document.getElementById('grupo-ano');
    if (!vestSelecionado || !PROVAS_DISPONIVEIS[vestSelecionado]) {
        grupo.innerHTML = '<p style="font-family:\'Montserrat\',sans-serif; font-size:.85rem; color:#bbb; margin:0;">Selecione um vestibular primeiro.</p>';
        return;
    }
    const anos = PROVAS_DISPONIVEIS[vestSelecionado];
    grupo.innerHTML = anos.map(p => {
        const chave = vestSelecionado.toUpperCase() + '_' + p.ano;
        const feito = _simuladosFeitos[chave];
        const checkHtml = feito
            ? `<span title="Melhor: ${feito.melhor_acerto}/${feito.total}" style="margin-left:4px;font-size:.85em">✅</span>`
            : '';
        return `<button type="button" class="sel-btn" data-arquivo="${p.arquivo}" data-ano="${p.ano}" onclick="selecionarAno(this)">
            ${p.ano}${checkHtml}
        </button>`;
    }).join('');
    const primeiro = grupo.querySelector('.sel-btn');
    if (primeiro) selecionarAno(primeiro);
}

function selecionarAno(btn) {
    document.querySelectorAll('#grupo-ano .sel-btn').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    anoSelecionado = btn.dataset.arquivo;
    carregarTags(anoSelecionado);
    atualizarBotao();
}

let _todasTags = [];

async function carregarTags(arquivo) {
    const card = document.getElementById('card-temas');
    tagsSelecionadas = [];
    _todasTags = [];
    document.getElementById('chips-temas').innerHTML = '';
    document.getElementById('busca-temas').value = '';
    document.getElementById('sugestoes-temas').style.display = 'none';
    card.style.display = 'none';
    try {
        const res  = await fetch(`/simulados/bancos/${arquivo}.json`);
        const data = await res.json();
        const set  = new Set();
        data.forEach(q => (q.tags || []).forEach(t => set.add(t)));
        _todasTags = [...set].sort((a, b) => a.localeCompare(b, 'pt'));
        if (_todasTags.length > 0) card.style.display = 'block';
    } catch(e) {}
}

function filtrarTemas(valor) {
    const sug = document.getElementById('sugestoes-temas');
    const q   = valor.trim().toLowerCase();
    if (!q) { sug.style.display = 'none'; return; }
    const matches = _todasTags.filter(t => t.toLowerCase().includes(q) && !tagsSelecionadas.includes(t));
    if (matches.length === 0) { sug.style.display = 'none'; return; }
    sug.innerHTML = matches.map(t => `
        <div onclick="adicionarTag('${t.replace(/'/g,"\\'")}'); document.getElementById('busca-temas').value=''; filtrarTemas('');"
             style="padding:9px 14px; cursor:pointer; border-bottom:1px solid #f0f0f0;
                    font-family:'Montserrat',sans-serif; font-size:.88rem;"
             onmouseover="this.style.background='#f5f5f5'" onmouseout="this.style.background=''">
            ${t}
        </div>`).join('');
    sug.style.display = 'block';
}

function adicionarTag(tag) {
    if (tagsSelecionadas.includes(tag)) return;
    tagsSelecionadas.push(tag);
    renderizarChips();
    document.getElementById('sugestoes-temas').style.display = 'none';
}
function removerTag(tag) {
    tagsSelecionadas = tagsSelecionadas.filter(t => t !== tag);
    renderizarChips();
}
function renderizarChips() {
    document.getElementById('chips-temas').innerHTML = tagsSelecionadas.map(t => `
        <span style="display:inline-flex; align-items:center; gap:5px; background:#1976d2; color:#fff;
                     border-radius:20px; padding:4px 10px; font-family:'Montserrat',sans-serif;
                     font-size:.8rem; font-weight:600;">
            ${t}
            <span onclick="removerTag('${t.replace(/'/g,"\\'")}');" style="cursor:pointer; font-size:1rem; line-height:1;">&times;</span>
        </span>`).join('');
}

document.addEventListener('click', e => {
    if (!e.target.closest('#card-temas'))
        document.getElementById('sugestoes-temas').style.display = 'none';
});

function selecionarDif(btn) {
    document.querySelectorAll('#grupo-dif .sel-btn').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    difSelecionada = btn.dataset.dif;
}
function selecionarQtd(btn) {
    document.querySelectorAll('#grupo-qtd .sel-btn').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    qtdSelecionada = parseInt(btn.dataset.qtd) || 0;
}
function atualizarBotao() {
    const btn = document.getElementById('btn-iniciar');
    if (btn) btn.disabled = !(vestSelecionado && anoSelecionado);
}
function iniciarSimulado(e) {
    e.preventDefault();
    if (!anoSelecionado) return;
    const qtdParam  = qtdSelecionada > 0         ? `&qtd=${qtdSelecionada}` : '';
    const difParam  = difSelecionada              ? `&dif=${encodeURIComponent(difSelecionada)}` : '';
    const tagsParam = tagsSelecionadas.length > 0 ? `&tags=${encodeURIComponent(tagsSelecionadas.join(','))}` : '';
    window.location.href = `/simulados/simulado.php?prova=${encodeURIComponent(anoSelecionado)}${qtdParam}${difParam}${tagsParam}`;
}
</script>

<?php else: ?>
<!-- ═══════════════════════════════════════════════════════
     FASE 2 — MOTOR DE QUESTÕES
     ═══════════════════════════════════════════════════════ -->
<main class="questoes-layout">

    <div id="aviso-status"></div>

    <div class="quest-body-row">

        <!-- ── Coluna Central ───────────────────────────────── -->
        <div class="quest-center">

            <!-- Cabeçalho -->
            <div class="sim-quiz-header">
                <a href="/simulados/simulado.php" class="sim-back-btn">
                    <i class="fa fa-arrow-left"></i> Voltar
                </a>
                <span class="sim-titulo">
                    <?= htmlspecialchars(strtoupper($tituloVest) . ($tituloAno ? ' · ' . $tituloAno : '')) ?>
                </span>
                <?php if ($qtd > 0): ?>
                <span class="badge-qtd"><?= $qtd ?> questões</span>
                <?php endif; ?>
                <?php if ($dif !== ''):
                    $difLabel = ['facil'=>'🟢 Fácil','media'=>'🟡 Médio','dificil'=>'🔴 Difícil']; ?>
                <span class="badge-qtd badge-dif-<?= $dif ?>"><?= $difLabel[$dif] ?></span>
                <?php endif; ?>
                <?php foreach ($tags as $tag): ?>
                <span class="badge-qtd badge-tags">#<?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>

            <!-- Questões (injetadas pelo motor JS) -->
            <div id="container-questao">
                <div style="text-align:center; padding:64px 0;">
                    <i class="fa fa-spinner fa-spin" style="font-size:2.5rem; color:#4caf50;"></i>
                    <p style="font-family:'Montserrat',sans-serif; color:#aaa; margin-top:12px;">Carregando simulado…</p>
                </div>
            </div>

            <!-- Barra de feedback (fixa no rodapé) -->
            <div id="barra-feedback" class="w3-hide">
                <div class="w3-content">
                    <h3 id="feedback-msg" class="w3-xlarge"></h3>
                    <p  id="feedback-txt" class="w3-medium"></p>
                    <button onclick="proxima()"
                            class="w3-button btn-acao-duvid w3-teal w3-round-large w3-block w3-margin-top">
                        <b>CONTINUAR</b>
                    </button>
                </div>
            </div>

        </div><!-- /.quest-center -->

        <!-- ── Painel Direito (sticky) ──────────────────────── -->
        <aside class="quest-side-panel" id="quest-panel-direito">

            <!-- Progresso -->
            <div class="qp-card qp-card--progress">
                <p class="qp-label">Progresso</p>
                <div class="quest-progress-track" style="margin-bottom:12px">
                    <div id="barra-progresso-simulado"></div>
                </div>
                <div class="qp-vidas-row">
                    <div class="duvid-coracoes-container" id="quest-coracoes-header"></div>
                    <span id="aviso-vidas-questao" class="aviso-vidas"></span>
                </div>
            </div>

            <!-- Info da missão -->
            <div class="qp-card">
                <p class="qp-label">📝 Simulado</p>
                <div id="quest-info-aula">
                    <p class="qp-empty-text">Carregando...</p>
                </div>
            </div>

            <!-- Card Desempenho -->
            <div class="qp-card" id="card-desempenho">
                <div class="qp-desemp-header">
                    <p class="qp-label qp-label--green">DESEMPENHO</p>
                    <span class="qp-desemp-pill" id="qp-desemp-pill">—</span>
                </div>
                <div class="qp-desemp-mid">
                    <div class="qp-desemp-chart-wrap">
                        <canvas id="qp-desemp-canvas" width="90" height="90"></canvas>
                        <span class="qp-desemp-pct-overlay" id="qp-desemp-pct">—</span>
                    </div>
                    <div class="qp-desemp-evo">
                        <span class="qp-desemp-sublabel">Evolução</span>
                        <div class="qp-evolucao-bars" id="qp-evolucao-bars">
                            <span class="qp-evo-bar" style="height:20%"></span>
                            <span class="qp-evo-bar" style="height:35%"></span>
                            <span class="qp-evo-bar" style="height:50%"></span>
                            <span class="qp-evo-bar" style="height:65%"></span>
                            <span class="qp-evo-bar" style="height:55%"></span>
                            <span class="qp-evo-bar qp-evo-bar--active" style="height:10%"></span>
                        </div>
                    </div>
                </div>
                <div class="qp-desemp-heatmap-wrap">
                    <span class="qp-desemp-sublabel">Assuntos mais errados</span>
                    <div class="qp-heatmap" id="qp-heatmap"></div>
                </div>
            </div>

            <!-- Card Recursos -->
            <div class="qp-card" id="card-recursos">
                <p class="qp-label qp-label--green">RECURSOS</p>
                <ul class="qp-recursos-list">
                    <li><a id="recurso-aula" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                        <span class="qp-recurso-icon qp-recurso-icon--green"><i class="fa fa-graduation-cap"></i></span>
                        <span class="qp-recurso-label">Aula Relacionada</span>
                    </a></li>
                    <li><a id="recurso-mapa" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                        <span class="qp-recurso-icon qp-recurso-icon--blue"><i class="fa fa-brain"></i></span>
                        <span class="qp-recurso-label">Mapa Mental</span>
                    </a></li>
                    <li><a id="recurso-glossario" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                        <span class="qp-recurso-icon qp-recurso-icon--purple"><i class="fa fa-book"></i></span>
                        <span class="qp-recurso-label">Glossário</span>
                    </a></li>
                    <li><a id="recurso-video" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                        <span class="qp-recurso-icon qp-recurso-icon--red"><i class="fa fa-play-circle"></i></span>
                        <span class="qp-recurso-label">Vídeo de Revisão</span>
                    </a></li>
                    <li><a id="recurso-similares" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                        <span class="qp-recurso-icon qp-recurso-icon--teal"><i class="fa fa-list-check"></i></span>
                        <span class="qp-recurso-label">Questões Parecidas</span>
                    </a></li>
                </ul>
            </div>

            <!-- Controle de fonte -->
            <div class="qp-card qp-card--font">
                <p class="qp-label">🔠 Tamanho do texto</p>
                <div class="qp-font-row">
                    <button id="quest-decrease-font" class="qp-font-btn">A−</button>
                    <span id="quest-font-pct" class="qp-font-pct">100%</span>
                    <button id="quest-increase-font" class="qp-font-btn qp-font-btn--plus">A+</button>
                </div>
            </div>

        </aside>

    </div><!-- /.quest-body-row -->

</main>

<!-- Modal resultado final -->
<div id="id01" class="w3-modal" style="z-index:9999;">
    <div class="w3-modal-content w3-animate-zoom w3-round-large" style="max-width:460px; border-radius:24px; overflow:hidden;">
        <div style="padding:36px 32px; text-align:center; background:#fff;">
            <div style="margin-bottom:16px;">
                <img id="modal-img-globinho" src="/fotoIndex/globinhoPe.png" width="80" height="80">
            </div>
            <h2 id="modal-titulo" class="fontePixel"></h2>
            <p  id="modal-frase-motivacional" style="color:#888; font-family:'Montserrat',sans-serif; font-size:.9rem;"></p>
            <div style="padding:16px 0;">
                <p id="modal-feedback-principal" style="font-size:1.1rem; font-family:'Montserrat',sans-serif; font-weight:600;"></p>
            </div>
            <button id="btn-revisao-erros" onclick="iniciarRevisao()"
                    style="display:none; width:100%; margin-bottom:10px; padding:12px; border:none; border-radius:12px;
                           background:#ff9800; color:#fff; font-family:'Montserrat',sans-serif; font-weight:700;
                           font-size:.95rem; cursor:pointer;"></button>
            <button id="btn-tentar-novamente" onclick="tentarNovamente()"
                    style="display:none; width:100%; margin-bottom:10px; padding:12px; border:none; border-radius:12px;
                           background:#2e7d32; color:#fff; font-family:'Montserrat',sans-serif; font-weight:700;
                           font-size:.95rem; cursor:pointer;">↺ REFAZER</button>
            <a href="/simulados/simulado.php"
               style="display:block; padding:11px; border-radius:12px; background:#f5f5f5; color:#555;
                      font-family:'Montserrat',sans-serif; font-weight:600; font-size:.9rem;
                      text-decoration:none; text-align:center; transition:background .15s;"
               onmouseover="this.style.background='#e0e0e0'"
               onmouseout="this.style.background='#f5f5f5'">
                ← Escolher outro simulado
            </a>
        </div>
    </div>
</div>

<!-- Modal de dica -->
<div id="modal-dica" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:9999; align-items:center; justify-content:center;">
    <div style="background:#fff; border-radius:20px; max-width:500px; width:92%; overflow:hidden; box-shadow:0 20px 60px rgba(0,0,0,.2);">
        <div style="background:#2e7d32; padding:16px 20px; display:flex; align-items:center; justify-content:space-between;">
            <h4 style="margin:0; color:#fff; font-family:'Montserrat',sans-serif;">💡 Dica do Professor</h4>
            <span onclick="document.getElementById('modal-dica').style.display='none'"
                  style="cursor:pointer; color:rgba(255,255,255,.8); font-size:1.4rem; line-height:1;">&times;</span>
        </div>
        <div style="padding:28px 24px;">
            <p id="texto-da-dica" style="font-size:1rem; font-style:italic; color:#555; line-height:1.7;
                                         font-family:'Montserrat',sans-serif; margin:0;"></p>
        </div>
        <div style="padding:12px 24px 20px; text-align:right;">
            <button onclick="document.getElementById('modal-dica').style.display='none'"
                    style="padding:9px 24px; background:#2e7d32; color:#fff; border:none; border-radius:20px;
                           font-family:'Montserrat',sans-serif; font-weight:700; cursor:pointer;">
                ENTENDI!
            </button>
        </div>
    </div>
</div>

<?php endif; ?>

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
