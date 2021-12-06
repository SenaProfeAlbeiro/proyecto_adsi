Proceso Taller3_Ejercicio3
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir i, cant, factorial como Entero;	
	
	Repetir
		
		//Asignar valores
		factorial <- 1;
		cant <- 0;
		
		//Objetivo del algoritmo
		Escribir "Diseñe un programa que por teclado solicite un número y encuentre su factorial";
		
		//Ingreso de datos
		Escribir "";
		Escribir Sin Saltar "Ingrese el número factorial: ";
		Leer cant;
		
		//Proceso
		Para i<-1 Hasta cant Con Paso 1 Hacer
			factorial <- factorial * i;
		FinPara
		
		//Muestra en pantalla el resultado
		Escribir "";
		Escribir "El factorial de ", cant, " es: ", factorial;
		
		//Repetir el Ejercicio
		Escribir "";		
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinProceso
