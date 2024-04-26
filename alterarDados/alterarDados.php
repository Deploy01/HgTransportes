    <?php
        extract($_POST);
        require("../connect.php");
        require("../login/sec.php");
        
        $id = $_GET['id'];
        if($_SESSION['id'] != $id) {

            die("Você não tem permissão");

        }
        
        $userQuery = mysqli_query($con, "SELECT * FROM `userdata_cadastro` WHERE `id` = '$id'");
        $user = mysqli_fetch_assoc($userQuery);

    ?>

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


    <main>
        <div class="container">
            <div class="logo">
                <a href="../index/index.php"><img src="../img/image.png" alt=""></a>
            </div>
            <div class="user-info">
                    <span>Alterar dados</span>
                    <form method="post" action="alterarDados.act.php">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <p>Nome: </p>
                        <input type="text" name="nome" value="<?php echo $user['nome']; ?>">

                        <p>Email: </p>
                        <input type="text" name="email" value="<?php echo $user['email']; ?>" readonly>

                        <p>Documento: </p>
                        <input type="text" name="doc" value="<?php echo $user['doc']; ?>" readonly>
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

