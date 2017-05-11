<!--DOCTYPE HTML-->
<HTML>
<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css" />
	<title>Création d'un événement</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>

<?php
	$fichierEvent = fopen('evenementsEnre', 'a+');
	fputs($fichierEvent, "salut");
	fclose($fichierEvent);
	$erreurNom="";
	$erreurLieu="";
	$erreurDate="";

	// récupération des données du formulaire
	if (ISSET($_POST['envoyer']))
	{
		$nomEvent=ADDSLASHES($_POST['nomEvent']);
		$lieuEvent=ADDSLASHES($_POST['lieuEvent']);
		$jourEvent=ADDSLASHES($_POST['jourEvent']);
		$moisEvent=ADDSLASHES($_POST['moisEvent']);
		$anneeEvent=ADDSLASHES($_POST['anneeEvent']);
		// création des messages d'erreur
		if ($nomEvent=="" || $lieuEvent=="" || $jourEvent=="" || $moisEvent=="" || $anneeEvent=="")
		{
			if ($nomEvent=="")
			{
				$erreurNom = "Merci d'entrer un nom";
			}
			if ($lieuEvent=="")
			{
				$erreurLieu = "Merci d'entrer un lieu";
			}
			if ($jourEvent=="" || $moisEvent=="" || $anneeEvent=="")
			{
				$erreurDate = "Merci d'entrer une date";
			}
				//affichage du formulaire avec les erreurs
?>


	<header>
	   <?php include("enTete.php"); ?>
	</header>

	<section>

	</header>
		<h1>Création d'un événement</h1> 
    <section>
        
		<form method="post" action = "<?php echo($_SERVER['PHP_SELF']); ?>"> 
			<table>
				<tr>
					<td> 
						<label for="nomE">Nom de l'événement*: </label> <br/>
						<input type="text" name = "nomEvent" placeholder = "nom de l'événement" value = '<?php echo $nomEvent; ?>' id="nomE" required> 
						<?php echo "<font color='#FF0000'>$erreurNom</font>";?> 
					</td> 
				</tr>
				<tr>
					<td> <label for="lieuE">Lieu*: </label> <br/>
					<input type="text" name = "lieuEvent" placeholder = "lieu de l'événement" value = '<?php echo $lieuEvent; ?>' id="lieuE" required>
						<?php echo "<font color='#FF0000'>$erreurLieu</font>";?>
					</td>
				</tr>
				<tr>
					<td> 
						<label for="dateE">Date*: </label> <br/>
						<input type="number" name = "jourEvent" min = 1 max = 31 placeholder = 31 value = '<?php echo $jourEvent; ?>' id="dateE" required>
						<input type="number" name = "moisEvent" min = 1 max = 12 placeholder = 12 value = '<?php echo $moisEvent; ?>' id="dateE" required>
						<input type="number" name = "anneeEvent" min = 2000 max = 2100 placeholder = 2017 value = '<?php echo $anneeEvent; ?>' id="dateE" required>
						<?php echo "<font color='#FF0000'>$erreurDate</font>";?>
					</td>
				</tr>
				<tr>
					<td>
						<label for="descr">description de l'événement*:</label> <br/>
						<textarea name = "descriptionEvent" rows = "10" cols = "40" id = "descr"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit"  name="envoyer" value="envoyer"/>
		</form>


	<?php $nomEvent = ''; require 'formulaireEvent.inc.php'; ?> 

	</section>


<?php
		}
		//traitement du formulaire
		else
		{
			$fichierEvent = fopen('evenementsEnre', 'a+');
			fputs($fichierEvent, 'salut');
			fclose($fichierEvent);
		}

	}
	else
	{
	?>

	<header>
	   <?php include("enTete.php"); ?>
	</header>
    <section>
        <h1>Création d'un événement</h1> 
		<form method="post" action = "<?php echo($_SERVER['PHP_SELF']); ?>"> 
			<table>
				<tr>
					<td> 
						<label for="nomE">Nom de l'événement*: </label> <br/>
						<input type="text" name = "nomEvent" placeholder = "nom de l'événement" value = '<?php echo $nomEvent; ?>' id="nomE"> 
						<?php echo "<font color='#FF0000'>$erreurNom</font>";?> 
					</td> 
				</tr>
				<tr>
					<td> <label for="lieuE">Lieu*: </label> <br/>
					<input type="text" name = "lieuEvent" placeholder = "lieu de l'événement" value = '<?php echo $lieuEvent; ?>' id="lieuE" required>
						<?php echo "<font color='#FF0000'>$erreurLieu</font>";?>
					</td>
				</tr>
				<tr>
					<td> 
						<label for="dateE">Date*: </label> <br/>
						<input type="number" name = "jourEvent" min = 1 max = 31 placeholder = 31 value = '<?php echo $jourEvent; ?>' id="dateE" required>
						<input type="number" name = "moisEvent" min = 1 max = 12 placeholder = 12 value = '<?php echo $moisEvent; ?>' id="dateE" required>
						<input type="number" name = "anneeEvent" min = 2000 max = 2100 placeholder = 2017 value = '<?php echo $anneeEvent; ?>' id="dateE" required>
						<?php echo "<font color='#FF0000'>$erreurDate</font>";?>
					</td>
				</tr>
				<tr>
					<td>
						<label for="descr">description de l'événement*:</label> <br/>
						<textarea name = "descriptionEvent" rows = "10" cols = "40" id = "descr"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit"  name="envoyer" value="envoyer"/>
		</form>


	<?php $nomEvent = ''; require 'formulaireEvent.inc.php'; ?> 

	</section>
</body>

<?php
	}
?>

