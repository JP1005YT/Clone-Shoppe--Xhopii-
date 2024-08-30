<?php
    session_start();

    function LoadHButton(){
        if(isset($_SESSION['cliente'])){
            echo '<a href="./controller/pdo/sair.php">Sair</a>';
        }else{
            echo '<a href="./view/pages/login/index.php">Entrar</a>';
        }
    }

    function LoadHeader($isIndex){
        if($isIndex){
            echo '
            <header>
                <div class="logo">
                    <img src="./view/img/logo.png" height="50px">
                    <h1>Xhopii</h1>
                </div>
                <div class="out-button"></div>
            </header>
            <nav class="navbar">
                <ul>
                    <li> <a href="index.php"> Home </a></li>
                    <li> <a href="./view/pages/cadcliente/index.php"> Cadastro Cliente </a> </li>
                    <li> <a href="./view/pages/cadfuncionario/index.php"> Cadastro Funcionário </a> </li>
                    <li> <a href="./view/pages/cadproduto/index.php"> Cadastro Produto </a> </li>
                    <li> <a href="./view/pages/cliente/index.php"> Ver Clientes </a> </li>
                    <li> <a href="./view/pages/funcionarios/index.php"> Ver Funcionários </a> </li>
                    <li> <a href="./view/pages/produtos/index.php"> Ver Produtos </a> </li>
                </ul>
            </nav>
            ';
        }else{
            echo '
            <header>
                <div class="logo">
                    <img src="./../../../view/img/logo.png" height="50px">
                    <h1>Xhopii</h1>
                </div>
                <div class="out-button"></div>
            </header>
            <nav class="navbar">
                <ul>
                    <li> <a href="./../../../index.php"> Home </a></li>
                    <li> <a href="./../cadcliente/index.php"> Cadastro Cliente </a> </li>
                    <li> <a href="./../cadfuncionario/index.php"> Cadastro Funcionário </a> </li>
                    <li> <a href="./../cadproduto/index.php"> Cadastro Produto </a> </li>
                    <li> <a href="./../cliente/index.php"> Ver Clientes </a> </li>
                    <li> <a href="./../funcionarios/index.php"> Ver Funcionários </a> </li>
                    <li> <a href="./../produtos/index.php"> Ver Produtos </a> </li>
                </ul>
            </nav>
            ';
        }
    }

    function LoadFooter($isIndex){
        if($isIndex){
            echo '
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
                            <img src="./view/img/pix.png">
                            <img src="./view/img/boleto.png">
                            <img src="./view/img/americane.png">
                            <img src="./view/img/vsa.png">
                            <img src="./view/img/master.png">
                            <img src="./view/img/hper.png">
                            <img src="./view/img/elo.png">
                        </section>
                    </nav>
                    <nav>
                        <h2>SIGA-NOS</h2>
                        <div>
                            <i class="bx bxl-instagram-alt"></i>
                            <span>Instagram</span>
                        </div>
                        <div>
                            <i class="bx bxl-twitter"></i>
                            <span>Twitter</span>
                        </div>
                        <div>
                            <i class="bx bxl-facebook-square"></i>
                            <span>Facebook</span>
                        </div>
                        <div>
                            <i class="bx bxl-youtube"></i>
                            <span>Youtube</span>
                        </div>
                        <div>
                            <i class="bx bxl-linkedin-square"></i>
                            <span>LinkedIn</span>
                        </div>
                    </nav>
                    <nav class="qr-code">
                        <h2>ATENDIMENTO AO CLIENTE</h2>
                        <img src="./view/img/qr-code.png" class="image-qr">
                        <img src="./view/img/play.png">
                        <img src="./view/img/appstore.png">
                    </nav>
                </section>
                <div class="copyright">
                    <hr>
                    <div>&copy 2024 Xhoppi. Todos Direitos Acadêmicos Reservados</div>
                </div>
            </footer>';
        }else{
            echo '
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
                            <img src="./../../../view/img/pix.png">
                            <img src="./../../../view/img/boleto.png">
                            <img src="./../../../view/img/americane.png">
                            <img src="./../../../view/img/vsa.png">
                            <img src="./../../../view/img/master.png">
                            <img src="./../../../view/img/hper.png">
                            <img src="./../../../view/img/elo.png">
                        </section>
                    </nav>
                    <nav>
                        <h2>SIGA-NOS</h2>
                        <div>
                            <i class="bx bxl-instagram-alt"></i>
                            <span>Instagram</span>
                        </div>
                        <div>
                            <i class="bx bxl-twitter"></i>
                            <span>Twitter</span>
                        </div>
                        <div>
                            <i class="bx bxl-facebook-square"></i>
                            <span>Facebook</span>
                        </div>
                        <div>
                            <i class="bx bxl-youtube"></i>
                            <span>Youtube</span>
                        </div>
                        <div>
                            <i class="bx bxl-linkedin-square"></i>
                            <span>LinkedIn</span>
                        </div>
                    </nav>
                    <nav class="qr-code">
                        <h2>ATENDIMENTO AO CLIENTE</h2>
                        <img src="./../../../view/img/qr-code.png" class="image-qr">
                        <img src="./../../../view/img/play.png">
                        <img src="./../../../view/img/appstore.png">
                    </nav>
                </section>
                <div class="copyright">
                    <hr>
                    <div>&copy 2024 Xhoppi. Todos Direitos Acadêmicos Reservades</div>
                </div>
            </footer>';
        }
    }
?>