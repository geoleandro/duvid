// duvid-cache.js
// Cache central de JSONs — carrega cada arquivo só uma vez por sessão

// Base do projeto: detecta a partir do próprio src deste script (ou de qualquer
// script "duvid-*.js" na página). Isso resolve absolutamente, mesmo quando o
// site está hospedado em uma subpasta como /duvid/.
//
// IMPORTANTE: filtra só scripts da mesma origem da página, senão acabamos
// pegando o AdSense (pagead2.googlesyndication.com/pagead/js/adsbygoogle.js),
// Google Analytics, Font Awesome CDN etc. — qualquer script externo que
// também caiba no padrão /js/*.js.
window.DUVID_BASE = window.DUVID_BASE || (() => {
    const origin = window.location.origin;
    const scripts = document.querySelectorAll('script[src]');
    for (const s of scripts) {
        const src = s.src || '';
        if (!src.startsWith(origin)) continue; // ignora CDNs externas
        const m = src.match(/^(.*?)\/js\/[^/]+\.js(\?.*)?$/);
        if (m) return m[1] + '/';
    }
    return '/';
})();

// Resolve uma URL "relativa à raiz do projeto" para uma URL absoluta correta.
// Aceita "/foo/bar.json", "foo/bar.json" ou "./foo/bar.json".
window.duvidUrl = function (path) {
    if (!path) return path;
    // Se já é URL absoluta (http://, https://, //), devolve igual
    if (/^(https?:)?\/\//i.test(path)) return path;
    return window.DUVID_BASE + path.replace(/^\.?\//, '');
};

const DuvidCache = {
    _store: {},

    // Busca do cache ou faz fetch se ainda não tem
    async get(url) {
        const finalUrl = window.duvidUrl(url);
        if (this._store[finalUrl]) return this._store[finalUrl];

        const res = await fetch(finalUrl);
        if (!res.ok) throw new Error(`Falha ao carregar: ${finalUrl}`);

        const dados = await res.json();
        this._store[finalUrl] = dados; // guarda para próxima chamada
        return dados;
    },

    // Limpa uma entrada específica (útil se o conteúdo mudar)
    invalidar(url) {
        delete this._store[window.duvidUrl(url)];
    }
};