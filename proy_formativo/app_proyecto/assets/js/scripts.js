document.getElementById("myForm").addEventListener("click", enviar);

function enviar(evt){
	ident = evt.target.id;		
	if (ident == "login" || ident == "login1") {
		let user = document.getElementById("usuario").value;
		let pass = document.getElementById("password").value;	
		if (user == 'admin@correo.com' && pass == "12345") {		
			window.location = '../app/vistas/modulos/index_admin.vista.html';
			evt.preventDefault();
		} else if (user == 'cliente@correo.com' && pass == "12345") {
			window.location = '../app/vistas/modulos/index_cliente.vista.html';
			evt.preventDefault();
		}
		else {
			alert("Usuario incorrecto");
			window.location = "login.vista.html";
			evt.preventDefault();
		}
	} else if (ident == "registrate" || ident == "registrate1") {		
		let user = document.getElementById("usuario").value;
		pass1 = document.getElementById("password").value;	
		pass2 = document.getElementById("password2").value;		
		if (user == "admin@correo.com" || user == "cliente@correo.com") {
			alert("El usuario ya está registrado");
			window.location = "registrate.vista.html";
			evt.preventDefault();			
		}
		else if (pass1 == pass2 && pass1 != "" && pass2 != "") {
			alert("Se ha creado el usuario correctamente, " +
				"por favor espere 24 horas para que el administrador " + 
				"le habilite el perfil");
			window.location = "registrate.vista.html";
			evt.preventDefault();
		} else {
			alert("Las constraseñas no coinciden");			
			window.location = "registrate.vista.html";
			evt.preventDefault();
		}
	}
}