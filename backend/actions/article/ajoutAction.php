<?php
	
	require_once '../../module/Connexion.php';
	require_once '../../module/models/article/Article.php';
	require_once '../../module/UploadFile.php';
	
	
	
	$titre = (isset($_POST["titreArticle"]))?$_POST["titreArticle"]:"";
	$contenu = (isset($_POST["contenuArticle"]))?$_POST["contenuArticle"]:"";
	#Year mounth day
	$date=date("Y/m/d");
	$categorie = (isset($_POST["categorieArticle"]))?$_POST["categorieArticle"]:"";
	$auteur = (isset($_POST["auteurArticle"]))?$_POST["auteurArticle"]:"";
	#$data=array("titre"=>$titre,"date"=>$date,"contenu"=>$contenu);
	
	if(isset($_FILES["imageArticle"])){
		
		#chargement du fichier au serveur
		$uploadfile=new UploadFile();
		$basename= basename($_FILES['imageArticle']['name']);
		$dossier="images";
		$tmpname = $_FILES['imageArticle']['tmp_name'];
		#préparation des données de chargement sous format array à transferer la class UploadFile()
		$filedata =array("basename"=>$basename,"dossier"=>$dossier,"tmpname"=>$tmpname);
		
		
		
		
		
	}
	
	if($titre !=""){
		#traitement du fichier à uploader + save en base de données
		#exécution de l'upload du fichier
		$uploadfile->upload($filedata);
		#préparation des données pour le save en base de données
		$data=array("titre"=>$titre,"date"=>$date,"contenu"=>$contenu,
						"image"=>$uploadfile->getFileName(),"categorie"=>$categorie,
				"auteur"=>$auteur);
		
		$article=new Article($data);
		$resultat=$article->saveOrUpdate();
		
		if($resultat){
			
			header("location:../../admin/article/adminArticle.php?r=1");
				
			
		}else{
			header("location:../../admin/article/adminArticle.php?r=0");
				
		}
		
	}
	
	else{
		#traitement des instructions
		echo 'test';
	}


?>