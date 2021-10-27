Algoritmo Taller2_Ejercicio5
	
	//Declarar variables
	Definir volver, menu Como Caracter;	
	Definir i, num1, num2, num3, aux como Entero;	
	
	Repetir
		
		//Asignar valores
		menu <- '';
		num1 <- 0;
		num2 <- 0;
		num3 <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que por teclado solicite tres números y que según ";
		Escribir "la decisión del usuario los organice de forma ascendente o descendente.";
		
		//Ingreso de valores sin repetir
		Escribir "";
		Escribir Sin Saltar "Digite el valor del primer número";
		Leer num1
		Escribir Sin Saltar "Digite el valor del segundo número";
		Leer num2
		Escribir Sin Saltar "Digite el valor del tercer número";
		Leer num3
		
		//Proceso de ordenamiento
		Para i<-0 Hasta 1 Con Paso 1 Hacer
			//Se comparan los valores de num1 y num2
			Si num1 >= num2 Entonces //Si num1 es mayor a num2 entra al condicional
				aux <- num1; //El auxiliar toma el valor de num1
				num1 <- num2; //num1 toma el valor de num2
				num2 <- aux; //num2 toma el valor del auxiliar
			Fin Si
			//Se comparan los valores de num2 y num3, se comparan cambian de posición si se cumple la condición
			Si num2 >= num3 Entonces
				aux <- num2;
				num2 <- num3;
				num3 <- aux;
			Fin Si
		Fin Para
		
		//Menú para seleccionar el ordenamiento ascendente o descendente
		Repetir
			Escribir "";
			Escribir "----- Ordenamiento -----"
			Escribir "1. Ascendente"
			Escribir "2. Descendente"
			Escribir "";
			Escribir Sin Saltar "Digite una opción del menu, de lo contrario cualquier otra tecla para salir"
			Leer menu;
			
			Segun menu Hacer
				'1':
					Escribir "";					
					Escribir num1, " - ", num2, " - ", num3;
				'2':
					Escribir "";
					Escribir num3, " - ", num2, " - ", num1;
			Fin Segun
		Hasta Que No(menu == '1' || menu == '2') //Se utiliza el not para cambiar de verdadero a falso y viceversa
		
				
		//Repetir el Ejercicio
		Escribir "";		
		Escribir Sin Saltar "Si desea volver a escribir los números digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinAlgoritmo
