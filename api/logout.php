<?php
// =============================================================
//  api/logout.php
//  Destrói a sessão PHP do aluno.
//  Chamado por executarReset() em duvid-core.js antes de
//  limpar o localStorage.
//
//  POST /api/logout.php  → { ok: true }
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';

header('Content-Type: application/json; charset=utf-8');

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset();
session_destroy();

// Expira o cookie de sessão no navegador
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

jsonResponse(['ok' => true]);
