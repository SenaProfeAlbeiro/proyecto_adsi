form = document.getElementById('crear_usuario');
form.addEventListener('submit', function (event){
	nombres = document.getElementById('nombres').value;		
	localStorage.setItem('nombres', nombres);
	window.location = 'consultar_usuarios.html';
	event.preventDefault();	
});