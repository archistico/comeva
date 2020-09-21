<?php
require 'vendor/autoload.php';

// ----------------------
//   FAT FREE FRAMEWORK
// ----------------------

$f3 = \Base::instance();
$f3->set('CACHE', false);
$f3->set('DEBUG', 3);

// ----------------------
//         ROUTE
// ----------------------

$f3->route('GET @login_autenticazione_richiestapin: /', '\App\Login\Autenticazione->RichiestaPIN');
$f3->route('POST @login_autenticazione_verificapin: /', '\App\Login\Autenticazione->VerificaPIN');

$f3->route('GET @comoodo_nuovo_datigenerali: /nuovo', '\App\Comeva\Nuovo->DatiGenerali');

// Appuntamenti
// $f3->route('GET @appuntamenti: /appuntamenti', '\App\Appuntamenti->Tabella');
// $f3->route('GET @giorno: /appuntamenti/@data', '\App\Appuntamenti->TabellaGiorno');

$f3->run();