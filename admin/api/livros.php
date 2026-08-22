<?php
// =============================================================
//  admin/api/livros.php  —  Edição de capa dos livros sugeridos
//  Protegido por sessão admin.
//  Fonte de dados: /js/livros.json (arquivo, não banco)
// =============================================================
require_once __DIR__ . '/../../admin/auth.php';

header('Content-Type: application/json; charset=utf-8');

define('LIVROS_JSON', __DIR__ . '/../../js/livros.json');

function ler_livros(): array {
    if (!file_exists(LIVROS_JSON)) return [];
    $dados = json_decode(file_get_contents(LIVROS_JSON), true);
    return is_array($dados) ? $dados : [];
}

function salvar_livros(array $dados): bool {
    $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) return false;
    return file_put_contents(LIVROS_JSON, $json . "\n", LOCK_EX) !== false;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não suportado.']);
    exit;
}

$body = json_decode(file_get_contents('php://input'), true) ?? [];
$acao = $body['acao'] ?? '';

if ($acao === 'atualizar') {
    $id = trim((string)($body['id'] ?? ''));
    if ($id === '') {
        echo json_encode(['erro' => 'ID do livro não informado.']);
        exit;
    }

    $livros = ler_livros();
    if (!isset($livros[$id])) {
        echo json_encode(['erro' => 'Livro não encontrado.']);
        exit;
    }

    if (array_key_exists('capa', $body)) {
        $capa = trim((string)$body['capa']);
        if ($capa !== '' && !preg_match('#^(https?://|/)#i', $capa)) {
            echo json_encode(['erro' => 'Capa deve ser uma URL (http/https) ou caminho começando com /.']);
            exit;
        }
        $livros[$id]['capa'] = $capa === '' ? null : $capa;
    }

    if (!salvar_livros($livros)) {
        http_response_code(500);
        echo json_encode(['erro' => 'Falha ao salvar o arquivo de livros.']);
        exit;
    }

    echo json_encode(['ok' => true, 'mensagem' => 'Livro atualizado.', 'livro' => $livros[$id]]);
    exit;
}

echo json_encode(['erro' => 'Ação desconhecida.']);
