<?php 

/**
 * Classe correspondant à un compte bancaire
 */
class Compte
{

    const INTERETS = 0;

    /**
     * Titulaire du compte
     * @var string
     */
    private $titulaire;

    /**
     * Solde du compte
     * @var float
     */
    private $solde;

    public function __construct(string $titulaire, float $solde = 500)
    {
        // On affecte le titulaire à la propriété titulaire
        $this->titulaire = $titulaire;

        // On affecte le solde à la propriété solde
        $this->solde = $solde;
    }

    
    /**
     * Retourne le titulaire du compte
     * @return string Titulaire du compte
     */
    public function getTitulaire():string
    {
        return $this->titulaire;
    }

    /**
     * Retourne le solde du compte
     * @return float Solde du compte
     */
    public function getSolde():float
    {
        return $this->solde;
    }



    /**
     * Définit le titulaire du compte
     * @param string $titulaire Titulaire du compte
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $titulaire):self
    {
        //vérifie si on n'a un titulaire
        if($titulaire != ""){
            $this->titulaire = $titulaire;
        }
        return $this;
    }

    /**
     * Définit le solde du compte
     * @param float $solde Solde du compte
     * @return Compte Compte bancaire
     */
    public function setSolde(float $solde):self
    {
        //vérifie si le solde du compte
        if($solde >= 0){
            $this->solde = $solde;
        }
        return $this;
    }
    

    /**
     * Méthode magique pour la conversion en chaîne de caractères
     * @return string 
     */
    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }
}
?>