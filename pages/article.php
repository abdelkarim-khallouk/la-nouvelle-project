<?php

	require_once ("backend/module/models/article/Article.php");
	#$_GET["categorie"] = index.php?page=article&categorie=valeurid
	$idcategorie = $_GET["categorie"];
	$article=new Article();
	#findArticle($by,$byvalue,$limit)
	$resultat = $article->findArticle("categorie",$idcategorie);
	
?>

<h1><u>Nouveau articles</u></h1>

<?php 

	while($data = $resultat->fetch())
	{
		#substr (source de la chaine, premier charactère, dernier charactère)
		$apercu=substr($data["contenu_article"],0,500);
		echo("<h3>");	
			echo("<a href='index.php?page=showarticle&article={$data["id_article"]}'>");
			echo("<a href=''>");
				echo($data["titre_article"]);
			echo('</a>');
		echo("</h3>");
		echo("<p>".$apercu."...<a href='index.php?page=showarticle&article={$data["id_article"]}' >[lire la suite]</a></p><br/>");
		
	}		


		
		#lorem ipsum:texte pour tester  substr
?>

