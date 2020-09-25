<?php
// clone * ya estudiados
// construct * ya estudiados
// invoke
// tostring
// get 
// set

class Pessoa
{
    private $nome;
    private $lista = array();

    // public function __set($nome, $valor)
    // {
    //     $this->nome = $valor;
    // }

    public function __set($nome, $valor)
    {
        $this->lista[$nome] = $valor;
    }

    // public function __get($nome)
    // {
    //     return $this->nome;
    // }

    public function __get($nome)
    {
        return $this->lista[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto pessoa";
    }

    public function __invoke()
    {
        return "Objeto como funcoa";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Isaac";
$pessoa->idade = 30;
echo $pessoa->nome . "<br>";
echo $pessoa . "<br>";
echo $pessoa() . "<br>";
echo "<pre>";
var_dump($pessoa);
