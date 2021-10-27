Algoritmo Taller2_Ejercicio7
	
	//Declarar variables
	Definir volver, menu Como Caracter;
	Definir num1, num2, aux, i Como Entero;	
	
	Repetir
		Limpiar Pantalla;
		//Asignar valores
		menu <- '';
		num1 <- 0;
		num2 <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que solicite 2 números por teclado, luego indique al usuario si desea la serie ";
		Escribir sin saltar "par o impar, después muestre en pantalla la serie par o impar según la elección desde el número ";
		Escribir "menor que se ingresó al inicio hasta el número mayor.";
		
		//Ingreso de datos del primer número
		Escribir "";
		Escribir Sin Saltar "Digite el primer número"
		Leer num1;		
		
		//Proceso para repetir en caso que los números sean iguales
		Repetir
			Escribir Sin Saltar "Digite el segundo número"
			Leer num2;
			Si num1 == num2 Entonces
				Escribir "";
				Escribir "Digite nuevamente el segundo número, ya que no puede ser igual al primero";
				Escribir "";
			Sino
				//Proceso para cambiar los números en caso que el primero sea mayor al segundo
				Si num1 > num2 Entonces
					aux <- num2;
					num2 <- num1;
					num1 <- aux;
				Fin Si
			Fin Si			
		Hasta Que num1 <> num2
		
		//Menú para seleccionar la serie par o impar
		Repetir
			Escribir "";
			Escribir "----- Series -----"
			Escribir "1. Impar"
			Escribir "2. Par"
			Escribir "";
			Escribir Sin Saltar "Digite una opción del menu, de lo contrario cualquier otra tecla para salir"
			Leer menu;
			
			Segun menu Hacer
				'1':
					Escribir "";
					Escribir "Serie Impar";
					//Ciclo que va desde el primer número hasta el segundo
					Para i<-num1 Hasta num2 Con Paso 1 Hacer						
						//Define si el número es par de acuerdo al residuo diferente de 0 cuando se divide en 2
						Si i%2 <> 0 Entonces
							Escribir Sin Saltar " - ", i;						
						Fin Si						
					Fin Para
					Escribir "";					
				'2':
					
					Escribir "";
					Escribir "Serie Par";
					//Ciclo que va desde el primer número hasta el segundo
					Para i<-num1 Hasta num2 Con Paso 1 Hacer						
						//Define si el número es par de acuerdo al residuo 0 cuando se divide en 2
						Si i%2 == 0 Entonces
							Escribir Sin Saltar " - ", i;						
						Fin Si						
					Fin Para
					Escribir "";					
			Fin Segun
		Hasta Que No(menu == '1' || menu == '2')
		
			
		//Repetir el Ejercicio
		Escribir "";
		Escribir "";		
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinAlgoritmo
