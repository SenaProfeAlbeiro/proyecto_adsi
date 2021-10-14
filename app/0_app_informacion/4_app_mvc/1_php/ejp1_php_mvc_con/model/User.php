<?php 

	class User {

		private $pdo;

		public function __construct(){
			try {
				$this->pdo = DataBase::conexion();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

	}

?>