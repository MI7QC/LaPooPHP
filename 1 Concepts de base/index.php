<?php
require_once 'classes/Compte.php';

// Première instance de la classe Compte
$compte1 = new Compte('sam gamge',500);

// Deuxième instance de la classe Compte
$compte2 = new Compte('Weed');

var_dump($compte1, $compte2);


//depot de 1000$ dans le compte1
$compte1->deposer(1000);
//affiche les soldes actuel du compte1
$compte1->voirSolde();
//retire 250  sur le solde actuel
$compte1->retirer(250);

//affiche les soldes actuel du compte1
// $compte1->voirSolde();


