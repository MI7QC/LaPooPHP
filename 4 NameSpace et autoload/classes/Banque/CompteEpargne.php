<?php

namespace App\Banque;

class CompteEpargne extends Compte
{
   
/**
 * Taux d'intérêts
 * @var int
 */
private $tauxInterets;

/**
 * Constructeur du compte épargne
 * @param string $titulaire Titulaire du compte
 * @param float $montant Solde du compte
 * @param int $taux Taux d'intérêts du compte
 * @return void 
 */
public function __construct(string $titulaire, float $montant, int $taux)
{
    // On appelle le constructeur du parent
    parent::__construct($titulaire, $montant);

    // On définit les propriétés "locales"
    $this->tauxInterets = $taux;
}

/**
 * Get taux d'intérêts
 *
 * @return  int
 */ 
public function getTauxInterets()
{
    return $this->tauxInterets;
}

/**
 * Set taux d'intérêts du compte
 *
 * @param  int  $tauxInterets  Taux d'intérêts du compte
 *
 * @return  self
 */ 
public function setTauxInterets(int $tauxInterets): self
{
    if($tauxInterets >= 0){
        $this->tauxInterets = $tauxInterets;  
    }
    return $this;
}

public function verserInterets(){
    if($this->solde > 0){
        $this->solde = $this->solde + ($this->solde * $this->tauxInterets / 100);
    }else{
        echo 'Solde insuffisant';
    }
}
}