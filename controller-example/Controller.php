<?php

class Controlador{
    //atributos
    private $BancoDeDados;

    function __construct() {
        $this->BancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }
    //métodos
   public function cadastrarProdutos($nome,$fabricante,$descricao,$valor){
        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->BancoDeDados->inserirProduto($produto);
   }

   


   public function obterProdutos(){

    $listaProdutos = $this->BancoDeDados->retornarProdutos();

    echo $listaProdutos;

   }
}