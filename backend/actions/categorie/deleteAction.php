<?php 

	require_once '../../module/Connexion.php';
	require_once '../../module/models/categorie/Categorie.php';
	
	$id=(isset($_GET["id"]))?$_GET["id"]:"";
	
	if($id != "")
			$categorie = new Categorie();
			$resultat = $categorie->deleteCategorie($id);
			header("location:../../admin/utilisateur/editerUtilisateur.php");
	
?>