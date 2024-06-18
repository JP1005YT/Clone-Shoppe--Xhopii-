<?php
function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1","root","","xhopii");
    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
    return $conexao;
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

function loginCliente($email, $senha){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);
    if($resultado && mysqli_num_rows($resultado) > 0){
        $cliente = mysqli_fetch_assoc($resultado);
        if($senha == $cliente['senha']){
            return $cliente;    
        }
    }
    return false;
}

function redefinirSenha($email, $senha) {
    $conexao = conectarBD();

    // Usa prepared statements para evitar injeção de SQL
    $stmt = $conexao->prepare("UPDATE cliente SET senha = ? WHERE email = ?");
    $stmt->bind_param("ss", $senha, $email); // "ss" indica que ambos os parâmetros são strings

    $resultSenha = $stmt->execute();

    // Verifica se a execução foi bem-sucedida
    if ($resultSenha) {
        return true;
    } else {
        return false;
    }

    // Fecha o statement e a conexão
    $stmt->close();
    $conexao->close();
}

function retornarMaisBaratos(){
    $conexao = conectarBD();
    $consulta = 'SELECT * FROM produto ORDER BY valor ASC LIMIT 20';
    $listaProduto = mysqli_query($conexao, $consulta);
    return($listaProduto);
}

//produto
function inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade,$imageSrc){

    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade ,imageSrc) VALUES ('$nome','$fabricante','$descricao','$valor','$quantidade','$imageSrc')";

    mysqli_query($conexao, $consulta);
}

function retornarProduto(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProduto = mysqli_query($conexao, $consulta);
    return($listaProduto);
}

//funcionario
function inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone,$cargo,$salario,$email,$senha){

    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (nome, sobrenome, cpf, dataDeNascimento, telefone, cargo, salario, email, senha) VALUES 
    ('$nome','$sobrenome','$cpf','$dataNasc','$telefone','$cargo','$salario','$email','$senha')";

    mysqli_query($conexao, $consulta);
}

function retornarFuncionario(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionario";
    $listaFuncionario = mysqli_query($conexao, $consulta);
    return($listaFuncionario);
}
?>