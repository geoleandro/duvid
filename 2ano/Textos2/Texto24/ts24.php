<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="PEA, setores da economia e desemprego no Brasil: como o IBGE mede o trabalho e quem fica de fora do mercado">
    <meta property="og:title" content="Texto 24 - População III: Atividades Econômicas">
    <meta property="og:description" content="PEA, setores primário, secundário e terciário, desemprego e informalidade no Brasil">
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

    <title>2º ano - Texto 24 - População III: Atividades Econômicas</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender o conceito de PEA e como o IBGE classifica a população economicamente ativa, inativa e desocupada; conhecer os setores da economia (primário, secundário, terciário e quaternário) e a estrutura da força de trabalho brasileira; analisar os tipos de desemprego, o peso da informalidade, a legislação trabalhista brasileira e as desigualdades do mercado de trabalho no Brasil.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Introdução -->
        <div class="topico">

            <h2>Introdução</h2>

            <p><span class="primeiraLetra">N</span>o segundo trimestre de 2026, o Brasil registrou uma taxa de desemprego de 5,4%, a menor para o período desde o início da série histórica da PNAD Contínua em 2012, segundo o IBGE. Mas esse número sozinho não conta toda a história. No mesmo período, 37,4% dos trabalhadores ocupados estavam na informalidade: sem carteira assinada, sem férias remuneradas, sem contribuição previdenciária automática. E o desemprego também não atinge todo mundo da mesma forma: entre os homens, a taxa era de 4,6%; entre as mulheres, 6,4%. Entre trabalhadores brancos, 4,2%; entre pretos, 6,9%; entre pardos, 6,1%.</p>

            <p>Para entender o mercado de trabalho brasileiro, é preciso saber como ele é medido, como a produção é organizada por setores, quais leis protegem o trabalhador formal e por que o desemprego e a informalidade persistem, com intensidades tão diferentes entre grupos sociais, mesmo quando os números oficiais melhoram. Essa é a aula de hoje.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: PEA -->
        <div class="topico">

            <h2>PEA: Quem o IBGE Considera Trabalhador</h2>

            <p>O IBGE divide a população brasileira acima de 14 anos em categorias para medir o mercado de trabalho. Essa divisão é fundamental para interpretar qualquer notícia sobre emprego ou desemprego.</p>

            <p>A <span class="termo" data-palavra="PIA (População em Idade Ativa)" data-definicao="Conjunto de pessoas com 14 anos ou mais aptas a trabalhar, independentemente de estarem ou não trabalhando. No Brasil, a PIA é a base de cálculo de todas as pesquisas de emprego do IBGE e inclui tanto quem trabalha quanto quem está desempregado ou inativo.">PIA (População em Idade Ativa)</span> é o universo de referência: todos com 14 anos ou mais. Dentro da PIA, existe uma divisão central:</p>

            <p>A <span class="termo" data-palavra="PEA (População Economicamente Ativa)" data-definicao="Parte da PIA composta por pessoas que estão ocupadas (trabalhando) ou desocupadas (sem trabalho mas procurando ativamente). No Brasil, a PEA é medida pela PNAD Contínua, pesquisa trimestral do IBGE que visita 211 mil domicílios em todo o país. É a medida mais usada para calcular a taxa de desemprego.">PEA (População Economicamente Ativa)</span> inclui dois grupos: os <strong>ocupados</strong>, que estão efetivamente trabalhando, e os <strong>desocupados</strong>, que estão sem trabalho mas buscam emprego ativamente. A taxa de desemprego é calculada dividindo os desocupados pelo total da PEA.</p>

            <p>A <span class="termo" data-palavra="PEI (População Economicamente Inativa)" data-definicao="Parte da PIA composta por pessoas que não trabalham e não buscam emprego. Incluem estudantes que não trabalham, donas de casa dedicadas exclusivamente ao lar, aposentados que não exercem atividade remunerada e o grupo dos 'desalentados', que desistiram de procurar emprego por não acreditarem que vão encontrar.">PEI (População Economicamente Inativa)</span> inclui quem não trabalha e não está procurando trabalho: estudantes dedicados exclusivamente aos estudos, donas de casa que não exercem atividade remunerada, aposentados inativos e os chamados desalentados, que desistiram de buscar emprego.</p>

            <div class="w3-margin">
                <img src="ts24f01.png" alt="Diagrama da classificacao da populacao pelo IBGE: PIA, PEA (ocupados e desocupados) e PEI" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Diagrama da classificação IBGE em breve</div>'">
                <span class="w3-small w3-margin-left">Estrutura da classificação da população em idade ativa pelo IBGE: PEA (ocupados e desocupados) e PEI. Fonte: IBGE/PNAD Contínua.</span>
            </div>

            <h3>Como o IBGE mede o desemprego</h3>

            <p>A <strong>PNAD Contínua</strong> (Pesquisa Nacional por Amostra de Domicílios Contínua) é a principal fonte de dados do mercado de trabalho brasileiro. A cada trimestre, o IBGE visita 211 mil domicílios em todos os estados e aplica um questionário detalhado sobre as atividades de cada morador nos últimos 7 dias.</p>

            <p>Um detalhe importante: para ser considerado ocupado, basta ter trabalhado pelo menos 1 hora na semana de referência. Para ser considerado desocupado, é preciso não ter trabalhado nas últimas 4 semanas e ter tomado alguma providência para encontrar trabalho. Quem não trabalhou e não tomou nenhuma providência para buscar emprego cai na categoria de inativo, mesmo que esteja disponível.</p>

            <div class="w3-margin">
                <img src="ts24f02.png" alt="Grafico da taxa de desemprego no Brasil pela PNAD Continua 2014 a 2024" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Grafico da PNAD em breve</div>'">
                <span class="w3-small w3-margin-left">Taxa de desemprego no Brasil pela PNAD Contínua, 2014 a 2024. O pico foi em 2020 (pandemia) e a taxa caiu consistentemente até 2024. Fonte: IBGE.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Maria tem 25 anos, não está trabalhando e passou os últimos 2 meses mandando currículos e fazendo entrevistas. Carlos tem 30 anos, não está trabalhando e desistiu de procurar emprego há 3 meses porque acredita que não vai encontrar. Com base na metodologia do IBGE, como cada um é classificado?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Ambos são inativos</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Maria desocupada, Carlos desalentado</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Ambos são desocupados</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'quem busca emprego ativamente e desocupado; quem desistiu de procurar e desalentado, um tipo de inativo (PEI).', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 5: Setores da Economia - primário e secundário -->
        <div class="topico">

            <h2>Os Setores da Economia</h2>

            <p>A atividade econômica de qualquer país pode ser organizada em setores conforme o tipo de produção. Essa classificação ajuda a entender onde os trabalhadores estão, como a economia de um país evoluiu ao longo do tempo e quais são suas vulnerabilidades.</p>

            <h3>Setor Primário</h3>

            <p>O <span class="termo" data-palavra="Setor Primário" data-definicao="Conjunto de atividades econômicas que extraem ou coletam recursos da natureza diretamente. Inclui agricultura, pecuária, pesca, silvicultura (manejo de florestas) e extrativismo mineral e vegetal. É o ponto de partida de quase toda cadeia produtiva, fornecendo matéria-prima para a indústria e alimento para a população.">setor primário</span> compreende todas as atividades que extraem recursos diretamente da natureza: agricultura, pecuária, pesca, silvicultura e mineração. No Brasil, esse setor tem peso econômico muito expressivo. Em 2025, a safra brasileira de grãos (cereais, leguminosas e oleaginosas) atingiu 346,1 milhões de toneladas, recorde da série histórica do IBGE iniciada em 1975, puxada pela soja (166,1 milhões de toneladas, alta de 14,6% sobre o ano anterior) e pelo milho (141,7 milhões de toneladas). O salto foi ainda mais expressivo por vir logo depois de uma safra ruim: em 2024, problemas climáticos derrubaram a produção para 293,8 milhões de toneladas, quase 7% a menos que em 2023, mostrando como o setor primário brasileiro, apesar de toda a tecnologia empregada, continua exposto às variações do clima de uma safra para outra. Apenas onze culturas (soja, milho, cana-de-açúcar, café, arroz, algodão, trigo, mandioca, laranja e feijão) respondem por quase 88,5% do valor gerado pela produção agrícola brasileira, com a soja isolada representando cerca de 42% desse valor.</p>

            <div class="w3-margin">
                <img src="ts24f03.png" alt="Mapa da producao agricola brasileira por regiao e principais culturas de exportacao" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Mapa do setor primário em breve</div>'">
                <span class="w3-small w3-margin-left">Principais produções do setor primário brasileiro por região. Fonte: IBGE/SIDRA, 2023.</span>
            </div>

            <p>Apesar da enorme produção, o setor primário emprega apenas cerca de 9% da PEA brasileira. Isso ocorre porque a modernização do campo com máquinas agrícolas aumentou muito a produtividade sem aumentar proporcionalmente o número de trabalhadores. Entre 2006 e 2017, segundo o Censo Agropecuário do IBGE, o número de tratores no campo cresceu 50%, enquanto o número de pessoas ocupadas nos estabelecimentos rurais caiu 8,8%. Essa é uma das causas do <strong>êxodo rural</strong>, que estudaremos na aula de migrações.</p>

            <div class="w3-margin">
                <img src="ts24f04.png" alt="Colheita mecanizada de soja no Centro-Oeste brasileiro: tecnologia e producao em larga escala" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Imagem do agronegocio em breve</div>'">
                <span class="w3-small w3-margin-left">Colheita mecanizada: o Brasil produz cada vez mais com menos mão de obra no campo. Isso reflete a modernização do setor primário e explica parte do êxodo rural.</span>
            </div>

            <h3>Agricultura Familiar x Agronegócio</h3>

            <p>Um dado essencial e pouco conhecido: dentro do próprio setor primário, quem produz mais valor não é quem emprega mais gente. A <span class="termo" data-palavra="Agricultura Familiar" data-definicao="Modalidade de produção agropecuária realizada em pequenas propriedades, geralmente pelos próprios donos e seus familiares, com pouco uso de mão de obra contratada. No Brasil, responde por 23% do valor da produção agropecuária, mas emprega 67% do pessoal ocupado no campo, segundo o Censo Agropecuário de 2017 (IBGE). É central para o abastecimento do mercado interno de alimentos e para a soberania alimentar do país.">agricultura familiar</span>, praticada em pequenas propriedades, geralmente pelos próprios donos e seus familiares, respondeu por apenas 23% do valor produzido pela agropecuária brasileira em 2017, segundo o Censo Agropecuário do IBGE. No entanto, ela emprega 67% de todo o pessoal ocupado nas atividades agropecuárias do país, envolvendo cerca de 10 milhões de pessoas.</p>

            <p>Já o <strong>agronegócio</strong>, o conjunto de grandes empresas, insumos industrializados, maquinário pesado e cadeias produtivas voltadas à exportação, concentra a maior parte do valor gerado, mas emprega proporcionalmente pouca gente por hectare, justamente por depender intensamente de máquinas. A região do Matopiba (Maranhão, Tocantins, Piauí e Bahia), oficializada por decreto em 2015 e hoje uma das principais fronteiras agrícolas do país, é um exemplo típico dessa lógica: grandes propriedades mecanizadas voltadas majoritariamente à soja. Entender essa diferença é fundamental para não confundir "Brasil, potência agrícola" com "Brasil, país que gera muitos empregos no campo": são coisas distintas, e a agricultura familiar segue sendo essencial para os hábitos alimentares e a diversidade de cultivos consumidos pela população brasileira.</p>

            <div class="w3-margin">
                <img src="ts24f13.png" alt="Comparacao visual entre pequena propriedade de agricultura familiar e grande propriedade de agronegocio mecanizado" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Comparação agricultura familiar x agronegócio em breve</div>'">
                <span class="w3-small w3-margin-left">23% do valor x 67% do emprego: a agricultura familiar concentra trabalhadores, o agronegócio concentra valor de produção. Fonte: Censo Agropecuário 2017, IBGE.</span>
            </div>

            <h3>Setor Secundário</h3>

            <p>O setor secundário é responsável pela transformação de matérias-primas em produtos manufaturados. Inclui a indústria de transformação (alimentos, têxteis, metalurgia, automóveis, eletrônicos), a indústria extrativa mineral (mineração) e a construção civil.</p>

            <p>Historicamente, o Brasil passou por um processo de industrialização acelerado entre as décadas de 1930 e 1970, especialmente no governo Vargas e no regime militar. O eixo industrial brasileiro se concentrou no Sudeste, sobretudo em São Paulo. Hoje, porém, fala-se em <strong>desindustrialização precoce</strong>: o setor industrial perdeu participação no PIB antes de o Brasil ter atingido os níveis de desenvolvimento típicos dos países que passaram pela industrialização plena.</p>

            <div class="w3-margin">
                <img src="ts24f05.png" alt="Linha de producao industrial brasileira: montagem de veiculos ou eletronicos" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Imagem do setor industrial em breve</div>'">
                <span class="w3-small w3-margin-left">Setor secundário: a indústria de transformação emprega cerca de 18% da PEA brasileira. Fonte: IBGE/PNAD Contínua, 2023.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 6: Setor terciário e quaternário -->
        <div class="topico">

            <h2>Setor Terciário: onde Trabalha a Maioria dos Brasileiros</h2>

            <p>O <span class="termo" data-palavra="Setor Terciário" data-definicao="Conjunto de atividades econômicas que não produzem bens materiais, mas prestam serviços. Inclui comércio, transporte, saúde, educação, finanças, turismo, comunicação, administração pública e todas as demais atividades de serviço. É o setor que mais emprega no Brasil e em todos os países com renda média ou alta.">setor terciário</span> abrange todas as atividades de serviços: comércio, transporte, saúde, educação, finanças, turismo, comunicação, administração pública e lazer. No Brasil, o setor terciário responde por mais de 70% do PIB e emprega cerca de 70% da PEA, uma proporção que continua crescendo.</p>

            <div class="w3-margin">
                <img src="ts24f06.png" alt="Movimentacao em centro comercial brasileiro: setor de servicos e o maior empregador do pais" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>Imagem do setor de serviços em breve</div>'">
                <span class="w3-small w3-margin-left">O comércio é parte do setor terciário, o maior empregador do Brasil. Fonte: Agência Brasil.</span>
            </div>

            <h3>Setor Quaternário: a Economia do Conhecimento</h3>

            <p>Alguns geógrafos e economistas distinguem ainda um <strong>setor quaternário</strong>, composto pelas atividades intensivas em conhecimento e tecnologia: pesquisa e desenvolvimento, tecnologia da informação, finanças avançadas, consultoria e produção de dados. São atividades que produzem valor a partir de inteligência e inovação, não de força física ou maquinário pesado. No Brasil, esse setor ainda é pequeno em número de vagas, mas cresce rapidamente em polos como o Porto Digital, no Recife, que reúne mais de 400 empresas de tecnologia e cerca de 18 mil profissionais, funcionando como um contraponto à concentração histórica de investimentos tecnológicos no eixo Sul-Sudeste.</p>

            <div class="w3-margin">
                <img src="ts24f07.png" alt="Trabalhador de tecnologia: economia do conhecimento e o setor quaternario" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>Imagem do setor quaternário em breve</div>'">
                <span class="w3-small w3-margin-left">O setor quaternário cresce com a digitalização da economia brasileira.</span>
            </div>

            <h3>A Uberização do Trabalho</h3>

            <p>Um fenômeno recente que mistura o setor terciário com novas formas de trabalho é a <span class="termo" data-palavra="Uberização" data-definicao="Processo pelo qual plataformas digitais intermediam trabalho sem criar vínculo empregatício formal com os prestadores de serviço. O trabalhador é tratado como 'parceiro autônomo' ou 'empreendedor individual', mas na prática não tem as garantias do emprego formal (férias, FGTS, previdência). O nome vem da empresa Uber, mas o modelo se aplica a entregadores, motoristas, freelancers e muitos outros.">uberização</span>: plataformas digitais como Uber, iFood, Rappi e similares intermediam o trabalho de milhares de pessoas sem criar vínculo empregatício. O trabalhador é chamado de "parceiro" ou "autônomo", mas depende da plataforma para ter acesso a clientes e não tem férias, previdência ou FGTS garantidos. É uma forma nova de informalidade, mas com a aparência de empreendedorismo.</p>

            <p>Esse debate está longe de ser só teórico: em 2025 e 2026, diferentes propostas de regulamentação do trabalho por aplicativo tramitavam simultaneamente no Congresso Nacional, sem consenso entre governo, empresas e categorias de motoristas e entregadores. Uma delas, apresentada pelo governo federal, propõe garantir um pacote de direitos trabalhistas e previdenciários aos motoristas sem eliminar sua autonomia para escolher horários, fixando uma remuneração mínima por hora efetivamente trabalhada em corrida. Já outra proposta, de origem parlamentar, reforça a classificação desses profissionais como "trabalhadores autônomos plataformizados", deixando explícito que não há vínculo empregatício nos moldes da CLT. A disputa mostra como a fronteira entre autonomia e proteção trabalhista, discutida ao longo desta aula, segue em aberto justamente nos setores que mais crescem na economia brasileira.</p>

            <div class="w3-margin">
                <img src="ts24f08.png" alt="Entregadores de aplicativo: a uberizacao do trabalho e uma nova forma de informalidade no Brasil" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>Imagem da uberização em breve</div>'">
                <span class="w3-small w3-margin-left">Entregadores de aplicativo representam o crescimento da uberização: trabalho sem vínculo empregatício mediado por plataforma digital.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Uma fábrica de calçados fecha sua unidade em Franca (SP) porque não consegue competir com calçados importados mais baratos da Ásia. Os 500 trabalhadores da fábrica ficam desempregados. Qual é o tipo de desemprego que melhor descreve essa situação?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Desemprego friccional</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Desemprego estrutural</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Desemprego cíclico</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'mudanca permanente na estrutura produtiva elimina o posto de trabalho: e diferente do friccional (transicao) ou ciclico (crise temporaria).', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Legislação trabalhista -->
        <div class="topico">

            <h2>A Legislação Trabalhista Brasileira</h2>

            <p>Antes de entender por que a informalidade é um problema, é preciso saber exatamente o que o trabalho formal garante no Brasil. O principal conjunto de leis que regulamenta o trabalho no país é a <span class="termo" data-palavra="CLT" data-definicao="Consolidação das Leis do Trabalho, principal conjunto de leis trabalhistas do Brasil, criado em 1943. Garante direitos como salário mínimo, décimo terceiro salário, férias remuneradas, licença-maternidade e paternidade, FGTS, aposentadoria e seguro-desemprego. Trabalhadores informais não têm acesso automático a essas garantias.">CLT (Consolidação das Leis do Trabalho)</span>, criada em 1943. Ela instituiu direitos que hoje parecem óbvios, mas que precisaram ser conquistados: salário mínimo, décimo terceiro salário, férias remuneradas, licença-maternidade e paternidade, FGTS, aposentadoria e seguro-desemprego.</p>

            <p>Em 13 de julho de 2017, a Lei nº 13.467 promoveu a chamada Reforma Trabalhista, buscando adaptar a legislação a realidades que ainda não existiam em 1943. Um dos pontos centrais foi a regulamentação do <strong>teletrabalho</strong> (o home office): a lei passou a exigir que essa modalidade conste expressamente do contrato de trabalho, especificando as atividades a serem realizadas e definindo de quem é a responsabilidade por equipamentos, internet e demais despesas do trabalho remoto.</p>

            <p>A reforma também reforçou a regra de <strong>igualdade salarial</strong>: para trabalho de igual valor, prestado ao mesmo empregador e no mesmo estabelecimento, deve haver igual salário, sem distinção de sexo, etnia, nacionalidade ou idade. Em caso de discriminação comprovada por motivo de sexo ou etnia, a lei prevê pagamento das diferenças salariais devidas mais multa em favor do trabalhador prejudicado.</p>

            <p>Outra mudança relevante de 2017 foi a criação do <strong>contrato de trabalho intermitente</strong>, no qual o trabalhador presta serviços de forma descontínua, sendo convocado e remunerado apenas pelas horas efetivamente trabalhadas. A modalidade foi criada para regularizar situações comuns em setores como bares, restaurantes e eventos, mas também gerou críticas: entidades de trabalhadores argumentam que ela pode reduzir a previsibilidade de renda e enfraquecer vínculos empregatícios mais estáveis, tornando a fronteira entre trabalho formal e informal ainda mais tênue.</p>

            <p>Um caso à parte na história recente da legislação trabalhista brasileira é o do <strong>trabalho doméstico</strong>. Em 2013, a Emenda Constitucional 72, conhecida como <strong>PEC das Domésticas</strong>, equiparou boa parte dos direitos das trabalhadoras domésticas aos de outras categorias profissionais: jornada de 44 horas semanais, hora extra, FGTS obrigatório e seguro-desemprego, entre outros. Mais de uma década depois, porém, a formalização não avançou como se esperava: em 2013, havia 1,9 milhão de domésticas com carteira assinada, número que caiu para 1,5 milhão em 2022, enquanto as informais, que já eram 4 milhões em 2013, chegaram a 4,3 milhões. A categoria é composta majoritariamente por mulheres, 92% do total, das quais 65% são negras, o que faz do trabalho doméstico um dos pontos onde as desigualdades de gênero, raça e formalização discutidas nesta aula se cruzam de forma mais direta.</p>

            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue w3-round-large w3-padding-16 w3-margin-top">
                <p><strong>Atenção para o ENEM:</strong> a CLT protege quem tem carteira assinada (trabalho formal). Motoristas de aplicativo, entregadores e ambulantes, mesmo trabalhando legalmente, não têm as garantias da CLT porque não têm vínculo empregatício reconhecido. É justamente esse o ponto central do debate sobre a regulamentação do trabalho por plataformas digitais, hoje discutido inclusive na Organização Internacional do Trabalho.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Um motorista de aplicativo trabalha em média 10 horas por dia, mas não tem carteira assinada, férias remuneradas nem FGTS. Do ponto de vista da CLT, por que isso acontece?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>Trabalha poucas horas</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>Plataforma não reconhece vínculo</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>CLT não vale para motoristas</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'plataformas tratam motoristas como parceiros autonomos, nao funcionarios: sem vinculo formal, as garantias da CLT nao se aplicam.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 10: Desemprego e informalidade -->
        <div class="topico">

            <h2>Desemprego: Tipos, Causas e o Peso da Informalidade</h2>

            <p>O desemprego não é um fenômeno único. Existem diferentes tipos, cada um com causas e soluções distintas.</p>

            <p>O <span class="termo" data-palavra="Desemprego Friccional" data-definicao="Tipo de desemprego de curta duração que ocorre quando trabalhadores estão entre dois empregos, procurando oportunidades melhores ou aguardando ser contratados após pedido de demissão. É considerado natural e inevitável em qualquer economia de mercado. Reflete mobilidade do trabalhador, não crise econômica.">desemprego friccional</span> é o mais benigno: acontece quando um trabalhador está na transição entre dois empregos. Pediu demissão para buscar algo melhor, ou foi mandado embora mas tem boas perspectivas de recolocação. É um desemprego de curta duração que existe em qualquer economia saudável.</p>

            <p>O <span class="termo" data-palavra="Desemprego Estrutural" data-definicao="Tipo de desemprego causado por mudanças profundas na estrutura da economia, como automação, desindustrialização ou deslocamento por importações. Esses postos de trabalho não retornam com a recuperação econômica: a atividade simplesmente não existe mais ou foi transferida para outro lugar. Exige requalificação dos trabalhadores afetados.">desemprego estrutural</span> é mais grave: resulta de transformações permanentes na economia. Quando uma fábrica fecha porque a produção foi terceirizada para outro país com mão de obra mais barata, ou quando uma máquina substitui definitivamente uma função humana, os postos de trabalho não voltam com a recuperação econômica. Os trabalhadores afetados precisam se requalificar para outras áreas.</p>

            <p>O <strong>desemprego cíclico</strong> (ou conjuntural) ocorre nas crises econômicas: com a queda da atividade, empresas demitem. Quando a economia se recupera, esses postos tendem a retornar. A pandemia de 2020 gerou um pico de desemprego cíclico no Brasil, que chegou a 14,7%.</p>

            <p>O <strong>desemprego tecnológico</strong> é uma subcategoria do estrutural: resulta da substituição de trabalhadores por tecnologia. A automação de caixas de banco e a robótica industrial são exemplos de forças que eliminam postos de trabalho de forma permanente.</p>

            <div class="w3-margin">
                <img src="ts24f09.png" alt="Grafico comparando tipos de desemprego: friccional, estrutural, ciclico e tecnologico" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Quadro dos tipos de desemprego em breve</div>'">
                <span class="w3-small w3-margin-left">Os quatro tipos de desemprego, suas causas e características. Fonte: elaborado pelo autor com base em Vesentini e Mariano.</span>
            </div>

            <h3>Informalidade: o Trabalho sem Proteção</h3>

            <p>O <span class="termo" data-palavra="Trabalho Informal" data-definicao="Trabalho realizado sem registro em carteira de trabalho e sem as garantias previstas na CLT (Consolidação das Leis do Trabalho): férias, 13º salário, FGTS, seguro-desemprego e previdência social. Pode ser trabalho por conta própria sem registro, emprego doméstico sem carteira, comércio ambulante ou qualquer atividade sem contrato formal. No Brasil, afeta mais de um terço dos trabalhadores.">trabalho informal</span> é um dos traços mais persistentes do mercado de trabalho brasileiro. No segundo trimestre de 2026, 37,4% dos trabalhadores ocupados estavam na informalidade: sem carteira assinada, sem direito a férias, sem FGTS, sem seguro-desemprego, sem contribuição previdenciária automática, ou seja, fora de todas as garantias que a CLT oferece a quem tem vínculo formal. O número vem caindo devagar nos últimos anos, mas segue afetando mais de um terço da força de trabalho ocupada do país.</p>

            <div class="w3-margin">
                <img src="ts24f010.png" alt="Mapa da informalidade no Brasil por estado: regioes Norte e Nordeste tem as maiores taxas" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Mapa da informalidade em breve</div>'">
                <span class="w3-small w3-margin-left">Taxa de informalidade por estado, 2º trimestre de 2026: Maranhão (56,9%), Pará (55,9%) e Amazonas (51,7%) lideram; Santa Catarina (25,4%) e Distrito Federal (28,7%) têm as menores taxas do país. Fonte: PNAD Contínua, IBGE.</span>
            </div>

            <p>A informalidade no Brasil não é distribuída igualmente. Os dados do IBGE mostram desigualdades estruturais marcantes: em levantamento recente, trabalhadores pardos tinham taxa de informalidade de 41,6% e pretos, de 40,8%, contra 32,2% entre brancos. O mesmo padrão racial aparece no desemprego, que no 2º trimestre de 2026 era de 6,9% entre pretos e 6,1% entre pardos, contra 4,2% entre brancos. Regiões Norte e Nordeste têm as maiores taxas de informalidade do país, refletindo tanto o peso do trabalho agrícola informal quanto a menor presença de grandes empresas formais nessas regiões.</p>

            <div class="w3-margin">
                <img src="ts24f011.png" alt="Grafico de barras comparando taxa de informalidade por cor ou raca no Brasil: pretos, pardos e brancos" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Grafico de informalidade por raca em breve</div>'">
                <span class="w3-small w3-margin-left">Informalidade por cor ou raça no Brasil: pardos (41,6%), pretos (40,8%), brancos (32,2%). Fonte: IBGE/PNAD Contínua.</span>
            </div>

            <h3>Desemprego e Escolaridade</h3>

            <p>A escolaridade também molda profundamente as chances de estar empregado no Brasil. No segundo trimestre de 2026, a taxa de desemprego entre pessoas com ensino médio incompleto chegou a 9,0%, mais que o dobro da taxa entre quem tem ensino superior completo, de apenas 3,0%. Já entre quem cursou o ensino superior mas não terminou, a taxa ficou em 5,6%, quase o dobro da verificada entre os formados. Esse padrão se repete ano após ano nas pesquisas do IBGE e ajuda a explicar por que a permanência na escola, sobretudo até o fim do ensino médio e, se possível, com continuidade em algum curso superior ou técnico, segue sendo um dos fatores mais associados a melhores condições de inserção no mercado de trabalho brasileiro.</p>

            <h3>Jovens Fora do Mercado de Trabalho</h3>

            <p>Um problema particular do Brasil é o número de jovens que não estudam nem trabalham, chamados internacionalmente de NEET (Not in Education, Employment or Training). Esse número, porém, vem caindo de forma expressiva: em 2019, o grupo somava 11,9 milhões de jovens entre 15 e 29 anos; em 2022, ainda passava de 10,9 milhões (22,3% da faixa etária); e, em junho de 2026, o IBGE registrou 6,2 milhões de jovens nessa situação, equivalentes a 18,7% do grupo, o menor patamar da série. Mesmo com a queda acentuada, o fenômeno segue representando uma perda relevante de capital humano e potencial produtivo para o país, e historicamente atinge de forma desproporcional mulheres, jovens negros e moradores do Nordeste, um recorte que mostra como a exclusão do mercado de trabalho segue os mesmos eixos de desigualdade racial e regional discutidos ao longo desta aula.</p>

            <div class="w3-margin">
                <img src="ts24f012.png" alt="Jovens brasileiros que nem estudam nem trabalham: o fenomeno NEET e suas causas" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Grafico NEET em breve</div>'">
                <span class="w3-small w3-margin-left">Jovens NEET no Brasil: de 11,9 milhões em 2019 para 6,2 milhões em 2026, uma queda expressiva, mas que ainda concentra desigualdades de gênero, raça e região. Fonte: IBGE/PNAD Contínua.</span>
            </div>

            <h3>MEI: uma Informalidade Parcialmente Formalizada</h3>

            <p>Para reduzir a informalidade "pura", o governo federal criou em 2008 a figura do <span class="termo" data-palavra="MEI" data-definicao="Microempreendedor Individual, categoria criada em 2008 para formalizar trabalhadores autônomos com faturamento anual de até R$ 81 mil. Paga um valor fixo mensal reduzido de impostos e passa a ter acesso a aposentadoria, auxílio-doença e outros benefícios previdenciários, além de CNPJ próprio.">MEI (Microempreendedor Individual)</span>, voltada a trabalhadores autônomos como cabeleireiros, eletricistas, vendedores ambulantes e pequenos comerciantes. Com um valor fixo mensal reduzido, o MEI passa a ter CNPJ, emite nota fiscal e ganha acesso a benefícios previdenciários como aposentadoria e auxílio-doença. O teto de faturamento permanece em R$ 81 mil por ano desde 2018, embora um projeto de lei em tramitação no Congresso proponha elevá-lo gradualmente para R$ 110 mil em 2027 e R$ 140 mil em 2028. Em 2026, o Brasil já ultrapassou 17 milhões de MEIs ativos, o que mostra como parte da informalidade brasileira vem migrando para essa formalização intermediária: nem carteira assinada tradicional, nem completamente à margem da lei.</p>

            <p>Boa parte dessas desigualdades no mercado de trabalho, entre regiões, entre o campo e a cidade, entre quem sai e quem fica, também está ligada a um fenômeno que ainda não discutimos diretamente: as migrações internas. Foi justamente a modernização do campo, com menos gente empregada por hectare, que expulsou milhões de trabalhadores rurais em direção às cidades ao longo do século XX. Na próxima aula, vamos estudar exatamente esse processo: as migrações internas, pendulares e de retorno, o êxodo rural e a transumância no Brasil.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11: Resumo -->
        <div class="topico">

            <h2>Resumo</h2>

            <p><strong>PEA:</strong> A PIA inclui todos com 14 anos ou mais. Dentro dela, a PEA são os que trabalham (ocupados) ou buscam trabalho (desocupados). A PEI são os inativos, incluindo desalentados. A taxa de desemprego oficial mede desocupados dentro da PEA.</p>

            <p><strong>Setores:</strong> Primário (extração da natureza: agricultura, mineração; só 9% da PEA, mas com a agricultura familiar concentrando 67% do emprego rural contra 23% do valor produzido); secundário (transformação industrial); terciário (serviços, maior empregador do Brasil); quaternário (conhecimento e tecnologia). A uberização é uma nova forma de trabalho informal mediada por plataformas.</p>

            <p><strong>Legislação trabalhista:</strong> A CLT (1943) garante salário mínimo, 13º, férias, FGTS, licenças e aposentadoria a quem tem vínculo formal. A Reforma Trabalhista de 2017 regulamentou o teletrabalho e reforçou a igualdade salarial. A PEC das Domésticas (2013) estendeu direitos semelhantes às trabalhadoras domésticas, mas a formalização da categoria segue baixa.</p>

            <p><strong>Desemprego:</strong> Friccional (transição natural entre empregos); estrutural (mudanças permanentes na economia); cíclico (crises conjunturais); tecnológico (substituição por máquinas). A informalidade afeta mais de um terço dos trabalhadores brasileiros, com desigualdades marcantes por raça, gênero, região e escolaridade.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11B: Questão aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Segundo o texto, por que o setor primário emprega apenas cerca de 9% da PEA brasileira mesmo produzindo tanto?</p>
            <div class="w3-margin">
                <input class="input" id="q1a24" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp1a24"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a24', 'quinas', 'resp1a24', this, 'globinho1a24')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a24" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <p>Segundo o texto, como as plataformas chamam os motoristas de aplicativo para evitar reconhecer um vínculo empregatício formal com eles?</p>
            <div class="w3-margin">
                <input class="input" id="q2a24" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp2a24"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a24', 'parceiro', 'resp2a24', this, 'globinho2a24')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho2a24" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <button class="btnHide" onclick="MostrarProximo(this); this.style.display='none'">Próximo ➜</button>
            <hr>
        </div>


        <!-- BLOCO 11C: Infográfico - Resumo -->
        <div class="topico">
            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin"><img id="inforesumots24" src="inforesumots24.webp"
                    alt="Infográfico resumo População III - PEA, setores da economia e desemprego" class="w3-mobile" onerror="this.outerHTML='<div style=padding:48px 0;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📊 Infográfico em breve</div>'">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 12: Ficha de conceitos -->
        <div class="topico">
            <div id="ficha-conceitos"></div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 13: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado">Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O que é "desalento" e por que ele importa para entender o desemprego real?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Desalento é quando uma pessoa parou de procurar emprego porque não acredita que vai encontrar. Pela metodologia do IBGE, ela cai na categoria de inativa (PEI), e não aparece na taxa oficial de desemprego. Isso significa que a taxa oficial pode subestimar o problema real do mercado de trabalho. Por isso, o IBGE divulga também a <strong>taxa de subutilização</strong>, que inclui desocupados, desalentados e subocupados (quem trabalha menos horas do que gostaria). No segundo trimestre de 2026, enquanto o desemprego oficial era de 5,4%, a subutilização estava em 12,9%, mais que o dobro. Nas provas do ENEM, questões sobre desemprego frequentemente exploram essa diferença entre desemprego oficial e real.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O Brasil está desindustrializando?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Sim, e é um debate importante. Em 1985, a indústria (incluindo transformação, construção, mineração e utilidades) respondia por 48% do PIB brasileiro; em 2024, essa participação havia caído para 24,7%, uma queda de mais de 23 pontos percentuais em quatro décadas. O recuo é ainda mais acentuado quando se olha só para a indústria de transformação (fábricas propriamente ditas), que caiu de cerca de 36% do PIB em 1985 para pouco mais de 11% recentemente. O problema é que nos países desenvolvidos esse tipo de queda ocorreu depois de terem atingido altos níveis de renda. O Brasil está reduzindo a indústria antes de ter completado seu desenvolvimento, voltando a ser exportador de commodities (matérias-primas) como soja e minérios. Economistas chamam isso de "desindustrialização precoce" e alertam para os riscos: o setor industrial gera empregos formais de maior qualidade e impulsiona a inovação tecnológica mais do que a exportação de matérias-primas brutas.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Trabalho informal é o mesmo que trabalho ilegal?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Não, é uma confusão comum. Trabalho informal é todo trabalho que não tem registro formal na CLT: vendedor ambulante, faxineira sem carteira assinada, motorista de aplicativo. É legal, mas sem as garantias trabalhistas da CLT. Trabalho ilegal é uma categoria diferente: trabalho escravo, trabalho infantil abaixo da idade permitida ou qualquer atividade que viola a lei. Um ambulante vendendo artesanato na praça exerce atividade informal, mas não ilegal. Um trabalhador mantido em condições degradantes sem poder sair é vítima de trabalho escravo, que é crime.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Se a agricultura familiar produz só 23% do valor, ela é menos importante que o agronegócio?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Depende do critério. Em valor de mercado e em volume exportado, o agronegócio domina de longe. Mas em geração de emprego no campo (67% do pessoal ocupado) e em diversidade de alimentos que chegam à mesa do brasileiro, a agricultura familiar é insubstituível: ela produz boa parte do feijão, da mandioca, do leite e das hortaliças consumidos internamente, enquanto o agronegócio está mais voltado a commodities de exportação, como soja e milho. Um país que depende só do agronegócio para se alimentar fica mais vulnerável a variações de preço internacional; por isso a agricultura familiar é tratada como uma questão de soberania alimentar.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 14: Produção -->
        <div class="topico">

            <p class="caixa">Hora de usar o que você aprendeu.</p>

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h3>Analisando o mercado de trabalho da sua região</h3>
                <p><strong>Atividade individual ou em dupla</strong></p>

                <p>Acesse o site do IBGE (ibge.gov.br) ou do PNAD Contínua e procure os dados mais recentes do mercado de trabalho para o seu estado. Escreva um texto de 15 a 20 linhas respondendo:</p>
                <p><strong>1.</strong> Qual é a taxa de desemprego do seu estado em comparação com a média nacional?</p>
                <p><strong>2.</strong> Qual é o setor que mais emprega na região? Por que você acha que isso acontece?</p>
                <p><strong>3.</strong> Qual é a taxa de informalidade? Ela é maior ou menor que a média nacional? Quais fatores explicam essa diferença?</p>
                <p class="w3-small w3-text-grey">Dica: o portal Sidra (sidra.ibge.gov.br) permite baixar tabelas da PNAD por estado. A pesquisa chama-se "PNAD Contínua Trimestral".</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 15: Questões para o caderno -->
        <div class="topico">

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. O que é PEA? Qual é a diferença entre PEA, PEI e PIA? Como o IBGE classifica quem desistiu de procurar emprego?</h3>

                <h3>2. Qual é a diferença entre a taxa de desemprego oficial e a taxa de subutilização?</h3>

                <h3>3. Cite e explique as atividades que pertencem a cada um dos setores da economia (primário, secundário, terciário e quaternário).</h3>

                <h3>4. Por que a agricultura familiar responde por apenas 23% do valor da produção agropecuária, mas emprega 67% do pessoal ocupado no campo? O que isso revela sobre o setor primário brasileiro?</h3>

                <h3>5. O que é desindustrialização precoce e por que ela preocupa economistas que analisam o Brasil?</h3>

                <h3>6. Quais direitos a CLT garante ao trabalhador formal? O que mudou com a Reforma Trabalhista de 2017?</h3>

                <h3>7. O que é uberização? Por que motoristas e entregadores de aplicativo não são protegidos pela CLT?</h3>

                <h3>8. Explique os tipos de desemprego: friccional, estrutural, cíclico e tecnológico. Dê um exemplo de cada.</h3>

                <h3>9. Como a taxa de informalidade e a taxa de desemprego se distribuem desigualmente no Brasil segundo raça, região, gênero e escolaridade?</h3>

                <h3>10. O que são jovens NEET e qual é o impacto social e econômico desse fenômeno para o Brasil?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Concluir Aula</button>
            <hr>
        </div>


        <!-- BLOCO 16: Transição final -->
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
        mensagem: 'o tema População III - Atividades Econômicas é fantástico! Continue estudando!',
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


        <!-- BLOCO 17: Finalizar -->
        <div class="topico">
            <button class="btnShow" onclick="mostraCinza(); this.style='display:none'">Finalizar</button>
        </div>


        <!-- SECAO FINAL: PARA SABER MAIS + REFERENCIAS -->
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

            <br><br>
            <div class="w3-padding-48">
                <span id="numero"></span>
                <span id="txtBarra">0%</span>
                <progress value="0" max="100" id="progress"></progress>
            </div>
        </div>

    </main>

    <?php include __DIR__ . '/../../../includes/footer.php'; ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>

</body>

</html>
