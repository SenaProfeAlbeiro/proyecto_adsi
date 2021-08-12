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
	// Recuperar los datos de variables de sesion
	let doc_identidad = sessionStorage.getItem('doc_identidad');
	let correo = sessionStorage.getItem('correo');
	let nombres = sessionStorage.getItem('nombres');
	let apellidos = sessionStorage.getItem('apellidos');
	let contrasena_us = sessionStorage.getItem('contrasena_us');
	let confirmacion = sessionStorage.getItem('confirmacion');
	let perfil = sessionStorage.getItem('perfil');
	let estado = sessionStorage.getItem('estado');
	// Cantidad de filas
	let i = tabla.rows.length;
	// Inserta fila
	let fila = tabla.insertRow(i);
	// Inserta celdas
	let celda = [];	
	// Colocar cantidad de celdas
	for (var cont = 0; cont < 8; cont++) {
		celda[cont] = fila.insertCell(cont);
	}
	// Insertar datos a las celdas
	celda[0].innerHTML = i;	
	celda[1].innerHTML = doc_identidad;	
	celda[2].innerHTML = correo;	
	celda[3].innerHTML = nombres;	
	celda[4].innerHTML = apellidos;	
	celda[5].innerHTML = contrasena_us;	
	celda[6].innerHTML = perfil;
	celda[7].innerHTML = estado;
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
	nombres = celdas.cells[3].firstChild.data;	
	// Le pasamos los input a las celdas
	celdas.cells[3].innerHTML = inputNombres;
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
	celdas.cells[3].innerHTML = nombres;
	celdas.cells[8].innerHTML = btnActualizar + btnEliminar;		
}