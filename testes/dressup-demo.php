<?php
// Página de demonstração — remova após validar
session_start();
$aluno_id = $_SESSION['aluno_id'] ?? null;
require_once __DIR__ . '/includes/dressup-section.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globinho Dress Up — Demo</title>
    <link rel="stylesheet" href="/estilos/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <style>
      body { background: #0f172a; color: #e2e8f0; padding: 20px; font-family: sans-serif; }
      h1   { font-family: 'VT323', monospace; font-size: 2rem; color: #10b981; text-align: center; }
      .demo-nav { display: flex; gap: 8px; flex-wrap: wrap; justify-content: center; margin: 16px 0; }
      .demo-nav a {
        background: #1f2937; color: #9ca3af; text-decoration: none;
        padding: 6px 14px; border-radius: 6px; font-size: 0.9rem;
        border: 1px solid #374151; transition: border-color 0.2s;
      }
      .demo-nav a:hover { border-color: #10b981; color: #fff; }
      .demo-section { margin-bottom: 40px; }
    </style>
    <script src="/js/duvid-db.js" defer></script>
    <script src="/js/globinho-dressup.js" defer></script>
</head>
<body class="dark-mode">
  <h1>🌍 Globinho Dress Up — Demo</h1>

  <div class="demo-nav">
    <?php foreach (['cartografia','africa','clima','hidrografia','biogeografia'] as $t): ?>
      <a href="?tema=<?= $t ?>"><?= ucfirst($t) ?></a>
    <?php endforeach; ?>
  </div>

  <?php
  $tema = $_GET['tema'] ?? 'cartografia';
  globinhoDressUp($tema, $aluno_id);
  ?>

  <hr style="border-color:#374151;margin:40px 0;">
  <p style="text-align:center;color:#6b7280;font-size:0.85rem;">
    Modo de uso via div (auto-init):
    <code style="background:#1f2937;padding:2px 8px;border-radius:4px;">
      &lt;div class="globinho-dressup" data-tema="cartografia" data-aluno="42"&gt;&lt;/div&gt;
    </code>
  </p>
</body>
</html>
