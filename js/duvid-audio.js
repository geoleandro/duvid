// ============================================================
// DUVID AUDIO — motor de áudio unificado (Howler.js)
// Ref: docs/PROMPT-AUDIO-SYSTEM.md
// ============================================================
// Este arquivo é incluído em ~90 páginas do site (aulas, questões,
// simulados, home, atividades). Por isso ele:
//   1) Nunca lança erro que quebre a página (tudo com try/catch).
//   2) Mantém as funções globais antigas (playSom, playSomFinal,
//      playSomCombo, playSomDica, toggleSom, somEstaMudo) — o
//      restante do site chama essas funções diretamente.
//   3) Carrega o Howler.js sozinho via CDN (não precisa editar as
//      90 páginas para adicionar a tag <script> do Howler).
//
// Nova API recomendada para código novo:
//   DuvidAudio.tocar('acerto')     — toca efeito por id
//   DuvidAudio.musica('estudo')   — inicia trilha em loop (estudo/quiz/home)
//   DuvidAudio.pararMusica()      — para a trilha atual
//   DuvidAudio.mudo(true/false)   — liga/desliga tudo
//   DuvidAudio.volume(0.0 a 1.0)  — volume geral (master)
//   DuvidAudio.estaAtivo()        — true se o som está ligado
// ============================================================

(function () {
    'use strict';

    // --- 1. CATÁLOGO DE SONS -----------------------------------------
    // Sons que já existem no site (pasta /audios/ — mantida onde está,
    // pois estilos/dialogo*.js e paginas/sobre.php também apontam pra lá).
    // Sons novos do catálogo (docs/PROMPT-AUDIO-SYSTEM.md §2) apontam pra
    // /audio/fx/ e /audio/music/ — ainda sem arquivo. Tocam em silêncio
    // (fallback) até você gerar os arquivos no sfxr.me/freesound e colocar
    // nessas pastas. Nada quebra por eles não existirem ainda.
    const FX = {
        // já existentes
        acerto: ['/audios/acerto1.mp3', '/audios/acerto2.mp3', '/audios/acerto3.mp3', '/audios/acerto4.mp3'],
        erro: ['/audios/erro1.mp3', '/audios/erro2.mp3', '/audios/erro3.mp3', '/audios/erro4.mp3'],
        combo: ['/audios/combo.mp3'],
        dica: ['/audios/dica.mp3'],
        inicio: ['/audios/inicioNome.mp3'],
        suporte: ['/audios/suporte.mp3'],
        clique: ['/audios/click.mp3'],
        finalBom: ['/audios/notaFinal.mp3'],
        finalRuim: ['/audios/notaFinal2.mp3'],

        // catálogo novo — aguardando arquivos
        hover: ['/audio/fx/hover.webm', '/audio/fx/hover.mp3'],
        'menu-abrir': ['/audio/fx/menu-abrir.webm', '/audio/fx/menu-abrir.mp3'],
        'menu-fechar': ['/audio/fx/menu-fechar.webm', '/audio/fx/menu-fechar.mp3'],
        'modal-abrir': ['/audio/fx/modal-abrir.webm', '/audio/fx/modal-abrir.mp3'],
        'modal-fechar': ['/audio/fx/modal-fechar.webm', '/audio/fx/modal-fechar.mp3'],
        'tab-mudar': ['/audio/fx/tab-mudar.webm', '/audio/fx/tab-mudar.mp3'],

        'xp-ganho': ['/audio/fx/xp-ganho.webm', '/audio/fx/xp-ganho.mp3'],
        'nivel-up': ['/audio/fx/nivel-up.webm', '/audio/fx/nivel-up.mp3'],
        conquista: ['/audio/fx/conquista.webm', '/audio/fx/conquista.mp3'],
        streak: ['/audio/fx/streak.webm', '/audio/fx/streak.mp3'],
        'turma-xp': ['/audio/fx/turma-xp.webm', '/audio/fx/turma-xp.mp3'],

        selecionar: ['/audio/fx/selecionar.webm', '/audio/fx/selecionar.mp3'],
        enviar: ['/audio/fx/enviar.webm', '/audio/fx/enviar.mp3'],
        'timer-aviso': ['/audio/fx/timer-aviso.webm', '/audio/fx/timer-aviso.mp3'],
        'simulado-fim': ['/audio/fx/simulado-fim.webm', '/audio/fx/simulado-fim.mp3'],

        'globinho-oi': ['/audio/fx/globinho-oi.webm', '/audio/fx/globinho-oi.mp3'],
        'globinho-incentivo': ['/audio/fx/globinho-incentivo.webm', '/audio/fx/globinho-incentivo.mp3'],
        'bau-abrir': ['/audio/fx/bau-abrir.webm', '/audio/fx/bau-abrir.mp3'],
    };

    const MUSICA = {
        estudo: ['/audio/music/musica-estudo.webm', '/audio/music/musica-estudo.mp3'],
        quiz: ['/audio/music/musica-quiz.webm', '/audio/music/musica-quiz.mp3'],
        home: ['/audio/music/musica-home.webm', '/audio/music/musica-home.mp3'],
    };

    // Volume "base" de cada som/categoria (docs/PROMPT-AUDIO-SYSTEM.md §5).
    // O volume geral (slider do usuário) multiplica em cima disso via Howler.volume().
    const VOL_BASE = {
        erro: 0.4,
        finalBom: 0.6, finalRuim: 0.5,
        'xp-ganho': 0.7, 'nivel-up': 0.8, conquista: 0.8, streak: 0.7, 'turma-xp': 0.6,
        _fxPadrao: 0.45,
        _musicaPadrao: 0.2,
    };
    function volumeBaseDe(id) {
        return (id in VOL_BASE) ? VOL_BASE[id] : VOL_BASE._fxPadrao;
    }

    // --- 2. CARREGAMENTO DO HOWLER (sozinho, sem precisar editar as páginas) ---
    let _howlerPronto = (typeof window.Howl !== 'undefined' && typeof window.Howler !== 'undefined');
    let _filaEspera = [];

    function _comHowler(callback) {
        if (_howlerPronto) { try { callback(); } catch (e) {} return; }
        _filaEspera.push(callback);
        if (document.getElementById('duvid-howler-cdn')) return; // já está carregando
        try {
            const s = document.createElement('script');
            s.id = 'duvid-howler-cdn';
            s.src = 'https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.4/howler.min.js';
            s.onload = function () {
                _howlerPronto = true;
                const fila = _filaEspera.splice(0);
                fila.forEach(function (fn) { try { fn(); } catch (e) {} });
            };
            s.onerror = function () { /* sem internet/CDN bloqueado — áudio fica em silêncio, nunca quebra a página */ };
            document.head.appendChild(s);
        } catch (e) {}
    }

    // --- 3. ESTADO --------------------------------------------------------
    const _howls = {};   // Howl único por id (sons sem variação)
    const _pools = {};   // Howl[] por id (sons com variação, ex: acerto1..4)
    let _musicaAtual = null;
    let _musicaAtualId = null;
    let _volumeGeral = 1.0;
    let _mudo = false;
    let _jaInicializou = false;

    function _carregarPreferencias() {
        try {
            _mudo = (localStorage.getItem('duvid_audio_mudo') === '1') ||
                    (localStorage.getItem('duvid_som_muto') === '1'); // compat com chave antiga
        } catch (e) {}
        try {
            const v = parseFloat(localStorage.getItem('duvid_audio_volume'));
            if (!isNaN(v) && v >= 0 && v <= 1) _volumeGeral = v;
        } catch (e) {}
    }
    function _salvarMudo() {
        try { localStorage.setItem('duvid_audio_mudo', _mudo ? '1' : '0'); } catch (e) {}
        try { localStorage.setItem('duvid_som_muto', _mudo ? '1' : '0'); } catch (e) {} // compat
    }
    function _salvarVolume() {
        try { localStorage.setItem('duvid_audio_volume', String(_volumeGeral)); } catch (e) {}
    }

    function _getHowl(id) {
        if (_howls[id]) return _howls[id];
        const src = FX[id];
        if (!src) return null;
        const h = new Howl({
            src: src,
            volume: volumeBaseDe(id),
            onloaderror: function () { /* som ainda não existe — normal para o catálogo novo */ },
        });
        _howls[id] = h;
        return h;
    }

    // Para ids com várias variações (acerto1..4, erro1..4) sorteia uma —
    // preserva o comportamento do sistema antigo.
    function _getHowlVariacao(id) {
        const lista = FX[id];
        if (!Array.isArray(lista) || lista.length <= 1) return null;
        if (!_pools[id]) {
            _pools[id] = lista.map(function (arq) {
                return new Howl({ src: [arq], volume: volumeBaseDe(id), onloaderror: function () {} });
            });
        }
        const pool = _pools[id];
        return pool[Math.floor(Math.random() * pool.length)];
    }

    // --- 4. API PÚBLICA ----------------------------------------------------
    const DuvidAudio = {

        // Prepara o áudio na 1ª interação do usuário (exigência dos browsers).
        inicializar: function () {
            if (_jaInicializou) return;
            _jaInicializou = true;
            _comHowler(function () {
                try { if (Howler.ctx && Howler.ctx.state === 'suspended') Howler.ctx.resume(); } catch (e) {}
                try { Howler.mute(_mudo); } catch (e) {}
                try { Howler.volume(_volumeGeral); } catch (e) {}
            });
        },

        tocar: function (id) {
            if (_mudo) return;
            this.inicializar();
            _comHowler(function () {
                try {
                    const h = _getHowlVariacao(id) || _getHowl(id);
                    if (h) h.play();
                } catch (e) {}
            });
        },

        musica: function (id) {
            this.inicializar();
            _comHowler(function () {
                try {
                    if (_musicaAtualId === id && _musicaAtual) return; // já tocando essa trilha
                    DuvidAudio.pararMusica();
                    const src = MUSICA[id];
                    if (!src) return;
                    const m = new Howl({
                        src: src, loop: true, volume: volumeBaseDe('_musicaPadrao'),
                        onloaderror: function () {},
                    });
                    _musicaAtual = m;
                    _musicaAtualId = id;
                    m.play();
                } catch (e) {}
            });
        },

        pararMusica: function () {
            try { if (_musicaAtual) _musicaAtual.stop(); } catch (e) {}
            _musicaAtual = null;
            _musicaAtualId = null;
        },

        mudo: function (v) {
            _mudo = !!v;
            _salvarMudo();
            _comHowler(function () { try { Howler.mute(_mudo); } catch (e) {} });
            try { document.dispatchEvent(new CustomEvent('duvid-audio-mudo-changed', { detail: { mudo: _mudo } })); } catch (e) {}
            return _mudo;
        },
        toggleMudo: function () { return this.mudo(!_mudo); },

        volume: function (v) {
            if (typeof v === 'number' && v >= 0 && v <= 1) {
                _volumeGeral = v;
                _salvarVolume();
                _comHowler(function () { try { Howler.volume(v); } catch (e) {} });
                try { document.dispatchEvent(new CustomEvent('duvid-audio-volume-changed', { detail: { volume: v } })); } catch (e) {}
            }
            return _volumeGeral;
        },

        estaAtivo: function () { return !_mudo; },
        estaMudo: function () { return _mudo; },

        // ---- compat com a API antiga (não remover) ----
        play: function (tipo) { this.tocar(tipo); },
        playResultadoFinal: function (vitoria) { this.tocar(vitoria ? 'finalBom' : 'finalRuim'); },
        setMuto: function (v) { return this.mudo(v); },
        toggleMuto: function () { return this.toggleMudo(); },
    };

    _carregarPreferencias();

    document.addEventListener('click', function () { DuvidAudio.inicializar(); }, { once: true });
    document.addEventListener('touchstart', function () { DuvidAudio.inicializar(); }, { once: true, passive: true });

    // --- 5. COMPATIBILIDADE GLOBAL (usado em ~90 páginas — não remover) ----
    window.DuvidAudio = DuvidAudio;
    window.playSom = function (tipo) { DuvidAudio.tocar(tipo); };
    window.playSomFinal = function (vitoria) { DuvidAudio.playResultadoFinal(vitoria); };
    window.playSomCombo = function () { DuvidAudio.tocar('combo'); };
    window.playSomDica = function () { DuvidAudio.tocar('dica'); };
    window.toggleSom = function () { return DuvidAudio.toggleMudo(); };
    window.somEstaMudo = function () { return DuvidAudio.estaMudo(); };
    window.playSomInicio = function () { DuvidAudio.tocar('inicio'); };

    // --- 6. BOTÃO FLUTUANTE DE CONTROLE (injetado via JS, não no PHP) ------
    function _injetarBotaoFlutuante() {
        if (document.getElementById('duvid-audio-float')) return;

        const wrap = document.createElement('div');
        wrap.id = 'duvid-audio-float';
        wrap.innerHTML =
            '<button id="duvid-audio-float-btn" type="button" aria-label="Controle de som" title="Som">' +
                '<span class="icone">' + (_mudo ? '🔇' : '🔊') + '</span>' +
            '</button>' +
            '<div id="duvid-audio-float-painel" class="fechado">' +
                '<button id="duvid-audio-float-mudo" type="button" title="Ligar/desligar som">' + (_mudo ? '🔇' : '🔊') + '</button>' +
                '<input type="range" id="duvid-audio-float-slider" min="0" max="100" step="5" value="' + Math.round(_volumeGeral * 100) + '">' +
            '</div>';

        const estilo = document.createElement('style');
        estilo.textContent =
            '#duvid-audio-float{position:fixed;right:16px;bottom:16px;z-index:9999;font-family:inherit}' +
            '#duvid-audio-float-btn{width:44px;height:44px;border-radius:50%;border:none;background:#2e7d32;color:#fff;font-size:18px;cursor:pointer;box-shadow:0 4px 12px rgba(0,0,0,.2);display:flex;align-items:center;justify-content:center}' +
            '#duvid-audio-float-painel{position:absolute;bottom:52px;right:0;background:#fff;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.15);padding:8px 12px;display:flex;align-items:center;gap:8px}' +
            '#duvid-audio-float-painel.fechado{display:none}' +
            '#duvid-audio-float-mudo{border:none;background:transparent;font-size:16px;cursor:pointer}' +
            '#duvid-audio-float-slider{width:100px}' +
            '@media (max-width:420px){#duvid-audio-float{right:10px;bottom:10px}}';
        document.head.appendChild(estilo);
        document.body.appendChild(wrap);

        const btn = wrap.querySelector('#duvid-audio-float-btn');
        const icone = wrap.querySelector('.icone');
        const painel = wrap.querySelector('#duvid-audio-float-painel');
        const btnMudo = wrap.querySelector('#duvid-audio-float-mudo');
        const slider = wrap.querySelector('#duvid-audio-float-slider');

        function atualizarIcones() {
            const simbolo = DuvidAudio.estaMudo() ? '🔇' : '🔊';
            icone.textContent = simbolo;
            btnMudo.textContent = simbolo;
        }

        btn.addEventListener('click', function () {
            painel.classList.toggle('fechado');
        });
        btnMudo.addEventListener('click', function () {
            DuvidAudio.toggleMudo();
            atualizarIcones();
        });
        slider.addEventListener('input', function () {
            DuvidAudio.volume(parseInt(slider.value, 10) / 100);
        });
        document.addEventListener('duvid-audio-mudo-changed', atualizarIcones);
        document.addEventListener('click', function (e) {
            if (!wrap.contains(e.target)) painel.classList.add('fechado');
        });

        // Banner de desbloqueio no iOS (só aparece se o som estiver ligado)
        const ehIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
        if (ehIOS && !_mudo) {
            const banner = document.createElement('div');
            banner.id = 'duvid-audio-banner-ios';
            banner.textContent = '🔊 Toque para ativar o som';
            banner.style.cssText = 'position:fixed;left:50%;top:10px;transform:translateX(-50%);background:#2e7d32;color:#fff;padding:6px 14px;border-radius:20px;font-size:13px;z-index:9999;box-shadow:0 2px 8px rgba(0,0,0,.2)';
            document.body.appendChild(banner);
            const remover = function () { banner.remove(); };
            document.addEventListener('click', remover, { once: true });
            setTimeout(remover, 6000);
        }
    }

    // Botão flutuante desativado — controle de som está na navbar
    // _injetarBotaoFlutuante();

})();
