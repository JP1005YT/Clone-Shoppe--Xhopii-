<?php
class Funcionario{
    //atributos
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataNasc;
    protected $telefone;
    protected $cargo;
    protected $salario;
    protected $email;
    protected $senha;

    //construtor
    public function __construct($nome, $sobrenome, $cpf, $dataNasc, $telefone, $cargo, $salario, $email, $senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->email = $email;
        $this->senha = $senha;
    }
    //sets e gets
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
     public function setSobrenome($sobrenome){
         $this->sobrenome = $sobrenome;
    }
     public function getDataNasc(){
         return $this->dataNasc;
    }
     public function setDataNasc($dataNasc){
         $this->dataNasc = $dataNasc;
    }
    public function getTelefone(){
        return $this->telefone;
    }  
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
}