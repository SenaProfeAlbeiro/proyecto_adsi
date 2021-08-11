package vista;

import java.util.Scanner;
import modelo.MEjercicio2;

public class VEjercicio2 {

    public void metPrincipalEjercicio2() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio2 objEjerc2 = new MEjercicio2();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 2. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los reste, \ncomo resultado debe mostrar en pantalla "
                + "la resta de su numero A menos su numero B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número:  ");
        objEjerc2.setNum1(objEntrada.nextDouble());
        System.out.print("Digite el segundo número: ");
        objEjerc2.setNum2(objEntrada.nextDouble());
        
        objEjerc2.metRestar(); // Llama al método para sumar: metRestar()
        
        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La resta de su número " + objEjerc2.getNum1() + " más su número " 
                + objEjerc2.getNum2() + " es " + objEjerc2.getRes());
    }
}
