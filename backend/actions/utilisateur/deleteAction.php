<?php 
	require_once '../../module/Connexion.php';
	require_once '../../module/models/utilisateur/Utilisateur.php';
	
	$id=(isset($_GET["id"]))?$_GET["id"]:"";
	
	if($id != "")
			$utilisateur = new Utilisateur();
			$resultat = $utilisateur->deleteUtilisateur($id);
			header("location:../../admin/utilisateur/editerUtilisateur.php");
	
?>