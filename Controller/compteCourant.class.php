<?php

class CompteCourant
{
	
	private $agios
	private $id_comptes;


	public function __Construct($agios, $id_comptes)
	{
		$this->agios = $agios
        $this->id_comptes = $id_comptes;
	}

	//Définition des gett
	public function getAgios() { return $this->agios; }
    public function getIdComptes() { return $this->id_comptes; }

    //Définition des Setteurs
	public function setAgios($agios) 
	{ 
		$this->agios = $agios; 
    }
    
    public function setIdComptes($id_comptes) 
	{ 
		$this->id_comptes = $id_comptes; 
	}
   
}