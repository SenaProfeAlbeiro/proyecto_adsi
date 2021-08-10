package vista;

import java.util.Scanner;
import modelo.MEjercicio8;

public class VEjercicio8 {
    
    public void metPrincipalEjercicio8() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio8 objEjerc8 = new MEjercicio8();

        //Descripción del ejercicio
        System.out.println("\nEjercicio 8. Utilizando el método RANDOM diseñe un programa "
                + "(en consola) que de números aleatorios \ndesde 0 hasta el número que "
                + "ingrese el usuario por teclado. \n");

        //Solicitud de datos
        System.out.print("Digite hasta qué número el aleatorio: ");
        objEjerc8.setCant(objEntrada.nextInt());
        
        for (int i = 0; i < objEjerc8.getCant(); i++) {
            objEjerc8.metAleatorio();
            System.out.println(i + 1 + ". " + objEjerc8.getAleatorio());
        }
        
    }
}
