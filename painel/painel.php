<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <?php include('../header/header.php'); ?>

    <p>Bem vindo ao painel, <?php echo $_SESSION['nome']; ?></p>
    <a href="../index/index.php">Pagina principal</a>

    <?php include('../footer/footer.php'); ?>
    
</body>
</html>

<!-- pagina em construção -->
<!-- fazer um style pra isso aqui -->
<!-- deixar usuario editar nome||documento||senha||etc... -->