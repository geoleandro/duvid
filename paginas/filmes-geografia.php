<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid | Filmes e Séries de Geografia</title>
    <meta name="description" content="Filmes, séries e documentários indicados para aprofundar temas de Geografia: meio ambiente, globalização, geopolítica, migrações e mais.">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/filmes-estilo.css">
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
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="texto-layout">

    <!-- ══ HERO ══ -->
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo-filmes.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">🎬 Acervo</span>
            </div>
            <h1 class="texto-hero-title">Filmes e Séries de Geografia</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <div class="filme-aviso">
            <i class="fa fa-circle-info"></i>
            <p>Seleção de filmes, séries e documentários indicados para aprofundar temas de Geografia: meio ambiente, globalização, geopolítica, migrações, indústria e mais.</p>
        </div>

        <!-- ══ FILTROS ══ -->
        <div class="bib-filtros-card">
            <div class="bib-busca-wrap">
                <i class="fa fa-search"></i>
                <input id="inputBusca" type="text" placeholder="Buscar por título, diretor ou tema...">
            </div>
            <p class="bib-filtros-label">Filtrar por tema</p>
            <div id="botoes-filtro"></div>
            <p id="contador"></p>
        </div>

        <!-- ══ GRID ══ -->
        <div id="grid-filmes"></div>

        <!-- ══ LINKS RELACIONADOS ══ -->
        <div class="bib-links">
            <a href="/paginas/livrosgeografia.php" class="bib-link-card">
                <div class="bib-link-icon"><i class="fa fa-book-open"></i></div>
                <div class="bib-link-info">
                    <span class="lbl">Acervo</span>
                    <span class="nome">Biblioteca</span>
                </div>
            </a>
            <a href="/paginas/bibliografia.php" class="bib-link-card">
                <div class="bib-link-icon"><i class="fa fa-list"></i></div>
                <div class="bib-link-info">
                    <span class="lbl">Referências</span>
                    <span class="nome">Bibliografia completa</span>
                </div>
            </a>
        </div>

    </div><!-- /.texto-body-pad -->

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script>
let todosFilmes = [];
let filtroAtivo = 'Todos';

async function carregarFilmes() {
    try {
        const res = await fetch('/js/filmes-geografia.json');
        const obj = await res.json();
        todosFilmes = Object.entries(obj).map(([id, f]) => ({ id, ...f }));
        gerarBotoes();
        renderizar(todosFilmes);
    } catch (e) {
        document.getElementById('grid-filmes').innerHTML =
            '<p class="bib-vazio">Erro ao carregar os filmes.</p>';
    }
}

function gerarBotoes() {
    const temas = ['Todos', ...new Set(todosFilmes.map(f => f.tema).filter(Boolean))].sort((a, b) =>
        a === 'Todos' ? -1 : b === 'Todos' ? 1 : a.localeCompare(b)
    );
    document.getElementById('botoes-filtro').innerHTML = temas.map(t =>
        `<button class="btn-filtro-bib ${t === 'Todos' ? 'ativo' : ''}"
                 onclick="filtrar('${t.replace(/'/g, "\\'")}', this)">${t}</button>`
    ).join('');
}

function filtrar(tema, btn) {
    filtroAtivo = tema;
    document.querySelectorAll('.btn-filtro-bib').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    aplicarFiltros();
}

function aplicarFiltros() {
    const busca = document.getElementById('inputBusca').value.toLowerCase();
    const resultado = todosFilmes.filter(f => {
        const matchTema  = filtroAtivo === 'Todos' || f.tema === filtroAtivo;
        const matchBusca = !busca ||
            (f.titulo   || '').toLowerCase().includes(busca) ||
            (f.direcao  || '').toLowerCase().includes(busca) ||
            (f.tema     || '').toLowerCase().includes(busca) ||
            (f.sinopse  || '').toLowerCase().includes(busca);
        return matchTema && matchBusca;
    });
    renderizar(resultado);
}

function escapeHtml(str) {
    return (str || '').replace(/[&<>"']/g, c => ({
        '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
    }[c]));
}

// Cor do badge de categoria por tema (paleta Clean Pixel)
const TEMA_CORES = {
    'Meio Ambiente':            '#2e7d32',
    'Tecnologia e Sociedade':   '#5e35b1',
    'Globalização':             '#1565c0',
    'Economia e Globalização':  '#1565c0',
    'Comunicação e Mídia':      '#ef6c00',
    'Indústria e Trabalho':     '#6d4c41',
    'Povos e Culturas':         '#00838f',
    'Geopolítica':              '#c62828',
    'Desigualdade Social':      '#ad1457',
    'Migração e Refugiados':    '#00897b',
    'Sociedade':                '#8e24aa',
};
function corTema(tema) { return TEMA_CORES[tema] || '#2e7d32'; }

function renderizar(lista) {
    const grid = document.getElementById('grid-filmes');
    const n = lista.length;
    document.getElementById('contador').textContent =
        `${n} título${n !== 1 ? 's' : ''} encontrado${n !== 1 ? 's' : ''}`;

    if (!n) {
        grid.innerHTML = '<p class="bib-vazio">Nenhum filme encontrado.</p>';
        return;
    }

    grid.innerHTML = lista.map(f => {
        const ficha = [f.direcao, f.pais, f.ano, f.duracao].filter(Boolean).join(' · ');
        const temIcone = { 'Documentário': 'fa-clapperboard', 'Curta-metragem': 'fa-film', 'Filme': 'fa-film', 'Série': 'fa-tv' };
        const icone = temIcone[f.tipo] || 'fa-film';
        // Sem link direto de onde assistir: usa uma busca como alternativa
        const href = f.link || `https://www.google.com/search?q=${encodeURIComponent('assistir ' + f.titulo + (f.ano ? ' ' + f.ano : ''))}`;

        return `
        <div class="filme-card">
            <div class="filme-capa-wrap" style="--tema-cor:${corTema(f.tema)}">
                ${f.imagem
                    ? `<img src="${f.imagem}" alt="${escapeHtml(f.titulo)}" loading="lazy"
                            style="object-position:center ${f.posicao ?? 50}%"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">`
                    : ''}
                <div class="filme-capa-placeholder" style="${f.imagem ? 'display:none;' : ''}">
                    <i class="fa ${icone}"></i>
                </div>
                <span class="filme-capa-tema" style="--tema-cor:${corTema(f.tema)}">${escapeHtml(f.tema || 'Geral')}</span>
            </div>
            <div class="filme-body">
                <span class="filme-tipo">${escapeHtml(f.tipo || 'Filme')}</span>
                <p class="filme-titulo">${escapeHtml(f.titulo)}</p>
                ${ficha ? `<p class="filme-ficha">${escapeHtml(ficha)}</p>` : ''}
                <p class="filme-sinopse">${escapeHtml(f.sinopse)}</p>
                <div class="filme-rodape">
                    <div class="filme-nota-wrap">
                        ${f.nota ? `<span class="filme-nota"><i class="fa fa-star"></i> ${escapeHtml(String(f.nota))}</span>` : ''}
                        ${f.classificacao ? `<span class="filme-classificacao">${escapeHtml(f.classificacao)}</span>` : ''}
                    </div>
                    <a class="filme-link" href="${href}" target="_blank" rel="noopener">
                        <i class="fa fa-play"></i> Recomendo
                    </a>
                </div>
            </div>
        </div>`;
    }).join('');
}

document.getElementById('inputBusca').addEventListener('input', aplicarFiltros);
carregarFilmes();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'G-DPX55DSFZ0');
</script>
</body>
</html>
