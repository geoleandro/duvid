<?php
// =============================================================
//  paginas/certificado.php
//
//  Exibe (e permite imprimir) um certificado de bloco ou de módulo.
//  Acesso: o próprio aluno dono do certificado, OU um admin logado
//  visualizando com ?aluno_id=X (modo de conferência, sem precisar
//  "logar como aluno").
//
//  Rotas:
//   ?tipo=bloco&ref=<id da aula de revisão>
//   ?tipo=modulo&ref=<1|2|3>
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/certificados.php';

// -----------------------------------------------------------
// Autenticação: aluno dono OU admin em modo de conferência
// -----------------------------------------------------------
$_authIsLocal = in_array($_SERVER['SERVER_NAME'] ?? 'localhost', ['localhost', '127.0.0.1', '::1']);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', $_authIsLocal ? 'Strict' : 'Lax');
ini_set('session.cookie_secure', $_authIsLocal ? '0' : '1');
ini_set('session.cookie_domain', $_authIsLocal ? '' : '.duvid.com.br');
if (session_status() === PHP_SESSION_NONE) session_start();
unset($_authIsLocal);

$modoAdmin = !empty($_SESSION['admin_logado']) && !empty($_GET['aluno_id']);

if ($modoAdmin) {
    $alunoId = (int)$_GET['aluno_id'];
} elseif (!empty($_SESSION['aluno_id'])) {
    $alunoId = (int)$_SESSION['aluno_id'];
} else {
    header('Location: /home.php?login_required=1');
    exit;
}

$tipo = $_GET['tipo'] ?? '';
$ref  = (int)($_GET['ref'] ?? 0);

if (!in_array($tipo, ['bloco', 'modulo'], true) || !$ref) {
    http_response_code(400);
    die('Certificado inválido.');
}

$pdo = getDB();

// Confirma que o certificado realmente existe pra esse aluno
$stmt = $pdo->prepare(
    "SELECT conquistado_em, codigo FROM certificados_alunos
     WHERE aluno_id = :a AND tipo = :t AND referencia = :r LIMIT 1"
);
$stmt->execute([':a' => $alunoId, ':t' => $tipo, ':r' => $ref]);
$registro = $stmt->fetch();

if (!$registro) {
    http_response_code(404);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br"><head><meta charset="UTF-8"><title>Certificado não encontrado — Duvid</title></head>
    <body style="font-family:sans-serif; text-align:center; padding:80px 20px; color:#555;">
        <h1 style="color:#2e7d32;">Ainda não é dessa vez 🌱</h1>
        <p>Esse certificado ainda não foi conquistado — continue completando as aulas!</p>
        <a href="/home.php" style="color:#4caf50;">Voltar para o Duvid</a>
    </body></html>
    <?php
    exit;
}

$stmt = $pdo->prepare("SELECT nome, turma_id FROM alunos WHERE id = :id");
$stmt->execute([':id' => $alunoId]);
$aluno = $stmt->fetch();
if (!$aluno) { http_response_code(404); die('Aluno não encontrado.'); }

$anoEscolar = null;
$tituloBloco = null;

if ($tipo === 'bloco') {
    $stmt = $pdo->prepare("SELECT titulo, ano_escolar FROM aulas WHERE id = :id");
    $stmt->execute([':id' => $ref]);
    $aulaRevisao = $stmt->fetch();
    if (!$aulaRevisao) { http_response_code(404); die('Bloco não encontrado.'); }
    $tituloBloco = $aulaRevisao['titulo'];
    $anoEscolar  = (int)$aulaRevisao['ano_escolar'];
} else {
    $anoEscolar = $ref;
}

$nomeModulo = CERT_NOME_MODULO[$anoEscolar] ?? ('Ano ' . $anoEscolar);

if ($tipo === 'modulo') {
    $tituloPrincipal = 'Módulo ' . $nomeModulo . ' concluído';
    $subtitulo       = 'O(a) discente concluiu 100% das aulas do módulo ' . $nomeModulo . '.';
} else {
    $tituloPrincipal = $tituloBloco;
    $subtitulo       = 'O(a) discente concluiu textos e questões de todas as aulas deste bloco, no módulo ' . $nomeModulo . '.';
}

$dataFormatada = (new DateTime($registro['conquistado_em']))->format('d/m/Y');
$codigoVerificacao = $registro['codigo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Certificado — <?= htmlspecialchars($aluno['nome']) ?> — Duvid</title>
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Montserrat', sans-serif;
            background: #eef2ee;
            margin: 0;
            padding: 40px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .cert {
            background: #ffffff;
            width: 100%;
            max-width: 860px;
            border-radius: 20px;
            padding: 56px 64px;
            position: relative;
            box-shadow: 0 12px 40px rgba(0,0,0,.12);
            border: 10px solid #2e7d32;
            outline: 2px solid #4caf50;
            outline-offset: -20px;
        }
        .cert-topo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 8px;
        }
        .cert-logo-icon {
            width: 40px; height: 40px; border-radius: 10px;
            background: #2e7d32; color: #fff; font-weight: 800;
            display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
        }
        .cert-marca { font-weight: 800; color: #2e7d32; font-size: 1.1rem; letter-spacing: .02em; }
        .cert-selo { text-align: center; font-size: .72rem; letter-spacing: .18em; text-transform: uppercase; color: #9e9e9e; margin-bottom: 28px; }
        .cert-rotulo { text-align: center; font-size: .8rem; letter-spacing: .1em; text-transform: uppercase; color: #757575; margin-bottom: 6px; }
        .cert-nome { text-align: center; font-size: 2.1rem; font-weight: 800; color: #1c1b1b; margin: 0 0 20px; }
        .cert-frase { text-align: center; font-size: 1rem; color: #444; max-width: 560px; margin: 0 auto 6px; line-height: 1.55; }
        .cert-titulo-bloco { text-align: center; font-size: 1.35rem; font-weight: 800; color: #2e7d32; margin: 14px 0 20px; }
        .cert-rodape {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 44px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }
        .cert-rodape-bloco { font-size: .78rem; color: #757575; }
        .cert-rodape-bloco b { display: block; color: #1c1b1b; font-size: .92rem; }
        .cert-mascote { width: 64px; height: 64px; object-fit: contain; }
        .cert-acoes { text-align: center; margin-top: 28px; }
        .cert-btn {
            display: inline-block;
            background: #2e7d32; color: #fff; text-decoration: none;
            padding: 12px 28px; border-radius: 100px; font-weight: 700; font-size: .9rem;
            border: none; cursor: pointer;
        }
        .cert-voltar { display: inline-block; margin-left: 12px; color: #757575; text-decoration: none; font-size: .85rem; }
        @media print {
            body { background: #fff; padding: 0; }
            .cert { box-shadow: none; max-width: 100%; }
            .cert-acoes { display: none; }
        }
        @media (max-width: 640px) {
            .cert { padding: 32px 24px; }
            .cert-nome { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

    <div>
        <div class="cert">
            <div class="cert-topo">
                <div class="cert-logo-icon">D</div>
                <span class="cert-marca">Duvid Geografia</span>
            </div>
            <p class="cert-selo"><?= $tipo === 'modulo' ? 'Certificado de Módulo' : 'Certificado de Bloco' ?></p>

            <p class="cert-rotulo">Certificamos que</p>
            <p class="cert-nome"><?= htmlspecialchars($aluno['nome']) ?></p>

            <p class="cert-frase"><?= htmlspecialchars($subtitulo) ?></p>
            <p class="cert-titulo-bloco">🎓 <?= htmlspecialchars($tituloPrincipal) ?></p>

            <div class="cert-rodape">
                <div class="cert-rodape-bloco">
                    Concluído em<br><b><?= $dataFormatada ?></b>
                </div>
                <img class="cert-mascote" src="/fotoIndex/globinhoPe.png" alt="Globinho">
                <div class="cert-rodape-bloco" style="text-align:right;">
                    Código de verificação<br><b><?= $codigoVerificacao ?></b>
                </div>
            </div>
            <p style="text-align:center; font-size:.72rem; color:#9e9e9e; margin-top:18px;">
                Confira a autenticidade em duvid.com.br/paginas/verificar-certificado.php
            </p>
        </div>

        <div class="cert-acoes">
            <button class="cert-btn" onclick="window.print()">🖨️ Imprimir / Salvar como PDF</button>
            <a class="cert-voltar" href="/home.php">Voltar ao Duvid</a>
        </div>
    </div>

</body>
</html>
