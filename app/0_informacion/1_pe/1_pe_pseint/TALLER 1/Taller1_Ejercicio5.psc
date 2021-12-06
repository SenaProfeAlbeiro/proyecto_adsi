Algoritmo taller1_ejercicio5	
	// Declarar variables
	Definir ladoA, ladoB, radio, area, perimetro Como Real;
	Definir menu Como Entero;	
	// Iniciar variables
	ladoA <- 0.0;
	ladoB <- 0.0;
	radio <- 0.0;
	area <- 0.0;
	perimetro <- 0.0;
	menu <- 0;	
	// Entrada Datos
	Escribir "---------- MENU ----------";
	Escribir "1. Rectángulo";
	Escribir "2. Círculo";
	Escribir Sin Saltar "Seleccione una opción del menú: ";
	Leer menu;	
	// Proceso General 
	Segun menu Hacer
		1:
			Escribir Sin Saltar "Digite el lado A: ";
			Leer ladoA;
			Escribir Sin Saltar "Digite el lado B: ";
			Leer ladoB;
			// Proceso para hallar área y perímetro de un Rectángulo
			area <- ladoA * ladoB;
			perimetro <- (2 * ladoA) + (2 * ladoB);
			// Salida Datos
			Escribir "El área del Rectángulo es: ", area, " metros cuadrados";
			Escribir "El perímetro del Rectángulo es: ", perimetro, " metros";
		2:
			Escribir Sin Saltar "Digite el radio: ";
			Leer radio;			
			// Proceso para hallar área y perímetro de un Círculo
			area <- PI * (radio ^ 2);
			perimetro <- 2 * PI * radio;
			// Salida Datos
			Escribir "El área del Círculo es: ", area, " metros cuadrados";
			Escribir "La Circunferencia del círculo es: ", perimetro, " metros";		
		De Otro Modo:
			Escribir "La opción del menú no existe";
	Fin Segun
		
FinAlgoritmo