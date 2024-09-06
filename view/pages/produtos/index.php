<?php
    include './../../global.php';
    include './../../../controller/Controller.php';

    $controller = new Controller();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii | Produtos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../../img/logo.png"/>
</head>
<body>
    <?php LoadHeader(false)?>
    <section class="produtos">
        <span class="title">
            <h2>Produtos</h2>
        </span>
        <div class="content">
            <?php
            
            $reposta = $controller->obterProdutos();

            while($row = $reposta->fetch_assoc()){
                echo '
                <div id="'.$row['id'].'">
                    <img src="../'.$row['imageSrc'] .'">
                    <span class="desc">'.$row['nome'] .'</span>
                    <span class="fabricante"><strong>Fabricante:</strong>'.$row['fabricante'] .'</span>
                    <span class="desc"><strong>Descrição:</strong>'.$row['descricao'] .'</span>
                    <span class="price">R$ '.$row['valor'] .'</span>
                    <span class="storage">'.$row['quantidade'] .' disponíveis</span>
                </div>';
            }
            ?>
        </div>
    </section>
    <?php LoadFooter(false); ?>
    <script>
        const Divs = document.querySelectorAll(".content div")
        Divs.forEach(prod => {
            prod.addEventListener("click",()=>{
                window.location.href = "../produto?id=" + prod.id;
            })
        })
        document.querySelectorAll('.navbar ul li').forEach(function(li) {
            // Adicione um event listener de clique ao <li>
            li.addEventListener('click', function() {
                // Encontre o link (<a>) dentro do <li> e redirecione para o href
                window.location = li.querySelector('a').href;
            });
        });
        window.scrollTo(0, 0)
    </script>
</body>
</html>