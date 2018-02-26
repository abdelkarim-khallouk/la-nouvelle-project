<?php

#cette class permet de fournir les méthodes de CRUD pour la table auteur

	class Auteur extends Connexion {
		
		#définition de la structure de la table
		
		private $table="auteur";
		private $idAuteur;
		private $nomAuteur;
		private $prenomAuteur;
		private $emailAuteur;

		
		#définition des noms de colonnes
		
		private $idCol="id_auteur";
		private $nomCol="nom_auteur";
		private $prenomCol="prenom_auteur";
		private $emailCol="email_auteur";


		
		public function __construct( $nom=NULL, $prenom=NULL, $email=NULL ){
			
			#$this->idAuteur=$id;
			$this->emailAuteur= $email;
			$this->prenomAuteur= $prenom;
			$this->nomAuteur= $nom;
			
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
			if($this->checkValue($this->emailCol, $this->emailAuteur) == false)
			{
			#SAVE
			if($id == null ){
				
				#statement veut dire requete SQL
				$statement ="INSERT INTO {$this->table} VALUES ('',
								'$this->nomAuteur',
								'$this->prenomAuteur',
								'$this->emailAuteur')";
				echo $statement."</br>";
				#echo 1;
			}else{
				
				#UPDATE
				$statement="UPDATE {$this->table} SET
 					$this->nomCol= '$this->nomAuteur',	
 					$this->prenomCol= '$this->prenomAuteur',
 					$this->emailCol= '$this->emailAuteur',
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
			
			#echo("Cet auteur existe dêja !!");
			return "exist";
			#echo 3;
		}
			
		} #FIN SAVE or UPDATE
		
		
		#READ
		public function findAuteur($id=null){
			if($id==null){
				#recupération de tous les auteurs
				$statement ="SELECT * FROM {$this->table}";
			}else{
				
				$statement="SELECT * FROM {$this->table} WHERE {$this->isCol}=".$id;
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