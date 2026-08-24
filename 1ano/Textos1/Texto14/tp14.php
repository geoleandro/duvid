<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Estrutura geológica e formas do relevo terrestre: crátons, escudos cristalinos, bacias sedimentares, dobramentos, planaltos, planícies, montanhas e depressões">
    <meta property="og:title" content="Texto 14 - Estrutura Geológica e Formas do Relevo Terrestre">
    <meta property="og:description" content="Crátons, escudos cristalinos, bacias sedimentares e as principais formas do relevo terrestre">
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

    <title>1º ano - Texto 14 - Estrutura geológica e formas do relevo terrestre</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar as estruturas geológicas presentes no Planeta através da constituição de suas rochas. Identificar e comparar as grandes unidades do relevo terrestre.</span></p>
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
                <p class="w3-pale-green">Pense em regiões do Brasil que você já viu, pessoalmente ou em fotos e vídeos: serras com terrenos acidentados, chapadas com paredões altos, planícies enormes e planas como o Pantanal.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: por que o relevo varia tanto de um lugar para outro dentro do mesmo país, se todos fazem parte da mesma crosta terrestre? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">

            <h2>Investigando as Formas da Superfície Terrestre</h2>

            <div class="area">
                <img alt="Formas de relevo: cordilheira, montanha, morro, planalto, serra, depressão e planícies" class="w3-mobile" id="imagem6" src="tp14f6.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Principais formas de relevo. Fonte: organizado pelo autor. </p>

            <p>O estudo do relevo terrestre envolve a análise da interação entre as diferentes rochas que compõem a crosta e os formatos variados da superfície. Para compreender esses fenômenos, é fundamental aplicar o método científico, que nos permite observar e interpretar os processos e suas relações. Vamos ver como isso se aplica na geografia:</p>

            <p><strong>Relacionar variáveis:</strong></p>

            <p>Como o relevo influencia a distribuição da população? Em áreas montanhosas, por exemplo, a ocupação tende a ser menor devido à dificuldade de acesso e ao relevo acidentado. Já regiões planas, como planícies, são mais propensas ao desenvolvimento urbano e agrícola.</p>

            <p>Como o tipo de rocha afeta a formação do solo? Rochas sedimentares, por exemplo, tendem a formar solos férteis e mais adequados à agricultura, enquanto rochas ígneas, como o basalto, dão origem a solos mais ricos em nutrientes, mas, às vezes, com dificuldade de retenção de água.</p>

            <p><strong>Observação e análise crítica:</strong></p>

            <p>A geografia estuda como o espaço interfere nas atividades humanas e como essas atividades, por sua vez, transformam o espaço. Por exemplo, áreas de bacias sedimentares são frequentemente ocupadas por atividades de exploração de petróleo e gás, enquanto escudos cristalinos são focos de mineração.</p>

            <p>Um dado ajuda a orientar essa investigação: o Brasil está situado na porção central da Placa Sul-Americana, bem afastado das bordas onde as placas tectônicas colidem, se afastam ou deslizam uma sobre a outra. É por isso que o país tem atividade sísmica e vulcânica muito baixa quando comparado a nações como o Chile, o Japão ou a Indonésia, situadas sobre zonas de subducção ativas, onde terremotos e erupções fazem parte do cotidiano. Essa posição geologicamente estável explica, em boa parte, por que o relevo brasileiro é dominado por estruturas antigas e já bastante desgastadas pela erosão, como os crátons e os dobramentos antigos, em vez de cadeias montanhosas jovens e instáveis como as que vamos encontrar em outros continentes.</p>

            <p>A partir dessas questões, investigaremos as estruturas geológicas que compõem e sustentam as diversas formas da superfície terrestre, compreendendo melhor a dinâmica da crosta e como esses fatores influenciam a ocupação e a utilização dos territórios.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (estrutura geologica intro) -->
        <div class="topico">

            <h2>Estrutura Geológica</h2>

            <div class="area">
                <img alt="Escudos cristalinos, plataforma continental e dobramentos modernos no mundo" class="w3-mobile" id="imagem1" src="tp14f1.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Escudos cristalinos, plataformas continentais e dobramentos modernos. Fonte: organizado pelo autor. </p>

            <p>As <span class="termo" data-palavra="Estruturas Geológicas"
                    data-definicao="Grandes corpos rochosos que compõem a crosta terrestre, formados ao longo de bilhões de anos por processos tectônicos e de sedimentação, cada um com características, idades e processos formativos distintos.">estruturas
                    geológicas</span> são grandes corpos rochosos que compõem a crosta terrestre, formadas ao longo de bilhões de anos por processos tectônicos e de sedimentação. Cada tipo de estrutura tem características, idades e processos formativos distintos, moldando as paisagens e o relevo que conhecemos hoje. Vamos detalhar cada uma delas.</p>

            <p>Vale relembrar a conexão com o que vimos na aula sobre o ciclo das rochas: os crátons e seus escudos cristalinos são formados, sobretudo, por rochas ígneas e metamórficas muito antigas; as bacias sedimentares e as plataformas, como o próprio nome sugere, são construídas a partir do acúmulo de rochas sedimentares; e os dobramentos envolvem intenso metamorfismo regional, quando o choque de placas dobra e comprime camadas inteiras de rocha. Ou seja, cada estrutura geológica é, na prática, uma etapa diferente do mesmo ciclo das rochas, só que em uma escala continental.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (cratons escudos plataformas) -->
        <div class="topico">

            <h2>Crátons: Escudos Cristalinos e Plataformas</h2>

            <div class="area">
                <img alt="Distribuição dos crátons no mundo" class="w3-mobile" id="imagem2" src="tp14f2.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Distribuição dos crátons no mundo. Fonte: organizado pelo autor. </p>

            <p>Os <span class="termo" data-palavra="Cráton"
                    data-definicao="Porção mais antiga e estável da crosta continental, formada no Pré-Cambriano há cerca de 3,8 bilhões de anos, composta por rochas extremamente resistentes ao intemperismo."><strong>crátons</strong></span> são
                as partes mais antigas da crosta terrestre, formadas durante o período Pré-Cambriano, há cerca de 3,8 bilhões de anos. Eles são compostos por rochas extremamente resistentes, e suas superfícies geralmente apresentam um desgaste acentuado devido à ação de agentes erosivos ao longo de milhões de anos. Os crátons são divididos em dois tipos.</p>

            <p><strong><span class="termo" data-palavra="Escudo Cristalino"
                        data-definicao="Área de um cráton onde rochas cristalinas (magmáticas e metamórficas) estão expostas diretamente na superfície, sem cobertura sedimentar, marcada por intensa erosão.">Escudos
                        cristalinos</span>:</strong> áreas onde as rochas cristalinas estão expostas na superfície, geralmente formadas por rochas metamórficas e magmáticas. São regiões antigas e estáveis que passaram por intensa erosão.</p>

            <p><strong>Exemplos:</strong> o Escudo Brasileiro ocupa cerca de 36% do território nacional e é subdividido em três grandes blocos: o Escudo das Guianas, no extremo norte; o Escudo do Brasil Central (ou Guaporé), a maior porção, em boa parte encoberta pela Floresta Amazônica; e o Escudo Atlântico, que se estende do sul da Bahia até Minas Gerais e o Espírito Santo. Já o Escudo Canadense cobre parte do Canadá e do norte dos Estados Unidos, e é conhecido por abrigar alguns dos minerais mais antigos do planeta.</p>

            <p><strong>Características:</strong> em geral, esses escudos sustentam formações de relevo com média elevação e são ricos em minerais metálicos, como ouro, ferro e níquel. No Brasil, três províncias minerais concentradas em áreas de escudo se destacam pela importância econômica: o Quadrilátero Ferrífero, em Minas Gerais, uma das regiões com maiores reservas de minério de ferro do Planeta; a Serra dos Carajás, no Pará, hoje o maior complexo de mineração do país; e o Maciço do Urucum, em Mato Grosso do Sul, fonte de ferro e manganês.</p>

            <p><strong><span class="termo" data-palavra="Plataforma"
                        data-definicao="Superfície cratônica coberta por espessas camadas de rochas sedimentares acumuladas ao longo do tempo, geralmente plana, formando a base estrutural de muitos continentes.">Plataformas</span>:</strong> são
                superfícies cratônicas cobertas por espessas camadas de sedimentos acumulados ao longo do tempo, formando as chamadas bacias sedimentares. Essas plataformas são geralmente planas e compõem a base estrutural de muitos continentes.</p>

            <p><strong>Exemplo:</strong> a Plataforma Sul-Americana é uma das maiores do mundo e estende-se por boa parte da América do Sul. A Plataforma Siberiana é outra extensa região, localizada na Rússia, cobrindo uma vasta área de paisagem plana.</p>

            <p>Uma forma simples de visualizar a diferença entre essas duas estruturas: no escudo cristalino, o <strong>embasamento cristalino</strong>, a rocha mais antiga da crosta, está exposto diretamente na superfície; já na plataforma, esse mesmo embasamento pode estar soterrado a milhares de metros de profundidade, sob sucessivas camadas de rocha sedimentar acumuladas ao longo de centenas de milhões de anos. É justamente essa profundidade que torna a perfuração de poços de petróleo em bacias sedimentares um processo caro e tecnicamente complexo, já que as sondas de perfuração precisam atravessar toda essa espessura de sedimento antes de alcançar as rochas onde o petróleo pode estar armazenado.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (escudo x plataforma) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O que diferencia um escudo cristalino de uma plataforma, sendo os dois partes de um mesmo cráton?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1a">
                        <span>a) o escudo tem rochas cristalinas expostas; a plataforma tem cobertura sedimentar.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1b">
                        <span>b) o escudo é bem mais jovem que a plataforma.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1c">
                        <span>c) a plataforma só existe no fundo dos oceanos.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: as duas vêm do mesmo cráton antigo, mas a plataforma acumulou camadas de sedimento por cima da rocha cristalina original.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (dobramentos) -->
        <div class="topico">

            <h2>Dobramentos Modernos e Antigos</h2>

            <div class="area">
                <img alt="Escudo canadense, faixa dos Apalaches e cordilheira do Himalaia" class="w3-mobile" id="imagem1c" src="tp14f1c.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Escudos, dobramentos antigos e dobramentos modernos: Escudo Canadense, Faixa dos Apalaches e Himalaia. Fonte: organizado pelo autor. </p>

            <p>Os <span class="termo" data-palavra="Dobramento"
                    data-definicao="Formação de relevo resultante do choque entre placas tectônicas, que força as rochas a dobrarem e ondularem, dando origem a cadeias de montanhas. Podem ser modernos (jovens e elevados) ou antigos (desgastados pela erosão)."><strong>dobramentos</strong></span> são
                formados quando placas tectônicas se chocam, forçando as rochas a dobrarem e ondularem em formações elevadas. Esse choque pode ocorrer de duas formas principais: quando uma placa oceânica, mais densa, mergulha sob uma continental (subducção), como no caso dos Andes; ou quando duas placas continentais, de densidade parecida, colidem de frente sem que nenhuma consiga afundar sob a outra, empurrando as camadas de rocha para cima, como aconteceu na formação do Himalaia. Esses dobramentos são divididos entre modernos e antigos, sendo que os modernos formam as grandes cadeias montanhosas do planeta, caracterizadas por elevadas altitudes e alta instabilidade geológica.</p>

            <p><strong><span class="termo" data-palavra="Dobramento Moderno"
                        data-definicao="Cadeia de montanhas jovem, formada recentemente pela colisão de placas tectônicas, com altitudes elevadas e alta instabilidade geológica (ex: Andes, Himalaia).">Exemplos
                        de dobramentos modernos</span>:</strong> a Cordilheira dos Andes, localizada ao longo da costa oeste da América do Sul, se formou a partir do choque entre as placas Sul-Americana e de Nazca e abriga o pico Aconcágua, com 6.960,8 metros de altitude (medição oficial do Instituto Geográfico Nacional da Argentina), o ponto mais alto do continente americano. Outro exemplo é o Himalaia, formado pela colisão entre as placas Indiana e Eurasiática, o que originou o Monte Everest, o pico mais alto do mundo, com 8.848,86 metros, segundo a medição oficial mais recente, anunciada em conjunto pelo Nepal e pela China em 2020.</p>

            <p><strong><span class="termo" data-palavra="Dobramento Antigo"
                        data-definicao="Cadeia de montanhas formada há muito mais tempo que os dobramentos modernos, já bastante desgastada pela erosão, com altitudes menores (ex: Apalaches, Serra do Mar).">Exemplos
                        de dobramentos antigos</span>:</strong> montanhas como os Montes Apalaches (EUA) e a Serra do Mar (Brasil) são formadas por dobramentos antigos e, por isso, mais desgastadas e com altitudes menores, devido à ação de milhões de anos de erosão.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (dobramento moderno x antigo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que os Andes são um dobramento moderno, enquanto a Serra do Mar é um dobramento antigo?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) porque os Andes são mais bonitos e turísticos.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) porque os Andes ainda estão em uma zona ativa de choque de placas; a Serra do Mar, não.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) porque a Serra do Mar é mais alta que os Andes.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: onde as placas ainda colidem, a montanha continua subindo; onde a colisão parou, só resta a erosão desgastando o relevo.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (bacias sedimentares) -->
        <div class="topico">

            <h2>Bacias Sedimentares</h2>

            <div class="area">
                <img alt="Perfil de uma bacia sedimentar sobre embasamento pré-cambriano" class="w3-mobile" id="imagem4" src="tp14f4.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Perfil de uma plataforma: embasamento pré-cambriano coberto por rochas sedimentares e, ao lado, rochas metamórficas expostas. Fonte: organizado pelo autor. </p>

            <p>As <span class="termo" data-palavra="Bacia Sedimentar"
                    data-definicao="Depressão da crosta terrestre onde grandes quantidades de sedimentos se acumularam ao longo do tempo, transformando-se em rochas sedimentares; fonte importante de petróleo, gás natural e carvão mineral."><strong>bacias
                        sedimentares</strong></span> são áreas onde grandes quantidades de sedimentos se acumularam ao longo do tempo, sendo muitas vezes o resultado de antigos mares e lagos que, ao secarem, deixaram camadas de sedimentos que se transformaram em rochas sedimentares. Essas bacias são essenciais para a economia, pois abrigam recursos minerais importantes, como petróleo, gás natural e carvão mineral.</p>

            <p><strong>Exemplo:</strong> a Bacia Sedimentar Amazônica é uma das maiores bacias sedimentares do mundo, cobrindo grande parte da Amazônia brasileira. Ela tem um papel fundamental na extração de recursos minerais, e recentemente, descobriu-se que pode conter reservas significativas de petróleo e gás natural. Outra bacia importante é a Bacia do Paraná, com cerca de 1,5 milhão de km² no total (800 mil km² só em território brasileiro), que cobre partes do Brasil, Paraguai, Uruguai e Argentina e abriga grandes reservas de carvão mineral, além do varvito que vimos na aula anterior, formado justamente sobre essa bacia.</p>

            <p><strong>Características econômicas:</strong> essas áreas também são fontes de água subterrânea e de depósitos fósseis, sendo essenciais para a agricultura e para a extração de minerais energéticos.</p>

            <p>Nos últimos anos, ganhou destaque a Bacia de Santos, uma bacia sedimentar marítima no litoral sudeste do Brasil, onde estão as reservas do <span class="termo" data-palavra="Pré-sal"
                    data-definicao="Conjunto de reservas de petróleo e gás natural encontradas em rochas sedimentares formadas há mais de 100 milhões de anos, soterradas sob uma espessa camada de sal no fundo do mar, principalmente nas bacias de Santos e Campos.">pré-sal</span>: petróleo e gás armazenados em rochas formadas há mais de 100 milhões de anos, hoje soterrados sob uma espessa camada de sal, cerca de 300 km da costa fluminense e paulista. Ali, a distância entre a superfície do mar e o reservatório de petróleo soma aproximadamente 7 mil metros, somando os 2 mil metros de lâmina d'água, mais 1 mil de sedimentos e outros 2 mil de sal que precisam ser atravessados pela perfuração, um desafio de engenharia que só se tornou viável com o desenvolvimento de tecnologias específicas de exploração em águas ultraprofundas. Em 2026, só o campo de Tupi, pioneiro do pré-sal, já ultrapassou a marca de 4 bilhões de barris de óleo equivalente produzidos, com médias diárias acima de 1 milhão de barris em alguns períodos; já o campo de Mero, mais ao sul, também no pré-sal da Bacia de Santos, chegou à capacidade máxima de produção prevista em projeto, de 180 mil barris por dia. Esses números transformaram o Brasil em um dos maiores produtores mundiais de petróleo e ilustram bem como o conhecimento sobre estruturas geológicas orienta decisões econômicas e políticas de grande escala.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (bacias e petroleo) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que bacias sedimentares, como a do Paraná e a Amazônica, são tão importantes para a extração de petróleo e gás natural?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3a">
                        <span>a) porque acumulam espessas camadas de rocha sedimentar, com matéria orgânica soterrada.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3b">
                        <span>b) porque são áreas de vulcanismo ativo.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) porque ficam sempre próximas ao litoral.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: petróleo e gás vêm da transformação de matéria orgânica soterrada sob camadas de sedimento, por isso só aparecem em bacias sedimentares.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (importancia estruturas) -->
        <div class="topico">

            <h2>Importância das Estruturas Geológicas</h2>

            <p>As estruturas geológicas têm impacto direto na configuração do relevo e na ocupação humana, além de serem fundamentais para a economia de vários países. Regiões de escudos cristalinos são ricas em recursos minerais metálicos, enquanto as bacias sedimentares são fontes de hidrocarbonetos e água subterrânea. Os dobramentos modernos, embora ricos em minerais, apresentam desafios logísticos para a ocupação humana devido ao relevo acidentado.</p>

            <p>É por isso que a geologia entra tão diretamente no planejamento territorial. Uma cidade construída sobre uma bacia sedimentar lida com um solo mais espesso, útil para poços de água subterrânea, mas também mais sujeito a recalques (afundamentos) em construções pesadas. Já uma cidade que se expande sobre encostas de um dobramento, como aconteceu em vários bairros da região serrana do Rio de Janeiro, convive com o risco constante de deslizamentos, especialmente quando a vegetação nativa é removida das encostas mais íngremes.</p>

            <p>Saber identificar sobre qual estrutura geológica uma região está assentada, portanto, não é só um exercício acadêmico: é uma ferramenta prática de prevenção de desastres e de planejamento urbano e agrícola.</p>

            <p>O valor econômico das estruturas geológicas vai além da mineração e da agropecuária. Desde 2006, o Brasil também conta com <strong>Geoparques</strong> reconhecidos pela UNESCO, áreas onde o patrimônio geológico se transforma em atração turística e educacional. É o caso do Geopark Araripe, no Ceará, erguido sobre uma bacia sedimentar famosa por seus fósseis do período Cretáceo, com idades entre 150 e 90 milhões de anos, e do Geoparque Caminhos dos Cânions do Sul, entre Santa Catarina e Rio Grande do Sul, esculpido sobre antigos derrames de rocha vulcânica. Esses espaços mostram como entender a estrutura geológica de uma região pode gerar renda de forma sustentável, sem esgotar o recurso, ao contrário do que costuma acontecer na mineração tradicional.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (formas do relevo intro) -->
        <div class="topico">

            <h2>Principais Formas do Relevo Terrestre</h2>

            <div class="area">
                <img alt="Formas de relevo: serra, montanha, depressão, planalto, escarpa e planície, sobre rochas magmáticas e sedimentares" class="w3-mobile" id="imagem7" src="tp14f7.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Formas de relevo sobre rochas magmáticas e sedimentares. Fonte: organizado pelo autor. </p>

            <p>As formas de relevo da superfície terrestre são resultado das interações entre diferentes estruturas geológicas e processos erosivos e de sedimentação. É importante não confundir os dois conceitos: a estrutura geológica é a base rochosa, o "esqueleto" da paisagem, formada ao longo de bilhões de anos; já a forma de relevo é o resultado visível dessa base depois de milhões de anos de desgaste pelo intemperismo, pela erosão e, em alguns casos, pelo acúmulo de novos sedimentos por cima dela. Um mesmo cráton, por exemplo, pode dar origem tanto a um planalto, onde a erosão predomina, quanto a áreas mais baixas nas suas bordas, onde os sedimentos removidos se acumulam. A seguir, vamos explorar os principais tipos de relevo e alguns de seus exemplos marcantes.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (planaltos e planicies) -->
        <div class="topico">

            <h2>Planaltos e Planícies</h2>

            <div class="area">
                <img alt="Montanhas, planaltos e planícies da América do Norte" class="w3-mobile" id="imagem5" src="tp14f5.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Montanhas, planaltos e planícies da América do Norte. Fonte: organizado pelo autor. </p>

            <p><strong><span class="termo" data-palavra="Planalto"
                        data-definicao="Forma de relevo caracterizada por áreas mais elevadas, onde o processo de erosão é mais intenso que o de sedimentação, desgastando as rochas ao longo do tempo.">Planaltos</span>:</strong> caracterizam-se
                por áreas mais elevadas, geralmente entre 200 e 2.000 metros de altitude, onde o processo de erosão é mais intenso que o de sedimentação, desgastando as rochas ao longo do tempo. Suas bordas mais íngremes formam <strong>escarpas</strong>; no Brasil, cadeias de morros e escarpas de planalto costumam ser chamadas popularmente de "serras", mesmo quando, tecnicamente, não se encaixam na definição atual de montanha.<br>
                <strong>Exemplos:</strong> incluem as chapadas brasileiras, como a Chapada Diamantina, com seus altos paredões e vales, e áreas como a Serra do Espinhaço e a Serra da Mantiqueira, que apresentam terrenos acidentados e elevadas altitudes. A própria Serra do Espinhaço se estende por mais de 1.200 km, do Quadrilátero Ferrífero, em Minas Gerais, até a Chapada Diamantina, na Bahia, atravessando três biomas (Mata Atlântica, Cerrado e Caatinga), o que levou a UNESCO a reconhecê-la como Reserva da Biosfera em 2005.</p>

            <p><strong><span class="termo" data-palavra="Planície"
                        data-definicao="Forma de relevo caracterizada por áreas predominantemente planas, onde o processo de sedimentação supera o de erosão, acumulando sedimentos trazidos pelo vento, pelas águas ou pelo gelo.">Planícies</span>:</strong> são
                áreas predominantemente planas, geralmente até 100 metros de altitude, onde o processo de sedimentação supera o de erosão, acumulando sedimentos trazidos pelo vento, pelas águas ou pelo gelo. Podem ser classificadas conforme sua origem: <strong>fluviais</strong>, formadas por depósitos de rios; <strong>lacustres</strong>, originadas de antigos lagos ou de sedimentos depositados nas várzeas em períodos de cheia; e <strong>litorâneas</strong>, situadas junto a oceanos e mares.<br>
                <strong>Exemplos:</strong> localizam-se em regiões próximas a corpos d'água, como as planícies litorâneas, e ao longo de grandes rios, como a planície do Pantanal no Brasil, considerada a maior planície alagável do mundo, com cerca de 210 mil km² no total (144 mil km² em território brasileiro, divididos entre Mato Grosso e Mato Grosso do Sul), que é alagada em períodos chuvosos, favorecendo a biodiversidade local.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (planalto x planicie) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual é a principal diferença entre um planalto e uma planície?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) o planalto sempre tem clima mais frio que a planície.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4b">
                        <span>b) no planalto predomina a erosão; na planície, predomina a sedimentação.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) planície é sempre litorânea, planalto nunca é.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: no planalto, o desgaste das rochas supera o acúmulo de sedimentos; na planície, é o contrário.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (montanhas) -->
        <div class="topico">

            <h2>Montanhas</h2>

            <p>Resultam de intensos processos tectônicos que dobram ou falham as rochas, formando grandes elevações. A definição oficial de montanha não depende só da altitude: é preciso que a forma de relevo tenha, no conjunto, pelo menos 300 metros de desnível em relação às áreas vizinhas, topos aguçados e encostas íngremes.<br>
                <strong>Exemplos no mundo:</strong> o Monte Everest (Ásia), o ponto mais alto do mundo com 8.848,86 metros, e o Aconcágua (América do Sul), o pico mais alto das Américas com 6.960,8 metros, ambos formados por movimentos orogênicos recentes.</p>

            <p>E o Brasil, tem montanhas? Até pouco tempo atrás, essa era uma pergunta sem resposta única entre os próprios geógrafos. Em 2026, depois de seis anos de debates, mapeamentos e expedições de campo, um grupo de cerca de 70 geógrafos e geólogos coordenado pelo IBGE, dentro do novo Sistema Brasileiro de Classificação de Relevo (SBCR), chegou a um consenso: sim, o Brasil tem montanhas, e elas aparecem em pelo menos 14 estados, do Rio Grande do Norte a Santa Catarina.</p>

            <p>As montanhas brasileiras são bem diferentes dos Andes ou do Himalaia: são <strong>dobramentos antigos</strong>, geologicamente muito mais velhos e já bastante desgastados pela erosão, resultado do soerguimento lento da crosta ao longo de dezenas de milhões de anos, e não de uma colisão de placas em curso. Exemplos incluem trechos elevados da Serra do Mar, da Serra da Mantiqueira e da Serra do Espinhaço, além de pontos famosos como o Dedo de Deus, na região serrana do Rio de Janeiro.</p>

            <p>A nova classificação também deixou claro que altitude sozinha não define uma montanha: o formato do topo importa tanto quanto a altura. O Monte Roraima, por exemplo, tem 2.810 metros, mas como possui um topo plano e aplainado, é classificado como <strong>planalto</strong>, não como montanha. Já o Pão de Açúcar, no Rio de Janeiro, com 396 metros, não entra na classificação por ser um morro isolado, sem se agrupar a uma cadeia maior de relevo.</p>

            <p>Esse reconhecimento não é só uma curiosidade acadêmica: ele ajuda a orientar políticas de prevenção a deslizamentos de terra, já que encostas íngremes de montanhas são naturalmente mais propensas a esse tipo de desastre quando ocupadas de forma desordenada, como já vimos no caso de Petrópolis (RJ).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (Roraima nao e montanha) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O Monte Roraima tem 2.810 metros de altitude, mas não é classificado como montanha pelo novo Sistema Brasileiro de Classificação de Relevo (SBCR). Por quê?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) porque não chega a 300 metros de desnível em relação ao entorno.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) porque tem o topo plano e aplainado, sendo classificado como planalto.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) porque fica dentro da Floresta Amazônica.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: altitude sozinha não define montanha. O formato do topo (aguçado ou plano) também entra no critério.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (depressoes) -->
        <div class="topico">

            <h2>Depressões</h2>

            <p><span class="termo" data-palavra="Depressão"
                    data-definicao="Área rebaixada em relação ao entorno, formada principalmente por processos erosivos prolongados. Pode ser absoluta (abaixo do nível do mar) ou relativa (mais baixa que as regiões vizinhas, mas acima do nível do mar).">São
                    áreas rebaixadas</span> em relação ao entorno, formadas principalmente por processos erosivos prolongados. Podem estar abaixo do nível do mar (depressão absoluta) ou em áreas mais baixas que as regiões vizinhas (depressão relativa).<br>
                <strong>Exemplos:</strong> o Mar Morto, com cerca de 430 metros abaixo do nível do mar (e afundando ainda mais, cerca de 1 metro por ano, devido à redução do fluxo do rio Jordão e à exploração de minerais), é uma das depressões absolutas mais conhecidas, e a Depressão Sertaneja, que se estende por parte do interior do Nordeste brasileiro, é um exemplo de depressão relativa: um terreno rebaixado pela erosão ao longo de milhões de anos, hoje coberto majoritariamente pela vegetação da caatinga e marcado por um clima semiárido, com baixos índices pluviométricos e chuvas concentradas e irregulares.</p>

            <p>No Sudeste, outro exemplo conhecido é a <strong>Depressão Periférica Paulista</strong>, uma faixa rebaixada que contorna o planalto ocidental do estado de São Paulo, formada pelo desgaste diferencial de rochas sedimentares menos resistentes à erosão do que as rochas do planalto vizinho. É justamente sobre essa depressão que se desenvolveram importantes eixos rodoviários e agrícolas do interior paulista, o que reforça como o relevo herdado da geologia continua moldando, até hoje, os padrões de ocupação do território.</p>

            <p>Vale registrar que o próprio termo "depressão" está em revisão pelos especialistas do SBCR: como esse tipo de relevo cobre cerca de 60% do território brasileiro e nem toda área mais baixa se encaixa exatamente na antiga definição, a proposta mais recente é usar o termo mais amplo <strong>superfícies rebaixadas</strong>. A lógica é simples: toda depressão é uma superfície rebaixada, mas nem toda superfície rebaixada é, tecnicamente, uma depressão.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (relevo carstico) -->
        <div class="topico">

            <h2>Relevo Cárstico</h2>

            <p><span class="termo" data-palavra="Relevo Cárstico"
                    data-definicao="Relevo esculpido em regiões de rochas calcárias, moldado pela dissolução química do calcário pela água da chuva levemente ácida, formando cavernas, sumidouros e dolinas.">Forma-se</span> em
                regiões com grande concentração de rochas calcárias no subsolo, por meio da ação do <strong>intemperismo químico</strong>: a água da chuva, levemente ácida, dissolve o calcário ao longo do tempo, criando cavernas, sumidouros e depressões circulares chamadas <span
                    class="termo" data-palavra="Dolina"
                    data-definicao="Depressão circular formada na superfície pela dissolução do calcário ou pelo desabamento do teto de cavidades cársticas subterrâneas.">dolinas</span>. Quando o teto dessas cavidades subterrâneas desaba, pode se formar uma cratera repentina na superfície, fenômeno comum em regiões como a Flórida (EUA), construída sobre extensas formações de calcário e argila.<br>
                <strong>Exemplos:</strong> o Parque Nacional Cavernas do Peruaçu, em Minas Gerais, e a região cárstica de Bonito, no Mato Grosso do Sul, com cerca de 78 cavernas já mapeadas em rochas carbonáticas formadas há cerca de 530 milhões de anos, entre elas a famosa Gruta do Lago Azul, com seu lago subterrâneo de mais de 90 metros de profundidade e águas de um azul intenso, além das dolinas registradas com frequência no estado americano da Flórida.</p>

            <p>O relevo cárstico também tem grande importância para a arqueologia brasileira. No Parque Nacional Serra da Capivara, no Piauí, tombado pela UNESCO como Patrimônio Mundial em 1991, abrigos e maciços de rocha calcária, como o sítio Tira-Peia, guardam parte dos mais de 800 sítios arqueológicos com pinturas rupestres já registrados na região, a maior concentração do gênero conhecida no planeta. Datações de alguns desses sítios, que chegam a 48 ou 50 mil anos, alimentam um debate científico intenso, já que desafiam a teoria mais tradicional, segundo a qual o ser humano teria chegado às Américas há cerca de 13 a 15 mil anos, vindo da Sibéria através do Estreito de Bering. Ao preservar vestígios por dezenas de milhares de anos, essas rochas cársticas funcionam como verdadeiras cápsulas do tempo geológicas.</p>

            <p>Essas formas de relevo, moldadas ao longo de milhões de anos, influenciam a ocupação humana, o desenvolvimento de ecossistemas e as atividades econômicas de cada região, oferecendo um panorama variado e dinâmico da superfície terrestre.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (dolinas) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O que causa o desabamento repentino de crateras (dolinas), como as registradas na Flórida (EUA)?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6a" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6a">
                        <span>a) terremotos frequentes na região.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6b" name="pergunta6" type="radio" value="correto" />
                    <label class="card-opcao" for="p6b">
                        <span>b) a dissolução química do calcário pela água da chuva, que enfraquece o teto de cavidades subterrâneas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p6c" name="pergunta6" type="radio" value="errado" />
                    <label class="card-opcao" for="p6c">
                        <span>c) erupções vulcânicas próximas à superfície.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta6', 'resp6', 'globinho6', 'Dica: é o mesmo intemperismo químico que forma cavernas. Quando o teto da cavidade fica fino demais, ele desaba de repente.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp6"></p>
            <div class="area w3-center">
                <img height="64" id="globinho6" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Escreva o nome da estrutura geológica mais antiga e estável da crosta continental, formada há bilhões de anos.</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'cráton', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome da estrutura formada pelo acúmulo de sedimentos, onde geralmente são encontradas reservas de petróleo e gás natural.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'bacia sedimentar', 'resp1b', this, 'globinho1b')">
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


        <!-- <div class="topico"><h2> Infográfico - Resumo</h2><div class="w3-margin"><img id="inforesumotp14" src="inforesumotp14.webp" alt="Infográfico resumo Estrutura geológica e formas do relevo terrestre" class="w3-mobile"><span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button><hr></div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o Brasil tem um território tão grande, por que não temos montanhas tão altas quanto os Andes ou o Himalaia?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque o território brasileiro está assentado, em sua maior parte, sobre um cráton muito antigo e estável, o Escudo Brasileiro, longe dos limites de placas tectônicas onde ocorrem colisões. Sem esse choque entre placas, não há dobramento moderno. As "montanhas" brasileiras, como a Serra do Mar, são dobramentos antigos, já bastante desgastados pela erosão ao longo de centenas de milhões de anos.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que, de repente, surgem crateras (buracos) em algumas cidades da Flórida, engolindo até casas inteiras?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Isso acontece porque a Flórida está construída sobre um extenso relevo cárstico, formado por rochas calcárias. A água da chuva vai dissolvendo lentamente o calcário no subsolo, criando cavidades subterrâneas. Quando o teto de uma dessas cavidades fica fino demais para sustentar o peso da superfície, ele desaba repentinamente, formando uma dolina de forma abrupta, sem aviso.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que o petróleo é encontrado em bacias sedimentares e não em escudos cristalinos?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                O petróleo se forma a partir do soterramento e da transformação, ao longo de milhões de anos, de restos de organismos marinhos acumulados junto a sedimentos. Esse processo só ocorre em bacias sedimentares, onde há espessas camadas de rocha sedimentar. Os escudos cristalinos, ao contrário, são formados por rochas magmáticas e metamórficas muito antigas, sem essas camadas sedimentares, por isso não abrigam reservas de petróleo.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o Roraima tem quase 2.810 metros e não é considerado montanha, o que ele é, então?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Segundo a nova classificação do IBGE, o Roraima é um planalto, apesar da altitude elevada. Isso porque ele tem o topo aplainado, resultado de milhões de anos de erosão sobre uma antiga formação de rocha sedimentar. A classificação de montanha não depende só de estar alto: depende também do formato do relevo, com topos aguçados e encostas íngremes, características que o Roraima não tem.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que são crátons e quais são suas principais características?</h3>
                <h3>2. Como o relevo influencia a distribuição da população? Dê exemplos do texto.</h3>
                <h3>3. Explique como os dobramentos modernos se formam e cite exemplos.</h3>
                <h3>4. Qual é a importância econômica das bacias sedimentares mencionadas no texto?</h3>
                <h3>5. Qual é a diferença entre planaltos e planícies em termos de processos de formação?</h3>
                <h3>6. Descreva o que caracteriza as depressões e dê exemplos de depressão absoluta e relativa.</h3>
                <h3>7. Como o tipo de rocha afeta a formação dos solos e suas características?</h3>
                <h3>8. Quais são as principais formas de relevo terrestre descritas no texto, e como elas influenciam as atividades humanas?</h3>
                <h3>9. Qual é a relação entre a geologia de uma região e sua economia, segundo o texto?</h3>
                <h3>10. Como o texto explica a interação entre as atividades humanas e as estruturas geológicas?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre por que o relevo varia tanto de um lugar para outro. Agora você sabe que essa variação vem de estruturas geológicas diferentes, crátons antigos e estáveis, com seus escudos cristalinos e plataformas, e dobramentos, modernos e ainda ativos ou antigos e já desgastados, combinadas com processos de erosão e sedimentação que esculpem planaltos, planícies, montanhas, depressões e relevos cársticos.</p>

                <p>A Chapada Diamantina, o Pantanal, os Andes e o Escudo Brasileiro contam, cada um, uma história geológica diferente, mas todos fazem parte da mesma dinâmica da crosta terrestre.</p>

                <p><strong>Resumo dos conceitos:</strong> estruturas geológicas; crátons, escudos cristalinos e plataformas; dobramentos modernos e antigos; bacias sedimentares; planaltos, planícies, montanhas e depressões; relevo cárstico e dolinas.</p>

                <p>Falamos bastante sobre bacias sedimentares e sobre como o pré-sal, soterrado sob quilômetros de sedimento e sal, virou uma das maiores riquezas econômicas do Brasil. Na próxima aula, vamos aprofundar justamente esse tema: as fontes de energia que movem o mundo hoje, começando pelos combustíveis fósseis, petróleo, gás natural e carvão mineral, e pelas questões econômicas, políticas e territoriais que envolvem sua produção e distribuição.</p>

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
        mensagem: 'o tema Estrutura Geológica e Formas do Relevo Terrestre é fascinante! Continue estudando!',
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
