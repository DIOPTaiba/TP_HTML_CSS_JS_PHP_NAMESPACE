<?php

class ResponsableCompte
{
	
	private $id_employes;
    private $login;
	private $mot_de_passe;


	public function __Construct ($id_employes, $login, $mot_de_passe)
	{
		$this->id_employes = $id_employes;
        $this->login = $login;
        $this->mot_de_passe = $mot_de_passe;
	}

	//Définition des gett
	public function getIdEmployes() { return $this->id_employes; }
    public function getLogin() { return $this->login; }
    public function getMotDePasse() { return $this->mot_de_passe; }

    //Définition des Setteurs
	public function setIdEmployes($id_employes) 
	{ 
		$this->id_employes = $id_employes; 
	}

	public function setLogin($login) 
	{ 
		$this->login = $login; 
    }
    
    public function setMotDePasse($mot_de_passe) 
	{ 
		$this->mot_de_passe = $mot_de_passe; 
	}
   

}