<?php

class UploadFile {
	
	private $filename = "no-image";
	
	public function upload($data) {
			
			#Dossier de destination
			$dossier = "../../../".$data["dossier"]."/";
			#r�cup�ration du nom r�el de l'image + son extention
			$fichier = basename($data["basename"]);
			
			#r�cup�ration de extention uniquement
			$extension = strtolower(pathinfo($data["basename"],PATHINFO_EXTENSION));
			
			#v�rification si le type de fichier
			
			if( $extension == "jpg" || $extension == "png" || $extension == "gif" ){
				#D�placement du fichier charg� en m�moire vers le dossier de destination
				
				if (move_uploaded_file($data["tmpname"],$dossier.md5($fichier).".".$extension)) {
					
					echo 'Upload effectu� avec succ�s ! <br/>';
					#md5() fonction de hachage et non de cryptage
					#md5() = valeur non al�atoire avec algo de retour
					#crypto = valeur al�atoire avec algo de retour
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