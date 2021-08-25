package vista;

import java.util.Scanner;
import modelo.MEjercicio10;

public class VEjercicio10 {

    public void metPrincipalEjercicio10() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio10 objEjerc10 = new MEjercicio10();
        
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
        objEjerc10.metInMatGlbUno();
        objEjerc10.metInMatGlbDos();
        
        //Controla la selección de todos los pedidos
        for (int i = 1; i < 11; i++) {
             //Mostrar en pantalla la Matriz Uno
            System.out.println("\n        BIENVENIDOS A LA TIENDITA EL CHAVO");
            System.out.println("        __________________________________");
            for (int k = 0; k < 11; k++) {
                System.out.println("");
                for (int j = 0; j < 4; j++) {
                    System.out.print("\t" + objEjerc10.getMatrizUno()[k][j]); // \t = Tabulaciones
                }
            }
            System.out.println("");
            //Valida la existencia del artículo que desea llevar (de 1 a 10)
            do {
                System.out.print("\nNo. Artículo:   ");
                objEjerc10.setArt(objEntrada.nextInt());                
                if (objEjerc10.getArt() > 10 || objEjerc10.getArt() < 1) {
                    System.out.println("\nOpcion errada");
                }
            } while (objEjerc10.getArt() > 10 || objEjerc10.getArt() < 1);

            //Valida la cantidad de artículos que desea llevar, máximo 10 artículos
            do {
                System.out.print("Cantidad:       ");
                objEjerc10.setCant(objEntrada.nextInt());
                
                if ((objEjerc10.getCant() + objEjerc10.getCantArt()) > 10 || objEjerc10.getCant() < 1) {
                    System.out.println("\nEscribió: " + objEjerc10.getCant() 
                            + " artículos y lleva acumulados " + objEjerc10.getCantArt());
                    System.out.println("o tal vez la cantidad es negativa\n");
                }
//                if (getCantArt() > 10) {
//                    System.out.println("\nLa cantidad de artículos supera los 10");
//                }                
            } while ((objEjerc10.getCant() > 11 || objEjerc10.getCant() < 1) || 
                    (objEjerc10.getCant() + objEjerc10.getCantArt()) > 10);

            objEjerc10.metContArt();
            
//            matrizDos = getMatrizGlobalDos();            
            for (int j = 1; j < 11; j++) {
                if (objEjerc10.getArt() == Integer.parseInt(objEjerc10.getMatrizUno()[j][0])) {
                    objEjerc10.getMatrizDos()[i][1] = objEjerc10.getMatrizUno()[j][0];
                    objEjerc10.getMatrizDos()[i][2] = objEjerc10.getMatrizUno()[j][1];
                    objEjerc10.getMatrizDos()[i][3] = "   " + objEjerc10.getCant() + "\t"; //Cantidad de productos mas un espacio y tabulación
                    objEjerc10.getMatrizDos()[i][4] = objEjerc10.getMatrizUno()[j][2];
                    objEjerc10.getMatrizDos()[i][5] = objEjerc10.getMatrizUno()[j][3];                    
                    objEjerc10.metOpera(i);
                    objEjerc10.getMatrizDos()[i][6] = "" + objEjerc10.getVt();
                }
            }

            //Pregunta si desea seleccionar otro artículo
            System.out.print("\nDesea llevar otro articulo marque 's' de lo contrario otra letra: ");
            objEjerc10.setOtroArt(objEntrada.next().toLowerCase().charAt(0));
            
            if ('s' != objEjerc10.getOtroArt() || objEjerc10.getCantArt() >= 10) {
                i = i + 10;
            }
        }
        
        //Imprime la MatrizDos, es decir, la Factura
        for (int i = 0; i < 11; i++) {
            System.out.println("");
            for (int j = 0; j < 7; j++) {
                System.out.print("\t" + objEjerc10.getMatrizDos()[i][j]);
            }
        }
        
        objEjerc10.metTap();
        System.out.println("");
        System.out.println("                                                    Valor Total a Pagar " 
                + objEjerc10.getTap());
    }
}
