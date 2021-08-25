package vista;

import java.util.Scanner;
import modelo.MEjercicio6;

public class VEjercicio6 {
    public void metPrincipalEjercicio6() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio6 objEjerc6 = new MEjercicio6();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 6. Diseñe un programa (en consola) que en un vector "
                + "de 10 posiciones, primero solicite al \nusuario con un ciclo para el llenado "
                + "de este, luego ordene el vector en orden ascendente y luego lo \nimprima. "
                + "(método burbuja)\n");

        //Solicitud de datos
        System.out.println("Digite 10 números enteros\n");
        for (int i = 0; i < 10; i++) {
            System.out.print("Digite valor " + (i + 1) + ": ");                
            objEjerc6.getVector()[i] = objEntrada.nextInt();
        }
        
        objEjerc6.metOrdenar();        
        
        //Muestra de resultados de los números ordenados en el vector
        System.out.print("\nNúmeros ordenados: ");
        for (int i = 0; i < objEjerc6.getVector().length; i++) {
            System.out.print(" " + objEjerc6.getVector()[i]);
        }
        System.out.println("");
    }
}
