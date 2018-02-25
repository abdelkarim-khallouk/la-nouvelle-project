<?php 
	require_once '../../module/Connexion.php';
	require_once '../../module/models/utilisateur/Utilisateur.php';
	
	$utilisateur=new Utilisateur();
	$list=$utilisateur->findUtilisateur();
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
    <h3>Bienvenu au panel de gestion: Edition sUtilisateur</h4>
    
    <a href="#">
	<div><p>Editer utilisateur</p></div>
	</a>
	
	<a href="#">
		<div class="annuler"><p>Annuler</p></div>
	</a>
	
	
   <div id="formEditer">
   		<table>
   		
   			<tr class="entete">
   				<td>ID</td><td>EMAIL</td><td>Action</td>
   			</tr>
   		
   		<?php 
   			while($data = $list->fetch()){
   				echo('<tr>');
   					echo('<td>'.$data["id_utilisateur"].'</td>');
   					echo('<td>'.$data["email_utilisateur"].'</td>');
   					echo('<td>');
   						echo("<a href='../../actions/utilisateur/deleteAction.php?id=".$data["id_utilisateur"]."'>Supprimer</a> / ");
   						echo("<a href='adminUtilisateur.php?id=".$data["id_utilisateur"]."'>Modifier</a> / ");
   						echo('</td>');
   					
   				echo('</tr>');
   			}
   		?>
   		
   		</table>
   
   </div>
    </body>
    
</html>