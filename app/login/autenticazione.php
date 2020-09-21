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
        $password_hash = $f3->get('POST.password_hash');
        if($password_hash == "b62dc1e428373736775e75e2e922dcd00184c968fc37867024b9b2e30a1f2dffcabad317e4dbe997f3f8d4b38192d436b9e7b3d1351e6f71d781776d955751e5") {
            $f3->reroute('@comoodo_nuovo_datigenerali');
        } else {
            $f3->reroute('@login_autenticazione_richiestapin');
        }
    }
}