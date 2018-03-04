<?php
session_start();
	require_once("module/Connexion.php") ;
	require_once("module/Session.php");
	#require_once("module/Connexion.php");
	
	$session=new Session("email","zayna.oufkir@gmail.com");
	$session->setSession();
	$session->setSessionItem("EM", "test@gmail.com");
	
	echo ($session->getSession("email"))."</br>";
	echo ($session->getSession("EM"))."</br>";
	
	$session->sessionDestruct();
	
	/*$utilisateur= new Utilisateur("zayna.oufkir@gmail.com","1234","Zayna OUFQIR");
	$resultat= $utilisateur->saveOrUpdate();
	
	if($resultat == "exist"){
		
		echo("l'adresse email est exist");
	}
	else if($resultat ==true){
		echo("sauvgarde réussie");
	}
	else{
		echo("sauvgarde échoué");
	}
	*/
	
	#test login
	
	
	/*
	$utilisateur= new Utilisateur("zayna.oufkir@gmail.com","1234");
	$resultat= $utilisateur->loginUtilisateur();
	
	if($resultat)
	{
		echo("Authentification réussie");
		
	}else {
		echo("Authentification échouée");
			}
			
			*/
	

?>