<?php
define('BASE_URL', '/xhopii');

include __DIR__ . "./../model/BD.php";
include __DIR__ . "./../model/Produto.php";

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

    public function inserirProduto($nome,$fabricante,$descricao,$valor,$quant,$imageSrc){
        
    }
}
?>