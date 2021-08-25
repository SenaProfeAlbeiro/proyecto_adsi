package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio8 {

    //Creación de objetos    
    String[] jugadores; //Solo se declara el objeto tipo arreglo, pero no se crea aun
    String dadoGraf;

    //Declaración de variables y asignación de valores
    int cantJug, pozo, lanzar1, lanzar2, apuesta, lanzar;

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

        setCantJug(cantJug);
        setPozo(cantJug);

        //Se escribe el nombre de cada jugador de acuerdo a la cantidad de jugadores registrada
        System.out.println("_________________________________________________________________");
        jugadores = new String[cantJug];
        System.out.println("\nDigite los nombres de los jugadores");
        for (int i = 0; i < cantJug; i++) {
            System.out.print("Jugador " + (i + 1) + ": ");
            jugadores[i] = objEntrada.next();
        }

        setJugadores(jugadores);
        jugadores = getJugadores();

        //Inicia el Juego de la Guayabita
        System.out.println("_________________________________________________________________");
        System.out.println("\n----------- CADA JUGADOR COLOCA UNA MONEDA - (EL CAS) -----------");
        System.out.print("\nPara INICIAR el juego presione cualquier tecla y después ENTER: ");
        objEntrada.next().charAt(0);

        //Se valida que el pozo sea mayor a cero "0"
        do {

            //Se controla que cada jugador tenga un turno
            for (int i = 0; i < jugadores.length; i++) {

                //Se muestra en pantalla el acumulado del pozo, el turno y nombre del jugador
                System.out.println("_________________________________________________________________");
                System.out.println("\n                  EL ACUMULADO EN EL POZO ES: " + getPozo());
                System.out.println("                  ______________________________");
                System.out.println("\nTURNO PARA " + jugadores[i] + " (Jugador " + (i + 1) + ")");

                //Primer lanzamiento del jugador
                System.out.print("\n1-ER LANZAMIENTO .... Presione cualquier tecla y después ENTER: ");
                objEntrada.next().charAt(0);
                lanzar1 = getLanzar();
                setLanzar1(lanzar1);

                System.out.println("                           ___________");
                System.out.println(getDados(lanzar1));
                System.out.println("                           ___________");

                //Si obtiene 1 o 6 pierde el lanzamiento y coloca una moneda
                if (getLanzar1() == 1 || getLanzar1() == 6) {
                    System.out.println("\nPERDISTE, coloca una mondeda");
                    getAumPozo();

                    //Si obtiene un número diferente de 1 o 6, debe apostar entre 1 y el valor del pozo
                } else {

                    //Valida que la apuesta esté entre 1 y el valor del pozo
                    do {
                        System.out.print("\nDEBE APOSTAR. La apuesta máxima es " + getPozo() + " mínimo 1: ");
                        apuesta = objEntrada.nextInt();
                        setApuesta(apuesta);

                        if (getApuesta() < 1 || getApuesta() > getPozo()) {
                            System.out.println("\n                     ERROR, apuesta no válida");
                        }
                    } while (getApuesta() < 1 || getApuesta() > getPozo());

                    //Segundo lanzamiento del jugador
                    System.out.print("\n2-DO LANZAMIENTO .... presione cualquier tecla y después ENTER: ");
                    objEntrada.next().charAt(0);
                    lanzar2 = getLanzar();
                    setLanzar2(lanzar2);
                    System.out.println("                           ___________");
                    System.out.println(getDados(lanzar2));
                    System.out.println("                           ___________");

                    //Si el segundo lanzamiento es mayor al primero, toma la apuesta realizada del pozo
                    if (getLanzar2() > getLanzar1()) {
                        System.out.println("\nGANASTE. Toma " + getApuesta() + " del acumulado");
                        getGanApues();

                        //Si el segundo lanzamiento es menor o igual al primero, coloca la apuesta
                    } else {
                        System.out.println("\nPERDISTE. coloca " + getApuesta() + " en el acumulado");
                        getPierApues();
                    }
                }

                //Se valida, si pozo es igual a cero entonces se sale del turno del jugador y del juego 
                if (getPozo() == 0) {
                    i = jugadores.length + 1;
                }
            }
        } while (getPozo() > 0);

        //Muestra en pantalla un mensaje del fin del juego
        System.out.println("_________________________________________________________________");
        System.out.println("\n       ----- FIN DEL JUEGO. Ya no hay dinero por jugar -----");
        System.out.println("_________________________________________________________________");

    }

    public void setLanzar1(int lanzar1) {
        this.lanzar1 = lanzar1;
    }

    public int getLanzar1() {
        return lanzar1;
    }

    public void setLanzar2(int lanzar2) {
        this.lanzar2 = lanzar2;
    }

    public int getLanzar2() {
        return lanzar2;
    }

    public void setCantJug(int cantJug) {
        this.cantJug = cantJug;
    }
    
    public int getCantJug(){
        return cantJug;
    }

    public void setJugadores(String[] jugadores) {
        this.jugadores = jugadores;
    }

    public String[] getJugadores() {
        return jugadores;
    }

    public void setPozo(int pozo) {
        this.pozo = pozo;
    }

    public void setApuesta(int apuesta) {
        this.apuesta = apuesta;
    }

    public int getApuesta() {
        return apuesta;
    }

    public int getPozo() {
        return pozo;
    }

    public int getAumPozo() {
        pozo++;
        return pozo;
    }

    public int getLanzar() {
        lanzar = (int) (Math.random() * 6 + 1);
        return lanzar;
    }
    
    public int getGanApues(){
        pozo -= apuesta;
        return pozo;
    }
    
    public int getPierApues(){
        pozo += apuesta;
        return pozo;
    }
    
    public String getDados(int lanza) {

        //Se recibe el paramento el número del lanzamiento y muestra en pantalla el gráfico equivalente
        switch (lanza) {
            case 1:
                dadoGraf = "                             _______\n"
                        + "                            |       |\n"
                        + "                            |   0   |\n"
                        + "                            |_______|";
                break;
            case 2:
                dadoGraf = "                             _______\n"
                        + "                            |0      |\n"
                        + "                            |       |\n"
                        + "                            |______0|";
                break;
            case 3:
                dadoGraf = "                             _______\n"
                        + "                            |0      |\n"
                        + "                            |   0   |\n"
                        + "                            |______0|";
                break;
            case 4:
                dadoGraf = "                             _______\n"
                        + "                            |0     0|\n"
                        + "                            |       |\n"
                        + "                            |0_____0|";
                break;
            case 5:
                dadoGraf = "                             _______\n"
                        + "                            |0     0|\n"
                        + "                            |   0   |\n"
                        + "                            |0_____0|";
                break;
            case 6:
                dadoGraf = "                             _______\n"
                        + "                            |0     0|\n"
                        + "                            |0     0|\n"
                        + "                            |0_____0|";
                break;
        }
        return dadoGraf;
    }
}
