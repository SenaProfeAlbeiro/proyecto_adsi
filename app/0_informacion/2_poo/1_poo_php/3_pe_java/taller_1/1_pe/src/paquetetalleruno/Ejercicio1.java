package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio1 {

    public void metPrincipalEjercicio1() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double num1 = 0, num2 = 0, res = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los sume, \ncomo resultado debe mostrar en pantalla "
                + "la suma de su número A más su número B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        num2 = objEntrada.nextDouble();

        res = num1 + num2;

        //Muestra de resultados
        System.out.println("La suma de su número " + num1 + " más su número " + num2 + " es " + res);
    }
}
