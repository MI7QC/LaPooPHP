<?php 

/**
 * Classe correspondant à un compte bancaire
 */
class Compte
{

 /**
 * Constructeur de notre objet Compte
 * @param string $titulaire Titulaire du compte
 * @param float $solde Solde du compte
 */
    public function __construct(string $titulaire, float $solde = 500)
    {
        // On affecte le titulaire à la propriété titulaire
        $this->titulaire = $titulaire;

        // On affecte le solde à la propriété solde
        $this->solde = $solde;
    }
    
/**
 * Voir le solde  compte
 * @return void 
 */
    public function voirSolde() 
    {
        echo "Le solde du comptre est de $this->solde CAD";
    }

/**
 * Déposer de l'argent sur le compte
 * 
 * @param float $montant Montant déposé
 * @return void
 */ 
    public function deposer(float $montant)
    {
        //on vérifie si le montant est positif
        if($montant > 0)
        { 
            $this->solde += $montant;
        }
    }

/**
 * Retire un montant du solde du compte
 * 
 * @param float $montant à retirer
 * @return void
 */
    public function retirer(float $montant)
    {
        // on vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant)
        {
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }

}

?>