<?php
	session_start();
	require_once '../../module/Connexion.php';
	require_once '../../module/models/utilisateur/Utilisateur.php';
	
	
	$email = (isset($_POST["email"]))?$_POST["email"]:"";
	$pwd = (isset($_POST["pwd"]))?$_POST["pwd"]:"";
	$nom = (isset($_POST["nom"]))?$_POST["nom"]:"";
	if($email !="" && $pwd!="" && $nom!=""){
		#verification de l'authentification
		
		$utilisateur=new Utilisateur($email,$pwd, $nom);
		$resultat= $utilisateur->saveOrUpdate();
		
		if($resultat=="exist"){
			header("location:../../admin/utilisateur/adminUtilisateur.php?r=exist");
			
		}
		
		else if($resultat){
			#creation de session pour l'utilisateur connecté
			
			#redirection vers la page backend/index.php
			#ne jamais utiliser de balise html avant la fonction header
			header("location:../../admin/utilisateur/adminUtilisateur.php?r=1");
		}else{
			
			header("location:../../admin/utilisateur/adminUtilisateur.php?r=0");
		}
		
	}else{
		#traitement des instructions
		echo 'test';
	}


?>