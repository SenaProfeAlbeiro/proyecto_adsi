package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio8 {


    public void metPrincipalEjercicio8() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String[] jugadores; //Solo se declara el objeto tipo arreglo, pero no se crea aun

        //Declaración de variables y asignación de valores
        int cantJug = 0,
                pozo = 0,
                lanzar1 = 0,
                lanzar2 = 0,
                apuesta = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 8. Diseñe un programa que permita jugar guayabita, "
                + "primero se ingresaran la cantidad de Usuarios (mín-2 máx-6), \nluego en un arreglo llenar "
                + "los nombres de jugadores, el acumulado se debe mostrar antes de cada tiro, "
                + "cada jugador tendrá \nun tiro Inicial si este es 1 o 6 se pierde y debe colocar "
                + "una moneda en el acumulado, si es otro número apostara hasta el \nmáximo del "
                + "acumulado, ganará el total apostado si el segundo Tiro es mayor que el primer "
                + "tiro, de lo contrario colocara \nen el acumulado lo apostado, el juego se repetirá "
                + "siempre y cuando el acumulado sea mayor que 0.\n");

        //Se valida que la cantidad de Jugadores esté entre 2 y 6        
        do {
            System.out.println("_________________________________________________________________");
            System.out.print("\n¿Cuántos jugadores van a jugar?: ");
            cantJug = objEntrada.nextInt();
            if (cantJug < 2 || cantJug > 6) {
                System.out.println("Cantidad errada: mínimo 2 o máximo 6");
            }
        } while (cantJug < 2 || cantJug > 6);

        //Se escribe el nombre de cada jugador de acuerdo a la cantidad de jugadores registrada
        System.out.println("_________________________________________________________________");
        jugadores = new String[cantJug];
        System.out.println("\nDigite los nombres de los jugadores");
        for (int i = 0; i < cantJug; i++) {
            System.out.print("Jugador " + (i + 1) + ": ");
            jugadores[i] = objEntrada.next();
        }

        //Inicia el Juego de la Guayabita
        pozo = cantJug;
        System.out.println("_________________________________________________________________");
        System.out.println("\n----------- CADA JUGADOR COLOCA UNA MONEDA - (EL CAS) -----------");
        System.out.print("\nPara INICIAR el juego presione cualquier tecla y después ENTER: ");
        objEntrada.next().charAt(0);

        //Se valida que el pozo sea mayor a cero "0"
        do {

            //Se controla que cada jugador tenga un turno
            for (int i = 0; i < cantJug; i++) {

                //Se muestra en pantalla el acumulado del pozo, el turno y nombre del jugador
                System.out.println("_________________________________________________________________");
                System.out.println("\n                  EL ACUMULADO EN EL POZO ES: " + pozo);
                System.out.println("                  ______________________________");
                System.out.println("\nTURNO PARA " + jugadores[i] + " (Jugador " + (i + 1) + ")");

                //Primer lanzamiento del jugador
                System.out.print("\n1-ER LANZAMIENTO .... Presione cualquier tecla y después ENTER: ");
                objEntrada.next().charAt(0);
                lanzar1 = (int) (Math.random() * 6 + 1);
                System.out.println("                           ___________");
                dados(lanzar1); //Llama al método dados y le pasa el parámetro del lanzamiento uno
                System.out.println("                           ___________");

                //Si obtiene 1 o 6 pierde el lanzamiento y coloca una moneda
                if (lanzar1 == 1 || lanzar1 == 6) {
                    System.out.println("\nPERDISTE, coloca una mondeda");
                    pozo++;

                    //Si obtiene un número diferente de 1 o 6, debe apostar entre 1 y el valor del pozo
                } else {

                    //Valida que la apuesta esté entre 1 y el valor del pozo
                    do {
                        System.out.print("\nDEBE APOSTAR. La apuesta máxima es " + pozo + " mínimo 1: ");
                        apuesta = objEntrada.nextInt();
                        if (apuesta < 1 || apuesta > pozo) {
                            System.out.println("\n                     ERROR, apuesta no válida");
                        }
                    } while (apuesta < 1 || apuesta > pozo);

                    //Segundo lanzamiento del jugador
                    System.out.print("\n2-DO LANZAMIENTO .... presione cualquier tecla y después ENTER: ");
                    objEntrada.next().charAt(0);
                    lanzar2 = (int) (Math.random() * 6 + 1);
                    System.out.println("                           ___________");
                    dados(lanzar2); //Llama al método dados y le pasa el parámetro del lanzamiento dos
                    System.out.println("                           ___________");

                    //Si el segundo lanzamiento es mayor al primero, toma la apuesta realizada del pozo
                    if (lanzar2 > lanzar1) {
                        System.out.println("\nGANASTE. Toma " + apuesta + " del acumulado");
                        pozo -= apuesta;

                        //Si el segundo lanzamiento es menor o igual al primero, coloca la apuesta
                    } else {
                        System.out.println("\nPERDISTE. coloca " + apuesta + " en el acumulado");
                        pozo += apuesta;
                    }
                }

                //Se valida, si pozo es igual a cero entonces se sale del turno del jugador y del juego 
                if (pozo == 0) {
                    i = cantJug + 1;
                }
            }
        } while (pozo > 0);

        //Muestra en pantalla un mensaje del fin del juego
        System.out.println("_________________________________________________________________");
        System.out.println("\n       ----- FIN DEL JUEGO. Ya no hay dinero por jugar -----");
        System.out.println("_________________________________________________________________");

    }

    public void dados(int lanza) {

        //Se recibe el paramento el número del lanzamiento y muestra en pantalla el gráfico equivalente
        switch (lanza) {
            case 1:
                System.out.println("                             _______");
                System.out.println("                            |       |");
                System.out.println("                            |   0   |");
                System.out.println("                            |_______|");
                break;
            case 2:
                System.out.println("                             _______");
                System.out.println("                            |0      |");
                System.out.println("                            |       |");
                System.out.println("                            |______0|");
                break;
            case 3:
                System.out.println("                             _______");
                System.out.println("                            |0      |");
                System.out.println("                            |   0   |");
                System.out.println("                            |______0|");
                break;
            case 4:
                System.out.println("                             _______");
                System.out.println("                            |0     0|");
                System.out.println("                            |       |");
                System.out.println("                            |0_____0|");
                break;
            case 5:
                System.out.println("                             _______");
                System.out.println("                            |0     0|");
                System.out.println("                            |   0   |");
                System.out.println("                            |0_____0|");
                break;
            case 6:
                System.out.println("                             _______");
                System.out.println("                            |0     0|");
                System.out.println("                            |0     0|");
                System.out.println("                            |0_____0|");
                break;
        }
    }
}
