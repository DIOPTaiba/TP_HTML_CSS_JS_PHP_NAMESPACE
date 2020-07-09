<?php

class Clients
{
	
	private $adresse;
	private $telephone;
    private $email;
    private $date_inscription;
	private $type_client;
	private $id_responsable_compte;


	public function __Construct($adresse, $telephone, $email, $date_inscription, $type_client, $id_responsable_compte)
	{
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->email = $email;
		$this->type_client = $type_client;
        $this->date_inscription = $date_inscription;
        $this->id_responsable_compte = $id_responsable_compte;
	}

	//Définition des gett
	public function getAdresse() { return $this->adresse; }
	public function getTelephone() { return $this->telephone; }
	public function getEmail() { return $this->email; }
	public function getTypeClient() { return $this->type_client; }
    public function getDateInscription() { return $this->date_inscription; }
    public function getIdResponsableCompte() { return $this->id_responsable_compte; }

    //Définition des Setteurs
	public function setAdresse($adresse) 
	{ 
		$this->adresse = $adresse; 
	}

	public function setTelephone($telephone) 
	{ 
		$this->telephone = $telephone; 
	}

	public function setEmail($email) 
	{ 
		$this->email = $email; 
	}

	public function setTypeClient($type_client) 
	{ 
		$this->type_client = $type_client; 
	}

	public function setDateInscription($date_inscription) 
	{ 
		$this->date_inscription = $date_inscription; 
    }
    
    public function setIdResponsableCompte($id_responsable_compte) 
	{ 
		$this->id_responsable_compte = $id_responsable_compte; 
	}
   


}