Algoritmo Ejercicio10
	
	Definir radio, altura, area, perimetro, volumen Como Real;
	Definir volver Como Caracter;
	
	Repetir
		Limpiar Pantalla;
		Escribir Sin Saltar "Ejercicio 10. Diseñe un programa que encuentre el área y perímetro del material ";
		Escribir Sin Saltar "necesario para construir un cilindro con tapa también que volumen ocupara, con "
		Escribir "sus respectivas unidades y restricciones.";
		
		Repetir
			Escribir "";
			Escribir "Recuerde que el radio de la tapa y la altura del rectángulo no pueden ser menores o iguales a 0";
			Escribir "";
			Escribir Sin Saltar "Digite el radio:";
			Leer radio;
			Escribir Sin Saltar "Digite la altura:";
			Leer altura;
		Hasta Que (radio > 0 && altura > 0);
		
		perimetro <- 2 * radio * PI;		
		area <- perimetro * altura;
		area <- area + (2 * perimetro);
		perimetro <- (4 * perimetro) + (2 * altura);
		volumen <- (PI * radio ^ 2) * altura;
		
		Escribir "";
		Escribir "La Figura es un:   Cilindro";
		Escribir "Su perímetro es:   ", perimetro, " metros";
		Escribir "Su área es:        ", area, " metros cuadrados";
		Escribir "Su volumen es:     ", volumen, " metros cúbicos";
		
		Escribir "";
		Escribir Sin Saltar "Para repetir digite <s>, para salir cualquier número:";
		leer volver;
		
		Si (volver = 's') Entonces
			Limpiar Pantalla;		
		Fin Si
		
	Hasta Que (volver <> 's');
	
FinAlgoritmo
