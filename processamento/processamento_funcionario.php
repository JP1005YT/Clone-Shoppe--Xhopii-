<?php
session_start();
require_once "funcoesBD.php";

// Verifica se houve uma requisição POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário específico de cadastro de funcionário foi enviado
    if (isset($_POST['cadastroFuncionario'])) {
        $nome = $_POST['inputNome'];
        $sobrenome = $_POST['inputSobrenome'];
        $cpf = $_POST['inputCPF'];
        $dataNasc = $_POST['inputDataNasc'];
        $telefone = $_POST['inputTelefone'];
        $cargo = $_POST['inputCargo'];
        $salario = $_POST['inputSalario'];
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        // Verifica se todos os campos obrigatórios foram preenchidos
        if (empty($nome) || empty($sobrenome) || empty($cpf) || empty($dataNasc) || empty($telefone) || empty($cargo) || empty($salario) || empty($email) || empty($senha)) {
            $_SESSION['erro'] = "Por favor, preencha todos os campos obrigatórios.";
            header('Location: ../pages/cadfuncionario/index.php');
            exit;
        }

        // Insere o funcionário no banco de dados
        inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha);
        header('Location: ../pages/funcionarios/index.php');
        exit;
    } else {
        $_SESSION['erro'] = "Ação inválida para cadastro de funcionário.";
        header('Location: ../index.php');
        exit;
    }
} else {
    $_SESSION['erro'] = "Método de requisição inválido.";
    header('Location: ../index.php');
    exit;
}
?>