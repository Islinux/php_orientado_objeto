<?php
// ocorrencia anormal que afecta o funcionamento da aplicacao
// Exception é a classe base para todas Exceptions
// messagem, code, file, line

class Newsletter{
    public function cadastrar_email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            // lanzar uma exception
            throw new Exception("Este email é invalido", 1);
        else :
            echo "Email Cadastrado com sucesso";
        endif;
    }
}

$newsletter = new Newsletter();
try {
    $newsletter->cadastrar_email("martinez");
} catch (Exception $e) {
    echo "Messagem: " . $e->getMessage() . "<br>";
    echo "Codigo: " . $e->getCode() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}
