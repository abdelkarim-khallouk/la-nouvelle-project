<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Administration</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript" src="../../js/validation.js"></script>
</head>

    <body>
    <h3>Bienvenu au gestion: Auteurs</h4>
    
    <a href="editerAuteur.php">
	<div><p>Editer auteur</p></div>
	</a>
	
	<a href="#">
		<div class="annuler"><p>Annuler</p></div>
	</a>
	<h4>Ajouter un auteur</h4>
	
    <?php
		include_once("../../forms/auteur/ajoutForm.inc");				
	?>
    </body>
    
</html>