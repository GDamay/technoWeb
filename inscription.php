<!--DOCTYPE HTML-->
<HTML>
<head>
	<title>Inscription</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<header>
		<table>
		    <tr>
			    <td><a href="accueil.html">Accueil</a><td>
			    <td><a href="evenements.php">Evenements</a><td>
			    <td><a href="inscription.php">Inscription</a><td>
			    <td><a href="contact.php">Contact</a><td>
		    </tr>
		</table>
	</header>
	<table>
	    <tr>
	        <td>
	            <section>
	                <table>
	                    <form method="post" action="traitementInscription.php">
	                        <tr><td>
	                            <h1>Inscription</h1>
	                        </tr></td>
	                        <tr><td>
	                            <label for="prenom">Prénom* :</label><br />
	                            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" />
	                        </tr></td>
	                        <tr><td>
	                            <label for="nom">Nom* :</label><br />
	                            <input type="text" id="nom" name="nom" placeholder="Votre nom" />
	                        </tr></td>
	                        <tr><td>
	                            <label for="mdp">Mot de passe* :</label><br />
	                            <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" />
	                        </tr></td>
	                        <tr><td>
	                            <label for="cmdp">Confirmation de mot de passe* :</label><br />
	                            <input type="password" id="cmdp" autocomplete="off" name="cmdp" placeholder="Votre mot de passe" />
	                        </tr></td>
	                        <tr><td>
	                            <label for="email">E-mail* :</label><br />
	                            <input type="text" id="email" name="email" placeholder="Votre adresse e-mail" />
	                        </tr></td>
	                        <tr><td>
	                            <label for="cEmail">Confirmation e-mail* :</label><br />
	                            <input type="text" id="cEmail" autocomplete="off" name="cemail" placeholder="Votre adresse e-mail" />
	                        </tr></td>
	                        <tr><td>
	                            <label for = "tel">Téléphone* :</label><br />
	                            <input type="text" name="telephone" id="tel" placeholder="Votre numéro de téléphone" />
	                        </tr></td>
	                        <tr><td>
	                            <input type="checkbox" name="admin" id="admin" value="vrai" /><label for="admin">Je suis un administrateur</label><br />
	                        </tr></td>
	                        <tr><td>
	                            <label for="mdpA">Mot de passe Administrateur : </label><input type="password" name="mdpAdmin" id="mdpA" />
	                        </tr></td>
	                        <tr><td>
	                            <input type="submit" value="S'inscrire" />
	                        </tr></td>
	                    </form>
	                </table>
	            </section>
	        </td><td>
	            <section>
	                <table>
	                    <form method="post" action="traitementConnexion.php">
                            <tr><td>
                                <h1>Connexion</h1>
                            </tr></td>
                            <tr><td>
                                Entrez vos données de connexion pour accéder à votre compte.
                            </tr></td>
                            <tr><td>
                                <label for="connectMail">E-mail* :</label><br />
	                            <input type="text" id="connectMail" name="email" placeholder="Votre adresse e-mail" />
                            </tr></td>
                            <tr><td>
                                <label for="connectMdp">Mot de passe* :</label><br />
	                            <input type="password" id="connectMdp" name="mdp" placeholder="Votre mot de passe" />
                            </tr></td>
                            <tr><td>
                                <input type="submit" value="Se connecter" />
                            </tr></td>
                        </form>
                    </table>
	            </section>
	        </td>
        </tr>
    </table>   
</body>
