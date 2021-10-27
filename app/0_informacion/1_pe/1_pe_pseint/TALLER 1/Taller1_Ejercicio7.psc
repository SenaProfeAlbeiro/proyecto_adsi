Algoritmo Ejercicio7
	
	Definir radio, area, circunferencia como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 7. Diseñe un programa que encuentre el área y perímetro un círculo pida los datos ";
		Escribir Sin Saltar "necesarios para dar solución y muestre en pantalla el nombre de la figura su ";
		Escribir Sin Saltar "área en unidades cuadradas y su perímetro en unidades simples, recuerde que no ";
		Escribir "existen áreas o perímetros menores o iguales a cero.";
		
		Repetir
			Escribir "";
			Escribir "Recuerde que el radio de un círculo no puede ser menor o igual a 0";
			Escribir "";
			Escribir Sin Saltar "Digite el radio:";
			Leer radio;		
		Hasta Que (radio > 0);
		
		area <-  PI * radio ^ 2;
		circunferencia <- 2 * radio * PI;
		
		Escribir "";
		Escribir "La Figura es un:       Círulo";
		Escribir "Su área es:            ", area, " metros cuadrados";
		Escribir "Su circunferencia es:  ", circunferencia, " metros";
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
	
FinAlgoritmo
