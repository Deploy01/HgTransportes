<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços | HG Transportes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</head>
<body id="body-test">
    <?php include("../header/header.php");?>


    <section id="banner">
        <div class="banner">
            <div class="nav-container">
                <span>CONHEÇA OS NOSSOS SERVIÇOS</span>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="style-hidden-orcamento">
            <div class="orcamento-screen" id="orcamento-display">
                <div class="exit-icon">
                    <i class="fa-solid fa-xmark fa-2x" id="exit-icon-id"></i>
                </div>
                    <span>Faça o seu orçamento</span>

                <div class="input-center">
                    <div class="user-info">
                        <form action="servicos.act.php" method="post">
                            <div class="address-user">
                                <p>Nome</p>
                                <label for="nome"></label>
                                <input type="text" name="nome" id="nome" placeholder="Nome">
                            </div>

                            <div class="input-row">
                                <div class="text-field">
                                    <p>E-mail</p>
                                    <input type="text" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="text-field text-right">
                                    <p>Telefone</p>
                                    <input type="text" name="telefone" id="telefone" placeholder="Inserir telefone" value="+55 ">
                                </div>
                            </div>
            
                            <div class="input-row">
                                <div class="text-field">
                                    <p>Empresa</p>
                                    <input type="text" name="empresa" id="empresa" placeholder="Insira a empresa">
                                </div>
            
                                <div class="text-field text-right">
                                    <p>Pagador do frete</p>
                                    <input type="text" name="pagador" id="pagador" placeholder="Insira o CNPJ do pagador">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="next-button">
                    <button>Seguinte</button>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container-servicos" id="containerServicos">
                
                <div class="intro-text">
                    <h2 class="text-style text-style-minus"></h2>
                    <h1 class="text-style"></h1>
                    <span class="text-style"></span>
                </div>
                
                <div class="block-left">
                    <div class="carga-left-style carga-left-background-fracionada">
                        <h2>Carga fracionada</h2>
                        <div class="hover-text">
                            <span>Carga fracionada refere-se ao transporte de mercadorias em quantidades menores do que a capacidade total de um contêiner, reboque ou veículo de carga.</span>
                            <button id="orcamento">Solicitar orçamento</button>
                            
                        </div>
                    </div>
                    <div class="carga-left-style carga-left-background-completa">
                        <h2>Carga completa</h2>
                        <div class="hover-text">
                            <span>Garantimos a alocação exclusiva de um veículo ou contêiner para as suas mercadorias, assegurando que sua carga receba atenção dedicada.</span>
                            <button id="orcamento2">Solicitar orçamento</button>
                        </div>
                    </div>
                </div>

                <div class="block-right">
                    <div class="carga-right-style carga-right-background-perigosa">
                        <h2>Carga perigosa</h2>
                        <div class="hover-text">
                            <span>Nossos profissionais capacitados garantem que as cargas perigosas sejam manuseadas e transportadas com segurança e eficiência, seguindo os mais altos padrões de segurança.</span>
                            <button id="orcamento3">Solicitar orçamento</button>
                        </div>
                    </div>
                    <div class="carga-right-style carga-right-background-armazenamento">
                        <h2>Armazenamento</h2>
                        <div class="hover-text">
                            <span>Armazenamento seguro e personalizado na HG Transportes, proporcionando tranquilidade para sua carga em nossa moderna infraestrutura.</span>
                            <button id="orcamento4">Solicitar orçamento</button>
                        </div>
                    </div>
                </div>

                <div class="block-left">
                    <div class="carga-left-style carga-left-background-distribuição">
                        <h2>Distribuição</h2>
                        <div class="hover-text">
                            <span>A eficiência da distribuição é nossa prioridade. Oferecemos soluções logísticas de ponta a ponta, garantindo que sua mercadoria chegue ao destino final de maneira rápida e segura.</span>
                            <button id="orcamento5">Solicitar orçamento</button>
                        </div>
                    </div>
                    <div class="carga-left-style carga-left-background-expresso">
                        <h2>Frete expresso</h2>
                        <div class="hover-text">
                            <span>Frete expresso na HG Transportes: entregas rápidas, eficientes e seguras. Sua carga no destino com agilidade e qualidade garantidas.</span>
                            <button id="orcamento6">Solicitar orçamento</button>
                        </div>
                    </div>
                </div>

                <div class="block-right">
                    <div class="carga-right-style carga-right-background-cross">
                        <h2>Crossdocking</h2>
                        <div class="hover-text">
                            <span>Reduzimos tempos de armazenagem, promovendo transferências diretas e rápidas da carga para o destino final, garantindo eficiência e agilidade em cada etapa do processo.</span>
                            <button id="orcamento7">Solicitar orçamento</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include("../footer/footer.php");?>

</body>
<script src="servicos.js"></script>
</html>