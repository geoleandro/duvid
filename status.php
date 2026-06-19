<?php
// =============================================================
//  DUVID GEOGRAFIA — Página de Status dos Serviços
// =============================================================

$checks = [];
$inicio_total = microtime(true);

// ----- 1. Banco de dados -----
function checarBanco(): array {
    $inicio = microtime(true);
    try {
        require_once __DIR__ . '/includes/conexao.php';
        $pdo = getDB();
        $pdo->query('SELECT 1');
        $ms = round((microtime(true) - $inicio) * 1000);
        return ['ok' => true, 'ms' => $ms];
    } catch (Throwable $e) {
        return ['ok' => false, 'ms' => null, 'erro' => 'Conexão falhou'];
    }
}

// ----- 2. Checar endpoint da API -----
function checarApi(string $url): array {
    $inicio = microtime(true);
    $ctx = stream_context_create(['http' => [
        'timeout'        => 5,
        'ignore_errors'  => true,
        'method'         => 'GET',
    ]]);
    $resposta = @file_get_contents($url, false, $ctx);
    $ms = round((microtime(true) - $inicio) * 1000);
    if ($resposta === false) {
        return ['ok' => false, 'ms' => $ms, 'erro' => 'Sem resposta'];
    }
    $json = json_decode($resposta, true);
    // Endpoint ok se retornou JSON válido (mesmo que seja erro de lógica, o PHP respondeu)
    $ok = ($json !== null);
    return ['ok' => $ok, 'ms' => $ms];
}

// Monta a URL base dinamicamente
$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host      = $_SERVER['HTTP_HOST'] ?? 'localhost';
$base      = $protocolo . '://' . $host;

// Executa as verificações
$checks['Banco de dados']   = checarBanco();
$checks['API · Alunos']     = checarApi($base . '/api/aluno.php?status_check=1');
$checks['API · Ranking']    = checarApi($base . '/api/ranking.php?status_check=1');
$checks['API · Globinhos']  = checarApi($base . '/api/globinhos.php?status_check=1');
$checks['API · Progresso']  = checarApi($base . '/api/progresso.php?status_check=1');

$ms_total  = round((microtime(true) - $inicio_total) * 1000);
$tudo_ok   = array_reduce($checks, fn($carry, $c) => $carry && $c['ok'], true);
$agora     = date('d/m/Y \à\s H:i:s');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvid — Status</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #0f1117;
            color: #e2e8f0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .card {
            background: #1a1d2e;
            border: 1px solid #2d3148;
            border-radius: 16px;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 560px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.4);
        }

        .header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .globinho {
            font-size: 2.5rem;
            line-height: 1;
        }

        .header-text h1 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #fff;
        }

        .header-text p {
            font-size: 0.85rem;
            color: #7c85a8;
            margin-top: 2px;
        }

        .status-geral {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.25rem;
            border-radius: 10px;
            margin-bottom: 1.75rem;
            font-weight: 600;
            font-size: 1rem;
        }

        .status-geral.ok    { background: #0d2b1a; border: 1px solid #1a5c35; color: #4ade80; }
        .status-geral.erro  { background: #2b0d0d; border: 1px solid #5c1a1a; color: #f87171; }

        .checks { display: flex; flex-direction: column; gap: 0.6rem; }

        .check-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem 1rem;
            background: #12152a;
            border-radius: 8px;
            border: 1px solid #252840;
        }

        .check-nome { font-size: 0.9rem; color: #cbd5e1; }

        .check-dir {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .ms {
            font-size: 0.78rem;
            color: #475569;
        }

        .badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 20px;
        }

        .badge.ok    { background: #14532d; color: #4ade80; }
        .badge.erro  { background: #450a0a; color: #f87171; }

        .footer {
            margin-top: 1.75rem;
            text-align: center;
            font-size: 0.78rem;
            color: #475569;
        }

        .dot {
            width: 10px; height: 10px;
            border-radius: 50%;
            display: inline-block;
            flex-shrink: 0;
        }
        .dot.ok   { background: #4ade80; box-shadow: 0 0 8px #4ade80aa; }
        .dot.erro { background: #f87171; box-shadow: 0 0 8px #f87171aa; }
    </style>
    <!-- Auto-refresh a cada 60 segundos -->
    <meta http-equiv="refresh" content="60">
</head>
<body>
<div class="card">

    <div class="header">
        <div class="globinho">🌍</div>
        <div class="header-text">
            <h1>Duvid — Status</h1>
            <p>Monitoramento dos serviços em tempo real</p>
        </div>
    </div>

    <div class="status-geral <?= $tudo_ok ? 'ok' : 'erro' ?>">
        <span class="dot <?= $tudo_ok ? 'ok' : 'erro' ?>"></span>
        <?= $tudo_ok
            ? '✅ Todos os sistemas operando normalmente'
            : '⚠️ Um ou mais serviços com problema' ?>
    </div>

    <div class="checks">
        <?php foreach ($checks as $nome => $c): ?>
        <div class="check-row">
            <span class="check-nome"><?= htmlspecialchars($nome) ?></span>
            <div class="check-dir">
                <?php if ($c['ms'] !== null): ?>
                    <span class="ms"><?= $c['ms'] ?>ms</span>
                <?php endif; ?>
                <span class="badge <?= $c['ok'] ? 'ok' : 'erro' ?>">
                    <?= $c['ok'] ? 'Online' : 'Offline' ?>
                </span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="footer">
        Verificado em <?= $agora ?> · <?= $ms_total ?>ms no total<br>
        Atualiza automaticamente a cada 60 segundos
    </div>

</div>
</body>
</html>
