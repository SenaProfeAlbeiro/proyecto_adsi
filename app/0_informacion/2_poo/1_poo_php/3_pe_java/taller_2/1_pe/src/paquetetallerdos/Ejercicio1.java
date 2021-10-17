package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio1 {


    public void metPrincipalEjercicio1() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double num1 = 0,
                num2 = 0,
                res = 0;
        int menu = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que permita hacer "
                + "las operaciones suma, resta, multiplicación, \ndivisión, raiz, potencia y porcentaje, "
                + "con un menú utilizando el switch.\n");

        //Solicitud de datos
        System.out.println("----- MENÚ CALCULADORA -----\n");
        System.out.println("1. Sumar");
        System.out.println("2. Restar");
        System.out.println("3. Multiplicar");
        System.out.println("4. Dividir");
        System.out.println("5. Raíz");
        System.out.println("6. Potencia");
        System.out.println("7. Porcentaje");
        System.out.print("\nSeleccione una opción del menú: ");
        menu = objEntrada.nextInt();

        switch (menu) {
            case 1:
                System.out.println("\nBienvenido a la SUMA, digite los sumandos\n");
                System.out.print("Ingrese el primer sumando: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese el segundo sumando: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = num1 + num2;
                //Muestra de resultados
                System.out.println("El resultado de la suma es: " + res);
                break;
            case 2:
                System.out.println("\nBienvenido a la RESTA, digite el minuendo y el sustraendo\n");
                System.out.print("Ingrese el minuendo: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese el sustraendo: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = num1 - num2;
                //Muestra de resultados
                System.out.println("El resultado de la resta es: " + res);
                break;
            case 3:
                System.out.println("\nBienvenido a la MULTIPLICACIÓN, digite los factores\n");
                System.out.print("Ingrese el primer factor: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese el segundo factor: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = num1 * num2;
                //Muestra de resultados                
                System.out.println("El resultado de la multiplicación es: " + res);
                break;
            case 4:
                System.out.println("\nBienvenido a la DIVISIÓN, digite el dividendo y luego el divisor\n");
                System.out.print("Ingrese el dividendo: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese el divisor: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                while (num2 == 0) {
                    System.out.println("Imposible división por cero");
                    System.out.print("Digite nuevamente el valor 2: ");
                    num2 = objEntrada.nextDouble();
                }
                res = num1 / num2;
                //Muestra de resultados                
                System.out.printf("El resultado de la división es: %.2f", res);
                System.out.println("");
                break;
            case 5:
                System.out.println("\nBienvenido a la RAIZ, digite la base y luego la raiz\n");
                System.out.print("Ingrese la base: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese la raiz: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = Math.pow(num1, (1 / num2));
                //Muestra de resultados
                System.out.printf("El resultado de la raiz es: %.2f", res);
                System.out.println("");
                break;
            case 6:
                System.out.println("\nBienvenido a la POTENCIA, digite la base y luego la potencia\n");
                System.out.print("Ingrese la base: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese potencia: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = Math.pow(num1, num2);
                //Muestra de resultados                
                System.out.println("El resultado de la potencia es: " + res);
                break;
            case 7:
                System.out.println("\nBienvenido al PORCENTAJE, digite la base y luego el porcentaje\n");
                System.out.print("Ingrese la base: ");
                num1 = objEntrada.nextDouble();
                System.out.print("Ingrese el porcentaje: ");
                num2 = objEntrada.nextDouble();
                //Proceso
                res = (num1 * num2) / 100;
                //Muestra de resultados
                System.out.printf("El resultado del porcentaje es: %.2f", res);
                System.out.println("");
                break;
            default:
                System.out.println("Opción incorrecta");
        }

    }
}
