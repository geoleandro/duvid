<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Dinâmica externa do relevo: intemperismo físico e químico, erosão e sedimentação">
    <meta property="og:title" content="Texto 11 - Dinâmica externa do relevo">
    <meta property="og:description" content="Como a água, o vento e o gelo modelam a superfície terrestre através do intemperismo e da erosão">
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


    <title>1º ano - Texto 11</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Entender o papel das forças externas na configuração das estruturas e formas do relevo terrestre, distinguindo entre intemperismo físico e químico e os tipos de erosão.</span></p>
            </div>
            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO: Pratica Social Inicial -->
        <div class="topico">
            <p class="caixa">Agora é com você!</p>
            <div class="w3-panel w3-pale-green">
                <p class="w3-pale-green">Faça uma lista em seu caderno sobre o que já ouviu falar sobre esse assunto: intemperismo, erosão e seus tipos, deslizamentos de terra.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: o que você gostaria de saber mais sobre como o vento, a água e o gelo transformam as rochas e o relevo? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2> Introdução </h2>
            <p><span class="primeiraLetra">N</span>a aula passada, conhecemos alguns processos relacionados à dinâmica interna do relevo, como o tectonismo, o vulcanismo e os terremotos.</p>
            <p>Nesta lição, veremos os agentes externos que moldam a superfície terrestre (água, vento, geleiras etc.), ao provocar alterações físicas e químicas nas rochas.</p>
            <p><strong>Esta aula responde a uma pergunta que explica desde o formato de um cânion até um simples buraco na estrada: se a crosta terrestre é feita de rocha sólida, o que consegue quebrá-la, dissolvê-la e transportá-la para formar as paisagens que vemos hoje?</strong></p>
            <p>Ao final, você compreenderá como funciona o intemperismo, o processo de erosão, transporte e sedimentação, e a importância do conhecimento do relevo para a sociedade.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (agentes externos) -->
        <div class="topico">

            <h2> O que são os agentes externos do relevo?</h2>

            <p>Aprendemos que o relevo é basicamente o conjunto das diversas configurações da crosta terrestre. Entretanto, essa superfície é a morada do homem, diferenciada por processos naturais e sociais.</p>

            <p>A importância do estudo do espaço terrestre no atual período é fundamental, uma vez que atingimos um conhecimento total do Planeta, graças às novas tecnologias (Sensoriamento Remoto, Geoprocessamento), em um período marcado pela ciência, técnica e informação.</p>

            <p>O que o relevo tem a ver com tudo isso? O relevo é feito de rochas, assim como nossas calçadas, pontes e moradias, e estas se degradam ao longo do tempo.</p>

            <p>Nós dependemos dos materiais disponíveis na superfície terrestre para diversas atividades humanas, como o cultivo do solo, a construção civil ou o desenvolvimento da indústria.</p>

            <p>Por meio da ação das águas, do vento, do mar, das geleiras, dos seres vivos etc., a paisagem terrestre é modelada e alterada.</p>

            <p>Esses são os <strong>agentes externos do relevo</strong>. Eles são responsáveis por deteriorar e desintegrar os materiais da Terra, na superfície ou próximo a ela, através de sua quebra física e alteração química.</p>

            <p>Trata-se do <span class="termo" data-palavra="Intemperismo"
                    data-definicao="Conjunto de processos físicos e químicos que decompõem e desagregam as rochas na superfície terrestre ou próximo a ela, preparando o material para a ação da erosão."><strong>intemperismo</strong></span>, que
                age sobre a rocha desagregando-a para formar peças menores. Alguns minerais são alterados ou dissolvidos, dando origem a outras formações. Um exemplo de intemperismo pode ser visto na <span
                    onclick="Aparecer('imagem1','citacao1')"><mark>figura abaixo:</mark></span></p>

            <div class="area">
                <img alt="Parque Estadual de Vila Velha" class="w3-mobile" id="imagem1" src="tp11f1.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao1" style="display:block"> O Parque Estadual de Vila Velha é um sítio geológico situado no município brasileiro de Ponta Grossa, do qual é a principal atração turística. Fonte: Wikipedia. </p>

            <p>Esse exemplo mostra um tipo de rocha, o arenito, esculpido pela força do vento e das chuvas ao longo de milhões de anos. Esse alicerce de rocha sedimentar sofreu intemperismo com a exposição e o desgaste por milhares ou milhões de anos.</p>

            <p>O transporte do material erodido das rochas é chamado de <strong>erosão</strong>, e pode ser carregado para outro local e finalmente depositado como <strong>sedimento</strong>. O chão onde pisamos pode ter sido, no passado, uma montanha desgastada ou erodida, dependendo do local no Planeta em que vivemos.</p>

            <p>Veremos em detalhes cada um desses processos responsáveis por alterar a configuração do relevo terrestre.</p>

            <div class="divCaixa1 w3-margin">
                <h4 class="fontePixel">Questione a realidade!</h4>
                <ul class="lista">
                    <li>Como o intemperismo físico afeta a superfície da Terra?</li>
                    <li>Como os processos químicos dissolvem as rochas?</li>
                    <li>Qual o resultado do intemperismo?</li>
                    <li>Quem é o responsável por levar o material intemperizado de um local para o outro?</li>
                    <li>Como a ação do vento, água, gelo e organismos vivos atua na modificação das paisagens?</li>
                </ul>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (automovel) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O que aconteceu com esse automóvel enferrujado sob o ponto de vista dos agentes externos do relevo?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) ele não pagou os impostos do DETRAN (foi multado e guinchado).</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1b">
                        <span>b) ele sofreu intemperismo físico (desagregação).</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1c">
                        <span>c) ele sofreu intemperismo químico (oxidação).</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'boa, quando o ferro entra em contato com o ar, ele oxida, perde elétrons, ganhou seu primeiro globinho', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (falesia) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Esse tipo de relevo, chamado de falésia, sempre apresentou esse formato? Quais agentes contribuíram para tal resultado?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) Não, geleiras moldaram esse relevo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2b">
                        <span>b) Sim, surgiu direto do magma.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2c">
                        <span>c) Não, agentes como o vento e as ondas do mar esculpiram esse formato.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'certo, já vamos descobrir como a erosão eólica gerou essas formas de relevo', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (intemperismo geral) -->
        <div class="topico">

            <h2> Intemperismo</h2>

            <p>É comum dizer que "nada resiste ao tempo". Podemos acrescentar que nem mesmo as rochas, apesar de sua dureza e resistência.</p>

            <p>Não há material que não seja suscetível (capaz ou passível de receber) ao intemperismo, também chamado de <strong>meteorização</strong>. A deterioração das rochas ou de qualquer coisa na Terra seria uma resposta desses materiais às mudanças de ambiente nas quais estão inseridos.</p>

            <p>Estruturas metálicas, carros, granito, monumentos podem enferrujar-se, enfraquecer-se ou esfacelar-se quando expostos à água ou a gases da atmosfera, em um deserto, geleira ou região tropical.</p>

            <p>Isso tudo é o intemperismo. Esse processo prepara a rocha para a erosão ao enfraquecê-la ou quebrá-la. Ele pode ser, basicamente, de dois tipos: intemperismo <strong>físico</strong> ou <strong>químico</strong>. No primeiro, ocorrem mudanças físicas dos materiais da Terra, mas não mudam sua composição. Já no segundo caso, os minerais das rochas são quimicamente dissolvidos.</p>

            <p>Os intemperismos físico e químico atuam juntos, reforçando um ao outro. Enquanto o físico quebra o material rochoso em pedaços menores, seu parceiro nesse processo, o químico, pode dissolvê-lo sem grandes problemas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (fatores do intemperismo) -->
        <div class="topico">

            <h2>Fatores do intemperismo</h2>

            <p>Existem fatores que influenciam e controlam a forma de atuação do intemperismo.</p>

            <p>O primeiro deles é o <strong>clima</strong>, representado pelas mudanças de temperatura e pela distribuição das chuvas. Depois temos o <strong>relevo</strong>, que, dependendo de sua inclinação, afeta diretamente a infiltração das águas pluviais (chuvas). O tipo de <strong>fauna</strong> e <strong>flora</strong> também interfere no grau de intemperismo, pois eles fornecem matéria orgânica para as relações químicas. O tipo de <strong>rocha matriz</strong> influencia devido a sua resistência aos processos intempéricos. E o <strong>tempo</strong> de exposição das rochas aos agentes externos também é determinante. (Fonte: Teixeira, 2009, adaptado).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (intemperismo fisico) -->
        <div class="topico">

            <h2> Intemperismo físico</h2>

            <p>O intemperismo físico ou mecânico fratura a rocha em pequenos pedaços sem promover alteração química de seus minerais.</p>

            <p>O granito, por exemplo, é uma rocha muito resistente, mas pode ser rompida por forças físicas como o congelamento, a variação de temperatura em áreas desérticas, a liberação de pressão ou a atividade orgânica, isto é, a ação de seres vivos diretamente nas rochas.</p>

            <p>A variação de temperatura, como um dos fatores do intemperismo, transforma as rochas na medida em que elas são aquecidas e depois resfriadas.</p>

            <p>Em áreas desérticas, a diferença de temperatura entre o dia e a noite é muito alta, podendo variar em até 30ºC ou mais (essa diferença é chamada de <span
                    class="termo" data-palavra="Amplitude Térmica"
                    data-definicao="Diferença entre a temperatura mais alta e mais baixa registrada em um mesmo local ao longo de um período, geralmente um dia. Grandes amplitudes térmicas, comuns em desertos, aceleram o intemperismo físico das rochas."><span
                        onclick="Aparecer('imagem2','citacao2')"><mark>amplitude térmica</mark></span></span>).</p>

            <div class="area">
                <img alt="Amplitude térmica" class="w3-mobile" id="imagem2" src="tp11f2.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao2" style="display:block"> Fonte: novaescola.org.br </p>

            <p>Essa alternância de calor gera uma tensão e causa fraturas nas rochas, bem como a queima de florestas; o intenso calor provoca expansão e contração nas rochas.</p>

            <p>Já nas áreas de desertos frios, como o continente Antártico, a água congela e descongela de forma repetida nas juntas ou <span
                    onclick="Aparecer('imagem3','citacao3')"><mark>rachaduras das rochas</mark></span>.</p>

            <div class="area">
                <img alt="Rachaduras nas rochas por congelamento" class="w3-mobile" id="imagem3" src="tp11f3.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao3" style="display:block"> Bloco de gnaisse fraturado pela ação do gelo nas fissuras (Antártica). Fonte: Teixeira (2009, p.142). </p>

            <p>Na figura acima podemos observar o processo de abertura de fissuras, pois a água, ao congelar, aumenta seu volume (em cerca de 9%), se expande contra as paredes das rochas, causando as chamadas cunhas de gelo.</p>

            <p>Outro fator do intemperismo está relacionado às atividades dos organismos vivos. O exemplo mais marcante diz respeito à pressão exercida pelas <span
                    onclick="Aparecer('imagem5','citacao5')"><mark>raízes das plantas</mark></span>, ao se infiltrarem nas rochas ocasionando fraturas. Também participam desse processo animais, plantas e bactérias. Animais que vivem em tocas, répteis ou roedores, dentre outros, misturam o solo e trazem material das profundezas para a superfície, onde sofre intemperismo. Já as bactérias, algas e fungos penetram nas fraturas e produzem ácidos responsáveis pela dissolução dos minerais, o material de que são feitas as rochas.</p>

            <div class="area">
                <img alt="Raízes fraturando rochas" class="w3-mobile" id="imagem5" src="tp11f5.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao5" style="display:block"> As raízes das plantas aceleram o intemperismo físico. Fonte: geocaching.com </p>

            <p>Além de fissuras e fraturas causadas por expansão do gelo ou variação de calor, temos o intemperismo por <strong><span
                        class="termo" data-palavra="Esfoliação"
                        data-definicao="Tipo de intemperismo físico em que a rocha se descama em camadas, como as de uma cebola, devido à liberação de pressão e a variações de temperatura."><span
                            onclick="Aparecer('imagem6','citacao6')"><mark>esfoliação</mark></span></span></strong>. Trata-se de um processo de descamação das rochas, tal como uma grande cebola, ou quando grandes blocos são destacados da parede rochosa.</p>

            <div class="area">
                <img alt="Esfoliação de granito" class="w3-mobile" id="imagem6" src="tp11f6.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao6" style="display:block"> Placas esfoliadas de granito em Half Dome, no Parque Nacional de Yosemite, EUA, uma alteração esferoidal tal como as camadas de um repolho. Fonte: Wikipedia e Press (2006). </p>

            <p>Resumindo: o intemperismo físico abre o caminho e facilita o intemperismo químico.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Escreva o nome do processo de quebra que promove alteração química e física das rochas na superfície terrestre.</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'intemperismo', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome do processo de remover os materiais que foram intemperizados de um local para outro através do vento, gelo ou água.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'erosão', 'resp1b', this, 'globinho1b')">
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


        <!-- BLOCO: Instrumentalizacao (intemperismo quimico) -->
        <div class="topico">

            <h2>Intemperismo químico</h2>

            <p>As rochas sofrem alterações químicas quando seus minerais entram em contato com a água e o ar, com dióxido de carbono e chuvas ácidas.</p>

            <p>Elas mudam de composição e seus minerais são literalmente dissolvidos, tal como uma pedra de sal em contato com a água.</p>

            <p>Além da dissolução, pode ocorrer a formação de novos minerais, diferentes daqueles da rocha original.</p>

            <p>O tipo de rocha vai determinar os efeitos do intemperismo químico. Alguns minerais, como a calcita, que é composta por carbonato de cálcio, uma rocha sedimentar, podem se decompor completamente em água acidificada.</p>

            <p>Como a água se torna ácida?</p>

            <p>Estamos acostumados com refrigerantes gaseificados, que nada mais são do que água com gás sob pressão. Esse gás é o dióxido de carbono (CO₂) e, quando combinado com a água, forma o <strong>ácido carbônico</strong>. Quando abrimos a garrafa, o gás dissolvido efervesce (se transfere para o ar) e a bebida se torna "choca" e levemente ácida.</p>

            <p>O material orgânico em decomposição também produz dióxido de carbono nos solos; dessa forma, a água subterrânea é levemente ácida.</p>

            <p>Em terrenos calcários, em consequência dessa acidez do solo, pode ocorrer a formação dos chamados <span
                    class="termo" data-palavra="Relevo Cárstico"
                    data-definicao="Paisagem formada pela dissolução química de rochas calcárias em contato com água levemente ácida, resultando em cavernas, dolinas e outras formas de relevo subterrâneo.">relevos
                    cársticos</span>, ou seja, a presença de <span onclick="Aparecer('imagem7','citacao7')"><mark>cavernas</mark></span>.</p>

            <div class="area">
                <img alt="Relevo cárstico" class="w3-mobile" id="imagem7" src="tp11f7.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao7" style="display:block"> Paisagem típica de relevo cárstico. Fonte: Wikipedia. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (formacao das cavernas) -->
        <div class="topico">

            <h2> Como as cavernas são formadas?</h2>

            <p>A água próxima à superfície ou no subsolo pode dissolver o calcário e formar cavidades, especialmente se a água for ácida. O sistema de cavernas é, geralmente, formado a partir do calcário, porque outros tipos de rocha não são facilmente dissolvidos. Observe a <span
                    onclick="Aparecer('imagem8','citacao8')"><mark>figura abaixo:</mark></span></p>

            <div class="area">
                <img alt="Formação de cavernas" class="w3-mobile" id="imagem8" src="tp11f8.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao8" style="display:block"> Fonte: Reynolds (2017, p.428). </p>

            <p>O número 1 representa a rocha calcária, constituída principalmente pelo mineral calcita (carbonato de cálcio), relativamente solúvel em água ácida. A água da chuva é um pouco ácida porque reage com o dióxido de carbono, o enxofre e o material orgânico. Quando a água reage com a calcita no calcário, ela o dissolve. O processo ainda pode ser ajudado pelos ácidos produzidos pelos micróbios no fundo do solo, como já visto.</p>

            <p>O número 2 indica que a água subterrânea dissolve o calcário, muitas vezes começando ao longo de fraturas e limites entre as camadas e, em seguida, ampliando-os progressivamente ao longo do tempo. As cavidades abertas tornam-se maiores e mais extensas, permitindo que mais água passe, o que acelera a dissolução e o alargamento. Se as aberturas se tornam muito grandes, elas podem acomodar piscinas subterrâneas ou córregos.</p>

            <p>O número 3 aponta que muitas cavernas se formam abaixo do lençol freático, e o processo pode levar milhões de anos. O resultado é uma rede de cavernas interconectadas através de túneis de calcário. Se houver um rompimento dessa piscina de água subterrânea, a água pode ser drenada para fora dos túneis e secar parte do sistema de cavernas.</p>

            <p>E, por fim, o número 4 mostra que, se parte do teto da caverna desabar, ela será exposta ao ar e secará ainda mais. Essa quebra do teto forma o chamado "sumidouro" na superfície.</p>

            <p>As cavernas são ótimos e interessantes locais para se explorar. Algumas possuem passagens estreitas conectando outras câmaras ou permitindo encontrar imensas cavidades.</p>

            <p>As formas mais conhecidas das cavernas estão relacionadas à dissolução e à precipitação da calcita, formando as <span
                    onclick="Aparecer('imagem9','citacao9')"><mark>estalagmites e as estalactites</mark></span>.</p>

            <div class="area">
                <img alt="Estalactites e estalagmites" class="w3-mobile" id="imagem9" src="tp11f9.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao9" style="display:block"> Fonte: escolanacaverna.com.br e ufrgs.br/paleotocas. </p>

            <p>Além das cavernas, as construções antigas não escapam do poder do intemperismo químico. <span
                    onclick="Aparecer('imagem10','citacao10')"><mark>Veja:</mark></span></p>

            <div class="area">
                <img alt="Colunas gregas alteradas por intemperismo químico" class="w3-mobile" id="imagem10" src="tp11f10.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao10" style="display:block"> Alteração nos blocos e ruínas de calcário nas colunas estilo grego de 2.500 anos, em Segesta, Itália. Fonte: Wikiwand. </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (fatores intemperismo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Quais fatores abaixo não contribuem para o aumento das taxas de intemperismo?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3a">
                        <span>a) clima.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) tipo de rocha.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3c">
                        <span>c) fósseis.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'certo, o fóssil é, na realidade, um fenômeno que se contrapõe ao intemperismo', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (clima tropical) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O que ocorre com o intemperismo em climas nas regiões tropicais?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4a">
                        <span>a) ocorre um aumento da taxa de intemperismo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4b">
                        <span>b) ocorre uma diminuição da taxa de intemperismo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) ocorre uma estagnação (paralisação) da taxa de intemperismo.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'beleza, o intemperismo químico aumenta devido à quantidade de chuva', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (erosao) -->
        <div class="topico">

            <h2> Intemperismo e erosão</h2>

            <p>Vimos que o vulcanismo e os processos tectônicos formaram as montanhas, e a decomposição física e química provocada pela chuva, pelo vento, pelo gelo e pelo calor, ou seja, pelo intemperismo, alteraram todo o material rochoso da Terra.</p>

            <p>Agora temos que nos concentrar em quem leva esses materiais para outros locais e os deposita, isto é, a <span
                    class="termo" data-palavra="Erosão"
                    data-definicao="Processo de desgaste, transporte e remoção dos materiais já alterados pelo intemperismo, realizado pela ação da água, do vento, do gelo ou da gravidade.">erosão</span>.</p>

            <p>A erosão, portanto, trabalha junto com o intemperismo: desgasta e transporta as rochas alteradas, e novas rochas que antes estavam escondidas são expostas, renovando o ciclo de alteração das paisagens.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (tipos de erosao) -->
        <div class="topico">

            <h2>Tipos de erosão</h2>

            <p>Vamos recapitular: o processo de intemperismo quebra as rochas e o solo em pedaços menores, mas não os move. A remoção desse material intemperizado é responsabilidade da erosão.</p>

            <p>Isso pode ser feito através de diversos agentes, como o vento, a água corrente, as geleiras, as chuvas, as correntes oceânicas, as ondas do mar, dentre outros. Os principais estão na <span
                    onclick="Aparecer('imagem11','citacao11')"><mark>figura abaixo:</mark></span></p>

            <div class="area">
                <img alt="Agentes de erosão" class="w3-mobile" id="imagem11" src="tp11f11.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao11" style="display:block"> Fonte: Borrero (2008, p.162, adaptado). </p>

            <p>Quando vemos nossas calçadas repletas de lama vindas de um morro acima, por exemplo, temos aí o transporte e, após isso, a deposição.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (erosao hidrica) -->
        <div class="topico">

            <h2>Erosão hídrica</h2>

            <p>É a gravidade que atua empurrando esses materiais encosta abaixo. A água é um poderoso agente de erosão. Os rios, por exemplo, podem moldar toda uma paisagem e carregar toneladas de sedimentos, como os rios Amazonas, no Brasil, o Nilo, no Egito, ou o Yangtzé, na China. Vejamos essa alteração na <span
                    onclick="Aparecer('imagem12','citacao12')"><mark>ilustração abaixo:</mark></span></p>

            <div class="area">
                <img alt="Evolução de um rio" class="w3-mobile" id="imagem12" src="tp11f12.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao12" style="display:block"> Fonte: Strahler (2013, p.528). </p>

            <p>Na figura acima vemos um determinado rio (número 1), onde o fluxo de água é mais rápido nas cachoeiras e corredeiras. Esses segmentos mais íngremes (inclinados) do rio são rapidamente corroídos. Onde o fluxo do rio diminui (por exemplo, em lagoas e lagos), o sedimento é depositado.</p>

            <p>No número 2, as cachoeiras e corredeiras erodiram até que sua declividade (inclinação para baixo) ficasse mais próxima da declividade média do rio. Já os lagos e lagoas foram drenados e desapareceram.</p>

            <p>O número 3 mostra o rio em uma expansão lateral, erodindo essas encostas e criando um caminho curvo. Começa um depósito de sedimentos clásticos (areia, cascalho ou lama) que se acumula no interior de cada curva. É o chamado aluvião.</p>

            <p>No número 4, à medida que o fluxo continua a erodir as margens, o canal desenvolve meandros extensos.</p>

            <p>Com o tempo, essas curvas, desde a nascente até onde o rio deságua (foz), formam uma planície de inundação, isto é, um terreno plano entre penhascos íngremes. O rio atinge sua maturidade.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (aspectos destrutivos da erosao) -->
        <div class="topico">

            <h2>Aspectos destrutivos da erosão em águas correntes</h2>

            <p>Outro aspecto da erosão causada por enxurradas, rios ou córregos, ou por mau uso do solo, está relacionado às ravinas e voçorocas.</p>

            <p>As <span class="termo" data-palavra="Ravinas e Voçorocas"
                    data-definicao="Canais erodidos pela água corrente nas encostas: as ravinas são de menor escala, enquanto as voçorocas (ou boçorocas) são feições maiores e mais profundas, formadas quando a vegetação não protege mais o solo."><span
                        onclick="Aparecer('imagem13','citacao13')"><mark>ravinas</mark></span></span> ocorrem quando a água corrente erode pequenos canais nas encostas dos córregos e riachos. Elas são normalmente classificadas como de menor escala do que as voçorocas, vales e cânions.</p>

            <div class="area">
                <img alt="Ravina" class="w3-mobile" id="imagem13" src="tp11f13.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao13" style="display:block"> Fonte: meioambiente.culturamix.com </p>

            <p>Quando esses canais erodidos pelas ravinas se tornam mais profundos e extensos, eles evoluem para as voçorocas.</p>

            <p>As <span onclick="Aparecer('imagem14','citacao14')"><mark>voçorocas ou boçorocas</mark></span> são geologicamente um fenômeno que consiste na formação de grandes buracos de erosão, causados pela água da chuva e por intempéries, em solos onde a vegetação não protege mais o solo, que fica cascalhento e suscetível ao carregamento por enxurradas. Ela torna o solo pobre, seco, quimicamente morto e nada fecundo.</p>

            <div class="area">
                <img alt="Voçoroca" class="w3-mobile" id="imagem14" src="tp11f14.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao14" style="display:block"> Fonte: gazetavg.com.br </p>

            <p>Da mesma forma, temos a erosão marinha, realizada pelo movimento constante das ondas do mar, provocando a abrasão dos paredões rochosos no litoral, com a formação das falésias. Essa erosão forma as praias, as restingas e os tômbolos (veremos no capítulo sobre as formas do relevo marinho).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (erosao glacial) -->
        <div class="topico">

            <h2>Erosão Glacial</h2>

            <p>O Planeta já registrou diversas eras do gelo, desde a Pangeia até o Quaternário, sendo que a última era glacial terminou há cerca de 12 mil anos.</p>

            <p>O que é uma geleira?</p>

            <p>Geleiras são massas continentais de gelo de limites definidos, que se movimentam pela ação da gravidade. Originam-se pela acumulação de neve e sua compactação por pressão, transformando-a em gelo <span
                    class="w3-small">(Teixeira, 2009, p.216).</span></p>

            <p>As marcas das geleiras estão visíveis nas paisagens, e seus efeitos erosivos abrangem uma escala elevada.</p>

            <p>As geleiras podem carregar toneladas de sedimentos através de verdadeiros rios de gelo, levando imensas rochas e detritos a longas distâncias. Esses detritos arranham a superfície das rochas, esculpindo vales em forma de U, chamados fiordes, principalmente na região da Escandinávia (Suécia, Noruega e Dinamarca). Veja uma imagem de uma <span
                    class="termo" data-palavra="Erosão Glacial"
                    data-definicao="Desgaste do relevo causado pelo deslocamento lento de geleiras, que esculpem vales em formato de U e transportam grandes volumes de sedimentos (morena)."><span
                        onclick="Aparecer('imagem22','citacao22')"><mark>geleira na Noruega</mark></span></span>.</p>

            <div class="area">
                <img alt="Geleira na Noruega" class="w3-mobile" id="imagem22" src="tp11f22.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao22" style="display:block"> Geleira de Briksdal, Noruega. Fonte: Wikipedia. </p>

            <p>As geleiras têm uma imensa capacidade de erodir a rocha dura, gerando toneladas de sedimentos, geralmente um material escuro, uma mistura de gelo com rochas e lama chamado <em>morena</em>, nas áreas de deposição onde o gelo desemboca nas partes baixas do terreno. <span
                    onclick="Aparecer('imagem15','citacao15')"><mark>Veja na ilustração abaixo:</mark></span></p>

            <div class="area">
                <img alt="Vale glacial em U" class="w3-mobile" id="imagem15" src="tp11f15.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao15" style="display:block"> Fonte: Press (2006, p.403). </p>

            <p>Na figura acima, vemos que, antes da glaciação, um rio montanhoso entalha um vale em forma de "V". Durante a glaciação, a ação do gelo, arrancando e rasgando as rochas, produz uma forma arredondada chamada circo. À medida que a geleira do vale se move para baixo, ela escava um novo vale ou aprofunda o vale existente, originando um vale em U, com paredes abruptas, diferente dos vales erodidos pelos rios montanhosos.</p>

            <p>Após ter visto o processo erosivo da ação da água e das geleiras, veremos como a ação do vento molda as paisagens terrestres.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (erosao eolica) -->
        <div class="topico">

            <h2>Erosão eólica</h2>

            <p>O que é o vento?</p>

            <p>De modo geral, o vento é um fluxo natural de ar em movimento, paralelo à superfície de rotação da Terra. Ou seja, existe vento causado pelo movimento de rotação terrestre e pela diferença de pressão e temperatura na atmosfera (veja o capítulo sobre o clima terrestre).</p>

            <p>É comum utilizar o termo "eólica" para se referir ao trabalho do vento, em referência à mitologia grega, na qual Éolo era o guardião dos ventos e o senhor da ilha Eólia, na Odisseia de Homero.</p>

            <p>Voltando ao tempo presente, a ação do vento é um importante agente de erosão, assim como a água, entretanto de modo um pouco mais lento.</p>

            <p>Os ventos podem mover enormes quantidades de areia, partículas menores chamadas silte e pó, sobre grandes regiões do globo.</p>

            <p>No que diz respeito à erosão, os ventos moldam a superfície terrestre principalmente em zonas áridas, onde não há umidade. Só depois que o intemperismo físico e químico atuou é que o vento pode deslocar essas partículas pelo ar.</p>

            <p>O <span class="termo" data-palavra="Erosão Eólica (Abrasão)"
                    data-definicao="Desgaste das rochas causado pelo vento, que arranca partículas de areia e as lança contra outras superfícies, esculpindo formas como arcos e dunas."><span
                        onclick="Aparecer('imagem16','citacao16')"><mark>vento</mark></span></span> desgasta as rochas e arranca areia desagregada, lançando-a depois sobre outras rochas, processo chamado de <strong>abrasão</strong>.</p>

            <div class="area">
                <img alt="Arco esculpido pelo vento" class="w3-mobile" id="imagem16" src="tp11f16.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao16" style="display:block"> Parque Nacional dos Arcos, Utah, Estados Unidos. Rocha esculpida pela ação do vento formando um arco. Fonte: Wikipedia. </p>

            <p>Já quando o vento transporta areia por longas distâncias e as deposita, acaba por formar <span
                    onclick="Aparecer('imagem17','citacao17')"><mark>dunas</mark></span>.</p>

            <div class="area">
                <img alt="Dunas" class="w3-mobile" id="imagem17" src="tp11f17.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao17" style="display:block"> Fonte: epoca.oglobo.globo.com </p>

            <p>A maioria das dunas é encontrada em climas secos, como desertos, porque o vento não pode transportar material úmido. Deve haver um suprimento de areia solta disponível no local para esse tipo de formação. Ela também apresenta uma angulação devido à direção dos ventos.</p>

            <p>Pode haver também dunas nas regiões costeiras, devido à abundância de areia que é transportada pelo vento rapidamente, sendo que somente em outro momento a vegetação e o solo passam a cobri-la. Nesse caso em específico, em climas úmidos, também pode ocorrer a formação de dunas.</p>

            <p>Além das paisagens formadas pela abrasão e pela deposição, temos os efeitos destrutivos da erosão eólica, principalmente no solo.</p>

            <p>Um dos métodos utilizados nas áreas de cultivo para reduzir a perda da camada superior do solo na agricultura consiste na construção de <span
                    onclick="Aparecer('imagem18','citacao18')"><mark>barreiras de vento</mark></span>. Os quebra-ventos, como são chamados, são árvores plantadas de forma perpendicular, uma ao lado da outra, com o objetivo de formar uma fila ao longo das bordas de uma plantação. Essas barreiras ainda podem ajudar na conservação da umidade, barrar a neve, dependendo do tipo de clima, ou proteger a plantação dos efeitos do vento.</p>

            <div class="area">
                <img alt="Barreiras de vento" class="w3-mobile" id="imagem18" src="tp11f18.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao18" style="display:block"> Fonte: researchgate.net </p>

            <p>Outros seres vivos também participam do processo erosivo, como plantas e animais que vivem movendo a superfície de um local a outro. O exemplo de animais que se enterram no solo, atividades humanas de grandes escavações minerais, construção de rodovias, dentre inúmeras outras atividades.</p>

            <p>Dependendo da organização do território realizada pelos homens, o processo erosivo pode ser evitado ou agravado, produzindo efeitos danosos à sociedade.</p>

            <p>Veremos com mais detalhes os impactos da atividade humana no meio geográfico no capítulo sobre a questão ambiental.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (tempo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Como o tempo influencia o processo de intemperismo?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5a">
                        <span>a) quanto maior o tempo, maior a alteração química e física.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5b">
                        <span>b) quanto maior o tempo, menor a dissolução e menor a desagregação das rochas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) quanto menor o tempo, maior a erosão devido à gravidade.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'acertou, o tempo geológico é muito amplo em relação ao nosso tempo histórico', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (agente formou estrutura) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Que agente de erosão formou esta estrutura e qual processo ocorreu?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6a" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6a">
                        <span>a) gelo, cunhamento.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6b" name="pergunta6" type="radio" value="correto" />
                    <label class="card-opcao" for="p6b">
                        <span>b) vento, abrasão.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6c" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6c">
                        <span>c) água, dissolução.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta6', 'resp6', 'globinho6', 'boa, esse processo pode modelar diversas formas de relevo', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp6"></p>
            <div class="area w3-center">
                <img height="64" id="globinho6" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (ravina) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Trata-se de uma erosão realizada pela ação de córregos e enxurradas. É normalmente classificada como de menor escala do que as voçorocas, vales e cânions.</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p7a" name="pergunta7" type="radio" value="errado" />
                    <label class="card-opcao" for="p7a">
                        <span>a) Erosão marinha.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p7b" name="pergunta7" type="radio" value="correto" />
                    <label class="card-opcao" for="p7b">
                        <span>b) Ravina.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p7c" name="pergunta7" type="radio" value="errado" />
                    <label class="card-opcao" for="p7c">
                        <span>c) Erosão hídrica.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta7', 'resp7', 'globinho7', 'beleza, essa foi tranquila', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp7"></p>
            <div class="area w3-center">
                <img height="64" id="globinho7" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (sedimentacao) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Sedimentação diz respeito:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p8a" name="pergunta8" type="radio" value="errado" />
                    <label class="card-opcao" for="p8a">
                        <span>a) aos movimentos gravitacionais de massa, mobilizando sedimentos, solos e rochas, que ocorrem de modo brusco em morros ou encostas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p8b" name="pergunta8" type="radio" value="errado" />
                    <label class="card-opcao" for="p8b">
                        <span>b) ao conjunto de processos que provocam a alteração e a decomposição das rochas, também chamado de meteorização.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p8c" name="pergunta8" type="radio" value="correto" />
                    <label class="card-opcao" for="p8c">
                        <span>c) ao acúmulo de deposição dos materiais fragmentados de rochas em áreas de baixa altitude.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta8', 'resp8', 'globinho8', 'opa, essa foi fácil!', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp8"></p>
            <div class="area w3-center">
                <img height="64" id="globinho8" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Pergunta pratica (intemperismo biologico) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O intemperismo biológico resulta da decomposição da rocha por processos mecânicos produzidos por vegetais através de suas raízes, escavação de roedores ou quimicamente por meio da ação de algas e bactérias que adentram nas fraturas das rochas.</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p9a" name="pergunta9" type="radio" value="correto" />
                    <label class="card-opcao" for="p9a">
                        <span>a) Verdadeiro.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p9b" name="pergunta9" type="radio" value="errado" />
                    <label class="card-opcao" for="p9b">
                        <span>b) Falso.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta9', 'resp9', 'globinho9', 'ótimo, o intemperismo biológico está relacionado ao físico da mesma forma', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp9"></p>
            <div class="area w3-center">
                <img height="64" id="globinho9" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a relação entre intemperismo e clima?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> O clima influencia diretamente o intemperismo devido à temperatura e à espessura do solo. Em grandes altitudes, uma montanha, por exemplo, o intemperismo químico é baixo, uma vez que a baixa temperatura torna difícil para a água dissolver os minerais das rochas, o que favorece o intemperismo físico pelo gelo. Se há pouca chuva, há pouca água percorrendo as rochas. Em regiões desérticas há muito intemperismo físico; já em regiões tropicais, o intemperismo químico é mais forte. Também, se o relevo é mais íngreme (inclinado), aprofunda a erosão; se o relevo é mais suave, mais plano, favorece o intemperismo químico.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>Qual é o produto do intemperismo?</strong></p>

            <p><span class="primeiraLetra">R:</span>
                Depois que o intemperismo químico e físico atuam para erodir uma superfície rochosa, parte desse material é carregado pelas correntes de água, geleiras ou pelo vento. Outra parte permanece no local, seja em planícies suaves ou em encostas moderadas, ainda com parte da rocha matriz, que pode ser sedimentar, magmática ou metamórfica. Essa superfície, que se assemelha ao terreno da Lua, ainda não tem matéria orgânica suficiente para ser chamada de solo. É o que os geólogos chamam de <span
                    class="termo" data-palavra="Regolito"
                    data-definicao="Camada de material rochoso fragmentado pelo intemperismo que ainda não possui matéria orgânica suficiente para ser considerada solo."><strong>regolito</strong></span>. Com o tempo, uma fina camada de restos de animais, plantas e bactérias formará o <strong>solo</strong>. O solo é um dos principais produtos do intemperismo (temos um capítulo específico sobre solos).
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Os deslizamentos de terra em uma encosta têm a ver com o intemperismo?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Uma vez que o intemperismo alterou e deixou "afrouxado" o solo, a gravidade se encarrega de empurrá-lo ladeira abaixo. Também estão relacionados aos problemas dos deslizamentos nas encostas o clima, a topografia (forma, inclinação e altitude do terreno), o tipo de rocha e solo, e a maneira de ocupação da área pela população do entorno.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. Explique o que são os agentes externos do relevo e dê exemplos de como eles afetam a superfície terrestre.</h3>
                <h3>2. Defina intemperismo e descreva as diferenças entre intemperismo físico e químico.</h3>
                <h3>3. Como o clima influencia o processo de intemperismo? Dê exemplos.</h3>
                <h3>4. Explique como o processo de erosão está relacionado ao intemperismo.</h3>
                <h3>5. Dê exemplos de paisagens formadas pelo intemperismo e explique o processo envolvido.</h3>
                <h3>6. O que são ravinas e voçorocas? Como elas se formam?</h3>
                <h3>7. Como a ação dos seres vivos pode contribuir para o intemperismo físico?</h3>
                <h3>8. Qual a importância do processo de sedimentação para a formação de novas paisagens?</h3>
                <h3>9. Descreva como ocorre a erosão eólica e onde ela é mais comum.</h3>
                <h3>10. Qual é o impacto da erosão no uso do solo para a agricultura?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre intemperismo, erosão e deslizamentos de terra. Agora você sabe que esses processos formam uma cadeia: o intemperismo físico e químico quebra e dissolve a rocha no lugar, a erosão transporta esse material através da água, do vento ou do gelo, e a sedimentação o deposita em outro ponto, dando origem a novas paisagens.</p>

                <p>Você também viu que os mesmos processos que esculpem cavernas, dunas e fiordes ao longo de milhões de anos são os que, em escala humana, causam voçorocas e deslizamentos de encosta. Entender essa dinâmica é essencial para planejar cidades, estradas e áreas de cultivo sem degradar o meio em que vivemos.</p>

                <p><strong>Resumo dos conceitos:</strong> intemperismo físico e químico; amplitude térmica e esfoliação; relevo cárstico; erosão (hídrica, glacial e eólica); ravinas e voçorocas; regolito e sedimentação.</p>

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
      mensagem: 'o tema Dinâmica Externa do Relevo é fascinante! Continue estudando!',
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
