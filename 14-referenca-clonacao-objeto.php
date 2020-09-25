<?php
//referenca e clonagem de objetos
class Pessoa{
    public $idade;
    // es invocada cuando usamos clone
    public function __clone(){
        echo "Clonagem de Objetos";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 30;

// pessoa2 e referenca de pessoa
$pessoa2 = $pessoa;
echo $pessoa2->idade = 35;
echo "<br>";
echo $pessoa->idade;

// possoa3 e clonagem de pessoa
$pessoa3 = clone $pessoa;
echo "<br>";

echo $pessoa->idade = 40;
echo "<br>";
echo $pessoa3->idade = 50;
echo "<br>";



