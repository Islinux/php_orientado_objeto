<?php

// clase abstracta porque me servir de modelo
abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return "Dinheiro no Banco C$" . $this->saldo . "<br>";
    }

    abstract protected function sacar($quantidad);

    abstract protected function depositar($quantidad);
}

//crear otro banco
class Bancentro extends Banco
{
    public function depositar($quantidad = 0)
    {
        $this->saldo += $quantidad;
        echo "Depositou: C$$quantidad <br>";
    }

    public function sacar($quantidad = 0)
    {
        $this->saldo -= $quantidad;
        echo "Sacou: C$$quantidad <br>";
    }
}

$bancentro = new Bancentro();
$bancentro->setSaldo(5000);
echo $bancentro->getSaldo();
$bancentro->depositar(100);
$bancentro->sacar();
echo $bancentro->getSaldo();
