<?php
    include_once '../../../controller/Controller.php';
    $controller = new Controller();

    $nome = htmlspecialchars($_POST['inputNome']);
    $fabricante = htmlspecialchars($_POST['inputFabricante']);
    $descricao = htmlspecialchars($_POST['inputDescricao']);
    $valor = floatval($_POST['inputValor']); // Converte para float
    $quantidade = intval($_POST['inputQuantidade']); // Converte para inteiro

    // Verifica se algum campo obrigatório está vazio
    if (empty($nome) || empty($fabricante) || empty($descricao) || empty($valor) || empty($quantidade)) {
        $erro = "Por favor, preencha todos os campos obrigatórios.";
        $_SESSION['erro'] = $erro;
        header('Location: index.php');
        exit;
    }
    // Guardar Imagem

    $imageSrc = $_FILES['file']; //Recebe o arquivo do formulario
        
    $nomeAleatorio = uniqid() . '-' . basename($imageSrc['name']); // coloca um nome aleatorio no arquivo

    $localParaGuardar = './../../img/produtos/'.$nomeAleatorio; //lugar para guardar os arquivos

    $stringParaOBanco = './../../view/img/produtos/'.$nomeAleatorio;
    move_uploaded_file($imageSrc['tmp_name'],$localParaGuardar); //comando que guarda o arquivo

    $controller-> inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade, $stringParaOBanco);
    header('Location: ../Produtos/');
?>