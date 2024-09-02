<?php
    // include './../../../controller/Controller.php';
    include_once './../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhoppi | Cadastro de Produto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php LoadHeader(false)?>
    <main>
        <form method="POST" action="../../processamento/processamento_produto.php" enctype="multipart/form-data">
            <h2>Cadastrar Produto</h2>
                <input type="text" placeholder="Nome" name="inputNome">
                <input type="text" placeholder="Fabricante" name="inputFabricante">
                <input type="text" placeholder="Descrição" name="inputDescricao">
                <input type="number" placeholder="Valor" name="inputValor">
                <input type="number" placeholder="Quantidade" name="inputQuantidade">
                <section class="photo">
                    <h3>Selecionar foto do produto:</h3>
                    <section>
                        <label for="file-upload" id="button">Escolher arquivo</label>
                        <input type="file" id="file-upload" name="file">
                        <label id="archive_title">Nenhum arquivo escolhido</label>
                    </section>
                </section>
            <input value="Cadastrar" type="submit" id="cadastar">
        </form>
    </main>
    <?php LoadFooter(false)?>
    <script>
        const file = document.querySelector("#file-upload")
        file.addEventListener('change',(e)=>{
            for(const archive of file.files){
                document.querySelector("#archive_title").innerHTML = archive.name
            }    
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