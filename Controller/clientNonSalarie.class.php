<?php

class ClientNonSalarie
{
	private $nom;
	private $prenom;
	private $carte_identite;
	private $id_clients;


	public function __Construct($nom, $prenom, $carte_identite, $id_clients)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->carte_identite = $carte_identite;
		$this->id_clients = $id_clients;
	}

	//Définition des gett
	public function getNom() { return $this->nom; }
	public function getPrenom() { return $this->prenom; }
	public function getCarteIdentite() { return $this->carte_identite; }
	public function getIdClient() { return $this->id_clients; }

	public function setNom($nom) 
	{ 
		$this->nom = $nom; 
	}

	public function setPrenom($prenom) 
	{ 
		$this->prenom = $prenom; 
	}

	public function setCarteIdentite($carte_identite) 
	{ 
		$this->carte_identite = $carte_identite; 
	}

	public function setIdClient($id_clients) 
	{ 
		$this->id_clients = $id_clients; 
	}
   

}