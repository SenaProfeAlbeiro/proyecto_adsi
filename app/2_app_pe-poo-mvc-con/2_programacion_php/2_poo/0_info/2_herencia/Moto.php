<?php 
	
	class Moto extends Vehiculo{

		// Atributos
		

		// Métodos Frecuentes (Constructor(es), setters y getters)

		# Constructor(es)
		public function __construct(){
			
		}

		# Setters y Getters

		// Métodos Operacionales

		# Estado Moto
		public function estadoMoto(){
			$estado = parent::estado();
			return 'El estado de la moto es: ' . $estado;
		}
		
	}
?>