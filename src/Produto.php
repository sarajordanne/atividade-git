<?php

class Produto
{
    private $codigo;
    private $descricao;
    private $preco;
    private $quantidade;

    public function __construct($codigo, $descricao, $preco, $quantidade)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function exibirProduto()
    {
        return "Produto: " . $this->descricao .
               " | Preço: R$ " . $this->preco .
               " | Estoque: " . $this->quantidade;
    }
}