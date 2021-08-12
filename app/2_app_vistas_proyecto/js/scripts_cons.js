// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");
var i, celdas, nombres;
var botones = document.getElementById('botones');
var cln = botones.cloneNode(true);
insertar();

// Crear controles
var inputNombres = "<input type='text' class='nombres text-center' autofocus/>";
var btnGuardar = '<a class="btn btn-success btn-sm mx-1" onclick="guardar()"><i class="fas fa-save"></i></a>';
var btnActualizar = '<a class="btn btn-info btn-sm mx-1" onclick="actualizar(this);"><i class="fas fa-pencil-alt"></i></a>';
var btnEliminar = '<a class="btn btn-danger btn-sm mx-1" onclick="eliminar(this);"><i class="fas fa-trash-alt"></i></a>';

// insertar
function insertar(){
	let nombres = localStorage.getItem('nombres');
	let i = tabla.rows.length;
	let fila = tabla.insertRow(i);
	let celda = [];	
	// Colocar cantidad de celdas
	for (var cont = 0; cont < 8; cont++) {
		celda[cont] = fila.insertCell(cont);
	}
	// Insertar datos a las celdas
	celda[0].innerHTML = i;	
	celda[3].innerHTML = nombres;
	celda = fila.appendChild(cln);	
}


// Actualizar	
function actualizar(fila){
	// Obtiene el número de fila seleccionada
	i = fila.parentNode.parentNode.rowIndex;
	// Prepara la fila con sus celdas
	prueba = "Actualizando";
	celdas = tabla.rows[i];
	// Obtiene el valor de la celda según su posición en la fila
	nombres = celdas.cells[1].firstChild.data;	
	// Le pasamos los input a las celdas
	celdas.cells[1].innerHTML = inputNombres;
	celdas.cells[8].innerHTML = btnGuardar;
	// Le pasamos el nuevo valor al input
	document.querySelector('.nombres').value = nombres;
}

// Eliminar
function eliminar(fila){
	i = fila.parentNode.parentNode.rowIndex;
	tabla.deleteRow(i);
}

// Guardar
function guardar(){
	// Se recibe el nuevo valor
	nombres = document.querySelector('.nombres').value;
	// Se pasa el nuevo valor a la celda correspondiente
	celdas.cells[1].innerHTML = nombres;
	celdas.cells[8].innerHTML = btnActualizar + btnEliminar;		
}