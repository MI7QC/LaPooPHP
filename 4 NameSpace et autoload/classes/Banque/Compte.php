<?php 

namespace App\Banque;

/**
 * Classe correspondant à un compte bancaire
 */
abstract class Compte
{
    /**
     * Titulaire du compte
     * @var string
     */
    private $titulaire;

    /**
     * Solde du compte
     * @var float
     */
    protected $solde;

     /**
     * 
     *Constructeur de compte bancaire
     * @param string $nom du titulaire
     * @param float $solde Montant du solde à l'ouverture
     */
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
     * Retire un  montant du solde du compte
     * 
     * @param float $solde
     * @return void
     */
    public function retirer(float $solde)
    {
        // On vérifie si le découvert permet le retrait
        if($solde > 0 && $this->solde - $solde >= $solde)                       
        {
            $this->solde -= $solde;
        }else{
            echo 'Montant invalide ou solde insuffisant';
        }
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