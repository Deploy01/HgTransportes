<?php 
    session_start();

    if(isset($_SESSION['nome'])) { 
        $route = $_SESSION['nome'];
    } else {
        $route = "Login";
    }

?>


<header id="header">
        <div class="container">
            <div class="row-header">
                <div class="logo">
                    <a href="../index/index.php"><img src="../img/logo-background.png" alt="logo"></a>
                </div>
                <div class="container-bar" id="bar" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div class="links" id="links">
                <a href="../servicos/servicos.php">Serviços</a>
                <a href="../contato/contato.php">Contato</a>
                <a href="../trabalho/trabalho.php">Trabalhe conosco</a>
                <a href="../sobre/about.php">Sobre nós</a>
                <section>
                        <?php 
                            if($route != "Login") {
                                echo "<button id='menu'>$route</button>";
                            } else {
                                echo "<a href='../login/login.php' class='login_link'>Login</a>";
                            }

                        ?>
                    <div id="display_menu">
                        
                        <a href="../painel/painel.php">Painel</a>
                        <form action="../login/logout.php" method="post">
                            <input type="submit" name="logout" value="Sair" id="input_logout">
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </header>

    <script src="../header/header.js"></script>

    