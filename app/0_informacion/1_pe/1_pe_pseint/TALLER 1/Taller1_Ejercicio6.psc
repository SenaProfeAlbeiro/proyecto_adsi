Algoritmo Ejercicio6
	
	Definir ladoA, ladoB, area, perimetro como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 6. Diseñe un programa que encuentre el área y perímetro de un rectángulo y pida los datos ";
		Escribir Sin Saltar "necesarios para dar solución y muestre en pantalla el nombre de la figura su área en ";
		Escribir Sin Saltar "unidades cuadradas y su perímetro en unidades simples, recuerde que no existen áreas o "; 
		Escribir "perímetros menores o iguales a cero.";
		
		Repetir
			Escribir "";
			Escribir "Recuerde que los lados de un rectángulo no pueden ser menores o iguales a 0";
			Escribir "";
			Escribir Sin Saltar "Digite el Lado A:";
			Leer ladoA;
			Escribir Sin Saltar "Digite el Lado B:";
			Leer ladoB;
		Hasta Que (LadoA > 0 && LadoB > 0);
		
		area <- ladoA * LadoB;
		perimetro <- (2*LadoA) + (2*LadoB);
		
		Escribir "";
		Escribir "La Figura es un:   Rectángulo";
		Escribir "Su área es:        ", area, " metros cuadrados";
		Escribir "Su perímetro es:   ", perimetro, " metros";
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
	
FinAlgoritmo
