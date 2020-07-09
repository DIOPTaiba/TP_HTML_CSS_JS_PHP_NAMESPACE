<?php

require_once ("../Model/connexion_bdd_bp.php");
require_once ("../Model/Manager.php");
require_once ("clientNonSalarie.class.php");
require_once ("clients.class.php");
require_once ("comptes.class.php");
require_once ("etatCompte.class.php");
require_once ("compteEpargne.class.php");
require_once ("compteBloque.class.php");

$manager = new Manager($db);

extract($_POST);

$date_inscription = date('yy-m-d h:i:s');
$date_ouverture = date('yy-m-d h:i:s');
$date_changement_etat = date('yy-m-d h:i:s');

// Insertion des infos dans la table clients
$clients = new Clients ($adresse, $telephone, $email, $date_inscription, $type_client, $id_responsable_compte);
$id_clients = $manager->addClients($clients /*$adresse, $telephone, $email, $type_client, $id_responsable_compte*/);

//insertion des infos dans la table client_non_salarie
$clientNonSalarie = new ClientNonSalarie ($nom, $prenom, $carte_identite, $id_clients);
$manager->addClientNonSalarie($clientNonSalarie /*$nom, $prenom, $carte_identite, $id_clients*/);

// Insertion infos sur la tables compte général
$comptes = new Comptes($numero_compte, $cle_rib, $solde, $date_ouverture, $numero_agence, $id_clients);
$id_comptes = $manager->addComptes($comptes /*$numero_compte, $cle_rib, $solde, $numero_agence, $id_clients*/);

// Insertion état comptes lors de leurs créations
$etat_compte = new EtatCompte('actif', $date_changement_etat, $id_comptes);
$manager->addEtatCompte($etat_compte);


// Insertion de données selon le type de compte choisit
if($_POST['type_compte'] == 'compte epargne')
{
	$compte_epargne = new CompteEpargne($frais_ouverture, $montant_remuneration, $id_comptes);
	$manager->addCompteEpargne($compte_epargne);
}
else
{
	$compte_bloque = new CompteBloque($frais_ouverture, $montant_remuneration, $duree_blocage, $id_comptes);
	$manager->addCompteBloque($compte_bloque);
}


echo "Les informations sont bien enregistrées";

// Redirection du visiteur vers la page d'accueil accueil_responsable
header('Location: ../View/accueil_responsable.php');


?>
