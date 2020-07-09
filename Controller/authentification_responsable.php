<?php

// Connexion à la base de données
require_once ("../Model/connexion_bdd_bp.php");
require_once ("../Model/Manager.php");
require_once ("responsableCompte.class.php");

$manager = new Manager($db);

extract($_POST);

//id_responsable à récupérer dans la table employés
$id_employes = 1;
$responsable_compte = new ResponsableCompte ($id_employes, $login_responsable, $mot_passe_responsable);



if ($manager->verifieUserExiste($responsable_compte)) 
{
	// session_start();
	// $_SESSION['id'] = $resultat['id'];
	// $_SESSION['pseudo'] = $pseudo;

	echo 'Vous êtes connecté !';
	// Redirection de l'utilisateur vers la page d'accueil accueil_responsable.php
	header('Location: ../View/accueil_responsable.php');
	
}
else
{
	echo 'login ou mot de passe incorrecte! <br />';
	echo '<a href="../index.php">Réessayer</a>';
}



	// $login_responsable = $_POST['login_responsable'];
	// $mot_passe_responsable = $_POST['mot_passe_responsable'];

	// echo $_POST['login_responsable'] . '<br />';
	// echo $_POST['mot_passe_responsable'] . '<br />';

	// $req = $bdd->prepare('SELECT login, mot_de_passe FROM responsable_compte WHERE login = :login AND mot_de_passe = :mot_de_passe');

	// $req->execute(array(
	// 	'login' => $login_responsable,
	// 	'mot_de_passe' => $mot_passe_responsable
	// 	));

	//on récupère le résultat
	//$resultat = $req->fetch();
	/*while ($donnees = $req->fetch())
	{
		echo $donnees['login'] . '<br />';
		echo $donnees['mot_de_passe'] . '<br />';
	}
	*/

	//on test si le résultation renvoie true (c'est à dire il y'a 1 login et mot de passe qui correspondent)
	// if (!$resultat) {
	// 	 echo 'login ou mot de passe incorrecte! <br />';
	// 	 echo '<a href="index.php">Réessayer</a>';
	// }
	// else{
	// 	session_start();
	//     $_SESSION['id'] = $resultat['id'];
	//     $_SESSION['pseudo'] = $pseudo;
	//     // Redirection de l'utilisateur vers la page d'accueil accueil_responsable.php
	// 	header('Location: accueil_responsable.php');
	//     echo 'Vous êtes connecté !';

	// }
	// $req->closeCursor();
