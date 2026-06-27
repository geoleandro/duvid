<?php
// Teste de sessão — APAGUE após usar
if (session_status() === PHP_SESSION_NONE) session_start();

echo "<pre style='font-family:monospace;padding:20px;background:#111;color:#0f0;'>";
echo "SESSION: \n";
print_r($_SESSION);
echo "\nadmin_logado: " . ($_SESSION['admin_logado'] ?? 'NÃO DEFINIDO');
echo "\nadmin_id: "     . ($_SESSION['admin_id']     ?? 'NÃO DEFINIDO');
echo "\n\nSe admin_logado aparecer como '1', o login funcionou.\n";
echo "Se estiver vazio, a sessão não está sendo salva.\n";
echo "</pre>";
