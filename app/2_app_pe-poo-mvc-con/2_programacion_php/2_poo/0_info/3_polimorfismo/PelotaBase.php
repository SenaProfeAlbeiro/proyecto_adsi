<?php 
	
	// Clase
	class PelotaBase{

		// Atributos
		protected $peso = 0;
		protected $textura = 'lisa';
		protected $color = 'ninguno';

		// Métodos Normales


		// Métodos Operacionales
		
		# Rebotar
		public function rebotar(){
			echo 'Estoy rebotando';
		}

		# Rodar
		public function rodar(){
			echo 'Estoy rodando';
		}

		# Ejemplo Polimorfismo
		public function __toString(){
			return "Soy " . get_called_class() . " y peso {$this->peso}, 
			mi textura es {$this->textura} y color es {$this->color}";
		}
	}	
?>