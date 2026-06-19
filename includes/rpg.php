<?php
// =============================================================
//  includes/rpg.php
//  Funções RPG compartilhadas entre progresso.php e globinhos.php
// =============================================================

function calcularRPG(int $globinhos): array {
    $ranking = [
        ['lvl'=>1, 'patente'=>'NOVATO',          'min'=>0,     'max'=>1499 ],
        ['lvl'=>2, 'patente'=>'EXPLORADOR',       'min'=>1500,  'max'=>3499 ],
        ['lvl'=>3, 'patente'=>'CARTÓGRAFO',       'min'=>3500,  'max'=>6499 ],
        ['lvl'=>4, 'patente'=>'ESTRATEGISTA',     'min'=>6500,  'max'=>9499 ],
        ['lvl'=>5, 'patente'=>'GEÓGRAFO SÊNIOR',  'min'=>9500,  'max'=>12999],
        ['lvl'=>6, 'patente'=>'LENDA DA TERRA',   'min'=>13000, 'max'=>99999],
    ];
    $info = end($ranking);
    foreach ($ranking as $r) {
        if ($globinhos >= $r['min'] && $globinhos <= $r['max']) {
            $info = $r; break;
        }
    }
    return $info;
}
