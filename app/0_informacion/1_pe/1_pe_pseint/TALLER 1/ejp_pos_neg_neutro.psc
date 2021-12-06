Algoritmo ejp_pos_neg_neutro
	
	// Declarar variables
	Definir num Como Real;
	
	// Iniciar variables
	num <- 0.0;
	
	// Entrada Datos
	Escribir Sin Saltar "Digite un Número ";
	Leer num;
	
	// Proceso: Condicional Simple (Verdadera)
	//Si num > 0 Entonces
	//	Escribir "POSITIVO";		
	//Fin Si
	
	// Proceso: Condicional Doble (Verdadera - Falsa)
	// Si num >= 0 Entonces
	// 	Escribir "POSITIVO";
	// SiNo
	// 	Escribir "NEGATIVO";
	// Fin Si
	
	// Proceso: Condicional Anidada (Verdadera (Verdadera - Falsa) 
	// - Falsa (Verdadera o Falsa))
	Si num > 0 Entonces
		// Salida Datos
		Escribir "POSITIVO";
	SiNo
	 	Si num < 0 Entonces
			// Salida Datos
			Escribir "NEGATIVO";
		SiNo
			// Salida Datos
			Escribir "NEUTRO";
		Fin Si
	Fin Si	
	
FinAlgoritmo
