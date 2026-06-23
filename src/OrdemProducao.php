<?php

class OrdemProducao
{
    private $numero;
    private $data;

    public function __construct($numero, $data)
    {
        $this->numero = $numero;
        $this->data = $data;
    }
}