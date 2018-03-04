<?php 
	
	require_once ("backend/module/models/categorie/Categorie.php");
	
	$categorie=new Categorie();
	$resultat=$categorie->findCategorie();
	

?>


<ul>

<?php 
	
	while($data=$resultat->fetch())
	{
            	echo ("<li><a href='index.php?page=article&categorie=".$data["id_categorie"]."'>".$data["nom_categorie"]."</a></li>");
	}
            	
	?>
            	
            	
            	
            	
            </ul>