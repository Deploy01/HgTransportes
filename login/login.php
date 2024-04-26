<?php
require("../connect.php");


if (isset($_POST['doc_login']) || isset($_POST['senha_login'])){
    if(strlen($_POST['doc_login']) < 1) {
        echo "Preencha o seu documento";
    } else if(strlen($_POST['senha_login']) < 1) {
        echo "Preencha sua senha";
    } else {
        $documento = $con -> real_escape_string($_POST['doc_login']);
        $senha = $con -> real_escape_string($_POST['senha_login']);

        $sql__code = "SELECT * FROM userdata_cadastro WHERE doc = '$documento'";
        $sql__query = $con -> query($sql__code) or die("Falhou". $con -> error);

        $user = $sql__query->fetch_assoc();

        if(password_verify($senha, $user['senha']) && $user['doc'] == $documento){
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['logado'] = true;


        
            header('location:../index/index.php');
        } else {
            echo "FALHOU. EMAIL OU SENHA";
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HG Transportes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
</head>
<body>
    <main>
        <div class="container">
            <div class="logo">
                <a href="../index/index.php"><img src="../img/image.png" alt=""></a>
            </div>
            <div class="user-info">
                    <span>Fazer login</span>
                    <form method="post" action="">
                        <p>CPF ou CPNJ</p>
                        <input type="text" name="doc_login">
                        <div class="user-info-password">
                            <p>Senha</p>
                            <input type="password" name="senha_login">
                            <a href="">Esqueceu a senha?</a>
                        </div>
                        <div class="find-user">
                            <input type="submit" value="Fazer login" class="submitInput">
                        </div>
                    </form>
            </div>
            
            <span class="text-new-user">Novo na HG Transportes?</span>
            <div class="new-user">
                <a href="../cadastro/cadastro.php">Criar a sua conta na HG Transportes</a>
            </div>
        </div>
    </main>

</body>
</html>