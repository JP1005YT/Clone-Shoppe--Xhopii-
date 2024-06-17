<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii | Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../../img/logo.png"/>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../img/logo.png" height="50px">
            <h1>Xhopii</h1>
        </div>
        <?php session_start(); ?>
        <?php if (isset($_SESSION['mensagem'])): ?>
            <div class="mensagem">
                <?php echo $_SESSION['mensagem']; ?>
            </div>
            <?php unset($_SESSION['mensagem']); ?>
        <?php endif; ?>
        <h1>Entre</h1>
        <div class="out-button">
            <a href="#">Precisa de ajuda?</a>
        </div>
    </header>
    <main>
        <form method="POST" action="../../processamento/processamento.php">
            <h2>Login</h2>
            <input type="text" placeholder="Email" name="inputEmail">
            <input type="password" placeholder="Senha" name="inputSenha">
            <input value="ENTRE" type="submit" id="confirmButton">
            <section class="separation1">
                <span onclick="toPage('pages/redefinirSenha/index.html')">Esqueci minha senha</span>
                <span>Fazer login com SMS</span>
            </section>
            <section class="separation2">
                <span class="line"></span>
                <span>OU</span>
            </section>
            <ul class="separation3">
                <li>
                    <img src="../../img/faceIcon.png" height="40px">
                    Facebook
                </li>
                <li>
                    <img src="../../img/googleIcon.png" height="40px">
                    Google
                </li>
                <li>
                    <img src="../../img/appleIcon.png" height="40px">
                    Apple
                </li>
            </ul>
            <span class="separation4">Novo na Xhopii? <a href="#">Cadastrar-se</a></span>
        </form>
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
                    <img src="../../img/pix.png">
                    <img src="../../img/boleto.png">
                    <img src="../../img/americane.png">
                    <img src="../../img/vsa.png">
                    <img src="../../img/master.png">
                    <img src="../../img/hper.png">
                    <img src="../../img/elo.png">
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
                <img src="../../img/qr-code.png" class="image-qr">
                <img src="../../img/play.png">
                <img src="../../img/appstore.png">
            </nav>
        </section>
        <div class="copyright">
            <hr>
            <div>&copy 2024 Xhoppi. Todos Direitos Acadêmicos Reservados</div>
        </div>
    </footer>
    <script>
        function toPage(page){
            window.location.href = page;
        }
    </script>
</body>
</html>