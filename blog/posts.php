<?php
$artigos = [
    [
        'id' => 1,
        'titulo' => 'O Impacto Destrutivo da Competição nas Escolas: A Cultura Nociva do “Melhor Aluno”',
        'descricao' => 'Desde cedo, somos ensinados a competir...',
        'data' => '18 de maio de 2024',
        'imagem' => 'artigo08f01.jpg',
        'link' => 'artigo08/o-impacto-destrutivo-da-competicao-nas-escolas-a-cultura-nociva-do-melhor-aluno.html',
        'categoria' => 'Educação',
    ],
    [
        'id' => 2,
        'titulo' => 'A Sociedade Só Valoriza a Escola Quando Lhe Convém',
        'descricao' => 'Vivemos em uma sociedade que frequentemente proclama a importância da educação. Os pais, as autoridades e os meios de comunicação exaltam o valor da escola ...',
        'data' => '14 de maio de 2024',
        'imagem' => 'artigo07f01.jpg',
        'link' => 'artigo07/a-sociedade-so-valoriza-a-escola-quando-lhe-convem.html',
        'categoria' => 'Educação',
    ],
    [
        'id' => 3,
        'titulo' => 'Ser Sócio de Empresas Estatais: Uma Escolha Estratégica',
        'descricao' => 'No atual cenário, o debate entre a privatização e a manutenção das empresas estatais está em destaque. O povo brasileiro pode e deve participar da geração de riqueza do país...',
        'data' => '10 de maio de 2024',
        'imagem' => 'artigo06f01.jpg',
        'link' => 'artigo06/ser-socio-de-empresas-estatais-uma-escolha-estrategica.html',
        'categoria' => 'Finanças',
    ],
    [
        'id' => 4,
        'titulo' => 'Ser Revolucionário ou Reformista: Qual é a Melhor Opção?',
        'descricao' => 'Na jornada das ideias políticas e sociais, duas visões se destacam: ser revolucionário ou reformista. Qual delas é a melhor?',
        'data' => '05 de maio de 2024',
        'imagem' => 'artigo05f01.jpg',
        'link' => 'artigo05/ser-revolucionario-reformista-qual-melhor.html',
        'categoria' => 'Filosofia',
    ],
    [
        'id' => 5,
        'titulo' => 'Neste mundo (financeiro) nada irá te salvar, nem mesmo o Bitcoin!',
        'descricao' => 'O Bitcoin é nova promessa de liberdade econômica atual. A promessa de que uma moeda promoverá uma mudança tão radical na sociedade que...',
        'data' => '27 de abril de 2024',
        'imagem' => 'artigo04f01.jpg',
        'link' => 'artigo04/neste-mundo-financeiro-nada-ira-te-salvar-nem-mesmo-o-bitcoin.html',
        'categoria' => 'Finanças',
    ],
    [
        'id' => 6,
        'titulo' => 'A nossa Guerra de cada dia',
        'descricao' => 'A todo momento, o temor de uma Terceira Guerra Mundial surge na mídia e se prolonga por alguns dias ou até semanas, e isso tem se repetido há muito tempo. No entanto, o que não é suficiente para...',
        'data' => '20 de abril de 2024',
        'imagem' => 'artigo03f01.jpg',
        'link' => 'artigo03/nossa-guerra-cada-dia.html',
        'categoria' => 'Filosofia',
    ],
    [
        'id' => 7,
        'titulo' => 'Situações que me fizeram desistir de ser professor',
        'descricao' => 'Fiz apenas um relato, dos inúmeros que um professor enfrenta em seu cotidiano. As dificuldades de lidar com a realidade das escolas públicas...',
        'data' => '14 de abril de 2024',
        'imagem' => 'artigo02f01.jpg',
        'link' => 'artigo02/situacoes-desistir-ser-professor.html',
        'categoria' => 'Educação',
    ],
    [
        'id' => 8,
        'titulo' => '5 Razões Pelas Quais Muitos Estudantes Não Gostam da Escola',
        'descricao' => 'A escola é um lugar de aprendizado, crescimento e descobertas, mas para muitos estudantes, pode ser um ambiente desafiador...',
        'data' => '7 de abril de 2024',
        'imagem' => 'artigo01f01.jpg',
        'link' => 'artigo01/razoes-estudantes-nao-gostam-escola.html',
        'categoria' => 'Educação',
    ],
    // Novo artigo adicionado
    [
        'id' => 9,
        'titulo' => 'A Importância da Arte na Educação Infantil',
        'descricao' => 'A arte desempenha um papel crucial no desenvolvimento cognitivo e emocional das crianças.',
        'data' => '25 de maio de 2024',
        'imagem' => 'artigo09f01.jpg',
        'link' => 'artigo09/a-importancia-da-arte-na-educacao-infantil.html',
        'categoria' => 'Arte',
    ],
];


// Função para inserir artigos
// function inserirArtigo($conn, $artigo) {
//     $sql = "INSERT INTO posts (titulo, descricao, data, imagem, link, categoria) VALUES (?, ?, ?, ?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ssssss", $artigo['titulo'], $artigo['descricao'], $artigo['data'], $artigo['imagem'], $artigo['link'], $artigo['categoria']);
    
//     if ($stmt->execute()) {
//         echo "Artigo inserido com sucesso: " . $artigo['titulo'] . "<br>";
//     } else {
//         echo "Erro ao inserir artigo: " . $conn->error . "<br>";
//     }
//     $stmt->close();
// }

// Inserir cada artigo
// foreach ($artigos as $artigo) {
//     inserirArtigo($conn, $artigo);
// }

// $conn->close();


// if ($conn){
//     echo "Conexão realizada com sucesso!";
// }
?>

