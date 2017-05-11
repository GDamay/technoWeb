<!--DOCTYPE HTML-->
<HTML>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
	<title>Contact</title>
	<meta charset="UTF-8"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
	<header>
		<?php include("enTete.php"); ?>
	</header>
	<?php
	$fichier = fopen ("evenementsEnre", "r");
	    	//fputs ( $fichier , "Une phrase\n");
	    	/* sous Windows \r\n, sous Linux ou mac \n*/
	/*   	echo "<p> Dans le fichier fichier . txt :</p>"; */

				$event=fgets($fichier);
	    	while ($event!=false)
				{
						list($titre, $lieu, $date,$description)=explode("|",$event);
						$event=fgets($fichier);
	      }
	    fclose ( $fichier );
		?>
	<section>
		<table>
			<tr>
				<td><fieldset>
					<legend>Evénéments</legend>
					<label><strong>$titre:</strong></label><br/>
					<label>$date </label><br/>
					<label>$lieu </label><br/>
				</fieldset></td>
				<td colspan="2" rowspan="2"><fieldset>
					<legend>Painer</legend>
					<table>
						<thead>
						<tr>
							<th>Tarif</th>
							<th>Prix</th>
							<th>Quantité</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>$titre</td>
							<td>20 €</td>
							<td><select>
								<option value= "1">1</option>
								<option value= "2">2</option>
								<option value= "3">3</option>
								<option value= "4">4</option>
								<option value= "5">5</option>
							</td>
						</tr>
						<tr>
							<td><input type="submit" /></td>
						</tr>
						</tbody>
					</table>
				</fieldset></td>
			</tr>
			<tr>
				<td><fieldset>
					<legend>Contact Organisateur</legend>
					<label>INSA de Rouen, </label><br/>
					<label>non loin d'un ordinateur et </label><br/>
					<label>de cafféine ou de boisson sucrée.</label><br/>
				</fieldset></td>
			</tr>
		</table>
					
					
</body>
