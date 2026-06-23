<?php

class Produto
{
    private $codigo;
    private $descricao;

    public function __construct($codigo, $descricao)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
    }
}