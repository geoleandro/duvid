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
    <link rel="stylesheet" href="estilos/texto-estilo.css">
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

    <!-- Navigation + Sidebar (sidebar inclusa automaticamente via header.php) -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="conteudo-principal" style="margin-top:0; padding-top:72px;">

        <!-- ══ HERO BANNER ══════════════════════════════════════════════════ -->
        <div class="texto-hero" style="background-image:url('fotoIndex/tileset/fundo.webp');">
            <div class="texto-hero-overlay">
                <div class="texto-hero-badges">
                    <span class="texto-badge texto-badge-green">🌍 Geografia</span>
                    <span class="texto-badge">Ensino Médio</span>
                </div>
                <h1 class="texto-hero-title">Duvid Geografia</h1>
                <p style="margin:0 0 20px; font-size:.95rem; color:rgba(255,255,255,.82);
                          line-height:1.6; text-shadow:0 1px 4px rgba(0,0,0,.3);
                          max-width:500px; font-family:'Montserrat',sans-serif;">
                    Explore as dinâmicas do planeta. Questões, simulados e aulas gratuitas para o Ensino Médio.
                </p>
                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                    <a href="#cards-anos"
                       style="display:inline-block; padding:9px 22px; background:#2e7d32; color:#fff;
                              border-radius:20px; text-decoration:none; font-family:'Montserrat',sans-serif;
                              font-size:.85rem; font-weight:700; transition:background .15s, box-shadow .15s;
                              box-shadow:0 2px 10px rgba(0,0,0,.25);"
                       onmouseover="this.style.background='#1b5e20'"
                       onmouseout="this.style.background='#2e7d32'">
                        📚 Iniciar
                    </a>
                    <a href="/simulados/capasimuladogeral.php"
                       style="display:inline-block; padding:9px 22px; background:rgba(255,255,255,.12);
                              color:#fff; border-radius:20px; text-decoration:none; font-family:'Montserrat',sans-serif;
                              font-size:.85rem; font-weight:700; border:1px solid rgba(255,255,255,.3);
                              backdrop-filter:blur(4px); transition:background .15s;"
                       onmouseover="this.style.background='rgba(255,255,255,.22)'"
                       onmouseout="this.style.background='rgba(255,255,255,.12)'">
                        🎯 Simulados
                    </a>
                </div>
            </div>
        </div>

        <!-- ======================================
       1. LOGIN / BOAS-VINDAS (TOPO)
  ======================================= -->
        <div style="background:#f8f9fa; padding:32px 16px 24px;">
        <div class="w3-content" style="max-width:1100px;">

            <?php if ($loginRequired): ?>
            <div id="banner-login-required"
                 style="background:#fff8e1; border:1.5px solid #f9a825; border-radius:12px;
                        padding:14px 20px; display:flex; align-items:center; gap:12px;
                        flex-wrap:wrap; margin-bottom:20px;">
                <i class="fa fa-lock" style="color:#f9a825; font-size:1.1rem;"></i>
                <span id="banner-login-texto" style="font-size:.9rem; color:#555;">
                    Você precisa estar logado para acessar essa página. Faça login abaixo. 👇
                </span>
            </div>
            <?php endif; ?>

            <div id="container-login">

                <!-- Loading -->
                <div id="loading-painel" class="w3-center" style="padding:32px 0;">
                    <i class="fa fa-spinner w3-spin w3-text-green" style="font-size:2rem;"></i>
                    <p style="color:#aaa; font-size:.85rem; margin-top:10px;">Carregando seu progresso...</p>
                </div>

                <!-- Frase motivacional (usada pelo JS) -->
                <div class="trilha-container-wrapper" style="display:none;">
                    <p id="frase-motivacional-trilha" class="w3-small w3-text-grey w3-center"
                        style="margin-bottom:10px; font-weight:bold;"></p>
                </div>

                <!-- Trilha de níveis (usada pelo JS) -->
                <div class="trilha-scroll-area" style="display:none;">
                    <div class="trilha-conquistas-container">
                        <div id="trilha-niveis" class="trilha-wrapper">
                            <div class="linha-trilha-fundo"></div>
                            <div id="linha-trilha-progresso" class="linha-trilha-ativa"></div>
                            <div id="icones-trilha-placeholder" class="icones-wrapper"></div>
                        </div>
                    </div>
                </div>

                <!-- ── ESTADO: NÃO LOGADO ── -->
                <div id="form-identificacao" style="display:none;">
                <div id="painel-2cards">

                    <!-- Card 1: Preview do perfil -->
                    <div class="painel-card" style="box-sizing:border-box;">
                        <div style="display:flex; align-items:center; gap:14px; flex-wrap:wrap;">
                            <div style="position:relative; flex-shrink:0;">
                                <img src="https://api.dicebear.com/8.x/pixel-art/svg?seed=Duvid&backgroundColor=e8f5e9&radius=50"
                                     alt="Avatar" style="width:68px; height:68px; border-radius:50%;
                                            border:3px solid #4caf50; display:block; background:#e8f5e9;">
                                <span style="position:absolute; bottom:-4px; left:50%; transform:translateX(-50%);
                                             background:#f9a825; color:#fff; font-size:.52rem; font-weight:800;
                                             padding:2px 7px; border-radius:10px; white-space:nowrap;
                                             letter-spacing:.04em; line-height:1.4;">LEVEL 1</span>
                            </div>
                            <div style="flex:1; min-width:110px;">
                                <b style="font-size:1.05rem; font-weight:800; color:#1b5e20;
                                          letter-spacing:.02em; text-transform:uppercase;">Explorador</b>
                                <p style="margin:3px 0 0; font-size:.7rem; font-weight:700;
                                          letter-spacing:1.5px; color:#9d9d9d; text-transform:uppercase;">NOVATO</p>
                            </div>
                            <div style="background:#f0f7f0; border:1.5px solid #c8e6c9; border-radius:14px;
                                        padding:8px 14px; text-align:center; flex-shrink:0;">
                                <div style="font-size:.55rem; color:#558b2f; text-transform:uppercase;
                                            letter-spacing:.1em; font-weight:700; margin-bottom:2px;">Globinhos</div>
                                <div style="font-size:1.3rem; font-weight:800; color:#2e7d32; line-height:1.1;">
                                    🌍 <span>0</span>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:16px;">
                            <div style="background:#f0f0f0; border-radius:8px; height:10px; overflow:hidden;">
                                <div style="height:100%; width:0%; border-radius:8px;
                                            background:linear-gradient(90deg,#4caf50,#81c784);"></div>
                            </div>
                            <div style="display:flex; justify-content:space-between; margin-top:5px;">
                                <span style="font-size:.68rem; color:#888;">XP: 0</span>
                                <span style="font-size:.68rem; color:#888;">Próximo: 100</span>
                            </div>
                        </div>
                        <p style="margin:18px 0 0; font-size:.75rem; color:#aaa; line-height:1.5;">
                            Crie sua conta gratuita para salvar seu progresso, ganhar globinhos e ajudar sua turma.
                        </p>
                    </div>

                    <!-- Card 2: Form de login / cadastro -->
                    <div class="painel-card" style="box-sizing:border-box;">
                        <h2 style="margin:0 0 6px; font-size:1.05rem; color:#1b5e20; font-weight:800;">
                            Bem-vindo, Explorador! 🌍
                        </h2>
                        <p style="margin:0 0 16px; font-size:.8rem; color:#666; line-height:1.55;">
                            Sua jornada pelo conhecimento geográfico começa aqui.
                        </p>

                        <label style="font-size:.65rem; font-weight:700; color:#aaa;
                                      letter-spacing:1px; text-transform:uppercase;
                                      display:block; margin-bottom:6px;">Código da Turma</label>
                        <div style="display:flex; gap:8px; margin-bottom:14px;">
                            <input class="w3-input w3-border w3-round-large" type="text"
                                id="pq-turma" placeholder="Ex: GEO-2024-X"
                                autocapitalize="characters"
                                style="flex:1; border-color:#e0e0e0; height:42px; font-size:.88rem;
                                       text-transform:uppercase; letter-spacing:2px; font-family:monospace;">
                            <button class="w3-button w3-round-large"
                                onclick="NomeAlunos('resp0','pq0')"
                                style="background:#2e7d32; color:#fff; font-weight:700; padding:0 18px;
                                       height:42px; white-space:nowrap; transition:background .15s;"
                                onmouseover="this.style.background='#1b5e20'"
                                onmouseout="this.style.background='#2e7d32'">
                                Entrar
                            </button>
                        </div>

                        <p id="login-erro" style="display:none; font-size:.78rem; color:#e53935;
                                          font-weight:600; margin:0 0 10px;"></p>

                        <!-- Form colapsável -->
                        <details id="detalhes-form-completo">
                            <summary style="cursor:pointer; font-size:.82rem; color:#2e7d32; font-weight:600;
                                            user-select:none; list-style:none; margin-bottom:10px;">
                                + Criar conta / fazer login
                            </summary>
                            <div style="display:flex; flex-direction:column; gap:9px; margin-top:8px;">
                                <input class="w3-input w3-border w3-round-large" type="text"
                                    id="pq0" placeholder="Seu nome (ex: João Silva)"
                                    autocomplete="nickname"
                                    style="border-color:#e0e0e0; height:40px; font-size:.88rem;">
                                <input class="w3-input w3-border w3-round-large" type="email"
                                    id="pq-email" placeholder="Seu e-mail"
                                    autocomplete="email"
                                    style="border-color:#e0e0e0; height:40px; font-size:.88rem;">
                                <input class="w3-input w3-border w3-round-large" type="password"
                                    id="pq-pin" placeholder="PIN de 4 dígitos"
                                    maxlength="4" inputmode="numeric" pattern="[0-9]{4}"
                                    autocomplete="new-password"
                                    style="border-color:#e0e0e0; height:40px; font-size:.88rem; letter-spacing:6px;">

                                <details id="detalhes-localizacao">
                                    <summary style="cursor:pointer; font-size:.76rem; color:#2e7d32; font-weight:600; user-select:none; list-style:none;">
                                        + Escola e localização (opcional)
                                    </summary>
                                    <div style="display:flex; flex-direction:column; gap:8px; margin-top:8px;">
                                        <select class="w3-select w3-border w3-round-large" id="pq-estado" style="height:40px; border-color:#e0e0e0;">
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
                                        <input class="w3-input w3-border w3-round-large" type="text" id="pq-cidade" placeholder="Cidade" autocomplete="address-level2" style="border-color:#e0e0e0;">
                                        <input class="w3-input w3-border w3-round-large" type="text" id="pq-escola" placeholder="Nome da escola" autocomplete="organization" style="border-color:#e0e0e0;">
                                    </div>
                                </details>

                                <button class="w3-button w3-block w3-round-large"
                                    onclick="NomeAlunos('resp0','pq0')"
                                    style="background:#2e7d32; color:#fff; font-weight:700; font-size:.9rem;
                                           height:44px; transition:background .15s;"
                                    onmouseover="this.style.background='#1b5e20'"
                                    onmouseout="this.style.background='#2e7d32'">
                                    🚀 Começar Jornada
                                </button>
                            </div>
                        </details>
                    </div>

                </div>
                </div><!-- /form-identificacao -->

                <!-- ── ESTADO: LOGADO ── -->
                <div id="display-identificado" style="display:none;">
                <div id="painel-3cards">

                    <!-- ── CARD 1: Perfil ── -->
                    <div class="painel-card">
                        <div style="display:flex; align-items:center; gap:14px; flex-wrap:wrap;">
                            <div style="position:relative; flex-shrink:0;">
                                <img id="aluno-foto"
                                     src="https://api.dicebear.com/8.x/pixel-art/svg?seed=Duvid"
                                     alt="Avatar"
                                     style="width:68px; height:68px; border-radius:50%; object-fit:cover;
                                            border:3px solid #4caf50; display:block; background:#e8f5e9;">
                                <span id="lvl-tag"
                                      style="position:absolute; bottom:-4px; left:50%; transform:translateX(-50%);
                                             background:#f9a825; color:#fff; font-size:.52rem; font-weight:800;
                                             padding:2px 7px; border-radius:10px; white-space:nowrap;
                                             letter-spacing:.04em; line-height:1.4;">LEVEL 1</span>
                                <img id="medalha-patente" src="fotoIndex/icones/duvid-patentes-novato.png"
                                     alt="Patente" style="display:none;">
                            </div>
                            <div style="flex:1; min-width:110px;">
                                <div style="display:flex; align-items:center; gap:8px; flex-wrap:wrap;">
                                    <b id="nome-aluno-texto"
                                       style="font-size:1.05rem; font-weight:800; color:#1b5e20;
                                              letter-spacing:.02em; text-transform:uppercase;"></b>
                                    <button onclick="prepararTrocaNome()"
                                        style="background:none; border:none; cursor:pointer;
                                               color:#aaa; font-size:.85rem; padding:0; line-height:1;"
                                        title="Editar perfil"><i class="fa fa-pencil"></i></button>
                                </div>
                                <p id="rank-nome"
                                   style="margin:3px 0 0; font-size:.7rem; font-weight:700;
                                          letter-spacing:1.5px; color:#e53935; text-transform:uppercase;"></p>
                                <p id="turma-info" style="margin:3px 0 0; font-size:.7rem; color:#aaa; display:none;">
                                    <i class="fa fa-graduation-cap" style="font-size:.65rem; margin-right:3px;"></i>
                                    <span id="turma-nome-label"></span>
                                    <span style="color:#ccc; margin:0 3px;">•</span>
                                    <span id="turma-codigo-label" style="font-family:monospace; letter-spacing:1px;"></span>
                                </p>
                            </div>
                            <div style="background:#f0f7f0; border:1.5px solid #c8e6c9; border-radius:14px;
                                        padding:8px 14px; text-align:center; flex-shrink:0;">
                                <div style="font-size:.55rem; color:#558b2f; text-transform:uppercase;
                                            letter-spacing:.1em; font-weight:700; margin-bottom:2px;">Globinhos</div>
                                <div style="font-size:1.3rem; font-weight:800; color:#2e7d32; line-height:1.1;">
                                    🌍 <span id="valor-total-central">0</span>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:16px;">
                            <div style="background:#f0f0f0; border-radius:8px; height:10px; overflow:hidden;">
                                <div id="barra-xp-total"
                                     style="height:100%; width:0%; border-radius:8px;
                                            background:linear-gradient(90deg,#4caf50,#81c784);
                                            transition:width 1.5s cubic-bezier(0.4,0,0.2,1);"></div>
                            </div>
                            <div style="display:flex; justify-content:space-between; margin-top:5px;">
                                <span style="font-size:.68rem; color:#888;">XP: <span id="xp-atual">0</span></span>
                                <span style="font-size:.68rem; color:#888;">Próximo: <span id="xp-proximo">100</span></span>
                            </div>
                        </div>
                    </div>

                    <!-- ── CARD 2: Turma / Bem-vindo ── -->
                    <div id="card-turma-join" class="painel-card">
                        <h3 id="turma-card-titulo"
                            style="margin:0 0 6px; font-size:1.05rem; font-weight:800; color:#1b5e20;">
                            Bem-vindo, Explorador! 🌍
                        </h3>
                        <p id="turma-card-desc"
                           style="margin:0 0 18px; font-size:.8rem; color:#666; line-height:1.55;">
                            Sua jornada pelo conhecimento geográfico começa aqui. Prepare-se para desbravar a Natureza, o Brasil e o Mundo.
                        </p>

                        <!-- Área para aluno LIVRE: formulário de entrada na turma -->
                        <div id="turma-join-form">
                            <label style="font-size:.65rem; font-weight:700; color:#aaa;
                                          letter-spacing:1px; text-transform:uppercase;
                                          display:block; margin-bottom:6px;">Código da Turma</label>
                            <div style="display:flex; gap:8px;">
                                <input id="turma-join-input" type="text"
                                    placeholder="Ex: GEO-2024-X"
                                    autocapitalize="characters"
                                    style="flex:1; border:1.5px solid #e0e0e0; border-radius:10px;
                                           height:42px; padding:0 12px; font-size:.88rem;
                                           text-transform:uppercase; letter-spacing:2px;
                                           font-family:monospace; outline:none;
                                           transition:border-color .15s;"
                                    onfocus="this.style.borderColor='#4caf50'"
                                    onblur="this.style.borderColor='#e0e0e0'">
                                <button onclick="entrarTurmaLogado()"
                                    style="background:#2e7d32; color:#fff; border:none; border-radius:10px;
                                           height:42px; padding:0 18px; font-weight:700; font-size:.85rem;
                                           cursor:pointer; white-space:nowrap; transition:background .15s;"
                                    onmouseover="this.style.background='#1b5e20'"
                                    onmouseout="this.style.background='#2e7d32'">
                                    Entrar
                                </button>
                            </div>
                            <p id="turma-join-msg"
                               style="display:none; margin:10px 0 0; font-size:.75rem; font-weight:600;"></p>
                        </div>

                        <!-- Área para aluno já em turma: info + opção de trocar -->
                        <div id="turma-membro-info" style="display:none;">
                            <div style="background:#f0f7f0; border-radius:12px; padding:12px 14px;
                                        display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                                <i class="fa fa-graduation-cap" style="color:#2e7d32; font-size:1.1rem;"></i>
                                <div>
                                    <p style="margin:0; font-size:.78rem; font-weight:700; color:#2e7d32;"
                                       id="turma-membro-nome"></p>
                                    <p style="margin:2px 0 0; font-size:.68rem; color:#888; font-family:monospace;"
                                       id="turma-membro-codigo"></p>
                                </div>
                            </div>
                            <button onclick="document.getElementById('turma-membro-info').style.display='none';document.getElementById('turma-join-form').style.display='block';"
                                style="background:none; border:none; font-size:.72rem; color:#aaa;
                                       cursor:pointer; padding:0; font-family:'Montserrat',sans-serif;">
                                Trocar de turma →
                            </button>
                        </div>

                        <!-- IDs legados usados por atualizarResumoHome() -->
                        <span id="txt-1ano" style="display:none;">0/34</span>
                        <span id="bar-1ano" style="display:none;"></span>
                        <span id="conquista-1ano" style="display:none;"></span>
                        <span id="txt-2ano" style="display:none;">0/36</span>
                        <span id="bar-2ano" style="display:none;"></span>
                        <span id="conquista-2ano" style="display:none;"></span>
                        <span id="txt-3ano" style="display:none;">0/36</span>
                        <span id="bar-3ano" style="display:none;"></span>
                        <span id="conquista-3ano" style="display:none;"></span>
                    </div>

                    <!-- ── CARD 3: Ranking ── -->
                    <div id="mini-ranking-turma" class="painel-card">
                        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:14px;">
                            <span id="mini-ranking-titulo"
                                  style="font-family:'Montserrat',sans-serif; font-size:.95rem;
                                         font-weight:800; color:#2e7d32;">Ranking da Turma</span>
                            <i class="fa fa-trophy" style="color:#f9a825; font-size:1.1rem;"></i>
                        </div>
                        <div id="mini-ranking-lista" style="display:flex; flex-direction:column; gap:8px;">
                            <div style="text-align:center; padding:16px 0; color:#ccc; font-size:.8rem;">Carregando…</div>
                        </div>
                        <a href="/paginas/ranking.php"
                           style="display:block; margin-top:14px; padding:11px; border-radius:12px;
                                  border:1.5px solid #2e7d32; color:#2e7d32; text-align:center;
                                  font-family:'Montserrat',sans-serif; font-size:.85rem; font-weight:700;
                                  text-decoration:none; transition:background .15s;"
                           onmouseover="this.style.background=document.body.classList.contains('dark-mode')?'#1a2e1a':'#f0f7f0'"
                           onmouseout="this.style.background='transparent'">
                            Ver Ranking Completo
                        </a>
                    </div>

                </div>
                </div><!-- /display-identificado -->

            </div><!-- /container-login -->
        </div>
        </div>

        <!-- ======================================
       2. TRILHAS DE APRENDIZAGEM
  ======================================= -->
        <div id="cards-anos" style="background:linear-gradient(160deg,#e8f5e9 0%,#f1f8f1 60%,#e0f2e0 100%);">
            <div class="w3-content" style="max-width:1200px; padding:48px 16px 40px;">

                <!-- Cabeçalho da seção -->
                <div style="text-align:center; margin-bottom:36px;">
                    <span style="display:inline-block; background:#2e7d32; color:#fff;
                                 border-radius:30px; padding:5px 20px; font-size:.7rem;
                                 font-weight:700; letter-spacing:.15em; text-transform:uppercase;
                                 margin-bottom:16px;">Conteúdo Duvid</span>

                    <h2 id="titulo-escolha-tema"
                        style="font-size:2rem; font-weight:800; color:#1b5e20;
                               margin:0 0 10px; letter-spacing:-.5px;">Escolha seu tema</h2>

                    <p style="color:#558b2f; font-size:.92rem; margin:0;">
                        Gratuito · Interativo · Apps offline para Android
                    </p>
                </div>

                <div class="w3-row-padding">

                    <!-- CARD: NATUREZA -->
                    <div class="w3-third w3-margin-bottom">
                        <a href="Duvid1Ano.php" style="text-decoration:none; display:block;">
                        <div style="background:#fff; border-radius:20px; overflow:hidden;
                                    box-shadow:0 2px 12px rgba(0,0,0,.07); border:1px solid #f0f0f0;
                                    transition:transform .2s, box-shadow .2s;"
                             onmouseover="var dm=document.body.classList.contains('dark-mode');this.style.transform='translateY(-5px)';this.style.boxShadow=dm?'0 12px 32px rgba(0,0,0,.5)':'0 12px 32px rgba(46,125,50,.15)';this.style.background=dm?'#1e2a1e':'#fff'"
                             onmouseout="this.style.transform='';this.style.boxShadow='0 2px 12px rgba(0,0,0,.07)';this.style.background=document.body.classList.contains('dark-mode')?'#1e2a1e':'#fff'">

                            <!-- Imagem topo com badge -->
                            <div style="position:relative; overflow:hidden; height:150px; background:#e8f5e9;">
                                <img src="fotoIndex/imagensCapa/capa1anox.webp" loading="lazy" alt="Natureza"
                                     style="width:100%; height:100%; object-fit:cover; object-position:center;">
                                <span style="position:absolute; top:10px; right:10px;
                                             background:rgba(255,255,255,.9); color:#2e7d32;
                                             font-size:.58rem; font-weight:700; letter-spacing:1px;
                                             text-transform:uppercase; padding:3px 8px;
                                             border-radius:8px; backdrop-filter:blur(4px);">
                                    Módulo 01
                                </span>
                            </div>

                            <!-- Conteúdo -->
                            <div style="padding:16px 16px 14px;">
                                <h3 style="margin:0 0 6px; font-size:1.05rem; font-weight:800; color:#2e7d32;">
                                    Natureza
                                </h3>
                                <p style="margin:0 0 14px; font-size:.78rem; color:#666; line-height:1.5;">
                                    Clima, vegetação, relevo e os ciclos naturais que moldam o nosso planeta.
                                </p>

                                <!-- Progresso (mostrado pelo JS quando logado) -->
                                <div id="prog-card-1ano" style="display:none; margin-bottom:12px;">
                                    <div style="display:flex; justify-content:space-between; margin-bottom:4px;">
                                        <span style="font-size:.65rem; color:#aaa; text-transform:uppercase; letter-spacing:.5px; font-weight:600;">Progresso</span>
                                        <span id="card-txt-1ano" style="font-size:.65rem; color:#43a047; font-weight:700;">0/34 aulas</span>
                                    </div>
                                    <div style="background:#f0f0f0; border-radius:6px; height:5px; overflow:hidden;">
                                        <div id="card-bar-1ano" style="height:100%; width:0%; background:#4caf50;
                                             border-radius:6px; transition:width 1.2s ease;"></div>
                                    </div>
                                    <div style="text-align:right; margin-top:2px;">
                                        <span id="card-pct-1ano" style="font-size:.6rem; color:#aaa;">0%</span>
                                    </div>
                                </div>

                                <div style="display:flex; align-items:center; justify-content:space-between;">
                                    <a href="https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid1ano"
                                       target="_blank" onclick="event.stopPropagation()" style="line-height:0;">
                                        <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                             style="width:90px;" alt="Google Play">
                                    </a>
                                    <span style="font-size:.8rem; font-weight:700; color:#2e7d32;">
                                        Explorar →
                                    </span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- CARD: BRASIL -->
                    <div class="w3-third w3-margin-bottom">
                        <a href="Duvid2Ano.php" style="text-decoration:none; display:block;">
                        <div style="background:#fff; border-radius:20px; overflow:hidden;
                                    box-shadow:0 2px 12px rgba(0,0,0,.07); border:1px solid #f0f0f0;
                                    transition:transform .2s, box-shadow .2s;"
                             onmouseover="var dm=document.body.classList.contains('dark-mode');this.style.transform='translateY(-5px)';this.style.boxShadow=dm?'0 12px 32px rgba(0,0,0,.5)':'0 12px 32px rgba(25,118,210,.15)';this.style.background=dm?'#1e2a1e':'#fff'"
                             onmouseout="this.style.transform='';this.style.boxShadow='0 2px 12px rgba(0,0,0,.07)';this.style.background=document.body.classList.contains('dark-mode')?'#1e2a1e':'#fff'">

                            <div style="position:relative; overflow:hidden; height:150px; background:#e3f2fd;">
                                <img src="fotoIndex/imagensCapa/capa2anox.webp" loading="lazy" alt="Brasil"
                                     style="width:100%; height:100%; object-fit:cover; object-position:center;">
                                <span style="position:absolute; top:10px; right:10px;
                                             background:rgba(255,255,255,.9); color:#1565c0;
                                             font-size:.58rem; font-weight:700; letter-spacing:1px;
                                             text-transform:uppercase; padding:3px 8px;
                                             border-radius:8px; backdrop-filter:blur(4px);">
                                    Módulo 02
                                </span>
                            </div>

                            <div style="padding:16px 16px 14px;">
                                <h3 style="margin:0 0 6px; font-size:1.05rem; font-weight:800; color:#d32f2f;">
                                    Brasil
                                </h3>
                                <p style="margin:0 0 14px; font-size:.78rem; color:#666; line-height:1.5;">
                                    A diversidade regional, economia, população e os desafios da nossa nação.
                                </p>

                                <div id="prog-card-2ano" style="display:none; margin-bottom:12px;">
                                    <div style="display:flex; justify-content:space-between; margin-bottom:4px;">
                                        <span style="font-size:.65rem; color:#aaa; text-transform:uppercase; letter-spacing:.5px; font-weight:600;">Progresso</span>
                                        <span id="card-txt-2ano" style="font-size:.65rem; color:#1976d2; font-weight:700;">0/36 aulas</span>
                                    </div>
                                    <div style="background:#f0f0f0; border-radius:6px; height:5px; overflow:hidden;">
                                        <div id="card-bar-2ano" style="height:100%; width:0%; background:#1976d2;
                                             border-radius:6px; transition:width 1.2s ease;"></div>
                                    </div>
                                    <div style="text-align:right; margin-top:2px;">
                                        <span id="card-pct-2ano" style="font-size:.6rem; color:#aaa;">0%</span>
                                    </div>
                                </div>

                                <div style="display:flex; align-items:center; justify-content:space-between;">
                                    <a href="https://play.google.com/store/apps/details?id=io.kodular.geoleandro.Duvid2"
                                       target="_blank" onclick="event.stopPropagation()" style="line-height:0;">
                                        <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                             style="width:90px;" alt="Google Play">
                                    </a>
                                    <span style="font-size:.8rem; font-weight:700; color:#d32f2f;">
                                        Explorar →
                                    </span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- CARD: MUNDO -->
                    <div class="w3-third w3-margin-bottom">
                        <a href="Duvid3Ano.php" style="text-decoration:none; display:block;">
                        <div style="background:#fff; border-radius:20px; overflow:hidden;
                                    box-shadow:0 2px 12px rgba(0,0,0,.07); border:1px solid #f0f0f0;
                                    transition:transform .2s, box-shadow .2s;"
                             onmouseover="var dm=document.body.classList.contains('dark-mode');this.style.transform='translateY(-5px)';this.style.boxShadow=dm?'0 12px 32px rgba(0,0,0,.5)':'0 12px 32px rgba(25,118,210,.15)';this.style.background=dm?'#1e2a1e':'#fff'"
                             onmouseout="this.style.transform='';this.style.boxShadow='0 2px 12px rgba(0,0,0,.07)';this.style.background=document.body.classList.contains('dark-mode')?'#1e2a1e':'#fff'">

                            <div style="position:relative; overflow:hidden; height:150px; background:#e8eaf6;">
                                <img src="fotoIndex/imagensCapa/capa3anox.webp" loading="lazy" alt="Mundo"
                                     style="width:100%; height:100%; object-fit:cover; object-position:center;">
                                <span style="position:absolute; top:10px; right:10px;
                                             background:rgba(255,255,255,.9); color:#1565c0;
                                             font-size:.58rem; font-weight:700; letter-spacing:1px;
                                             text-transform:uppercase; padding:3px 8px;
                                             border-radius:8px; backdrop-filter:blur(4px);">
                                    Módulo 03
                                </span>
                            </div>

                            <div style="padding:16px 16px 14px;">
                                <h3 style="margin:0 0 6px; font-size:1.05rem; font-weight:800; color:#1565c0;">
                                    Mundo
                                </h3>
                                <p style="margin:0 0 14px; font-size:.78rem; color:#666; line-height:1.5;">
                                    Geopolítica global, globalização e a interconectividade entre as nações.
                                </p>

                                <div id="prog-card-3ano" style="display:none; margin-bottom:12px;">
                                    <div style="display:flex; justify-content:space-between; margin-bottom:4px;">
                                        <span style="font-size:.65rem; color:#aaa; text-transform:uppercase; letter-spacing:.5px; font-weight:600;">Progresso</span>
                                        <span id="card-txt-3ano" style="font-size:.65rem; color:#1565c0; font-weight:700;">0/36 aulas</span>
                                    </div>
                                    <div style="background:#f0f0f0; border-radius:6px; height:5px; overflow:hidden;">
                                        <div id="card-bar-3ano" style="height:100%; width:0%; background:#1565c0;
                                             border-radius:6px; transition:width 1.2s ease;"></div>
                                    </div>
                                    <div style="text-align:right; margin-top:2px;">
                                        <span id="card-pct-3ano" style="font-size:.6rem; color:#aaa;">0%</span>
                                    </div>
                                </div>

                                <div style="display:flex; align-items:center; justify-content:space-between;">
                                    <a href="https://play.google.com/store/apps/details?id=br.com.duvid"
                                       target="_blank" onclick="event.stopPropagation()" style="line-height:0;">
                                        <img src="fotoIndex/imagensCapa/google-play-badge1.png"
                                             style="width:90px;" alt="Google Play">
                                    </a>
                                    <span style="font-size:.8rem; font-weight:700; color:#1565c0;">
                                        Explorar →
                                    </span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>



        <!-- ══ O Projeto + Conheça o Duvid ══ -->
        <style>
        .conheca-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
        .conheca-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 20px 12px 16px;
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,.05);
            text-decoration: none;
            color: #444;
            font-size: .82rem;
            font-weight: 600;
            transition: transform .15s, box-shadow .15s, border-color .15s;
        }
        .conheca-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46,125,50,.12);
            border-color: #4caf50;
            color: #2e7d32;
        }
        .conheca-card img {
            width: 52px;
            height: 52px;
            object-fit: contain;
            image-rendering: pixelated;
        }
        body.dark-mode .conheca-card {
            background: #1e2a1e;
            border-color: rgba(255,255,255,.08);
            color: rgba(255,255,255,.7);
        }
        body.dark-mode .conheca-card:hover { border-color: #4caf50; color: #81c784; }
        @media (max-width: 640px) {
            .conheca-grid { grid-template-columns: repeat(3, 1fr); gap: 9px; }
            .conheca-card { padding: 14px 8px 12px; font-size: .75rem; }
            .conheca-card img { width: 40px; height: 40px; }
        }
        </style>

        <section style="background:#f8f9fa; padding:36px 0 32px;">
        <div class="w3-content" style="max-width:900px; padding:0 16px;">

            <!-- Texto O Projeto -->
            <div style="text-align:center; margin-bottom:32px;">
                <h2 style="margin:0 0 4px; font-size:1.6rem; font-weight:800; color:#2e7d32;
                            letter-spacing:-.3px; cursor:default;"
                    onmouseenter="if(!this.dataset.animando){this.dataset.animando='1'; this.classList.remove('w3-animate-zoom'); void this.offsetWidth; this.classList.add('w3-animate-zoom'); this.addEventListener('animationend', () => { delete this.dataset.animando; }, {once:true});}">O Projeto</h2>
                <p style="margin:0 0 14px; font-size:.9rem; color:#4caf50; font-style:italic;">
                    Gratuito, colaborativo e sem pressão
                </p>
                <p style="margin:0 auto; max-width:640px; font-size:.9rem; color:#555; line-height:1.7;">
                    O <strong>Duvid Geografia</strong> nasceu de uma sala de aula real. É gratuito, colaborativo
                    e feito com sugestões da turma. Mais de 1000 questões com explicações detalhadas,
                    textos interativos com atividades práticas e apps que funcionam 100% offline.
                </p>
            </div>

            <!-- Label Conheça -->
            <p style="text-align:center; font-size:.62rem; font-weight:800; text-transform:uppercase;
                       letter-spacing:.22em; color:#4caf50; margin:0 0 18px;">Conheça o Duvid</p>

            <div class="conheca-grid">

                <a href="paginas/sobre.php" class="conheca-card">
                    <img src="fotoIndex/icones/projeto-icone.png" alt="Projeto">
                    O Projeto
                </a>

                <a href="https://www.youtube.com/@duvidgeografia" target="_blank" class="conheca-card">
                    <img src="fotoIndex/icones/youtube-icone.png" alt="YouTube">
                    YouTube
                </a>

                <a href="blog/blog.php" class="conheca-card">
                    <img src="fotoIndex/icones/duvidblog-icone.png" alt="Blog">
                    Blog
                </a>

                <a href="simulados/capasimuladogeral.php" class="conheca-card">
                    <img src="fotoIndex/icones/simulado-icone.png" alt="Simulados">
                    Simulados
                </a>

                <a href="paginas/livrosgeografia.php" class="conheca-card">
                    <img src="fotoIndex/icones/biblioteca-icone.png" alt="Biblioteca">
                    Biblioteca
                </a>

                <a href="paginas/bibliografia.php" class="conheca-card">
                    <img src="fotoIndex/icones/bibliografia-icone.png" alt="Bibliografia">
                    Bibliografia
                </a>

                <a href="atividades/atividades.php" class="conheca-card">
                    <img src="fotoIndex/icones/atividades-icone.gif" alt="Atividades">
                    Atividades
                </a>

                <!-- substituir src por contribuir-icone.gif quando pronto -->
                <a href="#" class="conheca-card" onclick="event.preventDefault(); if(window.abrirModalMural) abrirModalMural();">
                    <img src="fotoIndex/icones/duvid-icone.png" alt="Contribuir">
                    Contribuir
                </a>

            </div>
        </div>
        </section>

        <!-- ══ Monitores Duvid — compact side-by-side ══ -->
        <section style="background:#f8f9fa; padding:24px 0 20px;">
        <div class="w3-content" style="max-width:1100px; padding:0 16px;">
            <div class="monitores-grid">

                <!-- ── Monitor Global ── -->
                <div class="monitor-global-card" style="background:#fff; border-radius:18px; padding:16px; border:1px solid #ececec; box-shadow:0 2px 8px rgba(0,0,0,.05);">
                    <div style="display:flex; align-items:center; gap:7px; margin-bottom:12px;">
                        <span style="font-size:.9rem;">🌐</span>
                        <span class="mon-header-txt" style="color:#222; font-weight:700; font-size:.85rem; letter-spacing:-.2px;">Monitor Global</span>
                        <span style="margin-left:auto; background:#e53935; color:#fff; font-size:.5rem; font-weight:800;
                                     padding:2px 7px; border-radius:20px; letter-spacing:.06em; white-space:nowrap;">● AO VIVO</span>
                    </div>
                    <div class="mon-inner">

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">POPULAÇÃO</span>
                            <span class="mon-value" id="populacao-live" style="color:#4caf50;">8.254.130.400</span>
                            <span class="mon-sub" style="color:#ccc;">+0.6%/ano</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">CÂMBIO USD</span>
                            <span class="mon-value" id="dolar-valor" style="color:#f9a825;">R$ --</span>
                            <span class="mon-sub" style="color:#ccc;">Comercial</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">PETRÓLEO BRENT</span>
                            <span class="mon-value" id="petroleo-valor" style="color:#ef5350;">--</span>
                            <span class="mon-sub" style="color:#ccc;">Barril (USD)</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">CÂMBIO EUR</span>
                            <span class="mon-value" id="euro-valor" style="color:#f9a825;">R$ --</span>
                            <span class="mon-sub" style="color:#ccc;">Comercial</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5; cursor:pointer;" onclick="mudarCidadeClima()" title="Clique para mudar a cidade">
                            <span class="mon-label" style="color:#aaa;"><span id="cidade-nome">Poços de Caldas</span> 🔍</span>
                            <span class="mon-value" id="temp-atual" style="color:#1976d2;">--°C</span>
                            <span class="mon-sub" id="clima-desc" style="color:#ccc;">Carregando...</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">CO₂ ATMOSFÉRICO</span>
                            <span class="mon-value" style="color:#ff7043;">~424 ppm</span>
                            <span class="mon-sub" style="color:#ccc;">Keeling Curve</span>
                        </div>

                    </div>
                </div>

                <!-- ── Monitor Brasil ── -->
                <div class="monitor-brasil-card" style="background:#fff; border-radius:18px; padding:16px; border:1px solid #ececec; box-shadow:0 2px 8px rgba(0,0,0,.05);">
                    <div style="display:flex; align-items:center; gap:7px; margin-bottom:12px;">
                        <span style="font-size:.9rem;">🇧🇷</span>
                        <span class="mon-header-txt" style="color:#222; font-weight:700; font-size:.85rem; letter-spacing:-.2px;">Monitor Brasil</span>
                        <span style="margin-left:auto; background:#e53935; color:#fff; font-size:.5rem; font-weight:800;
                                     padding:2px 7px; border-radius:20px; letter-spacing:.06em; white-space:nowrap;">● AO VIVO</span>
                    </div>
                    <div class="mon-inner">

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">POPULAÇÃO</span>
                            <span class="mon-value" id="pop-brasil-live" style="color:#2e7d32;">213.500.000</span>
                            <span class="mon-sub" style="color:#ccc;">Estimativa IBGE</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">IBOVESPA</span>
                            <span class="mon-value" id="ibov-pontos" style="color:#7b1fa2;">Carregando...</span>
                            <span class="mon-sub" style="color:#ccc;">Bolsa B3</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">TAXA SELIC</span>
                            <span class="mon-value" id="selic-valor" style="color:#e53935;">--%</span>
                            <span class="mon-sub" style="color:#ccc;">Juros (BCB)</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">INFLAÇÃO IPCA</span>
                            <span class="mon-value" id="ipca-valor" style="color:#e65100;">--%</span>
                            <span class="mon-sub" style="color:#ccc;">Acumulado 12m</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">DESEMPREGO</span>
                            <span class="mon-value" id="desemprego-valor" style="color:#00695c;">--%</span>
                            <span class="mon-sub" style="color:#ccc;">PNAD (IBGE)</span>
                        </div>

                        <div class="mon-stat" style="background:#f5f7f5;">
                            <span class="mon-label" style="color:#aaa;">ENERGIA RENOV.</span>
                            <span class="mon-value" style="color:#2e7d32;">~85%</span>
                            <span class="mon-sub" style="color:#ccc;">Matriz elétrica</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </section>





        <!-- ══ Novidades do Blog ══ -->
        <section class="blog-novidades-section" style="background:#fff; padding:32px 0 28px;">
        <div class="w3-content" style="max-width:1100px; padding:0 16px;">

            <!-- Cabeçalho -->
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:20px;">
                <p style="margin:0; font-size:.7rem; font-weight:700; text-transform:uppercase;
                           letter-spacing:.12em; color:#2e7d32;">Novidades do Blog</p>
                <a href="/blog/blog.php"
                   style="font-size:.78rem; font-weight:600; color:#2e7d32; text-decoration:none;
                          display:flex; align-items:center; gap:4px; transition:opacity .15s;"
                   onmouseover="this.style.opacity='.7'" onmouseout="this.style.opacity='1'">
                    Ver tudo <i class="fa fa-arrow-right" style="font-size:.65rem;"></i>
                </a>
            </div>

            <!-- Grid de cards (preenchido via JS) -->
            <div id="blog-cards-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:16px;">

                <!-- Skeleton enquanto carrega -->
                <?php for($i=0;$i<3;$i++): ?>
                <div class="blog-skeleton" style="background:#f5f5f5; border-radius:18px; overflow:hidden; height:280px; animation:pulse 1.4s ease-in-out infinite;">
                    <div style="height:140px; background:#eee;"></div>
                    <div style="padding:14px;">
                        <div style="height:10px; background:#e0e0e0; border-radius:6px; margin-bottom:8px; width:40%;"></div>
                        <div style="height:14px; background:#e0e0e0; border-radius:6px; margin-bottom:6px;"></div>
                        <div style="height:14px; background:#e0e0e0; border-radius:6px; width:80%;"></div>
                    </div>
                </div>
                <?php endfor; ?>

            </div>
        </div>
        </section>

        <style>
        @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.55} }
        .blog-card { background:#fff; border-radius:18px; overflow:hidden; border:1px solid #f0f0f0;
                     box-shadow:0 2px 8px rgba(0,0,0,.05); text-decoration:none; display:block;
                     transition:transform .15s, box-shadow .15s; }
        .blog-card:hover { transform:translateY(-3px); box-shadow:0 8px 24px rgba(46,125,50,.1); }
        .blog-card-img { width:100%; height:150px; object-fit:cover; display:block; }
        .blog-card-body { padding:14px 16px 16px; }
        .blog-card-tag { display:inline-block; font-size:.55rem; font-weight:700; text-transform:uppercase;
                         letter-spacing:.08em; color:#2e7d32; background:#e8f5e9; padding:3px 8px;
                         border-radius:6px; margin-bottom:8px; }
        .blog-card-title { margin:0 0 8px; font-size:.9rem; font-weight:700; color:#1b5e20;
                           line-height:1.4; display:-webkit-box; -webkit-line-clamp:2;
                           -webkit-box-orient:vertical; overflow:hidden; }
        .blog-card-resumo { margin:0 0 12px; font-size:.78rem; color:#777; line-height:1.5;
                            display:-webkit-box; -webkit-line-clamp:2;
                            -webkit-box-orient:vertical; overflow:hidden; }
        .blog-card-link { font-size:.75rem; font-weight:600; color:#4caf50; text-decoration:none; }
        @media (max-width:700px) {
            #blog-cards-grid { grid-template-columns:1fr !important; }
        }
        </style>

        <script>
        (function() {
            fetch('/blog/artigos.json')
                .then(r => r.json())
                .then(artigos => {
                    const grid = document.getElementById('blog-cards-grid');
                    if (!grid) return;

                    // Pega os 3 mais recentes (JSON já vem ordenado por id desc)
                    const recentes = artigos.slice(0, 3);

                    grid.innerHTML = recentes.map(a => {
                        const tag = (a.tags && a.tags[0]) ? a.tags[0] : 'Blog';
                        const resumo = a.resumo || '';
                        const img = a.imagem || '/blog/capaBlog.jpg';
                        return `
                        <a href="${a.link}" class="blog-card">
                            <img src="${img}" alt="${a.titulo}" class="blog-card-img" loading="lazy">
                            <div class="blog-card-body">
                                <span class="blog-card-tag">${tag}</span>
                                <h3 class="blog-card-title">${a.titulo}</h3>
                                <p class="blog-card-resumo">${resumo}</p>
                                <span class="blog-card-link">Ler mais <i class="fa fa-arrow-up-right-from-square" style="font-size:.6rem;"></i></span>
                            </div>
                        </a>`;
                    }).join('');
                })
                .catch(() => {
                    // Em caso de erro, esconde a seção silenciosamente
                    const grid = document.getElementById('blog-cards-grid');
                    if (grid) grid.closest('section').style.display = 'none';
                });
        })();
        </script>

        <!-- ══ Duvid Notícias ══ -->
        <section id="duvid-noticias-section" style="background:#f8f9fa; padding:28px 0 32px;">
        <div class="w3-content" style="max-width:1100px; padding:0 16px;">

            <!-- Ticker ───────────────────────────────────────── -->
            <div class="dn-ticker-wrap" style="background:#fff; border-radius:12px; overflow:hidden;
                 margin-bottom:20px; border:1.5px solid #c8e6c9; box-shadow:0 2px 8px rgba(46,125,50,.07);">
                <div style="display:flex; align-items:center; background:#2e7d32; padding:7px 16px; gap:10px;">
                    <span style="color:#fff; font-weight:800; font-size:.82rem; letter-spacing:.06em;">🌍 DUVID NOTÍCIAS</span>
                    <span style="background:#fff; color:#2e7d32; font-size:.58rem; font-weight:800; padding:2px 7px; border-radius:3px;">AO VIVO</span>
                </div>
                <div style="display:flex; align-items:center; padding:8px 14px; gap:12px; overflow:hidden; min-height:38px; background:#f0f7f0;">
                    <span id="dn-ticker-tag" style="background:#2e7d32; color:#fff; font-size:.62rem; font-weight:700;
                          padding:3px 9px; border-radius:3px; white-space:nowrap; flex-shrink:0;">CARREGANDO</span>
                    <div style="overflow:hidden; flex:1;">
                        <div id="dn-ticker-scroll" style="display:flex; white-space:nowrap; width:max-content; color:#1b5e20; font-size:.82rem; font-weight:500;">
                            <span>Carregando notícias de geografia…</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cabeçalho ────────────────────────────────────── -->
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px; flex-wrap:wrap; gap:8px;">
                <div>
                    <p style="font-size:.62rem; font-weight:700; text-transform:uppercase;
                               letter-spacing:.12em; color:#2e7d32; margin:0 0 2px;">Notícias de</p>
                    <h2 style="margin:0; font-size:1.25rem; font-weight:800; color:#1b5e20; line-height:1.2;">
                        Geografia em foco
                    </h2>
                </div>
                <div id="dn-filtros" style="display:flex; gap:8px; flex-wrap:wrap;">
                    <button class="dn-filtro ativo" data-cat="">Todas</button>
                    <button class="dn-filtro" data-cat="Clima">🌱 Clima</button>
                    <button class="dn-filtro" data-cat="Brasil">🇧🇷 Brasil</button>
                    <button class="dn-filtro" data-cat="Geopolítica">🌐 Geopolítica</button>
                    <button class="dn-filtro" data-cat="Economia">📈 Economia</button>
                    <button class="dn-filtro" data-cat="Tecnologia">💻 Tecnologia</button>
                    <button class="dn-filtro" data-cat="Espaço Rural">🌾 Espaço Rural</button>
                </div>
            </div>

            <!-- Grid de cards ────────────────────────────────── -->
            <div id="dn-cards-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:14px;">
                <!-- Skeletons enquanto carrega -->
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite;"></div>
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite; animation-delay:.2s;"></div>
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite; animation-delay:.4s;"></div>
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite; animation-delay:.6s;"></div>
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite; animation-delay:.8s;"></div>
                <div class="dn-skeleton" style="background:#e8e8e8; border-radius:14px; height:160px; animation:pulse 1.4s ease-in-out infinite; animation-delay:1s;"></div>
            </div>

            <!-- Rodapé ───────────────────────────────────────── -->
            <p id="dn-atualizado" style="margin:12px 0 0; font-size:.65rem; color:#bbb; text-align:right;"></p>

        </div>
        </section>

        <style>
        /* ── Duvid Notícias ─────────────────────────────── */
        /* ticker loop controlado por JS — sem keyframe CSS */

        .dn-filtro {
            font-size:.68rem; font-weight:700; padding:5px 13px; border-radius:20px;
            border:1.5px solid #c8e6c9; background:#fff; color:#2e7d32;
            cursor:pointer; transition:all .18s;
        }
        .dn-filtro.ativo, .dn-filtro:hover {
            background:#2e7d32; color:#fff; border-color:#2e7d32;
        }
        .dn-card {
            background:#fff; border-radius:14px; padding:14px 15px 13px;
            border:1px solid #f0f0f0; box-shadow:0 2px 8px rgba(0,0,0,.04);
            text-decoration:none; display:flex; flex-direction:column; gap:6px;
            transition:transform .18s, box-shadow .18s;
            border-left-width:3px; border-left-style:solid;
        }
        .dn-card:hover { transform:translateY(-3px); box-shadow:0 6px 20px rgba(46,125,50,.1); }
        .dn-card-tag { font-size:.58rem; font-weight:800; text-transform:uppercase; letter-spacing:.07em; }
        .dn-card-title { font-size:.82rem; font-weight:700; color:#1b5e20; line-height:1.35; margin:0; }
        .dn-card-resumo { font-size:.72rem; color:#888; line-height:1.45; margin:0; flex:1; }
        .dn-card-footer { font-size:.62rem; color:#bbb; display:flex; gap:8px; align-items:center; }

        @media(max-width:720px) {
            #dn-cards-grid { grid-template-columns:1fr !important; }
            #dn-filtros { gap:5px; }
            .dn-filtro { font-size:.62rem; padding:4px 10px; }
        }

        /* ── Dark mode — Duvid Notícias ─────────────────── */
        body.dark-mode #duvid-noticias-section { background:#121212 !important; }

        /* Ticker */
        body.dark-mode .dn-ticker-wrap {
            background:#1a2e1a !important;
            border-color:rgba(76,175,80,.2) !important;
        }
        body.dark-mode .dn-ticker-wrap [style*="background:#f0f7f0"] {
            background:#1e2e1e !important;
        }
        body.dark-mode #dn-ticker-scroll { color:#a5d6a7 !important; }

        /* Cabeçalho */
        body.dark-mode #duvid-noticias-section [style*="color:#2e7d32"] { color:#81c784 !important; }
        body.dark-mode #duvid-noticias-section [style*="color:#1b5e20"] { color:#a5d6a7 !important; }

        /* Filtros */
        body.dark-mode .dn-filtro {
            background:#1e2a1e !important;
            border-color:rgba(76,175,80,.25) !important;
            color:#81c784 !important;
        }
        body.dark-mode .dn-filtro.ativo,
        body.dark-mode .dn-filtro:hover {
            background:#2e7d32 !important;
            color:#fff !important;
            border-color:#2e7d32 !important;
        }

        /* Cards */
        body.dark-mode .dn-card {
            background:#1e2a1e !important;
            border-color:rgba(255,255,255,.06) !important;
            box-shadow:none !important;
        }
        body.dark-mode .dn-card:hover {
            box-shadow:0 6px 20px rgba(0,0,0,.4) !important;
            border-color:rgba(76,175,80,.3) !important;
        }
        body.dark-mode .dn-card-title { color:#a5d6a7 !important; }
        body.dark-mode .dn-card-resumo { color:rgba(255,255,255,.45) !important; }
        body.dark-mode .dn-card-footer { color:rgba(255,255,255,.25) !important; }

        /* Skeletons */
        body.dark-mode .dn-skeleton { background:#1e2a1e !important; }

        /* Rodapé "Atualizado em..." */
        body.dark-mode #dn-atualizado { color:rgba(255,255,255,.2) !important; }
        </style>

        <script>
        (function() {
            let _todasNoticias = [];

            function _tempoRelativo(ts) {
                const diff = Math.floor((Date.now() / 1000) - ts);
                if (diff < 120)   return 'agora há pouco';
                if (diff < 3600)  return Math.floor(diff/60) + 'min atrás';
                if (diff < 86400) return Math.floor(diff/3600) + 'h atrás';
                return Math.floor(diff/86400) + 'd atrás';
            }

            function _renderCards(noticias) {
                const grid = document.getElementById('dn-cards-grid');
                if (!grid) return;
                if (!noticias.length) {
                    grid.innerHTML = '<p style="color:#aaa;font-size:.8rem;grid-column:1/-1;text-align:center;padding:20px 0;">Nenhuma notícia encontrada nesta categoria.</p>';
                    return;
                }
                grid.innerHTML = noticias.map(n => `
                    <a href="${n.link}" target="_blank" rel="noopener" class="dn-card"
                       style="border-left-color:${n.categoria.cor};">
                        <span class="dn-card-tag" style="color:${n.categoria.cor};">
                            ${n.categoria.emoji} ${n.categoria.label}
                        </span>
                        <p class="dn-card-title">${n.titulo}</p>
                        <p class="dn-card-resumo">${n.resumo}</p>
                        <div class="dn-card-footer">
                            <span>${n.origem}</span>
                            <span>·</span>
                            <span>${_tempoRelativo(n.ts)}</span>
                        </div>
                    </a>`).join('');
            }

            function _renderTicker(noticias) {
                const tag    = document.getElementById('dn-ticker-tag');
                const scroll = document.getElementById('dn-ticker-scroll');
                if (!scroll || !noticias.length) return;

                const sep   = '    •    ';
                const texto = noticias.map(n => n.titulo).join(sep) + sep;

                scroll.innerHTML = '';
                scroll.style.animation = 'none';
                const a = document.createElement('span');
                a.textContent = texto;
                const b = document.createElement('span');
                b.textContent = texto;
                scroll.appendChild(a);
                scroll.appendChild(b);

                if (tag) {
                    tag.textContent = noticias[0].categoria.label.toUpperCase();
                    tag.style.background = noticias[0].categoria.cor || '#2e7d32';
                }

                const PX_POR_FRAME = 0.3; // pixels por frame (~60fps)
                let pos = 0;
                let spanW = 0;
                let raf;

                function tick() {
                    if (!spanW) spanW = a.getBoundingClientRect().width;
                    pos += PX_POR_FRAME;
                    if (pos >= spanW) pos -= spanW;
                    scroll.style.transform = 'translateX(-' + pos + 'px)';
                    raf = requestAnimationFrame(tick);
                }

                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) cancelAnimationFrame(raf);
                    else raf = requestAnimationFrame(tick);
                });

                raf = requestAnimationFrame(tick);
            }

            function _aplicarFiltro(cat) {
                document.querySelectorAll('.dn-filtro').forEach(b => b.classList.toggle('ativo', b.dataset.cat === cat));
                const filtradas = cat ? _todasNoticias.filter(n => n.categoria.label === cat) : _todasNoticias;
                _renderCards(filtradas.slice(0, 6));
            }

            // Filtros
            document.getElementById('dn-filtros')?.addEventListener('click', e => {
                const btn = e.target.closest('.dn-filtro');
                if (btn) _aplicarFiltro(btn.dataset.cat);
            });

            // Buscar notícias
            fetch('/api/noticias.php')
                .then(r => r.json())
                .then(data => {
                    if (!data.ok || !data.noticias.length) return;
                    _todasNoticias = data.noticias;
                    _renderCards(_todasNoticias.slice(0, 6));
                    _renderTicker(_todasNoticias);

                    const el = document.getElementById('dn-atualizado');
                    if (el) el.textContent = 'Atualizado em ' + new Date(data.gerado_em).toLocaleTimeString('pt-BR', {hour:'2-digit',minute:'2-digit'});
                })
                .catch(() => {
                    // silencioso — fallback da API já serve dados
                });
        })();
        </script>

        <!-- ══ Citação ══ -->
        <section style="background:#f8f9fa; padding:28px 0 32px;">
        <div class="w3-content" style="max-width:720px; padding:0 16px;">
            <div class="citacao-card" style="background:#fff; border-radius:20px; padding:28px 28px 24px;
                        border:1px solid #f0f0f0; box-shadow:0 2px 12px rgba(0,0,0,.05);
                        display:flex; gap:20px; align-items:center;">

                <!-- Foto do autor -->
                <div style="flex-shrink:0;">
                    <img id="autor-img" src="" alt="Autor"
                         style="width:72px; height:72px; border-radius:50%; object-fit:cover;
                                border:2px solid #4caf50; display:block;">
                </div>

                <!-- Texto -->
                <div style="flex:1; min-width:0;">
                    <div style="display:flex; gap:8px; align-items:flex-start;">
                        <span class="citacao-aspas" style="color:#c8e6c9; font-size:1.6rem; font-weight:900;
                                     line-height:1; flex-shrink:0; margin-top:2px;">"</span>
                        <p id="frase" style="margin:0; font-size:.97rem; color:#333;
                                             font-style:italic; line-height:1.7;
                                             min-height:48px;"></p>
                    </div>
                    <p id="autor" style="margin:10px 0 0; font-size:.68rem; font-weight:700;
                                         color:#2e7d32; letter-spacing:.1em; text-transform:uppercase;"></p>
                </div>

            </div>
        </div>
        </section>





    </main>

    <!-- ══ Barra sticky: aviso de login para não-logados ══════════════════ -->
    <div id="cta-login-bar" style="display:none; position:fixed; bottom:0; left:0; right:0; z-index:800;
         background:#fff; border-top:2px solid #4caf50;
         box-shadow:0 -4px 16px rgba(0,0,0,.10);
         padding:12px 20px; display:none;
         align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">

        <div style="display:flex; align-items:center; gap:10px; flex:1; min-width:200px;">
            <span style="font-size:1.3rem;">🌍</span>
            <span style="font-size:.85rem; color:#444; font-family:'Montserrat',sans-serif; font-weight:500;">
                Faça login para salvar seu progresso e ganhar <b style="color:#2e7d32;">globinhos</b>!
            </span>
        </div>

        <div style="display:flex; align-items:center; gap:8px; flex-shrink:0;">
            <a href="#container-login"
               onclick="document.getElementById('container-login').scrollIntoView({behavior:'smooth',block:'center'}); return false;"
               style="display:inline-block; padding:8px 20px; background:#2e7d32; color:#fff;
                      border-radius:20px; font-size:.82rem; font-weight:700;
                      font-family:'Montserrat',sans-serif; text-decoration:none; white-space:nowrap;
                      transition:background .15s;"
               onmouseover="this.style.background='#1b5e20'"
               onmouseout="this.style.background='#2e7d32'">
                Entrar / Criar conta
            </a>
            <button onclick="document.getElementById('cta-login-bar').style.display='none';"
                    style="background:none; border:none; color:#bbb; font-size:1.2rem;
                           cursor:pointer; padding:4px; line-height:1;" title="Fechar">×</button>
        </div>
    </div>

    <style>
    body.dark-mode #cta-login-bar {
        background:#1a2035 !important;
        border-top-color:#4caf50 !important;
    }
    body.dark-mode #cta-login-bar span[style*="color:#444"] {
        color:#ccc !important;
    }
    @media(max-width:560px) {
        #cta-login-bar { padding:10px 14px; }
        #cta-login-bar span[style*="font-size:.85rem"] { font-size:.78rem; }
    }
    </style>

    <script>
    // Exibe a barra de login só para não-logados (após carregar o estado)
    (function() {
        function _verificarBarraLogin() {
            // Usa DuvidDB se já carregou; senão lê a chave correta do localStorage
            var nomeSalvo = (typeof DuvidDB !== 'undefined' && DuvidDB.getNome)
                          ? DuvidDB.getNome() : localStorage.getItem('duvid_nome');
            var bar = document.getElementById('cta-login-bar');
            if (!bar) return;
            if (!nomeSalvo) {
                bar.style.display = 'flex';
            } else {
                bar.style.display = 'none';
            }
        }
        // Só roda após o window.load (DuvidDB já está pronto, evita flash)
        window.addEventListener('load', _verificarBarraLogin);
        window.addEventListener('duvid:saudacao', function() {
            var bar = document.getElementById('cta-login-bar');
            if (bar) bar.style.display = 'none';
        });
    })();
    </script>

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
        // Preenche as barras de progresso nos cards das trilhas
        function atualizarProgCards() {
            const dados = [
                { sufixo: '1ano', total: 34 },
                { sufixo: '2ano', total: 36 },
                { sufixo: '3ano', total: 36 },
            ];
            dados.forEach(({ sufixo, total }) => {
                const txtEl  = document.getElementById('txt-' + sufixo);
                const barEl  = document.getElementById('bar-' + sufixo);
                if (!txtEl || !barEl) return;
                const txt = txtEl.textContent || '0/0';
                const feitas = parseInt(txt.split('/')[0]) || 0;
                const pct = total > 0 ? Math.round(feitas / total * 100) : 0;
                // Card topo
                const cardProg = document.getElementById('prog-card-' + sufixo);
                const cardTxt  = document.getElementById('card-txt-' + sufixo);
                const cardPct  = document.getElementById('card-pct-' + sufixo);
                const cardBar  = document.getElementById('card-bar-' + sufixo);
                if (cardProg) {
                    cardProg.style.display = 'block';
                    if (cardTxt) cardTxt.textContent = feitas + '/' + total + ' aulas';
                    if (cardPct) cardPct.textContent = pct + '%';
                    if (cardBar) setTimeout(() => { cardBar.style.width = pct + '%'; }, 200);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            gerenciarIdentificacaoHome();

            if (typeof atualizarGlobinhosGeral === "function") atualizarGlobinhosGeral();

            // Observa quando o resumo-geral fica visível e atualiza os cards das trilhas
            const resumoEl = document.getElementById('resumo-geral');
            if (resumoEl) {
                new MutationObserver(() => {
                    if (resumoEl.style.display !== 'none') atualizarProgCards();
                }).observe(resumoEl, { attributes: true, attributeFilter: ['style'] });
            }

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
