package modelo;

import sun.org.mozilla.javascript.internal.ScriptRuntime;

public class MEjercicio8 {
    
    //Creación de objetos    
    String[] jugadores; //Solo se declara el objeto tipo arreglo, pero no se crea aun
    String dadoGraf;

    //Declaración de variables y asignación de valores
    int cantJug, pozo, lanzar1, lanzar2, apuesta, lanzar;

    public MEjercicio8() {
    }

    public String[] getJugadores() {
        return jugadores;
    }

    public void setJugadores(String[] jugadores) {
        this.jugadores = jugadores;
    }

    public String getDadoGraf() {
        return dadoGraf;
    }

    public void setDadoGraf(String dadoGraf) {
        this.dadoGraf = dadoGraf;
    }

    public int getCantJug() {
        return cantJug;
    }

    public void setCantJug(int cantJug) {
        jugadores = new String[cantJug];
        this.cantJug = cantJug;
    }

    public int getPozo() {
        return pozo;
    }

    public void setPozo(int pozo) {
        this.pozo = pozo;
    }

    public int getLanzar1() {
        return lanzar1;
    }

    public void setLanzar1(int lanzar1) {
        this.lanzar1 = lanzar1;
    }

    public int getLanzar2() {
        return lanzar2;
    }

    public void setLanzar2(int lanzar2) {
        this.lanzar2 = lanzar2;
    }

    public int getApuesta() {
        return apuesta;
    }

    public void setApuesta(int apuesta) {
        this.apuesta = apuesta;
    }

    public int getLanzar() {
        lanzar = (int) (Math.random() * 6 + 1);
        return lanzar;
    }

    public void setLanzar(int lanzar) {
        this.lanzar = lanzar;
    }
    
    public int getAumPozo() {
        pozo++;
        return pozo;
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
