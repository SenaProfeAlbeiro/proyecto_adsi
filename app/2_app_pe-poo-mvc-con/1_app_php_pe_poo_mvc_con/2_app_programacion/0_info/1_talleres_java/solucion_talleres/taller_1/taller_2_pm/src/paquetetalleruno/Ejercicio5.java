package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio5 {
    
    //Declaración y creación de objetos
    String resTxt;
    
    //Declaración de variables y asignación de valores
    int color1, color2;

    public void metPrincipalEjercicio5() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        
        //Declaración y asignación de variables locales
        int par1 = 0, 
                par2 = 0;
        
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
        par1 = objEntrada.nextInt();
        System.out.print("Digite el segundo color: ");
        par2 = objEntrada.nextInt();

        //Proceso
        metSolicitar(par1, par2); // Llama al método para pasar datos: metDatos()            
        metCombinar(); // Llama al método para sumar: metCombinar()
        
        //Imprime resultados del método Imprimir
        System.out.println("\n" + metImprimir());
    }
    //Método para solicitar datos
    public void metSolicitar(int par1, int par2) {
        this.color1 = par1;
        this.color2 = par2;
    }

    //Método para procesar: Combinar colores
    public void metCombinar() {         
        if (color1 == 1 && color2 == 2 || color1 == 2 && color2 == 1) {
            resTxt = "VERDE";            
        } else if (color1 == 1 && color2 == 3 || color1 == 3 && color2 == 1) {
            resTxt = "NARANJA";            
        } else if (color1 == 2 && color2 == 3 || color1 == 3 && color2 == 2) {
            resTxt = "VIOLETA";            
        } else if (color1 == 1 && color2 == 1 || color1 == 2 && color2 == 2 || color1 == 3 && color2 == 3) {
            resTxt = "HA SELECCIONADO EL MISMO COLOR";
        } else if (color1 > 3 || color1 < 0 || color2 > 3 || color2 < 0) {
            resTxt = "EL/LOS COLOR(ES) SELECCIONADO(S) NO EXISTE(N)";
        }
    }

    //Método para imprimir resultados
    public String metImprimir() {
        return "Su combinación da: " + resTxt;
    }

}
