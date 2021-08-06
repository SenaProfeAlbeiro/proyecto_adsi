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