<?php

use App\Autoloader;
//pas besoin de use pour compte vue que la class est abstract
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant,CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

// Instanciation de CompteCourant. 
$compte1 = new CompteCourant('Sam', 500, 200);
// call methode retirer de la class comptecourant  solde 500 - 15 = 485.  
// A tester retiré 600 - 500 = solde insufisant.
$compte1->retirer(15);
var_dump($compte1);


$compte2 = new CompteEpargne('bob', 200, 10);
// methode retirer de  la class Compte
$compte2->retirer(15);
echo 'taux intéret ' . $compte2->getTauxInterets();
var_dump($compte2);

$compte2->verserInterets();

var_dump($compte2);