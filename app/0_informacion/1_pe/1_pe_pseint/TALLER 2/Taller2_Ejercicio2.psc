Proceso Taller2_Ejercicio2
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir i, cant, acum, anterior, posterior como Entero;	
	
	Repetir
		
		//Asignar valores
		anterior <- 0;
		posterior <- 1;
		acum <- 0;
		cant <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que por teclado solicite la cantidad de números que se desea ver de ";
		Escribir "la serie de Fibonacci (sucesión de Fibonacci)";
		
		//Ingreso de datos
		Escribir "";
		Escribir Sin Saltar "Ingrese la cantidad de números de la serie Fibonacci: ";
		Leer cant;
		
		//Proceso
		Para i<-0 Hasta cant-1 Con Paso 1 Hacer
			Escribir Sin Saltar anterior, " "; //Muestra en pantalla el resultado
			acum <- anterior + posterior;			
			posterior <- anterior;
			anterior <- acum;			
		FinPara
		
		//Repetir el Ejercicio
		Escribir "";
		Escribir "";
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'	
	
FinProceso
