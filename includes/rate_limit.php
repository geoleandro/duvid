<?php
// =============================================================
//  includes/rate_limit.php
//  Rate limit simples por IP usando tabela MySQL.
//  Sem Redis, sem Memcached — funciona em hospedagem compartilhada.
//
//  Uso em api/aluno.php:
//    require_once __DIR__ . '/../includes/rate_limit.php';
//    checarRateLimit($ip, $pdo);         // bloqueia se passar do limite
//    registrarFalha($ip, $pdo);          // PIN errado → +1 tentativa
//    limparFalhas($ip, $pdo);            // login OK → zera o contador
// =============================================================

const RATE_MAX_TENTATIVAS = 10;    // tentativas antes de bloquear
const RATE_BLOQUEIO_MIN   = 15;    // minutos de bloqueio

// Retorna o IP real do visitante (considera proxies reversos comuns).
function getClientIp(): string {
    $candidatos = [
        $_SERVER['HTTP_CF_CONNECTING_IP'] ?? '',   // Cloudflare
        $_SERVER['HTTP_X_FORWARDED_FOR']  ?? '',   // proxy / load balancer
        $_SERVER['REMOTE_ADDR']           ?? '',
    ];
    foreach ($candidatos as $ip) {
        // X-Forwarded-For pode ter lista separada por vírgula — pega o primeiro
        $ip = trim(explode(',', $ip)[0]);
        if ($ip && filter_var($ip, FILTER_VALIDATE_IP)) {
            return $ip;
        }
    }
    return '0.0.0.0';
}

// Verifica se o IP está bloqueado. Se estiver, encerra com 429.
// Limpa registros antigos (bloqueio expirado) automaticamente.
function checarRateLimit(string $ip, PDO $pdo): void {
    $st = $pdo->prepare(
        "SELECT tentativas, bloqueado_ate FROM tentativas_login WHERE ip = :ip LIMIT 1"
    );
    $st->execute([':ip' => $ip]);
    $row = $st->fetch();

    if (!$row) return; // IP sem histórico — OK

    // Bloqueio ativo?
    if ($row['bloqueado_ate'] && strtotime($row['bloqueado_ate']) > time()) {
        $restam = ceil((strtotime($row['bloqueado_ate']) - time()) / 60);
        jsonResponse([
            'erro'      => 'Muitas tentativas. Tente novamente em ' . $restam . ' minuto(s).',
            'bloqueado' => true,
            'restam_min'=> $restam,
        ], 429);
    }

    // Bloqueio expirado — limpa para não acumular lixo
    if ($row['bloqueado_ate'] && strtotime($row['bloqueado_ate']) <= time()) {
        $pdo->prepare("DELETE FROM tentativas_login WHERE ip = :ip")
            ->execute([':ip' => $ip]);
    }
}

// Registra uma tentativa de login com PIN errado.
// Ao atingir o limite, grava o horário de desbloqueio.
function registrarFalha(string $ip, PDO $pdo): void {
    // Upsert: cria ou incrementa o contador para este IP
    $pdo->prepare("
        INSERT INTO tentativas_login (ip, tentativas, bloqueado_ate)
        VALUES (:ip, 1, NULL)
        ON DUPLICATE KEY UPDATE
            tentativas = tentativas + 1,
            bloqueado_ate = IF(
                tentativas + 1 >= :max,
                DATE_ADD(NOW(), INTERVAL :min MINUTE),
                NULL
            )
    ")->execute([
        ':ip'  => $ip,
        ':max' => RATE_MAX_TENTATIVAS,
        ':min' => RATE_BLOQUEIO_MIN,
    ]);
}

// Limpa o registro do IP após login bem-sucedido.
function limparFalhas(string $ip, PDO $pdo): void {
    $pdo->prepare("DELETE FROM tentativas_login WHERE ip = :ip")
        ->execute([':ip' => $ip]);
}
