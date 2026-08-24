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
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
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

            <h2>O que é a atmosfera da Terra?</h2>

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

            <p>Para entender a importância dessa camada, basta comparar a Terra com seus vizinhos. Marte tem uma atmosfera extremamente rarefeita, com menos de 1% da pressão terrestre, insuficiente para reter calor ou permitir água líquida na superfície. Vênus, ao contrário, tem uma atmosfera densíssima, composta quase inteiramente por dióxido de carbono, que provoca um efeito estufa descontrolado e mantém a superfície a quase 470°C, mais quente até do que Mercúrio, o planeta mais próximo do Sol. A atmosfera terrestre está no equilíbrio certo entre esses dois extremos: nem tão fina a ponto de não reter calor algum, nem tão espessa a ponto de sufocar o planeta em calor.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (composicao) -->
        <div class="topico">

            <h2>Composição da Atmosfera</h2>

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

            <p><strong>Nitrogênio (N₂) - 78%</strong><br>
                Gás mais abundante da atmosfera. Não participa diretamente da respiração, mas é fundamental
                no ciclo do nitrogênio, que ajuda no crescimento das plantas.
            </p>

            <p><strong>Oxigênio (O₂) - 21%</strong><br>
                Essencial para a respiração de animais e microrganismos. Também permite a combustão,
                inclusive no corpo humano, quando usamos a energia dos alimentos.
            </p>

            <p><strong>Argônio (Ar) - 0,93%</strong><br>
                Gás nobre, sem cor, cheiro ou sabor, que quase não reage com outros elementos.
            </p>

            <p><strong>Dióxido de Carbono (CO₂) - cerca de 0,043% (mais de 430 partes por milhão)</strong><br>
                Apesar de estar em pequena quantidade, é fundamental, e vem crescendo: em meados do século XX a concentração era de cerca de 0,03%, e desde então mais que aumentou em um terço por causa da queima de combustíveis fósseis e do desmatamento.
                As plantas o utilizam na fotossíntese e ele participa do
                <span class="termo ciencia" data-palavra="Efeito Estufa"
                    data-definicao="Processo natural em que gases da atmosfera retêm parte do calor do Sol, mantendo a Terra aquecida. O excesso desses gases intensifica o aquecimento global.">
                    efeito estufa
                </span>, ajudando a manter o planeta aquecido.
                Contudo, seu excesso tem causado problemas como o aquecimento global.
            </p>

            <p>
                O monitoramento contínuo desses gases, especialmente do CO₂, é feito em estações de referência
                ao redor do mundo, como o Observatório de Mauna Loa, no Havaí, em funcionamento desde 1958.
                Foi justamente esse monitoramento de décadas que permitiu aos cientistas comprovar, com dados
                concretos e contínuos, o crescimento constante da concentração de dióxido de carbono na
                atmosfera ao longo do tempo.
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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (estrutura da atmosfera) -->
        <div class="topico">

            <h2>Estrutura da Atmosfera</h2>

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
                    devido à estabilidade do ar: a maioria dos voos comerciais cruza entre 10 e 12 km de altitude, já na base dessa camada, justamente para escapar das nuvens e turbulências mais fortes que se concentram na troposfera, logo abaixo.</p>
            </div>

            <div class="w3-panel w3-round">
                <p>Mesosfera: de 50 a 80 km. A parte mais fria da atmosfera (até -90°C). Os meteoros
                    queimam
                    aqui,
                    formando as "estrelas cadentes", como as da chuva de meteoros das Perseidas, visível
                    todos os anos em agosto.</p>
            </div>

            <div class="w3-panel w3-sand w3-round">
                <p>Termosfera: vai de 80 até 500 km. Apesar das altas temperaturas (até 1.200°C), o ar
                    rarefeito
                    impede a sensação de calor. Aqui acontecem as auroras boreais e está a Estação Espacial
                    Internacional, orbitando a uma altitude média de cerca de 400 km e completando uma volta
                    inteira ao redor da Terra a cada 90 minutos, aproximadamente.</p>
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

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> O buraco na camada de ozônio</h4>
                <p>Em 1985, cientistas do British Antarctic Survey descobriram uma redução drástica na concentração de ozônio sobre a Antártida durante a primavera do hemisfério sul, o que ficou popularmente conhecido como "buraco na camada de ozônio". A causa eram os CFCs (clorofluorcarbonos), gases usados em geladeiras, sprays e ar-condicionado, que destroem moléculas de ozônio na estratosfera. Em resposta, 197 países assinaram em 1987 o Protocolo de Montreal, banindo gradualmente essas substâncias, um dos acordos ambientais mais bem-sucedidos da história. Desde então, a camada de ozônio vem se recuperando lentamente: as projeções atuais indicam recuperação completa até 2040 na maior parte do planeta, até 2045 no Ártico e até 2066 sobre a Antártida.</p>
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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tempo e clima) -->
        <div class="topico">

            <h2>Tempo e Clima: Qual a diferença?</h2>

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
                <p>Um exemplo prático: quando o INMET (Instituto Nacional de Meteorologia) divulga a previsão de chuva para o fim de semana, isso é meteorologia. Já quando o IPCC (Painel Intergovernamental sobre Mudanças Climáticas) publica um relatório sobre o aumento médio da temperatura global nas próximas décadas, isso é climatologia.</p>
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


        <!-- BLOCO: Pergunta pratica (tempo e clima) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Um telejornal anuncia "amanhã, tempo instável, com pancadas de chuva à tarde". Essa frase está falando de tempo ou de clima?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1a">
                        <span>a) tempo, porque descreve uma condição atmosférica de curtíssimo prazo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1b">
                        <span>b) clima, porque fala sobre chuva.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1c">
                        <span>c) nenhum dos dois, previsão de telejornal não é ciência.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: previsões de curto prazo, para um dia específico, sempre descrevem o tempo. O clima só aparece quando olhamos a média de muitos anos.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (temperatura e fatores climaticos) -->
        <div class="topico">

            <h2>Temperatura: Medindo o Calor do Ar</h2>

            <p>A <span class="termo clima" data-palavra="Temperatura"
                    data-definicao="Elemento do clima que mede o grau de calor ou frio do ar, medido em graus Celsius (°C) por meio de termômetros."> temperatura</span> mede
                o grau de calor ou frio do ar e é medida em graus Celsius (°C) com o uso de termômetros. A escala Celsius foi proposta em 1742 pelo astrônomo sueco Anders Celsius, que definiu 0°C como o ponto de congelamento da água e 100°C como o ponto de ebulição, ao nível do mar. Curiosamente, a escala original de Celsius era invertida (0° para a fervura e 100° para o gelo); foi só depois de sua morte que ela foi virada para o formato que usamos hoje.</p>

            <p>A temperatura não é igual em todo o planeta nem se mantém constante ao longo do tempo. A diferença entre a temperatura mais alta e a mais baixa registradas em um período, seja um único dia ou um ano inteiro, é chamada de <span
                    class="termo clima" data-palavra="Amplitude Térmica"
                    data-definicao="Diferença entre a temperatura máxima e a temperatura mínima registradas em um período (um dia ou um ano) em determinado local.">amplitude
                    térmica</span>. Regiões litorâneas costumam ter amplitude térmica menor, enquanto o interior dos continentes tende a ter verões e invernos muito mais extremos, uma diferença que está ligada a uma série de condições geográficas chamadas de fatores climáticos (latitude, altitude, maritimidade, correntes marítimas, entre outras), que vamos estudar em detalhe na próxima aula.</p>

            <p>Para ter noção da amplitude que o planeta é capaz de produzir: o recorde de temperatura mais alta já registrada foi de 56,7°C, no Vale da Morte, na Califórnia (EUA), em 1913, uma região cercada de montanhas que funcionam como uma armadilha de calor. Já o recorde de menor temperatura em uma área habitada foi registrado na Sibéria, com quase -68°C.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (temperatura) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O que é a amplitude térmica de um local?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) a temperatura média do local ao longo do ano.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) a diferença entre a temperatura máxima e a mínima registradas em um período.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) a quantidade de instrumentos usados para medir a temperatura.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: amplitude é sempre uma diferença entre um valor máximo e um valor mínimo, seja em um único dia ou ao longo de um ano inteiro.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (massas de ar e pressao) -->
        <div class="topico">

            <h2> Massas de ar e pressão atmosférica</h2>

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
                umidade. Elas se formam ao permanecerem por dias ou semanas sobre uma mesma região de origem,
                absorvendo as características de temperatura e umidade daquele lugar, e depois se deslocam,
                levando essas mesmas características para outras regiões e mudando o tempo por onde passam.</p>

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

            <h3> Massas de Ar que Atuam no Brasil</h3>

            <p>O território brasileiro é grande o suficiente para ser influenciado por quatro massas de ar principais, cada uma associada a uma origem e a um tipo de tempo diferente:</p>

            <ul class="w3-ul w3-border">
                <li><strong>Massa Equatorial Continental (mEc):</strong> se forma na própria Amazônia, quente e muito úmida. Atua com força no Norte, Centro-Oeste e parte do Sudeste, principalmente no verão, e é a responsável pelos chamados "rios voadores", correntes de vapor d'água que a floresta libera pela evapotranspiração e que carregam chuva para o restante do país.</li>
                <li><strong>Massa Tropical Atlântica (mTa):</strong> nasce quente e seca sobre o Oceano Atlântico, mas absorve umidade ao longo do trajeto até chegar quente e úmida ao litoral brasileiro, do Rio Grande do Sul à Bahia, sendo a responsável pelas chuvas orográficas da Serra do Mar.</li>
                <li><strong>Massa Tropical Continental (mTc):</strong> se origina na região árida do Chaco, entre Paraguai, Bolívia e Argentina, quente e seca. Atua principalmente no Centro-Oeste, provocando a seca típica do outono e do inverno nessa região.</li>
                <li><strong>Massa Polar Atlântica (mPa):</strong> vem do extremo sul, perto da Patagônia, fria e úmida. Avança sobre praticamente todo o território brasileiro no inverno, provocando geadas no Sul e Sudeste, neve nas serras do Sul e o fenômeno da friagem no Centro-Oeste e Norte, quedas bruscas de temperatura mesmo em regiões tropicais.</li>
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

            <p>Essa relação entre temperatura e pressão é a base de praticamente todos os fenômenos climáticos
                que veremos a seguir: é o ar quente subindo e o ar frio descendo que gera vento, forma nuvens
                e organiza os grandes sistemas de tempo que se deslocam pelo planeta.</p>

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Curiosidade histórica</h4>
                <p>A pressão atmosférica foi descoberta pelo físico Evangelista Torricelli (1608-1647),
                    que
                    construiu o primeiro barômetro de mercúrio. Ele mostrou que, ao nível do mar, a
                    pressão é
                    capaz de sustentar uma coluna de 76 cm de mercúrio (Hg).</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo </button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (massas de ar) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Que tipo de massa de ar tende a se formar sobre a Floresta Amazônica?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) quente e úmida.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) fria e seca.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) glacial.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: baixa latitude (quente) mais uma imensa área florestal evaporando água o tempo todo (úmida) formam uma massa de ar quente e úmida.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (ciclo da agua) -->
        <div class="topico">

            <h2>O Ciclo da Água e a Umidade do Ar</h2>

            <div class="area">
                <img alt="Ciclo hidrológico" class="w3-mobile" id="imagem2" src="tp19f02.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Wikipédia. </p>

            <p>Da água disponível no planeta, cerca de 97% está nos oceanos, salgada demais para consumo direto. Dos 3% restantes de água doce, a maior parte está presa em geleiras e calotas polares, e uma fração ainda menor circula em rios, lagos e no subsolo. É justamente essa pequena parcela, movimentada continuamente pelo ciclo hidrológico, que sustenta toda a vida terrestre.</p>

            <p>A água está em constante circulação entre a superfície e a atmosfera, no chamado ciclo hidrológico.</p>

            <p>• O Sol aquece mares e rios, causando evaporação.<br>
                • O vapor sobe, resfria e ocorre a condensação, formando
                nuvens.<br>
                • Quando o vapor retorna em forma líquida ou sólida, temos a precipitação (chuva, neve ou granizo).</p>

            <p>Apesar de parecer que a água "some" para o alto, uma molécula de vapor permanece em média apenas cerca de 9 a 10 dias na atmosfera antes de precipitar novamente, um ciclo rápido se comparado, por exemplo, aos milhares de anos que uma gota pode levar circulando em águas subterrâneas profundas.</p>

            <p>A <span class="termo clima" data-palavra="Umidade do Ar"
                    data-definicao="Quantidade de vapor d'água presente na atmosfera. Vem da evaporação de águas superficiais e da transpiração de plantas e seres vivos, e influencia diretamente a pressão atmosférica.">umidade
                    do ar</span> é a quantidade de vapor d'água presente na
                atmosfera.</p>

            <p>Existem duas formas de medir esse vapor: a <span class="termo clima" data-palavra="Umidade Absoluta" data-definicao="Quantidade real de vapor d'água presente em um volume de ar, geralmente medida em gramas por metro cúbico.">umidade absoluta</span>, que indica a quantidade real de vapor presente no ar, e a <span class="termo clima" data-palavra="Umidade Relativa" data-definicao="Percentual que compara a quantidade de vapor d'água presente no ar com o máximo que aquele ar poderia reter na mesma temperatura.">umidade relativa</span>, aquele percentual que aparece nas previsões do tempo, que compara o quanto de vapor o ar contém com o máximo que ele poderia reter naquela temperatura. Quando a umidade relativa se aproxima de 100%, o ar está saturado e a condensação se torna praticamente inevitável, o que explica o orvalho nas manhãs frias e a névoa em dias muito úmidos.</p>

            <p>• Alta umidade → menor pressão, pois o ar úmido é menos denso.<br>
                • O vapor vem da evaporação (águas superficiais) e da transpiração
                de plantas e seres vivos.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (precipitacoes) -->
        <div class="topico">

            <h2>Precipitações</h2>

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

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Recordes de chuva</h4>
                <p>O lugar mais chuvoso do planeta é a vila de Mawsynram, na Índia, com uma média de quase 11.900 mm de chuva por ano, resultado de ventos úmidos da monção que sobem abruptamente as encostas dos montes Khasi, um caso extremo de precipitação orográfica. No Brasil, um exemplo do mesmo fenômeno está bem mais perto: o distrito de Paranapiacaba, no litoral de São Paulo, situado bem na encosta da Serra do Mar voltada para o oceano, recebe cerca de 2.500 mm de chuva por ano, entre os maiores índices do país, exatamente pelo mesmo mecanismo que barra e condensa o ar úmido vindo do Atlântico.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (precipitacao orografica) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual tipo de precipitação explica por que o lado da Serra do Mar voltado para o oceano é muito mais chuvoso do que o lado voltado para o interior?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) convectiva.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4b">
                        <span>b) orográfica.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) ciclônica.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: quando o relevo força o ar úmido a subir uma encosta, ele resfria e condensa, chovendo mais do lado de onde vem o vento (barlavento).', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (ventos) -->
        <div class="topico">

            <h2>Ventos</h2>

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

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Como medir o vento</h4>
                <p>A velocidade do vento é medida por um instrumento chamado anemômetro, e a direção por uma cata-vento (ou biruta, muito usada em aeroportos). Para descrever a força do vento sem precisar de aparelhos, os meteorologistas ainda recorrem à Escala Beaufort, criada em 1805 pelo almirante britânico Francis Beaufort: ela vai do grau 0 (calmaria total, a fumaça sobe na vertical) ao grau 12 (furacão, capaz de destruir construções), passando por graus intermediários como "brisa fresca" (grau 5, movimenta galhos pequenos) e "vendaval" (grau 9, danifica telhados).</p>
            </div>

            <div class="w3-panel w3-sand w3-border w3-round w3-margin">
                <h4> Energia eólica no Brasil</h4>
                <p>Os ventos constantes do litoral nordestino transformaram o Brasil em uma das principais potências mundiais em energia eólica. Rio Grande do Norte e Bahia, juntos, respondem por 64% de toda a potência eólica instalada no país, com o Rio Grande do Norte na liderança, reunindo mais de 245 parques eólicos. Ao todo, o Nordeste concentra 93% da capacidade eólica nacional, favorecido por ventos fortes e regulares o ano inteiro, associados à proximidade do Equador e à ausência de grandes obstáculos no relevo litorâneo. A fonte eólica já representa cerca de 15% de toda a energia elétrica gerada no Brasil, e a tendência é essa fatia crescer nos próximos anos.</p>
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
                <p>• Movimentos ascendentes: baixa pressão na superfície e alta pressão em altitude.<br>
                    • Movimentos descendentes: alta pressão na superfície e baixa pressão em altitude.</p>
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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (ciclone x anticiclone) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Um anticiclone (alta pressão) estacionado sobre uma região por muitos dias seguidos tende a provocar qual situação?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) chuvas fortes e instabilidade.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) céu limpo e estiagem prolongada.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) formação de ciclones.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: no anticiclone o ar desce e diverge, dificultando a formação de nuvens; se ele persiste por muito tempo sobre a mesma área, o resultado é falta de chuva.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Escreva o nome do fator climático relacionado ao afastamento do mar, que explica por que o interior dos continentes tem invernos e verões muito mais extremos do que o litoral.</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'continentalidade', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome do lado de uma montanha voltado para onde o vento sopra depois de perder sua umidade, que costuma ser mais seco e quente.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'sotavento', 'resp1b', this, 'globinho1b')">
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


        <!-- <div class="topico"><h2> Infográfico - Resumo</h2><div class="w3-margin"><img id="inforesumotp19" src="inforesumotp19.webp" alt="Infográfico resumo Fundamentos de Climatologia I" class="w3-mobile"><span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button><hr></div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

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

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que o recorde de temperatura mais alta do mundo foi registrado justamente num vale cercado de montanhas, o Vale da Morte, e não em um deserto aberto e plano?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque a geografia local funciona como uma armadilha térmica: as montanhas ao redor do vale impedem a circulação do vento e mantêm o ar quente concentrado no fundo, sem conseguir se dispersar. Esse é um bom exemplo de como o relevo, e não só a latitude, molda a temperatura de um lugar específico: veremos com mais profundidade, na próxima aula, como fatores como altitude, maritimidade e correntes marítimas também entram nessa equação.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que os cientistas demoraram tanto tempo, quase três décadas, para perceber o buraco na camada de ozônio, mesmo os CFCs já sendo usados desde os anos 1930?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque o processo de destruição do ozônio é lento e cumulativo: os CFCs levam anos para subir até a estratosfera, e o efeito só se tornou mensurável décadas depois de seu uso em larga escala começar, quando instrumentos de medição mais precisos passaram a monitorar a atmosfera antártica de forma contínua. O episódio serve de alerta sobre como impactos ambientais de longo prazo podem passar despercebidos até que os dados acumulados revelem um padrão claro, e também mostra que, quando há cooperação internacional rápida como a do Protocolo de Montreal, é possível reverter até mesmo danos ambientais de escala planetária.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico" id="sumario">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é a atmosfera, quais são as principais fontes de seus gases e qual sua composição básica?</h3>
                <h3>2. Por que o vapor d'água é considerado essencial para os processos climáticos?</h3>
                <h3>3. Como a atmosfera é dividida em camadas de acordo com a temperatura?</h3>
                <h3>4. Qual a diferença entre tempo e clima?</h3>
                <h3>5. O que é a temperatura, como ela é medida, e o que é amplitude térmica?</h3>
                <h3>6. O que diferencia meteorologia de climatologia?</h3>
                <h3>7. O que são massas de ar e como podem ser classificadas?</h3>
                <h3>8. O que é pressão atmosférica e como Evangelista Torricelli a descobriu?</h3>
                <h3>9. Quais são os principais tipos de precipitação e o que os diferencia?</h3>
                <h3>10. Qual a importância dos ventos para o equilíbrio climático do planeta?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre a diferença entre tempo e clima. Agora você sabe que o clima é a "personalidade" da atmosfera de uma região ao longo de décadas, enquanto o tempo é o "humor" dela em um dia específico, medido por elementos como temperatura, umidade, pressão atmosférica, ventos e precipitação.</p>

                <p>Você também viu que a atmosfera é uma camada fina, mas vital, organizada em camadas com funções diferentes, e que fenômenos como massas de ar, ciclones, anticiclones e chuvas orográficas explicam por que o clima varia tanto de uma região para outra.</p>

                <p><strong>Resumo dos conceitos:</strong> atmosfera e radiação ultravioleta; efeito estufa; camada de ozônio; tempo e clima; temperatura e amplitude térmica; massas de ar; umidade do ar; precipitação; barlavento e sotavento; ciclone e anticiclone.</p>

                <p>Nesta aula você viu que a temperatura de um lugar não depende só da latitude, mas de vários fatores atuando juntos. Na próxima aula vamos justamente aprofundar esse assunto: os fatores climáticos, latitude, altitude, maritimidade, correntes marítimas e massas de ar, entendendo em detalhe como cada um deles molda o clima das diferentes regiões do planeta.</p>

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
