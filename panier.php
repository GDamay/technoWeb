<?php session_start();?>
<!--DOCTYPE HTML-->
<HTML>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
	<title>Panier</title>
	<meta charset="UTF-8"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />

</head>
<body>
	<header>
		<?php include("enTete.php"); ?>
	</header>
		<table style="width:75%;margin:0 auto">
			<thead>
			<tr>
				<th style="width:33%"></th>
				<th></th>
				<th></th>
			</tr>
			</thead>
			<tr>
				<td ><fieldset id='boitePanier'>
					<legend id='titrePanier'>Evénéments</legend>
					<?php
							$fichier = fopen ("evenementsEnre", "r");
							$event=fgets($fichier);
							while ($event!=false)
							{
								list($titre, $lieu, $date,$description)=explode("|",$event);
								echo"   <label><strong>$titre</strong></label><br/>
										<label><strong>Date: </strong>$date</label><br/>
										<label><strong>Lieu: </strong>$lieu</label><br/>
										<br/>";
								$event=fgets($fichier);
							}
							fclose ( $fichier );
							?>
				</fieldset></td>
				<td colspan="2" rowspan="2"><fieldset id='boitePanier' style="width:100%;margin-top:0;">
					<legend id='titrePanier'>Panier</legend>
					
					<table>
						<thead>
						<tr style="tr:hover{background-color:#f5f5f5}">
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Tarif</th>
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Prix</th>
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Quantité</th>
						</tr>
						</thead>
						<tbody>
						<form method="POST" action="panier2.php">
						<?php
							$fichier = fopen ("evenementsEnre", "r");
							$event=fgets($fichier);
							
							while ($event!=false)
							{
								list($titre, $lieu, $date,$description)=explode("|",$event);
								
								echo "<tr style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;hover{background-color:#f5f5f5}'>";
								echo "<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'>$titre</td>";
								echo "<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'>20 €</td>";
								?>

								<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'><select name="selectTab[]">
									<option value= "0">0</option>
									<option value= "1">1</option>
									<option value= "2">2</option>
									<option value= "3">3</option>
									<option value= "4">4</option>
									<option value= "5">5</option>
									</select>
								</td>
								</tr>
							<?php
								$event=fgets($fichier);
							}
							fclose ( $fichier );
							?>
								
							<td style="text-align: left"><input type="submit" /></td>
						</form>
						</tr>
						</tbody>
					</table>
				</fieldset></td>
			</tr>
			<tr style="width:50%">
				<td><fieldset id='boitePanier'>
					<legend id='titrePanier'>Contacter Organisateur</legend>
					<label>INSA de Rouen, </label><br/>
					<label>non loin d'un ordinateur et </label><br/>
					<label>de cafféine ou de boisson sucrée.</label><br/>
				</fieldset></td>
			</tr>
		</table>
					
					
</body>
