Algoritmo taller1_Ejercio2
	
	// Descripción del Ejercicio	
	Escribir Sin Saltar "Diseñe un programa (en consola) que por teclado solicite dos números y los sume, como ";
	Escribir "resultado debe mostrar en pantalla la resta de su número A más su número B es Resultado";
	
	// Declarar Variables
	Definir num1 Como Real;
	Definir num2 Como Real;
	Definir res Como Real;

	// Inicialización Variables
	num1 <- 0.0;
	num2 <- 0.0;
	res <- 0.0;

	// Entrada Datos
	Escribir Sin Saltar "Digite el primer número: ";
	Leer num1;
	Escribir Sin Saltar "Digite el segundo número: ";
	Leer num2;

	// Proceso 
	res <- num1 - num2;
	
	// Salida Datos
	Escribir "La Resta de ", num1, " menos ", num2, " es = ", res;

FinAlgoritmo