package vista;

import java.util.Scanner;
import modelo.MEjercicio1;

public class VEjercicio1 {
    
    public void metPrincipalEjercicio1() {
        
        //Creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio1 objEjerc1 = new MEjercicio1();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los sume, \ncomo resultado debe mostrar en pantalla "
                + "la suma de su número A más su número B es resultado.\n");

        //Solicitar datos
        System.out.print("Digite el primer número:  ");
        objEjerc1.setNum1(objEntrada.nextDouble());
        System.out.print("Digite el segundo número: ");
        objEjerc1.setNum2(objEntrada.nextDouble());
        
        objEjerc1.metSumar(); // Llama al método para sumar: metSumar()
        
        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La suma de su número " + objEjerc1.getNum1() + " más su número " 
                + objEjerc1.getNum2() + " es " + objEjerc1.getRes());        
    }
}
