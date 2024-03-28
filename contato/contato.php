<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | HG Transportes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("../header/header.php");?>

    <article id="informacoes-usuario">
        <form action="contatoVerificar.act.php" method="post">
            <span>ENTRE EM CONTATO</span>
            <div class="container-article">
                <div class="text-box">
                    <h1>NÃO SEJA TÍMIDO!</h1>
                    <p>Fique a vontade para entrar em contato conosco. Nosso canal está aberto 24 horas para ouvir reclamações, projetos, ideias e sugestões.</p>
                    <i class="fa-solid fa-envelope fa-2xl"></i>
                    <p>Me mande um e-mail!</p>
                    <address>
                        <a href="mailto:info@hgtransportes.com">info@hgtransportes.com</a>
                    </address>
                    <i class="fa-solid fa-phone fa-2xl"></i>
                    <p>Quer falar por telefone?</p>
                    <p>+1 222 555 444</p>
                </div>
                <div class="user-info">
                    <form method="post" action="contato.act.php">
                        <label for="name"></label>
                        <input type="text" name="name" placeholder="Nome e sobrenome">

                        <label for="email"></label>
                        <input type="text" name="email" id="" placeholder="E-mail">
                        <div class="inputMessage">
                            <label for="message"></label>
                            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
                        </div>
                        <div class="checkboxInput">
                            <input type="checkbox">
                            <p class="p-margin">Eu aceito os <a href="">Termos e Condições</a></p>
                        </div>
                        <div class="button-front">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>

        </form>
    </article>

    <?php include("../footer/footer.php");?>

</body>
</html>