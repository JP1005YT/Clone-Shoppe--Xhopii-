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

   public function visualizarProdutos(){

    $listaProdutos = $this->BancoDeDados->retornarProdutos();
    while ($produto = mysqli_fetch_assoc($listaProdutos)) {
        return "<section class=\"conteudo-bloco\">" . "<h2>" . $produto["nome"] ."</h2>"
        . "<p>Fabricante: " . $produto["fabricante"] . "</p>"
        . "<p>Descrição: " . $produto["descricao"] . "</p>"
        . "<p>Valor: " . $produto["valor"] . "</p>" . "</section>";
        }
    }

}