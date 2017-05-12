<!--DOCTYPE HTML-->
<HTML>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
	<title>Panier</title>
	<meta charset="UTF-8"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
<!--<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>-->
<style>
fieldset
{
	border:2px solid green;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;	
    border-radius:8px;	
}
</style>
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
		<table class="fullPage">
			<tr>
				<td><colConnexion><fieldset>
					<legend>Evénéments</legend>
					<label><?php echo"<strong>$titre</strong>"?></label><br/>
					<label><?php echo $date ?> </label><br/>
					<label><?php echo $lieu ?></label><br/>
				</fieldset></colConnexion></td>
				<td colspan="2" rowspan="2"><fieldset id="fieldsetPanier">
					<legend>Painer</legend>
					<table>
						<thead>
						<tr>
							<th id="pr">Tarif</pr></th>
							<th id="pr">Prix</pr></th>
							<th><pr id="pr">Quantité</pr></th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td id="pr"><?php echo $titre ?></td>
							<td id="pr">20 €</td>
							<td id="pr"><select>
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
					<label>non loin d''un ordinateur et </label><br/>
					<label>de cafféine ou de boisson sucrée.</label><br/>
				</fieldset></td>
			</tr>
		</table>
					
					
</body>
