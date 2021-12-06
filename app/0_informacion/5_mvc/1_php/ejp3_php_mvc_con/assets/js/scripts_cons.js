$(document).ready(function() {
    // $('#tbl_consultar').DataTable();
    $('#tbl_consultar').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

// Declaración e inicialización de variables
var tabla = document.getElementById("tbl_consultar");
var i, celdas, nombres;
var botones = document.getElementById('botones');
var cln = botones.cloneNode(true);
var imprime = document.getElementById('imprimir');
insertar();

// Crear controles
var inputDocIdent = "<input type='text' class='doc_identidad text-center'/>";
var inputCorreo = "<input type='text' class='correo text-center'/>";
var inputNombres = "<input type='text' class='nombres text-center'/>";
var inputApellidos = "<input type='text' class='apellidos text-center'/>";
var inputContrasena = "<input type='text' class='contrasena_us text-center'/>";
var inputPerfil = "<input type='text' class='perfil text-center'/>";
var inputEstado = "<input type='text' class='estado text-center'/>";
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
	// Insertar datos a las celdas	
	if (!(doc_identidad == null || doc_identidad == "") && 
		!(correo == null || correo == "") &&
		!(nombres == null || nombres == "") &&
		!(apellidos == null || apellidos == "") &&
		!(contrasena_us == null || contrasena_us == "") &&
		!(confirmacion == null || confirmacion == "") &&
		(contrasena_us != confirmacion == "")) {
		// Cantidad de filas
		let i = tabla.rows.length;	
		// Inserta fila
		let fila = tabla.insertRow(i);
		// Inserta celdas
		let celda = [];	
		// Coloca cantidad de celdas
		for (var cont = 0; cont < 8; cont++) {
			celda[cont] = fila.insertCell(cont);
		}
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
}


// Actualizar	
function actualizar(fila){
	// Obtiene el número de fila seleccionada
	i = fila.parentNode.parentNode.rowIndex;
	// Prepara la fila con sus celdas	
	celdas = tabla.rows[i];
	// Obtiene el valor de la celda según su posición en la fila	
	doc_identidad = celdas.cells[1].firstChild.data;
	correo = celdas.cells[2].firstChild.data;
	nombres = celdas.cells[3].firstChild.data;
	apellidos = celdas.cells[4].firstChild.data;
	contrasena_us = celdas.cells[5].firstChild.data;
	perfil = celdas.cells[6].firstChild.data;
	estado = celdas.cells[7].firstChild.data;
	// Le pasamos los input a las celdas
	celdas.cells[1].innerHTML = inputDocIdent;
	celdas.cells[2].innerHTML = inputCorreo;
	celdas.cells[3].innerHTML = inputNombres;
	celdas.cells[4].innerHTML = inputApellidos;
	celdas.cells[5].innerHTML = inputContrasena;
	celdas.cells[6].innerHTML = inputPerfil;
	celdas.cells[7].innerHTML = inputEstado;
	celdas.cells[8].innerHTML = btnGuardar;
	// Le pasamos el nuevo valor al input
	document.querySelector('.doc_identidad').value = doc_identidad;
	document.querySelector('.correo').value = correo;
	document.querySelector('.nombres').value = nombres;
	document.querySelector('.apellidos').value = apellidos;
	document.querySelector('.contrasena_us').value = contrasena_us;
	document.querySelector('.perfil').value = perfil;
	document.querySelector('.estado').value = estado;
}

// Eliminar
function eliminar(fila){
	i = fila.parentNode.parentNode.rowIndex;	
	swal({
            title: "Está seguro de eliminar el registro",
            text: "Si elimina el registro, ya no podrá ser recuperado de la memoria!",
            icon: "warning",
            buttons: [true, "Aceptar"],
            dangerMode: true,
        })
        .then((willDelete) => {            
            if (willDelete) {
                swal("El registro ha sido eliminado!", {
                    icon: "success",
                });                
                tabla.deleteRow(i);
            } else {
                swal("El registro se ha convervado");
            }
        });
}

// Guardar
function guardar(){
	// Se recibe el nuevo valor
	doc_identidad = document.querySelector('.doc_identidad').value;
	correo = document.querySelector('.correo').value;
	nombres = document.querySelector('.nombres').value;
	apellidos = document.querySelector('.apellidos').value;
	contrasena_us = document.querySelector('.contrasena_us').value;
	perfil = document.querySelector('.perfil').value;
	estado = document.querySelector('.estado').value;	
	// Se pasa el nuevo valor a la celda correspondiente
	celdas.cells[1].innerHTML = doc_identidad;
	celdas.cells[2].innerHTML = correo;
	celdas.cells[3].innerHTML = nombres;
	celdas.cells[4].innerHTML = apellidos;
	celdas.cells[5].innerHTML = contrasena_us;
	celdas.cells[6].innerHTML = perfil;
	celdas.cells[7].innerHTML = estado;	
	celdas.cells[8].innerHTML = btnActualizar + btnEliminar;
	swal({
		title: "Usuario Actualizado correctamente!",
		text: "Verifique los datos actualizados del usuario",
		icon: "success",
		button: "Aceptar",
	});	
}