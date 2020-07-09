<?php

// Connexion à la base de données
include("../Model/connexion_bdd_bp.php");
require ("../Model/Manager.php");

echo $_POST['type_compte'];
echo $_POST['id_responsable_compte'];

// Insertion des infos dana clients à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO clients (adresse, telephone, email, date_inscription, type_client, id_responsable_compte) VALUES(:adresse, :telephone, :email, NOW(), :type_client, :id_responsable_compte)');
$req->execute(array(
	'adresse' => $_POST['adresse'],
	'telephone' => $_POST['telephone'],
	'email' => $_POST['email'],
	'type_client' => $_POST['type_client'],
	'id_responsable_compte' => $_POST['id_responsable_compte']
));

$req->closeCursor();

//insertion des onfos dans client_non_salarie
$req = $bdd->prepare('INSERT INTO client_salarie (nom, prenom, carte_identite, profession, salaire, nom_employeur, adresse_entreprise, raison_social, identifiant_entreprise,id_clients) VALUES(:nom, :prenom, :carte_identite, :profession, :salaire, :nom_employeur, :adresse_entreprise, :raison_social, :identifiant_entreprise, :id_clients)');
$req->execute(array(
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'carte_identite' => $_POST['carte_identite'],
	'profession' => $_POST['profession'],
	'salaire' => $_POST['salaire'],
	'nom_employeur' => $_POST['nom_employeur'],
	'adresse_entreprise' => $_POST['adresse_entreprise'],
	'raison_social' => $_POST['raison_social'],
	'identifiant_entreprise' => $_POST['identifiant_entreprise'],
	'id_clients' => 1
));

	$req->closeCursor();

$req = $bdd->prepare('INSERT INTO comptes (numero_compte, cle_rib, solde, date_ouverture, numero_agence, id_clients) VALUES(:numero_compte, :cle_rib, :solde, NOW(), :numero_agence, :id_clients)');
$req->execute(array(
	'numero_compte' => $_POST['numero_compte'],
	'cle_rib' => $_POST['cle_rib'],
	'solde' => $_POST['solde'],
	'numero_agence' => $_POST['numero_agence'],
	'id_clients' => 1
));

$req->closeCursor();


$req = $bdd->prepare('INSERT INTO etat_compte (etat_compte, date_changement_etat, id_comptes) VALUES(:etat_compte, NOW(), :id_comptes)');
$req->execute(array(
	'etat_compte' => 'actif',
	'id_comptes' => 1
	));
$req->closeCursor();



if($_POST['type_compte'] == 'compte epargne')
{
	$req = $bdd->prepare('INSERT INTO compte_epargne (frais_ouverture, montant_remuneration, id_comptes) VALUES(:frais_ouverture, :montant_remuneration, :id_comptes)');
	$req->execute(array(
		'frais_ouverture' => $_POST['frais_ouverture'],
		'montant_remuneration' => $_POST['montant_remuneration'],
		'id_comptes' => 1
		));
	$req->closeCursor();
}
else if($_POST['type_compte'] == 'compte courant')
{
	$req = $bdd->prepare('INSERT INTO compte_courant (agios, id_comptes) VALUES(:agios, :id_comptes)');
	$req->execute(array(
		'agios' => $_POST['agios'],
		'id_comptes' => 2
		));
	$req->closeCursor();
}
else
{
	$req = $bdd->prepare('INSERT INTO compte_bloque (frais_ouverture, montant_remuneration, duree_blocage, id_comptes) VALUES(:frais_ouverture, :montant_remuneration, :duree_blocage, :id_comptes)');
		$req->execute(array(
			'frais_ouverture' => $_POST['frais_ouverture'],
			'montant_remuneration' => $_POST['montant_remuneration'],
			'duree_blocage' => $_POST['duree_blocage'],
			'id_comptes' => 1
			));
		$req->closeCursor();
}


echo "Les informations sont bien enregistrées";

// Redirection du visiteur vers la page d'accueil accueil_responsable

header('Location: accueil_responsable.php');


?>
