Algoritmo Ejercicio4
	
	Definir a,b,res Como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 4. Diseñe un programa que por teclado solicite dos números y los multiplique, como resultado"; 
		Escribir "debe mostrar en pantalla (la multiplicacion de su numero A por su numero B es	resultado)";
		Escribir "";
		
		Escribir Sin Saltar "Digite el primer número:";
		Leer a;
		Escribir Sin Saltar "Digite el segundo número:";
		Leer b;
		
		res <- a * b;
		
		Escribir "";
		Escribir "la multiplicacion de su numero ", a, " por su numero ", b, " es: ", res;
				
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');

	
	
FinAlgoritmo