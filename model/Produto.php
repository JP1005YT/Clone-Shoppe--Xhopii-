<?php

    class Produto{

        //atributos
        protected $nome;
        protected $fabricante;
        protected $descricao;
        protected $valor;

        //construtor
        public function __construct($nome, $fabricante, $descricao,$valor){
            $this->nome = $nome;
            $this->fabricante = $fabricante;
            $this->descricao = $descricao;
            $this->valor = $valor;
        }

        //sets e gets
        public function get_Nome(){
            return $this->nome;
        }
        public function set_Nome($nome){
            $this->nome = $nome;
        }
        public function get_Fabricante(){
            return $this->fabricante;
        }
        public function set_Fabricante($fabricante){
            $this->fabricante = $fabricante;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
            $this->valor = $valor;
        }

        //métodos
        public function aplicarCupom($cupomTaxa){
            $valorDesconto = ($this->valor * $cupomTaxa) / 100;
            $this->valor = $this->valor - $valorDesconto;
        }
    }
?>