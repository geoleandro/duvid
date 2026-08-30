<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Biogeografia I: distribuição mundial dos biomas tropicais e dinâmicas climáticas">
    <meta property="og:title" content="Texto 29 - Biogeografia I">
    <meta property="og:description" content="Biomas tropicais: distribuição mundial, florestas pluviais e savanas">
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

    <title>1º ano - Texto 29 - Biogeografia I</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender o conceito de bioma e os fatores climáticos que determinam sua distribuição; identificar os principais biomas tropicais no mapa mundial; entender a lógica da zonalidade latitudinal e das dinâmicas atmosféricas que criam florestas pluviais e savanas em diferentes continentes.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Abertura pela realidade do aluno -->
        <div class="topico">

            <h2>Por que o mundo tem cores diferentes</h2>

            <p><span class="primeiraLetra">A</span>bra um mapa-múndi da vegetação. Você vai ver manchas de verde escuro na faixa ao redor do equador, verde mais claro e amarelado nas regiões subtropicais, marrom nos desertos, cinza nas regiões polares. Esse padrão de cores não é aleatório. Cada cor representa um tipo de vegetação, e cada vegetação existe onde existe porque o clima daquele lugar, ao longo de milhares de anos, a permite e a molda.</p>

            <p>Se você já viajou de ônibus por regiões diferentes do Brasil, provavelmente percebeu que a paisagem muda: de árvores densas para campos abertos, de campos para cerrados, de cerrados para caatingas áridas. Isso acontece porque cada trecho do caminho tem temperatura, chuva e umidade diferentes. Agora imagine ampliar essa mesma lógica para o planeta inteiro. O resultado é o mapa dos <span class="termo" data-palavra="Bioma" data-definicao="Grande unidade geográfica caracterizada por um tipo predominante de vegetação, clima próprio, fauna associada e solo com características similares. Os biomas são definidos principalmente pelo regime de temperatura e precipitação.">biomas</span>.</p>

            <p>Nesta aula, você vai aprender a ler esse mapa. A entender por que floresta densa cresce perto do equador, por que savanas aparecem logo abaixo, por que desertos se formam em faixas específicas. Mais do que decorar nomes, você vai entender a lógica que organiza a vida no planeta.</p>

            <p>Essa lógica não é só curiosidade geográfica. Ela explica por que a agricultura de um país depende do clima de outro, por que a fumaça de uma queimada na Amazônia pode alterar as chuvas de São Paulo, e por que proteger uma floresta do outro lado do mundo pode afetar diretamente a segurança alimentar do seu próprio país. Entender biomas é entender como o planeta inteiro funciona como um único sistema conectado.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: O problema -->
        <div class="topico">

            <p class="caixa">Antes de continuar: um problema para pensar.</p>

            <div class="w3-panel w3-pale-green">
                <p>Observe o paralelo 10° Sul no mapa-múndi. Nessa mesma latitude, você encontra:</p>
                <p>a floresta amazônica, densa e úmida, no Brasil;</p>
                <p>a savana seca de Angola e Zâmbia, na África;</p>
                <p>o interior seco da Austrália.</p>
                <p>Três continentes, a mesma distância do equador, vegetações completamente diferentes: uma coberta por árvores gigantes o ano inteiro, outra dominada por gramíneas com chuva concentrada em poucos meses, e a terceira quase sem vegetação alguma na maior parte do ano.</p>

                <p><strong>O que explica essa diferença?</strong> Se a latitude é a mesma, o ângulo de incidência solar é o mesmo. Afinal, o que mais determina o tipo de vegetação de um lugar, além da própria latitude?</p>

                <p>Escreva sua hipótese, com suas próprias palavras, antes de continuar.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Conteúdo 1 — O que define um bioma -->
        <div class="topico">

            <h2>Os fatores que decidem o que cresce onde</h2>

            <p>Bioma não é só vegetação. É um sistema: o conjunto de seres vivos, solo, água e clima que se organizam numa grande área do planeta de forma coerente e interdependente. Dois fatores climáticos são os principais responsáveis por definir qual bioma se instala num lugar: a temperatura média ao longo do ano e o volume e a distribuição das chuvas ao longo das estações.</p>

            <p>A temperatura é controlada principalmente pela latitude. Quanto mais próximo do equador, mais perpendicular é o ângulo de incidência solar, maior é o aquecimento e mais alta a temperatura média. Quanto mais perto dos polos, menor o ângulo, menor o calor e mais frio o clima. Por isso os biomas se organizam em faixas paralelas ao equador, fenômeno chamado de <span class="termo" data-palavra="Zonalidade Latitudinal" data-definicao="Distribuição dos biomas em faixas paralelas ao equador, resultado da variação do ângulo de incidência solar com a latitude. Quanto mais próximo do equador, mais quente e úmido; quanto mais próximo dos polos, mais frio e seco.">zonalidade latitudinal</span>.</p>

            <h3>A chuva é mais complicada do que a temperatura</h3>

            <p>Se só a latitude importasse, o mundo seria simétrico: mesma latitude, mesmo bioma em todos os continentes. Mas você já viu no problema do início que não é assim. A distribuição das chuvas depende de fatores adicionais: a circulação geral da atmosfera, a proximidade do oceano, a presença de montanhas e as correntes oceânicas. Dois lugares na mesma latitude podem ter chuvas completamente diferentes dependendo de qual direção o vento vem e qual superfície ele atravessou antes de chegar lá.</p>

            <p>Um vento que cruza um oceano aquecido chega cheio de umidade. Um vento que cruza um continente seco por centenas de quilômetros chega ressecado. Por isso o interior dos continentes tende a ser mais seco do que as costas, e por isso a mesma latitude produz vegetações tão diferentes entre Brasil, África e Austrália.</p>

            <p>Cadeias de montanhas também entram nessa equação. Quando uma massa de ar úmido esbarra numa cordilheira, ela é forçada a subir, esfria e descarrega quase toda sua chuva no lado voltado para o mar. Do outro lado da montanha, o ar já chega seco, criando o que os climatologistas chamam de sombra de chuva. É por isso que, do lado ocidental dos Andes, no Chile e no Peru, existem alguns dos desertos mais secos do planeta a poucas centenas de quilômetros de florestas amazônicas exuberantes do lado oriental da mesma cordilheira.</p>

            <h3>Como ler o mapa da vegetação mundial</h3>

            <p>No mapa-múndi da vegetação, a faixa verde escura ao redor do equador (entre os trópicos de Câncer e Capricórnio, com concentração entre 10°N e 10°S) representa as <span class="termo" data-palavra="Floresta Pluvial Tropical" data-definicao="Floresta densa e úmida das regiões equatoriais, com precipitação acima de 2.000 mm/ano distribuída durante todo o ano, temperatura média acima de 25°C e altíssima biodiversidade. Também chamada de floresta equatorial ou hiléia.">florestas pluviais tropicais</span>. Logo acima e abaixo dessa faixa, entre 10° e 25° de latitude, o verde vai se tornando mais claro e fragmentado: são as <span class="termo" data-palavra="Savana Tropical" data-definicao="Bioma de campos com árvores esparsas que ocorre nas faixas subtropicais dos trópicos, onde existe uma estação chuvosa e uma seca prolongada. A vegetação é adaptada ao fogo e à falta de água periódica.">savanas tropicais</span>, onde há estação seca pronunciada. Mais afastado ainda do equador, entre 25° e 35° de latitude, surgem os desertos, onde a chuva é quase ausente. O padrão se repete nos dois hemisférios, com variações causadas pelos oceanos e pelas montanhas.</p>

            <p>Esse mapa é uma ferramenta poderosa. Com ele e com o conhecimento do clima de um lugar, você consegue prever o tipo de vegetação que existe ali, mesmo sem ter visitado. Mais ainda: consegue prever o que acontece com aquela vegetação se o clima mudar.</p>

            <div class="w3-margin">
                <img src="tp29F01.png" alt="Mapa mundial da vegetação: biomas e zonalidade latitudinal" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Mapa em breve</div>'">
                <span class="w3-small w3-margin-left">Distribuição mundial dos biomas. Observe as faixas paralelas ao equador. Fonte: WWF Global.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 5: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Uma cidade está localizada a 5° de latitude sul, próxima ao oceano Atlântico, e recebe mais de 2.500 mm de chuva bem distribuídos ao longo do ano. Com base nos fatores que definem os biomas, qual tipo de vegetação predomina nessa região?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Savana tropical, pela proximidade com os trópicos</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Floresta pluvial tropical, pela latitude equatorial e pela chuva abundante e bem distribuída</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Deserto tropical, pela alta temperatura próxima ao equador</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'latitude equatorial mais chuva abundante e constante resulta em floresta pluvial tropical. A temperatura alta sozinha não gera floresta: sem chuva suficiente, gera deserto. É a combinação dos dois fatores que determina o bioma.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 6: Conteúdo 2 — As florestas pluviais e a ZCIT -->
        <div class="topico">

            <h2>Por que as florestas tropicais ficam onde ficam</h2>

            <p>Para entender a distribuição das florestas pluviais no planeta, é preciso entender o que acontece com o ar na faixa equatorial. O sol aquece o ar perto do equador com mais intensidade do que em qualquer outro lugar. Ar quente é menos denso e sobe. Ao subir, esfria, e o vapor d'água que carrega se condensa em nuvens e cai como chuva. Esse movimento de subida constante de ar úmido e quente na faixa equatorial é a principal causa das chuvas abundantes que sustentam as florestas tropicais.</p>

            <p>Esse padrão de ar subindo no equador não fica isolado: depois de subir e perder a umidade em forma de chuva, o ar seco se desloca em altitude para norte e para sul, desce novamente por volta de 25° a 30° de latitude e retorna ao equador rente ao solo, fechando um circuito conhecido como célula de Hadley. É exatamente onde esse ar desce, já seco, que se formam as grandes faixas desérticas subtropicais do planeta, como o Saara e o deserto da Austrália central.</p>

            <p>Esse sistema de circulação tem um nome: <span class="termo" data-palavra="Zona de Convergência Intertropical (ZCIT)" data-definicao="Faixa ao redor do equador onde os ventos alísios dos dois hemisférios se encontram. O ar quente e úmido sobe, forma nuvens e gera chuvas intensas. A ZCIT se desloca sazonalmente para norte e sul, determinando as estações chuvosas nas regiões tropicais.">Zona de Convergência Intertropical (ZCIT)</span>. É ela que mantém as florestas equatoriais úmidas o ano todo. Quando a ZCIT se afasta de uma região, a estação seca começa. Quando volta, as chuvas retornam. As regiões que ficam sob influência da ZCIT por quase o ano inteiro são as que têm florestas pluviais densas. As que ficam sob sua influência só parte do ano são as que têm savanas ou florestas sazonais.</p>

            <h3>As três grandes florestas pluviais do mundo</h3>

            <p>Existem três grandes blocos de floresta pluvial tropical no planeta. O primeiro e maior é a bacia Amazônica, na América do Sul, com cerca de 5,5 milhões de km² no Brasil mais extensões na Colômbia, Peru, Equador, Bolívia e Venezuela. O segundo é a bacia do Congo, na África Central, cobrindo partes da República Democrática do Congo, Camarões, Gabão e República do Congo, com aproximadamente 3,3 milhões de km². O terceiro são as florestas do Sudeste Asiático, espalhadas pela Malásia, Indonésia, Papua-Nova Guiné e Filipinas. Juntos, esses três blocos abrigam mais da metade de todas as espécies de seres vivos do planeta.</p>

            <p>Os três blocos ficam em regiões com características climáticas similares: temperatura média acima de 25°C, chuva superior a 2.000 mm por ano e distribuição relativamente uniforme das precipitações ao longo de todos os meses. Essa combinação permite que as árvores cresçam sem parar, sem a necessidade de perder folhas no inverno ou entrar em repouso. O resultado é uma biomassa vegetal enorme, com dosséis de 30 a 50 metros de altura e pelo menos cinco estratos de vegetação sobrepostos, do chão até o topo das árvores emergentes, cada estrato abrigando espécies próprias de plantas e animais adaptados àquele nível específico de luz.</p>

            <h3>Por que a mesma latitude produz resultados tão diferentes</h3>

            <p>Voltando ao problema do início: Brasil, Angola e Austrália estão todos a 10°S, mas têm vegetações diferentes. A resposta está na circulação atmosférica e na posição relativa ao oceano. O Brasil oriental fica sob influência direta do Atlântico e da ZCIT durante boa parte do ano. A costa angolana recebe a corrente fria de Benguela, que resfria o ar marítimo e impede a formação de chuvas abundantes. O interior australiano está bloqueado por cadeias de montanhas que interceptam a umidade vinda do leste. Mesma latitude, mesma quantidade de energia solar recebida, mas três histórias climáticas completamente diferentes construídas ao longo de milhões de anos de circulação atmosférica e oceânica.</p>

            <div class="w3-margin">
                <img src="tp29F02.png" alt="Zona de Convergência Intertropical e distribuição de chuvas" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Imagem em breve</div>'">
                <span class="w3-small w3-margin-left">Movimentação sazonal da ZCIT e sua influência nas chuvas tropicais. Fonte: NOAA.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>A floresta pluvial tropical só ocorre em três blocos contínuos no planeta (Amazônia, Congo e Sudeste Asiático), mesmo que outras regiões estejam na mesma latitude. O principal fator que explica essa distribuição restrita é:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>A temperatura: só esses três lugares têm calor suficiente para sustentar florestas densas</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="errado" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>A antiguidade geológica: essas florestas existem há mais tempo do que as outras regiões equatoriais</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="correto" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>A combinação de temperatura alta e chuva abundante e bem distribuída ao longo do ano, determinada pela ZCIT, circulação oceânica e posição continental</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'a temperatura alta sozinha não basta. O Saara, o deserto da Arábia e o interior australiano também têm altas temperaturas. O que distingue as florestas pluviais é a chuva abundante e constante, determinada pela ZCIT combinada com a posição em relação ao oceano e às correntes atmosféricas.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Conteúdo 3 — Savanas tropicais e a lógica da sazonalidade -->
        <div class="topico">

            <h2>As savanas: quando a chuva tem hora marcada para ir embora</h2>

            <p>Nas margens das grandes florestas equatoriais, à medida que a latitude aumenta e a influência da ZCIT se torna sazonal em vez de constante, a floresta densa cede espaço para um tipo de vegetação diferente: a <span class="termo" data-palavra="Savana Tropical" data-definicao="Bioma de campos com árvores esparsas que ocorre nas faixas subtropicais dos trópicos, onde existe uma estação chuvosa e uma seca prolongada. A vegetação é adaptada ao fogo e à falta de água periódica.">savana tropical</span>. A chave para entender a savana é a sazonalidade: chove muito em alguns meses e quase nada nos outros. As plantas que sobrevivem aqui desenvolveram estratégias para resistir à seca prolongada, não para crescer sem parar.</p>

            <p>As savanas tropicais estão entre os biomas mais extensos do planeta. No mapa-múndi, aparecem como uma faixa que contorna as florestas equatoriais, concentradas entre 10° e 25° de latitude nos dois hemisférios. Cada continente tem sua savana tropical com características próprias, mas todas compartilham a mesma lógica climática: estação chuvosa definida, estação seca que pode durar de quatro a oito meses, e temperatura alta o ano todo.</p>

            <h3>As savanas de cada continente</h3>

            <p>Na África, as savanas são as mais extensas do mundo. O Sahel, faixa ao sul do Saara, é uma savana seca que sofre com avanço da desertificação. Mais ao sul, o Miombo cobre partes da Tanzânia, Zâmbia, Moçambique e Zimbabwe, com uma flora dominada por árvores do gênero Brachystegia. A savana africana é mundialmente conhecida por sua fauna: leões, elefantes, girafas, zebras e gnus protagonizam as migrações sazonais mais espetaculares do planeta, seguindo o rastro das chuvas de um lado para o outro do continente, num dos maiores espetáculos de vida selvagem do planeta.</p>

            <p>Na América do Sul, a savana tropical mais extensa é o Cerrado brasileiro, com 2 milhões de km² originais no Planalto Central. Mais ao norte, os Llanos da Venezuela e Colômbia e o Gran Chaco da Argentina e Paraguai são outras expressões sul-americanas das savanas tropicais. Na Austrália, as savanas cobrem as regiões norte e nordeste do continente, com uma estação das chuvas monções de novembro a março e seca intensa nos outros meses. Na Ásia, as savanas tropicais aparecem na Índia (Decão), no Sri Lanka e em partes do Sudeste Asiático continental.</p>

            <h3>A <span class="termo" data-palavra="Biodiversidade" data-definicao="Variedade de formas de vida em um ecossistema, incluindo diversidade de espécies, diversidade genética dentro de cada espécie e diversidade de ecossistemas. As florestas tropicais concentram mais de 50% de todas as espécies do planeta em menos de 10% da superfície terrestre.">biodiversidade</span> segue um gradiente latitudinal</h3>

            <p>Uma das descobertas mais importantes da biogeografia é que a diversidade de espécies não se distribui de forma uniforme pelo planeta. Ela segue um gradiente: quanto mais próximo do equador, maior o número de espécies por unidade de área. Esse gradiente latitudinal de biodiversidade é observado em quase todos os grupos de organismos estudados, de plantas a insetos, de aves a mamíferos. A floresta equatorial da Amazônia tem mais espécies de árvores por hectare do que toda a Europa. A África equatorial tem mais espécies de primatas do que qualquer outra região do planeta.</p>

            <p>A explicação mais aceita para esse padrão combina vários fatores: a maior quantidade de energia solar disponível no equador sustenta cadeias alimentares mais complexas; a estabilidade climática de longo prazo (os trópicos nunca foram cobertos por geleiras) permitiu mais tempo para a especiação; e a maior área de habitat contínuo facilita a manutenção de populações viáveis. O resultado é que as florestas e savanas tropicais, com menos de 30% da superfície terrestre, abrigam mais de 70% de todas as espécies conhecidas.</p>

            <div class="w3-margin">
                <img src="tp29F03.png" alt="Gradiente de biodiversidade: do equador aos polos" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Imagem em breve</div>'">
                <span class="w3-small w3-margin-left">Gradiente latitudinal de biodiversidade: número de espécies por grau de latitude. Fonte: IUCN, 2022.</span>
            </div>

            <h3>Amazônia e Cerrado: um sistema interdependente</h3>

            <p>No Brasil, floresta pluvial e savana tropical não são vizinhas por acaso: elas trocam água entre si o tempo todo, numa relação que a geografia física só começou a mapear com clareza nas últimas décadas. Cada árvore grande da Amazônia bombeia cerca de 1.000 litros de água por dia do solo para a atmosfera, num processo chamado evapotranspiração. Somada, a floresta inteira libera para o ar um volume de vapor d'água maior do que a vazão do próprio Rio Amazonas. Metade dessa umidade cai de volta como chuva ainda dentro da própria bacia amazônica, reciclada floresta adentro. A outra metade é carregada por correntes de ar em baixa altitude, batizadas de <span class="termo" data-palavra="Rios Voadores" data-definicao="Correntes de vapor d'água na baixa atmosfera, originadas da evapotranspiração da floresta amazônica, que transportam umidade por até 3 mil km em direção ao Centro-Oeste, Sudeste e Sul do Brasil, alimentando as chuvas que sustentam a agropecuária e o abastecimento urbano dessas regiões.">rios voadores</span>, que seguem até 3 mil km rumo ao Centro-Oeste, Sudeste e Sul do país, alimentando boa parte das chuvas que caem sobre o Cerrado, sobre as lavouras do agronegócio e sobre as represas que abastecem cidades como São Paulo.</p>

            <p>O Cerrado retribui o favor de outra forma. Apesar de não ter rios caudalosos, o bioma concentra um número imenso de nascentes que infiltram água no solo profundo e recarregam aquíferos como o Guarani, o Urucuia e o Bambuí. Por isso o Cerrado é chamado de "berço das águas do Brasil": suas nascentes alimentam seis das oito grandes regiões hidrográficas do país, incluindo quase 90% da vazão do Rio São Francisco. Amazônia e Cerrado formam, assim, dois lados do mesmo sistema hídrico continental: um produz e exporta umidade pelo ar, o outro capta e distribui essa água pelo subsolo. Destruir um afeta diretamente a capacidade do outro de funcionar.</p>

            <h3>Como e por que o desmatamento avança</h3>

            <p>O desmatamento na Amazônia se concentra historicamente numa faixa ao sul e leste da floresta, chamada de <span class="termo" data-palavra="Arco do Desmatamento" data-definicao="Faixa de fronteira agrícola que corta o sul e o leste da Amazônia brasileira, do Maranhão ao Acre, onde se concentra a maior parte do desmatamento, impulsionado pela expansão da pecuária, da soja e pela grilagem de terras públicas.">arco do desmatamento</span>, que corta estados como Maranhão, Pará, Mato Grosso, Rondônia e Acre. Ali, a floresta é derrubada principalmente para abrir pasto para gado e, mais recentemente, lavouras de soja, muitas vezes em terras públicas griladas (ocupadas ilegalmente e depois "legalizadas" com documentos falsos). A infraestrutura de estradas abertas para escoar essa produção funciona como um efeito espinha de peixe: cada nova rodovia abre dezenas de ramais que aceleram o desmatamento ao redor.</p>

            <p>Os efeitos não ficam restritos à área desmatada. Cientistas como o pesquisador Antônio Nobre alertam que, se a perda de floresta ultrapassar um patamar entre 20% e 25% da cobertura original (a Amazônia já perdeu cerca de 18%), o próprio ciclo de reciclagem de umidade que sustenta as chuvas pode entrar em colapso numa reação em cadeia: menos árvore, menos evapotranspiração, menos chuva, mais incêndio, ainda menos árvore. Esse processo é chamado de <span class="termo" data-palavra="Savanização" data-definicao="Processo pelo qual partes da floresta amazônica perdem árvores e chuva de forma sucessiva até se transformarem num ecossistema mais seco e aberto, semelhante a uma savana degradada, num ciclo de retroalimentação difícil de reverter.">savanização</span>: partes da floresta amazônica, sobretudo no sul e leste, correndo o risco de se transformar num ecossistema mais seco e aberto, parecido com uma savana degradada, não a savana rica em biodiversidade que você estudou nesta aula, mas uma versão empobrecida dela.</p>

            <p>Há também uma notícia mais animadora nos dados recentes. Em 2025, o desmatamento na Amazônia caiu 11% em relação ao ano anterior, atingindo a menor taxa em onze anos e acumulando queda de 50% desde 2022. O Cerrado teve queda semelhante no mesmo período. Isso mostra que o processo, embora grave, não é inevitável: políticas de fiscalização e comando e controle têm efeito mensurável sobre a velocidade do desmatamento, mesmo que o problema estrutural (a pressão econômica sobre a fronteira agrícola) continue existindo.</p>

            <p>As consequências sociais acompanham as ambientais. A abertura de novas fronteiras agrícolas frequentemente invade terras indígenas e de comunidades tradicionais, gera conflitos fundiários violentos e concentra a posse da terra em poucas mãos, enquanto famílias que dependem da floresta em pé para caça, pesca e extrativismo perdem sua base de subsistência. O desmatamento, portanto, não é apenas uma mudança de cobertura vegetal vista do satélite: é uma reorganização completa de quem tem acesso à terra, à água e aos recursos de uma região inteira.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 8.7: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>As correntes de vapor d'água que a Amazônia libera pela evapotranspiração e que levam chuva para o Centro-Oeste, o Sudeste e o Sul do Brasil são chamadas de:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>ZCIT</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>rios voadores</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>gradiente latitudinal</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'são os rios voadores! Correntes de vapor d\'água que carregam a umidade produzida pela floresta amazônica por até 3 mil km continente adentro.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8.5: Texto-fonte -->
        <div class="topico">

            <h2>Leia e analise</h2>

            <div class="duvid-bloco-apoio">
                <div class="duvid-texto-citacao">
                    "Os biomas tropicais abrigam aproximadamente 80% da diversidade terrestre do planeta. A Bacia Amazônica, a Bacia do Congo e as florestas do Sudeste Asiático representam juntas menos de 7% da superfície terrestre total, mas concentram mais espécies do que todos os outros biomas somados. Apesar disso, essas três regiões perderam entre 15% e 50% de sua cobertura original nos últimos 50 anos, principalmente para expansão agrícola e extração de recursos. A taxa de extinção em curso nos trópicos é estimada entre 100 e 1.000 vezes maior do que a taxa natural de extinção registrada em registros fósseis."
                </div>
                <div class="duvid-fonte-texto">Adaptado de IPBES, Avaliação Global da Biodiversidade e dos Serviços Ecossistêmicos, 2019</div>
            </div>

            <div class="w3-panel w3-pale-yellow w3-margin-top">
                <p><strong>Responda no caderno antes de continuar:</strong></p>
                <p>1. O texto afirma que menos de 7% da superfície terrestre concentra a maior parte da biodiversidade do planeta. O que isso implica para a gestão dessas áreas? Perder 10% de floresta tropical é equivalente a perder 10% de uma floresta temperada em termos de impacto para a biodiversidade?</p>
                <p>2. A taxa de extinção descrita como "100 a 1.000 vezes maior do que a taxa natural" é um dado científico. Por que esse dado não provoca reação política equivalente à sua gravidade?</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Síntese crítica -->
        <div class="topico">

            <h2>O que o mapa nos diz, e o que ainda não aparece nele</h2>

            <p>Volte ao mapa-múndi da vegetação. Agora você consegue lê-lo de um jeito diferente. Aquele verde escuro no equador não é apenas uma cor: é calor constante, umidade o ano todo, ZCIT, ciclagem intensa de nutrientes e milhões de anos de evolução sem interrupção glacial. O verde mais claro das savanas não é vegetação pobre: é adaptação sofisticada à sazonalidade climática, raízes que buscam água a profundidades impressionantes, cascas que resistem ao fogo, sementes que dependem das chamas para germinar.</p>

            <p>O que o mapa atual ainda não consegue mostrar com clareza é a velocidade com que esse padrão está sendo alterado. A mancha verde da Amazônia, que no mapa parece intacta, tem uma fronteira leste e sul que recua dezenas de quilômetros por ano. A savana africana que aparece uniforme no mapa esconde um processo acelerado de degradação pelo pastoreio excessivo no Sahel. As florestas do Sudeste Asiático, que ocupavam a quase totalidade do arquipélago indonésio há cem anos, foram reduzidas à metade para dar lugar às plantações de palma para óleo.</p>

            <p>O mapa da vegetação é, portanto, um retrato do passado projetado sobre o presente. Para entender o futuro dos biomas, é preciso combinar a lógica climática que você aprendeu hoje com os processos econômicos e políticos que determinam o uso do solo. Esses processos, você vai estudar em profundidade no segundo ano, quando os biomas brasileiros voltarão ao centro da análise.</p>

            <p>Você conheceu hoje a metade quente do mapa dos biomas: florestas pluviais e savanas, moldadas pela ZCIT e pela zonalidade latitudinal tropical. Na próxima aula, o mesmo raciocínio vai levar você para a outra metade do planeta: as florestas de coníferas, as estepes geladas e a vegetação mediterrânea das zonas temperadas, onde o frio, e não mais o calor, é quem organiza a paisagem.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 10: Infográfico -->
        <div class="topico">

            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin">
                <img id="inforesumotp29" src="inforesumotp29.webp" alt="Infográfico resumo Biogeografia I: biomas mundiais" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:48px 0;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📊 Infográfico em breve</div>'">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11: Ficha de conceitos -->
        <div class="topico">
            <div id="ficha-conceitos"></div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11.2: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Aproximadamente quantos litros de água por dia uma árvore grande da Amazônia bombeia do solo para a atmosfera, por evapotranspiração?</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', '1000', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Qual é o percentual mínimo de perda florestal, segundo os cientistas, a partir do qual a Amazônia corre risco de entrar no processo de savanização (a floresta já perdeu cerca de 18%)?</p>
            <div class="w3-margin">
                <input class="input" id="q2a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp2a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a', '20', 'resp2a', this, 'globinho2a')">
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


        <!-- BLOCO 11.5: Perguntas que qualquer aluno teria -->
        <div class="topico">

            <h2 id="centralizado">Perguntas que você provavelmente tinha</h2>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Se a latitude determina o clima, por que o Brasil tem vários biomas diferentes se grande parte do país está nos trópicos?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque a latitude determina a temperatura, mas não a chuva sozinha. O Brasil é grande o suficiente para ter regiões com regimes de chuva completamente diferentes dentro da mesma faixa tropical. A Amazônia fica sob influência quase permanente da ZCIT e dos ventos do Atlântico. O Nordeste fica numa posição onde os sistemas de chuva chegam com menos força e irregularidade. O Sul recebe frentes frias do Atlântico Sul. O interior do Centro-Oeste tem chuva concentrada em seis meses. O mesmo país, climas distintos, biomas distintos.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O que é um "hotspot" de biodiversidade?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> É uma região que concentra altíssima diversidade de espécies e ao mesmo tempo está sob forte ameaça de destruição. O conceito foi criado pelo ecólogo Norman Myers nos anos 1980 para orientar prioridades de conservação: com recursos limitados, onde vale mais investir? Os hotspots são regiões com pelo menos 1.500 espécies de plantas vasculares endêmicas que já perderam mais de 70% de sua vegetação original. Existem 36 hotspots reconhecidos no mundo, incluindo a Mata Atlântica brasileira e o Cerrado.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Deserto também é um bioma?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> É sim. Bioma não significa só floresta densa. Deserto é um bioma com suas próprias espécies adaptadas, seu próprio ciclo de matéria e energia e sua lógica climática específica. Os desertos quentes, como o Saara e o de Atacama, ficam nas faixas subtropicais onde o ar frio e seco desce da alta atmosfera após ter largado toda a sua umidade nas regiões equatoriais. Existem plantas, insetos, répteis e mamíferos que só vivem no deserto e não conseguiriam sobreviver na floresta ao lado. A biodiversidade do deserto é menor em número, mas não em originalidade evolutiva.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que as plantas do Cerrado parecem "torradas", com casca grossa e troncos retorcidos?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque evoluíram numa relação direta com o fogo. Ao contrário da floresta pluvial, onde incêndios naturais são raros, a savana tem uma estação seca longa o suficiente para que raios e calor acumulem combustível seco todos os anos, e queimadas naturais fazem parte do ciclo do bioma há milhões de anos. As árvores do Cerrado desenvolveram casca grossa que isola o tronco do calor, caules subterrâneos (xilopódios) que rebrotam rapidamente após o fogo, e folhas coriáceas que resistem à dessecação. Muitas sementes, inclusive, só germinam depois de passar pelo calor de uma queimada. É um bioma construído para pegar fogo e se recuperar, não para nunca queimar.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 12: Produção final -->
        <div class="topico">

            <p class="caixa">Hora de usar o que você aprendeu.</p>

            <div class="w3-panel w3-pale-yellow">
                <h3>Lendo o mapa com novos olhos</h3>
                <p><strong>Atividade individual</strong></p>

                <p>Você aprendeu hoje que latitude sozinha não explica o mapa dos biomas: é preciso somar a ela a circulação atmosférica, a proximidade do oceano, as correntes marítimas e o relevo. Agora é sua vez de aplicar esse raciocínio a casos reais, indo além do que já foi mostrado em sala. Escolha um dos três pares de cidades abaixo. Pesquise a latitude, o regime de chuvas e o bioma de cada uma. Depois escreva um texto de 15 a 20 linhas explicando:</p>

                <p><strong>Par A:</strong> Belém (Brasil) e Nairóbi (Quênia) (ambas próximas ao equador)</p>
                <p><strong>Par B:</strong> Lagos (Nigéria) e Dubai (Emirados Árabes) (mesma latitude, lados opostos do continente)</p>
                <p><strong>Par C:</strong> Manaus (Brasil) e Singapura (Ásia) (florestas tropicais em continentes distintos)</p>

                <p>Seu texto deve: identificar o bioma de cada cidade, explicar quais fatores climáticos determinam esse bioma e mostrar o que as duas cidades têm em comum e o que as diferencia em termos de vegetação.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 13: Questões para o caderno -->
        <div class="topico">

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. O que é um bioma? Quais são os dois principais fatores climáticos que determinam o tipo de bioma de uma região?</h3>
                <h3>2. O que é zonalidade latitudinal? Por que os biomas se organizam em faixas paralelas ao equador?</h3>
                <h3>3. Explique o que é a Zona de Convergência Intertropical (ZCIT) e como ela determina a distribuição das chuvas nas regiões tropicais.</h3>
                <h3>4. Quais são as três grandes regiões de floresta pluvial tropical do planeta? Em quais continentes estão localizadas?</h3>
                <h3>5. Por que duas regiões na mesma latitude podem ter biomas completamente diferentes? Dê um exemplo concreto.</h3>
                <h3>6. Qual é a diferença fundamental entre floresta pluvial tropical e savana tropical em termos de regime de chuvas e adaptações vegetais?</h3>
                <h3>7. Cite duas savanas tropicais de continentes diferentes e descreva uma característica específica de cada uma.</h3>
                <h3>8. O que é o gradiente latitudinal de biodiversidade? Como você explica o fato de as regiões equatoriais terem mais espécies do que as polares?</h3>
                <h3>9. Segundo o texto-fonte do IPBES, qual é a taxa de extinção estimada nos trópicos em comparação com a taxa natural? O que isso significa na prática?</h3>
                <h3>10. Por que o autor afirma que o mapa da vegetação é "um retrato do passado projetado sobre o presente"? O que falta no mapa para que ele represente a realidade atual?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Concluir Aula</button>
            <hr>
        </div>


        <!-- TÓPICO: TRANSIÇÃO FINAL -->
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
        mensagem: 'o tema Biogeografia I é fascinante! Continue estudando!',
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


        <!-- TÓPICO: FINALIZAR -->
        <div class="topico">
            <button class="btnShow" onclick="mostraCinza(); this.style='display:none'">Finalizar</button>
        </div>


        <!-- SEÇÃO FINAL: PARA SABER MAIS + REFERÊNCIAS -->
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

    <button onclick="voltarAoTopo()" id="btn-topo"
        class="w3-button w3-pale-green w3-padding w3-round-large w3-margin-boottom"
        style="position: fixed; bottom: 20px; right: 20px; display: none;" title="Voltar ao topo">
        <i class="fa fa-arrow-up"></i>
    </button>

    <div class="w3-padding-top-48"></div>

    <?php include __DIR__ . '/../../../includes/footer.php'; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>

</body>

</html>
