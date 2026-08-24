<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Mudanças climáticas locais: inversão térmica, ilhas de calor, chuva ácida, desertificação e desmatamento">
    <meta property="og:title" content="Texto 22 - Mudanças Climáticas Locais">
    <meta property="og:description" content="Ilhas de calor, inversão térmica, chuva ácida, desertificação e desmatamento">
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

    <title>1º ano - Texto 22 - Mudanças climáticas locais</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar as mudanças climáticas locais, principalmente aquelas ligadas às áreas urbanas, e entender os processos que as causam e as consequências para as pessoas que vivem nessas áreas.</span></p>
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
                <p class="w3-pale-green">Você já notou que o centro de uma cidade grande costuma parecer mais quente e abafado do que um parque ou uma área rural nos arredores, mesmo no mesmo dia e horário?</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: por que você acha que isso acontece? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">

            <h2> Introdução</h2>

            <p> <span class="primeiraLetra">N</span>a aula passada, falamos sobre as mudanças climáticas globais, como
                aquecimento global, El Niño, La Niña, camada de ozônio e efeito estufa. Vimos como esses processos acontecem
                em escala planetária e o quanto eles podem impactar a vida dos seres vivos, inclusive a nossa.
            </p>

            <p>
                Agora, vamos mudar um pouco o foco e observar o que acontece bem pertinho da gente, no nosso dia a dia nas
                cidades. Vamos entender as mudanças climáticas locais, ou seja,
                aquelas que acontecem no espaço onde vivemos.
            </p>

            <p>
                Ao longo desta aula, você vai conhecer cinco fenômenos: inversão térmica, ilhas de calor, chuva
                ácida, desertificação e desmatamento. Todos eles têm causas humanas bem definidas, afetam
                diretamente a saúde e a economia das cidades, e, como veremos ao final, estão mais conectados entre
                si do que parece à primeira vista.
            </p>

            <button class="btnShow"
                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (inversao termica) -->
        <div class="topico">

            <h2>Inversão Térmica</h2>

            <p>
                Em condições normais, o ar próximo ao solo é aquecido durante o dia e sobe, misturando-se com o ar mais frio
                das
                camadas superiores. Esse movimento ajuda a dispersar a poluição e a
                renovar o ar das cidades.
            </p>

            <p>
                Na <span class="termo clima"
                    data-palavra="Inversão Térmica"
                    data-definicao="Fenômeno atmosférico em que uma camada de ar quente impede que o ar frio e poluído próximo ao solo suba, dificultando a dispersão de poluentes.">
                    inversão térmica
                </span>, o processo se inverte: o ar frio, mais pesado,
                fica preso
                perto do solo, enquanto o ar quente permanece acima, criando uma espécie de tampa. Assim, os poluentes não
                conseguem subir
                e acabam se concentrando nas áreas mais baixas da atmosfera.
            </p>

            <p>
                Esse fenômeno é mais comum em dias frios, com pouco vento e poucas
                nuvens, principalmente no inverno.
                Nessas condições, a atmosfera fica estável, o que impede a circulação do ar e favorece o acúmulo de
                poluição.
            </p>

            <p>
                As principais consequências são o aumento da poluição
                atmosférica,
                a piora da qualidade do ar e o crescimento de doenças respiratórias entre a população urbana.
                Um exemplo clássico é São Paulo, que já enfrentou vários episódios de inversão térmica com forte acúmulo de
                fumaça
                sobre a cidade.
            </p>

            <div class="area">
                <img alt="Fluxo normal do ar comparado à inversão térmica sobre a cidade" class="w3-mobile" id="imagem1" src="tp22f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                O Brasil tem um exemplo clássico e bastante estudado desse problema: a cidade de <span
                    class="termo clima" data-palavra="Cubatão"
                    data-definicao="Cidade do litoral de São Paulo que, nos anos 1980, ficou conhecida como 'Vale da Morte' por concentrar dezenas de indústrias em um vale cercado de serra, onde a inversão térmica prendia a poluição perto do solo.">Cubatão</span>,
                no litoral de São Paulo. Cercada por serras, a cidade concentrou dezenas de indústrias químicas e
                siderúrgicas em um vale estreito, justamente o tipo de relevo que favorece a inversão térmica no
                inverno: o ar frio desce das encostas, fica represado no fundo do vale, e a poluição não consegue se
                dispersar. Na década de 1980, a ONU chegou a classificar Cubatão como a cidade mais poluída do
                mundo, e a cidade ficou conhecida como "Vale da Morte" depois de um período em que dezenas de bebês
                nasceram com graves problemas neurológicos, associados à exposição a poluentes industriais. A partir
                do fim dos anos 1980, um amplo programa de controle ambiental reduziu drasticamente as emissões, e
                Cubatão se tornou, décadas depois, um exemplo citado internacionalmente de recuperação ambiental.
            </p>

            <p>
                Um dos episódios mais graves de inversão térmica da história aconteceu em Londres, em dezembro de
                1952. Durante cinco dias, uma camada de ar frio prendeu a fumaça das chaminés a carvão e a névoa
                natural da cidade perto do solo, formando o que ficou conhecido como "Grande Fumaça" (Great Smog).
                A qualidade do ar caiu tanto que estima-se que o episódio tenha causado a morte prematura de
                milhares de pessoas em poucos dias. O caso chocou a opinião pública britânica e impulsionou a
                criação da Lei do Ar Limpo (Clean Air Act) de 1956, uma das primeiras legislações ambientais
                modernas voltadas à qualidade do ar nas cidades.
            </p>

            <p>
                Hoje em dia, órgãos ambientais medem a poluição do ar por meio do Índice de Qualidade do Ar (IQA),
                uma escala que vai de 0 a 500 e combina a concentração de poluentes como material particulado,
                dióxido de nitrogênio, monóxido de carbono, dióxido de enxofre e ozônio em um único número. Quanto
                mais alto o valor, pior a qualidade do ar: as faixas costumam ser classificadas como boa, moderada,
                ruim, muito ruim e péssima. Durante episódios de inversão térmica, o IQA de uma cidade pode disparar
                em poucas horas, ultrapassando os limites recomendados pela Organização Mundial da Saúde e expondo
                a população a um ar que aumenta o risco de doenças respiratórias e cardiovasculares, especialmente
                entre crianças, idosos e pessoas com asma ou bronquite.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (ilhas de calor) -->
        <div class="topico">

            <h2>Ilhas de Calor</h2>

            <div class="area">
                <img alt="Temperatura mais alta no centro da cidade em relação a áreas rurais, parques e zonas residenciais" class="w3-mobile" id="imagem2" src="tp22f02.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                As <span class="termo clima"
                    data-palavra="Ilha de Calor"
                    data-definicao="Área urbana que apresenta temperaturas mais altas que as regiões vizinhas, causada pela falta de vegetação e pelo acúmulo de calor em construções e asfaltos.">
                    ilhas de calor
                </span> acontecem quando uma cidade ou área urbana fica
                mais quente do que as regiões ao seu redor.
                Isso ocorre porque construções como prédios, ruas e estacionamentos absorvem o calor do Sol e o liberam
                lentamente,
                enquanto áreas naturais, florestas, parques e rios, ajudam a resfriar o ar.
            </p>

            <p>
                Dessa forma, as cidades se transformam em verdadeiros "bolsões de
                calor",
                apresentando temperaturas mais altas durante o dia e até mesmo à noite, quando comparadas às regiões
                próximas.
                Esse fenômeno pode ocorrer tanto em cidades grandes quanto pequenas, em diferentes estações do ano.
            </p>

            <p>
                Entre as principais causas estão a redução da vegetação,
                o uso de materiais urbanos que acumulam calor (como asfalto e concreto), e o excesso de prédios que
                dificultam a circulação do ar. Além disso, as atividades humanas e a poluição contribuem para intensificar o
                problema.
            </p>

            <p>
                As ilhas de calor podem elevar as temperaturas urbanas em até 7 °C em relação às áreas vizinhas,
                afetando a qualidade do ar, o conforto térmico e até o consumo de energia das cidades.
            </p>

            <p>
                Um estudo da USP analisando 70 cidades paulistas com imagens de satélite entre 2013 e 2025 mostrou
                bem essa diferença: no verão, a temperatura de superfície das áreas mais urbanizadas da Grande São
                Paulo costuma chegar a 60°C, próximo do que se mede em galpões industriais, enquanto áreas com mais
                vegetação e corpos d'água não passam de 25°C. Ao longo do último século, enquanto a temperatura
                média global subiu cerca de 1,2°C, a cidade de São Paulo registrou um aumento de 2,4°C nas máximas e
                2,8°C nas mínimas diárias, justamente por causa do efeito das ilhas de calor somado ao aquecimento
                global.
            </p>

            <p>
                Diversas cidades vêm adotando estratégias de mitigação para reduzir esse efeito. Telhados e paredes
                verdes ajudam a resfriar os edifícios por evapotranspiração, pavimentos mais claros refletem mais
                luz solar em vez de absorvê-la, e corredores verdes conectando parques facilitam a circulação de ar
                fresco entre bairros. Pesquisadores chamam isso de "efeito oásis": áreas com mais cobertura vegetal
                registram, em média, 7°C a menos que as regiões mais urbanizadas ao redor, o que reforça a
                importância do planejamento urbano no combate às ilhas de calor.
            </p>

            <p>
                O motivo físico por trás desses materiais mais claros tem nome: albedo, a fração da luz solar que
                uma superfície reflete de volta para o espaço em vez de absorver. Uma superfície branca ou clara
                tem albedo alto e reflete grande parte da radiação, enquanto o asfalto escuro tem albedo baixo e
                absorve quase toda a luz que recebe, transformando-a em calor. É o mesmo princípio que faz uma
                camiseta preta esquentar mais ao sol do que uma branca. Por isso, pintar telhados de branco,
                trocar o asfalto por pavimentos mais claros e aumentar a cobertura vegetal, que também reflete
                parte da radiação além de resfriar o ar por evapotranspiração, são estratégias baratas e eficazes
                para reduzir a temperatura de bairros inteiros sem depender de grandes obras.
            </p>

            <p>
                Um exemplo internacional bastante citado é o de Medellín, na Colômbia. A partir de 2016, a
                prefeitura transformou 18 ruas e 12 cursos d'água da cidade em "corredores verdes", plantando cerca
                de 880 mil árvores e 2,5 milhões de plantas ao longo dessas rotas. O resultado foi uma queda média
                de 2°C na temperatura da cidade, chegando a 3°C em alguns pontos, o suficiente para tornar bairros
                inteiros mais habitáveis durante ondas de calor. O projeto ficou tão conhecido que recebeu um prêmio
                internacional de sustentabilidade em 2019 e passou a ser estudado por prefeituras de outros países,
                inclusive brasileiras, como referência de baixo custo para enfrentar as ilhas de calor.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Um bairro arborizado registra temperatura bem mais baixa que um bairro
                    vizinho dominado por asfalto, na mesma cidade. Qual conceito explica isso?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="correto" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Ilha de calor</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="errado" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Inversão térmica</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Chuva ácida</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'é a ilha de calor: asfalto e concreto absorvem e retêm calor, enquanto as árvores resfriam o ar por evapotranspiração.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (chuva acida) -->
        <div class="topico">

            <h2>Chuva Ácida</h2>

            <div class="area">
                <img alt="Formação da chuva ácida a partir de CO2 e poluentes industriais" class="w3-mobile" id="imagem3" src="tp22f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                A <span class="termo clima"
                    data-palavra="Chuva Ácida"
                    data-definicao="Precipitação contaminada por gases poluentes como dióxido de enxofre e óxidos de nitrogênio, que tornam a água mais ácida e prejudicial ao ambiente.">
                    chuva ácida</span> é um tipo de precipitação, como chuva, neblina,
                granizo ou até poeira,
                que contém ácidos fortes, principalmente o ácido sulfúrico (H₂SO₄)
                e o ácido nítrico (HNO₃). Ela ocorre quando gases poluentes
                liberados
                na atmosfera se misturam com a água das nuvens e retornam à superfície terrestre.
            </p>

            <p>
                A principal causa desse fenômeno é a emissão de gases poluentes
                como o dióxido de enxofre (SO₂)
                e os óxidos de nitrogênio (NOx), resultantes da queima de combustíveis fósseis, das atividades industriais e
                do uso intenso de veículos.
                Esses gases podem se espalhar pelo vento e atingir até regiões sem indústrias.
            </p>

            <p>
                Quando esses poluentes reagem com a água e o oxigênio na atmosfera, formam ácidos que se misturam às nuvens
                e depois caem sobre a Terra com a chuva. Isso torna lagos, rios e solos mais ácidos, afetando plantas,
                animais e
                também as construções urbanas.
            </p>

            <p>
                Além dos danos ambientais e à infraestrutura, a chuva ácida também contribui para a piora da qualidade do ar,
                podendo causar problemas respiratórios nas pessoas e aumentar os impactos da poluição nas cidades.
            </p>

            <p>
                Isso acontece porque os mesmos gases que formam a chuva ácida, o dióxido de enxofre e os óxidos de
                nitrogênio, também podem ser inalados diretamente antes de reagirem na atmosfera. Em contato com as
                vias respiratórias, eles irritam os pulmões e podem desencadear ou agravar crises de asma,
                bronquite e outras doenças respiratórias, principalmente em crianças, idosos e pessoas que já têm
                problemas de saúde. Por isso, regiões com forte presença de indústrias ou tráfego intenso de
                veículos costumam registrar tanto mais casos de chuva ácida quanto mais internações hospitalares
                ligadas à qualidade do ar, dois efeitos diferentes de uma mesma causa.
            </p>

            <p>
                Vale lembrar que toda chuva já é naturalmente um pouco ácida: o CO₂ presente no ar se dissolve na
                água das nuvens e forma ácido carbônico, deixando a chuva comum com pH em torno de 5,6. A chuva
                ácida é bem mais agressiva que isso, com pH abaixo de 5, o suficiente para corroer materiais à base
                de carbonato de cálcio, como mármore e calcário. É por isso que monumentos de pedra em todo o mundo
                sofrem com esse fenômeno: as ruínas do Parthenon, em Atenas, a catedral gótica de Colônia, na
                Alemanha, e até o Taj Mahal, na Índia, mostram sinais de corrosão associados à chuva ácida. No
                Brasil, um caso famoso é o das esculturas dos Doze Profetas, obra-prima do escultor Aleijadinho no
                Santuário de Bom Jesus de Matosinhos, em Congonhas (MG): a poluição industrial da região já foi
                apontada como fator de degradação da pedra-sabão usada nas estátuas.
            </p>

            <p>
                Um dos casos mais estudados de chuva ácida no mundo aconteceu em Sudbury, no Canadá. Durante quase
                um século, as fundições de níquel da região lançaram tanto enxofre na atmosfera que a paisagem ao
                redor virou um deserto de rochas enegrecidas, e cerca de 330 lagos da área ficaram tão ácidos que
                praticamente não sobrou vida neles. Na década de 1970, o governo canadense obrigou as empresas a
                reduzir drasticamente as emissões de enxofre, e a cidade iniciou um esforço de recuperação que
                incluiu o plantio de mais de 12 milhões de árvores e a revitalização de milhares de hectares de
                solo. Décadas depois, os lagos de Sudbury voltaram a ter peixes e a receber banhistas, um exemplo de
                que os efeitos da chuva ácida, mesmo severos, podem ser revertidos com políticas públicas
                consistentes e de longo prazo.
            </p>

            <p>
                Nas décadas de 1970 e 1980, a chuva ácida chegou a ser um dos maiores problemas ambientais da
                Europa e da América do Norte. Florestas inteiras na Alemanha, na Escandinávia e no Canadá sofreram
                perda severa de vegetação, e milhares de lagos escandinavos ficaram ácidos demais para sustentar
                peixes. Esse cenário levou a acordos internacionais como a Convenção de Genebra sobre Poluição
                Atmosférica Transfronteiriça, de 1979, que passou a limitar as emissões de dióxido de enxofre e
                óxidos de nitrogênio entre os países europeus, reduzindo significativamente o problema nas décadas
                seguintes.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Por que os efeitos da chuva ácida podem aparecer bem longe das indústrias
                    que a causaram?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="correto" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>O vento transporta os poluentes por centenas de
                            quilômetros antes da chuva cair</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="errado" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>A chuva ácida só existe onde chove sobre as próprias
                            chaminés</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>Isso é um mito, a chuva ácida é sempre um problema
                            local</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'gases como o SO₂ e os NOx podem ser carregados pelo vento por centenas de quilômetros antes de reagir com a água da atmosfera e caírem como chuva ácida, atingindo regiões sem nenhuma indústria.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (desertificacao) -->
        <div class="topico">

            <h2>Desertificação</h2>

            <div class="area">
                <img alt="Solo fértil se transformando em solo árido e rachado" class="w3-mobile" id="imagem4" src="tp22f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                A
                <span class="termo clima"
                    data-palavra="Desertificação"
                    data-definicao="Processo de degradação do solo em regiões áridas e semiáridas, causado pela ação humana e pelas mudanças climáticas, tornando a terra infértil.">
                    desertificação
                </span> é o processo em que terras antes férteis
                se degradam e passam a se parecer com desertos, tornando-se secas, pobres em nutrientes e com pouca
                vegetação.
                Esse fenômeno pode ocorrer por causas naturais, como mudanças
                climáticas e secas prolongadas,
                ou pela ação humana.
            </p>

            <p>
                Entre as principais causas estão o desmatamento,
                a agricultura intensiva, o pastoreio excessivo e a exploração descontrolada da água e dos recursos naturais.
                Essas práticas reduzem a capacidade do solo de se regenerar e o tornam mais vulnerável à erosão.
            </p>

            <p>
                As consequências são graves: perda da biodiversidade, diminuição da produtividade agrícola,
                escassez de água e migração forçada de populações rurais. Regiões como o Sahel (na África),
                o Mar de Aral (na Ásia Central) e o deserto de Gobi (na China) são exemplos marcantes desse processo.
            </p>

            <p>
                Em escala global, a situação é alarmante: segundo a Convenção da ONU de Combate à Desertificação
                (UNCCD), cerca de 40% dos solos do planeta já estão degradados ou correm risco de se tornar
                improdutivos, numa perda de aproximadamente 100 milhões de hectares saudáveis por ano. Esse cenário
                ameaça a subsistência de mais de um bilhão de pessoas em mais de 100 países. Em agosto de 2026,
                representantes de 197 países se reuniram na Mongólia, país onde 77% do território já está
                degradado, para a 17ª Conferência das Partes (COP17) da UNCCD, discutindo formas de restaurar terras
                degradadas e proteger pastagens naturais que sustentam cerca de 2 bilhões de pessoas no mundo.
            </p>

            <p>
                No Sahel, a região africana logo abaixo do deserto do Saara, está em andamento um dos maiores
                projetos de recuperação ambiental do mundo: a Grande Muralha Verde. A ideia, liderada pela União
                Africana, é plantar uma faixa contínua de árvores, pastagens e vegetação nativa atravessando o
                continente de ponta a ponta, ao longo de 8 mil quilômetros de comprimento e cerca de 15 quilômetros
                de largura, envolvendo mais de vinte países. O projeto está hoje pouco mais de 15% concluído, mas já
                restaurou perto de 18 milhões de hectares de terras degradadas e gerou centenas de milhares de
                empregos ligados ao plantio e manejo das novas áreas verdes. A meta é restaurar 100 milhões de
                hectares até o fim desta década, um esforço gigantesco para conter o avanço do maior deserto quente
                do planeta sobre terras que ainda sustentam a vida de milhões de agricultores e pastores.
            </p>

            <p>
                O combate à desertificação passa por ações de reflorestamento,
                uso consciente da água, práticas agrícolas sustentáveis e cooperação internacional,
                como a <span class="termo clima" data-palavra="Convenção da ONU de Combate à Desertificação"
                    data-definicao="Tratado internacional adotado em 1994, em Paris, em que os países se comprometem a combater a desertificação e mitigar os efeitos da seca, especialmente na África.">Convenção
                    da ONU de Combate à Desertificação</span>, adotada em 1994.
            </p>

            <p>
                No Brasil, o processo de desertificação atinge principalmente o semiárido nordestino, numa área
                conhecida como "polígono das secas". O pastoreio excessivo de caprinos e ovinos, a irrigação mal
                planejada, que provoca o acúmulo de sal no solo, e a retirada da vegetação de caatinga para lenha e
                carvão são as principais causas locais. Municípios do interior da Bahia, Pernambuco e Piauí já
                enfrentam núcleos de desertificação avançada, onde o solo perdeu quase toda a capacidade produtiva.
                O Ministério do Meio Ambiente mantém programas de recuperação dessas áreas, combinando
                reflorestamento com espécies nativas e técnicas de convivência com o semiárido.
            </p>

            <p>
                Para se ter uma ideia do tamanho desse território, a área oficial do semiárido brasileiro soma
                969.589,4 km², distribuídos por oito estados nordestinos (Alagoas, Bahia, Ceará, Paraíba,
                Pernambuco, Piauí, Rio Grande do Norte e Sergipe) e pelo norte de Minas Gerais, totalizando 1.262
                municípios segundo a delimitação oficial de 2017. É uma área maior que a soma de vários países
                europeus, o que ajuda a explicar por que a desertificação no Brasil não é um problema pontual, mas
                uma questão de política pública em escala regional.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Uma região do semiárido brasileiro perde vegetação e se torna cada vez mais
                    seca e improdutiva por causa do pastoreio excessivo. Esse processo é conhecido como:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="correto" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Desertificação</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="errado" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Desmatamento</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Chuva ácida</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'é desertificação: degradação do solo em regiões áridas e semiáridas que combina causas naturais com ação humana, como o pastoreio excessivo, até o solo perder a capacidade produtiva.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (desmatamento) -->
        <div class="topico">

            <h2>Desmatamento</h2>

            <div class="area">
                <img alt="Área de floresta amazônica desmatada vista de cima" class="w3-mobile" id="imagem5" src="tp22f05.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                O
                <span class="termo clima"
                    data-palavra="Desmatamento"
                    data-definicao="Retirada total ou parcial da vegetação nativa para outros usos, como agricultura e pecuária, causando perda de biodiversidade e agravando o aquecimento global.">
                    desmatamento
                </span>
                é a remoção total ou parcial da cobertura vegetal
                natural,
                geralmente para dar lugar à agricultura, pecuária, mineração ou
                expansão urbana.
                Segundo a FAO, as florestas cobrem cerca de 31% da superfície da Terra, e mais da metade está concentrada em
                países como
                Brasil, Canadá, Rússia, China e Estados Unidos.
            </p>

            <p>
                As principais causas do desmatamento são a agricultura comercial,
                responsável por quase 40% do desmatamento tropical, seguida pela agricultura de subsistência e pela
                exploração de madeira.
                Desde 1990, o planeta perdeu aproximadamente 420 milhões de hectares de florestas.
            </p>

            <p>
                Na Amazônia, o desmatamento é um problema histórico: o Brasil já perdeu cerca de 69,5 milhões de
                hectares de floresta desde o início do monitoramento por satélite até 2021.
                As consequências incluem perda da biodiversidade, aumento dos gases de efeito estufa, erosão do solo,
                redução da qualidade da água e agravamento das mudanças climáticas.
            </p>

            <p>
                Para combater esse problema, o Brasil estabeleceu a meta de desmatamento zero
                até 2030.
                As ações incluem práticas sustentáveis, monitoramento e fiscalização, proteção de terras indígenas e
                incentivos econômicos,
                como o Fundo Amazônia e o pagamento por serviços ambientais.
                O <span class="termo clima" data-palavra="PPCDAm"
                    data-definicao="Plano de Ação para Prevenção e Controle do Desmatamento na Amazônia Legal, criado pelo governo federal em 2004, combinando monitoramento por satélite, fiscalização e áreas protegidas.">Plano
                    PPCDAm</span> é um exemplo de sucesso, tendo reduzido o desmatamento em 83% entre 2004 e 2012, e os
                dados mais recentes do INPE mostram que essa tendência de queda voltou com força: em 2025, a taxa de
                desmatamento na Amazônia caiu para 5.796 km², o menor índice em onze anos, e o ciclo mais recente
                (agosto de 2025 a julho de 2026) registrou uma nova redução de 36%, o menor valor já medido desde o
                início da série histórica em 2016.
            </p>

            <p>
                A Amazônia influencia o clima muito além de suas próprias fronteiras através do fenômeno conhecido
                como <span class="termo clima" data-palavra="Rios Voadores"
                    data-definicao="Correntes de vapor d'água que se formam sobre a Floresta Amazônica, através da evapotranspiração das árvores, e viajam pela atmosfera levando chuva para o Centro-Oeste, Sudeste e Sul do Brasil.">rios
                    voadores</span>: imensas correntes de vapor d'água que se formam sobre a floresta, à medida que
                as árvores bombeiam de volta para a atmosfera a água que absorveram do solo, e viajam pelo céu
                carregando bilhões de toneladas de umidade até o Centro-Oeste, o Sudeste e o Sul do país, além de
                países vizinhos como Bolívia, Paraguai e Argentina. Essas "correntes aéreas" ajudam a abastecer
                bacias hidrográficas inteiras e a manter a umidade do solo em regiões distantes da floresta. Ao
                derrubar árvores, o desmatamento reduz a evapotranspiração e enfraquece esses rios voadores,
                contribuindo para secas em regiões que, à primeira vista, parecem não ter nenhuma ligação com a
                Amazônia.
            </p>

            <p>
                O desmatamento não é um problema exclusivo da Amazônia. O Cerrado, segundo bioma brasileiro em
                extensão e um dos mais ricos em biodiversidade do planeta, também sofre com a perda acelerada de
                vegetação nativa, principalmente por causa da expansão da soja e da pecuária. As boas notícias
                recentes também chegaram por lá: os dados mais atuais do INPE mostram queda no desmatamento tanto na
                Amazônia quanto no Cerrado, um sinal de que o monitoramento por satélite e a fiscalização ambiental
                têm surtido efeito nos dois biomas ao mesmo tempo.
            </p>

            <p>
                Esses números só existem graças ao sensoriamento remoto, tema que você já estudou em outra aula
                deste módulo. O INPE mantém dois sistemas complementares: o PRODES, criado em 1988, que usa imagens
                de satélite de alta resolução (30 metros) para calcular a taxa oficial de desmatamento uma vez por
                ano, e o DETER, criado em 2004, que usa imagens de resolução mais baixa para emitir alertas quase
                diários sobre onde a floresta está sendo derrubada naquele exato momento. Juntos, os dois sistemas
                permitem que o Ibama e a Polícia Federal direcionem a fiscalização para os pontos mais críticos em
                tempo real, em vez de descobrir o estrago só no fim do ano.
            </p>

            <p>
                É comum confundir desmatamento com desertificação, mas os dois processos não são a mesma coisa.
                O desmatamento é a remoção da cobertura vegetal, um evento que pode acontecer em qualquer bioma,
                inclusive em florestas úmidas como a Amazônia. Já a desertificação é a degradação do solo até ele
                perder a capacidade produtiva, tornando-se árido como um deserto, algo que ocorre principalmente em
                regiões já naturalmente secas ou semiáridas. O desmatamento pode ser uma das causas da
                desertificação, mas nem toda área desmatada se transforma em deserto: uma floresta amazônica
                desmatada, por exemplo, costuma virar pasto ou plantação, não um deserto, embora perca grande parte
                de sua biodiversidade e de sua capacidade de regular o clima regional.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Sintese dos fenomenos -->
        <div class="topico">

            <h2>Os Fenômenos Se Conectam</h2>

            <p>
                Inversão térmica, ilha de calor, chuva ácida, desertificação e desmatamento parecem, à primeira
                vista, cinco problemas isolados, típicos de lugares bem diferentes entre si. Mas todos compartilham
                uma característica importante: embora sejam chamados de mudanças climáticas "locais", raramente
                ficam restritos ao lugar onde começaram. A chuva ácida de uma indústria pode cair centenas de
                quilômetros adiante; a fumaça presa por uma inversão térmica, como em Cubatão, afeta toda uma
                população vizinha; e a desertificação de uma região empurra famílias inteiras a migrar para outras
                cidades, como já vimos acontecer no Nordeste brasileiro e no Sahel africano.
            </p>

            <p>
                Esses fenômenos também se combinam entre si. Uma cidade com muitas ilhas de calor e pouco vento tem
                mais chance de sofrer com inversão térmica no inverno, já que o ar aquecido pelas construções
                dificulta ainda mais a dispersão dos poluentes. O desmatamento reduz a evapotranspiração das
                florestas, o que pode intensificar tanto as ilhas de calor nas cidades próximas quanto o avanço da
                desertificação em regiões mais secas. E todos esses processos locais, somados em milhares de
                cidades e regiões ao redor do mundo, acabam contribuindo também para o quadro global de aquecimento
                que estudamos na aula passada.
            </p>

            <p>
                Com isso, fechamos nosso estudo de climatologia, que começou lá no Texto19 com a atmosfera e os
                fatores do clima e termina aqui, nas mudanças que a ação humana provoca em escala local e global.
                Na próxima aula, vamos revisar tudo o que aprendemos nesse bloco antes de seguir para um novo tema:
                a hidrografia, o estudo dos rios, das bacias hidrográficas e da água doce que sustenta a vida no
                planeta.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Infografico resumo -->
        <!--
        <div class="topico">
            <h2> Infográfico - Resumo</h2>
            <div class="w3-margin"><img id="inforesumotp22" src="inforesumotp22.webp" alt="Infográfico resumo Mudanças Climáticas Locais" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>
        -->


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Em que ano, e em qual cidade, aconteceu o episódio de inversão térmica conhecido como "Grande Fumaça" (Great Smog)?</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'londres', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Qual cidade brasileira ficou conhecida como "Vale da Morte" nos anos 1980 por causa da poluição industrial?</p>
            <div class="w3-margin">
                <input class="input" id="q2a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp2a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a', 'cubat', 'resp2a', this, 'globinho2a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho2a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <div class="w3-margin-top">
                <button class="btnHide" onclick="MostrarProximo(this)" style="display:none">
                    Próximo ➜
                </button>
            </div>
        </div>


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se as ilhas de calor deixam as cidades mais quentes, por que é comum sentir mais frio ao caminhar por um parque no centro da cidade em comparação com uma rua movimentada?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque a vegetação funciona como um regulador térmico natural. As árvores fazem sombra e liberam vapor d'água pela transpiração (evapotranspiração), o que resfria o ar ao redor. Já o asfalto, o concreto e os prédios absorvem calor durante o dia e o liberam lentamente, mesmo à noite. É por isso que um parque, mesmo dentro da mesma cidade, pode ser vários graus mais fresco do que uma avenida cheia de prédios e carros a poucos quarteirões de distância.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que a inversão térmica é mais comum no inverno e não no verão?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque a inversão térmica depende de condições de calmaria: pouco vento, poucas nuvens e noites longas e frias, todas mais comuns no inverno. Nessas noites, o solo perde calor rapidamente para o céu limpo, esfriando o ar próximo à superfície, enquanto uma camada de ar mais quente permanece acima, funcionando como uma tampa. No verão, o maior aquecimento do solo durante o dia e a maior instabilidade atmosférica dificultam a formação dessa "tampa" de ar quente.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    A chuva ácida só afeta as cidades onde estão as indústrias que a causam?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Não. Os gases poluentes como o dióxido de enxofre e os óxidos de nitrogênio podem ser transportados pelo vento por centenas de quilômetros antes de reagirem com a água da atmosfera e caírem como chuva ácida. Por isso, regiões sem nenhuma indústria podem sofrer com chuva ácida originada em outro estado ou até em outro país, o que torna esse um problema que exige cooperação entre regiões e países, e não apenas ação local.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico" id="sumario">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é a inversão térmica e por que ela agrava a poluição nas cidades?</h3>
                <h3>2. Por que o fenômeno da inversão térmica ocorre com mais frequência no inverno?</h3>
                <h3>3. O que são ilhas de calor e quais são suas principais causas?</h3>
                <h3>4. Qual é a relação entre o crescimento urbano e a formação das ilhas de calor?</h3>
                <h3>5. O que é a chuva ácida e como ela se forma?</h3>
                <h3>6. Quais são os impactos da chuva ácida no ambiente e nas cidades?</h3>
                <h3>7. O que é a desertificação e como a ação humana acelera esse processo?</h3>
                <h3>8. Quais são as principais consequências da desertificação para a população local?</h3>
                <h3>9. Quais são as causas mais comuns do desmatamento no Brasil?</h3>
                <h3>10. De que forma o desmatamento contribui para o aquecimento global?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre por que o centro da cidade parece mais quente do que um parque. Agora você sabe que isso tem nome, ilha de calor, e que está ligado à falta de vegetação e ao acúmulo de calor em construções, e que pode se combinar com a inversão térmica para piorar ainda mais a qualidade do ar nas noites frias de inverno.</p>

                <p>Você também viu que chuva ácida, desertificação e desmatamento são problemas que, embora comecem localmente, se espalham por vento, água e cadeia produtiva, afetando regiões distantes de onde foram causados, o que exige soluções tanto locais quanto de cooperação regional e internacional.</p>

                <p><strong>Resumo dos conceitos:</strong> inversão térmica e Cubatão; ilha de calor e efeito oásis; chuva ácida e pH; desertificação e Convenção da ONU de Combate à Desertificação; desmatamento e PPCDAm.</p>

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
        mensagem: 'o tema Mudanças Climáticas Locais é fascinante! Continue estudando!',
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
