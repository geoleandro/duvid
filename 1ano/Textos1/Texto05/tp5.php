<!DOCTYPE html>

<html lang="pt-br">

<head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Projeções cartográficas: como representar a Terra redonda em um mapa plano" name="description" />
        <meta content="Texto 05 - Projeções Cartográficas" property="og:title" />
        <meta content="Cilíndrica, cônica, plana e as disputas políticas por trás de cada tipo de mapa" property="og:description" />
        <meta content="" property="og:image" />
        <link href="/estilos/index-estilo.css" rel="stylesheet" />
        <link href="/estilos/w3.css" rel="stylesheet" />
        <link href="/estilos/navbar.css" rel="stylesheet" />
        <link href="/estilos/rpg-sistema.css" rel="stylesheet" />
        <link href="/estilos/ModeloCss.css" rel="stylesheet" />
        <link href="/estilos/texto-estilo.css" rel="stylesheet" />
        <link href="/estilos/explicacaoPalavra.css" rel="stylesheet" />
        <link href="/fotoIndex/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
        <script async="" crossorigin="anonymous"
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"></script>
        <script defer="" src="/js/duvid-cache.js"></script>
        <script defer="" src="/js/duvid-db.js"></script>
        <script defer="" src="/js/duvid-audio.js"></script>
        <script defer="" src="/js/duvid-ui.js"></script>
        <script defer="" src="/js/duvid-core.js"></script>
        <script defer="" src="/estilos/jstextos-padrao.js"></script>
        <script defer="" src="/js/abrirmenu.js"></script>
        <script defer="" src="/js/carregar.js"></script>
        <script defer="" src="/js/aulas-geral.js"></script>
        <script defer="" src="/js/glossario.js"></script>
        <script defer="" src="/js/texto-painel.js"></script>
        <title>1º ano - Texto 05</title>
</head>

<body>
        <?php include __DIR__ . '/../../../includes/header.php'; ?>
        <div class="w3-margin-top" id="aviso-status"></div>
        <main class="w3-content w3-white w3-card-2 w3-padding-large w3-margin-bottom" style="max-width:750px">
                <!-- BLOCO: Abertura -->
                <div class="topico">
                        <div class="w3-padding-top-48"></div>
                        <h1 id="h1"></h1>
                        <!-- Futuro audio -->
                        <div
                                class="w3-panel w3-light-grey w3-leftbar w3-border-green w3-round-large w3-padding-16 w3-margin-top">
                                <div class="w3-row">
                                        <div class="w3-col s2 m1 w3-center">
                                                <i class="fa fa-headphones w3-xxlarge w3-text-green"></i>
                                        </div>
                                        <div class="w3-col s10 m11 w3-padding-small">
                                                <b class="fontePixel">OUVIR AULA</b>
                                                <p class="w3-small w3-margin-0">Aperte o play e acompanhe a leitura com
                                                        narração exclusiva.</p>
                                        </div>
                                </div>
                                <audio controls="" style="width:100%; margin-top: 10px;">
                                        <source id="audioSource" src="" type="audio/mp3" />
                                </audio>
                        </div>
                        <div class="w3-container w3-padding-16">
                                <p><strong>Conteúdo: </strong><span id="descricao-aula"></span></p>
                                <p><strong>Objetivo:</strong> <span id="objetivo-aula"></span></p>
                        </div>
                        <button class="btnShow"
                                onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                                <i class="fa fa-play"></i> Iniciar Aula
                        </button>
                        <hr />
                </div>
                <!-- BLOCO: Pratica Social Inicial -->
                <div class="topico">
                        <p class="caixa"> Agora é com você!</p>
                        <div class="w3-panel w3-pale-green">
                                <p class="w3-pale-green">Você já reparou que, em muitos mapas-múndi, a Groenlândia parece quase do tamanho da África? Na realidade, a África é cerca de 14 vezes maior que a Groenlândia.</p>
                                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: por que você acha que um mapa, feito para representar o mundo real, pode mostrar um país maior ou menor do que ele realmente é? Guarde sua resposta, vamos retomá-la no final da aula.</p>
                        </div>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>
                <!-- BLOCO: Problematizacao -->
                <div class="topico">
                        <h2> Introdução </h2>
                        <p> <span class="primeiraLetra">N</span>a aula passada, vimos a importância da escala
                                cartográfica e geográfica para representarmos a realidade através dos mapas. </p>
                        <p>Agora, do ponto de vista global, veremos como projetar o globo terrestre (que possui uma
                                forma de esfera) em um plano. O caminho para se tornar um explorador do espaço
                                geográfico é árduo, mas
                                também é gratificante.</p>
                        <p> As projeções cartográficas realizam essa transformação da realidade tridimensional em
                                planos bidimensionais. Vamos conhecer os diferentes tipos de projeções, seu impacto na
                                descoberta de novas
                                áreas pelo Planeta e aprofundar no estudo sobre a produção cartográfica.</p>
                        <p><strong>Esta aula responde a uma pergunta que parece só técnica, mas é também política: como transformar um globo redondo em um mapa plano sem mentir sobre o tamanho, a forma ou a posição dos países, e quem decide o que vale a pena distorcer.</strong></p>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>
                <!-- BLOCO: Instrumentalizacao (o que e projecao cartografica) -->
                <div class="topico">
                        <h2> <strong>O que é uma projeção cartográfica?</strong></h2>
                        <p>Já sabemos alguns elementos dos mapas, como o título, a legenda, a escala, até fizemos uma
                                planta da escola! Agora, vamos discutir o problema de representar algo que é 3D em uma
                                folha, por exemplo,
                                que é 2D, ou possui somente duas dimensões. </p>
                        <p>Os cartógrafos quebraram a cabeça para tornarem os mapas os mais fiéis possíveis à
                                realidade. Para isso, utilizaram bastante a Matemática com diversos cálculos. Utilizaram
                                as coordenadas
                                geográficas para poder representar a superfície terrestre em um mapa. Tudo isso está
                                ligado as projeções
                                cartográficas. </p>
                        <p><span class="termo" data-palavra="Projeção Cartográfica"
                                        data-definicao="Método matemático para representar a superfície esférica da Terra em um plano (o papel ou a tela). Toda projeção envolve algum tipo de distorção: nenhuma consegue preservar ao mesmo tempo forma, área, distância e direção."><strong>Projeções
                                                cartográficas</strong></span> - Constituem métodos
                                matemáticos
                                para se projetar uma esfera em um plano. Uma região de escala grande como um município
                                ao ser representada
                                em um mapa não sofre muitas distorções. Entretanto, para representar um mapa-múndi, há
                                muitas dificuldades
                                em manter as formas dos continentes, sua área e posições sem distorcê-los. Há diversos
                                tipos de se projetar
                                uma esfera em um plano: </p>
                        <p> A ideia principal é <span onclick="Aparecer('imagem1','citacao1')"><mark>esta:</mark></span>
                        </p>
                        <img alt="tp5f1" class="w3-mobile" id="imagem1" src="tp5f1.png" style="display:none" />
                        <span class="citacao" id="citacao1" style="display:none"> Fonte: Organizado pelo
                                autor.
                        </span>
                        <p> A partir desse modelo são projetados pontos possíveis da superfície terrestre. São mais de
                                200 tipos de projeções.</p>
                        <p>Uma forma simples de sentir esse problema na prática é imaginar a casca de uma laranja.
                                Se você descascar uma laranja inteira, em uma tira só, e tentar deixar essa casca
                                completamente lisa sobre uma mesa, ela vai rasgar em vários pontos ou ficar com
                                dobras, porque a superfície de uma esfera simplesmente não cabe, sem se deformar, em
                                um plano. É exatamente esse conflito geométrico que toda projeção cartográfica
                                precisa resolver, escolhendo onde "esticar" ou "cortar" a casca da laranja para que
                                ela pareça inteira no papel.</p>
                        <p>Os cartógrafos têm até uma ferramenta para medir e visualizar essas distorções em
                                qualquer ponto do mapa: a <span class="termo" data-palavra="Indicatriz de Tissot"
                                        data-definicao="Ferramenta criada pelo matemático francês Nicolas Auguste Tissot, no século XIX, para medir a distorção de uma projeção cartográfica. Consiste em desenhar pequenos círculos sobre o globo e observar em que formato de elipse eles aparecem depois de projetados: quanto mais a elipse se afasta de um círculo perfeito, maior a distorção naquele ponto do mapa."><strong>indicatriz
                                        de Tissot</strong></span>. Ela consiste em espalhar pequenos círculos
                                idênticos sobre o globo e observar o que acontece com eles depois da projeção: em uma
                                projeção conforme, como a de Mercator, esses círculos continuam círculos em qualquer
                                ponto do mapa, só que de tamanhos bem diferentes perto dos polos; em uma projeção
                                equivalente, como a de Peters, os círculos viram elipses esticadas, mas todas com a
                                mesma área. É uma maneira visual e direta de provar que nenhuma projeção escapa de
                                uma distorção ou de outra.</p>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>
                <!-- BLOCO: Instrumentalizacao (tipos de projecao) -->
                <div class="topico">
                        <h2> <strong>Quais os tipos de projeções existentes?</strong></h2>
                        <p>Existem três tipos básicos de projeções cartográficas: a <strong>cilíndrica</strong>, a
                                <strong>cônica</strong> e a <strong> plana</strong> ou azimutal, conforme as imagens
                                <span onclick="Aparecer('imagem2','citacao2')"><mark>abaixo:</mark></span>
                        </p>
                        <div class="area"><img alt="tp5f2" class="w3-mobile" id="imagem2" src="tp5f2.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao2" style="display:none"> Fonte: Fonte: Moreira e Sene
                                (2016, p. 60).
                        </span>
                        <p> Observe que na projeção <span class="termo" data-palavra="Projeção Cilíndrica"
                                        data-definicao="Tipo de projeção em que o globo terrestre parece estar envolvido por um cilindro de papel, sobre o qual são projetados os paralelos e os meridianos. É a base da projeção de Mercator, a mais usada em mapas-múndi."
                                        onclick="Aparecer('imagem3','citacao3')">cilíndrica</span> o
                                globo terrestre parece estar
                                envolvido por um cilindro de papel no qual são projetados os paralelos e os meridianos.
                        </p>
                        <div class="area"><img alt="tp5f3" class="w3-mobile" id="imagem3" src="tp5f3.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao3" style="display:none"> Fonte: Moreira e Sene (2016,
                                p. 60). </span>
                        <p> Na projeção <span class="termo" data-palavra="Projeção Plana (Azimutal)"
                                        data-definicao="Tipo de projeção em que a Terra é tangenciada por um plano de papel em um único ponto, que se torna o centro do mapa. As distorções são mínimas perto do centro e aumentam à medida que se afasta dele."
                                        onclick="Aparecer('imagem4','citacao4')">azimutal ou plana</span>,a Terra
                                parece ser tangenciada em
                                qualquer ponto por um pedaço de papel no qual são projetados os paralelos e os
                                meridianos. Quando o globo é
                                tangenciado num dos polos, dizemos que se trata de uma projeção polar.</p>
                        <div class="area"><img alt="tp5f4" class="w3-mobile" id="imagem4" src="tp5f4.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao4" style="display:none"> Fonte: Fonte: Moreira e Sene
                                (2016, p. 60).
                        </span>
                        <p> Já na projeção <span class="termo" data-palavra="Projeção Cônica"
                                        data-definicao="Tipo de projeção em que o globo parece estar envolvido por um cone de papel, sobre o qual são projetados os paralelos (que viram círculos) e os meridianos (que viram retas convergentes). Usada principalmente para países de latitude intermediária."
                                        onclick="Aparecer('imagem5','citacao5')">cônica</span>,
                                o globo parece estar envolvido por um cone de papel no qual são projetados os paralelos
                                e os meridianos.
                        </p>
                        <div class="area"><img alt="tp5f5" class="w3-mobile" id="imagem5" src="tp5f5.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao5" style="display:none"> Fonte: Organizado pelo
                                autor.
                        </span>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>
                <div class="topico pergunta-bloco w3-container w3-padding-24">
                        <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
                        <h4 class="fontePixel"><b>Quais são os três tipos principais de projeções cartográficas?</b>
                        </h4>
                        <div class="grupo-respostas w3-margin-top">
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p1a" name="pergunta1" type="radio"
                                                value="errado" />
                                        <label class="card-opcao" for="p1a">
                                                <span>a) Cilíndrico, perpendicular e cônico.</span>
                                        </label>
                                </div>
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p1b" name="pergunta1" type="radio"
                                                value="correto" />
                                        <label class="card-opcao" for="p1b">
                                                <span>b) Cilíndrico, plano ou azimutal e cônico.</span>
                                        </label>
                                </div>
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p1c" name="pergunta1" type="radio"
                                                value="errado" />
                                        <label class="card-opcao" for="p1c">
                                                <span>c) Cilíndrico, cônico e esférico.</span>
                                        </label>
                                </div>
                        </div>
                        <div class="w3-margin-top">
                                <button class="btn-acao-duvid"
                                        onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'legal, essa foi bem fácil, ganhou seu primeiro globinho. Este é, aliás, a projeção mais próxima da realidade que temos', '10')">
                                        Confirmar Resposta
                                </button>
                        </div>
                        <p class="w3-center w3-padding w3-large" id="resp1"></p>
                        <div class="area w3-center">
                                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png"
                                        style="display:none" width="64" />
                        </div>
                </div>
                <div class="topico">
                        <h2> As projeções distorcem a realidade?</h2>
                        <p>Sabemos que todo mapa é uma representação aproximada do espaço terrestre, na medida que
                                depende do objetivo de o pesquisador escolher o que representar. Por isso que a escolha
                                do tipo de projeção
                                já direciona a leitura do mundo e valoriza algum aspecto da realidade. </p>
                        <p> O globo terrestre não possui distorções, pois mostra diretamente como é na realidade o
                                Planeta. Sua desvantagem é que, na prática, é difícil ter uma visão do todo ao mesmo
                                tempo.<span onclick="Aparecer('imagem6','citacao6')"><mark> Veja aqui:</mark></span></p>
                        <div class="area"><img alt="tp5f6" class="w3-mobile" id="imagem6" src="tp5f6.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao6" style="display:none"> Fonte: Carvalho e Araújo
                                (2011). </span>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>
                <div class="topico pergunta-bloco w3-container w3-padding-24">
                        <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
                        <h4 class="fontePixel"><b>Toda projeção cartográfica, ao transformar a esfera terrestre em um mapa plano, tem como consequência:</b></h4>
                        <div class="grupo-respostas w3-margin-top">
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p2a" name="pergunta2" type="radio"
                                                value="errado" />
                                        <label class="card-opcao" for="p2a">
                                                <span>a) permitir representar fielmente a realidade com todos seus
                                                        detalhes.</span>
                                        </label>
                                </div>
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p2b" name="pergunta2" type="radio"
                                                value="errado" />
                                        <label class="card-opcao" for="p2b">
                                                <span>b) gerar distorções em todo o mapa.</span>
                                        </label>
                                </div>
                                <div class="item-resposta">
                                        <input class="radio-duvid" id="p2c" name="pergunta2" type="radio"
                                                value="correto" />
                                        <label class="card-opcao" for="p2c">
                                                <span>c) gerar distorções em algumas áreas do mapa.</span>
                                        </label>
                                </div>
                        </div>
                        <div class="w3-margin-top">
                                <button class="btn-acao-duvid"
                                        onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Legal, essa foi bem fácil, ganhou seu primeiro globinho', '10')">
                                        Confirmar Resposta
                                </button>
                        </div>
                        <p class="w3-center w3-padding w3-large" id="resp2"></p>
                        <div class="area w3-center">
                                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png"
                                        style="display:none" width="64" />
                        </div>
                </div>
                <div class="topico">
                        <h2> <strong>Projeções Cilíndricas</strong> </h2>
                        <h3> Projeção de Mercator</h3>
                        <p> A projeção mais famosa utilizada até hoje foi elaborada pelo cartógrafo, matemático e
                                geógrafo flamengo Gerardus Mercator na segunda metade do século XVI (mais precisamente em 1569; Flandres, sua região natal, corresponde hoje a parte do território da Bélgica). </p>
                        <p>Ela é perfeita para navegação, principalmente nas regiões intertropicais (entre os trópicos
                                de Câncer e de Capricórnio) pois as direções podem ser traçadas em linhas retas sobre o
                                mapa. <span onclick="Aparecer('imagem7','citacao7')"><mark>Veja abaixo:</mark></span>
                        </p>
                        <div class="area"><img alt="tp5f7" class="w3-mobile" id="imagem7" src="tp5f7.png"
                                        style="display:none" />
                        </div>
                        <span class="citacao" id="citacao7" style="display:none"> Fonte: Fonte: Wikipedia.
                        </span>
                        <div class="w3-panel w3-leftbar w3-light-grey">
                                <p> <strong>Principais características</strong>:</p>
                                <ul>
                                        <li>
                                                <p>Apresenta paralelos retos e horizontais e os meridianos retos e
                                                        verticais;</p>
                                        </li>
                                        <li>
                                                <p>Possui uma deformação exagerada nas regiões de elevadas latitudes;
                                                </p>
                                        </li>
                                        <li>
                                                <p>é a mais utilizada para representação total da Terra
                                                        <em>(mapas-múndi)</em>.
                                                </p>
                                        </li>
                                        <li>
                                                <p>é <span class="termo" data-palavra="Projeção Conforme"
                                                                data-definicao="Tipo de projeção que preserva os ângulos e as formas dos continentes, mas distorce a área (o tamanho proporcional dos países). A projeção de Mercator é o exemplo mais conhecido.">conforme</span>,
                                                        isto é, preserva os ângulos e formas dos
                                                        continentes,
                                                        mas distorce a área (a proporção do tamanho dos países).</p>
                                        </li>
                                </ul>
                        </div>
                        <p> As distorções visíveis podem ser observadas no tamanho da Groelândia, por exemplo, em
                                comparação à da América do Sul. Como a Groenlândia está situada em altas latitudes, a
                                distorção é maior.
                                Outra deformidade ocorre na Antártida, deixando-a com uma área bem maior. Por outro
                                lado, o contorno dos
                                continentes é bem desenhado e de fácil visualização.</p>
                        <p> Essa projeção foi muito utilizada na época da expansão marítima do século XVI e reflete a
                                visão eurocêntrica do mundo, ou seja, tendo a Europa no “centro de visão” do mapa.
                                (Faria, 2016).</p>
                        <p>Os mapas carregam as ideologias e a cultura de quem os produziu. Ele revela, nesse caso, o
                                contexto de domínio de um grupo ou nação sobre outra, resumindo: a geopolítica. Não é à
                                toa que esse tipo de
                                mapa com a Europa no centro serviu para alimentar durante séculos a ideia na qual os
                                países “de cima” são
                                superiores aos “de baixo”. Mas nem todas as projeções seguem essas ideias deterministas.
                        </p>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <br />
                        <hr />
                </div>

                <!-- BLOCO: Web Mercator -->
                <div class="topico">

                        <h2> <strong>As projeções no seu bolso: por que o Google Maps também distorce</strong></h2>

                        <p>Lembra da pergunta do começo da aula, sobre a Groenlândia parecer quase do tamanho da
                                África? Isso não é só um problema de mapa de parede antigo. Abra agora o Google Maps,
                                o Waze ou o Bing Maps no seu celular e afaste o zoom até ver o planeta inteiro: a
                                Groenlândia continua enorme, maior do que deveria.</p>

                        <p>Isso acontece porque quase todo mapa digital que você usa no dia a dia roda sobre uma
                                variação da projeção de Mercator, chamada de <span class="termo"
                                        data-palavra="Web Mercator"
                                        data-definicao="Variação simplificada da projeção de Mercator, adotada como padrão por quase todos os mapas digitais (Google Maps, Bing Maps, OpenStreetMap, Waze). Preserva os ângulos e facilita a matemática do sistema de blocos de imagem (tiles) usado pelos aplicativos, mas herda a mesma distorção de área da Mercator original, exagerando o tamanho de países próximos aos polos."><strong>Web
                                        Mercator</strong></span>. A escolha não foi ideológica, foi prática: como
                                você aprendeu na aula passada, mapas digitais organizam o mundo em blocos de imagem
                                (tiles) que precisam se encaixar perfeitamente em cada nível de zoom, e a matemática
                                da Mercator torna esse encaixe muito mais simples de programar do que a de qualquer
                                projeção equivalente.</p>

                        <p>O problema é que a Web Mercator herdou também o defeito da Mercator original: quanto mais
                                perto dos polos, maior a distorção de área. Foi por isso que, em 2018, o Google Maps
                                passou a mostrar o planeta como um globo 3D em vez de um mapa achatado sempre que o
                                usuário afasta bastante o zoom, uma forma de corrigir visualmente essa distorção sem
                                abandonar a Web Mercator nos níveis de zoom mais próximos, onde ela funciona bem para
                                navegação.</p>

                        <p>Ou seja: a mesma escolha entre preservar ângulo ou preservar área que Mercator fez em
                                1569 continua, até hoje, escondida dentro do aplicativo de mapas que você usa para
                                chegar a um lugar novo. É um bom lembrete de que uma decisão cartográfica de quase
                                500 anos atrás ainda molda, sem que a maioria dos usuários perceba, a forma como
                                bilhões de pessoas enxergam o tamanho relativo dos países todos os dias, direto na
                                tela do celular.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>
                </div>


                <div class="topico">


                        <h2> Projeção de Peters</h2>

                        <p> Na década de 1970, após muitas outras projeções terem sido realizadas, o historiador e
                                cartógrafo Arno Peters aperfeiçoou a projeção cilíndrica de James Gall do final do
                                século XIX e elaborou uma
                                projeção que preservava as áreas dos continentes, o qual ficou conhecida como <span
                                        class="termo" data-palavra="Projeção Equivalente"
                                        data-definicao="Tipo de projeção que preserva as áreas reais dos continentes (o tamanho proporcional), mesmo distorcendo suas formas. É o oposto da projeção conforme, que preserva forma mas distorce área."
                                        onclick="Aparecer('imagem8','citacao8')">projeção
                                                equivalente</span>. </p>

                        <div class="area"><img id="imagem8" src="tp5f8.png" alt="tp5f8" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao8" style=display:none> Fonte: Wikipedia. </span>


                        <p>Nessa projeção há um destaque aos países de baixas latitudes, uma vez que buscou preservar
                                suas áreas (tamanho) originais. Por outro lado, atendeu aos interesses dos Estados que
                                se tornaram
                                independentes após a Segunda Guerra Mundial (1939-1945) e que, nesse período, eram
                                considerados
                                subdesenvolvidos, a maioria desses países estão, de fato, na parte sul do globo. Foi
                                considerada uma das
                                formas para romper com uma visão colonialista do mundo. </p>

                        <p> Percebe-se um alongamento dos continentes no sentido norte-sul. A Groenlândia nesse mapa,
                                agora aparece bem menor que o Brasil e a África.</p>



                        <div class="w3-panel w3-leftbar w3-light-grey">

                                <p> <strong>Principais características</strong>:</p>

                                <ul>


                                        <li>
                                                <p>Altera as formas para manter as reais proporções dos continentes;</p>
                                        </li>

                                        <li>
                                                <p>Apesar de deformar as áreas, procura mantê-las mais próximas do
                                                        tamanho real;
                                                </p>
                                        </li>

                                        <li>
                                                <p>Destaca o continente africano no centro;</p>
                                        </li>

                                        <li>
                                                <p>Propõe a valorização do mundo subdesenvolvido, mostrando sua área
                                                        real.</p>
                                        </li>


                                </ul>
                        </div>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>


                </div>

                <!-- BLOCO: Controversia Mercator x Peters -->
                <div class="topico">

                        <h2> <strong>A controvérsia Mercator x Peters: um mapa pode ser político?</strong></h2>

                        <p>Em março de 2017, a rede de escolas públicas de Boston, nos Estados Unidos, anunciou que
                                ia substituir a projeção de Mercator pela de Peters nos mapas-múndi usados em sala de
                                aula. Segundo a própria rede, 86% dos estudantes eram negros, latinos ou de outras
                                minorias étnicas, e a troca fazia parte de um esforço para "descolonizar" o currículo,
                                mostrando África e América do Sul no seu tamanho real, e não achatadas pela distorção
                                da Mercator. Foi a primeira rede escolar pública dos Estados Unidos a fazer essa
                                mudança, e o caso virou notícia internacional.</p>

                        <p>A decisão também gerou controvérsia entre os próprios cartógrafos. A crítica principal é
                                que a projeção de Peters resolve o problema da área só para criar outro: perto dos
                                polos, os continentes ficam esticados e alongados, com um formato que muita gente
                                descreve como "enrugado" ou "espremido", bem diferente do contorno que aparece em um
                                globo de verdade. Ou seja, trocar Mercator por Peters não elimina a distorção, só
                                troca qual tipo de distorção o mapa vai carregar, e para qual público ela vai
                                incomodar mais.</p>

                        <p>Essa insatisfação com as duas opções motivou, em 2018, três cartógrafos (Bojan Šavrič,
                                Tom Patterson e Bernhard Jenny) a criarem uma nova projeção equivalente chamada
                                <span class="termo" data-palavra="Projeção Equal Earth"
                                        data-definicao="Projeção cartográfica equivalente criada em 2018 por Bojan Šavrič, Tom Patterson e Bernhard Jenny, inspirada na Robinson. Preserva as áreas reais dos continentes, como a Peters, mas com formas mais suaves e próximas do globo, sem o efeito 'esticado' nos polos.">Equal
                                        Earth</span>. Ela preserva as áreas reais dos continentes, como a Peters, mas
                                com contornos bem mais suaves e parecidos com os do globo, sem o efeito "esticado".
                                Foi adotada rapidamente por instituições científicas como o Instituto Goddard de
                                Estudos Espaciais da NASA e vem, aos poucos, substituindo a Peters em materiais
                                didáticos e científicos mais recentes.</p>

                        <p>O episódio de Boston mostra bem o que esta aula quer que você leve: escolher uma
                                projeção não é uma decisão puramente técnica, é também uma escolha sobre qual
                                distorção parece mais aceitável, e para quem. Não existe mapa neutro, existe mapa com
                                as distorções que alguém, em algum momento, decidiu que valiam a pena, seja um
                                cartógrafo do século XVI, seja uma secretaria de educação no século XXI.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>

                <div class="topico">


                        <h2> <strong>Projeções Planas ou Azimutais</strong></h2>


                        <p>A projeção plana ocorre quando um plano toca um ponto (tangencia) do globo para

                                <span onclick="Aparecer('imagem9','citacao9')"><mark>mapeá-lo.</mark></span>
                        </p>

                        <div class="area"><img id="imagem9" src="tp5f9.png" alt="tp5f9" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao9" style=display:none> Fonte: Organizado pelo autor.
                        </span>

                        <p> Os pontos que não tocam o plano são prolongados e daí que surgem as distorções. Nessa
                                projeção, qualquer ponto do globo pode ser tornar o centro do mapa. Nesse caso, as
                                distorções se aproximam
                                de zero. À medida em que nos afastamos do centro da projeção, as distorções aumentam
                                bastante
                                (sistematicamente).</p>


                        <p><span onclick="Aparecer('imagem10','citacao10')"><mark>Veja</mark></span> esse exemplo em
                                que o <strong>centro da projeção</strong> é o encontro da latitude 0º e da longitude 0º.
                        </p>



                        <div class="area"><img id="imagem10" src="tp5f10.png" alt="tp5f10" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <p class="citacao" id="citacao10" style=display:none> Fonte: Organizado pelo autor.
                        </p>

                        <p>Ou uma projeção plana da

                                <span onclick="Aparecer('imagem11','citacao11')"><mark>América do Norte.</mark></span>
                        </p>


                        <div class="area"><img id="imagem11" src="tp5f11.png" alt="tp5f11" class="w3-mobile"
                                        style=display:none>
                        </div>

                        <span class="citacao" id="citacao11" style=display:none> Fonte: Organizado pelo autor.
                        </span>



                        <p> Essa projeção está muito ligada a geopolítica (as relações de poder entre as nações), pois
                                o cartógrafo pode direcionar o centro das atenções para qualquer território no mundo.
                        </p>


                        <p>Também é muito utilizada para navegações aérea e marítima. A Organização das Nações Unidas
                                – <span onclick="Aparecer('imagem12','citacao12')"><mark>ONU</mark></span> a utiliza
                                como seu mapa-símbolo.
                                Na época da Guerra Fria, esse tipo de projeção era utilizado para representar o mundo
                                bipolar, isto é, a
                                antiga divisão entre Estados Unidos e União Soviética. </p>




                        <div class="area"><img id="imagem12" src="tp5f12.png" alt="tp5f12" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao12" style=display:none> Fonte: Wikipedia. </span>


                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>

                <div class="topico">



                        <h2> <strong>Projeções cônicas</strong></h2>


                        <p>A projeção <span onclick="Aparecer('imagem13','citacao13')"><mark>cônica</mark></span>
                                ocorre a partir de um cone imaginário em que os meridianos formam uma rede de linhas
                                retas, que convergem
                                (que vão para um local em comum) para um ponto, e os paralelos formam círculos
                                concêntricos (com o mesmo
                                centro, um dentro do outro). </p>

                        <div class="area"><img id="imagem13" src="tp5f13.png" alt="tp5f13" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao13" style=display:none> Fonte: Organizado pelo autor.
                        </span>


                        <div class="w3-panel w3-leftbar w3-light-grey">
                                <p><strong>Principais características</strong>: </p>
                                <ul>
                                        <li>Apresenta paralelos circulares e meridianos radiais, isto é, retas que se
                                                originam de um
                                                único ponto;
                                        </li>
                                        <li>É usado principalmente para representar países ou regiões de latitudes
                                                intermediarias (não
                                                diretamente nos polos ou no equador), mas pode ser usada por outras
                                                latitudes.
                                        </li>
                                </ul>
                        </div>

                        <p>A variante mais usada na prática é a projeção cônica conforme de Lambert, criada pelo
                                matemático alemão Johann Heinrich Lambert em 1772. Ela funciona melhor em regiões com
                                grande extensão no sentido leste-oeste e pouca no sentido norte-sul, exatamente o
                                formato de países como os Estados Unidos: por isso é a projeção oficial usada nas
                                cartas do sistema de coordenadas estaduais americano e em boa parte das cartas de
                                navegação aérea do mundo todo, onde a precisão de ângulos e distâncias curtas importa
                                mais do que representar o planeta inteiro. Bélgica e Estônia também adotam a Lambert
                                como projeção cartográfica oficial de seus territórios.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>

                <!-- BLOCO: Mapas tematicos -->
                <div class="topico">

                        <h2> <strong>Mapas temáticos: além da localização</strong></h2>

                        <p>Até aqui, os mapas desta aula tinham um objetivo principal: mostrar onde as coisas
                                estão, os contornos dos continentes, países, oceanos. Esse tipo de mapa se chama mapa
                                de localização ou mapa geral. Mas existe outra categoria enorme de mapas, os <span
                                        class="termo" data-palavra="Mapa Temático"
                                        data-definicao="Mapa que representa a distribuição espacial de um fenômeno específico (população, renda, clima, votos, doenças) sobre uma base cartográfica, em vez de mostrar apenas a localização geral de um território."><strong>mapas
                                        temáticos</strong></span>, que usam a base geográfica só como pano de fundo
                                para mostrar a distribuição espacial de um assunto específico: renda, clima, votos
                                em uma eleição, casos de uma doença, desmatamento.</p>

                        <p>Existem algumas formas clássicas de construir um mapa temático. O <span class="termo"
                                        data-palavra="Mapa Coroplético"
                                        data-definicao="Mapa temático em que cada área (país, estado, município) recebe uma cor ou tonalidade diferente conforme a intensidade de uma variável, como renda, IDH ou densidade demográfica. Quanto mais escura a cor, geralmente maior o valor representado."><strong>mapa
                                        coroplético</strong></span> pinta cada área (um país, um estado, um
                                município) com uma cor ou tonalidade diferente, de acordo com a intensidade de uma
                                variável: quanto mais escura a cor de um estado brasileiro em um mapa de IDH, por
                                exemplo, maior costuma ser o índice ali. É o tipo de mapa temático mais comum em
                                provas e livros didáticos.</p>

                        <p>Já o mapa de símbolos proporcionais usa círculos, quadrados ou outros ícones de tamanho
                                variável sobre cada local, como bolhas maiores sobre as cidades mais populosas de um
                                mapa do Brasil. O mapa de fluxo usa setas, com espessura proporcional ao volume, para
                                mostrar o deslocamento de pessoas, mercadorias ou capital entre dois pontos, como as
                                rotas de migração ou de comércio internacional. E o mapa de isolinhas conecta, com
                                uma linha, todos os pontos que têm exatamente o mesmo valor de uma variável, o
                                exemplo mais conhecido são as isotermas (mesma temperatura) e as isóbaras (mesma
                                pressão atmosférica) dos mapas de previsão do tempo.</p>

                        <p>Qualquer um desses formatos pode ser desenhado sobre qualquer uma das projeções que você
                                acabou de estudar, cilíndrica, cônica ou plana. A escolha da projeção e a escolha de
                                como representar o tema são duas decisões independentes, mas as duas, juntas, moldam
                                a mensagem final do mapa.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>



                <div class="topico">


                        <h2> Anamorfoses</h2>

                        <p>
                                Existem outros tipos de mapas que não chegam a ser uma projeção cartográfica, mas sim
                                mapas temáticos que
                                distorcem as áreas dos continentes ou países de acordo com as informações que norteiam o
                                mapa.
                        </p>

                        <p> São chamadas de <span class="termo" data-palavra="Anamorfose Geográfica"
                                        data-definicao="Mapa temático (não é uma projeção cartográfica tradicional) em que cada país é redesenhado com o polígono deformado proporcionalmente a um tema escolhido, como população, PIB ou consumo de energia.">anamorfose
                                        geográfica</span>, em que cada país é redesenhado de
                                forma que seu polígono sofre uma deformação proporcional a um tema como a população dos
                                países, ou outra
                                variável.</p>

                        <p> Exemplo: a Índia, hoje o país mais populoso do mundo, com cerca de 1,48 bilhão de
                                pessoas, e a China, em segundo lugar, com cerca de 1,4 bilhão, aparecem como os
                                maiores polígonos no <span
                                        onclick="Aparecer('imagem15','citacao15')"><mark>mapa.</mark></span> </p>

                        <div class="area"><img id="imagem15" src="tp5f15.png" alt="tp5f15" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao15" style=display:none> Fonte: Organizado pelo autor.
                        </span>

                        <p>Nesse mapa, por exemplo, o Paquistão, que tem uma área de cerca de 796.100 km², muito
                                menor do que a do Brasil (8.515.759 km²), possui sua forma aumentada, porque sua
                                população (cerca de 255 milhões) já é maior do que a população brasileira (cerca de
                                213 milhões). </p>

                        <p> Já com a Rússia ocorre o inverso: com uma área territorial de 17.098.250 km², quase o
                                dobro da área do Brasil, teve seu polígono deformado e bastante diminuído, porque sua
                                população (cerca de 144 milhões) é bem menor do que a do Brasil, uma diferença de
                                quase 70 milhões de pessoas.</p>

                        <p>Anamorfoses aparecem com frequência na cobertura de eleições nos Estados Unidos: um mapa
                                comum colore cada estado americano de vermelho ou azul conforme o partido vencedor,
                                mas, como estados como Wyoming ou Dakota do Norte têm imensa área e pouquíssima
                                população, esse mapa tradicional exagera visualmente a força do partido que venceu
                                nos estados mais vazios. Por isso, veículos de imprensa costumam publicar, ao lado do
                                mapa comum, uma anamorfose eleitoral, redesenhando cada estado proporcionalmente ao
                                número de votos ou de deputados que ele elege, uma forma bem mais honesta de mostrar
                                a real força de cada partido no país.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>

                <!-- BLOCO: Como escolher a projecao -->
                <div class="topico">

                        <h2> <strong>Como escolher a projeção certa?</strong></h2>

                        <p>Depois de conhecer as principais projeções, fica mais fácil responder a uma pergunta bem
                                prática: qual delas usar? A resposta depende inteiramente do objetivo de quem está
                                fazendo o mapa.</p>

                        <p>Para navegação marítima ou aérea, em que é essencial traçar uma rota em linha reta e
                                manter os ângulos corretos, a escolha é uma projeção conforme, como a de Mercator: é
                                por isso que ela sobrevive até hoje, mais de 450 anos depois de criada, tanto em
                                cartas náuticas quanto escondida dentro dos aplicativos de navegação por GPS.</p>

                        <p>Para comparar o tamanho real de países ou continentes, como em um mapa sobre
                                desmatamento, área plantada ou extensão de um deserto, a escolha correta é uma
                                projeção equivalente, como a de Peters ou a Equal Earth, já que preservar a área é
                                exatamente o que a pergunta exige.</p>

                        <p>Para um uso didático geral, em que se quer uma visão equilibrada do planeta sem
                                favorecer nenhuma característica isoladamente, a escolha costuma recair sobre uma
                                projeção afilática, como a de Robinson, adotada por atlas escolares justamente por
                                não ter uma distorção gritante em nenhum aspecto.</p>

                        <p>E para destacar um ponto específico do planeta, seja um país, um polo ou uma cidade,
                                como centro das atenções (útil tanto para rotas aéreas quanto para fazer um
                                argumento geopolítico), a escolha é uma projeção azimutal, centrada exatamente onde o
                                cartógrafo quer que o olhar do leitor comece.</p>

                        <p>Perceba que essas quatro perguntas, para que serve o mapa, o que ele precisa preservar,
                                quem é o público e o que se quer destacar, são exatamente as mesmas que orientam
                                qualquer cartógrafo profissional antes de desenhar um mapa novo, seja em papel, seja
                                em uma tela. Saber fazer essas perguntas já é, em boa parte, saber pensar como um
                                cartógrafo.</p>

                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr>

                </div>


                <!-- BLOCO: Perguntas e Respostas -->
                <div class="topico margemAcima">


                        <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>


                        <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong> Existe uma projeção que está no
                                        meio
                                        termo, entre a projeção de Mercator e a de Peters?</strong> </p>

                        <p><span class="primeiraLetra">R:</span> Há a projeção de Robinson, elaborada na década de
                                1960 pelo cartógrafo e geógrafo norte-americano Arthur <span
                                        onclick="Aparecer('imagem16','citacao16')"><mark>Robinson</mark></span>
                                (1915-2004). Tecnicamente, ela não é uma cilíndrica de verdade: como os meridianos
                                aparecem curvos em vez de retos, ela pertence a uma família à parte, chamada de
                                pseudocilíndrica (uma variação da cilíndrica que curva os meridianos para reduzir a
                                distorção nas bordas do mapa). Ela é chamada de <strong>afilática</strong>, pois não
                                preserva totalmente nem os ângulos nem as áreas, mas distribui um pouco de cada
                                distorção por todo o mapa para que nenhuma fique exagerada em nenhum lugar. Por isso
                                é a mais recomendada para uso didático, tendo sido adotada, inclusive, pela National
                                Geographic Society entre 1988 e 1998, quando a instituição passou a preferir uma
                                projeção parecida, a Winkel tripel, que reduz ainda mais a distorção perto dos
                                polos e é usada até hoje pela maioria dos atlas escolares. </p>



                        <div class="area"><img id="imagem16" src="tp5f16.png" alt="tp5f16" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao16" style=display:none> Fonte:
                                commons.wikimedia.org.</span>


                        <p> Ainda dentro dessa mesma família de projeções pseudocilíndricas, destaca-se também a de <span
                                        onclick="Aparecer('imagem17','citacao17')"><mark>Mollweide</mark></span> , com
                                meridianos igualmente
                                curvos e de forma elíptica, uma pouco mais achatada nos polos. A vantagem desta é que as
                                zonas centrais
                                possuem grande exatidão em seu desenho, mas as extremidades apresentam grandes
                                distorções. </p>




                        <div class="area"><img id="imagem17" src="tp5f17.png" alt="tp5f17" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao17" style=display:none> Fonte: commons.wikimedia.org.
                        </span>

                        <p>E uma última projeção, para ilustrar, refere-se a de <span
                                        onclick="Aparecer('imagem18','citacao18')"><mark>Goode,</mark></span> chamada de
                                projeção descontínua ou
                                interrompida.</p>


                        <div class="area"><img id="imagem18" src="tp5f18.png" alt="tp5f18" class="w3-mobile"
                                        style=display:none>
                        </div>


                        <span class="citacao" id="citacao18" style=display:none> Fonte: Organizado pelo autor.
                        </span>

                        <p> Ao segmentar algumas áreas dos oceanos Pacífico, Atlântico e Índico, ele queria manter as
                                formas das terras emersas totalmente conservada, com exceção da Antártica e Groenlândia.
                                Sua vantagem está
                                em representar temas como a distribuição de indústrias, Recursos minerais ou de
                                indicadores socioeconômicos.
                        </p>

                        <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>Hoje em dia, com a existência de
                                        satélites e internet, ainda precisamos de projeções cartográficas?</strong> </p>

                        <p><span class="primeiraLetra">R:</span> Essa é uma ótima pergunta. O assunto sobre a união da
                                tecnologia com a produção cartográfica é fundamental e vamos aprofundar nele mais
                                adiante, no estudo sobre sensoriamento remoto. Os
                                mapas nos ajudam na compreensão espacial das coisas, dos processos que os eventos
                                humanos ou naturais criam.
                                Hoje, mais do que nunca, o mundo se encontra praticamente todo mapeado. Mesmo as áreas
                                não visitadas, estão
                                potencialmente sendo fotografadas pelos satélites. Por isso o espaço tem uma importância
                                fundamental no
                                mundo atual. Todos os lugares foram atingidos, direta ou indiretamente, pelo processo
                                produtivo, o que cria
                                uma hierarquização entre os agentes. Cada ponto do território mapeado torna-se único,
                                repleto de
                                potencialidades, sociais, naturais etc.</p>


                        <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>Quais temas de estudo os mapas
                                        podem
                                        representar?</strong> </p>

                        <p><span class="primeiraLetra">R:</span> Os mapas temáticos podem nos dar uma visão de
                                conjunto sobre inúmeros tópicos, quais sejam: sobre o papel da informação no mundo
                                atual; o grau de
                                tecnologia empregado nas atividades produtivas, o funcionamento do crédito pelo
                                território, o intercâmbio de
                                bens naturais e sociais pelos Estados, dentre inúmeros outros. Nesse sentido, os mapas
                                não servem apenas
                                para localização estrita, mas para analisar processos que estão ocorrendo, como a
                                pandemia de Covid-19 que
                                se espalhou por todo o Planeta. Vale lembrar dos formatos que você viu nesta aula: um
                                mapa coroplético (colorido por intensidade) é ótimo para mostrar renda por região ou
                                votação por estado; um mapa de fluxo (com setas) é mais indicado para migração ou
                                comércio; e uma anamorfose funciona bem quando o próprio tamanho distorcido do país
                                já é a informação principal, como no caso da população ou dos votos. Escolher o
                                formato errado para o tema errado é um erro comum, inclusive em questões de
                                vestibular que pedem para interpretar esse tipo de mapa.</p>



                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Desafio!</button>
                        <br><br>

                        <hr>

                </div>


                <!-- BLOCO: Questoes para o caderno -->
                <div class="topico">
                        <div class="w3-panel w3-pale-yellow w3-margin">
                                <h2> Questões para responder no caderno:</h2>
                                <h3>1. O que são projeções cartográficas e qual é o seu objetivo principal?</h3>
                                <h3>2. Explique brevemente os três tipos básicos de projeções cartográficas: cilíndrica,
                                        cônica e plana.</h3>
                                <h3>3. Por que os cartógrafos precisaram desenvolver diferentes tipos de projeções?</h3>
                                <h3>4. Descreva as características principais da Projeção de Mercator e mencione para
                                        que
                                        ela é mais
                                        adequada.</h3>
                                <h3>5. Qual é a principal crítica à Projeção de Mercator em relação à representação dos
                                        continentes?</h3>
                                <h3>6. Explique a Projeção de Peters e quais são suas principais características.</h3>
                                <h3>7. Por que a Projeção de Peters foi considerada uma tentativa de romper com uma visão
                                        colonialista do
                                        mundo?</h3>
                                <h3>8. O que são Projeções Planas ou Azimutais e qual é a sua característica principal?
                                </h3>
                                <h3>9. Como as Projeções Cônicas funcionam e em que situações elas são mais utilizadas?
                                </h3>
                                <h3>10. O que são anamorfoses geográficas e como elas diferem das projeções
                                        cartográficas
                                        tradicionais?</h3>
                        </div>
                        <button class="btnShow"
                                onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
                        <hr />
                </div>


                <!-- BLOCO: Catarse -->
                <div class="topico">

                        <div class="w3-light-blue w3-padding">

                        <h2>O que mudou no seu olhar</h2>

                        <p>Releia o que você escreveu no início sobre o tamanho da Groenlândia nos mapas. Agora você sabe que a resposta não é um erro de desenho: é uma escolha entre o que preservar e o que sacrificar. Mercator preservou os ângulos, então distorceu as áreas. Peters preservou as áreas, então distorceu as formas. Não existe mapa plano sem algum tipo de perda.</p>

                        <p>E essa escolha nunca foi neutra. Um mapa que aumenta a Europa e diminui a África, ou que coloca um continente sempre no centro, ensina uma ideia de mundo junto com a geografia. Escolher qual projeção usar é também escolher qual história contar sobre quem é grande, quem é pequeno e quem fica no meio.</p>

                        <p>Você já sabe calcular a escala de um mapa e já sabe por que ele nunca é uma cópia
                                perfeita da realidade. Falta uma peça: como esses mapas são produzidos hoje, com
                                satélites, GPS e computadores, em vez de régua e compasso, e como toda essa
                                tecnologia lida, nos bastidores, com o mesmo dilema entre forma, área e ângulo que
                                você aprendeu nesta aula. É esse o assunto que abre a próxima etapa do curso, o
                                estudo do sensoriamento remoto e das novas tecnologias de informação geográfica.</p>

                        <p><strong>Resumo dos conceitos:</strong> projeção cartográfica (método matemático para representar a esfera em um plano); projeção cilíndrica, cônica e plana (as três formas básicas de projetar); projeção pseudocilíndrica (variação da cilíndrica com meridianos curvos, como Robinson); projeção conforme (preserva forma, distorce área, como Mercator); projeção equivalente (preserva área, distorce forma, como Peters e Equal Earth); Web Mercator (a versão da Mercator usada pelos mapas digitais); mapa temático (representa a distribuição de um fenômeno, não só a localização); anamorfose geográfica (mapa temático que deforma países conforme uma variável, como população).</p>

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


                 <div class="topico">

            <h2> Infográfico - Resumo</h2>



            <div class="w3-margin"><img id="inforesumotp5" src="inforesumotp5.webp"
                    alt="Infográfico resumo Projeções cartográficas" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>





            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>


        </div> 



        
        <!-- TÓPICO FINALIZAR -->
        <div class="topico">
            <button class="btnShow" onclick="mostraCinza(); this.style='display:none'">Finalizar</button>
        </div>


        <div class="bibliografias w3-content w3-padding-64" id="final-da-aula" style="max-width:700px">
            <hr />
            <h3 class="w3-center w3-text-green fontePixel"><strong>Para saber mais:</strong></h3>
            <div class="w3-row-padding" id="links-gerados"></div>
            <div class="w3-container w3-padding-64">
                <h3 class="fontePixel w3-center w3-text-green">
                    <strong><i class="fa fa-book"></i> Referências Bibliográficas</strong>
                </h3>
                <div id="biblio-gerada"></div>
            </div>

            <div class="w3-container w3-padding-64 secao-livros-sugeridos">
                <h3 class="fontePixel w3-center w3-text-green">
                    <strong>📚 Sugestões de Livros</strong>
                </h3>
                <p class="w3-center w3-small w3-text-grey" style="margin-top:-8px">Para quem quer ir além da aula, com literatura</p>
                <div id="livros-gerados"></div>
            </div>

            <br /><br />
            <div class="w3-padding-48">
                <span id="numero"></span>
                <span id="txtBarra">0%</span>
                <progress id="progress" max="100" value="0"></progress>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../../includes/footer.php'; ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
</body>

</html>