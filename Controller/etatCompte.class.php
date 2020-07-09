<?php

class EtatCompte
{
	
	private $etat_compte;
    private $date_changement_etat;
	private $id_comptes;


	public function __Construct($etat_compte, $date_changement_etat, $id_comptes)
	{
		$this->etat_compte = $etat_compte;
        $this->date_changement_etat = $date_changement_etat;
        $this->id_comptes = $id_comptes;
	}

	//Définition des gett
	public function getEtatCompte() { return $this->etat_compte; }
    public function getDateChangementEtat() { return $this->date_changement_etat; }
    public function getIdComptes() { return $this->id_comptes; }

    //Définition des Setteurs
	public function setEtatCompte($etat_compte) 
	{ 
		$this->etat_compte = $etat_compte; 
	}

	public function setDateChangementEtat($date_changement_etat) 
	{ 
		$this->date_changement_etat = $date_changement_etat; 
    }
    
    public function setIdComptes($id_comptes) 
	{ 
		$this->id_comptes = $id_comptes; 
	}
   

}