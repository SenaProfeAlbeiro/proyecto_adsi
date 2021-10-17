package modelo;

public class MEjercicio10 {
    
    //Creación de objetos
    String resText;

    //Declaración de variables y asignación de valores
    private double angA, angB, angC,
            ladoA, ladoB, ladoC,
            sumaAng;
    private int menu;

    public MEjercicio10() {
    }

    public String getResText() {
        return resText;
    }

    public void setResText(String resText) {
        this.resText = resText;
    }

    public double getAngA() {
        return angA;
    }

    public void setAngA(double angA) {
        this.angA = angA;
    }

    public double getAngB() {
        return angB;
    }

    public void setAngB(double angB) {
        this.angB = angB;
    }

    public double getAngC() {
        return angC;
    }

    public void setAngC(double angC) {
        this.angC = angC;
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

    public double getLadoC() {
        return ladoC;
    }

    public void setLadoC(double ladoC) {
        this.ladoC = ladoC;
    }

    public double getSumaAng() {
        return sumaAng;
    }

    public void setSumaAng(double sumaAng) {
        this.sumaAng = sumaAng;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }
    
    //Método para validar el triángulo según el ángulo
    public void metAngTrian() {
        angC = 180 - (angA + angB);
        if (angA > 0 && angB > 0 && angC > 0) {
            if (angA == 90 || angB == 90 || angC == 90) {
                resText = "RECTÁNGULO";
            } else if (angA < 90 && angB < 90 && angC < 90) {
                resText = "ACUTÁNGULO";
            } else {
                resText = "OBTUSÁNGULO";
            }
        } else {
            resText = "ÁNGULOS INCORRECTOS";
        }
    }

    //Método para validar el triángulo según el lado
    public void metLadoTrian() {
        if (ladoA < ladoB + ladoC && ladoB < ladoA + ladoC && ladoC < ladoA + ladoB) {
            if (ladoA == ladoB && ladoB == ladoC) {
                resText = "EQUILATERO";
            } else if (ladoA == ladoB || ladoB == ladoC || ladoC == ladoA) {
                resText = "ISÓSCELES";
            } else {
                resText = "ESCALENO";
            }
        } else {
            resText = "LADOS INCORRECTOS";
        }
    }
}
