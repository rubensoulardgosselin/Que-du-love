function resetForm(){
	if (confirm("Êtes-vous sûr de tout vouloir effacer ?")){

		/* On va modifie le contenu des champs login et password
		const log_input = document.getElementById("login");
		log_input.value = ""

		const pwd_input = document.getElementById("password");
		pwd_input.value = ""
		*/

		document.getElementById("formulaire").reset();
		
	}
}
function visible(){
	const bouton = document.getElementById("valider");
	const password_input = document.getElementById("password");

	if (password_input!=""){
		bouton.disabled=false;
	}
}
