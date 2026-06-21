<div class="w3-padding-top-48"></div>

<!-- Botão flutuante: aparece após rolar 300px, fixo no canto inferior direito -->
<button onclick="voltarAoTopo()" id="btn-topo" title="Voltar ao topo" style="
    display: none;
    position: fixed;
    bottom: 24px;
    right: 20px;
    z-index: 998;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: none;
    background: #2e7d32;
    color: #fff;
    font-size: 1.1rem;
    cursor: pointer;
    box-shadow: 0 3px 10px rgba(0,0,0,0.25);
    transition: opacity .2s, transform .2s;
">
    <i class="fa fa-arrow-up"></i>
</button>

<script>
(function () {
    const btn = document.getElementById('btn-topo');
    if (!btn) return;
    window.addEventListener('scroll', function () {
        btn.style.display = window.scrollY > 300 ? 'block' : 'none';
    }, { passive: true });
})();
</script>

<footer class="w3-container w3-padding-24 w3-center w3-green w3-xlarge" style="padding-bottom: max(24px, env(safe-area-inset-bottom, 24px))">

    <a class="fa-brands fa-instagram w3-margin-right" href="https://www.instagram.com/leandrohenriquedasilva/"
        target="_blank" style="text-decoration:none; color: white;"></a>
    <a class="fa-brands fa-youtube w3-margin-right" href="https://www.youtube.com/@duvidgeografia/" target="_blank"
        style="text-decoration:none; color: white;"></a>
    <a class="fa-brands fa-tiktok w3-margin-right" href="https://www.tiktok.com/@duvidgeografia/" target="_blank"
        style="text-decoration:none; color: white;"></a>

    <p class="w3-medium">
        <a href="/paginas/politicaPrivacidade.php" target="_blank">Política de Privacidade</a>
    </p>

    <div class="w3-container w3-medium">
        <!-- <img src="/fotoIndex/marcaDuvid.png" alt="Duvid" style="width:30px" class="w3-margin-center"> -->
        <span>&copy; Duvid - Geografia 2022-<?= date('Y') ?></span>
    </div>

    <p class="w3-medium"><i class="fa fa-map-marker"></i> Poços de Caldas, Minas Gerais.</p>
    <p class="w3-medium"><i class="fa fa-envelope"></i> leandro.hsilva@ifsuldeminas.edu.br</p>
</footer>

<!-- ── Jéssica Walker ── sprite decorativo que convida ao jogo ── -->
<div id="jessica-walker-container" style="height:0;overflow:hidden;line-height:0"></div>
<script src="/js/jessica-walker.js" defer></script>
