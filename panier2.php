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
				<td colspan="2" rowspan="2" style="vertical-align: top;"><fieldset id='boitePanier' style="width:100%;margin-top:0;">
					<legend id='titrePanier'>Panier</legend>
					
					<table id='tablePanier'>
						<thead>
						<tr style="tr:hover{background-color:#f5f5f5}">
							<th id='tdPanier'>Tarif</th>
							<th id='tdPanier'>Quantité</th>
							<th id='tdPanier'>Prix</th>
						</tr>
						</thead>
						<tbody>
						
						<?php
							$fichier = fopen ("evenementsEnre", "r");
							$event=fgets($fichier);
							$i=0;
							$total=0;
							while ($event!=false)
							{
								list($titre, $lieu, $date,$description)=explode("|",$event);
								
								echo "<tr style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;hover{background-color:#f5f5f5}'>";
								echo "<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'>$titre</td>";
								?>

								<td id='tdPanier'><?php echo $_POST['selectTab'][$i] ?></td>
								<td id='tdPanier'><?php echo $_POST['selectTab'][$i]*20 ?>€</td>
								<?php
								$total=$total+$_POST['selectTab'][$i]*20;
								$i=$i+1;
								$event=fgets($fichier);
							}
							fclose ( $fichier );
							?>
							
							<tr>
								<td><strong>TOTALE:</strong></td>
								<td></td>
								<td><strong><?php echo $total ?>€</strong></td>
								
							</tr>
							<tr>
							<td><br/></td>
							<td style="text-align: left"><input type="submit" /></td>
							<form action="panier.php">
							<td style="text-align: left"><input type="submit" value="retourner" /></td>
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
