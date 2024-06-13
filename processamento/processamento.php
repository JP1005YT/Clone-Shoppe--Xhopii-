<?php
 session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNasc = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];

      inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
      header('Location: ../'); //arrumar link
}

//Cadastro de Produto
if(!empty($_POST['inputNome']) && !empty($_POST['inputFabricante']) && 
   !empty($_POST['inputDescricao']) && !empty($_POST['inputValor']) && 
   !empty($_POST['inputQuantidade'])){

      $nome = $_POST['inputNome'];
      $fabricante = $_POST['inputFabricante'];
      $descricao = $_POST['inputDescricao'];
      $valor = $_POST['inputValor'];
      $quantidade = $_POST['inputQuantidade'];

      inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade);
      header('Location: ../'); //arrumar link
}

//Cadastro de Funcionario
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && //fzr cargo
   !empty($_POST['inputSalario']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNasc = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $salario = $_POST['inputSalario'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];

      inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha);
      header('Location: ../'); //arrumar link
}

// Login de Cliente
if (!empty($_POST['inputEmail']) && !empty($_POST['inputSenha'])) {
   $email = $_POST['inputEmail'];
   $senha = $_POST['inputSenha'];
   
   $cliente = loginCliente($email, $senha);
   
   if ($cliente) {
       session_start();
       $_SESSION['cliente'] = $cliente;
       header('Location: ../index.php'); // arrumar link
       exit;
   } else {
       // Login falhou
       header('Location: ../pages/login/index.html?error=1'); // Redirecionar para a página de login com erro
       exit;
   }
}
?>