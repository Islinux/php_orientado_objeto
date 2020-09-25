<?php
// associacao
// acontece quando um objeto "utiliza" outro, porem, sim que eles dependam um do outro

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Isaac Martinez";
$cliente->endereco = "Jinotega Nicaragua";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

echo "<pre>";
print_r($dados);