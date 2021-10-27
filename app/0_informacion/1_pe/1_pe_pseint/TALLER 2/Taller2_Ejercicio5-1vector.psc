Algoritmo Taller2_Ejercicio5
	
	//Declarar variables
	Definir volver, menu Como Caracter;
	Definir vector como Entero;
	Definir i, j, aux como Entero;	
	
	//Dimensionar el vector
	Dimension vector[3];
	
	Repetir
		
		//Asignar valores
		menu <- '';
		
		//Objetivo del algoritmo
		Escribir Sin Saltar "Diseñe un programa que por teclado solicite tres números y que según ";
		Escribir "la decisión del usuario los organice de forma ascendente o descendente.";
		
		
		//Ingreso de valores al vector
		Escribir "";
		Para i<-0 Hasta 2 Con Paso 1 Hacer
			Escribir sin saltar "Digite el valor ", i+1, ": ";
			Leer vector[i];
		Fin Para
		
		//Proceso para ordenar el vector
		Para i<-0 Hasta 1 Con Paso 1 Hacer
			Para j<-0 Hasta 1 Con Paso 1 Hacer
				Si vector[j] >= vector[j+1] Entonces
					aux	<- vector[j];
					vector[j] <- vector[j+1];
					vector[j+1] <- aux;
				Fin Si
			Fin Para
		Fin Para
		
		//Menú para seleccionar el ordenamiento ascendente o descendente
		Repetir
			Escribir "";
			Escribir "----- Ordenamiento -----"
			Escribir "1. Ascendente"
			Escribir "2. Descendente"
			Escribir "";
			Escribir Sin Saltar "Digite una opción del menu, de lo contrario cualquier otra tecla"
			Leer menu;
			
			Segun menu Hacer
				'1':
					Escribir "";
					Para i<-0 Hasta 2 Con Paso 1 Hacer
						Escribir Sin Saltar vector[i], " ";
					Fin Para
					Escribir "";
				'2':
					Escribir "";
					Para i<-2 Hasta 0 Con Paso -1 Hacer
						Escribir Sin Saltar vector[i], " ";
					Fin Para
					Escribir "";
			Fin Segun
		Hasta Que No(menu == '1' || menu == '2')
		
				
		//Repetir el Ejercicio
		Escribir "";		
		Escribir Sin Saltar "Si desea volver a escribir los números digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinAlgoritmo
