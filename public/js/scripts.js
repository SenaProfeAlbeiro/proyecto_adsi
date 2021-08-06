// Botón de Menú
menu = document.getElementById("btn-menu-lateral");
menu.addEventListener("click", function() {	
	document.getElementById("panel-lateral").classList.toggle('activar-panel');
	document.getElementById("img-ocul").classList.toggle('img-ocul');
	document.getElementById("principal").classList.toggle('ampliar-principal');
	if (screen.width < 992) {
		document.getElementById("modulos").classList.toggle('modulos-amp');
	}
});
// Cambiar cuando se hace click
const botones = document.querySelectorAll(".ocul-aside");
const cuandoSeHaceClick = function (evento) {
	let titulo_princ = this.innerText;
	document.getElementById('titulo-princ').innerText = titulo_princ;
	if (screen.width < 992) {
		document.getElementById("panel-lateral").classList.toggle('activar-panel');
		document.getElementById("img-ocul").classList.toggle('img-ocul');
		document.getElementById("principal").classList.toggle('ampliar-principal');
		document.getElementById("modulos").classList.toggle('modulos-amp');
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

// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
	boton.addEventListener("focus", color_fondo);
	boton.addEventListener("blur", color_fondo2);
});
