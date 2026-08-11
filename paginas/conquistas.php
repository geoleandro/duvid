<?php require_once __DIR__ . '/../includes/auth_aluno.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Conquistas — Duvid</title>

    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
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
        /* ── Corpo do conteúdo ───────────────────────────────── */
        .cq-body-pad {
            max-width: 1376px;
            margin: 0 auto;
            padding: 0 48px 64px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        @media (max-width: 1024px) { .cq-body-pad { padding: 0 24px 48px; } }
        @media (max-width: 640px)  { .cq-body-pad { padding: 0 12px 40px; } }
        body:has(#sidebar-duvid) main.texto-layout {
            margin-left: 200px !important;
        }
        @media (max-width: 800px) {
            body:has(#sidebar-duvid) main.texto-layout { margin-left: 0 !important; }
        }

        /* ── Card "Seu progresso atual" ── */
        .cq-hero {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            box-shadow: 0 4px 16px rgba(0,0,0,.06);
            padding: 28px;
            margin-bottom: 32px;
            display: flex;
            align-items: center;
            gap: 24px;
        }
        .cq-hero-icone {
            width: 108px;
            height: 108px;
            flex-shrink: 0;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,.15));
        }
        .cq-hero-corpo { flex: 1; min-width: 0; }
        .cq-hero-label {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #9e9e9e;
            margin: 0 0 2px;
        }
        .cq-hero-patente {
            font-size: 1.4rem;
            font-weight: 800;
            margin: 0 0 10px;
            line-height: 1.15;
        }
        .cq-hero-bar-wrap {
            height: 10px;
            background: #f0f0f0;
            border-radius: 6px;
            overflow: hidden;
            margin-bottom: 8px;
        }
        .cq-hero-bar {
            height: 100%;
            border-radius: 6px;
            background: linear-gradient(90deg, #4caf50, #2e7d32);
            transition: width .8s ease;
            width: 0%;
        }
        .cq-hero-legenda {
            display: flex;
            justify-content: space-between;
            font-size: .78rem;
            color: #666;
        }
        .cq-hero-legenda b { color: #2e7d32; }

        /* ── Grade dos níveis ── */
        .cq-secao-titulo {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1c1b1b;
            margin: 0 0 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .cq-secao-titulo i { color: #4caf50; }

        .cq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }

        .cq-card {
            position: relative;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,.04);
            padding: 20px;
            display: flex;
            gap: 14px;
            align-items: flex-start;
            transition: transform .15s, box-shadow .15s;
        }

        .cq-card.cq-atual {
            border: 2px solid #4caf50;
            box-shadow: 0 6px 20px rgba(76,175,80,.18);
        }

        .cq-card.cq-bloqueado { opacity: .55; }
        .cq-card.cq-bloqueado .cq-card-icone-wrap {
            background: #eeeeee;
        }
        .cq-card.cq-bloqueado .cq-card-icone { filter: grayscale(1); }

        .cq-card-icone-wrap {
            width: 84px;
            height: 84px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
        }

        .cq-card-icone {
            width: 74px;
            height: 74px;
            flex-shrink: 0;
            object-fit: contain;
        }

        .cq-card-corpo { flex: 1; min-width: 0; }

        .cq-card-topo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 6px;
            margin-bottom: 4px;
        }

        .cq-card-nome {
            font-size: .95rem;
            font-weight: 800;
            line-height: 1.2;
        }

        .cq-card-badge {
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .04em;
            text-transform: uppercase;
            padding: 3px 9px;
            border-radius: 100px;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .cq-badge-atual   { background: #e8f5e9; color: #2e7d32; }
        .cq-badge-feito   { background: #e3f2fd; color: #1565c0; }
        .cq-badge-bloq    { background: #f5f5f5; color: #9e9e9e; }

        .cq-card-faixa {
            font-size: .78rem;
            color: #757575;
            margin: 0 0 6px;
        }

        .cq-card-desc {
            font-size: .8rem;
            color: #555;
            line-height: 1.45;
            margin: 0;
        }

        /* ── Dark mode ── */
        body.dark-mode { background: #121212; }
        body.dark-mode .cq-hero,
        body.dark-mode .cq-card {
            background: #1e1e1e;
            border-color: #333;
        }
        body.dark-mode .cq-hero-patente,
        body.dark-mode .cq-card-nome { color: #f0f0f0; }
        body.dark-mode .cq-secao-titulo { color: #f0f0f0; }
        body.dark-mode .cq-badge-atual { background: #1b3a1f; color: #81c784; }
        body.dark-mode .cq-badge-feito { background: #10243d; color: #64b5f6; }
        body.dark-mode .cq-badge-bloq  { background: #2a2a2a; color: #888; }

        @media (max-width: 600px) {
            .cq-hero { flex-direction: column; text-align: center; padding: 22px; }
            .cq-hero-legenda { justify-content: center; gap: 14px; }
        }
    </style>
</head>

<body>

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="texto-layout">

        <!-- Banner hero ───────────────────────────────────────── -->
        <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-conquistas.webp');">
            <div class="texto-hero-overlay">
                <div class="texto-hero-badges">
                    <span class="texto-badge texto-badge-green">🏆 Conquistas</span>
                    <span class="texto-badge">Progressão RPG</span>
                </div>
                <h1 class="texto-hero-title">Suas Patentes</h1>
                <p style="font-family:'Montserrat',sans-serif; color:rgba(255,255,255,.82); font-size:.97rem; margin:0; max-width:500px;">
                    Cada globinho te aproxima da próxima patente. Veja onde você está e o que ainda está por conquistar.
                </p>
            </div>
        </div>

        <div class="cq-body-pad">

            <!-- Card do progresso atual (preenchido via JS) -->
            <div class="cq-hero" id="cq-hero">
                <img class="cq-hero-icone" id="cq-hero-icone" src="/fotoIndex/icones/duvid-patentes-novato.png" alt="Patente atual">
                <div class="cq-hero-corpo">
                    <p class="cq-hero-label">Sua patente atual</p>
                    <p class="cq-hero-patente" id="cq-hero-patente">Carregando…</p>
                    <div class="cq-hero-bar-wrap">
                        <div class="cq-hero-bar" id="cq-hero-bar"></div>
                    </div>
                    <div class="cq-hero-legenda">
                        <span><b id="cq-hero-saldo">0</b> globinhos</span>
                        <span id="cq-hero-falta">calculando…</span>
                    </div>
                </div>
            </div>

            <p class="cq-secao-titulo"><i class="fa-solid fa-map"></i>Todos os níveis</p>

            <div class="cq-grid" id="cq-grid">
                <!-- Cards de nível gerados via JS -->
            </div>

        </div><!-- /.cq-body-pad -->

    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
        // Pequenas descrições de cada patente — dão contexto ao número puro
        // de globinhos, explicando o que cada nível representa na jornada.
        const CQ_DESCRICOES = {
            'NOVATO':          'Você acabou de embarcar na jornada. Toda expedição começa com o primeiro passo.',
            'EXPLORADOR':      'Já reconhece o território. Continue completando textos e questões para seguir em frente.',
            'CARTÓGRAFO':      'Domina a arte de representar o espaço. Seu conhecimento começa a tomar forma.',
            'ESTRATEGISTA':    'Enxerga padrões onde outros veem só dados. Suas respostas ficam cada vez mais afiadas.',
            'GEÓGRAFO SÊNIOR': 'Poucos chegam tão longe. Sua constância virou domínio de verdade.',
            'LENDA DA TERRA':  'O topo do mapa. Você conhece o território como poucos no Duvid.',
        };

        function cqFormatarGlobinhos(v) {
            return (typeof DuvidUI !== 'undefined') ? DuvidUI.formatarGlobinhos(v) : Math.floor(v).toString();
        }

        function cqNomeCapitalizado(patente) {
            return patente.charAt(0) + patente.slice(1).toLowerCase();
        }

        function cqMontarPagina() {
            if (typeof DuvidDB === 'undefined') return;

            const progresso = DuvidDB.getProgressoRPG();
            const ranking = DuvidDB.RANKING_SISTEMA;
            const iconeAtual = (typeof DuvidUI !== 'undefined')
                ? DuvidUI.getIconePatente(progresso.patente)
                : '/fotoIndex/icones/duvid-patentes-novato.png';

            // ── Card "Seu progresso atual" ──
            document.getElementById('cq-hero-icone').src = iconeAtual;
            document.getElementById('cq-hero-patente').textContent =
                'Nível ' + progresso.lvl + ' · ' + cqNomeCapitalizado(progresso.patente);
            document.getElementById('cq-hero-bar').style.width = progresso.progressoBarra + '%';
            document.getElementById('cq-hero-saldo').textContent = cqFormatarGlobinhos(progresso.saldoAtual);

            const faltaEl = document.getElementById('cq-hero-falta');
            const ultimoNivel = ranking[ranking.length - 1];
            if (progresso.lvl >= ultimoNivel.lvl) {
                faltaEl.textContent = 'Nível máximo alcançado! 🎉';
            } else {
                const falta = Math.max(0, progresso.proximoLvl - progresso.saldoAtual + 1);
                faltaEl.textContent = 'faltam ' + cqFormatarGlobinhos(falta) + ' para o próximo nível';
            }

            // ── Grade com todos os níveis ──
            const grid = document.getElementById('cq-grid');
            grid.innerHTML = '';

            ranking.forEach(function (marco) {
                const concluido = progresso.lvl > marco.lvl;
                const atual     = progresso.lvl === marco.lvl;
                const bloqueado = progresso.lvl < marco.lvl;

                const icone = (typeof DuvidUI !== 'undefined')
                    ? DuvidUI.getIconePatente(marco.patente)
                    : '/fotoIndex/icones/duvid-patentes-novato.png';

                const faixa = marco.lvl === ranking[ranking.length - 1].lvl
                    ? cqFormatarGlobinhos(marco.min) + '+ globinhos'
                    : cqFormatarGlobinhos(marco.min) + ' – ' + cqFormatarGlobinhos(marco.max) + ' globinhos';

                let badgeHtml = '';
                if (atual)          badgeHtml = '<span class="cq-card-badge cq-badge-atual">Você está aqui</span>';
                else if (concluido) badgeHtml = '<span class="cq-card-badge cq-badge-feito">Concluído</span>';
                else                badgeHtml = '<span class="cq-card-badge cq-badge-bloq"><i class="fa-solid fa-lock"></i></span>';

                const card = document.createElement('div');
                card.className = 'cq-card' + (atual ? ' cq-atual' : '') + (bloqueado ? ' cq-bloqueado' : '');
                card.innerHTML =
                    '<div class="cq-card-icone-wrap">' +
                        '<img class="cq-card-icone" src="' + icone + '" alt="' + marco.patente + '">' +
                    '</div>' +
                    '<div class="cq-card-corpo">' +
                        '<div class="cq-card-topo">' +
                            '<span class="cq-card-nome">Nível ' + marco.lvl + ' · ' + cqNomeCapitalizado(marco.patente) + '</span>' +
                        '</div>' +
                        badgeHtml +
                        '<p class="cq-card-faixa" style="margin-top:6px;">' + faixa + '</p>' +
                        '<p class="cq-card-desc">' + (CQ_DESCRICOES[marco.patente] || '') + '</p>' +
                    '</div>';

                grid.appendChild(card);
            });
        }

        document.addEventListener('DOMContentLoaded', async function () {
            if (typeof DuvidDB !== 'undefined' && DuvidDB.pronto) await DuvidDB.pronto;
            cqMontarPagina();
        });
        // Atualiza também sempre que o saldo de globinhos mudar em outra aba/página
        window.addEventListener('storage', cqMontarPagina);
    </script>

</body>

</html>
