<!--DOCTYPE HTML-->
<HTML>
<head>
	<title>Contact</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<header>
		<table>
		<tr>
			<td><a href="accueil.html">Accueil</a><td>
			<td><a href="evenements.php">Evenements</a><td>
			<td><a href="inscription.php">Inscription</a><td>
			<td><a href="contact.html">Contact</a><td>
		</tr>
		</table>
	</header>
	<section>
	<h1>Nos coordonnées</h1>
	INSA de Rouen, non loin d'un ordinateur et de cafféine ou de boisson sucrée.
	</section>
	<section>
	<h1>Laisser un message</h1>
		<form method = POST >
		<table>
		<tr>
			<td><label for="nom">nom</label></td>
			<td><input type="text" name="nom" placeholder="Votre Nom" /></td>
		</tr>
		<tr>
			<td><label for="mail">mail</label></td>
			<td><input type = "text" name="mail" placeholder="Votre adresse e-mail" /></td>
		</tr>
		<tr>
			<td><label for="mssg">message</label></td>
			<td><textarea rows = "10" cols = "40" id="mssg" placeholder="Tapez votre message ici"></textarea></td>
		</tr>
		</table>
		<input type="submit" name="envoyer" value="envoyer"/>
		</form>
	</section>
</body>
