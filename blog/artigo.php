<?php include 'posts.php'; ?>
<?php
$artigo_id = $_GET['id'] ?? null;
$artigo_p = null;

if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($artigo_id) ) {
    header("Location:". dirname($_SERVER['PHP_SELF']) ."/blog.php");
    exit();
}

foreach ($artigos as $artigo) {
    if ($artigo['id'] == $artigo_id) {
        $artigo_p = $artigo;
        $artigo_p['post'] = $artigos[0]['post'];
        break;
    }
}

if(!$artigo_p) {
    header("Location:". dirname($_SERVER['PHP_SELF']) ."/blog.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include '../views/header.php'; ?>

    <div class="w3-container w3-padding-32">
        <h1><?php echo $artigo_p['titulo']; ?></h1>
        <p><?php echo $artigo_p['post']; ?></p>
        <p><em>Publicado em: <?php echo $artigo_p['data']; ?></em></p>  
    </div>

    <?php include '../views/footer.php'; ?>
    
</body>
</html>

