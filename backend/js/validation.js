//form=l'objet formulaire à valider
//type =le type de formulaire: login, ajout , update ...ect

function validation(form,type){
	var erreur="";
	
	//verification et validation + récupération des erreur
	if(type=="loginForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;
		
		if(form.email.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>";
		if(form.pwd.value=="")  erreur +="-Veuillez saisir le mot de passe <br/>";		
	}else if(type=="ajoutUtilisateurForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;
	
		if(form.email.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>";
		if(form.pwd.value=="")  erreur +="-Veuillez saisir le mot de passe <br/>";
		if(form.nom.value=="")  erreur +="-Veuillez saisir le nom d'utilisateur <br/>";
		
		if(form.pwd.value.length<6) erreur +="le mot de passe doit etre sup à 6 chars <br/>";
		
		
	}
	else if(type=="ajoutCategorieForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var nom=form.nom.value;
	
		if(form.nom.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		// if(nom.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>";
		
			
	}
	else if(type=="ajoutAuteurForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;

		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>";
		if(form.nom.value=="")  erreur +="-Veuillez saisir le nom d'auteur <br/>";
		if(form.prenom.value=="")  erreur +="-Veuillez saisir le prénom d'auteur <br/>";
		if(form.email.value=="")  erreur +="-Veuillez saisir l'email d'auteur <br/>";
		
		
	}
	
	else if(type=="ajoutArticleForm"){
		/*
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;

		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>";
		if(form.titre.value=="")  erreur +="-Veuillez saisir le titre d'article <br/>";
		if(form.date.value=="")  erreur +="-Veuillez saisir la date de l'article <br/>";
		if(form.contenu.value=="")  erreur +="-Veuillez saisir le contenu de l'article <br/>";
		if(form.categorie.value=="")  erreur +="-Veuillez saisir le categorie <br/>";
		if(form.auteur.value=="")  erreur +="-Veuillez saisir le nom de l'auteur <br/>";	
		 */
	}

	
	else{
		
		alert("Formulaire invalide")
		
	}

	//Envoi du formulaire ou affichage des erreurs
	if(erreur !=""){
		
		document.getElementById("bloc_erreur").innerHTML="<div id='erreur'>"+erreur+"</div>";
	}else
		{
		form.submit();
		}

			
}


	
	
