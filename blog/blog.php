<?php include 'posts.php'; ?>
<?php //'../includes/conexao.php';?>
<?php include '../views/header.php'; ?>

<div class="w3-content" style="max-width:1600px">
    <!-- Header -->
    <div class="w3-container w3-center w3-padding-top-64 w3-margin-bottom ">
        <h1 class="w3-jumbo  w3-hide-medium "><b>Duvid Blog</b></h1>
        <h3>Bem-vindo ao blog do <span class="w3-tag"> Duvid Geografia</span></h3>
    </div>
</div>

<!-- Grid -->
<div class="w3-row w3-border larguraBarBlog">
    <!-- Blog Posts -->
    <div class="w3-col l8 s12 w3-light-grey">
        <?php foreach ($artigos as $artigo) : ?>
            <div class="w3-row w3-col l4 s12 w3-container w3-margin-bottom w3-padding-top-24">
                <div class="card-container w3-white w3-hover-opacity">
                    <img src="<?php echo URLSITE; ?>/images/blog/artigos/<?php echo $artigo['imagem']; ?>" alt="<?php echo $artigo['titulo']; ?>" style="width:100%" class="card-image">
                    <div class="w3-container w3-white card-content">
                        <a href="../blog/artigo.php?id=<?php echo $artigo['id']; ?>" class="link-artigo">
                            <h3 class="w3-center"><?php echo $artigo['titulo']; ?></h3>
                            <p>
                                <?php echo $artigo['descricao']; ?>
                                <span class="w3-small w3-opacity" style="display: block;"><?php echo $artigo['data']; ?></span>
                            </p>
                            <span class="w3-button w3-padding-large w3-white w3-border">LER MAIS »</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- End Blog Posts -->

    <!-- About/Information menu -->
    <div class="w3-col l4">
        <!-- About Card -->
        <div class="w3-white w3-margin">
            <img src=" <?php echo URLSITE; ?>/images/blog/fotoPerfilblog.jpeg" alt="Duvid Geografia" style="width:100%" class="w3-grayscale">
            <div class="w3-container w3-green">
                <h4>Leandro</h4>
                <p>Observador; professor; aspirante a pixel artista; programador de fundo de
                    quintal; escritor das minhas vivências; Deutschlerner.</p>
            </div>
        </div>
        <hr>

        <!-- Tags -->
        <div class="w3-white w3-margin">
            <div class="w3-container w3-padding w3-green">
                <h4>Tags</h4>
            </div>
            <div class="w3-container w3-white w3-xlarge">
                <?php foreach ($artigos as $artigo) : ?>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><?php echo $artigo['categoria']; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>

        <!-- Inspiration -->
        <div class="w3-white w3-margin">
            <div class="w3-container w3-padding w3-green">
                <h4>Por aí</h4>
            </div>
            <div class="w3-row-padding w3-white">
                <div class="w3-col s6">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog01.jpeg" style="width:100%;" alt="Basiléia, Suiça." onclick="document.getElementById('fotoblog01').style.display='block'" class="cursor:zoom-in w3-padding-16">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog02.jpeg" style="width:100%;" alt="Beco Ouro Preto, Minas Gerais" onclick="document.getElementById('fotoblog02').style.display='block'" class="cursor:zoom-in w3-padding-16">
                </div>

                <div class="w3-col s6">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog03.jpeg" style="width:100%;" alt="Ladeira Ouro Preto, Minas Gerais" onclick="document.getElementById('fotoblog03').style.display='block'" class="cursor:zoom-in w3-padding-16">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog04.jpeg" style="width:100%;" alt="Jogo Aventura Geográfica - Duvid Geografia" onclick="document.getElementById('fotoblog04').style.display='block'" class="cursor:zoom-in w3-padding-16">
                </div>
            </div>
        </div>
        <hr>

        <div class="w3-container">
            <div id="fotoblog01" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog01.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity">
                        <strong>Basiléia, Suiça.</strong>
                    </span>
                </div>
            </div>

            <div id="fotoblog02" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog02.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity">
                        <strong>Beco Ouro Preto, Minas Gerais.</strong>
                    </span>
                </div>
            </div>

            <div id="fotoblog03" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog03.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity">
                        <strong>Ladeira em Ouro Preto, Minas Gerais.</strong>
                    </span>
                </div>
            </div>

            <div id="fotoblog04" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog04.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity">
                        <strong>Fase continente africano - Jogo Aventura Geográfica</strong>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="w3-margin-left">
    <a href="#" class="w3-button w3-green w3-padding w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>Início</a>
</div>
<!-- END GRID -->

<!-- END w3-content -->
<?php include '../views/footer.php'; ?>