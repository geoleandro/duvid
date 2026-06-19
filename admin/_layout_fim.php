<!-- ↓ conteúdo da página termina aqui -->
  </div><!-- #conteudo -->
</div><!-- #main -->

<!-- Toast global -->
<div id="toast"></div>

<script>
// Toast helper global
function toast(msg, tipo = 'ok', ms = 3500) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.className = 'visivel ' + tipo;
  clearTimeout(t._timer);
  t._timer = setTimeout(() => t.className = '', ms);
}

// Fecha sidebar ao clicar fora (mobile)
document.addEventListener('click', e => {
  const sb = document.getElementById('sidebar');
  const btn = document.getElementById('menu-toggle');
  if (sb && !sb.contains(e.target) && e.target !== btn) {
    sb.classList.remove('aberto');
  }
});
</script>
</body>
</html>
