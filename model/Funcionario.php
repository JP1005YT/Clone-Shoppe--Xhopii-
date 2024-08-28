<?php
class Funcionario{
    //atributos
    protected $nome;
    protected $cpf;
    protected $sobrenome;
    protected $dataNasc;
    protected $telefone;
    protected $email;
    protected $salario;

    //construtor
    public function __construct($nome, $cpf, $sobrenome,$dataNasc,$telefone,$email,$salario){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sobrenome = $sobrenome;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->salario = $salario;
    }
}