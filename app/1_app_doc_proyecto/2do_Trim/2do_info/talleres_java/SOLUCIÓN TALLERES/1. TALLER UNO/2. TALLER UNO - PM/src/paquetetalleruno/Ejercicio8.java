package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio8 {

    //Declaración de variables globales
    int cant, aleatorio;
    
    public void metPrincipalEjercicio8() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables locales
        int cant = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 8. Utilizando el método RANDOM diseñe un programa "
                + "(en consola) que de números aleatorios \ndesde 0 hasta el número que "
                + "ingrese el usuario por teclado. \n");

        //Solicitud de datos
        System.out.print("Digite hasta qué número el aleatorio: ");
        cant = objEntrada.nextInt();

        //Llama al método para pasar datos como parámetro
        metSolicitar(cant);
        
        for (int i = 0; i < cant; i++) {
            //Imprime el resultado cada vez
            System.out.println(i + 1 + ". " + metAleatorio());
        }
        
    }

    //Método para solicitar datos
    public void metSolicitar(int cant) {
        this.cant = cant;
    }

    //Método para procesar: Sumar
    public int metAleatorio() {
        aleatorio = (int) Math.round(Math.random() * cant);
        return aleatorio;
    }
    
}
