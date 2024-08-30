<?php
    include './../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhoppi | Cadastro de Funcionario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php LoadHeader(false)?>
    <main>
            <form method="POST" action="../../processamento/processamento_funcionario.php">
                <h2>Cadastrar Funcionario</h2>
                    <input type="hidden" name="cadastroFuncionario">
                    <input type="text" placeholder="Nome" name="inputNome">
                    <input type="text" placeholder="Sobrenome" name="inputSobrenome">
                    <input type="text" placeholder="CPF" name="inputCPF">
                    <input type="date" placeholder="Data Nascimento" name="inputDataNasc">
                    <input type="text" placeholder="Telefone" name="inputTelefone">
                    <select name="inputCargo">
                        <option value="">Cargo</option>
                        <option value="Entregador">Entregador</option>
                        <option value="Escritorio">Escritório</option>
                    </select>
                    <input type="number" placeholder="Salario" name="inputSalario">
                    <input type="email" placeholder="Email" name="inputEmail">
                    <input type="password" placeholder="Senha" name="inputSenha">
            <input value="CADASTRAR" type="submit" id="cadastar">
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