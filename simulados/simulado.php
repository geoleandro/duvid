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
$dif   = in_array($_GET['dif'] ?? '', ['facil','media','dificil']) ? $_GET['dif'] : '';
$fase  = ($prova !== '') ? 2 : 1;

// Tags: lista de temas filtrados (validação básica: só letras/números/espaço/hífen/barra)
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

    // Coleta bancos individuais (exclui o arquivo mesclado)
    $arquivos = array_filter(
        glob($bancosDir . '/*.json') ?: [],
        fn($f) => basename($f) !== 'simulados-todos.json'
    );

    // ── Auto-gera simulados-todos.json se algum banco for mais novo ──
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
                $q['_banco'] = $banco; // ex: "fuvest2026-geografia"
                $todos[] = $q;
            }
        }
        file_put_contents($todosFile, json_encode($todos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    // Monta lista de provas por vestibular
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
    <script src="/js/jssimulado-padrao.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/js/jssimulado-padrao.js') ?>" defer></script>
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

        /* Badges no cabeçalho da Fase 2 */
        .badge-qtd {
            display: inline-block;
            background: #e8f5e9;
            color: #2e7d32;
            border-radius: 20px;
            padding: 2px 12px;
            font-size: .8rem;
            font-weight: 700;
            margin-left: 4px;
            vertical-align: middle;
        }
        .badge-dif-facil   { background: #e8f5e9; color: #2e7d32; }
        .badge-dif-media   { background: #fff8e1; color: #f57f17; }
        .badge-dif-dificil { background: #fce4ec; color: #b71c1c; }

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
        body.dark-mode .badge-qtd          { background: #1b5e20; color: #a5d6a7; }
        body.dark-mode .badge-dif-facil   { background: #1b5e20; color: #a5d6a7; }
        body.dark-mode .badge-dif-media   { background: #4a3000; color: #ffe082; }
        body.dark-mode .badge-dif-dificil { background: #4a0010; color: #f48fb1; }

        /* Tags / Temas */
        .sel-btn-tag.ativo   { border-color: #1976d2; background: #1976d2; color: #fff; }
        .sel-btn-tag:hover   { border-color: #1976d2; color: #1976d2; }
        .badge-tags { background: #e3f2fd; color: #1565c0; }
        #card-temas { display: none; }
        body.dark-mode .sel-btn-tag.ativo { border-color: #42a5f5; background: #1565c0; color: #fff; }
        body.dark-mode .badge-tags        { background: #0d2a4e; color: #90caf9; }
        body.dark-mode #busca-temas       { border-color: #444; color: #ddd; }
        body.dark-mode #busca-temas::placeholder { color: #888; }
        body.dark-mode #sugestoes-temas   { background: #1e1e1e; border-color: #444; }
        body.dark-mode #sugestoes-temas div { border-bottom-color: #333; color: #ddd; }
        body.dark-mode #sugestoes-temas div:hover { background: #2a2a2a !important; }
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
                    <button type="button"
                            class="sel-btn"
                            data-vest="__todos__"
                            onclick="selecionarVestibular(this)">
                        🌍 Todos
                    </button>
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

            <!-- 2. Ano (oculto quando "Todos" selecionado) -->
            <div class="sel-card" id="card-ano">
                <span class="sel-label"><i class="fa fa-calendar"></i> Ano</span>
                <div class="sel-group" id="grupo-ano">
                    <p class="w3-text-grey w3-small" id="hint-ano">
                        Selecione um vestibular primeiro.
                    </p>
                </div>
            </div>

            <!-- 3. Dificuldade -->
            <div class="sel-card">
                <span class="sel-label"><i class="fa fa-signal"></i> Dificuldade</span>
                <div class="sel-group" id="grupo-dif">
                    <button type="button" class="sel-btn ativo" data-dif=""       onclick="selecionarDif(this)">Todas</button>
                    <button type="button" class="sel-btn"       data-dif="facil"  onclick="selecionarDif(this)">🟢 Fácil</button>
                    <button type="button" class="sel-btn"       data-dif="media"  onclick="selecionarDif(this)">🟡 Médio</button>
                    <button type="button" class="sel-btn"       data-dif="dificil" onclick="selecionarDif(this)">🔴 Difícil</button>
                </div>
            </div>

            <!-- 3.5. Temas (busca por texto, populado via JS) -->
            <div class="sel-card" id="card-temas">
                <span class="sel-label">
                    <i class="fa fa-tags"></i> Temas
                    <span style="font-weight:400;text-transform:none;font-size:.8rem;color:#999;margin-left:4px">(opcional)</span>
                </span>
                <!-- chips dos temas já selecionados -->
                <div id="chips-temas" style="display:flex;flex-wrap:wrap;gap:6px;margin-bottom:8px"></div>
                <!-- campo de busca -->
                <input type="text" id="busca-temas"
                       placeholder="🔍 Buscar tema…"
                       autocomplete="off"
                       style="width:100%;padding:9px 12px;border:2px solid #ccc;border-radius:10px;
                              font-size:.95rem;background:transparent;color:inherit;box-sizing:border-box"
                       oninput="filtrarTemas(this.value)">
                <!-- dropdown de sugestões -->
                <div id="sugestoes-temas"
                     style="display:none;border:2px solid #ccc;border-top:none;border-radius:0 0 10px 10px;
                            max-height:220px;overflow-y:auto;background:var(--bg-card,#fff)"></div>
            </div>

            <!-- 4. Quantidade -->
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
    let _simuladosFeitos = {}; // mapa "VEST_ANO" → { melhor_acerto, total, tentativas }

    // Carrega histórico do aluno (silencioso se não logado)
    (async function() {
        try {
            const r = await fetch('/api/respostas-simulado.php');
            if (r.ok) {
                const d = await r.json();
                _simuladosFeitos = d.feitos || {};
                // Re-renderiza os botões se já tiver um vestibular selecionado
                if (vestSelecionado && vestSelecionado !== '__todos__') renderizarAnos();
            }
        } catch(e) { /* silencioso */ }
    })();
    let qtdSelecionada   = 10;  // padrão
    let difSelecionada   = '';  // '' = todas
    let tagsSelecionadas = [];  // multi-select de temas

    function selecionarVestibular(btn) {
        document.querySelectorAll('#grupo-vest .sel-btn').forEach(b => b.classList.remove('ativo'));
        btn.classList.add('ativo');
        vestSelecionado = btn.dataset.vest;
        anoSelecionado  = null;

        const cardAno = document.getElementById('card-ano');

        if (vestSelecionado === '__todos__') {
            // Modo "todos os vestibulares": pula seleção de ano
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
            grupo.innerHTML = '<p class="w3-text-grey w3-small" id="hint-ano">Selecione um vestibular primeiro.</p>';
            return;
        }

        const anos = PROVAS_DISPONIVEIS[vestSelecionado];
        grupo.innerHTML = anos.map(p => {
            const chave = vestSelecionado.toUpperCase() + '_' + p.ano;
            const feito = _simuladosFeitos[chave];
            const checkHtml = feito
                ? `<span title="Você já fez · melhor: ${feito.melhor_acerto}/${feito.total}"
                         style="margin-left:5px;font-size:.85em">✅</span>`
                : '';
            return `<button type="button"
                    class="sel-btn"
                    data-arquivo="${p.arquivo}"
                    data-ano="${p.ano}"
                    onclick="selecionarAno(this)">
                ${p.ano}${checkHtml}
            </button>`;
        }).join('');

        // Auto-seleciona o ano mais recente
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

    let _todasTags = []; // cache das tags do banco atual

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
        } catch(e) { /* silencioso */ }
    }

    function filtrarTemas(valor) {
        const sug = document.getElementById('sugestoes-temas');
        const q   = valor.trim().toLowerCase();
        if (!q) { sug.style.display = 'none'; return; }

        const matches = _todasTags.filter(t =>
            t.toLowerCase().includes(q) && !tagsSelecionadas.includes(t)
        );

        if (matches.length === 0) { sug.style.display = 'none'; return; }

        sug.innerHTML = matches.map(t => `
            <div onclick="adicionarTag('${t.replace(/'/g,"\\'")}'); document.getElementById('busca-temas').value=''; filtrarTemas('');"
                 style="padding:9px 14px;cursor:pointer;border-bottom:1px solid #eee;font-size:.95rem"
                 onmouseover="this.style.background='#f0f0f0'" onmouseout="this.style.background=''">
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
        const chips = document.getElementById('chips-temas');
        chips.innerHTML = tagsSelecionadas.map(t => `
            <span style="display:inline-flex;align-items:center;gap:5px;
                         background:#1976d2;color:#fff;border-radius:20px;
                         padding:4px 10px;font-size:.82rem;font-weight:600">
                ${t}
                <span onclick="removerTag('${t.replace(/'/g,"\\'")}');return false;"
                      style="cursor:pointer;font-size:1rem;line-height:1">&times;</span>
            </span>`).join('');
    }

    // Fechar sugestões ao clicar fora
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
        const qtdParam  = qtdSelecionada > 0          ? `&qtd=${qtdSelecionada}` : '';
        const difParam  = difSelecionada               ? `&dif=${encodeURIComponent(difSelecionada)}` : '';
        const tagsParam = tagsSelecionadas.length > 0  ? `&tags=${encodeURIComponent(tagsSelecionadas.join(','))}` : '';
        window.location.href = `/simulados/simulado.php?prova=${encodeURIComponent(anoSelecionado)}${qtdParam}${difParam}${tagsParam}`;
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
            <?php if ($dif !== ''): ?>
            <?php $difLabel = ['facil'=>'🟢 Fácil','media'=>'🟡 Médio','dificil'=>'🔴 Difícil']; ?>
            <span class="badge-qtd badge-dif-<?= $dif ?>"><?= $difLabel[$dif] ?></span>
            <?php endif; ?>
            <?php foreach ($tags as $tag): ?>
            <span class="badge-qtd badge-tags">#<?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
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
