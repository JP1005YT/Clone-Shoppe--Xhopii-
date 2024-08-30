<?php
    include_once './controller/Controller.php';
    include_once './view/global.php';

    $controller = new Controller();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhopii | Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./view/img/logo.png"/>
</head>
<body>
    <?php LoadHeader(true)?>
    <main>
        <div class="carrosel">
            <img src="view/img/carousel-1.jpg" class="ativo" id="img0">
            <img src="view/img/carousel-2.jpg" id="img1">
            <img src="view/img/carousel-3.jpg" id="img2">
            <img src="view/img/carousel-4.jpg" id="img3">
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
            <img src="./view/img/home-promocao.png">
        </div>
        <section class="produtos">
            <span class="title">
                <h2>Descobertas do Dia</h2>
            </span>
            <div class="content">
                <?php
                    $resp = $controller->obterProdutosBaratos();
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
    <?php LoadFooter(true)?>
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