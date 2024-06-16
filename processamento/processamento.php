<?php
session_start();
require_once "funcoesBD.php";
$erro = '';

//Cadastro de Cliente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar qual formulário foi submetido
    if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && isset($_POST['inputCPF'])) {
        // Verifica se todos os campos obrigatórios foram preenchidos
        if (empty($_POST['inputNome']) || empty($_POST['inputSobrenome']) || empty($_POST['inputCPF']) || empty($_POST['inputDataNasc']) || empty($_POST['inputTelefone']) || empty($_POST['inputEmail']) || empty($_POST['inputSenha'])) {
            $erro = "Por favor, preencha todos os campos obrigatórios.";
            $_SESSION['erro'] = $erro;
            header('Location: ../pages/cadcliente/index.php');
            exit;
        } else {
            $nome = $_POST['inputNome'];
            $sobrenome = $_POST['inputSobrenome'];
            $cpf = $_POST['inputCPF'];
            $dataNasc = $_POST['inputDataNasc'];
            $telefone = $_POST['inputTelefone'];
            $email = $_POST['inputEmail'];
            $senha = $_POST['inputSenha'];

            inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
            header('Location: ../pages/cliente/index.php');
            exit;
        }
    }

    //Cadastro de Produto
    if (isset($_POST['inputNome']) && isset($_POST['inputFabricante'])) {
        if (empty($_POST['inputNome']) || empty($_POST['inputFabricante']) || empty($_POST['inputDescricao']) || empty($_POST['inputValor']) || empty($_POST['inputQuantidade'])) {
            $erro = "Por favor, preencha todos os campos obrigatórios.";
            $_SESSION['erro'] = $erro;
            header('Location: ../pages/cadproduto/index.php');
            exit;
        } else {
            $nome = $_POST['inputNome'];
            $fabricante = $_POST['inputFabricante'];
            $descricao = $_POST['inputDescricao'];
            $valor = $_POST['inputValor'];
            $quantidade = $_POST['inputQuantidade'];

            inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade);
            header('Location: ../pages/cadproduto/index.php');
            exit;
        }
    }

    //Cadastro de Funcionario
    if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && isset($_POST['inputCPF'])) {
        if (empty($_POST['inputNome']) || empty($_POST['inputSobrenome']) || empty($_POST['inputCPF']) || empty($_POST['inputDataNasc']) || empty($_POST['inputTelefone']) || empty($_POST['inputSalario']) || empty($_POST['inputEmail']) || empty($_POST['inputSenha'])) {
            $erro = "Por favor, preencha todos os campos obrigatórios.";
            $_SESSION['erro'] = $erro;
            header('Location: ../pages/cadfuncionario/index.php');
            exit;
        } else {
            $nome = $_POST['inputNome'];
            $sobrenome = $_POST['inputSobrenome'];
            $cpf = $_POST['inputCPF'];
            $dataNasc = $_POST['inputDataNasc'];
            $telefone = $_POST['inputTelefone'];
            $salario = $_POST['inputSalario'];
            $email = $_POST['inputEmail'];
            $senha = $_POST['inputSenha'];

            inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone,$cargo, $salario, $email, $senha);
            header('Location: ../pages/cadfuncionario/index.php');
            exit;
        }
    }

    // Login de Cliente
    if (isset($_POST['inputEmail']) && isset($_POST['inputSenha'])) {
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        $cliente = loginCliente($email, $senha);

        if ($cliente) {
            $_SESSION['cliente'] = $cliente;
            header('Location: ../index.php');
            exit;
        } else {
            // Login falhou
            $_SESSION['erro'] = "Email ou senha incorretos.";
            header('Location: ../pages/login/index.php');
            exit;
        }
    }
}
?>