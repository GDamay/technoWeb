<!--DOCTYPE HTML-->
<HTML>
<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css" />
	<title>Création d'un événement</title>
	
</head>
<body>

<?php
$erreurNom="";
$erreurLieu="";
$erreurDate="";
if (ISSET($_POST['envoyer']))
{
	$nomEvent=ADDSLASHES($_POST['nomEvent']);
	$lieuEvent=ADDSLASHES($_POST['lieuEvent']);
	$dateEvent=ADDSLASHES($_POST['dateEvent']);
	if ($nomEvent=="")
	{
		$erreurNom = "Merci d'entrer un nom";
	}
	if ($lieuEvent=="")
	{
		$erreurLieu = "Merci d'entrer un lieu";
	}
	if ($dateEvent=="")
	{
		$erreurDate = "Merci d'entrer une date";
	}
}
?>

	<header>

		<form method="post"> 

			<table>
				<tr>

					<td> 
						<label for="nomE">Nom de l'événement*: </label> <br/>
						<input type="text" name = "nomEvent" placeholder = "nom de l'événement" id="nomE"> 
						<?php echo "<font color='#FF0000'>$erreurNom</font>";?> 
					</td> 

	
				</tr>
				<tr>
					<td> <label for="lieuE">Lieu*: </label> <br/>
					<input type="text" name = "lieuEvent" placeholder = "lieu de l'événement" id="lieuE">
						<?php echo "<font color='#FF0000'>$erreurLieu</font>";?>
					</td>
				</tr>
				<tr>
					<td> 
						<label for="dateE">Date*: </label> <br/>
						<input type="text" name = "dateEvent" placeholder = "date de l'événement" id="dateE">
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
			<input type="submit" name="envoyer" value="envoyer"/>
		</form>

	</header>
	<h1>Création d'un événement</h1> 
	<section>

	<?php $nomEvent = ''; require 'formulaireEvent.inc.php'; ?> 





	</section>



</body>
