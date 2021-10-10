package modelo;

public class MEjercicio5 {
    
    //Declaración y creación de objetos
    private String resTxt;
    
    //Declaración de variables y asignación de valores
    private int color1, color2;

    public MEjercicio5() {
    }

    public String getResTxt() {
        return "Su combinación da: " + resTxt;
    }

    public void setResTxt(String resTxt) {
        this.resTxt = resTxt;
    }

    public int getColor1() {
        return color1;
    }

    public void setColor1(int color1) {
        this.color1 = color1;
    }

    public int getColor2() {
        return color2;
    }

    public void setColor2(int color2) {
        this.color2 = color2;
    }

    //Método para procesar: Combinar colores
    public void metCombinar() {         
        if (color1 == 1 && color2 == 2 || color1 == 2 && color2 == 1) {
            resTxt = "VERDE";            
        } else if (color1 == 1 && color2 == 3 || color1 == 3 && color2 == 1) {
            resTxt = "NARANJA";            
        } else if (color1 == 2 && color2 == 3 || color1 == 3 && color2 == 2) {
            resTxt = "VIOLETA";            
        } else if (color1 == 1 && color2 == 1 || color1 == 2 && color2 == 2 || color1 == 3 && color2 == 3) {
            resTxt = "HA SELECCIONADO EL MISMO COLOR";
        } else if (color1 > 3 || color1 < 0 || color2 > 3 || color2 < 0) {
            resTxt = "EL/LOS COLOR(ES) SELECCIONADO(S) NO EXISTE(N)";
        }
    }
}
