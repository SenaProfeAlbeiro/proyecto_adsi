package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio10 {


    public void metPrincipalEjercicio10() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double angA = 0,
                angB = 0,
                angC = 0,
                ladoA = 0,
                ladoB = 0,
                ladoC = 0,
                sumaAng = 0;
        int menu = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 10. Diseñe un programa (en consola) que encuentre el "
                + "tipo de triangulo que se tiene, mostrando \nun menú que pida si se ingresaran "
                + "ángulos o lados y se dé la opción para escoger uno de los dos. Si se \nselecciona "
                + "por ángulos la suma de los 3 ángulos debe ser 180° y si se selecciona por lados, "
                + "la suma de \nlos dos lados más cortos debe ser mayor a la longitud del lado más "
                + "largo, para que sean un triángulo. Y \nmostrar en pantalla su triangulo es "
                + "(equilátero o isósceles, o escaleno) o (rectángulo o acutángulo u obtusángulo).\n");

        //Solicitud de datos
        System.out.println("---- MENÚ TRIÁNGULO");
        System.out.println("1. Ángulos");
        System.out.println("2. Lados");
        System.out.print("Digite una opción del menú: ");
        menu = objEntrada.nextInt();

        switch (menu) {
            case 1:
                System.out.print("\nDigite el ángulo A: ");
                angA = objEntrada.nextDouble();
                System.out.print("Digite el ángulo B: ");
                angB = objEntrada.nextDouble();

                //Proceso
                angC = 180 - (angA + angB);
                sumaAng = angA + angB + angC;

                //Condicional
                if (sumaAng == 180 && angC > 0) {
                    if (angA == 90 || angB == 90 || angC == 90) {
                        System.out.println("Es un triángulo: RECTÁNGULO");
                    } else if (angA < 90 && angB < 90 && angC < 90) {
                        System.out.println("Es un triángulo: ACUTÁNGULO");
                    } else {
                        System.out.println("Es un triángulo: OBTUSÁNGULO");
                    }
                } else {
                    System.out.println("Ángulos incorrectos");
                }
                break;
            case 2:
                System.out.print("\nDigite el ladoA: ");
                ladoA = objEntrada.nextDouble();
                System.out.print("Digite el ladoB: ");
                ladoB = objEntrada.nextDouble();
                System.out.print("Digite el ladoC: ");
                ladoC = objEntrada.nextDouble();

                //Proceso y Condicional
                if (ladoA < ladoB + ladoC && ladoB < ladoA + ladoC && ladoC < ladoA + ladoB) {
                    if (ladoA == ladoB && ladoB == ladoC) {
                        System.out.println("Es un triángulo: EQUILATERO");
                    } else if (ladoA == ladoB || ladoB == ladoC || ladoC == ladoA) {
                        System.out.println("Es un triángulo: ISÓSCELES");
                    } else {
                        System.out.println("Es un triángulo: ESCALENO");
                    }
                } else {
                    System.out.println("Lados incorrectos");
                }
                break;
            default:
                System.out.println("La opción no existe");
        }
    }
}
