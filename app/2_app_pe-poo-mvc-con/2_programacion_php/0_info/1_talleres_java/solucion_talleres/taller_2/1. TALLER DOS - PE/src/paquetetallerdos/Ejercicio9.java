package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio9 {
    
    public void metPrincipalEjercicio9() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String[][] matriz = new String[6][6];

        //Declaración de variables y asignación de valores
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 9. Diseñe un programa (en consola) que llene una "
                + "matriz de 5 por 5 con los datos del 5 de sus compañeros \nnombre, sexo, "
                + "fecha de cumpleaños, estado civil, teléfono. Luego de llenarla, la "
                + "imprima organizada.");

        //Colocar los títulos del arreglo bidimensional (Matriz)        
        matriz[0][0] = "Nro";
        matriz[0][1] = "Nombre";
        matriz[0][2] = "Sexo";
        matriz[0][3] = "Cumple Años";
        matriz[0][4] = "EstCiv";
        matriz[0][5] = "Teléfono";

        //Llenar los datos de la matriz solo en las filas (i)
        for (int i = 1; i < 6; i++) {

//            matriz[i][0] = Integer.toString(i); //Forma UNO, para cambiar de int a String
            matriz[i][0] = String.valueOf(i); //Forma DOS, para cambiar de int a String
            System.out.print("\nNombre: \t");
            matriz[i][1] = objEntrada.next();
            System.out.print("Edad: \t\t");
            matriz[i][2] = objEntrada.next();
            System.out.print("Cumpleaños: \t");
            objEntrada.nextLine();
            matriz[i][3] = objEntrada.nextLine();
            System.out.print("Estado civil: \t");
            matriz[i][4] = objEntrada.next();
            System.out.print("Teléfono: \t");
            matriz[i][5] = objEntrada.next();
        }

        //Mostrar en pantalla la matriz
        System.out.print("\n            _________________________________________________________________________________________________________");
        System.out.println("\n                                                  DATOS DE MIS COMPAÑEROS");
        System.out.print("            _________________________________________________________________________________________________________");
        for (int i = 0; i < 6; i++) {
            System.out.println("");
            for (int j = 0; j < 6; j++) {
                System.out.print("\t\t" + matriz[i][j]);
            }
            System.out.print("\n            _________________________________________________________________________________________________________");
        }
        System.out.println("");
    }
}
