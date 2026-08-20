<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Redes e hierarquias urbanas no Brasil: REGIC, metrópoles, cidades globais, descentralização e cidades médias">
    <meta property="og:title" content="Texto 28 - Redes e hierarquias urbanas">
    <meta property="og:description" content="Como as cidades se organizam em rede: quem manda, quem obedece e quem fica de fora na hierarquia urbana brasileira">
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

    <title>2º ano - Texto 28 - Redes e Hierarquias Urbanas</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender o conceito de rede urbana e hierarquia urbana; identificar os níveis do REGIC (metrópoles, capitais regionais, centros sub-regionais e cidades locais); entender o que são cidades globais e como as cidades médias brasileiras estão crescendo num processo de desconcentração urbana.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Prática Social Inicial -->
        <div class="topico">

            <h2>Sua cidade manda ou obedece?</h2>

            <p><span class="primeiraLetra">P</span>ense na sua cidade. Quando alguém precisa de um hospital de alta complexidade, de um tribunal federal, de um aeroporto internacional ou de uma universidade federal com todos os cursos, para onde vai? Para a sua cidade ou para outra maior, mais longe?</p>

            <p>E quem manda na sua cidade? As grandes lojas são franquias de onde? Os bancos têm sede em qual cidade? Quando a prefeitura quer um financiamento grande, para onde manda o pedido?</p>

            <p>Anote no caderno: <strong>Na sua opinião, sua cidade depende de outras cidades para funcionar, ou ela é autossuficiente? Quais serviços você precisa buscar fora?</strong> Pense em pelo menos três exemplos concretos antes de continuar. Guarde essa resposta para comparar ao final da aula.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: Problematização -->
        <div class="topico">

            <h2>O problema que esta aula vai ajudar a entender</h2>

            <p>O Brasil tem mais de 5.500 municípios. A maioria deles é pequena: 70% tem menos de 20 mil habitantes. Mas não são todas iguais nem independentes. Elas se organizam numa rede onde algumas cidades comandam e outras obedecem, algumas atraem investimentos e outras exportam população, algumas concentram funções raras e outras só têm o básico.</p>

            <p>A pergunta desta aula não é "o que é uma metrópole" mas <strong>por que certas cidades concentram poder, renda e oportunidades enquanto a maioria permanece dependente e subserviente a elas.</strong> Entender isso é entender por que jovens saem das cidades pequenas para estudar ou trabalhar, por que o sistema de saúde e educação é tão desigual pelo país, e por que as decisões econômicas que afetam o interior são tomadas em São Paulo ou Brasília.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Rede urbana e hierarquia -->
        <div class="topico">

            <h2>O que é rede urbana</h2>

            <p>Cidades nunca existem isoladas. Elas trocam pessoas, mercadorias, dinheiro e informação umas com as outras. Esse conjunto de cidades conectadas por fluxos é o que os geógrafos chamam de <span class="termo" data-palavra="Rede Urbana" data-definicao="Conjunto de cidades de diferentes tamanhos e funções que se relacionam por fluxos de pessoas, mercadorias, capital e informação. Cada cidade ocupa um nível na hierarquia conforme sua população, diversidade econômica e área de influência. No Brasil, o IBGE mapeia a rede urbana através do estudo REGIC (Regiões de Influência das Cidades).">rede urbana</span>. O fluxo de informação, hoje, também é físico: o Brasil está conectado ao resto do mundo por cerca de 385 mil quilômetros de cabos de fibra óptica submarinos, e apenas quatro cidades funcionam como porta de entrada desses cabos no país, Fortaleza, Salvador, Rio de Janeiro e Santos, o que faz delas nós privilegiados na rede global de dados, na mesma lógica das cidades globais que veremos mais adiante.</p>

            <p>Dentro dessa rede, as cidades se posicionam numa <span class="termo" data-palavra="Hierarquia Urbana" data-definicao="Classificação das cidades conforme seu tamanho demográfico, diversidade de funções econômicas e área de influência sobre outras cidades. No topo estão as 15 metrópoles do país, seguidas por capitais regionais, centros sub-regionais, centros de zona e centros locais. O IBGE usa essa classificação no estudo REGIC.">hierarquia urbana</span>: cidades maiores oferecem funções mais raras e especializadas, atraem as menores para sua área de influência e tomam decisões que afetam toda a rede abaixo delas.</p>

            <h3>O REGIC: o mapa da hierarquia brasileira</h3>

            <p>Desde 1966, o IBGE publica o <span class="termo" data-palavra="REGIC" data-definicao="Regiões de Influência das Cidades: estudo publicado periodicamente pelo IBGE que mapeia como as cidades brasileiras se organizam em hierarquia, identificando quais municípios gravitam em torno de qual cidade de referência. A versão mais recente (2018) classifica as cidades em 5 grandes níveis: Metrópoles, Capitais Regionais, Centros Sub-regionais, Centros de Zona e Centros Locais.">REGIC</span> (Regiões de Influência das Cidades), um mapa de como os municípios gravitam uns em torno dos outros. A cada cidade, o IBGE pergunta: onde os moradores vão buscar o que não encontram aqui? Essa atração define a área de influência de cada cidade e seu nível na hierarquia. A edição de 2018 é a quinta da série, depois das anteriores de 1972, 1987, 1993 e 2007: comparar uma edição com a outra permite enxergar como a rede urbana brasileira mudou ao longo de cinco décadas, com cidades subindo (como Campinas, Florianópolis e Vitória) ou descendo de posição conforme sua economia se transforma.</p>

            <p>A classificação tem cinco níveis principais, do maior para o menor:</p>

            <p><strong>1. Metrópoles:</strong> são apenas 15 no país inteiro. São Paulo é a grande metrópole nacional, no topo de tudo; Rio de Janeiro e Brasília são metrópoles nacionais; e completam o grupo Belém, Belo Horizonte, Curitiba, Fortaleza, Goiânia, Manaus, Porto Alegre, Recife, Salvador, além de Campinas, Florianópolis e Vitória, incorporadas a esse nível na atualização do REGIC de 2018. Campinas chamou atenção por ser a única metrópole do país que não é capital de estado. Juntas, as 15 metrópoles concentram funções nacionais ou macrorregionais: sedes de governo, grandes hospitais universitários, bolsas de valores, universidades federais completas.</p>

            <p><strong>2. Capitais regionais:</strong> são 97 no Brasil, cidades como Santos, Campo Grande, Teresina e São Luís. Servem como referência para uma região mais ampla, com serviços médios e alta complexidade, mas dependem das metrópoles vizinhas para o que é mais raro.</p>

            <p><strong>3. Centros sub-regionais:</strong> são 352, como Uberlândia, Sorocaba, Maringá e Ribeirão Preto. Atendem vários municípios menores ao redor com serviços de nível intermediário.</p>

            <p><strong>4. Centros de zona:</strong> somam 398 cidades de pequeno porte que servem como referência local para poucos municípios vizinhos.</p>

            <p><strong>5. Centros locais:</strong> são a base da pirâmide, com 4.037 municípios que atendem apenas sua própria população, sem área de influência sobre outras cidades. Ou seja, mais de 70% dos municípios brasileiros ocupam o degrau mais baixo da hierarquia urbana.</p>

            <div class="w3-margin">
                <img src="ts28f01.png" alt="Mapa do REGIC mostrando a hierarquia urbana brasileira e as áreas de influência das metrópoles"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Mapa do REGIC: hierarquia urbana brasileira em breve</div>'">
                <span class="w3-small w3-margin-left">Hierarquia urbana brasileira segundo o REGIC 2018. Fonte: IBGE.</span>
            </div>

            <p>Cada cidade de referência forma, ao seu redor, uma <span class="termo" data-palavra="Área de Influência" data-definicao="Território formado pelos municípios que recorrem a uma cidade de referência (polo) para acessar bens e serviços que não encontram localmente, como hospitais especializados, universidades, tribunais e grandes redes de comércio. É o critério central usado pelo REGIC para definir o nível hierárquico de cada cidade: quanto maior e mais distante a área de influência, mais alto o posto na hierarquia urbana.">área de influência</span>: o conjunto de municípios vizinhos que dependem dela para serviços mais complexos. É assim que o IBGE constrói o REGIC na prática: entrevista prefeituras e moradores perguntando para onde vão buscar o que falta na própria cidade, e desenha no mapa quem gravita em torno de quem. Uma capital regional pode ter uma área de influência de 20 ou 30 municípios menores; uma metrópole nacional como São Paulo tem influência sobre estados inteiros, às vezes sobre o país todo, chegando a polarizar municípios de regiões distantes da sua própria.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 5: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Uma cidade de 80 mil habitantes no interior de Minas Gerais tem um hospital regional que atende pacientes de 12 municípios vizinhos, uma faculdade privada com cursos de administração e direito, e agências dos principais bancos. Seus moradores precisam ir a Belo Horizonte para tratamentos oncológicos e cirurgias de alta complexidade. Com base no REGIC, essa cidade se enquadra como:</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Metrópole regional</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Capital regional</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Centro local</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'hierarquia e sobre funcao e alcance: influencia municipios vizinhos mas depende de BH para o que e raro.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 6: Cidades globais e descentralização -->
        <div class="topico">

            <h2>Cidades globais: onde se tomam as decisões do mundo</h2>

            <p>No topo da hierarquia mundial, acima mesmo das metrópoles nacionais, existem as <span class="termo" data-palavra="Cidade Global" data-definicao="Conceito desenvolvido pela socióloga Saskia Sassen para descrever cidades que funcionam como nós de comando da economia mundial. Concentram sedes de corporações multinacionais, bolsas de valores, escritórios de grandes bancos, agências de publicidade globais e centros culturais de alcance internacional. As principais são Nova York, Londres, Tóquio e Paris. São Paulo é a única cidade global do tipo Alfa da América do Sul, segundo a classificação GaWC.">cidades globais</span>. O conceito foi criado pela socióloga Saskia Sassen para descrever cidades que não apenas são grandes, mas funcionam como centros de comando da economia capitalista mundial.</p>

            <p>Uma cidade global não se define pelo tamanho da população, mas pela concentração de funções de controle: sedes de corporações multinacionais, bolsas de valores conectadas globalmente, escritórios dos maiores bancos de investimento, centros de mídia e cultura com alcance internacional. Para medir esse poder, a rede de pesquisa <span class="termo" data-palavra="GaWC" data-definicao="Globalization and World Cities Research Network, rede de pesquisa ligada à Universidade de Loughborough, no Reino Unido, que mede a conectividade internacional das cidades a partir da presença de empresas de serviços avançados (bancos, consultorias, escritórios de advocacia, seguradoras). Classifica as cidades em níveis Alfa, Beta e Gama, do mais conectado ao menos conectado. É referência frequente em questões de vestibular e ENEM sobre cidades globais.">GaWC</span> (Globalization and World Cities Research Network) classifica as cidades globais em níveis Alfa, Beta e Gama, conforme sua conectividade internacional. Nova York e Londres ocupam o topo absoluto da categoria Alfa. São Paulo também é classificada como cidade Alfa pelo GaWC, a única da América do Sul nesse patamar, funcionando como o principal polo financeiro e de serviços avançados do continente. O levantamento de 2020, usado como referência atual, analisou a presença de mais de 170 grandes empresas de serviços avançados (bancos, consultorias, escritórios de advocacia, seguradoras) em mais de 700 cidades do mundo todo para chegar a essa classificação.</p>

            <p>Isso significa que uma decisão tomada numa reunião de diretores de multinacional em São Paulo pode fechar uma fábrica no interior do Piauí ou abrir um galpão logístico no Paraná. O poder das cidades globais não é só econômico: é territorial. Elas organizam o espaço do restante do país a partir de seus interesses.</p>

            <div class="w3-margin">
                <img src="ts28f02.png" alt="Mapa das cidades globais do mundo com destaque para São Paulo como única cidade global da América do Sul"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Mapa das cidades globais em breve</div>'">
                <span class="w3-small w3-margin-left">Cidades globais segundo a classificação GaWC (Globalization and World Cities Research Network), 2020.</span>
            </div>

            <h3>Cidades médias: a desconcentração em curso</h3>

            <p>A partir dos anos 2000, os dados do IBGE começaram a mostrar algo novo: as <span class="termo" data-palavra="Cidades Médias" data-definicao="Cidades com população entre 100 mil e 500 mil habitantes que assumem funções intermediárias na rede urbana. A partir dos anos 2000, passaram a crescer mais rápido que as metrópoles no Brasil, atraindo indústrias que fugiam dos altos custos metropolitanos, universidades federais expandidas pelo REUNI e serviços regionais. Exemplos: Uberlândia (MG), Sorocaba (SP), Joinville (SC), Cascavel (PR), Mossoró (RN).">cidades médias</span> (entre 100 mil e 500 mil habitantes) cresceram mais rápido que as metrópoles. Esse fenômeno é chamado de <strong>desconcentração urbana</strong> ou <strong>descentralização industrial</strong>.</p>

            <p>Os fatores que explicam esse crescimento são vários: os custos elevados das metrópoles (aluguel, salário, transporte) tornaram-se barreiras para indústrias; o programa REUNI expandiu universidades federais para cidades do interior; o agronegócio fortaleceu cidades médias do Centro-Oeste e do Nordeste como Sorriso (MT), Sinop (MT) e Mossoró (RN); e as rodovias e ferrovias ampliaram a acessibilidade de municípios que antes eram periféricos na rede.</p>

            <p>Isso não significa que as metrópoles perderam poder. Significa que parte do crescimento demográfico e econômico foi redistribuída, tornando a rede urbana brasileira um pouco menos concentrada do que era nos anos 1970. Os números do Censo 2022 confirmam a tendência: entre 2010 e 2022, a fatia da população brasileira vivendo em cidades de 100 mil a 500 mil habitantes subiu de 25,4% para quase 28% do total, enquanto cidades menores, de 20 mil a 50 mil habitantes, viram sua fatia cair de 16,6% para 15,75%. É um deslocamento lento, mas consistente, na direção das cidades médias.</p>

            <div class="w3-margin">
                <img src="ts28f03.png" alt="Gráfico comparando o crescimento populacional de cidades médias e metrópoles no Brasil entre 2000 e 2022"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Gráfico de crescimento de cidades médias em breve</div>'">
                <span class="w3-small w3-margin-left">Taxa de crescimento de cidades médias versus metrópoles no Brasil, 2000–2022. Fonte: IBGE, Censo 2022.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Entre 2000 e 2022, cidades médias do interior do Brasil cresceram mais rapidamente que São Paulo e Rio de Janeiro. Qual conjunto de fatores melhor explica esse processo de desconcentração urbana?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Declínio das metrópoles</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Custos, agronegócio e universidades</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Transferência forçada pelo governo</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'nao foi planejado: custos altos nas metropoles, agronegocio e o REUNI tornaram as cidades medias mais atraentes.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Concentração e desigualdade -->
        <div class="topico">

            <h2>Concentração urbana e desigualdade regional</h2>

            <p>A rede urbana brasileira reflete e reproduz as desigualdades regionais do país. O Sudeste, com São Paulo no topo, concentra as funções de maior valor agregado: finanças, tecnologia, serviços especializados, comércio exterior. O Norte e o Nordeste têm redes urbanas mais frágeis, com menos metrópoles, menos capitais regionais e mais municípios dependendo de centros locais para tudo.</p>

            <p>O resultado prático é que um jovem do interior do Maranhão que quer cursar medicina precisa migrar. Que um empresário do Pará que quer fazer uma operação financeira complexa depende de um banco com sede em São Paulo. Que uma empresa do Nordeste que quer exportar precisa de um porto ou aeroporto de carga adequado, que frequentemente não está na sua cidade.</p>

            <p>A <span class="termo" data-palavra="Primazia Urbana" data-definicao="Fenômeno em que uma única cidade domina de forma desproporcional a rede urbana de um país ou região, concentrando funções, população e poder econômico muito acima do segundo maior centro. São Paulo exerce primazia sobre a rede urbana brasileira: com cerca de 21,6 milhões na região metropolitana, é bem maior que Rio de Janeiro e concentra sozinha quase 10% do PIB nacional.">primazia urbana</span> de São Paulo é expressão desse processo: o município concentra sozinho cerca de 9,7% do PIB nacional (mais do que a soma de milhares de municípios brasileiros), é sede das maiores empresas do país, do principal aeroporto internacional, da maior bolsa de valores e dos principais centros culturais. Somadas, São Paulo, Rio de Janeiro e Brasília respondem por 16,8% de todo o PIB do país. O mesmo padrão aparece no setor de comunicação: segundo levantamento da Repórteres Sem Fronteiras e do Intervozes, apenas cinco grupos controlavam 26 dos 50 maiores veículos de mídia (TV, rádio, jornal e internet) do Brasil, e quase 80% das sedes dessas empresas ficavam em São Paulo e no Rio de Janeiro. Não é errado que São Paulo seja grande, mas é sintomático que o Brasil precise tanto de uma única cidade para funcionar, seja no PIB, seja em quem decide o que vira notícia no resto do país.</p>

            <p>Um estudo do IBGE de 2024, chamado Gestão do Território, buscou identificar quais municípios
                brasileiros funcionam como centros de comando na rede urbana, os chamados Centros de Gestão do
                Território, considerando tanto instituições públicas (o lado do Estado) quanto empresas com filiais
                em vários lugares (o lado do Mercado). De um universo de 5.570 municípios do país, apenas 39,1%
                (2.176 municípios) se qualificaram como Centros de Gestão em 2024, uma proporção até um pouco menor
                que os 39,6% registrados em 2014. São Paulo lidera o ranking geral, seguido por Brasília e Rio de
                Janeiro, confirmando o comando que esses três municípios exercem sobre a gestão pública e empresarial
                do país. Um dos indicadores usados para medir essa centralidade é o número de
                <strong>assalariados externos</strong>, trabalhadores ligados a empresas sediadas em um município mas
                que atuam fora dele, o que revela o alcance da gestão empresarial daquele centro sobre outras áreas.
                Itajaí, em Santa Catarina, foi um dos municípios que mais cresceu nesse indicador, puxado pelo seu
                polo industrial e portuário, mostrando que mesmo cidades de porte médio podem ampliar seu raio de
                comando dentro da rede urbana.</p>

            <div class="w3-margin">
                <img src="ts28f04.png" alt="Infográfico mostrando a concentração do PIB brasileiro nas metrópoles do Sudeste em comparação com o restante do país"
                    class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Infográfico de concentração do PIB em breve</div>'">
                <span class="w3-small w3-margin-left">Distribuição do PIB brasileiro por região e principais metrópoles. Fonte: IBGE, Contas Regionais 2022.</span>
            </div>

            <h3>Desertos de serviços: quando a hierarquia falha o cidadão</h3>

            <p>A hierarquia urbana não é só um esquema acadêmico: ela decide, na prática, se uma pessoa consegue ou não fazer uma quimioterapia perto de casa. Quando um nível inteiro da hierarquia não oferece um serviço essencial, especialistas chamam isso de <span class="termo" data-palavra="Deserto de Serviços" data-definicao="Território, geralmente formado por municípios de baixa hierarquia urbana, onde faltam serviços essenciais como hospitais especializados, faculdades de medicina, agências bancárias ou varas judiciais, obrigando a população a se deslocar por longas distâncias até a cidade de referência mais próxima que ofereça o serviço. O termo é usado sobretudo para saúde ('desertos assistenciais' ou 'desertos médicos') mas se aplica a outros serviços concentrados no topo da hierarquia urbana.">deserto de serviços</span>. O exemplo mais estudado é o dos "desertos médicos": municípios de centro local ou centro de zona costumam não ter nenhum médico especialista fixo, obrigando o paciente a viajar até a capital regional ou metrópole mais próxima, às vezes a centenas de quilômetros. Segundo o Conselho Federal de Medicina, em 2023 a região Sudeste tinha 3,76 médicos para cada mil habitantes, contra apenas 2,22 no Nordeste e 1,73 no Norte, praticamente a metade da média nacional (2,8). Essa desigualdade acompanha de perto a hierarquia urbana: quanto mais concentrada a rede de cidades de uma região em poucas metrópoles e capitais regionais, maior a distância que o paciente precisa percorrer.</p>

            <p>O mesmo padrão se repete em outros serviços: varas da Justiça Federal, agências de bancos públicos, campi de universidades federais e até mesmo entregas rápidas de e-commerce seguem de perto a hierarquia urbana, concentrando-se nas metrópoles e capitais regionais e rareando conforme se desce em direção aos centros locais. Um morador de centro local muitas vezes precisa viajar a uma capital regional só para dar entrada num processo judicial simples ou para retirar um documento que, numa metrópole, sairia no mesmo dia. Por isso, entender a posição da sua cidade na hierarquia urbana também é entender quais direitos básicos estão, ou não, garantidos a poucos quilômetros de casa.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 8.5: Texto-fonte -->
        <div class="topico">

            <div class="duvid-bloco-apoio">
                <div class="duvid-texto-citacao">
                    "A rede urbana brasileira é profundamente hierárquica e assimétrica. São Paulo funciona como uma metrópole global que comanda cidades regionais que comandam cidades médias que comandam cidades locais. Mas essa cadeia de comando não distribui equitativamente os benefícios do crescimento. Cada nível inferior extrai menos valor e acessa menos serviços. A hierarquia urbana não é apenas uma descrição da organização espacial: é também uma descrição de relações de poder e de reprodução da desigualdade territorial."
                </div>
                <div class="duvid-fonte-texto">Adaptado de CORRÊA, Roberto Lobato. A Rede Urbana. São Paulo: Ática, 1989.</div>
            </div>

            <div class="w3-panel w3-pale-yellow w3-margin-top">
                <p><strong>Responda no caderno antes de continuar:</strong></p>
                <p>1. O texto afirma que a hierarquia urbana é "uma descrição de relações de poder." Com base no que você estudou, dê dois exemplos concretos de como esse poder se manifesta na vida das pessoas que moram em cidades de menor hierarquia.</p>
                <p>2. A desconcentração urbana (crescimento das cidades médias) é suficiente para resolver essa assimetria? Por quê?</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Catarse -->
        <div class="topico">

            <h2>O que mudou no seu olhar</h2>

            <p>Antes de estudar esta aula, você provavelmente via a diferença entre cidades como uma questão de tamanho: cidades maiores têm mais coisas, cidades menores têm menos. Simples assim. Agora você vê que a diferença vai além do tamanho: é uma diferença de <strong>poder</strong>. Certas cidades comandam recursos, decisões e oportunidades porque a estrutura econômica do capitalismo concentra funções de alta rentabilidade nelas, e distribui funções de baixo valor para as demais.</p>

            <p>Quando um jovem da sua cidade sai para estudar na capital, não é porque a capital é "melhor" em algum sentido abstrato. É porque a hierarquia urbana concentrou na capital as universidades, os hospitais, os empregos qualificados e as oportunidades que deveriam estar distribuídas por todo o território. A rede urbana é, também, uma rede de reprodução das desigualdades.</p>

            <p><strong>Resumo dos conceitos:</strong> rede urbana (conjunto de cidades conectadas por fluxos); hierarquia urbana (classificação das cidades por função e área de influência, com 5 níveis no REGIC: metrópoles, capitais regionais, centros sub-regionais, centros de zona e centros locais); área de influência (municípios menores que dependem de uma cidade-polo); REGIC (mapa da hierarquia urbana brasileira do IBGE, com 15 metrópoles no topo); cidade global e GaWC (nó de comando da economia mundial, classificado em níveis Alfa, Beta e Gama; São Paulo é Alfa); primazia urbana (dominância desproporcional de uma cidade); desconcentração urbana (crescimento relativo das cidades médias a partir dos anos 2000); Centros de Gestão do Território (municípios que comandam a rede urbana pela gestão pública e empresarial); deserto de serviços (falta de serviços essenciais em municípios de baixa hierarquia).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 10: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="titulo-pr">Perguntas que você provavelmente tinha</h2>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Qual a diferença entre metrópole e cidade global?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Metrópole é um conceito demográfico e funcional: uma cidade grande que exerce influência sobre uma macrorregião nacional. Cidade global é um conceito de poder econômico internacional: uma cidade que funciona como nó de comando da economia capitalista mundial, independentemente do tamanho. Uma cidade pode ser metrópole nacional sem ser global (Manaus, por exemplo, é metrópole regional brasileira mas não tem o alcance global de São Paulo). E uma cidade global pode não ser a maior do país (Frankfurt não é a maior cidade da Alemanha, mas é uma das principais cidades globais do mundo por concentrar o banco central europeu e as maiores bolsas de valores do continente).</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que o ENEM cobra tanto o REGIC?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> O REGIC aparece frequentemente no ENEM porque é o principal instrumento do IBGE para analisar a organização territorial brasileira. O ENEM gosta de apresentar uma situação concreta (uma cidade com certas características) e pedir que o aluno classifique ou analise sua posição na rede urbana. Para responder bem, é preciso entender que a posição na hierarquia é definida pela função que a cidade exerce e pela área de influência que ela tem, não apenas pelo tamanho da população. Uma cidade pequena pode ser capital regional se oferecer serviços raros para uma região ampla; uma cidade grande pode ser centro local se não tiver influência sobre nenhuma cidade ao redor.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Cidades médias vão substituir as metrópoles?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Não. O crescimento das cidades médias é real e importante, mas não representa o fim da primazia das metrópoles. O que acontece é uma redistribuição parcial do crescimento, não uma inversão da hierarquia. São Paulo continua sendo o centro financeiro, cultural e econômico dominante do Brasil. O que muda é que parte das funções industriais e de serviços de nível médio está se deslocando para fora das metrópoles, tornando a rede urbana um pouco mais equilibrada. A tendência de longo prazo, se mantida, pode reduzir a primazia urbana, mas isso é um processo lento que depende de investimento público consistente em infraestrutura, educação e saúde fora das metrópoles.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Todo mundo que mora perto de uma metrópole tem acesso fácil a serviços de qualidade?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Não necessariamente. A posição de uma cidade na hierarquia urbana indica que o serviço existe em algum lugar próximo, mas não garante que todo mundo consiga acessá-lo com facilidade. Mesmo dentro de metrópoles como São Paulo, bairros periféricos distantes do centro enfrentam filas enormes, poucos leitos hospitalares e falta de especialistas, um problema conhecido como deserto de serviços interno. Ou seja, a hierarquia urbana explica onde os serviços existem no território nacional, mas a desigualdade dentro da própria cidade explica quem, de fato, consegue chegar até eles.</p>

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
                <h3>Onde sua cidade está na rede?</h3>
                <p><strong>Atividade individual</strong></p>

                <p>No início desta aula você anotou para onde sua cidade recorre quando precisa de serviços que não tem. Releia o que escreveu. Agora responda com os conceitos da aula:</p>

                <p><strong>1.</strong> Com base nos serviços que sua cidade oferece e na sua área de influência sobre municípios vizinhos, em qual nível do REGIC você classificaria sua cidade? Justifique.</p>
                <p><strong>2.</strong> De qual metrópole ou capital regional sua cidade depende para serviços de alta complexidade? Como essa dependência se manifesta no cotidiano dos moradores?</p>
                <p><strong>3.</strong> Há algum serviço importante que sua cidade deveria ter mas não tem? Por que você acha que esse serviço não chegou até ela?</p>
                <p class="w3-small w3-text-grey">Dica: consulte o REGIC 2018 em ibge.gov.br para ver a classificação oficial da sua cidade.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 13: Questões para o caderno -->
        <div class="topico">

            <div class="w3-pale-yellow">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. O que é rede urbana? Por que as cidades não existem de forma isolada?</h3>

                <h3>2. Quais são os cinco níveis da hierarquia urbana no REGIC? Cite um exemplo de cidade brasileira para cada nível.</h3>

                <h3>3. O que é o REGIC e qual é a sua utilidade para entender a organização do território brasileiro?</h3>

                <h3>4. O que são cidades globais? Por que São Paulo é classificada como cidade global e Manaus, que também é metrópole, não tem o mesmo status?</h3>

                <h3>5. O que é primazia urbana? Como ela se manifesta no caso de São Paulo em relação ao restante do Brasil?</h3>

                <h3>6. Quais fatores explicam o crescimento acelerado das cidades médias brasileiras a partir dos anos 2000?</h3>

                <h3>7. Por que a hierarquia urbana não é apenas uma descrição geográfica, mas também uma descrição de relações de poder e desigualdade? Dê dois exemplos da vida real que ilustrem essa afirmação.</h3>

                <h3>8. Um jovem do interior do Ceará precisa sair para Fortaleza para fazer uma cirurgia cardíaca. Com base no conceito de hierarquia urbana, explique por que essa situação é uma consequência estrutural da rede urbana brasileira e não apenas um problema de falta de investimento local.</h3>

                <h3>9. Compare a rede urbana do Sudeste com a do Norte: quais diferenças existem em termos de número de metrópoles, capitais regionais e cidades médias? O que essas diferenças revelam sobre as desigualdades regionais do Brasil?</h3>

                <h3>10. A desconcentração urbana (crescimento das cidades médias) é suficiente para reduzir as desigualdades regionais do Brasil? Quais outras políticas seriam necessárias para que o poder econômico e os serviços públicos fossem distribuídos de forma mais equitativa pelo território nacional?</h3>

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
        mensagem: 'o tema Redes e Hierarquias Urbanas é fantástico! Continue estudando!',
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
