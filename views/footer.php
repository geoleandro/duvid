<!-- Footer -->
<footer class="w3-container w3-padding-24 w3-center w3-green w3-xlarge ">
  <!--   
<h1>alterei o rodapé</h1> -->


  <a class="fa fa-instagram w3-margin-right faIcone" href="https://www.instagram.com/leandrohenriquedasilva/" target="_blank">

  </a>

  <a class="fa fa-youtube w3-margin-right faIcone" href="https://www.youtube.com/@duvidgeografia/" target="_blank">

  </a>

  <a class="fa-brands-tiktok" href="https://www.tiktok.com/@duvidgeografia/" target="_blank">

  </a>



  <p class="aumentar"> <a href="<?php echo URLSITE; ?>/pages/politicaprivacidade.php" target="_blank">Política de Privacidade</a></p>

   <img id="iconeFooter" src="<?php echo URLSITE; ?>/images/icon/marcaDuvid.png" alt="Ícone da marca Duvid Geografia" class="w3-margin-right"><span class="w3-medium">&copy; Duvid - Geografia 2022-<?php echo date("Y")?> </span>


</footer>



</body>


</html>




<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPX55DSFZ0"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-DPX55DSFZ0');
</script>


<script>
  function AbrirNavBar() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>