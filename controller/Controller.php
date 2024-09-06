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
}
?>