package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio6 {


    public void metPrincipalEjercicio6() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        int[] vector = new int[10];

        //Declaración de variables y asignación de valores
        int aux = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 6. Diseñe un programa (en consola) que en un vector "
                + "de 10 posiciones, primero solicite al \nusuario con un ciclo para el llenado "
                + "de este, luego ordene el vector en orden ascendente y luego lo \nimprima. "
                + "(método burbuja)\n");

        //Solicitud de datos
        System.out.println("Digite 10 números enteros\n");
        for (int i = 0; i < 10; i++) {
            System.out.print("Digite valor " + (i + 1) + ": ");
            vector[i] = objEntrada.nextInt();
        }

        //Ordenamiento del vector
        for (int i = 0; i < 9; i++) {
            for (int j = 0; j < 9; j++) {
                if (vector[j] >= vector[j + 1]) {
                    aux = vector[j];
                    vector[j] = vector[j + 1];
                    vector[j + 1] = aux;
                }
            }
        }

        //Muestra de resultados de los números ordenados en el vector
        System.out.print("\nNúmeros ordenados: ");
        for (int i = 0; i < 10; i++) {
            System.out.print(" " + vector[i]);
        }
        System.out.println("");
    }
}
