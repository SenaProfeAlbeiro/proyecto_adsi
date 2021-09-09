document.getElementById("contenedor").addEventListener("click", opc_contenedor);
function opc_contenedor(e) {	
	ident = e.target.id;	
	if (ident == 'crear_usuario') {
		crear_usuario();	
	} else if (ident == 'actualizar_usuario') {
		actualizar_usuario();
	} else if (ident == 'eliminar_usuario') {
		// id_usuario = document.getElementById('id_usuario').innerHTML;
		eliminar_usuario();
	} else if (ident == 'prueba') {
		prueba();
	}
}

function crear_usuario(){
	alert('El usuario ha sido creado correctamente');
}

function actualizar_usuario(){
	alert('El usuario se ha actualizado correctamente');
}

function eliminar_usuario() {	
	var mensaje = confirm('¿Deseas eliminar el Usuario?');
	if (mensaje) {		
		alert('El usuario ha sido eliminado');
	}else {
		alert("¡Se ha cancelado la eliminación!");	
	}
}

function prueba(){
	alert('carga, carga')
}