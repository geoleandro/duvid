<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Transição demográfica, estrutura etária, pirâmide etária e teorias populacionais no Brasil">
    <meta property="og:title" content="Texto 23 - População II: Dinâmica Demográfica">
    <meta property="og:description" content="Taxas de natalidade e mortalidade, transição demográfica, pirâmide etária e teorias populacionais">
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

    <title>2º ano - Texto 23 - População II: Dinâmica Demográfica</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender as taxas de natalidade, mortalidade e fecundidade; analisar as fases da transição demográfica no Brasil; interpretar pirâmides etárias e a estrutura etária da população; conhecer as principais teorias populacionais, como o malthusianismo, o neomalthusianismo e a teoria reformista.</span></p>
            </div>

            <button class="btnShow" onclick="playSom('inicio'); MostrarProximo(this); this.style.display='none'">
                <i class="fa fa-play"></i> Iniciar Aula
            </button>
            <hr>
        </div>


        <!-- BLOCO 2: Introdução -->
        <div class="topico">

            <h2>Introdução</h2>

            <p><span class="primeiraLetra">E</span>m 2041, o Brasil deve atingir o pico máximo de sua população: cerca de 220 milhões de pessoas. Depois disso, o número começa a cair. Essa projeção do IBGE não é um dado neutro: ela revela que o país está no meio de uma das transformações mais profundas de sua história, chamada de <span class="termo" data-palavra="Transição Demográfica" data-definicao="Processo pelo qual uma população passa de um regime com altas taxas de natalidade e mortalidade para um regime com taxas baixas em ambas. Resulta em envelhecimento progressivo da população e desaceleração do crescimento. O Brasil viveu essa transição de forma acelerada a partir da segunda metade do século XX.">transição demográfica</span>.</p>

            <p>Para entender o que está acontecendo com a população brasileira e mundial, precisamos dominar os instrumentos que os geógrafos e demógrafos usam para medir como as populações nascem, crescem, envelhecem e morrem. É preciso também entender por que essa dinâmica importa: a forma como uma população envelhece define as políticas de previdência, saúde, educação e mercado de trabalho de um país por décadas. Nesta aula, vamos percorrer as taxas demográficas básicas, o modelo de transição demográfica, a estrutura etária e as pirâmides populacionais, o envelhecimento da população brasileira e as principais teorias que tentam explicar por que a população cresce, estabiliza ou diminui.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 3: Taxas demográficas -->
        <div class="topico">

            <h2>Taxas de Natalidade, Mortalidade e Fecundidade</h2>

            <p>A análise demográfica começa por três indicadores fundamentais que medem o ritmo com que uma população cresce ou diminui.</p>

            <p>A <span class="termo" data-palavra="Taxa de Natalidade" data-definicao="Número de nascimentos vivos por mil habitantes em um determinado ano. Calculada dividindo o número de nascimentos pela população total e multiplicando por 1.000. No Brasil, caiu de 30 nascimentos por mil habitantes em 1980 para cerca de 13 em 2022, reflexo direto da transição demográfica.">taxa de natalidade</span> mede o número de nascimentos por mil habitantes em um ano. No Brasil, essa taxa era de cerca de 30 nascimentos por mil habitantes em 1980 e chegou a aproximadamente 13 por mil em 2022, queda influenciada pela urbanização, pela maior participação das mulheres no mercado de trabalho e pelo acesso a métodos contraceptivos.</p>

            <p>A <span class="termo" data-palavra="Taxa de Mortalidade" data-definicao="Número de óbitos por mil habitantes em um determinado ano. No Brasil, caiu de 10,5 óbitos por mil em 1980 para cerca de 6,5 em 2022, graças a avanços na saúde pública, saneamento básico e acesso a medicamentos. Desigualdades regionais persistem: Norte e Nordeste ainda enfrentam taxas mais elevadas em certas faixas etárias.">taxa de mortalidade</span> mede o número de óbitos por mil habitantes no mesmo período. No Brasil, caiu de 10,5 em 1980 para cerca de 6,5 em 2022, reflexo de melhorias no sistema de saúde, no saneamento básico e nos avanços médicos. Regiões como Norte e Nordeste ainda apresentam desigualdades nesse indicador.</p>

            <p>A <span class="termo" data-palavra="Taxa de Fecundidade" data-definicao="Número médio de filhos que uma mulher tem ao longo de sua vida fértil (entre 15 e 49 anos). Diferente da taxa de natalidade, que é calculada sobre o total da população, a fecundidade diz respeito especificamente às mulheres em idade reprodutiva. No Brasil, caiu de 6,28 filhos por mulher em 1960 para 1,57 em 2023, abaixo do nível de reposição (2,1 filhos).">taxa de fecundidade</span> indica o número médio de filhos que uma mulher tem ao longo da vida. Em 1960, a taxa brasileira era de 6,28 filhos por mulher; em 2023, chegou a 1,57, bem abaixo do nível de reposição populacional, que é de 2,1 filhos. Isso significa que, sem imigração expressiva, o Brasil não consegue mais repor a própria população no longo prazo.</p>

            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue w3-round-large w3-padding-16 w3-margin-top">
                <p><strong>Atenção para o ENEM:</strong> taxa de natalidade é calculada sobre TODA a população; taxa de fecundidade é calculada especificamente sobre as mulheres em idade fértil (15 a 49 anos). São indicadores diferentes e aparecem em questões separadas.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 4: Mortalidade, desigualdades e expectativa de vida -->
        <div class="topico">

            <h2>Mortalidade, Desigualdades e Expectativa de Vida no Brasil</h2>

            <p>A queda da mortalidade não significa apenas "menos mortes": ao longo do século XX, o próprio perfil das causas de morte mudou radicalmente no Brasil. Em 1930, as doenças infecciosas e parasitárias, como tuberculose, malária e doenças diarreicas, respondiam por quase metade dos óbitos registrados no país. Em 2019, essas mesmas doenças motivaram menos de 5% do total de mortes. Em contrapartida, as doenças crônicas não transmissíveis (do sistema circulatório, tumores, doenças respiratórias) e seus agravos passaram a responder, juntas, por mais de 66% das causas de morte em 2019. Esse é um padrão típico de países que já avançaram bastante na transição demográfica e epidemiológica.</p>

            <p>Mas essa transição não afeta todos os grupos da mesma forma. Entre a população masculina jovem, as causas externas, sobretudo acidentes de trânsito e homicídios, são a principal causa de morte: em 2020, das 47.722 pessoas assassinadas no Brasil, metade tinha entre 12 e 29 anos, e os homicídios responderam por 91,3% dos óbitos de jovens do sexo masculino. A desigualdade racial agrava o quadro: em 2022, quase 78% das vítimas de homicídio no país eram pessoas negras, o que ressalta a importância de políticas públicas voltadas à igualdade racial e ao combate ao racismo estrutural.</p>

            <p>Outro indicador central da transição demográfica é a <span class="termo" data-palavra="Mortalidade Infantil" data-definicao="Indica a relação entre o número de crianças que morrem no primeiro ano de vida e o número de nascidas vivas no mesmo período, geralmente expressa por mil nascimentos. No Brasil, caiu de 117,7 por mil em 1960 para menos de 10 por mil na projeção para 2030, resultado da vacinação em massa e da ampliação do saneamento básico.">mortalidade infantil</span>, que caiu de 117,7 óbitos por mil nascidos vivos em 1960 para menos de 10 por mil na projeção para 2030. Esse é um dos avanços mais expressivos da saúde pública brasileira. Ainda assim, o país permanece atrás dos mais desenvolvidos: na União Europeia, apenas 3,3 em cada mil crianças nascidas vivas morrem antes de completar 1 ano.</p>

            <p>A expectativa de vida ao nascer também avançou de forma acentuada no Brasil: de 46 anos em 1950 para 76,6 anos em 2019. Persistem, porém, diferenças de gênero: em 2020, a expectativa de vida dos homens era de 72,8 anos, contra 80,1 anos das mulheres, diferença explicada em parte pela maior exposição masculina a acidentes de trânsito, homicídios e doenças ligadas ao álcool e ao tabagismo. Mesmo com esse avanço, o Brasil ainda está atrás de países como o Japão, onde a expectativa de vida gira em torno de 80 anos.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 5: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Em 2023, o IBGE revelou que a taxa de fecundidade brasileira atingiu 1,57 filho por mulher, abaixo do nível de reposição (2,1). O que esse dado indica sobre o futuro da população brasileira?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Crescimento acelerado</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>Envelhecimento e redução</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Nenhuma relação</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'abaixo de 2,1, cada geracao repoe menos gente que a anterior: populacao tende a envelhecer e diminuir.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 6: Transição demográfica -->
        <div class="topico">

            <h2>Transição Demográfica</h2>

            <p>A transição demográfica é o processo pelo qual uma população passa de um padrão de altas natalidade e mortalidade para um padrão de baixas taxas em ambas. Esse percurso não é imediato: ele passa por fases com dinâmicas distintas que explicam por que alguns países ainda crescem muito enquanto outros já estão em declínio populacional.</p>

            <p><strong>Fase 1 (Pré-transicional):</strong> Altas taxas de natalidade e mortalidade. O crescimento populacional é lento, pois muitos nascem, mas muitos também morrem cedo. Era o padrão predominante antes do século XIX na maioria dos países.</p>

            <p><strong>Fase 2 (Transição inicial):</strong> A mortalidade cai por causa de melhorias em saúde pública, vacinas e saneamento, mas a natalidade continua alta. Resultado: crescimento populacional acelerado. O Brasil viveu essa fase nas décadas de 1950 e 1960, quando a população crescia rapidamente, mas as famílias ainda tinham muitos filhos.</p>

            <p><strong>Fase 3 (Transição intermediária):</strong> A natalidade começa a cair, impulsionada pela urbanização, pela maior escolaridade feminina, pelo acesso a contraceptivos e por mudanças culturais. O crescimento desacelera. O Brasil passou por essa fase nas décadas de 1970 e 1980.</p>

            <p><strong>Fase 4 (Transição avançada):</strong> Tanto a natalidade quanto a mortalidade estão baixas. O crescimento é mínimo ou negativo. A população envelhece. Países como Japão, Alemanha e Itália já estão nessa fase. O Brasil se aproxima dela.</p>

            <p>A comparação entre países ajuda a visualizar essas fases em ação. Em 1980, a taxa de crescimento natural da população chinesa era de 14,5 por mil habitantes, próxima da registrada na África Subsaariana, de 28 por mil. Entre 1980 e 2020, porém, a China, que adotou uma rígida política de planejamento familiar, restringindo a maioria das famílias a um único filho entre as décadas de 1970 e 2013, viu esse índice cair para apenas 3 por mil, enquanto a África Subsaariana manteve um crescimento natural de 26 por mil, praticamente estável. Isso reflete taxas de fecundidade ainda elevadas na região, embora em queda: de 6,7 filhos por mulher em 1970 para 4,6 em 2021.</p>

            <p>Em 2022, cerca de 66% da humanidade já vivia em países com taxa de fecundidade abaixo do nível de reposição (2,1 filhos por mulher), concentrados sobretudo na Europa, na América do Norte e em parte da Ásia. Diante desse cenário, cresce em diversos países desenvolvidos o debate sobre políticas de incentivo à natalidade, como a ampliação de licenças-maternidade e paternidade, na tentativa de conter a redução da força de trabalho e garantir os <span class="termo" data-palavra="Direitos Reprodutivos" data-definicao="Direitos das pessoas de optarem de maneira livre e responsável sobre ter ou não filhos, sobre quantos filhos desejam e em qual momento da vida. O debate sobre direitos reprodutivos ganha força tanto em países de baixa fecundidade, que discutem incentivos à natalidade, quanto em países de fecundidade elevada, onde o acesso a contraceptivos e ao planejamento familiar ainda é limitado.">direitos reprodutivos</span> das famílias.</p>

            <div class="w3-margin">
                <img src="ts23f01.png" alt="Grafico das fases da transicao demografica" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#e8f4fd;border:2px dashed #90caf9;border-radius:8px;text-align:center;color:#888>Grafico em breve: fases da transição demográfica</div>'">
                <span class="w3-small w3-margin-left">As quatro fases da transição demográfica e o comportamento das taxas de natalidade e mortalidade em cada uma. Fonte: elaborado pelo autor.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 7: Transição demográfica no Brasil -->
        <div class="topico">

            <h2>Transição Demográfica no Brasil</h2>

            <p>Entre as décadas de 1870 e 1930, o crescimento populacional brasileiro resultou de um padrão em que tanto a natalidade quanto a mortalidade eram altas: as doenças infecciosas e parasitárias respondiam pela maior parte dos óbitos. Esse cenário começou a mudar a partir da década de 1940, quando o avanço da medicina, a mudança nos hábitos de higiene, o uso de antibióticos e as campanhas públicas de educação em saúde ajudaram a conter a propagação de doenças como poliomielite, tétano e rubéola, além de reduzir a mortalidade infantil por meio do incentivo ao aleitamento materno.</p>

            <p>A criação do Ministério da Saúde, na década de 1950, impulsionou campanhas nacionais de combate a doenças endêmicas como malária, doença de Chagas e esquistossomose. Desde 1973, um programa de vacinação em âmbito nacional imuniza a maior parte das crianças brasileiras contra as doenças mais comuns da infância, muitas delas já erradicadas do território nacional. Enquanto a mortalidade caía, porém, a natalidade permaneceu elevada, fazendo o crescimento populacional bater recordes históricos durante as décadas de 1950 e 1960.</p>

            <p>Foi só a partir da década de 1970 que as taxas de natalidade começaram a cair de forma consistente, acompanhando as mudanças no padrão das taxas de fecundidade em todas as regiões do país, ainda que em ritmos diferentes. Nos anos 1960, cada mulher brasileira tinha, em média, cerca de seis filhos; em 1984, essa média já havia recuado para 3,4; em 2021, chegou a 1,76 filho por mulher, abaixo do nível necessário para a reposição populacional.</p>

            <p>Segundo projeções do Instituto Brasileiro de Geografia e Estatística (IBGE), a população brasileira, composta de 203,1 milhões de pessoas em 2022, deve atingir 215 milhões em 2030, ano em que começará a diminuir em termos absolutos, caindo para 209 milhões em 2040. Entre 2010 e 2022, a população brasileira cresceu apenas 0,52% ao ano, a menor taxa da série histórica.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 8: Estrutura etária e pirâmide -->
        <div class="topico">

            <h2>Estrutura Etária e Pirâmide Etária</h2>

            <p>A <span class="termo" data-palavra="Estrutura Etária" data-definicao="Distribuição da população segundo grupos de idade, geralmente dividida em três grandes faixas: população jovem (0 a 14 anos), população adulta em idade ativa (15 a 64 anos) e população idosa (65 anos ou mais). A estrutura etária influencia diretamente as demandas por serviços públicos: escolas, hospitais, previdência social.">estrutura etária</span> de uma população descreve como os habitantes estão distribuídos entre as diferentes faixas de idade. Ela determina quais serviços públicos serão mais demandados e qual é a capacidade produtiva de um país: uma população predominantemente jovem precisa de escolas e emprego; uma população mais velha precisa de hospitais e previdência.</p>

            <p>No Brasil, essa distribuição já muda de forma perceptível. Em 1980, a proporção de brasileiros com até 14 anos de idade alcançava 38% do total. Em 2010, essa faixa etária já representava 24% da população e, conforme as projeções do IBGE, deve cair para menos de 13% em 2060. Como a população nessa faixa etária tende a diminuir em termos relativos, não deve ser necessário ampliar o número de vagas nas escolas de Ensino Fundamental do país. O desafio educacional passa a ser, cada vez mais, a melhoria da qualidade do ensino e a garantia de que todos os jovens completem a escolarização.</p>

            <p>O instrumento visual mais usado para representar a estrutura etária é a <span class="termo" data-palavra="Pirâmide Etária" data-definicao="Representação gráfica da distribuição da população por sexo e faixas de idade. As barras horizontais mostram cada faixa etária, com homens de um lado e mulheres do outro. O formato da pirâmide revela o estágio de transição demográfica: base larga indica alta natalidade; base estreita com topo largo indica envelhecimento.">pirâmide etária</span>. Ela organiza a população em barras horizontais por faixas de cinco anos, com homens de um lado e mulheres do outro. O formato da pirâmide conta a história demográfica de um país.</p>

            <h3>Tipos de pirâmide etária</h3>

            <p><strong>Pirâmide expansiva (base larga, topo estreito):</strong> Alta natalidade, alta mortalidade em idades mais avançadas. População majoritariamente jovem e em crescimento acelerado. Típica de países em desenvolvimento com transição demográfica inicial, como vários países da África Subsaariana.</p>

            <p><strong>Pirâmide constritiva (base estreitando):</strong> Natalidade em queda, mortalidade também caindo. Base menor que o grupo adulto. Crescimento desacelerado. O Brasil dos anos 2000 se enquadrava nessa categoria.</p>

            <p><strong>Pirâmide regressiva (base estreita, topo largo):</strong> Baixíssima natalidade e alta expectativa de vida. A população envelhece e pode começar a diminuir. Japão, Alemanha e Itália são exemplos clássicos.</p>

            <p>O Brasil de 2022 mostra uma pirâmide constritiva caminhando para regressiva: o Censo 2022 revelou que, pela primeira vez, o grupo de pessoas acima de 65 anos (10,9% da população) cresceu proporcionalmente mais do que o grupo de crianças até 14 anos (19,8%). Em 2010, a população com 65 anos ou mais era 7,4% do total.</p>

            <div class="w3-margin">
                <img src="ts23f02.png" alt="Evolucao da piramide etaria brasileira de 1970 a 2022" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>Pirâmide etária em breve</div>'">
                <span class="w3-small w3-margin-left">Evolução da pirâmide etária brasileira: 1970, 2000 e 2022. A base vai estreitando enquanto o topo alarga. Fonte: IBGE, Censo 2022.</span>
            </div>

            <h3>O bônus demográfico</h3>

            <p>Há um período da transição demográfica chamado de <span class="termo" data-palavra="Bônus Demográfico" data-definicao="Período em que a população em idade ativa (15 a 64 anos) é proporcionalmente maior do que a população dependente (crianças e idosos). Gera uma janela de oportunidade econômica: mais trabalhadores, menos dependentes, potencial de poupança e investimento elevado. O Brasil viveu o bônus demográfico entre as décadas de 1970 e 2020, e esse período está se encerrando.">bônus demográfico</span>: quando a população em idade ativa é proporcionalmente maior que a população dependente (crianças mais idosos). O Brasil viveu esse bônus entre as décadas de 1970 e 2020. Agora, com o envelhecimento acelerado, o bônus está se encerrando: a proporção de idosos cresce enquanto a de jovens cai, aumentando a carga sobre trabalhadores e sobre o sistema de previdência.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 9: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O Censo 2022 mostrou que o Brasil tem mais pessoas acima de 65 anos do que crianças abaixo de 5 anos pela primeira vez na história. Qual é a interpretação geográfica correta desse dado?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Ainda é expansiva</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Está envelhecendo</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Mortalidade infantil subiu</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'natalidade cai e expectativa de vida sobe: a base da piramide estreita e o topo alarga.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 10: Envelhecimento e etarismo -->
        <div class="topico">

            <h2>Envelhecimento da População e Etarismo</h2>

            <p>O outro lado da queda na natalidade é o envelhecimento acelerado da população. De acordo com o Censo 2022, o Brasil tinha mais de 22 milhões de pessoas com 65 anos ou mais (10,9% da população total), um aumento de 57,4% em relação ao levantamento de 2010. Entre os idosos brasileiros, as mulheres são maioria, refletindo sua expectativa de vida superior à dos homens.</p>

            <p>Esse processo é mundial: em 2019, pela primeira vez na história, o número de idosos no planeta ultrapassou o número de crianças com até 4 anos de idade, e a tendência é essa diferença se acentuar nas próximas décadas.</p>

            <p>O envelhecimento populacional tem efeitos econômicos e sociais concretos. Cresce a demanda por serviços especializados em pessoas dessa faixa etária, como asilos, casas de repouso, atividades recreativas e educação continuada, formando um mercado em rápida expansão. A indústria do turismo já sente o impacto: na baixa temporada, os idosos chegam a ser maioria nos pontos turísticos, já que não têm filhos em idade escolar e podem aproveitar descontos oferecidos pelas agências. Além disso, mais da metade dos idosos brasileiros é a principal responsável pelo orçamento familiar, o que torna aposentadorias e pensões fundamentais para o consumo de filhos e netos.</p>

            <p>Apesar da importância crescente da população idosa, ganha força uma tendência de desvalorização das pessoas mais velhas conhecida como <span class="termo" data-palavra="Etarismo" data-definicao="Forma de preconceito baseada na idade, que afeta principalmente as pessoas idosas. Se manifesta, por exemplo, quando alguém é considerado ultrapassado ou incapaz de aprender novas tecnologias apenas por causa da idade, ou quando profissionais mais velhos perdem espaço no mercado de trabalho por preconceito etário. O envelhecimento acelerado da população brasileira torna o combate ao etarismo cada vez mais urgente.">etarismo</span>. No mercado de trabalho, por exemplo, profissionais bem qualificados começam a perder espaço na busca por oportunidades de emprego após os quarenta anos, muitas vezes sob a suposição infundada de que pessoas mais velhas têm dificuldade em se apropriar de tecnologias digitais ou em compreender a realidade contemporânea.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 11: Políticas públicas para a terceira idade -->
        <div class="topico">

            <h2>Políticas Públicas para a Terceira Idade</h2>

            <p>O envelhecimento populacional levou à criação de um arcabouço legal voltado à proteção dos idosos no Brasil. A Constituição Federal de 1988 já estabelecia que a velhice digna é um direito humano fundamental e que sua proteção é dever do Estado, da sociedade e da família. Em 1994, foi sancionada a Política Nacional do Idoso, caracterizando como idosas as pessoas com 60 anos ou mais e buscando assegurar seus direitos sociais, sua autonomia e sua participação efetiva na sociedade. Em 2003, essa política foi substituída pelo Estatuto do Idoso, mais amplo, lançado para assegurar direitos em questões familiares e de saúde e proteger os idosos de situações de violência e discriminação. Embora a maior parte desses direitos não tenha sido assegurada plenamente na prática, o Estatuto do Idoso representou um avanço no reconhecimento das vulnerabilidades dessa população.</p>

            <p>O envelhecimento da população também pressionou o sistema previdenciário. Em 2019, o Congresso Nacional aprovou uma reforma da previdência sob a justificativa de que o aumento da expectativa de vida e o envelhecimento populacional estavam tornando deficitária a relação entre a arrecadação e o total de gastos com aposentadorias e pensões. Na prática, a principal mudança foi elevar a idade mínima para se aposentar para 62 anos, no caso das mulheres, e 65 anos, no caso dos homens, além de exigir um tempo mínimo de contribuição. Categorias profissionais consideradas mais sensíveis mantiveram regras específicas: professores podem se aposentar com 57 (mulheres) e 60 anos (homens), desde que tenham contribuído pelo menos 25 anos em funções de magistério; policiais podem se aposentar aos 55 anos, com trinta anos de contribuição; trabalhadores rurais precisam comprovar quinze anos de contribuição e ter no mínimo 55 (mulheres) e 60 anos (homens).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 12: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>Em 2019, o Brasil aprovou uma reforma da previdência elevando a idade mínima de aposentadoria para 62 anos (mulheres) e 65 anos (homens). Do ponto de vista da dinâmica demográfica, qual é a principal justificativa oficial para essa mudança?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>População caindo rápido</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>Envelhecimento pressiona a previdência</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>Sem relação com demografia</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'mais idosos vivendo mais tempo pressionam a relacao entre arrecadacao e gastos com aposentadorias.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO 13: Teorias populacionais -->
        <div class="topico">

            <h2>Teorias Populacionais</h2>

            <p>O crescimento da população mundial sempre gerou debate: ele é um problema ou uma oportunidade? Quem deve controlá-lo e como? As principais teorias populacionais oferecem respostas diferentes, e cada uma delas tem implicações políticas e econômicas concretas.</p>

            <h3>Malthusianismo</h3>

            <p>Thomas Malthus, economista britânico, publicou em 1798 o "Ensaio sobre o Princípio da População". Sua tese central: a população cresce em progressão geométrica (2, 4, 8, 16...) enquanto a produção de alimentos cresce em progressão aritmética (2, 4, 6, 8...). Inevitavelmente, afirmava Malthus, a população superaria os recursos disponíveis.</p>

            <p>Para Malthus, existem dois tipos de freios ao crescimento excessivo. Os "freios preventivos": celibato, casamento tardio e abstinência sexual. Os "freios positivos": fome, guerras, doenças e epidemias, que matam o excesso de população. Para Malthus, a miséria era consequência natural do crescimento excessivo da população, não um problema de distribuição de riqueza.</p>

            <p>Essa ideia de disputa por recursos escassos também influenciou, no século XIX, o naturalista britânico Charles Darwin, que se apoiou nas discussões malthusianas para estruturar a Teoria da Seleção Natural, segundo a qual, diante de recursos limitados, apenas os organismos mais adaptados às condições ambientais conseguem sobreviver e se reproduzir. É um exemplo interessante de como uma ideia da Economia acabou influenciando profundamente a Biologia.</p>

            <p>Crítica central ao malthusianismo: Malthus não previu a revolução agrícola e tecnológica do século XX. A produção de alimentos cresceu muito mais rápido do que ele imaginava, graças à revolução verde, aos adubos químicos e às sementes modificadas. Prova disso é que, mesmo com uma população mundial várias vezes maior do que a projetada por Malthus, a fome atual não decorre da incapacidade de produzir alimentos suficientes: em 2022, segundo a Organização das Nações Unidas para a Alimentação e a Agricultura (FAO), entre 691 e 783 milhões de pessoas foram afetadas pela fome no mundo. Essa realidade não resulta da impossibilidade de produzir comida para todos, mas da lógica capitalista, que concentra renda e gera a pobreza que priva grande parte da população mundial dos meios adequados de sobrevivência.</p>

            <h3>Neomalthusianismo</h3>

            <p>Os <span class="termo" data-palavra="Neomalthusianismo" data-definicao="Corrente que retoma as preocupações de Malthus sobre superpopulação, mas com foco na degradação ambiental e no esgotamento de recursos. Defende políticas ativas de controle demográfico, como programas de planejamento familiar e acesso a contraceptivos, especialmente em países pobres. Crítica: ignora que o consumo desigual é mais determinante do que o tamanho da população.">neomalthusianos</span> do século XX retomaram as preocupações de Malthus, mas com um novo argumento: o problema não é só a falta de alimentos, mas o esgotamento geral dos recursos naturais e a degradação ambiental causada pelo crescimento populacional. O neomalthusianismo ganhou força no final da década de 1960, quando a população mundial atingiu a maior taxa de crescimento já registrada (em torno de 2% ao ano), o que levava a projeções de que o número de habitantes do planeta dobraria em apenas 35 anos. Na década de 1970, essa visão passou a receber também o apoio de setores do movimento ambientalista, preocupados com a pressão do crescimento populacional sobre os recursos naturais. Assim, um número cada vez maior de governos e organizações não governamentais passou a investir em programas de planejamento familiar, defendendo políticas ativas de planejamento e controle de natalidade.</p>

            <p>Crítica: países ricos, com populações estabilizadas ou em declínio, consomem muito mais recursos per capita do que países pobres com alta natalidade. Um americano médio consome cerca de 5 vezes mais recursos que um brasileiro médio, que por sua vez consome mais que um habitante da África Subsaariana. O problema é o padrão de consumo, não apenas o tamanho da população.</p>

            <h3>Teoria Reformista (ou Transicional)</h3>

            <p>Os reformistas, influenciados por economistas e demógrafos do século XX, argumentam que o controle do crescimento populacional não é o caminho: é o desenvolvimento econômico e social que naturalmente reduz a fecundidade. Quando países melhoram educação (especialmente feminina), saúde e renda, as taxas de fecundidade caem por conta própria, sem necessidade de políticas coercitivas de controle de natalidade.</p>

            <p>A evidência empírica apoia essa visão: todos os países que passaram por desenvolvimento econômico sólido vivenciaram queda espontânea da fecundidade. O problema, para os reformistas, não é a quantidade de pessoas, mas a desigualdade e a falta de acesso a bens básicos.</p>

            <h3>Teoria Marxista</h3>

            <p>Para os marxistas, o problema populacional não existe de forma independente: a miséria não vem de "excesso de pessoas", mas de relações de produção injustas que concentram riqueza. Karl Marx chamou a teoria malthusiana de "panfleto a favor da burguesia" porque ela culpa os pobres pela própria pobreza, em vez de questionar a distribuição do produto do trabalho. Para os marxistas, o crescimento populacional em si não é o problema: o problema é o capitalismo, que não distribui os frutos da produção.</p>

            <div class="w3-margin">
                <img src="ts23f03.png" alt="Quadro comparativo das teorias populacionais" class="w3-mobile"
                    onerror="this.outerHTML='<div style=padding:32px;background:#f1f8e9;border:2px dashed #a5d6a7;border-radius:8px;text-align:center;color:#888>Quadro comparativo em breve</div>'">
                <span class="w3-small w3-margin-left">Comparativo entre as principais teorias populacionais: causas, soluções propostas e críticas. Fonte: elaborado pelo autor.</span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 14: Resumo -->
        <div class="topico">

            <h2>Resumo</h2>

            <p><strong>Taxas demográficas:</strong> Natalidade mede nascimentos por mil habitantes; mortalidade mede óbitos por mil; fecundidade mede filhos por mulher. No Brasil: natalidade caiu de 30 (1980) para 13 (2022); mortalidade caiu de 10,5 para 6,5; fecundidade caiu de 6,28 (1960) para 1,57 (2023), abaixo do nível de reposição. O perfil das causas de morte também mudou: de doenças infecciosas para doenças crônicas e causas externas, com fortes desigualdades raciais e de gênero.</p>

            <p><strong>Transição demográfica:</strong> Quatro fases, da alta natalidade e mortalidade até o envelhecimento com baixas taxas em ambas. No Brasil, a mortalidade caiu a partir de 1940 e a natalidade só começou a cair nos anos 1970; a população, de 203,1 milhões em 2022, deve atingir seu pico em 2041, com cerca de 220 milhões de habitantes.</p>

            <p><strong>Estrutura etária, pirâmide e envelhecimento:</strong> Pirâmide expansiva = população jovem; constritiva = transição; regressiva = envelhecimento. O Brasil de 2022 tem pirâmide constritiva-regressiva, com 10,9% de idosos (+57,4% em relação a 2010). O bônus demográfico está se encerrando, e o etarismo ganha relevância como forma de preconceito ligada a esse envelhecimento.</p>

            <p><strong>Políticas públicas:</strong> Estatuto do Idoso (2003) e Reforma da Previdência (2019) são as principais respostas institucionais brasileiras ao envelhecimento populacional, elevando a idade mínima de aposentadoria para 62 (mulheres) e 65 anos (homens).</p>

            <p><strong>Teorias populacionais:</strong> Malthusianismo (população cresce mais que alimentos, miséria é freio natural, influenciou até Darwin); neomalthusianismo (esgotamento ambiental requer controle de natalidade); teoria reformista (é o desenvolvimento que reduz a fecundidade naturalmente); teoria marxista (miséria vem da desigualdade, não do excesso de pessoas).</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 14B: Questão aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Segundo o texto, o que acontece com o bônus demográfico brasileiro à medida que a população envelhece?</p>
            <div class="w3-margin">
                <input class="input" id="q1a23" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp1a23"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a23', 'encerr', 'resp1a23', this, 'globinho1a23')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a23" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <p>Segundo o texto, como se chama o preconceito baseado na idade, que atinge principalmente as pessoas idosas?</p>
            <div class="w3-margin">
                <input class="input" id="q2a23" placeholder="sua resposta..." type="text">
            </div>
            <p class="w3-center w3-padding" id="resp2a23"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a23', 'etaris', 'resp2a23', this, 'globinho2a23')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho2a23" src="/fotoIndex/globinhoPe.png" style="display:none" width="64">
            </div>

            <button class="btnHide" onclick="MostrarProximo(this); this.style.display='none'">Próximo ➜</button>
            <hr>
        </div>


        <!-- BLOCO 14C: Infográfico - Resumo -->
        <div class="topico">
            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin"><img id="inforesumots23" src="inforesumots23.webp"
                    alt="Infográfico resumo População II - transição demográfica e pirâmide etária" class="w3-mobile" onerror="this.outerHTML='<div style=padding:48px 0;background:#f0f4f0;border:2px dashed #aed6ae;border-radius:8px;text-align:center;color:#888>📊 Infográfico em breve</div>'">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 15: Ficha de conceitos -->
        <div class="topico">
            <div id="ficha-conceitos"></div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 16: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado">Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Qual a diferença entre taxa de natalidade e taxa de fecundidade?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> A taxa de natalidade mede nascimentos em relação a TODA a população (por mil habitantes, independentemente de sexo ou idade). A taxa de fecundidade mede filhos em relação às mulheres em idade fértil (15 a 49 anos). Exemplo: um país com muita população idosa pode ter baixa natalidade mesmo que as mulheres jovens ainda tenham vários filhos, porque a base de cálculo inclui todo o povo. Nas provas do ENEM, o enunciado geralmente deixa claro qual das duas está sendo usada, mas saber a diferença é essencial para interpretar gráficos e tabelas corretamente.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>Por que a população do Brasil ainda cresce se a fecundidade está abaixo de 2,1?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Porque há inércia demográfica: mesmo com fecundidade baixa, a geração de mulheres jovens atual (nascida quando a fecundidade ainda era mais alta) é numerosa, e os filhos que elas dão à luz são suficientes para superar as mortes por um tempo. É como um carro do qual você tirou o pé do acelerador: ele não para imediatamente, vai desacelerando até parar. O pico dessa desaceleração no Brasil está previsto para 2041. A partir de 2042, o número de mortes deve superar o de nascimentos.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O bônus demográfico é automaticamente positivo para a economia?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Não automaticamente. O bônus demográfico cria uma janela de oportunidade: mais trabalhadores, menos dependentes, potencial de poupança e investimento elevado. Mas essa janela só se converte em crescimento se o país tiver políticas adequadas de emprego, educação e saúde. Vários países da América Latina, incluindo o Brasil, tiveram o bônus demográfico, mas não conseguiram aproveitá-lo plenamente por causa da desigualdade e da baixa qualidade educacional. Agora que o bônus está se encerrando, a janela fecha sem ter sido totalmente aproveitada.</p>

            <p class="w3-border w3-round-large w3-padding">
                <span class="primeiraLetra">P:</span>
                <strong>O que é etarismo e por que ele está ganhando mais atenção agora?</strong>
            </p>
            <p><span class="primeiraLetra">R:</span> Etarismo é o preconceito baseado na idade, que atinge principalmente pessoas idosas. Por exemplo, quando alguém é considerado "ultrapassado" ou incapaz de aprender novas tecnologias só por causa da idade. O tema ganha força porque o Brasil está envelhecendo rapidamente: se em 2010 os idosos eram 7,4% da população, em 2022 já eram 10,9%. À medida que esse grupo cresce em importância numérica, social e econômica, comportamentos discriminatórios contra ele se tornam mais visíveis e mais debatidos.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 17: Produção -->
        <div class="topico">

            <p class="caixa">Hora de usar o que você aprendeu.</p>

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h3>Analisando a pirâmide etária do seu município</h3>
                <p><strong>Atividade individual ou em dupla</strong></p>

                <p>Acesse o site <strong>cidades.ibge.gov.br</strong>, busque o seu município e encontre os dados de estrutura etária do Censo 2022. Escreva um texto de 15 a 20 linhas respondendo:</p>
                <p><strong>1.</strong> Qual é o perfil etário do seu município? A pirâmide é expansiva, constritiva ou regressiva?</p>
                <p><strong>2.</strong> Qual teoria populacional melhor explica os dados encontrados? Por quê?</p>
                <p><strong>3.</strong> Quais são os principais desafios para o seu município nas próximas duas décadas, considerando a estrutura etária atual?</p>
                <p class="w3-small w3-text-grey">Dica: compare com o município vizinho ou com a média estadual. Municípios grandes e industriais tendem a envelhecer mais rápido do que municípios rurais.</p>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO 18: Questões para o caderno -->
        <div class="topico">

            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2>Questões para responder no caderno:</h2>

                <h3>1. Qual é a tendência da taxa de mortalidade no Brasil desde a década de 1940? Quais fatores explicam essa queda?</h3>

                <h3>2. Como mudou o perfil epidemiológico das causas de morte no Brasil entre 1930 e 2019?</h3>

                <h3>3. Por que os homicídios são a principal causa de morte entre jovens brasileiros do sexo masculino? Que desigualdades esse dado revela?</h3>

                <h3>4. Como evoluíram a mortalidade infantil e a expectativa de vida no Brasil desde 1960?</h3>

                <h3>5. Descreva as quatro fases da transição demográfica. Em qual fase o Brasil se encontra atualmente?</h3>

                <h3>6. Compare a transição demográfica da China e da África Subsaariana entre 1980 e 2020. O que explica a diferença?</h3>

                <h3>7. O que é etarismo? De que forma o envelhecimento da população brasileira torna esse tema mais relevante?</h3>

                <h3>8. Quais políticas públicas brasileiras foram criadas para proteger os direitos da população idosa, incluindo a Reforma da Previdência de 2019? Qual é a relação dessas políticas com a dinâmica demográfica?</h3>

                <h3>9. Qual é a diferença entre a teoria neomalthusiana e a teoria reformista sobre o crescimento populacional?</h3>

                <h3>10. A população brasileira começará a diminuir a partir de 2042, segundo o IBGE. Quais desafios sociais e econômicos isso representa para o país?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Concluir Aula</button>
            <hr>
        </div>


        <!-- BLOCO 19: Transição final -->
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
        mensagem: 'o tema População II - Dinâmica Demográfica é fantástico! Continue estudando!',
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


        <!-- BLOCO 20: Finalizar -->
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
