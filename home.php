<?php $loginRequired = !empty($_GET['login_required']); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Básico -->
    <meta name="description"
        content="Duvid Geografia: mais de 1000 questões gratuitas, textos interativos com correção automática e apps offline para o Ensino Médio. 1º, 2º e 3º ano.">
    <meta name="keywords"
        content="geografia, ensino médio, questões de geografia, exercícios, 1 ano, 2 ano, 3 ano, enem, vestibular, app offline">
    <meta name="author" content="Duvid Geografia">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.duvid.com.br/home">

    <!-- Open Graph (WhatsApp, Facebook, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.duvid.com.br/home">
    <meta property="og:title" content="Duvid Geografia — Questões gratuitas para o Ensino Médio">
    <meta property="og:description"
        content="Mais de 1000 questões atualizadas, textos interativos e apps offline para 1º, 2º e 3º ano. Gratuito e feito para a sala de aula.">
    <meta property="og:image" content="https://www.duvid.com.br/fotoIndex/duvid-banner1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Duvid Geografia">

    <!-- Twitter Card (funciona também no X) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Duvid Geografia — Questões gratuitas para o Ensino Médio">
    <meta name="twitter:description"
        content="Mais de 1000 questões atualizadas, textos interativos e apps offline para 1º, 2º e 3º ano.">
    <meta name="twitter:image" content="https://www.duvid.com.br/fotoIndex/duvid-banner1.png">

    <!-- Tema do navegador mobile -->
    <meta name="theme-color" content="#4CAF50">

    <!-- Preconnect: avisa o browser para conectar nesses servidores antes de precisar -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- CSS local primeiro — chega antes de qualquer coisa externa -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilos/index-estilo.css">
    <link rel="stylesheet" href="estilos/rpg-sistema.css">
    <link rel="stylesheet" href="estilos/navbar.css">
    <link rel="stylesheet" href="estilos/trilha-niveis.css">

    <!-- 3 fontes viram 1 requisição só -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald&family=Open+Sans&family=VT323&display=swap">

    <!-- W3 e Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="fotoIndex/favicon.ico">


    <script src="js/duvid-cache.js" defer></script>
    <!-- O Cérebro. Contém as funções lógicas principais que sustentam todo o site, como cálculos de XP, verificação de nível e variáveis globais que todos os outros scripts consultam. -->
    <script src="js/duvid-core.js" defer></script>

    <!-- O Cofre (LocalStorage). É o responsável por salvar e ler os dados do usuário no navegador. Sem ele, o aluno perderia o progresso (pontos e conquistas) toda vez que fechasse a aba. -->
    <script src="js/duvid-db.js" defer></script>

    <!-- A Sonoplastia. Gerencia todos os efeitos sonoros do site (cliques, sons de acerto, erro e notificações), garantindo que a experiência de "jogo" seja imersiva. -->
    <script src="js/duvid-audio.js" defer></script>

    <!-- O Esteticista (Interface). Cuida de elementos visuais genéricos que mudam dinamicamente, como o Dark Mode, o ajuste do tamanho da fonte e comportamentos de botões. -->
    <script src="js/duvid-ui.js" defer></script>

    <!-- O Bibliotecário. Gerencia a lógica de exibição das aulas, filtragem de temas por ano escolar e a navegação entre os conteúdos pedagógicos. -->
    <script src="js/aulas-geral.js" defer></script>

    <!-- O Construtor. É o script que "monta" as páginas. Ele busca o HTML do Header (Topo) e do Footer (Rodapé) e os injeta automaticamente em todas as páginas para você não ter que copiar o código em cada arquivo -->
    <script src="js/carregar.js" defer></script>

    <!-- O Porteiro. Contém apenas as funções de abrir e fechar o menu lateral (Navbar) e os Dropdowns, especialmente focado na usabilidade em celulares. -->
    <script src="js/abrirmenu.js" defer></script>

    <!-- O Painel de Controle. É específico para a página inicial. Ele busca dados em tempo real (como a temperatura global ou frases do dia) e atualiza aqueles widgets dinâmicos do "Monitor Global" -->
    <script src="js/duvid-api-home.js" defer></script>




    <title>Duvid Geografia — Questões e textos gratuitos para o Ensino Médio</title>



</head>


<body class="w3-light-grey">

    <!-- Navigation (Stays on Top) -->
    <?php include __DIR__ . '/includes/header.php'; ?>



    <main id="conteudo-principal">
        <!-- ======================================
       1. BANNER + HERO COM CTA
       Primeiro contato — visitante novo precisa
       saber o que fazer imediatamente
  ======================================= -->
        <div class="w3-display-container w3-animate-opacity">
            <img src="fotoIndex/duvid-banner.webp" width="1200" height="630" style="width:100%; height:auto;"
                fetchpriority="high" alt="Duvid Geografia Banner" class="w3-card-4 duvid-banner">

            <div class="w3-display-middle w3-center w3-hide-medium w3-hide-small" style="padding: 0 16px;">
                <h1 class="w3-xlarge w3-text-white w3-wide" style="text-shadow: 2px 2px 10px #000; margin-bottom: 8px;">
                    Explore o Mundo com a Geografia </br>e sua turma!
                </h1>
                <p class="w3-text-white w3-hide-small" style="text-shadow: 1px 1px 6px #000; margin-bottom: 16px;">
                    +1000 questões gratuitas · Apps offline · Correção automática
                </p>
                <a href="#cards-anos" class="w3-button w3-green w3-round-large w3-large" style="text-shadow: none;">
                    Começar agora
                </a>
            </div>
        </div>


        <!-- ======================================
       2. CARDS DOS ANOS (produto principal)
       O visitante vê o produto antes de qualquer
       login ou interatividade
  ======================================= -->
        <div id="cards-anos" style="background: linear-gradient(160deg, #e8f5e9 0%, #f1f8f1 60%, #e0f2e0 100%);">
            <div class="w3-container w3-content w3-padding-64" style="max-width:1200px">

                <!-- Cabeçalho da seção -->
                <div class="w3-center w3-margin-bottom" style="margin-bottom:40px!important">
                    <span style="display:inline-block; background:#2e7d32; color:#fff; border-radius:30px; padding:6px 22px; font-size:.85rem; letter-spacing:2px; text-transform:uppercase; margin-bottom:14px;">Conteúdo Duvid</span>
                    <h2 style="font-size:2.2rem; font-weight:800; color:#1b5e20; margin:0 0 10px; letter-spacing:-0.5px;">Escolha seu tema</h2>
                    <p style="color:#558b2f; font-size:1rem; margin:0;">
                        Gratuito · Interativo · Apps offline para Android
                    </p>
                </div>

                <div class="w3-row-padding">

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card w3-white w3-round-large w3-center card-ano"
                             style="border-top:4px solid #43a047; transition:transform .2s, box-shadow .2s; overflow:hidden;"
                             onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(46,125,50,.18)'"
                             onmouseout="this.style.transform='';this.style.boxShadow=''">
                            <div style="background:linear-gradient(135deg,#e8f5e9,#c8e6c9); padding:14px 0 6px;">
                                <span style="font-size:1.05rem; font-weight:800; letter-spacing:2px; color:#1b5e20;">NATUREZA</span>
                            </div>
                            <div class="w3-padding">
                                <a href="Duvid1Ano.php">
                                    <img src="fotoIndex/imagensCapa/capa1ano.webp" loading="lazy" alt="Capa 1º Ano"
                                        class="w3-round w3-hover-opacity w3-margin-bottom"
                                        style="width:100%; max-width:260px;">
                                </a>
                                <p class="w3-small w3-opacity" style="margin-bottom:6px;">Baixe o app offline:</p>
                                <a href="https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid1ano"
                                    target="_blank">
                                    <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                        style="width:70%; min-width:140px;" alt="Google Play">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card w3-white w3-round-large w3-center card-ano"
                             style="border-top:4px solid #1976d2; transition:transform .2s, box-shadow .2s; overflow:hidden;"
                             onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(25,118,210,.18)'"
                             onmouseout="this.style.transform='';this.style.boxShadow=''">
                            <div style="background:linear-gradient(135deg,#e3f2fd,#bbdefb); padding:14px 0 6px;">
                                <span style="font-size:1.05rem; font-weight:800; letter-spacing:2px; color:#0d47a1;">BRASIL</span>
                            </div>
                            <div class="w3-padding">
                                <a href="Duvid2Ano.php">
                                    <img src="fotoIndex/imagensCapa/capa2ano.webp" loading="lazy" alt="Capa 2º Ano"
                                        class="w3-round w3-hover-opacity w3-margin-bottom"
                                        style="width:100%; max-width:260px;">
                                </a>
                                <p class="w3-small w3-opacity" style="margin-bottom:6px;">Baixe o app offline:</p>
                                <a href="https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid2"
                                    target="_blank">
                                    <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                        style="width:70%; min-width:140px;" alt="Google Play">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card w3-white w3-round-large w3-center card-ano"
                             style="border-top:4px solid #f57c00; transition:transform .2s, box-shadow .2s; overflow:hidden;"
                             onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(245,124,0,.18)'"
                             onmouseout="this.style.transform='';this.style.boxShadow=''">
                            <div style="background:linear-gradient(135deg,#fff3e0,#ffe0b2); padding:14px 0 6px;">
                                <span style="font-size:1.05rem; font-weight:800; letter-spacing:2px; color:#e65100;">MUNDO</span>
                            </div>
                            <div class="w3-padding">
                                <a href="Duvid3Ano.php">
                                    <img src="fotoIndex/imagensCapa/capa3ano.webp" loading="lazy" alt="Capa 3º Ano"
                                        class="w3-round w3-hover-opacity w3-margin-bottom"
                                        style="width:100%; max-width:260px;">
                                </a>
                                <p class="w3-small w3-opacity" style="margin-bottom:6px;">Baixe o app offline:</p>
                                <a href="https://play.google.com/store/apps/details?id=br.com.duvid" target="_blank">
                                    <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                        style="width:70%; min-width:140px;" alt="Google Play">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- Coluna principal: sobre o projeto -->
        <div class="w3-row w3-light-grey">
            <div class="w3-container w3-content w3-padding" style="max-width:800px">
                <h2 class="w3-wide w3-center w3-text-green w3-xlarge">O Projeto</h2>
                <p class="w3-opacity w3-center"><i>Gratuito, colaborativo e sem pressão</i></p>
                <div class="w3-justify">
                    <p>O <strong>Duvid Geografia</strong> nasceu de uma sala de aula real. É gratuito, colaborativo e feito com sugestões da turma. Mais de 1000 questões com explicações detalhadas, textos interativos com atividades práticas e apps que funcionam 100% offline.</p>
                </div>
            </div>
        </div>

        <!-- Explorar o Duvid — seção independente, centralizada -->
        <div class="w3-container w3-padding-64 w3-light-grey">
            <div class="w3-content" style="max-width:900px">
                <h2 class="w3-center w3-margin-bottom"><b>Conheça o Duvid</b></h2>
                <div class="w3-row-padding w3-center">

                    <div class="w3-third w3-margin-bottom">
                        <a href="paginas/sobre.php"
                            class="w3-button w3-block w3-white w3-card w3-hover-green w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/projeto-icone.png" alt="Projeto" class="img-pixel-icon"><br>
                            <span class="w3-large">O Projeto</span>
                        </a>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <a href="https://www.youtube.com/@duvidgeografia" target="_blank"
                            class="w3-button w3-block w3-white w3-card w3-hover-red w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/youtube-icone.png" alt="YouTube" class="img-pixel-icon"><br>
                            <span class="w3-large">YouTube</span>
                        </a>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <a href="blog/blog.php"
                            class="w3-button w3-block w3-white w3-card w3-hover-blue w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/duvidblog-icone.png" alt="Blog" class="img-pixel-icon"><br>
                            <span class="w3-large">Blog</span>
                        </a>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <a href="simulados/capasimuladogeral.php"
                            class="w3-button w3-block w3-white w3-card w3-hover-pink w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/simulado-icone.png" alt="Simulados" class="img-pixel-icon"><br>
                            <span class="w3-large">Simulados</span>
                        </a>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <a href="paginas/livrosgeografia.php"
                            class="w3-button w3-block w3-white w3-card w3-hover-orange w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/biblioteca-icone.png" alt="Biblioteca"
                                class="img-pixel-icon"><br>
                            <span class="w3-large">Biblioteca</span>
                        </a>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <a href="atividades/atividades.php"
                            class="w3-button w3-block w3-white w3-card w3-hover-yellow w3-padding-24 w3-round-large">
                            <img src="fotoIndex/icones/atividades-icone.gif" alt="Atividades"
                                class="img-pixel-icon"><br>
                            <span class="w3-large">Atividades</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <!-- ======================================
       4. PAINEL DE TRILHA / LOGIN
       Só relevante para quem já usa o site.
       Não bloqueia o visitante novo.
  ======================================= -->
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">

            <?php if ($loginRequired): ?>
            <div id="banner-login-required" class="w3-panel w3-yellow w3-round-large w3-card-2"
                 style="padding:14px 20px; display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                <i class="fa fa-lock w3-large"></i>
                <span id="banner-login-texto">Você precisa estar logado para acessar essa página. Faça login abaixo. 👇</span>
            </div>
            <?php endif; ?>

            <div class="NomeHome w3-container w3-white w3-card-2 w3-round-large w3-margin-top w3-padding-16"
                id="container-login">

                <div id="loading-painel" class="w3-center w3-padding-16">
                    <i class="fa fa-spinner w3-spin w3-text-green w3-xlarge"></i>
                    <p class="w3-small w3-opacity">Carregando seu progresso...</p>
                </div>

                <div class="trilha-container-wrapper w3-center">
                    <p id="frase-motivacional-trilha" class="w3-small w3-text-grey"
                        style="margin-bottom:10px; font-weight:bold;">
                        Carregando sua jornada...
                    </p>
                </div>

                <div class="trilha-scroll-area">
                    <div class="trilha-conquistas-container">
                        <div id="trilha-niveis" class="trilha-wrapper">
                            <div class="linha-trilha-fundo"></div>
                            <div id="linha-trilha-progresso" class="linha-trilha-ativa"></div>
                            <div id="icones-trilha-placeholder" class="icones-wrapper"></div>
                        </div>
                    </div>
                </div>

                <div id="form-identificacao" style="display:none;" class="w3-center">
                    <p class="w3-large"><b>Bem-vindo ao Duvid! 🌍</b></p>
                    <p>Comece sua jornada. Sua turma está te esperando.</p>

                    <div style="max-width:320px; margin:auto;">
                        <input class="w3-input w3-border w3-round w3-margin-bottom" type="text"
                            id="pq0" placeholder="Seu nome (ex: João Silva)"
                            autocomplete="nickname" style="margin-bottom:10px;">

                        <input class="w3-input w3-border w3-round w3-margin-bottom" type="email"
                            id="pq-email" placeholder="Seu e-mail"
                            autocomplete="email" style="margin-bottom:10px;">

                        <input class="w3-input w3-border w3-round w3-margin-bottom" type="password"
                            id="pq-pin" placeholder="PIN de 4 dígitos (ex: 1234)"
                            maxlength="4" inputmode="numeric" pattern="[0-9]{4}"
                            autocomplete="new-password" style="margin-bottom:10px;">

                        <input class="w3-input w3-border w3-round w3-margin-bottom" type="text"
                            id="pq-turma" placeholder="Código da turma (opcional)"
                            autocapitalize="characters" style="margin-bottom:6px; text-transform:uppercase;">
                        <p style="font-size:0.78rem; color:#888; margin:0 0 16px;">
                            Seu professor passou um código? Digite aqui. Sem código, você entra na turma livre.
                        </p>

                        <!-- Campos opcionais: localização para ranking nacional -->
                        <details id="detalhes-localizacao" style="margin-bottom:14px; text-align:left;">
                            <summary style="cursor:pointer; font-size:0.85rem; color:#555; font-weight:600; user-select:none;">
                                🌎 Adicionar escola e localização <span style="font-size:0.75rem; color:#aaa; font-weight:400;">(opcional — para ranking nacional)</span>
                            </summary>
                            <div style="margin-top:10px; display:flex; flex-direction:column; gap:8px;">
                                <select class="w3-select w3-border w3-round" id="pq-estado" style="height:38px;">
                                    <option value="">— Estado —</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <input class="w3-input w3-border w3-round" type="text"
                                    id="pq-cidade" placeholder="Cidade"
                                    autocomplete="address-level2">
                                <input class="w3-input w3-border w3-round" type="text"
                                    id="pq-escola" placeholder="Nome da escola"
                                    autocomplete="organization">
                            </div>
                        </details>

                        <p id="login-erro" class="w3-text-red" style="display:none; font-size:0.9rem;"></p>

                        <button class="w3-button w3-green w3-round-large w3-block"
                            onclick="NomeAlunos('resp0','pq0')">
                            <b>🚀 Começar Jornada</b>
                        </button>
                        <p style="font-size:0.8rem; color:#888; margin-top:8px;">
                            Já tem conta? Digite o mesmo nome e PIN.
                        </p>
                    </div>
                </div>

                <div id="display-identificado" style="display:none;" class="w3-container w3-padding-16">
                    <div class="w3-row" style="display:flex; align-items:center; justify-content:space-between;">
                        <div class="medalha-container">
                            <img id="medalha-patente" src="fotoIndex/icones/duvid-patentes-novato.png" alt="Patente"
                                title="Sua Patente Atual" class="pixel-art-icon">
                        </div>
                        <div class="w3-left-align">
                            <h4 class="w3-margin-0">
                                <strong><span id="lvl-tag" class="w3-tag w3-amber w3-round-large w3-small">Level
                                        1</span></strong>
                                Olá, <b class="w3-text-green" id="nome-aluno-texto"></b>
                                <button onclick="prepararTrocaNome()"
                                    class="w3-button w3-tiny w3-round-xlarge w3-light-grey">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </h4>
                            <p id="rank-nome" class="w3-tiny w3-text-black w3-margin-0"
                                style="font-weight:bold; letter-spacing:1px;">NOVATO</p>
                            <p id="turma-info" class="w3-tiny w3-margin-0" style="color:#888;display:none">
                                <i class="fa fa-users" style="font-size:.65rem"></i>
                                <span id="turma-nome-label"></span>
                                <span id="turma-codigo-label" style="color:#aaa;margin-left:4px"></span>
                            </p>
                        </div>
                        <div class="w3-right-align">
                            <div class="w3-tag w3-round w3-amber w3-padding-small">
                                <i class="fa fa-globe"></i> <b id="valor-total-central">0.0</b>
                            </div>
                        </div>
                    </div>

                    <div class="w3-light-grey w3-round-xlarge w3-margin-top"
                        style="height:12px; border:1px solid #ddd; position:relative;">
                        <div id="barra-xp-total" class="w3-container w3-blue w3-round-xlarge"
                            style="width:0%; height:10px; transition:width 1.5s cubic-bezier(0.4,0,0.2,1);">
                        </div>
                    </div>
                    <div class="w3-row w3-tiny w3-text-grey">
                        <div class="w3-col s6 w3-left-align">XP ATUAL: <span id="xp-atual">0</span></div>
                        <div class="w3-col s6 w3-right-align">PRÓXIMO NÍVEL: <span id="xp-proximo">100</span></div>
                    </div>

                    <a href="/paginas/ranking.php"
                        class="w3-button w3-green w3-round-large w3-block w3-margin-top"
                        style="white-space:normal; line-height:1.4;">
                        🏆 Ver ranking da minha turma
                    </a>
                </div>

                <div id="resumo-geral" class="w3-row-padding w3-margin-top" style="display:none;">
                    <div class="w3-third w3-margin-bottom">
                        <div class="card-inventario-item w3-round-large w3-padding" style="position:relative;">
                            <div id="conquista-1ano" class="w3-display-topright w3-padding" style="display:none;">
                                <i class="fa fa-trophy w3-text-amber w3-large" title="Concluído!"></i>
                            </div>
                            <h6 class="w3-text-teal" style="font-family:'Courier New',monospace;"><b>Natureza</b></h6>
                            <div class="w3-light-grey w3-round-xlarge w3-tiny">
                                <div id="bar-1ano" class="w3-container w3-green w3-round-xlarge"
                                    style="width:0%;height:10px;"></div>
                            </div>
                            <p class="w3-tiny w3-margin-top"><b><span id="txt-1ano">0/0</span></b> aulas feitas</p>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <div class="card-inventario-item w3-round-large w3-padding" style="position:relative;">
                            <div id="conquista-2ano" class="w3-display-topright w3-padding" style="display:none;">
                                <i class="fa fa-trophy w3-text-amber w3-large" title="Concluído!"></i>
                            </div>
                            <h6 class="w3-text-teal" style="font-family:'Courier New',monospace;"><b>Brasil</b></h6>
                            <div class="w3-light-grey w3-round-xlarge w3-tiny">
                                <div id="bar-2ano" class="w3-container w3-blue w3-round-xlarge"
                                    style="width:0%;height:10px;"></div>
                            </div>
                            <p class="w3-tiny w3-margin-top"><b><span id="txt-2ano">0/0</span></b> aulas feitas</p>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <div class="card-inventario-item w3-round-large w3-padding" style="position:relative;">
                            <div id="conquista-3ano" class="w3-display-topright w3-padding" style="display:none;">
                                <i class="fa fa-trophy w3-text-amber w3-large" title="Concluído!"></i>
                            </div>
                            <h6 class="w3-text-teal" style="font-family:'Courier New',monospace;"><b>Mundo</b></h6>
                            <div class="w3-light-grey w3-round-xlarge w3-tiny">
                                <div id="bar-3ano" class="w3-container w3-orange w3-round-xlarge"
                                    style="width:0%;height:10px;"></div>
                            </div>
                            <p class="w3-tiny w3-margin-top"><b><span id="txt-3ano">0/0</span></b> aulas feitas</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="w3-container w3-padding-64 w3-light-grey">
            <div class="w3-content" style="max-width:1100px">
                <h2 class="w3-center w3-margin-bottom"><b>Monitor Global Duvid</b></h2>
                <div class="w3-row-padding card-monitor-global">


                    <!-- CARD POPULAÇÃO -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/populacao-icone.gif" alt="População"
                                class="img-widget-hero"><br>
                            <span class="w3-large w3-text-green"><b>Mundo Pulsa</b></span>
                            <div id="populacao-live" class="w3-large w3-text-dark-grey"
                                style="font-weight: bold; letter-spacing: -1px;">8.254.130.400</div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Estimativa Populacional</p>
                        </div>
                    </div>



                    <!-- CARD DÓLAR -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/dolar-icone.webp" alt="Economia" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-orange"><b>Dólar Comercial</b></span>
                            <div class="w3-large w3-text-dark-grey"><b id="dolar-valor">R$ --</b></div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Cotação em tempo real</p>
                        </div>
                    </div>



                    <!-- CARD PETRÓLEO -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/petroleo-icone.png" alt="Petróleo" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-dark-grey"><b>Petróleo Brent</b></span>
                            <div id="petroleo-valor" class="w3-large w3-text-dark-grey" style="font-weight: bold;">
                                --
                            </div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Cotação Internacional (Barril)</p>
                        </div>
                    </div>


                    <!-- CARD PETRÓLEO -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/clima-icone.gif" alt="Clima" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-blue">
                                <b id="cidade-nome">Poços de Caldas</b>
                                <i class="fa fa-search w3-small w3-opacity w3-hover-text-blue" style="cursor:pointer"
                                    onclick="mudarCidadeClima()"></i>
                            </span>
                            <div class="w3-large"><b id="temp-atual">--°C</b></div>
                            <p id="clima-desc" class="w3-tiny w3-opacity" style="display: block;">Carregando...</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="w3-container w3-padding-64 w3-light-grey" style="margin-top: -64px;">
            <div class="w3-content" style="max-width:1100px">
                <h2 class="w3-center w3-margin-bottom"><b>Monitor Brasil Duvid</b></h2>
                <div class="w3-row-padding card-monitor-brasil">

                    <!-- CARD POPULAÇÃO BRASIL -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/popbrasil-icone.png" alt="População Brasil"
                                class="img-widget-hero"><br>
                            <span class="w3-large w3-text-green"><b>Habitantes</b></span>
                            <div id="pop-brasil-live" class="w3-large w3-text-dark-grey" style="font-weight: bold;">
                                213.500.000</div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Estimativa IBGE</p>
                        </div>
                    </div>

                    <!-- CARD IBOVESPA -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/ibovespa-icone.png" alt="Ibovespa" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-purple"><b>Ibovespa</b></span>
                            <div id="ibov-pontos" class="w3-large w3-text-dark-grey" style="font-weight: bold;">
                                Carregando...</div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Bolsa de Valores (B3)</p>
                        </div>
                    </div>

                    <!-- CARD TAXA SELIC -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/selic-icone.png" alt="Selic" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-red"><b>Taxa Selic</b></span>
                            <div id="selic-valor" class="w3-large w3-text-dark-grey" style="font-weight: bold;">--%
                            </div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Juros Básicos (BCB)</p>
                        </div>
                    </div>

                    <!-- CARD INFLAÇÃO IPCA -->
                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/ipca-icone.png" alt="Inflação" class="img-widget-hero"><br>
                            <span class="w3-large w3-text-orange"><b>Inflação IPCA</b></span>
                            <div id="ipca-valor" class="w3-large w3-text-dark-grey" style="font-weight: bold;">--%</div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Acumulado 12 meses</p>
                        </div>
                    </div>

                    <div class="w3-col l3 m6 s6 w3-margin-bottom">
                        <div class="w3-block w3-white w3-card w3-padding-24 w3-round-large w3-center card-widget">
                            <img src="fotoIndex/icones/desemprego-icone.png" alt="Desemprego"
                                class="img-widget-hero"><br>
                            <span class="w3-large w3-text-teal"><b>Desemprego</b></span>
                            <div id="desemprego-valor" class="w3-large w3-text-dark-grey" style="font-weight: bold;">--%
                            </div>
                            <p class="w3-tiny w3-opacity w3-margin-0">Taxa de Desocupação (IBGE)</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>





        <!-- Painel de citações -->
        <div class="w3-container w3-padding-64">
            <div class="w3-content" style="max-width:800px">
                <div class="w3-panel w3-white w3-card-4 w3-round-xlarge w3-padding-32 w3-display-container">
                    <i class="fa fa-quote-left w3-xlarge w3-text-light-grey"
                        style="position:absolute; left:20px; top:10px"></i>

                    <div class="w3-center">
                        <p id="frase" class="w3-xlarge w3-serif w3-padding-large"
                            style="line-height: 1.6; min-height: 120px;">
                        </p>

                        <div class="w3-row w3-flex-center"
                            style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-top: 20px;">
                            <img id="autor-img" src="" alt="Autor" class="w3-circle w3-card-2"
                                style="width:130px; height:130px; object-fit: cover; border: 3px solid #4CAF50;">
                            <p id="autor" class="w3-large w3-text-green" style="font-weight: bold; margin: 0;">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </main>




    <!-- ══════════════════════════════════════════════════════
         Modal: Editar Perfil
         Aberto por prepararTrocaNome() em duvid-core.js
    ══════════════════════════════════════════════════════ -->
    <div id="modal-editar-perfil" style="
        display:none; position:fixed; inset:0; z-index:9999;
        background:rgba(0,0,0,.5); align-items:center; justify-content:center;">

        <div style="
            background:#fff; border-radius:16px; padding:28px 24px;
            width:min(420px, 92vw); box-shadow:0 8px 32px rgba(0,0,0,.2);
            position:relative;">

            <!-- Fechar -->
            <button onclick="fecharModalPerfil()" style="
                position:absolute; top:12px; right:14px;
                background:none; border:none; font-size:1.3rem;
                cursor:pointer; color:#888; line-height:1;">×</button>

            <h3 style="margin:0 0 4px; color:#1b5e20; font-size:1.2rem;">
                <i class="fa fa-pencil"></i> Editar perfil
            </h3>
            <p style="margin:0 0 20px; color:#888; font-size:.82rem;">
                Confirme seu PIN para salvar alterações.
            </p>

            <!-- Nome -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                Nome de usuário
            </label>
            <input id="ep-nome" type="text" maxlength="50"
                style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                       border-radius:10px; font-size:.95rem; box-sizing:border-box;
                       margin-bottom:14px; font-family:inherit;">

            <!-- Estado -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                Estado <span style="font-weight:400; color:#aaa;">(opcional)</span>
            </label>
            <select id="ep-estado" style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                    border-radius:10px; font-size:.9rem; box-sizing:border-box; margin-bottom:14px; font-family:inherit;">
                <option value="">— Estado —</option>
                <option value="AC">Acre</option><option value="AL">Alagoas</option>
                <option value="AP">Amapá</option><option value="AM">Amazonas</option>
                <option value="BA">Bahia</option><option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option><option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option><option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option><option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option><option value="PA">Pará</option>
                <option value="PB">Paraíba</option><option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option><option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option><option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option><option value="RO">Rondônia</option>
                <option value="RR">Roraima</option><option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option><option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>

            <!-- Cidade -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                Cidade <span style="font-weight:400; color:#aaa;">(opcional)</span>
            </label>
            <input id="ep-cidade" type="text" maxlength="100" placeholder="Ex: Poços de Caldas"
                style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                       border-radius:10px; font-size:.9rem; box-sizing:border-box;
                       margin-bottom:14px; font-family:inherit;">

            <!-- Escola -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                Escola <span style="font-weight:400; color:#aaa;">(opcional)</span>
            </label>
            <input id="ep-escola" type="text" maxlength="150" placeholder="Ex: IFSuldeminas"
                style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                       border-radius:10px; font-size:.9rem; box-sizing:border-box;
                       margin-bottom:14px; font-family:inherit;">

            <!-- Turma -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                Código da turma <span style="font-weight:400; color:#aaa;">(opcional)</span>
            </label>
            <input id="ep-turma" type="text" maxlength="10" placeholder="Ex: JTB735"
                style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                       border-radius:10px; font-size:.9rem; box-sizing:border-box;
                       margin-bottom:4px; font-family:monospace; text-transform:uppercase; letter-spacing:2px;">
            <p style="font-size:.75rem; color:#aaa; margin:0 0 14px">Deixe em branco para manter a turma atual.</p>

            <!-- PIN de confirmação -->
            <label style="font-size:.8rem; font-weight:700; color:#444; display:block; margin-bottom:4px;">
                PIN <span style="color:#c62828;">*</span>
            </label>
            <input id="ep-pin" type="password" maxlength="4" placeholder="4 dígitos"
                style="width:100%; padding:9px 11px; border:1.5px solid #ddd;
                       border-radius:10px; font-size:1rem; box-sizing:border-box;
                       margin-bottom:6px; font-family:monospace; letter-spacing:4px;">

            <p id="ep-erro" style="color:#c62828; font-size:.82rem; margin:0 0 14px; display:none;"></p>

            <button onclick="salvarEdicaoPerfil()" id="ep-btn"
                style="width:100%; padding:11px; background:linear-gradient(135deg,#2e7d32,#43a047);
                       color:#fff; border:none; border-radius:10px; font-size:.95rem;
                       font-weight:700; cursor:pointer;">
                <i class="fa fa-check"></i> Salvar alterações
            </button>
        </div>
    </div>

    <script>
    function fecharModalPerfil() {
        document.getElementById('modal-editar-perfil').style.display = 'none';
    }

    // Fecha ao clicar fora do card
    document.getElementById('modal-editar-perfil')
        .addEventListener('click', function(e) {
            if (e.target === this) fecharModalPerfil();
        });

    async function salvarEdicaoPerfil() {
        const nome   = document.getElementById('ep-nome').value.trim();
        const estado = document.getElementById('ep-estado').value;
        const cidade = document.getElementById('ep-cidade').value.trim();
        const escola = document.getElementById('ep-escola').value.trim();
        const turma  = (document.getElementById('ep-turma')?.value || '').trim().toUpperCase();
        const pin    = document.getElementById('ep-pin').value.trim();
        const erro   = document.getElementById('ep-erro');
        const btn    = document.getElementById('ep-btn');

        erro.style.display = 'none';

        if (!nome) { mostrarEpErro('Digite um nome.'); return; }
        if (!pin)  { mostrarEpErro('Digite seu PIN para confirmar.'); return; }

        btn.disabled = true;
        btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Salvando…';

        const id = DuvidDB.getId?.();
        if (!id) { mostrarEpErro('Sessão inválida. Recarregue a página.'); btn.disabled=false; return; }

        try {
            const resp = await fetch('/api/aluno.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ acao: 'editar_perfil', id, pin, nome, estado, cidade, escola, ...(turma ? { codigo_turma: turma } : {}) }),
            });
            let dados;
            try {
                dados = await resp.json();
            } catch(_) {
                // Resposta não é JSON — servidor retornou HTML de erro
                const texto = await resp.text().catch(() => '');
                console.error('[editar_perfil] resposta não-JSON (HTTP ' + resp.status + '):', texto.substring(0, 300));
                mostrarEpErro('Erro ' + resp.status + ' do servidor. Veja o console para detalhes.');
                btn.disabled = false;
                btn.innerHTML = '<i class="fa fa-check"></i> Salvar alterações';
                return;
            }

            if (dados.erro) {
                mostrarEpErro(dados.erro);
                btn.disabled = false;
                btn.innerHTML = '<i class="fa fa-check"></i> Salvar alterações';
                return;
            }

            // Atualiza o cache local com os novos dados
            if (typeof DuvidDB.atualizarCache === 'function') {
                DuvidDB.atualizarCache(dados);
            } else {
                // Fallback: grava campos críticos manualmente
                localStorage.setItem('duvidNome', dados.nome);
            }

            fecharModalPerfil();

            // Atualiza o nome exibido na home sem recarregar
            const el = document.getElementById('nome-aluno-texto');
            if (el) el.textContent = dados.nome.toUpperCase();

            // Mostra confirmação rápida
            const tag = document.createElement('span');
            tag.textContent = ' ✔ Salvo!';
            tag.style.cssText = 'color:#2e7d32; font-size:.8rem; font-weight:700;';
            el?.parentNode?.appendChild(tag);
            setTimeout(() => tag.remove(), 2500);

        } catch(e) {
            mostrarEpErro('Falha na conexão. Tente novamente.');
            btn.disabled = false;
            btn.innerHTML = '<i class="fa fa-check"></i> Salvar alterações';
        }

        btn.disabled = false;
        btn.innerHTML = '<i class="fa fa-check"></i> Salvar alterações';
    }

    function mostrarEpErro(msg) {
        const el = document.getElementById('ep-erro');
        el.textContent    = msg;
        el.style.display  = 'block';
    }

    // Scroll suave até o formulário de login quando vier de redirecionamento
    (function () {
        const params = new URLSearchParams(window.location.search);
        if (!params.get('login_required')) return;
        window.addEventListener('load', function () {
            const el = document.getElementById('container-login');
            if (el) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    })();
    </script>

    <!-- Footer -->

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- AdSense e Analytics movidos para cá: carregam depois do conteúdo -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216"
        crossorigin="anonymous"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DPX55DSFZ0');
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gerenciarIdentificacaoHome();

            if (typeof atualizarGlobinhosGeral === "function") atualizarGlobinhosGeral();

            // Primeira frase imediata, depois repete a cada 10 segundos
            if (typeof carregarFrase === "function") {
                carregarFrase();
                setInterval(carregarFrase, 10000);
            }

            // Atualiza o banner de login_required: se temos o nome no localStorage,
            // a sessão expirou — personaliza a mensagem imediatamente, sem esperar API
            const banner = document.getElementById('banner-login-required');
            if (banner) {
                const nome = localStorage.getItem('duvid_nome') || '';
                if (nome) {
                    document.getElementById('banner-login-texto').innerHTML =
                        'Sua sessão expirou, <b>' + nome.toUpperCase() + '</b>. ' +
                        '<button onclick="_mostrarRelogin(null)" style="margin-left:8px;padding:4px 14px;' +
                        'border-radius:6px;border:none;background:#2e7d32;color:#fff;cursor:pointer;font-weight:700">' +
                        '🔑 Entrar novamente</button>';
                }
            }
        });
    </script>

</body>

</html>
