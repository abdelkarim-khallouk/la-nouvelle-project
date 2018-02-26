<?php 
	require_once '../../module/Connexion.php';
	require_once '../../module/models/auteur/Auteur.php';
	
	$id=(isset($_GET["id"]))?$_GET["id"]:"";
	
	if($id != "")
			$auteur = new Auteur();
			$resultat = $auteur->deleteAuteur($id);
			header("location:../../admin/auteur/editerAuteur.php");
	
?>