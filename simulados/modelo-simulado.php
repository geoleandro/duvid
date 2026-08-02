<?php
/* =====================================================================
   simulados/modelo-simulado.php — Duvid Geografia
   Motor de simulado com layout Clean Pixel (igual a modelo-questoes.php)
   Questões e progresso injetados por jssimulado-padrao.js
   ===================================================================== */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simulados de Geografia Duvid: questões reais comentadas com feedback por alternativa.">
    <meta property="og:title" content="Duvid Geografia — Simulado">
    <meta property="og:image" content="/fotoIndex/tileset/fundo-simulados.webp">

    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/questoes-estilo.css">

    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/jsquestoes-padrao.js" defer></script>
    <script src="/js/jssimulado-padrao.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <title>Duvid — Simulado de Geografia</title>

    <style>
        .w3-large, .w3-panel p { white-space: pre-line; }

        /* ── GIF overlay ─────────────────────────────────────────── */
        #duvid-gif-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }
        #duvid-gif-overlay img {
            max-height: 260px;
            filter: drop-shadow(0 8px 32px rgba(0,0,0,.35));
            animation: gifEntrar .35s cubic-bezier(.34,1.56,.64,1) forwards;
        }
        #duvid-gif-overlay img.duvid-gif-acerto    { max-height: 320px; }
        #duvid-gif-overlay img.duvid-gif-inteligente { max-height: 200px; }
        #duvid-gif-overlay.saindo img { animation: gifSair .45s ease-in forwards; }
        @keyframes gifEntrar {
            from { transform: scale(.3) translateY(40px); opacity: 0; }
            to   { transform: scale(1)  translateY(0);    opacity: 1; }
        }
        @keyframes gifSair {
            from { transform: scale(1); opacity: 1; }
            to   { transform: scale(.7) translateY(-30px); opacity: 0; }
        }
        .duvid-gif-erro   { display:block; height:200px; margin:0 auto 8px; filter:drop-shadow(0 4px 12px rgba(0,0,0,.25)); }
        .duvid-gif-duvida { display:block; height:200px; margin:0 auto 6px; filter:drop-shadow(0 3px 8px rgba(0,0,0,.2)); }

        /* ── Barra de feedback (fixa no rodapé — simulado) ───────── */
        #barra-feedback {
            position: fixed;
            bottom: 0; left: 0; right: 0;
            z-index: 200;
            padding: 18px 24px;
            background: #fff;
            border-top: 1px solid #e0e0e0;
            box-shadow: 0 -4px 20px rgba(0,0,0,.1);
            display: none;
        }
        #barra-feedback.w3-show { display: block; }
        #barra-feedback .w3-content { max-width: 900px; margin: 0 auto; }
        body.dark-mode #barra-feedback { background: #1a1a1a; border-color: #333; }
    </style>
</head>

<body>

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- GIF overlay -->
    <div id="duvid-gif-overlay"></div>

    <main class="questoes-layout">

        <div id="aviso-status"></div>

        <!-- Grid: coluna central + painel direito -->
        <div class="quest-body-row">

            <!-- ── Coluna Central ───────────────────────────────── -->
            <div class="quest-center">

                <div id="container-questao"></div>

                <!-- Barra de feedback (usada pelo motor do simulado) -->
                <div id="barra-feedback">
                    <div class="w3-content">
                        <h3 id="feedback-msg" class="w3-xlarge"></h3>
                        <p  id="feedback-txt" class="w3-medium"></p>
                        <button onclick="proxima()"
                                class="w3-button btn-acao-duvid w3-teal w3-round-large w3-block w3-margin-top">
                            <b>CONTINUAR</b>
                        </button>
                    </div>
                </div>

                <!-- Resultado final inline (fallback) -->
                <div id="resultado-final" class="w3-hide">
                    <h2 class="fontePixel">Simulado Concluído!</h2>
                    <img src="/fotoIndex/globinhoPe.png" width="150" class="w3-margin">
                    <p id="placar-final" class="w3-xlarge"></p>
                    <button class="w3-button w3-green w3-round-large w3-padding-large"
                            onclick="location.href='/simulados/simulado.php'" style="font-weight:bold">
                        🎯 Novo simulado
                    </button>
                </div>

            </div>

            <!-- ── Painel Direito (sticky) ──────────────────────── -->
            <aside class="quest-side-panel" id="quest-panel-direito">

                <!-- Progresso -->
                <div class="qp-card qp-card--progress">
                    <p class="qp-label">Progresso</p>
                    <div class="quest-progress-track" style="margin-bottom:12px">
                        <div id="barra-progresso-simulado"></div>
                    </div>
                    <div class="qp-vidas-row">
                        <div class="duvid-coracoes-container" id="quest-coracoes-header"></div>
                        <span id="aviso-vidas-questao" class="aviso-vidas"></span>
                    </div>
                </div>

                <!-- Info da missão -->
                <div class="qp-card">
                    <p class="qp-label">📝 Simulado</p>
                    <div id="quest-info-aula">
                        <p class="qp-empty-text">Carregando...</p>
                    </div>
                </div>

                <!-- Card Desempenho -->
                <div class="qp-card" id="card-desempenho">
                    <div class="qp-desemp-header">
                        <p class="qp-label qp-label--green">DESEMPENHO</p>
                        <span class="qp-desemp-pill" id="qp-desemp-pill">—</span>
                    </div>
                    <div class="qp-desemp-mid">
                        <div class="qp-desemp-chart-wrap">
                            <canvas id="qp-desemp-canvas" width="90" height="90"></canvas>
                            <span class="qp-desemp-pct-overlay" id="qp-desemp-pct">—</span>
                        </div>
                        <div class="qp-desemp-evo">
                            <span class="qp-desemp-sublabel">Evolução</span>
                            <div class="qp-evolucao-bars" id="qp-evolucao-bars">
                                <span class="qp-evo-bar" style="height:20%"></span>
                                <span class="qp-evo-bar" style="height:35%"></span>
                                <span class="qp-evo-bar" style="height:50%"></span>
                                <span class="qp-evo-bar" style="height:65%"></span>
                                <span class="qp-evo-bar" style="height:55%"></span>
                                <span class="qp-evo-bar qp-evo-bar--active" style="height:10%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="qp-desemp-heatmap-wrap">
                        <span class="qp-desemp-sublabel">Assuntos mais errados</span>
                        <div class="qp-heatmap" id="qp-heatmap"></div>
                    </div>
                </div>

                <!-- Card Recursos -->
                <div class="qp-card" id="card-recursos">
                    <p class="qp-label qp-label--green">RECURSOS</p>
                    <ul class="qp-recursos-list">
                        <li><a id="recurso-aula" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                            <span class="qp-recurso-icon qp-recurso-icon--green"><i class="fa fa-graduation-cap"></i></span>
                            <span class="qp-recurso-label">Aula Relacionada</span>
                        </a></li>
                        <li><a id="recurso-mapa" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                            <span class="qp-recurso-icon qp-recurso-icon--blue"><i class="fa fa-brain"></i></span>
                            <span class="qp-recurso-label">Mapa Mental</span>
                        </a></li>
                        <li><a id="recurso-glossario" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                            <span class="qp-recurso-icon qp-recurso-icon--purple"><i class="fa fa-book"></i></span>
                            <span class="qp-recurso-label">Glossário</span>
                        </a></li>
                        <li><a id="recurso-video" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                            <span class="qp-recurso-icon qp-recurso-icon--red"><i class="fa fa-play-circle"></i></span>
                            <span class="qp-recurso-label">Vídeo de Revisão</span>
                        </a></li>
                        <li><a id="recurso-similares" href="#" class="qp-recurso-item qp-recurso--inativo" target="_blank">
                            <span class="qp-recurso-icon qp-recurso-icon--teal"><i class="fa fa-list-check"></i></span>
                            <span class="qp-recurso-label">Questões Parecidas</span>
                        </a></li>
                    </ul>
                </div>

                <!-- Controle de fonte -->
                <div class="qp-card qp-card--font">
                    <p class="qp-label">🔠 Tamanho do texto</p>
                    <div class="qp-font-row">
                        <button id="quest-decrease-font" class="qp-font-btn">A−</button>
                        <span id="quest-font-pct" class="qp-font-pct">100%</span>
                        <button id="quest-increase-font" class="qp-font-btn qp-font-btn--plus">A+</button>
                    </div>
                </div>

            </aside>

        </div><!-- /.quest-body-row -->

    </main>

    <!-- Modal resultado final do simulado -->
    <div id="id01" class="w3-modal" style="z-index:9999;">
        <div class="w3-modal-content w3-animate-zoom w3-round-large" style="max-width:450px; border-radius:24px; overflow:hidden;">
            <div style="padding:36px 32px; text-align:center; background:#fff;">
                <div style="margin-bottom:16px;" class="pulse">
                    <img id="modal-img-globinho" src="/fotoIndex/globinhoPe.png" width="80" height="80">
                </div>
                <h2 id="modal-titulo" class="fontePixel"></h2>
                <p  id="modal-frase-motivacional" style="color:#888; font-family:'Montserrat',sans-serif; font-size:.9rem;"></p>
                <div style="padding:16px 0;">
                    <p id="modal-feedback-principal" style="font-size:1.1rem; font-family:'Montserrat',sans-serif; font-weight:600;"></p>
                </div>
                <button id="btn-revisao-erros" onclick="iniciarRevisao()"
                        style="display:none; width:100%; margin-bottom:10px; padding:12px; border:none;
                               border-radius:12px; background:#ff9800; color:#fff; font-family:'Montserrat',sans-serif;
                               font-weight:700; font-size:.95rem; cursor:pointer;"></button>
                <button id="btn-tentar-novamente" onclick="tentarNovamente()"
                        style="display:none; width:100%; margin-bottom:10px; padding:12px; border:none;
                               border-radius:12px; background:#2e7d32; color:#fff; font-family:'Montserrat',sans-serif;
                               font-weight:700; font-size:.95rem; cursor:pointer;">↺ REFAZER</button>
                <a href="/simulados/simulado.php"
                   style="display:block; padding:11px; border-radius:12px; background:#f5f5f5; color:#555;
                          font-family:'Montserrat',sans-serif; font-weight:600; font-size:.9rem;
                          text-decoration:none; text-align:center; transition:background .15s;"
                   onmouseover="this.style.background='#e0e0e0'"
                   onmouseout="this.style.background='#f5f5f5'">
                    ← Escolher outro simulado
                </a>
            </div>
        </div>
    </div>

    <!-- Modal de dica -->
    <div id="modal-dica" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:9999; align-items:center; justify-content:center;">
        <div style="background:#fff; border-radius:20px; max-width:500px; width:92%; overflow:hidden; box-shadow:0 20px 60px rgba(0,0,0,.2);">
            <div style="background:#2e7d32; padding:16px 20px; display:flex; align-items:center; justify-content:space-between;">
                <h4 style="margin:0; color:#fff; font-family:'Montserrat',sans-serif;">💡 Dica do Professor</h4>
                <span onclick="document.getElementById('modal-dica').style.display='none'"
                      style="cursor:pointer; color:rgba(255,255,255,.8); font-size:1.4rem; line-height:1;">&times;</span>
            </div>
            <div style="padding:28px 24px;">
                <p id="texto-da-dica" style="font-size:1rem; font-style:italic; color:#555; line-height:1.7;
                                             font-family:'Montserrat',sans-serif; margin:0;"></p>
            </div>
            <div style="padding:12px 24px 20px; text-align:right;">
                <button onclick="document.getElementById('modal-dica').style.display='none'"
                        style="padding:9px 24px; background:#2e7d32; color:#fff; border:none; border-radius:20px;
                               font-family:'Montserrat',sans-serif; font-weight:700; cursor:pointer;">
                    ENTENDI!
                </button>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>

</body>
</html>
