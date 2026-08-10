<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

   <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/questoes-estilo.css">

    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald&family=Open+Sans&family=VT323&family=Montserrat:wght@400;600;700&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>




    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>

    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>

    <script src="/js/duvid-core.js" defer></script>

    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/jsquestoes-padrao.js" defer></script>
    <script src="/js/carregar.js" defer></script>


    <script src="/js/abrirmenu.js" defer></script>





    <title>Duvid - Questões</title>



    <style>
        .w3-large {
            white-space: pre-line;
        }

        /* Aplique na classe onde o texto de apoio é renderizado */
        .w3-panel p {
            white-space: pre-line;
        }

        /* === GIF PERSONAGEM OVERLAY (acerto) === */
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
            filter: drop-shadow(0 8px 32px rgba(0,0,0,0.35));
            animation: gifEntrar 0.35s cubic-bezier(0.34,1.56,0.64,1) forwards;
        }
        /* acerto simples — maior, mais impactante */
        #duvid-gif-overlay img.duvid-gif-acerto {
            max-height: 320px;
        }
        /* combo (inteligente) — menor */
        #duvid-gif-overlay img.duvid-gif-inteligente {
            max-height: 200px;
        }
        #duvid-gif-overlay.saindo img {
            animation: gifSair 0.45s ease-in forwards;
        }
        @keyframes gifEntrar {
            from { transform: scale(0.3) translateY(40px); opacity: 0; }
            to   { transform: scale(1)   translateY(0);    opacity: 1; }
        }
        @keyframes gifSair {
            from { transform: scale(1);   opacity: 1; }
            to   { transform: scale(0.7) translateY(-30px); opacity: 0; }
        }

        /* GIF inline — erro (maior, destaque) */
        .duvid-gif-erro {
            display: block;
            height: 200px;
            margin: 0 auto 8px;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.25));
        }
        /* GIF inline — dúvida/dica (menor, discreto) */
        .duvid-gif-duvida {
            display: block;
            height: 200px;
            margin: 0 auto 6px;
            filter: drop-shadow(0 3px 8px rgba(0,0,0,0.2));
        }
    </style>




</head>

<body>

    <?php include __DIR__ . '/../includes/header.php'; ?>


    <main class="questoes-layout">

        <div id="aviso-status"></div>

        <!-- Grid: coluna central + painel direito -->
        <div class="quest-body-row">

            <!-- ── Coluna Central ────────────────────────────────── -->
            <div class="quest-center">

                <div id="container-questao">
                    <div style="text-align:center; padding:64px 0;">
                        <i class="fa fa-spinner fa-spin" style="font-size:2.5rem; color:#4caf50;"></i>
                        <p style="font-family:'Montserrat',sans-serif; color:#aaa; margin-top:12px;">Carregando questões…</p>
                    </div>
                </div>

                <!-- #barra-feedback legado — mantido oculto -->
                <div id="barra-feedback" style="display:none">
                    <h3 id="feedback-msg"></h3>
                    <p id="feedback-txt"></p>
                </div>

                <div id="resultado-final" class="w3-hide">
                    <h2 class="fontePixel">Questões Concluídas!</h2>
                    <img src="/fotoIndex/globinhoPe.png" width="150" class="w3-margin">
                    <p id="placar-final" class="w3-xlarge"></p>
                    <button class="w3-button w3-green w3-round-large w3-padding-large"
                        onclick="location.href='/home.php'" style="font-weight:bold">
                        🏠 Voltar para a Home
                    </button>
                </div>

            </div>

            <!-- ── Painel Direito (sticky) ───────────────────────── -->
            <aside class="quest-side-panel" id="quest-panel-direito">

                <!-- Card de progresso + vidas -->
                <div class="qp-card qp-card--progress">
                    <p class="qp-label">Progresso da Missão</p>
                    <div class="quest-progress-track" style="margin-bottom:12px">
                        <div id="barra-progresso-simulado"></div>
                    </div>
                    <div class="qp-vidas-row">
                        <div class="duvid-coracoes-container" id="quest-coracoes-header">
                            <!-- Inicializado pelo JS -->
                        </div>
                        <span id="aviso-vidas-questao" class="aviso-vidas"></span>
                    </div>
                </div>

                <!-- Info da missão -->
                <div class="qp-card">
                    <p class="qp-label">🌍 Missão</p>
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

        </div><!-- .quest-body-row -->

    </main>



    <!-- Overlay do personagem (GIF de acerto, combo, etc.) -->
    <div id="duvid-gif-overlay"></div>


    <div id="modal-dica" class="w3-modal" style="display:none; z-index:9999;">
        <div class="w3-modal-content w3-card-4 w3-animate-top w3-round-large" style="max-width:500px">

            <header class="w3-container w3-teal w3-round-large"
                style="border-bottom-left-radius:0; border-bottom-right-radius:0;">
                <span onclick="document.getElementById('modal-dica').style.display='none'"
                    class="w3-button w3-display-topright w3-round-large">&times;</span>
                <h4>💡 Dica do Professor</h4>
            </header>

            <div class="w3-container w3-padding-32 w3-white">
                <p id="texto-da-dica" class="w3-large w3-serif" style="font-style: italic; color: #555;"></p>
            </div>

            <footer class="w3-container w3-light-grey w3-padding w3-right-align w3-round-large"
                style="border-top-left-radius:0; border-top-right-radius:0;">
                <button class="w3-button w3-teal w3-round-medium"
                    onclick="document.getElementById('modal-dica').style.display='none'">
                    ENTENDI!
                </button>
            </footer>

        </div>
    </div>


    <!-- Modal Mapa Mental -->
    <div id="modal-mapa" class="w3-modal" style="display:none; z-index:9998;" onclick="if(event.target===this) this.style.display='none'">
        <div class="w3-modal-content w3-animate-zoom" style="max-width:98vw; background:transparent; box-shadow:none;">
            <button onclick="document.getElementById('modal-mapa').style.display='none'"
                style="position:fixed; top:12px; right:16px; z-index:9999; background:rgba(0,0,0,0.55); color:#fff; border:none; border-radius:50%; width:40px; height:40px; font-size:22px; cursor:pointer; line-height:1;">&times;</button>
            <div style="overflow:auto; max-height:92vh; text-align:center; padding:8px;">
                <img id="modal-mapa-img" src="" alt="Mapa Mental"
                    style="max-width:100%; height:auto; border-radius:12px; box-shadow:0 4px 24px rgba(0,0,0,0.4);">
            </div>
        </div>
    </div>

    <div id="id01" class="w3-modal" style="z-index: 999;">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round-large" style="max-width:450px">
            <div class="w3-container w3-padding-32 w3-center">

                <div class="w3-margin-bottom pulse">
                    <img id="modal-img-globinho" src="/fotoIndex/globinhoPe.png" width="80" height="80">
                </div>

                <h2 id="modal-titulo" class="fontePixel"></h2>

                <div class="w3-padding-16">
                    <p id="modal-feedback-principal" class="w3-xlarge">
                    </p>
                    <p id="modal-frase-motivacional" class="w3-text-grey" style="font-style: italic;"></p>
                </div>

                <div class="w3-container w3-padding-16">
                    <button id="btn-revisao-erros" onclick="iniciarRevisao()"
                        class="w3-button w3-amber w3-round-large w3-block w3-margin-bottom w3-padding-large"
                        style="font-weight: bold; display:none;">
                        📋 REVISAR OS ERROS
                    </button>

                    <button id="btn-tentar-novamente" onclick="location.reload()"
                        class="w3-button w3-light-grey w3-round-large w3-block w3-margin-bottom w3-padding-large"
                        style="font-weight: bold;">
                        🔄 REFAZER SIMULADO
                    </button>

                    <button onclick="window.location.href='/home.php'"
                        class="w3-button w3-green w3-round-large w3-block w3-padding-large" style="font-weight: bold;">
                        🏠 VOLTAR PARA A HOME
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->

    <?php include __DIR__ . '/../includes/footer.php'; ?>




    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-DPX55DSFZ0');

    </script>


    <script>
        // Apenas para teste, comente depois!
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                // gerarPaginaRevisao();
            }, 500); // Espera meio segundo para o JSON carregar e renderiza tudo
        });
    </script>


</body>

</html>
