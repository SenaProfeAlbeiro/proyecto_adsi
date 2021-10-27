<?php session_start();

	class Error404 {

		private $modulo;

		public function __construct(){
			$this->modulo = $_SESSION['modulo'];
		}

		public function index(){
			$usuario = unserialize($_SESSION['usuario']);
			if (isset($_SESSION['usuario'])) {
				require_once 'view/roles/'.$this->modulo.'/header.php'; 
				require_once 'view/modules/5_others/error404.view.php';
				require_once 'view/roles/'.$this->modulo.'/footer.php';				
			} else {
				header('Location: ?c=Dashboard');
			}
		}
	}

?>