<?php
// =============================================================
//  DUVID GEOGRAFIA — Conexão com o banco de dados
//  PDO singleton com utf8mb4 e modo de exceções.
//  Use: $pdo = getDB();
// =============================================================

// Detecta ambiente automaticamente pelo servidor
$_isLocal = in_array($_SERVER['SERVER_NAME'] ?? 'localhost', ['localhost', '127.0.0.1', '::1']);

if ($_isLocal) {
    // Banco local (XAMPP — testes)
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'duvid');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_PORT', '3306');
} else {
    // Banco online (produção — duvid.com.br)
    define('DB_HOST', 'mysql.duvid.com.br');
    define('DB_NAME', 'duvid');
    define('DB_USER', 'duvid');
    define('DB_PASS', 'Sucesso26');
    define('DB_PORT', '3306');
}
define('DB_CHARSET', 'utf8mb4');

function getDB(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            DB_HOST, DB_PORT, DB_NAME, DB_CHARSET
        );

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            http_response_code(500);
            header('Content-Type: application/json');
            die(json_encode([
                'erro'    => 'Falha na conexão com o banco.',
                'detalhe' => $e->getMessage()   // remova em produção
            ]));
        }
    }

    return $pdo;
}

// Helper: resposta JSON padronizada para as APIs
function jsonResponse(array $dados, int $status = 200): never {
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    exit;
}
