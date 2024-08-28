<?php
    class Cliente{
        //atributos

        protected $nome;
        protected $cpf;
        protected $endereco;
        protected $bairro;
        protected $cidade;
        protected $estado;
        protected $cep;
        protected $telefone;

        //construtor
        public function __construct($nome, $cpf, $endereco,$bairro,$cidade,$estado,$cep,$telefone){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->telefone = $telefone;
        }

        //sets e gets
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getEnder(){
            return $this->endereco;
        }
        public function setEnder($endereco){
            $this->endereco = $endereco;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function getState(){
            return $this->estado;
        }
        public function setState($estado){
            $this->state = $estado;
        }
        public function getCcep(){
            return $this->cep;
        }
        public function setCcep($cep){
            $this->cep = $cep;
        }
        public function getTelefone(){
            return $this->telefone;
        }  
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

    }