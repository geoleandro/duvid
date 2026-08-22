<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Deriva continental e tectônica de placas: Isostasia, correntes de convecção e falhas tectônicas">
    <meta property="og:title" content="Texto 09 - Deriva continental e tectônica de placas">
    <meta property="og:description" content="Como a teoria da deriva continental e a tectônica de placas explicam o movimento dos continentes">
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


    <title>1º ano - Texto 09</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Entender os processos de separação dos continentes terrestres por meio da teoria da deriva continental e tectônica de placas.</span></p>
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
                <p class="w3-pale-green">Você já reparou que o contorno do litoral da América do Sul parece encaixar como uma peça de quebra-cabeça no litoral da África? Ou já sentiu falar de um terremoto acontecendo do outro lado do mundo?</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: na sua opinião, os continentes sempre estiveram parados, exatamente onde estão hoje, ou será que eles se movem? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2 class="margemAcima"> Introdução </h2>
            <p><span class="primeiraLetra">N</span>a aula passada, conhecemos um pouco mais sobre a história do Planeta Terra, sua formação através das eras geológicas e as características principais de suas camadas internas.</p>
            <p>Na aula de hoje, veremos a dinâmica da litosfera e como os continentes se movimentam através das placas tectônicas.</p>
            <p><strong>Esta aula responde a uma pergunta que intrigou cientistas por séculos: os continentes que conhecemos hoje sempre estiveram onde estão, ou eles se deslocam lentamente pela superfície da Terra, e como foi possível provar isso?</strong></p>
            <p>Ao final, você será capaz de reconhecer como funciona a defesa de uma hipótese científica, os tipos de falhas tectônicas e a influência do movimento de convecção do interior do Planeta na superfície terrestre.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (introducao a teoria) -->
        <div class="topico">

            <h2> Uma descoberta científica importante sobre o Planeta Terra</h2>

            <p>Toda ciência é definida por seus métodos e seus objetos. O objeto da Geologia é o Planeta Terra e suas dinâmicas.</p>

            <p>Tudo começa com um problema a ser resolvido, um espírito com curiosidade sobre como os fenômenos funcionam, muitas tentativas e erros, e comprovações com base em fatos.</p>

            <p>No caso do movimento dos continentes, há pouco tempo, na década de 1960, a <span
                    class="termo" data-palavra="Teoria das Placas Tectônicas"
                    data-definicao="Teoria científica, consolidada na década de 1960, que explica o movimento dos continentes, a formação de montanhas, vulcões e terremotos a partir do deslocamento das placas que compõem a litosfera sobre o manto terrestre."><strong>teoria
                        das placas tectônicas</strong></span> revolucionou o conhecimento até então produzido sobre a Terra.</p>

            <p>Essa teoria descreve o movimento dos continentes, as forças responsáveis pela formação das montanhas, vulcões e outros fenômenos relativos à dinâmica da litosfera.</p>

            <p>Mas quando começou a construção dessa teoria?</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (historia da hipotese) -->
        <div class="topico">

            <h2> Da observação do contorno dos continentes às primeiras hipóteses sobre o movimento das placas litosféricas</h2>

            <p>Hoje sabemos que a litosfera é fragmentada em dezenas de placas tectônicas (cerca de 50, entre grandes e pequenas), que estão em movimento, deslocando-se, chocando-se ou deslizando umas sobre as outras na astenosfera, camada superior do Manto terrestre.</p>

            <p>A confirmação da hipótese da <span class="termo" data-palavra="Deriva Continental"
                    data-definicao="Hipótese formulada por Alfred Wegener em 1912, segundo a qual os continentes atuais já estiveram unidos em um único supercontinente e foram se afastando lentamente ao longo de milhões de anos.">deriva
                    continental</span> demorou vários séculos. Provar que os continentes estão em movimento não é uma tarefa fácil.</p>

            <p>No final do século XVI, o cartógrafo flamengo Abraham Ortelius publicou o <em>Theatrum Orbis Terrarum</em> (Teatro do Globo Terrestre), em 1570, uma coletânea de cerca de 70 mapas reunidos de forma padronizada, considerada o primeiro <span
                    onclick="Aparecer('imagem1','citacao1')"><mark>atlas</mark></span> moderno.</p>

            <div class="area">
                <img alt="Primeiro atlas moderno" class="w3-mobile" id="imagem1" src="tp9f1.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao1" style="display:block"> Fonte: Wikipédia. </p>

            <p>Os cientistas então já afirmavam que os contornos da América do Sul e da África possuíam um encaixe perfeito, sugerindo que tivessem formado, no passado, um único continente.</p>

            <p>No século XVIII, Benjamim Franklin se intrigava com os fluidos abaixo da crosta terrestre e afirmava que a superfície da Terra seria como uma casca capaz de ser quebrada pelos movimentos desses fluidos sobre os quais repousa.</p>

            <p>No século XIX, o geólogo austríaco Eduard Suess defendeu a hipótese de que os continentes da porção Sul do globo (meridional) já haviam formado um único continente, chamado de Gondwana, em homenagem a uma região da Índia onde ele havia encontrado rochas e fósseis muito semelhantes aos da África e da América do Sul. O nome pegou: até hoje os geólogos usam Gondwana para se referir à metade sul da Pangeia (América do Sul, África, Índia, Austrália e Antártica), em oposição a Laurásia, a metade norte, formada por América do Norte, Europa e Ásia.</p>

            <p>Somente no início do século XX um meteorologista alemão, Alfred Wegener, após ler um artigo sobre fósseis semelhantes encontrados na África e na América do Sul, decidiu retomar a hipótese da deriva continental. Ele apresentou a ideia pela primeira vez em uma conferência em 1912 e, em 1915, publicou o livro "A origem dos continentes e oceanos", no qual defende seus argumentos com algumas <strong>evidências</strong>:</p>

            <ul>
                <li>O encaixe do litoral da África no contorno do litoral da América (Evidência Morfológica). Os continentes se encaixariam como em um quebra-cabeças, tanto na América do Sul e África quanto na América do Norte e Europa.</li>
                <li>A formação geológica e os tipos de rochas semelhantes também nesses dois continentes (Evidência Litológica).</li>
            </ul>

            <div class="area">
                <img alt="Encaixe dos continentes" class="w3-mobile" id="imagem2" src="tp9f2.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao2" style="display:block"> Fonte: Press (2006, p.48, adaptado). </p>

            <ul>
                <li>A ocorrência dos mesmos tipos de climas nos dois continentes (Evidência Paleoclimática). Depósitos relacionados a geleiras que existiam há 300 milhões de anos foram encontrados na América do Sul, África, Índia e Austrália. A existência de uma única geleira poderia explicar todos esses depósitos; até mesmo recifes de algas coralíneas, datados do Paleozoico, foram encontrados no Círculo Polar Ártico, sendo que esses corais são peculiares do Equador.</li>
                <li>A existência de fósseis de animais nos dois continentes, África e América (Evidência Paleontológica). A foto abaixo destaca o réptil Mesossauro, encontrado no sul do Brasil, em rochas da Formação Irati que afloram em São Paulo, Paraná, Santa Catarina e Rio Grande do Sul (em 2020, durante uma forte estiagem, um exemplar foi descoberto às margens do Rio Negro, em Três Barras, Santa Catarina), também encontrado na África. Mesmo se o Mesossauro pudesse cruzar oceanos nadando, ele teria chegado a outros lugares, o que não ocorreu. Isso sugere que os continentes estavam unidos.</li>
            </ul>

            <div class="area">
                <img alt="Fóssil de Mesossauro" class="w3-mobile" id="imagem3" src="tp9f3.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao3" style="display:block"> Fonte: Press (2006, p.49). </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (forcas que movem os continentes) -->
        <div class="topico">

            <h2>Quais são as forças que movimentam os continentes?</h2>

            <p>As evidências estudadas por Wegener o ajudaram a provar que um dia existiu um supercontinente, que ele chamou de <span
                    class="termo" data-palavra="Pangeia"
                    data-definicao="Supercontinente único que reunia todas as terras emersas do Planeta antes de se fragmentar nos continentes atuais, segundo a hipótese de Alfred Wegener.">Pangeia</span>
                (do grego "todas as terras").</p>

            <p>Entretanto, o meteorologista alemão não conseguiu convencer os cientistas sobre quais forças empurravam os continentes. Após anos de debate, os físicos convenceram os geólogos de que as camadas da Terra eram muito pesadas para que a deriva continental acontecesse.</p>

            <p>Wegener faleceu em uma expedição na Groenlândia em 1930, poucos dias depois de completar 50 anos, provavelmente de exaustão e insuficiência cardíaca, enquanto retornava a pé de uma estação de pesquisa isolada no meio da calota de gelo, antes que pudesse provar sua descoberta. Devido à falta de tecnologia, ele não conseguiu explicar o que causava a fragmentação dos continentes. Ele chegou a afirmar que os continentes eram arrastados pelas marés e pela força gravitacional da Lua, hipótese que os físicos rapidamente desmentiram com cálculos, o que só ajudou a manchar ainda mais sua reputação entre os cientistas da época. Assim, sua hipótese foi esquecida por muitos anos.</p>

            <p>Um grande fato após a Segunda Guerra Mundial iria mudar essa história. Trabalhos com <span
                    class="termo" data-palavra="Sonar"
                    data-definicao="Equipamento que mede distâncias e mapeia o relevo por meio da emissão e do retorno de ondas sônicas e ultrassônicas, usado para mapear o fundo dos oceanos.">sonares</span>
                e o mapeamento do assoalho oceânico, sobretudo para procurar submarinos submersos e riquezas minerais, permitiram a descoberta de vales, verdadeiras montanhas e fendas na crosta debaixo d'água, a chamada <span
                    onclick="Aparecer('imagem4','citacao4')"><mark><strong>Dorsal Meso-oceânica</strong></mark></span>. Os terremotos ocorriam próximos a essa fenda, e um novo fundo oceânico se formava pela ascensão (elevação) de uma nova crosta quente nessas fissuras.</p>

            <div class="area">
                <img alt="Dorsal Meso-oceânica" class="w3-mobile" id="imagem4" src="tp9f4.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao4" style="display:block"> Fonte: Pinterest. Dorsal Mesoatlântica. </p>

            <p>Dois cientistas americanos, Hess e Dietz, propuseram em 1962 que a crosta no meio do Atlântico era formada por fendas (rifts) e explicaram como os continentes poderiam se separar. Após outras pesquisas, descobriu-se que a crosta surgia em um local e era destruída ou fundida em outra parte do manto. As respostas só podiam estar nas diferenças de temperatura do Manto, ou seja, nas <strong>correntes de convecção</strong>. No final da década de 1960, as evidências eram tão robustas que foram aceitas por todos os geocientistas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (correntes de conveccao) -->
        <div class="topico">

            <h2> Correntes de convecção</h2>

            <p>Nas regiões profundas do manto, as temperaturas são mais elevadas, o que provoca a ascendência dos materiais em direção às áreas próximas da litosfera. Esses materiais, ao chegarem perto da crosta, se resfriam e mergulham novamente para o interior do manto. Essas são as <span
                    class="termo" data-palavra="Correntes de Convecção"
                    data-definicao="Movimento circular de materiais no interior do manto terrestre, causado pela diferença de temperatura entre suas camadas, responsável por movimentar as placas tectônicas na superfície.">correntes
                    de convecção</span>, mostradas <span onclick="Aparecer('imagem5','citacao5')"><mark>na imagem abaixo</mark></span>, que movimentam lentamente as placas tectônicas, as quais formam a crosta terrestre.</p>

            <div class="area">
                <img alt="Correntes de convecção" class="w3-mobile" id="imagem5" src="tp9f5.gif" style="display:block" />
            </div>
            <p class="citacao" id="citacao5" style="display:block"> </p>

            <p>Nesse sentido, a deriva continental e a expansão do assoalho oceânico seriam uma consequência das correntes de convecção. <span
                    onclick="Aparecer('imagem6','citacao6')"><mark>Veja a ilustração abaixo:</mark></span></p>

            <div class="area">
                <img alt="Ilustração das correntes de convecção" class="w3-mobile" id="imagem6" src="tp9f6.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao6" style="display:block"> Fonte: Moreira e Sene (2016, p.115). </p>

            <p>Hoje, diferente da época de Wegener, não precisamos mais deduzir o movimento das placas apenas indiretamente, através do assoalho oceânico ou dos fósseis. Redes de antenas de <span
                    class="termo" data-palavra="GPS Geodésico"
                    data-definicao="Rede de estações de GPS de altíssima precisão, fixadas em pontos estáveis da crosta terrestre, capaz de medir deslocamentos de poucos milímetros por ano e confirmar diretamente a velocidade e a direção do movimento das placas tectônicas.">GPS
                    geodésico</span> de altíssima precisão, espalhadas pelo mundo, conseguem medir diretamente, ano após ano, o quanto cada placa se deslocou, com margem de erro de poucos milímetros. Essas medições confirmam exatamente a mesma faixa de velocidade estimada indiretamente pelos geólogos décadas atrás: a Placa Sul-Americana, por exemplo, se afasta da Placa Africana a cerca de 3 cm por ano, quase a mesma velocidade em que crescem as unhas de uma pessoa.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (Wegener) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que Alfred Wegener foi esquecido e até mesmo ridicularizado pela comunidade científica no início do século XX?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) Ele não seguiu o método científico e baseou seus estudos em outras formas de conhecimento.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1b">
                        <span>b) Ele seguiu o método científico, mas não criou hipóteses válidas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1c">
                        <span>c) Ele não conseguiu provar suas hipóteses devido à falta de tecnologia na época.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: Wegener seguiu o método científico e reuniu boas evidências, só faltava explicar o mecanismo que movia os continentes, isso só foi possível décadas depois.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (placas e seus limites) -->
        <div class="topico">

            <h2>As Placas Tectônicas e seus limites</h2>

            <p>A teoria das placas tectônicas surge para responder às questões deixadas pela teoria da deriva continental. Hoje sabemos que a litosfera está fragmentada em placas, e estas deslizam devido à movimentação das correntes de convecção no interior da Terra.</p>

            <p>O mapeamento do assoalho oceânico foi uma grande contribuição para o conhecimento sobre a superfície terrestre. As placas são rígidas e flutuam sobre o manto.</p>

            <p>A importância do estudo das placas tectônicas está relacionada, dentre outras coisas, à compreensão da formação das altas cadeias montanhosas e dos abalos sísmicos (terremotos e maremotos, assunto que veremos nas próximas aulas). Esses fenômenos estão ligados intimamente ao choque entre as <span
                    onclick="Aparecer('imagem6a','citacao6a')"><mark>placas</mark></span>.</p>

            <div class="area">
                <img alt="Mapa das placas tectônicas" class="w3-mobile" id="imagem6a" src="tp9f6a.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao6a" style="display:block"> Fonte: VESENTINI (2013). </p>

            <p>Há mais de 50 placas tectônicas. As principais são:</p>

            <div class="divCaixa1 w3-margin">
                <h4 class="fontePixel">As principais placas tectônicas:</h4>
                <ul class="lista">
                    <li>Placa Euroasiática, predominantemente continental, apesar de incluir parte do Atlântico Norte;</li>
                    <li>Placa Africana, que inclui a África e parte do Atlântico Sul;</li>
                    <li>Placa Norte-Americana, que abrange parte do Atlântico Norte e quase toda a América do Norte;</li>
                    <li>Placa Sul-Americana, que inclui a América do Sul e parte do Atlântico Sul;</li>
                    <li>Placa Antártica, que inclui o continente antártico e uma imensa área oceânica;</li>
                    <li>Placa Indo-Australiana, que abrange boa parte do oceano Índico e da Oceania;</li>
                    <li>Placa do Pacífico, predominantemente oceânica;</li>
                    <li>Placa de Nazca, a oeste da América do Sul, predominantemente oceânica.</li>
                </ul>
            </div>
            <p class="citacao" style="display:block">Fonte: VESENTINI (2013, p.217).</p>

            <p>As maiores são as placas do Pacífico e a Norte-Americana. Há placas pequenas, como a de Juan de Fuca, encravada no noroeste dos Estados Unidos, e a Placa Anatoliana, que inclui a maior parte da Turquia.</p>

            <p>Conhecer esse mapa não é só um exercício de memorização. Ele tem aplicação prática direta: países localizados sobre limites de placas, como Japão, Chile, Turquia e Indonésia, precisam investir pesado em normas de construção antissísmica, sistemas de alerta precoce de tsunâmis e planos de evacuação, justamente porque sabem, através da tectônica de placas, onde e por que os terremotos e vulcões mais fortes tendem a acontecer. O Brasil, por estar quase todo situado no meio da Placa Sul-Americana, longe dos limites mais ativos, tem uma sismicidade muito mais baixa, embora não seja totalmente livre de tremores.</p>

            <p>É nos limites entre as placas que ocorrem os principais fenômenos naturais da crosta, como terremotos, vulcões, formação de montanhas, rifts, entre outros, dependendo da interação entre os limites. Os limites podem ser: divergente, convergente e transformante.</p>

            <p>Não é coincidência que boa parte dos vulcões e terremotos do Planeta se concentre justamente ao redor do oceano Pacífico, numa faixa conhecida como <span
                    class="termo" data-palavra="Cinturão de Fogo do Pacífico"
                    data-definicao="Faixa em forma de ferradura que contorna o oceano Pacífico, concentrando cerca de 75% dos vulcões ativos do Planeta e a maior parte dos terremotos mais fortes já registrados, resultado da série de zonas de subducção que margeiam a Placa do Pacífico.">Cinturão
                    de Fogo do Pacífico</span>. Ali, a Placa do Pacífico encontra várias outras placas (Norte-Americana, Sul-Americana, Eurasiática, Indo-Australiana e Placa de Nazca, entre outras) formando uma sequência quase contínua de zonas de subducção, do Japão às Filipinas, da costa oeste dos Estados Unidos aos Andes sul-americanos. Cerca de 90% de todos os terremotos do Planeta e 80% dos terremotos de maior magnitude acontecem nessa faixa, que também concentra boa parte dos vulcões ativos do mundo.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Teste (checkboxes) -->
        <div class="topico">
            <p class="caixa">Teste o seu conhecimento!</p>
            <h4> Assinale todas as alternativas que correspondem às evidências originais da hipótese da Deriva Continental defendidas por Wegener.</h4>
            <form class="w3-margin" id="check">
                <input id="r1" name="r1" type="checkbox" />
                <label> O encaixe do litoral da África no contorno do litoral da América (Evidência Morfológica).</label><br /><br />
                <input id="r2" name="r2" type="checkbox" />
                <label> A descoberta da expansão do assoalho oceânico.</label><br /><br />
                <input id="r3" name="r3" type="checkbox" />
                <label> A existência de fósseis de animais nos dois continentes, África e América (Evidência Paleontológica).</label><br /><br />
                <input id="r4" name="r4" type="checkbox" />
                <label>Os estudos sobre as correntes de convecção no Manto Terrestre.</label><br /><br />
                <input id="r5" name="r5" type="checkbox" />
                <label>A ocorrência dos mesmos tipos de clima nos dois continentes, África e América (Evidência Paleoclimática).</label><br /><br />
                <input id="r6" name="r6" type="checkbox" />
                <label>A formação geológica e os tipos de rochas semelhantes também nesses dois continentes (Evidência Litológica).</label><br /><br />
            </form>
            <button class="btnShow" id="buttoncheck1"
                onclick="confereBox('acertou, parabéns! Essas são as evidências clássicas reunidas por Wegener em 1915','resp40','globinho40',[1,3,5,6])">Conferir</button>
            <p class="margemAcima" id="resp40"></p>
            <div class="area">
                <p><img alt="globinho40" height="64" id="globinho40" src="/fotoIndex/globinhoPe.png"
                        style="display:none" width="64" />
                </p>
            </div>
            <button class="btnHide" id="buttoncheck2"
                onclick="MostrarProximo(this); this.style.display='none'" style="display:none">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (limite divergente) -->
        <div class="topico">

            <h2> Os tipos de limites entre placas tectônicas</h2>
            <h3> Limite divergente</h3>

            <p>Nos limites divergentes as placas se afastam, e uma nova litosfera é criada. Pode ocorrer tanto entre placas oceânicas quanto entre placas continentais.</p>

            <p>Nas placas oceânicas ocorre um movimento de <span
                    onclick="Aparecer('imagem10','citacao10')"><mark>separação de placas</mark></span> nos oceanos, ao longo das cadeias de montanhas no fundo do mar, chamadas de Dorsal Mesoatlântica. A velocidade de afastamento é de 2,5 cm por ano, ou 25 km em 1 milhão de anos.</p>

            <div class="area">
                <img alt="Separação de placas oceânicas" class="w3-mobile" id="imagem10" src="tp9f10.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao10" style="display:block">Fonte: Press (2006, p.54). </p>

            <p>Na <span onclick="Aparecer('imagem12','citacao12')"><mark>ilha da Islândia</mark></span> é possível observar diretamente a separação da Placa Norte-americana e da Placa Eurasiana, uma vez que esse país está situado na divisão dessas duas placas.</p>

            <div class="area">
                <img alt="Ilha da Islândia" class="w3-mobile" id="imagem12" src="tp9f12.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao12" style="display:block"> Fonte: Press (2006, p.54). </p>

            <p>O vale em forma de fratura na foto indica que ele foi preenchido com rochas vulcânicas recentes, uma evidência do afastamento dessas placas.</p>

            <p>A cadeia de montanhas da Dorsal Mesoatlântica corta o Planeta de Norte a Sul.</p>

            <p>Nas placas continentais, há separação por meio de <em>rift</em> (fratura) da crosta, como no <span
                    onclick="Aparecer('imagem11','citacao11')"><mark>Leste africano</mark></span>, formando vales, além do Mar Vermelho e do golfo da Califórnia.</p>

            <div class="area">
                <img alt="Rift do Leste africano" class="w3-mobile" id="imagem11" src="tp9f11.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao11" style="display:block"> Fonte: Press (2006, p.54). </p>

            <p>Segundo os geólogos, esse é um <span onclick="Aparecer('imagem13','citacao13')"><mark>sinal</mark></span> de que essa região vai se separar do continente africano daqui a dezenas de milhões de anos.</p>

            <div class="area">
                <img alt="Sinal de separação continental" class="w3-mobile" id="imagem13" src="tp9f13.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao13" style="display:block"> </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (limite convergente) -->
        <div class="topico">

            <h3> Limite convergente</h3>

            <p>Nesse tipo de limite as placas colidem frontalmente, sendo que uma delas é destruída ou reciclada, retornando ao manto. Podem ocorrer choques nos oceanos, nos continentes e entre continente e oceano.</p>

            <p><span onclick="Aparecer('imagem14','citacao14')"><mark>Colisão entre duas placas oceânicas</mark></span>: uma placa mergulha sobre a outra em um processo chamado de <span
                    class="termo" data-palavra="Subducção"
                    data-definicao="Processo em que uma placa tectônica mergulha por baixo de outra e é reciclada no manto, geralmente ocorrendo onde uma placa mais densa (oceânica) encontra uma menos densa (continental ou outra oceânica).">subducção</span>.
                A placa que está em subducção afunda na astenosfera e é reciclada no manto. No local onde se produz esse fenômeno é criada uma grande fossa de mar profunda, como a Fossa das Marianas, no Oeste do Pacífico, onde o oceano atinge sua maior profundidade, de aproximadamente 10 km.</p>

            <div class="area">
                <img alt="Fossa das Marianas" class="w3-mobile" id="imagem14" src="tp9f14.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao14" style="display:block"> Fonte: Press (2006, p.52). </p>

            <p>Quando uma placa oceânica encontra uma placa continental, a placa oceânica entra em subducção, e um cinturão de montanhas vulcânico é formado na margem da placa continental.</p>

            <p>Isso ocorre porque a placa continental é mais leve (menos densa) e não afunda facilmente. Ocorre um enrugamento na borda da placa continental e surge um cinturão de montanhas paralelo à fossa de mar que se formou.</p>

            <p>Essa área é propensa a terremotos devido ao choque entre essas placas. A costa oeste da América do Sul, onde a placa Sul-Americana colide com a Placa de Nazca, é uma zona de subducção.</p>

            <p>O resultado disso é a formação da <span onclick="Aparecer('imagem15','citacao15')"><mark>cordilheira dos Andes</mark></span>, uma grande cadeia de montanhas paralelas com vulcões ativos, como o Nevado del Ruiz, na Colômbia, que entrou em erupção em 1985 e deixou cerca de 23 mil mortos, a maioria na cidade de Armero, soterrada por lahares (fluxos de lama vulcânica) formados pelo derretimento repentino do gelo no topo do vulcão.</p>

            <div class="area">
                <img alt="Cordilheira dos Andes" class="w3-mobile" id="imagem15" src="tp9f15.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao15" style="display:block"> Fonte: Press (2006, p.52). </p>

            <p><span onclick="Aparecer('imagem16','citacao16')"><mark>Colisão entre duas placas continentais</mark></span>: aqui não ocorre o processo de subducção, pois as placas continentais possuem a mesma densidade. O resultado é o choque entre placas, como o da Placa Eurasiana e a Placa Indiana, que cria uma crosta com espessura dupla, formando a cordilheira de montanhas mais alta do mundo, o Himalaia, e o planalto do Tibete. Nessas regiões os terremotos são violentos, devido à tensão que há entre as placas continentais.</p>

            <div class="area">
                <img alt="Himalaia" class="w3-mobile" id="imagem16" src="tp9f16.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao16" style="display:block">Fonte: Press (2006, p.52).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (isostasia) -->
        <div class="topico">

            <h3>Por que a crosta continental não afunda? A isostasia</h3>

            <p>Reparou como, na colisão entre placas, a crosta continental quase nunca entra em subducção, enquanto a crosta oceânica é praticamente sempre a que mergulha e é reciclada no manto? Isso tem uma explicação chamada <span
                    class="termo" data-palavra="Isostasia"
                    data-definicao="Princípio do equilíbrio gravitacional entre a litosfera (mais leve) e a astenosfera (mais densa, sobre a qual a litosfera repousa e flutua), de forma parecida com um bloco de gelo flutuando na água.">isostasia</span>.</p>

            <p>A ideia é parecida com a de um barco flutuando na água ou um cubo de gelo boiando em um copo: a crosta continental, menos densa que o manto sobre o qual repousa, "flutua" sobre a astenosfera, do mesmo jeito que a madeira flutua sobre a água por ser menos densa que ela. Quanto mais espessa e "pesada" for uma porção da crosta, como embaixo de uma grande cordilheira, mais fundo ela afunda no manto para se manter em equilíbrio, formando uma espécie de raiz profunda que sustenta a montanha por cima.</p>

            <p>Esse equilíbrio isostático explica também um fenômeno curioso: regiões que foram cobertas por camadas espessas de gelo durante as últimas glaciações, como a Escandinávia, ficaram "afundadas" pelo peso do gelo durante milhares de anos. Com o degelo, no fim da última Era Glacial, há cerca de 11.700 anos, essas regiões começaram a se reerguer lentamente, processo que continua até hoje, a uma velocidade de aproximadamente 1 cm por ano em algumas áreas da Escandinávia.</p>

            <p>É por isso que a crosta continental, mais leve, resiste ao afundamento e tende a se chocar e enrugar (formando cordilheiras) em vez de mergulhar no manto, enquanto a crosta oceânica, mais densa, cede lugar e entra em subducção quando encontra outra placa.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (limite transformante) -->
        <div class="topico">

            <h3> Limite transformante</h3>

            <p>Nos <span class="termo" data-palavra="Limite Transformante"
                    data-definicao="Tipo de limite entre placas tectônicas em que elas deslizam horizontalmente uma em relação à outra, sem criar ou destruir litosfera, como na falha de San Andreas.">limites
                    transformantes</span> as placas deslizam horizontalmente uma em relação à outra. A placa permanece constante, não é produzida nem destruída.</p>

            <p>A <span onclick="Aparecer('imagem17','citacao17')"><mark>falha de San Andreas</mark></span> (Santo André), na Califórnia, EUA, é a mais famosa de todas. Há um deslocamento horizontal entre a Placa do Pacífico e a Placa Norte-Americana. Grandes terremotos, como o que ocorreu em 1906 em São Francisco, podem ocorrer nos limites de placas desse tipo.</p>

            <div class="area">
                <img alt="Falha de San Andreas" class="w3-mobile" id="imagem17" src="tp9f17.png" style="display:block" />
            </div>
            <p class="citacao" id="citacao17" style="display:block"> Fonte: Britannica (2008 p.23, adaptado). </p>

            <p>Na realidade, os limites entre placas tectônicas podem combinar-se entre si. Por exemplo, a Placa Norte-Americana é limitada a Leste pela Dorsal Mesoatlântica, que é uma área de limite divergente; a Oeste pela falha de Santo André e outros limites transformantes; e, finalmente, a Noroeste, por zonas de subducção.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (falhas tectonicas) -->
        <div class="topico">

            <h3>Falhas tectônicas: quando as rochas se rompem</h3>

            <p>A falha de San Andreas, vista há pouco, é apenas um exemplo de um fenômeno mais amplo: as <span
                    class="termo" data-palavra="Falha Tectônica"
                    data-definicao="Fratura na crosta terrestre ao longo da qual houve deslocamento relativo entre os blocos de rocha, causado por esforços de tensão, compressão ou cisalhamento originados pela movimentação das placas tectônicas.">falhas
                    tectônicas</span>. Sempre que os esforços gerados pelo movimento das placas superam a resistência das rochas, elas se rompem ao longo de uma superfície, e os blocos de cada lado dessa fratura se deslocam um em relação ao outro. Os geólogos classificam as falhas em três tipos principais, de acordo com a direção desse deslocamento.</p>

            <p>A <strong>falha normal</strong> (ou gravitacional) ocorre quando a crosta é esticada por forças de tensão, como acontece nos limites divergentes e nos riftes continentais, como o do Leste africano. Um bloco de rocha desliza para baixo em relação ao outro, ao longo de um plano inclinado, alargando a área afetada.</p>

            <p>A <strong>falha inversa</strong> (ou de compressão) ocorre no sentido oposto: quando a crosta é comprimida, como nos limites convergentes, um bloco de rocha é empurrado para cima e sobre o outro, encurtando a área afetada. É esse tipo de falha, repetido muitas vezes, que ajuda a empilhar rochas e erguer cadeias de montanhas como os Andes e o Himalaia.</p>

            <p>Já a <strong>falha transcorrente</strong> (ou de deslocamento horizontal) ocorre quando os blocos deslizam lateralmente, um ao lado do outro, sem que a crosta seja nem esticada nem comprimida verticalmente, exatamente o que acontece na falha de San Andreas, nos limites transformantes.</p>

            <p>Essas três famílias de falhas explicam por que um mesmo evento, um terremoto, pode ter causas tão diferentes dependendo de onde ele acontece: um tremor no Chile costuma estar ligado a uma falha inversa por compressão, enquanto um tremor na Califórnia costuma estar ligado a uma falha transcorrente por deslizamento lateral.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (pontos quentes) -->
        <div class="topico">

            <h3> Vulcanismo fora dos limites de placas: os pontos quentes</h3>

            <p>Nem todo vulcão do planeta está localizado sobre um limite de placas tectônicas. Existem regiões conhecidas como <span
                    class="termo" data-palavra="Ponto Quente (Hotspot)"
                    data-definicao="Área fixa no manto terrestre onde uma pluma de magma extremamente quente sobe continuamente em direção à superfície, formando vulcões independentemente dos limites entre placas tectônicas."><strong>pontos
                        quentes</strong></span> (hotspots), áreas fixas no manto onde uma pluma de magma extremamente quente sobe continuamente em direção à superfície, perfurando a placa por cima dela, independentemente de onde essa placa esteja em relação aos seus limites.</p>

            <p>O arquipélago do Havaí é o exemplo mais conhecido desse fenômeno. As ilhas havaianas se formaram no meio da Placa do Pacífico, a milhares de quilômetros de qualquer limite divergente, convergente ou transformante. Como a placa se move lentamente sobre o ponto quente fixo no manto, uma sequência de ilhas vulcânicas foi se formando ao longo de milhões de anos, ficando mais antigas conforme se afastam do ponto ativo atual, onde hoje se localiza o vulcão Kilauea.</p>

            <p>O Brasil, mesmo estando no meio da Placa Sul-Americana, longe de qualquer limite de placas, também guarda registros desse tipo de vulcanismo. O arquipélago de Fernando de Noronha, em Pernambuco, formou-se por episódios vulcânicos há cerca de 12 milhões de anos e 1,7 milhão de anos, provavelmente ligados à passagem da placa sobre uma zona de fraqueza na crosta oceânica associada a um ponto quente. Já a Ilha da Trindade, no Espírito Santo, é o registro mais recente de uma cadeia inteira de montanhas submersas, a Cadeia Vitória-Trindade, que se estende por centenas de quilômetros no fundo do Atlântico e que os geólogos associam a um hotspot que teria produzido vulcões ao longo do tempo, conforme a Placa Sul-Americana se deslocava por cima dele.</p>

            <p>Esse tipo de vulcanismo mostra que, embora a teoria das placas tectônicas explique a maior parte da atividade vulcânica e sísmica do planeta, o interior da Terra também produz fenômenos independentes da movimentação das bordas das placas, evidenciando que o manto tem uma dinâmica própria de convecção que ultrapassa os limites já estudados.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- <div class="topico">
            <h2> Infográfico - Resumo</h2>
            <div class="w3-margin"><img id="inforesumotp9" src="inforesumotp9.webp"
                    alt="Infográfico resumo Deriva continental e tectônica de placas" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se os continentes se movem tão devagar, apenas alguns centímetros por ano, como isso pode causar
                    terremotos e formar cordilheiras inteiras?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                Poucos centímetros por ano parece pouco, mas a Geologia trabalha em escalas de tempo gigantescas.
                Em 1 milhão de anos, um deslocamento de 2,5 cm por ano já soma 25 km, e a Terra tem 4,5 bilhões de
                anos de história. Além disso, o movimento não é suave o tempo todo: as placas ficam presas por
                atrito por décadas ou séculos, acumulando tensão, até que ela se rompe de uma vez, liberando
                energia na forma de um terremoto. É esse acúmulo lento seguido de liberação súbita que explica
                fenômenos tão intensos a partir de um movimento tão pequeno.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se a hipótese de Wegener estava certa, por que ele foi ridicularizado, e não os cientistas que
                    duvidaram dele?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                Porque ciência não é só ter uma boa ideia, é conseguir demonstrar como ela funciona. Wegener
                reuniu ótimas evidências de que os continentes já estiveram unidos, mas não conseguiu explicar
                qual força seria capaz de mover blocos de terra tão pesados. Sem essa explicação, os físicos da
                época consideravam a hipótese impossível fisicamente, mesmo com boas evidências geológicas. Só
                décadas depois, com a descoberta das correntes de convecção no manto, é que se encontrou o
                mecanismo que faltava, e a comunidade científica reconheceu que Wegener estava certo.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    O Havaí fica bem no meio do oceano Pacífico, longe de qualquer limite de placas. Então por que
                    existem vulcões ativos lá?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                Porque nem todo vulcão depende de um limite de placas para existir. No caso do Havaí, existe um
                ponto quente fixo no manto, uma espécie de "maçarico" que fica parado enquanto a Placa do Pacífico
                se move lentamente por cima dele. Isso faz com que, ao longo de milhões de anos, uma cadeia inteira
                de ilhas vulcânicas seja formada, cada uma mais antiga que a anterior, conforme a placa se afasta
                do ponto quente. O vulcão ativo hoje, o Kilauea, é apenas o mais recente dessa sequência.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. Qual é o objeto de estudo da Geologia?</h3>
                <h3>2. Qual teoria revolucionou o conhecimento sobre o movimento dos continentes na década de 1960?</h3>
                <h3>3. Quem foi o primeiro a publicar um atlas moderno e qual foi o nome da obra?</h3>
                <h3>4. Quais foram algumas das evidências usadas por Alfred Wegener para sustentar a hipótese da deriva continental?</h3>
                <h3>5. O que foi descoberto com o uso de sonares após a Segunda Guerra Mundial que ajudou a confirmar a teoria das placas tectônicas?</h3>
                <h3>6. O que são as correntes de convecção e qual o seu papel na teoria das placas tectônicas?</h3>
                <h3>7. O que ocorre nos limites divergentes das placas tectônicas?</h3>
                <h3>8. Quais são os três tipos de limites entre placas tectônicas e o que ocorre em cada um deles?</h3>
                <h3>9. O que são os pontos quentes (hotspots) e por que o arquipélago do Havaí é um exemplo desse fenômeno?</h3>
                <h3>10. O que é isostasia e quais são os três tipos de falhas tectônicas?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você escreveu no início sobre os continentes estarem parados ou em movimento. Agora você sabe que eles realmente se movem, poucos centímetros por ano, empurrados pelas correntes de convecção do manto. Foi essa lenta movimentação que separou a Pangeia nos continentes que conhecemos hoje, e que continua formando montanhas, abrindo oceanos e provocando terremotos.</p>

                <p>A história de Wegener também mostra algo importante sobre a própria ciência: ter razão não basta, é preciso conseguir explicar o mecanismo por trás de uma ideia. Ele intuiu corretamente a deriva continental décadas antes de existir tecnologia para prová-la, e só foi reconhecido depois de sua morte.</p>

                <p>Vimos aqui as forças que movem as placas por baixo, e as falhas que rompem as rochas nos seus limites. Na próxima aula, vamos olhar para cima: como esses mesmos processos internos, junto com o desgaste causado pelo vento, pela água e pelo tempo, esculpem o relevo que vemos na superfície da Terra.</p>

                <p><strong>Resumo dos conceitos:</strong> deriva continental (hipótese de Wegener); Pangeia (supercontinente original); correntes de convecção (motor do movimento das placas); Dorsal Meso-oceânica (onde nasce nova crosta); subducção (onde a crosta é reciclada); isostasia (equilíbrio entre litosfera e astenosfera); limites divergente, convergente e transformante; falhas tectônicas (normal, inversa e transcorrente); pontos quentes (vulcanismo independente dos limites de placas).</p>

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
      mensagem: 'o tema Deriva Continental e Tectônica de Placas é fascinante! Continue estudando!',
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
