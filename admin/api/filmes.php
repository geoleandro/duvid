<?php
// =============================================================
//  admin/api/filmes.php  —  Edição de imagem/nota dos filmes
//  Protegido por sessão: só admins chegam aqui.
//  Fonte de dados: /js/filmes-geografia.json (arquivo, não banco)
// =============================================================
require_once __DIR__ . '/../../admin/auth.php';

header('Content-Type: application/json; charset=utf-8');

define('FILMES_JSON', __DIR__ . '/../../js/filmes-geografia.json');

function ler_filmes(): array {
    if (!file_exists(FILMES_JSON)) return [];
    $conteudo = file_get_contents(FILMES_JSON);
    $dados = json_decode($conteudo, true);
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

$body = json_decode(file_get_contents('php://input'), true) ?? [];
$acao = $body['acao'] ?? '';

// ── Listar (útil para depurar / recarregar sem reload de página) ──
if ($acao === 'listar') {
    echo json_encode(['ok' => true, 'filmes' => ler_filmes()]);
    exit;
}

// ── Atualizar imagem/nota de um filme ──────────────────────────
if ($acao === 'atualizar') {
    $id = trim((string)($body['id'] ?? ''));
    if ($id === '') {
        echo json_encode(['erro' => 'ID do filme não informado.']);
        exit;
    }

    $filmes = ler_filmes();
    if (!isset($filmes[$id])) {
        echo json_encode(['erro' => 'Filme não encontrado.']);
        exit;
    }

    // Imagem: aceita URL http(s) ou caminho local começando com /
    if (array_key_exists('imagem', $body)) {
        $imagem = trim((string)$body['imagem']);
        if ($imagem !== '' && !preg_match('#^(https?://|/)#i', $imagem)) {
            echo json_encode(['erro' => 'Imagem deve ser uma URL (http/https) ou um caminho começando com /.']);
            exit;
        }
        $filmes[$id]['imagem'] = $imagem;
    }

    // Nota: número entre 0 e 10 (aceita vírgula ou ponto), ou vazio para limpar
    if (array_key_exists('nota', $body)) {
        $notaRaw = $body['nota'];
        if ($notaRaw === '' || $notaRaw === null) {
            $filmes[$id]['nota'] = null;
        } else {
            $nota = (float) str_replace(',', '.', (string)$notaRaw);
            if ($nota < 0 || $nota > 10) {
                echo json_encode(['erro' => 'Nota deve estar entre 0 e 10.']);
                exit;
            }
            $filmes[$id]['nota'] = round($nota, 1);
        }
    }

    // Posição vertical da imagem: 0 (topo) a 100 (base), padrão 50 (centro)
    if (array_key_exists('posicao', $body)) {
        $posicaoRaw = $body['posicao'];
        if ($posicaoRaw === '' || $posicaoRaw === null) {
            $filmes[$id]['posicao'] = 50;
        } else {
            $posicao = (int) $posicaoRaw;
            if ($posicao < 0 || $posicao > 100) {
                echo json_encode(['erro' => 'Posição deve estar entre 0 e 100.']);
                exit;
            }
            $filmes[$id]['posicao'] = $posicao;
        }
    }

    if (!salvar_filmes($filmes)) {
        http_response_code(500);
        echo json_encode(['erro' => 'Falha ao salvar o arquivo de filmes.']);
        exit;
    }

    echo json_encode(['ok' => true, 'mensagem' => 'Filme atualizado com sucesso.', 'filme' => $filmes[$id]]);
    exit;
}

echo json_encode(['erro' => 'Ação desconhecida.']);
