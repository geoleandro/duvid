<?php
// =============================================================
//  includes/auth_aluno.php
//  Exige que o aluno esteja logado para acessar a página.
//  Redireciona para a home com mensagem se não estiver.
//  Uso: require_once __DIR__ . '/../includes/auth_aluno.php';
//       (antes de qualquer output HTML)
// =============================================================

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['aluno_id'])) {
    header('Location: /home.php?login_required=1');
    exit;
}
