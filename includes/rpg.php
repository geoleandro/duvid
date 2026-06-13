<?php
// =============================================================
//  includes/rpg.php
//  Funções RPG compartilhadas entre progresso.php e globinhos.php
// =============================================================

function calcularRPG(int $globinhos): array {
    $ranking = [
        ['lvl'=>1, 'patente'=>'NOVATO',          'min'=>0,     'max'=>1000 ],
        ['lvl'=>2, 'patente'=>'EXPLORADOR',       'min'=>1001,  'max'=>3500 ],
        ['lvl'=>3, 'patente'=>'CARTÓGRAFO',       'min'=>3501,  'max'=>8000 ],
        ['lvl'=>4, 'patente'=>'ESTRATEGISTA',     'min'=>8001,  'max'=>15000],
        ['lvl'=>5, 'patente'=>'GEÓGRAFO SÊNIOR',  'min'=>15001, 'max'=>20000],
        ['lvl'=>6, 'patente'=>'LENDA DA TERRA',   'min'=>20001, 'max'=>99999],
    ];
    $info = end($ranking);
    foreach ($ranking as $r) {
        if ($globinhos >= $r['min'] && $globinhos <= $r['max']) {
            $info = $r; break;
        }
    }
    return $info;
}
