//form=l'objet formulaire à valider
//type =le type de formulaire: login, ajout , update ...ect

function validation(form,type){
	var erreur="";
	
	//verification et validation + récupération des erreur
	if(type=="loginForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;
		
		if(form.email.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>"
		if(form.pwd.value=="")  erreur +="-Veuillez saisir le mot de passe <br/>";		
	}else if(type=="ajoutUtilisateurForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;
	
		if(form.email.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>"
		if(form.pwd.value=="")  erreur +="-Veuillez saisir le mot de passe <br/>";
		if(form.nom.value=="")  erreur +="-Veuillez saisir le nom d'utilisateur <br/>";
		
		if(form.pwd.value.length<6) erreur +="le mot de passe doit etre sup à 6 chars <br/>";
		
		
		
	}
else if(type=="ajoutAuteurForm"){
		
		var expReg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.email.value;
	
		if(form.email.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		if(email.match(expReg)== null) erreur +="-Veuillez valider l'email <br/>"
		if(form.prenom_aut.value=="")  erreur +="-Veuillez saisir le prenom de l'auteur <br/>";
		if(form.nom_aut.value=="")  erreur +="-Veuillez saisir le nom de l'auteur <br/>";
			
			}
	
else if(type=="ajoutCategorieForm"){
	
		
	if(form.cat.value=="")  erreur +="-Veuillez remplir le champ du formulaire <br/>";
		
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


	
	
