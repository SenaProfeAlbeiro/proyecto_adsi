// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");

// Crear controles
var inputNombres = "<input type='text' class='nombres'/>";

// Actualizar
const btn_actualizar = document.querySelectorAll(".actualizar");
const actualizar = function (event) {	
	let i = this.parentNode.parentNode.rowIndex;
	let celdas = tabla.rows[i];

	let nombres = celdas.cells[1].firstChild.data;

	celdas.cells[1].innerHTML = inputNombres;
	
	document.querySelector('input.nombres').value = nombres;
	
	event.preventDefault();




	// alert("HolaMundo");
	
}
btn_actualizar.forEach(boton => {
	boton.addEventListener("click", actualizar);	
});