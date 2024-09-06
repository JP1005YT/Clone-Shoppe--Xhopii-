<?php
    include './../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhoppi | Cadastro de Cliente</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php LoadHeader(false)?>
    <main>
        <form method="POST" action="miniController.php">
            <h2>Cadastrar Cliente</h2>
                <input type="text" placeholder="Nome" name="inputNome">
                <input type="text" placeholder="Sobrenome" name="inputSobrenome">
                <input type="text" placeholder="CPF" name="inputCPF">
                <input type="date" placeholder="Data Nascimento" name="inputDataNasc">
                <input type="text" placeholder="Telefone" name="inputTelefone">
                <input type="text" placeholder="Email" name="inputEmail">
                <input type="password" placeholder="Senha" name="inputSenha">
            <input value="Cadastrar" type="submit" id="cadastar">
        </form>
    </main>
    <?php LoadFooter(false)?>
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