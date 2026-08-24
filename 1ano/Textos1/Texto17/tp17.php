<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Solos: formação, pedogênese, horizontes, tipos, problemas e conservação">
    <meta property="og:title" content="Texto 17 - Solos: Formação, Uso e Conservação">
    <meta property="og:description" content="Pedogênese, horizontes do solo, tipos de solo, laterização, lixiviação, salinização e desertificação">
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

    <title>1º ano - Texto 17 - Solos: formação, uso e conservação</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Entender como se formam os solos, seus tipos mais comuns e identificar as formas de uso que degradam ou conservam os solos.</span></p>
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
                <p class="w3-pale-green">Pense em um vaso de planta, uma horta ou um terreno baldio perto da sua casa. Todos têm terra, mas nem toda terra é igual: umas são mais escuras e soltas, outras mais avermelhadas e compactas.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: você sabe como o solo se forma e por que alguns tipos de terra são mais férteis para plantar do que outros? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao/Instrumentalizacao (o que e o solo) -->
        <div class="topico">

            <h2>O que é o Solo?</h2>

            <div class="area">
                <img alt="Horizontes do solo: húmus, solo superficial, subsolo, rocha alterada e rocha-mãe" class="w3-mobile" id="imagem1" src="tp17f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: Brasil Escola. </p>

            <p>O <span class="termo" data-palavra="Solo"
                    data-definicao="Camada superficial da crosta terrestre, composta por materiais minerais (areia, silte, argila), matéria orgânica em decomposição, água e ar, formada ao longo de milhares ou milhões de anos."><strong>solo</strong></span> é
                a camada superficial da crosta terrestre, essencial para a vida no planeta. Ele é composto por uma mistura de materiais minerais, como areia, silte e argila, além de matéria orgânica em decomposição (<span
                    class="termo" data-palavra="Húmus"
                    data-definicao="Matéria orgânica em decomposição no solo, resultante da transformação de folhas, galhos e restos de animais, fundamental para a fertilidade do solo.">húmus</span>), água e ar. Essa camada é formada ao longo de milhares ou até milhões de anos, por meio de processos como o intemperismo, que fragmenta e altera as rochas originais, transformando-as em partículas menores que se combinam com resíduos orgânicos.</p>

            <p>O solo desempenha um papel vital na manutenção dos ecossistemas, funcionando como um reservatório de nutrientes essenciais para as plantas e um habitat para uma infinidade de organismos, como bactérias, fungos, minhocas e pequenos insetos. Ele também age como uma esponja, retendo água e contribuindo para o ciclo hidrológico, além de ser uma barreira protetora que previne a erosão e regula o clima ao armazenar carbono. Essa função climática costuma passar despercebida, mas é enorme: estima-se que os primeiros 30 centímetros de solo do planeta armazenem cerca de 680 bilhões de toneladas de carbono, quase o dobro do que existe hoje na atmosfera. Isso significa que solos degradados e desmatados não são apenas menos produtivos, eles também liberam de volta para a atmosfera um carbono que ficou guardado ali por séculos.</p>

            <p>Embora o solo seja um recurso natural renovável, sua formação é extremamente lenta. Segundo estimativas da Embrapa, a formação de apenas 1 centímetro de solo fértil pode levar cerca de 400 anos, podendo variar de algumas centenas a mais de mil anos dependendo das condições ambientais, como o tipo de rocha, o clima, a vegetação e a atividade biológica da região. Por isso, o uso sustentável e a conservação do solo são cruciais para garantir a segurança alimentar, o equilíbrio ambiental e a sobrevivência das gerações futuras.</p>

            <p>Além de sua importância ecológica, o solo também tem relevância econômica e cultural. Ele sustenta atividades humanas como a agricultura, a pecuária e a construção civil. Diferentes tipos de solos influenciam diretamente os tipos de vegetação e o modo de vida das populações que vivem em uma determinada área. Por exemplo, solos férteis favorecem o cultivo de alimentos, enquanto solos arenosos ou pedregosos podem dificultar a prática agrícola, exigindo técnicas específicas para sua utilização.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (pedogenese) -->
        <div class="topico">

            <div class="w3-pale-green">

                <h2>Pedogênese: o Processo de Formação do Solo</h2>

                <div class="area">
                    <img alt="Perfil do solo com os horizontes O, A, E, B, C e R" class="w3-mobile" id="imagem2" src="tp17f02.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Perfil do solo e seus horizontes. Fonte: organizado pelo autor. </p>

                <p>A <span class="termo" data-palavra="Pedogênese"
                        data-definicao="Conjunto de processos naturais que levam à formação e evolução do solo ao longo do tempo, a partir da interação entre rocha matriz, clima, organismos vivos, relevo e tempo.">pedogênese</span> é
                    o conjunto de processos naturais que levam à formação e evolução do solo ao longo do tempo, a partir da interação de fatores como rocha matriz, clima, organismos vivos, relevo e tempo. Esse processo é lento e dinâmico, moldando o solo de acordo com as condições ambientais de cada região.</p>

                <p>O resultado da pedogênese é a criação de camadas horizontais distintas, conhecidas como <span
                        class="termo" data-palavra="Horizonte do Solo"
                        data-definicao="Camada horizontal distinta do perfil do solo (O, A, B ou C), resultado das transformações químicas, físicas e biológicas ocorridas ao longo da pedogênese, cada uma com função específica.">horizontes
                        do solo</span>, que refletem as transformações químicas, físicas e biológicas ocorridas ao longo do tempo. Essas camadas são visíveis em perfis de solo e desempenham funções específicas:</p>

                <p><strong>Horizonte O:</strong> é a camada superficial mais rica em matéria orgânica, formada por folhas, galhos, restos de animais e outros materiais em decomposição, que se transformam em húmus. Essa camada é fundamental para a fertilidade do solo e sua capacidade de sustentar a vida vegetal.</p>

                <p><strong>Horizonte A:</strong> localizado abaixo do horizonte O, este horizonte é uma mistura de minerais e matéria orgânica. Ele tem uma cor escura devido à presença de húmus e é a camada mais diretamente envolvida nos processos agrícolas, sendo conhecida como "solo arável".</p>

                <p><strong>Horizonte B:</strong> situado abaixo do horizonte A, esta camada é formada principalmente por materiais minerais, como argila e óxidos de ferro e alumínio. É menos fértil do que os horizontes acima, mas desempenha um papel importante na retenção de água e nutrientes.</p>

                <p><strong>Horizonte C:</strong> é a camada mais profunda do perfil do solo e consiste na rocha matriz em estágio de decomposição. Esse horizonte fornece os minerais que influenciam as características químicas e físicas dos horizontes superiores.</p>

                <p>Em alguns perfis de solo é possível identificar ainda dois outros horizontes, menos citados mas importantes para entender o desenho completo do perfil: o <strong>Horizonte E</strong>, uma camada clara de eluviação, empobrecida em argila e óxidos porque a água de infiltração já carregou boa parte desses materiais para baixo, situada entre os horizontes A e B; e o <strong>Horizonte R</strong>, que corresponde à própria rocha matriz consolidada e ainda praticamente intacta, abaixo do horizonte C, o ponto de partida de onde todo o solo acima se originou.</p>

                <p><strong>Fatores que Influenciam a Pedogênese:</strong></p>
                <ul>
                    <li><strong>Material de Origem (Rocha Matriz):</strong> a composição mineralógica da rocha influencia a textura, os nutrientes disponíveis e as características químicas do solo. Por exemplo, rochas graníticas costumam originar solos mais arenosos e menos férteis, enquanto rochas basálticas, como as que deram origem à terra roxa do norte do Paraná (explicada mais adiante nesta aula), geram solos argilosos muito mais férteis.</li>
                    <li><strong>Clima:</strong> a temperatura e a precipitação controlam o ritmo do intemperismo, que pode ser químico (em climas úmidos e quentes) ou físico (em climas secos e frios).</li>
                    <li><strong>Organismos:</strong> plantas, animais e microrganismos contribuem para a decomposição da matéria orgânica e para a reciclagem de nutrientes no solo, além de ajudar na formação da estrutura do solo.</li>
                    <li><strong>Relevo:</strong> influencia a movimentação da água e o acúmulo ou perda de materiais no solo. Áreas de encostas, por exemplo, podem ter solos mais rasos devido à erosão, enquanto áreas de planície tendem a acumular sedimentos e nutrientes.</li>
                    <li><strong>Tempo:</strong> a formação do solo é um processo lento. Solos jovens têm horizontes pouco desenvolvidos, enquanto solos antigos apresentam horizontes bem definidos e podem sofrer processos de degradação ao longo do tempo.</li>
                </ul>

                <p><strong>Importância dos Horizontes do Solo:</strong> os horizontes do solo são indicadores diretos de sua saúde, fertilidade e capacidade de sustentação de ecossistemas e atividades humanas. A compreensão desses horizontes permite o manejo mais sustentável do solo, prevenindo problemas como a compactação, a erosão e a perda de nutrientes.</p>

                <p>Esses processos pedogenéticos também explicam a diversidade de solos encontrados no planeta, desde os férteis solos argilosos das áreas tropicais até os solos arenosos de desertos e litorais. Cada tipo de solo, condicionado pelos horizontes e pelo ambiente, requer práticas específicas para ser preservado ou utilizado de forma sustentável.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tipos de solo) -->
        <div class="topico">

            <h2>Tipos de Solo</h2>

            <div class="area">
                <img alt="Solo siltoso, arenoso, argiloso e orgânico" class="w3-mobile" id="imagem3" src="tp17f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>Os solos variam significativamente em sua composição, textura e fertilidade, influenciando diretamente sua capacidade de sustentar vegetação e atividades humanas. Três tipos principais de solo apresentam características distintas:</p>

            <h3>Textura do Solo</h3>

            <p>A <span class="termo" data-palavra="Textura do Solo"
                    data-definicao="Proporção das três frações minerais que compõem o solo (areia, silte e argila), que determina propriedades como capacidade de drenagem, retenção de água e resistência mecânica.">textura
                    do solo</span> é definida pela proporção das três frações minerais que o compõem: areia, silte e argila. As partículas de areia são as maiores, o silte tem tamanho intermediário e a argila apresenta as partículas mais finas. É justamente essa combinação que determina propriedades como capacidade de drenagem, retenção de água e resistência mecânica do solo.</p>

            <p>Para classificar essa mistura com precisão, cientistas do solo usam o chamado triângulo textural: um gráfico triangular em que cada lado representa a porcentagem de areia, silte ou argila presente na amostra. Cruzando as três porcentagens, é possível identificar exatamente em qual categoria de textura aquele solo se encaixa, da areia quase pura até a argila quase pura, passando por combinações intermediárias como o "franco-argiloso" ou o "franco-arenoso", terminologia comum em laudos técnicos de agronomia e engenharia.</p>

            <p>Essa classificação tem aplicação direta na construção civil. Solos com boa proporção de areia e silte, por exemplo, costumam oferecer maior estabilidade para fundações, já que drenam bem a água e reduzem o risco de recalques na edificação. Já solos muito argilosos podem expandir quando molhados e contrair quando secos, o que pode comprometer a estrutura de uma construção se não forem feitos estudos geotécnicos adequados antes da obra. Por isso, engenheiros e geólogos analisam a textura do solo de um terreno antes de definir o tipo de fundação mais adequado para cada projeto.</p>

            <h3>Solo Argiloso</h3>

            <p>O <span class="termo" data-palavra="Solo Argiloso"
                    data-definicao="Solo caracterizado por partículas de tamanho muito pequeno, que se aglutinam facilmente formando uma estrutura compacta, com alta retenção de água e nutrientes.">solo
                    argiloso</span> é caracterizado por partículas de tamanho muito pequeno, que se aglutinam facilmente, formando uma estrutura compacta.</p>

            <p><strong>Características:</strong></p>
            <ul>
                <li><strong>Alta retenção de água e nutrientes:</strong> devido à sua textura fina, o solo argiloso armazena água e elementos essenciais, como cálcio, potássio e ferro, tornando-o fértil para a agricultura.</li>
                <li><strong>Resistência à erosão:</strong> sua estrutura densa dificulta o transporte de partículas pela ação do vento ou da água, reduzindo a perda de material superficial.</li>
                <li><strong>Uso comum:</strong> é amplamente utilizado na fabricação de tijolos e cerâmicas devido à sua plasticidade quando úmido e à resistência quando seco.</li>
            </ul>

            <p><strong>Desafios:</strong></p>
            <ul>
                <li>Quando muito compactado, pode dificultar a drenagem e a infiltração de água, prejudicando algumas culturas agrícolas.</li>
            </ul>

            <h3>Solo Arenoso</h3>

            <p>O <span class="termo" data-palavra="Solo Arenoso"
                    data-definicao="Solo com partículas grandes e pouco coesas, baixa retenção de água e nutrientes e alta permeabilidade, comum em regiões litorâneas e semiáridas.">solo
                    arenoso</span> possui partículas grandes e pouco coesas, conferindo-lhe características muito específicas.</p>

            <p><strong>Características:</strong></p>
            <ul>
                <li><strong>Baixa retenção de água e nutrientes:</strong> os poros grandes entre as partículas facilitam o escoamento da água, o que impede o armazenamento adequado de nutrientes.</li>
                <li><strong>Alta permeabilidade:</strong> a água infiltra-se rapidamente, tornando-o menos propício para culturas que exigem alta disponibilidade hídrica.</li>
            </ul>

            <p><strong>Uso comum:</strong></p>
            <ul>
                <li>Esse solo é encontrado em regiões litorâneas e semiáridas e pode ser utilizado para atividades como o cultivo de culturas adaptadas a solos secos ou para a construção de estradas e estruturas que necessitam de alta drenagem.</li>
            </ul>

            <p><strong>Desafios:</strong></p>
            <ul>
                <li>Devido à falta de nutrientes e à baixa retenção de umidade, ele requer práticas de manejo específicas, como adubação e irrigação, para melhorar sua produtividade agrícola.</li>
            </ul>

            <h3>Solo Orgânico</h3>

            <p>O <span class="termo" data-palavra="Solo Orgânico"
                    data-definicao="Solo formado principalmente por matéria orgânica em decomposição, misturada com areia e argila, o que o torna altamente fértil, equilibrando retenção de água e boa drenagem.">solo
                    orgânico</span> é formado principalmente por matéria orgânica em decomposição, misturada com areia e argila, o que o torna altamente fértil.</p>

            <p><strong>Características:</strong></p>
            <ul>
                <li><strong>Riqueza em matéria orgânica:</strong> compostos derivados da decomposição de restos de plantas e animais conferem alta fertilidade, ideal para a agricultura.</li>
                <li><strong>Alta retenção de nutrientes:</strong> a matéria orgânica ajuda a manter os nutrientes disponíveis por mais tempo para as plantas.</li>
                <li><strong>Textura única:</strong> sua composição combina o melhor de solos argilosos e arenosos, equilibrando retenção de água e boa drenagem.</li>
            </ul>

            <p><strong>Uso comum:</strong></p>
            <ul>
                <li>Amplamente utilizado em áreas agrícolas de alta produtividade e na recuperação de solos degradados.</li>
            </ul>

            <p><strong>Desafios:</strong></p>
            <ul>
                <li>Esse tipo de solo pode estar sujeito à compactação e à decomposição rápida de matéria orgânica, especialmente em climas tropicais, o que exige cuidados constantes com práticas de manejo.</li>
            </ul>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (tipos de solo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que o solo argiloso costuma ser mais fértil do que o solo arenoso?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) porque suas partículas maiores deixam a água escoar mais rápido.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1b">
                        <span>b) porque suas partículas finas retêm mais água e nutrientes.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1c">
                        <span>c) porque nunca é usado na agricultura.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: partículas menores criam mais espaço de contato e poros pequenos, o que segura água e nutrientes por mais tempo perto das raízes.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (solos do brasil) -->
        <div class="topico">

            <h2>Os Solos do Brasil</h2>

            <p>O Brasil é um país continental, e essa diversidade de clima, relevo e rocha matriz se reflete diretamente na variedade de solos encontrados no território. O <strong>Sistema Brasileiro de Classificação de Solos (SiBCS)</strong>, mantido pela Embrapa, organiza essa diversidade em 13 grandes classes. Três delas, sozinhas, cobrem a maior parte do território nacional.</p>

            <p><strong><span class="termo" data-palavra="Latossolo"
                        data-definicao="Classe de solo mais comum no Brasil (cerca de 39% do território), profundamente intemperizado, com boa drenagem e estrutura física estável, mas naturalmente ácido e pobre em nutrientes, exigindo calagem e adubação para uso agrícola.">Latossolos</span>:</strong> são o tipo de solo mais comum do país, cobrindo cerca de 39% do território, especialmente no Cerrado e na Amazônia. São solos profundos e muito intemperizados, ou seja, passaram por um longuíssimo processo de decomposição química que já removeu boa parte dos minerais originais. Isso lhes dá uma estrutura física estável e boa drenagem, mas também os torna naturalmente ácidos e pobres em nutrientes. Foi justamente a correção química desses solos, por meio de calagem (aplicação de calcário) e adubação, que permitiu a expansão da fronteira agrícola brasileira sobre o Cerrado a partir das décadas de 1970 e 1980.</p>

            <p><strong>Argissolos:</strong> também muito frequentes, costumam ter um horizonte B com acúmulo de argila, o que os torna mais suscetíveis à erosão quando mal manejados, especialmente em áreas de relevo mais movimentado. Latossolos e Argissolos juntos cobrem cerca de 58% do território brasileiro.</p>

            <p><strong>Neossolos:</strong> são solos jovens e pouco desenvolvidos, com menos de 20 centímetros de espessura e sem um horizonte B bem definido, porque ainda estão no início do processo de pedogênese ou porque a erosão constante impede que se desenvolvam mais. São comuns em áreas de relevo acidentado e no semiárido nordestino, onde a pouca chuva e a rocha exposta dificultam a formação de um solo mais profundo, o que ajuda a explicar por que a agricultura de sequeiro é tão desafiadora nessa região.</p>

            <p>Vale destacar ainda os <strong>Plintossolos</strong>, encontrados em áreas de alagamento sazonal, como o Pantanal mato-grossense, onde o solo passa parte do ano saturado de água. Essa alternância entre encharcamento e secagem favorece a formação de concreções endurecidas de ferro no perfil do solo, semelhantes ao processo de laterização, mas ligadas ao regime de cheias e vazantes característico das áreas úmidas.</p>

            <p><strong>Terra Roxa:</strong> um caso à parte, e um dos exemplos mais cobrados em provas de vestibular, é a chamada terra roxa, um solo excepcionalmente fértil formado pela decomposição do basalto da Formação Serra Geral, na Bacia do Paraná, um imenso derrame vulcânico ocorrido há cerca de 130 milhões de anos, quando o supercontinente Gondwana começava a se fragmentar. Rica em cálcio, magnésio e potássio, a terra roxa se concentra no norte do Paraná, no oeste de São Paulo e em partes de Minas Gerais e Mato Grosso do Sul, e foi decisiva para a expansão da cafeicultura paulista e paranaense entre o final do século XIX e o início do XX. O nome vem do italiano "terra rossa" (terra vermelha), como os imigrantes que vieram trabalhar nas fazendas de café chamavam esse solo de coloração avermelhada.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (problemas nos solos) -->
        <div class="topico">

            <h2>Problemas nos Solos</h2>

            <div class="area">
                <img alt="Ravinamento em encostas causado por erosão hídrica" class="w3-mobile" id="imagem4" src="tp17f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>A erosão hídrica costuma evoluir em estágios crescentes de gravidade. Primeiro vem a <strong>erosão laminar</strong>, quase imperceptível: a chuva remove uma fina camada uniforme de solo de toda a superfície, sem formar sulcos visíveis, mas carregando aos poucos os nutrientes mais férteis da parte de cima. Se o processo continua, a água começa a se concentrar em pequenos caminhos preferenciais, formando sulcos rasos, e é nesse ponto que a erosão evolui para a ravinação, descrita a seguir.</p>

            <p><strong>Ravinação:</strong> a ravinação é um tipo de erosão que ocorre em áreas de encostas, quando a água da chuva escorre pela superfície do solo em maior quantidade do que consegue infiltrar. Esse processo provoca a formação de fissuras e sulcos pouco profundos, que se ampliam com o tempo. A falta de vegetação nesses locais agrava o problema, pois não há cobertura para proteger o solo. Quando as ravinas continuam se aprofundando e alcançam o lençol freático, o processo evolui para o que no Brasil se chama de <span class="termo" data-palavra="Voçoroca"
                    data-definicao="Erosão em grande escala, formada quando ravinas se aprofundam até atingir o lençol freático, criando grandes crateras e sulcos que podem ter dezenas de metros de largura e profundidade.">voçoroca</span>, uma cratera de erosão que pode chegar a dezenas de metros de largura e profundidade. O Cerrado e o Planalto Central, especialmente em Goiás e no Distrito Federal, concentram algumas das voçorocas mais extensas do país, muitas delas avançando sobre estradas e áreas urbanas.</p>

            <p><strong>Compactação:</strong> diferente da erosão, que remove o solo, a compactação é o adensamento excessivo das partículas do solo, geralmente causado pelo tráfego repetido de máquinas agrícolas pesadas ou pelo uso contínuo de arados e grades sempre na mesma profundidade. Isso cria uma camada endurecida logo abaixo da superfície, chamada de <span class="termo" data-palavra="Pé de Arado"
                    data-definicao="Camada subsuperficial compactada, formada entre 10 e 20 cm de profundidade pelo uso repetido de arados e grades sempre na mesma profundidade, que funciona como uma barreira para o crescimento das raízes.">pé de arado</span> (ou pé de grade), que funciona como uma barreira física para o crescimento das raízes. Segundo a Embrapa, a compactação pode reduzir em até 60% a produtividade agrícola, já que as raízes comprimidas absorvem menos água e nutrientes. Diferente da erosão, que é visível a olho nu, a compactação costuma passar despercebida até que a produtividade já tenha caído bastante, o que torna a prevenção, por meio de práticas como o plantio direto e o tráfego controlado de máquinas em faixas fixas, muito mais eficaz do que tentar corrigir o problema depois de instalado.</p>

            <p><strong><span class="termo" data-palavra="Laterização"
                        data-definicao="Processo de concentração excessiva de ferro e alumínio no solo, comum em regiões tropicais quentes e úmidas, que forma uma camada endurecida (rocha ferruginosa) e reduz a produtividade agrícola.">Laterização</span>:</strong> esse
                processo ocorre devido à concentração excessiva de minerais como ferro e alumínio no solo, geralmente em regiões tropicais com clima quente e úmido. A laterização resulta na formação de uma camada endurecida (rocha ferruginosa), que reduz a capacidade do solo de reter água e impede o desenvolvimento de vegetação. Essa camada torna o solo menos produtivo para a agricultura.</p>

            <p><strong><span class="termo" data-palavra="Lixiviação"
                        data-definicao="Processo pelo qual os nutrientes da camada superficial do solo são carregados para camadas mais profundas pela ação da água das chuvas, empobrecendo o solo, mais comum em regiões de alta pluviosidade.">Lixiviação</span>:</strong> a
                lixiviação é o processo pelo qual os nutrientes presentes na camada superficial do solo são carregados para camadas mais profundas pela ação da água das chuvas. Esse problema é mais comum em regiões de alta pluviosidade e pode levar ao empobrecimento do solo. A prática do terraceamento, que consiste na criação de rampas niveladas em terrenos inclinados, ajuda a reduzir a velocidade do escoamento da água e minimizar a lixiviação.</p>

            <p><strong>Salinização:</strong> a salinização ocorre em climas áridos e semiáridos, onde há alta evaporação e pouca infiltração de água. Esse processo provoca o acúmulo de sais como sódio, potássio e magnésio no solo, tornando-o alcalino e menos adequado para o cultivo agrícola. Irrigação inadequada em solos mal drenados também pode intensificar a salinização.</p>

            <p><strong><span class="termo" data-palavra="Desertificação"
                        data-definicao="Processo de degradação do solo em regiões de clima árido, semiárido e subúmido seco, no qual a baixa pluviosidade combinada com alta evaporação supera a infiltração de água, levando à perda da vegetação.">Desertificação</span>:</strong> a
                desertificação é o processo de degradação do solo em regiões de clima árido, semiárido e subúmido seco. A Convenção das Nações Unidas de Combate à Desertificação (UNCCD) define essas regiões a partir do <strong>índice de aridez</strong> (a razão entre a chuva que cai e a água que evapora e transpira das plantas): quando esse índice fica entre 0,05 e 0,65, a evaporação supera muito a infiltração de água no solo, o que favorece o empobrecimento e a perda da vegetação. O semiárido brasileiro, por exemplo, recebe em média menos de 800 mm de chuva por ano, concentrados em poucos meses. Esse problema pode ser agravado por atividades humanas como desmatamento, pastoreio excessivo e práticas agrícolas inadequadas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (laterizacao x salinizacao) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>A laterização e a salinização ocorrem, tipicamente, em que tipos de clima?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) as duas ocorrem só em climas frios.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) laterização em climas quentes e úmidos; salinização em climas áridos e semiáridos.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) as duas ocorrem exclusivamente em regiões litorâneas.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: a chuva intensa lixivia e concentra ferro e alumínio (laterização); a evaporação intensa, sem chuva para lavar o solo, concentra sais na superfície (salinização).', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (uso e conservacao) -->
        <div class="topico">

            <div class="w3-pale-red">

                <h2>Uso e Conservação dos Solos</h2>

                <div class="area">
                    <img alt="Solo saudável com muda germinando e solo insalubre e rachado" class="w3-mobile" id="imagem5" src="tp17f05.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Solo saudável (com práticas de conservação) e solo insalubre (sem práticas de conservação). Fonte: organizado pelo autor. </p>

                <p>O uso inadequado dos solos, como desmatamento, monocultura e práticas agrícolas sem planejamento, resulta em sua degradação, perda de fertilidade e aumento da erosão. Para garantir a conservação dos solos e sua sustentabilidade, é essencial adotar práticas de manejo responsáveis:</p>

                <h3>Rotatividade de Culturas</h3>
                <p>Consiste em alternar diferentes tipos de plantações ao longo do tempo, evitando o esgotamento dos nutrientes específicos do solo e reduzindo pragas e doenças. Um exemplo comum no Brasil é alternar soja, que fixa nitrogênio no solo por meio de bactérias associadas às suas raízes, com milho ou algodão, culturas mais exigentes em nitrogênio: dessa forma, uma safra ajuda a repor o nutriente que a outra consome, reduzindo a necessidade de adubação química.</p>

                <h3>Plantio Direto</h3>
                <p>Técnica que mantém a cobertura do solo com restos de culturas anteriores, protegendo-o contra a erosão, melhorando sua estrutura e reduzindo a compactação. O Sistema de Plantio Direto tem uma origem brasileira bem documentada: em 1972, o agricultor Herbert Bartz, em Rolândia, no norte do Paraná, decidiu abandonar a aração e a gradagem repetidas antes de cada plantio, prática que revirava o solo e o deixava exposto à chuva. Em vez disso, passou a plantar diretamente sobre a palha da cultura anterior, sem revolver a terra. A ideia se baseia em três pilares: não perturbar o solo, mantê-lo sempre coberto (com palha ou plantas vivas) e alternar as culturas plantadas. O sistema, iniciado em cerca de 200 hectares, se espalhou rapidamente pelo Paraná e hoje é adotado em dezenas de milhões de hectares no Brasil, sendo considerado uma das maiores contribuições brasileiras para a agricultura sustentável mundial.</p>

                <h3>Reflorestamento</h3>
                <p>Replantio de árvores em áreas desmatadas para recuperar solos degradados, controlar a erosão e aumentar a retenção de água. As raízes das árvores ajudam a fixar as partículas do solo no lugar, funcionando como uma armadura natural contra a ravinação, e a copa das árvores reduz o impacto direto das gotas de chuva sobre a superfície exposta, diminuindo a erosão laminar já nos primeiros anos após o plantio.</p>

                <h3><span class="termo" data-palavra="Terraceamento"
                        data-definicao="Construção de rampas ou degraus em terrenos inclinados para reduzir a velocidade do escoamento da água, prevenindo a lixiviação e a erosão do solo.">Terraceamento</span></h3>
                <p>Construção de rampas ou degraus em terrenos inclinados para reduzir a velocidade do escoamento da água, prevenindo a lixiviação e erosão. Em vez de descer direto pela encosta e ganhar força, a água passa a se acumular em pequenos patamares horizontais, tendo mais tempo para infiltrar no solo em vez de escoar e carregar partículas e nutrientes rio abaixo.</p>

                <p>Essas práticas são fundamentais para o uso sustentável do solo, garantindo sua produtividade e preservando-o para as futuras gerações.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (conservacao) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>De que forma o plantio direto ajuda a proteger o solo contra a erosão?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) mantendo restos de culturas cobrindo o solo, em vez de deixá-lo exposto.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) revirando profundamente a terra antes de cada plantio.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) plantando sempre a mesma cultura, ano após ano.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: solo exposto sofre o impacto direto da chuva e do vento; a cobertura vegetal morta amortece esse impacto e mantém a umidade.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Escreva o nome do tipo de solo brasileiro mais comum no país, cobrindo cerca de 39% do território, especialmente no Cerrado e na Amazônia.</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'latossolo', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome do processo que ocorre em regiões áridas e semiáridas, no qual sais se acumulam na superfície do solo por causa da alta evaporação e da baixa infiltração de água.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'salinização', 'resp1b', this, 'globinho1b')">
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


        <!-- <div class="topico"><h2> Infográfico - Resumo</h2><div class="w3-margin"><img id="inforesumotp17" src="inforesumotp17.webp" alt="Infográfico resumo Solos: formação, uso e conservação" class="w3-mobile"><span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button><hr></div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o solo é um recurso natural renovável, por que precisamos nos preocupar tanto com sua conservação?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque, embora o solo seja tecnicamente renovável, sua formação é extremamente lenta: pode levar séculos para se formar apenas 1 centímetro de solo fértil. Isso significa que, na prática humana, um solo degradado por erosão, laterização ou desertificação se comporta quase como um recurso não renovável, porque sua recuperação leva muito mais tempo do que o ritmo em que costuma ser destruído por práticas agrícolas inadequadas.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que os solos das florestas tropicais, como a Amazônia, são geralmente pouco férteis, apesar de sustentarem uma vegetação tão exuberante?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque, no clima quente e úmido tropical, ocorre um intenso processo de lixiviação e laterização: a chuva abundante carrega os nutrientes para camadas mais profundas do solo, e o excesso de ferro e alumínio remanescente forma uma camada endurecida pouco fértil. A floresta se sustenta porque a maior parte dos nutrientes está armazenada na própria vegetação e no ciclo rápido de decomposição da serapilheira na superfície, não no solo em si. É por isso que áreas desmatadas na Amazônia perdem fertilidade agrícola rapidamente.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a diferença entre laterização e salinização, já que as duas tornam o solo menos produtivo?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Ocorrem em climas opostos e por mecanismos diferentes. A laterização acontece em climas quentes e úmidos, pela concentração de ferro e alumínio devido à lixiviação intensa. Já a salinização ocorre em climas áridos e semiáridos, onde a alta evaporação e a baixa infiltração de água fazem os sais se acumularem na superfície em vez de serem lavados para baixo. Em ambos os casos o solo perde produtividade, mas as causas climáticas e os minerais envolvidos são opostos.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o Cerrado tem solos naturalmente ácidos e pobres em nutrientes, como o Brasil se tornou um dos maiores produtores agrícolas do mundo cultivando justamente nessa região?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Por meio de correção química e manejo do solo, não por acaso a região era considerada imprópria para a agricultura até meados do século XX. A aplicação de calcário (calagem) neutraliza a acidez natural dos Latossolos, e a adubação repõe os nutrientes que o intenso intemperismo tropical já havia lixiviado. Técnicas como o plantio direto, desenvolvido no Paraná a partir de 1972, também ajudaram a preservar a estrutura desses solos ao longo do tempo. Foi essa combinação de ciência do solo e manejo, mais do que a fertilidade natural do terreno, que transformou o Cerrado numa das grandes fronteiras agrícolas do planeta.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é o solo, quais são os elementos que o compõem e por que ele é essencial para a vida no planeta?</h3>
                <h3>2. Explique o que é pedogênese e quais são os fatores que influenciam esse processo.</h3>
                <h3>3. O que são os horizontes do solo e qual é a função de cada um?</h3>
                <h3>4. Quais são as principais características do solo argiloso? Quais são suas vantagens e desvantagens?</h3>
                <h3>5. Compare o solo arenoso e o solo orgânico em termos de retenção de água e fertilidade.</h3>
                <h3>6. Quais são os três tipos de solo que cobrem a maior parte do território brasileiro, e o que torna a terra roxa tão fértil?</h3>
                <h3>7. O que é lixiviação e como ela afeta o solo? Quais práticas podem minimizar esse problema?</h3>
                <h3>8. Explique o processo de laterização e como ele influencia a produtividade do solo.</h3>
                <h3>9. O que é desertificação e quais fatores contribuem para esse processo?</h3>
                <h3>10. Por que a conservação do solo é considerada fundamental para o equilíbrio ambiental e a segurança alimentar?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre como o solo se forma e por que alguns tipos são mais férteis. Agora você sabe que o solo é resultado de um processo lento, a pedogênese, moldado pela rocha matriz, pelo clima, pelos organismos vivos, pelo relevo e pelo tempo, e organizado em horizontes com funções distintas.</p>

                <p>Você também viu que solos argilosos, arenosos e orgânicos têm vantagens e limites diferentes, que o Brasil concentra Latossolos, Argissolos, Neossolos e a fértil terra roxa, e que processos como laterização, lixiviação, salinização, compactação e desertificação podem degradar essa camada tão fina e tão lenta de se formar, o que torna práticas como rotação de culturas, plantio direto, reflorestamento e terraceamento essenciais para a segurança alimentar.</p>

                <p><strong>Resumo dos conceitos:</strong> solo e húmus; pedogênese e horizontes do solo; textura do solo; solo argiloso, arenoso e orgânico; Latossolo, Argissolo, Neossolo e terra roxa; laterização, lixiviação, salinização e desertificação; terraceamento.</p>

                <p>Na próxima aula vamos primeiro fazer uma revisão de tudo que estudamos entre os textos 13 e 17, e depois abrir um novo bloco de conteúdo: a Climatologia, entendendo como se organizam as camadas da atmosfera e qual é a diferença entre tempo e clima, dois conceitos que muita gente confunde no dia a dia.</p>

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
        mensagem: 'o tema Solos é fascinante! Continue estudando!',
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
