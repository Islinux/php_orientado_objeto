<?php

class Pessoa
{
    public $idade;
    //se utiliza cuando usamos clone
    public function __clone()
    {
        echo "Clonagem de objeto";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

//pesoa2 hace referenca a Pessoa
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
echo "<br>";
echo $pessoa2->idade;
echo "<br>";

// llama a la function magica __clone
$pessoa3 = clone $pessoa;
$pessoa3->idade = 30;
echo "<br>";
echo $pessoa3->idade;
