<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Mudanças climáticas globais: efeito estufa, aquecimento global, camada de ozônio, El Niño e La Niña">
    <meta property="og:title" content="Texto 21 - Mudanças Climáticas Globais">
    <meta property="og:description" content="Efeito estufa, aquecimento global, camada de ozônio, El Niño e La Niña">
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

    <title>1º ano - Texto 21 - Mudanças climáticas globais</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar as mudanças climáticas globais e entender os processos que as causam. Destacar as possíveis consequências dessas mudanças para a vida humana e de outros seres vivos do planeta.</span></p>
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
                <p class="w3-pale-green">Você provavelmente já ouviu falar em "efeito estufa" e "aquecimento global" como se fossem sinônimos, ou já ouviu alguém culpar o "buraco na camada de ozônio" pelo calor mais intenso.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: na sua opinião, o efeito estufa é algo bom ou ruim para o planeta? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">

            <h2>Introdução</h2>

            <p>
                <span class="primeiraLetra"><strong>N</strong></span>a última aula aprendemos como o clima se
                forma e quais fatores influenciam suas variações na Terra.
                Agora, vamos avançar para entender como essas mudanças vêm afetando o planeta e o nosso dia a dia.
            </p>

            <p>
                Nesta aula, estudaremos os principais fenômenos relacionados às
                <span class="termo clima" data-palavra="Mudanças Climáticas"
                    data-definicao="Transformações de longo prazo nos padrões de temperatura, precipitação e eventos climáticos, causadas principalmente pela ação humana.">mudanças
                    climáticas</span> globais,
                como o efeito estufa e o aquecimento global, e refletiremos sobre suas causas e consequências
                para a vida na Terra.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (efeito estufa) -->
        <div class="topico">

            <h2>O Efeito Estufa</h2>

            <div class="area">
                <img alt="Radiação solar retida pelos gases do efeito estufa" class="w3-mobile" id="imagem1" src="tp21f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                Antes de começarmos a aula, imagine só: se a Terra não tivesse atmosfera, o planeta seria congelado,
                com temperaturas médias de aproximadamente -18 °C.
            </p>

            <p class="w3-xxlarge w3-center w3-serif" style="font-weight:bold;">
                A atmosfera é uma cobertura invisível que protege e aquece a Terra.
            </p>

            <p>
                Graças a um fenômeno natural chamado <span class="termo clima" data-palavra="Efeito Estufa"
                    data-definicao="Fenômeno natural em que certos gases da atmosfera retêm parte do calor do Sol, mantendo a temperatura da Terra adequada à vida.">efeito
                    estufa</span>,
                parte do calor proveniente do Sol fica retida na atmosfera, mantendo a Terra em torno de
                +15 °C, temperatura ideal para a existência da vida.
            </p>

            <p>
                Esse processo foi descrito pela primeira vez em 1827 pelo cientista francês
                Jean Baptiste Fourier, que comparou a atmosfera a uma estufa de vidro.
                Mais tarde, em 1860, o físico John Tyndall demonstrou que gases como
                o dióxido de carbono (CO₂) e o vapor d'água têm a capacidade de reter calor.
                Ele também observou que mudanças na quantidade desses gases poderiam alterar o clima do planeta.
                Em 1896, o químico sueco Svante Arrhenius foi além: calculou, à mão, que dobrar a concentração de
                CO₂ na atmosfera elevaria a temperatura média global em vários graus Celsius, uma estimativa
                surpreendentemente próxima dos valores que os supercomputadores climáticos confirmam até hoje.
            </p>

            <h3>Como o efeito estufa funciona?</h3>

            <p>
                A radiação solar aquece a superfície da Terra, que devolve parte desse calor em forma de radiação
                infravermelha. Alguns gases presentes na atmosfera absorvem parte dessa energia e a reemitem,
                impedindo que todo o calor escape para o espaço. Esse processo mantém o planeta aquecido.
            </p>

            <div class="area margemAbaixo w3-padding-16">
                <div class="postit-tp1 w3-margin-top w3-animate-zoom w3-pale-yellow">
                    <h2 style='font-family: "Roboto", sans-serif; font-weight: bold;'>
                        <mark><span class="w3-padding">💡 Principais <span class="termo clima" data-palavra="Gases do Efeito Estufa"
                            data-definicao="Substâncias como o dióxido de carbono (CO₂), metano (CH₄) e óxido nitroso (N₂O), que retêm o calor na atmosfera e contribuem para o aquecimento global.">Gases
                            do Efeito Estufa</span></span></mark>
                    </h2>
                    <img alt="Principais gases do efeito estufa: dióxido de carbono, metano, óxido nitroso, vapor d'água e gases industriais (HFC, PFC, SF6)" class="w3-mobile" src="tp21f06.png" style="width:100%; border-radius:12px; margin-top:8px; display:block;" />
                </div>
            </div>

            <p>
                O efeito estufa, portanto, é um fenômeno natural e essencial.
                Sem ele, o planeta seria frio e inóspito.
                O problema surge quando há um aumento excessivo desses gases na atmosfera,
                o que intensifica o aquecimento do planeta e gera o fenômeno conhecido como
                aquecimento global.
            </p>

            <p>
                Uma forma de dimensionar a importância desse equilíbrio é comparar a Terra com seus vizinhos no
                Sistema Solar. Vênus tem uma atmosfera extremamente densa, composta quase inteiramente de dióxido de
                carbono, e sofre um efeito estufa descontrolado que eleva sua temperatura superficial a mais de
                460°C, calor suficiente para derreter chumbo. Marte, por outro lado, tem uma atmosfera tão rarefeita
                que quase não retém calor algum, e por isso sua temperatura média fica em torno de -60°C. A Terra
                está no meio-termo exato que permite a existência de água líquida e de vida como a conhecemos, e é
                justamente esse equilíbrio delicado que o aumento artificial dos gases de efeito estufa ameaça
                romper.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 1 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O efeito estufa é natural e essencial, mas também é apontado como um problema.
                    Por quê?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>Deveria ser eliminado por completo</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="correto" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>O problema é o excesso de gases, não o efeito em
                            si</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="errado" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>Só piorou por causa do buraco de ozônio</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'o efeito estufa natural mantém a Terra em cerca de +15°C; o problema é o aumento artificial de gases como o CO₂ desde a Revolução Industrial.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (aquecimento global) -->
        <div class="topico">

            <h2>O Aquecimento Global</h2>

            <div class="area">
                <img alt="Efeito estufa natural comparado ao efeito estufa intensificado pelo homem" class="w3-mobile" id="imagem2" src="tp21f02.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                O <span class="termo clima" data-palavra="Aquecimento Global"
                    data-definicao="Aumento gradual da temperatura média da Terra devido ao acúmulo excessivo de gases do efeito estufa na atmosfera.">aquecimento
                    global</span> é causado pelo excesso de gases liberados pelas atividades humanas, que se
                acumulam na atmosfera e intensificam o efeito estufa natural.
            </p>

            <p>
                Esse processo intensificou-se a partir da Revolução Industrial,
                com a queima de combustíveis fósseis, como carvão, petróleo e gás natural,
                e com o desmatamento, que libera dióxido de carbono (CO₂) e reduz a absorção desse gás pelas florestas.
            </p>

            <div class="w3-panel w3-white w3-topbar w3-bottombar w3-round">
                <p>Desde o século XIX: a concentração de CO₂ na atmosfera saiu de cerca de 280 ppm para mais de 425 ppm atualmente, um recorde histórico medido continuamente no Observatório de Mauna Loa, no Havaí, desde 1958.
                    O metano (CH₄) e o óxido nitroso (N₂O) também apresentaram crescimento significativo.
                </p>
            </div>

            <p>
                Nem todo gás do efeito estufa contribui da mesma forma para o aquecimento do planeta. O
                <span class="termo clima" data-palavra="Metano (CH₄)"
                    data-definicao="Gás liberado principalmente pela pecuária, aterros sanitários e extração de combustíveis fósseis. Retém muito mais calor que o CO₂, mas permanece bem menos tempo na atmosfera.">metano</span>,
                emitido principalmente pela pecuária, por aterros sanitários e pela extração de petróleo e gás,
                retém cerca de 80 vezes mais calor que o CO₂ ao longo de um período de 20 anos. Por outro lado, ele
                se decompõe na atmosfera em cerca de 12 anos, enquanto uma parte do CO₂ emitido hoje ainda estará
                presente daqui a séculos. É por isso que reduzir as emissões de metano é visto por muitos cientistas
                como uma forma rápida de "ganhar tempo" no combate ao aquecimento, enquanto a redução do CO₂ segue
                sendo a peça central para conter o aquecimento no longo prazo.
            </p>

            <p>
                O acompanhamento de todos esses gases e de seus efeitos é organizado, em escala mundial, pelo IPCC,
                sigla em inglês para Painel Intergovernamental sobre Mudanças Climáticas. Criado em 1988 pela ONU,
                o IPCC não realiza pesquisas próprias: ele reúne milhares de cientistas de diferentes países para
                revisar tudo o que já foi publicado sobre o clima e produzir relatórios de consenso, usados como
                base científica por governos do mundo todo. O relatório mais recente, o Sexto Relatório de Avaliação
                (AR6), foi publicado entre 2021 e 2023 e reafirmou que o aquecimento observado desde meados do
                século XX é, de forma inequívoca, causado pela ação humana.
            </p>

            <h3>Consequências do aquecimento global</h3>

            <div class="area">
                <img alt="Infográfico das consequências do aquecimento global: elevação da temperatura média, derretimento de geleiras e aumento do nível dos oceanos, mudanças no regime de chuvas, secas e ondas de calor mais intensas, risco de extinção de espécies" class="w3-mobile" id="imagem2b" src="tp21f05.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                Por muito tempo, cientistas evitavam ligar um evento climático específico, como uma onda de calor ou
                uma enchente, diretamente ao aquecimento global, preferindo falar apenas em tendências de longo
                prazo. Isso mudou com o desenvolvimento da chamada <span class="termo clima"
                    data-palavra="Ciência da Atribuição"
                    data-definicao="Área da climatologia que usa modelos computacionais para calcular o quanto o aquecimento global aumentou a probabilidade ou a intensidade de um evento climático extremo específico.">ciência
                    da atribuição</span>, que usa modelos climáticos para calcular o quanto as mudanças climáticas
                aumentaram a probabilidade ou a força de um evento extremo específico, logo depois de ele acontecer.
                Estudos da rede internacional World Weather Attribution mostram, por exemplo, que chuvas
                extremamente intensas, do tipo que ocorria uma vez a cada dez anos no período pré-industrial, hoje
                se tornaram até 30% mais frequentes com apenas 1°C de aquecimento adicional.
            </p>

            <h3>O caso da Antártida: plataformas de gelo e "greening"</h3>

            <p>
                A Antártida concentra cerca de 70% da água doce do planeta, armazenada em sua espessa camada de gelo.
                Boa parte da costa do continente é margeada por <span class="termo clima" data-palavra="Plataforma de Gelo"
                    data-definicao="Língua de gelo que se destaca do continente antártico e flutua sobre o oceano, mas permanece conectada à porção de gelo apoiada em terra firme. Cobre cerca de três quartos do litoral da Antártida.">plataformas
                    de gelo</span> (ice shelves), enormes línguas de gelo flutuante que permanecem ligadas ao continente.
                Como essas plataformas já flutuam na água, seu derretimento, isoladamente, não eleva o nível do mar (pelo
                princípio de Arquimedes, o gelo flutuante já desloca um volume de água equivalente ao seu próprio peso).
                O papel real das plataformas é outro, igualmente importante: elas funcionam como uma espécie de barreira
                que freia as geleiras continentais. Quando uma plataforma se rompe ou desaparece, as geleiras que ela
                continha aceleram seu deslocamento em direção ao oceano, e é esse gelo adicional, antes apoiado em terra
                firme, que efetivamente eleva o nível do mar.
            </p>

            <p>
                O aumento da temperatura do ar e a redução da cobertura de gelo também têm permitido um fenômeno inédito
                em escala geológica: o <span class="termo clima" data-palavra="Greening da Antártida"
                    data-definicao="Processo de esverdeamento de áreas antárticas antes cobertas por gelo, com a expansão de musgos e outras plantas pioneiras, medido por índices de vegetação como o NDVI. É um indicador do avanço do aquecimento na Península Antártica.">esverdeamento
                    (greening)</span> de partes da Península Antártica. Em regiões como o arquipélago das Ilhas Shetlands do
                Sul, a área coberta por musgos e outras plantas pioneiras cresceu de forma acelerada nas últimas décadas,
                à medida que o recuo do gelo abre espaço para a colonização vegetal. Esse avanço da vegetação em um dos
                ambientes mais frios do planeta é um indicador direto de como o aquecimento já está alterando ecossistemas
                inteiros, mesmo naquelas regiões consideradas mais isoladas da ação humana direta.
            </p>

            <p>
                O degelo não é exclusividade dos polos. Nos Andes tropicais, que cruzam países como Peru, Bolívia,
                Equador e Colômbia, geleiras de montanha vêm recuando de forma acelerada nas últimas décadas.
                Diferente do gelo antártico, essas geleiras funcionam como reservatórios naturais: elas armazenam
                água no período de chuvas e a liberam lentamente durante a estação seca, abastecendo rios que
                sustentam a agricultura e o consumo humano de milhões de pessoas, entre eles afluentes que alimentam
                a bacia amazônica. Com o recuo das geleiras, esse fornecimento de água se torna cada vez mais
                irregular, ameaçando a segurança hídrica de cidades inteiras nos Andes.
            </p>

            <p>
                O derretimento de gelo apoiado em terra, seja nos polos, seja em cadeias de montanhas, soma-se a
                outro efeito do aquecimento: a expansão térmica da própria água do oceano, que ocupa mais espaço
                conforme esquenta. Juntos, esses processos já elevaram o nível médio dos oceanos em cerca de 20 cm
                desde 1900, e o ritmo da subida vem acelerando nas últimas décadas. Cidades costeiras brasileiras
                como Recife, Santos e partes do Rio de Janeiro, construídas em áreas baixas e próximas ao mar, estão
                entre as mais vulneráveis do país a esse avanço, que já provoca erosão de praias e maior frequência
                de ressacas em bairros litorâneos.
            </p>

            <p>
                Embora o clima da Terra tenha mudado naturalmente ao longo da história,
                a velocidade atual dessas transformações é muito superior ao que se observava em períodos anteriores.
                De acordo com o
                <span class="termo clima" data-palavra="IPCC"
                    data-definicao="Painel Intergovernamental sobre Mudanças Climáticas da ONU, que reúne cientistas do mundo todo para estudar e divulgar relatórios sobre o aquecimento global.">IPCC</span>
                e com a Organização Meteorológica Mundial, a temperatura média global já subiu mais de 1,3 °C em relação à era pré-industrial,
                e 2024 foi o primeiro ano da história a ultrapassar 1,5 °C acima desse período de referência.
                Os últimos onze anos, de 2015 a 2025, formam o período mais quente já registrado desde que existem medições confiáveis.
            </p>

            <div class="w3-panel w3-pale-red w3-border-red w3-topbar w3-bottombar w3-round">
                <p>Importante: os 1,5 °C já registrados em 2024 foram um pico de um único ano, não a média de longo prazo que preocupa os cientistas.
                    Se não houver redução na emissão desses gases, a média global das próximas décadas poderá ficar
                    de forma permanente entre 1,5 °C e 2 °C acima da era pré-industrial até o final do século,
                    provocando alterações irreversíveis no clima e nos biomas terrestres.</p>
            </div>

            <p>
                Uma preocupação adicional dos cientistas é que algumas partes do planeta podem cruzar <span
                    class="termo clima" data-palavra="Pontos de Inflexão Climáticos"
                    data-definicao="Limiares a partir dos quais uma mudança no sistema climático passa a se autoalimentar e se torna praticamente irreversível em escala de tempo humana, mesmo que o aquecimento pare de avançar.">pontos
                    de inflexão</span>: limiares a partir dos quais uma mudança se torna abrupta, autoalimentada e
                praticamente impossível de reverter, mesmo que o aquecimento estacione depois. Segundo o Global
                Tipping Points Report de 2025, o primeiro desses limiares já foi cruzado: o aquecimento dos oceanos
                ultrapassou o ponto a partir do qual a morte de recifes de coral de água morna, como os que
                sustentam boa parte da vida marinha em Abrolhos, se tornou praticamente inevitável em grande escala.
                Outros pontos de inflexão estudados incluem o colapso da Floresta Amazônica em savana, entre 1,5°C
                e 2°C de aquecimento combinados com o desmatamento, e a desaceleração da Circulação Meridional do
                Atlântico, sistema de correntes marítimas que inclui a Corrente do Golfo e que já opera no ritmo
                mais lento dos últimos 1.600 anos, o que preocupa cientistas do clima em todo o mundo.
            </p>

            <p>
                Para tentar conter esse cenário, quase 200 países assinaram, em 2015, o <span class="termo clima"
                    data-palavra="Acordo de Paris"
                    data-definicao="Tratado internacional de 2015 em que os países se comprometeram a limitar o aquecimento global a bem abaixo de 2°C, buscando esforços para não ultrapassar 1,5°C, em relação à era pré-industrial.">Acordo
                    de Paris</span>, comprometendo-se a manter o aquecimento global bem abaixo de 2°C, buscando
                esforços para limitá-lo a 1,5°C. Para isso, cada país apresenta metas próprias de redução de
                emissões, e muitos assumiram o compromisso de alcançar a chamada neutralidade de carbono, ou
                "emissões líquidas zero", por volta de 2050, quando a quantidade de gases emitida seria compensada
                pela quantidade removida da atmosfera, por exemplo, através do plantio de florestas.
            </p>

            <p>
                O oceano tem um papel importante nesse processo: ele absorve cerca de metade de todo o CO₂ emitido
                pelas atividades humanas desde a Revolução Industrial. Isso ajuda a conter o aquecimento do ar, mas
                tem um custo. Ao se dissolver na água do mar, o CO₂ forma ácido carbônico, reduzindo o pH dos
                oceanos, processo conhecido como <span class="termo clima" data-palavra="Acidificação dos Oceanos"
                    data-definicao="Redução gradual do pH da água do mar, causada pela absorção de CO₂ da atmosfera, que prejudica organismos marinhos como corais e moluscos.">acidificação
                    dos oceanos</span>. Desde o século XIX, o pH médio da superfície oceânica caiu de cerca de 8,16
                para 8,07, uma variação pequena em números absolutos, mas que representa um aumento de cerca de 26%
                na concentração de íons de hidrogênio responsáveis pela acidez. Águas mais ácidas dificultam a
                formação do esqueleto de carbonato de cálcio de corais e moluscos, o que ajuda a explicar por que
                recifes como os de Abrolhos ficam mais vulneráveis ao calor: eles enfrentam, ao mesmo tempo, o
                estresse térmico do branqueamento e a dificuldade química de reconstruir seu próprio esqueleto.
            </p>

            <p>
                No Brasil, os efeitos do aquecimento global já são visíveis em diferentes biomas. O Pantanal
                registrou, em 2020, os piores incêndios de sua história, favorecidos por uma seca prolongada
                associada ao aumento das temperaturas médias. Os recifes de corais de Abrolhos, na Bahia, também
                vêm sofrendo episódios de branqueamento, processo em que o estresse térmico faz os corais expelirem
                as algas que lhes dão cor e nutrientes, podendo levar à morte da colônia se o calor persistir. Esses
                exemplos mostram que o aquecimento global já reconfigura paisagens e ecossistemas brasileiros, bem
                longe de ser uma ameaça distante.
            </p>

            <p>
                Agora que compreendemos o funcionamento do efeito estufa e as causas do aquecimento global,
                o próximo passo é estudar outro elemento essencial da atmosfera:
                a camada de ozônio.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (camada de ozonio) -->
        <div class="topico">

            <h2>Camada de Ozônio</h2>

            <div class="area">
                <img alt="Camada de ozônio filtrando a radiação ultravioleta" class="w3-mobile" id="imagem3" src="tp21f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                No alto da atmosfera existe uma camada muito especial chamada <span class="termo clima"
                    data-palavra="Camada de Ozônio"
                    data-definicao="Região da estratosfera rica em ozônio (O₃), responsável por filtrar a radiação ultravioleta do Sol.">camada
                    de ozônio</span>, formada por moléculas
                de ozônio (O₃).
                Sua principal função é proteger a vida na Terra, filtrando a <span class="termo clima"
                    data-palavra="Radiação Ultravioleta"
                    data-definicao="Tipo de radiação solar invisível que pode causar queimaduras e câncer de pele quando não filtrada pela camada de ozônio.">radiação
                    ultravioleta</span> emitida
                pelo
                Sol.
                Sem essa proteção, haveria aumento de queimaduras, câncer de pele, catarata, envelhecimento precoce e
                danos
                à vegetação,
                que teria a fotossíntese reduzida.
            </p>

            <p>
                Esse risco já é bem concreto no Brasil, um país tropical com forte incidência solar: segundo o
                Instituto Nacional de Câncer (INCA), o câncer de pele é o tipo mais comum entre os brasileiros,
                respondendo por cerca de um terço de todos os diagnósticos de câncer no país, e aproximadamente 65%
                dos casos estão associados à exposição à radiação ultravioleta. É por isso que médicos recomendam
                evitar a exposição solar direta entre 10h e 16h e usar protetor solar diariamente, mesmo em dias
                nublados, já que os raios UV atravessam as nuvens.
            </p>

            <p>
                Contudo, essa camada tem sofrido agressões. As substâncias que mais a destroem são os
                <span class="termo clima" data-palavra="CFCs"
                    data-definicao="Sigla para clorofluorcarbonetos, compostos usados em sprays e geladeiras que destroem a camada de ozônio ao liberar cloro na estratosfera.">CFCs</span>,
                presentes em antigos sistemas de refrigeração e sprays.
                Ao chegarem à estratosfera, liberam cloro, que reage com o ozônio, um único átomo de cloro pode
                destruir
                até
                100 mil moléculas de ozônio.
            </p>

            <p>
                Outras substâncias também prejudicam a camada, como os halons (extintores),
                o tetracloreto de carbono (solventes), o metil clorofórmio (usado em anestésicos) e os
                óxidos de nitrogênio (indústria química).
            </p>

            <p>
                Desde a década de 1960, cientistas vêm observando a redução gradual do ozônio atmosférico.
                O chamado "buraco na camada de ozônio" aparece com mais intensidade sobre a Antártida,
                onde o frio extremo e reações químicas aumentam a destruição do ozônio.
                Felizmente, em boa parte do Brasil, essa camada ainda se mantém preservada em cerca de 95%.
            </p>

            <p>
                A confirmação científica do problema aconteceu em maio de 1985, quando os pesquisadores Joseph
                Farman, Brian Gardiner e Jonathan Shanklin, do British Antarctic Survey, publicaram na revista
                Nature dados que mostravam uma queda de 40% na concentração de ozônio sobre a Antártida entre 1975
                e 1984. A publicação causou grande impacto internacional e, associada a estudos que já apontavam os
                CFCs como principais responsáveis, acelerou as negociações diplomáticas que resultariam, dois anos
                depois, no Protocolo de Montreal.
            </p>

            <p>
                Apesar da gravidade do problema, a camada de ozônio é hoje um dos raros casos de sucesso ambiental
                em escala global. Em 1987, os países assinaram o Protocolo de Montreal, banindo progressivamente a
                produção de CFCs e de outras substâncias destruidoras de ozônio. Passadas quase quatro décadas, o
                buraco sobre a Antártida vem encolhendo de forma consistente, e cientistas da NASA e da ONU estimam
                que a camada deve se recuperar totalmente por volta de 2066. O caso do ozônio costuma ser citado
                como prova de que a cooperação internacional é capaz de reverter danos ambientais quando existe
                vontade política e um alvo bem definido.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 3 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>O que explica a recuperação gradual da camada de ozônio?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3a" value="errado" class="radio-duvid">
                    <label for="p3a" class="card-opcao"><span>Queda no uso de combustíveis fósseis</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3b" value="correto" class="radio-duvid">
                    <label for="p3b" class="card-opcao"><span>Protocolo de Montreal (1987)</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta3" id="p3c" value="errado" class="radio-duvid">
                    <label for="p3c" class="card-opcao"><span>Resfriamento natural da Antártida</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'em 1987 os países assinaram o Protocolo de Montreal, banindo progressivamente os CFCs; desde então, o buraco sobre a Antártida vem encolhendo.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp3" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho3" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (el nino e la nina) -->
        <div class="topico">

            <h2>El Niño e La Niña</h2>

            <div class="area">
                <img alt="Aquecimento (El Niño) e resfriamento (La Niña) das águas do Pacífico" class="w3-mobile" id="imagem4" src="tp21f04.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>
                Além da camada de ozônio, outros fenômenos também influenciam o clima da Terra.
                Entre os mais conhecidos estão o El Niño e a La Niña, que ocorrem no
                Oceano Pacífico e afetam o clima de várias partes do mundo.
            </p>

            <h3>Como El Niño e La Niña funcionam</h3>

            <p>
                Para entender esses dois fenômenos, é preciso lembrar dos <span class="termo clima"
                    data-palavra="Ventos Alísios"
                    data-definicao="Ventos constantes que sopram dos trópicos em direção ao Equador, de leste para oeste, e que ajudam a empurrar as águas superficiais do Oceano Pacífico.">ventos
                    alísios</span>, que estudamos na aula anterior. No Pacífico, esses ventos sopram normalmente de
                leste para oeste, empurrando as águas quentes da superfície em direção à Ásia e à Oceania. Isso faz
                com que, na costa oeste da América do Sul, a água quente que se afasta seja substituída por água fria
                que sobe das profundezas, um processo semelhante à ressurgência que vimos na aula passada. Esse
                movimento constante de ar e água entre os dois lados do Pacífico é chamado de Circulação de Walker.
            </p>

            <p>
                No El Niño, os ventos alísios enfraquecem, e parte da água quente que normalmente ficaria represada
                a oeste retorna em direção à América do Sul, aquecendo o Pacífico Tropical oriental. No La Niña,
                acontece o oposto: os ventos alísios se intensificam, empurrando ainda mais água quente para o
                oeste e favorecendo uma ressurgência mais forte de água fria na costa sul-americana. É essa
                alternância na força dos ventos, e não um evento isolado, que redesenha os padrões de chuva em
                diferentes continentes a cada dois a sete anos, aproximadamente.
            </p>

            <p>
                O <span class="termo clima" data-palavra="El Niño"
                    data-definicao="Fenômeno climático caracterizado pelo aquecimento anormal das águas do Oceano Pacífico, que altera os padrões de chuva e temperatura em várias regiões do planeta.">El
                    Niño</span> é caracterizado pelo aquecimento anormal das águas superficiais do Pacífico
                Tropical,
                alterando os ventos e os padrões de chuva.
                No Brasil, costuma provocar aumento das temperaturas e diminuição das chuvas nas regiões Sudeste,
                Centro-Oeste e Nordeste, enquanto o Sul tende a registrar precipitações mais intensas.
            </p>

            <p>
                Já a
                <span class="termo clima" data-palavra="La Niña"
                    data-definicao="Fenômeno climático oposto ao El Niño, caracterizado pelo resfriamento anormal das águas do Oceano Pacífico, alterando o regime de chuvas e temperaturas.">La
                    Niña</span> apresenta o fenômeno oposto, o resfriamento anormal das águas do Pacífico
                Tropical.
                Nesse período, é comum o aumento das chuvas nas regiões Norte e Nordeste,
                enquanto o Sul enfrenta estiagens e temperaturas mais baixas.
            </p>

            <p>
                O próprio nome "El Niño" vem da observação de pescadores peruanos e equatorianos, que no século XIX
                já notavam o aquecimento anormal das águas costeiras surgindo por volta do Natal, e por isso o
                batizaram de "El Niño", em referência ao Menino Jesus. Normalmente, a costa do Peru é banhada pela
                fria Corrente de Humboldt, cujas águas ricas em nutrientes sustentam uma das maiores pescarias de
                anchoveta do mundo. Quando o El Niño chega, a água quente afasta esses nutrientes das camadas
                superficiais, e a anchoveta desaparece, um fenômeno que já provocou o colapso temporário da
                indústria pesqueira peruana em diversos episódios ao longo do século XX.
            </p>

            <p>
                Esses fenômenos impactam diretamente setores como a agricultura e a geração de energia,
                pois alteram o regime de chuvas e a disponibilidade de água.
                O aquecimento global pode potencializar seus efeitos, tornando eventos extremos como secas,
                inundações e ondas de calor mais frequentes.
            </p>

            <p>
                O El Niño de 2023-2024 foi um dos mais intensos já registrados, contribuindo diretamente para que 2024
                se tornasse o ano mais quente da história até então medida pelos institutos climáticos internacionais
                (recorde superado apenas em termos absolutos, já que 2025 ficou como o terceiro ano mais quente).
                No Brasil, esse episódio agravou a seca histórica que atingiu a bacia amazônica, reduzindo
                drasticamente o nível de rios como o Rio Negro e prejudicando o transporte fluvial e o
                abastecimento de comunidades ribeirinhas. Esse exemplo mostra como um fenômeno originado no Oceano
                Pacífico pode se somar ao aquecimento global e amplificar impactos em regiões muito distantes de
                onde ele acontece.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questão prática 2 -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>

            <h4 class="fontePixel"><b>No Sul do Brasil, o que costuma acontecer no El Niño, em comparação com a La
                    Niña?</b></h4>

            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="correto" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>Chuvas mais intensas no El Niño; estiagem no La
                            Niña</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="errado" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>Seca no El Niño; chuvas intensas no La Niña</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>Nenhuma relação com o Sul do Brasil</span></label>
                </div>
            </div>

            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'o El Niño aquece o Pacífico Tropical e costuma trazer chuvas mais intensas ao Sul; a La Niña inverte esse padrão, com estiagem no Sul e mais chuva no Norte e Nordeste.', '10')">
                    Confirmar Resposta
                </button>
            </div>

            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="80" height="80">
            </div>
        </div>


        <!-- BLOCO: Sintese dos fenomenos -->
        <div class="topico">

            <h2>Os Fenômenos Se Conectam</h2>

            <p>
                Vistos separadamente, efeito estufa, aquecimento global, camada de ozônio e El Niño/La Niña podem
                parecer quatro assuntos independentes. Na prática, eles se cruzam o tempo todo. O efeito estufa
                intensificado pela ação humana é a causa do aquecimento global, que por sua vez torna episódios de
                El Niño mais quentes e intensos, como aconteceu em 2023-2024. Já a camada de ozônio, embora tenha
                uma causa química diferente (os CFCs, e não o CO₂), compartilha com o aquecimento global o mesmo
                cenário geográfico de maior fragilidade: a Antártida, onde o frio extremo favorece tanto a destruição
                do ozônio quanto o derretimento acelerado de gelo.
            </p>

            <p>
                Essa interligação também aparece nas soluções. O sucesso do Protocolo de Montreal, que colocou a
                camada de ozônio no caminho da recuperação, é hoje citado por cientistas e diplomatas como prova de
                que acordos internacionais funcionam quando têm metas claras, prazos definidos e cooperação entre
                países ricos e pobres. É esse mesmo modelo que acordos climáticos mais recentes, como o Acordo de
                Paris, tentam aplicar ao desafio, bem mais complexo, de reduzir as emissões de gases do efeito
                estufa em escala global.
            </p>

            <p>
                Tudo o que vimos nesta aula acontece em escala planetária, envolvendo oceanos inteiros e a atmosfera
                como um todo. Mas as mudanças climáticas também aparecem de forma bem mais próxima do nosso dia a
                dia, dentro das próprias cidades onde moramos. Na próxima aula, vamos estudar as mudanças climáticas
                locais: ilhas de calor, inversão térmica, chuva ácida, desertificação e desmatamento, fenômenos que,
                em menor escala, mostram como as mesmas atividades humanas que aquecem o planeta também transformam
                a paisagem urbana e o ambiente mais imediato ao nosso redor.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Infografico resumo -->
        <!--
        <div class="topico">
            <h2> Infográfico - Resumo</h2>
            <div class="w3-margin"><img id="inforesumotp21" src="inforesumotp21.webp" alt="Infográfico resumo Mudanças Climáticas Globais" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>
        -->


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>

            <p>Em que ano foi assinado o Protocolo de Montreal, o acordo internacional que baniu a produção de CFCs?</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', '1987', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Qual rio brasileiro teve seu nível reduzido drasticamente pela seca agravada pelo El Niño de 2023-2024, prejudicando o transporte fluvial na Amazônia?</p>
            <div class="w3-margin">
                <input class="input" id="q2a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp2a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q2a', 'negro', 'resp2a', this, 'globinho2a')">
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


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o efeito estufa é natural e necessário, por que ele é sempre citado como um problema ambiental?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque o problema não é o efeito estufa em si, mas o seu excesso. Sem ele, a Terra seria um planeta congelado, a cerca de -18°C. O que preocupa os cientistas é o aumento artificial da concentração de gases como CO₂ e metano, provocado pela queima de combustíveis fósseis e pelo desmatamento desde a Revolução Industrial, que intensifica esse fenômeno natural e eleva a temperatura média do planeta além do que os ecossistemas conseguem acompanhar.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se as plataformas de gelo da Antártida já flutuam na água, por que seu derretimento é motivo de preocupação?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque, isoladamente, o derretimento do gelo que já flutua realmente não eleva o nível do mar, pelo princípio de Arquimedes. O problema é o papel que essas plataformas desempenham: elas funcionam como uma barreira que freia as geleiras continentais atrás delas. Quando uma plataforma se rompe, essas geleiras, que estavam apoiadas em terra firme, aceleram seu deslocamento até o oceano, e é esse gelo adicional que efetivamente eleva o nível do mar.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    O buraco na camada de ozônio e o aquecimento global são a mesma coisa?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Não, são fenômenos diferentes, embora frequentemente confundidos. O aquecimento global é causado pelo acúmulo de gases do efeito estufa (como CO₂ e metano), que retêm calor na atmosfera. Já o buraco na camada de ozônio é causado por substâncias como os CFCs, que destroem as moléculas de ozônio na estratosfera, reduzindo a proteção contra a radiação ultravioleta. São dois problemas ambientais distintos, com causas químicas diferentes, que às vezes coincidem nas mesmas regiões, como a Antártida.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se o CO₂ é o gás mais citado quando se fala em aquecimento global, por que reduzir o metano é
                    considerado uma medida tão urgente?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque CO₂ e metano agem em ritmos diferentes. O metano retém cerca de 80 vezes mais calor que o CO₂
                em um intervalo de 20 anos, mas se decompõe na atmosfera em pouco mais de uma década. O CO₂, por sua
                vez, retém menos calor por molécula, mas permanece na atmosfera por séculos. Isso significa que
                cortar emissões de metano, provenientes principalmente da pecuária, de aterros sanitários e da
                extração de petróleo e gás, produz um efeito de resfriamento relativamente rápido, funcionando como
                um freio de emergência enquanto o mundo trabalha na tarefa, mais lenta e mais decisiva no longo
                prazo, de reduzir as emissões de CO₂.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico" id="sumario">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é o efeito estufa e por que ele é importante para a vida na Terra?</h3>
                <h3>2. Por que o efeito estufa pode se tornar um problema ambiental?</h3>
                <h3>3. Quais são as principais causas do aquecimento global?</h3>
                <h3>4. Quais são as consequências do aquecimento global para o planeta?</h3>
                <h3>5. O que é o fenômeno El Niño e como ele afeta o clima do Brasil?</h3>
                <h3>6. Em que o fenômeno La Niña é diferente do El Niño?</h3>
                <h3>7. De que forma El Niño e La Niña influenciam a agricultura e o abastecimento de água?</h3>
                <h3>8. O que é a camada de ozônio e qual a sua função?</h3>
                <h3>9. Quais substâncias destroem a camada de ozônio e em quais produtos elas aparecem?</h3>
                <h3>10. Como o estudo desses fenômenos, efeito estufa, aquecimento global, El Niño, La Niña e camada de ozônio, ajuda a compreender o futuro do planeta?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre se o efeito estufa é bom ou ruim. Agora você sabe que ele é, ao mesmo tempo, essencial e potencialmente perigoso: sem ele a Terra seria congelada, mas seu excesso, causado pela ação humana desde a Revolução Industrial, está por trás do aquecimento global.</p>

                <p>Você também viu que camada de ozônio, El Niño e La Niña são fenômenos distintos do aquecimento global, cada um com suas próprias causas e consequências, e que todos eles, juntos, moldam o clima que vivemos hoje e o que vamos herdar no futuro.</p>

                <p><strong>Resumo dos conceitos:</strong> efeito estufa e gases do efeito estufa; metano e potência de aquecimento; aquecimento global; IPCC e Acordo de Paris; plataformas de gelo e greening da Antártida; geleiras andinas; acidificação dos oceanos; camada de ozônio e radiação ultravioleta; CFCs; Circulação de Walker; El Niño e La Niña.</p>

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
        mensagem: 'o tema Mudanças Climáticas Globais é fascinante! Continue estudando!',
        pontos: 40
    });
    MostrarProximo(this);
">Próximo</button>
            <p id="respFinal"></p>
            <div class="area">
                <p><img src="/fotoIndex/globinhoPe.png" id="globinhorespFinal" style="display:none" alt="globinhorespFinal"
                        width="64" height="64"></p>
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
