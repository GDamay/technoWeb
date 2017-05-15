<?php session_start();?>
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
		<br/>
		<br/>


	    <?php
	    	$fichier = fopen ("evenementsEnre", "r");
	    	//fputs ( $fichier , "Une phrase\n");
	    	/* sous Windows \r\n, sous Linux ou mac \n*/
	/*   	echo "<p> Dans le fichier fichier . txt :</p>"; */

				$event=fgets($fichier);
list($titre1, $lieu1, $date1,$description1)=explode("|",$event);
				$event=fgets($fichier);
list($titre2, $lieu2, $date2,$description2)=explode("|",$event);
				$event=fgets($fichier);
list($titre3, $lieu3, $date3,$description3)=explode("|",$event);
	?>

<table border="0"> 

	<TR> 
		<TD width=5/>
 		<TD id = 'boiteEvent'; style="vertical-align: top;"> 
				<?php

					echo "<section><h1 id='titreEvent'> $titre1 </h1>";
					echo "<strong> Lieu: </strong> $lieu1 <br/><br/>";
					echo "<strong> Date: </strong> $date1 <br/><br/>";
					echo "<strong> Description: </strong> $description1";
					echo "</section>";
				?>
		</TD>
		<TD width=5/>
 		<TD id = 'boiteEvent'; style="vertical-align: top;"> 
				<?php
					echo "<section> <h1 id='titreEvent'> $titre2 </h1>";
					echo "<strong> Lieu: </strong> $lieu2 <br/><br/>";
					echo "<strong> Date: </strong> $date2 <br/><br/>";
					echo "<strong> Description: </strong> $description2";
					echo "</section>";
				?>
		</TD> 
		<TD width=5/>
	 	<TD id = 'boiteEvent';style="vertical-align: top;">
				<?php
					echo "<section> <h1 id='titreEvent'> $titre3 </h1>";
					echo "<strong> Lieu: </strong> $lieu3 <br/><br/>";
					echo "<strong> Date: </strong> $date3 <br/><br/>";
					echo "<strong> Description: </strong> $description3";
					echo "</section>";
				?>
		</TD> 
		<TD width=5/>
  </TR> 
</TABLE>
<br/>
<br/>




<?php
	$event=fgets($fichier);
	    	while ($event!=false)
			{
				list($titre, $lieu, $date,$description)=explode("|",$event);
				echo "<section id = boiteEvent> <h1 id='titreEvent'> $titre </h1>";
				echo "<strong> Lieu: </strong> $lieu <br/><br/>";
				echo "<strong> Date: </strong> $date <br/><br/>";
				echo "<strong> Description: </strong> $description";
				echo "</section><br/><br/>";
				$event=fgets($fichier);
			}
	    fclose ( $fichier );
	    ?>

			

            <section>
				<form method="POST" <?php if(!isset($_SESSION["admin"]) || !$_SESSION["admin"])
					echo('action=\'inscription.php\'"');
				else
					echo('action=\'creerEvent.php\'"');
				?>>
					<input type="submit" name="creerEvent" value="Ajouter un évènement">
				</form>
			</section>

  </body>
</HTML>
