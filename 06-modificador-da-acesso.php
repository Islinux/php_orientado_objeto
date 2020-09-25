<?php
/*
public - fará com que nao haja ocultacao nenhuma, toda propiedade ou método declarado com public é acessiveis por todos que quiserem acessá-los.

protected - visibilidade protected faz com que todos os herdeiros vejam as propiedades ou métodos protegidos como se fossem públicos.

private - ao contrário do public, esse modicador faz com que qualquer método ou propiedade se só e somente só pela classe que a declarou.
*/

class Veiculo
{
    private $modelo;
    public $cor;
    public $ano;
    public $ruedas;

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

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

$veiculo = new Veiculo();
$veiculo->setModelo("GOL");
echo $veiculo->getModelo();
echo "<pre>";
print_r($veiculo);
