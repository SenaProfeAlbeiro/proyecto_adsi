package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio6 {


    public void metPrincipalEjercicio6() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double ladoA = 0,
                ladoB = 0,
                radio = 0,
                area = 0,
                perimetro = 0;
        int menu = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 6. Diseñe un programa (en consola) que encuentre el área y perímetro "
                + "de un rectángulo o un círculo \nmostrando un menú para que seleccione, cuadrado o circulo "
                + "luego pida los datos necesarios para dar solución \ny muestre en pantalla el nombre de la "
                + "figura su área en unidades cuadradas y su perímetro en unidades simples, \nrecuerde que no "
                + "existen áreas o perímetros menores o iguales a cero.\n");

        //Solicitud de datos
        System.out.println("----- MENÚ ÁREAS Y PERÍMETROS -----");
        System.out.println("1. Rectángulo");
        System.out.println("2. Círculo");
        System.out.print("\nDigite una opción del menú: ");
        menu = objEntrada.nextInt();

        switch (menu) {
            case 1:

                System.out.print("\nDigite el lado A: ");
                ladoA = objEntrada.nextDouble();
                System.out.print("Digite el lado B: ");
                ladoB = objEntrada.nextDouble();

                //Proceso
                if (ladoA <= 0 || ladoB <= 0) {
                    System.out.println("Los lados no pueden ser menores o iguales cero");
                } else {
                    perimetro = (2 * ladoA) + (2 * ladoB);
                    area = ladoA * ladoB;
                    System.out.println("\n¡Ha seleccionado el Rectángulo!");
                    System.out.println("El perímetro es: " + perimetro + " metros");
                    System.out.println("El área es:      " + area + " metros cuadrados");
                }
                break;
            case 2:

                System.out.print("Digite el radio: ");
                radio = objEntrada.nextDouble();

                //Proceso
                if (radio <= 0) {
                    System.out.println("El radio no puede ser menor o igual cero");
                } else {
                    perimetro = 2 * radio * Math.PI;
                    area = Math.PI * Math.pow(radio, 2);
                    System.out.println("\n¡Ha seleccionado el Círculo!");
                    System.out.printf("La circunferencia es: %.2f", perimetro);
                    System.out.println(" metros");
                    System.out.printf("El área es:           %.2f", area);
                    System.out.println(" metros cuadrados");
                }
                break;

            default:
                System.out.println("Opción incorrecta");
        }
    }

}
