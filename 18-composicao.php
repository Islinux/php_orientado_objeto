<?php
//composicao: uma classe cria a uma instancia de outra classe dentro de si propia, sendo assim, quando ela for destruida, a outra classe tambem sera

class Pessoa
{
    public function atribuirNome($nome)
    {
        return "Nome da pessoa é $nome";
    }
} //endclass


class Exibe
{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        // instanciar la clase aqui esto se llama composicion
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome()
    {
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("Isaac Martinez");
$exibe->exibeNome();
