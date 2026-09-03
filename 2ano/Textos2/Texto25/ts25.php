<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Migrações internas, êxodo rural e transumância no Brasil: como e por que os brasileiros se movem dentro do próprio país">
    <meta property="og:title" content="Texto 25 - População IV: Migrações">
    <meta property="og:description" content="Migrações internas, pendulares e de retorno; êxodo rural, transumância e urbanização no Brasil">
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

    <title>2º ano - Texto 25 - População IV: Migrações</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender os tipos de migração interna no Brasil (pendular, de retorno, espontânea e forçada); entender as causas históricas e atuais do êxodo rural e suas consequências para as cidades; conhecer o conceito de transumância, os critérios de classificação urbano/rural do IBGE e os principais fluxos migratórios internos brasileiros, incluindo os movimentos mais recentes registrados pelo Censo 2022.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Introdução -->
        <div class="topico">

            <h2>Introdução</h2>

            <p><span class="primeiraLetra">O</span> Brasil é um país de migrantes. Ao longo do século XX, dezenas de milhões de brasileiros deixaram o campo em direção às cidades. Só na década de 1950, mais de 7 milhões de pessoas saíram do campo. Entre 1960 e 2000, o país saiu de 45% de população urbana para mais de 80%. Hoje, segundo o Censo 2022 do IBGE, 87,4% dos brasileiros (177,5 milhões de pessoas, de um total de 203,1 milhões) vivem em cidades, embora essa urbanização não seja uniforme: chega a 94,4% no Sudeste, mas fica em 77,6% no Nordeste e 78,5% no Norte.</p>

            <p>Essa transformação não foi suave. Foi o êxodo rural em massa que criou as favelas de São Paulo e Rio de Janeiro, que encheu as periferias das metrópoles nordestinas e que esvaziou municípios inteiros do interior do Nordeste e do Sudeste. Entender a migração interna é entender a própria história do Brasil urbano. Essa história não parou: ela apenas mudou de direção e de ritmo nas últimas décadas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: Tipos de migração -->
        <div class="topico">

            <h2>Tipos de Migração</h2>

            <p>Antes de falar dos grandes fluxos brasileiros, é necessário entender como os geógrafos classificam os movimentos populacionais. A primeira grande divisão é entre <strong>migrações externas</strong> (entre países) e <span class="termo" data-palavra="Migração Interna" data-definicao="Movimento de população que ocorre dentro das fronteiras de um mesmo país. No Brasil, o exemplo clássico é o deslocamento de nordestinos para o Sudeste ao longo do século XX. A migração interna pode ser classificada pelo tempo de permanência, pela causa e pela distância percorrida.">migrações internas</span> (dentro do próprio país). As migrações internacionais foram estudadas em aulas anteriores. Aqui o foco é o movimento dentro do Brasil.</p>

            <h3>Migração pendular</h3>

            <p>A <span class="termo" data-palavra="Migração Pendular" data-definicao="Deslocamento diário ou semanal entre municípios distintos, geralmente da periferia para o centro metropolitano, para trabalhar ou estudar. Chama-se pendular porque o trabalhador vai e volta como um pêndulo, sem mudar definitivamente de residência. Em 2022, o IBGE estimou que mais de 8 milhões de brasileiros faziam esse deslocamento diariamente.">migração pendular</span> é o deslocamento diário ou semanal entre municípios para trabalhar ou estudar, sem mudança definitiva de residência. É o caso do morador de Guarulhos que trabalha em São Paulo, ou do morador de Niterói que trabalha no Rio. Esse tipo de migração é muito intenso nas regiões metropolitanas e revela a desigualdade espacial: as pessoas moram na periferia mais barata mas precisam ir ao centro para trabalhar.</p>

            <h3>Migração de retorno</h3>

            <p>A <span class="termo" data-palavra="Migração de Retorno" data-definicao="Movimento de população em que migrantes voltam para sua região de origem após um período fora. No Brasil, é o caso de nordestinos que passaram décadas no Sudeste e retornam ao Nordeste na aposentadoria, ou em momentos de crise econômica como a pandemia de 2020. O Censo 2022 mostrou crescimento desse fenômeno.">migração de retorno</span> ocorre quando migrantes voltam para sua região de origem. É o caso do nordestino que passou 30 anos em São Paulo, criou os filhos, e voltou para o interior do Ceará na aposentadoria. Ou dos que retornaram durante a pandemia de 2020 ao perder o emprego nas metrópoles. O Censo 2022 mostrou crescimento significativo desse fluxo de retorno ao Nordeste.</p>

            <h3>Migração forçada x espontânea</h3>

            <p>Quanto à causa, a migração pode ser <span class="termo" data-palavra="Migração Forçada" data-definicao="Movimento de população em que as pessoas são obrigadas a sair de sua origem por fatores que ameaçam sua segurança, sobrevivência ou liberdade: guerra, perseguição política, desastre ambiental, trabalho escravo, ou violência. O refugiado é o exemplo clássico de migrante forçado. No Brasil, o êxodo rural do século XX teve elementos de migração forçada, pois muitos saíram da seca e da miséria sem opção real de ficar.">forçada</span> (quando as pessoas não têm escolha: guerra, seca, catástrofe) ou espontânea (quando há opção real de permanecer, mas as perspectivas em outro lugar são melhores). Na prática, essa fronteira é porosa: um trabalhador rural que deixa o Nordeste pela seca crônica está sendo "expulso" pela miséria, mesmo que não exista obrigação formal de partir.</p>

            <h3>Fatores de expulsão e atração</h3>

            <p>Os geógrafos usam a teoria dos <span class="termo" data-palavra="Fatores de Expulsão e Atração (Push and Pull)" data-definicao="Teoria que explica a migração por dois conjuntos de forças. Os fatores de expulsão (push) são os que afastam as pessoas de sua origem: seca, pobreza, falta de emprego, violência, falta de terra. Os fatores de atração (pull) são os que atraem para o destino: oferta de emprego, salários maiores, acesso a saúde, educação e lazer. A decisão de migrar é resultado da combinação dessas duas forças.">fatores de expulsão e atração (push and pull)</span> para explicar a migração. De um lado, as condições ruins na origem expulsam: seca, falta de emprego, violência. Do outro, as condições melhores no destino atraem: empregos, salários, infraestrutura. O migrante tende a se deslocar quando a soma dos fatores de atração supera os de expulsão, mais o custo e o risco da própria migração.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>João mora em Taboão da Serra (SP) e acorda todo dia às 5h da manhã para pegar dois ônibus até São Paulo, onde trabalha como técnico de manutenção. Volta sempre à noite para casa. Qual tipo de migração descreve o movimento de João?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Migração espontânea</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="errado" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Êxodo rural</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="correto" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Migração pendular</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'e pendular: vai e volta todo dia entre municipios, sem mudar de residencia.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 5: Êxodo rural -->
        <div class="topico">

            <h2>Êxodo Rural: o Grande Movimento do Século XX</h2>

            <p>O <span class="termo" data-palavra="Êxodo Rural" data-definicao="Movimento massivo de população do campo para as cidades. No Brasil, intensificou-se a partir da década de 1950, impulsionado pela industrialização do Sudeste, pela mecanização do campo e pelas secas periódicas do Nordeste. Entre 1960 e 1980, cerca de 43 milhões de brasileiros deixaram o campo. É considerada uma das maiores migrações internas da história humana em escala nacional.">êxodo rural</span> é o deslocamento massivo do campo para as cidades. No Brasil, esse fenômeno ganhou escala a partir dos anos 1950, quando a industrialização do Sudeste (especialmente de São Paulo) criou uma demanda enorme por mão de obra barata, ao mesmo tempo em que a modernização mecanizada do campo reduzia as vagas no setor agrícola e as secas periódicas expulsavam populações do Nordeste. A escala do fenômeno é impressionante: estima-se que, apenas entre 1960 e 1980, cerca de 43 milhões de brasileiros tenham saído do campo em direção às cidades.</p>

            <h3>Causas do êxodo rural no Brasil</h3>

            <p>Do lado da expulsão: a seca crônica no Nordeste, a concentração fundiária (a terra pertence a poucos, restando pouco espaço para o pequeno agricultor), a mecanização agrícola que substitui trabalhadores rurais por máquinas, e a falta de acesso a saúde e educação no interior. Do lado da atração: a oferta de empregos industriais e de serviços nas metrópoles, salários acima dos rurais, e a ilusão de acesso a bens de consumo, lazer e infraestrutura urbana. O mercado urbano diversificado ainda oferecia uma porta de entrada mesmo para quem não tinha qualificação: o trabalho informal, sem vínculo empregatício, absorveu boa parte desses migrantes na construção civil e nos serviços.</p>

            <h3>Para onde foram os migrantes?</h3>

            <p>O principal destino histórico foi o estado de São Paulo, especialmente a Grande São Paulo, que absorveu fluxos gigantescos do Nordeste, de Minas Gerais e do interior paulista. Entre 1940 e 1980, estima-se que quase 13 milhões de pessoas tenham deixado o Nordeste, motivadas pela decadência agrícola nas áreas de clima semiárido e pelo baixo nível de desenvolvimento industrial da região. A maioria enxergava o Sudeste como a oportunidade mais atrativa, mas outras regiões, como Norte e Centro-Oeste, também se tornaram destino desses migrantes. O Paraná também foi destino importante nas décadas de 1950 e 1960, durante a frente pioneira de colonização agrícola. Depois, com a expansão da agricultura mecanizada para o Centro-Oeste (a partir dos anos 1970 e 1980), novos fluxos migratórios se dirigiram ao Mato Grosso, Goiás e Mato Grosso do Sul.</p>

            <p>A chegada em massa de nordestinos às grandes cidades também gerou trocas culturais duradouras. Em São Paulo, por exemplo, a comunidade nordestina fundou em 1991 o Centro de Tradições Nordestinas, um espaço de reunião onde até hoje são realizadas atividades culturais e sociais de apoio às milhares de pessoas com raízes no Nordeste que vivem na cidade. A migração não é só deslocamento de mão de obra: é também deslocamento de identidade e cultura.</p>

            <h3>Consequências nas cidades</h3>

            <p>A chegada em massa de migrantes nas metrópoles não foi acompanhada de infraestrutura suficiente. O resultado foram as <strong>favelas</strong> e as <strong>periferias precárias</strong>: sem planejamento, sem saneamento, sem transporte de qualidade. A explosão demográfica das metrópoles gerou o que os geógrafos chamam de <span class="termo" data-palavra="Metropolização" data-definicao="Processo de crescimento acelerado das cidades que se tornam metrópoles: grandes aglomerações urbanas com população acima de 1 milhão de habitantes, economias complexas, áreas de influência regionais ou nacionais e grande atração de migrantes. O Brasil passou por uma metropolização intensa entre 1950 e 2000, com São Paulo e Rio de Janeiro tornando-se megacidades.">metropolização</span>: o crescimento acelerado das grandes cidades como polos de atração regional e nacional. Esse legado ainda pesa hoje: segundo a Fundação João Pinheiro, o déficit habitacional brasileiro chegou a 5,77 milhões de domicílios em 2024, o menor patamar da série histórica após dois anos seguidos de queda, mas ainda concentrado sobretudo nas famílias de baixa renda das regiões metropolitanas que mais receberam migrantes ao longo do século XX. A maior parte desse déficit hoje não é mais "falta de casas" no sentido literal, e sim o chamado ônus excessivo com aluguel: famílias urbanas de baixa renda que gastam mais de 30% do que ganham só para pagar aluguel.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 6: Transumância -->
        <div class="topico">

            <h2>Transumância</h2>

            <p>Ao lado do êxodo rural, existe outro tipo de movimento populacional bem diferente: a <span class="termo" data-palavra="Transumância" data-definicao="Movimento sazonal de pastores e rebanhos em busca de pastagens e água, conforme as estações do ano. No Brasil, é praticada no Nordeste semiárido (pastores levam o gado da caatinga para serras mais úmidas na seca) e no Sul (pastoreio entre campos de altitude no inverno e vales mais quentes no verão). Difere do êxodo rural porque não é definitiva: é um movimento cíclico, de ida e volta, ligado ao ritmo da natureza.">transumância</span>. Trata-se de um movimento sazonal de populações e rebanhos em busca de pastagens ou água, de acordo com as estações do ano.</p>

            <p>No Brasil, a transumância é praticada principalmente em duas regiões:</p>

            <p>No <strong>Nordeste semiárido</strong>, durante a estação seca, pastores levam seus rebanhos de cabras e ovelhas das áreas mais secas da caatinga para as serras úmidas (como a Chapada do Araripe ou a Serra do Baturité), onde ainda há pastagem. Com o retorno das chuvas, voltam às áreas originais. É uma prática milenar de adaptação ao clima semiárido.</p>

            <p>No <strong>Sul do Brasil</strong>, especialmente nos planaltos catarinense e gaúcho, criadores levam o gado dos campos de altitude (mais frios no inverno) para os vales mais aquecidos, retornando no verão. É uma prática que remonta aos tropeiros do século XIX.</p>

            <p>A transumância é diferente do êxodo rural em um aspecto fundamental: ela é <strong>cíclica</strong>. O pastor vai e volta conforme o calendário natural. Não há abandono definitivo da origem.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Um pesquisador afirma que o êxodo rural brasileiro foi causado principalmente pela industrialização do Sudeste. Um segundo pesquisador diz que foi causado pela miséria e pela seca no Nordeste. Qual afirmação está mais correta geograficamente?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Só o primeiro</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="errado" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Só o segundo</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="correto" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Os dois, combinados</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'push and pull: expulsao (seca, terra) e atracao (industria, salario) agiram juntas.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 8: Como o Brasil mede o urbano -->
        <div class="topico">

            <h2>Como o Brasil Mede o Urbano</h2>

            <p>Para entender os fluxos migratórios, também é preciso entender como o Brasil decide o que é "cidade" e o que é "campo", e essa definição é menos óbvia do que parece. O Censo de 2010 já mostrava a escala da urbanização brasileira: quase 161 milhões de pessoas, mais de 84% da população, viviam em áreas urbanas. Historicamente, essa urbanização se concentrou perto do litoral: os 443 municípios costeiros do Brasil, que correspondem a apenas 5% do território nacional, concentravam 19% de toda a área urbanizada do país em 2019.</p>

            <p>Um detalhe importante para o ENEM: diferente de muitos países, o Brasil não classifica um espaço como urbano com base em critérios funcionais, como densidade demográfica ou disponibilidade de infraestrutura (escolas, hospitais, comércio). Pela legislação brasileira, população urbana é aquela que reside na sede do município ou do distrito, independentemente de quão pequena ou pouco povoada essa sede seja. Isso gera situações curiosas: municípios muito pouco populosos, como Borá (SP), um dos menos povoados do país, têm toda a sua população classificada como urbana, mesmo com características bem rurais. Se o Brasil adotasse critérios de densidade como outros países, boa parte dessa população passaria a ser considerada rural, o que mudaria completamente as estatísticas de urbanização do país.</p>

            <p>Por isso, para o Censo 2022, o IBGE passou a usar também os conceitos de <span class="termo" data-palavra="Arranjo Populacional" data-definicao="Conjunto de dois ou mais municípios brasileiros com forte integração populacional, decorrente do fluxo intenso de pessoas entre eles, sobretudo entre locais de moradia e de trabalho. É um dos conceitos usados pelo IBGE no Censo 2022 para entender a dinâmica urbana brasileira além da simples divisão entre população urbana e rural.">arranjo populacional</span> e <span class="termo" data-palavra="Concentração Urbana" data-definicao="Categoria usada pelo IBGE quando a população de um arranjo populacional ou de um município isolado ultrapassa 100 mil habitantes. Segundo o Censo 2022, as concentrações urbanas abrigavam 61% da população brasileira, mais de 124 milhões de pessoas, enquanto municípios com menos de 10 mil habitantes (45% do total de municípios do país) reuniam apenas 6,3% da população.">concentração urbana</span>, que ajudam a enxergar a dinâmica real da população sem depender só da divisão entre "urbano" e "rural" de cada município isolado. O resultado do Censo 2022 mostra um contraste grande: 45% dos municípios brasileiros têm menos de 10 mil habitantes, mas juntos reúnem apenas 6,3% da população do país. Do outro lado, as concentrações urbanas abrigam 61% da população brasileira, mais de 124 milhões de pessoas.</p>

            <p>Essa hierarquia entre cidades também ajuda a explicar os próprios fluxos migratórios estudados nesta aula. Segundo o IBGE, o Brasil tem 862 cidades que funcionam como centros de comando regional, cuja influência extrapola os limites do próprio território, mas apenas 15 delas são classificadas como metrópoles: grandes centros urbanos cuja influência se estende por vastas áreas do país, caso de São Paulo, Rio de Janeiro e Brasília. É justamente por concentrarem empregos, serviços e oportunidades que essas metrópoles historicamente atraíram (e ainda atraem, embora com menos intensidade do que no século XX) os maiores fluxos migratórios internos do Brasil. Essa hierarquia urbana ajuda a explicar, por exemplo, por que uma cidade média como Ribeirão Preto (SP) exerce forte atração sobre os municípios ao seu redor, enquanto um centro de comando regional menor, como Juazeiro do Norte (CE), organiza os fluxos de uma área bem mais restrita: quanto maior o nível hierárquico de uma cidade, maior costuma ser o raio geográfico de sua influência sobre os fluxos migratórios, o comércio e os serviços de toda a região ao seu redor.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O Brasil define como "urbana" toda a população residente na sede de um município, mesmo que essa sede tenha poucos moradores e características tipicamente rurais. Qual é a principal consequência geográfica dessa metodologia?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>Nenhuma diferença</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>Superestima a urbanização</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>Subestima a urbanização</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'municipios pequenos viram 100% urbanos so por serem sede, mesmo com perfil rural.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 10: Fluxos atuais -->
        <div class="topico">

            <h2>Os Novos Fluxos Migratórios Internos</h2>

            <p>O mapa da migração interna brasileira mudou bastante nas últimas décadas. O fluxo Nordeste-Sudeste ainda existe, mas não é mais dominante como nos anos 1970. Dados de 2013 do IBGE mostram que o Sudeste continua sendo o principal destino não só de nordestinos (67,5% dos que migram do Nordeste vão para lá), mas também da população que deixa o Centro-Oeste (quase metade) e da maioria das pessoas nascidas em outros países.</p>

            <p>Mas há uma reviravolta importante, confirmada pelos dados do Censo 2022 divulgados em 2025: entre 2017 e 2022, os estados de São Paulo e do Rio de Janeiro tiveram <strong>saldo migratório negativo</strong> pela primeira vez desde que o IBGE começou a fazer esse tipo de comparação, em 1991, ou seja, mais gente saiu desses estados do que entrou neles. São Paulo recebeu 736,4 mil migrantes no período, mas 826 mil pessoas o deixaram, um saldo negativo de 89,6 mil. O Rio de Janeiro teve resultado parecido: 167,2 mil pessoas chegaram, contra 332,6 mil que saíram, saldo negativo de 165,4 mil. O custo de vida elevado, o trânsito, a violência urbana e a busca por qualidade de vida levaram parte da população a deixar essas duas grandes metrópoles rumo a cidades menores, sem que isso signifique que São Paulo ou o Rio estejam "esvaziando": o crescimento populacional segue positivo, só que puxado mais pelos nascimentos do que pela chegada de migrantes.</p>

            <p>Esse movimento se conecta a outro fenômeno confirmado pelo Censo 2022: o crescimento das <strong>cidades médias</strong> (entre 100 mil e 500 mil habitantes). Dos mais de 12 milhões de novos habitantes que o Brasil ganhou entre 2010 e 2022, 8,3 milhões, ou seja, 67,5% do crescimento total, foram parar justamente em cidades dessa faixa de tamanho, que passaram de 25,4% para quase 28% da população brasileira no período. Já as cidades grandes, com mais de 500 mil habitantes, tiveram participação relativa estável, passando de 29,3% para 29% do total, mesmo tendo ganhado 3 milhões de habitantes em números absolutos: cresceram, mas num ritmo mais lento do que as cidades médias. Esse fenômeno é particularmente intenso no Centro-Oeste e, em menor grau, em municípios do Matopiba, impulsionado pela expansão do agronegócio. Já perto das grandes metrópoles do Sudeste, o crescimento das cidades médias vizinhas está ligado ao aumento do preço dos imóveis e dos serviços nas capitais, que empurra parte da população para municípios próximos com boa infraestrutura urbana, mas custo de vida menor.</p>

            <p>O <strong>Centro-Oeste</strong> se tornou um polo de atração importante desde os anos 1980, com a expansão do agronegócio no Cerrado. Estados como Mato Grosso, Goiás e o Distrito Federal absorveram fluxos significativos de migrantes do Sul, do Sudeste e do Nordeste.</p>

            <p>Vale registrar que a migração interna não é o único movimento populacional em curso no Brasil: o Censo 2022 mostrou que a imigração internacional também voltou a crescer, revertendo uma tendência de queda que vinha desde 1960. O número de estrangeiros e brasileiros naturalizados vivendo no país saltou de 592 mil em 2010 para 1 milhão em 2022, alta de 70,3%, puxado sobretudo pela chegada de venezuelanos (272 mil), que impulsionaram o crescimento da população latino-americana no Brasil de 183 mil para 646 mil pessoas no mesmo período. É um lembrete de que os fluxos internos estudados nesta aula fazem parte de um quadro migratório mais amplo, que inclui também quem chega de fora do país.</p>

            <p>A <strong>Amazônia Legal</strong>, especialmente o Pará e Rondônia, também foi destino de fluxos migratórios ligados à colonização agrícola, ao extrativismo e a grandes obras de infraestrutura como a Hidrelétrica de Belo Monte. Rondônia foi o caso mais extremo: incentivada por políticas públicas de colonização a partir dos anos 1970, a migração para o estado teve seu maior pico nos anos 1980, com saldos migratórios líquidos de 100 mil a 300 mil pessoas por ano em alguns períodos. O resultado ainda é visível hoje: das pessoas que vivem em Rondônia, 648 mil nasceram em outro estado, sendo 25% vindas de outros estados da própria Amazônia e 23% do Paraná, reflexo direto das frentes pioneiras de colonização agrícola que também levaram paranaenses para o Centro-Oeste na mesma época. O Pará, por sua vez, é hoje o estado mais populoso da Amazônia Legal, com 7,5 milhões de habitantes, resultado tanto da migração quanto de taxas de fecundidade historicamente mais altas do que a média nacional. Esses fluxos geraram conflitos fundiários e pressões sobre a floresta que seguem entre os principais desafios ambientais do país.</p>

            <p>O fenômeno mais recente documentado pelo Censo 2022 é o <strong>retorno ao Nordeste</strong>. O Nordeste, historicamente exportador de migrantes, continua tendo saldo migratório negativo: entre 2017 e 2022, a região recebeu cerca de 746 mil pessoas vindas de outras regiões, mas perdeu 995 mil para fora, um saldo negativo de aproximadamente 249 mil pessoas. O detalhe importante é a tendência: esse saldo negativo era de 701,1 mil pessoas entre 2005 e 2010, ou seja, caiu para menos de um terço do que era quinze anos antes, um sinal claro de que a saída de nordestinos perdeu força e o retorno ganhou peso. Ainda hoje, 54,2% dos 19,2 milhões de brasileiros que vivem fora da região onde nasceram são naturais do Nordeste, e 65,5% deles moram no Sudeste, mas o ritmo de saída, impulsionado por fatores como o aposentado que retorna com a renda da previdência, o jovem que volta após a pandemia e o crescimento do setor de serviços em cidades como Fortaleza, Recife e Salvador, vem diminuindo de forma consistente.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11: Resumo -->
        <div class="topico">

            <h2>Resumo</h2>

            <p><strong>Tipos de migração:</strong> A migração interna pode ser pendular (deslocamento diário sem mudar de residência), de retorno (volta à origem após período fora), espontânea ou forçada. Os fatores de expulsão (push) e atração (pull) explicam a decisão de migrar.</p>

            <p><strong>Êxodo rural:</strong> Movimento massivo campo-cidade, com cerca de 43 milhões de brasileiros deixando o campo entre 1960 e 1980 (13 milhões só do Nordeste, entre 1940 e 1980), causado por secas, concentração fundiária, mecanização agrícola (expulsão) e industrialização do Sudeste (atração). Gerou metropolização, periferias precárias e também novas formas de organização cultural, como o Centro de Tradições Nordestinas em São Paulo.</p>

            <p><strong>Como o Brasil mede o urbano:</strong> Diferente de outros países, o Brasil classifica como urbana toda a sede de município, sem critério de densidade, o que pode superestimar a urbanização. O Censo 2022 trouxe os conceitos de arranjo populacional e concentração urbana: 61% da população (124 milhões) vive em concentrações urbanas, enquanto 45% dos municípios (com menos de 10 mil habitantes) reúnem só 6,3% da população. Das 862 cidades brasileiras que funcionam como centros de comando regional, apenas 15 são metrópoles, e é nelas que historicamente se concentraram os maiores fluxos migratórios do país.</p>

            <p><strong>Transumância:</strong> Movimento sazonal e cíclico de pastores e rebanhos, praticado no Nordeste semiárido e no Sul. Difere do êxodo rural por não ser definitivo.</p>

            <p><strong>Fluxos atuais:</strong> São Paulo e Rio de Janeiro tiveram saldo migratório negativo entre 2017 e 2022, pela primeira vez desde 1991; crescimento acelerado das cidades médias; migração para o Centro-Oeste (agronegócio) e Amazônia (colonização); e queda acentuada no saldo negativo do Nordeste (de 701,1 mil para 249 mil entre os períodos 2005-2010 e 2017-2022), sinal do crescimento do retorno documentado pelo Censo 2022.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11B: Questão aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Segundo o texto, por que o critério brasileiro de "urbano" pode superestimar o tamanho real da população urbana do país?</p>
            <div class="w3-margin">
                <input class="input" id="q1a25" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp1a25"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a25', 'sede', 'resp1a25', this, 'globinho1a25')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a25" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <p>Segundo o texto, o que diferencia a transumância do êxodo rural?</p>
            <div class="w3-margin">
                <input class="input" id="q2a25" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp2a25"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a25', 'clica', 'resp2a25', this, 'globinho2a25')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho2a25" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <button class="btnHide" onclick="MostrarProximo(this); this.style.display='none'">Próximo ➜</button>
            <hr>
        </div>


        <!-- BLOCO 11C: Infográfico - Resumo -->
        <div class="topico">
            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin"><img id="inforesumots25" src="inforesumots25.webp"
                    alt="Infográfico resumo População IV - migrações internas, êxodo rural e transumância" class="w3-mobile" onerror="this.outerHTML='<div style=padding:48px 0;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📊 Infográfico em breve</div>'">
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
                <strong>O êxodo rural acabou no Brasil?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Não completamente, mas perdeu muito a intensidade. Nos anos 1970, o Brasil urbanizava a um ritmo de quase 1 ponto percentual por ano. Hoje, esse ritmo é muito menor: a população rural ainda decresce, mas o Brasil já é tão urbanizado (87,7%) que o "reservatório" de população rural potencialmente migrável é bem menor do que antes. O que persiste é o êxodo rural em áreas específicas, como municípios do interior do Nordeste ou zonas afetadas por crise agrícola. Mas o grande êxodo de massa do século XX já passou.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que tanta gente volta para o Nordeste se ele era tão pobre?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Vários fatores explicam esse movimento. Primeiro, o próprio Nordeste mudou: programas como o Bolsa Família, a expansão do crédito rural, a universalização da previdência rural e o crescimento de cidades médias como Campina Grande, Juazeiro do Norte e Petrolina melhoraram as condições locais. Segundo, o custo de vida nas metrópoles do Sudeste se tornou proibitivo para aposentados que recebem o mínimo. Terceiro, após a pandemia de 2020, muitos perderam empregos informais nas metrópoles e retornaram sem perspectiva de recolocação rápida. É importante notar que o Nordeste, mesmo com esse retorno mais forte, ainda tem saldo migratório levemente negativo, cerca de 249 mil pessoas a menos entre 2017 e 2022, mas esse número é bem menor do que os 701 mil registrados entre 2005 e 2010, o que mostra a tendência: o Nordeste continua perdendo um pouco mais de gente do que ganha, mas cada vez menos. O retorno não é necessariamente sinal de fracasso: em muitos casos, é uma escolha racional de quem tem renda fixa e prefere viver onde o dinheiro rende mais.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Como assim São Paulo "perdeu" população para outras cidades? Ela não é a maior metrópole do Brasil?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> As duas coisas são verdadeiras ao mesmo tempo. São Paulo continua sendo o estado mais populoso do Brasil em números absolutos, mas entre 2017 e 2022 mais gente saiu do estado (826 mil pessoas) do que entrou nele (736,4 mil), um saldo migratório negativo de 89,6 mil pessoas, o primeiro desde que o IBGE passou a medir esse indicador, em 1991. Isso não significa que São Paulo esteja "esvaziando": o crescimento populacional do estado continua positivo, só que puxado mais pelos próprios nascimentos do que pela chegada de migrantes. Quem sai de São Paulo, em geral, vai para cidades médias vizinhas, fugindo do custo de vida alto, do trânsito e da violência urbana, mas sem se afastar demais da região metropolitana.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Transumância ainda existe? Parece coisa do passado.</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Sim, ainda existe, embora seja muito menos visível do que o êxodo rural. No semiárido nordestino, a transumância persiste como estratégia de sobrevivência dos pequenos criadores de caprinos e ovinos, especialmente em Pernambuco, Ceará e Paraíba. No Sul, a prática é menor e mais mecanizada. Para o vestibular e ENEM, o ponto essencial é saber distinguir a transumância (movimento cíclico, sazonal, sem abandono da origem) do êxodo rural (movimento definitivo, campo-cidade). Essa distinção aparece com frequência em questões de múltipla escolha.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 14: Produção -->
        <div class="topico">

            <p class="caixa">Hora de usar o que você aprendeu.</p>

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h3>Mapeando a migração na sua própria história</h3>
                <p><strong>Atividade individual</strong></p>

                <p>Pesquise na sua família ou na história do seu município e responda em 15 a 20 linhas:</p>
                <p><strong>1.</strong> Alguém da sua família migrou internamente? De onde veio e para onde foi? Quais foram os fatores de expulsão e de atração?</p>
                <p><strong>2.</strong> Se não houver histórico familiar, pesquise: qual é o principal fluxo migratório que formou a população do seu município? O município é receptor ou emissor de migrantes?</p>
                <p><strong>3.</strong> Existe migração pendular significativa na sua região? Quem faz esse trajeto diário e por quê?</p>
                <p class="w3-small w3-text-grey">Dica: o IBGE tem uma ferramenta chamada "Cidades@" (cidades.ibge.gov.br) com histórico demográfico de todos os municípios brasileiros, incluindo dados de migração do Censo 2022.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 15: Êxodo urbano -->
        <div class="topico">

            <h2>Êxodo Urbano: um Fenômeno Seletivo</h2>

            <p>Nos últimos anos, ganhou destaque na mídia a expressão <span class="termo" data-palavra="Êxodo Urbano" data-definicao="Termo usado, muitas vezes de forma imprecisa, para descrever o deslocamento de moradores das grandes metrópoles para cidades menores ou áreas rurais. Diferente do êxodo rural clássico, que envolveu dezenas de milhões de pessoas pobres expulsas do campo, o chamado êxodo urbano contemporâneo é um fenômeno de escala reduzida e seletivo, restrito a uma fração da população com renda e estabilidade suficientes para escolher onde morar.">êxodo urbano</span>, o suposto movimento inverso ao êxodo rural: pessoas deixando as grandes cidades em direção a municípios menores ou áreas rurais.</p>

            <p>Geógrafos apontam, porém, que esse fenômeno costuma ser exagerado pela mídia. Em muitos casos, o que se chama de êxodo urbano é, na verdade, a aquisição de uma segunda residência por uma pequena fração da elite econômica, ou a mudança de trabalhadores com renda elevada e estabilidade no emprego, muitas vezes em regime de trabalho remoto, para cidades do interior, onde reproduzem, em condomínios fechados e bairros planejados, o mesmo padrão de vida das metrópoles.</p>

            <p>Essa dinâmica é bem diferente do êxodo rural do século XX, que foi um movimento de massa envolvendo milhões de trabalhadores pobres expulsos do campo pela seca, pela concentração fundiária e pela mecanização agrícola. O êxodo urbano contemporâneo, ao contrário, é um deslocamento seletivo e voluntário, possibilitado por privilégios econômicos: só migra quem tem renda suficiente para sustentar essa escolha, o que o torna um fenômeno de escala muito menor do que a expressão sugere. É bem diferente, inclusive, do saldo migratório negativo real e mensurável que São Paulo e o Rio de Janeiro registraram entre 2017 e 2022, puxado majoritariamente pelo crescimento das cidades médias vizinhas, não por uma "fuga" romantizada da cidade grande.</p>

            <p>Com isso, fechamos o bloco de aulas sobre população: taxas demográficas, transição demográfica, estrutura etária, atividades econômicas e, agora, migrações. Na próxima aula, vamos revisar tudo o que foi estudado desde o início deste módulo, reunindo os principais conceitos e dados das aulas 20 a 25 antes de seguirmos adiante.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 16: Questões para o caderno -->
        <div class="topico">

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. O que é migração interna? Cite dois exemplos típicos do Brasil, incluindo a migração pendular.</h3>

                <h3>2. O que é migração de retorno? Quais fatores estimularam o retorno ao Nordeste documentado pelo Censo 2022?</h3>

                <h3>3. Diferencie migração forçada de migração espontânea. O êxodo rural nordestino se encaixa em qual categoria, e por que a resposta é mais complexa do que parece?</h3>

                <h3>4. O que são fatores de expulsão (push) e de atração (pull)? Aplique essa teoria para explicar o êxodo rural brasileiro do século XX.</h3>

                <h3>5. Quais foram as principais causas históricas do êxodo rural no Brasil? Cite pelo menos três fatores.</h3>

                <h3>6. Por que o critério brasileiro de classificação urbano/rural (sede de município) é diferente do usado por outros países? Que problema isso pode causar em comparações internacionais?</h3>

                <h3>7. O que são arranjo populacional e concentração urbana? O que os dados do Censo 2022 revelam sobre a distribuição da população brasileira entre municípios pequenos e grandes concentrações urbanas?</h3>

                <h3>8. O que é transumância? Por que ela é diferente do êxodo rural?</h3>

                <h3>9. Como São Paulo e o Rio de Janeiro podem ter tido saldo migratório negativo entre 2017 e 2022 mesmo sendo os estados mais populosos do país? O que isso tem a ver com o crescimento das cidades médias?</h3>

                <h3>10. O que é êxodo urbano e por que geógrafos consideram esse termo, muitas vezes, exagerado pela mídia?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Concluir Aula</button>
            <hr>
        </div>


        <!-- BLOCO 17: Transição final -->
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
        mensagem: 'o tema População IV - Migrações é fantástico! Continue estudando!',
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


        <!-- BLOCO 18: Finalizar -->
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
