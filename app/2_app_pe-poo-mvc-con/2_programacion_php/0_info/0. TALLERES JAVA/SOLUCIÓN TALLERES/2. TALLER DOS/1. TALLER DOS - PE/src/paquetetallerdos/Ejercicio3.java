package paquetetallerdos;

import java.math.BigInteger;
import java.util.Scanner;

public class Ejercicio3 {


    public void metPrincipalEjercicio3() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        BigInteger factorial1; //Declarar una variable tipo objeto (ver 1-1)

        //Declaración de variables y asignación de valores
        long num = 0,
                factorial = 1;
        
        //Descripción del ejercicio
        System.out.println("Ejercicio 3. Programa que encuentre el factorial "
                + "de un número de 0 al 20 (150), si el número es mayor debe salir "
                + "el factorial es infinito.\n");

        //Solicitud de datos
        System.out.print("Ingrese el número factorial: ");
        num = objEntrada.nextInt();
        
        //Método para imprimir el factorial de un número
        if (num >= 0 && num <= 20) {
            for (int i = 1; i <= num; i++) {
                factorial *= i;
            }
            System.out.println("El factorial es: " + factorial);
        } else {
            System.out.println("El factorial es infinito");
        }

        //Método alternativo al long para tratar números extremadamente grandes
//        System.out.print("Ingrese el número factorial: ");
//        num = objEntrada.nextInt();
//        
//        factorial1 = new BigInteger("1"); //crear un objeto asignándole un valor inicial en el constructor (ver 1-1)
//        
//        if (num>=0) {
//            for (int i = 1; i <= num; i++) {
//                factorial1 = factorial1.multiply(new BigInteger(i + ""));                
//            }
//            System.out.println("El factorial es: " + factorial1);
//        }
    }
}
