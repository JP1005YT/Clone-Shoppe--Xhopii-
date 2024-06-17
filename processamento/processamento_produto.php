<?php
session_start();
require_once "funcoesBD.php";

// Verifica se houve uma requisição POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário específico de cadastro de produto foi enviado
    if (isset($_POST['inputNome'], $_POST['inputFabricante'], $_POST['inputDescricao'], $_POST['inputValor'], $_POST['inputQuantidade'])) {
        // Sanitiza os dados recebidos
        $nome = htmlspecialchars($_POST['inputNome']);
        $fabricante = htmlspecialchars($_POST['inputFabricante']);
        $descricao = htmlspecialchars($_POST['inputDescricao']);
        $valor = floatval($_POST['inputValor']); // Converte para float
        $quantidade = intval($_POST['inputQuantidade']); // Converte para inteiro

        // Verifica se algum campo obrigatório está vazio
        if (empty($nome) || empty($fabricante) || empty($descricao) || empty($valor) || empty($quantidade)) {
            $erro = "Por favor, preencha todos os campos obrigatórios.";
            $_SESSION['erro'] = $erro;
            header('Location: ../pages/cadproduto/index.php');
            exit;
        }

        // Insere o produto no banco de dados
        inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade);

        // Define mensagem de sucesso
        $mensagem = "Produto cadastrado com sucesso.";
        $_SESSION['mensagem'] = $mensagem;

        // Redireciona para a página de produtos
        header('Location: ../pages/produtos/index.php');
        exit;
    } else {
        // Caso algum dado esteja faltando no POST
        $erro = "Por favor, preencha todos os campos obrigatórios.";
        $_SESSION['erro'] = $erro;
        header('Location: ../pages/cadproduto/index.php');
        exit;
    }
}
?>