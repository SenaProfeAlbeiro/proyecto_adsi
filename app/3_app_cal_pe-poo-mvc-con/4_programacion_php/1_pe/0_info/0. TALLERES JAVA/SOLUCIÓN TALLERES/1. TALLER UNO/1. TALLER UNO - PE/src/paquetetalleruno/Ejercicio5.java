package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio5 {


    public void metPrincipalEjercicio5() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double color1 = 0,
                color2 = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 5. Diseñe un programa ( en consola ) que muestre un menú. Para amarillo 1,"
                + "para azul 2, para rojo 3. \nLuego solicite al usuario digitar dos de estos números para descifrar "
                + "la combinación. Ejemplo: 1, 3 resultado \nmostrado en pantalla 'su combinación da naranja. Recuerde "
                + "que el usuario puede colocar el mismo número dos \nveces y números fuera del rango.\n");

        //Solicitud de datos
        System.out.println("----- MENÚ COLORES -----\n");
        System.out.println("1. Amarillo");
        System.out.println("2. Azul");
        System.out.println("3. Rojo");
        System.out.print("\nDigite el primer color: ");
        color1 = objEntrada.nextInt();
        System.out.print("Digite el segundo color: ");
        color2 = objEntrada.nextInt();

        //Proceso: De acuerdo el color se toma una decisión 
        System.out.println("");
        if (color1 == 1 && color2 == 2 || color1 == 2 && color2 == 1) {
            System.out.println("Su combinación da VERDE");
        } else if (color1 == 1 && color2 == 3 || color1 == 3 && color2 == 1) {
            System.out.println("Su combinación da NARANJA");
        } else if (color1 == 2 && color2 == 3 || color1 == 3 && color2 == 2) {
            System.out.println("Su combinación da VIOLETA");
        } else if (color1 == 1 && color2 == 1 || color1 == 2 && color2 == 2 || color1 == 3 && color2 == 3) {
            System.out.println("Ha seleccionado el mismo color");
        } else if (color1 > 3 || color1 < 0 || color2 > 3 || color2 < 0) {
            System.out.println("El color seleccionado no existe");
        }

    }

}
