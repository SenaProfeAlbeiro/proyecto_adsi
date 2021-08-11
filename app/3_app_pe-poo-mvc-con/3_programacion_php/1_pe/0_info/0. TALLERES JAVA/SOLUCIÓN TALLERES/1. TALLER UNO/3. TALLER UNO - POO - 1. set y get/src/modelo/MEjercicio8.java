package modelo;

public class MEjercicio8 {
    
    //Declaración de variables globales
    private int cant, aleatorio;

    public MEjercicio8() {
    }

    public int getCant() {
        return cant;
    }

    public void setCant(int cant) {
        this.cant = cant;
    }

    public int getAleatorio() {
        return aleatorio;
    }

    public void setAleatorio(int aleatorio) {
        this.aleatorio = aleatorio;
    }
    
    //Método para procesar: Sumar
    public void metAleatorio() {
        aleatorio = (int) Math.round(Math.random() * cant);        
    }
    
    
}
