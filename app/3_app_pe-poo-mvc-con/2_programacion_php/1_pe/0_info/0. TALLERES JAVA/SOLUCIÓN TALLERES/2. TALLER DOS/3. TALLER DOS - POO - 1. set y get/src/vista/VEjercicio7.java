package vista;

import java.util.Scanner;
import modelo.MEjercicio7;

public class VEjercicio7 {    

    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio7 objEjerc7 = new MEjercicio7();

        //Descripción del ejercicio
        System.out.println("\nEjercicio 7. Diseñe un programa (en consola) que en un "
                + "vector de x posiciones, (x lo define el usuario) primero solicite "
                + "al usuario con un ciclo para el llenado de este, luego ordene el "
                + "vector en orden ascendente o descendente según lo decida el usuario "
                + "y luego lo imprima. (método burbuja, arreglo dinámico).\n");

        //Solicitud de cantidad de datos
        System.out.print("Ingrese la cantidad de posiciones del vector: ");
        objEjerc7.setCant(objEntrada.nextInt());
        System.out.println("");

        //Solicitud de datos
        for (int i = 0; i < objEjerc7.getVector().length; i++) {
            System.out.print("Ingrese el valor " + (i + 1) + ": ");
            objEjerc7.getVector()[i] = objEntrada.nextInt();
        }
        
        objEjerc7.metOrdenar();

        //Menú para escoger el orden de impresión: Ascendente o descendente
        do {
            System.out.println("\n\n----- MENU ORDENAMIENTO -----\n");
            System.out.println("1. Ascendente");
            System.out.println("2. Descendente");
            System.out.println("3. Salir");
            System.out.print("Digite una opción del menú: ");
            objEjerc7.setMenu(objEntrada.nextInt());

            //Según elección del usuario mostrará en pantalla orden ascendente o descendente
            switch (objEjerc7.getMenu()) {
                case 1:
                    System.out.print("\nOrden ascendente: ");
                    for (int i = 0; i < objEjerc7.getVector().length; i++) {
                        System.out.print(" - " + objEjerc7.getVector()[i]);
                    }
                    break;
                case 2:
                    System.out.print("\nOrden descendente: ");
                    for (int i = objEjerc7.getVector().length - 1; i >= 0; i--) {
                        System.out.print(" - " + objEjerc7.getVector()[i]);
                    }
                    break;
            }

        } while (objEjerc7.getMenu() == 1 || objEjerc7.getMenu() == 2);
    }
}
