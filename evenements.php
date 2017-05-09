<!--DOCTYPE HTML-->
<HTML>
	<head>
	<title>Evênements</title>
	<meta charset="UTF-8"/>
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

	    	while (! feof ( $fichier ))
				{
						$event=fgets($fichier);
						list($titre, $lieu, $date,$description)=explode("|",$event);
						echo "<section> <h1> $titre </h1>";
						echo "<strong> Lieu: </strong> $lieu <br>";
						echo "<strong> Date: </strong> $date <br>";
						echo "<strong> Descrition: </strong> $description";
						echo "</section>";
	      }
	    fclose ( $fichier );
	    ?>


  </body>
</HTML>
