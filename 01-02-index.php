<?php
class Pessoa
{
    // atributos
    public $nome;
    public $idade;

    //metodo
    public function falar()
    {
        echo $this->nome . " de " . $this->idade . " acabou de falar";
    }
}

// instanciar a clase
$isaac = new Pessoa();
$isaac->nome = "Isaac Abraham Martinez Rizo";
$isaac->idade = 29;
$isaac->falar();
