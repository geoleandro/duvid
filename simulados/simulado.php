<?php
/* =====================================================================
   simulados/simulado.php  —  Duvid Geografia
   ---------------------------------------------------------------------
   Fase 1 (sem ?prova=): tela de seleção — escolhe vestibular, ano e qtd.
   Fase 2 (?prova= definido): motor de questões (estrutura de modelo-simulado.html).
   O motor em JS (jssimulado-padrao.js) lê os parâmetros da URL.
   ===================================================================== */

// ── Parâmetros e detecção de fase ────────────────────────────────────
$prova = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['prova'] ?? '');
$qtd   = max(0, (int)($_GET['qtd'] ?? 0));
$fase  = ($prova !== '') ? 2 : 1;

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
    $arquivos  = glob($bancosDir . '/*.json') ?: [];
    foreach ($arquivos as $f) {
        $nome = basename($f, '.json');
        // Formato esperado: {vestibular}{ano}-geografia  (ex: enem2024-geografia)
        if (preg_match('/^([a-z]+)(\d{4})/', $nome, $m)) {
            $vest = strtoupper($m[1]);
            $provas[$vest][] = ['ano' => $m[2], 'arquivo' => $nome];
        }
    }
    // Anos mais recentes primeiro
    foreach ($provas as &$anos) {
        usort($anos, fn($a, $b) => $b['ano'] <=> $a['ano']);
    }
    unset($anos);
    ksort($provas); // Vestibulares em ordem alfabética
}

// Opções de quantidade disponíveis
$opcQtd = [5 => '5 questões', 10 => '10 questões', 15 => '15 questões', 20 => '20 questões', 0 => 'Todas'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($fase === 2):
        // Extrai vestibular/ano do nome do arquivo para o <title>
        preg_match('/^([a-zA-Z]+)(\d{4})/', $prova, $m2);
        $tituloVest = isset($m2[1]) ? strtoupper($m2[1]) : 'Simulado';
        $tituloAno  = $m2[2] ?? '';
    ?>
    <title>Simulado <?= htmlspecialchars($tituloVest . ' ' . $tituloAno) ?> — Duvid Geografia</title>
    <meta name="description" content="Simulado de Geografia <?= htmlspecialchars($tituloVest . ' ' . $tituloAno) ?> com questões comentadas e feedback por alternativa.">
    <?php else: ?>
    <title>Simulados de Geografia — Duvid</title>
    <meta name="description" content="Escolha o vestibular, ano e quantidade de questões para iniciar seu simulado de Geografia.">
    <?php endif; ?>

    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <!-- Motor de questões (carregado sempre; inativo na Fase 1 pois não há ?prova=) -->
    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/jsquestoes-padrao.js" defer></script>
    <script src="/js/jssimulado-padrao.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>

    <style>
        /* ── Compartilhado ─────────────────────────────────────── */
        @font-face { src: url('/fontes/FreePixel.woff'); font-family: pixel; }

        /* ── Fase 1: Seleção ───────────────────────────────────── */
        .sel-card {
            background: var(--bg-card, #fff);
            border-radius: 16px;
            padding: 28px 24px;
            margin-bottom: 20px;
            box-shadow: 0 2px 12px rgba(0,0,0,.08);
        }
        .sel-label {
            display: block;
            font-weight: 700;
            font-size: .85rem;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #555;
            margin-bottom: 8px;
        }
        .sel-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .sel-btn {
            flex: 1 1 auto;
            min-width: 90px;
            padding: 10px 16px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background: transparent;
            font-size: .95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .2s;
            color: inherit;
        }
        .sel-btn:hover   { border-color: #4CAF50; color: #4CAF50; }
        .sel-btn.ativo   { border-color: #4CAF50; background: #4CAF50; color: #fff; }
        .sel-btn:disabled { opacity: .4; cursor: not-allowed; }

        .btn-iniciar {
            width: 100%;
            padding: 16px;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: .05em;
            border: none;
            border-radius: 14px;
            background: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background .2s, transform .1s;
            margin-top: 8px;
        }
        .btn-iniciar:hover   { background: #388E3C; }
        .btn-iniciar:active  { transform: scale(.98); }
        .btn-iniciar:disabled { background: #aaa; cursor: not-allowed; }

        /* Badge de qtd selecionada no cabeçalho da Fase 2 */
        .badge-qtd {
            display: inline-block;
            background: #e8f5e9;
            color: #2e7d32;
            border-radius: 20px;
            padding: 2px 12px;
            font-size: .8rem;
            font-weight: 700;
            margin-left: 8px;
            vertical-align: middle;
        }

        /* ── Fase 2: Motor (copiado de modelo-simulado.html) ──── */
        .w3-large, .w3-panel p { white-space: pre-line; }

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
            filter: drop-shadow(0 8px 32px rgba(0,0,0,0.35));
            animation: gifEntrar 0.35s cubic-bezier(0.34,1.56,0.64,1) forwards;
        }
        #duvid-gif-overlay img.duvid-gif-acerto    { max-height: 320px; }
        #duvid-gif-overlay img.duvid-gif-inteligente { max-height: 200px; }
        #duvid-gif-overlay.saindo img { animation: gifSair 0.45s ease-in forwards; }
        @keyframes gifEntrar {
            from { transform: scale(0.3) translateY(40px); opacity: 0; }
            to   { transform: scale(1)   translateY(0);    opacity: 1; }
        }
        @keyframes gifSair {
            from { transform: scale(1);   opacity: 1; }
            to   { transform: scale(0.7) translateY(-30px); opacity: 0; }
        }
        .duvid-gif-erro {
            display: block; height: 200px; margin: 0 auto 8px;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.25));
        }
        .duvid-gif-duvida {
            display: block; height: 200px; margin: 0 auto 6px;
            filter: drop-shadow(0 3px 8px rgba(0,0,0,0.2));
        }

        /* ── Dark mode ─────────────────────────────────────────── */
        body.dark-mode .sel-card       { background: #1e1e1e; }
        body.dark-mode .sel-label      { color: #aaa; }
        body.dark-mode .sel-btn        { border-color: #444; color: #ddd; }
        body.dark-mode .sel-btn:hover  { border-color: #66BB6A; color: #66BB6A; }
        body.dark-mode .sel-btn.ativo  { border-color: #66BB6A; background: #2e7d32; color: #fff; }
        body.dark-mode .badge-qtd      { background: #1b5e20; color: #a5d6a7; }
    </style>
</head>

<body>

    <div id="header-placeholder"></div>

    <!-- GIF overlay (usado pelo motor de questões) -->
    <div id="duvid-gif-overlay"></div>

<?php if ($fase === 1): ?>
    <!-- ═══════════════════════════════════════════════════════
         FASE 1 — TELA DE SELEÇÃO
         ═══════════════════════════════════════════════════════ -->
    <main class="w3-content w3-padding-large w3-margin-bottom" style="max-width:640px">

        <?php if ($erroArquivo): ?>
        <div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-padding w3-margin-bottom">
            <p><b>Banco de questões não encontrado.</b> Verifique o endereço e tente novamente.</p>
        </div>
        <?php endif; ?>

        <div class="sel-card w3-margin-top">
            <h2 class="fontePixel w3-text-green" style="margin-top:0">
                <i class="fa fa-pencil-alt"></i> Simulado
            </h2>
            <p class="w3-text-grey" style="margin-top:-8px">
                Questões reais comentadas com feedback por alternativa.
            </p>
        </div>

        <?php if (empty($provas)): ?>
        <!-- Nenhum banco disponível ainda -->
        <div class="sel-card w3-center w3-padding-32">
            <i class="fa fa-folder-open w3-jumbo w3-text-grey"></i>
            <p class="w3-large w3-text-grey w3-margin-top">Nenhum banco de questões disponível.</p>
            <p class="w3-small w3-text-grey">
                Adicione arquivos <code>.json</code> em <code>/simulados/bancos/</code><br>
                no formato <code>enem2024-geografia.json</code> para começar.
            </p>
            <a href="/simulados/capasimuladogeral.php" class="w3-button w3-green w3-round-large w3-margin-top">
                Ver todos os simulados
            </a>
        </div>

        <?php else: ?>
        <!-- Formulário de seleção -->
        <form id="form-simulado" onsubmit="iniciarSimulado(event)">

            <!-- 1. Vestibular -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-university"></i> Vestibular</span>
                <div class="sel-group" id="grupo-vest">
                    <?php foreach (array_keys($provas) as $vest): ?>
                    <button type="button"
                            class="sel-btn"
                            data-vest="<?= htmlspecialchars($vest) ?>"
                            onclick="selecionarVestibular(this)">
                        <?= htmlspecialchars($vest) ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 2. Ano (preenchido via JS após escolher vestibular) -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-calendar"></i> Ano</span>
                <div class="sel-group" id="grupo-ano">
                    <p class="w3-text-grey w3-small" id="hint-ano">
                        Selecione um vestibular primeiro.
                    </p>
                </div>
            </div>

            <!-- 3. Quantidade -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-list-ol"></i> Quantidade de questões</span>
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

    </main>

    <!-- Dados das provas disponíveis para o JS -->
    <script>
    const PROVAS_DISPONIVEIS = <?= json_encode($provas, JSON_UNESCAPED_UNICODE) ?>;

    let vestSelecionado  = null;
    let anoSelecionado   = null;
    let qtdSelecionada   = 10; // padrão

    function selecionarVestibular(btn) {
        document.querySelectorAll('#grupo-vest .sel-btn').forEach(b => b.classList.remove('ativo'));
        btn.classList.add('ativo');
        vestSelecionado = btn.dataset.vest;
        anoSelecionado  = null;
        renderizarAnos();
        atualizarBotao();
    }

    function renderizarAnos() {
        const grupo = document.getElementById('grupo-ano');
        const hint  = document.getElementById('hint-ano');

        if (!vestSelecionado || !PROVAS_DISPONIVEIS[vestSelecionado]) {
            grupo.innerHTML = '<p class="w3-text-grey w3-small" id="hint-ano">Selecione um vestibular primeiro.</p>';
            return;
        }

        const anos = PROVAS_DISPONIVEIS[vestSelecionado];
        grupo.innerHTML = anos.map(p => `
            <button type="button"
                    class="sel-btn"
                    data-arquivo="${p.arquivo}"
                    data-ano="${p.ano}"
                    onclick="selecionarAno(this)">
                ${p.ano}
            </button>
        `).join('');

        // Auto-seleciona o ano mais recente
        const primeiro = grupo.querySelector('.sel-btn');
        if (primeiro) selecionarAno(primeiro);
    }

    function selecionarAno(btn) {
        document.querySelectorAll('#grupo-ano .sel-btn').forEach(b => b.classList.remove('ativo'));
        btn.classList.add('ativo');
        anoSelecionado = btn.dataset.arquivo;
        atualizarBotao();
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
        const qtdParam = qtdSelecionada > 0 ? `&qtd=${qtdSelecionada}` : '';
        window.location.href = `/simulados/simulado.php?prova=${encodeURIComponent(anoSelecionado)}${qtdParam}`;
    }
    </script>

<?php else: ?>
    <!-- ═══════════════════════════════════════════════════════
         FASE 2 — MOTOR DE QUESTÕES
         ═══════════════════════════════════════════════════════ -->
    <main class="w3-content w3-white w3-card-2 w3-padding-large w3-margin-bottom" style="max-width:750px">

        <div id="aviso-status" class="w3-margin-top"></div>

        <!-- Cabeçalho com link de volta + badge de qtd -->
        <div class="w3-padding-small w3-margin-bottom" style="display:flex; align-items:center; gap:8px;">
            <a href="/simulados/simulado.php"
               class="w3-button w3-small w3-light-grey w3-round-large"
               title="Voltar à seleção">
                <i class="fa fa-arrow-left"></i>
            </a>
            <span class="w3-text-grey w3-small">
                <?= htmlspecialchars(strtoupper($tituloVest) . ' ' . $tituloAno) ?>
            </span>
            <?php if ($qtd > 0): ?>
            <span class="badge-qtd"><?= $qtd ?> questões</span>
            <?php endif; ?>
        </div>

        <!-- Barra de progresso -->
        <div class="w3-light-grey w3-round-xlarge" style="height:12px;">
            <div id="barra-progresso-simulado"
                 class="w3-container w3-green w3-round-xlarge"
                 style="width:0%; height:12px; transition:.5s"></div>
        </div>

        <!-- Questões injetadas pelo motor JS -->
        <div id="container-questao" class="w3-animate-right">
            <div class="w3-center w3-padding-64">
                <i class="fa fa-spinner fa-spin w3-jumbo w3-text-teal"></i>
                <p class="w3-text-grey">Carregando simulado…</p>
            </div>
        </div>

        <!-- Barra de feedback (acerto/erro) -->
        <div id="barra-feedback"
             class="w3-bottom w3-container w3-padding-24 w3-animate-bottom w3-hide"
             style="z-index:10">
            <div class="w3-content" style="max-width:750px">
                <h3 id="feedback-msg" class="w3-xlarge"></h3>
                <p  id="feedback-txt" class="w3-medium"></p>
                <button onclick="proxima()"
                        class="w3-button btn-acao-duvid w3-teal w3-round-large w3-block w3-margin-top">
                    <b>CONTINUAR</b>
                </button>
            </div>
        </div>

    </main>

    <!-- Modal final do simulado -->
    <div id="id01" class="w3-modal" style="z-index:9999;">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round-large" style="max-width:450px">
            <div class="w3-container w3-padding-32 w3-center">

                <div class="w3-margin-bottom pulse">
                    <img id="modal-img-globinho" src="/fotoIndex/globinhoPe.png" width="80" height="80">
                </div>

                <h2 id="modal-titulo" class="fontePixel"></h2>
                <p  id="modal-frase-motivacional" class="w3-text-grey"></p>

                <div class="w3-padding-16">
                    <p id="modal-feedback-principal" class="w3-large"></p>
                </div>

                <button id="btn-revisao-erros" onclick="iniciarRevisao()"
                        class="w3-button w3-amber w3-round-large w3-block w3-margin-bottom"
                        style="display:none"></button>

                <button id="btn-tentar-novamente" onclick="tentarNovamente()"
                        class="w3-button w3-teal w3-round-large w3-block w3-margin-bottom"
                        style="display:none">
                    <b>↺ REFAZER</b>
                </button>

                <a href="/simulados/simulado.php"
                   class="w3-button w3-light-grey w3-round-large w3-block">
                    ← Escolher outro simulado
                </a>
            </div>
        </div>
    </div>

    <!-- Modal de dica -->
    <div id="modal-dica" class="w3-modal" style="display:none; z-index:9999;">
        <div class="w3-modal-content w3-card-4 w3-animate-top w3-round-large" style="max-width:500px">
            <header class="w3-container w3-teal w3-round-large"
                    style="border-bottom-left-radius:0; border-bottom-right-radius:0;">
                <span onclick="document.getElementById('modal-dica').style.display='none'"
                      class="w3-button w3-display-topright w3-round-large">&times;</span>
                <h4>💡 Dica do Professor</h4>
            </header>
            <div class="w3-container w3-padding-32 w3-white">
                <p id="texto-da-dica" class="w3-large w3-serif" style="font-style:italic; color:#555;"></p>
            </div>
            <footer class="w3-container w3-light-grey w3-padding w3-right-align w3-round-large"
                    style="border-top-left-radius:0; border-top-right-radius:0;">
                <button class="w3-button w3-teal w3-round-medium"
                        onclick="document.getElementById('modal-dica').style.display='none'">
                    ENTENDI!
                </button>
            </footer>
        </div>
    </div>

<?php endif; ?>

    <div id="footer-placeholder"></div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>

</body>
</html>
