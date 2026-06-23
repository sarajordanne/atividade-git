<?php

class Funcionario
{
    private $nome;
    private $matricula;
    private $salario;
    private $cargo;

    public function __construct($nome, $matricula, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function exibirDados()
    {
        return "Nome: " . $this->nome .
               " | Cargo: " . $this->cargo .
               " | Salário: R$ " . $this->salario;
    }
}