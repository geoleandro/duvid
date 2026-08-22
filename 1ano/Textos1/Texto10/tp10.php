<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Dinâmica interna do relevo: tectonismo, orogênese, epirogênese, vulcanismo e terremotos">
    <meta property="og:title" content="Texto 10 - Dinâmica interna do relevo">
    <meta property="og:description" content="Como o tectonismo, o vulcanismo e os terremotos modelam o relevo terrestre">
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


    <title>1º ano - Texto 10</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Entender o papel das forças internas na configuração das estruturas e formas do relevo terrestre.</span></p>
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
                <p class="w3-pale-green">Você já viu na TV imagens de um vulcão em erupção ou de um terremoto destruindo casas e cidades? Já se perguntou por que algumas regiões do Planeta sofrem terremotos com frequência e outras quase nunca?</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: na sua opinião, o que causa um terremoto ou faz um vulcão entrar em erupção? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2> Introdução </h2>
            <p><span class="primeiraLetra">V</span>imos como ocorrem os processos de separação dos continentes através da teoria da tectônica de placas.</p>
            <p>Nesta aula, vamos iniciar nossos estudos sobre as transformações do relevo terrestre e sobre quais forças estão envolvidas na modelagem de suas formas.</p>
            <p><strong>Esta aula responde a uma pergunta que qualquer pessoa que já sentiu um tremor de terra se fez: o que exatamente acontece no interior do Planeta para formar uma montanha, provocar um terremoto ou fazer um vulcão entrar em erupção?</strong></p>
            <p>Ao final, você será capaz de reconhecer o funcionamento dos agentes internos do relevo e ampliar seu conhecimento sobre o Planeta Terra.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (o que e o relevo) -->
        <div class="topico">

            <h2> O que é o relevo?</h2>

            <p>O relevo terrestre não é apenas as formas da superfície terrestre, mas o resultado de forças internas e externas da Terra em constante movimento.</p>

            <p>O relevo é dinâmico, isto é, apesar de ser composto por objetos naturais como solo, rochas ou vegetação, ele é mais do que isso: é um arranjo de componentes que trocam energias entre si e constituem nosso meio de vida, nosso meio geográfico.</p>

            <p>Podemos diferenciar o relevo por suas formas, observando diretamente a paisagem. Uma montanha, como o <span
                    onclick="Aparecer('imagem1','citacao1')"><mark>Monte Everest</mark></span>, constitui uma forma elevada da crosta terrestre; uma planície é uma área mais baixa e um planalto, uma área mais alta, cada uma com processos distintos de formação.</p>

            <div class="area">
                <img alt="Monte Everest" class="w3-mobile" id="imagem1" src="tp10f1.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao1" style="display:block"> Fonte: commons.wikimedia.org. </p>

            <p>Para a Ciência, mais importante do que as formas são os processos (sequência de ações que levam a um resultado) que geraram tais formas. Como surge uma montanha? Por que esse terreno está abaixo do nível do mar?</p>

            <p>Para podermos instalar uma usina hidrelétrica ou construir uma rodovia em determinada localidade, é preciso estudar a dinâmica do relevo. Caso contrário, corremos o risco de degradar o ambiente ou sofrer consequências naturais do meio em que estamos inseridos.</p>

            <p>Enchentes em cidades ou a destruição do solo pela mineração são alguns exemplos de interferência do homem em seu meio de vida.</p>

            <h2> Por que há diversos tipos de relevo?</h2>

            <p>As diferentes feições da superfície terrestre são resultado de agentes internos (endógenos) e agentes externos (exógenos).</p>

            <p><span onclick="Aparecer('imagem2','citacao2')"><mark>Os agentes internos</mark></span> que vamos estudar são o <strong>tectonismo</strong>, o <strong>vulcanismo</strong> e os <strong>terremotos</strong> (abalos sísmicos). Os agentes externos estão relacionados ao intemperismo e à erosão (assunto da próxima aula).</p>

            <div class="area">
                <img alt="Agentes internos do relevo" class="w3-mobile" id="imagem2" src="tp10f2.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao2" style="display:block"> Fonte: geolibertaria2.blogspot.com </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tectonismo) -->
        <div class="topico">

            <h2> Tectonismo</h2>

            <p>Por volta de 540 a.C., o filósofo grego Xenófanes de Cólofon encontrou conchas marinhas fossilizadas no alto de montanhas na Sicília, em Malta e na ilha grega de Paros. Ele concluiu que aquelas montanhas, um dia, deviam ter estado no fundo do mar, e que alguma força as havia soerguido até ali. Foi uma das primeiras vezes na história que um ser humano usou uma evidência concreta (o fóssil fora do lugar) para deduzir que a superfície da Terra não é fixa, ideia que só seria plenamente comprovada mais de dois mil anos depois.</p>

            <p>Vimos que as placas tectônicas são grandes porções sólidas da crosta terrestre em movimento e que ocorrem choques entre elas. Dessas colisões podem ocorrer deformações nas rochas e surgir cadeias de montanhas e diferentes feições do relevo.</p>

            <p>A Terra é um planeta ativo, com uma grande variedade de processos devido ao seu calor interno, manifestado pelos movimentos das placas. Essas forças do interior da Terra que atuam de forma lenta e prolongada na crosta terrestre são chamadas de <span
                    class="termo" data-palavra="Tectonismo"
                    data-definicao="Conjunto de forças internas da Terra, originadas do calor interno e do movimento das placas tectônicas, que atuam de forma lenta e prolongada deformando a crosta terrestre e originando cadeias de montanhas e outras feições do relevo."><strong>tectonismo</strong></span>.</p>

            <p>As rochas que constituem as placas tectônicas podem sofrer <span
                    onclick="Aparecer('imagem3','citacao3')"><mark>dobramento ou falhamentos</mark></span>, dependendo das forças do encontro das placas.</p>

            <div class="area">
                <img alt="Dobramento e falhamento de rochas" class="w3-mobile" id="imagem3" src="tp10f3.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao3" style="display:block"> Fonte: Wicander e Monroe (p.216). </p>

            <p>A compressão das rochas causa o encurtamento de suas camadas por dobramento ou falhamento. Já a tensão estira as camadas e causa falhamentos.</p>

            <p>Portanto, temos basicamente dois principais movimentos das placas tectônicas: os movimentos horizontais, chamados de <strong>orogênese</strong>, e os movimentos verticais, chamados de <strong>epirogênese</strong>. Vamos ver cada um deles.</p>

            <h3>Orogênese</h3>

            <p>É o movimento produzido pela <span
                    class="termo" data-palavra="Orogênese"
                    data-definicao="Movimento horizontal produzido pela compressão ao longo dos limites convergentes das placas tectônicas, de duração geológica não muito extensa e grande intensidade, responsável pela formação de cadeias de montanhas como os Andes e o Himalaia.">compressão</span> ao
                longo dos limites convergentes das placas tectônicas. São movimentos horizontais, com duração geológica não muito extensa e de grande intensidade, que formam montanhas como os Alpes, na Europa, a <span
                    onclick="Aparecer('imagem4','citacao4')"><mark>Cordilheira dos Andes</mark></span>, na América do Sul, e o Himalaia, na Ásia.</p>

            <div class="area">
                <img alt="Cordilheira dos Andes" class="w3-mobile" id="imagem4" src="tp10f4.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao4" style="display:block"> Mapa da América do Sul. Fonte: Atlas geográfico IBGE. </p>

            <p>As cadeias de montanhas formam um conjunto alongado de elevações da crosta e ocupam uma faixa estreita próxima à margem continental ativa (zona de colisão de placas), onde podemos encontrar processos de falhas e de dobramentos, muitas vezes conectados.</p>

            <p>Os dobramentos ocorrem devido às pressões laterais das forças tectônicas. Nas áreas de rochas menos rígidas elas são literalmente <span
                    onclick="Aparecer('imagem5','citacao5')"><mark>dobradas</mark></span>. Já nas áreas em que as rochas são mais resistentes podem ocorrer falhas.</p>

            <div class="area">
                <img alt="Rochas dobradas" class="w3-mobile" id="imagem5" src="tp10f5.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao5" style="display:block"> Fonte: Geography (2019, adaptado). </p>

            <p>A geologia denomina de <span class="termo" data-palavra="Anticlinal e Sinclinal"
                    data-definicao="Deformações das camadas de rocha causadas pela compressão tectônica: o anticlinal forma um arco com a parte mais elevada para cima, enquanto o sinclinal forma uma calha com a área mais rebaixada."><strong>anticlinal</strong></span> as
                camadas de rochas dobradas em arco com a parte mais elevada para cima, enquanto as rochas com formato de calhas, com uma área mais rebaixada, são chamadas de <strong>sinclinal</strong>. Na <span
                    onclick="Aparecer('imagem6','citacao6')"><mark>figura abaixo</mark></span> vemos o exemplo:</p>

            <div class="area">
                <img alt="Anticlinal e sinclinal" class="w3-mobile" id="imagem6" src="tp10f6.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao6" style="display:block"> Fonte: pixabay.com </p>

            <p>Podem ocorrer inúmeros tipos de dobramentos, dependendo da estrutura geológica, das atividades tectônicas e da capacidade das rochas em resistir aos movimentos verticais, por exemplo.</p>

            <h3>Epirogênese</h3>

            <p>Ao contrário da orogênese, que é mais localizada e rápida, a <span
                    class="termo" data-palavra="Epirogênese"
                    data-definicao="Movimento vertical, lento e de grandes dimensões, que eleva (soerguimento) ou rebaixa (subsidência) blocos continentais inteiros, devido ao ajuste isostático da crosta sobre o manto.">epirogênese</span> possui
                um movimento mais lento e abrange grandes dimensões das placas em áreas mais estáveis.</p>

            <p>A epirogênese atua na direção vertical, podendo elevar ou rebaixar grandes blocos continentais. O <span
                    onclick="Aparecer('imagem7','citacao7')"><mark>soerguimento</mark></span> (elevação) ou a subsidência (rebaixamento) ocorrem devido ao movimento isostático de acomodação da crosta sobre o manto superior.</p>

            <div class="area">
                <img alt="Soerguimento e subsidência" class="w3-mobile" id="imagem7" src="tp10f7.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao7" style="display:block"> Fonte: SUERTEGARAY (2003, p.76, adaptado). </p>

            <p>Os blocos mais elevados são denominados <span
                    class="termo" data-palavra="Horst e Graben"
                    data-definicao="Blocos de crosta terrestre formados por falhamento vertical: o horst é o bloco soerguido (mais elevado), enquanto o graben é o bloco rebaixado (afundado) entre falhas."><strong>Horst</strong></span>, enquanto
                o bloco afundado é denominado <span onclick="Aparecer('imagem8','citacao8')"><mark>Graben</mark></span>.</p>

            <div class="area">
                <img alt="Horst e Graben" class="w3-mobile" id="imagem8" src="tp10f8.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao8" style="display:block"> Fonte: SUERTEGARAY (2003, p.75, adaptado). </p>

            <p>O Brasil, apesar de estar longe de qualquer limite de placas, tem um exemplo clássico de graben em seu próprio território: a Bacia do Recôncavo, na Bahia. Ela se formou durante a ruptura do Gondwana, quando o Atlântico Sul começou a se abrir, e é hoje uma das bacias sedimentares mais importantes do país para a produção de petróleo, justamente por causa dessa estrutura rebaixada e cheia de falhas que favoreceu o acúmulo de rochas sedimentares ricas em matéria orgânica.</p>

            <p>É importante ressaltar que os movimentos epirogenéticos e orogenéticos não podem ser entendidos e estudados de forma separada, uma vez que pertencem e são resultado da deriva continental e das colisões entre as placas tectônicas.</p>

            <p>O movimento vertical desencadeado pela epirogênese resulta em diversas falhas na crosta terrestre. Isso ocorre pelo acúmulo de energia nas bordas das placas e sua consequente liberação, geralmente em forma de abalos sísmicos (terremotos).</p>

            <p>O maior exemplo de falha em formação no Planeta hoje é o Vale do Rift, no leste da África (já mencionado na aula passada como limite divergente entre placas continentais), com cerca de 5 mil quilômetros de extensão. Ali, o movimento epirogenético está literalmente rasgando o continente africano ao meio: enquanto o fundo do vale afunda formando um imenso graben, as bordas se elevam como horsts. Segundo os geólogos, se esse processo continuar no ritmo atual, a África poderá se dividir em dois continentes separados por um novo oceano daqui a cerca de 50 milhões de anos.</p>

            <p>Os principais <span onclick="Aparecer('imagem9','citacao9')"><mark>tipos de falhas</mark></span> dependem da estrutura geológica e da resistência das rochas; os principais estão apresentados na figura abaixo:</p>

            <div class="area">
                <img alt="Tipos de falhas geológicas" class="w3-mobile" id="imagem9" src="tp10f9.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao9" style="display:block"> Fonte: Press (2006). </p>

            <p>A falha normal ocorre quando blocos superiores se movem para baixo em relação ao bloco inferior. Já na falha inversa, é o bloco superior que se move para cima em relação ao bloco inferior. Na falha transcorrente ou transformante, os movimentos são paralelos à direção da falha, como em San Andreas, que atravessa a costa da Califórnia, nos Estados Unidos.</p>

            <p>Outro agente interno responsável pela modelagem do relevo é o vulcanismo. Vamos ver suas principais características.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (unimontes) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>(Unimontes) A colisão entre uma placa oceânica e uma placa continental, com o mergulho de uma sob a outra, é um processo relacionado a:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) terremoto, tsunami e magma.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1b">
                        <span>b) movimento divergente, vulcão e fossa marinha.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1c">
                        <span>c) zona de subducção, placa tectônica oceânica e manto.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: quando uma placa oceânica mergulha sob outra, o processo se chama subducção, e ela é reciclada no manto.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (crosta oceanica) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual a idade da crosta oceânica?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) a mesma idade da crosta continental.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) mais jovem do que a crosta continental.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) a ciência ainda não determinou sua idade.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: a crosta oceânica está sempre nascendo nas dorsais e sendo reciclada nas zonas de subducção, por isso é sempre mais jovem que a continental.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (vulcanismo) -->
        <div class="topico">

            <h2>Vulcanismo</h2>

            <p>Por que o interior da Terra é quente? A primeira evidência é a de que os elementos radioativos no interior do manto e do núcleo sofrem desintegração ou decaimento (processo pelo qual um elemento se torna outro, liberando, entre outras coisas, calor).</p>

            <p>Esse calor intenso chega à superfície terrestre através de erupções vulcânicas em forma de lava, que é rocha em estado líquido, e depois se resfria, tornando-se rocha vulcânica dura.</p>

            <p>Esse processo contribui para diferentes tipos de relevo, de acordo com o movimento das placas tectônicas e a atividade das correntes de convecção. Observe abaixo o esquema do funcionamento de um <span
                    onclick="Aparecer('imagem10','citacao10')"><mark>vulcão</mark></span>:</p>

            <div class="area">
                <img alt="Esquema de um vulcão" class="w3-mobile" id="imagem10" src="tp10f10.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao10" style="display:block"> Fonte: Press (2006, p.144). </p>

            <p>O <span class="termo" data-palavra="Vulcanismo"
                    data-definicao="Conjunto de processos pelos quais o magma e seus gases e materiais piroclásticos são forçados a sair para a superfície terrestre ou a retornar à astenosfera.">vulcanismo</span> é
                um conjunto de processos pelos quais o magma e todo o seu conteúdo de gases e <span
                    onclick="Aparecer('imagem12','citacao12')"><mark>materiais piroclásticos</mark></span> (rochas, cinzas, fumaça tóxica etc.) são forçados a sair para a superfície ou a entrar novamente na astenosfera.</p>

            <div class="area">
                <img alt="Materiais piroclásticos" class="w3-mobile" id="imagem12" src="tp10f12.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao12" style="display:block"> Fonte: slideshare.net </p>

            <p>Já um <strong>vulcão</strong> é uma parte elevada do relevo, ou uma montanha, ao redor de uma abertura por onde a lava é expelida, além de outros materiais relacionados às erupções.</p>

            <p>Além dos fluxos de lava e do material rochoso escaldante, que pode destruir construções e cobrir áreas destinadas à agricultura, os vulcões emitem gases tóxicos e cinzas.</p>

            <p>Esses materiais podem se fixar na atmosfera e causar diversos problemas de saúde para a população, principalmente respiratórios. Também podem influir no clima e baixar a temperatura, devido ao impedimento da entrada de luz solar em determinada região, e provocar acidentes aéreos, causando falhas de motores através de uma nuvem de cinzas.</p>

            <p>Outros <span class="termo" data-palavra="Materiais Piroclásticos"
                    data-definicao="Fragmentos sólidos de rocha, cinzas e outros materiais expelidos durante uma erupção vulcânica, que incluem lapilli, blocos e bombas vulcânicas.">materiais
                    piroclásticos</span> são o <strong>lapilli</strong>, pequenos fragmentos de rochas; <strong>blocos</strong>, que são arrancados dos condutos vulcânicos durante o fluxo de lava; e <strong><span
                        onclick="Aparecer('imagem15','citacao15')"><mark>bombas</mark></span></strong>, expelidas tal como uma bolha que se solidifica no ar.</p>

            <div class="area">
                <img alt="Bomba vulcânica" class="w3-mobile" id="imagem15" src="tp10f15.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao15" style="display:block"> Vulcanologista Katia Krafft examina uma bomba vulcânica ejetada do vulcão Asama, Japão. Mais tarde, a cientista foi morta por um fluxo piroclástico no Monte japonês Unzen. Fonte: Press (2006, p.147). </p>

            <p>Os vulcões podem estar ativos, adormecidos ou extintos. Entre os vulcões ativos destacam-se: Kilauea, na ilha do Havaí; o monte Fuji, no Japão; o Vesúvio, na Itália; o Santa Helena, nos Estados Unidos; o Pinatubo, nas Filipinas; e o Fagradalsfjall, na Islândia, dentre outros.</p>

            <p>E o Brasil, tem vulcões? Como o território brasileiro está situado quase inteiramente no meio da Placa Sul-Americana, longe dos limites convergentes e divergentes que concentram a maior parte do vulcanismo do Planeta, não há vulcões ativos em solo continental brasileiro. Existem, porém, vulcões extintos há milhões de anos, como os que deram origem ao Arquipélago de Fernando de Noronha e à Ilha da Trindade, associados a pontos quentes que já estudamos na aula anterior, além de rochas vulcânicas antigas encontradas em algumas regiões do território, testemunhas de um vulcanismo que cessou há dezenas ou centenas de milhões de anos.</p>

            <p>A maioria dos vulcões está localizada nos limites ou perto dos limites de placas. Dois cinturões de vulcões são reconhecidos: o <span
                    onclick="Aparecer('imagem11','citacao11')"><mark>cinturão do Pacífico</mark></span>, ou Círculo de Fogo, que contém cerca de 75% de todos os vulcões ativos; cerca de 20% estão no cinturão Mediterrâneo-Asiático; e a maior parte dos restantes está localizada ao longo das cadeias mesoceânicas (WICANDER, 2009, adaptado).</p>

            <div class="area">
                <img alt="Cinturão de Fogo do Pacífico" class="w3-mobile" id="imagem11" src="tp10f11.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao11" style="display:block"> Fonte: Wicander (2009, p.118). </p>

            <p>Os diversos <span onclick="Aparecer('imagem16','citacao16')"><mark>formatos dos vulcões</mark></span> são consequências de suas erupções.</p>

            <div class="area">
                <img alt="Formatos de vulcões" class="w3-mobile" id="imagem16" src="tp10f16.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao16" style="display:block"> Fonte: Press (2006, p.149, adaptado). </p>

            <h3> Vulcanismo intraplaca (hotspot)</h3>

            <p>Existem vulcões que não estão localizados nos limites divergente ou convergente de placas tectônicas. Eles estão localizados no interior de uma placa, como os vulcões <span
                    onclick="Aparecer('imagem14','citacao14')"><mark>Kilauea</mark></span> e Mauna Loa, no Havaí. Mas como o magma pode extravasar e sair pela superfície estando distante dos limites das placas? As ilhas havaianas, no centro da Placa do Pacífico, ilustram essa ideia.</p>

            <div class="area">
                <img alt="Vulcão Kilauea" class="w3-mobile" id="imagem14" src="tp10f14.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao14" style="display:block"> Vulcão Kilauea, Havaí, EUA. Fonte: portals1.com.br </p>

            <p>Esse tipo de atividade vulcânica está associado aos chamados <span
                    class="termo" data-palavra="Ponto Quente (Hotspot)"
                    data-definicao="Área fixa no manto terrestre onde uma pluma de magma extremamente quente sobe continuamente em direção à superfície, formando vulcões independentemente dos limites entre placas tectônicas."><span
                        onclick="Aparecer('imagem13','citacao13')"><mark>pontos quentes</mark></span></span> (hotspots). As ilhas vulcânicas do Havaí formam uma cadeia montanhosa submarina que está em parte submersa ao longo de 6 mil km de extensão. As rochas nessa região são progressivamente mais antigas ao longo da cadeia. O aparecimento dessas ilhas é o resultado de um canal profundo que sai do manto. Como a placa do Pacífico está em movimento, ela transporta um vulcão, tornando-o inativo, e ao mesmo tempo proporciona a formação de um novo vulcão que repete o processo.</p>

            <div class="area">
                <img alt="Cadeia de ilhas vulcânicas do Havaí" class="w3-mobile" id="imagem13" src="tp10f13.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao13" style="display:block"> </p>

            <h3> Vulcanismo e hidrografia</h3>

            <p>O vulcanismo interage com outras esferas da Terra, como a <span
                    onclick="Aparecer('imagem17','citacao17')"><mark>atmosfera e a hidrosfera</mark></span>. Os vulcões são ativos mesmo quando não há lava fluindo de suas crateras.</p>

            <div class="area">
                <img alt="Vulcanismo e hidrosfera" class="w3-mobile" id="imagem17" src="tp10f17.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao17" style="display:block"> Fonte: TEIXEIRA (2009, p.358). </p>

            <p>Os vulcões podem emitir fumaça e vapor por meio das fumarolas. Essas são manifestações superficiais da circulação de água que ocorre na interação com o magma e rochas em fusão, extremamente quentes. Após ter contato com altas temperaturas, essa água se aquece e retorna para a superfície através de fontes quentes ou de gêiseres.</p>

            <p>Como ocorre esse processo de saída de água quente para a superfície?</p>

            <p>As águas das chuvas penetram nas rochas porosas, tal como em uma esponja, formando um reservatório, um aquífero. Como o magma está abaixo dessa água, geralmente entre 5 e 7 km de profundidade, ele transfere calor e aquece o aquífero. Com o aumento da pressão, a água superaquece sem, no entanto, ferver, e torna-se mais leve (menos densa) do que a água fria que se infiltra no aquífero. Com o tempo, a temperatura aumenta pouco a pouco até que, em um dado momento, uma pequena porcentagem entra em ebulição. Com o aumento do volume devido à ebulição, a água não tem por onde escapar, a não ser pelos condutos dentro das rochas. Assim, ela rompe pela superfície em um violento jato de água. Após a redução da pressão, o processo é interrompido enquanto a recarga do aquífero continua, para que o processo possa ser reiniciado. <span
                    class="citacao">Fonte: TEIXEIRA (2009, p.358, adaptado).</span></p>

            <p>O gêiser mais famoso é o <em><span onclick="Aparecer('imagem26','citacao26')"><mark>Old Faithful</mark></span></em>, localizado no parque de Yellowstone, nos Estados Unidos. Ele emite uma fonte de água quente, que jorra de forma intermitente, em intervalos que variam entre 60 e 110 minutos, com grande força e com um barulho que se assemelha a um rugido trovejante.</p>

            <div class="area">
                <img alt="Gêiser Old Faithful" class="w3-mobile" id="imagem26" src="tp10f26.gif" style="display:block" />
            </div>
            <p class="citacao" id="citacao26" style="display:block"> </p>

            <p>O vapor e a água quente formados por essa atividade hidrotermal podem ser canalizados e gerar energia geotérmica. Outro aspecto importante desse processo envolve a deposição de minerais metálicos de grande valor econômico quando há o encontro de magma com a água.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (vulcoes e placas) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual a relação entre vulcões e placas tectônicas?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) a maior parte dos vulcões estão localizados nos limites de placas tectônicas, como o Círculo de Fogo do Pacífico.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) a maior parte dos vulcões estão localizados nos limites divergentes de placas tectônicas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) a maior parte dos vulcões são resultados do processo de hotspots.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: cerca de 75% dos vulcões ativos do mundo ficam no Círculo de Fogo do Pacífico, uma sequência de limites de placas.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (erupcoes) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual a relação entre erupções e tipos de vulcões?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) as erupções liberam materiais piroclásticos.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4b">
                        <span>b) as erupções moldam a aparência dos vulcões.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) as erupções determinam os tipos de magma.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: erupções mais fluidas ou mais explosivas moldam formatos de vulcão diferentes, mas não mudam o tipo de magma nem o local da erupção.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (terremotos) -->
        <div class="topico">

            <h2>Terremotos (abalos sísmicos)</h2>

            <p>Não há nada mais exemplar sobre a dinâmica geológica da Terra do que sentir um tremor no chão onde pisamos.</p>

            <p>A Terra é ativa e instável, quer dizer, não há ainda como prever o que irá acontecer quando se trata de <span
                    onclick="Aparecer('imagem19','citacao19')"><mark>terremotos</mark></span>.</p>

            <div class="area">
                <img alt="Terremoto no Nepal" class="w3-mobile" id="imagem19" src="tp10f19.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao19" style="display:block"> Terremoto, Nepal, 2015. O país está localizado entre a Índia e o Tibete, conhecido por seus templos e pela Cordilheira do Himalaia, onde fica o Monte Everest. Fonte: flickr.com. </p>

            <p>Os terremotos são fenômenos naturais, assustadores e destrutivos, ligados a uma liberação súbita de energia, e geralmente ocorrem em zonas bem definidas nos limites transformantes, divergentes e convergentes de placas tectônicas. <span
                    onclick="Aparecer('imagem20','citacao20')"><mark>Veja o exemplo:</mark></span></p>

            <div class="area">
                <img alt="Zonas de terremotos" class="w3-mobile" id="imagem20" src="tp10f20.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao20" style="display:block"> Fonte: MARSHAK (2015, p.348, adaptado). </p>

            <p>Os terremotos são o resultado da tensão acumulada ao longo do tempo. Essa tensão surge a partir da pressão tectônica que deforma as rochas em ambos os lados. Quando a tensão ultrapassa a resistência das rochas, estas sofrem um deslizamento, liberando a energia acumulada e causando o terremoto.</p>

            <p>O ponto dentro da placa onde a energia é liberada é chamado de <span
                    onclick="Aparecer('imagem21','citacao21')"><mark>foco</mark></span> ou <span
                    class="termo" data-palavra="Hipocentro e Epicentro"
                    data-definicao="O hipocentro (ou foco) é o ponto dentro da crosta terrestre onde a energia de um terremoto é liberada; o epicentro é o ponto na superfície exatamente acima do hipocentro, onde o terremoto se manifesta com maior intensidade.">hipocentro</span>. Já
                o ponto na superfície onde o terremoto realmente se manifestou é o epicentro, muito comentado em reportagens televisivas.</p>

            <div class="area">
                <img alt="Hipocentro e epicentro" class="w3-mobile" id="imagem21" src="tp10f21.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao21" style="display:block"> Fonte: sobregeologia.com.br </p>

            <p>Como medir os terremotos?</p>

            <p>O estudo dos terremotos é realizado pela Sismologia, ciência que também nos ajudou a mapear as camadas internas da Terra, através de um aparelho que registra, detecta e mede as vibrações produzidas por um terremoto, como as ondas P e S (vistas na aula 08).</p>

            <p>O <span class="termo" data-palavra="Sismógrafo"
                    data-definicao="Aparelho que registra, detecta e mede as vibrações do solo, tanto horizontais quanto verticais, produzidas por um terremoto.">sismógrafo</span> registra
                tanto o movimento horizontal como o vertical gerados por essas vibrações.</p>

            <div class="area">
                <img alt="Sismógrafo" class="w3-mobile" id="imagem22" src="tp10f22.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao22" style="display:block"> </p>

            <p>Como medir a quantidade de energia liberada por um terremoto?</p>

            <p>Para medir a chamada magnitude de um terremoto, o sismólogo Charles F. Richter criou uma <span
                    class="termo" data-palavra="Escala Richter"
                    data-definicao="Escala logarítmica de base 10, sem limite superior, criada pelo sismólogo Charles F. Richter para medir a magnitude (quantidade de energia liberada) de um terremoto.">escala</span> sem
                limites, começando pelo valor 1.</p>

            <div class="area">
                <img alt="Escala Richter" class="w3-mobile" id="imagem23" src="tp10f23.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao23" style="display:block"> </p>

            <p>Richter usou uma escala logarítmica de base 10. Assim, cada aumento no número da escala representa 10 vezes o aumento da amplitude da onda.</p>

            <p>A avaliação dos efeitos dos terremotos varia de acordo com a escala de Richter, mas também há diversos fatores envolvidos na representação quantitativa e qualitativa desse fenômeno.</p>

            <p>A intensidade, por exemplo, é medida com a <span
                    class="termo" data-palavra="Escala Mercalli"
                    data-definicao="Escala qualitativa, de 1 a 12, que mede a intensidade de um terremoto a partir de seus efeitos observados sobre pessoas, objetos e construções, e não a partir das ondas sísmicas.">escala
                    de Mercalli</span>. Ela não está baseada nas ondas sísmicas, como a escala de Richter. Trata-se de uma escala qualitativa, baseada nos efeitos sobre as pessoas e estruturas, variando de 1 a 12, com o grau 1 correspondendo a um tremor não sentido pelas pessoas e o grau 12 a uma alteração calamitosa do relevo da região afetada. Por isso, um mesmo terremoto pode receber diferentes graus de Mercalli dependendo da cidade avaliada: quanto mais perto do epicentro e mais frágeis as construções locais, maior tende a ser o grau atribuído àquela área específica.</p>

            <div class="divCaixa1 w3-margin">
                <h4 class="fontePixel">Os terremotos podem causar efeitos destrutivos como:</h4>
                <ul class="lista">
                    <li>tremor de terra;</li>
                    <li>ondas sísmicas marinhas;</li>
                    <li>choque psicológico;</li>
                    <li>inquietação civil;</li>
                    <li>deslocamento de milhares de pessoas de suas casas;</li>
                    <li>muitos mortos e feridos;</li>
                    <li>dentre outros.</li>
                </ul>
            </div>

            <p>Dependendo da duração do tremor, da distância do epicentro, da estrutura geológica da área afetada, da qualidade das construções etc., um terremoto pequeno pode causar mais estragos do que um de magnitude maior.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (Pinatubo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Em 1991, o vulcão Pinatubo, nas Filipinas, considerado adormecido havia séculos, entrou em erupção sem que a população da região tivesse como prever com exatidão o momento do evento. O que esse episódio nos ensina sobre o comportamento dos vulcões?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) os vulcões sempre entram em erupção de forma explosiva.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) os vulcões são imprevisíveis e podem entrar em erupção a qualquer tempo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) os vulcões estão sempre acompanhados de terremotos.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: mesmo vulcões adormecidos por séculos podem entrar em erupção sem aviso, como mostrou o Pinatubo em 1991.', '10')">
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
            <h4 class="fontePixel"><b>Complete com o vocabulário relativo aos terremotos:</b></h4>
            <p>a) ponto da superfície onde as ondas sísmicas são manifestadas:</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'epicentro', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>b) ponto de origem das ondas sísmicas:</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'hipocentro', 'resp1b', this, 'globinho1b')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1b" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>c) escala utilizada para medir a magnitude dos terremotos:</p>
            <div class="w3-margin">
                <input class="input" id="q1c" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1c"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1c', 'richter', 'resp1c', this, 'globinho1c')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1c" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <div class="w3-margin-top">
                <button class="btnHide" onclick="MostrarProximo(this)" style="display:none">
                    Próximo ➜
                </button>
            </div>
        </div>


        <!-- <div class="topico">
            <h2> Infográfico - Resumo</h2>
            <div class="w3-margin"><img id="inforesumotp10" src="inforesumotp10.webp"
                    alt="Infográfico resumo Dinâmica interna do relevo" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a diferença entre o magma e a lava?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                A primeira diferença está relacionada à localização. O magma está situado abaixo da crosta, enquanto a lava é o material rochoso que extravasa até a superfície. A segunda distinção é em relação às propriedades químicas: a lava, ao sair do vulcão, entra em contato com o oxigênio e libera gases, o que modifica sua estrutura. É por isso que rochas formadas pelo resfriamento da lava na superfície (rochas vulcânicas, como o basalto) costumam ter cristais bem pequenos, já que esfriam rápido, enquanto o magma que se solidifica lentamente lá embaixo, sem contato com o ar, forma rochas com cristais bem maiores, como o granito.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong> Existe terremoto no oceano? </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Sim. Em dezembro de 2004, um gigantesco maremoto atingiu o Sudeste Asiático, particularmente a Indonésia, o Sri Lanka, a Índia e a Tailândia, provocando mais de 225 mil mortes. Logo, a palavra japonesa <span
                    onclick="Aparecer('imagem24','citacao24')"><mark>tsunami</mark></span> [de <em>tsu</em>, "porto", "ancoradouro"; e <em>nami</em>, "onda", "mar"], muito usada na Ásia para se referir a esse fenômeno, tornou-se conhecida em todo o mundo.
            </p>

            <div class="area">
                <img alt="Tsunami" class="w3-mobile" id="imagem24" src="tp10f24.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao24" style="display:block">Fonte: brasilescola.uol.com.br </p>

            <p>Ela designa as ondas gigantescas formadas por um maremoto, que nada mais é que um terremoto no fundo do mar e resulta do choque de placas tectônicas. Em março de 2011, ocorreu um maremoto no oceano Pacífico perto do Japão, que deu origem a um tsunami no litoral daquele país, que destruiu construções e até provocou o vazamento radioativo de uma central nuclear. As ondas do tsunami, com mais de 10 metros de altura, penetraram cerca de 10 km na faixa litorânea a leste do Japão e deixaram, além do grave acidente nuclear e da destruição de edificações, quase 20 mil mortos, mais de 2,5 mil desaparecidos e cerca de 6 mil pessoas feridas.</p>

            <p>Um tsunami não é uma única onda, mas uma série de ondas que podem viajar pelo oceano a velocidades de mais de 800 km/h. No maior maremoto registrado nos últimos 50 anos, o de dezembro de 2004, as enormes ondas caíam sobre as casas, a força da água levava tudo, e muitas praias viraram necrotérios a céu aberto. Muitas pessoas morreram durante os tsunamis depois de voltar para casa, porque acharam que as ondas tinham acabado.</p>

            <p>Os tsunamis em geral são causados pelo aumento ou pela baixa repentina de parte da crosta terrestre sob o oceano ou perto dele. Mas ondas de tsunami de menor força também podem ser geradas por atividade vulcânica, sendo mais comuns no oceano Pacífico.</p>

            <p>Quando o tsunami entra na linha costeira, sua velocidade diminui, mas a altura aumenta. Um tsunami de alguns centímetros ou metros de altura em alto mar pode atingir de 30 a 50 m de altura na costa, com força devastadora. Para quem está na praia, não há sinais evidentes da aproximação de um tsunami. O primeiro indício costuma ser uma elevação da água, mas não igual à das tempestades.</p>

            <p>Em 1883, um tsunami formado depois da erupção do vulcão Cracatoa, entre as ilhas indonésias de Java e Sumatra, matou 36 mil pessoas. Em 1908, um terremoto seguido de tsunami destruiu as cidades de Messina, na Sicília, e Reggio Calábria, no continente italiano, matando cerca de 80 mil pessoas, um dos maiores desastres sísmicos já registrados na Europa. Em julho de 1998, dois terremotos submarinos criaram tsunamis que mataram pelo menos 2,1 mil pessoas perto da cidade de Aitape, na costa norte de Papua-Nova Guiné. Moradores disseram que as grandes paredes de água, que avançaram 2 km, soavam como caças pousando. <span
                    class="citacao">Fonte: VESENTINI (2013, p.217).</span></p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Os vulcões só destroem o Planeta ou eles têm benefícios?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Os vulcões, apesar de seu poder destrutivo, possuem inúmeros benefícios. Durante a formação do Planeta, a própria atmosfera e os oceanos podem ter se originado a partir de atividades vulcânicas em um passado distante.
            </p>

            <p>Os solos são extremamente férteis próximos aos vulcões, devido aos minerais distribuídos no solo. As rochas vulcânicas, os gases e o vapor são importantes fontes de materiais industriais e químicos, como a pedra-pomes, o ácido bórico, a amônia, o enxofre, o dióxido de carbono e alguns metais. A água do mar que circula nas fissuras do sistema vulcânico das dorsais oceânicas é um dos principais fatores na formação de minérios e na manutenção do balanço químico dos oceanos. A energia térmica do vulcanismo está sendo cada vez mais aproveitada: mais de 90% das residências de Reykjavík, capital da Islândia, são aquecidas por água quente encanada diretamente do subsolo vulcânico, um sistema público em funcionamento desde a década de 1930 que também derrete a neve das calçadas e ruas no inverno, evitando acidentes.</p>

            <p>O vapor geotérmico, originado da água aquecida em contato com rochas vulcânicas quentes abaixo da superfície, é explorado como fonte de energia para a produção de eletricidade na Itália, na Nova Zelândia, nos Estados Unidos, no México, no Japão, dentre outros. <span
                    class="citacao">Fonte: Press (2006, p.167).</span></p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é o relevo terrestre?</h3>
                <h3>2. Quais são os dois principais tipos de agentes que modelam o relevo terrestre?</h3>
                <h3>3. O que é tectonismo?</h3>
                <h3>4. Qual é a diferença entre orogênese e epirogênese?</h3>
                <h3>5. O que são anticlinal e sinclinal?</h3>
                <h3>6. O que é um hotspot?</h3>
                <h3>7. Qual é a diferença entre a escala de Richter e a escala de Mercalli?</h3>
                <h3>8. O que é um sismógrafo?</h3>
                <h3>9. Explique como a interação entre vulcanismo e hidrografia pode gerar energia geotérmica.</h3>
                <h3>10. Descreva como os movimentos das placas tectônicas podem causar terremotos e quais são os pontos principais de um terremoto.</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você escreveu no início sobre o que causa um terremoto ou uma erupção vulcânica. Agora você sabe que ambos nascem do mesmo processo: o acúmulo lento de energia nas bordas das placas tectônicas, seja pela compressão que dobra e quebra rochas (tectonismo), seja pelo calor interno que empurra magma até a superfície (vulcanismo). O que muda é apenas a forma como essa energia é liberada.</p>

                <p>Você também viu que nem tudo se explica pelos limites de placas: os pontos quentes, como o do Havaí, mostram que o manto tem uma dinâmica própria, capaz de perfurar o meio de uma placa inteira ao longo de milhões de anos.</p>

                <p>Tudo o que vimos até aqui, tectonismo, vulcanismo e terremotos, são forças que constroem o relevo de dentro para fora. Mas assim que uma montanha se ergue, ela já começa a ser desgastada por outro conjunto de forças, que vêm de fora: a chuva, o vento, os rios e o gelo. Essa é a dinâmica externa do relevo, tema da próxima aula.</p>

                <p><strong>Resumo dos conceitos:</strong> tectonismo (forças internas lentas); orogênese e epirogênese (movimentos horizontais e verticais); anticlinal e sinclinal, horst e graben (formas de dobramento e falha); vulcanismo e materiais piroclásticos; hotspot (vulcanismo intraplaca); hipocentro e epicentro; escalas Richter e Mercalli; tsunami (maremoto).</p>

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
      mensagem: 'o tema Dinâmica Interna do Relevo é fascinante! Continue estudando!',
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
