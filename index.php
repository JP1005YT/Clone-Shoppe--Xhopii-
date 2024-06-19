<?php
    include_once('./processamento/funcoesBD.php');
?>
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii | Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./img/logo.png"/>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./img/logo.png" height="50px">
            <h1>Xhopii</h1>
        </div>
        <div class="out-button">
            <?php
                session_start();
                if(isset($_SESSION['cliente'])){
                    echo '<a href="./processamento/sair.php">Sair</a>';
                }else{
                    echo '<a href="./pages/login/index.php">Entrar</a>';
                }
            ?>
        </div>
    </header>
    <nav class="navbar">
        <ul>
            <li> <a href="index.php"> Home </a></li>
            <li> <a href="./pages/cadcliente/index.php"> Cadastro Cliente </a> </li>
            <li> <a href="./pages/cadfuncionario/index.php"> Cadastro Funcionário </a> </li>
            <li> <a href="./pages/cadproduto/index.php"> Cadastro Produto </a> </li>
            <li> <a href="./pages/cliente/index.php"> Ver Clientes </a> </li>
            <li> <a href="./pages/funcionarios/index.php"> Ver Funcionários </a> </li>
            <li> <a href="./pages/produtos/index.php"> Ver Produtos </a> </li>
        </ul>
    </nav>
    <main>
        <div class="carrosel">
            <img src="img/carousel-1.jpg" class="ativo" id="img0">
            <img src="img/carousel-2.jpg" id="img1">
            <img src="img/carousel-3.jpg" id="img2">
            <img src="img/carousel-4.jpg" id="img3">
            <button class="backButton"> < </button>
            <button class="nextButton"> > </button>
            <nav>
                <ul>
                    <li id="img0"></li>
                    <li id="img1"></li>
                    <li id="img2"></li>
                    <li id="img3"></li>
                </ul>
            </nav>
        </div>
        <div class="promocao">
            <img src="./img/home-promocao.png">
        </div>
        <section class="produtos">
            <span class="title">
                <h2>Descobertas do Dia</h2>
            </span>
            <div class="content">
                <?php
                    $resp = retornarMaisBaratos();
                
                    while($row = $resp->fetch_assoc()){
                        echo '
                    <div id="'.$row['id'].'">
                        <img src="'.substr($row['imageSrc'],6).'">
                        <span class="desc">'.$row['nome'].'</span>
                        <span class="price">R$ '.$row['valor'].'</span>
                        <span class="storage">'.$row['quantidade'].' disponíveis</span>
                    </div>';
                    }
                ?>
        </section>
    </main>
    <footer>
        <section>
            <nav>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <a href="#">Central de Ajuda</a>
                <a href="#">Como Comprar</a>
                <a href="#">Métodos de Pagamento</a>
                <a href="#">Garantia Xhoppi</a>
                <a href="#">Devolução e Reembolso</a>
                <a href="#">Fale Conosco</a>
                <a href="#">Ouvidoria</a>
            </nav>
            <nav>
                <h2>SOBRE A XHOPPI</h2>
                <a href="#">Sobre Nós</a>
                <a href="#">Políticas Xhopii</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Programas de Filiados da Xhopii</a>
                <a href="#">Seja um Entregador Xhoppi</a>
                <a href="#">Ofertas Relâmpago</a>
                <a href="#">Xhopii Blog</a>
                <a href="#">Impresa</a>
            </nav>
            <nav class="imagens">
                <h2>PAGAMENTO</h2>
                <section>
                    <img src="./img/pix.png">
                    <img src="./img/boleto.png">
                    <img src="./img/americane.png">
                    <img src="./img/vsa.png">
                    <img src="./img/master.png">
                    <img src="./img/hper.png">
                    <img src="./img/elo.png">
                </section>
            </nav>
            <nav>
                <h2>SIGA-NOS</h2>
                <div>
                    <i class='bx bxl-instagram-alt'></i>
                    <span>Instagram</span>
                </div>
                <div>
                    <i class='bx bxl-twitter'></i>
                    <span>Twitter</span>
                </div>
                <div>
                    <i class='bx bxl-facebook-square'></i>
                    <span>Facebook</span>
                </div>
                <div>
                    <i class='bx bxl-youtube' ></i>
                    <span>Youtube</span>
                </div>
                <div>
                    <i class='bx bxl-linkedin-square' ></i>
                    <span>LinkedIn</span>
                </div>
            </nav>
            <nav class="qr-code">
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <img src="./img/qr-code.png" class="image-qr">
                <img src="./img/play.png">
                <img src="./img/appstore.png">
            </nav>
        </section>
        <div class="copyright">
            <hr>
            <div>&copy 2024 Xhoppi. Todos Direitos Acadêmicos Reservados</div>
        </div>
    </footer>
    <script>
        var posicaoAtual = 0
        const backButton = document.querySelector(".backButton")
        const nextButton = document.querySelector(".nextButton")
        backButton.addEventListener("click",back)
        nextButton.addEventListener("click",next)
        function back(){
            posicaoAtual === 0 ? posicaoAtual = 3 : posicaoAtual -= 1
            sincronizar()
        }
        function next(){
            posicaoAtual === 3 ? posicaoAtual = 0 : posicaoAtual += 1
            sincronizar()
        }
        function sincronizar(){
            const desativarimg = document.querySelectorAll(".carrosel img")
            desativarimg.forEach(element => {
                element.classList.remove("ativo")
            })
            const desativarli = document.querySelectorAll(".carrosel li")
            desativarli.forEach(element => {
                element.classList.remove("ativo")
            })

            const dom = document.querySelectorAll(`#img${posicaoAtual}`)
            dom.forEach(element => {
                element.classList.add("ativo")
            })
        }
        const Divs = document.querySelectorAll(".content div")
        Divs.forEach(prod => {
            prod.addEventListener("click",()=>{
                window.location.href = "./pages/produto?id=" + prod.id;
            })
        })

        document.querySelectorAll('.navbar ul li').forEach(function(li) {
            // Adicione um event listener de clique ao <li>
            li.addEventListener('click', function() {
                // Encontre o link (<a>) dentro do <li> e redirecione para o href
                window.location = li.querySelector('a').href;
            });
        });
    </script>
</body>
</html>