package vista;

import java.util.Scanner;
import modelo.MEjercicio3;

public class VEjercicio3 {

    public void metPrincipalEjercicio3() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio3 objEjerc3 = new MEjercicio3();

        //Descripción del ejercicio
        System.out.println("\nEjercicio 3. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los multiplique, \ncomo resultado debe mostrar en "
                + "pantalla la multiplicacion de su numero A por su numero B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        objEjerc3.setNum1(objEntrada.nextDouble());
        System.out.print("Digite el segundo número: ");
        objEjerc3.setNum2(objEntrada.nextDouble());
        
        //Proceso
        objEjerc3.metMultiplicar(); // Llama al método para sumar: metMultiplicar()

        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La multiplicación de su número " + objEjerc3.getNum1() + " por su número "
                + objEjerc3.getNum2() + " es " + objEjerc3.getRes());
    }

}
