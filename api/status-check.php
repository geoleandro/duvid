<?php
// Endpoint leve para o indicador do header — retorna só ok/offline
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-cache');

try {
    require_once __DIR__ . '/../includes/conexao.php';
    getDB()->query('SELECT 1');
    echo json_encode(['ok' => true]);
} catch (Throwable $e) {
    http_response_code(503);
    echo json_encode(['ok' => false]);
}
