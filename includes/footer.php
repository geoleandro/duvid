<div class="w3-padding-top-48"></div>

<!-- Botão flutuante: aparece após rolar 300px -->
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

<footer style="background:#1b5e20; padding: 48px 0 0; margin-top: 0;">
    <div class="w3-content" style="max-width:1100px; padding: 0 24px;">

        <style>
        @media (max-width:600px) {
            .footer-grid .w3-quarter { width:50% !important; }
        }
        </style>
        <div class="w3-row-padding footer-grid" style="margin-bottom: 32px;">

            <!-- Coluna: Brand -->
            <div class="w3-quarter w3-margin-bottom">
                <p style="color:#fff; font-size:16px; font-weight:700; margin:0 0 8px; letter-spacing:-.3px;">
                    🌍 Duvid Geografia
                </p>
                <p style="color:rgba(255,255,255,.55); font-size:12px; line-height:1.7; margin:0 0 20px;">
                    Plataforma gratuita de Geografia para o Ensino Médio. Feita em sala de aula, pra sala de aula.
                </p>
                <div style="display:flex; gap:8px;">
                    <a href="https://www.instagram.com/duvidgeo/" target="_blank" title="Instagram"
                       style="width:32px; height:32px; border-radius:8px; background:rgba(255,255,255,.12);
                              display:flex; align-items:center; justify-content:center;
                              color:#fff; text-decoration:none; font-size:15px; transition:background .15s;"
                       onmouseover="this.style.background='rgba(255,255,255,.22)'"
                       onmouseout="this.style.background='rgba(255,255,255,.12)'">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@duvidgeografia/" target="_blank" title="YouTube"
                       style="width:32px; height:32px; border-radius:8px; background:rgba(255,255,255,.12);
                              display:flex; align-items:center; justify-content:center;
                              color:#fff; text-decoration:none; font-size:15px; transition:background .15s;"
                       onmouseover="this.style.background='rgba(255,255,255,.22)'"
                       onmouseout="this.style.background='rgba(255,255,255,.12)'">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@duvidgeografia/" target="_blank" title="TikTok"
                       style="width:32px; height:32px; border-radius:8px; background:rgba(255,255,255,.12);
                              display:flex; align-items:center; justify-content:center;
                              color:#fff; text-decoration:none; font-size:15px; transition:background .15s;"
                       onmouseover="this.style.background='rgba(255,255,255,.22)'"
                       onmouseout="this.style.background='rgba(255,255,255,.12)'">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Coluna: Explorar -->
            <div class="w3-quarter w3-margin-bottom">
                <p style="color:rgba(255,255,255,.4); font-size:10px; text-transform:uppercase; letter-spacing:.1em; margin:0 0 12px; font-weight:600;">Explorar</p>
                <a href="/blog/blog.php"                       style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Blog</a>
                <a href="/simulados/capasimuladogeral.php"      style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Simulados</a>
                <a href="/atividades/atividades.php"            style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Atividades</a>
                <a href="/paginas/livrosgeografia.php"          style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Biblioteca</a>
                <a href="/paginas/bibliografia.php"             style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; transition:color .15s;"                   onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Bibliografia</a>
            </div>

            <!-- Coluna: Institucional -->
            <div class="w3-quarter w3-margin-bottom">
                <p style="color:rgba(255,255,255,.4); font-size:10px; text-transform:uppercase; letter-spacing:.1em; margin:0 0 12px; font-weight:600;">Institucional</p>
                <a href="/paginas/sobre.php"              style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Sobre</a>
                <a href="/paginas/creditos.php"           style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Créditos</a>
                <a href="/paginas/politicaPrivacidade.php" style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Privacidade</a>
                <a href="/paginas/contato.php"            style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; transition:color .15s;"                   onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Contato</a>
            </div>

            <!-- Coluna: Suporte -->
            <div class="w3-quarter w3-margin-bottom">
                <p style="color:rgba(255,255,255,.4); font-size:10px; text-transform:uppercase; letter-spacing:.1em; margin:0 0 12px; font-weight:600;">Suporte</p>
                <a href="/paginas/instrucoes.php" style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">Instruções</a>
                <a href="https://www.instagram.com/duvidgeo/" target="_blank" style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; margin-bottom:8px; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">@duvidgeo</a>
                <a href="mailto:leandro.hsilva@ifsuldeminas.edu.br" style="display:block; color:rgba(255,255,255,.7); font-size:13px; text-decoration:none; transition:color .15s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'">E-mail</a>
            </div>

        </div>

        <!-- Bottom bar -->
        <div style="border-top:1px solid rgba(255,255,255,.12); padding:16px 0; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
            <span style="color:rgba(255,255,255,.35); font-size:11px;">
                © Duvid Geografia 2022–<?= date('Y') ?> · Poços de Caldas, MG
            </span>
            <span style="color:rgba(255,255,255,.35); font-size:11px;">
                leandro.hsilva@ifsuldeminas.edu.br
            </span>
        </div>

    </div>
</footer>

<!-- ── Jéssica Walker ── diorama + personagens (lógica de página dentro do JS) ── -->
<div id="jessica-walker-container" style="height:0;overflow:hidden;line-height:0"></div>
<script>
var _jw = document.createElement('script');
_jw.src = '/js/jessica-walker.js';
_jw.defer = true;
document.head.appendChild(_jw);
</script>
