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

// LOGIN
$f3->route('GET @login_autenticazione_richiestapin: /', '\App\Login\Autenticazione->RichiestaPIN');
$f3->route('POST @login_autenticazione_verificapin: /', '\App\Login\Autenticazione->VerificaPIN');

// COMOODO
$f3->route('GET @comoodo_nuovo_datigenerali: /nuovo', '\App\Comoodo\Nuovo->DatiGenerali');
$f3->route('POST @comoodo_nuovo_datigenerali_registra: /nuovo', '\App\Comoodo\Nuovo->DatiGeneraliRegistra');

$f3->run();