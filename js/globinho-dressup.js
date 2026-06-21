// =============================================================
//  globinho-dressup.js  —  v1.0
//
//  Componente "Globinho Dress Up" para o Duvid Geografia.
//  Drag & drop de acessórios temáticos sobre o Globinho.
//
//  Uso:
//    new GlobinhoDressUp(containerEl, 'cartografia', alunoId)
//
//  Ou via auto-init (delegado pelo DOMContentLoaded ao fim do arquivo):
//    <div class="globinho-dressup" data-tema="cartografia" data-aluno="42"></div>
// =============================================================

const DRESSUP_TEMAS = {
  cartografia: {
    label: 'Cartografia',
    cor: '#4a90d9',
    itens: [
      { id: 'bussola', nome: 'Bússola',  emoji: '🧭' },
      { id: 'lupa',    nome: 'Lupa',     emoji: '🔍' },
      { id: 'mapa',    nome: 'Mapa',     emoji: '🗺️' },
      { id: 'regua',   nome: 'Régua',    emoji: '📏' },
    ],
  },
  africa: {
    label: 'África',
    cor: '#c0392b',
    itens: [
      { id: 'mascara',  nome: 'Máscara',  emoji: '🎭' },
      { id: 'turbante', nome: 'Turbante', emoji: '🪭' },
      { id: 'tambor',   nome: 'Tambor',   emoji: '🥁' },
    ],
  },
  clima: {
    label: 'Clima',
    cor: '#8e44ad',
    itens: [
      { id: 'nuvem',   nome: 'Nuvem',    emoji: '☁️' },
      { id: 'sol',     nome: 'Sol',      emoji: '☀️' },
      { id: 'chuva',   nome: 'Chuva',    emoji: '🌧️' },
      { id: 'furacao', nome: 'Furacão',  emoji: '🌀' },
    ],
  },
  hidrografia: {
    label: 'Hidrografia',
    cor: '#16a085',
    itens: [
      { id: 'gota',    nome: 'Gota',     emoji: '💧' },
      { id: 'barco',   nome: 'Barco',    emoji: '⛵' },
      { id: 'peixe',   nome: 'Peixe',   emoji: '🐟' },
      { id: 'represa', nome: 'Represa',  emoji: '🏗️' },
    ],
  },
  biogeografia: {
    label: 'Biogeografia',
    cor: '#27ae60',
    itens: [
      { id: 'folha',  nome: 'Folha',   emoji: '🍃' },
      { id: 'animal', nome: 'Animal',  emoji: '🦜' },
      { id: 'bioma',  nome: 'Bioma',   emoji: '🌿' },
      { id: 'arvore', nome: 'Árvore',  emoji: '🌳' },
    ],
  },
};

// =============================================================
class GlobinhoDressUp {
  /**
   * @param {HTMLElement} container   - elemento que recebe o componente
   * @param {string}      tema        - chave em DRESSUP_TEMAS
   * @param {number|null} alunoId     - id do aluno logado (null = visitante)
   */
  constructor(container, tema, alunoId) {
    this.container = container;
    this.tema      = tema in DRESSUP_TEMAS ? tema : 'cartografia';
    this.alunoId   = alunoId ? parseInt(alunoId) : null;
    this.config    = DRESSUP_TEMAS[this.tema];

    // Estado interno
    this._placed      = [];   // [{ id, nome, emoji, pctX, pctY, el }]
    this._rewarded    = false; // já ganhou globinhos nesta sessão
    this._ghost       = null; // elemento clonado seguindo o cursor
    this._dragging    = null; // item sendo arrastado { id, nome, emoji }
    this._dragOffset  = { x: 0, y: 0 }; // offset cursor→canto do ghost
    this._placedCount = 0;    // contador para IDs únicos de placed items

    this._checkReward();
    this._render();
    this._bindEvents();
  }

  // ── Chave localStorage ────────────────────────────────────────
  get _storageKey() {
    return `dressup_done_${this.alunoId || 'guest'}_${this.tema}`;
  }

  _checkReward() {
    this._rewarded = localStorage.getItem(this._storageKey) === '1';
  }

  // ── DOM ───────────────────────────────────────────────────────
  _render() {
    this.container.innerHTML = '';
    this.container.className = 'gdu-wrapper';

    // ── Título ────────────────────────────────────────────────
    const titulo = document.createElement('div');
    titulo.className = 'gdu-titulo';
    titulo.innerHTML =
      `🎨 Vista o Globinho de <span style="color:${this.config.cor}">${this.config.label}</span>!`;
    this.container.appendChild(titulo);

    // ── Layout principal ──────────────────────────────────────
    const layout = document.createElement('div');
    layout.className = 'gdu-layout';
    this.container.appendChild(layout);

    // Coluna esquerda: Globinho + drop zone
    const colLeft = document.createElement('div');
    colLeft.className = 'gdu-col-left';
    layout.appendChild(colLeft);

    this._dropZone = document.createElement('div');
    this._dropZone.className = 'gdu-dropzone';
    this._dropZone.setAttribute('role', 'region');
    this._dropZone.setAttribute('aria-label', 'Área do Globinho');
    colLeft.appendChild(this._dropZone);

    // Globinho base
    this._globinhoImg = document.createElement('img');
    this._globinhoImg.className = 'gdu-globinho-base';
    this._globinhoImg.alt = 'Globinho';
    this._globinhoImg.src = '/fotoIndex/dressup/globinho-base.png';
    // fallback: usa globinhoPe.png se o asset específico não existir
    this._globinhoImg.onerror = () => {
      this._globinhoImg.src = '/fotoIndex/globinhoPe.png';
      this._globinhoImg.onerror = null;
    };
    this._dropZone.appendChild(this._globinhoImg);

    // Hint de drop
    this._hint = document.createElement('div');
    this._hint.className = 'gdu-hint';
    this._hint.textContent = 'Arraste acessórios aqui ↓';
    this._dropZone.appendChild(this._hint);

    // Coluna direita: painel de acessórios
    const colRight = document.createElement('div');
    colRight.className = 'gdu-col-right';
    layout.appendChild(colRight);

    const painelTitle = document.createElement('div');
    painelTitle.className = 'gdu-painel-titulo';
    painelTitle.textContent = 'Acessórios';
    colRight.appendChild(painelTitle);

    this._grid = document.createElement('div');
    this._grid.className = 'gdu-grid';
    colRight.appendChild(this._grid);

    this.config.itens.forEach(item => {
      const card = this._criarCard(item);
      this._grid.appendChild(card);
    });

    // ── Botões ────────────────────────────────────────────────
    const btnRow = document.createElement('div');
    btnRow.className = 'gdu-btn-row';
    this.container.appendChild(btnRow);

    this._btnPronto = document.createElement('button');
    this._btnPronto.className = 'gdu-btn-pronto';
    this._btnPronto.innerHTML = this._rewarded
      ? '✅ Globinhos ganhos!'
      : '✅ Pronto! <span class="gdu-recompensa">(+2 🌍)</span>';
    btnRow.appendChild(this._btnPronto);

    this._btnSharer = document.createElement('button');
    this._btnSharer.className = 'gdu-btn-share';
    this._btnSharer.innerHTML = '📸 Compartilhar Stories';
    btnRow.appendChild(this._btnSharer);

    this._btnClear = document.createElement('button');
    this._btnClear.className = 'gdu-btn-clear';
    this._btnClear.textContent = '🗑️ Limpar';
    btnRow.appendChild(this._btnClear);

    // ── Feedback de ganho ─────────────────────────────────────
    this._feedback = document.createElement('div');
    this._feedback.className = 'gdu-feedback';
    this._feedback.setAttribute('aria-live', 'polite');
    this.container.appendChild(this._feedback);

    this._injectStyles();
  }

  _criarCard(item) {
    const card = document.createElement('div');
    card.className = 'gdu-card';
    card.dataset.id    = item.id;
    card.dataset.nome  = item.nome;
    card.dataset.emoji = item.emoji;
    card.setAttribute('draggable', 'false'); // pointer events, não HTML5 drag
    card.setAttribute('title', item.nome);
    card.setAttribute('role', 'button');
    card.setAttribute('aria-label', `Acessório: ${item.nome}`);

    // Tenta carregar PNG; se não tiver, usa emoji como fallback visual
    const img = document.createElement('img');
    img.className  = 'gdu-acc-img';
    img.alt        = item.nome;
    img.src        = `/fotoIndex/dressup/${this.tema}/${item.id}.png`;
    img.onerror    = () => {
      img.style.display = 'none';
      emoji.style.display = 'flex';
    };
    card.appendChild(img);

    const emoji = document.createElement('span');
    emoji.className   = 'gdu-acc-emoji';
    emoji.textContent = item.emoji;
    emoji.style.display = 'none'; // só aparece se PNG falhar
    card.appendChild(emoji);

    const label = document.createElement('span');
    label.className   = 'gdu-acc-label';
    label.textContent = item.nome;
    card.appendChild(label);

    return card;
  }

  // ── Eventos ────────────────────────────────────────────────────
  _bindEvents() {
    // Pointer events nos cards do painel (início do drag)
    this._grid.addEventListener('pointerdown', e => {
      const card = e.target.closest('.gdu-card');
      if (!card) return;
      e.preventDefault();
      this._startDrag({
        id:    card.dataset.id,
        nome:  card.dataset.nome,
        emoji: card.dataset.emoji,
        fromZone: false,
      }, e, card);
    });

    // Pointer events nos acessórios JÁ COLOCADOS na zona (reposicionar)
    this._dropZone.addEventListener('pointerdown', e => {
      const placed = e.target.closest('.gdu-placed');
      if (!placed) return;
      e.preventDefault();
      e.stopPropagation();
      const puid = placed.dataset.puid;
      const entry = this._placed.find(p => p.puid === puid);
      if (!entry) return;
      this._startDrag({
        id:       entry.id,
        nome:     entry.nome,
        emoji:    entry.emoji,
        fromZone: true,
        puid,
      }, e, placed);
    });

    // Movimento global do ponteiro (move o ghost)
    document.addEventListener('pointermove', e => this._onMove(e), { passive: false });

    // Soltar global (drop ou cancelar)
    document.addEventListener('pointerup',     e => this._endDrag(e));
    document.addEventListener('pointercancel', e => this._cancelDrag());

    // Botões
    this._btnPronto.addEventListener('click',  () => this._handleDone());
    this._btnSharer.addEventListener('click',  () => this._handleShare());
    this._btnClear.addEventListener('click',   () => this._handleClear());
  }

  // ── Drag: início ──────────────────────────────────────────────
  _startDrag(item, e, sourceEl) {
    this._dragging = item;
    this._hint.style.display = 'none';

    // Clona o elemento visualmente para seguir o cursor
    const ghost = document.createElement('div');
    ghost.className = 'gdu-ghost';

    const imgSrc = `/fotoIndex/dressup/${this.tema}/${item.id}.png`;
    ghost.innerHTML = `
      <img src="${imgSrc}" alt="${item.nome}"
           onerror="this.style.display='none';this.nextSibling.style.display='flex'"
           style="width:60px;height:60px;image-rendering:pixelated;">
      <span style="display:none;font-size:40px;width:60px;height:60px;align-items:center;justify-content:center;">
        ${item.emoji}
      </span>`;
    document.body.appendChild(ghost);
    this._ghost = ghost;

    // Posição inicial
    const rect = sourceEl.getBoundingClientRect();
    this._dragOffset.x = e.clientX - rect.left;
    this._dragOffset.y = e.clientY - rect.top;
    this._moveGhost(e.clientX, e.clientY);

    // Se vem da zona, marca o placed como "em movimento"
    if (item.fromZone) {
      const entry = this._placed.find(p => p.puid === item.puid);
      if (entry) {
        entry.el.style.opacity = '0.3';
        this._dragging._movendoEntry = entry;
      }
    }

    sourceEl.setPointerCapture && sourceEl.setPointerCapture(e.pointerId);
    document.body.style.userSelect = 'none';
  }

  // ── Drag: movimento ───────────────────────────────────────────
  _onMove(e) {
    if (!this._ghost) return;
    e.preventDefault();
    this._moveGhost(e.clientX, e.clientY);
  }

  _moveGhost(cx, cy) {
    if (!this._ghost) return;
    this._ghost.style.left = (cx - this._dragOffset.x) + 'px';
    this._ghost.style.top  = (cy - this._dragOffset.y) + 'px';

    // Destaca a drop zone quando o ghost está sobre ela
    const rect = this._dropZone.getBoundingClientRect();
    const over = cx >= rect.left && cx <= rect.right && cy >= rect.top && cy <= rect.bottom;
    this._dropZone.classList.toggle('gdu-dropzone--over', over);
  }

  // ── Drag: soltar ──────────────────────────────────────────────
  _endDrag(e) {
    if (!this._ghost || !this._dragging) return;

    const rect = this._dropZone.getBoundingClientRect();
    const cx = e.clientX, cy = e.clientY;
    const onZone = cx >= rect.left && cx <= rect.right && cy >= rect.top && cy <= rect.bottom;

    if (onZone) {
      // Calcula posição percentual dentro da zona
      const pctX = ((cx - rect.left) / rect.width)  * 100;
      const pctY = ((cy - rect.top)  / rect.height) * 100;

      if (this._dragging.fromZone && this._dragging._movendoEntry) {
        // Apenas reposiciona
        this._moverPlaced(this._dragging._movendoEntry, pctX, pctY);
      } else {
        this._placeAccessory(this._dragging, pctX, pctY);
      }
    } else {
      // Fora da zona: se veio de dentro, restaura opacidade
      if (this._dragging.fromZone && this._dragging._movendoEntry) {
        this._dragging._movendoEntry.el.style.opacity = '';
      }
    }

    this._cancelDrag();
  }

  _cancelDrag() {
    if (this._ghost) {
      this._ghost.remove();
      this._ghost = null;
    }
    this._dragging = null;
    this._dropZone.classList.remove('gdu-dropzone--over');
    document.body.style.userSelect = '';
    if (this._placed.length === 0) this._hint.style.display = '';
  }

  // ── Colocar acessório na zona ─────────────────────────────────
  _placeAccessory(item, pctX, pctY) {
    this._placedCount++;
    const puid = `${item.id}_${this._placedCount}`;

    const el = document.createElement('div');
    el.className    = 'gdu-placed';
    el.dataset.puid = puid;
    el.title        = item.nome;

    const imgSrc = `/fotoIndex/dressup/${this.tema}/${item.id}.png`;
    el.innerHTML = `
      <img src="${imgSrc}" alt="${item.nome}"
           onerror="this.style.display='none';this.nextSibling.style.display='flex'"
           style="width:56px;height:56px;image-rendering:pixelated;pointer-events:none;">
      <span style="display:none;font-size:36px;pointer-events:none;">${item.emoji}</span>
      <button class="gdu-remove-btn" title="Remover" aria-label="Remover ${item.nome}">✕</button>`;

    el.style.left = `calc(${pctX}% - 28px)`;
    el.style.top  = `calc(${pctY}% - 28px)`;

    // Botão de remover
    el.querySelector('.gdu-remove-btn').addEventListener('click', ev => {
      ev.stopPropagation();
      this._removePlaced(puid);
    });

    this._dropZone.appendChild(el);

    const entry = { id: item.id, nome: item.nome, emoji: item.emoji, puid, pctX, pctY, el };
    this._placed.push(entry);
    this._hint.style.display = 'none';
  }

  _moverPlaced(entry, pctX, pctY) {
    entry.pctX = pctX;
    entry.pctY = pctY;
    entry.el.style.left    = `calc(${pctX}% - 28px)`;
    entry.el.style.top     = `calc(${pctY}% - 28px)`;
    entry.el.style.opacity = '';
  }

  _removePlaced(puid) {
    const idx = this._placed.findIndex(p => p.puid === puid);
    if (idx === -1) return;
    this._placed[idx].el.remove();
    this._placed.splice(idx, 1);
    if (this._placed.length === 0) this._hint.style.display = '';
  }

  // ── Limpar tudo ───────────────────────────────────────────────
  _handleClear() {
    this._placed.forEach(p => p.el.remove());
    this._placed = [];
    this._hint.style.display = '';
    this._mostrarFeedback('');
  }

  // ── Pronto: reward + export ───────────────────────────────────
  async _handleDone() {
    if (this._placed.length === 0) {
      this._mostrarFeedback('⚠️ Coloque pelo menos um acessório primeiro!', '#e67e22');
      return;
    }

    // 1) Globinhos (uma vez por aluno por tema)
    if (!this._rewarded) {
      await this._callAPI();
      this._rewarded = true;
      localStorage.setItem(this._storageKey, '1');
      this._btnPronto.innerHTML = '✅ Globinhos ganhos!';
      this._animarRecompensa();
    }

    // 2) Export automático
    try {
      const dataUrl = await this._exportCanvas();
      this._lastExport = dataUrl;
      this._abrirDownload(dataUrl);
      this._btnSharer.style.display = '';
      this._mostrarFeedback('🌍 +2 globinhos! Imagem salva!', '#27ae60');
    } catch (err) {
      console.warn('[DressUp] Erro no canvas export:', err);
      this._mostrarFeedback('✅ Globinhos adicionados!', '#27ae60');
    }
  }

  // ── Compartilhar Stories ──────────────────────────────────────
  async _handleShare() {
    const dataUrl = this._lastExport || await this._exportCanvas().catch(() => null);
    if (!dataUrl) return;
    if (navigator.share) {
      try {
        const res = await fetch(dataUrl);
        const blob = await res.blob();
        const file = new File([blob], 'globinho-dressup.png', { type: 'image/png' });
        await navigator.share({ files: [file], title: 'Globinho Dress Up – Duvid Geografia' });
        return;
      } catch (_) { /* fallback */ }
    }
    this._abrirDownload(dataUrl);
  }

  // ── Canvas Export (1080×1080) ─────────────────────────────────
  _exportCanvas() {
    return new Promise((resolve, reject) => {
      const SIZE   = 1080;
      const canvas = document.createElement('canvas');
      canvas.width  = SIZE;
      canvas.height = SIZE;
      const ctx = canvas.getContext('2d');

      // Background escuro com borda temática
      ctx.fillStyle = '#1a1a2e';
      ctx.fillRect(0, 0, SIZE, SIZE);

      // Borda colorida
      ctx.strokeStyle = this.config.cor;
      ctx.lineWidth   = 18;
      ctx.strokeRect(9, 9, SIZE - 18, SIZE - 18);

      // Logo / watermark texto
      ctx.fillStyle   = 'rgba(255,255,255,0.15)';
      ctx.font        = 'bold 28px sans-serif';
      ctx.textAlign   = 'center';
      ctx.fillText('DUVID GEOGRAFIA', SIZE / 2, SIZE - 32);

      // Área do Globinho na canvas: 60% do centro
      const ZONE_SIZE = SIZE * 0.7;
      const ZONE_X    = (SIZE - ZONE_SIZE) / 2;
      const ZONE_Y    = (SIZE - ZONE_SIZE) / 2 - 30;

      // Carrega a imagem base do Globinho
      const loadImage = src => new Promise((res, rej) => {
        const img = new Image();
        img.crossOrigin = 'anonymous';
        img.onload  = () => res(img);
        img.onerror = () => rej(new Error('img load fail: ' + src));
        img.src = src;
      });

      const baseImgSrc = this._globinhoImg.currentSrc || this._globinhoImg.src;

      // Carrega base + todos os acessórios em paralelo
      const accPromises = this._placed.map(p =>
        loadImage(`/fotoIndex/dressup/${this.tema}/${p.id}.png`).then(img => ({ img, p })).catch(() => null)
      );

      Promise.all([loadImage(baseImgSrc), ...accPromises])
        .then(results => {
          const [baseImg, ...accResults] = results;

          // Desenha Globinho centralizado na zona
          const GB_SIZE = ZONE_SIZE * 0.75;
          const GB_X    = ZONE_X + (ZONE_SIZE - GB_SIZE) / 2;
          const GB_Y    = ZONE_Y + (ZONE_SIZE - GB_SIZE) / 2;
          ctx.drawImage(baseImg, GB_X, GB_Y, GB_SIZE, GB_SIZE);

          // Desenha acessórios nas posições relativas
          accResults.forEach(r => {
            if (!r) return;
            const { img, p } = r;
            const ACC_SIZE = ZONE_SIZE * 0.18;
            const ax = ZONE_X + (p.pctX / 100) * ZONE_SIZE - ACC_SIZE / 2;
            const ay = ZONE_Y + (p.pctY / 100) * ZONE_SIZE - ACC_SIZE / 2;
            ctx.drawImage(img, ax, ay, ACC_SIZE, ACC_SIZE);
          });

          // Título do tema
          ctx.fillStyle   = '#ffffff';
          ctx.font        = `bold 42px 'VT323', monospace`;
          ctx.textAlign   = 'center';
          ctx.shadowColor = this.config.cor;
          ctx.shadowBlur  = 12;
          ctx.fillText(`Globinho de ${this.config.label}`, SIZE / 2, 70);
          ctx.shadowBlur  = 0;

          resolve(canvas.toDataURL('image/png'));
        })
        .catch(reject);
    });
  }

  _abrirDownload(dataUrl) {
    const a = document.createElement('a');
    a.href     = dataUrl;
    a.download = `globinho-${this.tema}.png`;
    a.click();
  }

  // ── API de globinhos ─────────────────────────────────────────
  async _callAPI() {
    if (!this.alunoId) return;
    try {
      // Tenta usar DuvidDB se disponível
      if (typeof DuvidDB !== 'undefined' && DuvidDB.addGlobinhos) {
        DuvidDB.addGlobinhos(2, `dressup_${this.tema}`);
        return;
      }
      // Fallback: chamada direta
      const r = await fetch('/api/globinhos.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ aluno_id: this.alunoId, quantidade: 2, tipo: `dressup_${this.tema}` }),
      });
      const json = await r.json().catch(() => null);
      if (json?.novo_total !== undefined && typeof atualizarInterface === 'function') {
        atualizarInterface();
      }
    } catch (err) {
      console.warn('[DressUp] Falha ao chamar API de globinhos:', err);
    }
  }

  // ── Feedback visual ───────────────────────────────────────────
  _mostrarFeedback(msg, cor = '#27ae60') {
    this._feedback.textContent = msg;
    this._feedback.style.color = cor;
    this._feedback.style.opacity = '1';
    if (msg) {
      clearTimeout(this._feedbackTimer);
      this._feedbackTimer = setTimeout(() => {
        this._feedback.style.opacity = '0';
      }, 3500);
    }
  }

  _animarRecompensa() {
    const el = document.createElement('div');
    el.className   = 'gdu-recompensa-pop';
    el.textContent = '+2 🌍';
    this.container.appendChild(el);
    setTimeout(() => el.remove(), 1500);
  }

  // ── CSS injetado (escoped por .gdu-wrapper) ───────────────────
  _injectStyles() {
    if (document.getElementById('gdu-styles')) return; // já injetado
    const style = document.createElement('style');
    style.id = 'gdu-styles';
    style.textContent = `
/* ── Globinho Dress Up ── */
.gdu-wrapper {
  font-family: 'VT323', 'Courier New', monospace;
  background: #111827;
  border: 2px solid #374151;
  border-radius: 12px;
  padding: 20px;
  margin: 32px 0;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 24px rgba(0,0,0,0.4);
}
body:not(.dark-mode) .gdu-wrapper {
  background: #f0f4f8;
  border-color: #cbd5e1;
}

.gdu-titulo {
  font-size: 1.5rem;
  color: #e2e8f0;
  margin-bottom: 16px;
  text-align: center;
  letter-spacing: 1px;
}
body:not(.dark-mode) .gdu-titulo { color: #1e293b; }

.gdu-layout {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
  justify-content: center;
}

/* ── Drop Zone ── */
.gdu-col-left { flex: 0 0 auto; }
.gdu-dropzone {
  position: relative;
  width: 280px;
  height: 280px;
  background: #1f2937;
  border: 2px dashed #4b5563;
  border-radius: 10px;
  overflow: hidden;
  transition: border-color 0.2s, background 0.2s;
  touch-action: none;
}
body:not(.dark-mode) .gdu-dropzone {
  background: #e2e8f0;
  border-color: #94a3b8;
}
.gdu-dropzone--over {
  border-color: #10b981 !important;
  background: #064e3b !important;
}
.gdu-globinho-base {
  position: absolute;
  bottom: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 180px;
  height: 180px;
  image-rendering: pixelated;
  pointer-events: none;
  object-fit: contain;
}
.gdu-hint {
  position: absolute;
  top: 12px;
  left: 50%;
  transform: translateX(-50%);
  color: #6b7280;
  font-size: 0.9rem;
  white-space: nowrap;
  pointer-events: none;
  text-align: center;
}

/* ── Acessórios colocados ── */
.gdu-placed {
  position: absolute;
  width: 56px;
  height: 56px;
  cursor: grab;
  touch-action: none;
  z-index: 10;
}
.gdu-placed:active { cursor: grabbing; }
.gdu-remove-btn {
  position: absolute;
  top: -6px;
  right: -6px;
  background: #ef4444;
  color: #fff;
  border: none;
  border-radius: 50%;
  width: 18px;
  height: 18px;
  font-size: 9px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  opacity: 0;
  transition: opacity 0.15s;
  z-index: 11;
}
.gdu-placed:hover .gdu-remove-btn { opacity: 1; }

/* ── Painel de acessórios ── */
.gdu-col-right { flex: 1 1 160px; min-width: 140px; }
.gdu-painel-titulo {
  color: #9ca3af;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 8px;
}
.gdu-grid {
  display: grid;
  grid-template-columns: repeat(2, 72px);
  gap: 10px;
}
.gdu-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  background: #1f2937;
  border: 1px solid #374151;
  border-radius: 8px;
  padding: 8px 4px;
  cursor: grab;
  touch-action: none;
  transition: transform 0.1s, border-color 0.2s;
  user-select: none;
  -webkit-user-select: none;
}
body:not(.dark-mode) .gdu-card {
  background: #fff;
  border-color: #cbd5e1;
}
.gdu-card:hover {
  transform: scale(1.08);
  border-color: #10b981;
}
.gdu-card:active { cursor: grabbing; }
.gdu-acc-img {
  width: 48px;
  height: 48px;
  image-rendering: pixelated;
  object-fit: contain;
}
.gdu-acc-emoji {
  font-size: 32px;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
}
.gdu-acc-label {
  font-size: 0.7rem;
  color: #9ca3af;
  margin-top: 4px;
  text-align: center;
}
body:not(.dark-mode) .gdu-acc-label { color: #64748b; }

/* ── Ghost (elemento seguindo o cursor) ── */
.gdu-ghost {
  position: fixed;
  pointer-events: none;
  z-index: 9999;
  opacity: 0.85;
  transform: scale(1.1);
  transition: transform 0.05s;
}

/* ── Botões ── */
.gdu-btn-row {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 16px;
}
.gdu-btn-pronto {
  background: #10b981;
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 10px 20px;
  font-family: inherit;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.2s, transform 0.1s;
}
.gdu-btn-pronto:hover { background: #059669; transform: scale(1.04); }
.gdu-btn-share {
  background: #6366f1;
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 10px 16px;
  font-family: inherit;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.2s;
  display: none;
}
.gdu-btn-share:hover { background: #4f46e5; }
.gdu-btn-clear {
  background: transparent;
  color: #9ca3af;
  border: 1px solid #374151;
  border-radius: 8px;
  padding: 10px 14px;
  font-family: inherit;
  font-size: 0.9rem;
  cursor: pointer;
  transition: color 0.2s, border-color 0.2s;
}
.gdu-btn-clear:hover { color: #ef4444; border-color: #ef4444; }

/* ── Feedback ── */
.gdu-feedback {
  text-align: center;
  font-size: 1rem;
  margin-top: 12px;
  min-height: 24px;
  transition: opacity 0.5s;
}
.gdu-recompensa-pop {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  font-size: 2.5rem;
  color: #fbbf24;
  font-weight: bold;
  pointer-events: none;
  animation: gdu-pop 1.4s ease-out forwards;
  z-index: 100;
}
@keyframes gdu-pop {
  0%   { opacity: 1; transform: translate(-50%,-50%) scale(0.5); }
  50%  { opacity: 1; transform: translate(-50%,-90%) scale(1.3); }
  100% { opacity: 0; transform: translate(-50%,-130%) scale(1); }
}

/* ── Mobile ── */
@media (max-width: 480px) {
  .gdu-dropzone { width: 240px; height: 240px; }
  .gdu-grid { grid-template-columns: repeat(3, 68px); }
  .gdu-layout { flex-direction: column; align-items: center; }
}
    `;
    document.head.appendChild(style);
  }
}

// =============================================================
//  Auto-init: detecta divs com class "globinho-dressup"
// =============================================================
function initGlobinhoDressUp() {
  document.querySelectorAll('.globinho-dressup').forEach(el => {
    if (el.dataset.gduInit) return; // evita dupla init
    el.dataset.gduInit = '1';
    const tema    = el.dataset.tema   || 'cartografia';
    const alunoId = el.dataset.aluno  || null;
    new GlobinhoDressUp(el, tema, alunoId);
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initGlobinhoDressUp);
} else {
  initGlobinhoDressUp();
}
