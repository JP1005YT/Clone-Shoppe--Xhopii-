<?php
    include './../../global.php';
    include './../../../controller/Controller.php';

    $controller = new Controller();
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
    <?php LoadHeader(false)?>
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