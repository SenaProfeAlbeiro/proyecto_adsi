package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio9 {

    //Creación de objetos    
    String[][] matrizGlobal = new String[6][6];

    //Declaración de variables y asignación de valores
    public void metPrincipalEjercicio9() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String[][] matrizLocal = new String[6][6];

        //Descripción del ejercicio
        System.out.println("\nEjercicio 9. Diseñe un programa (en consola) que llene una "
                + "matriz de 5 por 5 con los datos del 5 de sus compañeros \nnombre, sexo, "
                + "fecha de cumpleaños, estado civil, teléfono. Luego de llenarla, la "
                + "imprima organizada.");
        
        //Llenar los datos de la matriz solo en las filas (i)
        for (int i = 1; i < 6; i++) {

//            matriz[i][0] = Integer.toString(i); //Forma UNO, para cambiar de int a String
            matrizLocal[i][0] = String.valueOf(i); //Forma DOS, para cambiar de int a String
            System.out.print("\nNombre: \t");
            matrizLocal[i][1] = objEntrada.next();
            System.out.print("Edad: \t\t");
            matrizLocal[i][2] = objEntrada.next();
            System.out.print("Cumpleaños: \t");
            objEntrada.nextLine();
            matrizLocal[i][3] = objEntrada.nextLine();
            System.out.print("Estado civil: \t");
            matrizLocal[i][4] = objEntrada.next();
            System.out.print("Teléfono: \t");
            matrizLocal[i][5] = objEntrada.next();
        }

        setMatrizGlobal(matrizLocal);
        metInMatGlb();
        matrizLocal = getMatrizGlobal();

        //Mostrar en pantalla la matriz
        System.out.print("\n            _________________________________________________________________________________________________________");
        System.out.println("\n                                                  DATOS DE MIS COMPAÑEROS");
        System.out.print("            _________________________________________________________________________________________________________");
        for (int i = 0; i < matrizLocal.length; i++) {
            System.out.println("");
            for (int j = 0; j < 6; j++) {
                System.out.print("\t\t" + matrizLocal[i][j]);
            }
            System.out.print("\n            _________________________________________________________________________________________________________");
        }
        System.out.println("");
    }

    public void setMatrizGlobal(String[][] matrizLocal) {
        this.matrizGlobal = matrizLocal;
    }

    public void metInMatGlb() {
        matrizGlobal[0][0] = "Nro";
        matrizGlobal[0][1] = "Nombre";
        matrizGlobal[0][2] = "Sexo";
        matrizGlobal[0][3] = "Cumple Años";
        matrizGlobal[0][4] = "EstCiv";
        matrizGlobal[0][5] = "Teléfono";
    }

    public String[][] getMatrizGlobal() {
        return matrizGlobal;
    }
}
