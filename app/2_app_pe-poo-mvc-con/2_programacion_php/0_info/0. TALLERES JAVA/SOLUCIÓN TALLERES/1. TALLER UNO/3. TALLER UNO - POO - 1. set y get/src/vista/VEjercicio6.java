package vista;

import java.util.Scanner;
import modelo.MEjercicio6;

public class VEjercicio6 {


    public void metPrincipalEjercicio6() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio6 objEjerc6 = new MEjercicio6();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 6. Diseñe un programa (en consola) que encuentre el área y perímetro "
                + "de un rectángulo o un círculo \nmostrando un menú para que seleccione, cuadrado o circulo "
                + "luego pida los datos necesarios para dar solución \ny muestre en pantalla el nombre de la "
                + "figura su área en unidades cuadradas y su perímetro en unidades simples, \nrecuerde que no "
                + "existen áreas o perímetros menores o iguales a cero.\n");

        //Imprimir en pantalla el menú de áreas y perímetros
        System.out.println("----- MENÚ ÁREAS Y PERÍMETROS -----");
        System.out.println("1. Rectángulo");
        System.out.println("2. Círculo");

        //Permite la selección de una opción del menú
        System.out.print("\nDigite una opción del menú: ");
        objEjerc6.setMenu(objEntrada.nextInt());

        switch (objEjerc6.getMenu()) {
            case 1:
                System.out.println("\n¡Ha seleccionado el RECTÁNGULO!, digite los lados");
                System.out.print("\nDigite el lado A: ");
                objEjerc6.setLadoA(objEntrada.nextDouble());
                System.out.print("Digite el lado B: ");
                objEjerc6.setLadoB(objEntrada.nextDouble());

                //Proceso                
                objEjerc6.metValRect();

                //Imprimir resultados del rectángulo
                System.out.println("\n" + objEjerc6.getResTxt());
                break;
            case 2:
                System.out.println("\n¡Ha seleccionado el CÍRCULO!");
                System.out.print("\nDigite el radio: ");
                objEjerc6.setRadio(objEntrada.nextDouble());
                
                //Proceso
                objEjerc6.metValCir();

                //Imprimir resultados del rectángulo
                System.out.println("\n" + objEjerc6.getResTxt());
                break;
            default:
                System.out.println("\nOpción incorrecta");
        }
    }
}
