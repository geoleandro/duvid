<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Preview — Balões Jéssica e Globinho</title>
<link rel="stylesheet" href="/estilos/texto-estilo.css">
<style>
  body { font-family: 'Montserrat', sans-serif; background: #f8f9fa; padding: 40px 20px; }
  .container { max-width: 720px; margin: 0 auto; }
  h3 { color: #555; font-size: .8rem; text-transform: uppercase; letter-spacing: .1em; margin: 32px 0 8px; }
  p { color: #333; margin: 0 0 8px; }
  .toggle-dark {
    position: fixed; top: 16px; right: 16px;
    background: #2e7d32; color: #fff; border: none;
    border-radius: 8px; padding: 8px 16px; cursor: pointer;
    font-size: .85rem; font-weight: 700;
  }
</style>
</head>
<body>

<button class="toggle-dark" onclick="document.body.classList.toggle('dark-mode'); this.textContent = document.body.classList.contains('dark-mode') ? '☀️ Claro' : '🌙 Escuro'">🌙 Escuro</button>

<div class="container">

  <h3>Texto normal (antes do balão)</h3>
  <p>A Revolução Industrial transformou radicalmente a relação entre campo e cidade, acelerando a urbanização e criando novas dinâmicas territoriais que ainda moldam o espaço geográfico contemporâneo.</p>

  <!-- ── JÉSSICA PERGUNTA ── -->
  <h3>→ Jéssica pergunta (antes de nova seção)</h3>
  <div class="personagem-fala jessica-fala">
    <img src="/fotoIndex/jessica/jessica-idle.png" alt="Jéssica" class="personagem-fala-img">
    <div class="personagem-fala-balao">
      <span class="personagem-fala-nome">Jéssica</span>
      <p>Mas espera — se a industrialização aconteceu primeiro na Europa, por que o Brasil urbanizou tão rápido no século XX?</p>
    </div>
  </div>

  <p>Boa pergunta, Jéssica. A resposta está na industrialização tardia e concentrada: enquanto na Europa o processo durou mais de um século, no Brasil ele se comprimiu em poucas décadas — especialmente a partir de 1950, com o Plano de Metas de JK.</p>

  <!-- ── GLOBINHO OBSERVA ── -->
  <h3>→ Globinho observa (junto a um dado/mapa)</h3>
  <div class="personagem-fala globinho-fala">
    <img src="/fotoIndex/globinhoPe.png" alt="Globinho" class="personagem-fala-img">
    <div class="personagem-fala-balao">
      <span class="personagem-fala-nome">Globinho 🌍</span>
      <p>Observe: em 1950, o Brasil tinha 36% de população urbana. Em 2000, já eram 81%. Esse salto em 50 anos é maior do que o da maioria dos países europeus em 150 anos.</p>
    </div>
  </div>

  <p>Esse fenômeno é chamado de urbanização acelerada e está diretamente ligado ao êxodo rural...</p>

  <!-- ── OS DOIS JUNTOS ── -->
  <h3>→ Jéssica e Globinho na sequência</h3>
  <div class="personagem-fala jessica-fala">
    <img src="/fotoIndex/jessica/jessica-idle.png" alt="Jéssica" class="personagem-fala-img">
    <div class="personagem-fala-balao">
      <span class="personagem-fala-nome">Jéssica</span>
      <p>Então o problema da desigualdade urbana no Brasil tem raiz histórica?</p>
    </div>
  </div>

  <div class="personagem-fala globinho-fala">
    <img src="/fotoIndex/globinhoPe.png" alt="Globinho" class="personagem-fala-img">
    <div class="personagem-fala-balao">
      <span class="personagem-fala-nome">Globinho 🌍</span>
      <p>Exatamente. Veja no mapa de renda por bairro de São Paulo: as periferias que cresceram no êxodo dos anos 60-70 ainda concentram os piores indicadores sociais hoje.</p>
    </div>
  </div>

</div>
</body>
</html>
