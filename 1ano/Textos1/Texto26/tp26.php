<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Sistemas fluviais: rios meandrantes, deltas, estuários e erosão fluvial">
    <meta property="og:title" content="Texto 26 - Sistemas Fluviais">
    <meta property="og:description" content="Rios meandrantes, deltas, estuários e processos de erosão fluvial">
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

    <title>1º ano - Texto 26 - Sistemas Fluviais</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender como os rios modelam a paisagem ao longo do tempo, identificando os processos de erosão, transporte e deposição; reconhecer as formas fluviais (meandros, deltas, estuários) e relacionar os sistemas fluviais com as atividades humanas e os riscos socioambientais.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Abertura pela realidade do aluno -->
        <div class="topico">

            <h2>O rio que molda e é moldado</h2>

            <p><span class="primeiraLetra">O</span>lhe para qualquer imagem de satélite de um grande rio. Ele raramente segue em linha reta. Ele curva, dobra, serpenteia, às vezes quase voltando sobre si mesmo. Por quê?</p>

            <p>A resposta está na física da água em movimento. Um rio não é um canal fixo: é um sistema vivo que esculpe seu próprio leito ao longo de milhares de anos, erodindo onde a água corre mais forte, depositando sedimentos onde ela desacelera. O resultado são formas que parecem aleatórias mas seguem lógicas precisas.</p>

            <p>Essas formas têm consequências diretas para quem vive perto dos rios. As planícies de inundação ao longo dos meandros são as terras mais férteis do planeta, e também as mais vulneráveis às cheias. Os deltas concentram populações inteiras. Os estuários abrigam ecossistemas únicos que filtram poluentes e criam berçários para a pesca. Entender como os rios funcionam é entender por que cidades afogam, por que agricultores brigam por terras ribeirinhas e por que o desmatamento agrava enchentes.</p>

            <p>Nesta aula, você vai aprender a "ler" um rio como um geógrafo lê a paisagem: reconhecendo, numa simples curva ou numa faixa de terra mais baixa ao lado do canal, a marca de milhares de anos de trabalho da água. É esse mesmo conhecimento que explica por que algumas cidades convivem bem com seus rios havia séculos, enquanto outras, construídas exatamente sobre o caminho natural das águas, pagam um preço alto a cada temporada de chuvas.</p>

            <p>Clique para começar: <span class="termo" data-palavra="Sistema Fluvial" data-definicao="Conjunto formado pelo rio, sua bacia hidrográfica e todos os processos de erosão, transporte e deposição de sedimentos que moldam a paisagem ao longo do tempo.">sistema fluvial</span>.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: O problema -->
        <div class="topico">

            <p class="caixa">Antes de continuar, pense nisso.</p>

            <div class="w3-panel w3-pale-green">
                <p>Em fevereiro de 2011, a região serrana do Rio de Janeiro foi atingida pela maior tragédia climática da história do Brasil: chuvas intensas provocaram deslizamentos e enchentes que mataram mais de 900 pessoas em uma única noite. Municípios como Nova Friburgo, Teresópolis e Petrópolis foram devastados.</p>

                <p>Parte significativa das vítimas morava em áreas de preservação permanente ao longo dos rios, onde a lei proibia construção. Outros morreram em encostas desmatadas onde a mata ciliar havia sido retirada décadas antes.</p>

                <p><strong>A tragédia foi um desastre natural ou um desastre social?</strong> A natureza foi a única responsável, ou havia condições criadas por decisões humanas que tornaram o evento tão letal?</p>

                <p>Escreva pelo menos 5 linhas no caderno com sua hipótese antes de continuar.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Conteúdo 1 — Como os rios esculpem a paisagem -->
        <div class="topico">

            <h2>Como os rios trabalham: erosão, transporte e deposição</h2>

            <h3>O rio como agente geológico</h3>

            <p>Um rio faz três coisas ao mesmo tempo: erode o leito e as margens, transporta o material erodido e deposita esse material mais adiante. A proporção entre esses três processos muda conforme a inclinação do terreno, a velocidade da água e a quantidade de sedimentos carregados.</p>

            <p>No <strong>curso superior</strong>, onde o rio nasce e cai de zonas elevadas, a inclinação é grande e a velocidade é alta. A água erode verticalmente, aprofundando o canal e formando vales em V com paredes íngremes. É aqui que ficam as cachoeiras e corredeiras, onde a energia do rio é máxima.</p>

            <p>No <strong>curso médio</strong>, o terreno fica menos inclinado e a velocidade cai. O rio começa a erodir lateralmente, alargando o vale. Os sedimentos se acumulam nas curvas internas e o leito fica mais largo e raso. É onde se formam as planícies de inundação, terras que o rio deixou quando transbordou em épocas de cheia.</p>

            <p>No <strong>curso inferior</strong>, próximo à foz, a inclinação é mínima e a velocidade, muito baixa. O rio carrega menos energia e deposita a maior parte dos seus sedimentos. É aqui que se formam os deltas e estuários. O vale fica amplo, as margens são baixas e as inundações são frequentes e previsíveis. Nesse trecho, as cheias sucessivas costumam depositar sedimentos mais grossos bem nas margens do canal, formando pequenas elevações alongadas chamadas <span class="termo" data-palavra="Diques Marginais" data-definicao="Pequenas elevações alongadas ao longo das margens de um rio, formadas pelo depósito de sedimentos mais grossos durante as cheias. Funcionam como barreiras naturais que retardam o retorno da água ao canal.">diques marginais</span>. Eles funcionam como muretas naturais e explicam por que, em muitas cheias, a água que invade a planície demora bem mais para escoar de volta ao rio do que levou para transbordar.</p>

            <p>Todo esse trabalho de erosão, transporte e deposição tem um limite: o <span class="termo" data-palavra="Nível de Base" data-definicao="Altitude mínima até onde um rio consegue erodir seu leito, normalmente o nível do mar na foz. Represas e quedas d'água criam níveis de base locais e temporários ao longo do curso.">nível de base</span>, a altitude mínima até onde o rio consegue aprofundar seu leito. Para a maioria dos rios, o nível de base final é o mar, na foz. Mas existem níveis de base locais e temporários: um lago, uma represa ou até uma camada de rocha muito resistente podem funcionar como nível de base momentâneo, interrompendo a erosão vertical até que o obstáculo seja vencido ou contornado. É por isso que uma barragem, além de reter sedimentos, também muda a forma como o rio esculpe o terreno rio acima dela.</p>

            <div class="w3-margin">
                <img src="tp26F01.png" alt="Perfil longitudinal de um rio: curso superior, médio e inferior" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Imagem em breve</div>'">
                <span class="w3-small w3-margin-left">Perfil longitudinal de um rio mostrando os três cursos e os processos dominantes em cada trecho.</span>
            </div>

            <h3>Os meandros: por que os rios não são retos?</h3>

            <p>Qualquer pequena irregularidade no leito desvia o fluxo para um lado. A água que bate na margem exterior de uma curva erode mais. A margem interior, onde a água desacelera, recebe os sedimentos. A curva cresce. O meandro se forma. Com o tempo, o meandro pode crescer tanto que as duas curvas se tocam, e o rio abre um atalho reto, deixando para trás uma lagoa em forma de meia-lua chamada <strong>lagoa oxbow</strong>. O Pantanal e a planície amazônica estão cheios delas.</p>

            <p>Os <span class="termo" data-palavra="Rios Meandrantes" data-definicao="Rios com curso sinuoso que serpenteiam pela planície em curvas largas, resultado do equilíbrio entre erosão nas margens externas e deposição nas internas. Característicos de regiões planas com baixa declividade.">rios meandrantes</span> são típicos de regiões planas, onde a baixa declividade força o rio a dissipar energia em curvas. O Rio Amazonas e seus afluentes são exemplos clássicos: vistos do satélite, parecem cobras gigantes e sinuosas desenhadas lentamente sobre o verde da floresta.</p>

            <p>Nem todo rio se organiza num canal único que serpenteia. Quando a quantidade de sedimentos que chega ao leito é maior do que a água consegue transportar de uma vez, o canal se divide em vários braços separados por bancos de areia e cascalho instáveis, que aparecem e somem conforme a vazão varia. Esse padrão é chamado de <span class="termo" data-palavra="Rio Entrelaçado" data-definicao="Padrão de canal em que o rio se divide em múltiplos braços separados por bancos de sedimento instáveis, típico de leitos com alta carga de sedimentos e vazão muito variável entre estações.">rio entrelaçado</span> (ou anastomosado, quando os canais múltiplos são mais estáveis e separados por ilhas vegetadas). O Rio Brahmaputra, no Himalaia, é o exemplo clássico mundial: carrega uma das maiores cargas de sedimentos por quilômetro quadrado do planeta e se espalha por dezenas de canais entrelaçados num vale de mais de 10 km de largura. No Brasil, esse tipo de leito largo, raso e temporariamente dividido em vários braços é comum nos riachos intermitentes do semiárido nordestino, que passam boa parte do ano secos e recebem, de uma só vez, uma carga enorme de sedimentos nas poucas chuvas fortes da estação.</p>

            <h3>Padrões de drenagem: a rede vista de cima</h3>

            <p>Se você olhar de cima não só o rio principal, mas toda a rede formada por ele e seus afluentes, vai perceber que essa rede também segue formas reconhecíveis, chamadas de <span class="termo" data-palavra="Padrão de Drenagem" data-definicao="Forma geométrica que a rede de um rio e seus afluentes desenha vista de cima, condicionada principalmente pela geologia e pela inclinação do terreno. Os principais tipos são dendrítico, em treliça, retangular e radial.">padrões de drenagem</span>. Eles não são aleatórios: nascem da estrutura geológica por baixo do relevo, como um raio-X do terreno.</p>

            <p>O mais comum é o padrão <strong>dendrítico</strong>, parecido com os galhos de uma árvore: o rio principal é o tronco, os afluentes são os galhos, que se ramificam livremente em várias direções. Ele aparece onde a rocha por baixo é homogênea, sem falhas ou fraturas que imponham uma direção preferencial à água, como em grande parte da Bacia Amazônica.</p>

            <p>Já o padrão em <strong>treliça</strong> mostra afluentes longos e retos, quase paralelos entre si, que se juntam ao rio principal em ângulos retos, como os ramos de uma videira presa a um caramanchão. Ele se forma onde há camadas de rochas de dureza alternada, dobradas pela tectônica, de modo que os rios secundários seguem as faixas de rocha mais fraca e mais fácil de erodir. O padrão <strong>retangular</strong> é parecido, mas os cotovelos em ângulo reto vêm de fraturas e falhas que cruzam a rocha em duas direções perpendiculares, como uma grade.</p>

            <p>Por fim, o padrão <strong>radial</strong> se espalha para todos os lados a partir de um ponto alto central, como os raios de uma roda de bicicleta. É típico de vulcões e domos: os rios nascem no topo e escorrem morro abaixo em todas as direções. No Brasil, esse padrão aparece de forma clássica ao redor de estruturas dômicas como a Serra de Alto Paranaíba, em Minas Gerais. Reconhecer esses padrões numa carta topográfica ou numa imagem de satélite é, na prática, ler a geologia escondida por baixo da paisagem sem precisar cavar um único buraco.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 5: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>No curso superior de um rio, o processo dominante é a:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="correto" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>erosão vertical, aprofundando o canal</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="errado" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>deposição de sedimentos, formando deltas</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>erosão lateral, alargando o vale</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'é a erosão vertical! No curso superior, a alta inclinação gera grande velocidade, e o rio aprofunda o canal formando vales em V e cachoeiras.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 6: Conteúdo 2 — Deltas e Estuários -->
        <div class="topico">

            <h2>Onde o rio encontra o mar: deltas e estuários</h2>

            <h3>Deltas</h3>

            <p>Quando um rio chega ao mar ou a um lago sem correntes fortes o suficiente para dispersar seus sedimentos, ele os deposita na foz, criando um <span class="termo" data-palavra="Delta" data-definicao="Forma de deposição sedimentar na foz de um rio, criada quando a corrente fluvial perde velocidade ao entrar no mar e deposita seus sedimentos em leques ou triângulos. O nome vem da letra grega delta, que tem forma triangular.">delta</span>. O nome vem da letra grega delta (triangular), que descreve bem o formato típico dessa feição.</p>

            <p>O delta cresce para dentro do mar conforme o rio traz mais sedimentos, num processo lento que pode levar séculos até que um novo pedaço de terra firme se torne habitável e cultivável. O Nilo tem um dos deltas mais famosos do mundo: formado ao longo de milênios, ele concentra 95% da população egípcia numa faixa estreita de terra fértil no meio do deserto. Esse solo extraordinariamente rico é produto dos sedimentos que o Nilo carregava desde a Etiópia. Com a construção da Barragem de Assuã, em 1970, o rio parou de depositar sedimentos no delta. Desde então, o delta do Nilo está sendo erodido pelo mar e perdendo área anualmente, ameaçando cidades e terras agrícolas.</p>

            <p>O Rio São Francisco, que deságua entre Alagoas e Sergipe, também tem um delta em processo de erosão acelerada. A transposição e a redução de sua vazão diminuíram o volume de sedimentos que chegam à foz. Sem esse aporte, o mar avança sobre a terra, engolindo praias, manguezais e comunidades pesqueiras inteiras.</p>

            <p>Não é coincidência que os deltas estejam no berço das primeiras grandes civilizações humanas. O Egito antigo se desenvolveu quase inteiramente dentro do delta e do vale do Nilo. A Mesopotâmia nasceu entre os deltas conjuntos do Tigre e do Eufrates, no atual Iraque. O Vale do Indo, na atual fronteira entre Paquistão e Índia, e o delta do Rio Amarelo, na China, seguem o mesmo padrão. Em todos os casos, a fertilidade do solo depositado pelas cheias permitiu excedentes agrícolas grandes o suficiente para sustentar cidades, e a necessidade de organizar coletivamente diques, canais de irrigação e calendários de cheia é apontada por muitos historiadores como um dos motores da própria formação do Estado.</p>

            <div class="w3-margin">
                <img src="tp26F02.png" alt="Delta do Rio Amazonas visto do satélite" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Imagem em breve</div>'">
                <span class="w3-small w3-margin-left">Delta do Rio Amazonas: o maior do mundo em volume de água, com mais de 500 km de largura na foz. Fonte: NASA.</span>
            </div>

            <h3>Várzeas, igapós e o pulso de inundação</h3>

            <p>Na Amazônia, nem toda água de rio é igual. Os limnólogos classificam os rios da bacia em três tipos, pela cor da água. Os <strong>rios de água branca</strong>, como o próprio Amazonas (chamado de Solimões no trecho brasileiro até encontrar o Rio Negro), nascem nos Andes e carregam grande quantidade de sedimentos em suspensão, o que dá à água uma cor barrenta e a torna rica em nutrientes. Os <strong>rios de água preta</strong>, como o Rio Negro, nascem em terrenos antigos e pobres em sedimentos, e a cor escura vem de matéria orgânica em decomposição na floresta, quase como um chá bem forte. Os <strong>rios de água clara</strong>, como o Rio Tapajós, nascem em planaltos cristalinos e carregam pouquíssimo sedimento e pouca matéria orgânica.</p>

            <p>Essa diferença tem consequência direta na vida das margens. As planícies inundadas por rios de água branca são chamadas de <strong>várzeas</strong>: recebem sedimentos ricos em nutrientes e sustentam uma agricultura tradicional produtiva. As planícies alagadas por rios de água preta ou clara são os <strong>igapós</strong>, mais pobres em nutrientes, com solos ácidos e vegetação adaptada à escassez.</p>

            <p>O que rege esse ciclo inteiro é o que o pesquisador alemão Wolfgang Junk chamou de <span class="termo" data-palavra="Pulso de Inundação" data-definicao="Ciclo anual e previsível de subida e descida do nível dos rios amazônicos, com amplitude média de 10 metros entre a cheia e a vazante. Determina uma fase aquática e uma fase terrestre nas várzeas e igapós, moldando toda a vida vegetal e animal da região.">pulso de inundação</span>: o ciclo anual e previsível de subida e descida do nível dos rios, com amplitude média de cerca de 10 metros entre a cheia e a vazante. Esse pulso cria uma fase aquática, quando peixes nadam entre as copas das árvores submersas e dispersam sementes, e uma fase terrestre, quando a mesma área vira solo firme. Praticamente toda a fauna e a flora da várzea evoluíram em sincronia com esse relógio hidrológico, o que torna barragens e outras obras que alteram o regime natural de cheias particularmente destrutivas para esses ecossistemas.</p>

            <h3>Estuários</h3>

            <p>Quando as correntes marinhas são fortes o suficiente para dispersar os sedimentos antes que se acumulem, a foz do rio forma um <span class="termo" data-palavra="Estuário" data-definicao="Zona de transição entre um rio e o mar, onde a água doce e a salgada se misturam. As correntes marinhas impedem a formação do delta dispersando os sedimentos. Abriga ecossistemas de altíssima biodiversidade.">estuário</span>: um braço de mar afunilado onde a água doce e a salgada se misturam. A salinidade varia conforme as marés, criando um ambiente de transição altamente produtivo.</p>

            <p>Os estuários são dos ecossistemas mais ricos do planeta. Essa mistura de águas favorece a concentração de nutrientes, tornando-os berçários naturais para peixes, crustáceos e aves migratórias. Manguezais se estabelecem nas margens, filtrando poluentes e protegendo a costa de erosão e tsunamis. A destruição dos manguezais para a construção de carciniculturas (criação de camarões em tanques) é um problema grave no litoral nordestino brasileiro: remove a proteção costeira, contamina os rios vizinhos e elimina o berçário de espécies que sustentam a pesca artesanal.</p>

            <p>A Baía de Guanabara, no Rio de Janeiro, foi originalmente um grande estuário com manguezais exuberantes. Séculos de aterramento, industrialização e despejo de esgoto transformaram-na num dos ambientes mais poluídos do Brasil. O caso é estudado como exemplo de como o crescimento urbano desordenado pode destruir, em pouco mais de um século, ecossistemas estuarinos que levaram milênios de deposição de sedimentos e adaptação biológica para se formar.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>A construção de barragens em rios que deságuam em deltas tende a causar:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>crescimento do delta, pois retém mais água</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>erosão do delta, pois retém os sedimentos</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>formação de estuário no lugar do delta</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'erosão do delta! A barragem retém os sedimentos no reservatório. Sem sedimentos chegando à foz, o mar avança e erode o delta. Isso está acontecendo com o Nilo e com o São Francisco.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Conteúdo 3 — Erosão fluvial, assoreamento e enchentes -->
        <div class="topico">

            <h2>Quando os rios transbordam: erosão, assoreamento e cheias</h2>

            <h3>Erosão fluvial e assoreamento</h3>

            <p>A <span class="termo" data-palavra="Erosão Fluvial" data-definicao="Processo pelo qual a água corrente desgasta e remove material do leito e das margens de um rio. É acelerada pelo desmatamento das margens e pelo uso inadequado do solo na bacia hidrográfica.">erosão fluvial</span> é o desgaste do leito e das margens causado pela água em movimento. Em condições naturais, ela é compensada pela reposição de vegetação e pela estabilidade do solo. O problema começa quando a vegetação das margens, especialmente a mata ciliar, é retirada.</p>

            <p>Sem raízes para segurar o solo, as margens desmoronam. O material cai no rio, aumentando a carga de sedimentos. Com mais sedimentos do que consegue transportar, o rio começa a depositá-los no próprio leito, elevando o fundo. Esse processo chama-se <span class="termo" data-palavra="Assoreamento" data-definicao="Acúmulo de sedimentos no leito de um rio, lago ou reservatório causado pelo excesso de erosão na bacia. Eleva o fundo, reduz a capacidade de transporte de água e aumenta o risco de enchentes.">assoreamento</span>. Um rio assoreado tem o leito mais raso, transborda com chuvas menores e perde capacidade de navegação.</p>

            <p>O assoreamento é um problema grave em rios brasileiros. O Rio Tietê, que abastece São Paulo, tem perdido profundidade continuamente por décadas de ocupação irregular de suas margens. Reservatórios de hidrelétricas assoreiam com o tempo e perdem capacidade de geração de energia bem antes do prazo previsto em projeto. A solução passa pela recuperação das matas ciliares e pelo controle da erosão na bacia, não apenas pelo dragagem pontual do leito.</p>

            <p>Outro processo ligado à erosão de longo prazo é a <span class="termo" data-palavra="Captura Fluvial" data-definicao="Processo pelo qual um rio, ao erodir sua nascente para trás (erosão remontante), invade e desvia para si o curso de um rio vizinho menos vigoroso, incorporando sua bacia.">captura fluvial</span>. Um rio com maior energia de erosão pode "roubar" a nascente de um rio vizinho menos vigoroso: à medida que sua cabeceira recua rio acima, num processo chamado erosão remontante, ele acaba interceptando e desviando para si as águas do outro curso, incorporando parte da bacia dele. O relevo guarda marcas desses eventos por milhões de anos, na forma de vales secos e cotovelos bruscos onde um rio antigo simplesmente parou de existir.</p>

            <p>Ao longo do tempo geológico, um rio também pode entalhar um vale mais fundo do que tinha antes, por exemplo quando o nível do mar cai ou quando a terra se eleva. Quando isso acontece, a antiga planície de inundação fica "pendurada" acima do novo leito, formando degraus na paisagem chamados terraços fluviais, que registram, como anéis de uma árvore, as diferentes altitudes em que aquele rio já correu ao longo de sua história.</p>

            <div class="w3-margin">
                <img src="tp26F03.png" alt="Comparação de rio com e sem mata ciliar" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📷 Imagem em breve</div>'">
                <span class="w3-small w3-margin-left">Rio com mata ciliar preservada (esquerda) e assoreado após desmatamento (direita). A diferença de profundidade é visível.</span>
            </div>

            <h3>Planície de inundação e enchentes</h3>

            <p>A planície de inundação é a área plana que margeia o rio e é periodicamente coberta pelas suas águas durante as cheias. Ela foi construída pelo próprio rio ao longo de milênios de deposição de sedimentos. Por isso é extraordinariamente fértil. Por isso também é perigosa para quem mora ali.</p>

            <p>As enchentes fazem parte do funcionamento natural dos rios. O problema é quando populações se instalam na planície de inundação, geralmente por falta de alternativas de moradia em terras mais seguras. Quando a cheia vem, e sempre vem, a tragédia é tratada como "desastre natural", quando na verdade é o resultado de uma combinação de ocupação irregular, falta de planejamento urbano, desmatamento da bacia e ausência de políticas habitacionais.</p>

            <p>O exemplo mais recente e mais grave dessa lógica no Brasil aconteceu em abril e maio de 2024, no Rio Grande do Sul. Chuvas excepcionais fizeram o Lago Guaíba, em Porto Alegre, atingir 5,25 metros em 14 de maio, o maior nível já registrado, inundando o centro histórico e bairros inteiros da capital. No total, cerca de 1,9 milhão de pessoas foram afetadas em 441 municípios, mais de 180 morreram e dezenas de milhares passaram semanas em abrigos. Parte da tragédia teve causa atmosférica, ligada ao fenômeno El Niño daquele ano, mas parte também repetiu o mesmo roteiro de 2011: décadas de ocupação de áreas de risco, impermeabilização do solo urbano e redução da capacidade natural das bacias de absorver e escoar tanta água de uma vez.</p>

            <h3>Rios e hidrelétricas</h3>

            <p>O Brasil tem o maior potencial hidrelétrico do mundo e gera cerca de 65% da sua eletricidade com água. Isso tem um custo ambiental e social enorme: barragens inundam vales inteiros, deslocam comunidades ribeirinhas e indígenas, bloqueiam a passagem de peixes migratórios e alteram o regime fluvial a jusante. Belo Monte, no Rio Xingu, é o caso mais recente e polêmico: deslocou mais de 20.000 pessoas, impactou territórios indígenas e reduziu drasticamente a vazão de um trecho do rio em que comunidades pescavam há séculos. O debate entre energia limpa e impacto socioambiental ainda não tem resposta fácil: a hidrelétrica não emite gases de efeito estufa na operação, como uma usina a carvão emitiria, mas altera de forma irreversível o padrão de cheias, a migração de peixes e o modo de vida de quem depende diretamente daquele trecho específico do rio.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 8.7: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O padrão de drenagem em que o rio principal e os afluentes se ramificam livremente em várias direções, como os galhos de uma árvore, chama-se:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>radial</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>dendrítico</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>treliça</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'é o dendrítico! Ele se forma sobre rochas homogêneas, sem falhas que imponham uma direção aos afluentes, como boa parte da Bacia Amazônica.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8.5: Texto-fonte para análise crítica -->
        <div class="topico">

            <h2>Leia e analise</h2>

            <div class="duvid-bloco-apoio">
                <div class="duvid-texto-citacao">
                    As enchentes no Brasil matam mais do que terremotos, vulcões e tsunamis juntos. Mas ao contrário desses fenômenos, as enchentes são previsíveis. Sabemos onde vão ocorrer, em que época do ano, com que frequência. O que falta não é conhecimento científico. O que falta é a decisão política de não permitir que populações vulneráveis ocupem planícies de inundação, de recuperar matas ciliares, de tratar o rio como parte do espaço urbano e não como obstáculo a ser controlado.
                </div>
                <div class="duvid-fonte-texto">Adaptado de relatório do Centro Nacional de Monitoramento e Alertas de Desastres Naturais (CEMADEN), 2022</div>
            </div>

            <div class="w3-panel w3-pale-yellow w3-margin-top">
                <p><strong>Responda no caderno antes de continuar:</strong></p>
                <p>1. O texto afirma que as enchentes são "previsíveis". Com base no que você aprendeu sobre sistemas fluviais, explique por que isso é verdade e quais informações científicas permitem prever onde e quando elas ocorrem.</p>
                <p>2. O texto coloca a responsabilidade nas "decisões políticas", não na natureza. Você concorda? Quais decisões políticas concretas poderiam reduzir o número de mortes por enchentes no Brasil?</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Síntese crítica -->
        <div class="topico">

            <h2>Voltando à pergunta do início</h2>

            <p>A tragédia da Serra Fluminense em 2011 foi natural ou social?</p>

            <p>As chuvas foram naturais. Mas a escala da destruição foi construída ao longo de décadas. A retirada da mata ciliar acelerou a erosão das encostas. O assoreamento dos rios reduziu sua capacidade de absorver as chuvas. A ocupação das planícies de inundação e das áreas de risco por populações sem alternativa habitacional colocou pessoas no caminho das águas. O Estado sabia: cartas de risco identificavam as áreas vulneráveis anos antes da tragédia.</p>

            <p>Os sistemas fluviais funcionam com sua própria lógica, acumulada em milhões de anos de evolução geológica. Quando as populações humanas ignoram essa lógica e ocupam planícies de inundação, retiram vegetação de margens e impermeabilizam o solo com asfalto e concreto, não estão "vencendo a natureza". Estão acumulando uma dívida que vai ser cobrada na próxima chuva intensa.</p>

            <p>A resposta ao problema não é controlar o rio com obras de engenharia. É compreender sua dinâmica, respeitar suas planícies e garantir que as populações mais vulneráveis tenham onde morar que não seja dentro do leito maior do rio.</p>

            <p>Mas conhecer a forma dos rios é só metade da história. Na próxima aula, você vai descobrir o que corre dentro deles: de onde vem a poluição que contamina as águas doces do planeta, por que a destruição das matas ciliares que você acabou de estudar também envenena o solo e os lençóis freáticos, e como o uso da água conecta tudo isso à vida das cidades rio abaixo.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 10: Infográfico -->
        <div class="topico">

            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin">
                <img id="inforesumotp26" src="inforesumotp26.webp" alt="Infográfico resumo Sistemas Fluviais" class="w3-mobile"
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

            <p>Em que ano o Lago Guaíba, em Porto Alegre, atingiu seu maior nível histórico, 5,25 metros, na maior enchente já registrada no Rio Grande do Sul?</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', '2024', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Como se chama o processo pelo qual um rio mais vigoroso avança sua nascente rio acima (erosão remontante) até desviar para si as águas de um rio vizinho?</p>
            <div class="w3-margin">
                <input class="input" id="q2a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp2a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a', 'captura', 'resp2a', this, 'globinho2a')">
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
                <strong>O rio Amazonas tem delta ou estuário?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Tecnicamente, o Amazonas não tem delta nem estuário clássico. Tem uma foz tão larga e com tanta água que as correntes oceânicas não conseguem dispersar os sedimentos completamente, mas também não se acumulam em forma de delta. A ilha de Marajó, no meio da foz, é na verdade uma ilha fluvial formada por sedimentos, e a foz tem mais de 300 km de largura. Cada rio tem suas peculiaridades.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que construir à beira do rio é proibido por lei, mas todo mundo faz?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> O Código Florestal define faixas mínimas de mata ciliar que não podem ser ocupadas, variando de 30 metros (para rios estreitos) a 500 metros (para rios com mais de 600 m de largura). Mas a fiscalização é fraca, a pressão por moradia é alta e regularizar ocupações irregulares é politicamente mais fácil do que removê-las. O resultado é que milhões de brasileiros vivem em áreas de risco legalmente reconhecidas.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O que é o "leito maior" de um rio?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Todo rio tem um leito menor, onde a água corre normalmente, e um leito maior, que é a planície de inundação inundada nas cheias excepcionais. O problema é que as pessoas constroem casas, ruas e até bairros inteiros no leito maior, achando que "o rio nunca chegou aqui". Chegou sim, várias vezes. Só não chegou nos últimos anos.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que os rios da Amazônia têm cores tão diferentes entre si?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque nascem em terrenos diferentes e carregam materiais diferentes. O Solimões vem dos Andes, carregado de sedimentos jovens, e por isso é barrento. O Rio Negro atravessa terrenos antigos e pobres em minerais, e sua cor escura vem da decomposição da matéria orgânica da floresta, quase como um chá. Você pode ver esse contraste ao vivo no chamado "Encontro das Águas", perto de Manaus, onde as águas escura do Rio Negro e barrenta do Solimões correm lado a lado por quilômetros antes de se misturarem completamente, por causa de diferenças de temperatura, densidade e velocidade entre os dois rios.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 12: Produção final -->
        <div class="topico">

            <p class="caixa">Hora de usar o que você aprendeu.</p>

            <div class="w3-panel w3-pale-yellow">
                <h3>Diagnóstico fluvial da sua cidade</h3>
                <p><strong>Atividade individual ou em dupla</strong></p>

                <p>Todos os conceitos desta aula (curso superior, médio e inferior, meandros, padrões de drenagem, assoreamento, planície de inundação) existem em algum grau no rio mais próximo de você, mesmo que ele seja pequeno e sem nome de destaque em mapas. Pesquise sobre o principal rio que passa pela sua cidade ou região e responda no caderno:</p>

                <p><strong>1.</strong> Em que trecho do rio sua cidade está localizada (curso superior, médio ou inferior)? Como isso influencia o tipo de relevo e o risco de enchentes?</p>
                <p><strong>2.</strong> Existem registros de enchentes históricas na sua cidade? Quando ocorreram e quais foram as causas apontadas?</p>
                <p><strong>3.</strong> A mata ciliar do rio está preservada ou há ocupação irregular nas margens? O que sua cidade tem feito a respeito?</p>
                <p><strong>4.</strong> Com base no que você aprendeu, escreva uma proposta de ação (mínimo 10 linhas) para reduzir o risco de enchentes na sua cidade usando conceitos de sistemas fluviais.</p>

                <p class="w3-small w3-text-grey">Dica: o site do CEMADEN (cemaden.gov.br) tem mapas de risco para todos os municípios brasileiros.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 13: Questões para o caderno -->
        <div class="topico">

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. Quais são os três processos fundamentais dos sistemas fluviais? Como eles variam ao longo do curso do rio?</h3>
                <h3>2. Explique como se formam os meandros. O que é uma lagoa oxbow e como ela se origina?</h3>
                <h3>3. Qual a diferença entre delta e estuário? Em que condições se forma cada um?</h3>
                <h3>4. Por que a construção de barragens pode causar erosão do delta a jusante? Use o exemplo do Nilo ou do São Francisco.</h3>
                <h3>5. O que é assoreamento? Quais são suas causas e consequências para as populações que vivem às margens dos rios?</h3>
                <h3>6. Explique o papel da mata ciliar na dinâmica dos sistemas fluviais e o que acontece quando ela é removida.</h3>
                <h3>7. O que é a planície de inundação? Por que populações pobres tendem a ocupar essas áreas de risco?</h3>
                <h3>8. As enchentes no Brasil são fenômenos naturais ou socioambientais? Argumente com exemplos concretos.</h3>
                <h3>9. Quais são os impactos socioambientais da construção de hidrelétricas em rios como o Xingu? Há alternativas?</h3>
                <h3>10. Como o desmatamento de uma bacia hidrográfica afeta os sistemas fluviais a ponto de aumentar o risco de enchentes nas cidades?</h3>
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
        mensagem: 'o tema Sistemas Fluviais é fascinante! Continue estudando!',
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
