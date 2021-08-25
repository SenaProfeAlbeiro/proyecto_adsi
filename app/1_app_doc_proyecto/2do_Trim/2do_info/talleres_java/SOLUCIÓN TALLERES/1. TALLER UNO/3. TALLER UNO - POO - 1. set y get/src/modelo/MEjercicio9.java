package modelo;

public class MEjercicio9 {
    
    //Declaración de variables y asignación de valores
    private int aleatorio, dado1, dado2;
    private char volver;

    public MEjercicio9() {
    }

    public int getAleatorio() {
        return aleatorio;
    }

    public void setAleatorio(int aleatorio) {
        this.aleatorio = aleatorio;
    }

    public int getDado1() {
        return dado1;
    }

    public void setDado1(int dado1) {
        this.dado1 = dado1;
    }

    public int getDado2() {
        return dado2;
    }

    public void setDado2(int dado2) {
        this.dado2 = dado2;
    }

    public char getVolver() {
        return volver;
    }

    public void setVolver(char volver) {
        this.volver = volver;
    }
    
    //Método para procesar: Sumar
    public int getProcAleat() {
        aleatorio = (int) (Math.random() * 6 + 1);
        return aleatorio;
    }
    
    
    
}
