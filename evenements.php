<!--DOCTYPE HTML-->
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Évènements</title>
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
						echo "<section> <h1> $titre </h1>";
						echo "<strong> Lieu: </strong> $lieu <br>";
						echo "<strong> Date: </strong> $date <br>";
						echo "<strong> Description: </strong> $description";
						echo "</section>";
						$event=fgets($fichier);
				}
	    fclose ( $fichier );
	    ?>

			<br>
			<br>
            
            <section>
			    <input type="button" name="creerEvent" value="Ajouter un évènement" onclick="self.location.href='creerEvent.php'" font-weight:bold"onclick>
			</section>

  </body>
</HTML>
