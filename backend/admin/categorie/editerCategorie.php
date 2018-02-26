<?php 

	require_once '../../module/Connexion.php';	
	require_once '../../module/models/categorie/Categorie.php';
	
	
	$categorie=new Categorie();
	$list=$categorie->findCategorie();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Administration</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript" src="../../js/validation.js"></script>
</head>

    <body>
    <h3>Bienvenu au panel de gestion: Edition des categorie</h4>
    
    <a href="#">
	<div><p>Editer categorie</p></div>
	</a>
	
	<a href="#">
		<div class="annuler"><p>Annuler</p></div>
	</a>
	
	
   <div id="formEditer">
   		<table>
   		
   			<tr class="entete">
   				<td>ID</td><td>NOM</td><td>Action</td>
   			</tr>
   		
   		<?php 
   			while( $data = $list->fetch() ){
   				echo('<tr>');
   					echo('<td>'.$data["id_categorie"].'</td>');
   					echo('<td>'.$data["nom_categorie"].'</td>');
   					echo('<td>');
   						echo("<a href='../../actions/categorie/deleteAction.php?id=".$data["id_categorie"]."'>Supprimer</a> / ");
   						echo("<a href='adminCategorie.php?id=".$data["id_categorie"]."'>Modifier</a> / ");	#	
   					echo('</td>');
   					
   				echo('</tr>');
   			}
   		?>
   		
   		</table>
   
   </div>
    </body>
    
</html>