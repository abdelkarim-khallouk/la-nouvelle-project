<?php
	session_start();
	require_once '../../module/Connexion.php';
	require_once '../../module/models/utilisateur/Utilisateur.php';
	require_once '../../module/Session.php';
	
	$email = (isset($_POST["email"]))?$_POST["email"]:"";
	$pwd = (isset($_POST["pwd"]))?$_POST["pwd"]:"";
	
	if($email !="" && $pwd!=""){
		#verification de l'authentification
		
		$utilisateur=new Utilisateur($email,$pwd);
		$resultat= $utilisateur->loginUtilisateur();
		
		if($resultat){
			#creation de session pour l'utilisateur connecté
			$session=new Session("email",$email);
			$session->setSession();
			#redirection vers la page backend/index.php
			#ne jamais utiliser de balise html avant la fonction header
			header("location:../../index.php");
		}else{
			
			header("location:../../index.php");
		}
		
	}else{
		#traitement des instructions
		echo 'test';
	}


?>