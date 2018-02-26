<?php

#cette class permet de fournir les méthodes de CRUD pour la table utilsateur
	
	class Article extends Connexion{
		
		#définition de la structure de la table
		
		private $table="article";
		private $idArticle;
		private $titreArticle;
		private $dateArticle;
		private $contenuArticle;
		private $imageArticle;
		private $categorie;
		private $auteur;
		
		
		#définition des noms de colonnes
		
		private $idCol="id_article";
		private $titreCol="titre_article";
		private $dateCol="date_article";
		private $contenuCol="contenu_article";
		private $imageCol="image_article";
		private $categorieCol="categorie";
		private $auteurCol="auteur";
		
		public function __construct($data=NULL){
			
			#$this->idUtilisateur=$id;
			$this->titreArticle= $data["titre"];
			$this->dateArticle=$data["date"];
			$this->contenuArticle=$data["contenu"];
			$this->imageArticle=$data["image"];
			$this->categorie=$data["categorie"];
			$this->auteur=$data["auteur"];
	
			
		}
		
		#METHODES DE VERIFICATION
		private function checkValue($c,$v){ #$c=colonne, $v=valeur
			$statement ="SELECT * FROM {$this->table} WHERE $c='$v'";
			#echo $statement;
			$queryresult= $this->getPdo()->query($statement);
			#echo $queryresult->fetchColumn()."</br>";
			if($queryresult->fetchColumn() > 0)
			{
				
				return true;
			}
			else{
				return false;
				
			}
			
		}
		
		#CREATION DU CRUD
		
		#CREATE & UPDATE
		
		public function saveOrUpdate($id=NULL){ 
			//if($this->checkValue($this->emailCol, $this->emailUtilisateur)== false)
			
			#SAVE
			if($id == null ){
				
				#statement veut dire requete SQL
				$statement ="INSERT INTO {$this->table} VALUES ('',
								'$this->titreArticle',
								'$this->dateArticle',
								'$this->contenuArticle',
								'$this->imageArticle',
								'$this->categorie',
								'$this->auteur')";
				#echo $statement."</br>";
				#echo 1;
			}else{
				
				#UPDATE
				$statement="UPDATE {$this->table} SET
 					$this->titreCol= '$this->titreArticle',	
 					$this->dateCol= '$this->dateArticle',
 					$this->contenuCol= '$this->contenuArticle',
 					$this->imageCol= '$this->imageArticle',
 					$this->categorieCol= '$this->categorie',
 					$this->auteurCol= '$this->auteur'
 					WHERE $this->idCol=".$id;
 					#echo 2;
			}
			#Execution de le requete
			try{
			
				$queryresult= $this->getPdo()->query($statement);
				#retourner le resultat de la requete
				return $queryresult;
			
			
			}catch(Exception $e){
				echo("Erreur SaveOrUpdate:".$e->getMessage());
			}
		}
		/*else{
			
			#echo("l'adresse email est utilisé");
			return "exist";
			#echo 3;
			
		}*/
			
			
			
		
		
		#READ
		public function findArticle($by,$byvalue,$limit){
			
			if($by!=null && $byvalue!=null){
			if($by=="id"){
				#recupération de tous les utilisateurs
				$statement ="SELECT * FROM {$this->table}  WHERE {$this->idCol}='$by' 
								ORDER BY {$this->idCol} DESC limit 0,$limit "  ;
			}
			else if($by=="categorie"){
				
				$statement ="SELECT * FROM {$this->table}  WHERE {$this->categorieCol}='$by' 
								ORDER BY {$this->idCol} DESC limit 0,$limit "  ;
			}
			
			
		}
		else {
				
				$statement ="SELECT * FROM {$this->table} ORDER BY {$this->idCol} DESC  "  ;
				
			}
			
			try{
					
				$queryresult= $this->getPdo()->query($statement);
				#retourner le resultat de la requete
				return $queryresult;
					
					
			}catch(Exception $e){
				echo("Erreur SaveOrUpdate:".$e->getMessage());
			}
		}
		
		#DELETE
		
		public function deleteAuteur($id){
			$statement="DELETE FROM {$this->table} WHERE {$this->idCol}=".$id;
				#Exécution de la requete
			try{
					
				$queryresult= $this->getPdo()->query($statement);
				#retourner le resultat de la requete
				return $queryresult;
					
					
			}catch(Exception $e){
				echo("Erreur SaveOrUpdate:".$e->getMessage());
			}
		}
		
		
	}

?>