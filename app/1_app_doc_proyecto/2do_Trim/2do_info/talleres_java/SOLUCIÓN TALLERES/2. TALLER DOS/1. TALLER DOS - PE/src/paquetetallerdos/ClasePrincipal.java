package paquetetallerdos;

import java.util.Scanner;

public class ClasePrincipal {

    public static void main(String[] args) {

        //Creación de objetos
        Scanner objEntra = new Scanner(System.in);
        Ejercicio1 objEjercicio1 = new Ejercicio1();
        Ejercicio2 objEjercicio2 = new Ejercicio2();
        Ejercicio3 objEjercicio3 = new Ejercicio3();
        Ejercicio4 objEjercicio4 = new Ejercicio4();
        Ejercicio5 objEjercicio5 = new Ejercicio5();
        Ejercicio6 objEjercicio6 = new Ejercicio6();
        Ejercicio7 objEjercicio7 = new Ejercicio7();
        Ejercicio8 objEjercicio8 = new Ejercicio8();
        Ejercicio9 objEjercicio9 = new Ejercicio9();
        Ejercicio10 objEjercicio10 = new Ejercicio10();

        //Declaración de variables y asignación de valores
        int menu;
        char volver;

        do {
            //Descripción del Menú Principal
            System.out.println(" \n----- MENÚ -----\n");
            System.out.println("1. Calculadora Sencilla");
            System.out.println("2. Fibonacci");
            System.out.println("3. Factorial");
            System.out.println("4. Ordenar números");
            System.out.println("5. Serie par o impar");
            System.out.println("6. Vector ordenado (estático)");
            System.out.println("7. Vector ordenado (dinámico)");
            System.out.println("8. Guayabita");
            System.out.println("9. Datos personales");
            System.out.println("10. Tiendita el Chavo");

            //Solicitud de datos
            System.out.print("\nDigite una opción del menú: ");
            menu = objEntra.nextInt();

            //Procesos
            switch (menu) {
                case 1:
                    //Muestra de resultados Ejercicio 1
                    objEjercicio1.metPrincipalEjercicio1();
                    break;
                case 2:
                    //Muestra de resultados Ejercicio 2
                    objEjercicio2.metPrincipalEjercicio2();
                    break;
                case 3:
                    //Muestra de resultados Ejercicio 3
                    objEjercicio3.metPrincipalEjercicio3();
                    break;
                case 4:
                    //Muestra de resultados Ejercicio 4
                    objEjercicio4.metPrincipalEjercicio4();
                    break;
                case 5:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio5.metPrincipalEjercicio5();
                    break;
                case 6:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio6.metPrincipalEjercicio6();
                    break;
                case 7:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio7.metPrincipalEjercicio7();
                    break;
                case 8:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio8.metPrincipalEjercicio8();
                    break;
                case 9:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio9.metPrincipalEjercicio9();
                    break;
                case 10:
                    //Muestra de resultados Ejercicio 5
                    objEjercicio10.metPrincipalEjercicio10();
                    break;
                default:
                    System.out.println("Opción incorrecta");
            }
            //Solicita dato para mostrar o no el menú
            System.out.print("\nPara volver a repetir el menú digite 's', de lo contrario cualquier tecla: ");
            volver = objEntra.next().toLowerCase().charAt(0);

            //Muestra un mensaje de finalización del programa
            if (volver != 's') {
                System.out.println("\n ----- ¡EL PROGRAMA HA TERMINADO, VUELVA PRONTO ----- \n");
            }
        } while (volver == 's');
    }
}
