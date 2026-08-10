<?php
// =============================================================
//  DUVID GEOGRAFIA — Conexão com o banco de dados
//  PDO singleton com utf8mb4 e modo de exceções.
//  Use: $pdo = getDB();
// =============================================================

// Timezone Brasil
date_default_timezone_set('America/Sao_Paulo');

// Detecta ambiente automaticamente pelo servidor
$_isLocal = in_array($_SERVER['SERVER_NAME'] ?? 'localhost', ['localhost', '127.0.0.1', '::1']);
// Constante acessível dentro das funções (variáveis globais não entram em escopo de função)
define('IS_LOCAL', $_isLocal);

if ($_isLocal) {
    // Banco local (XAMPP — sem senha, seguro)
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'duvid');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_PORT', '3306');
} else {
    // Banco de produção — lê credenciais do arquivo .env (fora do código-fonte)
    $_envPath = __DIR__ . '/../config/.env';
    $_env = @parse_ini_file($_envPath);
    if (!$_env || empty($_env['DB_PASS'])) {
        error_log('[Duvid] Arquivo config/.env nao encontrado ou incompleto: ' . $_envPath);
        http_response_code(500);
        die(json_encode(['erro' => 'Configuracao do servidor indisponivel.']));
    }
    define('DB_HOST', $_env['DB_HOST'] ?? 'localhost');
    define('DB_NAME', $_env['DB_NAME'] ?? 'duvid');
    define('DB_USER', $_env['DB_USER'] ?? 'duvid');
    define('DB_PASS', $_env['DB_PASS']);
    define('DB_PORT', $_env['DB_PORT'] ?? '3306');
    unset($_env, $_envPath); // limpa da memória após uso
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
            // Registra o erro completo no log do servidor (não vai para o usuário)
            error_log('[Duvid] Falha na conexão com o banco: ' . $e->getMessage());
            http_response_code(500);
            header('Content-Type: application/json');
            $resposta = ['erro' => 'Falha na conexão com o banco.'];
            // O detalhe técnico só aparece no ambiente local; em produção fica oculto.
            if (IS_LOCAL) {
                $resposta['detalhe'] = $e->getMessage();
            }
            die(json_encode($resposta));
        }
    }

    return $pdo;
}

// Helper: resposta JSON padronizada para as APIs
function jsonResponse(array $dados, int $status = 200): void {
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    exit;
}

// Helper: inicia sessão segura e retorna aluno_id autenticado.
// Chame no topo de qualquer endpoint que exija login de aluno.
// Em caso de sessão inválida, encerra com HTTP 401.
function requireAuth(): int {
    if (session_status() === PHP_SESSION_NONE) {
        // Só configura o cookie se a sessão ainda não foi iniciada
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_samesite', IS_LOCAL ? 'Strict' : 'Lax');
        ini_set('session.cookie_secure', IS_LOCAL ? '0' : '1');
        ini_set('session.cookie_domain', IS_LOCAL ? '' : '.duvid.com.br');
        session_start();
    }
    $id = (int)($_SESSION['aluno_id'] ?? 0);
    if (!$id) {
        jsonResponse(['erro' => 'Nao autenticado.', 'login_required' => true], 401);
    }
    return $id;
}

// Helper: inicia sessão segura sem exigir autenticação.
// Use em aluno.php para iniciar/gravar a sessão no login/cadastro.
function startSecureSession(): void {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_samesite', IS_LOCAL ? 'Strict' : 'Lax');
        ini_set('session.cookie_secure', IS_LOCAL ? '0' : '1');
        ini_set('session.cookie_domain', IS_LOCAL ? '' : '.duvid.com.br');
        session_start();
    }
}
