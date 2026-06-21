<?php
// Lê a senha do .env (nunca hardcoded no código)
$_env = @parse_ini_file(__DIR__ . '/../config/.env');
$senhaCorreta = $_env['GRUPOS_SENHA'] ?? '';
unset($_env);

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
    $senhaUsuario = $_POST["password"];

    if ($senhaCorreta && $senhaUsuario === $senhaCorreta) {
        header("Location: https://docs.google.com/spreadsheets/d/1QkOHFsXcyNu-qeCofxuarHj0NquQ1Arh2yXfi1nRD6M/edit?usp=sharing");
        exit();
    } else {
        $error_message = "Senha incorreta. Tente novamente.";
    }
} else {
    $error_message = "Erro ao processar a requisição.";
}
?>
