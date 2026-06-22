/**
 * jessica-walker.js — Walker Engine multi-personagem
 * Adicionar novo personagem: apenas um createWalker({...}) com a config.
 * Desativar em página específica: <meta name="jessica-walker" content="off">
 */
(function () {
  'use strict';

  if (window.location.pathname.startsWith('/jogo')) return;
  if (document.querySelector('meta[name="jessica-walker"][content="off"]')) return;
  var HOME_PATHS = ['/', '/index.php', '/index.html', '/home.php'];
  var isHome = HOME_PATHS.indexOf(window.location.pathname) !== -1;
  var isQuestoes = window.location.pathname.indexOf('/questoes/') !== -1 || window.location.pathname.indexOf('modelo-questoes') !== -1;

  // ── Helpers globais ────────────────────────────────────────────────────────
  function isMobile() { return window.innerWidth <= 768; }
  function randMs(a, b) { return a + Math.random() * (b - a); }

  // ── Engine ─────────────────────────────────────────────────────────────────
  function createWalker(c) {
    var id = c.id;

    function dispH() { return isMobile() ? c.heightMob : c.heightDt; }
    function sc()    { return dispH() / c.frameH; }
    function dispW() { return Math.round(c.frameW * sc()); }

    var css = [
      '#' + id + '-walker{position:fixed;bottom:' + (c.bottom||'8px') + ';z-index:' + (c.zIndex||500) + ';',
      'cursor:pointer;display:none;user-select:none;-webkit-tap-highlight-color:transparent;}',
      '#' + id + '-walker:hover{filter:brightness(1.1);}',
      '#' + id + '-sprite{image-rendering:pixelated;image-rendering:crisp-edges;',
      'background-repeat:no-repeat;background-image:url("' + c.sheet + '");}',
      '@keyframes ' + id + '-anim{',
      'from{background-position:0px var(--' + id + '-ry);}',
      'to{background-position:var(--' + id + '-aw) var(--' + id + '-ry);}}',
      '#' + id + '-sprite.' + id + '-walk{animation:' + id + '-anim var(--' + id + '-dur) steps(' + c.walkCols + ') infinite;}'
    ];
    if (c.idleRow != null) {
      css.push('#' + id + '-sprite.' + id + '-idle{animation:' + id + '-anim var(--' + id + '-dur) steps(' + c.idleCols + ') infinite;}');
    }
    if (c.bubbles) {
      css.push(
        '#' + id + '-bubble{position:absolute;bottom:calc(100% + 8px);left:50%;',
        'transform:translateX(-50%) scale(0);transform-origin:bottom center;',
        'transition:transform 0.2s cubic-bezier(0.34,1.56,0.64,1);',
        'background:#fffde7;color:#222;border:2px solid #333;box-shadow:3px 3px 0 #333;',
        'padding:8px 16px;font-size:14px;font-weight:bold;font-family:monospace;',
        'white-space:nowrap;pointer-events:none;}',
        '#' + id + '-bubble.show{transform:translateX(-50%) scale(1);}',
        '#' + id + '-bubble::after{content:"";position:absolute;bottom:-9px;left:50%;',
        'transform:translateX(-50%);border:6px solid transparent;border-top-color:#333;}',
        'body.dark-mode #' + id + '-bubble{background:#1a2035;color:#e0e0e0;border-color:#90caf9;box-shadow:3px 3px 0 #90caf9;}',
        'body.dark-mode #' + id + '-bubble::after{border-top-color:#90caf9;}'
      );
    }
    var styleEl = document.createElement('style');
    styleEl.textContent = css.join('');
    document.head.appendChild(styleEl);

    var root   = document.getElementById('jessica-walker-container') || document.body;
    var walker = document.createElement('div'); walker.id = id + '-walker';
    var sprite = document.createElement('div'); sprite.id = id + '-sprite';
    var bubble = null;
    if (c.bubbles) {
      bubble = document.createElement('div'); bubble.id = id + '-bubble';
      walker.appendChild(bubble);
    }
    walker.appendChild(sprite);
    root.appendChild(walker);

    function openGame(e) { e.preventDefault(); if (c.onClick) { c.onClick(e); } else { window.open(c.gamePath || '/jogo/index.html', '_blank'); } }
    walker.addEventListener('click',    openGame);
    walker.addEventListener('touchend', openGame, { passive: false });

    function applyAnim(row, cols, fps, flip) {
      var s      = sc();
      var sheetW = c.frameW * c.sheetCols * s;
      var sheetH = c.frameH * c.sheetRows * s;
      var animW  = c.frameW * cols * s;
      var rowY   = -(row * c.frameH * s);
      sprite.style.width              = dispW() + 'px';
      sprite.style.height             = dispH() + 'px';
      sprite.style.backgroundSize     = sheetW + 'px ' + sheetH + 'px';
      sprite.style.backgroundPosition = '0px ' + rowY + 'px';
      sprite.style.transform          = flip ? 'scaleX(-1)' : 'scaleX(1)';
      sprite.style.setProperty('--' + id + '-dur', (cols / fps) + 's');
      sprite.style.setProperty('--' + id + '-aw',  '-' + animW + 'px');
      sprite.style.setProperty('--' + id + '-ry',  rowY + 'px');
    }

    function startWalkAnim() {
      sprite.classList.remove(id + '-idle');
      applyAnim(c.walkRow, c.walkCols, c.walkFps, c.flipWalk);
      sprite.classList.add(id + '-walk');
    }
    function startIdleAnim() {
      if (c.idleRow == null) return;
      sprite.classList.remove(id + '-walk');
      applyAnim(c.idleRow, c.idleCols, c.idleFps, c.flipIdle);
      sprite.classList.add(id + '-idle');
    }

    var bubbleIdx = 0;
    function showBubble() {
      if (!bubble || !c.texts || !c.texts.length) return;
      bubble.textContent = c.texts[bubbleIdx++ % c.texts.length];
      bubble.classList.add('show');
    }
    function hideBubble() { if (bubble) bubble.classList.remove('show'); }

    var state      = 'idle';
    var posX       = 0;
    var lastTs     = null;
    var rafId      = null;
    var gapTimer   = null;
    var pausedOnce = false;

    function scheduleNext() {
      state    = 'idle';
      gapTimer = setTimeout(beginWalk, randMs(c.gapMin, c.gapMax));
    }

    function endWalk() {
      cancelAnimationFrame(rafId); rafId = null;
      walker.style.display = 'none';
      hideBubble();
      sprite.classList.remove(id + '-walk', id + '-idle');
      scheduleNext();
    }

    function doPause() {
      pausedOnce = true; state = 'paused';
      startIdleAnim(); showBubble();
      setTimeout(function () {
        hideBubble();
        setTimeout(function () {
          if (state !== 'paused') return;
          state = 'walking'; lastTs = null;
          startWalkAnim();
          rafId = requestAnimationFrame(tick);
        }, 250);
      }, randMs(c.pauseMin || 2000, c.pauseMax || 3500));
    }

    function beginWalk() {
      if (state !== 'idle') return;
      pausedOnce = false; state = 'walking'; lastTs = null;
      posX = c.direction === 'right' ? -(dispW() + 20) : window.innerWidth + 20;
      walker.style.left    = posX + 'px';
      walker.style.display = 'block';
      startWalkAnim();
      rafId = requestAnimationFrame(tick);
    }

    function tick(ts) {
      if (state !== 'walking') return;
      if (!lastTs) lastTs = ts;
      var dt = Math.min((ts - lastTs) / 1000, 0.1);
      lastTs = ts;
      var dir = c.direction === 'right' ? 1 : -1;
      posX += dir * c.speedPx * dt;
      walker.style.left = posX + 'px';
      var exited = c.direction === 'right'
        ? posX > window.innerWidth + 20
        : posX < -(dispW() + 20);
      if (exited) { endWalk(); return; }
      var progress = c.direction === 'right'
        ? posX / window.innerWidth
        : 1 - (posX / window.innerWidth);
      if (!pausedOnce && c.idleRow != null && (c.pauseProb || 0) > 0 &&
          progress > 0.25 && progress < 0.75) {
        if (Math.random() < c.pauseProb * dt * 2) { doPause(); return; }
      }
      rafId = requestAnimationFrame(tick);
    }

    window.addEventListener('resize', function () {
      if (state === 'walking') applyAnim(c.walkRow, c.walkCols, c.walkFps, c.flipWalk);
      if (state === 'paused' && c.idleRow != null) applyAnim(c.idleRow, c.idleCols, c.idleFps, c.flipIdle);
    }, { passive: true });

    gapTimer = setTimeout(beginWalk, c.walkDelay || 4000);

    function showText(text, duration) {
      if (!bubble) return;
      if (bubble._hideTimer) clearTimeout(bubble._hideTimer);
      bubble.textContent = text;
      bubble.classList.add('show');
      bubble._hideTimer = setTimeout(function() { bubble.classList.remove('show'); }, duration || 3000);
    }

    return {
      forceWalk:  beginWalk,
      stop:       function () { clearTimeout(gapTimer); cancelAnimationFrame(rafId); },
      showText:   showText,
      getEl:      function () { return walker; }
    };
  }

  // ── Fundo / Diorama ────────────────────────────────────────────────────────
  if (isHome) {
    var fundoStyle = document.createElement('style');
    fundoStyle.textContent = '#duvid-fundo{display:block;width:100%;line-height:0;pointer-events:none;}#duvid-fundo img{width:100%;height:auto;display:block;}';
    document.head.appendChild(fundoStyle);
    var fundoEl = document.createElement('div'); fundoEl.id = 'duvid-fundo';
    var fundoImg = document.createElement('img'); fundoImg.src = '/fotoIndex/tileset/fundo.webp'; fundoImg.alt = '';
    fundoEl.appendChild(fundoImg);
    var footer = document.querySelector('footer');
    if (footer) footer.parentNode.insertBefore(fundoEl, footer);
    else document.body.appendChild(fundoEl);
  }

  // ── Personagens ────────────────────────────────────────────────────────────

  var wJessica  = null;
  var wGlobinho = null;

  if (isHome) wJessica = createWalker({
    id:        'jessica',
    sheet:     '/fotoIndex/jessica/jessica-spritesheet.png',
    sheetCols: 8,  sheetRows: 2,
    frameW:    128, frameH: 128,
    walkRow:   0,  walkCols: 6,  walkFps: 12,
    idleRow:   1,  idleCols: 2,  idleFps: 4,
    flipWalk:  true,
    flipIdle:  false,
    direction: 'left',
    speedPx:   45,
    heightDt:  100, heightMob: 70,
    bottom:    '45px',
    pauseProb: 0.20,
    walkDelay: 4000,  gapMin: 15000, gapMax: 30000,
    bubbles:   true,
    texts:     ['Vem jogar!','Aventura Geografica','Clique aqui!','Explore o mundo!','Missao disponivel!'],
    zIndex:    500
  });

  var HOME_PATHS2 = ['/', '/home.php', '/home.html'];
  if (isHome) {
    wGlobinho = createWalker({
      id:        'globinho',
      sheet:     '/fotoIndex/globinho/globinho-walk.png',
      sheetCols: 8,  sheetRows: 2,
      frameW:    128, frameH: 128,
      walkRow:   0,  walkCols: 5,  walkFps: 10,
      idleRow:   1,  idleCols: 2,  idleFps: 4,
      flipWalk:  false, flipIdle: false,
      direction: 'right',
      speedPx:   55,
      heightDt:  80,  heightMob: 56,
      bottom:    '45px',
      pauseProb: 0.90,
      walkDelay: 3000, gapMin: 5000, gapMax: 8000,
      zIndex:    499,
      bubbles:   true,
      texts:     ['Vamos trabalhar juntos?', 'Contribua com o Duvid!', 'Tem uma ideia? Me conta!'],
      onClick:   function() { abrirModalMural(); }
    });
  }

  // ── Detector de encontro Globinho × Jéssica ───────────────────────────────
  if (isHome && wJessica && wGlobinho) {
    var encontroCooldown = false;
    var ENCONTRO_FRASES = [
      { globinho: 'E aí, Jéssica!', jessica: 'Oi, Globinho! 🌍' },
      { globinho: 'Bora estudar?',             jessica: 'Topa! Aventura Geográfica!' },
      { globinho: 'Que saudade!',              jessica: 'Eu sabia que te encontrava aqui!' },
      { globinho: 'Vai uma questão?',     jessica: 'Aceito o desafio!' }
    ];
    var encontroIdx = 0;
    setInterval(function () {
      if (encontroCooldown) return;
      var elG = wGlobinho.getEl();
      var elJ = wJessica.getEl();
      if (!elG || !elJ) return;
      if (elG.style.display === 'none' || elJ.style.display === 'none') return;
      var rG = elG.getBoundingClientRect();
      var rJ = elJ.getBoundingClientRect();
      // Só conta se ambos estão visualmente dentro do viewport
      var onScreenG = rG.right > 0 && rG.left < window.innerWidth;
      var onScreenJ = rJ.right > 0 && rJ.left < window.innerWidth;
      if (!onScreenG || !onScreenJ) return;
      var centerG = rG.left + rG.width / 2;
      var centerJ = rJ.left + rJ.width / 2;
      if (Math.abs(centerG - centerJ) < 120) {
        encontroCooldown = true;
        var par = ENCONTRO_FRASES[encontroIdx % ENCONTRO_FRASES.length];
        encontroIdx++;
        wGlobinho.showText(par.globinho, 3500);
        setTimeout(function () { wJessica.showText(par.jessica, 3000); }, 400);
        setTimeout(function () { encontroCooldown = false; }, 30000);
      }
    }, 300);
  }

  // ── Personagem de Suporte (estilo Duolingo) ────────────────────────────────
  var SUP = {
    sheet:     '/fotoIndex/suporte/suporte-walk.png',
    sheetCols: 6, sheetRows: 1,
    frameW:    128, frameH: 128,
    idleRow:   0, idleCols: 6, idleFps: 8,
    heightDt:  128, heightMob: 90,
    flipX:     false
  };

  var supEl = null, supBub = null, supSpr = null, supTimer = null;

  function supH()  { return isMobile() ? SUP.heightMob : SUP.heightDt; }
  function supSc() { return supH() / SUP.frameH; }
  function supW()  { return Math.round(SUP.frameW * supSc()); }

  (function initSupport() {
    if (!isHome && !isQuestoes) return;
    var css = [
      '#jessica-suporte{position:fixed;bottom:0;left:0;z-index:600;',
      'display:flex;flex-direction:column;align-items:center;',
      'transform:translateX(-110%);transition:transform 0.4s cubic-bezier(0.34,1.1,0.64,1);}',
      '#jessica-suporte.sup-visible{transform:translateX(0);}',
      '#jessica-sup-sprite{image-rendering:auto;',
      'background-repeat:no-repeat;background-image:url("' + SUP.sheet + '");}',
      '@keyframes sup-anim{from{background-position:0px var(--sup-ry);}to{background-position:var(--sup-aw) var(--sup-ry);}}',
      '#jessica-sup-sprite.sup-idle{animation:sup-anim var(--sup-dur) steps(' + SUP.idleCols + ') infinite;}',
      '#jessica-sup-bubble{position:relative;background:#fffde7;color:#222;',
      'border:2px solid #555;box-shadow:2px 2px 6px rgba(0,0,0,0.18);',
      'padding:12px 16px;font-size:13px;font-family:sans-serif;line-height:1.5;',
      'max-width:240px;margin-bottom:8px;border-radius:16px;}',

      '#jessica-sup-close{position:absolute;top:3px;right:7px;background:none;',
      'border:none;cursor:pointer;font-size:18px;line-height:1;color:#555;padding:0;}',
      '#jessica-sup-dica{display:block;margin-top:6px;padding-top:6px;',
      'border-top:1px dashed #aaa;font-size:12px;color:#555;}',
      'body.dark-mode #jessica-sup-bubble{background:#1a2035;color:#e0e0e0;border-color:#90caf9;box-shadow:2px 2px 6px rgba(0,0,0,0.4);}',
      '',
      'body.dark-mode #jessica-sup-dica{color:#aaa;border-top-color:#444;}'
    ].join('');

    var s = document.createElement('style'); s.textContent = css;
    document.head.appendChild(s);

    supEl  = document.createElement('div'); supEl.id  = 'jessica-suporte';
    supBub = document.createElement('div'); supBub.id = 'jessica-sup-bubble';
    supSpr = document.createElement('div'); supSpr.id = 'jessica-sup-sprite';
    supSpr.style.backgroundImage = 'url("' + SUP.sheet + '")';
    supEl.appendChild(supBub);
    supEl.appendChild(supSpr);
    document.body.appendChild(supEl);

    var s2     = supSc();
    var sheetW = SUP.frameW * SUP.sheetCols * s2;
    var sheetH = SUP.frameH * SUP.sheetRows * s2;
    var animW  = SUP.frameW * SUP.idleCols  * s2;
    var rowY   = -(SUP.idleRow * SUP.frameH  * s2);
    supSpr.style.width              = supW() + 'px';
    supSpr.style.height             = supH() + 'px';
    supSpr.style.backgroundSize     = sheetW + 'px ' + sheetH + 'px';
    supSpr.style.backgroundPosition = '0px ' + rowY + 'px';
    supSpr.style.transform          = SUP.flipX ? 'scaleX(-1)' : 'scaleX(1)';
    supSpr.style.setProperty('--sup-dur', (SUP.idleCols / SUP.idleFps) + 's');
    supSpr.style.setProperty('--sup-aw',  '-' + animW + 'px');
    supSpr.style.setProperty('--sup-ry',  rowY + 'px');
    supSpr.classList.add('sup-idle');

    // Pré-carrega o áudio de suporte para evitar atraso
    document.addEventListener('click', function() {
      if (typeof DuvidAudio !== 'undefined') DuvidAudio.inicializar();
    }, { once: true });

    window.addEventListener('duvid:suporte', function (e) {
      var d = (e && e.detail) || {};
      if (supTimer) clearTimeout(supTimer);
      supBub.innerHTML = '';
      var btn = document.createElement('button');
      btn.id = 'jessica-sup-close'; btn.innerHTML = '&times;'; btn.onclick = hideSupport;
      var msg = document.createElement('span');
      msg.textContent = d.msg || 'Respira fundo. Você consegue!';
      supBub.appendChild(btn);
      supBub.appendChild(msg);
      supEl.classList.add('sup-visible');
      if (typeof DuvidAudio !== 'undefined') DuvidAudio.play('suporte');
      supTimer = setTimeout(hideSupport, 7000);
    });
  }());

  function hideSupport() {
    if (supTimer) { clearTimeout(supTimer); supTimer = null; }
    if (supEl) supEl.classList.remove('sup-visible');
  }

  // ── Modal Mural Colaborativo ───────────────────────────────────────────────
  (function initMural() {
    if (!isHome) return;
    var css = [
      '#mural-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.55);z-index:700;align-items:center;justify-content:center;}',
      '#mural-overlay.aberto{display:flex;}',
      '#mural-modal{background:#fff;border-radius:16px;padding:28px 24px;max-width:480px;width:90%;max-height:90vh;overflow-y:auto;position:relative;font-family:sans-serif;}',
      '#mural-modal h2{margin:0 0 6px;font-size:1.3rem;color:#2e7d32;}',
      '#mural-modal p.sub{margin:0 0 20px;color:#666;font-size:0.9rem;}',
      '.mural-opcoes{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:20px;}',
      '.mural-card{border:2px solid #e0e0e0;border-radius:12px;padding:14px 10px;text-align:center;cursor:pointer;transition:border-color 0.2s,background 0.2s;}',
      '.mural-card:hover,.mural-card.ativo{border-color:#2e7d32;background:#f1f8f1;}',
      '.mural-card span.ic{font-size:1.8rem;display:block;margin-bottom:6px;}',
      '.mural-card span.label{font-size:0.82rem;font-weight:600;color:#333;}',
      '#mural-form{display:none;}#mural-form.visivel{display:block;}',
      '#mural-form textarea{width:100%;box-sizing:border-box;border:2px solid #ccc;border-radius:8px;padding:10px;font-size:0.9rem;resize:vertical;min-height:100px;margin-bottom:12px;}',
      '#mural-form textarea:focus{border-color:#2e7d32;outline:none;}',
      '#mural-enviar{background:#2e7d32;color:#fff;border:none;border-radius:8px;padding:10px 24px;font-size:0.95rem;font-weight:bold;cursor:pointer;width:100%;}',
      '#mural-enviar:hover{background:#1b5e20;}',
      '#mural-status{display:none;padding:10px;border-radius:8px;text-align:center;margin-top:10px;font-size:0.9rem;}',
      '#mural-fechar{position:absolute;top:12px;right:16px;background:none;border:none;font-size:1.4rem;cursor:pointer;color:#999;}',
      'body.dark-mode #mural-modal{background:#1a2035;color:#e0e0e0;}',
      'body.dark-mode .mural-card{border-color:#444;color:#e0e0e0;}',
      'body.dark-mode .mural-card.ativo{background:#1e3a2f;}'
    ].join('');
    var s = document.createElement('style'); s.textContent = css;
    document.head.appendChild(s);

    var opcoes = [
      { ic: '\u{1F4DD}', label: 'Enviar uma quest\u00E3o', tipo: 'questao', placeholder: 'Cole ou escreva a quest\u00E3o aqui...' },
      { ic: '\u{1F4C4}', label: 'Enviar um texto',          tipo: 'texto',   placeholder: 'Compartilhe um texto sobre Geografia...' },
      { ic: '\u{1F3A8}', label: 'Pixel art tem\u00E1tica', tipo: 'pixelart',placeholder: 'Descreva o tema da sua pixel art...' },
      { ic: '\u{1F4A1}', label: 'Sugest\u00E3o',           tipo: 'sugestao',placeholder: 'Qual funcionalidade voc\u00EA gostaria de ver?' }
    ];

    var overlay = document.createElement('div'); overlay.id = 'mural-overlay';
    var modal   = document.createElement('div'); modal.id   = 'mural-modal';
    modal.innerHTML = '<button id="mural-fechar">&times;</button><h2>\uD83C\uDF0D Mural Duvid</h2><p class="sub">Contribua com o Globinho! Escolha o que quer enviar:</p>';

    var grid = document.createElement('div'); grid.className = 'mural-opcoes';
    var tipoAtivo = '';
    opcoes.forEach(function(op) {
      var card = document.createElement('div'); card.className = 'mural-card';
      card.innerHTML = '<span class="ic">' + op.ic + '</span><span class="label">' + op.label + '</span>';
      card.addEventListener('click', function() {
        document.querySelectorAll('.mural-card').forEach(function(c){ c.classList.remove('ativo'); });
        card.classList.add('ativo');
        tipoAtivo = op.tipo;
        formEl.querySelector('textarea').placeholder = op.placeholder;
        formEl.classList.add('visivel');
        statusEl.style.display = 'none';
      });
      grid.appendChild(card);
    });

    var formEl = document.createElement('div'); formEl.id = 'mural-form';
    formEl.innerHTML = '<textarea id="mural-texto" rows="4"></textarea><button id="mural-enviar">Enviar contribui\u00E7\u00E3o</button><div id="mural-status"></div>';
    var statusEl = formEl.querySelector('#mural-status');
    modal.appendChild(grid); modal.appendChild(formEl);
    overlay.appendChild(modal); document.body.appendChild(overlay);

    document.getElementById('mural-fechar').onclick = fecharMural;
    overlay.addEventListener('click', function(e){ if (e.target === overlay) fecharMural(); });
    document.getElementById('mural-enviar').addEventListener('click', function() {
      var texto = document.getElementById('mural-texto').value.trim();
      if (!texto || !tipoAtivo) return;
      var btn = document.getElementById('mural-enviar');
      btn.disabled = true; btn.textContent = 'Enviando...';
      fetch('/api/mural.php', { method: 'POST', headers: {'Content-Type':'application/json'}, body: JSON.stringify({ tipo: tipoAtivo, conteudo: texto }) })
      .then(function(r){
        if (r.status === 401 || r.status === 403) throw { auth: true };
        return r.json();
      })
      .then(function(d){
        statusEl.style.display = 'block';
        if (d.ok) {
          statusEl.style.cssText = 'display:block;background:#e8f5e9;color:#2e7d32;';
          statusEl.textContent = '\u2705 Enviado! Obrigado pela contribui\u00E7\u00E3o!';
          document.getElementById('mural-texto').value = '';
          setTimeout(fecharMural, 2500);
        } else {
          statusEl.style.cssText = 'display:block;background:#ffebee;color:#c62828;';
          statusEl.textContent = '\u274C ' + (d.erro || 'Tente novamente.');
        }
        btn.disabled = false; btn.textContent = 'Enviar contribui\u00E7\u00E3o';
      })
      .catch(function(err){
        statusEl.style.display = 'block';
        if (err && err.auth) {
          statusEl.style.cssText = 'display:block;background:#fff3e0;color:#e65100;';
          statusEl.textContent = '\uD83D\uDD12 Voc\u00EA precisa estar logado para contribuir.';
        } else {
          statusEl.style.cssText = 'display:block;background:#ffebee;color:#c62828;';
          statusEl.textContent = '\u274C Erro de conex\u00E3o.';
        }
        btn.disabled = false; btn.textContent = 'Enviar contribui\u00E7\u00E3o';
      });
    });
  }());

  function abrirModalMural() {
    var el = document.getElementById('mural-overlay');
    if (el) el.classList.add('aberto');
  }
  function abrirModalMural() {
    var el = document.getElementById('mural-overlay');
    if (el) el.classList.add('aberto');
  }
  function fecharMural() {
    var el = document.getElementById('mural-overlay');
    if (el) {
      el.classList.remove('aberto');
      document.querySelectorAll('.mural-card').forEach(function(c){ c.classList.remove('ativo'); });
      var f = document.getElementById('mural-form'); if (f) f.classList.remove('visivel');
    }
  }

})();
