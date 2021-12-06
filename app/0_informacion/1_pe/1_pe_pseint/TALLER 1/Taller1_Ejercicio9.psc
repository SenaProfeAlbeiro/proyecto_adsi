Algoritmo Ejercicio9
	
	Definir numAl Como Entero;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 9. Utilizando la función azar diseñe un programa que de ";
		Escribir Sin Saltar "números aleatorios desde 1 hasta el 6.";
		Escribir "";
		
		numAl <- azar(6)+1;
		
		Escribir "";
		Escribir "El número al azar es: ", numAl;
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
		
FinAlgoritmo
