Algoritmo Taller2_Ejercicio8
	
	//Declarar variables.
	Definir volver como Caracter;
	Definir color1, color2 como Texto;
	
	//Dimensionar arreglos.
	
	Repetir
		Limpiar Pantalla;
		
		//Asignar valores iniciales.
		color1 <- "";
		color2 <- "";
		
		//Objetivo del Algoritmo. Analizarlo como un Sistema: Entradas, Proceso (requerimientos y validaciones) y Salidas
		Escribir Sin Saltar "Ejercicio 8. Diseñe un programa que solicite por pantalla dos colores primarios y en ";
		Escribir "pantalla salga la combinación de los dos colores.";
		
		//Entrada de Datos. Analizar el problema y determinar los datos iniciales (Pueden ser solicitados o no)
		Escribir "";
		Escribir "----- MENÚ DE COLORES -----";
		Escribir "";
		Escribir "--.Amarillo";
		Escribir "--.Azul";
		Escribir "--.Rojo";
		Escribir "";
		Escribir Sin Saltar "Digite el primer color: ";
		Leer color1;		
		Escribir Sin Saltar "Digite el segundo color: ";
		Leer color2;		
		
		//Proceso(s). Analizar el problema y determinar los requerimientos y validaciones.
		//En el proceso se usan las estructuras de control: Secuencial, condicional, repetición
		
		//Proceso 1. Se convierte la cadena de texto en minúsculas
		color1 = Minusculas(color1);
		color2 = Minusculas(color2);
		
		//Proceso 2. Se comparan los colores para encontrar el color resultante
		Si color1 == "amarillo" && color2 == "azul" || color1 == "azul" && color2 == "amarillo" Entonces
			//Muestra de color resultante en pantalla
			Escribir "El color resultante es: Verde";		
		Sino
			Si color1 == "amarillo" && color2 == "rojo" || color1 == "rojo" && color2 == "amarillo"  Entonces
				//Muestra de color resultante en pantalla
				Escribir "El color resultante es: Naranja";
			Sino
				Si color1 == "azul" && color2 == "rojo" || color1 == "rojo" && color2 == "azul"   Entonces
					//Muestra de color resultante en pantalla
					Escribir "El color resultante es: Morado";
				Sino
					Escribir "";
					Escribir "Imposible realizar combinación, error de digitación o el color es el mismo";
				FinSi
			FinSi	
		FinSi
		
		//Solicitud de la variable centinela para repetir el Algoritmo
		Escribir "";		
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier tecla:";
		leer volver;
		Limpiar Pantalla;
		
	Hasta Que (volver <> 's');
	
FinAlgoritmo
