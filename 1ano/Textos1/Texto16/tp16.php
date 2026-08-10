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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

    <title>1º ano - Texto 16 - Fontes de energia II – alternativas renováveis</title>

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
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Problematizacao -->
        <div class="topico">
            <h2>Introdução</h2>
            <p><span class="primeiraLetra">S</span>e os combustíveis fósseis poluem e vão se esgotar um dia, por que a transição para fontes limpas é tão lenta? A resposta passa por entender o que cada fonte renovável oferece, e também o que ela exige: certas condições geográficas, investimento, tecnologia e, muitas vezes, recursos minerais próprios.</p>
            <p>Nesta aula, vamos estudar as principais alternativas energéticas renováveis, biomassa, energia eólica, solar, geotérmica e maremotriz, entendendo como cada uma funciona, onde é mais aproveitada e quais são seus limites.</p>
            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
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

            <p><strong>Vantagens:</strong> aproveitamento de resíduos, redução de emissões, versatilidade no uso, e estímulo à economia local.</p>
            <p><strong>Desafios:</strong> impactos ambientais devido à obtenção insustentável, competição com a produção de alimentos, e poluição local causada pela queima.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
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

                <p><strong>Exemplo Prático no Brasil:</strong> o Brasil é líder na produção de energia eólica, com destaque para estados como Rio Grande do Norte, Bahia e Ceará. Um exemplo notável é o Parque Eólico de Lagoa do Mato, que fornece energia para milhares de residências.</p>
                <p>A energia eólica representa cerca de 12% da matriz elétrica brasileira, com grande potencial de expansão devido às condições favoráveis de vento no país.</p>

                <p><strong>Vantagens:</strong> sustentabilidade, fonte renovável e inesgotável, criação de empregos, geração de renda para proprietários de terras, e diversificação energética.</p>
                <p><strong>Desafios:</strong> dependência de ventos regulares, impacto na fauna, poluição visual e sonora, e altos custos iniciais de instalação.</p>

            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
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

            <p><strong>Exemplo Prático no Brasil:</strong> a energia solar cresce rapidamente no país. Minas Gerais e São Paulo se destacam pela instalação de painéis em residências e empresas. O Complexo Solar Pirapora, em Minas Gerais, é um dos maiores parques solares da América Latina, fornecendo energia limpa para milhares de residências. Programas públicos incentivam a adoção de sistemas solares em áreas remotas.</p>

            <p><strong>Vantagens:</strong> fonte renovável e infinita, sustentabilidade ambiental, independência energética, economia a longo prazo, e acessibilidade em áreas isoladas.</p>
            <p><strong>Desafios:</strong> alto custo inicial, dependência do clima, necessidade de grandes áreas, e descarte de materiais requerendo políticas de reciclagem adequadas.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (geotermica) -->
        <div class="topico">

            <div class="w3-panel w3-pale-green">

                <h2>4. Energia Geotérmica</h2>

                <div class="area">
                    <img alt="Usina geotérmica: torre de refrigeração, turbina e rede de distribuição" class="w3-mobile" id="imagem4" src="tp16f04.png" style="display:block" />
                </div>
                <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

                <p>A <span class="termo" data-palavra="Energia Geotérmica"
                        data-definicao="Fonte de energia que utiliza o calor proveniente do interior da Terra para gerar eletricidade e aquecimento, considerada uma fonte de base (baseload) por ser constante e independente do clima.">energia
                        geotérmica</span> utiliza o calor proveniente do interior da Terra para geração de energia e aquecimento.</p>

                <p><strong>Como Funciona?</strong> o calor subterrâneo aquece a água, gerando vapor que movimenta turbinas e produz eletricidade.</p>
                <p><strong>Exemplo Prático:</strong> a Islândia é um dos maiores exemplos de uso da energia geotérmica, empregando-a para aquecer residências e gerar eletricidade.</p>
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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (maremotriz) -->
        <div class="topico">

            <h2>5. Energia Maremotriz</h2>

            <div class="area">
                <img alt="Dispositivo flutuante de captação de energia das ondas do mar" class="w3-mobile" id="imagem5" src="tp16f05.png" style="display:block" />
            </div>
            <p class="citacao" style="display:block"> Fonte: organizado pelo autor. </p>

            <p>A <span class="termo" data-palavra="Energia Maremotriz"
                    data-definicao="Fonte de energia renovável obtida pelo movimento das marés e ondas do mar, captada por turbinas submersas ou dispositivos flutuantes e convertida em eletricidade.">energia
                    maremotriz</span> é obtida pelo movimento das marés e ondas do mar, utilizando o fluxo natural da água para gerar energia.</p>

            <p><strong>Como Funciona?</strong> turbinas submersas ou dispositivos flutuantes captam a força da água em movimento, transformando-a em eletricidade.</p>
            <p><strong>Exemplo Prático:</strong> projetos-piloto no Reino Unido e França mostram o potencial da energia maremotriz como fonte de energia limpa.</p>
            <p><strong>Vantagens:</strong> fonte previsível devido aos ciclos regulares das marés.</p>
            <p><strong>Desafios:</strong> tecnologia ainda em desenvolvimento e possível impacto nos ecossistemas marinhos.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Instrumentalizacao (eletricidade verde) -->
        <div class="topico">

            <h2>6. Eletricidade Verde e Integração das Fontes</h2>

            <p>O conceito de <span class="termo" data-palavra="Eletricidade Verde"
                    data-definicao="Integração de diferentes fontes de energia renovável em redes inteligentes, otimizando sua utilização de forma sustentável e reduzindo a dependência de fontes fósseis.">eletricidade
                    verde</span> integra diferentes fontes renováveis em redes inteligentes, otimizando sua utilização de forma sustentável.</p>

            <p><strong>Exemplo Prático:</strong> sistemas avançados de armazenamento, como baterias, permitem o uso da energia solar captada durante o dia para abastecer a demanda à noite.</p>

            <p><strong>Benefícios:</strong> a integração melhora a eficiência e torna o fornecimento de energia mais confiável, reduzindo a dependência de fontes fósseis.</p>

            <p><strong>O limite das baterias:</strong> a eletromobilidade, isto é, a substituição de veículos movidos a combustíveis fósseis por carros elétricos, costuma ser apresentada como uma solução limpa para o transporte. Porém, essa transição também tem um custo ambiental pouco discutido: as baterias desses veículos dependem de uma trintena de <span
                    class="termo" data-palavra="Metais de Terras-Raras"
                    data-definicao="Grupo de metais que ocorrem em quantidades ínfimas na natureza (como lítio, cobalto, gálio e tântalo), essenciais para baterias de veículos elétricos, cuja extração provoca impactos ambientais e sociais significativos.">metais
                    que ocorrem em quantidades ínfimas na natureza</span>, como lítio, cobalto, gálio, tântalo e os chamados metais de terras-raras. Assim como o petróleo, esses metais são recursos minerais não renováveis, cuja extração provoca impactos ambientais e sociais significativos nos países produtores. Trocar a dependência do petróleo pela dependência desses metais não elimina o problema de fundo, apenas desloca a pressão sobre os recursos naturais para outra cadeia produtiva, o que mostra que nenhuma tecnologia é automaticamente sustentável só por não emitir poluentes durante o uso.</p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba! A Ciência é feita de perguntas!</h2>

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

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>
                <h3>1. O que é biomassa e quais são suas principais formas de aproveitamento?</h3>
                <h3>2. Quais são as vantagens do uso da biomassa como fonte de energia?</h3>
                <h3>3. Como funciona a geração de energia eólica e quais são seus principais desafios?</h3>
                <h3>4. Dê um exemplo prático do uso da energia eólica no Brasil e explique por que essa região é ideal para essa fonte de energia.</h3>
                <h3>5. Explique como a energia solar é aproveitada por meio de painéis fotovoltaicos e sistemas solares térmicos.</h3>
                <h3>6. Quais são as principais vantagens e desafios da energia solar?</h3>
                <h3>7. O que é energia geotérmica e quais são seus principais benefícios e limitações?</h3>
                <h3>8. Como a energia maremotriz é gerada e quais são os desafios associados a essa fonte de energia?</h3>
                <h3>9. O que é eletricidade verde e como a integração de fontes renováveis está sendo otimizada atualmente?</h3>
                <h3>10. Qual é o impacto das fontes renováveis na diversificação da matriz energética do Brasil? Cite exemplos.</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

                <h2>O que mudou no seu olhar</h2>

                <p>Releia o que você anotou no início sobre as fontes renováveis que já conhecia. Agora você sabe que cada uma delas, biomassa, eólica, solar, geotérmica ou maremotriz, tem condições próprias de aproveitamento: vento regular, radiação solar, atividade vulcânica, ciclos de maré. Nenhuma é uma solução universal sozinha.</p>

                <p>Você também viu que "limpo" não é sinônimo de "sem custo ambiental": mesmo a eletromobilidade, apresentada como solução para o transporte, depende de metais não renováveis cuja extração tem impactos próprios. Por isso a transição energética depende de integrar várias fontes, e não de trocar um problema por outro.</p>

                <p><strong>Resumo dos conceitos:</strong> biomassa e biogás; energia eólica e aerogeradores; energia solar (fotovoltaica e térmica); energia geotérmica e fonte de base; Vale do Rift; energia maremotriz; eletricidade verde; metais de terras-raras.</p>

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
