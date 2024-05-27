<?php include '../views/header.php'; ?>

<!-- w3-content defines a container for fixed size centered content, 
     and is wrapped around the whole page content, except for the footer in this example -->
<?php include '../views/blogheader.php'; ?>


<?php include '../includes/conexao.php'; ?>

<?php include 'posts.php'; ?>




<!-- Grid -->


<div class="w3-row w3-border larguraBarBlog">

    <!-- Blog entries -->
    <div class="w3-col l8 s12 w3-light-grey">

        <div class="w3-row">
            <?php foreach ($artigos as $artigo) : ?>
                <div class="w3-col l4 s12 w3-container w3-margin-bottom w3-padding-top-24">
                    <div class="card-container w3-white w3-hover-opacity">
                        <img src="<?php echo URLSITE; ?>/images/blog/artigos/<?php echo $artigo['imagem']; ?>" alt="<?php echo $artigo['titulo']; ?>" style="width:100%" class="card-image">
                        <div class="w3-container w3-white card-content">
                            <h2 class="w3-center">
                                <a href="../blog/artigos/<?php echo $artigo['link']; ?>" class="link-artigo">
                                    <strong><?php echo $artigo['titulo']; ?></strong>
                                </a>
                            </h2>
                            <p>
                                <?php echo $artigo['descricao']; ?>
                                <span class="w3-small w3-opacity" style="display: block;"><?php echo $artigo['data']; ?></span>
                            </p>
                            <p>
                                <a href="../blog/artigos/<?php echo $artigo['link']; ?>" class="link-artigo">
                                    <span class="w3-button w3-padding-large w3-white w3-border"><b>LER MAIS »</b></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>




    <!-- END BLOG ENTRIES -->








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

        <!-- Posts -->
        <!-- <div class="w3-white w3-margin">
                    <div class="w3-container w3-padding w3-green">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Denim</span>
                            <br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Sweaters</span>
                            <br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Workshop</span>
                            <br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia"
                                style="width:50px">
                            <span class="w3-large">Trends</span>
                            <br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr> -->



        <!-- Tags -->
        <div class="w3-white w3-margin">
            <div class="w3-container w3-padding w3-green">
                <h4>Tags</h4>
            </div>
            <div class="w3-container w3-white w3-xlarge">
                <p>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Arte</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Educação</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Filosofia</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Finanças</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Jogos digitais</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Línguas</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Programação</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Poemas</span>

                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Viagens</span>


                </p>
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


                    <p><img src=" <?php echo URLSITE; ?>/images/blog/fotoblog01.jpeg" style="width:100%;cursor:zoom-in" alt="Basiléia, Suiça." onclick="document.getElementById('fotoblog01').style.display='block'">
                    </p>


                    <p><img src=" <?php echo URLSITE; ?>/images/blog/fotoblog02.jpeg" style="width:100%;cursor:zoom-in" alt="Beco Ouro Preto, Minas Gerais" onclick="document.getElementById('fotoblog02').style.display='block'">

                    </p>


                </div>

                <div class="w3-col s6">
                    <p><img src=" <?php echo URLSITE; ?>/images/blog/fotoblog03.jpeg" style="width:100%;cursor:zoom-in" alt="Ladeira Ouro Preto, Minas Gerais" onclick="document.getElementById('fotoblog03').style.display='block'"></p>

                    <p><img src=" <?php echo URLSITE; ?>/images/blog/fotoblog04.jpeg" style="width:100%;cursor:zoom-in" alt="Jogo Aventura Geográfica - Duvid Geografia" onclick="document.getElementById('fotoblog04').style.display='block'"></p>
                </div>
            </div>
        </div>
        <hr>


        <div class="w3-container">



            <div id="fotoblog01" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog01.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity"><strong>Basiléia,
                            Suiça.</strong></span>
                </div>
            </div>

            <div id="fotoblog02" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog02.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity"><strong>Beco
                            Ouro Preto, Minas Gerais.
                        </strong></span>
                </div>
            </div>

            <div id="fotoblog03" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog03.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity"><strong>Ladeira
                            em Ouro Preto, Minas Gerais.
                        </strong></span>
                </div>
            </div>

            <div id="fotoblog04" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img src=" <?php echo URLSITE; ?>/images/blog/fotoblog04.jpeg" style="width:100%">
                    <span class="w3-display-bottomleft w3-margin-left w3-white w3-padding w3-opacity"><strong>Fase
                            continente africano - Jogo Aventura Geográfica
                        </strong></span>
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


<!-- Subscribe Modal -->
<!-- <div id="subscribe" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content" style="padding:32px">
            <div class="w3-container w3-white">
                <i onclick="document.getElementById('subscribe').style.display='none'"
                    class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
                <h2 class="w3-wide">SUBSCRIBE</h2>
                <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
                <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
                <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"
                    onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
            </div>
        </div>
    </div> -->


<?php include '../views/footer.php'; ?>