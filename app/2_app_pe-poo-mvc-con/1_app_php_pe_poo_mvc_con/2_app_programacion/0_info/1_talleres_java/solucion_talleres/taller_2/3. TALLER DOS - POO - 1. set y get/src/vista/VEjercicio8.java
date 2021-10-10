package vista;

import java.util.Scanner;
import modelo.MEjercicio8;

public class VEjercicio8 {

    public void metPrincipalEjercicio8() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio8 objEjerc8 = new MEjercicio8();
//        String[] jugadores; //Solo se declara el objeto tipo arreglo, pero no se crea aun
        
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
            objEjerc8.setCantJug(objEntrada.nextInt());
            if (objEjerc8.getCantJug() < 2 || objEjerc8.getCantJug() > 6) {
                System.out.println("Cantidad errada: mínimo 2 o máximo 6");
            }
        } while (objEjerc8.getCantJug() < 2 || objEjerc8.getCantJug() > 6);
        
        objEjerc8.setPozo(objEjerc8.getCantJug());

        //Se escribe el nombre de cada jugador de acuerdo a la cantidad de jugadores registrada
        System.out.println("_________________________________________________________________");        
        System.out.println("\nDigite los nombres de los jugadores");
        for (int i = 0; i < objEjerc8.getJugadores().length; i++) {
            System.out.print("Jugador " + (i + 1) + ": ");
            objEjerc8.getJugadores()[i] = objEntrada.next();
        }
        
        //Inicia el Juego de la Guayabita
        System.out.println("_________________________________________________________________");
        System.out.println("\n----------- CADA JUGADOR COLOCA UNA MONEDA - (EL CAS) -----------");
        System.out.print("\nPara INICIAR el juego presione cualquier tecla y después ENTER: ");
        objEntrada.next().charAt(0);

        //Se valida que el pozo sea mayor a cero "0"
        do {
            //Se controla que cada jugador tenga un turno
            for (int i = 0; i < objEjerc8.getJugadores().length; i++) {

                //Se muestra en pantalla el acumulado del pozo, el turno y nombre del jugador
                System.out.println("_________________________________________________________________");
                System.out.println("\n                  EL ACUMULADO EN EL POZO ES: " + objEjerc8.getPozo());
                System.out.println("                  ______________________________");
                System.out.println("\nTURNO PARA " + objEjerc8.getJugadores()[i] + " (Jugador " + (i + 1) + ")");

                //Primer lanzamiento del jugador
                System.out.print("\n1-ER LANZAMIENTO .... Presione cualquier tecla y después ENTER: ");
                objEntrada.next().charAt(0);
                objEjerc8.setLanzar1(objEjerc8.getLanzar());
                
                //Muestra en pantalla el dado
                System.out.println("                           ___________");
                System.out.println(objEjerc8.getDados(objEjerc8.getLanzar1()));
                System.out.println("                           ___________");

                //Si obtiene 1 o 6 pierde el lanzamiento y coloca una moneda
                if (objEjerc8.getLanzar1() == 1 || objEjerc8.getLanzar1() == 6) {
                    System.out.println("\nPERDISTE, coloca una mondeda");
                    objEjerc8.getAumPozo();

                //Si obtiene un número diferente de 1 o 6, debe apostar entre 1 y el valor del pozo
                } else {

                    //Valida que la apuesta esté entre 1 y el valor del pozo
                    do {
                        System.out.print("\nDEBE APOSTAR. La apuesta máxima es " + objEjerc8.getPozo() + " mínimo 1: ");
                        objEjerc8.setApuesta(objEntrada.nextInt());

                        if (objEjerc8.getApuesta() < 1 || objEjerc8.getApuesta() > objEjerc8.getPozo()) {
                            System.out.println("\n                     ERROR, apuesta no válida");
                        }
                    } while (objEjerc8.getApuesta() < 1 || objEjerc8.getApuesta() > objEjerc8.getPozo());

                    //Segundo lanzamiento del jugador
                    System.out.print("\n2-DO LANZAMIENTO .... presione cualquier tecla y después ENTER: ");
                    objEntrada.next().charAt(0);
                    objEjerc8.setLanzar2(objEjerc8.getLanzar());
                    System.out.println("                           ___________");
                    System.out.println(objEjerc8.getDados(objEjerc8.getLanzar2()));
                    System.out.println("                           ___________");

                    //Si el segundo lanzamiento es mayor al primero, toma la apuesta realizada del pozo
                    if (objEjerc8.getLanzar2() > objEjerc8.getLanzar1()) {
                        System.out.println("\nGANASTE. Toma " + objEjerc8.getApuesta() + " del acumulado");
                        objEjerc8.getGanApues();

                        //Si el segundo lanzamiento es menor o igual al primero, coloca la apuesta
                    } else {
                        System.out.println("\nPERDISTE. coloca " + objEjerc8.getApuesta() + " en el acumulado");
                        objEjerc8.getPierApues();
                    }
                }

                //Se valida, si pozo es igual a cero entonces se sale del turno del jugador y del juego 
                if (objEjerc8.getPozo() == 0) {
                    i = objEjerc8.getJugadores().length + 1;
                }
            }
        } while (objEjerc8.getPozo() > 0);

        //Muestra en pantalla un mensaje del fin del juego
        System.out.println("_________________________________________________________________");
        System.out.println("\n       ----- FIN DEL JUEGO. Ya no hay dinero por jugar -----");
        System.out.println("_________________________________________________________________");
    }
}
