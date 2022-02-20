<?php

	/*************************
	*  Page: deconnexion.php
	*  Page encodée en UTF-8
	**************************/

session_start();//session_start() nous permet ici d'appeler toutes les sessions actives de l'utilisateur, enregistrées avec $_SESSION['nom_que_vous_souhaitez']

session_destroy();
header("Refresh: 1; url=../");//redirection vers le formulaire de connexion dans 3 secondes
echo "Vous avez été correctement déconnecté du site.<br><br><i>Redirection en cours, vers la page d'accueil...</i>";

?>
