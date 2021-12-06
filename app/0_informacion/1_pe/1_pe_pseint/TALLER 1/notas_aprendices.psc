Algoritmo notas_aprendices	
	// Declarar variables
	Definir evC, evD, evP Como Entero;
	Definir res Como Real;
	// Iniciar variables
	evC <- 0;
	evD <- 0;
	evP <- 0;
	res <- 0;	
	// Entrada Datos
	Escribir Sin Saltar "Digite el Valor de la Evidencia Conocimiento ";
	Leer evC;
	Escribir Sin Saltar "Digite el Valor de la Evidencia Desempeño ";
	Leer evD;
	Escribir Sin Saltar "Digite el Valor de la Evidencia Producto ";
	Leer evP;	
	// Proceso1: Evaluar la Media Aritmética de las Notas
	res = (evC + evD + evP)/3;
	// Salida1
	Escribir "El promedio es: ", res;
	// Proceso2: Definir si Aprobó (>=70), No Aprobó (<60) o Plan de Mejoramiento (Entre 60y70)
	Si res >= 70 Entonces
		// Salida2
		Escribir "APROBÓ";
	SiNo
		Si res < 60 Entonces
			// Salida2
			Escribir "NO APROBÓ";
		SiNo
			// Salida3
			Escribir "PLAN DE MEJORAMIENTO";
		Fin Si
	Fin Si	
FinAlgoritmo
