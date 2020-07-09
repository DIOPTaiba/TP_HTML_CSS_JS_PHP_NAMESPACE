<?php

class CompteEpargne
{
	
	private $frais_ouverture;
    private $montant_remuneration;
	private $id_comptes;


	public function __Construct($frais_ouverture, $montant_remuneration, $id_comptes)
	{
		$this->frais_ouverture = $frais_ouverture;
        $this->montant_remuneration = $montant_remuneration;
        $this->id_comptes = $id_comptes;
	}

	//Définition des gett
	public function getFraisOuverture() { return $this->frais_ouverture; }
    public function getMontantRemuneration() { return $this->montant_remuneration; }
    public function getIdComptes() { return $this->id_comptes; }

    //Définition des Setteurs
	public function setFraisOuverture($frais_ouverture) 
	{ 
		$this->frais_ouverture = $frais_ouverture; 
	}

	public function setMontantRemuneration($montant_remuneration) 
	{ 
		$this->montant_remuneration = $montant_remuneration; 
    }
    
    public function setIdComptes($id_comptes) 
	{ 
		$this->id_comptes = $id_comptes; 
	}
   

}