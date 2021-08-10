package javaapplication7;

import java.util.Scanner;

public class JavaApplication7 {

    public static void main(String[] args) {
        
        //Declaración y creación de objetos
        Scanner scanner = new Scanner(System.in);
        String menuText = "1";
        
        //Declaración y creación de variables
        int menu = 0;
        
        do {
            //Solicitud de datos
            System.out.println("----- Control de Menu ------");
            System.out.println("1. Una cosa");
            System.out.println("2. Otra cosa");
            System.out.print("Digite una opción del menu: ");        
            menuText = scanner.next();
            if (menuText.equals("1") || menuText.equals("2")) {
                menu = Integer.parseInt(menuText);
            }else{
                System.out.println("\nOpción incorrecta\n");                
            }
        } while ((menu > 2 || menu < 1 ) && (!menuText.equals("1") || !menuText.equals("2")));
        
        switch (menu) {
            case 1:
                System.out.println("\nprimera opción");
                break;
            case 2:
                System.out.println("\nsegunda opción");                
                break;
        }
        System.out.println("");
        
        
        //
        
        //Proceso
        
        
        //Muestra de resultados
        
    }
    
}
