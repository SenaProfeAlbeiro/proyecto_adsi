package vista;

import java.util.Scanner;
import modelo.MEjercicio2;

public class VEjercicio2 {

    public void metPrincipalEjercicio2() {
        
        //Declaración y creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio2 objEjerc2 = new MEjercicio2();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 2. Diseñe un programa (en consola) que encuentre "
                + "x números de la sucesión de Fibonacci, \nde acuerdo al número digitado "
                + "por el usuario. \n");
        
        //Ingreso de datos
        System.out.print("Ingrese la cantidad de números de la serie Fibonacci: ");
        objEjerc2.setNum(objEntrada.nextInt());
        
        objEjerc2.metOperar();
        
        //Impresión de datos almacenados en el vector
        for (int i = 0; i < objEjerc2.getRes().length; i++) {
            System.out.print(objEjerc2.getRes()[i] + " ");
        }
        System.out.println("");
    }
}
