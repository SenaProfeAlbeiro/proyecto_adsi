package paquetetallerdos;

import java.math.BigInteger;
import java.util.Scanner;

public class Ejercicio3 {

    //Declaración y creación de objetos        
    BigInteger factorialBig; //Declarar una variable tipo objeto (ver 1-1)

    //Declaración de variables y asignación de valores
    int num;
    long factorial = 1;

    public void metPrincipalEjercicio3() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        int num = 0;

        //Descripción del ejercicio
        System.out.println("Ejercicio 3. Programa que encuentre el factorial "
                + "de un número de 0 al 20 (150), si el número es mayor debe salir "
                + "el factorial es infinito.");

        //Forma normal de hallar el factorial
        do {
            //Solicitud de datos
            System.out.print("\nIngrese el número factorial: ");
            num = objEntrada.nextInt();

            setDatos(num);

            //Imprime el factorial de un número
            if (num >= 0 && num <= 20) {
                metOperar();
                System.out.print("El factorial es: " + getRes());
            } else {
                System.out.println("El factorial (" + getNum() + ") es negativo o tiende a infinito");
            }
        } while (num <= 0 || num > 20);
        System.out.println("");

        //Forma alternativa de hallar el factorial (números extremadamente grandes)
//        do {
//            System.out.print("\nIngrese el número factorial: ");
//            num = objEntrada.nextInt();
//        
//            setDatos(num);
//
//            if (num > 0) {
//                metOperar2();
//                System.out.println("El factorial es: " + getRes2());
//            } else {
//                System.out.println("El factorial debe ser diferente de cero y positivo");
//            }
//        } while (num <= 0);        
    }

    public void setDatos(int num) {
        this.num = num;
    }

    public int getNum() {
        return num;
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

    public BigInteger getRes2() {
        return factorialBig;
    }

    public long getRes() {
        return factorial;
    }
}
