<?php
include_once ("Cliente.php");
include_once ("Funcionario.php");
class BancoDeDados{

    private $host;
    private $login;
    private $senha;
    private $database;

    public function __construct($host, $login, $senha, $database) {

        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->database = $database; 
    }

    //métodos
    public function conectarBD(){
        $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->database);
        return $conexao; 
    }
    public function inserirCliente(Cliente $cliente){
    
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                     VALUES ('" . $cliente->getCpf() . "',
                    '" . $cliente->getNome() . "',
                    '" . $cliente->getSobrenome() . "',
                    '" . $cliente->getDataNasc() . "',
                    '" . $cliente->getTelefone() . "',
                    '" . $cliente->getEmail() . "',
                    '" . $cliente->getSenha() . "')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirProduto(Produto $produto){
    
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, imageSrc) 
                     VALUES ('" . $produto->get_Nome() . "',
                     '" . $produto->get_Fabricante() . "',
                     '" . $produto->get_Descricao() . "',
                     '" . $produto->get_Valor() . "',
                     '" . $produto->get_Quant() . "',
                     '" . $produto->get_ImageSrc() . "')";
        mysqli_query($conexao,$consulta);
    }

    function inserirFuncionario(Funcionario $funcionario){
    
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO funcionario (nome, sobrenome, cpf, dataDeNascimento, telefone, cargo, salario, email, senha) 
                     VALUES ('" . $funcionario->getNome() . "',
                     '" . $funcionario->getSobrenome() . "',
                     '" . $funcionario->getCpf() . "',
                     '" . $funcionario->getDataNasc() . "',
                     '" . $funcionario->getTelefone() . "',
                     '" . $funcionario->getCargo() . "',
                     '" . $funcionario->getSalario() . "',
                     '" . $funcionario->getEmail() . "',
                     '" . $funcionario->getSenha() . "')";
        mysqli_query($conexao,$consulta);
    }
    
    function retornarClientes(){
    
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }
    
    function retornarProdutos(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao,$consulta);
        return $listaProdutos;
    }

    function retornarFuncionarios(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM funcionario";
        $listaFuncionarios = mysqli_query($conexao,$consulta);
        return $listaFuncionarios;
    }
}
