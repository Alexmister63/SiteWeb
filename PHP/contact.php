<?php

if (isset($_POST['nom']) && isset($_POST['email'])) {
	
	$erreur = 0;
	
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$msg = $_POST['message'];
	
	if (empty($nom)) {
		$erreur = 1;
		echo "Merci de saisir un nom valide";
	}
	 if (isset($_POST['nom']))
	// Si l'email est vide ou pas au bon formant
	if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$erreur = 1;
		echo "Merci de saisir une adresse e-mail valide";
	}
		
	// On sécurise le message si il est renseigné
	if (!empty($msg)) {
		$msg = htmlspecialchars($msg, ENT_QUOTES);
	}
	
	// On affiche si tout s'est bien passé
	if ($erreur == 0) {
		echo "> Nom : " . $nom . " <br />";
		echo "> email : " . $mail . " <br />";
		echo "> Message : " . $msg . "<br /><br />";
		
		echo "Merci de votre signalisation nous allons faire au mieux pour tout réparer !<br />";
	}
	
} else { 
	echo "Merci de saisir toutes les informations requises <br />";
}	
?>		


