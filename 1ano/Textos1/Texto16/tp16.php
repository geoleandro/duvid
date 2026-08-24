<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Fontes de energia renováveis: biomassa, eólica, solar, geotérmica e maremotriz">
    <meta property="og:title" content="Texto 16 - Fontes de Energia II - Alternativas Renováveis">
    <meta property="og:description" content="Biomassa, energia eólica, solar, geotérmica, maremotriz e eletricidade verde">
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

    <title>1º ano - Texto 16 - Fontes de energia II - Alternativas renováveis</title>

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
                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Identificar alternativas energéticas renováveis para uso no mundo atual.</span></p>
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
                <p class="w3-pale-green">Na aula passada, vimos que petróleo, gás natural e carvão mineral são finitos e poluentes, mas ainda movem boa parte da economia mundial.</p>
                <p class="w3-pale-green">Anote em seu <strong>caderno</strong>: quais fontes de energia renovável você já ouviu falar, e por que você acha que elas ainda não substituíram totalmente os combustíveis fósseis? Guarde sua resposta, vamos retomá-la ao final da aula.</p>
            </div>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2>Introdução</h2>
            <p><span class="primeiraLetra">S</span>e os combustíveis fósseis poluem e vão se esgotar um dia, por que a transição para fontes limpas é tão lenta? A resposta passa por entender o que cada fonte renovável oferece, e também o que ela exige: certas condições geográficas, investimento, tecnologia e, muitas vezes, recursos minerais próprios.</p>
            <p>Nesta aula, vamos estudar as principais alternativas energéticas renováveis, biomassa, energia eólica, solar, hidráulica, geotérmica e maremotriz, entendendo como cada uma funciona, onde é mais aproveitada e quais são seus limites.</p>
            <p>É útil pensar nessas fontes como peças de um quebra-cabeça chamado <strong>matriz energética</strong> (o conjunto de todas as fontes de energia, renováveis e não renováveis, que abastecem um país): nenhuma fonte isolada resolve o problema sozinha, mas a combinação de várias, cada uma explorada onde faz mais sentido geograficamente, é o que permite reduzir a dependência do petróleo, do gás e do carvão discutidos na aula anterior. O Brasil já tem uma das matrizes elétricas mais limpas do mundo, com cerca de 88% da eletricidade vindo de fontes renováveis, mas ainda depende fortemente de combustíveis fósseis nos transportes e na indústria, o que torna a diversificação das fontes renováveis um desafio permanente.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (biomassa) -->
        <div class="topico">

            <h2>1. Biomassa: Energia Renovável a Partir da Matéria Orgânica</h2>

            <div class="area">
                <img alt="Biomassa: biodigestores em fazenda e campo agrícola" class="w3-mobile" id="imagem1" src="tp16f01.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: pexels.com. </p>

            <p>A <span class="termo" data-palavra="Biomassa"
                    data-definicao="Fonte de energia renovável obtida a partir de matéria orgânica, como resíduos agrícolas, restos florestais, dejetos de animais e lixo orgânico, aproveitada por combustão direta, biocombustíveis ou biogás.">biomassa</span> é
                uma fonte de energia renovável obtida a partir de matéria orgânica, incluindo resíduos agrícolas, restos florestais, dejetos de animais e até resíduos urbanos, como lixo orgânico. Essa fonte de energia tem se destacado por seu potencial de reaproveitamento de materiais que, de outra forma, seriam descartados, contribuindo para a redução de resíduos e o aproveitamento de recursos naturais.</p>

            <p><strong>Como a Biomassa Funciona?</strong> A energia da biomassa pode ser aproveitada de diversas formas:</p>
            <p>- <strong>Combustão Direta:</strong> a biomassa é queimada para produzir calor, que pode ser usado diretamente em processos industriais ou para gerar vapor que aciona turbinas e produz eletricidade.</p>
            <p>- <strong>Conversão em Biocombustíveis:</strong> etanol (da fermentação de cana-de-açúcar ou milho) e biodiesel (de óleos vegetais ou gorduras animais) são usados em motores de combustão.</p>
            <p>- <strong>Produção de <span class="termo" data-palavra="Biogás"
                        data-definicao="Gás metano gerado pela decomposição anaeróbica (sem oxigênio) de resíduos orgânicos, podendo ser usado para gerar eletricidade ou como combustível veicular.">Biogás</span>:</strong> por meio da decomposição anaeróbica de resíduos orgânicos, gerando gás metano que pode ser usado para eletricidade ou como combustível veicular.</p>

            <p><strong>Exemplo Prático no Brasil:</strong> o Brasil se destaca na produção de etanol a partir da cana-de-açúcar. O bagaço restante é utilizado para gerar eletricidade. Além disso, o biogás captado em aterros sanitários é convertido em energia, reduzindo gases de efeito estufa.</p>

            <p><strong>RenovaBio e os CBIOs:</strong> desde 2017, o Brasil conta com o <strong>RenovaBio</strong>, a Política Nacional de Biocombustíveis, considerado o maior programa de descarbonização do planeta. O mecanismo funciona por meio do CBIO (Crédito de Descarbonização): cada CBIO equivale a uma tonelada de CO₂ que deixou de ser emitida graças à produção e ao consumo de etanol, biodiesel ou biogás certificados. Esses créditos são negociados na bolsa de valores, e distribuidoras de combustíveis fósseis são obrigadas a comprá-los para cumprir metas anuais definidas pelo governo. Até o fim de 2025, mais de 201 milhões de CBIOs já haviam sido emitidos, o equivalente a 201 milhões de toneladas de CO₂ que deixaram de ir para a atmosfera.</p>

            <p><strong>Etanol de Segunda Geração:</strong> uma fronteira mais recente da biomassa é o etanol de segunda geração (E2G), também chamado de etanol celulósico, que aproveita o próprio bagaço da cana, um resíduo que sobra da produção do etanol convencional, para extrair ainda mais combustível da mesma plantação, sem precisar de uma área plantada maior. A empresa Raízen já opera plantas desse tipo em São Paulo, com capacidade combinada de mais de 100 milhões de litros por ano, e o processo tem uma pegada de carbono cerca de 80% menor que a da gasolina comum.</p>

            <p><strong>Vantagens:</strong> aproveitamento de resíduos, redução de emissões, versatilidade no uso, e estímulo à economia local.</p>
            <p><strong>Desafios:</strong> impactos ambientais devido à obtenção insustentável, competição com a produção de alimentos, e poluição local causada pela queima.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (biomassa) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que o biogás captado em aterros sanitários é considerado uma forma de energia da biomassa?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1a" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1a">
                        <span>a) porque o lixo é queimado diretamente para gerar calor.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1b" name="pergunta1" type="radio" value="correto" />
                    <label class="card-opcao" for="p1b">
                        <span>b) porque vem da decomposição de matéria orgânica presente no lixo, liberando metano aproveitável.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p1c" name="pergunta1" type="radio" value="errado" />
                    <label class="card-opcao" for="p1c">
                        <span>c) porque os aterros sanitários ficam sempre próximos a plantações de cana.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: sem oxigênio, os micro-organismos decompõem o lixo orgânico e liberam metano, o mesmo biogás usado como combustível.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp1"></p>
            <div class="area w3-center">
                <img height="64" id="globinho1" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (eolica) -->
        <div class="topico">

            <div class="w3-panel w3-pale-red">

                <h2>2. Energia Eólica: Aproveitando a Força do Vento</h2>

                <div class="area">
                    <img alt="Parque eólico em duna litorânea com barcos de pesca" class="w3-mobile" id="imagem2" src="tp16f02.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Fonte: pexels.com. </p>

                <p>A <span class="termo" data-palavra="Energia Eólica"
                        data-definicao="Fonte de energia renovável que transforma a energia cinética do vento em energia elétrica por meio de turbinas eólicas (aerogeradores), uma das mais limpas e promissoras do mundo.">energia
                        eólica</span> é uma das fontes renováveis mais limpas e promissoras para geração de eletricidade no mundo. Utilizando a força do vento, ela transforma a energia cinética do ar em energia elétrica por meio de <span
                        class="termo" data-palavra="Aerogerador"
                        data-definicao="Turbina eólica cujas pás, movidas pelo vento, acionam um rotor conectado a um gerador que converte energia mecânica em energia elétrica.">turbinas eólicas, também chamadas de aerogeradores</span>.</p>

                <p><strong>Como Funciona?</strong> O processo de geração de energia eólica é relativamente simples, mas altamente eficiente:</p>
                <p>- <strong>Movimento das Pás:</strong> o vento move as pás das turbinas, projetadas para captar o máximo de energia do ar em movimento.</p>
                <p>- <strong>Conversão de Energia:</strong> as pás conectadas a um rotor acionam um gerador que converte a energia mecânica em energia elétrica.</p>
                <p>- <strong>Distribuição:</strong> a eletricidade gerada é enviada para subestações e distribuída para a rede elétrica.</p>

                <p>Os aerogeradores mais comuns instalados no Brasil têm potência entre 2 e 3 MW, com torres de cerca de 120 metros de altura e pás que podem chegar a 60 metros de comprimento, mas essa tendência vem mudando rapidamente: já existe no país um projeto de torre com 257 metros de altura, quase o dobro das atuais, já que torres mais altas alcançam ventos mais fortes e regulares, o que pode multiplicar o potencial eólico aproveitável em regiões que hoje são consideradas pouco ventosas.</p>

                <p><strong>Exemplo Prático no Brasil:</strong> o Brasil é líder latino-americano na produção de energia eólica, com 93% de toda a potência instalada concentrada no Nordeste, sobretudo no Rio Grande do Norte, na Bahia, no Ceará e no Piauí, região que combina ventos fortes e regulares o ano todo, inclusive à noite, quando a demanda de eletricidade continua alta, mas a energia solar já não está disponível. Um exemplo notável é o Complexo Eólico Lagoa dos Ventos, no Piauí, com 716 MW de capacidade instalada, o maior parque eólico em operação na América do Sul.</p>
                <p>A energia eólica já responde por cerca de 14,3% de toda a eletricidade gerada no Brasil, com uma potência instalada que ultrapassou 34 GW em 2025, distribuída por mais de 1.100 usinas eólicas, e segue em forte expansão devido às condições favoráveis de vento no país.</p>

                <p><strong>A Próxima Fronteira: Eólica Offshore.</strong> depois de dominar os parques em terra firme, o Brasil começa a explorar o potencial dos ventos no mar. A Lei 15.097/2025 criou o Marco Legal da Eólica Offshore, e em junho de 2025 o Ibama emitiu a primeira licença ambiental do país para um projeto desse tipo: um sítio de testes de aerogeradores no litoral de Areia Branca (RN), com capacidade de até 24,5 MW. Segundo a associação do setor, já existem 59 empreendimentos protocolados para licenciamento, somando mais de 135 GW de potência espalhados pelo litoral do Nordeste, Sudeste e Sul, embora a regulamentação completa e os primeiros parques em operação ainda devam levar anos para se concretizar.</p>

                <p><strong>Vantagens:</strong> sustentabilidade, fonte renovável e inesgotável, criação de empregos, geração de renda para proprietários de terras, e diversificação energética.</p>
                <p><strong>Desafios:</strong> dependência de ventos regulares, impacto na fauna, especialmente aves e morcegos que podem colidir com as pás em movimento, poluição visual e sonora para comunidades vizinhas, e altos custos iniciais de instalação e conexão à rede elétrica.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (solar) -->
        <div class="topico">

            <h2>3. Energia Solar: A Força do Sol ao Nosso Alcance</h2>

            <div class="area">
                <img alt="Sistema de energia solar residencial conectado à rede elétrica" class="w3-mobile" id="imagem3" src="tp16f03.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>A <span class="termo" data-palavra="Energia Solar"
                    data-definicao="Fonte de energia renovável obtida diretamente do sol, convertida em eletricidade por painéis fotovoltaicos ou em calor por sistemas solares térmicos.">energia
                    solar</span> é uma das fontes de energia renovável mais promissoras, especialmente em países tropicais como o Brasil, onde a radiação solar é abundante durante todo o ano. Essa fonte de energia é obtida diretamente do sol, utilizando tecnologias que convertem a luz e o calor em eletricidade ou outras formas de energia útil.</p>

            <p><strong>Como Funciona?</strong></p>
            <p>- <strong>Painéis Fotovoltaicos:</strong> contêm células fotovoltaicas feitas de materiais semicondutores, como o silício. A luz solar gera um fluxo de elétrons, produzindo eletricidade, que pode ser usada, armazenada ou enviada para a rede elétrica.</p>
            <p>- <strong>Sistemas Solares Térmicos:</strong> utilizam coletores solares para captar o calor do sol, aquecendo água ou fluidos específicos para uso residencial ou industrial.</p>

            <p><strong>Exemplo Prático no Brasil:</strong> a energia solar cresce rapidamente no país. Minas Gerais e São Paulo se destacam pela instalação de painéis em residências e empresas. No norte de Minas Gerais estão dois dos maiores parques solares do país: o Complexo Solar Janaúba, com capacidade de 1,617 GWp (o maior da América do Sul), e o Complexo Solar Pirapora, com 321 MW distribuídos em 11 usinas, ambos aproveitando a altíssima incidência solar do semiárido mineiro. Programas públicos incentivam a adoção de sistemas solares em áreas remotas.</p>

            <p><strong>Geração Distribuída:</strong> além dos grandes parques solares, uma parcela crescente da energia solar brasileira vem da <strong>geração distribuída</strong> (modelo em que o próprio consumidor gera energia, geralmente com painéis no telhado, e injeta o excedente na rede), regulada pela Lei 14.300/2022: painéis solares instalados diretamente em telhados de casas, comércios e indústrias, que geram energia no próprio ponto de consumo. Esse modelo já beneficia mais de 5,4 milhões de unidades consumidoras no país, e o excedente de energia gerado durante o dia pode ser injetado na rede da distribuidora e compensado depois, inclusive à noite, quando os painéis não produzem.</p>

            <p><strong>Vantagens:</strong> fonte renovável e infinita, sustentabilidade ambiental, independência energética, economia a longo prazo, e acessibilidade em áreas isoladas.</p>
            <p><strong>Desafios:</strong> alto custo inicial, dependência do clima, necessidade de grandes áreas, e descarte de materiais requerendo políticas de reciclagem adequadas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (eolica x solar intermitencia) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que o Nordeste brasileiro é a região preferida tanto para parques eólicos quanto para usinas solares?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2a" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2a">
                        <span>a) porque é a região com o menor custo de mão de obra do país.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2b" name="pergunta2" type="radio" value="correto" />
                    <label class="card-opcao" for="p2b">
                        <span>b) porque combina ventos fortes e regulares com altíssima incidência solar durante quase todo o ano.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p2c" name="pergunta2" type="radio" value="errado" />
                    <label class="card-opcao" for="p2c">
                        <span>c) porque é a única região do Brasil com espaço territorial disponível.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: ventos constantes (inclusive à noite) e sol forte praticamente o ano todo tornam a região ideal para as duas fontes ao mesmo tempo.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp2"></p>
            <div class="area w3-center">
                <img height="64" id="globinho2" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (hidraulica) -->
        <div class="topico">

            <h2>4. Energia Hidráulica: A Principal Fonte Renovável do Brasil</h2>

            <!-- <div class="area"><img alt="Usina hidrelétrica com barragem, reservatório e casa de força" class="w3-mobile" id="imagem35" src="tp16f035.png" style="display:block" /></div><p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p> -->

            <p>A <span class="termo" data-palavra="Energia Hidráulica"
                    data-definicao="Fonte de energia renovável gerada pelo movimento da água, aproveitada em usinas hidrelétricas que convertem a energia potencial e cinética da água em eletricidade por meio de turbinas.">energia
                    hidráulica</span> é, disparada, a principal fonte renovável do Brasil: em 2024, ela sozinha respondeu por 56,1% de toda a eletricidade gerada no país, segundo o Balanço Energético Nacional da Empresa de Pesquisa Energética (EPE). O funcionamento é relativamente simples: uma barragem represa a água de um rio, formando um desnível; ao ser liberada, a água ganha velocidade e aciona turbinas conectadas a geradores, que transformam esse movimento em eletricidade.</p>

            <p>Existem dois modelos principais de usina. As usinas com <strong>reservatório de acumulação</strong> represam um grande volume de água, funcionando como uma "poupança" de energia que pode ser usada mesmo em períodos de seca, mas que inunda uma área extensa. Já as <span class="termo" data-palavra="Usina a Fio d'Água"
                    data-definicao="Usina hidrelétrica que não possui grande reservatório de acumulação, gerando eletricidade a partir do fluxo natural do rio, com menor área alagada mas também menor capacidade de regular a vazão.">usinas
                    a fio d'água</span> não acumulam grandes volumes, gerando eletricidade a partir do fluxo natural do rio: alagam uma área bem menor, mas ficam mais vulneráveis à sazonalidade das chuvas, já que não conseguem "guardar" água para os meses mais secos.</p>

            <p><strong>Exemplos no Brasil:</strong> a Usina de Itaipu, na fronteira com o Paraguai, tem 14.000 MW de potência instalada e é a segunda maior hidrelétrica do mundo em capacidade, atrás apenas da Usina das Três Gargantas, na China. Já a Usina de Belo Monte, no rio Xingu, no Pará, é uma usina a fio d'água com potencial de 11.233 MW, embora sua geração média fique perto de 4.500 MW por causa da forte variação sazonal do volume do rio. A construção de Belo Monte também é um exemplo de como uma fonte renovável pode gerar impactos sociais e ambientais graves: o represamento reduziu o volume de água ao longo de um trecho do Xingu conhecido como Volta Grande, prejudicando a pesca e o modo de vida de populações indígenas e ribeirinhas da região, além de ter deslocado dezenas de milhares de pessoas durante as obras.</p>

            <p><strong>Vantagens:</strong> fonte renovável, limpa durante a operação, com custo de geração relativamente baixo depois de construída a usina, e reservatórios que também podem ser usados para irrigação e controle de cheias.</p>
            <p><strong>Desafios:</strong> alagamento de grandes áreas e deslocamento de populações, forte dependência do regime de chuvas (o que pode causar crises de abastecimento em anos de seca), e impactos sobre a fauna aquática e os ecossistemas fluviais.</p>

            <p><strong>Quando a Chuva Falta: a Crise Hídrica de 2021.</strong> a dependência do regime de chuvas não é um risco apenas teórico. Em 2021, o Brasil enfrentou a pior seca em 91 anos, que reduziu drasticamente o nível de água dos reservatórios das hidrelétricas do Centro-Oeste, Sudeste e Sul, região que concentra a maior parte da capacidade de armazenamento hidrelétrico do país. Em alguns reservatórios do subsistema, o volume armazenado caiu para menos de 20% da capacidade máxima. Para evitar um apagão, o governo pediu que a população reduzisse o consumo de energia, acionou termelétricas mais caras e poluentes para reforçar o abastecimento, e criou uma "bandeira de escassez hídrica" na conta de luz, cobrando uma taxa extra dos consumidores. O episódio mostrou, na prática, por que depender tanto de uma única fonte de energia, mesmo sendo ela renovável, deixa o sistema elétrico vulnerável a anos de clima atípico.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (hidraulica) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Qual é a principal diferença entre uma usina hidrelétrica com reservatório de acumulação e uma usina a fio d'água, como Belo Monte?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3a" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3a">
                        <span>a) a usina a fio d'água não usa turbinas.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3b" name="pergunta3" type="radio" value="correto" />
                    <label class="card-opcao" for="p3b">
                        <span>b) a usina a fio d'água não acumula grande volume de água, ficando mais dependente do fluxo natural do rio.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p3c" name="pergunta3" type="radio" value="errado" />
                    <label class="card-opcao" for="p3c">
                        <span>c) a usina com reservatório não gera eletricidade, só armazena água.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta3', 'resp3', 'globinho3', 'Dica: sem reservatório grande, a usina a fio d\'água depende diretamente da vazão do rio no momento, por isso sua geração varia mais ao longo do ano.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp3"></p>
            <div class="area w3-center">
                <img height="64" id="globinho3" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (geotermica) -->
        <div class="topico">

            <div class="w3-panel w3-pale-green">

                <h2>5. Energia Geotérmica</h2>

                <div class="area">
                    <img alt="Usina geotérmica: torre de refrigeração, turbina e rede de distribuição" class="w3-mobile" id="imagem4" src="tp16f04.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

                <p>A <span class="termo" data-palavra="Energia Geotérmica"
                        data-definicao="Fonte de energia que utiliza o calor proveniente do interior da Terra para gerar eletricidade e aquecimento, considerada uma fonte de base (baseload) por ser constante e independente do clima.">energia
                        geotérmica</span> utiliza o calor proveniente do interior da Terra para geração de energia e aquecimento.</p>

                <p><strong>Como Funciona?</strong> o calor subterrâneo aquece a água, gerando vapor que movimenta turbinas e produz eletricidade.</p>
                <p><strong>Exemplo Prático:</strong> a Islândia é o exemplo mais conhecido de uso da energia geotérmica: o país está sobre a Dorsal Mesoatlântica, fronteira entre as placas Eurasiática e Norte-Americana, o que garante intensa atividade vulcânica. Isso permite que a energia geotérmica responda por cerca de 25% de toda a eletricidade do país e por mais de 85% do aquecimento residencial, incluindo água quente encanada e até o derretimento de neve em calçadas e ruas no inverno.</p>
                <p><strong>Quem Lidera em Capacidade Instalada:</strong> apesar do destaque islandês, os maiores produtores em capacidade absoluta são outros. Os Estados Unidos lideram com mais de 3,5 GW instalados, boa parte concentrada em The Geysers, na Califórnia, o maior complexo geotérmico do mundo, com 22 usinas somando cerca de 1,5 GW de capacidade e respondendo por quase 20% de toda a energia renovável gerada no estado. Logo atrás vêm a Indonésia (cerca de 2,3 GW) e as Filipinas (cerca de 1,9 GW), dois países do Círculo de Fogo do Pacífico, região de intensa atividade vulcânica e sísmica no litoral da Ásia e da Oceania.</p>
                <p><strong>Vantagens:</strong> fonte constante e independente do clima. Ao contrário da energia solar e eólica, ela é chamada de <span
                        class="termo" data-palavra="Fonte de Base (Baseload)"
                        data-definicao="Fonte de energia capaz de fornecer um fluxo constante de eletricidade, sem depender das condições climáticas do momento, ao contrário de fontes intermitentes como a solar e a eólica.">fonte
                        de base (baseload)</span>, pois fornece um fluxo constante de energia, sem depender das condições climáticas do momento.</p>
                <p><strong>Desafios:</strong> necessita de locais específicos com significativa atividade geotérmica, como regiões vulcânicas ou de intensa atividade tectônica. O principal obstáculo técnico é perfurar com segurança quilômetros de rocha aquecida para captar esse calor. Ainda que seja uma fonte praticamente inesgotável e livre de carbono, a energia geotérmica atende hoje a uma parcela muito pequena da demanda energética mundial, muito atrás dos combustíveis fósseis.</p>

                <p><strong>Quênia e o Grande Vale do Rift:</strong> na África Oriental, o Quênia é o país líder do continente em energia geotérmica, com essa fonte respondendo por mais de 40% de toda a eletricidade gerada no país. Isso é possível porque o território queniano está situado sobre o <span
                        class="termo" data-palavra="Vale do Rift"
                        data-definicao="Extensa fenda no terreno da África Oriental formada por um movimento divergente de placas tectônicas (Somali e Núbia), que adelgaça a crosta e permite ao magma se aproximar da superfície, criando condições ideais para energia geotérmica.">Grande
                        Vale do Rift</span> (Great Rift Valley), uma extensa fenda no terreno formada por um movimento divergente de placas tectônicas: as placas Somali e Núbia estão lentamente se afastando uma da outra, adelgaçando a crosta continental e permitindo que o magma se aproxime da superfície. Esse calor magmático aquece a água subterrânea da região, criando exatamente as condições geológicas necessárias para a exploração de energia geotérmica em larga escala, o que explica por que boa parte do potencial geotérmico do continente africano está concentrado ao longo dessa faixa de vale do rift no leste da África.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (geotermica) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que o Quênia consegue gerar mais de 40% de sua eletricidade a partir da energia geotérmica?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4a" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4a">
                        <span>a) porque o país recebe a maior incidência solar do planeta.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4b" name="pergunta4" type="radio" value="correto" />
                    <label class="card-opcao" for="p4b">
                        <span>b) porque está sobre o Vale do Rift, onde a crosta é mais fina e o magma fica mais perto da superfície.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p4c" name="pergunta4" type="radio" value="errado" />
                    <label class="card-opcao" for="p4c">
                        <span>c) porque tem os ventos mais fortes da África.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta4', 'resp4', 'globinho4', 'Dica: o afastamento das placas Somali e Núbia adelgaça a crosta continental, o que aproxima o calor magmático da superfície.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp4"></p>
            <div class="area w3-center">
                <img height="64" id="globinho4" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (maremotriz) -->
        <div class="topico">

            <h2>6. Energia Maremotriz</h2>

            <div class="area">
                <img alt="Dispositivo flutuante de captação de energia das ondas do mar" class="w3-mobile" id="imagem5" src="tp16f05.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>A <span class="termo" data-palavra="Energia Maremotriz"
                    data-definicao="Fonte de energia renovável obtida pelo movimento das marés e ondas do mar, captada por turbinas submersas ou dispositivos flutuantes e convertida em eletricidade.">energia
                    maremotriz</span> é obtida pelo movimento das marés e ondas do mar, utilizando o fluxo natural da água para gerar energia.</p>

            <p><strong>Como Funciona?</strong> em geral, existem duas abordagens principais. A primeira, mais antiga, funciona como uma barragem construída num estuário: a água entra e sai com a maré, passando por turbinas instaladas na própria estrutura, de forma parecida com uma usina hidrelétrica. A segunda, mais recente, usa turbinas submersas soltas no fundo do mar, parecidas com turbinas eólicas debaixo d'água, que giram com a força das correntes de maré, sem precisar de uma barragem inteira.</p>

            <p><strong>Exemplo Prático:</strong> a Usina Maremotriz de La Rance, na região da Bretanha, na França, foi inaugurada em 1966 e foi a primeira usina desse tipo no mundo. Com 240 MW de potência instalada e 24 turbinas na barragem, ela ainda produz eletricidade suficiente para abastecer cerca de 250 mil residências. Já na Escócia, o projeto MeyGen, que usa o modelo de turbinas submersas soltas no fundo do mar, tem potencial de até 400 MW e deve fornecer energia a cerca de 175 mil residências quando estiver totalmente concluído, sendo um dos maiores projetos de energia das correntes de maré do mundo.</p>

            <p><strong>Vantagens:</strong> fonte previsível devido aos ciclos regulares das marés, ao contrário do vento e do sol, que variam de forma menos previsível.</p>
            <p><strong>Desafios:</strong> tecnologia ainda cara e pouco difundida em escala comercial, poucos locais no mundo com amplitude de maré suficiente para viabilizar grandes projetos, e possível impacto sobre a fauna marinha e a circulação de sedimentos nos estuários. Por causa dessas exigências geográficas tão específicas, a energia maremotriz ainda é, entre todas as fontes estudadas nesta aula, a que responde pela menor fatia da matriz elétrica mundial, mesmo décadas depois da inauguração de La Rance.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Pergunta pratica (maremotriz) -->
        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Por que a energia maremotriz é considerada mais previsível do que a energia eólica ou solar?</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5a" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5a">
                        <span>a) porque as marés são mais fortes que o vento em qualquer lugar do planeta.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5b" name="pergunta5" type="radio" value="correto" />
                    <label class="card-opcao" for="p5b">
                        <span>b) porque as marés seguem ciclos regulares e conhecidos com antecedência, diferente do vento e das nuvens.</span>
                    </label>
                </div>
                <div class="item-resposta">
                    <input class="radio-duvid" id="p5c" name="pergunta5" type="radio" value="errado" />
                    <label class="card-opcao" for="p5c">
                        <span>c) porque não depende da Lua nem do Sol.</span>
                    </label>
                </div>
            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta5', 'resp5', 'globinho5', 'Dica: as marés seguem a atração gravitacional da Lua e do Sol, um ciclo astronômico regular que pode ser calculado com anos de antecedência.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p class="w3-center w3-padding w3-large" id="resp5"></p>
            <div class="area w3-center">
                <img height="64" id="globinho5" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>
        </div>


        <!-- BLOCO: Instrumentalizacao (eletricidade verde) -->
        <div class="topico">

            <h2>7. Eletricidade Verde e Integração das Fontes</h2>

            <p>O conceito de <span class="termo" data-palavra="Eletricidade Verde"
                    data-definicao="Integração de diferentes fontes de energia renovável em redes inteligentes, otimizando sua utilização de forma sustentável e reduzindo a dependência de fontes fósseis.">eletricidade
                    verde</span> integra diferentes fontes renováveis em redes inteligentes, otimizando sua utilização de forma sustentável.</p>

            <p><strong>Exemplo Prático:</strong> sistemas avançados de armazenamento, como baterias, permitem o uso da energia solar captada durante o dia para abastecer a demanda à noite. Em 2025, a Aneel autorizou o primeiro sistema de baterias desse tipo instalado junto a uma usina solar no Brasil, na UFV Sol de Brotas 7, em Uibaí (BA): 1.250 kW de potência e 5.016 kWh de capacidade de armazenamento, integrados a um arranjo híbrido que também reúne os complexos eólicos vizinhos Ventos de Santa Eugênia e Morro do Cruzeiro. Projetos como esse mostram, na prática, como sol, vento e armazenamento podem compartilhar o mesmo ponto de conexão à rede elétrica.</p>

            <p><strong>Benefícios:</strong> a integração melhora a eficiência e torna o fornecimento de energia mais confiável, reduzindo a dependência de fontes fósseis.</p>

            <p><strong>O limite das baterias:</strong> a eletromobilidade, isto é, a substituição de veículos movidos a combustíveis fósseis por carros elétricos, costuma ser apresentada como uma solução limpa para o transporte. Porém, essa transição também tem um custo ambiental pouco discutido: a bateria de um único veículo elétrico pode conter até 300 kg de <span
                    class="termo" data-palavra="Minerais Críticos"
                    data-definicao="Grupo de minerais essenciais para a transição energética (lítio, cobalto, níquel, manganês, grafite, além de terras-raras usadas em ímãs de motores elétricos), cuja extração provoca impactos ambientais e sociais significativos.">minerais
                    críticos</span>, como lítio, cobalto, níquel, manganês e grafite, além de terras-raras usadas nos ímãs dos motores elétricos, contra cerca de 50 kg de minerais presentes em um carro a combustão comum. Assim como o petróleo, esses metais são recursos minerais não renováveis, cuja extração provoca impactos ambientais e sociais significativos nos países produtores. Trocar a dependência do petróleo pela dependência desses metais não elimina o problema de fundo, apenas desloca a pressão sobre os recursos naturais para outra cadeia produtiva, o que mostra que nenhuma tecnologia é automaticamente sustentável só por não emitir poluentes durante o uso.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questao aberta -->
        <div class="topico pergunta-aberta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO ABERTA</p>
            <h4 class="fontePixel"><b>Um exercício para reforçar alguns conceitos.</b></h4>
            <p>Em qual rio fica a Usina de Belo Monte, no Pará?</p>
            <div class="w3-margin">
                <input class="input" id="q1a" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1a"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1a', 'xingu', 'resp1a', this, 'globinho1a')">
                    Conferir
                </button>
            </div>
            <div class="area w3-center">
                <img height="64" id="globinho1a" src="/fotoIndex/globinhoPe.png" style="display:none" width="64" />
            </div>

            <p>Escreva o nome da extensa fenda no terreno da África Oriental, formada pelo afastamento de placas tectônicas, que explica o alto potencial geotérmico do Quênia.</p>
            <div class="w3-margin">
                <input class="input" id="q1b" placeholder="sua resposta..." type="text" />
            </div>
            <p class="w3-center w3-padding" id="resp1b"></p>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid" onclick="validarAberta('q1b', 'vale do rift', 'resp1b', this, 'globinho1b')">
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


        <!-- <div class="topico"><h2> Infográfico - Resumo</h2><div class="w3-margin"><img id="inforesumotp16" src="inforesumotp16.webp" alt="Infográfico resumo Fontes de energia II - alternativas renováveis" class="w3-mobile"><span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button><hr></div> -->


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se a energia geotérmica é praticamente inesgotável e livre de carbono, por que ela não é usada em todo o mundo?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span> Porque ela depende de condições geológicas específicas, calor suficientemente próximo da superfície para ser captado, o que só ocorre em regiões vulcânicas ou de intensa atividade tectônica, como a Islândia ou o Quênia. Na maior parte do planeta, seria preciso perfurar quilômetros de rocha para alcançar esse calor, o que torna a exploração cara e tecnicamente difícil. Por isso, apesar do potencial, a energia geotérmica ainda atende a uma parcela muito pequena da demanda energética mundial.</p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Carros elétricos não resolvem o problema da poluição, já que não emitem gases durante o uso?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Não completamente. As baterias desses veículos dependem de metais como lítio, cobalto e terras-raras, recursos minerais não renováveis cuja extração também causa impactos ambientais e sociais significativos nos países produtores. Além disso, se a eletricidade usada para carregar o carro vier de uma usina termelétrica a carvão, por exemplo, parte da poluição simplesmente se desloca da rua para a usina. A eletromobilidade só é plenamente limpa quando combinada com uma matriz elétrica também renovável.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que a energia eólica e a solar não substituem sozinhas os combustíveis fósseis, se são tão limpas?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque são fontes intermitentes: o vento nem sempre sopra e o sol não brilha à noite. Ao contrário da energia geotérmica, que é uma fonte de base (baseload) com fornecimento constante, eólica e solar precisam de sistemas de armazenamento (como baterias) ou de outras fontes complementares para garantir energia o tempo todo. É por isso que a "eletricidade verde" busca justamente integrar várias fontes renováveis diferentes em uma mesma rede.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se a energia hidráulica é renovável e responde por mais da metade da eletricidade do Brasil, por que ela também é criticada por ambientalistas?
                </strong></p>

            <p><span class="primeiraLetra">R:</span>
                Porque "renovável" não é sinônimo de "sem impacto". Grandes usinas como Belo Monte alagam extensas áreas ou alteram o curso natural dos rios, deslocando populações inteiras e prejudicando a pesca e o modo de vida de comunidades indígenas e ribeirinhas ao longo do trecho afetado. Além disso, a forte dependência da chuva torna o sistema elétrico brasileiro vulnerável em anos de seca severa. Por isso, o debate sobre energia hidráulica não é só técnico: envolve também escolhas sobre quem paga o custo social e ambiental de cada usina.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é biomassa, quais são suas principais formas de aproveitamento e vantagens?</h3>
                <h3>2. Como funciona a geração de energia eólica e quais são seus principais desafios?</h3>
                <h3>3. Dê um exemplo prático do uso da energia eólica no Brasil e explique por que essa região é ideal para essa fonte de energia.</h3>
                <h3>4. Explique como a energia solar é aproveitada por meio de painéis fotovoltaicos e sistemas solares térmicos.</h3>
                <h3>5. Qual é a diferença entre uma usina hidrelétrica com reservatório e uma usina a fio d'água? Cite um exemplo de cada tipo.</h3>
                <h3>6. O que é energia geotérmica e quais são seus principais benefícios e limitações?</h3>
                <h3>7. Como a energia maremotriz é gerada e quais são os desafios associados a essa fonte de energia?</h3>
                <h3>8. O que é eletricidade verde e como a integração de fontes renováveis está sendo otimizada atualmente?</h3>
                <h3>9. Quais são os impactos ambientais e sociais associados às baterias de veículos elétricos?</h3>
                <h3>10. Qual é o impacto das fontes renováveis na diversificação da matriz energética do Brasil? Cite exemplos.</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre as fontes renováveis que já conhecia. Agora você sabe que cada uma delas, biomassa, eólica, solar, geotérmica ou maremotriz, tem condições próprias de aproveitamento: vento regular, radiação solar, atividade vulcânica, ciclos de maré. Nenhuma é uma solução universal sozinha.</p>

                <p>Você também viu que "limpo" não é sinônimo de "sem custo ambiental": mesmo a energia hidráulica, disparada a maior fonte renovável do Brasil, tem impactos sociais e ambientais em usinas como Belo Monte, e a eletromobilidade, apresentada como solução para o transporte, depende de minerais críticos não renováveis cuja extração tem impactos próprios. Por isso a transição energética depende de integrar várias fontes dentro de uma matriz energética diversificada, e não de trocar um problema por outro.</p>

                <p><strong>Resumo dos conceitos:</strong> matriz energética; biomassa, biogás e RenovaBio; energia eólica e aerogeradores; energia solar (fotovoltaica, térmica e geração distribuída); energia hidráulica (reservatório e usina a fio d'água); energia geotérmica e fonte de base; Vale do Rift; energia maremotriz; eletricidade verde; minerais críticos.</p>

                <p>Na próxima aula, vamos mudar de escala: em vez de olhar para as fontes de energia que movem a economia, vamos olhar para baixo, para o solo que pisamos, entendendo como ele se forma e por que processos como a laterização, a lixiviação, a salinização e a desertificação podem degradar ou conservar essa camada tão importante para a agricultura e para a vida na Terra.</p>

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
        mensagem: 'o tema Fontes de Energia II é fascinante! Continue estudando!',
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
