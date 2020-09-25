<?php
/*Herenca é um recurso que permite que classes compartilhem atributos e 
métodos afim de aproveitar codigos
*/


class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;
    public $ruedas;

    public function CantidadRuedas($cantidad)
    {
        return $this->ruedas = $cantidad;
    }

    public function Andar()
    {
        echo "Andou<br>";
    }

    public function Parar()
    {
        echo "Parou<br>";
    }
}

class Carro extends Veiculo
{
    public function LigarLimpador()
    {
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo
{
    public function DarGrau()
    {
        echo "Dando grau 321";
    }
}

$carro = new Carro();
$carro->modelo = "GOL";
$carro->cor = "Vermelho";
$carro->ano = 2020;
$carro->CantidadRuedas(4);
$carro->Andar();
$carro->LigarLimpador();
echo "<pre>";
print_r($carro);
$carro->Andar();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "G-200";
$moto->cor = "Azul";
$moto->ano = 2010;
$moto->CantidadRuedas(2);
$moto->Andar();
$moto->DarGrau();
echo "<pre>";
print_r($moto);
$moto->Parar();
