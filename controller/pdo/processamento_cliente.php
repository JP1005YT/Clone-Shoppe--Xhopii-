<?php
session_start();
require_once "funcoesBD.php";

// Verificar se houve uma requisição POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se todos os campos obrigatórios foram preenchidos
    if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && isset($_POST['inputCPF']) &&
        isset($_POST['inputDataNasc']) && isset($_POST['inputTelefone']) && isset($_POST['inputEmail']) &&
        isset($_POST['inputSenha'])) {

        $nome = $_POST['inputNome'];
        $sobrenome = $_POST['inputSobrenome'];
        $cpf = $_POST['inputCPF'];
        $dataNasc = $_POST['inputDataNasc'];
        $telefone = $_POST['inputTelefone'];
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        // Verifica se todos os campos obrigatórios foram preenchidos
        if (empty($nome) || empty($sobrenome) || empty($cpf) || empty($dataNasc) ||
            empty($telefone) || empty($email) || empty($senha)) {
            $erro = "Por favor, preencha todos os campos obrigatórios.";
            $_SESSION['erro'] = $erro;
            header('Location: ../pages/cadcliente/index.php');
            exit;
        }

        // Insere o cliente no banco de dados
        inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
        header('Location: ../pages/cliente/index.php');
        exit;

    } else {
        $erro = "Por favor, preencha todos os campos obrigatórios.";
        $_SESSION['erro'] = $erro;
        header('Location: ../pages/cadcliente/index.php');
        exit;
    }
} else {
    $erro = "Método de requisição inválido.";
    $_SESSION['erro'] = $erro;
    header('Location: ../pages/cadcliente/index.php');
    exit;
}
?>