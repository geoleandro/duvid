<?php
// =============================================================
//  includes/auth_aluno.php
//  Exige que o aluno esteja logado para acessar a página.
//  Redireciona para a home com mensagem se não estiver.
//  Uso: require_once __DIR__ . '/../includes/auth_aluno.php';
//       (antes de qualquer output HTML)
// =============================================================

// Detecta ambiente (mesmo critério do conexao.php)
$_authIsLocal = in_array($_SERVER['SERVER_NAME'] ?? 'localhost', ['localhost', '127.0.0.1', '::1']);

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', $_authIsLocal ? 'Strict' : 'Lax');
ini_set('session.cookie_secure', $_authIsLocal ? '0' : '1');
ini_set('session.cookie_domain', $_authIsLocal ? '' : '.duvid.com.br'); // aceita www e sem www
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
unset($_authIsLocal);

if (empty($_SESSION['aluno_id'])) {
    header('Location: /home.php?login_required=1');
    exit;
}
