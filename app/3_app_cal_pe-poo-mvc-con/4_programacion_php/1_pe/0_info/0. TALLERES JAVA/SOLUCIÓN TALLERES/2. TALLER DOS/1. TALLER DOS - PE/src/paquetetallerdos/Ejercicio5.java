package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio5 {


    public void metPrincipalEjercicio5() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        int menu = 0,
                num1 = 0,
                num2 = 0,
                aux = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 5. Diseñe un programa (en consola) que solicite un "
                + "número a luego un número b, luego le pregunte \nal usuario que si desea la "
                + "serie par o impar, el programa mostrara la serie seleccionada desde el "
                + "número menor \nde los ingresados, hasta el número mayor de los ingresados.");

        //Solicitud de datos
        System.out.print("\nDigite el primer número: ");
        num1 = objEntrada.nextInt();

        //En caso que los números sean repetidos
        do {
            System.out.print("Digite el segundo número: ");
            num2 = objEntrada.nextInt();
            if (num1 == num2) {
                System.out.println("\nDigite nuevamente el segundo número, ya que no puede ser igual al primero\n");
            } else {
                if (num1 > num2) {
                    aux = num1;
                    num1 = num2;
                    num2 = aux;
                }
            }
        } while (num1 == num2);

        //Muestra de resultados: Menú para seleccionar la serie par o impar
        do {
            System.out.println("\n----- MENU SERIE -----\n");
            System.out.println("1. Impar");
            System.out.println("2. Par");
            System.out.println("3. Salir");
            System.out.print("Digite una opción del menú: ");
            menu = objEntrada.nextInt();

            switch (menu) {
                case 1:
                    System.out.print("\nSerie impar: ");
                    for (int i = num1; i <= num2; i++) {
                        if (i % 2 != 0) {
                            System.out.print(" - " + i);
                        }
                    }
                    System.out.println("");
                    break;
                case 2:
                    System.out.print("\nSerie par: ");
                    for (int i = num1; i <= num2; i++) {
                        if (i % 2 == 0) {
                            System.out.print(" - " + i);
                        }
                    }
                    System.out.println("");
                    break;
            }

        } while (menu == 1 || menu == 2);

    }
}
