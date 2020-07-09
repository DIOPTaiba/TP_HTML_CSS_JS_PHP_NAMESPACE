<?php

require_once ("connexion_bdd_bp.php");
class Manager
{

	private $_db; // Instance de PDO

 	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function setDb(PDO $db)
	{
	    $this->_db = $db;
	}

	public function verifieUserExiste(ResponsableCompte $responsable_compte)
	{
		$req = $this->_db->prepare('SELECT * FROM responsable_compte WHERE login = :login AND mot_de_passe = :mot_de_passe');

		$req->execute(array(
			'login' => $responsable_compte->getLogin(),
			'mot_de_passe' => $responsable_compte->getMotDePasse()
			));

		return $resultat = $req->fetch();

		$req->closeCursor();
	}

	public function verifieClientExiste($identifiant_client)
	{
		$test = $this->_db->prepare('SELECT id_clients FROM client_non_salarie WHERE carte_identite = ? ');
		$test->execute(array($identifiant_client));

		$reponse = $test->fetch();
		return $reponse['id_clients'];
	}

	public function addClients(Clients $clients /*$adresse, $telephone, $email, $type_client, $id_responsable_compte*/)
	{
		$req = $this->_db->prepare('INSERT INTO clients (adresse, telephone, email, date_inscription,
		 type_client, id_responsable_compte) VALUES(:adresse, :telephone, :email, :date_inscription, :type_client,
		 :id_responsable_compte)');
		$req->execute(array(
			'adresse' => $clients->getAdresse(),
			'telephone' => $clients->getTelephone(),
			'email' => $clients->getEmail(),
			'date_inscription' => $clients->getDateInscription(),
			'type_client' => $clients->getTypeClient(),
			'id_responsable_compte' => $clients->getIdResponsableCompte()
		));
		$id_client = $this->_db->lastInsertId();
		return $id_client;

		$req->closeCursor();
	}

	public function addClientNonSalarie(ClientNonSalarie $clientNonSalarie/*$nom, $prenom, $carte_identite, $id_clients*/)
	{
		$req = $this->_db->prepare('INSERT INTO client_non_salarie (nom, prenom, carte_identite, id_clients) VALUES(:nom, :prenom, :carte_identite, :id_clients)');
		$req->execute(array(
			'nom' => $clientNonSalarie->getNom(),
			'prenom' => $clientNonSalarie->getPrenom(),
			'carte_identite' => $clientNonSalarie->getCarteIdentite(),
			'id_clients' => $clientNonSalarie->getIdClient()
		));

		$req->closeCursor();	
	}

	public function addComptes(Comptes $comptes /*$numero_compte, $cle_rib, $solde, $numero_agence, $id_clients*/)
	{
		$req = $this->_db->prepare('INSERT INTO comptes (numero_compte, cle_rib, solde, date_ouverture, 
		numero_agence, id_clients) VALUES(:numero_compte, :cle_rib, :solde, :date_ouverture, :numero_agence,
		:id_clients)');
		$req->execute(array(
			'numero_compte' => $comptes->getNumeroCompte(),
			'cle_rib' => $comptes->getCleRib(),
			'solde' => $comptes->getSolde(),
			'date_ouverture' => $comptes->getDateOuverture(),
			'numero_agence' => $comptes->getNumeroAgence(),
			'id_clients' => $comptes->getIdClients()
		));

		$id_comptes = $this->_db->lastInsertId();
		return $id_comptes;

		$req->closeCursor();
	}

	public function addEtatCompte(EtatCompte $etat_compte)
	{
		$req = $this->_db->prepare('INSERT INTO etat_compte (etat_compte, date_changement_etat, id_comptes) VALUES(:etat_compte, :date_changement_etat, :id_comptes)');
		$req->execute(array(
			'etat_compte' => $etat_compte->getEtatCompte(),
			'date_changement_etat' => $etat_compte->getDateChangementEtat(),
			'id_comptes' => $etat_compte->getIdComptes() 
			));
		$req->closeCursor();
	}

	public function addCompteEpargne(CompteEpargne $compte_epargne)
	{
		$req = $this->_db->prepare('INSERT INTO compte_epargne (frais_ouverture, montant_remuneration, id_comptes) VALUES(:frais_ouverture, :montant_remuneration, :id_comptes)');
		$req->execute(array(
			'frais_ouverture' => $compte_epargne->getFraisOuverture(),
			'montant_remuneration' => $compte_epargne->getMontantRemuneration(),
			'id_comptes' => $compte_epargne->getIdComptes() 
			));
		$req->closeCursor();
	}

	public function addCompteCourant(CompteCourant $compte_courant)
	{
		$req = $this->_db->prepare('INSERT INTO compte_courant (agios, id_comptes) VALUES(:agios, :id_comptes)');
		$req->execute(array(
			'agios' => $compte_courant->agios,
			'id_comptes' => $compte_courant->id_comptes 
			));
		$req->closeCursor();
	}

	public function addCompteBloque(CompteBloque $compte_bloque)
	{
		$req = $this->_db->prepare('INSERT INTO compte_bloque (frais_ouverture, montant_remuneration, duree_blocage, id_comptes) VALUES(:frais_ouverture, :montant_remuneration, :duree_blocage, :id_comptes)');
		$req->execute(array(
			'frais_ouverture' => $compte_bloque->getFraisOuverture(),
			'montant_remuneration' => $compte_bloque->getMontantRemuneration(),
			'duree_blocage' => $compte_bloque->getDureeBlocage(),
			'id_comptes' => $compte_bloque->getIdComptes() 
			));
		$req->closeCursor();
	}

	public function getInfoNonSalarie($identifiant_client)
	{
		$req = $this->_db->prepare('SELECT client_non_salarie.nom, client_non_salarie.prenom, 
		client_non_salarie.carte_identite, clients.adresse, clients.telephone, clients.email, 
		clients.date_inscription, clients.type_client FROM client_non_salarie INNER JOIN clients 
		ON client_non_salarie.id_clients = clients.id_clients WHERE carte_identite = ?');

		$req->execute(array($_POST['identifiant_client']));

		return $reponse = $req->fetch();

		$req->closeCursor();

	}
		

}