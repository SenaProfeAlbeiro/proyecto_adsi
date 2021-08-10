package modelo;

import java.math.BigInteger;

public class MEjercicio3 {

    //Declaración y creación de objetos        
    private BigInteger factorialBig; //Declarar una variable tipo objeto (ver 1-1)

    //Declaración de variables y asignación de valores
    private int num;
    private long factorial;

    public MEjercicio3() {
        factorial = 1;
    }

    public BigInteger getFactorialBig() {
        return factorialBig;
    }

    public void setFactorialBig(BigInteger factorialBig) {
        this.factorialBig = factorialBig;
    }

    public int getNum() {
        return num;
    }

    public void setNum(int num) {
        this.num = num;
    }

    public long getFactorial() {
        return factorial;
    }

    public void setFactorial(long factorial) {
        this.factorial = factorial;
    }
    
    public void metOperar() {
        for (int i = 1; i <= num; i++) {
            factorial *= i;
        }
    }

    public void metOperar2() {
        factorialBig = new BigInteger("1");
        for (int i = 1; i <= num; i++) {
            factorialBig = factorialBig.multiply(new BigInteger(i + ""));
        }
    }
}
