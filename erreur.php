<?php
	
	$erreur = 99;
	if(isset($_SESSION['connecte']) and !empty($_GET['erreur'])) {
		$erreur = $_GET['erreur'];
	}

	switch($erreur)
	{
		case 0:
			echo "Le compte n'existe pas ou vos identifiants sont incorrects.";
			break;
		case 1:
			echo "Un champ est resté vide lors de votre saisie, veuillez renouveller l'enregistrement du compte.";
			break;
		case 2:
			echo "Le compte existe déjà.";
			break;
		case 3:
			echo "La quantité voulue est trop grande ou négative";
			break;
		case 4:
			echo "Paramètre de tri invalide";
			break;
		case 5:
			echo "Produit déjà existant";
			break;
		case 6:
			echo "Un des champs est vide";
			break;
		case 7:
			echo "Le champs stock est invalide";
			break;
		case 8:
			echo "Il n'y a pas de produit dans le panier";
			break;
		case 9:
			echo "Stock épuisé";
			break;
		case 10:
			echo "Numéro de compte vide";
			break;
		default: 
			echo "Erreur inconnu, veuillez contacter l'administrateur du site.";
	}
?>