package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio6 {

    //Declaración y creación de objetos
    int[] vecGlobal = new int[10];

    //Declaración de variables y asignación de valores
    int aux;

    public void metPrincipalEjercicio6() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        int[] vecLocal = new int[10];

        //Descripción del ejercicio
        System.out.println("\nEjercicio 6. Diseñe un programa (en consola) que en un vector "
                + "de 10 posiciones, primero solicite al \nusuario con un ciclo para el llenado "
                + "de este, luego ordene el vector en orden ascendente y luego lo \nimprima. "
                + "(método burbuja)\n");

        //Solicitud de datos
        System.out.println("Digite 10 números enteros\n");
        for (int i = 0; i < 10; i++) {
            System.out.print("Digite valor " + (i + 1) + ": ");
            vecLocal[i] = objEntrada.nextInt();
        }

        setVector(vecLocal);
        metOrdenar();        
        vecLocal = getRes();
        
        //Muestra de resultados de los números ordenados en el vector
        System.out.print("\nNúmeros ordenados: ");
        for (int i = 0; i < vecLocal.length; i++) {
            System.out.print(" " + vecLocal[i]);
        }
        System.out.println("");
    }

    public void setVector(int[] vecLoc) {
        this.vecGlobal = vecLoc;
    }

    public void metOrdenar() {
        for (int i = 0; i < 9; i++) {
            for (int j = 0; j < 9; j++) {
                if (vecGlobal[j] >= vecGlobal[j + 1]) {
                    aux = vecGlobal[j];
                    vecGlobal[j] = vecGlobal[j + 1];
                    vecGlobal[j + 1] = aux;
                }
            }
        }
    }

    public int[] getRes() {
        return vecGlobal;
    }
}
