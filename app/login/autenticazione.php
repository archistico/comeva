<?php
namespace App\Login;

class Autenticazione
{
    public function RichiestaPIN($f3)
    {
        echo \Template::instance()->render('templates/login/richiestapin.htm');
    }

    public function VerificaPIN($f3)
    {
        echo "verifica PIN";
    }
}