
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Transportes</title>
    <link rel="stylesheet" href="style.css" draggable="true">
    <link rel="stylesheet" href="../header/header.css">
    <script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include("../header/header.php");?>


    <nav id="navId">
        <div class="rastreio-input">
            <span style="color: #fff;">Rastrear carga</span>
            <i class="fa-solid fa-arrow-right" style="margin-top: 2px;"></i>
            <span id="numero-text">Número</span>
            <input type="text" name="" id="codeId" placeholder="Código de rastreiamento">
            <span id="numero-text">Nota fiscal</span>
            <input type="text" name="" id="noteId" placeholder="Nota fiscal">
            <i class="fa-solid fa-chevron-right" id="arrow-right"></i>
        </div>
    </nav>

    <section>
        <div class="banner">
            <div class="image-road">
                    <a href="../servicos/servicos.php">Solicite um orçamento</a>
                <div class="text-box">
                    <h1>HG Transportes, aqui e agora!</h1>
                    <h2>Somos mais do que uma empresa de transporte; somos a ponte que conecta suas necessidades logísticas ao destino desejado, com eficiência, segurança e agilidade.</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="text-intro-servicos">
            <h2 class="text-style text-style-minus">Nossos Serviços</h2>
            <h1 class="text-style">HG Transportes, Aqui e Agora</h1>
            <span class="text-style">Explore o mundo de serviços que a HG Transportes oferece, dedicados a atender todas as suas necessidades no transporte de cargas.</span>
        </div>
        <div class="servicos-container">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="servicos-icon" id="carrossel"> 
                <li class="card card-fracionada card-image-style">
                    <span>Carga fracionada</span>
                </li>

                <li class="card card-completa card-image-style">
                    <span>Carga completa</span>
                </li>

                <li class="card card-perigosa card-image-style">
                    <span>Carga perigosa</span>
                </li>

                <li class="card card-armazenamento card-image-style">
                    <span>Armazenamento</span>
                </li>

                <li class="card card-distribuicao card-image-style">
                    <span>Distribuição</span>
                </li>

                <li class="card card-expresso card-image-style">
                    <span>Frete expresso</span>
                </li>

                <li class="card card-docking card-image-style">
                    <span>Cross-Docking</span>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </section>  

    <section id="funcionamento">
        <div class="func-container">
                <h2 class="text-style text-style-minus">Como funciona</h2>
                <h1 class="text-style">Descubra Como a HG Transportes Facilita Seu Transporte de Cargas</h1>
                <span class="text-style">Confira o passo a passo para enviar suas mercadorias com a HG Transportes:</span>
            <div class="func-card">
                <div class="block-card">
                    <i class="fa-solid fa-file-invoice-dollar fa-6x"></i>
                    <h2>1. Peça o seu orçamento</h2>
                    <p>Consulte a equipe de especialistas HG e receba de forma rápida uma cotação completa com as rotas e horários disponíveis.</p>
                </div>

                <div class="block-card">
                    <i class="fa-solid fa-truck-moving fa-6x"></i>
                    <h2>2. Escolha a forma de envio</h2>
                    <p>Agende a retirada da mercadoria ou leve a sua encomenda para um dos pontos de coleta ou dos nossos agentes.</p>
                </div>

                <div class="block-card">
                    <i class="fa-solid fa-location-dot fa-6x"></i>
                    <h2>3. Rastreie a rota da encomenda</h2>
                    <p>Você acompanha em tempo real o percurso da sua mercadoria e conta com o suporte da equipe de atendimento.</p>
                </div>

                <div class="block-card">
                    <i class="fa-solid fa-person-circle-check fa-6x"></i>
                    <h2>4. Entrega realizada</h2>
                    <p>O destinatário recebe a sua encomenda no menor tempo possível, com o melhor custo-benefício.</p>
                </div>
            </div>
        </div>
    </section>  

    <section id="depoimentos">
            <div class="container-depoimentos">
                    <h2 class="text-style text-style-minus">Depoimentos</h2>
                    <h1 class="text-style">Leia o que os nossos clientes dizem</h1>
                    <span class="text-style">Damos muito valor a relacionamentos fortes e o seu feedback é essencial para nos ajudar a acertar.</span>

                <div class="rating-users-left">
                    <div class="block-user-left">
                        <i class="fa-solid fa-quote-left fa-3x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae voluptate facere reiciendis deserunt nisi animi obcaecati ipsam sed? Accusamus ipsa doloremque a voluptatibus!</p>
                        <div class="client">
                            <img src="../img/fake1.png" alt="">
                            <h3>Rafael Santana</h3>
                        </div>
                    </div>
                    <div class="block-user-left">
                        <i class="fa-solid fa-quote-left fa-3x"></i>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, quia, unde nam quasi eius reprehenderit, consequatur tenetur accusantium et saepe ducimus!</p>
                        <div class="client">
                            <img src="../img/fake2.png" alt="">
                            <h3>Amanda Santos</h3>
                        </div>
                    </div>
                </div>

                <div class="rating-users-right">
                    <div class="block-user-right">
                        <i class="fa-solid fa-quote-left fa-3x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatem iure ex ipsa eligendi odit veniam commodi labore deserunt enim, consequuntur voluptatibus voluptate expedita?</p>
                        <div class="client">
                            <img src="../img/fake3.png" alt="">
                            <h3>Olívia Ferreira</h3>
                        </div>
                    </div>
                    <div class="block-user-right">
                        <i class="fa-solid fa-quote-left fa-3x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta neque blanditiis fugiat rem sint, enim quibusdam odio qui?</p>
                        <div class="client">
                            <img src="../img/fake4.png" alt="">
                            <h3>Otávio Santos</h3>
                        </div>
                    </div>
                </div>

            </div>
    </section>
        
    <?php include("../footer/footer.php");?>
</body>
<script src="../script.js"></script>
</html>