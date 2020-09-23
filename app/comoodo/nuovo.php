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

    public function DatiGeneraliRegistra($f3)
    {
        $data = $f3->get('POST.data');
        $periodo = $f3->get('POST.periodo');
        $comeva = $f3->get('POST.comeva');
        echo $data;
        echo $periodo;
        echo $comeva;
    }
}