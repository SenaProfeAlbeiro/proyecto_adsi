Algoritmo Ejercicio2
	
	Definir a,b,res Como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 2. Diseñe un programa que por teclado solicite dos números y los sume, como resultado "
		Escribir "debe mostrar en pantalla (la suma de su numero A mas su numero B es resultado)";
		Escribir "";
		
		Escribir Sin Saltar "Digite el primer número:";
		Leer a;
		Escribir Sin Saltar "Digite el segundo número:";
		Leer b;
		
		res <- a + b;
		
		Escribir "";
		Escribir "la suma de su numero ", a, " mas su numero ", b, " es: ", res;		
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
FinAlgoritmo
