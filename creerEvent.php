<!--DOCTYPE HTML-->
<HTML>
<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css" />
	<title>Création d'un événement</title>
	
</head>
<body>

	<header>

	<?php include("enTete.php"); ?>

	</header>
	<h1>Création d'un événement</h1> 
	<section>
		<form method="post">
		<table>
		<tr>
			<td> <label for="nomE">Nom de l'événement: </label></td>
			<td><input type="text" name = "nomEvent" placeholder = "nom de l'événement" id="nomE"></td>
		</tr>
		<tr>
			<td> <label for="lieuE">Lieu: </label></td>
			<td><input type="text" name = "lieuEvent" placeholder = "nom de l'événement" id="lieuE"></td>
		</tr>
		<tr>
			<td> <label for="dateE">Date: </label></td>
			<td><input type="text" name = "dateEvent" placeholder = "nom de l'événement" id="dateE"></td>
		</tr>
		<tr>
			<td><label for="descr">description de l'événement:</label></td>
			<td><textarea name = "descriptionEvent" rows = "10" cols = "40" id = "descr"></textarea></td>
		</tr>
		</table>
		<input type="submit" name="envoyer" value="envoyer"/>
		</form>
	</section>


<?php

;

?>



</body>
