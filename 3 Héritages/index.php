<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// Instanciation de CompteCourant. 
$compte1 = new CompteCourant('Sam', 500, 200);
// call methode retirer de la class comptecourant  solde 500 - 15 = 485.  
// A tester retiré 600 - 500 = solde insufisant.
$compte1->retirer(15);
$compte1->getDecouvert();
var_dump($compte1);


$compte2 = new CompteEpargne('bob', 200, 1);
// methode retirer de  la class Compte
$compte2->retirer(15);
echo 'taux intéret ' . $compte2->getTauxInterets();
var_dump($compte2);

$compte2->verserInterets();

var_dump($compte2);





