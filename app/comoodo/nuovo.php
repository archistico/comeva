<?php
namespace App\Comoodo;

class Nuovo
{
    public function DatiGenerali($f3)
    {
        $f3->set('titolo', 'Nuovo');
        $f3->set('contenuto', '/comoodo/nuovo/dati_generali.htm');
        echo \Template::instance()->render('templates/bs4/base.htm');
    }
}