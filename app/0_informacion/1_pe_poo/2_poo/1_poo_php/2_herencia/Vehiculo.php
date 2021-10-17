<?php 
	
	class Vehiculo{

		// Atributos
		public $motor;
		public $marca;
		public $color;

		// Métodos Frecuentes (Constructor(es), setters y getters)

		# Constructor(es)
		public function __construct(){
			$this->motor = false;
		}

		# Setters y Getters

		// Métodos Operacionales

		# Estado
		public function estado(){
			if ($this->motor == true) {				
				return "El motor esta encendido";  
			} else {
				return "El motor esta apagado";
			}
		}
		# Encender
		public function encender(){
			if ($this->motor == true) {
				return "Cuidado, el motor ya esta encendido";
			} else {
				$this->motor = true;
				return "El motor ahora esta encendido";
			}
			
		}
	}
?>