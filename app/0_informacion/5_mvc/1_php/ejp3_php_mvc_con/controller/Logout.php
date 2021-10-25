<?php session_start();

	class Logout {

		public function __construct(){}

		public function index(){
			session_destroy();
			$_SESSION = array();
			header('Location: ?');			
		}

	}

?>