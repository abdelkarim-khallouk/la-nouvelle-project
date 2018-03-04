<?php

#cette class permet de fournir les méthodes de CRUD pour la table utilsateur
	
	class Categorie extends Connexion{
		
		#définition de la structure de la table
		
		private $table="categorie";
		private $idCategorie;
		private $nomCategorie;
		
		#définition des noms de colonnes
		
		private $idCol="id_Categorie";
		private $nomCol="nom_Categorie";
		
		public function __construct($nom=NULL){
			
			#$this->idUtilisateur=$id;
			
			$this->nomCategorie=$nom;
			
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
			if($this->checkValue($this->nomCol, $this->nomCategorie)== false)
			{
			#SAVE
			if($id == null ){
				
				#statement veut dire requete SQL
				$statement ="INSERT INTO {$this->table} VALUES ('',
								
								'$this->nomCategorie')";
				#echo $statement."</br>";
				#echo 1;
			}else{
				
				#UPDATE
				$statement="UPDATE {$this->table} SET
 					
 					$this->nomCol= '$this->nomCategorie'
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
		}else{
			
			#echo("l'adresse email est utilisé");
			return "exist";
			#echo 3;
			
		}
			
			
			
		}
		
		#READ
		public function findCategorie($id=null){
			if($id==null){
				#recupération de tous les utilisateurs
				$statement ="SELECT * FROM {$this->table}";
			}else{
				
				$statement="SELECT * FROM {$this->table} WHERE {$this->idCol}=".$id;
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
		
		public function deleteCategorie($id){
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
		/*
		public function loginUtilisateur(){
			
			$statement="SELECT * FROM {$this->table} WHERE {$this->emailCol}='{$this->emailUtilisateur}' AND 
															{$this->pwdCol}='{$this->pwdUtilisateur}'";
			try{
			$queryresult= $this->getPdo()->query($statement);
			#retourner le résultat de la requete
			#echo $queryresult->fetchColumn()."</br>";
			if($queryresult->fetchColumn() > 0)
				{
					return true;
					
				}
				else{
					return false;
					
															
					}
					}catch(Exception $e){
						echo("Erreur SaveOrUpdate:".$e->getMessage());
					}		
			
		}*/
			
		
	}

?>