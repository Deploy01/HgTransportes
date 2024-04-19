

<body>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados | HG Transportes</title>
    <link rel="stylesheet" href="../login/style.css">

    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
        session_start();
        extract($_POST);
        require("../connect.php");

        $id = isset($_GET['id']);
        
        $userQuery = mysqli_query($con, "SELECT * FROM `userdata_cadastro` WHERE `id` = '$id'");
        $user = mysqli_fetch_assoc($userQuery);

    ?>


    <main>
        <div class="container">
            <div class="logo">
                <a href="../index/index.php"><img src="../img/image.png" alt=""></a>
            </div>
            <div class="user-info">
                    <span>Alterar dados</span>
                    <form method="post" action="alterarDados.act.php">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">    
                        <p>Nome: </p>
                        <input type="text" name="nome" value="<?php echo $user['nome']; ?>">
                        <div class="user-info-password">
                            <p>Senha</p>
                            <input type="password" name="senha">
                        </div>
                        <div class="find-user">
                            <input type="submit" value="Alterar" class="submitInput">
                        </div>
                    </form>
            </div>
        </div>
    </main>

</body>
</html>
</body>
</html>