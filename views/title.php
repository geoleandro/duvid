<?php

include_once("config.php");

$titles = array(

    "/duvid/" => "Duvid - Home",
    "/duvid/blog/blog.php" => "Duvid - Blog",
   
    "/duvid/pages/duvid1ano.php" => "Duvid - 1º ano",
    "/duvid/pages/duvid2ano.php" => "Duvid - 2º ano",
    "/duvid/pages/duvid3ano.php" => "Duvid - 3º ano",
    
    "/duvid/pages/sobre.php" => "Duvid - Sobre",
    "/duvid/pages/instrucoesgerais.php" => "Duvid - Instruções Gerais",
    "/duvid/pages/creditos.php" => "Duvid - Créditos",
    "/duvid/pages/politicaprivacidade.php" => "Duvid - Política de Privacidade",
    "/duvid/pages/livrosgeografia.php" => "Duvid - Livros de Geografia"


    // Adicione mais títulos conforme necessário
);


// Obtém a URL atual
$current_url = $_SERVER['REQUEST_URI'];

// Determinar o título com base na página atual ou lógica personalizada
if (!empty($current_url)) {
    // Verifica se há um título definido para a página atual no array de títulos
    if (array_key_exists($current_url, $titles)) {
        $title = $titles[$current_url];
    } else {
        // Caso contrário, gera um título com base no nome da página
        $pageName = ucfirst(basename($current_url, '.php')); // Obtém o nome do arquivo sem a extensão .php e capitaliza o nome
        $title = "Duvid - $pageName";
    }
} else {
    $title = "Duvid - Home"; // Define um título padrão para a página inicial
}
