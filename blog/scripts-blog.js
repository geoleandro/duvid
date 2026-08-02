let artigos = [];
const postsPorPagina = 8;
let paginaAtual = 1;

/* ──────────────────────────────────────────────────────────────────
   CARREGAMENTO DE DADOS
────────────────────────────────────────────────────────────────── */
async function carregarDadosDoArquivo() {
    try {
        let caminho = '/blog/artigos.json';
        if (window.location.hostname === "127.0.0.1" || window.location.hostname === "localhost") {
            caminho = window.location.pathname.includes('/artigos/') ? '../../artigos.json' : 'artigos.json';
        }
        const resposta = await fetch(caminho);
        if (!resposta.ok) throw new Error("Erro no fetch principal");
        artigos = await resposta.json();
        _inicializar();
    } catch (e) {
        console.warn("Tentando caminho alternativo...");
        try {
            const backup = window.location.pathname.includes('/artigos/') ? '../../artigos.json' : 'artigos.json';
            artigos = await (await fetch(backup)).json();
            _inicializar();
        } catch (e2) {
            console.error("Falha ao carregar JSON:", e2);
        }
    }
}

function _inicializar() {
    preencherDadosAutomaticos(artigos);
    renderizarPostsRecentes();
    renderizarNuvemDeTags();
    renderizarLeiaTambem();
    carregarComentariosFacebook();
    renderizarArquivoBlog();
    renderizarDestaque();
    renderizarArtigos(paginaAtual);
    renderizarSecaoViagens();
}

/* ──────────────────────────────────────────────────────────────────
   AUTOMAÇÕES (páginas de artigo individual)
────────────────────────────────────────────────────────────────── */
function preencherDadosAutomaticos(artigos) {
    const urlAtual = window.location.pathname;
    const artigoDados = artigos.find(a => urlAtual.includes(a.link.replace('/blog/', '')));
    if (!artigoDados) return;

    document.title = `${artigoDados.titulo} - Duvid Blog`;

    const elTitulo = document.getElementById('artigo-titulo-principal');
    if (elTitulo) elTitulo.innerText = artigoDados.titulo;

    const elData = document.getElementById('artigo-data');
    if (elData) elData.innerText = artigoDados.data;

    const img = document.getElementById('imagem-principal');
    if (img) {
        img.src = artigoDados.imagem;
        img.alt = artigoDados.titulo;
        img.onload = function () {
            ['skeleton-title','skeleton-img','skeleton-data'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });
            ['artigo-titulo-principal','imagem-principal','artigo-data'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.classList.remove('hidden-loading');
            });
        };
    }

    renderizarCitacaoDoArtigo(artigoDados);
    atualizarMetaTags(artigoDados);
    renderizarBotoesCompartilhamento(artigoDados);
}

function atualizarMetaTags(artigo) {
    const set = (id, val) => { const el = document.getElementById(id); if (el) el.setAttribute('content', val); };
    set('meta-description', artigo.resumo || "Leia este artigo no Duvid Blog.");
    set('og-title', artigo.titulo);
    set('og-description', artigo.resumo || "Confira este conteúdo no Duvid Blog.");
    set('og-image', window.location.origin + artigo.imagem);
}

function renderizarBotoesCompartilhamento(artigo) {
    const container = document.getElementById('icones-compartilhamento');
    if (!container) return;
    const urlFull = encodeURIComponent(window.location.href);
    const texto   = encodeURIComponent(artigo.titulo);
    container.innerHTML = `
        <div style="padding:16px 0;">
            <span style="font-size:.82rem; color:#999; font-family:'Montserrat',sans-serif; font-weight:600;">Compartilhe:</span>
            <div class="share-container" style="margin-top:8px;">
                <a href="https://api.whatsapp.com/send?text=${texto}%20${urlFull}" target="_blank"
                   style="display:inline-flex;align-items:center;gap:6px;padding:8px 18px;
                          background:#25D366;color:#fff;border-radius:20px;text-decoration:none;
                          font-family:'Montserrat',sans-serif;font-size:.82rem;font-weight:700;">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=${urlFull}" target="_blank"
                   style="display:inline-flex;align-items:center;gap:6px;padding:8px 18px;
                          background:#1877F2;color:#fff;border-radius:20px;text-decoration:none;
                          font-family:'Montserrat',sans-serif;font-size:.82rem;font-weight:700;margin-left:8px;">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
            </div>
        </div>`;
}

function renderizarCitacaoDoArtigo(artigo) {
    const container = document.getElementById('citacao-dinamica');
    if (!container) return;
    if (artigo.citacao_texto) {
        container.innerHTML = `
            <div style="background:#f8f9fa;border-left:4px solid #4caf50;border-radius:0 12px 12px 0;
                        padding:24px 28px;margin:24px 0;">
                <p style="font-family:'Montserrat',sans-serif;font-size:1rem;font-style:italic;
                           color:#333;margin:0 0 10px;line-height:1.6;">"${artigo.citacao_texto}"</p>
                <span style="font-size:.8rem;color:#888;font-family:'Montserrat',sans-serif;">
                    — ${artigo.citacao_autor || 'Autor desconhecido'}
                </span>
            </div>`;
    } else {
        container.innerHTML = '';
    }
}

/* ──────────────────────────────────────────────────────────────────
   POST DESTAQUE (Clean Pixel — hero card)
────────────────────────────────────────────────────────────────── */
function renderizarDestaque() {
    const container = document.getElementById('post-destaque');
    if (!container || artigos.length === 0) return;
    const destaque = artigos[0];

    container.innerHTML = `
        <div class="blog-destaque" style="background-image:url('${destaque.imagem}')">
            <div class="blog-destaque-overlay">
                <div class="blog-destaque-badges">
                    <span class="texto-badge texto-badge-green">✨ Novo Post</span>
                    ${destaque.tags ? destaque.tags.slice(0,2).map(t => `<span class="texto-badge">${t}</span>`).join('') : ''}
                </div>
                <h2 class="blog-destaque-title">${destaque.titulo}</h2>
                <p class="blog-destaque-resumo">${destaque.resumo}</p>
                <a href="${destaque.link}" class="blog-destaque-btn">Ler artigo completo →</a>
            </div>
        </div>`;
}

/* ──────────────────────────────────────────────────────────────────
   GRID DE ARTIGOS (Clean Pixel cards)
────────────────────────────────────────────────────────────────── */
function _buildTag(tag) {
    return `<span class="blog-tag" style="cursor:pointer" onclick="filtrarPorTag('${tag}')">${tag}</span>`;
}

function _buildCard(artigo) {
    const tags = artigo.tags ? artigo.tags.map(_buildTag).join('') : '';
    return `
        <div class="blog-card">
            <a href="${artigo.link}" class="blog-card-img-link">
                <img src="${artigo.imagem}" alt="${artigo.titulo}" class="blog-card-img" loading="lazy">
            </a>
            <div class="blog-card-body">
                ${tags ? `<div class="blog-card-tags">${tags}</div>` : ''}
                <h2 class="blog-card-title">
                    <a href="${artigo.link}">${artigo.titulo}</a>
                </h2>
                <p class="blog-card-resumo">${artigo.resumo}</p>
                <div class="blog-card-footer">
                    <span class="blog-card-data"><i class="fa fa-calendar-alt" style="margin-right:4px;color:#ccc;"></i>${artigo.data}</span>
                    <a href="${artigo.link}" class="blog-card-btn">Ler mais →</a>
                </div>
            </div>
        </div>`;
}

function renderizarArtigos(pagina) {
    const grid = document.getElementById('posts-grid');
    const destaqueContainer = document.getElementById('post-destaque');
    if (!grid) return;
    grid.innerHTML = '';

    const filtroAtivo = document.getElementById('btn-limpar-filtro')?.style.display === 'block';

    if (destaqueContainer) {
        destaqueContainer.style.display = (pagina === 1 && !filtroAtivo) ? 'block' : 'none';
    }
    if (pagina === 1 && !filtroAtivo) renderizarDestaque();

    const artigosParaGrid = artigos.slice(1);
    const inicio = (pagina - 1) * postsPorPagina;
    const fim    = inicio + postsPorPagina;
    const paginados = artigosParaGrid.slice(inicio, fim);

    paginados.forEach(a => { grid.innerHTML += _buildCard(a); });
    renderizarPaginacao(artigosParaGrid.length);
}

function renderizarPaginacao(total) {
    const totalPags = Math.ceil(total / postsPorPagina);
    const el = document.getElementById('blog-pagination');
    if (!el) return;
    el.innerHTML = '';
    if (totalPags <= 1) return;
    for (let i = 1; i <= totalPags; i++) {
        const ativo = i === paginaAtual ? 'active' : '';
        el.innerHTML += `<button class="blog-pag-btn ${ativo}" onclick="irParaPagina(${i})">${i}</button>`;
    }
}

function irParaPagina(p) {
    paginaAtual = p;
    renderizarArtigos(p);
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

/* ──────────────────────────────────────────────────────────────────
   FILTRO POR TAG
────────────────────────────────────────────────────────────────── */
function filtrarPorTag(tagSelecionada) {
    const grid = document.getElementById('posts-grid');
    if (!grid) return;

    const destaqueEl = document.getElementById('post-destaque');
    if (destaqueEl) destaqueEl.style.display = 'none';

    const filtrados = artigos.filter(a => a.tags && a.tags.includes(tagSelecionada));
    grid.innerHTML = '';
    filtrados.forEach(a => { grid.innerHTML += _buildCard(a); });

    const btn = document.getElementById('btn-limpar-filtro');
    if (btn) btn.style.display = 'inline-block';

    const pag = document.getElementById('blog-pagination');
    if (pag) pag.style.display = 'none';

    window.scrollTo({ top: 500, behavior: 'smooth' });
}

function limparFiltro() {
    const btn = document.getElementById('btn-limpar-filtro');
    if (btn) btn.style.display = 'none';
    const pag = document.getElementById('blog-pagination');
    if (pag) pag.style.display = '';
    paginaAtual = 1;
    renderizarArtigos(paginaAtual);
}

/* ──────────────────────────────────────────────────────────────────
   WIDGETS DA SIDEBAR
────────────────────────────────────────────────────────────────── */
function renderizarPostsRecentes() {
    const el = document.getElementById('posts-recentes-container');
    if (!el || artigos.length === 0) return;
    const recentes = artigos.slice(0, 5);

    let html = `
        <div class="blog-widget">
            <div class="blog-widget-head">📰 Posts Recentes</div>
            <div class="blog-widget-body">`;

    recentes.forEach(a => {
        html += `
            <a href="${a.link}" class="blog-recent-item">
                <img src="${a.imagem}" class="blog-recent-img" alt="${a.titulo}" loading="lazy">
                <div>
                    <p class="blog-recent-title">${a.titulo}</p>
                    <span class="blog-recent-date">${a.data}</span>
                </div>
            </a>`;
    });

    html += `</div></div>`;
    el.innerHTML = html;
}

function renderizarNuvemDeTags() {
    const el = document.getElementById('tags-container');
    if (!el) return;
    const urlAtual    = window.location.pathname;
    const artigoAtual = artigos.find(a => urlAtual.includes(a.link.replace('/blog/', '').replace('..', '')));
    const tagsUnicas  = new Set();
    artigos.forEach(a => a.tags && a.tags.forEach(t => tagsUnicas.add(t)));

    let html = `
        <div class="blog-widget">
            <div class="blog-widget-head">🏷️ Tags</div>
            <div class="blog-widget-body" style="padding-bottom:14px;">
                <div style="display:flex;flex-wrap:wrap;gap:6px;">`;

    tagsUnicas.forEach(tag => {
        const ativo = artigoAtual && artigoAtual.tags && artigoAtual.tags.includes(tag) ? 'ativa' : '';
        html += `<span class="blog-tag-pill ${ativo}" onclick="filtrarPorTag('${tag}')">${tag}</span>`;
    });

    html += `</div>
                <button id="btn-limpar-filtro"
                        style="display:none;margin-top:12px;padding:4px 12px;border:none;
                               background:#ef5350;color:#fff;border-radius:20px;cursor:pointer;
                               font-family:'Montserrat',sans-serif;font-size:.75rem;font-weight:700;"
                        onclick="limparFiltro()">✕ Limpar filtro</button>
            </div>
        </div>`;
    el.innerHTML = html;
}

function renderizarLeiaTambem() {
    const el = document.getElementById('leia-tambem-container');
    if (!el || artigos.length === 0) return;

    const linkAtual   = window.location.pathname;
    const artigoAtual = artigos.find(a => linkAtual.includes(a.link.replace('..', '')));
    let relacionados  = artigos.filter(a => a.id !== (artigoAtual ? artigoAtual.id : null));

    if (artigoAtual && artigoAtual.tags) {
        relacionados = relacionados.filter(a => a.tags && a.tags.some(t => artigoAtual.tags.includes(t)));
    }

    const final = relacionados.slice(0, 3);
    if (!final.length) return;

    let html = `
        <div class="blog-widget">
            <div class="blog-widget-head">📖 Leia Também</div>
            <div class="blog-widget-body">`;

    final.forEach(a => {
        html += `
            <a href="${a.link}" class="blog-recent-item">
                <img src="${a.imagem}" class="blog-recent-img" alt="${a.titulo}" loading="lazy">
                <div>
                    <p class="blog-recent-title">${a.titulo}</p>
                    <span class="blog-recent-date">${a.data}</span>
                </div>
            </a>`;
    });

    html += `</div></div>`;
    el.innerHTML = html;
}

function renderizarArquivoBlog() {
    const el = document.getElementById('arquivo-blog-container');
    if (!el || artigos.length === 0) return;

    const arquivo = {};
    artigos.forEach(a => {
        if (!a.data) return;
        const partes = a.data.toLowerCase().split(' ');
        const mesNome = partes[2];
        const ano     = partes[4];
        const mes     = mesNome ? mesNome.charAt(0).toUpperCase() + mesNome.slice(1) : '?';
        if (ano && mes) {
            if (!arquivo[ano]) arquivo[ano] = {};
            if (!arquivo[ano][mes]) arquivo[ano][mes] = [];
            arquivo[ano][mes].push(a);
        }
    });

    const anos = Object.keys(arquivo).sort((a, b) => b - a);

    let html = `
        <div class="blog-widget">
            <div class="blog-widget-head">📅 Arquivo</div>
            <div class="blog-widget-body" id="arquivo-body" style="padding:0;">`;

    anos.forEach(ano => {
        const totalAno = Object.values(arquivo[ano]).reduce((s, arr) => s + arr.length, 0);
        html += `
            <div class="blog-arq-ano" onclick="this.classList.toggle('open')">
                <span><i class="fa fa-folder" style="margin-right:6px;"></i> <b>${ano}</b></span>
                <span class="blog-arq-count">${totalAno}</span>
            </div>
            <div class="blog-arq-meses">`;

        Object.keys(arquivo[ano]).forEach(mes => {
            const posts = arquivo[ano][mes];
            html += `
                <div class="blog-arq-mes" onclick="event.stopPropagation(); this.classList.toggle('open')">
                    <i class="fa fa-calendar-alt" style="margin-right:4px;font-size:.7rem;"></i> ${mes}
                    <span class="blog-arq-count" style="font-size:.7rem;">${posts.length}</span>
                </div>
                <div class="blog-arq-posts">
                    ${posts.map(p => `<a href="${p.link}" class="blog-arq-link">• ${p.titulo}</a>`).join('')}
                </div>`;
        });

        html += `</div>`;
    });

    html += `</div></div>`;
    el.innerHTML = html;
}

function renderizarSecaoViagens() {
    const el = document.getElementById('viagens-container');
    if (!el) return;

    fetch('../blog/galeria.json')
        .then(r => r.ok ? r.json() : Promise.reject())
        .then(fotos => {
            let html = `
                <div class="blog-widget">
                    <div class="blog-widget-head">📷 Por aí...</div>
                    <div class="blog-galeria-grid">`;

            fotos.forEach(foto => {
                html += `
                    <img src="${foto.url}" alt="${foto.legenda}" class="blog-galeria-img"
                         onclick="abrirModalGaleria('${foto.url}', '${foto.legenda}')" loading="lazy">`;
            });

            html += `</div></div>`;
            el.innerHTML = html;
        })
        .catch(() => {});
}

/* ──────────────────────────────────────────────────────────────────
   UTILITÁRIOS
────────────────────────────────────────────────────────────────── */
function abrirModalGaleria(url, legenda) {
    document.getElementById('img-modal').src       = url;
    document.getElementById('legenda-modal').innerText = legenda;
    document.getElementById('modal-galeria').style.display = 'block';
}

function carregarComentariosFacebook() {
    const el = document.getElementById('comentarios-fb');
    if (!el) return;
    el.innerHTML = `<div class="fb-comments" data-href="${window.location.href}" data-width="100%" data-numposts="10"></div>`;
    if (typeof FB !== 'undefined') FB.XFBML.parse();
}

// Funções legadas de artigos individuais (mantidas para compatibilidade)
function renderizarTitulosAutomaticos(artigos) {
    const nome = window.location.pathname.split('/').pop();
    const a = artigos.find(x => x.link.includes(nome));
    if (!a) return;
    const el = document.getElementById('aba-titulo');
    if (el) el.innerText = a.titulo;
    const t = document.getElementById('artigo-titulo-principal');
    if (t) t.innerHTML = `<b>${a.titulo}</b>`;
}
function toggleDropdown(id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.style.display = el.style.display === 'block' ? 'none' : 'block';
    if (el.style.display === 'none') closeAllNestedDropdowns();
}
function toggleYearDropdown(e, id) { e.stopPropagation(); closeAllNestedDropdowns(); toggleNestedDropdown(e, id); }
function toggleNestedDropdown(e, id) {
    e.stopPropagation();
    const el = document.getElementById(id);
    if (!el) return;
    el.style.display = el.style.display === 'block' ? 'none' : 'block';
}
function closeAllNestedDropdowns() {
    document.querySelectorAll('.nested-dropdown-content').forEach(el => el.style.display = 'none');
}

// Inicia tudo
carregarDadosDoArquivo();
