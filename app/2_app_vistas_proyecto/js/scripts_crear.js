// Captura id de la página
form = document.getElementById('crear_usuario');

// Eventos click
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
	crear_usuario();
	event.preventDefault();
});

// Usuario Creado
function crear_usuario(){
	swal({
		title: "Usuario Creado correctamente!",
		text: "Consulte la lista de usuarios registrados",
		icon: "success",
		button: "Aceptar",
	})
	.then((value) => {
		window.location = 'consultar_usuarios.html';
	});
}