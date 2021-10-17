// Botón de Menú
menu = document.getElementById("btn-menu-lateral");
menu.addEventListener("click", function() {	
	document.getElementById("panel-lateral").classList.toggle('activar-panel');
	document.getElementById("img-ocul").classList.toggle('img-ocul');
	document.getElementById("principal").classList.toggle('principal');
	document.getElementById("area_principal").classList.toggle('ampliar-principal');
	if (screen.width < 992) {
		document.getElementById("modulos").classList.toggle('modulos-amp');
	}
});
// Cambiar cuando se hace click
const botones_aside = document.querySelectorAll(".ocul-aside");
const cuandoSeHaceClick = function (evento) {	
	if (screen.width < 992) {
		document.getElementById("modulos").classList.toggle('modulos-amp');
		document.getElementById("panel-lateral").classList.toggle('activar-panel');
		document.getElementById("img-ocul").classList.toggle('img-ocul');
		document.getElementById("principal").classList.toggle('principal');
		document.getElementById("area_principal").classList.toggle('ampliar-principal');
		// document.getElementById("navbarSupportedContent").classList.toggle('show');
	}
}
const color_fondo = function (evento) {
	evento.target.style.background = "#6C757D";
	evento.target.style.color = "#fff";
}
const color_fondo2 = function (evento) {
	evento.target.style.background = "";
	evento.target.style.color = "#007bff";
}

// botones_aside es un arreglo así que lo recorremos
botones_aside.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
	boton.addEventListener("focus", color_fondo);
	boton.addEventListener("blur", color_fondo2);
});

// Ocultar barra de navegación
const navega = document.querySelectorAll(".ocul-navbar");
const ocultaConClick = function (evento) {	
	if (screen.width < 992) {
		document.getElementById("navbarSupportedContent").classList.toggle('show');		
	}
}
// navega es un arreglo así que lo recorremos
navega.forEach(nav => {
	//Agregar listener
	nav.addEventListener("click", ocultaConClick);	
});
