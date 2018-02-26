<?php 
	
	require_once ("backend/module/models/categorie/Categorie.php");
	
	$categorie = new Categorie();
	$resultat = $categorie->findCategorie();
?>



<ul>
	<?php 
	
		while ($data = $resultat->fetch()){
			echo ("<li><a href='#'>".
					$data["nom_categorie"]
			."</a></li>");
		}
            	
            	

            	
     ?>
     
                 	<!--  li><a href="#">economie</a></li>
            	<li><a href="#">politique</a></li>
            	<li><a href="#">société</a></li>
            	<li><a href="#">sport</a></li>
            	<li><a href="#">art</a></li>  -->
            	
</ul>

        