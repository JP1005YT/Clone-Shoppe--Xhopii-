<?php
define('BASE_URL', '/xhopii');

include_once __DIR__ . "../../model/BD.php";
include_once __DIR__ . "../../model/Produto.php";
include_once __DIR__ . "../../model/Cliente.php";

class Controller{
    
    public $bd;

    public function __construct(){
        $this->bd = new BancoDeDados("localhost","root","","xhopii");
    }
    public function obterProdutosBaratos(){
        return $this->bd->retornarProdutos();
    }

    public function obterProdutos(){
        return $this->bd->retornarProdutos();
    }
    public function obterProdutosPerId($id){
        $produtos = $this->bd->retornarProdutos(); 
        foreach($produtos as $produto){
            if($produto['id'] == $id){
                return $produto;
            }
        }
        return null;
    }

    public function ObterClientes(){
        return $this->bd->retornarClientes();
    }

    public function ObterFuncionarios(){
        return $this->bd->retornarFuncionarios();
    }

    public function inserirProduto($nome,$fabricante,$descricao,$valor,$quant,$imageSrc){
        $produto = new Produto($nome,$fabricante,$descricao,$valor,$quant,$imageSrc);
        $this->bd->inserirProduto($produto);
    }
    public function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
        $cliente = new Cliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
        $this->bd->inserirCliente($cliente);
    }
    public function inserirFuncionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha){
        $funcionario = new Funcionario($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha);
        $this->bd->inserirFuncionario($funcionario);
    }

    public function login($email, $senha){
        session_start();
        $resp = $this->ObterClientes();
        while($row = $resp->fetch_assoc()){
            var_dump($row['email'] == $email);
            var_dump($row['senha'] == $senha);

            if($row['email'] == $email && $row['senha'] == $senha){
                $cliente = new Cliente($row['cpf'], $row['nome'], $row['sobrenome'], $row['dataNasc'], $row['telefone'], $row['email'], $row['senha']);
            }
        }
        if($cliente != null){
            $_SESSION['cliente'] = $cliente;
            header('Location: ./../../../index.php');
        }else{
            header('Location: ./index.php');
        }
    }
}
?>