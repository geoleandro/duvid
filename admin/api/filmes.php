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

// Executa leitura + alteração + gravação com o arquivo travado do início ao fim,
// evitando que dois salvamentos simultâneos (ex.: auto-save da posição + outro campo)
// se sobrescrevam e "percam" uma alteração.
// $alterar recebe $dados por referência e deve retornar true (grava) ou false (aborta,
// nada é escrito — usado quando a validação falha no meio do caminho).
function com_arquivo_travado(callable $alterar) {
    if (!file_exists(FILMES_JSON)) file_put_contents(FILMES_JSON, "{}\n");
    $handle = fopen(FILMES_JSON, 'r+');
    if (!$handle || !flock($handle, LOCK_EX)) {
        if ($handle) fclose($handle);
        http_response_code(500);
        echo json_encode(['erro' => 'Não foi possível travar o arquivo de filmes.']);
        exit;
    }
    $conteudo = stream_get_contents($handle);
    $dados = json_decode($conteudo, true);
    if (!is_array($dados)) $dados = [];

    $pode_gravar = $alterar($dados);

    if ($pode_gravar) {
        $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        ftruncate($handle, 0);
        rewind($handle);
        fwrite($handle, $json . "\n");
        fflush($handle);
    }
    flock($handle, LOCK_UN);
    fclose($handle);
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

    $erro = null;
    $filmeSalvo = null;

    com_arquivo_travado(function (&$filmes) use ($id, $body, &$erro, &$filmeSalvo) {
        if (!isset($filmes[$id])) {
            $erro = 'Filme não encontrado.';
            return false;
        }

        // Validação primeiro (sem tocar em $filmes), gravação só acontece
        // se tudo passar — evita salvar um estado parcial no meio do caminho.
        $novaImagem = null;
        $temImagem = array_key_exists('imagem', $body);
        if ($temImagem) {
            $novaImagem = trim((string)$body['imagem']);
            if ($novaImagem !== '' && !preg_match('#^(https?://|/)#i', $novaImagem)) {
                $erro = 'Imagem deve ser uma URL (http/https) ou um caminho começando com /.';
                return false;
            }
        }

        $novaNota = null;
        $temNota = array_key_exists('nota', $body);
        if ($temNota) {
            $notaRaw = $body['nota'];
            if ($notaRaw !== '' && $notaRaw !== null) {
                $novaNota = (float) str_replace(',', '.', (string)$notaRaw);
                if ($novaNota < 0 || $novaNota > 10) {
                    $erro = 'Nota deve estar entre 0 e 10.';
                    return false;
                }
                $novaNota = round($novaNota, 1);
            }
        }

        $novaPosicao = 50;
        $temPosicao = array_key_exists('posicao', $body);
        if ($temPosicao) {
            $posicaoRaw = $body['posicao'];
            if ($posicaoRaw !== '' && $posicaoRaw !== null) {
                $novaPosicao = (int) $posicaoRaw;
                if ($novaPosicao < 0 || $novaPosicao > 100) {
                    $erro = 'Posição deve estar entre 0 e 100.';
                    return false;
                }
            }
        }

        // Tudo validado: aplica de fato.
        if ($temImagem)  $filmes[$id]['imagem']  = $novaImagem;
        if ($temNota)    $filmes[$id]['nota']    = $novaNota;
        if ($temPosicao) $filmes[$id]['posicao'] = $novaPosicao;

        $filmeSalvo = $filmes[$id];
        return true;
    });

    if ($erro !== null) {
        echo json_encode(['erro' => $erro]);
        exit;
    }

    echo json_encode(['ok' => true, 'mensagem' => 'Filme atualizado com sucesso.', 'filme' => $filmeSalvo]);
    exit;
}

echo json_encode(['erro' => 'Ação desconhecida.']);
