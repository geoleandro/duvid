<?php include __DIR__ . '/../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliografia — Duvid Geografia</title>
    <meta name="description" content="Livros, autores e referências que embasam o Duvid Geografia. Milton Santos, Krishnamurti, IBGE e mais.">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <link rel="stylesheet" href="/estilos/atividades-estilo.css">
    <style>
        .btn-filtro-bib {
            background: #fff;
            border: 1.5px solid #ccc;
            border-radius: 20px;
            padding: 5px 14px;
            font-size: .8rem;
            cursor: pointer;
            transition: all .15s;
            margin: 3px 3px 3px 0;
            white-space: nowrap;
        }
        .btn-filtro-bib:hover, .btn-filtro-bib.ativo {
            background: #2e7d32;
            border-color: #2e7d32;
            color: #fff;
        }
        .complemento-bib { font-size: .78rem; color: #888; font-style: italic; line-height: 1.4; }
        #contador { font-size: .82rem; color: #888; margin: 6px 0 0; }
        #botoes-filtro { display: flex; flex-wrap: wrap; margin-top: 6px; }
        #grid-bib { display: flex !important; flex-wrap: wrap; align-items: stretch; }
        #grid-bib > div { display: flex; flex-direction: column; }
        #grid-bib .card-rpg { flex: 1; }
    </style>
</head>
<body class="w3-light-grey">

<main class="w3-content" style="max-width:1100px; margin-top:80px; margin-bottom:80px;">

    <!-- Cabeçalho -->
    <div class="w3-container w3-padding-48 w3-center hero-ano w3-round-large w3-card-2 w3-white w3-margin-bottom">
        <h1 class="w3-text-green w3-jumbo fonte-pixel-titulo"><b>Duvid - Bibliografia</b></h1>
        <p class="w3-text-grey">Livros, atlas e referências que embasam os textos e questões do site.</p>
    </div>

    <!-- Filtros -->
    <div class="w3-container w3-white w3-card w3-round-large w3-padding-16 w3-margin-bottom">
        <div class="w3-row-padding">
            <div class="w3-col l4 m12 s12 w3-margin-bottom">
                <label class="w3-small w3-text-grey"><b>PESQUISAR</b></label>
                <div class="w3-display-container">
                    <input id="inputBusca" class="w3-input w3-border w3-round-medium" type="text"
                        placeholder="Autor, título ou área...">
                    <i class="fa fa-search w3-display-right w3-margin-right w3-opacity"></i>
                </div>
            </div>
            <div class="w3-col l8 m12 s12">
                <label class="w3-small w3-text-grey"><b>FILTRAR POR ÁREA</b></label>
                <div id="botoes-filtro"></div>
            </div>
        </div>
        <p id="contador"></p>
    </div>

    <!-- Grid -->
    <div id="grid-bib" class="w3-row-padding"></div>

    <!-- Citação final -->
    <div class="w3-container w3-white w3-card w3-round-large w3-padding-32 w3-margin-top w3-center"
         style="border-top:4px solid #4CAF50;">
        <i class="fa fa-quote-left w3-text-light-grey w3-xlarge"></i>
        <p class="w3-large w3-serif w3-padding" style="color:#2e7d32; line-height:1.7; font-style:italic;">
            "O medo é o maior obstáculo à aprendizagem."
        </p>
        <p class="w3-small w3-opacity">— Krishnamurti</p>
    </div>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script>
let todasRefs = [];
let filtroAtivo = 'Todos';

async function carregarBibliografia() {
    const res = await fetch('/js/bibliografias.json');
    const obj  = await res.json();

    // Converte objeto {chave: {...}} em array com a chave como id
    todasRefs = Object.entries(obj).map(([id, r]) => ({ id, ...r }));

    gerarBotoes();
    renderizar(todasRefs);
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
    document.getElementById('contador').textContent =
        `${lista.length} referência${lista.length !== 1 ? 's' : ''} encontrada${lista.length !== 1 ? 's' : ''}`;

    if (!lista.length) {
        grid.innerHTML = `<div class="w3-center w3-padding-64 w3-col s12">
            <p class="w3-large w3-opacity">Nenhuma referência encontrada.</p></div>`;
        return;
    }

    grid.innerHTML = lista.map(r => `
        <div class="w3-col l4 m6 s12 w3-margin-bottom animate-top">
            <div class="w3-card w3-white w3-round-large w3-padding-16 card-rpg">
                <span class="w3-tag ${r.cor || 'w3-green'} w3-round w3-tiny"><b>${(r.tag || 'Referência').toUpperCase()}</b></span>
                <p class="w3-small" style="line-height:1.6; color:#333; margin:8px 0 4px;">${r.texto || ''}</p>
                ${r.complemento ? `<p class="complemento-bib">${r.complemento}</p>` : ''}
            </div>
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
