/**
 * texto-painel.js — Painel lateral das páginas de texto/aula
 *
 * O que faz (em DOMContentLoaded):
 *   1. Transforma <main> em flex row:  article.texto-content | aside.texto-painel
 *   2. Injeta hero image com badges (Unidade + tempo de leitura) via JSON
 *   3. Constrói checklist de seções + barra de progresso no painel
 *   4. Carrega "Próxima Parada" (próxima aula do módulo) do JSON
 *   5. Expõe window.compartilharAula() para o botão do painel
 *
 * Compatibilidade:
 *   - Não conflita com jstextos-padrao.js (que roda antes e preenche #h1 etc.)
 *   - Precisa: DuvidCache (duvid-cache.js), FontAwesome
 *   - Adicionar no <head> APÓS jstextos-padrao.js
 */
(function () {
    'use strict';

    // ── Ponto de entrada ─────────────────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', function () {
        reestruturarLayout();
    });

    // ── 1. Reestrutura o <main> ───────────────────────────────────────────────
    function reestruturarLayout() {
        var main = document.querySelector('main');
        if (!main) return;

        // 1a. Hero full-width no topo
        var heroSlot = document.createElement('div');
        heroSlot.id = 'texto-hero-slot';
        heroSlot.className = 'texto-hero-skeleton';

        // Move todos os filhos de <main> para o inner temporário
        var inner = document.createElement('div');
        inner.className = 'texto-content-inner';
        while (main.firstChild) {
            inner.appendChild(main.firstChild);
        }

        // Extrai os links/referências bibliográficas do fim da aula: eles não
        // fazem parte do conteúdo pedagógico e não devem ficar cinza quando
        // a aula é finalizada (aplicarEstadoFinalAula só afeta .texto-content-inner)
        var biblioEl = inner.querySelector('.bibliografias, #final-da-aula');
        if (biblioEl) {
            biblioEl.parentNode.removeChild(biblioEl);
        }

        // 1b. Extrai painel de áudio → player customizado Clean Pixel
        var audioPanel = inner.querySelector('.w3-panel.w3-leftbar.w3-border-green');
        var coluna = document.createElement('div');
        coluna.className = 'texto-coluna';

        if (audioPanel) {
            audioPanel.parentNode.removeChild(audioPanel);
            var playerCard = construirAudioPlayer(audioPanel);
            if (playerCard) coluna.appendChild(playerCard);
        }

        // 1c. Article com o restante do conteúdo
        var article = document.createElement('article');
        article.className = 'texto-content';
        article.appendChild(inner);
        coluna.appendChild(article);

        // Referências bibliográficas: ficam na mesma coluna (mesma largura/margem
        // do conteúdo), mas FORA do article/.texto-content-inner → não pegam o
        // modo cinza de aula concluída (que só afeta .texto-content-inner)
        if (biblioEl) {
            coluna.appendChild(biblioEl);
        }

        // 1d. Body row: coluna esquerda + painel lateral
        var bodyRow = document.createElement('div');
        bodyRow.className = 'texto-body-row';
        var aside = criarPainel();
        bodyRow.appendChild(coluna);
        bodyRow.appendChild(aside);

        // Reconfigura main
        ['w3-content', 'w3-white', 'w3-card-2', 'w3-padding-large', 'w3-margin-bottom'].forEach(function (c) {
            main.classList.remove(c);
        });
        main.removeAttribute('style');
        main.classList.add('texto-layout');

        // Estrutura final: hero (topo full-width) → body-row (coluna + painel)
        main.appendChild(heroSlot);
        main.appendChild(bodyRow);

        iniciarProgresso();
        carregarDadosAula();
        enhancePerguntaBlocos();
    }

    // ── 2. Monta o HTML do painel lateral ────────────────────────────────────
    function criarPainel() {
        // Links do Google Play por ano (deteta do pathname)
        var APP_LINKS = {
            '1': 'https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid1ano',
            '2': 'https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid2',
            '3': 'https://play.google.com/store/apps/details?id=br.com.duvid'
        };
        var anoM    = (window.location.pathname.match(/\/(\d)ano\//i) || [])[1] || '1';
        var appHref = APP_LINKS[anoM] || APP_LINKS['1'];

        var aside = document.createElement('aside');
        aside.className = 'texto-painel';
        aside.innerHTML =
            /* Card de progresso com stepper */
            '<div class="tp-card">' +
                '<div class="tp-progress-header">' +
                    '<span class="tp-titulo-progresso">Progresso da Aula</span>' +
                    '<span class="tp-pct-label" id="tp-pct">0% concluído</span>' +
                '</div>' +
                '<div class="tp-prog-bar-wrap"><div class="tp-prog-bar" id="tp-bar"></div></div>' +
                '<ul class="tp-stepper" id="tp-checklist"></ul>' +
            '</div>' +

            /* Globinhos ganhos nesta aula */
            '<div class="tp-card tp-card-globinhos">' +
                '<div class="tp-glob-row">' +
                    '<img src="/fotoIndex/globinhoPe.png" class="tp-glob-icon" alt="Globinho">' +
                    '<div class="tp-glob-info">' +
                        '<span class="tp-glob-label">Globinhos desta aula</span>' +
                        '<span class="tp-glob-val" id="tp-glob-val">0</span>' +
                    '</div>' +
                '</div>' +
            '</div>' +

            /* Botões de ação */
            '<div class="tp-card tp-card-acoes">' +
                '<a class="tp-btn tp-btn-offline" href="' + appHref + '" target="_blank" rel="noopener">' +
                    '<i class="fab fa-google-play"></i>' +
                    '<i class="fab fa-apple"></i>' +
                    ' App Offline' +
                '</a>' +
                '<button class="tp-btn tp-btn-share" onclick="compartilharAula()">' +
                    '<i class="fa fa-share-alt"></i> Indicar para Amigo' +
                '</button>' +
            '</div>' +

            /* Próxima parada */
            '<div id="tp-proxima">' +
                '<div id="tp-proxima-corpo">' +
                    '<div class="tp-nav-skeleton">Carregando...</div>' +
                '</div>' +
            '</div>' +

            /* Questões — mini-game */
            '<a href="#" id="tp-link-q" class="tp-nav-card tp-nav-questoes">' +
                '<div class="tp-nav-icon"><i class="fa fa-pencil"></i></div>' +
                '<div class="tp-nav-text">' +
                    '<div class="tp-nav-label">Hora de praticar</div>' +
                    '<div class="tp-nav-titulo">Fazer Questões →</div>' +
                '</div>' +
            '</a>';

        return aside;
    }

    // ── Globinhos da aula — atualiza o card sempre que XP for ganho ──────────
    function atualizarGlobinhosPanel() {
        var el = document.getElementById('tp-glob-val');
        if (!el) return;
        var val = Math.floor(window.ganhosAtuais || 0);
        if (parseInt(el.textContent) === val) return;
        el.textContent = '+' + val;
        // Pulsa brevemente para chamar atenção
        el.classList.remove('tp-glob-animado');
        void el.offsetWidth; // reflow para reiniciar animação
        el.classList.add('tp-glob-animado');
    }

    // Intercepta DuvidUI.atualizarInterface para atualizar o card junto
    function hookGlobinhosUpdate() {
        if (typeof DuvidUI === 'undefined') {
            setTimeout(hookGlobinhosUpdate, 200);
            return;
        }
        var orig = DuvidUI.atualizarInterface.bind(DuvidUI);
        DuvidUI.atualizarInterface = function () {
            orig();
            atualizarGlobinhosPanel();
        };
        // Atualiza imediatamente caso já haja ganhos
        atualizarGlobinhosPanel();
    }
    hookGlobinhosUpdate();

    // ── 2b. Player de áudio customizado Clean Pixel ──────────────────────────

    var AP_PLAY  = '<svg class="ap-svg" viewBox="0 0 12 14" shape-rendering="crispEdges" fill="currentColor"><polygon points="0,0 0,14 12,7"/></svg>';
    var AP_PAUSE = '<svg class="ap-svg" viewBox="0 0 12 14" shape-rendering="crispEdges" fill="currentColor"><rect x="0" y="0" width="4" height="14"/><rect x="8" y="0" width="4" height="14"/></svg>';
    var AP_BACK  = '<svg class="ap-svg" viewBox="0 0 14 14" shape-rendering="crispEdges" fill="currentColor"><rect x="0" y="1" width="2" height="12"/><polygon points="13,1 5,7 13,13"/></svg>';
    var AP_FWD   = '<svg class="ap-svg" viewBox="0 0 14 14" shape-rendering="crispEdges" fill="currentColor"><rect x="12" y="1" width="2" height="12"/><polygon points="1,1 9,7 1,13"/></svg>';

    function construirAudioPlayer(audioPanel) {
        // Pega o elemento <audio> original (mantém no DOM para compatibilidade com jstextos-padrao.js)
        var audioEl = audioPanel.querySelector('audio');
        if (!audioEl) return null;

        // Esconde controles nativos, mantém funcional
        audioEl.removeAttribute('controls');
        audioEl.style.cssText = 'position:absolute;width:1px;height:1px;opacity:0;pointer-events:none;overflow:hidden;';

        var card = document.createElement('div');
        card.className = 'texto-audio-card';

        card.innerHTML =
            '<div class="ap-inner">' +
                // Info: ícone + título + subtítulo
                '<div class="ap-info">' +
                    '<div class="ap-icon-wrap">' +
                        '<i class="fa fa-headphones"></i>' +
                    '</div>' +
                    '<div class="ap-labels">' +
                        '<span class="ap-titulo">OUVIR AULA</span>' +
                        '<span class="ap-subtitulo">Escute enquanto explora o material</span>' +
                    '</div>' +
                '</div>' +
                '<div class="ap-sep"></div>' +
                // Controles: botões + seeker
                '<div class="ap-controls">' +
                    '<div class="ap-buttons">' +
                        '<button class="ap-skip-btn" data-action="back" title="Voltar 10s">' +
                            AP_BACK + '<span class="ap-skip-label">10</span>' +
                        '</button>' +
                        '<button class="ap-play-btn" title="Play / Pause">' +
                            AP_PLAY +
                        '</button>' +
                        '<button class="ap-skip-btn" data-action="fwd" title="Avançar 10s">' +
                            '<span class="ap-skip-label">10</span>' + AP_FWD +
                        '</button>' +
                    '</div>' +
                    '<div class="ap-seeker-row">' +
                        '<span class="ap-time ap-time-cur">0:00</span>' +
                        '<div class="ap-track" role="slider" aria-label="Progresso do áudio" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" tabindex="0">' +
                            '<div class="ap-fill"></div>' +
                        '</div>' +
                        '<span class="ap-time ap-time-tot">–:––</span>' +
                    '</div>' +
                '</div>' +
            '</div>';

        // Appende o <audio> escondido ao card
        card.appendChild(audioEl);

        // Conecta os controles ao audio
        iniciarAudioPlayer(card, audioEl);

        return card;
    }

    function iniciarAudioPlayer(card, audioEl) {
        var playBtn  = card.querySelector('.ap-play-btn');
        var skipBtns = card.querySelectorAll('.ap-skip-btn');
        var track    = card.querySelector('.ap-track');
        var fill     = card.querySelector('.ap-fill');
        var timeCur  = card.querySelector('.ap-time-cur');
        var timeTot  = card.querySelector('.ap-time-tot');

        // Play / Pause
        playBtn.addEventListener('click', function () {
            if (audioEl.paused) { audioEl.play().catch(function(){}); }
            else { audioEl.pause(); }
        });

        audioEl.addEventListener('play',  function () {
            playBtn.innerHTML = AP_PAUSE;
            playBtn.classList.add('ap-playing');
        });
        audioEl.addEventListener('pause', function () {
            playBtn.innerHTML = AP_PLAY;
            playBtn.classList.remove('ap-playing');
        });
        audioEl.addEventListener('ended', function () {
            playBtn.innerHTML = AP_PLAY;
            playBtn.classList.remove('ap-playing');
            fill.style.width = '0%';
            timeCur.textContent = '0:00';
        });

        // Skip ±10s
        skipBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var delta = btn.dataset.action === 'fwd' ? 10 : -10;
                audioEl.currentTime = Math.max(0, Math.min(audioEl.duration || 0, audioEl.currentTime + delta));
            });
        });

        // Atualiza barra e timer
        audioEl.addEventListener('timeupdate', function () {
            if (!audioEl.duration) return;
            var pct = (audioEl.currentTime / audioEl.duration) * 100;
            fill.style.width = pct + '%';
            track.setAttribute('aria-valuenow', Math.round(pct));
            timeCur.textContent = formatarTempo(audioEl.currentTime);
        });

        audioEl.addEventListener('loadedmetadata', function () {
            timeTot.textContent = formatarTempo(audioEl.duration);
        });

        // Seeker — clique + drag (mouse e touch)
        var arrastando = false;

        function posicionar(clientX) {
            if (!audioEl.duration) return;
            var rect = track.getBoundingClientRect();
            var pct  = Math.max(0, Math.min(1, (clientX - rect.left) / rect.width));
            audioEl.currentTime = pct * audioEl.duration;
        }

        track.addEventListener('mousedown',  function (e) { arrastando = true; posicionar(e.clientX); e.preventDefault(); });
        document.addEventListener('mousemove', function (e) { if (arrastando) posicionar(e.clientX); });
        document.addEventListener('mouseup',   function ()  { arrastando = false; });

        track.addEventListener('touchstart', function (e) { arrastando = true; posicionar(e.touches[0].clientX); }, { passive: true });
        document.addEventListener('touchmove', function (e) { if (arrastando) posicionar(e.touches[0].clientX); }, { passive: true });
        document.addEventListener('touchend',  function ()  { arrastando = false; });

        // Keyboard (barra de espaço quando o seeker está focado)
        track.addEventListener('keydown', function (e) {
            if (e.key === ' ' || e.key === 'Enter') {
                if (audioEl.paused) audioEl.play().catch(function(){});
                else audioEl.pause();
                e.preventDefault();
            }
        });
    }

    function formatarTempo(seg) {
        if (isNaN(seg) || seg < 0) return '0:00';
        var m = Math.floor(seg / 60);
        var s = Math.floor(seg % 60);
        return m + ':' + (s < 10 ? '0' : '') + s;
    }

    // ── 3. Progresso: checklist + barra ──────────────────────────────────────
    function iniciarProgresso() {
        // Aguarda um frame para o DOM estabilizar
        requestAnimationFrame(function () {
            construirChecklist();
        });

        // Observa adição da classe 'mostrar' nos .topico
        var topicos = document.querySelectorAll('.topico');
        var obs = new MutationObserver(function () { atualizarProgresso(); });
        topicos.forEach(function (t) {
            obs.observe(t, { attributes: true, attributeFilter: ['class'] });
        });

        // Fallback via clique em botões "Próximo"
        document.addEventListener('click', function (e) {
            var btn = e.target.closest ? e.target.closest('.btnShow') : null;
            if (btn || e.target.classList.contains('btnShow')) {
                setTimeout(atualizarProgresso, 200);
            }
        });
    }

    function construirChecklist() {
        var ul = document.getElementById('tp-checklist');
        if (!ul) return;

        var topicos = document.querySelectorAll('.topico');
        if (!topicos.length) return;

        // Filtra: apenas tópicos com <h2> direto e sem classe pergunta-bloco.
        // Tópicos auxiliares (p.caixa, postit, blocos de questão) são ignorados.
        var secoes = [];
        topicos.forEach(function (t, i) {
            if (t.classList.contains('pergunta-bloco')) return;
            var h2 = t.querySelector('h2');
            if (h2) {
                h2.classList.add('tp-secao-numero');
                secoes.push({ el: t, idx: i, titulo: h2.textContent.trim() });
            }
        });

        var html = '';
        secoes.forEach(function (s, n) {
            var done   = s.el.classList.contains('mostrar');
            var estado = done ? 'tp-step-done' : 'tp-step-pending';
            var label  = (n + 1) + ' — ' + s.titulo; // "1 — Título"

            html +=
                '<li class="tp-step ' + estado + '" data-topico-idx="' + s.idx + '">' +
                    '<div class="tp-step-indicator">' +
                        '<div class="tp-step-dot"></div>' +
                        '<div class="tp-step-line"></div>' +
                    '</div>' +
                    '<span class="tp-step-label">' + _esc(label) + '</span>' +
                '</li>';
        });

        ul.innerHTML = html;
        atualizarProgresso();
    }

    function atualizarProgresso() {
        var topicos = document.querySelectorAll('.topico');
        var concluidos = 0;

        // Percentual conta todos os tópicos (topico 0 sempre concluído)
        topicos.forEach(function (t, i) {
            var done = (i === 0) || t.classList.contains('mostrar');
            if (done) concluidos++;

            // Atualiza step visual se existir no stepper
            var item = document.querySelector('.tp-step[data-topico-idx="' + i + '"]');
            if (item) {
                item.classList.remove('tp-step-done', 'tp-step-active', 'tp-step-pending');
                item.classList.add(done ? 'tp-step-done' : 'tp-step-pending');
            }
        });

        // Primeiro step pendente = ativo (próxima seção a ler)
        var firstPending = document.querySelector('.tp-step.tp-step-pending');
        if (firstPending) {
            firstPending.classList.remove('tp-step-pending');
            firstPending.classList.add('tp-step-active');
        }

        var total = topicos.length || 1;
        var pct   = Math.round((concluidos / total) * 100);

        var bar   = document.getElementById('tp-bar');
        var pctEl = document.getElementById('tp-pct');
        if (bar)   bar.style.width = pct + '%';
        if (pctEl) pctEl.textContent = pct + '% concluído';
    }

    // ── 4. Carrega JSON da aula para hero + próxima parada ───────────────────
    async function carregarDadosAula() {
        // Aguarda DuvidCache estar disponível (carregado via defer)
        for (var i = 0; i < 60; i++) {
            if (typeof DuvidCache !== 'undefined') break;
            await esperar(100);
        }
        if (typeof DuvidCache === 'undefined') return;

        var path = window.location.pathname;
        var anoMatch = path.match(/\/(\d)ano\//i);
        if (!anoMatch) return;

        var ano = anoMatch[1];
        var arquivo = path.split('/').pop();

        try {
            var aulas = await DuvidCache.get('/js/aulas-' + ano + 'ano.json');
            if (!Array.isArray(aulas)) return;

            var idx = aulas.findIndex(function (a) {
                return a.linkTexto && a.linkTexto.includes(arquivo);
            });
            if (idx < 0) return;

            var aula = aulas[idx];

            injetarHero(aula, ano);
            injetarProxima(aulas, idx);
            injetarLinkQuestoes(aula);

        } catch (e) {
            console.warn('[texto-painel]', e);
        }
    }

    function injetarHero(aula, ano) {
        var slot = document.getElementById('texto-hero-slot');
        if (!slot) return;

        // Estima tempo de leitura pelo texto completo (inclui tópicos ainda
        // ocultos por display:none — textContent não é afetado pela renderização,
        // diferente de innerText, que zeraria o que ainda não foi revelado).
        var innerEl = document.querySelector('.texto-content-inner');
        var palavras = innerEl ? (innerEl.textContent || '').trim().split(/\s+/).length : 0;
        var minutos = Math.max(1, Math.round(palavras / 180));

        var unidade = String(aula.id % 100).padStart(2, '0');

        slot.className = 'texto-hero';
        // Usa banner específico da página se definido; caso contrário o gradiente CSS assume
        if (window.DUVID_FUNDO_BANNER) slot.style.backgroundImage = "url('" + window.DUVID_FUNDO_BANNER + "')";

        slot.innerHTML =
            '<div class="texto-hero-overlay">' +
                '<div class="texto-hero-supra">Duvid Geografia</div>' +
                '<div class="texto-hero-badges">' +
                    '<span class="texto-badge texto-badge-green">Texto ' + unidade + '</span>' +
                    '<span class="texto-badge">🕐 ' + minutos + ' min de leitura</span>' +
                '</div>' +
                '<div class="texto-hero-title">' + _esc(aula.titulo) + '</div>' +
            '</div>';
    }

    function injetarProxima(aulas, idxAtual) {
        var corpo = document.getElementById('tp-proxima-corpo');
        if (!corpo) return;

        var proxima = idxAtual < aulas.length - 1 ? aulas[idxAtual + 1] : null;

        if (!proxima) {
            corpo.innerHTML =
                '<div class="tp-nav-card tp-nav-fim">' +
                    '<div class="tp-nav-icon"><i class="fa fa-trophy"></i></div>' +
                    '<div class="tp-nav-text">' +
                        '<div class="tp-nav-label">Módulo completo!</div>' +
                        '<div class="tp-nav-titulo">Você concluiu todas as aulas 🎉</div>' +
                    '</div>' +
                '</div>';
            return;
        }

        var link = (proxima.linkTexto || proxima.linkQuestoes || '#');
        if (link && link[0] !== '/' && link[0] !== '#') link = '/' + link;

        corpo.innerHTML =
            '<a href="' + link + '" class="tp-nav-card tp-nav-proxima">' +
                '<div class="tp-nav-icon"><i class="fa fa-map-marker"></i></div>' +
                '<div class="tp-nav-text">' +
                    '<div class="tp-nav-label">Próxima Parada</div>' +
                    '<div class="tp-nav-titulo">' + _esc(proxima.titulo) + ' →</div>' +
                '</div>' +
            '</a>';
    }

    function injetarLinkQuestoes(aula) {
        if (!aula.linkQuestoes) return;
        var linkEl = document.getElementById('tp-link-q');
        if (!linkEl) return;
        var href = aula.linkQuestoes;
        if (href[0] !== '/' && href[0] !== '#') href = '/' + href;
        linkEl.href = href;
    }

    // ── 5b. Questão Prática — Clean Pixel Challenge Card ──────────────────────
    function enhancePerguntaBlocos() {
        var blocos = document.querySelectorAll('.texto-content-inner .topico.pergunta-bloco');
        blocos.forEach(function(bloco) {

            // 1. Reconstrói o cabeçalho com ícone pixel + título
            var headerEl = bloco.querySelector('.w3-text-grey, .w3-small');
            if (headerEl) {
                headerEl.className = 'pq-header';
                headerEl.innerHTML =
                    '<span class="pq-icon-q" aria-hidden="true"></span>' +
                    '<span class="pq-titulo">Questão Prática</span>';
            }

            // 2. Marca o enunciado (primeiro parágrafo que não é header nem feedback)
            var paras = bloco.querySelectorAll('p');
            paras.forEach(function(p) {
                if (p.classList.contains('pq-header') || p.classList.contains('pq-xp-label')) return;
                if (p.id && p.id.startsWith('resp')) return; // área de feedback
                if (!p.closest('.grupo-respostas')) {
                    p.classList.add('pq-enunciado');
                }
            });

            // 3. Extrai XP do onclick e injeta label de recompensa
            var btn = bloco.querySelector('.btn-acao-duvid');
            if (btn) {
                var onclick = btn.getAttribute('onclick') || '';
                var xpMatch = onclick.match(/,\s*'(\d+)'\s*\)/);
                var xp = xpMatch ? xpMatch[1] : '10';

                var xpEl = document.createElement('p');
                xpEl.className = 'pq-xp-label';
                xpEl.textContent = 'RECOMPENSA: +' + xp + ' XP';
                btn.parentNode.insertBefore(xpEl, btn);
            }
        });
    }

    // ── 5. Compartilhar ───────────────────────────────────────────────────────
    window.compartilharAula = function () {
        var titulo = (document.getElementById('h1') || {}).textContent || document.title;
        var url = window.location.href;

        if (navigator.share) {
            navigator.share({ title: titulo, url: url });
        } else if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(function () {
                var toast = document.createElement('div');
                toast.style.cssText =
                    'position:fixed;bottom:24px;left:50%;transform:translateX(-50%);' +
                    'background:#333;color:#fff;padding:10px 20px;border-radius:100px;' +
                    'font-size:13px;z-index:9999;pointer-events:none;';
                toast.textContent = '🔗 Link copiado!';
                document.body.appendChild(toast);
                setTimeout(function () { toast.remove(); }, 2500);
            });
        }
    };

    // ── Utilitários ───────────────────────────────────────────────────────────
    function _esc(str) {
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    function esperar(ms) {
        return new Promise(function (resolve) { setTimeout(resolve, ms); });
    }

})();
