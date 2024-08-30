<?php
    include './../../global.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <header>
        <div>
            <span class="logo">
                <img src="img/logo.png" alt="Logo" height="90px">
                <span>Xhopii</span>
            </span>
        </div>
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
    </header>
    <main>
        <div class="shirts">
            <img src="<?php echo $produto['imageSrc']?>" alt="Camiza" id="select">
        </div>
        <div class="ProdImage">
            <img src="<?php echo $produto['imageSrc']?>" alt="<?php echo $produto['nome']?>" width="570px" height="600px">
        </div>
        <div class="DescProd">
            <h2><?php echo $produto['nome']?></h2>
            <p class="price">R$<?php echo $produto['valor']?></p>
            <p><?php echo $produto['quantidade']?> peças disponiveis</p>
            <section>
                <button>Comprar Agora</button>
            </section>
        </div>
    </main>
</body>
</html>