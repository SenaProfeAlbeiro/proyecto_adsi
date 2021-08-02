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
		let cont = contador - 1;
		contador = cont;
		if (contador == 0) {
			alert("Ha superado el número de intentos, se le ha enviado un correo para activar nuevamente su cuenta");
		} else {
			document.getElementById('contador').innerHTML = contador;
			event.preventDefault();
		}
	}		
});

var contador = 3;