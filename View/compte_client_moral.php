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
				<button id="nouveau_client" name="nouveau_client" onclick="affiche_nouveau_client_moral()">Nouveau Client</button>
				<button id="client_existant" name="client_existant" onclick="affiche_client_existant_moral()">Client Existant</button>

			</div>
			<form id="saisie_id_client" action="recherche_client_moral.php" method="POST" >
				<input type="search" id="identifiant_entreprise" name="identifiant_entreprise" placeholder="identifiant client" />
				<input type="submit" name="search" id="search" value="Search" /> 
			</form>
		</div>

	

	<form id="form_compte_entreprise" action="insert_client_moral.php" method="post" onsubmit="return verifie_formulaire_entreprise(this)">

			<h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
			<p><i>Complétez le formulaire. Les champs marqué par <em>*</em> sont <em>obligatoires</em></i></p>
			
		<fieldset>
			<legend>Informations du Client</legend>
			<div>
				<label for="nom_entreprise">Nom Entreprise <em>*</em></label>
				<input type="text" id="nom_entreprise" name="nom_entreprise" placeholder="saisir le nom de l'entreprise" onblur="verifie_nom_entreprise(this)"/>
			</div>
			<div>
				<label for="raison_social">Raison Social <em>*</em></label>
				<input type="text" id="raison_social" name="raison_social" placeholder="saisir le nom de l'entreprise"
					onblur="verifie_nom_entreprise(this)" />
			</div>
			<div>
				<label for="adresse">Adresse Entreprise <em>*</em></label>
				<input type="text" id="adresse" name="adresse" placeholder="saisir l'adresse de l'entreprise" onblur="verifie_adresse_entreprise(this)"/>
			</div>
			<div>
				<label for="telephone">Tel <em>*</em></label>
				<input type="tel" id="telephone" name="telephone" placeholder="ex : +2217xxxxxxxx " onblur="verifie_telephone(this)"/>
			</div>
			<div>
				<label for="email">E-mail </label>
				<input type="text" id="email" name="email" placeholder="ex : prenom.nom@simplon.co" onblur="verifie_email(this)" />
			</div>
			<div>
				<label for="identifiant_entreprise">Identifiant Entreprise <em>*</em></label>
				<input type="text" id="identifiant_entreprise" name="identifiant_entreprise" placeholder="saisir l'identifiant de l'entreprise" onblur="verifie_identifiant_entreprise(this)"/>
			</div>
			<div>
				<label for="type_client">Type client </label>
				<input type="text" id="type_client" name="type_client" value="Client Moral" readonly />
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
				<br/><br/>
				
				<div>
					<label for="numero_agence">N° de l'agence <em>*</em></label>
					<input type="text" id="numero_agence" name="numero_agence" placeholder="saisir le N° de l'agence"/>
				</div>
				<div>
					<label for="numero_compte">N° Compte <em>*</em></label>
					<input type="text" id="numero_compte" name="numero_compte" placeholder="saisir le N° de Compte"/>
				</div>
				<div>
					<label for="cle_rib">Clé RIB <em>*</em></label>
					<input type="text" id="cle_rib" name="cle_rib" placeholder="saisir la clé RIB"/>
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
					<input type="text" id="montant_remuneration" name="montant_remuneration" />
				</div>
				<div id="agios_compte">
					<label for="agios">Agios <em>*</em></label>
					<input type="text" id="agios" name="agios" placeholder="saisir l'agios"/>
				</div>
				<div id="duree_blocage_compte">
					<label for="duree_blocage">Durée Blocage <em>*</em></label>
					<input type="text" name="duree_blocage" id="duree_blocage"  /><span id="mois"> mois </span><span id="erreur_duree"></span>
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