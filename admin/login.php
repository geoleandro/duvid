<?php
// =============================================================
//  admin/login.php  —  Login do painel administrativo
// =============================================================

if (session_status() === PHP_SESSION_NONE) session_start();

// Já logado → redireciona
if (!empty($_SESSION['admin_logado'])) {
    header('Location: /admin/index.php');
    exit;
}

require_once __DIR__ . '/../includes/conexao.php';

$erro  = '';
$volta = htmlspecialchars($_GET['volta'] ?? '/admin/index.php');

// Expirou sessão
$expirou = !empty($_GET['expirou']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if ($email === '' || $senha === '') {
        $erro = 'Preencha e-mail e senha.';
    } else {
        $pdo  = getDB();
        $stmt = $pdo->prepare(
            "SELECT id, nome, pin_hash, tipo FROM alunos
              WHERE email = :email AND tipo = 'admin' LIMIT 1"
        );
        $stmt->execute([':email' => $email]);
        $admin = $stmt->fetch();

        if ($admin && $admin['pin_hash'] && password_verify($senha, $admin['pin_hash'])) {
            // Login bem-sucedido
            session_regenerate_id(true);
            $_SESSION['admin_logado']    = true;
            $_SESSION['admin_id']        = $admin['id'];
            $_SESSION['admin_nome']      = $admin['nome'];
            $_SESSION['_ultimo_acesso']  = time();
            $_SESSION['_iniciada']       = time();

            // Atualiza ultimo_acesso
            $pdo->prepare("UPDATE alunos SET ultimo_acesso = NOW() WHERE id = :id")
                ->execute([':id' => $admin['id']]);

            $destino = filter_var($volta, FILTER_VALIDATE_URL) ? '/admin/index.php' : $volta;
            header('Location: ' . $destino);
            exit;
        } else {
            $erro = 'E-mail ou senha inválidos.';
            // Pequeno delay para dificultar força-bruta
            sleep(1);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin — Duvid Geografia</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  :root {
    --cor-primaria: #2196F3;
    --cor-fundo: #1a1a2e;
    --cor-card:  #16213e;
    --cor-texto: #e0e0e0;
    --cor-borda: #0f3460;
  }
  * { box-sizing: border-box; }
  body {
    background: var(--cor-fundo);
    color: var(--cor-texto);
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
  }
  .login-box {
    background: var(--cor-card);
    border: 1px solid var(--cor-borda);
    border-radius: 12px;
    padding: 2.5rem;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 8px 32px rgba(0,0,0,.4);
  }
  .logo {
    text-align: center;
    margin-bottom: 1.8rem;
  }
  .logo h1 { font-size: 1.6rem; color: #fff; margin: 0; }
  .logo p  { font-size: .85rem; color: #888; margin: .3rem 0 0; }
  label { display: block; font-size: .8rem; color: #aaa; margin: 1rem 0 .3rem; }
  input[type=email], input[type=password] {
    width: 100%;
    padding: .7rem 1rem;
    background: #0f3460;
    border: 1px solid #1a4a7a;
    border-radius: 8px;
    color: #fff;
    font-size: 1rem;
    outline: none;
    transition: border-color .2s;
  }
  input:focus { border-color: var(--cor-primaria); }
  .btn-login {
    width: 100%;
    margin-top: 1.5rem;
    padding: .8rem;
    background: var(--cor-primaria);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background .2s;
  }
  .btn-login:hover { background: #1976d2; }
  .erro {
    background: #c62828;
    color: #fff;
    padding: .7rem 1rem;
    border-radius: 8px;
    font-size: .85rem;
    margin-top: 1rem;
    text-align: center;
  }
  .aviso {
    background: #e65100;
    color: #fff;
    padding: .6rem 1rem;
    border-radius: 8px;
    font-size: .82rem;
    margin-bottom: 1rem;
    text-align: center;
  }
</style>
</head>
<body>
<div class="login-box">
  <div class="logo">
    <h1>🌍 Duvid Admin</h1>
    <p>Painel Administrativo</p>
  </div>

  <?php if ($expirou): ?>
    <div class="aviso">Sua sessão expirou. Faça login novamente.</div>
  <?php endif; ?>

  <form method="POST" autocomplete="off">
    <input type="hidden" name="volta" value="<?= $volta ?>">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email"
           value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
           placeholder="admin@exemplo.com" required autofocus>

    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="••••••••" required>

    <button type="submit" class="btn-login">Entrar</button>

    <?php if ($erro): ?>
      <div class="erro"><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>
  </form>
</div>
</body>
</html>
