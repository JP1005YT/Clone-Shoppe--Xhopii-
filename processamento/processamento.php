<?php

session_start();
require "../controller/Controlador.php";

$controlador = new Controlador();

//Login
if(isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])){

    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    //echo "Email: " . $email . "Senha: " . $senha;
    header('Location:../view/home.php');
    die();
}

//Cadastro de Cliente
if(isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && 
   isset($_POST['inputCPF']) && isset($_POST['inputDataNasc']) && 
   isset($_POST['inputTelefone']) && isset($_POST['inputEmail']) &&
   isset($_POST['inputSenha'])){

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    
    #MODIFICAR PARA MVC CONTROLADOR
    inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
}

//Cadastro de Funcionário
if(isset($_POST['inputNomeFunc']) && isset($_POST['inputFabricanteProd']) &&
   isset($_POST['inputDescricaoProd']) && isset($_POST['inputValorProd'])) {

    $nome = $_POST['inputNomeFunc'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoFunc'];
    $valor = $_POST['inputValorProd'];
    
    #MODIFICAR PARA MVC CONTROLADOR
    $controlador->cadastrarProdutos($nome,$fabricante,$descricao,$valor);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

//Cadastro de Produto
if(!empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) && 
   !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd'])){

    $nome = $_POST['inputNomeProd'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoProd'];
    $valor = $_POST['inputValorProd'];

    header('Location:../view/cadastroProduto.php');
    die();
}

?>