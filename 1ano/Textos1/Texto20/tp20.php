<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Fatores climáticos: latitude, altitude, maritimidade, continentalidade, marés, massas de ar, monções, ventos alísios e correntes marítimas">
    <meta property="og:title" content="Texto 20 - Fundamentos de Climatologia II">
    <meta property="og:description" content="Fatores climáticos: latitude, altitude, maritimidade, correntes marítimas e massas de ar">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
    <link rel="stylesheet" href="/estilos/explicacaoPalavra.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Open+Sans&family=VT323&display=swap" rel="stylesheet">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/duvid-audio.js" defer></script>
    <script src="/js/duvid-ui.js" defer></script>
    <script src="/js/duvid-core.js" defer></script>
    <script src="/estilos/jstextos-padrao.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/aulas-geral.js" defer></script>
    <script src="/js/glossario.js" defer></script>
    <script src="/js/texto-painel.js" defer></script>

    <title>1º ano - Texto 20 - Fundamentos de climatologia II</title>

</head>

<body>

    <?php include __DIR__ . '/../../../includes/header.php'; ?>

    <div id="aviso-status" class="w3-margin-top"></div>

    <main class="w3-content w3-white w3-card-2 w3-padding-large w3-margin-bottom" style="max-width:750px">


        <!-- BLOCO: Abertura -->
        <div class="topico">
            <div class="w3-padding-top-48"></div>

            <h1 id="h1"></h1>

            <div class="w3-panel w3-light-grey w3-leftbar w3-border-green w3-round-large w3-padding-16 w3-margin-top">
                <div class="w3-row">
                    <div class="w3-col s2 m1 w3-center">
                        <i class="fa fa-headphones w3-xxlarge w3-text-green"></i>
                    </div>
                    <div class="w3-col s10 m11 w3-padding-small">
                        <b class="fontePixel">OUVIR AULA</b>
                        <p class="w3-small w3-margin-0">Aperte o play e acompanhe a leitura com narração exclusiva.</p>
                    </div>
                </div>
                <audio controls style="width:100%; margin-top: 10px;">
                    <source id="audioSource" src="" type="audio/mp3">
                </audio>
            </div>

            <div class="w3-container w3-padding-16">
                <p><strong>Conteúdo: </strong><span id="descricao-aula"></span></p>
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar e compreender o papel dos fatores climáticos na definição dos tipos de clima no mundo.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO: Pratica Social Inicial -->
        <div class="topico">
            <p class="caixa"> Agora é com você!</p>
            <div class="w3-panel w3-pale-green">
                <p class="w3-pale-green">Duas cidades podem estar na mesma latitude e ter climas completamente diferentes: uma litorânea e úmida, outra continental e seca, ou uma no nível do mar e outra em uma altitude elevada e fria.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: além da distância até a linha do Equador, quais outros fatores você imagina que influenciam o clima de um lugar? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">

            <h2>Introdução</h2>

            <p>
                Na aula 19, demos os primeiros passos,
                aprendendo a diferenciar tempo e
                clima, além de conhecer os
                elementos climáticos, como a
                temperatura, a pressão atmosférica, a umidade, os
                ventos e a precipitação.
            </p>

            <p>
                Agora, em Climatologia II, vamos
                avançar um pouco mais. Nesta etapa, o foco será compreender os
                fatores climáticos, ou seja,
                aqueles que <em>modificam</em> e <em>explicam</em> a diversidade de climas
                ao redor do mundo.
            </p>

            <p>
                Entre eles estão a latitude, a altitude, a
                maritimidade e a continentalidade, além das
                correntes marítimas, as monções, os
                ventos alísios, as massas de ar e as
                marés.
            </p>

            <div class="w3-panel w3-sand w3-leftbar w3-margin">
                <p><em>Ao final da aula, você terá uma visão mais clara
                        de como esses fatores atuam em conjunto para moldar os diferentes
                        cenários climáticos do planeta.</em></p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (fatores do clima) -->
        <div class="topico">

            <h2> 1. Os Fatores do Clima</h2>

            <p>Os <strong>fatores climáticos</strong> são as condições naturais que
                influenciam o clima de cada região do planeta. Eles ajudam a explicar por que alguns lugares são mais
                quentes, outros mais frios,
                alguns mais secos e outros mais chuvosos.
                Em resumo, representam características geográficas capazes de modificar os
                elementos do clima, como temperatura, umidade, pressão atmosférica,
                ventos e precipitação.
            </p>

            <p> <span class="termo clima" data-palavra="Latitude"
                    data-definicao="Coordenada geográfica que indica a distância de um lugar até a Linha do Equador (0º). É o principal fator que define se o clima de um lugar será quente (perto de 0º) ou frio (perto de 90º).">Latitude</span><br>
                A latitude corresponde à distância, em graus, entre a linha do
                Equador e o paralelo onde está localizado um ponto da superfície
                terrestre.
                Ela varia de 0º (Equador) até 90º
                (polos),
                sempre identificando o hemisfério: Norte (N) ou Sul (S).<br><br>
                A latitude influencia diretamente a forma como os raios solares
                atingem a superfície: quanto maior a latitude, maior a inclinação dos raios e, portanto, menores as
                temperaturas.<br><br>
                Além disso, a duração do dia e da noite
                também muda conforme a latitude: quanto mais afastado do Equador, maiores as diferenças de luz e
                escuridão ao longo do ano.
            </p>

            <div class="area">
                <img alt="Paralelos e latitude, do Equador (0°) aos polos (90°)" class="w3-mobile" id="imagem1" src="tp20f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p> <span class="termo clima" data-palavra="Altitude"
                    data-definicao="Altura de um ponto em relação ao nível do mar. Quanto maior a altitude, menor a temperatura e a pressão atmosférica.">Altitude</span><br>
                A altitude é a medida da altura de um ponto em relação ao nível do
                mar.
                Quanto maior a altitude, menor a pressão atmosférica, a densidade do ar
                e, consequentemente, a temperatura.<br><br>
                Por isso, regiões em áreas elevadas, como cidades andinas, costumam ser mais frias que regiões no
                nível do mar,
                mesmo estando próximas aos trópicos.
            </p>

            <p>Em locais altos, o ar é rarefeito e retém menos calor e umidade.
                Isso faz com que a variação entre o dia e a noite seja maior: durante o dia, a insolação é intensa e
                aquece rapidamente;
                já à noite, o resfriamento ocorre de forma acelerada.<br><br>
                Além disso, em altitudes elevadas a atmosfera é mais fina e absorve
                menos radiação solar,
                o que reforça o resfriamento.
            </p>

            <div class="area">
                <img alt="Altitude positiva, negativa e nula" class="w3-mobile" id="imagem2" src="tp20f02.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Altitude positiva, negativa, nula. Fonte: APROFGEO. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (maritimidade e continentalidade) -->
        <div class="topico">

            <h2> 2. Maritimidade e Continentalidade</h2>

            <p> Maritimidade</p>

            <p>
                A <span class="termo clima" data-palavra="Maritimidade"
                    data-definicao="Influência exercida pelos mares e oceanos sobre o clima, regulando temperaturas e aumentando a umidade do ar.">maritimidade</span>
                é a influência que mares e oceanos exercem
                sobre o clima.
                Regiões próximas ao litoral tendem a apresentar maior
                umidade
                e pequenas variações de temperatura, já que a água
                funciona como
                um regulador térmico natural.
            </p>

            <p>
                Os oceanos também distribuem <mark>energia</mark> pelo planeta através das
                correntes marítimas.
                Águas frias resfriam o ar e dificultam a formação de nuvens, gerando
                <em>clima seco</em>.
                Águas quentes aquecem o ar, favorecem a condensação e tornam o clima
                <em>úmido e chuvoso</em>.
            </p>

            <div class="w3-panel w3-sand w3-leftbar w3-margin">
                <p> Curiosidade: o oceano Atlântico Sul influencia diretamente o clima do Brasil.
                    A <em>Corrente do Brasil</em>, quente, deixa o litoral mais úmido, enquanto a <em>Corrente das
                        Malvinas</em>, fria,
                    contribui para a formação de frentes frias.</p>
            </div>

            <div class="area">
                <img alt="Regulação térmica exercida pelo oceano sobre o litoral" class="w3-mobile" id="imagem3" src="tp20f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p> Continentalidade</p>

            <p>
                A <span class="termo clima" data-palavra="Continentalidade"
                    data-definicao="Condição climática de áreas afastadas dos oceanos, caracterizada por maior amplitude térmica e menor umidade.">continentalidade</span>
                ocorre em áreas distantes do mar, onde os oceanos deixam de influenciar
                diretamente
                o clima. Nessas regiões, o solo e o ar continental aquecem e resfriam mais
                rápido,
                gerando <span class="termo clima" data-palavra="Amplitude Térmica"
                    data-definicao="Diferença entre a temperatura máxima e a temperatura mínima registradas em um local, seja ao longo de um dia ou de um ano.">amplitude
                    térmica</span> acentuada
                (diferença maior entre dia e noite).
            </p>

            <p>
                Os climas continentais apresentam grandes contrastes de temperatura, menor umidade do ar e redução das chuvas.
            </p>

            <div class="w3-panel w3-sand w3-leftbar">
                <p> Exemplo: o <em>deserto de Gobi</em>, na Ásia, apresenta verões muito quentes e
                    invernos
                    rigorosamente frios, resultado da forte continentalidade.</p>
            </div>

            <div class="area">
                <img alt="Amplitude térmica em áreas continentais" class="w3-mobile" id="imagem4" src="tp20f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (mares) -->
        <div class="topico">

            <h2> 3. Marés</h2>

            <p>As <span class="termo clima" data-palavra="Marés"
                    data-definicao="Movimentos periódicos de subida e descida do nível do mar, provocados principalmente pela atração gravitacional da Lua e do Sol.">marés</span>
                são movimentos periódicos de
                subida e descida do nível das águas dos mares e oceanos.
                Elas ocorrem principalmente devido à atração gravitacional da Lua
                e, em menor escala, do Sol.
            </p>

            <p> Ciclo das Marés<br>
                - A água sobe durante cerca de 6 horas →
                maré alta (preamar).<br>
                - Depois desce durante outras 6 horas →
                maré baixa (baixa-mar).<br>
                - A diferença entre elas é chamada de
                amplitude da maré.<br><br>
                Enchente: água avança em direção à costa.<br>
                Vazante: água recua em direção ao alto-mar.
            </p>

            <p> Tipos de Maré<br>
                - Maré de Sizígia (águas-vivas): ocorre na
                Lua Nova e
                Lua Cheia. Resulta em maior amplitude.<br><br>
                - Maré de Quadratura (águas-mortas): ocorre no
                Quarto Crescente e
                Quarto Minguante. Resulta em menor amplitude.
            </p>

            <div class="w3-sand w3-padding w3-round-large w3-margin-top">
                <p> Fatores Locais<br>
                    A intensidade das marés varia de acordo com:<br>
                    - A formação da costa → baías e estuários em forma de funil
                    podem gerar marés muito intensas.<br>
                    - A profundidade e tamanho dos mares → influenciam
                    a propagação da onda de maré.
                </p>

                <div class="area">
                    <img alt="Fatores locais que influenciam a intensidade das marés" class="w3-mobile" id="imagem5" src="tp20f05.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Fonte: Brasil Escola. </p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (massas de ar) -->
        <div class="topico">

            <h2> 4. Massas de Ar</h2>

            <p>As <span class="termo clima" data-palavra="Massas de Ar"
                    data-definicao="Grandes porções da atmosfera com características homogêneas de temperatura, pressão e umidade, capazes de se deslocar e alterar o clima de outras regiões.">massas
                    de ar</span> são grandes porções da atmosfera
                com características homogêneas de temperatura,
                umidade e
                pressão.
                Elas podem se manter sobre oceanos ou continentes e influenciam diretamente o
                clima e o tempo das regiões por onde passam.
            </p>

            <p> Condições para formação<br>
                - Superfícies planas e extensas<br>
                - Baixa altitude<br>
                - Homogeneidade das características superficiais<br><br>
                Por isso, as massas de ar geralmente se formam sobre
                oceanos,
                mares e
                planícies continentais.
            </p>

            <div class="w3-sand w3-padding w3-round-large w3-margin-top">
                <p> Classificação das Massas de Ar</p>
                <ul>
                    <li>cP – Polar Continental → fria, seca e estável.</li>
                    <li>mP – Polar Marítima → fria, úmida e instável.</li>
                    <li>cT – Tropical Continental → quente, seca e instável.</li>
                    <li>mT – Tropical Marítima → quente, úmida e instável.</li>
                    <li>cA – Ártica/Antártica Continental → extremamente fria e seca.</li>
                </ul>
            </div>

            <p> Locais de Formação<br>
                - Oceanos e mares tropicais → massas de ar quentes e úmidas<br>
                - Planícies continentais → massas de ar quentes e secas<br>
                - Regiões polares → massas de ar frias e estáveis
            </p>

            <div class="area">
                <img alt="Locais de formação das massas de ar" class="w3-mobile" id="imagem6" src="tp20f06.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (moncoes) -->
        <div class="topico">

            <h2> 5. Monções</h2>

            <p>As <span class="termo clima" data-palavra="Monções"
                    data-definicao="Ventos sazonais que ocorrem especialmente no sul e sudeste da Ásia, responsáveis por alternar períodos de intensas chuvas no verão e estiagem no inverno.">monções</span>
                são sistemas de circulação atmosférica
                caracterizados por uma inversão sazonal dos ventos.
                Esse fenômeno ocorre devido às diferenças de aquecimento entre
                continentes e
                oceanos.
            </p>

            <p>O caso mais conhecido acontece na Índia e no Sudeste Asiático,
                onde as monções determinam períodos de chuvas intensas no verão
                e de estiagem no inverno.</p>

            <div class="w3-sand w3-padding w3-round-large w3-margin-top">
                <p> Verão (Hemisfério Norte)</p>
                <ul>
                    <li>O continente asiático aquece mais rápido que o oceano.</li>
                    <li>Forma-se uma baixa pressão sobre a terra.</li>
                    <li>Ventos sopram do oceano Índico (alta pressão) para o continente.
                    </li>
                    <li>Carregam umidade que, ao encontrar o
                        Himalaia, gera
                        chuvas torrenciais → estação chuvosa.
                    </li>
                </ul>
            </div>

            <div class="w3-padding w3-round-large w3-margin">
                <p> Inverno (Hemisfério Norte)</p>
                <ul>
                    <li>O continente resfria mais rápido que o oceano.</li>
                    <li>Forma-se uma alta pressão sobre a terra.</li>
                    <li>Ventos sopram do continente (frio e seco) em direção ao
                        oceano Índico.
                    </li>
                    <li>Resultado: estiagem → estação seca.</li>
                </ul>
            </div>

            <div class="w3-panel w3-sand w3-leftbar w3-margin">
                <p> Curiosidade: as monções são vitais para a agricultura,
                    pois determinam o calendário de plantio e
                    colheita em vários países asiáticos.
                </p>

                <div class="area">
                    <img alt="Monções asiáticas" class="w3-mobile" id="imagem7" src="tp20f07.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo </button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (ventos alisios) -->
        <div class="topico">

            <h2> 6. Ventos Alísios</h2>

            <div class="area">
                <img alt="Formação dos ventos alísios" class="w3-mobile" id="imagem8" src="tp20f08.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                Os <span class="termo clima" data-palavra="Ventos Alísios"
                    data-definicao="Ventos constantes que sopram de leste para oeste próximos ao Equador, transportando umidade e influenciando a formação de florestas tropicais e desertos.">ventos
                    alísios</span> são correntes de ar constantes que sopram
                de leste para oeste próximos ao Equador.
                No Hemisfério Norte, eles vêm do nordeste; já no Hemisfério Sul, do sudeste.
                Sua origem está no aquecimento desigual da Terra: a região equatorial recebe mais calor,
                fazendo com que o ar quente suba. Esse espaço é então ocupado pelo ar mais frio proveniente
                das zonas subtropicais. A rotação da Terra, por meio do <span
                    class="termo clima" data-palavra="Efeito Coriolis"
                    data-definicao="Efeito causado pela rotação da Terra que desvia o movimento dos ventos e correntes marítimas, para a direita no Hemisfério Norte e para a esquerda no Hemisfério Sul.">Efeito
                    Coriolis</span>,
                desvia esses ventos, direcionando-os para a direita no Hemisfério Norte e para a esquerda no Hemisfério Sul.
            </p>

            <p>
                A importância dos ventos alísios é enorme. Eles transportam umidade e levam chuvas para as regiões
                equatoriais, o que contribui para a formação das florestas tropicais. Em contrapartida, ajudam a criar
                áreas secas em regiões subtropicais, favorecendo a formação de desertos. Além disso, movimentam
                correntes oceânicas que regulam o clima global, contribuem para a formação de ciclones tropicais
                (como furacões e tufões) e ainda transportam poeira e nutrientes, mantendo ecossistemas distantes.
            </p>

            <p>
                Esse transporte de partículas em escala intercontinental também explica um fenômeno curioso observado
                em imagens de satélite: a fumaça e o CO₂ liberados pelas queimadas na Amazônia aparecem, dias depois,
                sobre o continente africano, e vice-versa, já que a África também registra queimadas em suas savanas
                tropicais. Isso ocorre porque os ventos alísios sopram continuamente de Leste para Oeste na faixa
                equatorial, cruzando o Oceano Atlântico e conectando atmosfericamente os dois continentes. É a mesma
                circulação geral da atmosfera que, em sentido inverso, também carrega poeira do deserto do Saara até a
                bacia amazônica, fertilizando o solo da floresta com minerais africanos.
            </p>

            <div class="w3-panel w3-sand w3-leftbar w3-margin">
                <p><em>Curiosidade: durante séculos, os ventos alísios foram usados por navios à vela como rotas seguras e
                        rápidas de comércio.</em></p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (correntes maritimas) -->
        <div class="topico">

            <h2> 7. Correntes Marítimas</h2>

            <p><img src="tp20f09.png" style="width:100%;cursor:zoom-in" alt="Correntes marítimas do mundo"
                    onclick="document.getElementById('tp20f09').style.display='block'">
            </p>
            <p class="citacao" style="display:block"> Toque na imagem para ampliar. Fonte: organizado pelo autor. </p>

            <div class="w3-container">
                <div id="tp20f09" class="w3-modal" onclick="this.style.display='none'">
                    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                    <div class="w3-modal-content w3-animate-zoom">
                        <img src="tp20f09a.png" style="width:100%">
                        <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity">Mapa
                            Correntes marítimas.
                        </span>
                    </div>
                </div>
            </div>

            <p>
                As
                <span class="termo clima" data-palavra="Correntes Marítimas"
                    data-definicao="Movimentos contínuos das águas dos oceanos que transportam calor e influenciam o clima, podendo ser quentes ou frias.">correntes
                    marítimas</span>
                são movimentos contínuos das águas do mar,
                que transportam grandes massas d'água com diferentes temperaturas, salinidade e densidade.
                Essas correntes podem ser classificadas em quentes, que se originam
                próximas ao Equador e aumentam a evaporação da água, tornando as regiões por onde passam mais chuvosas,
                e em frias, que vêm de áreas polares ou frias, reduzindo a umidade
                e deixando as regiões mais secas.
            </p>

            <p>
                No mundo, algumas correntes se destacam pela sua força e impacto climático. No
                <u>Atlântico</u>, podemos citar as correntes Equatoriais do Norte e do Sul, a Corrente das Guianas (quente)
                e as correntes das Malvinas e da Guiné (frias). Já no <u>Pacífico</u>, temos a Corrente de Kuroshio, a
                Corrente
                do Pacífico Norte, a das Aleutas, a do Peru ou Humboldt e o fenômeno El Niño. Entre as mais importantes
                globalmente estão a Corrente do Golfo, extremamente poderosa e quente, e a
                Corrente Circumpolar Antártica, uma das maiores do planeta. No Brasil, a
                Corrente do Brasil transporta um volume de água maior do que o próprio rio Amazonas,
                mostrando sua grandiosidade.
            </p>

            <p>
                Essas correntes desempenham um papel essencial para a regulação climática
                global.
                Elas redistribuem o calor no planeta, tornando áreas frias mais amenas e resfriando regiões quentes.
                Também influenciam diretamente a navegação, a pesca, a biodiversidade marinha e até mesmo o clima em
                continentes inteiros.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Duas cidades na mesma latitude podem ter climas bem diferentes?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Sim. A latitude é só um dos fatores climáticos. Uma cidade litorânea recebe a influência reguladora da maritimidade, com menor amplitude térmica e mais umidade, enquanto outra na mesma latitude, mas no interior do continente, sofre com a continentalidade, com invernos e verões mais extremos. A altitude também pesa: duas cidades na mesma latitude, uma no nível do mar e outra nos Andes, terão temperaturas médias bem diferentes. É a combinação de vários fatores que define o clima de um lugar, não um único deles isoladamente.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que a fumaça de queimadas na Amazônia aparece em imagens de satélite sobre a África dias depois?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque os ventos alísios sopram continuamente de leste para oeste na faixa equatorial, cruzando o Oceano Atlântico e conectando atmosfericamente os dois continentes. Esse mesmo sistema de ventos, em sentido inverso, também carrega poeira do deserto do Saara até a bacia amazônica, fertilizando o solo da floresta com minerais africanos. É a prova de que a atmosfera não reconhece fronteiras entre continentes.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se a Lua é muito menor que o Sol, por que ela influencia mais as marés do que ele?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque a força de maré depende não só da massa do corpo celeste, mas também da sua distância. A Lua está muito mais próxima da Terra do que o Sol, e essa proximidade faz sua atração gravitacional variar mais entre o lado da Terra voltado para ela e o lado oposto, o que é justamente o que gera o efeito de maré. Por isso a Lua tem cerca do dobro da influência do Sol sobre as marés, mesmo sendo imensamente menor.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico" id="sumario">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é latitude e como ela influencia o clima de uma região?</h3>
                <h3>2. Por que cidades localizadas em altitudes elevadas, como La Paz (3.600 m), apresentam temperaturas mais baixas que cidades no nível do mar, mesmo estando próximas aos trópicos?</h3>
                <h3>3. Diferencie maritimidade e continentalidade e explique seus efeitos no clima.</h3>
                <h3>4. Dê um exemplo de como as correntes marítimas influenciam o clima de uma região.</h3>
                <h3>5. O que são massas de ar e quais os principais tipos?</h3>
                <h3>6. Explique o fenômeno das monções e sua importância para a agricultura.</h3>
                <h3>7. O que são ventos alísios e por que foram importantes na história das navegações?</h3>
                <h3>8. Explique como se formam as marés e cite um local no mundo onde elas são muito intensas.</h3>
                <h3>9. Como as correntes marítimas quentes e frias influenciam a temperatura e a umidade das regiões costeiras? Dê exemplos de correntes que afetam o Brasil.</h3>
                <h3>10. Explique como os ventos alísios conectam atmosfericamente a Amazônia e o continente africano, carregando poeira e fumaça entre os dois continentes.</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre quais fatores, além da latitude, influenciam o clima de um lugar. Agora você conhece a lista completa: latitude, altitude, maritimidade, continentalidade, marés, massas de ar, monções, ventos alísios e correntes marítimas atuam juntos, não isoladamente, moldando o clima de cada região do planeta.</p>

                <p>Você também viu como esses fatores conectam lugares distantes: os ventos alísios ligam a Amazônia à África, as correntes marítimas regulam o litoral brasileiro, e a Lua, mesmo pequena, comanda o ritmo das marés em todo o planeta.</p>

                <p><strong>Resumo dos conceitos:</strong> latitude e altitude; maritimidade e continentalidade; amplitude térmica; marés; massas de ar; monções; ventos alísios e Efeito Coriolis; correntes marítimas.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Ficha de conceitos -->
        <div class="topico">
            <div id="ficha-conceitos" style="display:block">
                <h3>Ficha de Conceitos</h3>
                <p class="contador" id="gloss-contador">0 termos coletados</p>
                <ul id="lista-glossario"></ul>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Transicao final -->
        <div class="topico">
            <h3>Antes de finalizar, vamos revisar o que aprendemos!</h3>
            <button class="btnShow" onclick="
    if(this.disabled) return;
    this.disabled = true;
    ProcessarResposta(this, {
        correto: true,
        idFrase: 'respFinal',
        idGlobo: 'globinhorespFinal',
        classe: '',
        mensagem: 'o tema Fundamentos de Climatologia II é fascinante! Continue estudando!',
        pontos: 40
    });
    MostrarProximo(this);
">Próximo</button>
            <p id="respFinal"></p>
            <div class="area">
                <p><img src="/fotoIndex/globinhoPe.png" id="globinhorespFinal" style="display:none"
                        alt="globinhorespFinal" width="64" height="64"></p>
            </div>
            <hr>
        </div>

        <!-- TÓPICO FINALIZAR -->
        <div class="topico">
            <button class="btnShow" onclick="mostraCinza(); this.style='display:none'">Finalizar</button>
        </div>


        <!-- ===== SEÇÃO FINAL: PARA SABER MAIS + REFERÊNCIAS ===== -->
        <div id="final-da-aula" class="bibliografias w3-content w3-padding-64" style="max-width:700px">
            <hr>
            <h3 class="w3-center w3-text-green fontePixel"><strong>Para saber mais:</strong></h3>
            <div class="w3-row-padding" id="links-gerados"></div>

            <div class="w3-container w3-padding-64">
                <h3 class="fontePixel w3-center w3-text-green">
                    <strong><i class="fa fa-book"></i> Referências Bibliográficas</strong>
                </h3>
                <div id="biblio-gerada"></div>
            </div>
        </div>

        <br><br>

        <div class="w3-padding-48">
            <span id="numero"></span>
            <span id="txtBarra">0%</span>
            <progress value="0" max="100" id="progress"></progress>
        </div>

    </main>


    <?php include __DIR__ . '/../../../includes/footer.php'; ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-DPX55DSFZ0');
    </script>

</body>

</html>
