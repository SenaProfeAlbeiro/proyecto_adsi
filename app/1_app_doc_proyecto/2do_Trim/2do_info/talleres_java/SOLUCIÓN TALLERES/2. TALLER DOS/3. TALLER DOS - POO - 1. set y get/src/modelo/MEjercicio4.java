package modelo;

public class MEjercicio4 {
    
    //Declaración de variables y asignación de valores
    int num1, num2, num3, menu, aux;

    public MEjercicio4() {
    }

    public int getNum1() {
        return num1;
    }

    public void setNum1(int num1) {
        this.num1 = num1;
    }

    public int getNum2() {
        return num2;
    }

    public void setNum2(int num2) {
        this.num2 = num2;
    }

    public int getNum3() {
        return num3;
    }

    public void setNum3(int num3) {
        this.num3 = num3;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }

    public int getAux() {
        return aux;
    }

    public void setAux(int aux) {
        this.aux = aux;
    }

    public void metOperar() {
        for (int i = 0; i < 2; i++) {
            if (num1 >= num2) {
                aux = num1;
                num1 = num2;
                num2 = aux;
            }
            if (num2 >= num3) {
                aux = num2;
                num2 = num3;
                num3 = aux;
            }
        }
    }
    
}
