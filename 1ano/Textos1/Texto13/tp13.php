<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Ciclo das rochas: minerais, rochas magmáticas, sedimentares e metamórficas">
    <meta property="og:title" content="Texto 13 - Ciclo das Rochas">
    <meta property="og:description" content="Como minerais se combinam para formar rochas e como elas se transformam umas nas outras ao longo do tempo">
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


    <title>1º ano - Texto 13 - Ciclo das Rochas</title>

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
                    <source id="audioSource" src="" type="audio/mp3" />
                </audio>
            </div>

            <div class="w3-container w3-padding-16">
                <p><strong>Conteúdo: </strong><span id="descricao-aula"></span></p>
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Diferenciar os tipos de rochas com base em seu processo de formação e entender o ciclo das rochas.</span></p>
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
                <p class="w3-pale-green">Uma mesa de granito na cozinha, o giz que o professor usa na lousa e o mármore de um monumento são todos rochas, mas bem diferentes entre si.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: na sua opinião, por que existem tantos tipos diferentes de rocha, se todas vêm do mesmo planeta? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2> Introdução </h2>
            <p><span class="primeiraLetra">N</span>a aula passada, conhecemos os processos externos modeladores do relevo: o intemperismo físico e químico, além do processo de erosão pela água, pelo vento, pelas geleiras, dentre outros.</p>
            <p>Nesta aula, vamos entender o ciclo das rochas, o processo pelo qual as rochas são continuamente transformadas, dando origem a diversos tipos e usos para o homem.</p>
            <p><strong>Esta aula responde a uma pergunta que está literalmente debaixo dos seus pés: por que uma pedra de calçada, um giz e um diamante são todos, tecnicamente, minerais ou rochas, e como um mesmo material pode se transformar de um tipo em outro ao longo de milhões de anos?</strong></p>
            <p>Ao final, você será capaz de reconhecer, comparar e contrastar diferentes tipos de rochas, além de explicar como os minerais se combinam para formar a maior parte da superfície terrestre, juntamente com os agentes internos e externos do relevo.</p>
            <p>O estudo das rochas e dos minerais dos quais são constituídas envolve um conhecimento muito amplo, como química, física, geologia e geografia, dentre outros. A Ciência é única, embora dividida para facilitar o entendimento da complexidade do mundo. Vamos começar com os minerais e suas características.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (historia dos minerais) -->
        <div class="topico">

            <h2>A história humana e os minerais</h2>

            <p>A humanidade é dependente dos minerais e de suas propriedades desde antes da história escrita. Portanto, não é surpresa que alguns nomes de minerais sejam baseados em línguas antigas.</p>

            <p>Por milênios, as pessoas necessitaram de um meio para produzir faíscas para iniciar um fogo. Os antigos sabiam que uma forma de produzir faíscas era bater uma rocha dura, como o quartzo (que chamamos de sílex córneo), com um mineral muito menos comum, da cor do ouro.</p>

            <p>Os gregos deram o nome de "fogo" ao mineral dourado. Em grego, "fogo" é "pyr". Esse mineral dourado é conhecido como <mark>"pirita"</mark> por causa de sua antiga conexão com a produção do fogo.</p>

            <div class="area">
                <img alt="Sílex córneo e pirita" class="w3-mobile" id="imagem1" src="tp13f1.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Sílex córneo constituído de quartzo. Minério pirita. Fonte: Pixabay.com. </p>

            <p>Eis uma ideia prática: se você estiver perdido em uma floresta, sem uma maneira de se aquecer, caso encontre tanto pirita quanto quartzo, você pode salvar sua vida. Friccionando os dois materiais, você gerará faíscas que, se tiver sorte, poderá usar para começar a queimar madeira ou capim seco. E você se lembrará desse cenário simplesmente recordando a palavra grega para fogo e sua conexão com o mineral pirita.</p>

            <p>O nome <mark>hematita</mark> e suas riscas vermelho-cereja são pistas para o que os gregos pensavam desse óxido de ferro.</p>

            <div class="area">
                <img alt="Hematita" class="w3-mobile" id="imagem2" src="tp13f2.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Hematita é um óxido de ferro de ocorrência frequente em solos e rochas. Fonte: geology.com. </p>

            <p>Em razão das riscas da hematita serem vermelhas como sangue, a conexão entre essas duas substâncias foi feita pelos gregos. Você ainda pode ver essa conexão em palavras como hematologista (um médico que se especializa em estudar o sangue). Algumas vezes, os gregos encontravam a hematita em estruturas longas e finas, descendo para dentro da Terra. Eles chamaram essas estruturas cheias de minerais, associadas à cor vermelha, de "veios". Esses "veios" na Terra, pensaram os gregos, eram como as veias longas e finas de seus braços, que contêm sangue vermelho e correm através de seus músculos.</p>

            <p>Embora possa parecer estranho para nós fazer hoje uma analogia (semelhança) entre o corpo humano e a Terra, no mundo antigo a Terra era vista de uma forma muito mais fluida. Partes da Terra eram consideradas vivas, ou relacionadas a criaturas vivas ou deuses. Assim, a diferença entre o corpo humano e a Terra era apenas uma questão de grau.</p>

            <p>Muitas vezes, pelos nomes dos minerais, você pode deduzir há quanto tempo as pessoas já haviam conhecido e identificado alguns minérios. Obviamente, a pirita e a hematita eram conhecidas há muito tempo. E porque o sal tem feito parte da cozinha dos homens desde tempos imemoriais, não se surpreende que o mineral halita tenha recebido seu nome na antiga Grécia.</p>

            <div class="area">
                <img alt="Halita" class="w3-mobile" id="imagem3" src="tp13f3.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Halita, composto químico NaCl, nome do sal, produto vital para a saúde humana e bem econômico com demanda mundial. Fonte: Wikipedia. </p>

            <p>O mineral rubi recebeu seu nome da palavra latina para o vermelho. Talvez mais antigo ainda em nosso conhecimento seja a safira, que recebeu seu nome do hebraico antigo "sappir".</p>

            <p>Alguns minerais menores e incomuns foram descobertos mais recentemente. Normalmente, esses minerais são mais conhecidos pelos geólogos que se especializam no estudo da mineralogia. Esses "novos" minerais recebem, frequentemente, o nome dos cientistas que os descobriram. Por exemplo, um sobrenome com sonoridade moderna seguido do sufixo "ita" denota um mineral que só recentemente se tornou conhecido da humanidade. Mas muitos nomes de minerais, e termos básicos de mineração como "veio", nos lembram, justificadamente, da herança cultural que temos do mundo antigo. <span
                    class="citacao">(Wicander, 2009, adaptado).</span></p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (o que e um mineral) -->
        <div class="topico">

            <h2>O que é um mineral?</h2>

            <p>Vimos nas aulas passadas os grandes processos da crosta terrestre, como o vulcanismo e o tectonismo, e a modelagem do relevo pelos agentes externos.</p>

            <p>É necessário, entretanto, verificar como as rochas são formadas durante esses grandes fenômenos que ocorrem no Planeta Terra.</p>

            <p>O conhecimento das rochas é de suma importância para o homem, tanto economicamente quanto para as construções humanas ao longo da história.</p>

            <p>A <strong>mineralogia</strong> estuda a ocorrência, a estrutura, as propriedades e os tipos de ocorrência dos minerais na Terra. Há muito conhecimento sobre química e estrutura atômica, aprofundado nessas disciplinas na escola, que nos oferece bastante conhecimento sobre a formação das rochas.</p>

            <p>Os cientistas definem o <span class="termo" data-palavra="Mineral"
                    data-definicao="Sólido inorgânico, de ocorrência natural, com estrutura cristalina específica e composição química fixa ou variável, formado pela combinação organizada de átomos."><strong>mineral</strong></span> como
                um sólido inorgânico, de ocorrência natural, com estruturas cristalinas específicas e composições químicas fixas ou variáveis. Um mineral é constituído de átomos, que são pequenas unidades de matéria que se combinam por meio de reações químicas.</p>

            <p>Como os átomos se combinam para formar minerais?</p>

            <p>De modo simplificado, os átomos dos elementos, quando estão mergulhados no magma, se encontram separados uns dos outros. Quando o magma chega à superfície através da lava, os átomos se agrupam devido à solidificação e se cristalizam com uma estrutura que se repete.</p>

            <div class="area">
                <img alt="Elementos químicos e aglomerações" class="w3-mobile" id="imagem3a" src="tp13f3a.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Elementos químicos e aglomerações. Fonte: Fredette (2007). </p>

            <p>Essa combinação dos elementos químicos é, portanto, o ponto de partida para a formação dos minerais. Primeiro há uma estrutura molecular base, uma malha elementar que se aglomera a outras malhas, formando o cristal. Nesse caso, o próprio peso da rocha faz com que os diversos cristais se associem, produzindo a rocha formada de pequenos sedimentos.</p>

            <p>Mas em outras rochas, os minerais podem aparecer após a lava se resfriar, como no caso abaixo, em que mineradores encontram o mineral ametista encrustado em uma rocha que surgiu das profundezas da crosta e se resfriou na superfície.</p>

            <div class="area">
                <img alt="Cristal de ametista" class="w3-mobile" id="imagem4" src="tp13f4.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Mineradores encontraram cristal de ametista raro em forma de coração. Fonte: sonoticiaboa.com.br </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (o que e uma rocha) -->
        <div class="topico">

            <h2>O que é uma rocha?</h2>

            <p>Já uma <span class="termo" data-palavra="Rocha"
                    data-definicao="Agregado natural de um ou mais minerais que forma a crosta terrestre, classificado em magmática, sedimentar ou metamórfica de acordo com seu processo de formação.">rocha</span> é
                formada por um conjunto de minerais agregados de ocorrência natural. Quando a lava se resfria, por exemplo, e se torna sólida, é possível identificar tipos de minerais em sua composição, como é o caso da rocha granito.</p>

            <div class="area">
                <img alt="Composição do granito" class="w3-mobile" id="imagem5" src="tp13f5.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>O granito possui minerais grossos que podem ser vistos a olho nu, como o quartzo, o feldspato e a biotita, além de outros, dependendo de seu processo de formação. É possível ver esse tipo de rocha na mesa de jantar de muitas casas ou na pia da cozinha.</p>

            <p>Outros tipos de rochas não surgem das profundezas do magma. Após resfriadas, elas são atingidas pelos processos de intemperismo e erosão (visto na aula sobre os agentes externos do relevo) e são formadas pela acumulação de sedimentos, como a rocha arenito. Essas rochas, geralmente, são marcadas pela estratificação, isto é, diferentes camadas que compõem essas rochas, revelando idades diferentes de formação.</p>

            <p>Desses dois tipos de rochas, as surgidas do magma e as surgidas a partir de sedimentos, existe um terceiro tipo, resultado do aumento de temperatura e pressão. Elas mudam de forma e, por isso, são chamadas de metamórficas.</p>

            <p>A partir disso, apresentam nova composição e características, por exemplo, a transformação do calcário (rocha sedimentar) em mármore. Esse processo ocorre, em geral, junto às placas tectônicas e em movimentos convergentes das placas, onde se desenvolvem as grandes cadeias de montanhas, como os Andes e o Himalaia.</p>

            <p>Qual a importância desse tipo de estudo para o conhecimento do Planeta?</p>

            <p>Entender o que é uma rocha e suas características nos permite descobrir sua origem. Assim, podemos conhecer melhor o Planeta em que vivemos e encontrar distintos minerais e combustíveis, além de evitar problemas ambientais. Por exemplo, o petróleo, o gás e o carvão mineral são rochas sedimentares e de grande valor econômico para a sociedade.</p>

            <p>O conhecimento dos tipos de rochas nos permite avaliar novas reservas minerais, como as de ferro, alumínio ou ouro, e planejar ações para reduzir a degradação ambiental, a erosão e a poluição.</p>

            <p>Portanto, vamos conhecer os principais tipos de rochas: a magmática, a sedimentar e a metamórfica, suas características e sua importância para o Planeta e para a sociedade. Veja os grandes grupos de rochas existentes no Planeta:</p>

            <div class="area">
                <img alt="Grupos de rochas" class="w3-mobile" id="imagem6" src="tp13f6.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Press (2006, p.105). </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas igneas) -->
        <div class="topico">

            <h2>Rochas magmáticas ou ígneas</h2>

            <p>As rochas magmáticas são também chamadas de <span
                    class="termo" data-palavra="Rochas Ígneas (Magmáticas)"
                    data-definicao="Rochas formadas pelo resfriamento e solidificação do magma, tanto no interior da crosta (intrusivas) quanto na superfície, através de erupções vulcânicas (extrusivas).">ígneas</span> (do
                latim "ignis", que significa "fogo") e são formadas através do resfriamento do magma, tanto no interior da crosta quanto quando o magma extravasa para a superfície através de lavas.</p>

            <p>Sabemos que o magma consiste em rocha derretida, gases dissolvidos e cristais de diversos minerais nas profundidades da crosta terrestre e próximo ao manto superior, onde as temperaturas variam geralmente entre 700ºC e 1.300ºC, dependendo da composição do magma, o suficiente para fundir as rochas.</p>

            <p>Há momentos em que o magma se resfria antes de sair de um vulcão, no interior da própria crosta. Nesse caso, os minerais como quartzo, mica ou feldspato encontram-se separados na rocha derretida, e à medida que a temperatura diminui, os cristais tendem a se agrupar e a crescer alguns milímetros. A rocha, nesse caso, tem uma granulação grossa, isto é, podemos ver a olho nu os minerais que a formam.</p>

            <p>Já quando o magma extravasa para a superfície através de lava, ele resfria rapidamente e não resta tempo suficiente para os cristais dessas rochas crescerem. Essas rochas possuem, portanto, granulação fina, porque se formaram fora da crosta terrestre. As rochas formadas dentro da crosta são chamadas de intrusivas, e as formadas no exterior são denominadas extrusivas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas intrusivas) -->
        <div class="topico">

            <h2>Rochas ígneas intrusivas</h2>

            <p>As rochas <span class="termo" data-palavra="Rochas Intrusivas e Extrusivas"
                    data-definicao="As intrusivas são rochas ígneas formadas pelo resfriamento lento do magma no interior da crosta, com cristais grandes e visíveis (ex: granito). As extrusivas se formam pelo resfriamento rápido do magma na superfície, com cristais pequenos ou ausentes (ex: basalto).">intrusivas</span> resultam
                do resfriamento do magma em partes profundas da crosta terrestre. Também são chamadas de plutônicas ou abissais. Exemplo: granito, usado para calçamento, pedras ornamentais, brita para concreto, dentre inúmeros outros usos. Veja:</p>

            <div class="area">
                <img alt="Rochas ígneas extrusivas e intrusivas" class="w3-mobile" id="imagem7" src="tp13f7.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Formação de rochas ígneas extrusivas e intrusivas. Fonte: Press (2006, p.106). </p>

            <p>Na figura acima, o granito foi resfriado dentro da crosta. É possível visualizar seus cristais porque são grandes. Justamente a <strong>composição mineral</strong>, o <strong>tamanho dos cristais</strong> e a <strong>textura</strong> são utilizados para classificar os diferentes tipos de rocha. Vejamos o exemplo do granito.</p>

            <div class="area">
                <img alt="Textura do granito" class="w3-mobile" id="imagem8" src="tp13f8.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: geology.com, Wikipédia, organizado pelo autor. </p>

            <p>As diferenças entre a composição do magma afetam o modo como as rochas são cristalizadas. As rochas graníticas possuem coloração clara e contêm alta taxa de sílica em sua composição, além de minerais como quartzo, feldspato, mica e biotita, dentre outras variações.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (gabro diorito granito) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Na foto acima é possível ver destacados o Gabro, o Diorito e o Granito. Que tipo de padrão podemos observar entre eles?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) as rochas são duras e resistentes.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) as rochas possuem cristais de granulação grossa.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) não é possível visualizar os cristais nas rochas.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: o tamanho dos cristais (granulação grossa ou fina) é um dos critérios usados para classificar rochas ígneas.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas extrusivas) -->
        <div class="topico">

            <h2>Rochas ígneas extrusivas</h2>

            <p>Por outro lado, há rochas que se formam através do rápido resfriamento do magma quando este chega à superfície por meio de erupções vulcânicas. Um exemplo clássico é a rocha basalto, muito utilizada como pedra britada para uso asfáltico, para concretos e lastros de ferrovias.</p>

            <div class="area">
                <img alt="Basalto" class="w3-mobile" id="imagem9" src="tp13f9.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: geology.com, Wikipédia. </p>

            <p>As rochas andesito, riolito e basalto, por exemplo, possuem uma textura com granulação fina, o que dificulta a visualização de seus cristais. Às vezes, o resfriamento é tão rápido que os cristais nem sequer se formam, como no caso da rocha de vidro vulcânica obsidiana.</p>

            <div class="area">
                <img alt="Obsidiana" class="w3-mobile" id="imagem10" src="tp13f10.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Mineral obsidiana. Fonte: Wikipedia. </p>

            <p>A rocha obsidiana possui um aspecto vítreo devido à sua composição de mais de 70% de sílica, o que, devido à sua viscosidade, impede a formação de cristais. Nesse caso, a obsidiana pode ser considerada um mineraloide, uma vez que não possui uma estrutura cristalina, típica dos minerais.</p>

            <p>Existem também rochas intermediárias chamadas porfiríticas, que possuem cristais grandes e pequenos na mesma formação rochosa. Isso se deve ao resfriamento do magma, no início de forma lenta, mas que, devido à movimentação da crosta ou a uma erupção repentina, faz com que o magma remanescente se resfrie rapidamente, formando cristais menores.</p>

            <p>Como o magma contém gases dissolvidos que escapam quando a pressão diminui, podem ocorrer buracos nas rochas, tal como em uma esponja, conhecidos como <mark>pedra-pomes</mark>, muito utilizada na indústria de cosméticos. Aliás, "pedra" é um nome utilizado, em geral, para se referir a um fragmento de rocha.</p>

            <div class="area">
                <img alt="Pedra-pomes" class="w3-mobile" id="imagem11" src="tp13f11.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Pedra-pomes. Fonte: Wikipedia. </p>

            <p>O estudo das rochas ígneas, portanto, tem muita relação com as possibilidades de exploração de recursos minerais.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas igneas como recurso) -->
        <div class="topico">

            <h2>Rochas ígneas como recurso ao ser humano</h2>

            <p>Além da fascinação que as rochas provocam, tanto pela sua força, durabilidade e beleza, quanto pelo seu uso na construção civil, na fabricação de joias e de ornamentos como calçadas, soleiras de portas e tampos de mesas, dentre outras utilidades, o estudo das rochas ígneas se destaca pelo seu potencial econômico.</p>

            <p>Há minerais formados sob determinadas circunstâncias e utilizados para render lucro, os quais chamamos de minérios. Seus cristais frequentemente ocorrem nas intrusões das rochas ígneas.</p>

            <p>Durante a cristalização dos minerais no magma, pode ocorrer a infiltração, nas cavidades das rochas, de minerais como ouro, prata, diamantes, chumbo, lítio, nióbio, dentre outros.</p>

            <div class="area">
                <img alt="Ouro e quartzo" class="w3-mobile" id="imagem12" src="tp13f12.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Ouro e quartzo são extraídos das minas juntos. Os dois são posteriormente separados. Fonte: Borrero (2008, p.121). </p>

            <p>Na região da <mark>África do Sul</mark>, em Kimberly, foram identificadas pela primeira vez rochas com uma variedade de diamantes. Eles são formados no manto, em uma profundidade de aproximadamente 150 a 200 km, sob altíssima pressão e temperatura; diamantes raros, chamados superprofundos, já foram encontrados com evidências de formação a mais de 400 km.</p>

            <div class="area">
                <img alt="Formação de diamantes" class="w3-mobile" id="imagem13" src="tp13f13.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Borrero (2008, p.122). </p>

            <p>A maioria das minas de diamante está localizada na África do Sul, no parque de Richtersveld, próximo à Cidade do Cabo, em uma paisagem desértica, com planícies arenosas e montanhas escarpadas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (granito na superficie) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Você deve estar se perguntando como o granito surgiu na superfície se ele foi formado no interior da crosta terrestre. O que explica isso?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) pela ação do intemperismo físico e químico.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) pela ação do vulcanismo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) pelas correntes de convecção.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: o intemperismo físico e químico expõe e desgasta rochas que se formaram nas profundezas da crosta.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (classificacao) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>A classificação das rochas ígneas ou metamórficas está baseada em três principais características. São elas:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) dureza, granulação grossa e a textura.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4b">
                        <span>b) tipo de magma, tipo de lava e os tipos de sedimentos.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4c">
                        <span>c) composição mineral, tamanho dos cristais e a textura.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: composição mineral, tamanho dos cristais e textura são os três critérios usados para classificar essas rochas.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas sedimentares) -->
        <div class="topico">

            <h2> Rochas sedimentares</h2>

            <p>Muitas rochas não são formadas diretamente pelo resfriamento do magma ou expelidas por erupções vulcânicas. Veja a imagem abaixo:</p>

            <div class="area">
                <img alt="Parque Geológico do Varvito" class="w3-mobile" id="imagem14" src="tp13f14.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Parque Geológico do Varvito. Fonte: itu.sp.gov.br </p>

            <p>O que mais chama a atenção nesta imagem de uma rocha no Parque do Varvito, em Itu, Estado de São Paulo?</p>

            <p>A formação de camadas umas sobre as outras é um fato importante e envolve tempo e diferentes tipos de sedimentos.</p>

            <p>Nesta rocha, especificamente, as camadas foram formadas pela deposição de sedimentos de geleiras entre cerca de 360 e 270 milhões de anos atrás, no supercontinente Gondwana.</p>

            <p>As rochas sedimentares são as mais comuns em muitas regiões do Planeta e formam muitas paisagens com características próprias.</p>

            <div class="area">
                <img alt="Sedimentos e rochas sedimentares" class="w3-mobile" id="imagem15" src="tp13f15.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Os sedimentos e as rochas sedimentares cobrem a maior parte da superfície dos continentes e do fundo dos oceanos. Fonte: Press (2006, p.108). </p>

            <p>As rochas magmáticas e metamórficas formam mais de 90% do volume da crosta terrestre. Entretanto, a maior parte dessas rochas está soterrada, longe da superfície. As rochas sedimentares, por sua vez, cobrem as outras rochas por serem resultado do intemperismo. É como se as rochas sedimentares fossem uma capa para um sofá, ou seja, embora cubra toda a superfície, não constitui o seu volume total.</p>

            <p>As <span class="termo" data-palavra="Rochas Sedimentares"
                    data-definicao="Rochas formadas a partir da desagregação de outras rochas pelo intemperismo, transportadas pela erosão e depositadas em camadas, posteriormente convertidas em rocha sólida pela litificação.">rochas
                    sedimentares</span> são formadas a partir do <strong>intemperismo</strong>, isto é, pela desagregação química e física de sedimentos como areia, argila e seixos (cascalho) e, posteriormente, transportados pela <strong>erosão</strong> e, finalmente, depositados e convertidos em rocha por um processo chamado <span
                    class="termo" data-palavra="Litificação"
                    data-definicao="Processo pelo qual sedimentos soltos se transformam em rocha sedimentar sólida, por meio da compactação (pressão das camadas superiores) e da cimentação (minerais dissolvidos que preenchem os espaços entre os grãos)."><strong>litificação</strong></span>.</p>

            <div class="area">
                <img alt="Processo de formação das rochas sedimentares" class="w3-mobile" id="imagem16" src="tp13f16.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Press (2006, p.109). </p>

            <div class="divCaixa1 w3-margin">
                <h4 class="fontePixel">Como o intemperismo atua para formar as rochas sedimentares:</h4>
                <ul class="lista">
                    <li>1: as partículas de rocha são geradas pelo intemperismo;</li>
                    <li>2: são transportadas morro abaixo pela erosão;</li>
                    <li>3: e depositadas como camadas de sedimento no solo ou na água;</li>
                    <li>4: onde elas formam camadas paralelas, ou estratificação;</li>
                    <li>5: os sedimentos soterrados litificam-se pela compactação e cimentação;</li>
                    <li>6: os sedimentos clásticos são compostos por partículas depositadas de areia, silte e cascalho;</li>
                    <li>7: os sedimentos químicos e bioquímicos são precipitados no mar ou compostos por recifes de corais e conchas.</li>
                </ul>
            </div>

            <p>Os sedimentos, como vimos, surgem do intemperismo químico e físico, que desintegram as rochas. Juntamente com esse processo, cabe à erosão transportá-los para outros locais.</p>

            <p>Os sedimentos "quebrados", como grãos de areia e partículas de granito, são chamados de <strong>clásticos</strong>. Outros sedimentos são derivados de intemperismo químico e são novas substâncias, como a calcita na formação de cavernas. E temos rochas de origem orgânica, formadas a partir de restos de animais e vegetais (será visto na aula sobre recursos minerais com mais detalhes). Após isso, temos a litificação.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (litificacao) -->
        <div class="topico">

            <h2> Litificação</h2>

            <p>É no processo de litificação que a formação da rocha sedimentar vai realmente se completar.</p>

            <div class="area">
                <img alt="Processo de litificação" class="w3-mobile" id="imagem17" src="tp13f17.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Pinterest. </p>

            <p>Na <strong>compactação</strong>, os grãos são unidos pelo peso das próprias camadas de sedimentos, geralmente "apertando" a rocha e reduzindo seu volume de água, como no exemplo da argila.</p>

            <div class="area">
                <img alt="Compactação da argila" class="w3-mobile" id="imagem18" src="tp13f18.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Borrero (2008, p.137). </p>

            <p>Já a areia não compacta da mesma forma que a argila. Os grãos de quartzo não se deformam quando são enterrados e possuem espaços vazios em sua estrutura. O processo que une os grãos de areia e forma o arenito, por exemplo, é a <strong>cimentação</strong>. Isso ocorre quando minerais dissolvidos pela água corrente preenchem os espaços desses grãos e atuam como um cimento. É comum ver pedaços de conchas solidificadas por litificação em rochas calcárias.</p>

            <p>Um dos aspectos mais importantes das rochas sedimentares é revelar as evidências do passado através de fósseis.</p>

            <p>Os <span class="termo" data-palavra="Fossilização"
                    data-definicao="Processo de preservação de restos de organismos animais ou vegetais ao longo do tempo, geralmente por soterramento gradual em sedimentos que depois se convertem em rocha.">fósseis</span> são,
                grosso modo, restos de organismos animais ou vegetais que foram preservados ao longo do tempo. As condições mais favoráveis para a formação desses restos ocorrem junto às praias ou em mares pouco profundos. Quando os rios lançam neles suas águas lodosas, ou as tempestades revolvem o lodo do fundo, ficam suspensas na água muitas partículas minerais. Tais partículas se depositam gradualmente, recobrindo animais e vegetais vivos ou mortos. Depois, novas camadas de lodo e outros materiais sedimentares vão se depositando sobre as primeiras, devido a posteriores tempestades e cheias. Com o tempo e as pressões que as camadas superiores vão exercendo, as camadas inferiores de sedimento se convertem em rocha compacta.</p>

            <p>Observe a formação da fossilização dos grandes répteis da era Mesozoica:</p>

            <div class="area">
                <img alt="Estágios da fossilização de um dinossauro" class="w3-mobile" id="imagem19" src="tp13f19.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Estágios na fossilização de um dinossauro. Fonte: Marshak (2015, p.421, adaptado). </p>

            <p>O estudo dos fósseis, dentre outras coisas, contribui para o melhor conhecimento de regiões geográficas distantes, principalmente em relação a recursos como tipos de rochas sedimentares e reservas de petróleo e gás natural.</p>

            <p>Mas o que acontece com uma rocha preexistente se for submetida a altas temperaturas e pressão? Ela mudará de forma?</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (rochas metamorficas) -->
        <div class="topico">

            <h2> Rochas metamórficas</h2>

            <p>Tal como o preparo de um bolo ou de um pão, em que distintos ingredientes no recipiente se transformam em algo novo, da mesma maneira as rochas, quando submetidas a altas temperaturas e pressão, formarão algo totalmente diferente em relação às suas características, texturas, minerais etc.</p>

            <p>A palavra "metamórfica" vem do grego <em>meta</em>, "mudança", e <em>morfo</em>, "forma". Durante o metamorfismo, os minerais não atingem o ponto de fusão, isto é, esse processo ocorre em estado sólido.</p>

            <p>A textura e a composição mineral e química sofrem intensa transformação, e ocorre uma recristalização de seus minerais. Observe a imagem abaixo:</p>

            <div class="area">
                <img alt="Rocha metamórfica dobrada" class="w3-mobile" id="imagem19a" src="tp13f19a.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Rocha metamórfica dobrada. Fonte: Pinterest. </p>

            <p>Imagine a intensa força que foi necessária para dobrar essas camadas de rochas na forma que elas estão hoje.</p>

            <p><strong>Onde estão localizadas as rochas metamórficas?</strong></p>

            <p>Obviamente, as rochas presentes na natureza não estão separadas em magmáticas, sedimentares ou metamórficas de maneira fixa e organizada. Elas dependem da história geológica da região e de outros fatores, como a dinâmica das placas tectônicas, a formação de montanhas, o intemperismo, a erosão, o clima etc.</p>

            <p>O mapeamento das rochas pode ocorrer por meio de perfurações no solo. Nos primeiros quilômetros, vamos encontrar rochas sedimentares. Ao perfurar mais fundo, entre 6 e 10 km, podemos encontrar áreas com rochas ígneas e metamórficas antigas.</p>

            <p>Outra possibilidade são os chamados <mark>afloramentos</mark>, nos quais as rochas que estão no interior da crosta emergem à superfície devido às ações dos agentes externos do relevo.</p>

            <div class="area">
                <img alt="Afloramento de rocha" class="w3-mobile" id="imagem20" src="tp13f20.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Afloramento de rocha na Ucrânia. Fonte: brasilescola.uol.com.br </p>

            <p>Os afloramentos variam conforme a região e criam, por isso, diversas paisagens.</p>

            <p>As <span class="termo" data-palavra="Rochas Metamórficas"
                    data-definicao="Rochas formadas a partir da transformação de rochas preexistentes submetidas a altas temperaturas e pressão, sem atingir o ponto de fusão, alterando sua textura e composição mineral.">rochas
                    metamórficas</span> apresentam diferentes combinações de temperatura e pressão que resultam em distintos graus de metamorfismo. Um baixo grau de metamorfismo está associado a baixas temperaturas e pressão, e, logo, a uma textura particular. O mesmo ocorre com altas temperaturas e pressão.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tipos de metamorfismo e texturas) -->
        <div class="topico">

            <h2>Os tipos de metamorfismo e suas texturas</h2>

            <p>O arranjo, o tamanho e a forma dos minerais definem suas <strong>texturas</strong>. Estas podem ser foliadas e não foliadas:</p>

            <div class="area">
                <img alt="Texturas foliadas e não foliadas" class="w3-mobile" id="imagem21" src="tp13f21.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>As camadas das texturas <strong>foliadas</strong> possuem uma direção em determinado plano, devido ao processo de deformação e recristalização que sofreram, como o xisto, a ardósia, o micaxisto ou o gnaisse.</p>

            <p>Já as rochas <strong>não foliadas</strong>, como o mármore e o quartzito, são formadas geralmente por um único mineral.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (onde ocorre o metamorfismo) -->
        <div class="topico">

            <h2> Onde ocorre esse metamorfismo?</h2>

            <p>Através de investigações científicas, foram reconhecidos três grandes tipos de metamorfismo e suas áreas de ocorrência: 1) <strong>metamorfismo de contato</strong>; 2) <strong>metamorfismo regional</strong>; 3) <strong>metamorfismo do assoalho oceânico</strong>. Embora estudados separadamente, esses limites não devem ser vistos de forma isolada na realidade.</p>

            <div class="area">
                <img alt="Tipos de metamorfismo" class="w3-mobile" id="imagem22" src="tp13f22.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Press (2006). </p>

            <p>O <span class="termo" data-palavra="Metamorfismo de Contato"
                    data-definicao="Tipo de metamorfismo localizado, causado pelo aumento de temperatura quando o magma entra em contato com uma rocha preexistente."><strong>metamorfismo
                        de contato</strong></span> ocorre quando o magma derretido modifica uma rocha preexistente através da elevação da temperatura, geralmente em áreas pouco extensas. Também contribui para esse processo a liberação de fluidos quentes em uma rocha ígnea, que pode contribuir para a formação de novos minerais.</p>

            <p>Um fluxo de lava pode alterar a temperatura de rochas na superfície, em um afloramento já existente ou em uma rocha sedimentar. Esse metamorfismo abrange uma área das rochas circundantes, ou seja, é uma transformação localizada.</p>

            <p>Já o metamorfismo que abrange extensas áreas refere-se ao <span
                    class="termo" data-palavra="Metamorfismo Regional"
                    data-definicao="Tipo de metamorfismo que abrange grandes áreas, associado à formação de montanhas e aos limites convergentes de placas tectônicas, onde altas temperaturas e pressão atuam simultaneamente."><strong>regional</strong></span>. Ele
                aparece nos limites convergentes de placas (quando elas colidem entre si) e na formação de montanhas (orogênese), no dobramento e fraturamento das camadas sedimentares. Exemplos: as montanhas dos Andes, na América do Sul, e o Himalaia, na Ásia Central.</p>

            <p>O metamorfismo regional de alta pressão está relacionado a zonas de falhas tectônicas ou encontros de placas em que existe alta pressão. Por esse fato, essas rochas estão restritas a essas áreas de fraturas e apresentam textura foliada, como em porções da falha de San Andreas, na Califórnia.</p>

            <p>O <strong>metamorfismo do assoalho oceânico</strong> tem relação com as dorsais oceânicas. Nesse caso, a água do mar percorre os basaltos fraturados e quentes e, assim, provoca reações químicas que alteram a rocha original.</p>

            <p>Há também um outro tipo de metamorfismo, resultado do impacto de meteoritos na superfície rochosa. Os meteoritos são fragmentos de cometas ou asteroides que foram atraídos pela Terra por meio de seu campo gravitacional. Eles são mais raros, e as ondas de choque produzem calor e alteram as rochas em seu entorno.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (valor economico) -->
        <div class="topico">

            <h2>O valor econômico das rochas metamórficas</h2>

            <p>Algumas rochas metamórficas, como o mármore e a ardósia, são utilizadas há séculos pelos homens. No metamorfismo de contato, por sua vez, muitos minerais migram das rochas ígneas e produzem verdadeiros depósitos minerais, como hematita (ferro), magnetita, estanho e tungstênio.</p>

            <p>Outros minerais importantes para a área dos cosméticos são o talco; a grafita, para lápis e lubrificantes secos; o coríndon, usado como abrasivo em joalheria; e a andaluzita, usada em porcelanas de altas temperaturas, velas de ignição e revestimentos de fornalhas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (metamorfismo de contato) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O magma em ascensão traz energia térmica para a crosta, aquecendo a rocha ao redor. Ocorre próximo aos limites do magma, e novos minerais podem crescer ou aumentar os já existentes. Foi descrito o metamorfismo de:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) metamorfismo regional.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) metamorfismo de contato.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) metamorfismo do assoalho oceânico.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: o metamorfismo de contato é localizado, ocorre onde o magma toca diretamente uma rocha preexistente.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (metamorfismo regional) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O aquecimento costuma ser acompanhado de uma força suficiente para causar deformação. Essas forças podem resultar de placas tectônicas ou de subducção. Foi descrito o metamorfismo de:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6a" name="pergunta6" type="radio" value="correto" />
                    <label class="card-opcao" for="p6a">
                        <span>a) metamorfismo regional.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6b" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6b">
                        <span>b) metamorfismo do assoalho oceânico.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6c" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6c">
                        <span>c) metamorfismo de contato.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta6', 'resp6', 'globinho6', 'Dica: o metamorfismo regional atinge grandes áreas, associado à formação de montanhas e ao choque de placas.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp6"></p>
            <div class="area w3-center">
                <img height="64" id="globinho6" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (ciclo das rochas) -->
        <div class="topico">

            <h2> O ciclo infinito das rochas</h2>

            <p>Os três tipos de rochas que vimos, magmáticas, sedimentares e metamórficas, pertencem a um grande processo chamado <span
                    class="termo" data-palavra="Ciclo das Rochas"
                    data-definicao="Processo contínuo e sem fim pelo qual rochas magmáticas, sedimentares e metamórficas se transformam umas nas outras ao longo de milhões de anos, impulsionado pela tectônica de placas e pelo clima."><strong>ciclo
                        das rochas</strong></span>.</p>

            <p>O ciclo das rochas está intimamente ligado à dinâmica das placas tectônicas e ao clima, por meio do intemperismo.</p>

            <p>Na figura abaixo, temos uma noção de como pode ser o ciclo sem fim das rochas.</p>

            <div class="area">
                <img alt="Ciclo das rochas" class="w3-mobile" id="imagem23" src="tp13f23.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Press (2006, p.112, adaptado). </p>

            <p>Vamos iniciar pelo número <strong>(1)</strong>: quando uma placa oceânica mergulha sobre uma placa continental em direção ao manto, temos a subducção. Isso faz elevar uma cadeia de montanhas vulcânicas, como nos Andes.</p>

            <p>A placa que "afundou" <strong>(2)</strong> funde-se à medida que mergulha no manto. O magma ascende (sobe) da placa fundida e extravasa-se como lava, ou se introduz com intensidade na crosta.</p>

            <p>Após isso, <strong>(3)</strong> o magma esfria para formar as rochas ígneas: as rochas extrusivas (vulcânicas) cristalizam do magma ou da lava na superfície; as rochas intrusivas (plutônicas) cristalizam no interior da crosta.</p>

            <p>As montanhas que foram soerguidas <strong>(4)</strong> (elevadas) vão interagir com a atmosfera. Elas forçam o ar carregado de umidade a ascender, esfriar, condensar e precipitar.</p>

            <p>A precipitação, o congelamento e o degelo criam material solto, o sedimento <strong>(5)</strong>, que é carregado pela erosão.</p>

            <p>Esse sedimento <strong>(6)</strong> é transportado para o oceano por rios, onde é depositado como camadas de areia e silte. As camadas de sedimentos são soterradas e sofrem litificação, tornando-se rochas sedimentares.</p>

            <p>O soterramento <strong>(7)</strong> é acompanhado de um afundamento da crosta terrestre devido à pressão da própria camada sedimentar.</p>

            <p>Nas áreas das margens das placas tectônicas, onde os continentes se colidem, as rochas são soterradas ou comprimidas com uma extrema pressão <strong>(8)</strong>.</p>

            <p>Quando uma rocha sedimentar é soterrada em maiores profundidades na crosta, ela se torna mais quente e se metamorfiza. As rochas ígneas também podem se metamorfizar <strong>(9)</strong>.</p>

            <p>E, por fim, outra placa entra novamente no processo de subducção, e o ciclo se renova <strong>(10)</strong>.</p>

            <p>O ciclo das rochas atua em várias partes do Planeta simultaneamente, ora formando montanhas em uma região, ora depositando e soterrando sedimentos em outra.</p>

            <p>As rochas são recicladas permanentemente ao longo de milhares ou milhões de anos. Podemos observar na superfície sua manifestação e deduzir, por meio de evidências indiretas, seu comportamento no interior da Terra.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Jogo interativo -->
        <div class="topico">
            <h2>Jogo: Tipos de Rochas</h2>
            <p>Clique apenas nas rochas <strong>metamórficas</strong> para ganhar pontos!</p>
            <div id="game">
                <div id="pontos">Pontos: 0</div>
                <div id="target">Clique nas: Metamórficas</div>
                <!-- Botão de início -->
                <button id="btnIniciar" style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 30px;
        font-size: 20px;
        border-radius: 10px;
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    ">Iniciar Jogo</button>
            </div>
            <style>
                #game {
                    position: relative;
                    width: 90vw;
                    height: 70vh;
                    max-width: 600px;
                    border: 2px solid black;
                    overflow: hidden;
                    margin: 20px auto;
                    touch-action: manipulation;
                    background: url('paisagem.jpg') no-repeat center/cover;
                }

                .objeto {
                    position: absolute;
                    width: 70px;
                    height: 70px;
                    cursor: pointer;
                    transition: transform 0.2s;
                }

                .objeto:hover {
                    transform: scale(1.1);
                }

                #pontos,
                #target {
                    position: absolute;
                    background: white;
                    padding: 10px 20px;
                    border-radius: 10px;
                    font-size: 18px;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                    z-index: 10;
                }

                #pontos {
                    top: 2vh;
                    left: 2vw;
                }

                #target {
                    top: 2vh;
                    right: 2vw;
                    background: yellow;
                    font-weight: bold;
                }

                @media (max-width: 600px) {

                    #pontos,
                    #target {
                        font-size: 14px;
                        padding: 6px 12px;
                    }

                    #pontos {
                        top: 5px;
                        left: 5px;
                    }

                    #target {
                        top: 5px;
                        right: 5px;
                    }
                }
            </style>
            <script>
                const game = document.getElementById("game");
                const scoreDisplay = document.getElementById("pontos");
                const correto = "metamorfica";
                const btnIniciar = document.getElementById("btnIniciar");

                let pontuacao = 0;
                let jogoAtivo = false;
                let objetos = [];
                let ultimoSpawn = 0;

                const tipos = [
                    { tipo: "ígnea", img: "ignea.png" },
                    { tipo: "sedimentar", img: "sedimentar.png" },
                    { tipo: "metamorfica", img: "metamorfica.png" }
                ];

                function criarObjeto() {
                    const item = tipos[Math.floor(Math.random() * tipos.length)];
                    const el = document.createElement("img");
                    el.src = item.img;
                    el.dataset.tipo = item.tipo;
                    el.classList.add("objeto");
                    el.style.position = "absolute";
                    el.style.width = "70px";
                    el.style.height = "70px";
                    el.style.left = Math.random() * (game.offsetWidth - 70) + "px";
                    el.style.top = "-70px";

                    game.appendChild(el);

                    const objeto = {
                        el,
                        tipo: item.tipo,
                        y: -70,
                        x: parseFloat(el.style.left),
                        velocidade: 1.0 + Math.random() * 1.8

                    };

                    el.addEventListener("pointerdown", () => {
                        if (!jogoAtivo) return;

                        if (objeto.tipo.toLowerCase() === correto.toLowerCase()) {
                            // clique certo
                            playSom('acerto');  // toca som de acerto
                            pontuacao += 10;
                            if (pontuacao > 100) pontuacao = 100;  // garante máximo de 100
                        } else {
                            // clique errado
                            playSom('erro'); // toca som de erro
                            pontuacao = Math.max(0, pontuacao - 5);
                        }
                        scoreDisplay.textContent = "Pontos: " + pontuacao;

                        game.removeChild(el);
                        objetos = objetos.filter(o => o !== objeto);

                        if (pontuacao >= 100) encerrarJogo();
                    });

                    objetos.push(objeto);
                }

                function atualizarObjetos(delta) {
                    for (const obj of objetos) {
                        obj.y += obj.velocidade * delta * 0.15;

                        obj.el.style.top = obj.y + "px";
                    }

                    // Remove os que saíram da tela
                    objetos = objetos.filter(obj => {
                        if (obj.y > game.offsetHeight) {
                            game.removeChild(obj.el);
                            return false;
                        }
                        return true;
                    });
                }

                let anterior = 0;
                function loop(timestamp) {
                    if (!jogoAtivo) return;

                    const delta = timestamp - anterior;
                    anterior = timestamp;

                    // Cria novas rochas a cada 1000ms
                    if (timestamp - ultimoSpawn > 1500 && objetos.length < 10) {
                        criarObjeto();
                        ultimoSpawn = timestamp;
                    }

                    atualizarObjetos(delta);
                    requestAnimationFrame(loop);
                }

                function iniciarJogo() {
                    pontuacao = 0;
                    objetos.forEach(o => o.el.remove());
                    objetos = [];
                    jogoAtivo = true;
                    scoreDisplay.textContent = "Pontos: 0";

                    // Remove mensagem final se existir
                    const msg = document.getElementById("mensagemFinal");
                    if (msg) msg.remove();

                    // Esconde botão de início
                    btnIniciar.style.display = "none";


                    requestAnimationFrame(loop);
                }

                function encerrarJogo() {
                    jogoAtivo = false;

                    // remove todos os objetos
                    objetos.forEach(o => o.el.remove());
                    objetos = [];

                    const msg = document.createElement("div");
                    msg.id = "mensagemFinal";
                    msg.style.position = "absolute";
                    msg.style.top = "50%";
                    msg.style.left = "50%";
                    msg.style.transform = "translate(-50%, -50%)";
                    msg.style.background = "rgba(0,0,0,0.8)";
                    msg.style.color = "white";
                    msg.style.padding = "30px 50px";
                    msg.style.borderRadius = "12px";
                    msg.style.textAlign = "center";
                    msg.style.fontSize = "22px";
                    msg.innerHTML = `
            🎉 Parabéns! Você atingiu 100 pontos!<br><br>
            <button id="reiniciarBtn" style="
                background: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 8px;
                cursor: pointer;
                font-size: 18px;
            ">Jogar novamente</button>
        `;

                    game.appendChild(msg);

                    document.getElementById("reiniciarBtn").addEventListener("click", iniciarJogo);
                }

                // O jogo agora só começa quando o aluno clicar no botão
                btnIniciar.addEventListener("click", iniciarJogo);

            </script>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- <div class="topico">
            <h2> Infográfico - Resumo</h2>
            <div class="w3-margin"><img id="inforesumotp13" src="inforesumotp13.webp"
                    alt="Infográfico resumo Ciclo das Rochas" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Como o conhecimento científico do ciclo das rochas contribui para entender melhor as paisagens terrestres?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> A aparência das paisagens depende e reflete os tipos de rocha matriz, ou rocha base. Por exemplo, na imagem abaixo vemos uma rocha sedimentar formada por sedimentos e distribuída em camadas. Nesse sentido, o estudo das rochas ajuda cientistas, geólogos, geógrafos físicos, geomorfólogos, dentre outros, a visualizarem os padrões espaciais, as formas e a evolução das paisagens por meio das cores, texturas e do modo como as rochas estão ou foram fraturadas.</p>

            <div class="area">
                <img alt="Rocha sedimentar em camadas" class="w3-mobile" id="imagem24" src="tp13f24.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: pxfuel.com </p>

            <p>O ciclo das rochas ilustra uma importante relação entre o clima, o solo, os processos tectônicos, a erosão e os depósitos minerais, fundamentais para a organização do território e da sociedade.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    As rochas magmáticas vêm do magma, mas como o magma se forma?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Vamos revisar esse assunto, pois o magma se forma nos locais do manto e da crosta terrestre onde as temperaturas e pressões são muito altas e são capazes de permitir a fusão parcial de rochas contendo água. O basalto, por exemplo, pode ser fundido parcialmente no manto superior, onde as correntes de convecção trazem as rochas quentes para cima, ou nas dorsais mesoceânicas.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a porcentagem de cada tipo de rocha no Planeta?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Em volume, estima-se que as rochas sedimentares representem apenas cerca de 5% da crosta terrestre, enquanto as rochas magmáticas somam cerca de 80% e as metamórficas, 15%. Só que essa proporção parece se inverter quando olhamos para a superfície: como as rochas sedimentares formam uma fina capa sobre as demais (lembra da capa de sofá?), elas cobrem cerca de 75% da área exposta dos continentes, mesmo representando uma fatia pequena do volume total da crosta.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. Como os minerais são definidos e diferenciados de outros materiais naturais?</h3>
                <h3>2. O que caracteriza uma rocha e como ela se diferencia de um mineral?</h3>
                <h3>3. Quais são as principais características das rochas magmáticas ou ígneas?</h3>
                <h3>4. Explique a diferença entre rochas ígneas intrusivas e extrusivas.</h3>
                <h3>5. Como as rochas ígneas podem ser um recurso útil para os seres humanos?</h3>
                <h3>6. O que é a litificação e em qual processo ela é fundamental?</h3>
                <h3>7. O que caracteriza uma rocha metamórfica e como ela se forma?</h3>
                <h3>8. Onde são encontradas as rochas metamórficas e por que elas se localizam nessas regiões?</h3>
                <h3>9. Quais são os tipos de metamorfismo e como eles influenciam a textura das rochas?</h3>
                <h3>10. Explique o ciclo das rochas e por que ele é considerado um processo contínuo.</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre por que existem tantos tipos diferentes de rocha. Agora você sabe que não são materiais fixos e separados: magmáticas, sedimentares e metamórficas são, na verdade, estágios de um mesmo processo contínuo, o ciclo das rochas, movido pela tectônica de placas e pelo clima ao longo de milhões de anos.</p>

                <p>Aquela mesa de granito, o giz de calcário e o mármore do monumento contam, cada um, uma história diferente de temperatura, pressão e tempo geológico, mas todos fazem parte do mesmo ciclo sem fim.</p>

                <p><strong>Resumo dos conceitos:</strong> mineral e rocha; rochas ígneas intrusivas e extrusivas; rochas sedimentares e litificação; fossilização; rochas metamórficas e seus tipos de metamorfismo (de contato, regional e do assoalho oceânico); ciclo das rochas.</p>

                <p>Agora que você sabe como as rochas se formam e se transformam, falta entender como elas se organizam em grande escala pelo Planeta. Na próxima aula, vamos conhecer a estrutura geológica dos continentes (crátons, escudos cristalinos e bacias sedimentares) e as grandes formas de relevo que ela ajuda a explicar, como planaltos, planícies, montanhas e depressões.</p>

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
      mensagem: 'o tema Ciclo das Rochas é fascinante! Continue estudando!',
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


    <!-- Footer -->

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
