package vista;

import java.util.Scanner;
import modelo.MEjercicio4;

public class VEjercicio4 {
    
    public void metPrincipalEjercicio4() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio4 objEjerc4 = new MEjercicio4();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 4. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los divida, \ncomo resultado debe mostrar en pantalla "
                + "la división de su numero A sobre su numero B es resultado; \nsi el num dos "
                + "el denominador es cero debe salir las palabras “Error división por 0.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        objEjerc4.setNum1(objEntrada.nextDouble());
        System.out.print("Digite el segundo número: ");
        objEjerc4.setNum2(objEntrada.nextDouble());
        
        //Proceso
        objEjerc4.metDividir(); // Llama al método para sumar: metDividir()
        if (objEjerc4.getNum2() == 0) {
            System.out.println(objEjerc4.getResTxt());
        }
        
        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("\nLa división de su número " + objEjerc4.getNum1() + " sobre su número " 
                + objEjerc4.getNum2() + " es " + objEjerc4.getRes());
    }
}
