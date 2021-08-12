// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");

// Crear controles
var inputNombres = "<input type='text' class='nombres text-center' autofocus/>";
var btnGuardar = '<a class="guardar btn btn-success btn-sm mx-1"><i class="fas fa-save"></i></a>';

// Actualizar
const btnEditar = document.querySelectorAll(".actualizar");
const actualizar = function (event) {
	// Obtiene el número de fila seleccionada
	let i = this.parentNode.parentNode.rowIndex;
	// Prepara la fila con sus las celdas
	let celdas = tabla.rows[i];
	// Obtiene el valor de la celda según su posición en la fila
	let nombres = celdas.cells[1].firstChild.data;
	
	// Le pasamos el control input a la celda
	celdas.cells[1].innerHTML = inputNombres;	
	celdas.cells[8].innerHTML = btnGuardar;
	
	document.querySelector('input.nombres').value = nombres;
	// alert(nombres);	

	




	
	
}
btnEditar.forEach(boton => {
	boton.addEventListener("click", actualizar);	
});