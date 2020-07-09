<!DOCTYPE html>
<html>
	<head>
		<title>Ouverture Compte Bancaire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Public/script_index.css" />
	</head>
	<body>
		<header>
			<h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
		</header>

		<div class="choix_client">

			<p>Cliquez sur Nouveau client pour enregistrer un compte pour un nouveau client</p>
			<p>Cliquez sur Client existant pour enregistrer un compte pour un client qui existe déjà</p>
			<div id="select_client">
				<button id="nouveau_client" name="nouveau_client" onclick="affiche_nouveau_client_salarie()">Nouveau Client</button>
				<button id="client_existant" name="client_existant" onclick="affiche_client_existant_salarie()">Client Existant</button>

			</div>
			<form id="saisie_id_client" action="recherche_client_salarie.php" method="POST" >
				<input type="search" id="identifiant_client" name="identifiant_client" placeholder="identifiant client" />
				<input type="submit" name="search" id="search" value="Search" /> 
			</form>
		</div>

		
		<form id="form_compte_salarie" action="insert_client_salarie.php" method="post" autocomplete="on" onsubmit="return verifie_formulaire_salarie(this)">

			<h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
			<p><i>Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>

			<fieldset>
				<legend>Informations du Client</legend>

				<div>
					<label for="nom">Nom <em>*</em></label>
					<input type="text" id="nom" name="nom" placeholder="ex : DIOP" onblur="verifie_nom(this)" />
				</div>
				<div>
					<label for="prenom">Prénom <em>*</em></label>
					<input type="text" id="prenom" name="prenom" placeholder="ex : Mor" onblur="verifie_prenom(this)" />
				</div>
				<div>
					<label for="adresse">Adresse <em>*</em></label>
					<input type="text" id="adresse" name="adresse" placeholder="ex : Grand Yoff"
						onblur="verifie_adresse(this)" />
				</div>
				<div>
					<label for="telephone">Tel <em>*</em></label>
					<input type="tel" id="telephone" name="telephone" placeholder="ex : +2217xxxxxxxx "
						onblur="verifie_telephone(this)" />
				</div>
				<div>
					<label for="email">E-mail </label>
					<input type="text" id="email" name="email" placeholder="ex : prenom.nom@simplon.co"
						onblur="verifie_email(this)" />
				</div>
				<div>
					<label for="carte_identite">CNI </label>
					<input type="text" id="carte_identite" name="carte_identite" placeholder="1234567891234" />
				</div>
				<div>
					<label for="profession">Profession </label>
					<input type="text" id="profession" name="profession" placeholder="ex : Développeur"
						onblur="verifie_profession(this)" />
				</div>
				<div>
					<label for="salaire">Salaire <em>*</em></label>
					<input type="text" id="salaire" name="salaire" placeholder="utilise '.' aulieu de ',' ex : 50000.85"
						onblur="verifie_salaire(this)" />
				</div>
				<div>
					<label for="nom_employeur">Nom Employeur <em>*</em></label>
					<input type="text" id="nom_employeur" name="nom_employeur" placeholder="saisir le nom de l'employeur"
						onblur="verifie_nom_employeur(this)" />
				</div>
				<div>
					<label for="adresse_entreprise">Adresse Entreprise <em>*</em></label>
					<input type="text" id="adresse_entreprise" name="adresse_entreprise"
						placeholder="saisir l'adresse de l'entreprise" onblur="verifie_adresse_entreprise(this)" />
				</div>
				<div>
					<label for="raison_social">Raison Social <em>*</em></label>
					<input type="text" id="raison_social" name="raison_social" placeholder="saisir le nom de l'entreprise"
						onblur="verifie_nom_entreprise(this)" />
				</div>
				<div>
					<label for="identifiant_entreprise">Identifiant Entreprise <em>*</em></label>
					<input type="text" id="identifiant_entreprise" name="identifiant_entreprise"
						placeholder="saisir l'identifiant de l'entreprise" />
				</div>
				<div>
					<label for="type_client">Type client </label>
					<input type="text" id="type_client" name="type_client" value="Client Salarié" readonly />
				</div>
				<div>
					<label for="id_responsable_compte">test id responsable compte </label>
					<input type="text" id="id_responsable_compte" name="id_responsable_compte" value="1" readonly />
				</div>
			</fieldset>

			<fieldset>
				<legend>Informations Compte</legend>
				<label class="selection_type_compte">Sélectionnez le type de compte <em>*</em></label>
				<select id="type_compte" name="type_compte" >
					<option>Type de compte</option>
					<option value="compte epargne">Compte Epargne</option>
					<option value="compte courant">Compte Courant</option>
					<option id="compte_bloque" value="compte bloque" onselect="verification_duree_blocage(this)">Compte Bloqué</option>
				</select>
				<span id="erreur_selection"></span>
				<br /><br />

				<div>
					<label for="numero_agence">N° de l'agence <em>*</em></label>
					<input type="text" id="numero_agence" name="numero_agence" placeholder="saisir le N° de l'agence" />
				</div>
				<div>
					<label for="numero_compte">N° Compte <em>*</em></label>
					<input type="text" id="numero_compte" name="numero_compte" placeholder="saisir le N° de Compte" />
				</div>
				<div>
					<label for="cle_rib">Clé RIB <em>*</em></label>
					<input type="text" id="cle_rib" name="cle_rib" placeholder="saisir la clé RIB" />
				</div>
				<div >
					<label for="solde">Solde (optionnel)<em></em></label>
					<input type="text" id="solde" name="solde" />
				</div>
				<div id="frais_ouverture_compte">
					<label for="frais_ouverture">Frais ouverture <em>*</em></label>
					<input type="text" id="frais_ouverture" name="frais_ouverture" value="20000" />
				</div>
				<div id="montant_remuneration_compte">
					<label for="montant_remuneration">Montant Rémuneration <em></em></label>
					<input type="text" id="montant_remuneration" name="montant_remuneration" value="5000" />
				</div>
				<div id="agios_compte">
					<label for="agios">Agios <em>*</em></label>
					<input type="text" id="agios" name="agios" placeholder="saisir l'agios" />
				</div>
				<div id="duree_blocage_compte">
					<label for="duree_blocage">Durée Blocage <em>*</em></label>
					<input type="text" name="duree_blocage" id="duree_blocage" /><span id="mois"> mois </span><span
						id="erreur_duree"></span>
				</div>

			</fieldset>
			<div class="validation">
				<input type="submit" value="Valider" id="valider" />
				<input type="reset" value="Annuler" />
			</div>

		</form>

		<script type="text/javascript" src="../Public/script_index.js"></script>
	</body>

</html>