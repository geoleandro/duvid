<?php require_once __DIR__ . '/../includes/auth_aluno.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Ranking - Duvid</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/ranking-estilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

</head>

<body class="w3-light-grey">

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="texto-layout">

        <!-- Hero -->
        <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo.webp');">
            <div class="texto-hero-overlay">
                <div class="texto-hero-badges">
                    <span class="texto-badge texto-badge-green">🏆 Ranking</span>
                </div>
                <h1 class="texto-hero-title">Ranking Duvid</h1>
            </div>
        </div>

        <div class="rk-wrap">

            <!-- Card de impacto (posição do aluno) -->
            <div id="rk-impact" style="display:none"></div>

            <!-- Subtítulo dinâmico -->
            <p id="rk-subtitulo"></p>

            <!-- Abas pill -->
            <div class="rk-tabs">
                <div class="rk-tab ativo" id="tab-turma" onclick="trocarAba('turma')">
                    <i class="fa-solid fa-users"></i> Minha Turma
                </div>
                <div class="rk-tab" id="tab-geral" onclick="trocarAba('geral')">
                    <i class="fa-solid fa-earth-americas"></i> Geral
                </div>
                <div class="rk-tab" id="tab-escolas" onclick="trocarAba('escolas')">
                    <i class="fa-solid fa-school"></i> Por Escola
                </div>
            </div>

            <!-- Lista -->
            <div id="ranking-container" class="rk-vazio">
                <i class="fa-solid fa-spinner fa-spin"></i> Carregando ranking…
            </div>

        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
    (function () {
        const ALUNO_ID  = parseInt(localStorage.getItem('duvid_aluno_id'));
        const cont      = document.getElementById('ranking-container');
        const impactDiv = document.getElementById('rk-impact');
        const subtitulo = document.getElementById('rk-subtitulo');

        let dadosTurma   = null;
        let dadosGeral   = null;
        let dadosEscolas = null;
        let abaAtual     = 'turma';
        let infoAluno    = null;

        // ── Helpers ──────────────────────────────────────────────
        function abreviar(nome) {
            const p = (nome || '').trim().split(/\s+/).filter(Boolean);
            if (p.length === 0) return 'Aluno';
            if (p.length === 1) return p[0];
            return p[0] + ' ' + p[p.length - 1][0].toUpperCase() + '.';
        }

        function emojiMedalha(pos) {
            if (pos === 1) return '<span class="medal">🥇</span>';
            if (pos === 2) return '<span class="medal">🥈</span>';
            if (pos === 3) return '<span class="medal">🥉</span>';
            return '<span class="num-bold">#' + pos + '</span>';
        }

        function aviso(msg, comBotao) {
            cont.className = 'rk-vazio';
            cont.innerHTML = msg + (comBotao
                ? '<br><br><a href="/home.php" class="w3-button w3-green w3-round-large">Ir para o início</a>'
                : '');
        }

        const PAT_BADGE = {
            'NOVATO':        'pb-novato',
            'EXPLORADOR':    'pb-explorador',
            'PESQUISADOR':   'pb-pesquisador',
            'ESPECIALISTA':  'pb-especialista',
            'MESTRE':        'pb-mestre',
            'LENDA DA TERRA':'pb-lenda',
        };
        const PAT_BG = {
            'NOVATO':        'pat-novato',
            'EXPLORADOR':    'pat-explorador',
            'PESQUISADOR':   'pat-pesquisador',
            'ESPECIALISTA':  'pat-especialista',
            'MESTRE':        'pat-mestre',
            'LENDA DA TERRA':'pat-lenda',
        };
        function patBadge(p) { return PAT_BADGE[(p||'').toUpperCase()]||'pb-novato'; }
        function patBg(p)    { return PAT_BG[(p||'').toUpperCase()]||'pat-novato'; }
        function inicial(n)  { return (n||'?').trim()[0].toUpperCase(); }

        function mensagemPos(pos, nome) {
            if (pos === 1) return { titulo:'Você lidera o ranking! 🏆', desc:'Incrível, '+nome+'! Você está no topo. Continue se dedicando para manter sua posição.' };
            if (pos <= 3)  return { titulo:'No pódio! 🥈', desc:nome+', você está entre os 3 melhores. Performance incrível! Mantenha o ritmo.' };
            if (pos <= 5)  return { titulo:'Quase no pódio!', desc:nome+', você está no Top 5! Mais um esforço e você chega às primeiras posições.' };
            if (pos <= 10) return { titulo:'Continue assim!', desc:'Sua jornada está ajudando a elevar a pontuação média da turma. Falta pouco para o top 5, não desista da sua missão!' };
            return { titulo:'Em busca do topo!', desc:nome+', cada aula concluída te aproxima dos primeiros lugares. Continue explorando Duvid!' };
        }

        // ── Impacto card (topo) ──────────────────────────────────
        function renderImpact(eu) {
            if (!eu) { impactDiv.style.display = 'none'; return; }
            const msg   = mensagemPos(eu.posicao, abreviar(eu.nome));
            const xpFmt = Number(eu.globinhos_total).toLocaleString('pt-BR');
            const seed  = (infoAluno && infoAluno.nome) ? encodeURIComponent(infoAluno.nome) : 'Duvid';
            const pct   = eu.media_acertos_pct !== null ? eu.media_acertos_pct + '% acerto' : '';
            impactDiv.style.display = 'flex';
            impactDiv.className = 'rk-impact-card';
            impactDiv.innerHTML =
                '<div class="rk-impact-body">' +
                    '<div class="rk-badge-pos">⭐ Posição Atual: #' + eu.posicao + '</div>' +
                    '<h2 class="rk-impact-title">' + msg.titulo + '</h2>' +
                    '<p class="rk-impact-desc">' + msg.desc + '</p>' +
                '</div>' +
                '<div class="rk-impact-side">' +
                    '<img class="rk-impact-avatar" ' +
                         'src="https://api.dicebear.com/8.x/pixel-art/svg?seed=' + seed + '&backgroundColor=e8f5e9&radius=50" ' +
                         'alt="Avatar">' +
                    '<div class="xp-total-pill">🌍 ' + xpFmt + ' XP Totais</div>' +
                    (pct ? '<br><small style="color:#aaa;font-size:.68rem;">' + eu.aulas_100 + ' aulas 100% · ' + pct + '</small>' : '') +
                '</div>';
        }

        // ── Renderiza lista ─────────────────────────────────────
        function renderizar(lista, contexto) {
            if (!lista || lista.length === 0) {
                aviso('Ainda não há pontuação ' + (contexto === 'turma' ? 'nesta turma' : 'no ranking geral') + '.', false);
                return;
            }
            const eu = lista.find(r => r.id === ALUNO_ID);
            renderImpact(eu || null);

            let html = '';
            lista.forEach(function (r, idx) {
                const ehEu  = r.id === ALUNO_ID;
                const pos   = r.posicao;
                const pct   = r.media_acertos_pct !== null ? r.media_acertos_pct : null;
                const local = [r.estado, r.cidade].filter(Boolean).join(', ');

                // Separador top3 → resto
                if (idx === 3) html += '<div class="rk-sep">· · ·</div>';

                const posClass = pos <= 3 ? ' pos-' + pos : '';
                const euClass  = ehEu ? ' eu' : '';

                html +=
                '<div class="rk-linha' + posClass + euClass + '">' +
                    '<div class="rk-pos">' + emojiMedalha(pos) + '</div>' +
                    '<div class="rk-avatar ' + (ehEu ? patBg(r.patente) : patBg(r.patente)) + '">' + inicial(r.nome) + '</div>' +
                    '<div class="rk-info">' +
                        '<div class="rk-nome-row">' +
                            '<span class="rk-nome">' + abreviar(r.nome) + '</span>' +
                            '<span class="rk-pat-badge ' + patBadge(r.patente) + '">' + (r.patente || 'Novato') + '</span>' +
                            (ehEu ? '<span class="rk-tag-eu">você</span>' : '') +
                        '</div>' +
                        (local ? '<div class="rk-local"><i class="fa-solid fa-location-dot" style="font-size:.6rem"></i>' + local + '</div>' : '') +
                        (pct !== null ? '<div class="rk-barra-wrap"><div class="rk-barra-fill" style="width:' + pct + '%"></div></div>' : '') +
                    '</div>' +
                    '<div class="xp-pill">🌍 ' + Number(r.globinhos_total).toLocaleString('pt-BR') + ' XP</div>' +
                '</div>';
            });

            cont.className = '';
            cont.innerHTML = html;
        }

        // ── Impact card para escola ──────────────────────────────
        function renderImpactEscola(escola) {
            if (!escola) { impactDiv.style.display = 'none'; return; }
            const pos    = escola.posicao;
            const nome   = escola.escola || 'Sua escola';
            const xpFmt  = Number(escola.glob_media).toLocaleString('pt-BR');
            const alunos = escola.total_alunos;
            let titulo, desc;
            if (pos === 1) { titulo = '🏆 Escola líder!'; desc = nome + ' está no topo do ranking! Seus alunos estão estudando muito.'; }
            else if (pos <= 3) { titulo = 'No pódio! 🥈'; desc = nome + ' está entre as 3 melhores escolas. Uma performance incrível da turma!'; }
            else if (pos <= 5) { titulo = 'Quase no pódio!'; desc = nome + ' está no Top 5. Mais um esforço coletivo e vocês chegam lá!'; }
            else { titulo = 'Continue crescendo!'; desc = 'Cada aluno de ' + nome + ' que conclui aulas ajuda a subir no ranking. Motivem-se!'; }
            impactDiv.style.display = 'flex';
            impactDiv.className = 'rk-impact-card';
            impactDiv.innerHTML =
                '<div class="rk-impact-body">' +
                    '<div class="rk-badge-pos">🏫 Sua escola · #' + pos + '</div>' +
                    '<h2 class="rk-impact-title">' + titulo + '</h2>' +
                    '<p class="rk-impact-desc">' + desc + '</p>' +
                '</div>' +
                '<div class="rk-impact-side">' +
                    '<div style="width:76px;height:76px;border-radius:16px;background:linear-gradient(135deg,#5c6bc0,#3949ab);display:flex;align-items:center;justify-content:center;font-size:2rem;margin:0 auto 10px;">🏫</div>' +
                    '<div class="xp-total-pill">🌍 ' + xpFmt + ' XP médio</div>' +
                    '<br><small style="color:#aaa;font-size:.68rem;">' + alunos + ' aluno' + (alunos !== 1 ? 's' : '') + ' cadastrados</small>' +
                '</div>';
        }

        // ── Renderiza escolas ────────────────────────────────────
        function renderizarEscolas(lista) {
            if (!lista || lista.length === 0) {
                aviso('Ainda não há escolas cadastradas no ranking.', false);
                return;
            }
            const minhaEscola = (infoAluno && infoAluno.escola) ? infoAluno.escola.trim().toLowerCase() : null;
            const minhaEscolaObj = minhaEscola ? lista.find(e => e.escola && e.escola.trim().toLowerCase() === minhaEscola) : null;
            renderImpactEscola(minhaEscolaObj);

            let html = '';
            lista.forEach(function(e, idx) {
                const ehMinha   = minhaEscola && e.escola && e.escola.trim().toLowerCase() === minhaEscola;
                const pos       = e.posicao;
                const posClass  = pos <= 3 ? ' pos-' + pos : '';
                const local     = [e.estado, e.cidade].filter(Boolean).join(', ');

                html +=
                '<div class="rk-escola' + posClass + (ehMinha ? ' minha-escola' : '') + '">' +
                    '<div class="rk-pos">' + emojiMedalha(pos) + '</div>' +
                    '<div class="rk-escola-avatar"><i class="fa-solid fa-school"></i></div>' +
                    '<div class="rk-escola-info">' +
                        '<div class="rk-escola-nome">' +
                            (e.escola || 'Escola desconhecida') +
                            (ehMinha ? '<span class="tag-escola">sua escola</span>' : '') +
                        '</div>' +
                        '<div class="rk-escola-sub">' +
                            '<span><i class="fa-solid fa-users"></i> ' + e.total_alunos + ' aluno' + (e.total_alunos !== 1 ? 's' : '') + '</span>' +
                            (e.acerto_media !== null ? '<span><i class="fa-solid fa-bullseye"></i> ' + e.acerto_media + '%</span>' : '') +
                            (e.aulas_100_total > 0 ? '<span><i class="fa-solid fa-book-open-reader"></i> ' + e.aulas_100_total + ' aulas</span>' : '') +
                            (local ? '<span><i class="fa-solid fa-location-dot"></i> ' + local + '</span>' : '') +
                        '</div>' +
                        '<div class="rk-barra-wrap"><div class="rk-barra-fill" style="width:' + (e.acerto_media||0) + '%"></div></div>' +
                    '</div>' +
                    '<div class="xp-pill">🌍 ' + Number(e.glob_media).toLocaleString('pt-BR') + ' XP</div>' +
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
                    subtitulo.textContent = dadosTurma.length ? 'Turma ' + ((infoAluno && infoAluno.turma_nome) || '') : '';
                    renderizar(dadosTurma, 'turma');
                }
            } else if (aba === 'geral') {
                if (dadosGeral) {
                    subtitulo.textContent = 'Top 50 · ranking geral';
                    renderizar(dadosGeral, 'geral');
                } else {
                    cont.className = 'rk-vazio';
                    cont.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Carregando…';
                    carregarGeral();
                }
            } else if (aba === 'escolas') {
                subtitulo.textContent = 'Top escolas · média de XP por aluno';
                if (dadosEscolas) {
                    renderizarEscolas(dadosEscolas);
                } else {
                    cont.className = 'rk-vazio';
                    cont.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Carregando…';
                    carregarEscolas();
                }
            }
        };

        async function carregarGeral() {
            try {
                const dados = await fetch('/api/ranking.php?top=50').then(r => r.json());
                dadosGeral  = (dados && dados.ranking) ? dados.ranking : [];
                subtitulo.textContent = 'Top 50 · ranking geral';
                renderizar(dadosGeral, 'geral');
            } catch(e) {
                aviso('Não foi possível carregar o ranking geral. Tente mais tarde.', false);
            }
        }

        async function carregarEscolas() {
            try {
                const dados  = await fetch('/api/ranking.php?escolas=1&top=50').then(r => r.json());
                dadosEscolas = (dados && dados.escolas) ? dados.escolas : [];
                renderizarEscolas(dadosEscolas);
            } catch(e) {
                aviso('Não foi possível carregar o ranking por escola.', false);
            }
        }

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

                // Sem turma ou turma genérica → mostra geral direto
                if (!codigo || codigo === 'LIVRE') {
                    subtitulo.textContent = '';
                    document.getElementById('tab-turma').style.display = 'none';
                    trocarAba('geral');
                    await carregarGeral();
                    return;
                }

                const dados    = await fetch('/api/ranking.php?turma=' + encodeURIComponent(codigo)).then(r => r.json());
                dadosTurma     = (dados && dados.ranking) ? dados.ranking : [];
                const turmaNome = aluno.turma_nome || codigo;
                subtitulo.innerHTML = turmaNome +
                    (codigo && codigo !== 'LIVRE'
                        ? ' <span style="font-size:.9em;font-weight:normal;letter-spacing:.5px">· ' + codigo + '</span>'
                        : '');
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
