package vista;

import java.util.Scanner;

public class VistaPrincipal {

        
    public static void main(String[] args) {
        
        //Creación de objetos
        Scanner objEntra = new Scanner(System.in);
        VEjercicio1 objEjercicio1 = new VEjercicio1();
        VEjercicio2 objEjercicio2 = new VEjercicio2();
        VEjercicio3 objEjercicio3 = new VEjercicio3();
        VEjercicio4 objEjercicio4 = new VEjercicio4();
        VEjercicio5 objEjercicio5 = new VEjercicio5();
        VEjercicio6 objEjercicio6 = new VEjercicio6();
        VEjercicio7 objEjercicio7 = new VEjercicio7();
        VEjercicio8 objEjercicio8 = new VEjercicio8();
        VEjercicio9 objEjercicio9 = new VEjercicio9();
        VEjercicio10 objEjercicio10 = new VEjercicio10();

        //Declaración de variables y asignación de valores
        int menu;
        char volver;


        do {
            //Descripción del Menú Principal
            System.out.println(" \n----- MENÚ -----\n");
            System.out.println("1. Suma ");
            System.out.println("2. Resta");
            System.out.println("3. Multiplicación");
            System.out.println("4. División");
            System.out.println("5. Combinación de colores");
            System.out.println("6. Área y perímetro de un rectángulo");
            System.out.println("7. Factura");
            System.out.println("8. Aleatorio");
            System.out.println("9. Dados");
            System.out.println("10. Triángulos");

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
