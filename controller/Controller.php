<?php

include "./model/BD.php";

class Controller{
    
    public $bd;

    public function __construct(){
        $this->bd = new BancoDeDados("localhost","root","","xhopii");
    }
    public function obterProdutosBaratos(){
        return $this->bd->retornarProdutos();
    }
}
?>