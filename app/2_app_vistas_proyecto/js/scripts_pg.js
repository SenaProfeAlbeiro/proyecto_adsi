// Elementos del DOM
var tabla = document.getElementById("tbl_consultar");

// Actualizar
const btn_actualizar = document.querySelectorAll(".actualizar");
const actualizar = function (event) {	
	let i = this.parentNode.parentNode.rowIndex;
	alert(i);
	
}
btn_actualizar.forEach(boton => {
	boton.addEventListener("click", actualizar);	
});

// Eliminar
/*
btn_eliminar  = document.getElementById('eliminar');
btn_eliminar.addEventListener('click', function (event) {
	alert("Voy a eliminar");
});
*/
