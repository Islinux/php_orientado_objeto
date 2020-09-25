<?php

class Login
{
    public static $user;
    public static function vericarLogin()
    {
        echo "O Usuário " . self::$user . " está logado";
    }

    public function sairSistema()
    {
        echo "O Usuário " . self::$user . " saliou";
    }
}


Login::$user = "admin";
Login::vericarLogin();

$login = new Login();
$login->sairSistema();
