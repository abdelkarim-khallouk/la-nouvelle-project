<?php 
	
	require_once '../../module/Connexion.php';
	require_once '../../module/models/utilisateur/Utilisateur.php';
	
	$id=(isset($_GET["id"]))?$_GET["id"]:"";
	
	if($id != ""){
		
		#valeur adapté pour transformer le formulaire ajouForm en un Formulaire d'update
		$utilisateur= new Utilisateur();
		#récupérer l'utilisateur dans la meme instruction
		$list= $utilisateur->findUtilisateur();
		
		while($data = $list->fetch()){
		
		$email = $data["email_utilisateur"];
		$pwd = $data["pwd_utilisateur"];
		$nom = $data["nom_utilisateur"];
		}
		$action = "updateAction";
		$bouton = "Modifier utilisateur";
	}else
	{
		#valeur par défaut pour le formulaire ajoutForm
		$email = "";
		$pwd = "";
		$nom = "";
		
		$action = "ajoutAction";
		$bouton = "Ajouter utilisateur";
		
	}

?>
<div id="form">
  			<form name="ajoutUtilisateurForm" action="../../actions/utilisateur/<?php echo $action;?>.php" method="post">
	  			<table>
	  				<tr>
	  					<td colspan=2 id="bloc_erreur"></td>
	  				</tr>
	  				<tr>
	  					<td><label>Email</label></td>
	  					<td><input type="text" name="email"  value=<?php echo $email;?> ></td>
	  				</tr>
	  				<tr>
	  					<td><label>Password</label></td>
	  					<td><input type="password" name="pwd" value="<?php echo $pwd;?>" ></td>
	  				</tr>
	  				<tr>
	  					<td><label>Nom</label></td>
	  					<td><input type="text" name="nom" value="<?php echo $nom;?>" ></td>
	  				</tr>
	  				<tr>
	  					<td colspan="2" align="center">
	  						
	  						<input class="btn" type="button" value="<?php echo $bouton;?>" onclick="validation(ajoutUtilisateurForm,'ajoutUtilisateurForm')"/>
	  						<input type="hidden" name="id"  value="<?php echo $id;?>"/></td>
	  					</td>
	  				</tr>
	  				<td>
	  				
	  			</table>
  			</form>
</div>