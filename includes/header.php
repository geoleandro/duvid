<div class="w3-top" style="z-index: 1000; left: 0; right: 0;">
    <div class="w3-bar w3-green w3-card w3-left-align w3-medium">

        <a href="/home.php" class="w3-bar-item w3-button w3-padding-small w3-margin-left"><i
                class="fa fa-home"></i></a>

        <a href="/atividades/atividades.php"
            class="w3-bar-item w3-button w3-padding-small w3-hide-small">ATIVIDADES</a>

        <div class="w3-dropdown-click w3-hide-small">
            <button onclick="AbrirDropDown('aulas')" class="w3-padding-small w3-button">
                AULAS <i class="fa fa-caret-down"></i>
            </button>
            <div id="aulas" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
                <a href="/Duvid1Ano.php" class="w3-bar-item w3-button">NATUREZA</a>
                <a href="/Duvid2Ano.php" class="w3-bar-item w3-button">BRASIL</a>
                <a href="/Duvid3Ano.php" class="w3-bar-item w3-button">MUNDO</a>
            </div>
        </div>

      

        <a href="/blog/blog.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small">BLOG</a>


        <a href="/paginas/creditos.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small">CRÉDITOS</a>


        <a href="/paginas/instrucoes.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small">INSTRUÇÕES</a>

        <a href="/simulados/capasimuladogeral.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small">SIMULADOS</a>

          <div class="w3-dropdown-click w3-hide-small">
            <button onclick="AbrirDropDown('turma-menu')" class="w3-padding-small w3-button">
                TURMA <i class="fa fa-caret-down"></i>
            </button>
            <div id="turma-menu" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
                <a href="/paginas/criar-turma.php" class="w3-bar-item w3-button">
                    <i class="fa-solid fa-users-gear"></i> Criar turma
                </a>
                <a href="/paginas/ranking.php" class="w3-bar-item w3-button">
                    <i class="fa-solid fa-trophy"></i> Ranking
                </a>
                <a href="/paginas/stats-turma.php" class="w3-bar-item w3-button">
                    <i class="fa-solid fa-chart-bar"></i> Desempenho
                </a>
            </div>
        </div>



        <div class="w3-right" style="display: flex; align-items: center; height: 45px; gap: 5px;">

            <!-- Medalha de Patente: -->
            <!-- <img id="medalha-header" src="/fotoIndex/icones/duvid-patentes-novato.png" alt="Patente" class="pixel-art-icon"
                    style="width: 45px; height: auto; image-rendering: pixelated;" title="patente atual do aluno"> -->

            <div id="painel-pontos" class="w3-round-large w3-green w3-card-2 w3-hide"
                style="align-items: center; padding: 2px 10px; margin-right: 5px; height: 32px;">

                <div class="caixa-total-dourada">
                    <span id="saldoTotalHeader" class="fontePixel">0</span>
                </div>

                <div style="border-right: 1px solid rgba(255,255,255,0.4); height: 20px; margin-right: 8px;"></div>

                <div style="display: flex; align-items: center;">
                    <span id="notaFixa" class="fontePixel"
                        style="font-size: 16px; color: white; margin-right: 5px;">0</span>
                    <img id="imagem50" alt="globo" width="22" height="22" src="/fotoIndex/globinhoPe.png">
                </div>
            </div>



            <!-- Indicador de status do sistema -->
            <a href="/status.php" id="status-dot-link" title="Verificando..." target="_blank"
               style="display:flex;align-items:center;gap:5px;text-decoration:none;padding:4px 8px;border-radius:20px;background:rgba(0,0,0,0.15);">
                <span id="status-dot" style="width:10px;height:10px;border-radius:50%;background:#aaa;display:inline-block;flex-shrink:0;transition:background 0.4s;"></span>
                <span id="status-label" style="font-size:11px;color:rgba(255,255,255,0.85);font-family:sans-serif;display:none;"></span>
            </a>

            <div class="font-controls " style="display: flex; align-items: center;">
                <button id="decrease-font" class="font-btn" style="padding: 2px 8px;">A-</button>
                <button id="increase-font" class="font-btn" style="padding: 2px 8px;">A+</button>
            </div>



            <button class="w3-button" id="toggle-som" title="Ligar/desligar som" style="padding: 8px 12px;">
                <i class="fa fa-volume-up fa-fw"></i>
            </button>

            <button class="w3-button" id="toggle-dark-mode" style="padding: 8px 12px;">
                <i class="fa fa-moon fa-fw"></i>
            </button>

            <a class="w3-bar-item w3-button w3-hide-large w3-hide-medium w3-hover-white" href="#"
                onclick="AbrirNavBar(); return false;" style="padding: 8px 16px;">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</div>




<div id="navDemo" class="w3-bar-block w3-green w3-hide w3-hide-large w3-hide-medium w3-top w3-left-align"
    style="margin-top:46px; z-index: 999;">

    <!-- 1. LINK SIMPLES -->
    <a href="/atividades/atividades.php" class="w3-bar-item w3-button w3-padding-large"
        onclick="AbrirNavBar()">ATIVIDADES</a>

    <!-- 2. DROPDOWN (Corrigido com w3-left-align e estilo de reset) -->
    <div class="w3-dropdown-click w3-left-align ">
        <button onclick="AbrirDropDown('aulas-mobile')" class="w3-button w3-block  w3-padding-large"
            style="text-align: left; width: 100%; border: none; background: inherit;">
            AULAS <i class="fa fa-caret-down"></i>
        </button>
        <div id="aulas-mobile" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
            <a href="/Duvid1Ano.php" class="w3-bar-item w3-button w3-padding">NATUREZA</a>
            <a href="/Duvid2Ano.php" class="w3-bar-item w3-button w3-padding">BRASIL</a>
            <a href="/Duvid3Ano.php" class="w3-bar-item w3-button w3-padding">MUNDO</a>
        </div>
    </div>

   

    <!-- LINKS SIMPLES -->
    <a href="/blog/blog.php" class="w3-bar-item w3-button w3-padding-large" onclick="AbrirNavBar()">BLOG</a>
    <a href="/paginas/creditos.php" class="w3-bar-item w3-button w3-padding-large"
        onclick="AbrirNavBar()">CRÉDITOS</a>
    <a href="/paginas/instrucoes.php" class="w3-bar-item w3-button w3-padding-large"
        onclick="AbrirNavBar()">INSTRUÇÕES</a>

    <!-- SIMULADOS — link direto -->
    <a href="/simulados/capasimuladogeral.php" class="w3-bar-item w3-button w3-padding-large"
        onclick="AbrirNavBar()">SIMULADOS</a>


     <!-- 3. DROPDOWN TURMA (mobile) -->
    <div class="w3-dropdown-click w3-left-align">
        <button onclick="AbrirDropDown('turma-mobile')" class="w3-button w3-block w3-padding-large"
            style="text-align: left; width: 100%; border: none; background: inherit;">
            TURMA <i class="fa fa-caret-down"></i>
        </button>
        <div id="turma-mobile" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
            <a href="/paginas/criar-turma.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">
                <i class="fa-solid fa-users-gear"></i> Criar turma
            </a>
            <a href="/paginas/ranking.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">
                <i class="fa-solid fa-trophy"></i> Ranking
            </a>
            <a href="/paginas/stats-turma.php" class="w3-bar-item w3-button w3-padding" onclick="AbrirNavBar()">
                <i class="fa-solid fa-chart-bar"></i> Desempenho
            </a>
        </div>
    </div>

    
</div>



<script>
(function() {
    var dot   = document.getElementById('status-dot');
    var label = document.getElementById('status-label');
    var link  = document.getElementById('status-dot-link');
    function checarStatus() {
        fetch('/api/status-check.php', { cache: 'no-store' })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.ok) {
                    dot.style.background = '#4ade80';
                    dot.style.boxShadow  = '0 0 6px #4ade80';
                    link.title           = 'Todos os sistemas online';
                    label.style.display  = 'none';
                } else {
                    dot.style.background = '#f87171';
                    dot.style.boxShadow  = '0 0 6px #f87171';
                    label.textContent    = 'Instável';
                    label.style.display  = 'inline';
                    label.style.color    = '#fca5a5';
                    link.title           = 'Sistema instável — clique para detalhes';
                }
            })
            .catch(function() {
                dot.style.background = '#f87171';
                dot.style.boxShadow  = '0 0 6px #f87171';
                label.textContent    = 'Offline';
                label.style.display  = 'inline';
                label.style.color    = '#fca5a5';
                link.title           = 'Sistema offline — clique para detalhes';
            });
    }
    checarStatus();
    setInterval(checarStatus, 60000);
})();
</script>