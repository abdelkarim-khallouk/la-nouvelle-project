<?php
	session_start();
	require_once '../../module/Connexion.php';
	require_once '../../module/models/auteur/Auteur.php';
	
	
	$nom = (isset($_POST["nom_aut"]))?$_POST["nom_aut"]:"";
	$prenom = (isset($_POST["prenom_aut"]))?$_POST["prenom_aut"]:"";
	$email = (isset($_POST["email"]))?$_POST["email"]:"";
	if($nom !="" && $prenom !="" && $email !=""){
		#verification de l'authentification
		
		$auteur=new Auteur($nom,$prenom, $email);
		$resultat= $auteur->saveOrUpdate();
		
		//if($resultat=="exist"){
			//header("location:../../admin/auteur/adminAuteur.php?r=exist");
			
		//}
		
		//else 
			if($resultat){
			#creation de session pour l'utilisateur connecté
			
			#redirection vers la page backend/index.php
			#ne jamais utiliser de balise html avant la fonction header
			header("location:../../admin/auteur/adminAuteur.php?r=1");
		}else{
			
			header("location:../../admin/auteur/adminAuteur.php?r=0");
		}
		
	}else{
		#traitement des instructions
		echo 'test';
	}


?>