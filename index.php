<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil Employés</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="Public/script_index.css" />
</head>
<body>

	<header>
		<h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
	</header>

	<h2>VEILLEZ SELECTIONNER VOTRE PROFIL</h2>

	<div class="choix_profil">

		<button id="page_authentification_admin" onclick ="affiche_authentification_admin()" >Aministrateur</button>

		<button id="page_authentification_responsable" onclick="affiche_authentification_responsable()">Responsable Compte</button>

		<button id="page_authentification_caissere" onclick="affiche_authentification_caissiere()">Caissière</button>
	ech
	</div>

	<div id="page_authentification">

		
		<form id="formulaire_admin" action="Controller/authentification_admin.php" method="POST" onsubmit="return controle_champs_admin()">
			<fieldset>
			<legend><h3>Authentification Administrateur</h3></legend>
				<label for="login_admin">Login<em>*</em></label>
				<input type="text" id="login_admin" name="login_admin" placeholder="Login" />
				<label for="mot_passe_admin">Mot de passe<em>*</em></label>
				<input type="password" id="mot_passe_admin" name="mot_passe_admin" placeholder="Mot de passe" />

				<div class="validation">
					<input type="submit" value="Valider" id="valider_admin" />
					<input type="reset" value="Annuler" />
				</div>
			</fieldset>


		</form>

		<form id="formulaire_responsable" action="Controller/authentification_responsable.php" method="POST" onsubmit="return controle_champs_responsable()">
			<fieldset>
				<legend><h3>Authentification Responsable</h3></legend>
				<label for="login_responsable">Login<em>*</em></label>
				<input type="text" id="login_responsable" name="login_responsable" placeholder="Login" />
				<label for="mot_passe_responsable">Mot de passe<em>*</em></label>
				<input type="password" id="mot_passe_responsable" name="mot_passe_responsable" placeholder="Mot de passe" />

				<div class="validation">
					<input type="submit" value="Valider" id="valider_responsable" />
					<input type="reset" value="Annuler" />
				</div>
			</fieldset>

		</form>

		<form id="formulaire_caissiere" action="Controller/authentification_caissiere.php" method="POST" onsubmit="return controle_champs_caissiere()">
			<fieldset>
				<legend><h3>Authentification Caissière</h3></legend>
				<label for="login_caissiere">Login<em>*</em></label>
				<input type="text" id="login_caissiere" name="login_caissiere" placeholder="Login" />
				<label for="mot_passe_caissiere">Mot de passe<em>*</em></label>
				<input type="password" id="mot_passe_caissiere" name="mot_passe_caissiere" placeholder="Mot de passe" />

				<div class="validation">
					<input type="submit" value="Valider" id="valider_caissiere" />
					<input type="reset" value="Annuler" />
				</div>
			</fieldset>

		</form>
		
	</div>


	<script type="text/javascript" src="Public/script_index.js"></script>

</body>
</html>