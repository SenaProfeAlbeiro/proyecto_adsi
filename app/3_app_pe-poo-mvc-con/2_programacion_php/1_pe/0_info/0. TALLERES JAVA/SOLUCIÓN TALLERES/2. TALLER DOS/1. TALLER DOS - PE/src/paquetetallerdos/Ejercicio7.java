package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio7 {


    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        int[] vector;

        //Declaración de variables y asignación de valores
        int cant = 0,
                aux = 0,
                menu = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 7. Diseñe un programa (en consola) que en un "
                + "vector de x posiciones, (x lo define el usuario) primero solicite "
                + "al usuario con un ciclo para el llenado de este, luego ordene el "
                + "vector en orden ascendente o descendente según lo decida el usuario "
                + "y luego lo imprima. (método burbuja, arreglo dinámico).\n");

        //Solicitud de cantidad de datos
        System.out.print("Ingrese la cantidad de posiciones del vector: ");
        cant = objEntrada.nextInt();
        System.out.println("");

        //Solicitud de datos
        vector = new int[cant];
        for (int i = 0; i < cant; i++) {
            System.out.print("Ingrese el valor " + (i + 1) + ": ");
            vector[i] = objEntrada.nextInt();
        }

        //Ordenamiento del Vector
        for (int i = 0; i < cant - 1; i++) {
            for (int j = 0; j < cant - 1; j++) {
                if (vector[j] >= vector[j + 1]) {
                    aux = vector[j];
                    vector[j] = vector[j + 1];
                    vector[j + 1] = aux;
                }
            }
        }

        //Menú para escoger el orden de impresión: Ascendente o descendente
        do {
            System.out.println("\n\n----- MENU ORDENAMIENTO -----\n");
            System.out.println("1. Ascendente");
            System.out.println("2. Descendente");
            System.out.println("3. Salir");
            System.out.print("Digite una opción del menú: ");
            menu = objEntrada.nextInt();

            //Según elección del usuario mostrará en pantalla orden ascendente o descendente
            switch (menu) {
                case 1:
                    System.out.print("\nOrden ascendente: ");
                    for (int i = 0; i < cant; i++) {
                        System.out.print(" - " + vector[i]);
                    }
                    break;
                case 2:
                    System.out.print("\nOrden descendente: ");
                    for (int i = cant - 1; i >= 0; i--) {
                        System.out.print(" - " + vector[i]);
                    }
                    break;
            }

        } while (menu == 1 || menu == 2);
    }
}
