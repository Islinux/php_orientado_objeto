<?php
// polimorfismo é sobreescrivir o metodo heredado
class Animal
{
    public function andar()
    {
        echo "O animal andou";
    }
}

class Cavalo extends Animal
{
    public function andar()
    {
        echo "O Cavalo andou";
    }
}

$animal = new Cavalo();
$animal->andar();
