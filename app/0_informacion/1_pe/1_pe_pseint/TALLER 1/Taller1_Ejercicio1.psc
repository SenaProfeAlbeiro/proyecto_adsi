Algoritmo Ejercicio1
	
	Definir frase Como Caracter;
	Definir volver Como caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 1. Diseñe un programa que por teclado solicite una palabra o frase, ";
		Escribir "como resultado debe	mostrar en pantalla (roa rrr) y la frase.";
		Escribir "";
		
		Escribir Sin Saltar "Digite una frase:";
		leer frase;
		
		Escribir "";
		Escribir "roa rrr ", frase;
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
	
	
FinAlgoritmo
