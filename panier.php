<?php session_start();?>
<!--DOCTYPE HTML-->
<HTML>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
	<title>Panier</title>
	<meta charset="UTF-8"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}



fieldset
{
	border:2px solid green;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;	
    border-radius:8px;	
	margin-top : 10 px;
	text-align: left;
	height: 100%;
}

legend
{
	background-color : green ;
	color : white ;
	border-radius:8px;
	padding : 8px;
	line-height : 1em;
	
</style>
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
				<td ><fieldset>
					<legend>Evénéments</legend>
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
				<td colspan="2" rowspan="2"><fieldset style="width:100%;margin-top:0;">
					<legend>Painer</legend>
					
					<table>
						<thead>
						<tr style="tr:hover{background-color:#f5f5f5}">
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Tarif</th>
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Prix</th>
							<th style="padding: 8px;text-align: left;border-bottom: 1px solid #ddd;">Quantité</th>
						</tr>
						</thead>
						<tbody>
						
						<?php
							$fichier = fopen ("evenementsEnre", "r");
							$event=fgets($fichier);
							$i=1;
							
							while ($event!=false)
							{
								list($titre, $lieu, $date,$description)=explode("|",$event);
								
								echo "<tr style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;hover{background-color:#f5f5f5}'>";
								echo "<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'>$titre</td>";
								echo "<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'>20 €</td>";
								?>
								<form method="POST" action="panier2.php">
								<td style='padding: 8px;text-align: left;border-bottom: 1px solid #ddd;'><select name="select"string($i)>
									<option value= "0">0</option>
									<option value= "1">1</option>
									<option value= "2">2</option>
									<option value= "3">3</option>
									<option value= "4">4</option>
									<option value= "5">5</option>
									</select>
								</td>
								</tr>
								</form>
							<?php
							$i=$i+1;
								$event=fgets($fichier);
							}
							fclose ( $fichier );
							?>
							
							<form method="POST" action="panier2.php">
							<tr>
							<td><select name="select">
							<option value= "1">1</option>
							<option value= "2">2</option>
							<option value= "3">3</option>
							<option value= "4">4</option>
							<option value= "5">5</option>
							</select></td>
							<td><br/></td>
							</tr>
							<form method="POST" action="panier2.php">
								
							<td style="text-align: left"><input type="submit" /></td>
							</form>
						</tr>
						</tbody>
					</table>
				</fieldset></td>
			</tr>
			<tr style="width:50%">
				<td><fieldset>
					<legend>Contacter Organisateur</legend>
					<label>INSA de Rouen, </label><br/>
					<label>non loin d'un ordinateur et </label><br/>
					<label>de cafféine ou de boisson sucrée.</label><br/>
				</fieldset></td>
			</tr>
		</table>
					
					
</body>
