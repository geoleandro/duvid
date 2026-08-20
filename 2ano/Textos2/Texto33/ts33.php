<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Meio ambiente no Brasil: biomas, desmatamento, políticas ambientais e conflitos socioambientais">
    <meta property="og:title" content="Texto 33 - Meio ambiente no Brasil">
    <meta property="og:description"
        content="Amazônia, Cerrado, Mata Atlântica: o que está sendo destruído, por quem e por quê, e o que está em jogo para o planeta">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="stylesheet" href="/estilos/rpg-sistema.css">
    <link rel="stylesheet" href="/estilos/ModeloCss.css">
    <link rel="stylesheet" href="/estilos/explicacaoPalavra.css">
    <link rel="stylesheet" href="/estilos/texto-estilo.css">
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

    <title>2º ano - Texto 33 - Meio Ambiente no Brasil</title>

</head>

<body>

    <?php include __DIR__ . '/../../../includes/header.php'; ?>
    <div id="aviso-status" class="w3-margin-top"></div>

    <main class="w3-content w3-white w3-card-2 w3-padding-large w3-margin-bottom" style="max-width:750px">


        <!-- BLOCO 1: Abertura -->
        <div class="topico">

            <div class="w3-padding-top-48"></div>

            <h1 id="h1"> </h1>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar e caracterizar os principais biomas
                        brasileiros (Amazônia, Cerrado, Caatinga, Mata Atlântica, Pampa e Pantanal); compreender as
                        causas e consequências do desmatamento; conhecer o Código Florestal, o Sistema Nacional de
                        Unidades de Conservação e as principais políticas ambientais brasileiras; e analisar os
                        conflitos socioambientais que envolvem povos indígenas, quilombolas e comunidades
                        tradicionais.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Prática Social Inicial -->
        <div class="topico">

            <h2>O que está ao redor da sua cidade?</h2>

            <p><span class="primeiraLetra">V</span>ocê sabe em qual bioma você vive? Se for de Minas Gerais, pode estar
                no Cerrado. Se for do interior da Bahia, talvez na Caatinga. Se for do litoral, pode ser Mata Atlântica.
                Mas quanto dessa vegetação original ainda existe ao redor da sua cidade? Há mata, campo ou caatinga
                próximos, ou o ambiente natural foi completamente substituído por plantações, pastagem ou concreto?</p>

            <p>Você já ouviu falar de alguma notícia sobre desmatamento, queimada ou conflito por terra na região onde
                você mora? Há alguma área de preservação, parque estadual ou reserva indígena perto da sua cidade?</p>

            <p>Anote no caderno: <strong>Na sua opinião, quem tem o direito de usar as florestas e os biomas do Brasil:
                    o Estado, as empresas privadas, as populações que vivem lá, ou todos os brasileiros? Como esse
                    direito deveria ser equilibrado com as necessidades econômicas?</strong></p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: Problematização -->
        <div class="topico">

            <h2>O problema que esta aula vai ajudar a entender</h2>

            <p>O Brasil é dono da maior biodiversidade do planeta. Tem a maior floresta tropical do mundo, o maior rio
                em volume de água, o maior conjunto de zonas úmidas (Pantanal), a savana mais rica em espécies do
                planeta (Cerrado). E mesmo assim, entre 1970 e 2023, o Brasil desmatou uma área maior que a França, a
                Espanha e Portugal juntas.</p>

            <p>A pergunta desta aula não é "o desmatamento é ruim" mas <strong>quem desfloresta, por quê, quem lucra e
                    quem paga o preço.</strong> Porque o desmatamento no Brasil não é acidente nem pobreza: é resultado
                de interesses econômicos organizados, de políticas que ora protegem e ora fragilizam a legislação
                ambiental, e de conflitos entre diferentes visões sobre o que o território brasileiro é e para quem ele
                serve.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Os biomas brasileiros -->
        <div class="topico">

            <h2>Os biomas brasileiros</h2>

                <p>O Brasil tem seis biomas principais. Cada um tem características climáticas, de vegetação e fauna
                    únicas:</p>

                <p><strong><span class="termo" data-palavra="Amazônia"
                            data-definicao="Maior bioma brasileiro e maior floresta tropical do mundo, com cerca de 4,2 milhões de km². Concentra mais de 10% de toda a biodiversidade do planeta, incluindo espécies ainda não catalogadas pela ciência. É o berço dos rios Amazonas, Negro, Madeira e outros. Produz 'rios voadores' (vapores d'água que irrigam o Centro-Sul do Brasil). Alberga centenas de povos indígenas. A taxa de desmatamento, monitorada pelo INPE, caiu entre 2004 e 2012 mas voltou a crescer. Em 2022, o desmatamento acumulado já superava 20% da floresta original.">Amazônia</span></strong>:
                    4,2 milhões de km², cobrindo 49% do território nacional. É o maior bioma do país e da Terra. Sua
                    função climática é crítica: as árvores liberam vapor d'água que forma os "rios voadores", massas de
                    ar úmido que irrigam o Centro-Sul do Brasil. Sem a Amazônia, o regime de chuvas do interior do país
                    mudaria drasticamente.</p>

                <p><strong><span class="termo" data-palavra="Cerrado"
                            data-definicao="Savana tropical brasileira, o segundo maior bioma do país com cerca de 2 milhões de km². É a savana mais rica em biodiversidade do planeta, com mais de 11 mil espécies de plantas. É o berço das principais bacias hidrográficas do Brasil (São Francisco, Paraná, Tocantins, Araguaia). Sofreu mais de 50% de sua área original desmatada, principalmente pela expansão da soja e da pecuária. É chamado de 'caixa d'água do Brasil'.">Cerrado</span></strong>:
                    2 milhões de km², o segundo maior bioma. É a savana mais biodiversa do planeta (mais de 11 mil
                    espécies de plantas) e o berço de três das mais importantes bacias hidrográficas do Brasil: São
                    Francisco, Paraná e Tocantins. Mais de 50% do Cerrado original já foi destruído, especialmente pela
                    soja e pela pecuária. É chamado de "caixa d'água do Brasil": suas nascentes abastecem rios que
                    irrigam o Nordeste, alimentam Itaipu e levam água para milhões de pessoas.</p>

                <p><strong><span class="termo" data-palavra="Mata Atlântica"
                            data-definicao="Bioma que originalmente cobria toda a faixa litorânea do Brasil, de Pernambuco ao Rio Grande do Sul. É o bioma mais devastado do país: restam menos de 12% de sua cobertura original, e menos de 10% dessa área remanescente está protegida por Unidades de Conservação. Mesmo assim, abriga mais de 20 mil espécies de plantas e é considerado um dos hotspots de biodiversidade mais importantes do mundo. É onde vivem cerca de 70% dos brasileiros, o que explica tanto a devastação histórica quanto a urgência de sua proteção.">Mata
                        Atlântica</span></strong>: O bioma mais ameaçado do Brasil. Cobria originalmente a faixa
                    litorânea do país, de Pernambuco ao Rio Grande do Sul. Hoje restam menos de 12% da cobertura
                    original. É onde vivem 70% dos brasileiros, o que explica a devastação histórica. Mesmo assim,
                    abriga mais de 20 mil espécies de plantas e é considerado um dos hotspots de biodiversidade mais
                    importantes do mundo.</p>

                <p><strong>Caatinga</strong>: Bioma exclusivamente brasileiro, que cobre o Nordeste semi-árido. Tem
                    vegetação adaptada à seca: cactos, mandacarus, juremas. É o bioma mais populoso (8 milhões de
                    pessoas) e um dos menos protegidos (apenas 9% em unidades de conservação). Sofre com a
                    desertificação causada pelo desmatamento e pelo uso inadequado do solo.</p>

                <p><strong>Pantanal</strong>: O maior conjunto de zonas úmidas do mundo: 150 mil km² de planícies
                    inundáveis no Mato Grosso e Mato Grosso do Sul. Concentra uma das maiores densidades de fauna
                    silvestre do planeta. Em 2020, sofreu o maior incêndio de sua história, queimando 30% de sua área. É
                    Patrimônio Natural da Humanidade pela UNESCO.</p>

                <p><strong>Pampa</strong>: Campos subtropicais do Sul do Brasil, compartilhado com Argentina e Uruguai.
                    Sofreu conversão intensa para plantações de soja e eucalipto. Menos de 55% da vegetação original
                    permanece.</p>

                <div class="w3-margin">
                    <img src="ts33f01.png"
                        alt="Mapa dos seis biomas brasileiros com respectivas áreas e percentuais de cobertura original remanescente"
                        class="w3-mobile"
                        onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Mapa dos biomas brasileiros em breve</div>'">
                    <span class="w3-small w3-margin-left">Os seis biomas brasileiros e percentual de cobertura original
                        remanescente. Fonte: MapBiomas, 2023.</span>
                </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 5: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O Cerrado é frequentemente chamado de "caixa d'água do Brasil." Essa denominação
                    se justifica porque o Cerrado:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Lagos naturais</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Nascentes das grandes bacias</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Maior índice de chuvas</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'o Cerrado é chamado de caixa d\'água porque nele nascem o São Francisco, o Paraná e o Tocantins-Araguaia.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 6: Desmatamento e políticas ambientais -->
        <div class="topico">

            <h2>Desmatamento: causas e políticas de controle</h2>

            <p>O <span class="termo" data-palavra="Desmatamento"
                    data-definicao="Remoção da cobertura vegetal nativa de uma área, geralmente para uso agropecuário, mineração, infraestrutura ou urbanização.">desmatamento</span>
                no Brasil tem causas econômicas estruturais. Na Amazônia, cerca de 80% do desmatamento é para pecuária
                extensiva: o boi precisa de pasto, e o pasto mais barato é o que foi aberto na floresta. A soja avança
                principalmente no Cerrado e na faixa de transição Cerrado-Amazônia, o <span class="termo"
                    data-palavra="Arco do Desmatamento"
                    data-definicao="Faixa de terra que vai do leste do Pará e norte do Mato Grosso até o sul do Amazonas e o norte de Rondônia, onde a fronteira agropecuária avança sobre a floresta amazônica. É a linha de frente do desmatamento no Brasil: concentra os maiores índices de derrubada de vegetação, os maiores conflitos por terra e os maiores índices de violência no campo. Cidades como Altamira (PA) e Sinop (MT) cresceram rapidamente por estarem nessa fronteira de expansão agrária.">arco
                    do desmatamento</span>. A <span class="termo" data-palavra="Grilagem"
                    data-definicao="Prática de apropriação ilegal de terras públicas (devolutas) por meio da falsificação de documentos de propriedade, muitas vezes usando cartórios cúmplices ou omissos. O termo vem do costume antigo de deixar documentos falsos dentro de uma caixa com grilos, para que os insetos envelhecessem o papel artificialmente. No Brasil, a grilagem costuma seguir uma sequência: primeiro grila-se a terra pública, depois desmata-se para 'provar' uso produtivo, depois vende-se ou usa-se para pecuária e agricultura.">grilagem</span>
                de terras públicas alimenta boa parte do processo: primeiro grila, depois desfloresta, depois vende
                para fazendas.</p>

            <p>Essas causas não agem isoladas: elas se reforçam. A pecuária extensiva costuma ser o primeiro uso da
                terra desmatada porque exige pouco investimento inicial (o boi cria valor mesmo em pasto de baixa
                qualidade), o que a torna atraente para quem grilou a terra e precisa "provar" ocupação produtiva
                rapidamente. Com o tempo, parte dessas áreas de pasto degradado é vendida ou arrendada para a soja,
                que exige mais capital, mas rende mais por hectare. É por isso que analistas descrevem o avanço da
                fronteira agrícola como um processo em cadeia: grilagem abre caminho para a pecuária, a pecuária
                degrada o solo e valoriza a terra, e a valorização atrai a agricultura mecanizada em larga escala.</p>

            <p>O Brasil implementou políticas de controle que funcionaram: entre 2004 e 2012, o desmatamento na Amazônia
                caiu 83%, o maior sucesso de conservação de floresta tropical da história. Os instrumentos foram o
                <strong>Plano de Ação para Prevenção e Controle do Desmatamento na Amazônia (PPCDAm)</strong>, lançado
                em 2004 e que reuniu o monitoramento por satélite do INPE (sistema PRODES), o embargo de municípios
                com alto desmatamento, a restrição de crédito rural a propriedades irregulares e a pressão sobre
                frigoríficos e tradings de soja para não comprarem de área desmatada ilegalmente (Moratória da Soja e
                TAC da Carne).</p>

            <p>Mas entre 2012 e 2022, o desmatamento voltou a crescer, especialmente após o enfraquecimento do Código
                Florestal em 2012 e a desmontagem das agências ambientais entre 2019 e 2022. Isso mostrou que a eficácia
                das políticas ambientais depende de vontade política e financiamento estatal, e que os ganhos
                ambientais podem ser revertidos rapidamente.</p>

            <div class="w3-margin">
                <img src="ts33f02.png"
                    alt="Gráfico do desmatamento anual na Amazônia Legal entre 2000 e 2023 mostrando a queda entre 2004-2012 e o aumento posterior"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Gráfico do desmatamento na Amazônia em breve</div>'">
                <span class="w3-small w3-margin-left">Desmatamento anual na Amazônia Legal, 2000–2023. Fonte:
                    INPE/PRODES.</span>
            </div>

            <h3>Queimadas: quando o fogo vira crise</h3>

            <p>Desmatamento e <span class="termo" data-palavra="Queimada"
                    data-definicao="Uso do fogo para limpar terrenos, seja para renovar pastagens, preparar solo para plantio ou finalizar a derrubada de uma área já desmatada. É diferente de incêndio florestal, que é o fogo descontrolado que se espalha por vegetação nativa, muitas vezes fugindo de uma queimada inicial ou favorecido por seca extrema. No Brasil, a maioria dos grandes incêndios florestais começa como queimada de uso da terra, criminosa ou não, que escapa de controle em períodos de seca.">queimada</span>
                não são sinônimos, mas estão profundamente ligados. A queimada é o uso do fogo para "limpar" terreno,
                seja para renovar pasto, seja para finalizar a derrubada de uma área já desmatada. Quando esse fogo
                foge de controle, especialmente em anos de seca severa, ele vira incêndio florestal, que destrói
                vegetação nativa que não seria necessariamente desmatada de outra forma.</p>

            <p>2024 foi o pior ano da série histórica do INPE para queimadas no Brasil: cerca de 30 milhões de
                hectares foram atingidos pelo fogo, 62% acima da média histórica de 18,5 milhões de hectares por ano.
                O Cerrado teve 9,7 milhões de hectares queimados, 85% deles em áreas de vegetação nativa. O Pantanal
                teve 1,9 milhão de hectares queimados, o segundo pior ano de sua história, atrás apenas de 2020. Na
                Amazônia, entre janeiro e junho, os focos de queimada cresceram 76% em relação ao mesmo período do
                ano anterior, o maior número desde 2004. A seca extrema, agravada pelas mudanças climáticas e pelo
                fenômeno El Niño, transformou queimadas que normalmente ficariam restritas em incêndios que se
                espalharam por milhões de hectares, cobrindo cidades de fumaça a centenas de quilômetros de distância
                e agravando problemas respiratórios da população.</p>

            <h3>Conflitos socioambientais</h3>

            <p>O desmatamento e o uso do território geram conflitos entre diferentes grupos. <span class="termo"
                    data-palavra="Conflito Socioambiental"
                    data-definicao="Disputas envolvendo o controle e uso de recursos naturais e o território, que opõem grupos com diferentes interesses e poder. No Brasil, incluem: conflitos entre fazendeiros/grileiros e povos indígenas ou quilombolas; disputas em torno de mineração em terras indígenas; resistência de comunidades tradicionais contra grandes projetos de infraestrutura (barragens, rodovias); e embates entre o agronegócio e ambientalistas sobre o uso do Cerrado e da Amazônia.">Conflitos
                    socioambientais</span> no Brasil envolvem: povos indígenas e quilombolas que reivindicam terras
                demarcadas invadidas por garimpeiros e fazendeiros; comunidades ribeirinhas deslocadas por grandes
                barragens; pescadores artesanais que perdem o sustento com a poluição industrial dos rios; e populações
                que vivem em áreas de mineração sofrendo os impactos dos rejeitos (como em Mariana, 2015, e Brumadinho,
                2019).</p>

            <p>O caso das comunidades quilombolas mostra como esses conflitos se arrastam por décadas. A Constituição
                de 1988 garante às comunidades remanescentes de quilombo o direito à titulação de suas terras, mas o
                processo burocrático no INCRA é extremamente lento: em 2024, havia 1.857 territórios quilombolas com
                processo de titulação aberto, e no ritmo atual de regularização levaria mais de dois mil anos para
                concluir todos. Naquele ano, 31 decretos regularizaram cerca de 138 mil hectares e beneficiaram 5.401
                famílias, um recorde histórico, mas ainda assim uma fração pequena da demanda represada. Enquanto o
                título não sai, essas comunidades ficam mais vulneráveis a invasões, grilagem e pressão para vender ou
                abandonar a terra.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Entre 2004 e 2012, o desmatamento na Amazônia caiu mais de 80% sem que a produção
                    agropecuária da região diminuísse significativamente. Esse resultado demonstra que:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Preservação e produção são incompatíveis</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Fiscalização e pressão de mercado funcionam</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Queda espontânea, sem intervenção do Estado</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'a queda do desmatamento entre 2004 e 2012 é considerada um dos maiores sucessos de política ambiental da história. ', '10' )">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Legislação e desafios -->
        <div class="topico">

            <h2>Legislação ambiental e desafios atuais</h2>

            <p>O Brasil tem uma das legislações ambientais mais avançadas do mundo, ao menos no papel. O <span
                    class="termo" data-palavra="Código Florestal"
                    data-definicao="Lei federal (Lei 12.651/2012) que regula o uso do solo e a preservação da vegetação nativa no Brasil. Estabelece a Reserva Legal (percentual mínimo de vegetação nativa que cada propriedade rural deve manter, variando de 20% a 80% dependendo do bioma) e as Áreas de Preservação Permanente (APPs, como matas ciliares e topo de morros). Foi revisado em 2012, quando foram concedidas anistias a quem havia desmatado antes de 2008.">Código
                    Florestal</span> (2012) obriga proprietários rurais a manter uma Reserva Legal (20% a 80% da
                propriedade em vegetação nativa, dependendo do bioma) e as Áreas de Preservação Permanente (APPs:
                margens de rios, topos de morro, encostas).</p>

            <p>Mas há contradições: as anistias do Código Florestal de 2012 perdoaram passivos ambientais de quem
                tinha desmatado ilegalmente antes de 2008. O licenciamento ambiental, instrumento fundamental para
                avaliar o impacto de grandes projetos, sofreu pressões para ser flexibilizado. E o reconhecimento de
                terras indígenas, que funcionam como barreira ao desmatamento, encontrou resistência política ao
                longo das últimas décadas.</p>

            <p>O desafio não é só legal: é também de fiscalização. O Brasil tem um território imenso e um corpo de
                fiscais insuficiente para cobri-lo. O IBAMA e o ICMBio precisam de mais recursos, mais pessoal e
                mais proteção política para agir. Quando as agências ambientais são enfraquecidas por cortes de
                orçamento e pressão política, o desmatamento avança.</p>

            <div class="w3-margin">
                <img src="ts33f03.png"
                    alt="Mapa das terras indígenas e unidades de conservação na Amazônia Legal e sua correlação com as taxas de desmatamento"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Mapa de terras indígenas e desmatamento em breve</div>'">
                <span class="w3-small w3-margin-left">Terras indígenas e unidades de conservação como barreiras ao
                    desmatamento na Amazônia. Fonte: FUNAI/INPE, 2023.</span>
            </div>

            <h3>Unidades de Conservação: o outro braço da proteção ambiental</h3>

            <p>Além da Reserva Legal e das APPs, que valem para toda propriedade rural, o Brasil tem um sistema
                específico de áreas protegidas: o <span class="termo" data-palavra="Unidades de Conservação"
                    data-definicao="Áreas do território nacional com características naturais relevantes, legalmente instituídas pelo poder público para proteger a biodiversidade e os recursos naturais. Organizadas pelo SNUC (Sistema Nacional de Unidades de Conservação, Lei 9.985/2000) em dois grupos: Proteção Integral (estação ecológica, reserva biológica, parque, monumento natural e refúgio de vida silvestre, onde só se admite uso indireto, como visitação e pesquisa) e Uso Sustentável (área de proteção ambiental, área de relevante interesse ecológico, floresta, reserva extrativista, reserva da fauna, reserva de desenvolvimento sustentável e reserva particular do patrimônio natural, onde moradores podem explorar recursos naturais de forma controlada). Em 2024, o Brasil tinha cerca de 2.446 UCs cobrindo 18% do território continental e 26% da área marinha.">Sistema
                    Nacional de Unidades de Conservação</span> (SNUC), aprovado em julho de 2000 e que completou 25
                anos em 2025. As UCs se dividem em dois grupos. As de <strong>Proteção Integral</strong> admitem
                apenas uso indireto dos recursos naturais e reúnem cinco categorias: estação ecológica (fechada ao
                público, só para pesquisa), reserva biológica (preservação integral, sem interferência humana),
                parque nacional, estadual ou municipal (aberto à visitação, pesquisa e turismo ecológico), monumento
                natural (sítios naturais raros ou de grande beleza cênica) e refúgio de vida silvestre (proteção de
                espécies da flora e da fauna). As de <strong>Uso Sustentável</strong> reúnem sete categorias, entre
                elas a área de proteção ambiental (APA), a reserva extrativista (voltada a populações tradicionais,
                como seringueiros e ribeirinhos), a floresta nacional e a reserva particular do patrimônio natural
                (RPPN, em terra privada, cujo proprietário fica isento do Imposto Territorial Rural sobre aquela
                área). Cerca de 75% das UCs brasileiras são de uso sustentável, sendo a APA a categoria mais comum.</p>

            <p>Em 2024, o Brasil somava 2.446 unidades de conservação federais, estaduais e municipais, cobrindo
                cerca de 18% do território continental e 26% das águas marinhas do país. Só as UCs federais somam
                cerca de 1,5 milhão de km², em torno de 17% do território nacional, geridas desde 2007 pelo Instituto
                Chico Mendes de Conservação da Biodiversidade (ICMBio), criado justamente para assumir essa função
                que antes era do IBAMA. A distribuição é muito desigual entre os biomas: dados oficiais de 2019
                mostram que as UCs federais cobrem cerca de 28% da Amazônia, mas apenas 9,5% da Mata Atlântica, 8,9%
                da Caatinga, 8,3% do Cerrado, 4,6% do Pantanal e 3,1% do Pampa, o bioma menos protegido do país. Como
                as terras indígenas, as UCs de proteção integral funcionam como barreira eficaz ao desmatamento:
                dentro delas, a fiscalização e a restrição legal ao uso do solo tornam a derrubada da vegetação muito
                mais difícil do que em terras privadas.</p>

            <p>Na prática, porém, o sistema tem problemas sérios. A maioria das UCs brasileiras não foi criada em
                terras originalmente públicas: elas se sobrepõem a verdadeiros mosaicos de terras públicas,
                particulares e ocupadas informalmente, o que torna a regularização fundiária lenta e cara. Muitas
                unidades já nascem habitadas por comunidades que viviam ali antes da proteção legal, e boa parte dos
                parques brasileiros permanece fechada ao público por falta de estrutura, trilhas sinalizadas e
                equipe de monitoramento. Há também um conflito jurídico real entre Terras Indígenas e Unidades de
                Conservação, que às vezes se sobrepõem no mapa: especialistas como o advogado Sérgio Leitão apontam
                que essa sobreposição revela a falta de uma política ambiental articulada, já que a legislação
                brasileira permitiria conciliar os dois tipos de proteção, mas a falta de vontade política dos
                órgãos públicos trava essa solução.</p>

            <h3>ICMS Ecológico: quando preservar rende dinheiro</h3>

            <p>Um dos instrumentos mais criativos da política ambiental brasileira nasceu no Paraná, em 1989: o <span
                    class="termo" data-palavra="ICMS Ecológico"
                    data-definicao="Mecanismo tributário estadual que redistribui parte da arrecadação do ICMS (Imposto sobre Circulação de Mercadorias e Serviços) para os municípios, usando a presença de Unidades de Conservação e outras áreas protegidas como critério de repasse. Quanto mais área protegida e quanto mais restritiva a categoria de proteção (reservas biológicas pesam mais que áreas de proteção ambiental, por exemplo), maior o valor que o município recebe. Foi criado no Paraná em 1989 e hoje é adotado por 18 dos 26 estados brasileiros.">ICMS
                    Ecológico</span>. Normalmente, o ICMS arrecadado por um estado é redistribuído aos municípios
                principalmente conforme o quanto cada um produziu e vendeu: quem tem mais indústria e comércio,
                recebe mais. O ICMS Ecológico muda essa lógica ao criar um critério ambiental: municípios que abrigam
                Unidades de Conservação, terras indígenas ou mananciais protegidos passam a receber uma fatia maior
                do repasse, mesmo sem gerar tanta atividade econômica convencional.</p>

            <p>Hoje, 18 dos 26 estados brasileiros adotam algum modelo de ICMS Ecológico, incluindo São Paulo, Minas
                Gerais, Rio Grande do Sul, Mato Grosso e Pará. A lógica é simples: um município que preserva floresta
                em pé em vez de desmatar para abrir pasto perde arrecadação de ICMS sobre produção agropecuária, mas
                presta um serviço ambiental para todo o estado (água limpa, clima estável, biodiversidade). O ICMS
                Ecológico tenta corrigir essa distorção, transformando conservação em fonte de receita municipal, e
                não apenas em custo de oportunidade.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 8.5: Texto-fonte -->
        <div class="topico">

            <div class="duvid-bloco-apoio">
                <div class="duvid-texto-citacao">
                    "As terras indígenas são as áreas de menor desmatamento na Amazônia. Dados do INPE mostram
                    consistentemente que, dentro dos limites das terras indígenas demarcadas, a floresta permanece em pé
                    muito mais do que nas áreas ao redor. Os povos indígenas são, portanto, os guardiões mais eficazes
                    da floresta amazônica, não por romanticismo, mas por interesse concreto: a floresta em pé é a base
                    de sua existência. Desmatar o território indígena não é apenas uma violação de direitos humanos: é
                    também um desinvestimento no maior estoque de carbono florestal do planeta."
                </div>
                <div class="duvid-fonte-texto">Adaptado de SOUZA Jr., Carlos et al. Deforestation in the Brazilian
                    Amazon, 1988-2014. Imazon, 2014.</div>
            </div>

            <div class="w3-panel w3-pale-yellow w3-margin-top">
                <p><strong>Responda no caderno antes de continuar:</strong></p>
                <p>1. O texto apresenta dados que mostram que terras indígenas são as áreas de menor desmatamento na
                    Amazônia. Por que isso acontece? O que esse dado revela sobre a relação entre direitos dos povos
                    indígenas e preservação ambiental?</p>
                <p>2. O autor afirma que desmatar terras indígenas "é um desinvestimento no maior estoque de carbono
                    florestal do planeta." O que ele quer dizer com isso? Quais consequências esse "desinvestimento"
                    teria para o clima global?</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Catarse -->
        <div class="topico">

          

                <h2>O que mudou no seu olhar</h2>

                <p>Antes de estudar esta aula, você provavelmente via o desmatamento como um problema de "pessoas que
                    gostam da natureza" versus "pessoas que precisam de trabalho". Agora você vê que o desmatamento tem
                    causas estruturais (modelo econômico, concentração de terra, falta de fiscalização) e consequências
                    que vão muito além da ecologia: afetam o regime de chuvas do Sudeste, a disponibilidade de água do
                    Nordeste, a estabilidade climática global e os direitos de povos que vivem nesses territórios há
                    séculos.</p>

                <p>A Amazônia não é "nossa" no sentido de o Brasil poder fazer com ela o que quiser. Ela é parte de um
                    sistema climático global e abriga povos com direitos territoriais garantidos pela Constituição de
                    1988. E o Cerrado, que a maioria das pessoas nem conhece direito, é o berço dos rios que abastecem
                    metade do Brasil. Destruir esses biomas não é desenvolvimento: é destruição de patrimônio comum, e
                    quem paga o preço são as gerações que ainda virão.</p>

                <p>Você também aprendeu que proteger o meio ambiente não depende só de boa vontade individual. Depende
                    de instrumentos concretos: leis que definem o que pode e o que não pode ser feito na terra
                    (Código Florestal), áreas legalmente protegidas de ocupação e exploração (Unidades de
                    Conservação), incentivos financeiros que tornam a preservação economicamente vantajosa (ICMS
                    Ecológico, Fundo Amazônia) e monitoramento constante por satélite para saber onde e quando a
                    floresta está sendo destruída (INPE, PRODES). Quando esses instrumentos funcionam juntos e são
                    bem financiados, como entre 2004 e 2012, os resultados aparecem rápido. Quando são enfraquecidos,
                    o desmatamento e as queimadas voltam a crescer quase na mesma velocidade.</p>

                <p><strong>Resumo dos conceitos:</strong> biomas (Amazônia, Cerrado, Mata Atlântica, Caatinga, Pantanal,
                    Pampa); desmatamento (causas: pecuária, soja, grilagem, arco do desmatamento; políticas: PPCDAm,
                    PRODES, moratórias); queimadas e incêndios florestais; Código Florestal (Reserva Legal e APPs);
                    Unidades de Conservação (Proteção Integral e Uso Sustentável); ICMS Ecológico; Fundo Amazônia;
                    conflitos socioambientais (indígenas, quilombolas, garimpeiros, barragens); terras indígenas e
                    UCs como barreiras ao desmatamento.</p>

           

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 10: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="titulo-pr">Perguntas que você provavelmente tinha</h2>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que o Brasil desmata tanto se tem leis ambientais?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque ter lei e aplicar a lei são coisas diferentes. O Brasil tem
                um Código Florestal, tem o IBAMA, tem o INPE monitorando por satélite. Mas a fiscalização depende de
                recursos financeiros, pessoal e vontade política. Quando o governo corta o orçamento do IBAMA ou quando
                multas ambientais ficam anos sem ser pagas, a lei perde eficácia. Além disso, há interesses econômicos
                muito poderosos que pressionam contra a fiscalização: o lobby do agronegócio é um dos mais fortes do
                Congresso brasileiro. A lei existe como conquista histórica de movimentos ambientalistas, mas precisa de
                um Estado disposto a aplicá-la mesmo sob pressão política.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O que é o "arco do desmatamento"?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> O arco do desmatamento é a faixa que vai do leste do Pará e norte
                do Mato Grosso até o sul do Amazonas e o norte de Rondônia, onde o desmatamento avança pela fronteira da
                floresta com o Cerrado e as áreas agropecuárias. É a linha de frente do agronegócio em expansão para
                dentro da Amazônia. Nessa faixa se concentram os maiores índices de desmatamento, os maiores conflitos
                por terra e os maiores índices de violência no campo. Cidades como Altamira (PA) e Sinop (MT) cresceram
                rapidamente exatamente porque estão nessa fronteira de expansão agrária.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O garimpo ilegal destrói mais do que o agronegócio?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> O agronegócio (pecuária e soja) é responsável pela maior área
                desmatada em termos absolutos. Mas o garimpo ilegal é especialmente destrutivo por uma razão: ele
                contamina os rios com mercúrio, destruindo os ecossistemas aquáticos e envenenando as comunidades
                ribeirinhas e indígenas que dependem dos rios para comer e beber. O garimpo de ouro em terra indígena
                Yanomami, que cresceu muito entre 2019 e 2022, causou uma crise humanitária com desnutrição infantil
                severa e doenças respiratórias e neurológicas causadas pelo mercúrio. É uma forma de destruição que vai
                além do desmatamento e atinge diretamente a saúde das pessoas.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que outros países pagam para o Brasil preservar a Amazônia?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque a floresta amazônica em pé presta um serviço que
                beneficia o mundo inteiro: absorve bilhões de toneladas de carbono da atmosfera e ajuda a estabilizar
                o clima global. O <span class="termo" data-palavra="Fundo Amazônia"
                    data-definicao="Mecanismo de financiamento internacional, administrado pelo BNDES, que capta doações de países e empresas para projetos de conservação e combate ao desmatamento na Amazônia. Funciona sob a lógica do REDD+ (Redução de Emissões por Desmatamento e Degradação Florestal): os países doadores (principalmente Noruega e Alemanha) contribuem sempre que o Brasil consegue manter as taxas de desmatamento abaixo de um patamar de referência. Não é compra de créditos de carbono: os doadores não podem descontar essa contribuição de suas próprias metas de redução de emissões.">Fundo
                    Amazônia</span>, criado em 2008 e administrado pelo BNDES, capta doações principalmente da
                Noruega e da Alemanha e as destina a projetos de fiscalização, ciência e desenvolvimento sustentável
                na região. A lógica é de compensação por um serviço ambiental: o país doador paga porque se beneficia
                do clima estável que uma Amazônia preservada ajuda a manter, mesmo sem poder descontar essa
                contribuição de suas próprias metas climáticas. É diferente da venda de créditos de carbono no
                mercado privado, mas segue uma ideia parecida: floresta em pé tem valor econômico mensurável, não só
                ecológico.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11: Ficha de conceitos -->
        <div class="topico">
            <div id="ficha-conceitos"></div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 12: Produção - Prática Social Final -->
        <div class="topico">

            <p class="caixa">Hora de usar o novo olhar.</p>

            <div class="w3-panel w3-pale-yellow">
                <h3>O bioma que você habita</h3>
                <p><strong>Atividade individual</strong></p>

                <p>No início desta aula você refletiu sobre quem tem o direito de usar as florestas e os biomas do
                    Brasil. Agora, com os conceitos aprendidos, escreva uma análise de 15 a 20 linhas respondendo:</p>

                <p><strong>1.</strong> Em qual bioma você vive? Qual é o estado atual de conservação desse bioma na sua
                    região?</p>
                <p><strong>2.</strong> Você conhece algum conflito socioambiental envolvendo esse bioma (desmatamento,
                    mineração, disputa por terra, impacto de barragem)? Se não conhece um local, pesquise um caso
                    nacional.</p>
                <p><strong>3.</strong> Quem são os atores em conflito? Quais são os interesses de cada lado? Quem tem
                    mais poder nesse conflito?</p>
                <p class="w3-small w3-text-grey">Dica: o MapBiomas (mapbiomas.org) permite visualizar a cobertura
                    vegetal de qualquer município brasileiro por satélite, incluindo a evolução histórica do
                    desmatamento.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 13: Questões para o caderno -->
        <div class="topico">

            <div class="w3-pale-yellow">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. Quais são os seis biomas brasileiros? Cite a principal característica de cada um.</h3>

                <h3>2. Por que a Amazônia é considerada estratégica para o clima global, não apenas para o Brasil?</h3>

                <h3>3. Por que o Cerrado é chamado de "caixa d'água do Brasil"? Quais consequências o desmatamento do
                    Cerrado tem para os recursos hídricos do país?</h3>

                <h3>4. Quais são as principais causas do desmatamento na Amazônia? Quem são os agentes desse processo?
                    Qual a diferença entre desmatamento e queimada, e por que 2024 foi o pior ano de queimadas já
                    registrado no Brasil?</h3>

                <h3>5. O que foi o PPCDAm e como ele conseguiu reduzir o desmatamento em mais de 80% entre 2004 e 2012?
                </h3>

                <h3>6. O que é o Código Florestal? O que são Reserva Legal e Área de Preservação Permanente (APP)? O
                    que são Unidades de Conservação e qual a diferença entre Proteção Integral e Uso Sustentável?</h3>

                <h3>7. Por que dados mostram que as terras indígenas têm taxas de desmatamento muito menores do que as
                    áreas ao redor? O que esse dado revela sobre a relação entre direitos indígenas e conservação
                    ambiental?</h3>

                <h3>8. O que são conflitos socioambientais? Cite dois exemplos brasileiros e identifique os grupos em
                    disputa e os interesses de cada lado.</h3>

                <h3>9. O argumento de que "é preciso escolher entre preservação e desenvolvimento" é frequente no debate
                    sobre desmatamento. Com base nos dados do período 2004-2012 e em instrumentos como o ICMS
                    Ecológico e o Fundo Amazônia, como você rebateria esse argumento?</h3>

                <h3>10. Por que o desmatamento e a degradação ambiental no Brasil são, ao mesmo tempo, problemas
                    ambientais e problemas de justiça social? Quem mais sofre as consequências da destruição dos biomas?
                </h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Concluir Aula</button>
            <hr>
        </div>


        <!-- BLOCO 14: Transição final -->
        <div class="topico">
            <h3>Antes de finalizar, vamos fazer as questões!</h3>
            <button class="btnShow" onclick="
    if(this.disabled) return;
    this.disabled = true;
    ProcessarResposta(this, {
        correto: true,
        idFrase: 'respFinal',
        idGlobo: 'globinhorespFinal',
        classe: '',
        mensagem: 'o tema Meio Ambiente no Brasil é fantástico! Continue estudando!',
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


        <!-- BLOCO 15: Finalizar -->
        <div class="topico">
            <button class="btnShow" onclick="mostraCinza(); this.style='display:none'">Finalizar</button>
        </div>


        <!-- SECAO FINAL -->
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

            <br><br>
            <div class="w3-padding-48">
                <span id="numero"></span>
                <span id="txtBarra">0%</span>
                <progress value="0" max="100" id="progress"></progress>
            </div>
        </div>

    </main>

    <?php include __DIR__ . '/../../../includes/footer.php'; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>

</body>

</html>
