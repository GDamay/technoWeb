<?php session_start();?>
<!--DOCTYPE HTML-->
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Inscription</title>
	<meta charset="UTF-8"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
	<header>
		<?php include("enTete.php"); ?>
	</header>
	<?php
	$errorMessageConnexion="";
	if(isset($_SESSION["prenom"]) && isset($_POST["deconnection"]))
	{
		session_destroy();
		unset($_SESSION);?>
		<section>
			<h1>Déconnexion réussie</h1>
			Vous avez été correctement déconnecté
		</section><?php
	}
	else if(isset($_POST))
	{
		if(isset($_POST["connexion"]))
		{
			if($_POST["emailC"]== "" || $_POST["mdpC"]== "")
				$errorMessageConnexion="Veuillez remplir tous les champs suivants pour vous connecter";
			else
			{
				$fichier=fopen("inscrits", "r");
				$inscrit=fgets($fichier);
				while(!isset($_SESSION["prenom"]) && ($inscrit!=false))
				{
					list($prenom, $nom, $motDePasse, $id, $telephone, $admin) = explode("|", $inscrit);
					if(($_POST["emailC"]==$id) && ($_POST["mdpC"]==$motDePasse))
					{
						$_SESSION['prenom']=$prenom;
						$_SESSION['nom']=$nom;
						$_SESSION['id']=$id;
						$_SESSION['telephone']=$telephone;
						$_SESSION['admin']=($admin=='true');
					}
					$inscrit=fgets($fichier);
				}
				fclose($fichier);
				if(!isset($_SESSION["prenom"]))
					$errorMessageConnexion="L'e-mail ou le mot de passe que vous avez entré est incorrect";		
			}
		}
		else if(isset($_POST["inscription"]))
		{
			if($_POST['prenom']=="" || $_POST['nom']=="" || $_POST['mdp']=="" || $_POST['cmdp']=="" || $_POST['email']=="" || $_POST['cemail']=="" || $_POST['telephone']=="")
				$errorMessageInscription="Veuillez entrer tous les champs marqués d'un astérisque";
			else if($_POST['mdp']!=$_POST['cmdp'])
				$errorMessageInscription="Votre mot de passe et la confirmation de celui-ci doivent être identiques";
			else if($_POST['email']!=$_POST['cemail'])
				$errorMessageInscription="Votre e-mail et la confirmation de celui-ci doivent être identiques";
			else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
				$errorMessageInscription="Veuillez entrer une adresse e-mail valide";
			else if(!preg_match("/\A[[:digit:]]{2}\.[[:digit:]]{2}\.[[:digit:]]{2}\.[[:digit:]]{2}\.[[:digit:]]{2}\z/", $_POST["telephone"]))
				$errorMessageInscription="Veuillez entrer votre numéro de téléphone sous la forme xx.xx.xx.xx.xx";
			else if(isset($_POST["admin"]) && $_POST["mdpAdmin"]=="")
				$errorMessageInscription="Le mot de passe administrateur est nécessaire pour créer un compte administrateur";
			else if(isset($_POST["admin"]) && $_POST["mdpAdmin"]!="YouShallNotPass")
				$errorMessageInscription="Le mot de passe administrateur est incorrect";
			else
			{
				$fichier=fopen("inscrits", "r+");
				$inscrit=fgets($fichier);
				while($inscrit!=false && !isset($errorMessageInscription))
				{
					list($prenom, $nom, $motDePasse, $id, $telephone, $admin) = explode("|", $inscrit);
					if($_POST["email"] == $id)
						$errorMessageInscription="Un compte correspond déjà à cette adresse e-mail";
					$inscrit=fgets($fichier);
				}
				
				if(!isset($errorMessageInscription))
				{
					fputs($fichier, $_POST["prenom"] . "|" . $_POST["nom"] . "|" . $_POST["mdp"] . "|" . $_POST["email"] . "|" . $_POST["telephone"] . "|" . (isset($_POST["admin"]) ? 'true' : 'false') . "\n");
					$_SESSION['prenom']=$_POST["prenom"];
					$_SESSION['nom']=$_POST["nom"];
					$_SESSION['id']=$_POST["email"];
					$_SESSION['telephone']=$_POST["telephone"];
					$_SESSION['admin']=isset($_POST["admin"]);?>
					<section>
						<h1>Inscription Réussie</h1>
						Votre inscription a été enregistrée.
					</section><?php
				}
				fclose($fichier);
			}
		}
	}
	
	if(!isset($_SESSION["prenom"]))
	{
		?><table class="fullPage">
			<tr>
				<td id="colInscription">
					<section id="test">
						<table id="tableInscription">
							<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
								<tr><td>
									<h1>Inscription</h1>
								</tr></td>
								<?php
									if(isset($errorMessageInscription))
									{
										echo("<tr><td><div class='messageErreur'>" . $errorMessageInscription . "</div></td></tr>");
									}?>
								<tr><td>
									<label for="prenom">Prénom* :</label><br />
									<input type="text" id="prenom" name="prenom" <?php if(isset($_POST['prenom'])) echo 'value="'.$_POST['prenom'].'"';?> placeholder="Votre prénom" required  />
								</tr></td>
								<tr><td>
									<label for="nom">Nom* :</label><br />
									<input type="text" id="nom" name="nom" <?php if(isset($_POST['nom'])) echo 'value="'.$_POST['nom'].'"';?> placeholder="Votre nom" required />
								</tr></td>
								<tr><td>
									<label for="mdp">Mot de passe* :</label><br />
									<input type="password" autocomplete = "off" value="" id="mdp" name="mdp" placeholder="Votre mot de passe" required />
								</tr></td>
								<tr><td>
									<label for="cmdp">Confirmation de mot de passe* :</label><br />
									<input type="password" id="cmdp" value=""  autocomplete="off" name="cmdp" placeholder="Votre mot de passe" required />
								</tr></td>
								<tr><td>
									<label for="email">E-mail* :</label><br />
									<input type="text" id="email" name="email" <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"';?> placeholder="Votre adresse e-mail" required />
								</tr></td>
								<tr><td>
									<label for="cEmail">Confirmation e-mail* :</label><br />
									<input type="text" id="cEmail" value="" autocomplete="off" name="cemail" placeholder="Votre adresse e-mail" required />
								</tr></td>
								<tr><td>
									<label for = "tel">Téléphone* :</label><br />
									<input type="text" name="telephone" id="tel" <?php if(isset($_POST['telephone'])) echo 'value="'.$_POST['telephone'].'"';?> placeholder="Votre numéro de téléphone" required />
								</tr></td>
								<tr><td>
									<input type="checkbox" name="admin" id="admin" value="true" /><label for="admin">Je suis un administrateur</label><br />
								</tr></td>
								<tr><td>
									<label for="mdpA">Mot de passe Administrateur :</label><br />
									<input autocomplete="off" value="" type="password" name="mdpAdmin" id="mdpA" placeholder="Mot de passe pour être administrateur" />
								</tr></td>
								<tr><td>
									<input type="submit" value="S'inscrire" name="inscription" />
								</tr></td>
								<tr><td>
									(*Les champs marqués d'un astérisque sont obligatoires)
								</tr></td>
							</form>
						</table>
					</section>
				</td>
				<td id="colConnexion">
					<section>
						<table id="tableConnexion">
							<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
								<tr><td>
									<h1>Connexion</h1>
								</tr></td>
								<tr><td>
									Entrez vos données de connexion pour accéder à votre compte.
									<?php if(isset($errorMessageConnexion))
									{
										echo "<div class='messageErreur'>$errorMessageConnexion</div>";
									}?> 
								</tr></td>
								<tr><td>
									<label for="connectMail">E-mail* :</label><br />
									<input type="text" id="connectMail" name="emailC" placeholder="Votre adresse e-mail" required />
								</tr></td>
								<tr><td>
									<label for="connectMdp">Mot de passe* :</label><br />
									<input autocomplete="off" value="" type="password" id="connectMdp" name="mdpC" placeholder="Votre mot de passe" required />
								</tr></td>
								<tr><td>
									<input type="submit" value="Se connecter" name = "connexion" />
								</tr></td>
								<tr><td>
									(*Les champs marqués d'un astérisque sont obligatoires)
								</tr></td>
							</form>
						</table>
					</section>
				</td>
			</tr>
		</table>
	<?php
	}
	else
	{?>
		<section>
			<h1>Connexion réussie</h1>
			<?php echo("Bonjour " . $_SESSION['prenom'] . ", vous êtes connecté.</br>");?>
			<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
				<input type = "submit", value = "Se déconnecter", name = "deconnection">
			</form>
		</section>
	<?php
	}?>
</body>
