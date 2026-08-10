<?php
// =============================================================
//  admin/api/upload-filme.php  —  Upload do banner de um filme
//  Protegido por sessão: só admins chegam aqui.
//  Salva o arquivo em /fotoIndex/filmes/ e grava o caminho
//  no campo "imagem" de /js/filmes-geografia.json
// =============================================================
require_once __DIR__ . '/../../admin/auth.php';

header('Content-Type: application/json; charset=utf-8');

define('FILMES_JSON', __DIR__ . '/../../js/filmes-geografia.json');
define('PASTA_UPLOAD', __DIR__ . '/../../fotoIndex/filmes/');
define('URL_UPLOAD', '/fotoIndex/filmes/');

function ler_filmes(): array {
    if (!file_exists(FILMES_JSON)) return [];
    $dados = json_decode(file_get_contents(FILMES_JSON), true);
    return is_array($dados) ? $dados : [];
}

function salvar_filmes(array $dados): bool {
    $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) return false;
    return file_put_contents(FILMES_JSON, $json . "\n", LOCK_EX) !== false;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não suportado.']);
    exit;
}

$id = trim((string)($_POST['id'] ?? ''));
if ($id === '' || !preg_match('/^[a-z0-9\-]+$/', $id)) {
    echo json_encode(['erro' => 'ID do filme inválido.']);
    exit;
}

$filmes = ler_filmes();
if (!isset($filmes[$id])) {
    echo json_encode(['erro' => 'Filme não encontrado.']);
    exit;
}

if (empty($_FILES['imagem']) || $_FILES['imagem']['error'] !== UPLOAD_ERR_OK) {
    $codigo = $_FILES['imagem']['error'] ?? 'nenhum arquivo enviado';
    echo json_encode(['erro' => "Falha no upload (código $codigo)."]);
    exit;
}

$arquivo = $_FILES['imagem'];

// Limite: 4 MB
if ($arquivo['size'] > 4 * 1024 * 1024) {
    echo json_encode(['erro' => 'Arquivo maior que 4 MB. Comprima a imagem antes de enviar.']);
    exit;
}

// Valida que é uma imagem de verdade e detecta o tipo real (não confia na extensão enviada)
$info = @getimagesize($arquivo['tmp_name']);
if ($info === false) {
    echo json_encode(['erro' => 'O arquivo enviado não é uma imagem válida.']);
    exit;
}

$mimesPermitidos = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
];
$mime = $info['mime'];
if (!isset($mimesPermitidos[$mime])) {
    echo json_encode(['erro' => 'Formato não suportado. Use JPG, PNG ou WebP.']);
    exit;
}
$extensao = $mimesPermitidos[$mime];

if (!is_dir(PASTA_UPLOAD)) {
    mkdir(PASTA_UPLOAD, 0755, true);
}

// Remove versões antigas do mesmo filme em outras extensões (evita lixo acumulado)
foreach (['jpg', 'png', 'webp'] as $ext) {
    $antigo = PASTA_UPLOAD . $id . '.' . $ext;
    if (file_exists($antigo)) @unlink($antigo);
}

$nomeArquivo = $id . '.' . $extensao;
$destino = PASTA_UPLOAD . $nomeArquivo;

if (!move_uploaded_file($arquivo['tmp_name'], $destino)) {
    http_response_code(500);
    echo json_encode(['erro' => 'Falha ao salvar o arquivo no servidor.']);
    exit;
}

// Cache-busting: garante que a nova imagem apareça mesmo com cache do navegador
$caminhoPublico = URL_UPLOAD . $nomeArquivo . '?v=' . time();

$filmes[$id]['imagem'] = $caminhoPublico;
if (!salvar_filmes($filmes)) {
    http_response_code(500);
    echo json_encode(['erro' => 'Imagem salva, mas houve falha ao atualizar o JSON.']);
    exit;
}

echo json_encode([
    'ok'      => true,
    'mensagem'=> 'Imagem enviada com sucesso.',
    'imagem'  => $caminhoPublico,
    'largura' => $info[0],
    'altura'  => $info[1],
]);
