// Cambiar cuando se hace click
const botones = document.querySelectorAll(".ocul-navbar");
const cuandoSeHaceClick = function (evento) {	
	if (screen.width < 992) {
		document.getElementById("navbarSupportedContent").classList.toggle('show');		
	}
}

// const color_fondo = function (evento) {
// 	evento.target.style.background = "#6C757D";
// 	evento.target.style.color = "#fff";
// }

// const color_fondo2 = function (evento) {
// 	evento.target.style.background = "";
// 	evento.target.style.color = "#007bff";
// }

// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);	
});

// Iniciar Sesión
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
