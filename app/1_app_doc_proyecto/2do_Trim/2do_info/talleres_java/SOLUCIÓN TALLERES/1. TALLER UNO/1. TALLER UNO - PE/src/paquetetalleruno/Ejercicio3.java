package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio3 {


    public void metPrincipalEjercicio3() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double num1 = 0,
                num2 = 0,
                res = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 3. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los multiplique, \ncomo resultado debe mostrar en "
                + "pantalla la multiplicacion de su numero A por su numero B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        num2 = objEntrada.nextDouble();

        //Proceso
        res = num1 * num2;

        //Muestra de resultados
        System.out.println("La multiplicación de su número " + num1 + " por su número " + num2 + " es " + res);
    }

}
