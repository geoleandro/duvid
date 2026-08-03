<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid | Bibliografia</title>
    <meta name="description" content="Livros, autores e referências que embasam o Duvid Geografia. Milton Santos, Krishnamurti, IBGE e mais.">

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
        /* ── Filtros ──────────────────────────────────── */
        .bib-filtros-card {
            background: #fff;
            border-radius: 20px;
            border: 1.5px solid #e8e8e8;
            padding: 24px 28px;
            margin-bottom: 28px;
        }
        body.dark-mode .bib-filtros-card { background: #1e1e1e; border-color: #333; }

        .bib-busca-wrap {
            position: relative;
            margin-bottom: 16px;
        }
        .bib-busca-wrap i {
            position: absolute;
            left: 14px; top: 50%;
            transform: translateY(-50%);
            color: #aaa; font-size: .85rem;
            pointer-events: none;
        }
        #inputBusca {
            width: 100%;
            padding: 10px 14px 10px 36px;
            border: 1.5px solid #e0e0e0;
            border-radius: 12px;
            font-family: 'Montserrat', sans-serif;
            font-size: .88rem;
            color: #1b1b1b;
            background: #f8f9fa;
            box-sizing: border-box;
            outline: none;
            transition: border-color .15s;
        }
        #inputBusca:focus { border-color: #4caf50; background: #fff; }
        body.dark-mode #inputBusca { background: #252525; border-color: #444; color: #ddd; }
        body.dark-mode #inputBusca:focus { border-color: #66bb6a; }

        .bib-filtros-label {
            font-family: 'Montserrat', sans-serif;
            font-size: .65rem; font-weight: 700;
            letter-spacing: .1em; text-transform: uppercase;
            color: #888; margin-bottom: 10px;
        }

        #botoes-filtro {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .btn-filtro-bib {
            background: #f3f4f5;
            border: 1.5px solid transparent;
            border-radius: 20px;
            padding: 5px 14px;
            font-family: 'Montserrat', sans-serif;
            font-size: .75rem; font-weight: 600;
            color: #555;
            cursor: pointer;
            transition: all .15s;
            white-space: nowrap;
        }
        .btn-filtro-bib:hover { background: #e8f5e9; color: #2e7d32; }
        .btn-filtro-bib.ativo {
            background: #2e7d32;
            border-color: #2e7d32;
            color: #fff;
        }
        body.dark-mode .btn-filtro-bib { background: #2a2a2a; color: #aaa; }
        body.dark-mode .btn-filtro-bib.ativo { background: #2e7d32; color: #fff; }

        #contador {
            font-family: 'Montserrat', sans-serif;
            font-size: .75rem; color: #aaa;
            margin-top: 14px;
        }

        /* ── Grid de referências ──────────────────────── */
        #grid-bib {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        @media (max-width: 900px) { #grid-bib { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 580px) { #grid-bib { grid-template-columns: 1fr; } }

        .ref-card {
            background: #fff;
            border-radius: 16px;
            border: 1.5px solid #e8e8e8;
            padding: 18px 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            transition: box-shadow .2s;
        }
        .ref-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,.08); }
        body.dark-mode .ref-card { background: #1e1e1e; border-color: #333; }

        .ref-tag {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-size: .62rem; font-weight: 700;
            letter-spacing: .08em; text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 20px;
            background: #e8f5e9;
            color: #2e7d32;
            width: fit-content;
        }

        .ref-texto {
            font-family: 'Montserrat', sans-serif;
            font-size: .83rem;
            color: #333;
            line-height: 1.6;
            margin: 0;
            flex: 1;
        }
        body.dark-mode .ref-texto { color: #ccc; }

        .ref-complemento {
            font-family: 'Montserrat', sans-serif;
            font-size: .74rem;
            color: #999;
            line-height: 1.45;
            margin: 0;
            font-style: italic;
        }

        /* ── Citação final ────────────────────────────── */
        .citacao-final {
            background: #fff;
            border-radius: 20px;
            border: 1.5px solid #e8e8e8;
            border-top: 4px solid #4caf50;
            padding: 36px 40px;
            text-align: center;
            margin-top: 32px;
        }
        body.dark-mode .citacao-final { background: #1e1e1e; border-color: #2e7d32; border-top-color: #4caf50; }

        .citacao-final blockquote {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            font-style: italic;
            color: #2e7d32;
            line-height: 1.75;
            margin: 12px 0;
        }
        body.dark-mode .citacao-final blockquote { color: #81c784; }

        .citacao-final cite {
            font-family: 'Montserrat', sans-serif;
            font-size: .78rem;
            color: #aaa;
        }

        /* ── Vazio ────────────────────────────────────── */
        .bib-vazio {
            grid-column: 1 / -1;
            text-align: center;
            padding: 48px 0;
            font-family: 'Montserrat', sans-serif;
            font-size: .9rem;
            color: #aaa;
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📚 Referências</span>
            </div>
            <h1 class="texto-hero-title">Bibliografia</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <!-- ══ FILTROS ══ -->
        <div class="bib-filtros-card">
            <div class="bib-busca-wrap">
                <i class="fa fa-search"></i>
                <input id="inputBusca" type="text" placeholder="Buscar por autor, título ou área...">
            </div>
            <p class="bib-filtros-label">Filtrar por área</p>
            <div id="botoes-filtro"></div>
            <p id="contador"></p>
        </div>

        <!-- ══ GRID ══ -->
        <div id="grid-bib"></div>

        <!-- ══ CITAÇÃO ══ -->
        <div class="citacao-final">
            <i class="fa fa-quote-left" style="font-size:1.5rem; color:#c8e6c9;"></i>
            <blockquote>"O medo é o maior obstáculo à aprendizagem."</blockquote>
            <cite>Krishnamurti</cite>
        </div>

    </div><!-- /.texto-body-pad -->

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script>
let todasRefs = [];
let filtroAtivo = 'Todos';

async function carregarBibliografia() {
    try {
        const res = await fetch('/js/bibliografias.json');
        const obj = await res.json();
        todasRefs = Object.entries(obj).map(([id, r]) => ({ id, ...r }));
        gerarBotoes();
        renderizar(todasRefs);
    } catch (e) {
        document.getElementById('grid-bib').innerHTML =
            '<p class="bib-vazio">Erro ao carregar referências.</p>';
    }
}

function gerarBotoes() {
    const tags = ['Todos', ...new Set(todasRefs.map(r => r.tag).filter(Boolean))].sort((a, b) =>
        a === 'Todos' ? -1 : b === 'Todos' ? 1 : a.localeCompare(b)
    );
    document.getElementById('botoes-filtro').innerHTML = tags.map(t =>
        `<button class="btn-filtro-bib ${t === 'Todos' ? 'ativo' : ''}"
                 onclick="filtrar('${t}', this)">${t}</button>`
    ).join('');
}

function filtrar(tag, btn) {
    filtroAtivo = tag;
    document.querySelectorAll('.btn-filtro-bib').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    aplicarFiltros();
}

function aplicarFiltros() {
    const busca = document.getElementById('inputBusca').value.toLowerCase();
    const resultado = todasRefs.filter(r => {
        const matchTag   = filtroAtivo === 'Todos' || r.tag === filtroAtivo;
        const matchBusca = !busca ||
            (r.texto || '').toLowerCase().includes(busca) ||
            (r.tag   || '').toLowerCase().includes(busca) ||
            (r.complemento || '').toLowerCase().includes(busca);
        return matchTag && matchBusca;
    });
    renderizar(resultado);
}

function renderizar(lista) {
    const grid = document.getElementById('grid-bib');
    const n = lista.length;
    document.getElementById('contador').textContent =
        `${n} referência${n !== 1 ? 's' : ''} encontrada${n !== 1 ? 's' : ''}`;

    if (!n) {
        grid.innerHTML = '<p class="bib-vazio">Nenhuma referência encontrada.</p>';
        return;
    }

    grid.innerHTML = lista.map(r => `
        <div class="ref-card">
            <span class="ref-tag">${(r.tag || 'Referência').toUpperCase()}</span>
            <p class="ref-texto">${r.texto || ''}</p>
            ${r.complemento ? `<p class="ref-complemento">${r.complemento}</p>` : ''}
        </div>
    `).join('');
}

document.getElementById('inputBusca').addEventListener('input', aplicarFiltros);
carregarBibliografia();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'G-DPX55DSFZ0');
</script>
</body>
</html>
