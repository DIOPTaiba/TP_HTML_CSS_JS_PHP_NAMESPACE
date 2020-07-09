<?php

class Comptes
{
	
	private $numero_compte;
	private $cle_rib;
    private $solde;
    private $date_ouverture;
	private $numero_agence;
	private $id_clients;


	public function __Construct($numero_compte, $cle_rib, $solde, $date_ouverture, $numero_agence, $id_clients)
	{
		$this->numero_compte = $numero_compte;
		$this->cle_rib = $cle_rib;
		$this->solde = $solde;
		$this->numero_agence = $numero_agence;
        $this->date_ouverture = $date_ouverture;
        $this->id_clients = $id_clients;
	}

	//Définition des gett
	public function getNumeroCompte() { return $this->numero_compte; }
	public function getCleRib() { return $this->cle_rib; }
	public function getSolde() { return $this->solde; }
	public function getNumeroAgence() { return $this->numero_agence; }
    public function getDateOuverture() { return $this->date_ouverture; }
    public function getIdClients() { return $this->id_clients; }

    //Définition des Setteurs
	public function setNumero_compte($numero_compte) 
	{ 
		$this->numero_compte = $numero_compte; 
	}

	public function setCleRib($cle_rib) 
	{ 
		$this->cle_rib = $cle_rib; 
	}

	public function setSolde($solde) 
	{ 
		$this->solde = $solde; 
	}

	public function setNumeroAgence($numero_agence) 
	{ 
		$this->numero_agence = $numero_agence; 
	}

	public function setDateOuverture($date_ouverture) 
	{ 
		$this->date_ouverture = $date_ouverture; 
    }
    
    public function setIdClients($id_clients) 
	{ 
		$this->id_clients = $id_clients; 
	}
   

}