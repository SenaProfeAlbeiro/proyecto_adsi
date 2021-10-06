<?php 

	// Para redireccionar la página
	function redireccionar($pagina){
		header('Location: ' . RUTA_URL . $pagina);
	}

?>