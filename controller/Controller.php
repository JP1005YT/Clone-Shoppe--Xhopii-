<?php

include "./model/BD.php";
include "./model/Produto.php";

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

    public function inserirProduto($nome,$fabricante,$descricao,$valor,$quant,$imageSrc){
        
    }
}
?>