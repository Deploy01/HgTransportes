<?php 
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | HG Transportes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <div class="container">
            <div class="logo">
                <a href="../index.php"><img src="../img/image.png" alt=""></a>
            </div>
            <div class="user-info">
                <span>Criar conta</span>
                <form method="post" action="cadastro.act.php">
                    <p>Seu nome</p>
                    <label for=""></label>
                    <input type="text" name="nome" id="nome" placeholder="Seu nome e sobrenome">
                    <p>E-mail</p>
                    <input type="text" name="email" id="email">
                    <p>CPF ou CPNJ</p>
                    <input type="text" name="doc" id="doc">
                    <div class="user-info-password">

                        <p>Senha</p>
                        <input type="password" name="senha" class="senha">
                        <div class="alert">
                            Sua senha deve ter 7 caracteres ou mais
                        </div>
                        <p>Repita mais uma vez sua senha</p>
                        <input type="password" name="confimacaoSenha" class="senha">

                    </div>
                    <div class="find-user">
                        <input type="submit" class="find__user__input">
                    </div>
                </form>
            </div>
            <span class="text-new-user">Já tem uma conta?</span>
            <div class="new-user">
                <a href="../login/login.php">Fazer login</a>
            </div>
        </div>
    </main>

    
</body>
</html>

<!-- verificar @ de email -->
<!-- criptografar dados (documento)-->
<!-- style se repetir senha falhou -->
<!-- necessario colocar todos os dados, não só cpf e senha. -->