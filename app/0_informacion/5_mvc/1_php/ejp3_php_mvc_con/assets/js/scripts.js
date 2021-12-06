// Cambiar cuando se hace click
const botones = document.querySelectorAll(".ocul-navbar");
const cuandoSeHaceClick = function (evento) {	
	if (screen.width < 992) {
		document.getElementById("navbarSupportedContent").classList.toggle('show');		
	}
}
// Se reccorre botones, ya que es un arreglo
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);	
});
// Iniciar Sesión
formSesion = document.getElementById('frm_iniciar_sesion');
formSesion.addEventListener('submit', function (event) {
	usuario = document.getElementById('correo_is').value;	
	contrasena = document.getElementById('pass_is').value;
	validarBasico();
});
// Registrarse
formRegis = document.getElementById('frm_registro');
formRegis.addEventListener('submit', function (event) {
	nombres = document.getElementById('nombres_rg').value;	
	apellidos = document.getElementById('apellidos_rg').value;
	correo = document.getElementById('correo_rg').value;
	pass = document.getElementById('pass_rg').value;
	conf = document.getElementById('conf_rg').value;	
	validarRegistrarse();
});

// Validación: Inicio de Sesión
function validarBasico(){
	// Expresión que muestra la estructura de un correo electrónico
	let expresion = /\w+@+\w+\.+\w/;
	// Valida que el campo Usuario no esté vacío
	if (usuario === "") {
		swal({
			title: "Verifique el Campo Usuario!",
			text: "El Usuario NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('correo_is').focus();
		});
		event.preventDefault();
	// Valida que el campo Usuario sea un Correo Electrónico
	} else if (!expresion.test(usuario)) {
		swal({
			title: "Verifique el Campo Usuario!",
			text: "El Usuario NO es válido, NO es un correo electrónico",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('correo_is').focus();
		});
		event.preventDefault();
	// Valida que el campo Contraseña tenga entre 5 y 8 caracteres
	} else if (contrasena === "") {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "La Contraseña NO puede estar vacía",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('pass_is').focus();
		});
		event.preventDefault();
	// Valida que el campo Contraseña tenga entre 5 y 8 caracteres
	} else if (contrasena.length < 5 || contrasena.length > 8) {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "La Contraseña debe tener entre 5 y 8 caracteres",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('pass_is').focus();
		});
		event.preventDefault();
	}
}
// Validación: Usuario y Contraseña Incorrectos
function validarUsuario(){
	swal({
		title: "Datos Incorrectos!",
		text: "Usuario y/o Contraseña Incorrectos",
		icon: "error",
		button: "Aceptar",
	})
	event.preventDefault();
}
// Validación: Contraseña enviada al Correo
function enviarPassCorreo(){
	swal({
		title: "Recuperación de Contraseña enviada al Correo!",
		text: "Ingrese al correo registrado y siga los pasos para recuperar su contraseña",
		icon: "success",
		button: "Aceptar",
	})
	.then((value) => {
		window.location = '?';
	});	
}
// Validación: Código de verificación
function verificarCodigo(){
	swal({
		title: "Código Verificado!",
		text: "El Código se ha verificado correctamente",
		icon: "success",
		button: "Aceptar",
	})	
}
// Validación: Código de verificación
function passConfirm(){
	swal({
		title: "Contraseña Cambiada con Éxito!",
		text: "Inicie Sesión desde la Página Principal de la Empresa",
		icon: "success",
		button: "Aceptar",
	})
	.then((value) => {
		window.location = '?';
	});	
}
// Validación: Registrarse
function validarRegistrarse(){
	// Expresión que muestra la estructura de un correo electrónico
	let patron_correo = /\w+@+\w+\.+\w/;
	// Expresión que muestra la estructura de un correo electrónico
	let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ]+$/;

	if (nombres === "") {
		swal({
			title: "Verifique el Campo Nombres!",
			text: "El campo Nombres NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('nombres_rg').focus();
		});
		event.preventDefault();
	} else if (!patron_texto.test(nombres)) {
		swal({
			title: "Verifique el Campo Nombres!",
			text: "El campo Nombres NO puede contener números",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('nombres_rg').focus();
		});
		event.preventDefault();	
	} else if (apellidos === "") {
		swal({
			title: "Verifique el Campo Apellidos!",
			text: "El campo Apellidos NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('apellidos_rg').focus();
		});
		event.preventDefault();
	} else if (!patron_texto.test(apellidos)) {
		swal({
			title: "Verifique el Campo Apellidos!",
			text: "El campo Apellidos NO puede contener números",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('apellidos_rg').focus();
		});
		event.preventDefault();	
	} else if (correo === "") {
		swal({
			title: "Verifique el Campo E-Mail!",
			text: "El campo E-Mail NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('correo_rg').focus();
		});
		event.preventDefault();
	} else if (!patron_correo.test(correo)) {
		swal({
			title: "Verifique el Campo E-Mail!",
			text: "El campo E-Mail NO es válido, NO es un correo electrónico",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('correo_rg').focus();
		});
		event.preventDefault();	
	} else if (pass === "") {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "El campo Contraseña NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('pass_rg').focus();
		});
		event.preventDefault();
	} else if (pass.length < 5 || pass.length > 8) {
		swal({
			title: "Verifique el Campo Contraseña!",
			text: "El campo Contraseña debe tener entre 5 y 8 caracteres",
			icon: "error",
			button: "Aceptar",
		})

		.then((value) => {			
			document.getElementById('pass_rg').focus();
		});
		event.preventDefault();
	}
	else if (conf === "") {
		swal({
			title: "Verifique el Campo Confirmación!",
			text: "El campo Confirmación NO puede estar vacío",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('conf_rg').focus();
		});
		event.preventDefault();
	} else if (conf.length < 5 || conf.length > 8) {
		swal({
			title: "Verifique el Campo Confirmación!",
			text: "El campo Confirmación debe tener entre 5 y 8 caracteres",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('conf_rg').focus();
		});
		event.preventDefault();
	} else if (pass !== conf) {
		swal({
			title: "Verifique los Campos Contraseña y Confirmación!",
			text: "El campo Contraseña y Confirmación no coiniciden",
			icon: "error",
			button: "Aceptar",
		})
		.then((value) => {			
			document.getElementById('pass_rg').value = "";
			document.getElementById('conf_rg').value = "";
			document.getElementById('pass_rg').focus();
		});
		event.preventDefault();
	}
}
// Validación: Confirmación de Registro
function validarConfirRegistro(){
	swal({
		title: "Usuario Registrado!",
		text: "El usuario se creó satisfactoriamente, en 24 horas el administrador le enviará un correo para habilitar su perfil",
		icon: "success",
		button: "Aceptar",
	})
	.then((value) => {
		window.location = '?';
	});	
}