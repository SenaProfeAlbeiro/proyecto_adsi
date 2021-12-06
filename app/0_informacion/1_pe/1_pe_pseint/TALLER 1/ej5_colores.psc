Algoritmo ej5_colores
	
	// Declarar variables
	Definir color1, color2 Como Entero;
	Definir resultado como Texto;
	
	// Iniciar valores
	color1 <- 0;
	color2 <- 0;
	resultado <- "";
	
	// Entrada Datos
	Escribir "----- MENU ----- ";
	Escribir "1. Amarillo";
	Escribir "2. Azul";
	Escribir "3. Rojo";
	Escribir Sin Saltar "Seleccione el primer número de color";
	Leer color1;
	Escribir Sin Saltar "Seleccione el segundo número de color";
	Leer color2;
	
	// Proceso 
	Si (color1<=3 Y color1>0) Y (color2<=3 Y color2>0)Entonces
		Si NO(color1 = color2) Entonces
			Si (color1 = 1 Y color2 = 2) O (color2 = 1 Y color1 = 2) Entonces
				resultado = "Verde";
			Fin Si
			Si (color1 = 1 Y color2 = 3) O (color2 = 1 Y color1 = 3) Entonces
				resultado = "Naranja";
			Fin Si
			Si (color1 = 2 Y color2 = 3) O (color2 = 2 Y color1 = 3) Entonces
				resultado = "Violeta";
			Fin Si
			Escribir "El color es: ", resultado;
		SiNo
			Escribir "El color es el mismo";
		Fin Si
	SiNo
		Escribir "El color no existe en el Menú";
	Fin Si
	
FinAlgoritmo