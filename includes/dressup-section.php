<?php
// =============================================================
//  includes/dressup-section.php
//
//  Helper para incorporar o Globinho Dress Up no final de um
//  texto de aula. Duas formas de uso:
//
//  1) Via função PHP (recomendado):
//     <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/dressup-section.php'; ?>
//     <?php globinhoDressUp('cartografia', $aluno_id); ?>
//
//  2) Via div com data-attributes (JS detecta automaticamente):
//     <div class="globinho-dressup"
//          data-tema="cartografia"
//          data-aluno="<?= $aluno_id ?? 0 ?>"></div>
//     <!-- o script globinho-dressup.js inicializa na DOMContentLoaded -->
//
//  Temas disponíveis: cartografia | africa | clima | hidrografia | biogeografia
// =============================================================

/**
 * Renderiza a seção Dress Up ao final da aula.
 *
 * @param string   $tema     chave do tema (ex: 'cartografia')
 * @param int|null $alunoId  id do aluno logado; null = visitante
 */
function globinhoDressUp($tema = 'cartografia', $alunoId = null)
{
    $temas_validos = ['cartografia', 'africa', 'clima', 'hidrografia', 'biogeografia'];
    if (!in_array($tema, $temas_validos, true)) {
        $tema = 'cartografia';
    }

    $aluno_attr = $alunoId ? ' data-aluno="' . (int)$alunoId . '"' : '';

    echo '<!-- Globinho Dress Up: ' . $tema . ' -->' . "\n";
    echo '<section class="gdu-section-wrapper" aria-label="Atividade: Vista o Globinho">' . "\n";
    echo '  <div class="globinho-dressup" data-tema="' . $tema . '"' . $aluno_attr . '></div>' . "\n";
    echo '</section>' . "\n";
    echo '<script src="/js/globinho-dressup.js" defer></script>' . "\n";
}
