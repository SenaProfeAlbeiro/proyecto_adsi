<?php 
	
	// Clase
	class Person {

		// Atributos 
		# public, private, protected -> Modificadores de Acceso = Visibilidad
		public $firstName = 'Juan';
		public $lastName = 'Ramírez';
		private $dateOfBirth = '1990-12-01';

		// Métodos Frecuentes (Constructor(es), setters y getters)
		
		# Constructor(es)
		public function __construct($firstName, $lastName, $dateOfBirth) { 
			$this->firstName = $firstName; 
			$this->lastName = $lastName; 
			$this->dateOfBirth = $dateOfBirth; 
		}

		# GET: Devuelve el valor de la variable $dateOfBirth
		public function getDateOfBirth() { 
			return $this->dateOfBirth; 
		} 

		# SET: Captura el valor para la variable $dateOfBirth
		public function setDateOfBirth($date) { 
			$this->dateOfBirth = $date; 
		} 

		// Métodos Operacionales

		# Devuelve el Nombre y el Apellido
		public function fullName() { 
			return $this->firstName . ' ' . $this->lastName; 
		}
		# Devuelve la edad calculando el año de nacimiento
		public function age() { 
			$age = ''; 
			// Calcular la edad usando $this->dateOfBirth...
			return $age; 
		}
	}
?>