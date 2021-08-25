package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio2 {

    public void metPrincipalEjercicio2() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double num1 = 0,
                num2 = 0,
                res = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 2. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los reste, \ncomo resultado debe mostrar en pantalla "
                + "la resta de su numero A menos su numero B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        num2 = objEntrada.nextDouble();

        //Proceso
        res = num1 - num2;

        //Muestra de resultados
        System.out.println("La resta de su número " + num1 + " menos su número " + num2 + " es " + res);
    }

}
