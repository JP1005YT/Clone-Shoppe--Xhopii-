<?php
    include './../../global.php';
    include './../../../controller/Controller.php';
    $controller = new Controller();

    $produto = $controller->obterProdutosPerId($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./../../../main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <?php LoadHeader(false)?>
    <main>
        <div class="shirts">
            <img src="<?php echo "../" . $produto['imageSrc'] ?>" alt="Camisa" id="select">
        </div>
        <div class="ProdImage">
            <img src="<?php echo "../" . $produto['imageSrc']?>" alt="<?php echo $produto['nome']?>" width="570px" height="600px">
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