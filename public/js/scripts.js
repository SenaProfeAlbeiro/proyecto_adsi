// Botón de Menú
menu = document.getElementById("btn-menu-lateral");
menu.addEventListener("click", function() {	
	document.getElementById("panel-lateral").classList.toggle('activar-panel');
	document.getElementById("principal").classList.toggle('ampliar-principal');
	document.getElementById("modulos").classList.toggle('modulos-amp');
});
// Cambiar cuando se hace click
const botones = document.querySelectorAll(".ocul-aside");
const cuandoSeHaceClick = function (evento) {
	let titulo_princ = this.innerText;
	document.getElementById('titulo-princ').innerText = titulo_princ;
	if (screen.width < 992) {
		document.getElementById("panel-lateral").classList.toggle('activar-panel');
		document.getElementById("principal").classList.toggle('ampliar-principal');
		document.getElementById("modulos").classList.toggle('modulos-amp');
	}
}
// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
});


// Iniciar Sesión
var contador = 3;
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


