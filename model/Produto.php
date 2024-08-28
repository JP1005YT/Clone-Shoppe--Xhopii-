<?php

    class Produto{

        //atributos
        protected $nome;
        protected $fabricante;
        protected $descricao;
        protected $valor;
        protected $quant;
        protected $imageSrc;

        //construtor
        public function __construct($nome, $fabricante, $descricao,$valor,$quant,$imageSrc){
            $this->nome = $nome;
            $this->fabricante = $fabricante;
            $this->descricao = $descricao;
            $this->valor = $valor;
            $this->quant = $quant;
            $this->imageSrc = $imageSrc;
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