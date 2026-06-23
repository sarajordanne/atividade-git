<?php

class Funcionario
{
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}