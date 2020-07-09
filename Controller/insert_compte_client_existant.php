<?php

// Connexion à la base de données
//include("../Model/connexion_bdd_bp.php");
require ("../Model/Manager.php");

$manager = new Manager($db);

extract($_POST);


//$id_clients = 1;
//Insertion des infortion du compte dans table comptes
$manager->addComptes($numero_compte, $cle_rib, $solde, $numero_agence, $id_clients);

//Insertion de l'état initial (actif) du compte
$manager->addEtatCompte();

//Insertion des données selon le type de compte choisit
if($type_compte == 'compte epargne')
{
	$manager->addCompteEpargne($frais_ouverture, $montant_remuneration/*, $id_comptes*/);
}
else if($type_compte == 'compte courant')
{
	$manager->addCompteCourant($agios/*, id_comptes*/);
}
else
{
	$manager->addCompteBloque($frais_ouverture, $montant_remuneration, $duree_blocage, /*$id_comptes*/);
}


echo "Les informations sont bien enregistrées";

// Redirection du visiteur vers la page d'accueil accueil_responsable

header('Location: ../View/accueil_responsable.php');

