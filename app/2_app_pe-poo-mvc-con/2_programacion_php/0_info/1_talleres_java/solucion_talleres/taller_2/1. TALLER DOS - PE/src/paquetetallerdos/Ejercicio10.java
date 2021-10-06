package paquetetallerdos;

import java.util.Scanner;
import javax.swing.JOptionPane;

public class Ejercicio10 {    

    public void metPrincipalEjercicio10() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String[][] matrizUno = new String[11][4];
        String[][] matrizDos = new String[11][7];
        String otroArt;

        //Declaración de variables y asignación de valores
        int art = 0, 
                cant = 0, 
                contArt = 0;
        double vt = 0, 
                tap = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 10. Diseñe un programa (en consola) con 2 matrices, "
                + "la primera de 11 por 4 con 10 productos con el ID, \nnombre de producto, "
                + "precio unidad, y si tiene o no IVA, la segunda se debe llenar dinámicamente, "
                + "debe ser de 11 \npor 7 con el ítem, ID, nombre producto, cantidad valor unidad, "
                + "IVA, valor total. Se creara una factura el programa \nsolicitara en consola que "
                + "digite el id del producto que desea llevar, luego la cantidad y si desea llevar "
                + "otro \nproducto, puede llevar hasta 10 productos el usuario, luego imprimirá la "
                + "factura.\n");
        
        //Llenar la Matriz Uno para mostrar los artículos a seleccionar
        matrizUno[0][0]="ID"; matrizUno[0][1]="Nombre    ";matrizUno[0][2]="Val/U";matrizUno[0][3]="Iva";
        matrizUno[1][0]="1"; matrizUno[1][1]="Arroz L ";  matrizUno[1][2]="2500"; matrizUno[1][3]="no";
        matrizUno[2][0]="2"; matrizUno[2][1]="Azucar L";  matrizUno[2][2]="1800"; matrizUno[2][3]="si";
        matrizUno[3][0]="3"; matrizUno[3][1]="Sal L   ";  matrizUno[3][2]="900";  matrizUno[3][3]="si";
        matrizUno[4][0]="4"; matrizUno[4][1]="cafe L  ";  matrizUno[4][2]="4000"; matrizUno[4][3]="si";
        matrizUno[5][0]="5"; matrizUno[5][1]="panela  ";  matrizUno[5][2]="800";  matrizUno[5][3]="no";
        matrizUno[6][0]="6"; matrizUno[6][1]="chocolat";  matrizUno[6][2]="3200"; matrizUno[6][3]="si";
        matrizUno[7][0]="7"; matrizUno[7][1]="huevos  ";  matrizUno[7][2]="250";  matrizUno[7][3]="no";
        matrizUno[8][0]="8"; matrizUno[8][1]="leche   ";  matrizUno[8][2]="3800"; matrizUno[8][3]="no";
        matrizUno[9][0]="9"; matrizUno[9][1]="aceite L";  matrizUno[9][2]="10000";matrizUno[9][3]="si";
        matrizUno[10][0]="10";matrizUno[10][1]="gaseosa "; matrizUno[10][2]="3000";matrizUno[10][3]="si";
        
        //Mostrar en pantalla la Matriz Uno
        System.out.println("        BIENVENIDOS A LA TIENDITA EL CHAVO");
        System.out.println("        __________________________________");
        for (int i = 0; i < 11; i++) {
            System.out.println("");
            for (int j = 0; j < 4; j++) {
                System.out.print("\t" + (matrizUno[i][j])); // \t = Tabulaciones
            }
        }
        System.out.println("");
        
        //llenar los nombres de las columnas matrizDos[0][0:6]
        matrizDos[0][0]="Item";   matrizDos[0][1]="ID"; matrizDos[0][2]="Nombre P";matrizDos[0][3]="Cantidad";
        matrizDos[0][4]="Valor U";matrizDos[0][5]="IVA";matrizDos[0][6]="Valor T";
        
        //llenar con los números las columna matrizDos[0:10][0]
        matrizDos[1][0]="1";matrizDos[2][0]="2";matrizDos[3][0]="3";matrizDos[4][0]="4";matrizDos[5][0]="5";
        matrizDos[6][0]="6";matrizDos[7][0]="7";matrizDos[8][0]="8";matrizDos[9][0]="9";matrizDos[10][0]="10";
        
        //Controla la selección de todos los pedidos
        for (int i = 1; i < 11; i++) {
            
            //Valida la existencia del artículo que desea llevar (de 1 a 10)
            do {
                System.out.print("\nDigite el No. del articulo que desea llevar: ");
                art = objEntrada.nextInt();
                if (art > 10 || art < 1) {
                    System.out.println("\nopcion errada");
                }
            } while (art > 10 || art < 1);
            
            //Valida la cantidad de artículos que desea llevar, máximo 10 artículos
            do {
                System.out.print("Digite la cantidad de  articulos que desea llevar: ");
                cant = objEntrada.nextInt();
                if (cant > 10 || cant < 1) {
                    System.out.println("\nopcion errada");
                }
                if (contArt + cant > 10) {
                    System.out.println("\ncantidad max 10 art");
                }
            } while (cant > 10 || cant < 1 || contArt + cant > 10);
            
            //Almacena los artículos y cantidades seleccionadas en la matriz Dos
            for (int j = 1; j < 11; j++) {
                if (art == Integer.parseInt(matrizUno[j][0])) {
                    matrizDos[i][1] = matrizUno[j][0];
                    matrizDos[i][2] = matrizUno[j][1];
                    matrizDos[i][3] = "   " + cant + "\t"; //Cantidad de productos mas un espacio y tabulación
                    contArt = contArt + cant;
                    matrizDos[i][4] = matrizUno[j][2];
                    matrizDos[i][5] = matrizUno[j][3];
                    
                    //Se calcula si tiene o no el IVA
                    if ("si".equals(matrizUno[j][3])) {
                        vt = cant * (Integer.parseInt(matrizUno[j][2])) * 1.16; //Convierte String a Entero
                    } else {
                        vt = cant * (Integer.parseInt(matrizUno[j][2]));
                    }
                    matrizDos[i][6] = "" + vt;
                    tap = tap + Double.parseDouble(matrizDos[i][6]);
                }
            }
            
            //Pregunta si desea seleccionar otro artículo
            System.out.print("\nDesea llevar otro articulo marque 's' de lo contrario otra letra: ");
            otroArt = objEntrada.next();
            if (!"s".equals(otroArt) || contArt >= 10) {
                i = i + 10;
            }
            
        }
        //Imprime la MatrizDos, es decir, la Factura
        for (int i = 0; i < 11; i++) {
            System.out.println("");
            for (int j = 0; j < 7; j++) {
                System.out.print("\t" + (matrizDos[i][j]));
            }
        }
        System.out.println("");
        System.out.println("                        Valor Total a Pagar " + tap);
    }
}
