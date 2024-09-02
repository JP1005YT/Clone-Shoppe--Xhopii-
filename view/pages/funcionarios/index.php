<?php
    include './../../global.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xhoppi | Ver Funcionarios </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <link rel="stylesheet" href="main.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../img/logo.png" height="50px" alt="Logo Xhoppi">
            <h1>Xhopii</h1>
        </div>
        <div class="out-button">
        <?php
                if(isset($_SESSION['cliente'])){
                    echo '<a href="./../../processamento/sair.php">Sair</a>';
                }else{
                    echo '<a href="./../pages/login/index.php">Entrar</a>';
                }
            ?>
        </div>
    </header>
    <nav class="navbar">
        <ul>
            <li> <a href="./../../index.php"> Home </a></li>
            <li> <a href="./../../pages/cadcliente/"> Cadastro Cliente </a> </li>
            <li> <a href="./../../pages/cadfuncionario/"> Cadastro Funcionário </a> </li>
            <li> <a href="./../../pages/cadproduto/"> Cadastro Produto </a> </li>
            <li> <a href="./../../pages/cliente/"> Ver Clientes </a> </li>
            <li> <a href="./../../pages/funcionarios/"> Ver Funcionários </a> </li>
            <li> <a href="./../../pages/produtos/"> Ver Produtos </a> </li>
        </ul>
    </nav>
    <main>
        <h2> Funcionarios Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($funcionarios) > 0) : ?>
                    <?php while($funcionario = mysqli_fetch_assoc($funcionarios)) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($funcionario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['sobrenome']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['cpf']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['dataDeNascimento']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['telefone']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['cargo']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['salario']); ?></td>
                            <td><?php echo htmlspecialchars($funcionario['email']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Nenhum funcionario cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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