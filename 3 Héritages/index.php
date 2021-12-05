<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// // Première instance de la classe Compte
$compte1 = new CompteCourant('Sam', 500, 200);
$compte1->retirer(15);
$compte1->getDecouvert();
var_dump($compte1);


$compte2 = new CompteEpargne('bob', 200, 1);
$compte2->retirer(15);
echo 'taux intéret ' . $compte2->getTauxInterets();
var_dump($compte2);

$compte2->verserInterets();

var_dump($compte2);





