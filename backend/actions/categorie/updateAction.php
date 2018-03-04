<?php
	session_start();
	require_once '../../module/Connexion.php';
	require_once '../../module/models/categorie/Categorie.php';
	
	
	$cat = (isset($_POST["cat"]))?$_POST["cat"]:"";
	
	$id = (isset($_POST["id"]))?$_POST["id"]:"";
	if($cat !=""){
		#verification de l'authentification
		
		$categorie=new Categorie($cat);
		$resultat= $categorie->saveOrUpdate($id);
		
		if($resultat=="exist"){
			header("location:../../admin/categorie/adminCategorie.php?r=exist");
			
		}
		
		else 
			if($resultat){
			#creation de session pour l'utilisateur connecté
			
			#redirection vers la page backend/index.php
			#ne jamais utiliser de balise html avant la fonction header
			header("location:../../admin/categorie/adminCategorie.php?r=1");
		}else{
			
			header("location:../../admin/categorie/adminCategorie.php?r=0");
		}
		
	}else{
		#traitement des instructions
		echo 'test';
	}


?>