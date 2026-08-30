<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid | Sugestões de Livros</title>
    <meta name="description" content="Romances e contos que dialogam com os temas de Geografia estudados no Duvid — seleção literária com conexão didática.">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/filmes-estilo.css">
    <link rel="stylesheet" href="/estilos/livros-estilo.css">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
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
    <div class="texto-hero" style="background-image:url('/fotoIndex/tileset/fundo.webp');">
        <div class="texto-hero-overlay">
            <div class="texto-hero-badges">
                <span class="texto-badge texto-badge-green">📚 Acervo</span>
            </div>
            <h1 class="texto-hero-title">Sugestões de Livros</h1>
        </div>
    </div>

    <div class="texto-body-pad">

        <div class="livro-aviso">
            <i class="fa fa-book-open"></i>
            <p>Romances, contos e obras literárias que dialogam com os temas de Geografia estudados aqui. Cada livro foi escolhido pela conexão real com o conteúdo, não só pelo tema.</p>
        </div>

        <!-- ══ FILTROS ══ -->
        <div class="bib-filtros-card">
            <div class="bib-busca-wrap">
                <i class="fa fa-search"></i>
                <input id="inputBusca" type="text" placeholder="Buscar por título, autor ou tema...">
            </div>
            <p class="bib-filtros-label">Filtrar por tema</p>
            <div id="botoes-filtro"></div>
            <p class="bib-filtros-label">Filtrar por continente</p>
            <div id="botoes-filtro-continente"></div>
            <p id="contador"></p>
        </div>

        <!-- ══ GRID ══ -->
        <div id="grid-livros"></div>

        <!-- ══ LINKS RELACIONADOS ══ -->
        <div class="bib-links">
            <a href="/paginas/filmes-geografia.php" class="bib-link-card">
                <div class="bib-link-icon"><i class="fa fa-film"></i></div>
                <div class="bib-link-info">
                    <span class="lbl">Acervo</span>
                    <span class="nome">Filmes e Séries</span>
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
let todosLivros = [];
let filtroAtivo = 'Todos';
let filtroContinenteAtivo = 'Todos';

// ── Agrupamento de tags em categorias abrangentes ──────────────────────────
const TAG_PARA_CATEGORIA = {
    // 🗺️ Cartografia
    'Cartografia':                'Cartografia',
    'Cartografia colonial':       'Cartografia',
    'Cartografia e orientação':   'Cartografia',
    'Cartografia e sátira':       'Cartografia',
    'Coordenadas geográficas':    'Cartografia',
    'Escala 1:1':                 'Cartografia',
    'Escala e proporção':         'Cartografia',
    'Mapa 1:1':                   'Cartografia',
    'Relatos de viagem':          'Cartografia',
    'Ventos alísios e navegações':'Cartografia',
    // 🕐 Tempo e Espaço
    'Fusos horários':             'Tempo e Espaço',
    'Rotação e tempo':            'Tempo e Espaço',
    'Tempo e pontualidade':       'Tempo e Espaço',
    'Cidades imaginárias':        'Tempo e Espaço',
    'Espaço geográfico':          'Tempo e Espaço',
    'Paisagem e espaço geográfico':'Tempo e Espaço',
    // 🌎 Globalização
    'Brexit':                     'Globalização',
    // ⚔️ Geopolítica
    'Afeganistão':                'Geopolítica',
    'Chile':                      'Geopolítica',
    'Colapso da URSS':            'Geopolítica',
    'Corrida espacial':           'Geopolítica',
    'Cuba':                       'Geopolítica',
    'Ditadura':                   'Geopolítica',
    'Guerra':                     'Geopolítica',
    'Guerra Civil':               'Geopolítica',
    'Gulag':                      'Geopolítica',
    'História da Europa':         'Geopolítica',
    'Líbano':                     'Geopolítica',
    'Massacre da Praça Tiananmen':'Geopolítica',
    'México':                     'Geopolítica',
    'Nakba':                      'Geopolítica',
    'Poder Militar':              'Geopolítica',
    'Revolução Cultural':         'Geopolítica',
    'Revolução Iraniana':         'Geopolítica',
    'Separatismo Basco':          'Geopolítica',
    'Tibet e o Dalai Lama':       'Geopolítica',
    'Turquia':                    'Geopolítica',
    // 🌍 Colonialismo
    'Colonialismo':               'Colonialismo',
    'Pós-colonialismo':           'Colonialismo',
    'Pós-Apartheid':              'Colonialismo',
    'Índia':                      'Colonialismo',
    'Sistema de Castas':          'Colonialismo',
    'Suriname':                   'Colonialismo',
    // 🧳 Migração e Refugiados
    'Fronteira':                  'Migração e Refugiados',
    'Imigração':                  'Migração e Refugiados',
    // 🌐 Povos e Culturas
    'Multiculturalismo':          'Povos e Culturas',
    'China pré-revolucionária':   'Povos e Culturas',
    'Cultura maori':              'Povos e Culturas',
    'Formação do Brasil':         'Povos e Culturas',
    'Formação Étnica':            'Povos e Culturas',
    'Japão pós-guerra':           'Povos e Culturas',
    'Literatura Persa':           'Povos e Culturas',
    'Mestiçagem':                 'Povos e Culturas',
    'Vastidão russa':             'Povos e Culturas',
    // ⚖️ Desigualdade Social
    'Desigualdade Regional':      'Desigualdade Social',
    'Favelas e desigualdade urbana': 'Desigualdade Social',
    'Menino-Soldado':             'Desigualdade Social',
    'Racismo':                    'Desigualdade Social',
    'Território e desigualdade':  'Desigualdade Social',
    // 🏭 Indústria e Trabalho
    'Industrialização':           'Indústria e Trabalho',
    // 📰 Comunicação e Mídia
    'Jornalismo Gráfico':         'Comunicação e Mídia',
    // 💻 Tecnologia e Sociedade
    'Vigilância':                 'Tecnologia e Sociedade',
    'Vigilância digital':         'Tecnologia e Sociedade',
    // 🌋 Natureza (relevo, geologia e recursos)
    'Altitude':                   'Natureza',
    'Camadas internas':           'Natureza',
    'Carvão Mineral':             'Natureza',
    'Depressões':                 'Natureza',
    'Deriva continental':         'Natureza',
    'Dinossauros':                'Natureza',
    'Energia Eólica':             'Natureza',
    'Energia Hidráulica':         'Natureza',
    'Energia Solar':              'Natureza',
    'Minerais':                   'Natureza',
    'Minérios':                   'Natureza',
    'Montanhas':                  'Natureza',
    'Petróleo':                   'Natureza',
    'Pré-história':               'Natureza',
    'Rochas Sedimentares':        'Natureza',
    'Terremotos':                 'Natureza',
    'Vulcanismo':                 'Natureza',
    // 🌿 Biomas e Vegetação
    'Biomassa':                   'Biomas e Vegetação',
    'Desertificação':             'Biomas e Vegetação',
    'Empobrecimento do solo':     'Biomas e Vegetação',
    'Erosão eólica':              'Biomas e Vegetação',
    'Erosão fluvial':             'Biomas e Vegetação',
    'Estepe e Pradaria':          'Biomas e Vegetação',
    'Floresta Pluvial':           'Biomas e Vegetação',
    'Savana':                     'Biomas e Vegetação',
    'Savana Tropical':            'Biomas e Vegetação',
    'Semiárido':                  'Biomas e Vegetação',
    'Solo e fertilidade':         'Biomas e Vegetação',
    'Tundra e Taiga':             'Biomas e Vegetação',
    'Vegetação Mediterrânea':     'Biomas e Vegetação',
    // 🌊 Hidrografia e Oceanos
    'Amazônia Azul':              'Hidrografia e Oceanos',
    'Antártica':                  'Hidrografia e Oceanos',
    'Ártico':                     'Hidrografia e Oceanos',
    'Bacias hidrográficas':       'Hidrografia e Oceanos',
    'Cadeias oceânicas':          'Hidrografia e Oceanos',
    'Curso de um rio':            'Hidrografia e Oceanos',
    'Deltas e estuários':         'Hidrografia e Oceanos',
    'Fossas oceânicas':           'Hidrografia e Oceanos',
    'Hidrografia':                'Hidrografia e Oceanos',
    'Movimentos oceânicos':       'Hidrografia e Oceanos',
    'Rios meandrantes':           'Hidrografia e Oceanos',
    // ☁️ Clima
    'Aquecimento global':         'Clima',
    'Aquecimento Global':         'Clima',
    'Atmosfera comparada':        'Clima',
    'Clima':                      'Clima',
    'Clima do Sul do Brasil':     'Clima',
    'Ilhas de calor':             'Clima',
    'Marés e monções':            'Clima',
    'Poluição atmosférica':       'Clima',
    // 🌱 Meio Ambiente
    'Conservacionismo':           'Meio Ambiente',
    'Desmatamento':                'Meio Ambiente',
    'Diplomacia Ambiental':       'Meio Ambiente',
    'Impacto Ambiental':          'Meio Ambiente',
    'Justiça Ambiental':          'Meio Ambiente',
    'Limites Planetários':        'Meio Ambiente',
    'Poluição hídrica':           'Meio Ambiente',
    'Privatização da água':       'Meio Ambiente',
    'Rompimento de barragens':    'Meio Ambiente',
    // 🏙️ Sociedade
    'Crise Agrícola':             'Sociedade',
    'Memórias':                   'Sociedade',
    'Narcotráfico':               'Sociedade',
    'Realismo Mágico':            'Sociedade',
};

const CATEGORIA_CORES = {
    'Cartografia':           { bg: '#e8eaf6', cor: '#3949ab' },
    'Tempo e Espaço':        { bg: '#fff8e1', cor: '#f9a825' },
    'Natureza':              { bg: '#e8f5e9', cor: '#2e7d32' },
    'Biomas e Vegetação':    { bg: '#f9fbe7', cor: '#9e9d24' },
    'Hidrografia e Oceanos': { bg: '#dbeafe', cor: '#0e5a8a' },
    'Clima':                 { bg: '#e1f5fe', cor: '#0277bd' },
    'Meio Ambiente':         { bg: '#f1f8e9', cor: '#558b2f' },
    'Geopolítica':           { bg: '#ffebee', cor: '#c62828' },
    'Globalização':          { bg: '#e3f2fd', cor: '#1565c0' },
    'Colonialismo':          { bg: '#fbe9e7', cor: '#bf360c' },
    'Migração e Refugiados': { bg: '#e0f2f1', cor: '#00897b' },
    'Povos e Culturas':      { bg: '#e0f7fa', cor: '#00838f' },
    'Desigualdade Social':   { bg: '#fce4ec', cor: '#ad1457' },
    'Indústria e Trabalho':  { bg: '#efebe9', cor: '#6d4c41' },
    'Comunicação e Mídia':   { bg: '#fff3e0', cor: '#ef6c00' },
    'Tecnologia e Sociedade':{ bg: '#ede7f6', cor: '#5e35b1' },
    'Sociedade':             { bg: '#f3e5f5', cor: '#7b1fa2' },
};

function categoriaDoLivro(l) {
    return TAG_PARA_CATEGORIA[l.tag] || 'Sociedade';
}
function corTag(tag) {
    const cat = TAG_PARA_CATEGORIA[tag] || 'Sociedade';
    return CATEGORIA_CORES[cat] || { bg: '#e8f5e9', cor: '#2e7d32' };
}

// ── Continente de cada livro (campo "continente" vindo direto do JSON) ────
const ORDEM_CONTINENTES = ['Europa', 'Ásia', 'África', 'América do Norte', 'América Central', 'América do Sul', 'Oceania', 'Global'];

const CONTINENTE_CORES = {
    'Europa':            { bg: '#e3f2fd', cor: '#1565c0' },
    'Ásia':              { bg: '#fce4ec', cor: '#ad1457' },
    'África':            { bg: '#fff3e0', cor: '#ef6c00' },
    'América do Norte':  { bg: '#e0f2f1', cor: '#00695c' },
    'América Central':   { bg: '#f1f8e9', cor: '#558b2f' },
    'América do Sul':    { bg: '#e8f5e9', cor: '#2e7d32' },
    'Oceania':           { bg: '#e0f7fa', cor: '#00838f' },
    'Global':            { bg: '#f5f5f5', cor: '#616161' },
};

function continenteDoLivro(l) {
    return l.continente || 'Global';
}

// Capa: usa campo manual se existir, senão Open Library
function capaUrl(livro) {
    if (livro.capa) return livro.capa;
    return 'https://covers.openlibrary.org/b/title/' + encodeURIComponent(livro.titulo) + '-M.jpg';
}

// Link Open Library
function openLibraryUrl(titulo, autor) {
    return 'https://openlibrary.org/search?q=' + encodeURIComponent(titulo + ' ' + autor);
}

function escapeHtml(str) {
    return (str || '').replace(/[&<>"']/g, c => ({
        '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
    }[c]));
}

async function carregarLivros() {
    try {
        const res = await fetch('/js/livros.json');
        const obj = await res.json();
        todosLivros = Object.entries(obj).map(([id, l]) => ({ id, ...l }));
        gerarBotoes();
        gerarBotoesContinente();
        aplicarFiltros();
    } catch (e) {
        document.getElementById('grid-livros').innerHTML =
            '<p class="bib-vazio">Erro ao carregar os livros.</p>';
    }
}

const ORDEM_CATEGORIAS = ['Biomas e Vegetação', 'Cartografia', 'Clima', 'Colonialismo', 'Comunicação e Mídia', 'Desigualdade Social', 'Geopolítica', 'Globalização', 'Hidrografia e Oceanos', 'Indústria e Trabalho', 'Meio Ambiente', 'Migração e Refugiados', 'Natureza', 'Povos e Culturas', 'Sociedade', 'Tecnologia e Sociedade', 'Tempo e Espaço'];

function gerarBotoes() {
    const cats = ['Todos', ...ORDEM_CATEGORIAS];
    document.getElementById('botoes-filtro').innerHTML = cats.map(c => {
        const cores = CATEGORIA_CORES[c];
        const style = cores && c !== 'Todos'
            ? `data-bg="${cores.bg}" data-cor="${cores.cor}"`
            : '';
        return `<button class="btn-filtro-bib ${c === 'Todos' ? 'ativo' : ''}"
                    ${style}
                    onclick="filtrar('${c.replace(/'/g, "\\'")}', this)">${c}</button>`;
    }).join('');
}

function gerarBotoesContinente() {
    const continentes = ['Todos', ...ORDEM_CONTINENTES];
    document.getElementById('botoes-filtro-continente').innerHTML = continentes.map(c => {
        const cores = CONTINENTE_CORES[c];
        const style = cores && c !== 'Todos'
            ? `data-bg="${cores.bg}" data-cor="${cores.cor}"`
            : '';
        return `<button class="btn-filtro-bib ${c === 'Todos' ? 'ativo' : ''}"
                    ${style}
                    onclick="filtrarContinente('${c.replace(/'/g, "\\'")}', this)">${c}</button>`;
    }).join('');
}

function filtrar(cat, btn) {
    filtroAtivo = cat;
    document.querySelectorAll('#botoes-filtro .btn-filtro-bib').forEach(b => {
        b.classList.remove('ativo');
        b.style.background = '';
        b.style.borderColor = '';
        b.style.color = '';
    });
    btn.classList.add('ativo');
    if (btn.dataset.cor) {
        btn.style.background  = btn.dataset.cor;
        btn.style.borderColor = btn.dataset.cor;
        btn.style.color       = '#fff';
    }
    aplicarFiltros();
}

function filtrarContinente(cont, btn) {
    filtroContinenteAtivo = cont;
    document.querySelectorAll('#botoes-filtro-continente .btn-filtro-bib').forEach(b => {
        b.classList.remove('ativo');
        b.style.background = '';
        b.style.borderColor = '';
        b.style.color = '';
    });
    btn.classList.add('ativo');
    if (btn.dataset.cor) {
        btn.style.background  = btn.dataset.cor;
        btn.style.borderColor = btn.dataset.cor;
        btn.style.color       = '#fff';
    }
    aplicarFiltros();
}

function aplicarFiltros() {
    const busca = document.getElementById('inputBusca').value.toLowerCase();
    const resultado = todosLivros.filter(l => {
        const matchCat  = filtroAtivo === 'Todos' || categoriaDoLivro(l) === filtroAtivo;
        const matchContinente = filtroContinenteAtivo === 'Todos' || continenteDoLivro(l) === filtroContinenteAtivo;
        const matchBusca = !busca ||
            (l.titulo     || '').toLowerCase().includes(busca) ||
            (l.autor      || '').toLowerCase().includes(busca) ||
            (l.tag        || '').toLowerCase().includes(busca) ||
            (l.continente || '').toLowerCase().includes(busca) ||
            (l.relacao    || '').toLowerCase().includes(busca);
        return matchCat && matchContinente && matchBusca;
    });

    // Sem nenhum filtro ativo (tema, continente ou busca): ordena por autor A-Z
    const semFiltroNenhum = filtroAtivo === 'Todos' && filtroContinenteAtivo === 'Todos' && !busca;
    if (semFiltroNenhum) {
        resultado.sort((a, b) => (a.autor || '').localeCompare(b.autor || '', 'pt-BR', { sensitivity: 'base' }));
    }

    renderizar(resultado);
}

function renderizar(lista) {
    const grid = document.getElementById('grid-livros');
    const n = lista.length;
    document.getElementById('contador').textContent =
        `${n} livro${n !== 1 ? 's' : ''} encontrado${n !== 1 ? 's' : ''}`;

    if (!n) {
        grid.innerHTML = '<p class="bib-vazio">Nenhum livro encontrado.</p>';
        return;
    }

    grid.innerHTML = lista.map(l => {
        const { bg, cor } = corTag(l.tag);
        const capa = capaUrl(l);
        const openLib = openLibraryUrl(l.titulo, l.autor);
        const ficha = [l.autor, l.ano].filter(Boolean).join(' · ');

        return `
        <div class="livro-card">
            <div class="livro-capa-wrap" style="--capa-bg:${bg};--capa-cor:${cor}">
                <img src="${capa}" alt="Capa de ${escapeHtml(l.titulo)}" loading="lazy"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="livro-capa-placeholder" style="display:none">
                    <i class="fa fa-book"></i>
                </div>
                <span class="livro-tag-badge" style="background:${cor}">${escapeHtml(l.tag || '')}</span>
            </div>
            <div class="livro-body">
                <p class="livro-titulo">${escapeHtml(l.titulo)}</p>
                ${ficha ? `<p class="livro-autor">${escapeHtml(ficha)}</p>` : ''}
                <p class="livro-relacao">${escapeHtml(l.relacao)}</p>
                <div class="livro-rodape">
                    <a class="livro-link" href="${openLib}" target="_blank" rel="noopener">
                        <i class="fa fa-book"></i> Open Library
                    </a>
                </div>
            </div>
        </div>`;
    }).join('');
}

document.getElementById('inputBusca').addEventListener('input', aplicarFiltros);
carregarLivros();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'G-DPX55DSFZ0');
</script>
</body>
</html>
