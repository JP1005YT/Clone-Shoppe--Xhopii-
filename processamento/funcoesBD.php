<?php
function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1","root","","xhopii");
    return($conexao);
}

//cliente
function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){

    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";

    mysqli_query($conexao, $consulta);
}

function retornarCliente(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return($listaClientes);
}

//produto
function inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade){

    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade) VALUES 
    ('$nome','$fabricante','$descricao','$valor','$quantidade')";

    mysqli_query($conexao, $consulta);
}

function retornarProduto(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProduto = mysqli_query($conexao, $consulta);
    return($listaProduto);
}
?>