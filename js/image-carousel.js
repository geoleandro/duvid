/* =====================================================
   image-carousel.js — Carrossel de imagens Clean Pixel

   Como usar:
   1. Defina window.CAROUSEL_IMAGES antes de carregar este script:
        window.CAROUSEL_IMAGES = [
          { src: 'foto1.png', titulo: 'Chapada', legenda: 'Relevo tabular...' },
          ...
        ];
      (opcional) window.CAROUSEL_TITLE = 'Formas de relevo';
   2. Adicione ao HTML:
        <div id="image-carousel-root"></div>
   3. O carrossel monta a si mesmo automaticamente.
   ===================================================== */

(function () {

    let current = 0;
    let images = [];
    let autoTimer = null;

    function mount() {
        const root = document.getElementById('image-carousel-root');
        if (!root) return;

        images = (window.CAROUSEL_IMAGES && window.CAROUSEL_IMAGES.length) ? window.CAROUSEL_IMAGES : [];
        if (!images.length) {
            console.warn('[image-carousel.js] window.CAROUSEL_IMAGES vazio ou não definido.');
            return;
        }

        const title = window.CAROUSEL_TITLE || '';

        root.innerHTML = `
        <div class="ic-wrap">
            ${title ? `<div class="ic-title">${_esc(title)}</div>` : ''}
            <div class="ic-stage" id="ic-stage">
                <div class="ic-track" id="ic-track">
                    ${images.map((img, i) => `
                        <div class="ic-slide" data-idx="${i}">
                            <img src="${_esc(img.src)}" alt="${_esc(img.titulo || img.alt || '')}" loading="${i === 0 ? 'eager' : 'lazy'}">
                            <div class="ic-caption">
                                ${img.titulo ? `<div class="ic-cap-titulo">${_esc(img.titulo)}</div>` : ''}
                                ${img.legenda ? `<div class="ic-cap-legenda">${_esc(img.legenda)}</div>` : ''}
                            </div>
                        </div>
                    `).join('')}
                </div>

                <button class="ic-arrow ic-arrow-prev" id="ic-prev" aria-label="Imagem anterior">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </button>
                <button class="ic-arrow ic-arrow-next" id="ic-next" aria-label="Próxima imagem">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>

                <div class="ic-counter" id="ic-counter">1 / ${images.length}</div>
            </div>

            <div class="ic-dots" id="ic-dots">
                ${images.map((_, i) => `<button class="ic-dot" data-idx="${i}" aria-label="Ir para imagem ${i + 1}"></button>`).join('')}
            </div>
        </div>`;

        document.getElementById('ic-prev').addEventListener('click', () => goTo(current - 1));
        document.getElementById('ic-next').addEventListener('click', () => goTo(current + 1));
        root.querySelectorAll('.ic-dot').forEach(dot => {
            dot.addEventListener('click', () => goTo(parseInt(dot.dataset.idx, 10)));
        });

        // Swipe (touch)
        const stage = document.getElementById('ic-stage');
        let touchStartX = 0;
        stage.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
        stage.addEventListener('touchend', e => {
            const dx = e.changedTouches[0].clientX - touchStartX;
            if (Math.abs(dx) > 40) goTo(current + (dx < 0 ? 1 : -1));
        }, { passive: true });

        // Teclado (quando o carrossel está em foco/hover)
        stage.setAttribute('tabindex', '0');
        stage.addEventListener('keydown', e => {
            if (e.key === 'ArrowRight') goTo(current + 1);
            if (e.key === 'ArrowLeft') goTo(current - 1);
        });

        // Autoplay suave, pausa no hover/touch
        startAutoplay();
        stage.addEventListener('mouseenter', stopAutoplay);
        stage.addEventListener('mouseleave', startAutoplay);

        render();
    }

    function goTo(idx) {
        current = (idx + images.length) % images.length;
        render();
        restartAutoplay();
    }

    function render() {
        const track = document.getElementById('ic-track');
        const counter = document.getElementById('ic-counter');
        if (!track) return;
        track.style.transform = `translateX(-${current * 100}%)`;
        counter.textContent = `${current + 1} / ${images.length}`;
        document.querySelectorAll('.ic-dot').forEach((dot, i) => {
            dot.classList.toggle('ic-dot-ativo', i === current);
        });
    }

    function startAutoplay() {
        if (images.length < 2) return;
        stopAutoplay();
        autoTimer = setInterval(() => goToSilent(current + 1), 4500);
    }
    function stopAutoplay() {
        if (autoTimer) clearInterval(autoTimer);
        autoTimer = null;
    }
    function restartAutoplay() {
        stopAutoplay();
        startAutoplay();
    }
    function goToSilent(idx) {
        current = (idx + images.length) % images.length;
        render();
    }

    function _esc(str) {
        return String(str || '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', mount);
    } else {
        mount();
    }

})();
