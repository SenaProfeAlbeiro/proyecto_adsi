package vista;

import java.util.Scanner;
import modelo.MEjercicio5;

public class VEjercicio5 {
    
    public void metPrincipalEjercicio5() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio5 objEjerc5 = new MEjercicio5();
        
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
        objEjerc5.setColor1(objEntrada.nextInt());
        System.out.print("Digite el segundo color: ");
        objEjerc5.setColor2(objEntrada.nextInt());
        
        objEjerc5.metCombinar(); // Llama al método para sumar: metCombinar()
        
        //Imprime resultados del método Imprimir
        System.out.println("\n" + objEjerc5.getResTxt());
    }
    

}
