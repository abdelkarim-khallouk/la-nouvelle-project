<?php
	

	class Session{

		private $name;
		private $value;

		public function __construct($name=NULL, $value=NULL){
			$this->name = $name;
			$this->value = $value;
		}


		#Creer une session initiale
		public function setSession(){
			$_SESSION[$this->name] = $this->value;
		}

		#Creer d'un element de session
		public function setSessionItem($this->name, $this->value){
			$_SESSION[$name] = $value;
		}

		#récup d'un element de session
		public function getSession($name){
			return $_SESSION[$name];
		}

		#Destruct de la session
		public function sessionDestruct(){
			#Vider la variable session par sécurité
			session_unset();
			#detruire la variable session
			session_destroy();
		}



	}


?>