// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");
var i, celdas, nombres;


// Crear controles
var inputNombres = "<input type='text' class='nombres text-center' autofocus/>";
var btnGuardar = '<a class="guardar btn btn-success btn-sm mx-1" onclick="guardar()"><i class="fas fa-save"></i></a>';

// Actualizar
const btnEditar = document.querySelectorAll(".actualizar");
const actualizar = function (event) {
	// Obtiene el número de fila seleccionada
	i = this.parentNode.parentNode.rowIndex;
	// Prepara la fila con sus celdas
	celdas = tabla.rows[i];
	// Obtiene el valor de la celda según su posición en la fila
	nombres = celdas.cells[1].firstChild.data;	
	// Le pasamos los input a las celdas
	celdas.cells[1].innerHTML = inputNombres;
	celdas.cells[8].innerHTML = btnGuardar;
	// Le pasamos el nuevo valor al input
	document.querySelector('.nombres').value = nombres;
}
btnEditar.forEach(boton => {
	boton.addEventListener("click", actualizar);	
});

// Guardar
function guardar(){
	nombres = document.querySelector('.nombres').value;
	celdas.cells[1].innerHTML = nombres;
	// alert(nombres)
	// celdas.cells[1].innerHTML = nombres;
}