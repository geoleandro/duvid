<?php
// =============================================================
//  admin/auth.php  —  Middleware de autenticação do painel admin
//  Inclua no TOPO de toda página protegida:
//    require_once __DIR__ . '/auth.php';
// =============================================================

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Renova o ID de sessão periodicamente (proteção contra session fixation)
if (!isset($_SESSION['_iniciada'])) {
    session_regenerate_id(true);
    $_SESSION['_iniciada'] = time();
}

// Verifica autenticação
if (empty($_SESSION['admin_logado']) || empty($_SESSION['admin_id'])) {
    $volta = urlencode($_SERVER['REQUEST_URI']);
    header('Location: /admin/login.php?volta=' . $volta);
    exit;
}

// Timeout de sessão inativa: 8 horas
$TIMEOUT = 8 * 3600;
if (isset($_SESSION['_ultimo_acesso']) && (time() - $_SESSION['_ultimo_acesso']) > $TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: /admin/login.php?expirou=1');
    exit;
}
$_SESSION['_ultimo_acesso'] = time();

// Disponibiliza o nome do admin para as views
$ADMIN_NOME = $_SESSION['admin_nome'] ?? 'Admin';
