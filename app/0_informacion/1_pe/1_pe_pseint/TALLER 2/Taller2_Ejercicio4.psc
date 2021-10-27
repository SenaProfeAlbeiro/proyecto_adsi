Proceso Taller2_Ejercicio4
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir i, num1, num2, num3, num4, num5, num6, aux como Entero;		
	
	Repetir
		
		//Asignar valores
		aux <- 0;
		num1 <- 0;
		num2 <- 0;
		num3 <- 0;
		num4 <- 0;
		num5 <- 0;
		num6 <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que por teclado solicite una acción y que muestre 6 números ";
		Escribir "aleatorios del 1 al 45 sin repetirse y organizados de menor a mayor (baloto).";
		
		//Ingreso de datos, se solicita que se presione una tecla para continuar con el proceso
		Escribir "";
		Escribir "Presione una tecla para hallar los números del baloto: ";
		esperar tecla;		
		
					//Proceso ingreso de datos sin repetir
		//Se ingresa el valor de num1 y el num2 en un ciclo para que no se repita el valor
		num1 <- azar(45) + 1;		
		Repetir
			num2 <- azar(45) + 1;			
		Hasta Que num1 <> num2
		//Se ingresa el valor de num3 en un ciclo para que no se repita el valor con los anteriores números
		Repetir
			num3 <- azar(45) + 1;			
		Hasta Que num3 <> num1 && num3 <> num2
		//Se ingresa el valor de num4 en un ciclo para que no se repita el valor con los anteriores números
		Repetir
			num4 <- azar(45) + 1;			
		Hasta Que num4 <> num1 && num4 <> num2 && num4 <> num3
		//Se ingresa el valor de num5 en un ciclo para que no se repita el valor con los anteriores números
		Repetir
			num5 <- azar(45) + 1;			
		Hasta Que num5 <> num1 && num5 <> num2 && num5 <> num3 && num5 <> num4
		//Se ingresa el valor de num6 en un ciclo para que no se repita el valor con los anteriores números
		Repetir
			num6 <- azar(45) + 1;			
		Hasta Que num6 <> num1 && num6 <> num2 && num6 <> num3 && num6 <> num4 && num6 <> num5
		
		//Ordena los números en un ciclo para una vez menos que la cantidad de números
		Para i<-0 Hasta 4 Con Paso 1 Hacer
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
			//Se comparan los valores de num3 y num4, se comparan cambian de posición si se cumple la condición
			Si num3 >= num4 Entonces
				aux <- num3;
				num3 <- num4;
				num4 <- aux;
			Fin Si
			//Se comparan los valores de num4 y num5, se comparan cambian de posición si se cumple la condición
			Si num4 >= num5 Entonces
				aux <- num4;
				num4 <- num5;
				num5 <- aux;
			Fin Si
			//Se comparan los valores de num5 y num6, se comparan cambian de posición si se cumple la condición
			Si num5 >= num6 Entonces
				aux <- num5;
				num5 <- num6;
				num6 <- aux;
			Fin Si
		Fin Para
				
		//Muestra en pantalla el resultado		
		Escribir "";
		Escribir num1;
		Escribir num2;
		Escribir num3;
		Escribir num4;
		Escribir num5;
		Escribir num6;
		
		//Repetir el Ejercicio
		Escribir "";		
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinProceso
