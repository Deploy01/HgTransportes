<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    Bem vindo ao painel <?php echo $_SESSION['nome']; ?>
    <a href="./index.php">Pagina principal</a>
</body>
</html>

<!-- pagina em construção -->
<!-- fazer um style pra isso aqui -->
<!-- editar nome||documento||senha||etc... -->