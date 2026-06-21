<?php require_once __DIR__ . '/../includes/auth_aluno.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Desempenho da Turma - Duvid</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
    body { display: flex; flex-direction: column; min-height: 100vh; margin: 0; }
    .st-main { flex: 1 0 auto; }

    .st-wrap {
        max-width: 680px;
        margin: 90px auto 80px;
        padding: 0 16px;
    }

    /* ── Cabeçalho ── */
    .st-header {
        text-align: center;
        margin-bottom: 28px;
    }
    .st-header h1 {
        font-size: 1.6rem;
        color: #1b5e20;
        margin: 0 0 4px;
    }
    .st-header p {
        color: #666;
        font-size: .9rem;
        margin: 0;
    }

    /* ── Seletor de aula ── */
    .st-select-wrap {
        display: flex;
        gap: 10px;
        margin-bottom: 24px;
        align-items: center;
    }
    .st-select-wrap label {
        font-weight: 700;
        font-size: .85rem;
        color: #444;
        white-space: nowrap;
    }
    .st-select {
        flex: 1;
        padding: 9px 12px;
        border: 1.5px solid #ddd;
        border-radius: 10px;
        font-size: .9rem;
        font-family: inherit;
    }
    .st-select:focus { outline: none; border-color: #2e7d32; }

    /* ── Cards de resumo ── */
    .st-resumo {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 24px;
    }
    .st-card-num {
        background: #fff;
        border-radius: 14px;
        padding: 18px 12px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
    }
    .st-card-num .num {
        font-size: 2rem;
        font-weight: 900;
        color: #2e7d32;
        line-height: 1;
    }
    .st-card-num .leg {
        font-size: .75rem;
        color: #888;
        margin-top: 4px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    /* ── Barra de média ── */
    .st-media-bar-wrap {
        background: #fff;
        border-radius: 14px;
        padding: 20px 20px 16px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        margin-bottom: 24px;
    }
    .st-media-bar-wrap .label {
        font-size: .8rem;
        font-weight: 700;
        color: #555;
        text-transform: uppercase;
        letter-spacing: .5px;
        margin-bottom: 8px;
    }
    .st-bar-track {
        background: #e8f5e9;
        border-radius: 99px;
        height: 18px;
        overflow: hidden;
        position: relative;
    }
    .st-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #43a047, #1b5e20);
        border-radius: 99px;
        transition: width .6s ease;
    }
    .st-bar-pct {
        font-size: .95rem;
        font-weight: 900;
        color: #2e7d32;
        margin-top: 6px;
        text-align: right;
    }

    /* ── Histograma ── */
    .st-hist-card {
        background: #fff;
        border-radius: 14px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
    }
    .st-hist-card h3 {
        font-size: .85rem;
        font-weight: 700;
        color: #555;
        text-transform: uppercase;
        letter-spacing: .5px;
        margin: 0 0 16px;
    }
    .st-hist-row {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
    }
    .st-hist-label {
        font-size: .8rem;
        color: #555;
        width: 60px;
        flex-shrink: 0;
        text-align: right;
        font-weight: 600;
    }
    .st-hist-bar-track {
        flex: 1;
        background: #f1f8e9;
        border-radius: 6px;
        height: 22px;
        overflow: hidden;
    }
    .st-hist-bar {
        height: 100%;
        border-radius: 6px;
        transition: width .5s ease;
        display: flex;
        align-items: center;
        padding-left: 6px;
        font-size: .72rem;
        font-weight: 700;
        color: #fff;
        min-width: 2px;
        box-sizing: border-box;
    }
    .st-hist-count {
        font-size: .8rem;
        font-weight: 700;
        color: #444;
        width: 28px;
        flex-shrink: 0;
        text-align: left;
    }

    /* Cores por desempenho */
    .bar-ruim   { background: #e53935; }
    .bar-medio  { background: #fb8c00; }
    .bar-bom    { background: #43a047; }
    .bar-otimo  { background: #1b5e20; }

    /* ── Estado de carregamento / vazio ── */
    .st-estado {
        text-align: center;
        padding: 60px 20px;
        color: #aaa;
    }
    .st-estado i { font-size: 2.5rem; display: block; margin-bottom: 12px; }

    /* ── Formulário de busca por código ── */
    .st-busca {
        background: #fff;
        border-radius: 16px;
        padding: 28px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        max-width: 400px;
        margin: 0 auto 28px;
    }
    .st-busca h2 {
        font-size: 1.2rem;
        color: #1b5e20;
        margin: 0 0 6px;
    }
    .st-busca p {
        font-size: .85rem;
        color: #666;
        margin: 0 0 18px;
    }
    .st-input {
        width: 100%;
        padding: 10px 12px;
        border: 1.5px solid #ddd;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-family: monospace;
        box-sizing: border-box;
        margin-bottom: 12px;
    }
    .st-input:focus { outline: none; border-color: #2e7d32; }
    .st-btn {
        width: 100%;
        padding: 11px;
        background: linear-gradient(135deg, #2e7d32, #43a047);
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: .95rem;
        font-weight: 700;
        cursor: pointer;
    }
    .st-btn:hover { opacity: .9; }
    .st-erro-busca {
        color: #c62828;
        font-size: .82rem;
        margin-top: 8px;
        display: none;
    }
    </style>
</head>

<body class="w3-light-grey">
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="st-main">
    <div class="st-wrap">

        <div class="st-header">
            <h1><i class="fa-solid fa-chart-bar"></i> Desempenho da Turma</h1>
            <p>Veja como a turma se saiu nas questões — sem identificar alunos</p>
        </div>

        <!-- Se não tem turma_id na URL, pede o código -->
        <div id="st-area-busca">
            <div class="st-busca">
                <h2><i class="fa-solid fa-magnifying-glass"></i> Encontrar turma</h2>
                <p>Digite o código da turma para ver os dados de desempenho.</p>
                <input class="st-input" type="text" id="st-cod-input"
                    placeholder="GEO482" maxlength="6">
                <button class="st-btn" onclick="buscarTurma()">
                    <i class="fa-solid fa-arrow-right"></i> Ver desempenho
                </button>
                <div id="st-erro-busca" class="st-erro-busca"></div>
            </div>
        </div>

        <!-- Painel principal (oculto até ter turma) -->
        <div id="st-painel" style="display:none">

            <div id="st-turma-info" style="text-align:center; margin-bottom:20px;">
                <strong id="st-turma-nome" style="font-size:1.1rem; color:#1b5e20;"></strong>
                <span id="st-turma-cod" style="font-size:.82rem; color:#aaa; margin-left:8px;"></span>
            </div>

            <!-- Seletor de aula -->
            <div class="st-select-wrap">
                <label for="st-sel-aula"><i class="fa-solid fa-book-open"></i> Aula:</label>
                <select class="st-select" id="st-sel-aula" onchange="carregarStats()">
                    <option value="">— selecione uma aula —</option>
                </select>
            </div>

            <!-- Conteúdo dinâmico -->
            <div id="st-conteudo">
                <div class="st-estado">
                    <i class="fa-solid fa-chart-column"></i>
                    Selecione uma aula para ver as estatísticas.
                </div>
            </div>

        </div>

    </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
    // ─────────────────────────────────────────────────────────────
    //  Estado global
    // ─────────────────────────────────────────────────────────────
    let turmaId   = null;
    let turmaCod  = '';
    let turmaNome = '';

    // ─────────────────────────────────────────────────────────────
    //  Inicialização: verifica se URL já tem ?turma=CODIGO
    // ─────────────────────────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(location.search);
        const cod    = (params.get('turma') || '').toUpperCase().trim();
        if (cod) {
            document.getElementById('st-cod-input').value = cod;
            buscarTurma();
        }

        document.getElementById('st-cod-input')
            .addEventListener('keydown', e => { if (e.key === 'Enter') buscarTurma(); });
    });

    // ─────────────────────────────────────────────────────────────
    //  Busca turma pelo código
    // ─────────────────────────────────────────────────────────────
    async function buscarTurma() {
        const cod  = document.getElementById('st-cod-input').value.toUpperCase().trim();
        const erro = document.getElementById('st-erro-busca');
        erro.style.display = 'none';

        if (cod.length < 4) {
            erro.textContent   = 'Digite o código da turma.';
            erro.style.display = 'block';
            return;
        }

        try {
            const r = await fetch(`/api/turma.php?codigo=${cod}`);
            const d = await r.json();

            if (!d.encontrada) {
                erro.textContent   = 'Código não encontrado. Verifique e tente novamente.';
                erro.style.display = 'block';
                return;
            }

            turmaId   = d.id;
            turmaCod  = d.codigo;
            turmaNome = d.nome;

            document.getElementById('st-turma-nome').textContent = d.nome;
            document.getElementById('st-turma-cod').textContent  = '(' + d.codigo + ')';
            document.getElementById('st-area-busca').style.display = 'none';
            document.getElementById('st-painel').style.display    = 'block';

            // Atualiza URL sem recarregar (para o professor poder copiar o link)
            history.replaceState(null, '', '?turma=' + cod);

            await carregarListaAulas();

        } catch(e) {
            erro.textContent   = 'Falha na conexão.';
            erro.style.display = 'block';
        }
    }

    // ─────────────────────────────────────────────────────────────
    //  Carrega quais aulas a turma já respondeu
    // ─────────────────────────────────────────────────────────────
    async function carregarListaAulas() {
        const sel = document.getElementById('st-sel-aula');
        sel.innerHTML = '<option value="">Carregando…</option>';

        const r = await fetch(`/api/stats-turma.php?turma_id=${turmaId}`);
        const d = await r.json();

        sel.innerHTML = '<option value="">— selecione uma aula —</option>';

        if (!d.aulas || d.aulas.length === 0) {
            sel.innerHTML = '<option value="">Nenhuma aula respondida ainda</option>';
            return;
        }

        // Por que mostramos "Aula X (N alunos)"?
        // O professor precisa saber se vale a pena ver o dado
        // ou se poucos alunos responderam ainda.
        d.aulas.forEach(a => {
            const opt = document.createElement('option');
            opt.value       = a.aula_id;
            opt.textContent = `Aula ${a.aula_id}  ·  ${a.total_alunos} aluno${a.total_alunos > 1 ? 's' : ''}`;
            sel.appendChild(opt);
        });
    }

    // ─────────────────────────────────────────────────────────────
    //  Carrega stats da aula selecionada
    // ─────────────────────────────────────────────────────────────
    async function carregarStats() {
        const aulaId = document.getElementById('st-sel-aula').value;
        const div    = document.getElementById('st-conteudo');

        if (!aulaId) {
            div.innerHTML = `<div class="st-estado">
                <i class="fa-solid fa-chart-column"></i>
                Selecione uma aula para ver as estatísticas.
            </div>`;
            return;
        }

        div.innerHTML = `<div class="st-estado">
            <i class="fa-solid fa-spinner fa-spin"></i> Carregando…
        </div>`;

        try {
            const r = await fetch(`/api/stats-turma.php?turma_id=${turmaId}&aula_id=${aulaId}`);
            const d = await r.json();
            renderStats(d);
        } catch(e) {
            div.innerHTML = `<div class="st-estado">
                <i class="fa-solid fa-triangle-exclamation"></i> Erro ao carregar dados.
            </div>`;
        }
    }

    // ─────────────────────────────────────────────────────────────
    //  Renderiza os dados na tela
    // ─────────────────────────────────────────────────────────────
    function renderStats(d) {
        const div = document.getElementById('st-conteudo');

        if (!d.total_alunos) {
            div.innerHTML = `<div class="st-estado">
                <i class="fa-solid fa-inbox"></i>
                Nenhum aluno respondeu esta aula ainda.
            </div>`;
            return;
        }

        // Barra de média: cor muda conforme desempenho
        const pct  = d.media_pct;
        const cor  = pct >= 80 ? '#1b5e20'
                   : pct >= 60 ? '#43a047'
                   : pct >= 40 ? '#fb8c00'
                   : '#e53935';

        // Histograma: cada barra representa quantos alunos
        // tiraram X acertos
        const maxAlunos = Math.max(...d.distribuicao.map(r => r.qtd_alunos), 1);

        let histHTML = '';
        d.distribuicao.forEach(row => {
            const acertos   = row.acertos;
            const qtd       = row.qtd_alunos;
            const largura   = Math.round(qtd / maxAlunos * 100);

            // Cor por desempenho relativo
            const razao   = d.total_questoes > 0 ? acertos / d.total_questoes : 0;
            const barCls  = razao >= 0.8 ? 'bar-otimo'
                          : razao >= 0.6 ? 'bar-bom'
                          : razao >= 0.4 ? 'bar-medio'
                          : 'bar-ruim';

            const label = acertos === d.total_questoes
                ? `${acertos} ✓` // gabarito perfeito
                : `${acertos}`;

            histHTML += `
            <div class="st-hist-row">
                <div class="st-hist-label">${label} acerto${acertos !== 1 ? 's' : ''}</div>
                <div class="st-hist-bar-track">
                    <div class="st-hist-bar ${barCls}" style="width:${largura}%">
                        ${qtd > 0 && largura > 20 ? qtd + ' aluno' + (qtd > 1 ? 's' : '') : ''}
                    </div>
                </div>
                <div class="st-hist-count">${qtd > 0 ? qtd : '–'}</div>
            </div>`;
        });

        div.innerHTML = `
        <!-- Cards de resumo -->
        <div class="st-resumo">
            <div class="st-card-num">
                <div class="num">${d.total_alunos}</div>
                <div class="leg">alunos</div>
            </div>
            <div class="st-card-num">
                <div class="num">${d.media_acertos}</div>
                <div class="leg">média de acertos</div>
            </div>
            <div class="st-card-num">
                <div class="num" style="color:${cor}">${pct}%</div>
                <div class="leg">de aproveitamento</div>
            </div>
        </div>

        <!-- Barra de média -->
        <div class="st-media-bar-wrap">
            <div class="label"><i class="fa-solid fa-bullseye"></i> Aproveitamento médio da turma</div>
            <div class="st-bar-track">
                <div class="st-bar-fill" style="width:${pct}%; background: linear-gradient(90deg, ${cor}, ${cor}cc)"></div>
            </div>
            <div class="st-bar-pct">${pct}%</div>
        </div>

        <!-- Histograma -->
        <div class="st-hist-card">
            <h3><i class="fa-solid fa-bars"></i> Distribuição de acertos</h3>
            ${histHTML}
        </div>`;
    }
    </script>
</body>
</html>
