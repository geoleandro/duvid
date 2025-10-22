<?php include_once("title.php"); ?>
<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo URLSITE; ?>/images/icon/favicon.ico">

		<!-- Remover w3 css em breve-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!-- -->

		<link rel="stylesheet" href="<?php echo URLSITE; ?>/css/personalizado.css">
		<link rel="stylesheet" href="<?php echo URLSITE; ?>/css/questoes.css">
		
		<!-- Css -->
		<link rel="stylesheet" href="<?php echo URLSITE; ?>/css/dialogo.css">
		<link rel="stylesheet" href="<?php echo URLSITE; ?>/css/blog.css">
		<link rel="stylesheet" href="<?php echo URLSITE; ?>/css/bootstrap.min.css">

		<!-- Css Textos -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		


		<!-- Javascript -->
		<script src="<?php echo URLSITE; ?>/js/bootstrap.bundle.min.js" ></script>
		<script src="<?php echo URLSITE; ?>/js/darkMode.js" ></script>

		<script src="<?php echo URLSITE; ?>/js/personalizado.js" ></script>
		<script src="<?php echo URLSITE; ?>/js/questoes.js" ></script>
		<script src="<?php echo URLSITE; ?>/js/jstextos.js" ></script>
		<script src="<?php echo URLSITE; ?>/js/dialogoContinuo.js" ></script>

		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>
	</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid fs-5">
    <a class="navbar-brand me-5" href="<?php echo URLSITE; ?>">Duvid</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URLSITE; ?>">Home</a>
        </li>
		<li class="nav-item dropdown mx-2">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aulas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/pages/duvid1ano.php'; ?>">1º ano</a></li>
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/pages/duvid2ano.php'; ?>">2º ano</a></li>
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/pages/duvid3ano.php'; ?>">3º ano</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLSITE . '/blog/blog.php'; ?>">Blog</a>
        </li>
		<li class="nav-item mx-2">
          <a class="nav-link" href="<?php echo URLSITE . '/pages/creditos.php'; ?>">Créditos</a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="<?php echo URLSITE . '/pages/instrucoesgerais.php'; ?>">Instruções gerais</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Simulados
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/simulados/capasimuladoenem.php'; ?>">Enem</a></li>
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/simulados/capasimuladofuvest.php'; ?>">Fuvest</a></li>
            <li><a class="dropdown-item" href="<?php echo URLSITE . '/simulados/capasimuladounicamp.php'; ?>">Unicamp</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLSITE . '/pages/sobre.php'; ?>">Sobre</a>
        </li>
      </ul>
      	<button class="btn btn-outline-secondary" type="button" id="themeToggle">
			<span class="theme-icon">🌙</span> Modo Escuro
    	</button>
    </div>
  </div>
</nav>


<!-- Botões para aumentar zoom      ||        Sera revisado -->
<!-- <div class="w3-padding-top-48">
	<div class=" w3-padding w3-display-container w3-right">
		<button class="w3-green w3-border w3-round-large  w3-margin-right" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
		<button class="w3-green w3-border w3-round-large " name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
	</div>
</div> -->