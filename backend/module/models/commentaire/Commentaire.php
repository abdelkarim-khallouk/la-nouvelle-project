<?php

	
	class Commentaire extends Connexion{
		
		private $idCommentaire;
		private $nomCommentaire;
		private $contenuCommentaire;
		private $article;
		
		private $idCol = "id_commentaire";
		private $nomCol = "nom_commentaire";
		private $contenuCol = "contenu_commentaire";
		private $articleCol = "article";
		
		private $table = "commentaire";
		
		public function __construct($data=null){
			
			$this->nomCommentaire=$data["nom"];
			$this->contenuCommentaire=$data["contenu"];
			$this->article=$data["article"];
			
		}
		
		
		public function save(){
			
				#SAVE
					#statement veut dire requete SQL
					$statement ="INSERT INTO {$this->table} VALUES ('',
					'$this->nomCommentaire',
					'$this->contenuCommentaire',
					'$this->article')";
					echo $statement;
					try{
							
						$queryresult= $this->getPdo()->query($statement);
						#retourner le resultat de la requete
						return $queryresult;
							
							
					}catch(Exception $e){
						echo("Erreur Save:".$e->getMessage());
					}
					
				}
				
				
		public function getCommentaireByArticle($id=null){
			
			$statement ="SELECT * FROM {$this->table} WHERE {$this->articleCol}=".$id;
			
			try{
					
				$queryresult= $this->getPdo()->query($statement);
				#retourner le resultat de la requete
				return $queryresult;
					
					
			}catch(Exception $e){
				echo("Erreur Save:".$e->getMessage());
			}
		}
		
	}

?>