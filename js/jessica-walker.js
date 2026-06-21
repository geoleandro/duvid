/**
 * jessica-walker.js — Walker Engine multi-personagem
 * Adicionar novo personagem: apenas um createWalker({...}) com a config.
 * Desativar em página específica: <meta name="jessica-walker" content="off">
 */
(function () {
  'use strict';

  if (window.location.pathname.startsWith('/jogo')) return;
  if (document.querySelector('meta[name="jessica-walker"][content="off"]')) return;

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

    function openGame(e) { e.preventDefault(); window.open(c.gamePath || '/jogo/index.html', '_blank'); }
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

    return {
      forceWalk: beginWalk,
      stop: function () { clearTimeout(gapTimer); cancelAnimationFrame(rafId); }
    };
  }

  // ── Personagens ────────────────────────────────────────────────────────────

  createWalker({
    id:        'jessica',
    sheet:     '/fotoIndex/jessica/jessica-spritesheet.png',
    sheetCols: 8,  sheetRows: 3,
    frameW:    128, frameH: 128,
    walkRow:   0,  walkCols: 6,  walkFps: 12,
    idleRow:   1,  idleCols: 2,  idleFps: 4,
    flipWalk:  true,
    flipIdle:  false,
    direction: 'left',
    speedPx:   45,
    heightDt:  160, heightMob: 100,
    pauseProb: 0.20,
    walkDelay: 4000,  gapMin: 15000, gapMax: 30000,
    bubbles:   true,
    texts:     ['Vem jogar!','Aventura Geografica','Clique aqui!','Explore o mundo!','Missao disponivel!'],
    zIndex:    500
  });

  createWalker({
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
    pauseProb: 0.15,
    walkDelay: 22000, gapMin: 25000, gapMax: 50000,
    zIndex:    499
  });

  // ── Personagem de Suporte (estilo Duolingo) ────────────────────────────────
  var SUP = {
    sheet:     '/fotoIndex/suporte/suporte-walk.png',
    sheetCols: 8, sheetRows: 1,
    frameW:    128, frameH: 128,
    idleRow:   0, idleCols: 8, idleFps: 6,
    heightDt:  180, heightMob: 120,
    flipX:     false
  };

  var supEl = null, supBub = null, supSpr = null, supTimer = null;

  function supH()  { return isMobile() ? SUP.heightMob : SUP.heightDt; }
  function supSc() { return supH() / SUP.frameH; }
  function supW()  { return Math.round(SUP.frameW * supSc()); }

  (function initSupport() {
    var css = [
      '#jessica-suporte{position:fixed;bottom:0;right:16px;z-index:600;',
      'display:flex;flex-direction:row;align-items:flex-end;',
      'transform:translateX(110%);transition:transform 0.4s cubic-bezier(0.34,1.1,0.64,1);}',
      '#jessica-suporte.sup-visible{transform:translateX(0);}',
      '#jessica-sup-sprite{image-rendering:auto;',
      'background-repeat:no-repeat;background-image:url("' + SUP.sheet + '");}',
      '@keyframes sup-anim{from{background-position:0px var(--sup-ry);}to{background-position:var(--sup-aw) var(--sup-ry);}}',
      '#jessica-sup-sprite.sup-idle{animation:sup-anim var(--sup-dur) steps(' + SUP.idleCols + ') infinite;}',
      '#jessica-sup-bubble{position:relative;background:#fffde7;color:#222;',
      'border:2px solid #333;box-shadow:3px 3px 0 #333;',
      'padding:10px 14px;font-size:13px;font-family:monospace;line-height:1.5;',
      'max-width:220px;margin-bottom:20px;border-radius:2px;align-self:flex-end;}',
      '#jessica-sup-bubble::after{content:"";position:absolute;',
      'right:-11px;bottom:16px;border:6px solid transparent;border-left-color:#333;}',
      '#jessica-sup-close{position:absolute;top:3px;right:7px;background:none;',
      'border:none;cursor:pointer;font-size:18px;line-height:1;color:#555;padding:0;}',
      '#jessica-sup-dica{display:block;margin-top:6px;padding-top:6px;',
      'border-top:1px dashed #aaa;font-size:12px;color:#555;}',
      'body.dark-mode #jessica-sup-bubble{background:#1a2035;color:#e0e0e0;border-color:#90caf9;box-shadow:3px 3px 0 #90caf9;}',
      'body.dark-mode #jessica-sup-bubble::after{border-left-color:#90caf9;}',
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

    window.addEventListener('duvid:suporte', function (e) {
      var d = (e && e.detail) || {};
      if (supTimer) clearTimeout(supTimer);
      supBub.innerHTML = '';
      var btn = document.createElement('button');
      btn.id = 'jessica-sup-close'; btn.innerHTML = '&times;'; btn.onclick = hideSupport;
      var msg = document.createElement('span');
      msg.textContent = d.msg || 'Essa parte e dificil! Continue tentando!';
      supBub.appendChild(btn);
      supBub.appendChild(msg);
      if (d.dica) {
        var dEl = document.createElement('span'); dEl.id = 'jessica-sup-dica';
        dEl.textContent = d.dica; supBub.appendChild(dEl);
      }
      supEl.classList.add('sup-visible');
      supTimer = setTimeout(hideSupport, 9000);
    });
  }());

  function hideSupport() {
    if (supTimer) { clearTimeout(supTimer); supTimer = null; }
    if (supEl) supEl.classList.remove('sup-visible');
  }

})();
