Algoritmo Ejercicio5
	
	Definir a,b,res Como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 5. Diseñe un programa que por teclado solicite dos números y los divida, como resultado";
		Escribir Sin Saltar "debe mostrar en pantalla  (la división de su numero A sobre su numero B es resultado) si el";
		Escribir "número dos el denominador es cero debe salir las palabras (Error división por 0)";
		Escribir "";
		
		Escribir Sin Saltar "Digite el primer número:";
		Leer a;
		
		Escribir Sin Saltar "Digite el segundo número:";
		Leer b;
		
		Mientras (b = 0) Hacer
			Escribir "";
			Escribir "Error división por 0";
			Escribir Sin Saltar "Digite nuevamente el segundo número";
			leer b;
		Fin Mientras
		
		res <- a / b;
		
		Escribir "";
		Escribir "la división de su numero ", a, " sobre su numero ", b, " es: " res;
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
	
FinAlgoritmo