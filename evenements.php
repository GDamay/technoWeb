<!--DOCTYPE HTML-->
<HTML>
	<head>
	<title>Evênements</title>
	<meta charset="UTF-8"/>
</head>
  <body>
  	<header>
  		<table>
  		<tr>
  			<td><a href="accueil.html">Accueil</a><td>
  			<td><a href="evenements.php">Evenements</a><td>
  			<td><a href="inscrition.php">Inscription</a><td>
  			<td><a href="contact.php">Contact</a><td>
  		</tr>
  		</table>
  	</header>
    <section>

      <?php
    	$fichier = fopen ("evenementsEnre", "r");
    	fputs ( $fichier , "Une phrase\n");
    	/* sous Windows \r\n, sous Linux ou mac \n*/
/*   	echo "<p> Dans le fichier fichier . txt :</p>"; */
echo "string";
    	while (! feof ( $fichier ))
			{
      $c = fgetc ( $fichier );
        while ($c != "\n")
				{
					/* Lecture du titre du GN*/
					echo "<h1>";
	    		$c = fgetc ( $fichier );
					while ($c=!"|")
					{
						//echo "$c 1";
		    		$c = fgetc ( $fichier );
					}
					echo " <\h1>";
					/*Lecture du lieu */
	    		$c = fgetc ( $fichier );
					echo "<p> <strong> Lieu: <\strong> ";
	    		$c = fgetc ( $fichier );
					while ($c=!"|")
					{
						//echo "$c";
		    		$c = fgetc ( $fichier );
					}
					echo "<\p>";
					/*Lecture de la date */
	    		$c = fgetc ( $fichier );
					echo "<p> <strong> Date: <\strong> ";
	    		$c = fgetc ( $fichier );
					while ($c=!"|")
					{
						//echo "$c";
		    		$c = fgetc ( $fichier );
					}
					echo "<\p>";
					/*Lecture de la description */
	    		$c = fgetc ( $fichier );
					echo "<p> <strong> Description: <\strong> ";
	    		$c = fgetc ( $fichier );
					while ($c=!"|")
					{
						//echo "$c";
		    		$c = fgetc ( $fichier );
					}
					echo "<\p>";
				}
      }
    fclose ( $fichier );
    ?>

    <\section>

  </body>
</HTML>
