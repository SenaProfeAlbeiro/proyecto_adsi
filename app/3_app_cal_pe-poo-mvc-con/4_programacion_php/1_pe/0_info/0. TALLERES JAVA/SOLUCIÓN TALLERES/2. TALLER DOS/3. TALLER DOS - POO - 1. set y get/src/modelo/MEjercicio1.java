package modelo;

public class MEjercicio1 {
    
    //Declaración de variables y asignación de valores globales
    private double num1, num2, res;
    private int menu;

    public MEjercicio1() {
    }

    public double getNum1() {
        return num1;
    }

    public void setNum1(double num1) {
        this.num1 = num1;
    }

    public double getNum2() {
        return num2;
    }

    public void setNum2(double num2) {
        this.num2 = num2;
    }

    public double getRes() {
        return res;
    }

    public void setRes(double res) {
        this.res = res;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }
    
    public void metOperar() {
        switch (menu) {
            case 1:
                res = num1 + num2;
                break;
            case 2:
                res = num1 - num2;
                break;
            case 3:
                res = num1 * num2;
                break;
            case 4:
                res = num1 / num2;
                break;
            case 5:
                res = Math.pow(num1, (1 / num2));
                break;
            case 6:
                res = Math.pow(num1, num2);
                break;
            case 7:
                res = (num1 * num2) / 100;
                break;
        }
    }    
}
