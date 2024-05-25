<?php include '../../views/header.php'; ?>


<div class="larguraBar">



	<!-- Fim do formulário -->


	<p id="numeroCorreto"></p>

	<p id="mensagem" style="display:none"></p>


	<!-- COLOCAR EM TODAS AS QUESTÕES -->
	<div class="area">
		<img src="../img1a.gif" id="imagem" style="display:none" alt="imagem" width="280" height="200">
	</div>



	<div id="aviso" class="w3-panel w3-yellow">

	</div>


	<div class="area w3-padding-64"><input id="button1" type="button" value="Conferir" onclick="verificar()"></div>



	<!-- Fim do conteúdo -->
</div>



<!-- Área das funções -->





<?php include '../../views/footer.php'; ?>