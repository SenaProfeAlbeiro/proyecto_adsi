// Cambiar cuando se hace click
const botones = document.querySelectorAll(".ocul-navbar");
const cuandoSeHaceClick = function (evento) {	
	if (screen.width < 992) {
		document.getElementById("navbarSupportedContent").classList.toggle('show');		
	}
}
// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);	
});

// Valida el Inicio de Sesión
form  = document.getElementById('enviar');
form.addEventListener('submit', function (event) {
	usuario  = document.getElementById('usuario').value;	
	contrasena  = document.getElementById('contrasena').value;
	validarBasico();
});

// Validación básica
function validarBasico(){
	// Expresión que muestra la estructura de un correo electrónico
	let expresion = /\w+@+\w+\.+\w/;
	// Valida que el campo Usuario no esté vacío
	if (usuario === "") {		
		swal({
			title: "Verifique el Campo Usuario!",
			text: "El Usuario NO puede estar vacío",
			icon: "warning",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('usuario').focus();
		});
		event.preventDefault();
	// Valida que el campo Usuario sea un Correo Electrónico
	} else if (!expresion.test(usuario)) {
		swal({
			title: "Verifique el Campo Usuario!",
			text: "El Usuario NO es válido, NO es un correo electrónico",
			icon: "warning",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('usuario').focus();
		});
		event.preventDefault();
	// Valida que el campo Contraseña tenga entre 5 y 8 caracteres
	} else if (contrasena === "") {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "La Contraseña NO puede estar vacía",
			icon: "warning",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('contrasena').focus();
		});
		event.preventDefault();
	// Valida que el campo Contraseña tenga entre 5 y 8 caracteres
	} else if (contrasena.length < 5 || contrasena.length > 8) {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "La Contraseña debe tener entre 5 y 8 caracteres",
			icon: "warning",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('contrasena').focus();
		});
		event.preventDefault();
	}
}

function validarUsuario(){
	swal({
		title: "Usuario Incorrecto!",
		text: "Usuario y/o Contraseña Incorrectos",
		icon: "error",
		button: "Aceptar",
	})
	event.preventDefault();	
	window.location = '?';
}

// Registro
form2  = document.getElementById('registro');
form2.addEventListener('submit', function (event) {
	nombres  = document.getElementById('nombres').value;
	apellidos  = document.getElementById('apellidos').value;
	correo  = document.getElementById('correo').value;
	contrasena  = document.getElementById('contrasena_reg').value;
	confirmacion  = document.getElementById('confirmacion').value;
	
	if (nombres != "" && apellidos != "" && correo != "" && contrasena != "" && confirmacion != "") {
		if (contrasena == confirmacion) {
			alert("Los datos han sido enviado satisfactoriamente, por favor espere el correo de confirmación por parte del administrador");
		} else {
			alert("La contraseña no coincide con la confirmación");
			document.getElementById('confirmacion').value = "";
			event.preventDefault();		
		}
	} else {
		alert("Diligencie todos los campos con los datos correctos");
		event.preventDefault();		
	}		
});
