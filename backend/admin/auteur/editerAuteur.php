<?php 

	require_once '../../module/Connexion.php';
	require_once '../../module/models/auteur/Auteur.php';			

	$auteur=new Auteur();
	$list=$auteur->findAuteur();
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
    <h3>Bienvenu au panel de gestion: Edition des auteurs</h4>
    
    <a href="#">
	<div><p>Editer un auteur</p></div>
	</a>
	
	<a href="#">
		<div class="annuler"><p>Annuler</p></div>
	</a>
	
	
   <div id="formEditer">
   		<table>
   		
   			<tr class="entete">
   				<td>ID</td><td>NOM</td><td>PRENOM</td><td>EMAIL</td><td>Action</td>
   			</tr>
   		
   		<?php 
   			while($data = $list->fetch()){
   				echo('<tr>');
   					echo('<td>'.$data["id_auteur"].'</td>');
   					echo('<td>'.$data["nom_auteur"].'</td>');
   					echo('<td>'.$data["prenom_auteur"].'</td>');
   					echo('<td>'.$data["email_auteur"].'</td>');
   					echo('<td>');
   						echo("<a href='../../actions/auteur/deleteAction.php?id=".$data["id_auteur"]."'>Supprimer</a> / ");
   						echo("<a href='adminAuteur.php?id=".$data["id_auteur"]."'>Modifier</a> / ");							
   					echo('</td>');
   					
   				echo('</tr>');
   			}
   		?>
   		
   		</table>
   
   </div>
    </body>
    
</html>