document.getElementById("contenedor").addEventListener("click", opc_contenedor);
function opc_contenedor(e) {	
	ident = e.target.id;	
	if (ident == 'iniciar_sesion') {
		iniciar_sesion();
	}
}

function iniciar_sesion(){
	var usuario = document.getElementById('nombre_usuario').value;
	alert('Bienvenido ' + usuario);
}