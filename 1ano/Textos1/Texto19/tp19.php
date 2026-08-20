<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Fundamentos de climatologia: atmosfera, tempo e clima, massas de ar, pressão atmosférica, ventos e precipitação">
    <meta property="og:title" content="Texto 19 - Fundamentos de Climatologia I">
    <meta property="og:description" content="Camadas da atmosfera, tempo vs clima, massas de ar, pressão atmosférica, ventos e precipitação">
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

    <title>1º ano - Texto 19 - Fundamentos de climatologia I</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Diferenciar tempo e clima. Identificar e compreender os elementos do clima (temperatura, pressão atmosférica, umidade, ventos e precipitação).</span></p>
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
                <p class="w3-pale-green">Pense em um dia em que choveu de repente, ou em um verão muito mais quente que o normal. As pessoas costumam dizer "o clima mudou muito" quando, na verdade, estão falando do tempo daquele dia.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: para você, qual é a diferença entre tempo e clima? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">

            <div class="w3-container w3-padding w3-round-large">

                <h2>Introdução</h2>

                <p>
                    <span class="primeiraLetra"><strong>N</strong></span>a aula anterior estudamos os
                    solos, entendendo como eles se formam, como são utilizados
                    e de que forma podem ser conservados. Agora, vamos olhar para o
                    céu!
                </p>

                <div class="w3-panel w3-sand w3-leftbar w3-round-large">
                    <p>
                        A Climatologia é como uma lente que revela os segredos da atmosfera.
                        Com ela, entendemos não apenas o presente, mas também o futuro do planeta.
                    </p>
                </div>

                <p>
                    Nesta aula, vamos dar os primeiros passos no estudo da
                    Climatologia, a área da Geografia que analisa os fenômenos que
                    acontecem
                    na atmosfera da Terra.
                    Vamos entender o que é o clima, o que é o
                    tempo e conhecer os
                    elementos do clima, que são:
                    temperatura,
                    umidade,
                    pressão atmosférica,
                    ventos e
                    precipitação.
                </p>

                <div class="w3-panel w3-sand w3-border-left w3-round-large">
                    <p>
                        Dica de leitura visual:
                        pense no clima como a personalidade da atmosfera
                        e no tempo como seu humor diário.
                    </p>
                </div>

                <p>
                    Compreender esses elementos é essencial para interpretar as
                    mudanças no tempo,
                    entender os tipos de clima e perceber como esses fenômenos
                    afetam o nosso dia a dia.
                </p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (atmosfera) -->
        <div class="topico">

            <h2>1. O que é a atmosfera da Terra?</h2>

            <div class="area">
                <img alt="Camadas de gases que envolvem a Terra" class="w3-mobile" id="imagem1a" src="tp19f01a.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                A <span class="termo clima" data-palavra="Atmosfera"
                    data-definicao="Camada de gases que envolve todo o planeta Terra, funcionando como um grande cobertor protetor que mantém temperaturas adequadas à vida e protege contra a radiação ultravioleta.">atmosfera</span> é
                uma camada de gases que envolve todo o planeta
                Terra, funcionando como um grande cobertor protetor.
                Ela mantém temperaturas adequadas à vida e protege os organismos da
                <span class="termo clima" data-palavra="Radiação Ultravioleta"
                    data-definicao="Tipo de radiação emitida pelo Sol, invisível ao olho humano, que pode causar queimaduras e câncer de pele quando em excesso.">
                    radiação ultravioleta
                </span>.
            </p>

            <p>
                Esses gases existem desde a formação da Terra, há bilhões de anos, e foram sendo transformados ao longo
                do tempo. Suas fontes são diversas:
            </p>

            <ul class="w3-ul w3-margin-left">
                <li>Atividade geológica (como vulcões);</li>
                <li>Impactos de meteoros;</li>
                <li>Vida orgânica (plantas, animais, microrganismos);</li>
                <li>Atividades humanas, como a indústria e a queima de combustíveis.</li>
            </ul>

            <p>
                Essa mistura de gases não é homogênea. Sua composição, temperatura e densidade variam conforme a
                altitude: quanto mais alto, mais rarefeito é o ar.
            </p>

            <p>
                A gravidade mantém essa camada no lugar.
                Ela é mais densa próxima ao solo e vai ficando leve conforme subimos.
                Para se ter ideia, os primeiros 29 km concentram cerca de 98% da massa da atmosfera.
            </p>

            <p>
                Sua principal função é proteger a vida:
                filtra radiações perigosas, regula a temperatura do planeta e permite os
                ciclos do ar e da água,
                indispensáveis à existência.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (composicao) -->
        <div class="topico">

            <h2>2. Composição da Atmosfera</h2>

            <p>
                Mesmo sendo muito fina em relação ao tamanho da Terra
                (representa apenas 0,0001% da massa total do planeta),
                a atmosfera é essencial para a manutenção da vida.
            </p>

            <p>
                Ela é formada por uma mistura de gases invisíveis, que garantem a respiração, a fotossíntese
                e o equilíbrio térmico do planeta:
            </p>

            <div class="area">
                <img alt="Composição de gases da atmosfera" class="w3-mobile" id="imagem1b" src="tp19f01b.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p><strong>Nitrogênio (N₂) – 78%</strong><br>
                Gás mais abundante da atmosfera. Não participa diretamente da respiração, mas é fundamental
                no ciclo do nitrogênio, que ajuda no crescimento das plantas.
            </p>

            <p><strong>Oxigênio (O₂) – 21%</strong><br>
                Essencial para a respiração de animais e microrganismos. Também permite a combustão,
                inclusive no corpo humano, quando usamos a energia dos alimentos.
            </p>

            <p><strong>Argônio (Ar) – 0,0934%</strong><br>
                Gás nobre, sem cor, cheiro ou sabor, que quase não reage com outros elementos.
            </p>

            <p><strong>Dióxido de Carbono (CO₂) – 0,033%</strong><br>
                Apesar de estar em pequena quantidade, é fundamental.
                As plantas o utilizam na fotossíntese e ele participa do
                <span class="termo ciencia" data-palavra="Efeito Estufa"
                    data-definicao="Processo natural em que gases da atmosfera retêm parte do calor do Sol, mantendo a Terra aquecida. O excesso desses gases intensifica o aquecimento global.">
                    efeito estufa
                </span>, ajudando a manter o planeta aquecido.
                Contudo, seu excesso tem causado problemas como o aquecimento global.
            </p>

            <p>
                Além desses, existem outros gases em menor quantidade, como o
                vapor d'água, o ozônio (O₃), o hélio (He),
                o metano (CH₄) e o hidrogênio (H₂).
            </p>

            <div class="w3-panel w3-sand w3-round w3-border-left w3-margin">
                <p><em>Curiosidade:</em> mesmo em pequenas concentrações, esses gases
                    "menores" podem ter grande impacto no clima e na vida na Terra.
                    O vapor d'água, por exemplo, é essencial para fenômenos como chuvas, nevoeiros e geadas.
                </p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (estrutura da atmosfera) -->
        <div class="topico">

            <h2>3. Estrutura da Atmosfera</h2>

            <p>
                A atmosfera é como uma grande "capa de gases" que envolve a Terra e torna a vida possível.
                Ela pode ser dividida de várias formas: por composição, por temperatura e por
                função.
                Vamos conhecer cada uma delas:
            </p>

            <h3> Divisão por Composição</h3>

            <div class="w3-panel w3-sand w3-round">
                <p>Homosfera: vai do solo até cerca de 80 km. Aqui os gases estão bem misturados
                    (nitrogênio e oxigênio). É onde fica a
                    <span class="termo ciencia" data-palavra="Camada de Ozônio"
                        data-definicao="Região da estratosfera rica em ozônio (O₃), responsável por filtrar a radiação ultravioleta do Sol.">
                        camada de ozônio
                    </span>, fundamental para a vida.
                </p>
            </div>

            <div class="w3-panel w3-sand w3-round">
                <p>Heterosfera: acima de 80 km. Os gases se separam: os mais pesados (oxigênio e
                    nitrogênio)
                    ficam
                    abaixo, e os mais leves (hidrogênio e hélio) acima.</p>
            </div>

            <h3> Divisão por Temperatura</h3>

            <div class="w3-panel w3-round">
                <p>Troposfera: até 18 km de altura. É onde vivemos e onde ocorrem os fenômenos do clima
                    (chuvas, ventos, nuvens). Quanto mais alto, mais frio.</p>
            </div>

            <div class="w3-panel w3-sand w3-round">
                <p>Estratosfera: de 18 a 50 km. Contém a camada de ozônio e é usada por aviões comerciais
                    devido à estabilidade do ar.</p>
            </div>

            <div class="w3-panel w3-round">
                <p>Mesosfera: de 50 a 80 km. A parte mais fria da atmosfera (até -90°C). Os meteoros
                    queimam
                    aqui,
                    formando as "estrelas cadentes".</p>
            </div>

            <div class="w3-panel w3-sand w3-round">
                <p>Termosfera: vai de 80 até 500 km. Apesar das altas temperaturas (até 1.200°C), o ar
                    rarefeito
                    impede a sensação de calor. Aqui acontecem as auroras boreais e está a Estação Espacial
                    Internacional.</p>
            </div>

            <div class="w3-panel w3-round">
                <p>Exosfera: a camada mais externa, onde a atmosfera se mistura com o espaço sideral. É a
                    região
                    em que orbitam muitos satélites.</p>
            </div>

            <h3> Divisão por Função</h3>

            <div class="w3-panel w3-sand w3-round">
                <p>Ozonosfera: rica em ozônio, localizada na estratosfera. Filtra os raios ultravioleta
                    perigosos
                    do Sol, sem os quais a vida seria inviável.</p>
            </div>

            <div class="w3-panel w3-round">
                <p>Ionosfera: acima da mesosfera. Reflete ondas de rádio e absorve radiações do
                    espaço, sendo
                    essencial para as comunicações.</p>
            </div>

            <div class="area">
                <img alt="Camadas da atmosfera" class="w3-mobile" id="imagem1" src="tp19f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Camadas da atmosfera. Fonte: organizado pelo autor. </p>

            <div class="w3-panel w3-center w3-topbar w3-bottombar w3-light-gray">
                <span class="w3-large w3-serif">
                    A atmosfera é como uma grande "capa de gases" que envolve a Terra,
                    tornando a <span class="w3-xlarge w3-center w3-serif">vida
                        possível.</span>
                </span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tempo e clima) -->
        <div class="topico">

            <h2>4. Tempo e Clima: Qual a diferença?</h2>

            <p><span class="termo ciencia" data-palavra="Tempo"
                    data-definicao="Condição momentânea da atmosfera em um local, como sol, chuva ou vento.">Tempo</span>
                e <span class="termo ciencia" data-palavra="Clima"
                    data-definicao="Média histórica das condições atmosféricas de uma região, ao longo de 30 anos ou mais.">Clima</span>
                parecem a mesma coisa, mas não são!</p>

            <p> O clima é como a "personalidade" da atmosfera (se uma região costuma ser
                chuvosa, seca,
                fria ou quente).
                Já o tempo é o "humor" dela em um dia específico (se está ensolarado ou chuvoso
                hoje).
            </p>

            <div class="w3-panel w3-sand w3-border w3-round">
                <h3>Meteorologia vs Climatologia</h3>
                <p>Meteorologia: ciência que observa e prevê o tempo de curto prazo, analisando variáveis
                    como
                    temperatura e vento.</p>
                <p>Climatologia: parte da meteorologia que estuda padrões históricos de longo prazo para
                    entender
                    os tipos de clima.</p>
            </div>

            <div class="w3-panel w3-sand w3-border w3-round">
                <h3>Geografia + Clima</h3>
                <p>O estudo do clima ajuda a compreender como ele "molda o mapa":</p>
                <ul class="w3-ul w3-border">
                    <li> Relevo: ventos e chuvas esculpem montanhas e vales.</li>
                    <li> Vegetação: define os biomas (florestas, desertos, savanas).</li>
                    <li> Solo: influencia a fertilidade e a agricultura.</li>
                    <li> Atividades humanas: afeta a arquitetura, a cultura e o modo de vida.</li>
                </ul>
            </div>

            <div class="w3-panel w3-sand w3-round">
                <h3>Elementos do Clima</h3>
                <p>São os atributos medidos para entender tempo e clima:</p>
                <p> Temperatura: calor do ar.<br>
                    Umidade: vapor de água presente.<br>
                    Pressão atmosférica: peso do ar sobre a superfície.<br>
                    Precipitação: chuva, neve, granizo.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">
                Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (massas de ar e pressao) -->
        <div class="topico">

            <h2> 5. Massas de ar e pressão atmosférica</h2>

            <p>Massas de ar</p>

            <div class="area">
                <img alt="Massas de ar" class="w3-mobile" id="imagem6b" src="tp19f06b.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Wikipédia. </p>

            <p>As <span class="termo clima" data-palavra="Massas de Ar"
                    data-definicao="Grandes porções da atmosfera com características semelhantes de temperatura, umidade e pressão, que podem se deslocar e modificar o clima de uma região.">massas
                    de ar</span>
                são grandes porções da atmosfera que apresentam características semelhantes de temperatura,
                pressão e
                umidade.</p>

            <p>Classificação por temperatura:<br>
                Quentes → nas baixas latitudes.<br>
                Frias → nas latitudes médias.<br>
                Glaciais → nas altas latitudes.</p>

            <p>Classificação por umidade:<br>
                Úmidas → formadas sobre mares e oceanos.<br>
                Secas → formadas sobre continentes.</p>

            <p>Combinação de temperatura e umidade:</p>
            <ul class="w3-ul w3-border">
                <li> Quente e úmida → baixas latitudes, sobre oceanos (ex.: Amazônia).</li>
                <li> Quente e seca → baixas latitudes, sobre continentes.</li>
                <li> Fria e úmida → médias latitudes, sobre oceanos.</li>
                <li> Fria e seca → médias/altas latitudes, sobre continentes.</li>
            </ul>

            <h3> Pressão atmosférica e vapor d'água</h3>

            <div class="area">
                <img alt="Pressão atmosférica" class="w3-mobile" id="imagem8" src="tp19f08.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: geoconceicao.blogspot.com. </p>

            <p>A pressão atmosférica é a força exercida pelo peso da atmosfera sobre a superfície
                terrestre. Essa
                pressão é causada pela gravidade e varia conforme a latitude, a altitude e as
                condições
                climáticas.</p>

            <p>Exemplo: quando subimos uma montanha, sentimos o ar "mais leve". Isso ocorre porque quanto
                maior a
                altitude, menor a densidade do ar, e portanto, menor a pressão.</p>

            <p>Fatores que influenciam:<br>
                Temperatura: ar quente → menos denso → menor pressão.<br>
                Ar frio → mais denso → maior pressão.</p>

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Curiosidade histórica</h4>
                <p>A pressão atmosférica foi descoberta pelo físico Evangelista Torricelli (1608–1647),
                    que
                    construiu o primeiro barômetro de mercúrio. Ele mostrou que, ao nível do mar, a
                    pressão é
                    capaz de sustentar uma coluna de 76 cm de mercúrio (Hg).</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo </button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (ciclo da agua) -->
        <div class="topico">

            <h2>6. O Ciclo da Água e a Umidade do Ar</h2>

            <div class="area">
                <img alt="Ciclo hidrológico" class="w3-mobile" id="imagem2" src="tp19f02.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Wikipédia. </p>

            <p>A água está em constante circulação entre a superfície e a atmosfera, no chamado ciclo hidrológico.</p>

            <p>• O Sol aquece mares e rios, causando evaporação.<br>
                • O vapor sobe, resfria e ocorre a condensação, formando
                nuvens.<br>
                • Quando o vapor retorna em forma líquida ou sólida, temos a precipitação (chuva, neve ou granizo).</p>

            <p>A <span class="termo clima" data-palavra="Umidade do Ar"
                    data-definicao="Quantidade de vapor d'água presente na atmosfera. Vem da evaporação de águas superficiais e da transpiração de plantas e seres vivos, e influencia diretamente a pressão atmosférica.">umidade
                    do ar</span> é a quantidade de vapor d'água presente na
                atmosfera.</p>

            <p>• Alta umidade → menor pressão, pois o ar úmido é menos denso.<br>
                • O vapor vem da evaporação (águas superficiais) e da transpiração
                de plantas e seres vivos.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (precipitacoes) -->
        <div class="topico">

            <h2>7. Precipitações</h2>

            <div class="area">
                <img alt="Tipos de precipitação" class="w3-mobile" id="imagem7" src="tp19f07.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Wikipédia. </p>

            <p>A <span class="termo clima" data-palavra="Precipitação"
                    data-definicao="Toda forma de água que cai da atmosfera, como chuva, neve, granizo ou garoa. Devolve a água à superfície e é essencial no ciclo da água e na definição dos climas regionais.">precipitação</span> é
                toda forma de água que cai da atmosfera
                (chuva,
                neve, granizo, garoa).</p>

            <p>Ela devolve a água à superfície e é essencial no ciclo da água e na definição dos climas regionais.</p>

            <div class="w3-panel">
                <p><strong>Principais tipos:</strong></p>

                <p>• <b>Convectiva:</b> ar quente sobe rápido → chuvas fortes e
                    rápidas
                    (ex.: chuvas de verão).<br>
                    • <b>Orográfica:</b> ar úmido sobe por barreira de relevo →
                    chuva
                    intensa no lado do vento e seca no oposto (ex.: Serra do Mar).<br>
                    • <b>Frontal:</b> encontro de massas de ar quente e frio
                    →
                    chuvas longas ou tempestades (ex.: frentes frias no Sul/Sudeste).<br>
                    • <b>Ciclônica:</b> em áreas de baixa pressão → chuvas
                    ligadas
                    a ciclones (ex.: ciclones no Atlântico Sul).</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (ventos) -->
        <div class="topico">

            <h2>8. Ventos</h2>

            <div class="w3-panel w3-sand">
                <p>O vento resulta do deslocamento de ar de uma área de <b>alta
                        pressão</b> para outra de <b>baixa
                        pressão</b>.</p>
                <p>Chama-se <b>brisa</b> uma circulação de ar de fraca a
                    moderada
                    intensidade próxima à superfície, afetando até cerca de 200 metros de altitude.</p>
                <p>Ventos locais podem dominar quando os ventos globais são fracos, como nas <b>brisas marítima/terrestre</b>.</p>
            </div>

            <div class="w3-panel w3-sand">
                <p><b>Importância climática:</b> realizam o equilíbrio térmico entre altas e baixas
                    latitudes e
                    transportam vapor d'água e umidade dos oceanos e mares para os continentes.</p>
                <p><b>Indicadores:</b> direção (pontos cardeais) e velocidade (m/s, km/h ou nós).</p>
            </div>

            <div class="w3-panel w3-sand">
                <p><b>Conceitos:</b></p>
                <p>• <span class="termo clima" data-palavra="Barlavento"
                        data-definicao="Lado da encosta de onde o vento sopra, voltado para a umidade; recebe chuvas mais intensas quando o ar úmido é forçado a subir."><b>Barlavento</b></span>: lado de onde o vento vem.<br>
                    • <span class="termo clima" data-palavra="Sotavento"
                        data-definicao="Lado da encosta para onde o vento sopra depois de descer a montanha; recebe ar mais quente e seco, resultando em menos chuvas."><b>Sotavento</b></span>: lado para onde o vento sopra.</p>
            </div>

            <div class="area">
                <img alt="Barlavento e sotavento em relevo montanhoso" class="w3-mobile" id="imagem3" src="tp19f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Universidade Federal de Santa Maria, Geografia. </p>

            <div class="w3-panel w3-sand">
                <p><b>Variação de pressão atmosférica:</b></p>
                <p>• Movimentos ascendentes – baixa pressão na superfície e alta pressão em altitude.<br>
                    • Movimentos descendentes – alta pressão na superfície e baixa pressão em altitude.</p>
            </div>

            <div class="area">
                <img alt="Deslocamento do ar entre alta e baixa pressão" class="w3-mobile" id="imagem4" src="tp19f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Universidade Federal de Santa Maria, Geografia. </p>

            <div class="w3-panel w3-sand">
                <p><b>Sistemas de pressão:</b></p>
                <p>• <span class="termo clima" data-palavra="Ciclone (Baixa Pressão)"
                        data-definicao="Sistema de baixa pressão em que o ar quente sobe, gerando convergência. Associado a tempo instável, nuvens e chuvas."><b>Baixa pressão (ciclone)</b></span>: ar quente sobe,
                    gerando <b>convergência</b>. Associado a tempo instável, nuvens e chuvas.
                    Movimento em espiral: hemisfério sul ⟳ horário, hemisfério norte ⟲ anti-horário.</p>
                <p>• <span class="termo clima" data-palavra="Anticiclone (Alta Pressão)"
                        data-definicao="Sistema de alta pressão em que o ar frio desce e diverge, reduzindo nuvens. Associado a tempo estável, céu aberto e ausência de chuvas, podendo causar estiagens."><b>Alta pressão (anticiclone)</b></span>: ar frio desce e
                    diverge,
                    reduzindo nuvens. Associado a tempo estável, céu aberto e ausência de chuvas. Pode causar
                    estiagens
                    e ondas de calor.</p>
            </div>

            <div class="area">
                <img alt="Ciclone: ar convergente em área de baixa pressão" class="w3-mobile" id="imagem5" src="tp19f05.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Universidade Federal de Santa Maria, Geografia. </p>

            <div class="area">
                <img alt="Anticiclone: ar divergente em área de alta pressão" class="w3-mobile" id="imagem6" src="tp19f06.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Universidade Federal de Santa Maria, Geografia. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se a atmosfera é tão fina perto do tamanho da Terra, por que ela não "escapa" para o espaço?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque a gravidade da Terra é forte o suficiente para segurar as moléculas de gás perto da superfície, mesmo elas se movendo em alta velocidade. É por isso que a atmosfera é mais densa perto do solo (98% da massa nos primeiros 29 km) e vai ficando cada vez mais rarefeita conforme sobe, até se misturar gradualmente com o espaço na exosfera. Planetas com gravidade muito fraca, como Mercúrio, não conseguem reter uma atmosfera densa dessa forma.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que um lado de uma serra costuma ser mais chuvoso e verde, enquanto o outro lado é mais seco?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Esse é o efeito do relevo sobre a chuva orográfica. No barlavento, o lado de onde o vento vem, o ar úmido é forçado a subir a encosta, resfria, condensa e provoca chuvas intensas. Depois de passar pelo topo, esse mesmo ar já perdeu boa parte da umidade e desce pelo sotavento mais quente e seco, formando áreas com menos chuva. É esse mecanismo que explica, por exemplo, por que a Serra do Mar é tão úmida do lado do oceano.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a diferença entre um ciclone e um anticiclone, se os dois envolvem movimento de ar?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                A diferença está na direção do movimento e no tipo de tempo que provocam. No ciclone (baixa pressão), o ar sobe e converge, o que costuma trazer nuvens, instabilidade e chuva. No anticiclone (alta pressão), o ar desce e diverge, o que costuma trazer céu limpo e tempo estável, podendo até causar estiagens prolongadas quando persiste por muito tempo sobre uma região.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico" id="sumario">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é a atmosfera e qual a sua principal função para a vida na Terra?</h3>
                <h3>2. Quais são as principais fontes dos gases que compõem a atmosfera terrestre?</h3>
                <h3>3. Qual a composição básica da atmosfera em termos de gases principais?</h3>
                <h3>4. Por que o vapor d'água é considerado essencial para os processos climáticos?</h3>
                <h3>5. Como a atmosfera é dividida em camadas de acordo com a temperatura?</h3>
                <h3>6. Qual a diferença entre tempo e clima?</h3>
                <h3>7. O que diferencia meteorologia de climatologia?</h3>
                <h3>8. O que são massas de ar e como podem ser classificadas?</h3>
                <h3>9. O que é pressão atmosférica e como Evangelista Torricelli a descobriu?</h3>
                <h3>10. Qual a importância dos ventos para o equilíbrio climático do planeta?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre a diferença entre tempo e clima. Agora você sabe que o clima é a "personalidade" da atmosfera de uma região ao longo de décadas, enquanto o tempo é o "humor" dela em um dia específico, medido por elementos como temperatura, umidade, pressão atmosférica, ventos e precipitação.</p>

                <p>Você também viu que a atmosfera é uma camada fina, mas vital, organizada em camadas com funções diferentes, e que fenômenos como massas de ar, ciclones, anticiclones e chuvas orográficas explicam por que o clima varia tanto de uma região para outra.</p>

                <p><strong>Resumo dos conceitos:</strong> atmosfera e radiação ultravioleta; efeito estufa; camada de ozônio; tempo e clima; massas de ar; umidade do ar; precipitação; barlavento e sotavento; ciclone e anticiclone.</p>

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
        mensagem: 'o tema Fundamentos de Climatologia I é fascinante! Continue estudando!',
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
