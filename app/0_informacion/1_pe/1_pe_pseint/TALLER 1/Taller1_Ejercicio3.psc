Algoritmo Ejercicio3
	
	Definir a,b,res Como Real;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 3. Diseñe un programa que por teclado solicite dos números y los reste, "
		Escribir "como resultado debe mostrar en pantalla (la resta de su numero A menos su numero B es resultado)";
		Escribir "";
		
		Escribir Sin Saltar "Digite el primer número:";
		Leer a;
		Escribir Sin Saltar "Digite el segundo número:";
		Leer b;
		
		res <- a - b;
		
		Escribir "";
		Escribir "la resta de su numero ", a, " menos su numero ", b, " es: ", res;
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
	
FinAlgoritmo
