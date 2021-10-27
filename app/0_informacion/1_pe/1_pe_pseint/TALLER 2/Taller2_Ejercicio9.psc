Proceso Taller2_Ejercicio9
	
	//Declarar variables.
	Definir volver como Caracter;
	Definir vector, i Como Entero;
	
	//Dimensionar arreglos.
	Dimension vector[10];
	
	Repetir
		Limpiar Pantalla;
		
		//Objetivo del Algoritmo. Analizarlo como un Sistema: Entradas, Proceso (requerimientos y validaciones) y Salidas
		Escribir Sin Saltar "Ejercicio 9. Diseñe un programa que llene un vector de 10 posiciones con un ciclo para, ";
		Escribir "luego imprima con otro ciclo el vector mostrando el índice, la posición y el valor.";
		
		//Proceso 1. Se escriben valores al azar en un vector
		Para i<-0 Hasta 9 Con Paso 1 Hacer
			vector[i] = azar(100);
		FinPara
		
		//Proceso 2. Se recorre nuevamente el vector para mostrar los resultados
		Escribir "";
		Para i<-0 Hasta 9 Con Paso 1 Hacer
			//Se imprime en pantalla el índice, posición y valor
			Escribir "Índice: ", i, ". Posición: ", i+1, ". Valor: ", vector[i];
		FinPara
		
		//Solicitud de la variable centinela para repetir el Algoritmo
		Escribir "";		
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier tecla:";
		leer volver;
		Limpiar Pantalla;
		
	Hasta Que (volver <> 's');
	
FinProceso
