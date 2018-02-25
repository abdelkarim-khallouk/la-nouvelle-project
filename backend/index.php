
<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Administration</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/validation.js"></script>

</head>

    <body>
    <h4>Bienvenu au panel d'administration</h4>
    <?php
		
    	if(isset($_SESSION["email"])){
    		#une session est ouverte
    		#afficher le tableau de bord de l'admin
    		#echo("tableau de bord");
    		include_once 'admin/menu.inc';
    	}
    	else{
    		#une session n'est pas ouverte
    		#afficher le formulaire d'authentification
    		include_once 'forms/utilisateur/loginForm.inc';
    		
    	}
    
	?>
    </body>
    
</html>