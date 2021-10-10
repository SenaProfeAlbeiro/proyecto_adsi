package modelo;

public class MEjercicio6 {   
    
    //Declaración y creación de objetos
    private String resTxt;

    //Declaración de variables y asignación de valores
    private double ladoA, ladoB, radio, area, perimetro;
    private int menu;
    
    public MEjercicio6() {
    }

    public String getResTxt() {
        return resTxt;
    }

    public void setResTxt(String resTxt) {
        this.resTxt = resTxt;
    }

    public double getLadoA() {
        return ladoA;
    }

    public void setLadoA(double ladoA) {
        this.ladoA = ladoA;
    }

    public double getLadoB() {
        return ladoB;
    }

    public void setLadoB(double ladoB) {
        this.ladoB = ladoB;
    }

    public double getRadio() {
        return radio;
    }

    public void setRadio(double radio) {
        this.radio = radio;
    }

    public double getArea() {
        return area;
    }

    public void setArea(double area) {
        this.area = area;
    }

    public double getPerimetro() {
        return perimetro;
    }

    public void setPerimetro(double perimetro) {
        this.perimetro = perimetro;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }
    
    //Método para procesar: Validar lados del rectángulo
    public void metValRect() {
        if (ladoA <= 0 || ladoB <= 0) {
            resTxt = "Los lados no pueden ser menores o iguales cero";
        } else {
            perimetro = (2 * ladoA) + (2 * ladoB);
            area = ladoA * ladoB;
            resTxt = "El perímetro es: " + String.format("%.2f", perimetro) + " metros" + "\n"
                    + "El área es:      " + String.format("%.2f", area) + " metros cuadrados";
        }
    }
    
    //Método para procesar: Validar lados del rectángulo    
    public void metValCir() {
        if (radio <= 0) {
            resTxt = "El radio no puede ser menor o igual cero";
        } else {
            perimetro = 2 * radio * Math.PI;
            area = Math.PI * Math.pow(radio, 2);
            resTxt = "La circunferencia es: " + String.format("%.2f", perimetro) + " metros" + "\n"
                    + "El área es:           " + String.format("%.2f", area) + " metros cuadrados";
        }
    }
}
