package vista;

import java.util.Scanner;
import modelo.MEjercicio9;

public class VEjercicio9 {
    
    //Declaración de variables y asignación de valores
    public void metPrincipalEjercicio9() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio9 objEjerc9 = new MEjercicio9();

        //Descripción del ejercicio
        System.out.println("\nEjercicio 9. Diseñe un programa (en consola) que llene una "
                + "matriz de 5 por 5 con los datos del 5 de sus compañeros \nnombre, sexo, "
                + "fecha de cumpleaños, estado civil, teléfono. Luego de llenarla, la "
                + "imprima organizada.");
        
        //Llenar los datos de la matriz solo en las filas (i)
        for (int i = 1; i < 6; i++) {

//            matriz[i][0] = Integer.toString(i); //Forma UNO, para cambiar de int a String
            objEjerc9.getMatrizGlobal()[i][0] = String.valueOf(i); //Forma DOS, para cambiar de int a String
            System.out.print("\nNombre: \t");
            objEjerc9.getMatrizGlobal()[i][1] = objEntrada.next();
            System.out.print("Edad: \t\t");
            objEjerc9.getMatrizGlobal()[i][2] = objEntrada.next();
            System.out.print("Cumpleaños: \t");
            objEntrada.nextLine();
            objEjerc9.getMatrizGlobal()[i][3] = objEntrada.nextLine();
            System.out.print("Estado civil: \t");
            objEjerc9.getMatrizGlobal()[i][4] = objEntrada.next();
            System.out.print("Teléfono: \t");
            objEjerc9.getMatrizGlobal()[i][5] = objEntrada.next();
        }
        
        objEjerc9.metInMatGlb();
        
        //Mostrar en pantalla la matriz
        System.out.print("\n            _________________________________________________________________________________________________________");
        System.out.println("\n                                                  DATOS DE MIS COMPAÑEROS");
        System.out.print("            _________________________________________________________________________________________________________");
        for (int i = 0; i < objEjerc9.getMatrizGlobal().length; i++) {
            System.out.println("");
            for (int j = 0; j < 6; j++) {
                System.out.print("\t\t" + objEjerc9.getMatrizGlobal()[i][j]);
            }
            System.out.print("\n            _________________________________________________________________________________________________________");
        }
        System.out.println("");
    }
}
