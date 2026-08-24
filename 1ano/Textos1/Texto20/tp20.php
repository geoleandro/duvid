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
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
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

            <h2> Os Fatores do Clima</h2>

            <p>Os <strong>fatores climáticos</strong> são as condições naturais que
                influenciam o clima de cada região do planeta. Eles ajudam a explicar por que alguns lugares são mais
                quentes, outros mais frios,
                alguns mais secos e outros mais chuvosos.
                Em resumo, representam características geográficas capazes de modificar os
                elementos do clima, como temperatura, umidade, pressão atmosférica,
                ventos e precipitação.
            </p>

            <p>Vale separar esses fatores em dois grupos, para organizar melhor o raciocínio. Alguns são <strong>estáticos</strong>, ou seja, praticamente fixos para cada lugar: a latitude e a altitude de uma cidade não mudam de um ano para o outro. Outros são <strong>dinâmicos</strong>, isto é, se deslocam e mudam de posição com o tempo, como as massas de ar, as correntes marítimas, os ventos e as monções, que se movem pelo planeta e podem alterar o clima de uma região dependendo da estação do ano ou até do dia. Entender essa diferença ajuda a perceber por que o clima de um lugar tem uma "base" relativamente estável, dada pela latitude e pela altitude, mas também sofre variações sazonais, causadas pelos fatores que se movimentam ao seu redor.</p>

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

            <p>No Equador, o dia e a noite duram sempre cerca de 12 horas cada, o ano inteiro. Já em latitudes muito altas, esse equilíbrio desaparece por completo: em Tromsø, no norte da Noruega, o Sol fica acima do horizonte continuamente por cerca de dois meses no verão, o chamado "sol da meia-noite", e some completamente por quase dois meses no inverno, mergulhando a cidade em noite contínua. É a prova mais extrema de como a latitude também governa a luz, não só a temperatura.</p>

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

            <p>Um exemplo direto: La Paz, capital administrativa da Bolívia, fica a cerca de 3.640 metros de altitude, o que a torna a capital mais alta do mundo. Mesmo estando bem próxima aos trópicos, sua temperatura média fica em torno de 10°C, muito mais fria do que se esperaria apenas olhando para sua latitude, justamente por causa do efeito da altitude.</p>

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


        <!-- BLOCO: Pergunta pratica (latitude x altitude) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Duas cidades estão exatamente na mesma latitude, mas uma fica ao nível do mar e a outra a 3.600 metros de altitude, como La Paz. Qual delas costuma ser mais fria?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) a cidade ao nível do mar, pois a pressão atmosférica é maior lá.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1b">
                        <span>b) a cidade de altitude elevada, porque o ar rarefeito retém menos calor.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1c">
                        <span>c) as duas têm a mesma temperatura, já que estão na mesma latitude.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: quanto maior a altitude, mais rarefeito o ar e menor sua capacidade de reter calor, mesmo perto da linha do Equador.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (maritimidade e continentalidade) -->
        <div class="topico">

            <h2> Maritimidade e Continentalidade</h2>

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

            <p>Isso acontece porque a água tem uma capacidade de armazenar calor muito maior do que o solo e as rochas: ela demora bem mais para esquentar sob o sol e, por isso mesmo, também demora bem mais para esfriar. Um oceano funciona quase como uma bateria térmica gigante, absorvendo calor durante o dia e o verão e liberando-o aos poucos durante a noite e o inverno, o que suaviza as variações de temperatura de tudo que está ao seu redor.</p>

            <p>
                Os oceanos também distribuem <mark>energia</mark> pelo planeta através das
                correntes marítimas.
                Águas frias resfriam o ar e dificultam a formação de nuvens, gerando
                <em>clima seco</em>.
                Águas quentes aquecem o ar, favorecem a condensação e tornam o clima
                <em>úmido e chuvoso</em>.
            </p>

            <p>Essas correntes marítimas, que veremos em detalhe mais adiante nesta aula, se formam principalmente por dois motivos: o atrito constante dos ventos sobre a superfície do oceano, que empurra a água na mesma direção que o vento sopra, e as diferenças de temperatura e salinidade entre massas de água, que fazem a água mais densa (fria e salgada) afundar e a mais leve (quente) subir, criando uma lenta circulação que envolve todos os oceanos do planeta.</p>

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

            <p>O Brasil também mostra esse contraste com clareza. O Rio de Janeiro, na costa, tem temperatura média em torno de 24°C o ano inteiro, com variações suaves entre verão e inverno. Já Cuiabá, no interior do Centro-Oeste, já registrou recordes de mais de 44°C durante o verão, mas nos episódios de friagem, quando uma massa polar atlântica avança forte pelo continente, sua temperatura pode despencar para perto de 13°C em poucas horas: uma amplitude de mais de 30°C que o litoral carioca jamais chega perto de sentir.</p>

            <div class="area">
                <img alt="Amplitude térmica em áreas continentais" class="w3-mobile" id="imagem4" src="tp20f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (maritimidade x continentalidade) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que uma cidade no litoral costuma ter amplitude térmica menor do que uma cidade no interior de um continente, na mesma latitude?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) porque o litoral recebe mais chuva o ano todo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) porque a água do mar esquenta e esfria mais devagar que o solo, regulando a temperatura do litoral.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) porque cidades litorâneas ficam sempre mais próximas do Equador.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: a água funciona como um regulador térmico, é justamente esse o mecanismo por trás da maritimidade.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (mares) -->
        <div class="topico">

            <h2> Marés</h2>

            <p>As <span class="termo clima" data-palavra="Marés"
                    data-definicao="Movimentos periódicos de subida e descida do nível do mar, provocados principalmente pela atração gravitacional da Lua e do Sol.">marés</span>
                são movimentos periódicos de
                subida e descida do nível das águas dos mares e oceanos.
                Elas ocorrem principalmente devido à atração gravitacional da Lua
                e, em menor escala, do Sol.
            </p>

            <p>Um detalhe que costuma confundir: por que existem duas marés altas por dia, uma vez que a Lua está de um único lado da Terra? A resposta é que a atração da Lua gera dois "abaulamentos" de água ao mesmo tempo, um no lado da Terra mais próximo dela, puxado diretamente pela sua gravidade, e outro exatamente no lado oposto, formado porque a Terra inteira é puxada na direção da Lua com mais força do que a água do lado mais distante. Como o planeta gira em torno de seu próprio eixo em 24 horas, cada ponto da costa passa por essas duas saliências de água ao longo do dia, resultando nas duas marés altas e nas duas marés baixas diárias.</p>

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

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Recordes de maré</h4>
                <p>A maior amplitude de maré do mundo acontece na Baía de Fundy, no Canadá, onde a diferença entre a maré alta e a baixa pode chegar a 17 metros, o suficiente para expor quilômetros de fundo do mar duas vezes por dia. No Brasil, o recorde fica com a Baía de São Marcos, no Golfão Maranhense, onde a costa em forma de funil, o mesmo fator local citado acima, empurra a água e produz amplitudes de até 8 metros, entre as maiores do planeta.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (sizigia x quadratura) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Em quais fases da Lua ocorre a maré de sizígia, com a maior amplitude entre maré alta e maré baixa?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) Lua Nova e Lua Cheia.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) Quarto Crescente e Quarto Minguante.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) apenas na Lua Cheia.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: nessas duas fases, Sol, Terra e Lua ficam alinhados, somando suas forças gravitacionais e produzindo a maior amplitude de maré.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (massas de ar) -->
        <div class="topico">

            <h2> Massas de Ar</h2>

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

            <p>Esse processo de formação não é instantâneo: uma massa de ar pode levar dias ou até semanas parada sobre sua região de origem, absorvendo lentamente a temperatura e a umidade típicas daquele lugar, antes de finalmente se deslocar e influenciar o tempo de outras regiões distantes.</p>

            <div class="w3-sand w3-padding w3-round-large w3-margin-top">
                <p> Classificação das Massas de Ar (Classificação de Bergeron)</p>
                <ul>
                    <li>cE - Equatorial Continental: quente, úmida e instável.</li>
                    <li>mE - Equatorial Marítima: quente, úmida e instável.</li>
                    <li>cT - Tropical Continental: quente, seca e instável.</li>
                    <li>mT - Tropical Marítima: quente, úmida e instável.</li>
                    <li>cP - Polar Continental: fria, seca e estável.</li>
                    <li>mP - Polar Marítima: fria, úmida e instável.</li>
                    <li>cA - Ártica/Antártica Continental: extremamente fria e seca (uma cP levada ao extremo).</li>
                </ul>
            </div>

            <p>Repare que o nome de cada massa segue sempre a mesma lógica: primeiro a letra minúscula indica a superfície de origem (continental ou marítima) e depois a letra maiúscula indica a faixa de latitude (Equatorial, Tropical, Polar ou Ártica/Antártica). Foi essa mesma lógica de base que você já viu na aula anterior, ao conhecer as quatro massas de ar que atuam sobre o Brasil, só que ali com uma letra extra para detalhar melhor a origem exata dentro do continente ou do oceano: a mEc, que se forma na própria Amazônia, a mTa, que nasce sobre o Atlântico, a mTc, seca e originada no Chaco, e a mPa, fria e vinda da Patagônia.</p>

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


        <!-- BLOCO: Pergunta pratica (classificacao massas de ar) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Seguindo a Classificação de Bergeron, uma massa de ar identificada como "mT" deve apresentar quais características?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) fria e seca.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4b">
                        <span>b) quente e úmida.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) fria e úmida.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: o \'m\' minúsculo indica origem marítima (úmida) e o \'T\' maiúsculo indica origem tropical (quente).', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (moncoes) -->
        <div class="topico">

            <h2> Monções</h2>

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
                e de estiagem no inverno. A monção de verão, entre junho e setembro, é responsável por cerca de 70% a 75% de toda a chuva que cai na Índia ao longo do ano inteiro, e quase metade das terras agrícolas do país, sem qualquer sistema de irrigação, depende inteiramente dessas chuvas sazonais para produzir alimento.</p>

            <p>Isso torna a Índia extremamente vulnerável à variação natural das monções de um ano para o outro: uma monção fraca ou atrasada pode significar quebra de safra e insegurança alimentar para uma fração enorme da população do país, enquanto uma monção forte demais pode causar enchentes destrutivas. Por isso, prever o comportamento da monção com antecedência é uma das tarefas mais importantes dos institutos de meteorologia indianos todos os anos.</p>

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

            <h2> Ventos Alísios</h2>

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

            <p>
                Satélites da NASA calculam que mais de 27 milhões de toneladas de poeira saem do Saara rumo à Amazônia todos os anos, carregando cerca de 22 mil toneladas de fósforo, um nutriente essencial para as plantas que a floresta perde continuamente com as fortes chuvas. Essa quantidade de fósforo vindo da África é, segundo as estimativas, muito próxima da quantidade que a própria floresta perde por ano, o que sugere que a Amazônia depende dessa "adubação" transatlântica para se manter fértil.
            </p>

            <div class="w3-panel w3-sand w3-leftbar w3-margin">
                <p><em>Curiosidade: durante séculos, os ventos alísios foram usados por navios à vela como rotas seguras e
                        rápidas de comércio. O próprio Cristóvão Colombo planejou sua viagem de 1492 em torno deles: partiu das Ilhas Canárias justamente para pegar o corredor dos ventos alísios que soprava rumo ao oeste, o que tornou a travessia até as Américas mais rápida e seus navios chegaram ao Caribe em cerca de dez semanas.</em></p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (efeito coriolis) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Para que lado o Efeito Coriolis desvia o movimento dos ventos no Hemisfério Sul?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) para a direita.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) para a esquerda.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) o efeito só existe no Hemisfério Norte.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: o texto diz que a rotação da Terra desvia os ventos para a direita no Hemisfério Norte e para a esquerda no Hemisfério Sul.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (correntes maritimas) -->
        <div class="topico">

            <h2> Correntes Marítimas</h2>

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
                do Pacífico Norte, a das Aleutas, a do Peru ou Humboldt e o fenômeno El Niño, um enfraquecimento periódico dessa corrente fria que aquece as águas do Pacífico e altera o clima em escala global, tema que veremos com calma na próxima aula. Entre as mais importantes
                globalmente estão a Corrente do Golfo, extremamente poderosa e quente, e a
                Corrente Circumpolar Antártica, uma das maiores do planeta. No Brasil, a
                Corrente do Brasil transporta um volume de água maior do que o próprio rio Amazonas,
                mostrando sua grandiosidade: enquanto a foz do Amazonas despeja cerca de 0,3 Sverdrup no oceano (a unidade usada para medir correntes, equivalente a um milhão de metros cúbicos de água por segundo), a Corrente do Brasil já transporta o equivalente a vários Sverdrups próximo à costa nordestina, um volume que só cresce conforme ela avança rumo ao sul do país.
            </p>

            <p>A Corrente do Golfo, por sinal, é um ótimo exemplo de como a maritimidade e as correntes marítimas trabalham juntas. Lisboa, em Portugal, e Nova York, nos Estados Unidos, ficam em latitudes parecidas, dos dois lados do Atlântico Norte, mas têm invernos bem diferentes: enquanto Lisboa raramente vê a temperatura cair abaixo de 8°C, aquecida pela influência da Corrente do Golfo, Nova York enfrenta nevascas frequentes e temperaturas negativas, já que recebe a influência da fria Corrente do Labrador. Duas cidades quase na mesma latitude, mas com invernos completamente diferentes, tudo por causa da corrente marítima que banha cada litoral.</p>

            <p>
                Essas correntes desempenham um papel essencial para a regulação climática
                global.
                Elas redistribuem o calor no planeta, tornando áreas frias mais amenas e resfriando regiões quentes.
                Também influenciam diretamente a navegação, a pesca, a biodiversidade marinha e até mesmo o clima em
                continentes inteiros.
            </p>

            <p>A Corrente de Humboldt (ou do Peru) mostra bem esse impacto na biodiversidade. Suas águas frias e ricas em nutrientes sobem das profundezas do oceano em um processo chamado ressurgência, alimentando um verdadeiro banquete de plâncton que sustenta uma das maiores áreas pesqueiras do planeta: as costas do Peru e do Chile respondem sozinhas por cerca de 18% a 20% de toda a pesca mundial, boa parte dela de anchovas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (sintese dos fatores) -->
        <div class="topico">

            <h2> Os Fatores Atuando Juntos</h2>

            <p>Agora que você conheceu cada fator separadamente, vale reforçar a ideia central desta aula: nenhum deles atua sozinho. O clima real de um lugar é sempre resultado da combinação de vários fatores ao mesmo tempo, e é justamente essa combinação que explica por que lugares parecidos no mapa podem ter climas tão diferentes.</p>

            <p>Pense em três exemplos que você já conhece: Manaus, próxima ao Equador e sob influência da massa equatorial continental, é quente e úmida o ano inteiro. La Paz, em latitude tropical, deveria ser quente como Manaus, mas sua altitude de mais de 3.600 metros a torna fria. Lisboa, em latitude bem mais alta e mais fria que as duas anteriores, tem invernos surpreendentemente amenos graças à maritimidade e ao calor trazido pela Corrente do Golfo. Latitude parecida, resultados completamente diferentes, tudo por causa dos outros fatores que entram na equação.</p>

            <p>Esse é o tipo de raciocínio mais cobrado em provas como o ENEM: não decorar cada fator isoladamente, mas entender como eles se combinam para explicar uma situação climática real e específica, seja o clima de uma cidade, seja o de uma região inteira do planeta.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Escreva o nome da baía, no Canadá, que tem a maior amplitude de maré do mundo, podendo chegar a 17 metros.</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'fundy', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome do processo em que a Corrente de Humboldt traz água fria e rica em nutrientes das profundezas do oceano até a superfície, alimentando uma das maiores áreas de pesca do mundo.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'ressurgência', 'resp1b', this, 'globinho1b')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1b" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <div class="w3-margin-top">
                <button class="btnHide" onclick="MostrarProximo(this)" style="display:none">
                    Próximo ➜
                </button>
            </div>
        </div>


        <!-- <div class="topico"><h2> Infográfico - Resumo</h2><div class="w3-margin"><img id="inforesumotp20" src="inforesumotp20.webp" alt="Infográfico resumo Fundamentos de Climatologia II" class="w3-mobile"><span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button><hr></div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

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

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Manaus e La Paz ficam praticamente na mesma faixa de latitude, mas uma é quente e a outra é fria. Isso não contradiz tudo que aprendemos sobre latitude?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Não contradiz, na verdade confirma o ponto principal desta aula: a latitude é só o ponto de partida, não a explicação completa. Manaus está próxima do nível do mar e sob influência de uma massa de ar quente e úmida, então o efeito da latitude aparece "puro". Já La Paz está a mais de 3.600 metros de altitude, o que introduz um segundo fator, muito mais forte naquele contexto, que sobrepõe o efeito da latitude e derruba a temperatura. Sempre que um fator climático parecer "não bater" com a realidade, é sinal de que outro fator está atuando junto e precisa entrar na conta.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre quais fatores, além da latitude, influenciam o clima de um lugar. Agora você conhece a lista completa: latitude, altitude, maritimidade, continentalidade, marés, massas de ar, monções, ventos alísios e correntes marítimas atuam juntos, não isoladamente, moldando o clima de cada região do planeta.</p>

                <p>Você também viu como esses fatores conectam lugares distantes: os ventos alísios ligam a Amazônia à África, as correntes marítimas regulam o litoral brasileiro, e a Lua, mesmo pequena, comanda o ritmo das marés em todo o planeta.</p>

                <p><strong>Resumo dos conceitos:</strong> latitude e altitude; maritimidade e continentalidade; amplitude térmica; marés; massas de ar; monções; ventos alísios e Efeito Coriolis; correntes marítimas.</p>

                <p>Agora que você já sabe quais fatores moldam o clima de cada lugar, a próxima pergunta é: o que acontece quando esse equilíbrio todo começa a mudar? Na próxima aula vamos estudar as mudanças climáticas globais, o aquecimento do planeta, os fenômenos El Niño e La Niña, que alteram temporariamente as correntes marítimas que você acabou de conhecer, e o papel do efeito estufa nesse processo.</p>

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

            <div class="w3-container w3-padding-64 secao-livros-sugeridos">
                <h3>📚 Sugestões de Livros</h3>
                <div id="livros-gerados"></div>
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
