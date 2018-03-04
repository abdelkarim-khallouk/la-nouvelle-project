<?php 
#récupération des parametres de navigations
#index.php?page=contact

require_once ("backend/module/Connexion.php");


if(isset($_GET["page"]))
	$page=$_GET["page"];
	else 
		$page="home";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog La Nouvelle</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<!--DEBUT SEPARATEUR -->
    <div id="separateur">
    </div>
    <!--FIN SEPARATEUR -->
    
	<!-- DEBUT CONTENEUR -->
	<div id="conteneur">
    	<!-- DEBUT HEADER -->
        <div id="header">
    	
    	<?php  include_once ("layout/header.php"); ?>
            
        </div>
        <!-- FIN HEADER-->
        
        <!-- DEBUT MENU-->
        <div id="menu">
        	
        	<?php  include_once ("layout/menu.php"); ?>
        	
        </div>
        <!-- FIN MENU-->
        
        <!-- DEBUT SLIDER -->
        <div id="slider">
        	
        	<?php  include_once ("layout/slider.php"); ?>
        	
        	
        </div>
        <!-- FIN SLIDER-->
        
      	<!-- DEBUT NEWSLETTER -->
        <div id="newsletter">
        	
        	 <?php  include_once ("layout/newsletter.php"); ?>
        	
        </div>
        <!-- FIN NEWSLETTER-->
        <!-- DEBUT RUBRIQUE -->
        
        <?php  include_once ("pages/$page.php"); ?>
        
        </div>
    <!-- FIN CONTENEUR -->
</body>
</html>
       	