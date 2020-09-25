<?php
class Login
{
    private $email;
    private $senha;


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
$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();

echo "<hr>";
echo $logar->getEmail() . "<br>";
echo $logar->getSenha();
