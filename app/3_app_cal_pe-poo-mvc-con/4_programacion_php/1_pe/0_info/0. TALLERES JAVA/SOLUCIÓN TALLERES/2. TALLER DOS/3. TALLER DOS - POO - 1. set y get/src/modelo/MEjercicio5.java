package modelo;

public class MEjercicio5 {
    
    //Declaración y creación de objetos
    int[] par = new int[1000];
    int[] impar = new int[1000];

    //Declaración de variables y asignación de valores
    int menu, num1, num2, aux, cont;
    boolean band1, band2;

    public MEjercicio5() {
    }

    public int[] getPar() {
        return par;
    }

    public void setPar(int[] par) {
        this.par = par;
    }

    public int[] getImpar() {
        return impar;
    }

    public void setImpar(int[] impar) {
        this.impar = impar;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
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

    public int getAux() {
        return aux;
    }

    public void setAux(int aux) {
        this.aux = aux;
    }

    public int getCont() {
        return cont;
    }

    public void setCont(int cont) {
        this.cont = cont;
    }

    public boolean isBand1() {
        return band1;
    }

    public void setBand1(boolean band1) {
        this.band1 = band1;
    }

    public boolean isBand2() {
        return band2;
    }

    public void setBand2(boolean band2) {
        this.band2 = band2;
    }

    public void metOrdenar() {
        if (num1 > num2) {
            aux = num1;
            num1 = num2;
            num2 = aux;
        }
    }

    public void metParImpar() {
        cont = (int) (num2) / 2;
        for (int i = 0; i <= cont; i++) {
            band1 = true;
            band2 = true;
            do {
                aux = num1;
                if (aux % 2 == 0) {
                    par[i] = num1;
                    band1 = false;
                } else {
                    impar[i] = num1;
                    band2 = false;
                }
                num1++;
            } while (band1 != band2);
        }
    }
}
