package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio2 {


    public void metPrincipalEjercicio2() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        int num = 0, ant = 0, post = 1, aux = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 2. Diseñe un programa (en consola) que encuentre "
                + "x números de la sucesión de Fibonacci, \nde acuerdo al número digitado "
                + "por el usuario. \n");

        //Solicitud de datos
        System.out.print("Ingrese la cantidad de números de la serie Fibonacci: ");
        num = objEntrada.nextInt();
        
        //Método para imprimir serie Fibonacci
        for (int i = 0; i < num; i++) { // 5 < 5
            System.out.print(ant + " - "); // 0 - 1 - 1 - 2 - 3 -
            aux = ant + post; // 5 .... Suma anterior y posterior
            post = ant; // 3 .... Posterior queda valiendo a anterior
            ant = aux; // 5 .... Aneterior es igual al acumulado
        }
        System.out.println("");
    }
}
