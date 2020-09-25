<?php
class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($nome, $email, $senha)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $email_filtrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email_filtrado;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function Logar()
    {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") :
            echo "Logado com sucesso!";
        else :
            echo "Dados inválidos";
        endif;
    }
}

// instanciar a clase
$logar = new Login("teste@teste.com", "123456", "Isaac");
$logar->Logar();
echo "<hr>";
echo $logar->getNome() . "<br>";
echo $logar->getEmail() . "<br>";
echo $logar->getSenha() . "<br>";
