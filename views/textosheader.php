<?php include_once("title.php"); ?>

<?php include_once("config.php"); ?>



<!DOCTYPE html>
<html lang="pt">

<head>
  <title><?php echo $title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo URLSITE; ?>/images/icon/favicon.ico">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 

  <!-- Diálogos -->
  <link rel="stylesheet" href="<?php echo URLSITE; ?>/css/dialogo.css">



  <!-- Css Textos -->
  <link rel="stylesheet" href="<?php echo URLSITE; ?>/css/personalizadoTextos.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Javascript -->
  <script src="<?php echo URLSITE; ?>/js/personalizado.js" defer></script>


  <script src="<?php echo URLSITE; ?>/js/jstextos.js" defer></script>

  <script src="<?php echo URLSITE; ?>/js/dialogoContinuo.js" defer></script>




  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5408157966429216" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-top">
      <div class="w3-bar w3-green w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="AbrirNavBar()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="<?php echo URLSITE; ?>" class="w3-bar-item w3-button w3-padding-large">Home</a>

        <div class="w3-dropdown-click w3-hide-small">
          <button onclick="AbrirDropDown('aulas')" class="w3-padding-large w3-button" title="More">Aulas <i class="fa fa-caret-down"></i></button>
          <div id="aulas" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
            <a href="<?php echo URLSITE . '/pages/duvid1ano.php'; ?>" class="w3-bar-item w3-button">1º ano</a>
            <a href="#" class="w3-bar-item w3-button">2º ano</a>
            <a href="#" class="w3-bar-item w3-button">3º ano</a>
          </div>
        </div>





        <a href="<?php echo URLSITE . '/blog/blog.php'; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Blog</a>

        <a href="<?php echo URLSITE . '/pages/creditos.php'; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Créditos</a>

        <a href="<?php echo URLSITE . '/pages/instrucoesgerais.php'; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Instruções gerais</a>

        <div class="w3-dropdown-click w3-hide-small">
          <button onclick="AbrirDropDown('simulados')" class="w3-padding-large w3-button" title="More">Simulados <i class="fa fa-caret-down"></i></button>
          <div id="simulados" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
            <a href="#" class="w3-bar-item w3-button">Enem</a>
            <a href="#" class="w3-bar-item w3-button">Unicamp</a>
            <a href="#" class="w3-bar-item w3-button">Unesp</a>
          </div>
        </div>


     


        <a href="<?php echo URLSITE . '/pages/sobre.php'; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sobre</a>



        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>

        <a href="javascript:void(0)" onclick="DarkMode()" class="w3-padding-large w3-hover-red w3-right "><i class="fa fa-lightbulb-o"></i></a>

        
      <span class="w3-bar-item  "><img id="imagem50" src="<?php echo URLSITE; ?>/images/ImagensCapa/globinhoPe.png" alt="tp3Foto4" width="32" height="32"></span>
      <span class="w3-bar-item  margemTop" id="notaFixa"></span>

      </div>
    </div>

    <!-- Navbar on small screens -->

    <div id="navDemo" class="w3-bar-block w3-green w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">

      <div class="w3-dropdown-click w3-hide-large">
        <button onclick="AbrirDropDown('aulasnav')" class="w3-padding-large w3-button" title="More">Aulas <i class="fa fa-caret-down"></i></button>
        <div id="aulasnav" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
          <a href="<?php echo URLSITE . '/pages/duvid1ano.php'; ?>" class="w3-bar-item w3-button">1º ano</a>
          <a href="#" class="w3-bar-item w3-button">2º ano</a>
          <a href="#" class="w3-bar-item w3-button">3º ano</a>
        </div>
      </div>

      <a href="<?php echo URLSITE . '/blog/blog.php'; ?>" class="w3-bar-item w3-button w3-padding-large">Blog</a>
      <a href="<?php echo URLSITE . '/pages/creditos.php'; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="AbrirNavBar()">Créditos</a>
      <a href="<?php echo URLSITE . '/pages/instrucoesgerais.php'; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="AbrirNavBar()">Instruções gerais</a>

      <div class="w3-dropdown-click w3-hide-large ">
        <button onclick="AbrirDropDown('simuladosnav')" class="w3-padding-large w3-button" title="More">Simulados <i class="fa fa-caret-down"></i></button>
        <div id="simuladosnav" class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-grey">
          <a href="#" class="w3-bar-item w3-button">Enem</a>
          <a href="#" class="w3-bar-item w3-button">Unicamp</a>
          <a href="#" class="w3-bar-item w3-button">Unesp</a>
        </div>
      </div>

      <a href="<?php echo URLSITE . '/pages/sobre.php'; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="AbrirNavBar()">Sobre</a>


    


    </div>
  </div>

  
  <!-- Botões para aumentar zoom -->
  <div class="w3-padding-top-48">
    <div class=" w3-padding w3-display-container w3-right">
      <button class="w3-green w3-border w3-round-large  w3-margin-right" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
      <button class="w3-green w3-border w3-round-large " name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
    </div>
  </div>