<?php
    include_once '../../../controller/Controller.php';
    $controller = new Controller();

        $nome = $_POST['inputNome'];
        $sobrenome = $_POST['inputSobrenome'];
        $cpf = $_POST['inputCPF'];
        $dataNasc = $_POST['inputDataNasc'];
        $telefone = $_POST['inputTelefone'];
        $cargo = $_POST['inputCargo'];
        $salario = $_POST['inputSalario'];
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        if (empty($nome) || empty($sobrenome) || empty($cpf) || empty($dataNasc) || empty($telefone) || empty($cargo) || empty($salario) || empty($email) || empty($senha)) {
            $_SESSION['erro'] = "Por favor, preencha todos os campos obrigatórios.";
            header('Location: index.php');
            exit;
        }

    $controller-> inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha);
    header('Location: ../funcionarios/');
?>