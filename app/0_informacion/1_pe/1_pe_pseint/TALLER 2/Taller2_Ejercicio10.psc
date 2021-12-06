SubProceso A =  dado(num)
	Segun num  Hacer
		1:
			Escribir "                                     ______";
			escribir "                                    |      |";
			escribir "                                    |   O  |";
			escribir "                                    |______|";
		2:
			Escribir "                                     ______";
			escribir "                                    |O     |";
			escribir "                                    |      |";
			escribir "                                    |_____0|";
		3:
			Escribir "                                     ______ ";
			escribir "                                    |O     |";
			escribir "                                    |   O  |";
			escribir "                                    |_____0|";
		4:
			Escribir "                                     ______ ";
			escribir "                                    |O    O|";
			escribir "                                    |      |";
			escribir "                                    |O____O|";
		5:	
			Escribir "                                     ______ ";
			escribir "                                    |O    O|";
			escribir "                                    |  O   |";
			escribir "                                    |O____O|";
		6:
			Escribir "                                     ______ ";
			escribir "                                    |O    O|";
			escribir "                                    |O    O|";
			escribir "                                    |O____O|";
		De Otro Modo:
			Escribir ":P";
	FinSegun
	
FinSubProceso

Proceso Taller2_Ejercicio10
	
	//Declarar variables.
	Definir volver como Caracter;
	Definir cant, i, pozo, lanzar1, lanzar2, apuesta, num como Entero;
	Definir jugador como Texto;
	
	//Asignar valores iniciales.
	cant <- 0;
	
	//Objetivo del Algoritmo. Analizarlo como un Sistema: Entradas, Proceso (requerimientos y validaciones) y Salidas
	Limpiar Pantalla;
	Escribir Sin Saltar "Ejercicio 10. Diseñe un programa que permita jugar guayabita, primero se ingresaran la cantidad ";
	Escribir sin saltar "de usuarios, el acumulado se debe mostrar antes de cada tiro, cada jugador tendrá un tiro inicial ";
	Escribir sin saltar "si este es 1 o 6 se pierde y debe colocar una moneda en el acumulado, si es otro número apostara ";
//	Escribir sin saltar "hasta el máximo del acumulado, ganara el total apostado si el segundo tiro es mayor que el primer ";
	Escribir sin saltar "tiro de lo contrario colocara en el acumulado lo apostado, el juego se repetirá siempre y cuando ";
	Escribir "el acumulado sea mayor que 0 (según las reglas vistas en la clase presencial).";
	
	//Entrada de Datos. Ingreso de la cantidad de jugadores
	Repetir
		Escribir "";
		Escribir Sin Saltar "Digite la cantidad de jugadores:";
		Leer cant;
		//Proceso 1. Se valida que la cantidad de jugadores sea menor a 6
		Si cant > 6 || cant <= 1  Entonces
			Escribir "No pueden ser más de 6 jugadores, un jugador o menores a 0";
		FinSi		
	Hasta Que cant <= 6 && cant > 1
	
	//Proceso 2. Solicitar el nombre de los jugadores (Entrada de datos). 
	Escribir "";
	Dimension jugador[cant];
	Para i<-0 Hasta cant-1 Con Paso 1 Hacer
		Escribir Sin Saltar "Nombre del jugador ", i+1, ": ";
		leer jugador[i];
	FinPara
	
	//Proceso 3. Se inicia el juego hasta que el poso sea 0
	pozo <- cant;
	Repetir
		//Proceso 4. Turno para cada jugador.
		Para i<-0 Hasta cant-1 Con Paso 1 Hacer
			Escribir "____________________________________________________________________________";
			Escribir "";
			Escribir "------------------------ El acumulado del pozo es: ", pozo, " -----------------------";			
			//Proceso 5. Primer lanzamiento
			Escribir "";
			Escribir jugador[i], ", presiona ENTER para tu primer lanzamiento .....";
			Esperar Tecla;
			lanzar1 <- azar(6) + 1;			
			Escribir dado(lanzar1);			
			//Proceso 6. Si el primer lanzamiento fue 1 o 6 coloca una moneda en el poso
			Si lanzar1 == 1 || lanzar1 == 6 Entonces
				pozo = pozo + 1;
				Escribir "_______________________________________________";
				Escribir "";
				Escribir "HAS PERDIDO, coloca una moneda en la apuesta";
			Sino
				//Proceso 7. Si el primer lanzamiento fue mayor a 1 y menor que 6, apuesta	
				Si lanzar1 > 1 && lanzar1 < 6 Entonces
					//Proceso 8. Se debe apostar mínimo una moneda o máximo lo que está en el poso
					Repetir
						Escribir "_______________________________________________";
						Escribir "";
						Escribir Sin Saltar "La apuesta mínima es 1: y la máxima es: ", pozo, ": ";
						Leer apuesta;
						Escribir "_______________________________________________";
					Hasta Que apuesta > 0 && apuesta <= pozo
					//Proceso 9. Segundo lanzamiento del jugador
					Escribir "";
					Escribir jugador[i], ", presiona ENTER para tu segundo lanzamiento .....";
					Esperar Tecla;
					lanzar2 <- azar(6)+1;
					Escribir "";
					Escribir dado(lanzar2);
					//Proceso 10. Si el segundo lanzamiento fue mayor al primero saca del pozo la apuesta
					Si lanzar2 > lanzar1 Entonces
						pozo <- pozo - apuesta;						
						Escribir "_______________________________________________";
						Escribir "";
						Escribir "HAS GANADO, saca ", apuesta, " del pozo";						
					//Proceso 11. Si el segundo lanzamiento fue menor al primero la apuesta se suma al pozo	
					Sino
						pozo <- pozo + apuesta;						
						Escribir "_______________________________________________";
						Escribir "";
						Escribir "HAS PERDIDO, coloca ", apuesta ," de apuesta en el pozo, turno para el siguiente jugador";						
					FinSi
				FinSi				
			FinSi
			Si pozo == 0 Entonces
				i = cant;			
			FinSi
		FinPara		
	Hasta Que pozo <= 0;	
	Escribir "____________________________________________________________________________";
	Escribir "";
	Escribir "---------- ¡FIN DEL JUEGO, YA NO HAY MÁS DINERO QUE APOSTAR! ---------- ";
	
	//Proceso(s). Analizar el problema y determinar los requerimientos y validaciones.
	//En el proceso se usan las estructuras de control: Secuencial, condicional, repetición
	
	
	//Salida de Datos. Analizar el problema y determinar los datos resultantes
	Escribir "";
	
FinProceso
