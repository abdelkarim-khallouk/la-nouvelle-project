<?php
	//session_start();
	require_once '../../module/Connexion.php';
	require_once '../../module/models/commentaire/Commentaire.php';
	
	
	$nom = (isset($_POST["nomCommentaire"]))?$_POST["nomCommentaire"]:"";
	$contenu = (isset($_POST["contenuCommentaire"]))?$_POST["contenuCommentaire"]:"";
	$article = (isset($_POST["article"]))?$_POST["article"]:"";
	
	if($nom !="" && $contenu  !="" && $article !="")
	{
		#ajout du commentaire
		
		$data=array("nom"=>$nom,"contenu"=>addslashes($contenu),"article"=>$article);
		
		$commentaire=new Commentaire($data);
		$resultat= $commentaire->save();
		
		//if($resultat=="exist"){
			//header("location:../../admin/auteur/adminAuteur.php?r=exist");
			
		//}
		
		//else 
			if($resultat){
			#creation de session pour l'utilisateur connecté
			
			#redirection vers la page backend/index.php
			#ne jamais utiliser de balise html avant la fonction header
			header("location:../../../index.php?page=showarticle&article=".$article);
			
		}else{
			
			echo("erreur");
			#header("location:../../admin/auteur/adminAuteur.php?r=0");
		}
		
	}else{
		#traitement des instructions
		echo 'test';
	}


?>