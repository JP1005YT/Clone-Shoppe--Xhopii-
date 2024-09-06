<?php
    include_once '../../../controller/Controller.php';
    $controller = new Controller();

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    if (empty($nome) || empty($sobrenome) || empty($cpf) || empty($dataNasc) ||
    empty($telefone) || empty($email) || empty($senha)) {
    $erro = "Por favor, preencha todos os campos obrigatórios.";
    $_SESSION['erro'] = $erro;
    header('Location: index.php');
    exit;
    }

    $controller->inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
    header('Location: ../cliente/');
?>