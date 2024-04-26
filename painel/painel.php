<?php 
    require('../connect.php');
    extract($_POST);

    $id = $_GET['id'];
    $user = mysqli_query($con, "SELECT * FROM userdata_cadastro");
    $userId = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>
    
    <?php include('../header/header.php'); ?>
    
    <input type="hidden" name="id" value="<?php $id ?>">
    <p>Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>!</p>
    <a href="../alterarDados/alterarDados.php?id=<?php echo $id ?>">Alterar dados</a>"; 
    
    <a href="../index/index.php">Pagina principal</a>

    <?php include('../footer/footer.php'); ?>
    
</body>
</html>

<!-- pagina em construção -->
<!-- fazer um style pra isso aqui -->
<!-- deixar usuario editar nome||documento||senha||etc... -->