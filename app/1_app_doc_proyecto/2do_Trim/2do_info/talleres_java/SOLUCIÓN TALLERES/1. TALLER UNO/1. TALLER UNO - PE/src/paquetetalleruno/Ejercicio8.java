package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio8 {


    public void metPrincipalEjercicio8() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        int cant = 0,
                aleatorio = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 8. Utilizando el método RANDOM diseñe un programa "
                + "(en consola) que de números aleatorios \ndesde 0 hasta el número que "
                + "ingrese el usuario por teclado. \n");

        //Solicitud de datos
        System.out.print("Digite hasta qué número el aleatorio: ");
        cant = objEntrada.nextInt();
        
        for (int i = 0; i < cant; i++) {
            
            //Procesos
            aleatorio = (int) Math.round(Math.random() * cant);            
            
            //Muestra de resultados
            System.out.println(i+1 + ". "+ aleatorio);
        }
    }
}
