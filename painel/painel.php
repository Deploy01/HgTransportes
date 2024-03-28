<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>Bem vindo ao painel, <?php echo $_SESSION['nome']; ?></p>
    <a href="../index/index.php">Pagina principal</a>
</body>
</html>

<!-- pagina em construção -->
<!-- fazer um style pra isso aqui -->
<!-- deixar usuario editar nome||documento||senha||etc... -->