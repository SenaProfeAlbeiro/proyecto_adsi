package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio7 {

    //Creación de objetos    
    int[] vecGlobal;

    //Declaración de variables y asignación de valores
    int cant, aux, menu;

    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        int[] vecLocal;

        //Declaración de variables y asignación de valores
        int cant = 0,
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

        setCant(cant);

        //Solicitud de datos
        vecLocal = new int[cant];
        for (int i = 0; i < cant; i++) {
            System.out.print("Ingrese el valor " + (i + 1) + ": ");
            vecLocal[i] = objEntrada.nextInt();
        }

        setVector(vecLocal);
        metOrdenar();
        vecLocal = getRes();

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
                    for (int i = 0; i < vecLocal.length; i++) {
                        System.out.print(" - " + vecLocal[i]);
                    }
                    break;
                case 2:
                    System.out.print("\nOrden descendente: ");
                    for (int i = vecLocal.length - 1; i >= 0; i--) {
                        System.out.print(" - " + vecLocal[i]);
                    }
                    break;
            }

        } while (menu == 1 || menu == 2);
    }

    public void setCant(int cant) {
        this.cant = cant;
    }

    public void setVector(int[] vecLoc) {
        this.vecGlobal = vecLoc;
    }

    public void metOrdenar() {        
        for (int i = 0; i < vecGlobal.length - 1; i++) {
            for (int j = 0; j < vecGlobal.length - 1; j++) {
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
