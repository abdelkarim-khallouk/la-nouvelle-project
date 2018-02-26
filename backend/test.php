<?php
	
	session_start();
	require_once("module/Connexion.php") ;
	require_once("module/Session.php");
	
	require_once("module/models/categorie/Categorie.php") ;
	require_once("module/models/auteur/Auteur.php") ;
	
	
	$session=new Session("email","karim.khl@gmail.com");
	$session->setSession();
	$session->setSessionItem("test", "test@gmail.com");
	
	echo ($session->getSession("email"))."</br>";
	echo ($session->getSession("test"))."</br>";
	
	$session->sessionDestruct();
	
/**/
	
/*
 	
 	$utilisateur= new Utilisateur("karim.khl@gmail.com","1234","Karim khl");
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
	
	
	
/*
	#test login
	
	$utilisateur= new Utilisateur("karim.khl@gmail.com","1234");
	$resultat= $utilisateur->loginUtilisateur();
	
	if($resultat)
	{
		echo("Authentification réussie");
		
	}else {
		echo("Authentification échouée");
			}
			
			*/
	
/*
	 # TEST AJOUT AUTEUR
	$categorie= new Categorie("Politique");
	$resultat = null;
	$resultat= $categorie->saveOrUpdate();
	
	if($resultat)
	{
		echo(" Ajout/mise à jour categorie réussie ");
	
	}else {
		echo("  Ajout/mise à jour categorie échouée");
	}
	
*/

/*
	# TEST AJOUT AUTEUR
	
	$auteur = new Auteur( "Karim", "khl", "karim.khl@gmail.com" );
	$auteur = null;
	$auteur= $auteur->saveOrUpdate();
	
	if($resultat)
	{
		echo(" Ajout/mise à jour auteur réussie");
	
	}else {
		echo(" Ajout/mise à jour auteur échouée");
	}
	
*/
	
	
?>