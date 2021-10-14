
// Captura id de la página
form = document.getElementById('crear_usuario');
cierra = document.getElementById('cerrar');

// Eventos click
cierra.addEventListener('click', cerrar, false);

// Evento click Submit
form.addEventListener('submit', function (event){	
	// Captura de Datos
	doc_identidad = document.getElementById('doc_identidad').value;
	correo = document.getElementById('correo').value;		
	nombres = document.getElementById('nombres').value;		
	apellidos = document.getElementById('apellidos').value;		
	contrasena_us = document.getElementById('contrasena_us').value;		
	confirmacion = document.getElementById('confirmacion').value;		
	perfil = document.getElementById('perfil').value;		
	estado = document.getElementById('estado').value;
	// Pasar Datos a Variables de Sesión (de un js a otro)
	sessionStorage.setItem('doc_identidad', doc_identidad);
	sessionStorage.setItem('correo', correo);
	sessionStorage.setItem('nombres', nombres);
	sessionStorage.setItem('apellidos', apellidos);
	sessionStorage.setItem('contrasena_us', contrasena_us);
	sessionStorage.setItem('confirmacion', confirmacion);
	sessionStorage.setItem('perfil', perfil);
	sessionStorage.setItem('estado', estado);
	// Llama la función crear_usuario();
	crear_usuario();
	event.preventDefault();
});

// Usuario Creado
function crear_usuario(){
	if (doc_identidad == "") {		
		swal({
			title: "Verifique el Documento de Identidad!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('doc_identidad').focus();
		});
	} else if (correo == "") {		
		swal({
			title: "Verifique el E-Mail!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('correo').focus();			
		});
	} else if (nombres == "") {		
		swal({
			title: "Verifique el/los Nombre(s)!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('nombres').focus();			
		});
	} else if (apellidos == "") {		
		swal({
			title: "Verifique los Apellidos!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('apellidos').focus();			
		});
	} else if (contrasena_us == "") {
		swal({
			title: "Verifique la Contraseña!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('contrasena_us').focus();			
		});
	} else if (confirmacion == "") {
		swal({
			title: "Verifique la Confirmación de Contraseña!",
			text: "El campo no puede estar vacío",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('confirmacion').focus();			
		});
	} else if (contrasena_us != confirmacion) {
		swal({
			title: "Contraseña y Confirmación no coiniciden",
			text: "Los campos contraseña y confirmación deben coincidir",
			icon: "info",
			button: "Aceptar",
		})
		.then((value) => {
			document.getElementById('contrasena_us').focus();
			document.getElementById('contrasena_us').value = "";
			document.getElementById('confirmacion').value = "";
		});
	} else {
		swal({
			title: "Usuario Creado correctamente!",
			text: "Consulte la lista de usuarios registrados",
			icon: "success",
			button: "Aceptar",
		})
		.then((value) => {
			window.location = '?c=Users&a=consultar';
		});		
	}
}

function cerrar(){
	swal({
			title: "No se ha creado ningún usuario!",
			text: "Consulte la lista de usuarios registrados",
			icon: "success",
			button: "Aceptar",
		})
		.then((value) => {
			window.location = '?c=Users&a=consultar';
		});	
}