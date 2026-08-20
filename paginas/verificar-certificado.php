<?php
// =============================================================
//  paginas/verificar-certificado.php
//
//  Página pública (sem login) — qualquer pessoa com o código de
//  8 caracteres impresso num certificado pode conferir se é legítimo.
//  Não expõe e-mail, turma ou qualquer outro dado do aluno — só o
//  necessário pra confirmar autenticidade: nome, o que foi concluído
//  e quando.
// =============================================================

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/certificados.php';

$pdo = getDB();

$codigo = strtoupper(trim($_GET['codigo'] ?? ''));
// Só aceita o formato esperado (8 caracteres hex) — evita query desnecessária
$codigoValido = (bool)preg_match('/^[A-F0-9]{8}$/', $codigo);

$resultado = null;
if ($codigo !== '' && $codigoValido) {
    $stmt = $pdo->prepare(
        "SELECT c.tipo, c.referencia, c.conquistado_em, a.nome
         FROM certificados_alunos c
         JOIN alunos a ON a.id = c.aluno_id
         WHERE c.codigo = :codigo LIMIT 1"
    );
    $stmt->execute([':codigo' => $codigo]);
    $row = $stmt->fetch();

    if ($row) {
        $tituloRef = null;
        if ($row['tipo'] === 'modulo') {
            $tituloRef = 'Módulo ' . (CERT_NOME_MODULO[(int)$row['referencia']] ?? $row['referencia']);
        } else {
            $st = $pdo->prepare("SELECT titulo FROM aulas WHERE id = :id");
            $st->execute([':id' => $row['referencia']]);
            $tituloRef = $st->fetchColumn() ?: ('Bloco #' . $row['referencia']);
        }
        $resultado = [
            'valido'   => true,
            'nome'     => $row['nome'],
            'titulo'   => $tituloRef,
            'data'     => (new DateTime($row['conquistado_em']))->format('d/m/Y'),
        ];
    } else {
        $resultado = ['valido' => false];
    }
} elseif ($codigo !== '' && !$codigoValido) {
    $resultado = ['valido' => false];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Certificado — Duvid</title>
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Montserrat', sans-serif;
            background: #eef2ee;
            margin: 0;
            padding: 60px 16px;
            display: flex;
            justify-content: center;
        }
        .box {
            background: #fff;
            width: 100%;
            max-width: 480px;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 28px rgba(0,0,0,.08);
        }
        .marca { text-align: center; font-weight: 800; color: #2e7d32; margin-bottom: 4px; }
        h1 { text-align: center; font-size: 1.2rem; margin: 0 0 24px; color: #1c1b1b; }
        form { display: flex; gap: 8px; margin-bottom: 20px; }
        input[type=text] {
            flex: 1; padding: 12px 14px; border: 1.5px solid #ddd; border-radius: 10px;
            font-size: 1rem; letter-spacing: .08em; text-transform: uppercase; font-family: inherit;
        }
        button {
            background: #2e7d32; color: #fff; border: none; border-radius: 10px;
            padding: 0 20px; font-weight: 700; cursor: pointer; font-size: .9rem;
        }
        .resultado { border-radius: 14px; padding: 18px; font-size: .92rem; line-height: 1.6; }
        .valido    { background: #e8f5e9; color: #1b5e20; border: 1px solid #a5d6a7; }
        .invalido  { background: #ffebee; color: #b71c1c; border: 1px solid #ef9a9a; }
        .voltar { display:block; text-align:center; margin-top:20px; color:#757575; font-size:.82rem; text-decoration:none; }
    </style>
</head>
<body>
    <div class="box">
        <p class="marca">Duvid Geografia</p>
        <h1>🔎 Verificar certificado</h1>

        <form method="GET">
            <input type="text" name="codigo" maxlength="8" placeholder="CÓDIGO (8 caracteres)"
                   value="<?= htmlspecialchars($codigo) ?>" autofocus>
            <button type="submit">Verificar</button>
        </form>

        <?php if ($resultado && $resultado['valido']): ?>
            <div class="resultado valido">
                ✅ <b>Certificado válido.</b><br>
                <b><?= htmlspecialchars($resultado['nome']) ?></b> concluiu<br>
                <b><?= htmlspecialchars($resultado['titulo']) ?></b><br>
                em <?= $resultado['data'] ?>.
            </div>
        <?php elseif ($resultado && !$resultado['valido']): ?>
            <div class="resultado invalido">
                ❌ <b>Código não encontrado.</b><br>
                Confira se digitou certo — o código tem 8 caracteres, sem espaços.
            </div>
        <?php endif; ?>

        <a class="voltar" href="/home.php">← Voltar ao Duvid</a>
    </div>
</body>
</html>
