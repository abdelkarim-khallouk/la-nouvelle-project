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
		echo("sauvgarde r�ussie");
	}
	else{
		echo("sauvgarde �chou�");
	}
*/
	
	
	
/*
	#test login
	
	$utilisateur= new Utilisateur("karim.khl@gmail.com","1234");
	$resultat= $utilisateur->loginUtilisateur();
	
	if($resultat)
	{
		echo("Authentification r�ussie");
		
	}else {
		echo("Authentification �chou�e");
			}
			
			*/
	
/*
	 # TEST AJOUT AUTEUR
	$categorie= new Categorie("Politique");
	$resultat = null;
	$resultat= $categorie->saveOrUpdate();
	
	if($resultat)
	{
		echo(" Ajout/mise � jour categorie r�ussie ");
	
	}else {
		echo("  Ajout/mise � jour categorie �chou�e");
	}
	
*/

/*
	# TEST AJOUT AUTEUR
	
	$auteur = new Auteur( "Karim", "khl", "karim.khl@gmail.com" );
	$auteur = null;
	$auteur= $auteur->saveOrUpdate();
	
	if($resultat)
	{
		echo(" Ajout/mise � jour auteur r�ussie");
	
	}else {
		echo(" Ajout/mise � jour auteur �chou�e");
	}
	
*/
	
	
?>