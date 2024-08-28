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


        // Guardar Imagem

        $imagemParaGuardar = $_FILES['file']; //Recebe o arquivo do formulario
        
        $nomeAleatorio = uniqid() . '-' . basename($imagemParaGuardar['name']); // coloca um nome aleatorio no arquivo

        $localParaGuardar = './../img/produtos/'.$nomeAleatorio; //lugar para guardar os arquivos

        $stringParaOBanco = './../../img/produtos/'.$nomeAleatorio;


        move_uploaded_file($imagemParaGuardar['tmp_name'],$localParaGuardar); //comando que guarda o arquivo
        
        inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade,$stringParaOBanco); // Manda tudo pro banco

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