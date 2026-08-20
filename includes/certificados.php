<?php
// =============================================================
//  includes/certificados.php
//
//  POR QUÊ ESTE ARQUIVO EXISTE?
//  Cada "Revisão" (aulas.tipo = 'revisao') já marca o fim natural
//  de um bloco de conteúdo — não precisamos de uma tabela nova pra
//  definir os blocos, só derivar isso da tabela `aulas` que já existe.
//
//  Dois tipos de certificado:
//   - 'bloco'  → o aluno concluiu (texto+questões) todas as aulas
//                desde o bloco anterior até uma Revisão, inclusive.
//   - 'modulo' → o aluno concluiu 100% das aulas de um ano_escolar
//                inteiro (Natureza / Brasil / Mundo).
//
//  Chame verificarCertificados($alunoId, $pdo) logo depois de salvar
//  uma conclusão de aula (mesmo lugar onde chamamos verificarConquistas).
// =============================================================

// Nomes amigáveis dos módulos, usados no título do certificado global
const CERT_NOME_MODULO = [
    1 => 'Natureza',
    2 => 'Brasil',
    3 => 'Mundo',
];

// -----------------------------------------------------------
// Deriva os blocos de cada ano a partir das aulas tipo='revisao'.
// Retorna: [ ano_escolar => [ ['revisao_id'=>.., 'titulo'=>.., 'aula_ids'=>[...]], ... ] ]
// -----------------------------------------------------------
function getBlocosPorAno(PDO $pdo): array {
    $aulas = $pdo->query(
        "SELECT id, titulo, ano_escolar, tipo FROM aulas ORDER BY ano_escolar, id"
    )->fetchAll();

    $blocos   = [];
    $atual    = [];
    $anoAtual = null;

    foreach ($aulas as $a) {
        $ano = (int)$a['ano_escolar'];
        if ($ano === 0) continue; // ignora aulas fora dos 3 anos (se houver)

        if ($anoAtual !== $ano) {
            $anoAtual = $ano;
            $atual    = [];
        }

        $atual[] = (int)$a['id'];

        if ($a['tipo'] === 'revisao') {
            $blocos[$anoAtual][] = [
                'revisao_id' => (int)$a['id'],
                'titulo'     => $a['titulo'],
                'aula_ids'   => $atual,
            ];
            $atual = [];
        }
    }

    return $blocos;
}

// -----------------------------------------------------------
// Verifica se algum bloco/módulo novo foi completado e grava em
// certificados_alunos. Retorna array com os certificados NOVOS
// (pra notificação no frontend), cada um com tipo, referencia e titulo.
// -----------------------------------------------------------
function verificarCertificados(int $alunoId, PDO $pdo): array {
    $novos = [];

    // Certificados que o aluno já tem (evita retrabalho/duplicidade)
    $stmt = $pdo->prepare("SELECT tipo, referencia FROM certificados_alunos WHERE aluno_id = :id");
    $stmt->execute([':id' => $alunoId]);
    $existentes = [];
    foreach ($stmt->fetchAll() as $r) {
        $existentes[$r['tipo'] . ':' . $r['referencia']] = true;
    }

    // Progresso do aluno por aula
    $stmt = $pdo->prepare(
        "SELECT aula_id, concluido_texto, concluido_questoes FROM progresso_aulas WHERE aluno_id = :id"
    );
    $stmt->execute([':id' => $alunoId]);
    $progresso = [];
    foreach ($stmt->fetchAll() as $r) {
        $progresso[(int)$r['aula_id']] = [
            'texto'    => (bool)$r['concluido_texto'],
            'questoes' => (bool)$r['concluido_questoes'],
        ];
    }

    // Quais aulas têm texto (revisões não têm — só cobram questões)
    $temTexto = [];
    foreach ($pdo->query("SELECT id, link_texto FROM aulas")->fetchAll() as $a) {
        $temTexto[(int)$a['id']] = $a['link_texto'] !== null;
    }

    $blocosPorAno = getBlocosPorAno($pdo);

    foreach ($blocosPorAno as $ano => $blocos) {
        $aulasDoAno = [];

        foreach ($blocos as $bloco) {
            $aulasDoAno = array_merge($aulasDoAno, $bloco['aula_ids']);

            $chave = 'bloco:' . $bloco['revisao_id'];
            if (isset($existentes[$chave])) continue;

            if (_blocoCompleto($bloco['aula_ids'], $progresso, $temTexto)) {
                $codigo = _gerarCodigoCertificado($pdo);
                $ins = $pdo->prepare(
                    "INSERT IGNORE INTO certificados_alunos (aluno_id, tipo, referencia, codigo) VALUES (:a, 'bloco', :r, :c)"
                );
                $ins->execute([':a' => $alunoId, ':r' => $bloco['revisao_id'], ':c' => $codigo]);
                $novos[] = [
                    'tipo'       => 'bloco',
                    'referencia' => $bloco['revisao_id'],
                    'titulo'     => $bloco['titulo'],
                ];
            }
        }

        // Módulo completo (100% do ano)
        $chaveModulo = 'modulo:' . $ano;
        if (!isset($existentes[$chaveModulo]) && _blocoCompleto($aulasDoAno, $progresso, $temTexto)) {
            $codigo = _gerarCodigoCertificado($pdo);
            $ins = $pdo->prepare(
                "INSERT IGNORE INTO certificados_alunos (aluno_id, tipo, referencia, codigo) VALUES (:a, 'modulo', :r, :c)"
            );
            $ins->execute([':a' => $alunoId, ':r' => $ano, ':c' => $codigo]);
            $novos[] = [
                'tipo'       => 'modulo',
                'referencia' => $ano,
                'titulo'     => CERT_NOME_MODULO[$ano] ?? ('Ano ' . $ano),
            ];
        }
    }

    return $novos;
}

// Gera um código de verificação de 8 caracteres hex, garantindo
// que não colida com um já existente (extremamente raro, mas checa).
function _gerarCodigoCertificado(PDO $pdo): string {
    for ($tentativa = 0; $tentativa < 5; $tentativa++) {
        $codigo = strtoupper(bin2hex(random_bytes(4)));
        $st = $pdo->prepare("SELECT 1 FROM certificados_alunos WHERE codigo = :c LIMIT 1");
        $st->execute([':c' => $codigo]);
        if (!$st->fetch()) return $codigo;
    }
    // Fallback improvável: adiciona timestamp pra garantir unicidade
    return strtoupper(substr(bin2hex(random_bytes(4)) . time(), 0, 8));
}

function _blocoCompleto(array $aulaIds, array $progresso, array $temTexto): bool {
    foreach ($aulaIds as $aid) {
        $p = $progresso[$aid] ?? ['texto' => false, 'questoes' => false];
        if (($temTexto[$aid] ?? false) && !$p['texto']) return false;
        if (!$p['questoes']) return false;
    }
    return true;
}
