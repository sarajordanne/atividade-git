<?php

class Funcionario
{
    private $nome;
    private $matricula;
    private $salario;

    public function __construct($nome, $matricula, $salario)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->salario = $salario;
    }
}