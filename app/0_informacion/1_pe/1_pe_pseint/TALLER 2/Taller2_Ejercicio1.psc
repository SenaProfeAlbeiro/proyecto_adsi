Algoritmo Taller2_Ejercicio1
	
	//Declarar variables
	Definir volver Como Caracter;
	Definir menu Como Entero;
	Definir num1, num2, res Como Real;
	
	//Asignar valores
	volver <- '';
	
	Repetir
		//Objetivo del Algoritmo
		Escribir sin saltar "Diseñe un programa con un según para seleccionar con un menú las 6 operaciones básicas ";
		Escribir "matemáticas suma, resta, multiplicación, división, cuadrado y porcentaje.";
		
		//Menú
		Escribir "";
		Escribir "1. Suma";
		Escribir "2. Resta";
		Escribir "3. Multiplicación";
		Escribir "4. División";
		Escribir "5. Cuadrado";
		Escribir "6. Porcentaje";		
		Escribir "";
		Escribir Sin Saltar "Digite una opción del menú";
		Leer menu;
		
		Segun menu Hacer
			1:
				Escribir "";
				Escribir "-----------------Bienvenido a la Suma-----------------";				
				//Ingreso de datos				
				Escribir Sin Saltar "Digite el primer sumando";
				Leer num1;
				Escribir Sin Saltar "Digite el segundo sumando";
				Leer num2;
				//Proceso
				res <- num1 + num2;
				//Muestra de resultados
				Escribir "";
				Escribir "El resultado de la suma es: ", res;
			2:
				Escribir "";
				Escribir "-----------------Bienvenido a la Resta-----------------";
				//Ingreso de datos				
				Escribir Sin Saltar "Digite el minuendo";
				Leer num1;
				Escribir Sin Saltar "Digite el sustraendo";
				Leer num2;
				//Proceso
				res <- num1 - num2;
				//Muestra de resultados
				Escribir "";
				Escribir "El resultado de la resta es: ", res;
			3:
				Escribir "";
				Escribir "-------------Bienvenido a la Multiplicación-------------";
				//Ingreso de datos
				Escribir Sin Saltar "Digite el primer multiplicando";
				Leer num1;
				Escribir Sin Saltar "Digite el segundo multiplicando";
				Leer num2;
				//Proceso
				res <- num1 * num2;
				//Muestra de resultados
				Escribir "";
				Escribir "El resultado de la multiplicación es: ", res;
			4:
				Escribir "";
				Escribir "----------------Bienvenido a la División----------------";
				//Ingreso de datos
				Escribir Sin Saltar "Digite el dividendo";
				Leer num1;
				Repetir
					Escribir Sin Saltar "Digite el divisor";
					Leer num2;
					//Se valida que el número sea diferente de 0
					Si num2 == 0 Entonces
						Escribir "Imposible la división por cero";
						Escribir "";
					FinSi
				Hasta Que num2 <> 0
				//Proceso
				res <- num1 / num2;
				//Muestra de resultados
				Escribir "";
				Escribir "El resultado de la división es: ", res;
			5:
				Escribir "";
				Escribir "-----------------Bienvenido al Cuadrado-----------------";
				//Ingreso de datos
				Escribir Sin Saltar "Digite la base";
				Leer num1;
				//Proceso
				res <- rc(num1);
				//Muestra de resultados
				Escribir "";
				Escribir "La raíz cuadrada de ", num1, " es: ", res;
			6:
				Escribir "";
				Escribir "----------------Bienvenido al Porcentaje----------------";
				//Ingreso de datos
				Escribir Sin Saltar "Digite el número";
				Leer num1;
				Escribir Sin Saltar "Digite el porcentaje";
				Leer num2;
				//Proceso
				res <- (num1 * num2)/100;
				
				//Muestra de resultados
				Escribir "";
				Escribir "El ", num2, " porciento de ", num1, " es: ", res;
				
			De Otro Modo:
				Escribir "";
				Escribir "La opción no está en el menú";
		FinSegun
		
		//Repetir el Ejercicio
		Escribir "";
		Escribir Sin Saltar "Si desea volver digite (s), de lo contrario cualquier tecla ";
		Leer volver;
		Limpiar Pantalla;
		
	Hasta Que volver <> 's'
	
FinAlgoritmo
