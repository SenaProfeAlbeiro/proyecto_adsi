package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio4 {


    public void metPrincipalEjercicio4() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double num1 = 0,
                num2 = 0,
                res = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 4. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los divida, \ncomo resultado debe mostrar en pantalla "
                + "la división de su numero A sobre su numero B es resultado; \nsi el num dos "
                + "el denominador es cero debe salir las palabras “Error división por 0.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        num2 = objEntrada.nextDouble();

        //Valida si el denominador es cero
        if (num2 == 0) {
            System.out.println("\nError, división por 0");
        } else {
            //Proceso
            res = num1 / num2;
            //Muestra de resultados
            System.out.println("La división de su número " + num1 + " sobre su número " + num2 + " es " + res);
        }

    }

}
