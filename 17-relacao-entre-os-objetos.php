<?php

// agregacao
// Na agregacao, uma clase presica de outra para executar sua acao, ou seja, uma clase utiliza a outra como parte de si propia

class Produtos
{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho
{
    public $produtos;

    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach ($this->produtos as $produto) {
            echo $produto->nome . "<br>";
            echo $produto->valor . "<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", 1500);
$produto2 = new Produtos("Mouse", 50);
$produto3 = new Produtos("Desktop", 3000);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->exibe();
