Proceso Taller2_Ejercicio4
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir i, j, baloto, aux como Entero;	
	
	//Dimensionar el vector
	Dimension baloto[6];
	
	Repetir
		
		//Asignar valores
		aux <- 0;
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que por teclado solicite una acción y que muestre 6 números ";
		Escribir "aleatorios del 1 al 45 sin repetirse y organizados de menor a mayor (baloto).";
		
		//Ingreso de datos
		Escribir "";
		Escribir "Presione una tecla para hallar los números del baloto: ";
		esperar tecla;		
		
		//Proceso ingreso de datos sin repetir
		baloto[0] <- azar(45) + 1;
		Para i<-1 Hasta 5 Con Paso 1 Hacer
			baloto[i] <- azar(45) + 1;
			Para j<-0 Hasta i-1 Con Paso 1 Hacer
				Si baloto[i] == baloto[j] Entonces
					i = i - 1;				
				FinSi
			FinPara			
		FinPara
		
		//Ordena los números
		Para i<-0 Hasta 4 Con Paso 1 Hacer
			Para j<-0 Hasta 4 Con Paso 1 Hacer
				Si baloto[j] >= baloto[j+1]  Entonces
					aux <- baloto[j];
					baloto[j] <- baloto[j+1];
					baloto[j+1] <- aux;
				Fin Si
			Fin Para
		Fin Para
		
		
		//Muestra en pantalla el resultado		
		Escribir "";
		Para i<-0 Hasta 5 Con Paso 1 Hacer
			Escribir baloto[i];
		Fin Para
		
		//Repetir el Ejercicio
		Escribir "";		
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinProceso
