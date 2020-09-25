<?php

class Pessoa
{
    const nome = "Isaac";
    public function exibirNome()
    {
        echo self::nome;
    }
}

class Isaac extends Pessoa
{
    const nome = "Martinez";
    public function exibirNome()
    {
        echo parent::nome; //padre
        echo self::nome; //el mismo
    }
}

$isaac = new Isaac();
$isaac->exibirNome();
