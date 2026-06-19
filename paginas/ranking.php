<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Ranking - Duvid</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
    /* ======================================================
       RANKING PAGE — RPG STYLE
       ====================================================== */
    html, body { height: 100%; }
    body { display: flex; flex-direction: column; min-height: 100vh; margin: 0; }
    .rk-main { flex: 1 0 auto; }

    /* ── Wrapper principal ── */
    .rk-wrap {
        max-width: 680px;
        margin: 88px auto 80px;
        padding: 0 12px;
    }

    /* ── Cabeçalho da página ── */
    .rk-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .rk-header h2 {
        margin: 0 0 4px;
        font-size: 1.7rem;
        letter-spacing: .5px;
    }
    .rk-header p {
        margin: 0;
        color: #666;
        font-size: .88rem;
    }

    /* ── Abas ── */
    .rk-tabs {
        display: flex;
        border-bottom: 2px solid #ddd;
        margin-bottom: 18px;
        gap: 4px;
    }
    .rk-tab {
        flex: 1;
        padding: 9px 6px;
        text-align: center;
        cursor: pointer;
        font-size: .85rem;
        font-weight: 600;
        color: #777;
        border-radius: 8px 8px 0 0;
        transition: background .15s, color .15s;
        user-select: none;
    }
    .rk-tab:hover { background: #f0f0f0; color: #333; }
    .rk-tab.ativo {
        color: #2e7d32;
        border-bottom: 3px solid #2e7d32;
        margin-bottom: -2px;
        background: #f4fbf4;
    }
    .rk-tab i { margin-right: 5px; }

    /* ── Linha de cada jogador ── */
    .rk-linha {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 11px 14px;
        border-radius: 12px;
        margin-bottom: 8px;
        background: #fff;
        border: 1px solid rgba(0,0,0,0.08);
        box-shadow: 0 1px 4px rgba(0,0,0,0.04);
        transition: transform .1s;
    }
    .rk-linha:hover { transform: translateY(-1px); }
    .rk-linha.eu {
        background: #eaf5ea;
        border-color: #2e7d32;
        box-shadow: 0 2px 8px rgba(46,125,50,.12);
    }

    /* Posição */
    .rk-pos {
        font-weight: 800;
        width: 38px;
        text-align: center;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    /* Avatar / ícone de patente */
    .rk-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        flex-shrink: 0;
        font-weight: 700;
        color: #fff;
    }

    /* Bloco central com nome + stats */
    .rk-info { flex: 1; min-width: 0; }
    .rk-nome {
        font-weight: 700;
        font-size: .93rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .rk-sub {
        font-size: .72rem;
        color: #777;
        margin-top: 1px;
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
    }
    .rk-sub span { display: inline-flex; align-items: center; gap: 3px; }

    /* Globinhos (coluna direita) */
    .rk-glob {
        font-weight: 800;
        color: #b8860b;
        white-space: nowrap;
        font-size: .92rem;
        text-align: right;
        flex-shrink: 0;
    }
    .rk-glob small { display: block; font-size: .65rem; color: #aaa; font-weight: 400; }

    /* Barra de acerto */
    .rk-barra-wrap {
        height: 5px;
        background: #eee;
        border-radius: 3px;
        margin-top: 4px;
        overflow: hidden;
    }
    .rk-barra-fill {
        height: 100%;
        border-radius: 3px;
        background: linear-gradient(90deg, #43a047, #66bb6a);
        transition: width .6s ease;
    }

    /* Estado vazio / erro */
    .rk-vazio {
        text-align: center;
        color: #777;
        padding: 40px 10px;
        font-size: .9rem;
    }

    /* Tag "você" */
    .tag-eu {
        background: #2e7d32;
        color: #fff;
        border-radius: 20px;
        padding: 1px 6px;
        font-size: .6rem;
        font-weight: 700;
        vertical-align: middle;
        margin-left: 4px;
    }

    /* Cores por patente */
    .pat-novato      { background: #78909c; }
    .pat-explorador  { background: #8d6e63; }
    .pat-pesquisador { background: #42a5f5; }
    .pat-especialista{ background: #ab47bc; }
    .pat-mestre      { background: #ef6c00; }
    .pat-lenda       { background: #f9a825; }

    /* Sumário do aluno logado (topo) */
    .rk-minha-pos {
        background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
        color: #fff;
        border-radius: 14px;
        padding: 14px 18px;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .rk-minha-pos .rk-pos-num {
        font-size: 2.2rem;
        font-weight: 900;
        line-height: 1;
    }
    .rk-minha-pos .rk-pos-label {
        font-size: .75rem;
        opacity: .8;
    }
    .rk-minha-pos .rk-pos-info { flex: 1; }
    .rk-minha-pos .rk-pos-nome { font-weight: 700; font-size: .95rem; }
    .rk-minha-pos .rk-pos-sub { font-size: .75rem; opacity: .85; margin-top: 2px; }
    </style>
</head>

<body class="w3-light-grey">

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="rk-main">
    <div class="rk-wrap">

        <!-- Cabeçalho -->
        <div class="rk-header">
            <h2 class="w3-text-green"><i class="fa-solid fa-trophy"></i> Ranking</h2>
            <p id="rk-subtitulo">Carregando…</p>
        </div>

        <!-- Card do aluno logado (aparece quando há dados) -->
        <div id="rk-minha-pos" style="display:none"></div>

        <!-- Abas -->
        <div class="rk-tabs">
            <div class="rk-tab ativo" id="tab-turma" onclick="trocarAba('turma')">
                <i class="fa-solid fa-users"></i> Minha Turma
            </div>
            <div class="rk-tab" id="tab-geral" onclick="trocarAba('geral')">
                <i class="fa-solid fa-earth-americas"></i> Geral
            </div>
        </div>

        <!-- Lista do ranking -->
        <div id="ranking-container" class="rk-vazio">
            <i class="fa-solid fa-spinner fa-spin"></i> Carregando ranking…
        </div>

    </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
    (function () {
        const ALUNO_ID = parseInt(localStorage.getItem('duvid_aluno_id'));
        const cont     = document.getElementById('ranking-container');
        const cardPos  = document.getElementById('rk-minha-pos');
        const subtitulo = document.getElementById('rk-subtitulo');

        let dadosTurma  = null;
        let dadosGeral  = null;
        let abaAtual    = 'turma';
        let infoAluno   = null;

        // ── Helpers ──────────────────────────────────────────────
        function abreviar(nome) {
            const p = (nome || '').trim().split(/\s+/).filter(Boolean);
            if (p.length === 0) return 'Aluno';
            if (p.length === 1) return p[0];
            return p[0] + ' ' + p[p.length - 1][0].toUpperCase() + '.';
        }
        function medalha(pos) {
            return pos === 1 ? '1🥇' : pos === 2 ? '2🥈' : pos === 3 ? '3🥉' : '#' + pos;
        }
        function aviso(msg, comBotao) {
            cont.className = 'rk-vazio';
            cont.innerHTML = msg + (comBotao
                ? '<br><br><a href="/home.php" class="w3-button w3-green w3-round-large">Ir para o início</a>'
                : '');
        }

        // Classe CSS da patente para colorir o avatar
        const COR_PATENTE = {
            'NOVATO':       'pat-novato',
            'EXPLORADOR':   'pat-explorador',
            'PESQUISADOR':  'pat-pesquisador',
            'ESPECIALISTA': 'pat-especialista',
            'MESTRE':       'pat-mestre',
            'LENDA DA TERRA':'pat-lenda',
        };
        function classePatente(p) {
            return COR_PATENTE[(p || '').toUpperCase()] || 'pat-novato';
        }
        // Inicial do nome para avatar
        function inicial(nome) {
            return (nome || '?').trim()[0].toUpperCase();
        }

        // ── Renderiza a lista ─────────────────────────────────────
        function renderizar(lista, contexto) {
            if (!lista || lista.length === 0) {
                aviso('Ainda não há pontuação ' + (contexto === 'turma' ? 'nesta turma' : 'no ranking geral') + '.', false);
                return;
            }

            const eu = lista.find(r => r.id === ALUNO_ID);

            // Card "minha posição" no topo
            if (eu) {
                const pct = eu.media_acertos_pct !== null ? eu.media_acertos_pct : null;
                cardPos.style.display = 'flex';
                cardPos.className = 'rk-minha-pos';
                cardPos.innerHTML =
                    '<div style="text-align:center">' +
                        '<div class="rk-pos-num">' + medalha(eu.posicao) + '</div>' +
                        '<div class="rk-pos-label">sua posição</div>' +
                    '</div>' +
                    '<div class="rk-pos-info">' +
                        '<div class="rk-pos-nome">' + abreviar(eu.nome) + '</div>' +
                        '<div class="rk-pos-sub">' +
                            Number(eu.globinhos_total).toLocaleString('pt-BR') + ' globinhos · ' +
                            eu.aulas_100 + ' aulas 100% · ' +
                            (pct !== null ? pct + '% de acerto' : 'sem questões ainda') +
                            (eu.conquistas > 0 ? ' · ' + eu.conquistas + ' <i class="fa-solid fa-medal" style="color:#ffd700"></i>' : '') +
                        '</div>' +
                    '</div>';
            } else {
                cardPos.style.display = 'none';
            }

            // Lista completa
            let html = '';
            lista.forEach(function (r) {
                const ehEu  = r.id === ALUNO_ID;
                const pat   = classePatente(r.patente);
                const pct   = r.media_acertos_pct !== null ? r.media_acertos_pct : null;
                const largB = pct !== null ? pct : 0;

                html +=
                    '<div class="rk-linha' + (ehEu ? ' eu' : '') + '">' +
                        '<div class="rk-pos">' + medalha(r.posicao) + '</div>' +
                        '<div class="rk-avatar ' + pat + '">' + inicial(r.nome) + '</div>' +
                        '<div class="rk-info">' +
                            '<div class="rk-nome">' +
                                abreviar(r.nome) +
                                (ehEu ? '<span class="tag-eu">você</span>' : '') +
                            '</div>' +
                            '<div class="rk-sub">' +
                                '<span title="Patente"><i class="fa-solid fa-shield-halved"></i> ' + (r.patente || 'Novato') + '</span>' +
                                '<span title="Aulas 100%"><i class="fa-solid fa-book-open-reader"></i> ' + r.aulas_100 + '</span>' +
                                (r.conquistas > 0
                                    ? '<span title="Conquistas"><i class="fa-solid fa-medal" style="color:#f9a825"></i> ' + r.conquistas + '</span>'
                                    : '') +
                                (pct !== null
                                    ? '<span title="% de acerto nas questões"><i class="fa-solid fa-bullseye"></i> ' + pct + '%</span>'
                                    : '') +
                                (r.escola
                                    ? '<span title="Escola" style="color:#5c6bc0"><i class="fa-solid fa-school"></i> ' + r.escola + '</span>'
                                    : '') +
                                (r.estado
                                    ? '<span title="Estado" style="color:#00897b"><i class="fa-solid fa-location-dot"></i> ' + r.estado + (r.cidade ? ' · ' + r.cidade : '') + '</span>'
                                    : '') +
                            '</div>' +
                            (pct !== null
                                ? '<div class="rk-barra-wrap"><div class="rk-barra-fill" style="width:' + largB + '%"></div></div>'
                                : '') +
                        '</div>' +
                        '<div class="rk-glob">' +
                            Number(r.globinhos_total).toLocaleString('pt-BR') +
                            '<small>globinhos</small>' +
                        '</div>' +
                    '</div>';
            });

            cont.className = '';
            cont.innerHTML = html;
        }

        // ── Troca de aba ─────────────────────────────────────────
        window.trocarAba = function(aba) {
            abaAtual = aba;
            document.querySelectorAll('.rk-tab').forEach(t => t.classList.remove('ativo'));
            document.getElementById('tab-' + aba).classList.add('ativo');
            if (aba === 'turma') {
                if (dadosTurma) {
                    subtitulo.textContent = 'Turma ' + ((infoAluno && infoAluno.turma_nome) || '');
                    renderizar(dadosTurma, 'turma');
                }
            } else {
                if (dadosGeral) {
                    subtitulo.textContent = 'Top 50 geral';
                    renderizar(dadosGeral, 'geral');
                } else {
                    cont.className = 'rk-vazio';
                    cont.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Carregando…';
                    carregarGeral();
                }
            }
        };

        // ── Carrega ranking geral ────────────────────────────────
        async function carregarGeral() {
            try {
                const dados = await fetch('/api/ranking.php?top=50').then(r => r.json());
                dadosGeral  = (dados && dados.ranking) ? dados.ranking : [];
                subtitulo.textContent = 'Top 50 geral';
                renderizar(dadosGeral, 'geral');
            } catch(e) {
                aviso('Não foi possível carregar o ranking geral. Tente mais tarde.', false);
            }
        }

        // ── Carrega ranking da turma (inicial) ───────────────────
        async function carregar() {
            if (!ALUNO_ID) {
                subtitulo.textContent = '';
                aviso('Entre com sua conta para ver o ranking da sua turma.', true);
                return;
            }

            try {
                const aluno = await fetch('/api/aluno.php?id=' + ALUNO_ID).then(r => r.json());
                if (!aluno || !aluno.encontrado) {
                    aviso('Não encontramos sua conta. Entre novamente.', true);
                    return;
                }
                infoAluno = aluno;
                const codigo = aluno.turma_codigo;

                if (!codigo) {
                    // Sem turma: mostra ranking geral diretamente
                    subtitulo.textContent = 'Você não está em uma turma — exibindo ranking geral';
                    document.getElementById('tab-turma').style.display = 'none';
                    trocarAba('geral');
                    await carregarGeral();
                    return;
                }

                const dados   = await fetch('/api/ranking.php?turma=' + encodeURIComponent(codigo)).then(r => r.json());
                dadosTurma    = (dados && dados.ranking) ? dados.ranking : [];
                const turmaNome = aluno.turma_nome || codigo;
                subtitulo.textContent = 'Turma ' + turmaNome;
                renderizar(dadosTurma, 'turma');

            } catch(e) {
                console.warn('[Ranking] Falha:', e);
                aviso('Não foi possível carregar o ranking agora. Tente mais tarde.', false);
            }
        }

        document.addEventListener('DOMContentLoaded', carregar);
    })();
    </script>

</body>

</html>
