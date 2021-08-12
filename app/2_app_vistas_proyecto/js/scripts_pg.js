// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");
var i, celdas, nombres;


// Crear controles
var inputNombres = "<input type='text' class='nombres text-center' autofocus/>";
var btnGuardar = '<a class="guardar btn btn-success btn-sm mx-1" onclick="guardar()"><i class="fas fa-save"></i></a>';
var btnActualizar = '<a class="actualizar btn btn-info btn-sm mx-1" onclick="actualizar(this);"><i class="fas fa-pencil-alt"></i></a>';
var btnEliminar = '<a class="eliminar btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></a>';

// Actualizar	
function actualizar(fila){
	// Obtiene el número de fila seleccionada
	i = fila.parentNode.parentNode.rowIndex;
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

// Guardar
function guardar(){
	// Se recibe el nuevo valor
	nombres = document.querySelector('.nombres').value;
	// Se pasa el nuevo valor a la celda correspondiente
	celdas.cells[1].innerHTML = nombres;
	celdas.cells[8].innerHTML = btnActualizar + btnEliminar;		
}