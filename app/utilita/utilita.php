<?php
namespace App\Utilita;

class Utilita
{
    public static function Dump($variabile, $nome="")
    {
        echo "<h4>$nome</h4>";
        echo "<pre>";
        var_dump($variabile);
        echo "</pre>";
    }

    public static function DumpDie($variabile, $nome="")
    {
        echo "<h4>$nome</h4>";
        echo "<pre>";
        var_dump($variabile);
        echo "</pre>";
        die();
    }

    public static function PulisciStringa($testo)
    {
        $testo = str_replace('"', "", $testo);
        $testo = str_replace("'", "`", $testo);
        return $testo;
    }

    public static function PulisciStringaVirgolette($testo)
    {
        $testo = str_replace('"', "", $testo);
        $testo = str_replace("'", "`", $testo);
        return $testo;
    }

    public static function ConvertYMDToDMY($testo)
    {
        if(is_null($testo) || empty($testo)) {
            return null;
        } else {
            $data = \DateTime::createFromFormat('Y-m-d', $testo);
            return $data->format('d/m/Y');
        }
    }
}
