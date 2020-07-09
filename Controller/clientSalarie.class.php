<?php

class ClientSalarie
{
    private $_id;
    private $_nom;
	private $_prenom;
	private $_carte_identite;
    private $_profession;
    private $_salaire;
    private $_nom_employeur;
    private $_adresse_entreprise;
    private $_raison_social;
    private $_identifiant_entreprise;

	public function __Construct($nom, $prenom, $carte_identite, $profession, $salaire, $nom_employeur, $adresse_entreprise, $raison_social, $identifiante_entreprise)
	{
        $this->_id = $id;
		$this->_nom = $nom;
		$this->_prenom = $prenom;
        $this->_carte_identite = $carte_identite;
        $this->_profession = $profession;
        $this->_salaire = $salaire;
        $this->_nom_employeur = $nom_employeur;
        $this->_adresse_entreprise = $adresse_entreprise;
        $this->_raison_social = $raison_social;
        $this->_identifiante_entreprise = $identifiante_entreprise;
	}

    //Définition des getteurs
    public function getId() { return $this->_id; }
	public function getNom() { return $this->_nom; }
	public function getPrenom() { return $this->_prenom; }
    public function getCarteIdentite() { return $this->_carte_identite; }
    public function getProfession() { return $this->_profession; }
    public function getSalaire() { return $this->_salaire; }
    public function getNomEmployeur() { return $this->_nom_employeur; }
    public function getAdresseEntreprise() { return $this->_adresse_entreprise; }
    public function getRaisonSocial() { return $this->_raison_social; }
    public function getIdentifianteEntreprise() { return $this->_identifiante_entreprise; }

    //Définition des setteurs
	public function setNom($nom) 
	{ 
		$this->_nom = $nom; 
	}

	public function setPrenom($prenom) 
	{ 
		$this->_prenom = $prenom; 
	}

	public function setCarteIdentite($carte_identite) 
	{ 
		$this->_carte_identite = $carte_identite; 
	}

    public function setProfession($profession) 
	{ 
		$this->_profession = $profession; 
    }
    
    public function setSalaire($salaire) 
	{ 
		$this->_salaire = $salaire; 
	}
    
    public function setNomEmployeur($nom_employeur) 
	{ 
		$this->_nom_employeur = $nom_employeur; 
    }
    
    public function setAdresseEntreprise($adresse_entreprise) 
	{ 
		$this->_adresse_entreprise = $adresse_entreprise; 
    }
    
    public function setRaisonSocial($raison_social) 
	{ 
		$this->_raison_social = $raison_social; 
    }
    
    public function setIdentifiantEntreprise($identifiant_entreprise) 
	{ 
		$this->_identifiant_entreprise = $identifiant_entreprise; 
	}
   


}