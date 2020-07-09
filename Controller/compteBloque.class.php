<?php

class CompteBloque
{
	
	private $frais_ouverture;
    private $montant_remuneration;
    private $duree_blocage;
	private $id_comptes;


	public function __Construct($frais_ouverture, $montant_remuneration, $duree_blocage, $id_comptes)
	{
		$this->frais_ouverture = $frais_ouverture;
        $this->montant_remuneration = $montant_remuneration;
        $this->duree_blocage = $duree_blocage;
        $this->id_comptes = $id_comptes;
	}

	//Définition des gett
	public function getFraisOuverture() { return $this->frais_ouverture; }
    public function getMontantRemuneration() { return $this->montant_remuneration; }
    public function getDureeBlocage() { return $this->duree_blocage; }
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
    
    public function setDureeBlocage($duree_blocage) 
	{ 
		$this->duree_blocage = $duree_blocage; 
    }
    
    public function setIdComptes($id_comptes) 
	{ 
		$this->id_comptes = $id_comptes; 
	}
   

}