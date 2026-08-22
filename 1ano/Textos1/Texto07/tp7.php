<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Sistemas de Informações Geográficas: sensoriamento remoto, GPS e as novas tecnologias da Cartografia">
    <meta property="og:title" content="Texto 07 - Sistemas de Informações Geográficas (SIGs)">
    <meta property="og:description" content="Como satélites, radares e GPS transformaram a Cartografia em tempo real">
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


    <title>1º ano - Texto 07</title>



    




</head>

<body>

    <?php include __DIR__ . '/../../../includes/header.php'; ?>

      <div id="aviso-status" class="w3-margin-top"></div>


    <main class="w3-content w3-white w3-card-2 w3-padding-large w3-margin-bottom" style="max-width:750px">


        <!-- BLOCO: Abertura -->
        <div class="topico">
            <div class="w3-padding-top-48"></div>


            <h1 id="h1">
            </h1>
            
            <div class="w3-container w3-padding-16">
                <p><strong>Conteúdo: </strong><span id="descricao-aula"></span></p>

                <p><strong>Objetivo:</strong> <span id="objetivo-aula">Compreender o papel estratégico da Cartografia diante das novas
                    tecnologias de informações Geográficas (SIGs).</span></p>
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
			<p class="w3-pale-green">Você já usou o Waze ou o Google Maps para chegar a algum lugar? Já parou para pensar como o aplicativo sabe exatamente onde você está, em tempo real, em qualquer parte do mundo?</p>
			<p class="w3-pale-green">Anote em seu <strong>caderno</strong>: na sua opinião, como um aplicativo no seu celular consegue saber sua localização exata? Guarde sua resposta, vamos retomá-la no final da aula.</p>
		</div>
		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>
	</div>


	<!-- BLOCO: Problematizacao -->
	<div class="topico">
		<h2> Introdução </h2>
		<p><span class="primeiraLetra">A</span>té a aula anterior, vimos que os mapas eram desenhados a partir de medições feitas no chão ou calculadas com fórmulas de escala e projeção. Mas hoje, boa parte da Cartografia não depende mais de ninguém andando pelo terreno com trena e bússola.</p>
		<p>Satélites, radares e computadores passaram a fazer esse trabalho à distância e em tempo real, criando os chamados Sistemas de Informações Geográficas.</p>
		<p><strong>Esta aula responde a uma pergunta bem atual: como é possível fotografar, medir e localizar qualquer ponto da Terra sem sair do lugar, e por que governos, empresas e exércitos disputam tanto essa tecnologia.</strong></p>
		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>
	</div>


	<!-- BLOCO: Instrumentalizacao (o que sao os SIGs) -->
	<div class="topico">


		<h2> A era dos Sistemas de Informações Geográficas</h2>

		<p>Hoje é possível entrar no site do Google Earth não apenas para localizar casas, ruas ou
			prédios, mas sim realizar voos virtuais, projetos 3D com programas de modelagem, como Blender, por exemplo.
			Cada ponto da Terra possui uma localização com coordenadas geográficas e informações adicionais de altura e
			profundidade.</p>

		<p><span class="termo" data-palavra="Sistema de Informações Geográficas (SIG)"
				data-definicao="Conjunto de equipamentos e meios tecnológicos (satélites, GPS, software) usados para coletar, armazenar e analisar dados sobre o espaço terrestre em camadas de informação. Usado por pesquisadores, empresas, ONGs, governos e serviços de inteligência.">Sistemas
				de informações Geográficas</span> - Conhecidos também como SIGs são equipamentos e meios
			tecnológicos para se estudar o espaço terrestre. São utilizados por pesquisadores, empresas, ONGs, governos,
			serviços de inteligência, entre outros. </p>


		<p> Os aparelhos eletrônicos receptores imitam o olho humano, que também é um sensor. Como
			também será visto na disciplina de Física, todo corpo emite radiação eletromagnética. Entretanto, não
			conseguimos enxergar essas radiações, pois a maioria não são visíveis à visão humana, conforme <span
				onclick="Aparecer('imagem1','citacao1')"><mark>figura abaixo.</mark></span> </p>

	
			<div class="w3-center"><img id="imagem1" src="tp7f1.png" alt="Espectro de luz" class="w3-mobile" style=display:block></div>
		
			<div class="w3-margin-left"><span class="citacao" id="citacao1" style=display:block> Fonte: Wikipedia. </span></div>
		


		<p> De todo tipo de comprimentos de ondas existentes, só conseguimos ver uma parte bem
			pequena, entre o ultravioleta e o infravermelho.</p>

		<p>O estudo desse espectro gerou diversos aparelhos eletrônicos, como controles remotos,
			câmeras fotográficas, dentro outros. Vamos estudar alguns deles, os SIGs, que, por sua vez, resultam da
			combinação entre três tipos de tecnologias distintos: O <strong>sensoriamento remoto</strong>, o <strong>GPS</strong> e o <strong>geoprocessamento</strong>.
		</p>


		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>



	<!-- BLOCO: Instrumentalizacao (sensoriamento remoto) -->
	<div class="topico">


		<h2> Como funciona o Sensoriamento remoto?</h2>

		<p>Remoto significa distante, por isso o os sensores que antes eram acoplados em balões
			meteorológicos, como na primeira imagem da Terra do espaço na década de 1960, são instalados em uma rede de
			satélites ao redor da Terra. </p>

		<p><span class="termo" data-palavra="Sensoriamento Remoto"
				data-definicao="Captação de informações sobre a superfície terrestre por meio de sensores instalados em satélites, aeronaves ou balões, sem contato físico entre o sensor e o objeto estudado. Pode ser passivo (capta luz solar refletida) ou ativo (emite sua própria energia, como o radar)."><strong>Sensoriamento
					remoto</strong></span> - Consiste na captação de
			informações através de sensores instalados em satélites artificiais, aeronaves ou até balões. Obtêm-se
			imagens e dados da superfície terrestre pela captação e registro da energia refletida/emitida pela
			superfície, sem que haja contato físico entre o sensor e a

			<span onclick="Aparecer('imagem2','citacao2')"><mark>superfície estudada.</mark></span>
		</p>

		<div class="area"><img id="imagem2" src="tp7f2.png" alt="tp7f2" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao2" style=display:block> Fonte: ibge.gov.br. </p>


		<p>Quando a radiação entra em contato com a superfície da Terra, ela pode ser absorvida,
			refletida ou transmitidas (no caso de objetos transparentes). Os cientistas podem medir o grau de energia
			que refletiu em uma folha de árvore, por exemplo, o que eles denominam <span class="termo"
				data-palavra="Reflectância"
				data-definicao="Medida do quanto de energia (luz) um objeto reflete de volta ao ser atingido por radiação eletromagnética. É a base do sensoriamento remoto: cada tipo de superfície reflete a energia de um jeito diferente.">reflectância</span>. </p>

		<p>Dependendo da composição atômica e das propriedades do objeto (sólido, líquido ou gasoso)
			podemos saber se estamos lidando com uma imagem de um rio, um terreno ou de casas, isso porque cada objeto
			possui uma <span class="termo" data-palavra="Assinatura Espectral"
				data-definicao="Padrão único de reflectância que cada tipo de objeto ou superfície apresenta ao longo dos diferentes comprimentos de onda. É o que permite distinguir água, vegetação ou construções em uma imagem de satélite, como uma impressão digital.">assinatura
				espectral</span>, ou seja, a variação da reflectância para os diversos comprimentos de onda.
		</p>

		<p><span onclick="Aparecer('imagem3','citacao3')"><mark>Na figura abaixo</mark></span> , há um
			esquema de sensoriamento remoto passivo. O sol ilumina a superfície, a radiação atinge a Terra e é refletida
			parar o espaço e, por isso, pode ser captado pelo sensor que está a bordo de um satélite. O sensor
			retransmite essas informações para uma antena parabólicas programadas para rastrear esse tipo de satélite.
		</p>



		<div class="area"><img id="imagem3" src="tp7f3.png" alt="tp7f3" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao3" style=display:block> Fonte: Fonte: Sausen (2008, p.11.) </p>

		<p>Eles são úteis para analisar fenômenos como queimadas, ilhas de calor, inundação, avaliar
			danos causados por vendavais, furações, dentre outros.</p>

		<p> Por outro lado, há uma forma mais ativa de captar imagens da superfície da Terra. Pode-se
			acoplar um radar em um avião ou satélite que emite micro-ondas, que por sua vez, são refletidas de volta
			pela Terra, permitindo o registro de uma região do espaço geográfico.

			<span onclick="Aparecer('imagem4','citacao4')"><mark>Veja:</mark></span>
		</p>

		<div class="area"><img id="imagem4" src="tp7f4.png" alt="tp7f4" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao4" style=display:block> Fonte: Fonte: Moreira e Sene (2016, p.82). </p>

		<p> As vantagens do sistema que emite micro-ondas estão relacionadas a menor interferência das
			nuvens do que as ondas do espectro visível e infravermelho, o que possibilita registrar imagens com o radar
			mesmo em dias nublados ou à noite, áreas alagadas, derrames de óleo na água do mar. </p>

		<p>O que para o sistema passivo seria um pouco mais difícil, pois dependeria das condições
			atmosféricas da região naquele momento.</p>

		<p>Foi justamente por essa razão que o projeto RadamBrasil, iniciado em 1970, escolheu o radar
			para mapear o território brasileiro. Grande parte da Amazônia permanece encoberta por nuvens durante boa
			parte do ano, o que inviabilizaria o uso de sensores ópticos convencionais para cobrir toda a região com
			qualidade.</p>


		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>



	<div class="topico">


		<h2>Principais usos para o sensoriamento remoto</h2>

		<p>Tanto as fotos tiradas por aviões como as dos satélites e radares são fundamentais para a
			produção de mapas, cartas e plantas detalhados dos aspectos físicos e humanos da superfície terrestre,
			como resume o quadro abaixo:
		</p>

		<table>
			<tr>
				<th>Áreas</th>
				<th>Aplicações</th>
			</tr>
			<tr>
				<td>Meteorologia</td>
				<td>Previsão do tempo, mapeamento climático</td>
			</tr>
			<tr>
				<td>Geologia</td>
				<td>Procura de jazidas, aproveitamento dos solos</td>
			</tr>
			<tr>
				<td>Agricultura</td>
				<td>Previsão de safras, estudo de contaminação por pragas</td>
			</tr>
			<tr>
				<td>Infraestrutura</td>
				<td>Tráfego aéreo, marítimo, ferroviário e rodoviário</td>
			</tr>
			<tr>
				<td>Ecologia</td>
				<td>Inventário de recursos hídricos, desmatamento, equilíbrio ecológico</td>
			</tr>
			<tr>
				<td>Demografia</td>
				<td>Inventário e planejamento urbanos, ocupação de encostas, áreas de risco</td>
			</tr>
		</table>

		<p class="citacao">Fonte: Organizado pelo autor.</p>


		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>




	<div class="topico">


		<h2> As imagens aéreas e de satélites </h2>

		<h2> Imagens aéreas</h2>


		<p> O resultado de todo esse sistema técnico integrado resulta em diversas imagens sobre a
			superfície terrestre. Antes as fotos aéreas eram tiradas a partir de balões, ainda no século XIX.
			Entretanto, progrediu muito na época da Segunda Guerra Mundial (1939-1945) com o uso de
			<span onclick="Aparecer('imagem6','citacao6')"><mark>aviões.</mark></span>
		</p>

		<div class="area"><img id="imagem6" src="tp7f6.png" alt="tp7f6" class="w3-mobile" style=display:block>
		</div>

		<p class="citacao" id="citacao6" style=display:block> Fonte:
			https://atlasescolar.ibge.gov.br/conceitos-gerais/o-que-e-cartografia. </p>


		<p>As câmeras, hoje, digitais e acopladas na parte de baixo do avião, tiram fotos a intervalos
			regulares e em velocidade constante da aeronave. Esse processo é chamado de
			<span class="termo" data-palavra="Aerofotogrametria"
				data-definicao="Técnica de fotografar a superfície terrestre a partir de câmeras acopladas a aviões, tirando fotos em intervalos regulares e com sobreposição entre elas, usada para produzir mapas topográficos detalhados.">aerofotogrametria</span>.
		</p>

		<p>As fotografias possuem uma superposição em relação à anterior de cerca de 60%, ou seja,
			tiram três fotos e após isso verificam os elementos comuns entre as fotografias centrais. Esse processo
			objetiva melhorar a qualidade das imagens. </p>

		<p> As <span onclick="Aparecer('imagem7','citacao7')"><mark>escalas</mark></span> das fotos
			são determinas de acordo com os objetivos. Para cadastros urbanos, utilizam voos mais baixos e escala de
			1:4.000 até 1:10.000. Já para áreas rurais são realizados voos mails altos e escalas de 1:15.000 até
			1:40.000. </p>

		<div class="area"><img id="imagem7" src="tp7f7.png" alt="tp7f7" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao7" style=display:block> Fonte: Fonte: www.topografia.ufba.br. </p>

		<p> Atualmente, a maioria dos mapas topográficos são produzidos com fotografias aéreas, pois
			são mais baratas e bastante detalhadas. Entretanto, as imagens de satélites não ficam para trás nesse
			quesito.</p>




		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>





	<div class="topico">


		<h2> Imagens de satélites</h2>

		<p>Nada da Terra azul e cheia de cores que tão bem conhecemos - mesmo sem nunca termos visto
			de verdade -, a primeira imagem registrada de nosso planeta do espaço foi esta fotografia em branco e preto
			e granulada. </p>

		<p>Tirada em 24 de outubro de 1946, foi produzida por uma câmera de cinema acoplada a um
			míssil V2 lançado da base de White Sands no Novo México, Estados Unidos. </p>


		<p> Várias <span onclick="Aparecer('imagem8','citacao8')"><mark>fotografias</mark></span>
			foram capturadas a 65 milhas de altitude, ou cerca de 104 km. A câmera registrava uma foto a cada 1,5
			segundo.<span class="citacao">(Fonte: Revista Galileu)</span> </p>





		<div class="area"><img id="imagem8" src="tp7f8.png" alt="tp7f8" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao8" style=display:block> Fonte: Revista Galileu. </p>


		<p>Os primeiros a lançarem um satélite em órbita terrestre foram os russos com o Sputnik I
			(satélite em russo) em 1957. Porém ele só enviava um sinal sonoro. </p>


		<p>A primeira missão tripulada também foi mérito russo em 1961 com a nave Vostok 1 (oriente em
			russo). A bordo esta Yuri Gagarin, o primeiro ser humano a observar a Terra do espaço e a pronunciar a
			famosa frase: “A Terra é azul”. </p>


		<p>A partir de então, a chamada corrida espacial foi iniciada, isto é, a competição
			tecnológica entre os Estados Unidos e a antiga União Soviética duraria até a queda do muro de Berlim.
			(assunto que veremos mais adiante). </p>


		<p>Após a viagem da Apollo 11 à Lua em 1969, muitos outros satélites foram enviados a órbita
			terrestre, dentre eles o LANDSAT em 1972. </p>





		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>








	<div class="topico">


		<h2> Características das imagens de satélites</h2>

		<p>Originalmente, as imagens de satélites são obtidas em preto e branco. Porém, O olho humano
			é mais sensível a cores que aos tons de cinza. As cores que podemos ver é fruto da reflexão seletiva dos
			alvos existentes na superfície terrestre, nas distintas bandas do espectro eletromagnético. </p>

		<p>Assim, para facilitar a interpretação visual dos dados de sensoriamento, são associadas
			cores aos tons de cinza, criando-se desta forma uma imagem de satélite colorida. </p>

		<p>Ela é resultante da combinação das <span onclick="Aparecer('imagem9','citacao9')"><mark>três cores
					básicas</mark></span> (azul, verde e vermelho)
			associadas, por meio de recursos computacionais, às imagens individuais obtidas em diferentes comprimentos
			de onda ou faixas espectrais. Este é o mesmo mecanismo da visão a cores nos seres humanos. </p>


		<div class="area"><img id="imagem9" src="tp7f9.png" alt="tp7f9" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao9" style=display:block> Fonte (STEFFEN, 2021). Imagem da cidade de Porto
			Alegre, lago Guaíba. </p>

		<p>Diversos países possuem satélites que rastreiam permanentemente a órbita terrestre, dentre
			eles: a agência espacial europeia (ESA), a canadense Radarsat, a francesa Spot, a Sino-Brasileira <span
				onclick="Aparecer('imagem10','citacao10')"><mark>CBERS</mark></span> , dentre outras. </p>

		<div class="area"><img id="imagem10" src="tp7f10.png" alt="tp7f10" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao10" style=display:block> Fonte: http://www.cbers.inpe.br/. </p>




		<p>O projeto CBERS é o resultado de um sistema de cooperação entre o Brasil e a China, com um
			acordo assinado em 1988 entre o Instituto Nacional de Pesquisas Espaciais (INPE) e a CAST (Academia
			Chinesa de Tecnologia Espacial). O primeiro satélite da parceria, o CBERS-1, só foi lançado onze anos
			depois, em 1999, e reduziu bastante a dependência brasileira de imagens de satélite compradas de outros
			países. Atualmente está em operação o CBERS-4. </p>

		<p>Os satélites CBERS, se destinam a monitoração do clima, projetos de sistematização e uso da
			terra, gerenciamento de recursos hídricos, arrecadação fiscal, imagens para licenciamento e monitoramento
			ambiental, entre outras aplicações. </p>

		<p> Suas imagens são utilizadas no Brasil, por empresas privadas e instituições como Ibama,
			Incra, Petrobras, Aneel, Embrapa e secretarias de Fazenda e Meio Ambiente. </p>

		<p>A grande vantagem do uso de imagens de satélites está ligada ao monitoramento de eventos ao
			longo do tempo. As <span onclick="Aparecer('imagem11','citacao11')"><mark>imagens</mark></span> podem ser
			registradas em intervalos regulares, como o registro de nuvens em diferentes horários do dia. </p>

		<div class="area"><img id="imagem11" src="tp7f11.png" alt="tp7f11" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao11" style=display:block>Fonte: Centro de Previsão do Tempo e Estudos
			Climáticos, do Instituto Nacional de Pesquisas Especiais (Cptec/Inpe). </p>

		<p>A previsão do tempo é um dos exemplos mais conhecidos do uso das imagens de satélites.
			Essas imagens auxiliam os meteorologistas por meio das sucessivas imagens das massas de ar, distribuição das
			nuvens, a prever períodos de chuva ou seca e a chegada de furações, fundamentais para a defesa civil. </p>

		<p>Tudo isso não seria possível sem o sistema de satélites que cobre a Terra. </p>



		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>


	<!-- BLOCO: Drones -->
	<div class="topico">


		<h2> Drones: sensoriamento remoto ao alcance da mão</h2>

		<p>Satélites e aviões continuam sendo essenciais, mas nos últimos anos surgiu uma terceira opção
			bem mais barata e acessível para captar imagens da superfície: os <span class="termo"
				data-palavra="VANT (Drone)"
				data-definicao="Veículo Aéreo Não Tripulado, popularmente chamado de drone. Voa em baixa altitude, controlado remotamente ou de forma autônoma, e capta imagens de altíssima resolução por um custo muito menor do que satélites ou aviões, sendo usado hoje em agricultura, jornalismo, resposta a desastres e fiscalização."><strong>VANTs</strong></span>
			(Veículos Aéreos Não Tripulados), mais conhecidos pelo nome popular de drones.</p>

		<p>Um satélite de sensoriamento remoto custa centenas de milhões de dólares para ser construído e
			lançado ao espaço, e um avião equipado para aerofotogrametria também exige investimento alto e uma
			equipe especializada. Um drone comercial de boa qualidade, por outro lado, custa uma fração disso e pode
			ser operado por uma única pessoa, o que democratizou o acesso ao sensoriamento remoto de baixa altitude
			para pequenos produtores rurais, prefeituras, corretores de imóveis e até jornalistas cobrindo protestos
			ou desastres naturais.</p>

		<p>A grande vantagem do drone é a resolução: voando a poucos metros ou dezenas de metros do
			solo, ele capta detalhes que nenhum satélite comercial consegue captar, cada folha de uma plantação,
			uma rachadura em uma estrada, o contorno exato de uma área queimada. A desvantagem é o alcance: um
			satélite cobre o planeta inteiro em poucos dias, enquanto um drone cobre, no máximo, alguns quilômetros
			quadrados por voo, o que faz dele um instrumento de escala local, não global.</p>

		<p>Na agricultura de precisão, drones sobrevoam plantações periodicamente para detectar áreas com
			pragas, falhas de irrigação ou deficiência de nutrientes antes que o problema seja visível a olho nu do
			chão, permitindo correções pontuais em vez de tratar a lavoura inteira do mesmo jeito.</p>

		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>


	<!-- BLOCO: Instrumentalizacao (GPS) -->
	<div class="topico">


		<p><span class="termo" data-palavra="GPS (Sistema de Posicionamento Global)"
				data-definicao="Sigla de Global Positioning System: sistema formado por cerca de 24 satélites que se comunicam com um aparelho receptor na Terra para determinar sua posição geográfica exata (latitude, longitude e altitude), 24 horas por dia."> Sistema
				de posicionamento global </span> - Formado pelas letras iniciais
			(acrônimo do inglês) de Global Positioning System. Utiliza da comunicação entre os satélites (em órbita) e
			um aparelho receptor (na Terra) para enviar dados de posição geográfica (Latitude e Longitude). </p>


		<p>O GPS foi desenvolvido pelo Departamento de Defesa dos EUA no ano de 1973. Trata-se de um
			sistema de rádio navegação que determina a posição bi ou tridimensional de um ponto qualquer da superfície
			terrestre. Ele pode ser utilizado 24h por dia, já que o sistema funciona com cerca de 24 satélites <span
				onclick="Aparecer('imagem12','citacao12')"><mark>orbitando</mark></span> a Terra. </p>

		<div class="area"><img id="imagem12" src="tp7f12.png" alt="tp7f12" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao12" style=display:block> Fonte: https://www.infoescola.com,. </p>





		<div class="area margemAbaixo w3-padding-16">
			<div class="postit-tp1 w3-margin-top w3-animate-zoom w3-pale-yellow">
				<h2 style='font-family: "Roboto", sans-serif; font-weight: bold;'>
					<mark><span class="w3-padding">💡 Anote aí!</span></mark>
				</h2>
				<h4 class="w3-margin-top">As principais aplicações do GPS são:</h4>
				<ul class="lista">
					<li>Aviação: civil e militar;</li>
					<li>Navegação: marítima e comercial;</li>
					<li>Esportes; rally, balonismo, corrida de aventura etc.;</li>
					<li>Rastreamento de frotas, veículos e animais;</li>
					<li>Agricultura de precisão;</li>
					<li>Geodinâmica – movimento da crosta terrestre;</li>
					<li>Topografia – definição de limites, áreas etc;</li>
					<li>Coleta de dados de dados para Sistema de Informação Geográfica, dentre outras.</li>
				</ul>
			</div>
		</div>


		



		<p>O sistema é formado por três segmentos: espacial, controle e usuários. </p>



		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>



	<div class="topico">


		<h2> Segmento espacial</h2>

		<p>Constituído por 24 satélites em 6 órbitas (4 satélites em cada); </p>

		<p>Altitude aproximada de 20.200km;</p>

		<p>Mínimo 4 satélites visíveis em qualquer local da Terra em qualquer hora. </p>





		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>



	<div class="topico">


		<h2> Segmento de controle</h2>

		<p>Constituído por 5 estações principais de controle, sendo uma central (Colorado, E.U.A)
			(Colorado, E.U.A). <span onclick="Aparecer('imagem13','citacao13')"><mark>Confira:</mark></span> </p>

		<div class="area"><img id="imagem13" src="tp7f13.png" alt="tp7f13" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao13" style=display:block> Fonte: Fonte: Escola naval. </p>



		<p>Monitoram continuamente os satélites; </p>

		<p>Determinam e atualizam as posições orbitais; </p>

		<p>Preveem a trajetória nas próximas 24h. </p>




		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>




	<div class="topico">


		<h2> Segmento de usuários</h2>

		<p>Refere-se a tudo que diz respeito a comunidade usuária, civil e militar.;</p>

		<p>- Receptores;</p>

		<p>- Programas de processamento; </p>

		<p> - Métodos e técnicas de levantamentos; <span class="w3-small">(Oliveira, 2011)</span>.</p>

		<p> Atualmente há dois sistemas de GPS em operação: um norte-americano, o Navstar e um russo,
			o Glonass, ambos começaram durante a Guerra Fria</p>

		<p>Os satélites cumprem órbitas fixas e estão dispostos de modo que, de qualquer ponto da
			superfície terrestre, seja possível receber ondas de rádio de pelo menos quatro dos 24 satélites. </p>

		<p> Os receptores fixos ou móveis, como nos automóveis, captam essas ondas e calculam as
			coordenadas geográficas do local em graus, minutos e segundos. </p>

		<p> Além da latitude e da longitude, é possível obter a altitude do ponto de leitura, o que
			contribui para a produção de mapas topográficos e a hora local com exatidão. (Sene e Moreira, 2016).</p>



		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>


	<!-- BLOCO: A-GPS -->
	<div class="topico">


		<h2> Por que o Waze acha sua localização quase instantaneamente?</h2>

		<p>Lembra da pergunta do início da aula? Chegou a hora de respondê-la com precisão técnica. Um
			receptor de GPS "puro" pode demorar de trinta segundos a alguns minutos para calcular sua primeira
			posição, tempo necessário para captar o sinal de satélites que, às vezes, estão a mais de 20 mil
			quilômetros de distância, atravessando prédios, nuvens e interferências da cidade. Se fosse só isso, seu
			aplicativo de mapa demoraria bastante para "achar" você toda vez que abrisse o app.</p>

		<p>Só que os smartphones não dependem só dos satélites do GPS. Eles usam uma tecnologia chamada
			<span class="termo" data-palavra="A-GPS"
				data-definicao="Assisted GPS (GPS assistido): tecnologia que combina o sinal dos satélites de GPS com dados da rede de celular (torres próximas) e do Wi-Fi (redes ao redor) para calcular a localização muito mais rápido e com mais precisão, especialmente dentro de prédios ou em áreas urbanas densas, onde o sinal direto dos satélites é fraco."><strong>A-GPS</strong></span>
			(GPS assistido), que combina três fontes de informação ao mesmo tempo: o sinal dos satélites, a
			localização aproximada das torres de celular próximas (a operadora sabe, mais ou menos, onde cada torre
			fica) e um banco de dados de redes Wi-Fi com localização conhecida. Cruzando essas três fontes, o
			celular chega a uma localização inicial em poucos segundos, e só depois refina essa posição com o sinal
			puro dos satélites.</p>

		<p>É por isso que o GPS do carro (que às vezes não tem acesso à rede de celular ou Wi-Fi) demora
			mais para "pegar" sua localização do que o aplicativo do seu celular, e também por isso que o GPS do
			celular funciona relativamente bem mesmo dentro de um prédio ou de um túnel, onde o sinal direto dos
			satélites praticamente não chega: nesses casos, quem está fazendo a maior parte do trabalho é o Wi-Fi e
			a rede do celular, não os satélites, mesmo que o ícone do aplicativo continue mostrando o símbolo de
			GPS na tela.</p>

		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>


	<!-- BLOCO: Geoprocessamento -->
	<div class="topico">


		<h2> A terceira peça: o que é geoprocessamento?</h2>

		<p>Você já viu como o sensoriamento remoto captura imagens da Terra e como o GPS localiza um
			ponto exato na superfície. Falta a terceira tecnologia que forma um SIG, e é provavelmente a menos
			conhecida das três: o <span class="termo" data-palavra="Geoprocessamento"
				data-definicao="Conjunto de técnicas e programas usados para tratar, cruzar e analisar dados georreferenciados (ligados a um ponto do espaço), transformando informações soltas em mapas, análises e respostas para perguntas espaciais. É a etapa que processa o que o sensoriamento remoto captura e o GPS localiza."><strong>geoprocessamento</strong></span>.
			Se o sensoriamento remoto é o olho que capta a imagem e o GPS é a régua que mede a posição, o
			geoprocessamento é o cérebro que cruza essas informações e produz uma resposta útil.</p>

		<p>Na prática, geoprocessamento significa usar um software para fazer perguntas espaciais que
			seriam quase impossíveis de responder à mão. Algumas operações comuns:</p>

		<p><strong>Sobreposição de camadas</strong> (overlay): imagine uma camada com todos os rios de
			uma região, outra com a localização de fábricas, e uma terceira com a densidade populacional. Sobrepor
			essas camadas permite perguntar, por exemplo, "quantas pessoas vivem a menos de 1 km de uma fábrica que
			despeja resíduos em um rio?", uma pergunta que envolve três informações diferentes ao mesmo tempo.</p>

		<p><strong>Análise de buffer</strong> (zona de influência): o programa desenha automaticamente um
			círculo ou faixa de determinada distância ao redor de um elemento, como todas as escolas a menos de 500
			metros de uma avenida movimentada, útil para planejar a segurança de pedestres, por exemplo.</p>

		<p><strong>Geocodificação</strong>: transforma um endereço escrito ("Rua Tal, 123, Bairro Tal")
			em coordenadas geográficas (latitude e longitude) que um mapa consegue posicionar, o mesmo processo que
			acontece toda vez que você digita um endereço no Google Maps ou no Waze.</p>

		<p>É esse cruzamento de camadas que transforma um simples conjunto de imagens e coordenadas em
			uma ferramenta de decisão: onde abrir um novo hospital, que área desmatada precisa de fiscalização
			urgente, qual bairro tem mais risco de enchente. Sem o geoprocessamento, sensoriamento remoto e GPS
			seriam só dados soltos, sem cruzamento e sem resposta.</p>


		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>




	<div class="topico">


		<h2> Por que aprender a se localizar?</h2>

		<p>Devido ao potencial estratégico dessa tecnologia ligada ao posicionamento e navegação
			semelhantes ao GPS, novos sistemas estão sendo desenvolvidos pela China, o <strong>BeiDou</strong> e pela
			União Europeia como o <strong>Galileo</strong>. </p>

		<p> O BeiDou (que significa ‘Ursa Maior’, em chinês) entrou em funcionamento no ano 2000 e
			atende o território chinês quando se trata de navegação por satélite. </p>

		<p>Em 2020 o sistema se tornou global com 35 satélites, seguido do GPS (32), do Glonass (26) e
			do Galileo (26). Pequim assegura que seu sistema terá uma precisão de localização de 10 cm, contra 30 cm do
			rival GPS. </p>

		<p> A corrida por ser líder nessa tecnologia ocorre, dentre outros aspectos, no potencial
			bélico, ou seja, o seu uso para guerras, como na Guerra do Golfo (1991), considerada a primeira "guerra
			do GPS" da história por causa do uso massivo de navegação por satélite pelas tropas americanas, e na
			guerra do Afeganistão (iniciada em 2001). O exemplo mais conhecido de uso de geolocalização em uma
			operação militar de alto perfil é a que localizou e matou o líder da Al-Qaeda, Osama Bin Laden, em um
			complexo no Paquistão em 2011.</p>

		<p> Os <span onclick="Aparecer('imagem14','citacao14')"><mark>aviões</mark></span> não
			tripulados eram guiados por GPS e atingiam o alvo com bastante precisão. </p>

		<div class="area"><img id="imagem14" src="tp7f14.png" alt="tp7f14" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao14" style=display:block> Fonte:
			https://istoe.com.br/88385_BATALHA+AEREA/. </p>

		<p>Além de guerras, outros setores beneficiados com essa tecnologia são a agricultura de
			precisão, os automóveis e os aplicativos de navegação e geolocalização para celulares, tablets, dentre
			outros. </p>

		<p> No caso da agricultura os usos são diversos. Podemos combinar o uso do GPS com o SIG e
			confeccionar mapas digitais sobre fertilidade do solo e, com a localização precisa, distribuir adubo em cada
			pedaço da área cultivada, o que pode proporcionar eficácia e economia.</p>


		<p> As <span onclick="Aparecer('imagem15','citacao15')"><mark>colheitadeiras e
					tratores</mark></span> já vem equipados com SIG e GPS, entretanto o alto custo desses veículos
			limita o acesso, principalmente em países subdesenvolvidos e pobres. </p>

		<div class="area"><img id="imagem15" src="tp7f15.png" alt="tp7f15" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao15" style=display:block> Fonte:
			https://tecnologianocampo.com.br
			/aplicacoes-do-gps-agricola/. </p>


		<p>O GPS é muito popular e a grande maioria dos automóveis utilizam aplicativos como o Waze ou
			o próprio google maps para se localizar, além de facilitar o sistema de entrega de mercadorias e de
			transporte de passageiros e de rastreamentos de transporte de cargas em caso de <span
				onclick="Aparecer('imagem16','citacao16')"><mark>roubos.</mark></span> </p>

		<div class="area"><img id="imagem16" src="tp7f16.png" alt="tp7f16" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao16" style=display:block> Fonte:
			http://www.segurancaportuariaemfoco.com.br </p>



		<div class="divCaixa1 w3-margin">
			<h4 class="fontePixel">Os órgãos do governo brasileiro utilizam as imagens de satélites e GPS para: </h4>
			<ul class="lista">
				<li> Identificar com exatidão os limites de fazendas improdutivas a serem desapropriadas para reforma
					agrária;</li>
				<li>Controlar queimadas em florestas e desmatamentos;</li>
				<li>Demarcar limites fronteiriços, entre outras finalidades.</li>
				

			</ul>

		</div>

		<br><br>





		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>






	<div class="topico">


		<h2> Os SIGs no meio técnico-científico-informacional</h2>

		<p>O espaço geográfico atualmente é muito diferente daquele que seguia estritamente as regras
			das leis naturais. Hoje ele é formado por tecnologia, informação e sua infraestrutura é constantemente sendo
			renovada pela ação humana. </p>


		<p>A informação é o motor da atividade econômica e sua circulação é fundamental para as
			tomadas de decisões. Por isso os SIGs estão progredindo rápido nesse meio geográfico, pois permitem sobrepor
			<span onclick="Aparecer('imagem17','citacao17')"><mark>camadas</mark></span> de informações com o objetivo
			analisar a organização do espaço.
		</p>

		<div class="area"><img id="imagem17" src="tp7f17.png" alt="tp7f17" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao17" style=display:block> Fonte: Representação das camadas de um SIG.
			Pinterest: </p>


		<p>Os <span onclick="Aparecer('imagem18','citacao18')"><mark>SIGs</mark></span> são formados
			por equipamentos (hardware) e programas (software) que processam dados georreferenciados, ou seja,
			localizados territorialmente por coordenadas geográficas e identificadas por GPS. </p>

		<div class="area"><img id="imagem18" src="tp7f18.png" alt="tp7f18" class="w3-mobile" style=display:block>
		</div>


		<p class="citacao" id="citacao18" style=display:block> Fonte:
			Fonte: www.geoaplicada.com </p>

		<p>O programa mais utilizado é o ArcGIS, versão paga, mas há softwares livres como o Spring do
			INPE e o QGIS. </p>


		<p> Com os dados obtidos de acordo com a localização no território, como renda da população,
			dados de desmatamento, dentre outros, é possível produzir mapas temáticos, tabelas, gráficos etc. como no
			<span onclick="Aparecer('imagem19','citacao19')"><mark>exemplo abaixo:</mark></span>
		</p>


		<div class="area"><img id="imagem19" src="tp7f19.png" alt="tp7f19" class="w3-mobile" style=display:block>
		</div>

		<p class="citacao" id="citacao19" style=display:block> Fonte: Fonte: www.geoaplicada.com </p>


		<p> Com esse tipo de mapa ou informações espaciais é possível, dentre outras coisas: </p>


		<p> - Planejar onde deve ser investido o dinheiro público, um novo hospital ou uma obra de
			saneamento básico;</p>


		<p> - Levantar quantos imóveis existem no município;</p>


		<p>- Organizar o tráfego urbano, melhorar o trajeto dos transportes públicos; </p>


		<p> - Localizar atividades turísticas etc.</p>


		<button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
		<hr>

	</div>


        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>Sobre os Sistemas de Informações Geográficas (SIGs), é correto afirmar que:</b>
            </h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1a" value="errado" class="radio-duvid">
                    <label for="p1a" class="card-opcao"><span>a) Uso exclusivo militar.</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1b" value="errado" class="radio-duvid">
                    <label for="p1b" class="card-opcao"><span>b) Só mostra mapas estáticos.</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta1" id="p1c" value="correto" class="radio-duvid">
                    <label for="p1c" class="card-opcao"><span>c) Integra hardware, software e dados em camadas.</span></label>
                </div>

            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta1', 'resp1', 'globinho1', 'Dica: um SIG combina equipamento, programa e dados georreferenciados em camadas sobrepostas, não é só um mapa para olhar.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p id="resp1" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho1" style="display:none" width="64" height="64">
            </div>
        </div>


        <div class="topico pergunta-bloco w3-container w3-padding-24">
            <p class="w3-text-grey w3-small">QUESTÃO PRÁTICA</p>
            <h4 class="fontePixel"><b>O índice NDVI (Normalized Difference Vegetation Index), utilizado no sensoriamento
                    remoto, serve para:</b></h4>
            <div class="grupo-respostas w3-margin-top">
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2a" value="errado" class="radio-duvid">
                    <label for="p2a" class="card-opcao"><span>a) Medir velocidade do vento.</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2b" value="correto" class="radio-duvid">
                    <label for="p2b" class="card-opcao"><span>b) Avaliar a saúde da vegetação.</span></label>
                </div>
                <div class="item-resposta">
                    <input type="radio" name="pergunta2" id="p2c" value="errado" class="radio-duvid">
                    <label for="p2c" class="card-opcao"><span>c) Calcular a altitude do terreno.</span></label>
                </div>

            </div>
            <div class="w3-margin-top">
                <button class="btn-acao-duvid"
                    onclick="validarRadio(this, 'pergunta2', 'resp2', 'globinho2', 'Dica: plantas saudáveis refletem mais infravermelho e absorvem mais vermelho, o que gera um NDVI mais alto.', '10')">
                    Confirmar Resposta
                </button>
            </div>
            <p id="resp2" class="w3-center w3-padding w3-large"></p>
            <div class="area w3-center">
                <img src="/fotoIndex/globinhoPe.png" id="globinho2" style="display:none" width="64" height="64">
            </div>
        </div>


         <div class="topico">

            <h2> Infográfico - Resumo</h2>

            <div class="w3-margin"><img id="inforesumotp7" src="inforesumotp7.webp" alt="Infográfico resumo Sensoriamento remoto" class="w3-mobile">
                <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>

        </div> 


        <!-- BLOCO: Perguntas e Respostas -->
        <div class="topico">

            <h2 id="centralizado"> Não existe pergunta boba, existe pergunta que não foi feita!</h2>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Qual a diferença entre o GPS do meu celular e o GPS usado por um avião ou por um exército?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                A tecnologia por trás é a mesma, o cálculo por triangulação com os satélites, mas a precisão muda
                bastante. O receptor do seu celular é mais simples e costuma ter uma margem de erro de alguns
                metros, o suficiente para te guiar até uma rua. Aviões, navios e aplicações militares usam
                receptores mais caros, combinados com outras correções de sinal, que chegam a uma precisão de
                centímetros. É por isso que sistemas mais modernos, como o BeiDou chinês, disputam tanto essa
                precisão: alguns centímetros de diferença podem valer muito dinheiro, ou ter peso estratégico.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Se um satélite consegue tirar fotos da Terra o tempo todo, isso quer dizer que alguém pode estar
                    me observando agora mesmo?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                Tecnicamente, é possível, mas na prática não funciona como nos filmes. Os satélites de
                sensoriamento remoto não ficam parados sobre um único ponto o tempo todo, eles orbitam a Terra e
                revisitam a mesma área a cada poucos dias, não a cada segundo. Além disso, a resolução das imagens
                comerciais mais usadas mostra construções e veículos, não detalhes de uma pessoa. Sistemas capazes
                de mais detalhes existem, mas são poucos, caros e controlados por governos, justamente por causa do
                potencial de vigilância que essa tecnologia carrega.
            </p>

            <p class="w3-border w3-round-large"> <span class="primeiraLetra">P:</span> <strong>
                    Por que o radar consegue enxergar a Amazônia mesmo com tanta nuvem, se ele também é um tipo de
                    sensor remoto?
                </strong> </p>

            <p><span class="primeiraLetra">R:</span>
                Porque existem dois tipos de sensoriamento remoto: o passivo, que depende da luz do Sol refletida
                pela superfície (como uma câmera fotográfica comum), e o ativo, como o radar, que emite sua própria
                energia, na forma de micro-ondas, e capta o retorno desse sinal. Nuvens bloqueiam a luz visível,
                mas praticamente não interferem nas micro-ondas do radar. Foi exatamente por isso que o projeto
                RadamBrasil escolheu o radar para mapear a Amazônia nos anos 1970: era a única forma de enxergar o
                território por baixo das nuvens que cobrem a região boa parte do ano.
            </p>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Questoes para o caderno -->
        <div class="topico">
            <div class="w3-panel w3-pale-yellow w3-margin">
                <h2> Questões para responder no caderno:</h2>

                <h3>1. O que são Sistemas de Informações Geográficas (SIGs)?</h3>
                <h3>2. Como a tecnologia tem contribuído para a evolução da Cartografia?</h3>
                <h3>3. Explique o que é sensoriamento remoto e como ele funciona.</h3>
                <h3>4. Quais são os três tipos de tecnologias que compõem os SIGs?</h3>
                <h3>5. Qual é a diferença entre sensoriamento remoto passivo e ativo?</h3>
                <h3>6. Como as imagens de satélites são transformadas em imagens coloridas?</h3>
                <h3>7. Qual é a importância do GPS na coleta de dados geográficos?</h3>
                <h3>8. Quais são as principais aplicações do GPS mencionadas no texto?</h3>
                <h3>9. O que é o projeto CBERS e qual é a sua finalidade?</h3>
                <h3>10. Como os SIGs são utilizados no planejamento urbano e na administração pública?</h3>
            </div>

            <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
            <hr>
        </div>


        <!-- BLOCO: Catarse -->
        <div class="topico">

            <div class="w3-light-blue w3-padding">

            <h2>O que mudou no seu olhar</h2>

            <p>Releia o que você escreveu no início sobre como o Waze sabe sua localização. Agora você tem a resposta completa: um receptor GPS no seu celular capta o sinal de pelo menos quatro satélites entre os 24 que orbitam a Terra, e por triangulação calcula sua posição exata. Some a isso as imagens de satélite processadas por um SIG, e o aplicativo consegue não só te localizar, como calcular a rota mais rápida em tempo real.</p>

            <p>O que parecia mágica de aplicativo é, na verdade, a mesma tecnologia usada para prever queimadas, planejar reforma agrária, guiar aviões não tripulados em guerras e monitorar o desmatamento da Amazônia. A diferença entre um uso e outro não está na tecnologia, está em quem a controla e para que a utiliza.</p>

            <p>Depois de tantas aulas de Cartografia, sensoriamento remoto e GPS, é hora de sair do estudo do espaço propriamente dito e voltar para a estrutura física do planeta que esses instrumentos ajudam a mapear: como a Terra se formou, suas camadas internas e as eras geológicas que moldaram o relevo que conhecemos hoje.</p>

            <p><strong>Resumo dos conceitos:</strong> SIG (equipamentos e sistemas para estudar o espaço terrestre); sensoriamento remoto (captação de imagens à distância, passivo ou ativo); reflectância e assinatura espectral (o que permite distinguir objetos nas imagens); aerofotogrametria (fotografia aérea sistemática); geoprocessamento (cruzamento e análise de dados georreferenciados); VANT/drone (sensoriamento remoto de baixa altitude e baixo custo); GPS e A-GPS (sistema de satélites para localização exata, combinado com rede de celular e Wi-Fi nos smartphones).</p>

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
      mensagem: 'o tema Sistemas de Informações Geográficas (SIGs): Sensoriamento Remoto e Novas Tecnologias é fantástico! Continue estudando!',
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
            <!-- Cards gerados automaticamente pelo JS -->
            <div class="w3-row-padding" id="links-gerados"></div>




            <div class="w3-container w3-padding-64">
                <h3 class="fontePixel w3-center w3-text-green">
                    <strong><i class="fa fa-book"></i> Referências Bibliográficas</strong>
                </h3>

                <!-- Cards gerados automaticamente pelo JS -->
                <div id="biblio-gerada"></div>
            </div>

            <div class="w3-container w3-padding-64 secao-livros-sugeridos">
                <h3 class="fontePixel w3-center w3-text-green">
                    <strong>📚 Sugestões de Livros</strong>
                </h3>
                <p class="w3-center w3-small w3-text-grey" style="margin-top:-8px">Para quem quer ir além da aula, com literatura</p>
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