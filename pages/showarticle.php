<?php

	require_once ("backend/module/models/article/Article.php");
	require_once ("backend/module/models/auteur/Auteur.php");
	
	
	#$_GET["categorie"] = index.php?page=article&categorie=valeurid
	$idarticle = $_GET["article"];
	$article=new Article();
	#findArticle($by,$byvalue,$limit)
	$resultat = $article->findArticle("id",$idarticle);
	$data=$resultat->fetch();
	
	$auteur=new Auteur();
	$resultatauteur = $auteur->findAuteur($data["auteur"]);
	$dataauteur = $resultatauteur->fetch();
?>
<br/><br/>
<h1><u><?php echo ($data["titre_article"]); ?></u></h1>
<p> <img src="images/<?php echo $data['image_article'] ?>" width="500" height="300" /></p>
<h3>
	<?php 
		echo ($data["date_article"]);
		echo(" | ");
		echo($dataauteur["nom_auteur"]);
	?>

</h3>
<?php echo("<p>".$data["contenu_article"]."</p>") ?>

<form action="backend/actions/commentaire/ajoutAction.php" method="post">
	<label>votre nom</label>
	
	<input type="text" name="nomCommentaire" />
	<br/><br/>
	<label>votre commentaire</label>
	<textarea  style="width: 300px; height: 150px;"  name="contenuCommentaire"></textarea>
	<input type="hidden" value="<?php echo $data["id_article"]; ?>" name="article" />
	</br></br>
	<input type="submit" value="Publier votre commentaire"/>
	
</form>
<br/>
<div style="overflow:auto" height:250px;">
<?php 
	
	require_once ("backend/module/models/commentaire/Commentaire.php");
	
	$commentaire = new Commentaire();
	$datacomments = $commentaire->getCommentaireByArticle($idarticle);
	while($data = $datacomments->fetch()){
		echo("<h4>".$data["nom_commentaire"]."</h4>");
		echo("<p>".$data["contenu_commentaire"]."</p>");
	}

?>

</div>