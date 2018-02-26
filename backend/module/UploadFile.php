<?php

class UploadFile {
	
	private $filename = "no-image";
	
	public function upload($data) {
			
			#Dossier de destination
			$dossier = "../../../".$data["dossier"]."/";
			#récupération du nom réel de l'image + son extention
			$fichier = basename($data["basename"]);
			
			#récupération de extention uniquement
			$extension = strtolower(pathinfo($data["basename"],PATHINFO_EXTENSION));
			
			#vérification si le type de fichier
			
			if( $extension == "jpg" || $extension == "png" || $extension == "gif" ){
				#Déplacement du fichier chargé en mémoire vers le dossier de destination
				
				if (move_uploaded_file($data["tmpname"],$dossier.md5($fichier).".".$extension)) {
					
					echo 'Upload effectué avec succès ! <br/>';
					#md5() fonction de hachage et non de cryptage
					#md5() = valeur non aléatoire avec algo de retour
					#crypto = valeur aléatoire avec algo de retour
					#algo de retour = valeur d'origine avec hachage ou cyptage
					$image = md5($fichier).".".$extension;
					$this->filename = $image;
				}
				else{
					echo 'Echec de l\'upload !<br/>';
				}
				
			}else {
				echo "Erreur extension <br/> ";
				
			}
		}
	
		public function getFileName(){
			return $this->filename;
		}
		
}

?>