<?php
// =============================================================
//  admin/setup-senha.php  —  Cria/atualiza a conta admin
//  ATENÇÃO: APAGUE este arquivo do servidor após usar!
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';

$mensagem = '';
$tipo_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');
    $conf  = trim($_POST['conf']  ?? '');

    if (!$email || !$senha) {
        $mensagem = 'Preencha todos os campos.';
        $tipo_msg = 'erro';
    } elseif ($senha !== $conf) {
        $mensagem = 'As senhas não conferem.';
        $tipo_msg = 'erro';
    } elseif (strlen($senha) < 8) {
        $mensagem = 'A senha deve ter pelo menos 8 caracteres.';
        $tipo_msg = 'erro';
    } else {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $pdo  = getDB();

        $st = $pdo->prepare("SELECT id, tipo FROM alunos WHERE email = :email LIMIT 1");
        $st->execute([':email' => $email]);
        $existente = $st->fetch();

        if ($existente) {
            $pdo->prepare(
                "UPDATE alunos SET tipo = 'admin', pin_hash = :hash WHERE id = :id"
            )->execute([':hash' => $hash, ':id' => $existente['id']]);
            $mensagem = "Conta atualizada para admin com sucesso!";
        } else {
            $turma_id = (int)$pdo->query(
                "SELECT id FROM turmas WHERE codigo = 'LIVRE' LIMIT 1"
            )->fetchColumn();

            $pdo->prepare(
                "INSERT INTO alunos (nome, email, pin_hash, turma_id, tipo)
                 VALUES ('Admin', :email, :hash, :turma, 'admin')"
            )->execute([':email' => $email, ':hash' => $hash, ':turma' => $turma_id ?: 1]);
            $mensagem = "Conta admin criada com sucesso!";
        }
        $tipo_msg = 'ok';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Setup Admin — Duvid</title>
<style>
  body { background:#1a1a2e; color:#e0e0e0; font-family:sans-serif; display:flex; align-items:center; justify-content:center; min-height:100vh; margin:0; }
  .box { background:#16213e; border:1px solid #0f3460; border-radius:12px; padding:2rem; max-width:420px; width:90%; }
  h1 { font-size:1.3rem; color:#fff; margin:0 0 1.2rem; }
  label { display:block; font-size:.8rem; color:#aaa; margin:.8rem 0 .25rem; }
  input { width:100%; padding:.6rem .9rem; background:#0f3460; border:1px solid #1a4a7a; border-radius:7px; color:#fff; font-size:.95rem; box-sizing:border-box; }
  button { width:100%; margin-top:1rem; padding:.75rem; background:#2196F3; color:#fff; border:none; border-radius:8px; font-size:1rem; font-weight:600; cursor:pointer; }
  .ok   { background:#1b5e20; color:#a5d6a7; padding:.7rem; border-radius:7px; margin-top:1rem; font-size:.85rem; }
  .erro { background:#b71c1c; color:#ffcdd2; padding:.7rem; border-radius:7px; margin-top:1rem; font-size:.85rem; }
  .aviso { background:#e65100; color:#ffe0b2; padding:.8rem; border-radius:7px; margin-bottom:1.2rem; font-size:.82rem; }
  a { color:#81c784; }
</style>
</head>
<body>
<div class="box">
  <h1>🔧 Setup Conta Admin</h1>
  <div class="aviso">⚠️ <strong>Apague este arquivo após usar!</strong></div>

  <?php if ($mensagem): ?>
    <div class="<?= $tipo_msg ?>">
      <?= htmlspecialchars($mensagem) ?>
      <?php if ($tipo_msg === 'ok'): ?>
        <br><br><a href="/admin/login.php">→ Ir para o login</a>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($tipo_msg !== 'ok'): ?>
  <form method="POST">
    <label>E-mail do admin</label>
    <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required autofocus>

    <label>Senha (mín. 8 caracteres)</label>
    <input type="password" name="senha" required>

    <label>Confirmar senha</label>
    <input type="password" name="conf" required>

    <button type="submit">Criar conta admin</button>
  </form>
  <?php endif; ?>
</div>
</body>
</html>
