<?php
require_once 'classes/Compte.php';

// // Première instance de la classe Compte
$compte1 = new Compte('sam gamge',500);


//Fatal error: Uncaught Error: Cannot access private property Compte::$solde
// echo $compte1->solde;


//l'instance de classe est inutile pour la lecture des constantes.
echo Compte::INTERETS;

//titulaire du compte 
echo $compte1->getTitulaire();


// Ce code fonctionnera
$compte1->setSolde(45);
$compte1->setTitulaire('Bob');

// Ce code provoquera une erreur
// $compte1->setSolde('Bob');


echo $compte1->__toString();
