form  = document.getElementById('enviar');

form.addEventListener('submit', function (event) {
	usuario  = document.getElementById('usuario').value;	
	contrasena  = document.getElementById('contrasena').value;
	
	if (usuario == "admin@correo.com" && contrasena == 12345) {		
		window.location = 'app/index_admin.html';
		event.preventDefault();
	} else {
		alert("Datos Incorrectos");
		document.getElementById('contrasena').value = "";
		document.getElementById('usuario').value = "";		
		event.preventDefault();		
	}		
});
