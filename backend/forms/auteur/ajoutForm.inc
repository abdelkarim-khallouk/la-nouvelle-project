<?php 
	
	require_once '../../module/Connexion.php';
	require_once '../../module/models/auteur/Auteur.php';
	
	$id=(isset($_GET["id"]))?$_GET["id"]:"";
	
	if($id != ""){
		
		#valeur adapté pour transformer le formulaire ajouForm en un Formulaire d'update
		$auteur= new Auteur();
		#récupérer l'utilisateur dans la meme instruction
		$list= $auteur->findAuteur();
		
		while($data = $list->fetch()){
		
		$nom_auteur = $data["nom_auteur"];
		$prenom_auteur = $data["prenom_auteur"];
		$email_auteur = $data["email_auteur"];
		
		}
		$action = "updateAction";
		$bouton = "Modifier auteur";
	}else
	{
		#valeur par défaut pour le formulaire ajoutForm
		$nom_auteur = "";
		$prenom_auteur = "";
		$email_auteur = "";
		
		
		$action = "ajoutAction";
		$bouton = "Ajouter auteur";
		
	}

?>
<div id="form">
  			<form name="ajoutAuteurForm" action="../../actions/auteur/<?php echo $action;?>.php" method="post">
	  			<table>
	  				<tr>
	  					<td colspan=2 id="bloc_erreur"></td>
	  				</tr>
	  				<tr>
	  					<td><label>Nom</label></td>
	  					<td><input type="text" name="nom_aut"  value=<?php echo $nom_auteur;?> ></td>
	  				</tr>
	  				
	  				<tr>
	  					<td><label>Prenom</label></td>
	  					<td><input type="text" name="prenom_aut"  value=<?php echo $prenom_auteur;?> ></td>
	  				</tr>
	  				
	  				<tr>
	  					<td><label>Email</label></td>
	  					<td><input type="text" name="email"  value=<?php echo $email_auteur;?> ></td>
	  				</tr>
	  				
	  				<tr>
	  					<td colspan="2" align="center">
	  						
	  						<input class="btn" type="button" value="<?php echo $bouton;?>" onclick="validation(ajoutAuteurForm,'ajoutAuteurForm')"/>
	  						<input type="hidden" name="id"  value="<?php echo $id;?>"/></td>
	  					</td>
	  				</tr>
	  				<td>
	  				
	  			</table>
  			</form>
</div>