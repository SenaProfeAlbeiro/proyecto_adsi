Algoritmo Ejercicio8
	
	Definir base, altura, area como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 8. Diseñe un programa que encuentre el área de un triangulo pida los datos ";
		Escribir Sin Saltar "necesarios para dar solución y muestre en pantalla el nombre de la figura ";
		Escribir Sin Saltar "su área en unidades cuadradas, recuerde que no existen áreas o perímetros ";
		Escribir "menores o iguales a cero.";
		
		Repetir
			Escribir "";
			Escribir "Recuerde que el la base y la altura de un triángulo no puede ser menor o igual a 0";
			Escribir "";
			Escribir Sin Saltar "Digite la base:";
			Leer base;
			Escribir Sin Saltar "Digite la altura:";
			Leer altura;
		Hasta Que (base > 0 && altura > 0);
		
		area <-  (base * altura) / 2;	
		
		Escribir "";
		Escribir "La Figura es un:   Triángulo";
		Escribir "Su área es:        ", area, " metros cuadrados";	
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
FinAlgoritmo
