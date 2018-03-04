<?php
	#formulaire d'ajout des articles
	require_once "../../module/Connexion.php";
	require_once("../../module/models/categorie/Categorie.php");
	require_once("../../module/models/auteur/Auteur.php");
	

	$categorie = new Categorie();
	$resultatCategorie = $categorie->findCategorie();
	
	$auteur = new Auteur();
	$resultatAuteur = $auteur->findAuteur();
		
?>

<div id="form">

	<form name="creerArticleForm" action="../../actions/article/ajoutAction.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Titre</label></td>
				<td><input type="text" name="titreArticle"/></td>
			</tr>
			
			<tr>
				<td><label>Contenu</label></td>
				<td>
					<textarea name="contenuArticle"></textarea>
				</td>
			</tr>
			<tr>
				<td><label>Categorie</label></td>
				<td>
					<select name="categorieArticle">
						<?php
							while($data = $resultatCategorie->fetch()){
								echo("<option value='".$data["id_categorie"]."'>");
									echo($data["nom_categorie"]);
								echo("</option>");
							} 
						?>
					</select>
				</td> 
			</tr>
			<tr>
				<td><label>Auteur</label></td>
				<td>
					<select name="auteurArticle">
						<?php
							while($data = $resultatAuteur->fetch()){
								echo("<option value='".$data["id_auteur"]."'>");
									echo($data["nom_auteur"]." ".$data["prenom_auteur"]);
								echo("</option>");
							} 
						?>
					</select>
				</td> 
			</tr>
			<tr>
				<td>Nom image</td>
				<td><input type="file" name="imageArticle"/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Créer" 
						"/></td>
			</tr>		
		</table>
		<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>	
	</form>
</div>