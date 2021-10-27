Algoritmo Taller2_Ejercicio6
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir num, cant, vector, i, temp como Entero;	
	
	Dimension vector[10];
	
	Repetir
		
		//Asignar valores
		num <- 0;
		temp <- 0;
		cant <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que solicite un numero por teclado encuentre cuantos dígitos ";
		Escribir "tiene y lo descomponga y muestre en pantalla.";		
		
		//Ingreso de datos
		Escribir Sin Saltar "Escribir un número entero: ";
		Leer num;
		
		//Proceso para descomponer el número
		temp <- num;
		Mientras temp > 0 Hacer
			temp <- trunc(temp / 10);
			cant <- cant + 1;
		Fin Mientras
		
		//Proceso para organizar los dígitos		
		Para i<-cant-1 Hasta 0 Con Paso -1 Hacer
			vector[i] <- num%10;
			num <- trunc(num / 10);
		Fin Para
		
		//Mostrar en pantalla el resultado
		Escribir "El número tiene ", cant, " dígitos y se descompone así"
		Escribir "";
		Para i<-0 Hasta cant - 1 Con Paso 1 Hacer
			Escribir Sin Saltar " - ", vector[i];
		Fin Para
		
		//Repetir el Ejercicio
		Escribir "";
		Escribir "";		
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinAlgoritmo
