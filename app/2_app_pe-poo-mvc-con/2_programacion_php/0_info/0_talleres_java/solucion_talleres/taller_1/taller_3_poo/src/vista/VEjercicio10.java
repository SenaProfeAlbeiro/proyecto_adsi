package vista;

import java.util.Scanner;
import modelo.MEjercicio10;

public class VEjercicio10 {

    public void metPrincipalEjercicio10() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio10 objEjerc10 = new MEjercicio10();

        //Descripción del ejercicio
        System.out.println("\nEjercicio 10. Diseñe un programa (en consola) que encuentre el "
                + "tipo de triangulo que se tiene, mostrando \nun menú que pida si se ingresaran "
                + "ángulos o lados y se dé la opción para escoger uno de los dos. Si se \nselecciona "
                + "por ángulos la suma de los 3 ángulos debe ser 180° y si se selecciona por lados, "
                + "la suma de \nlos dos lados más cortos debe ser mayor a la longitud del lado más "
                + "largo, para que sean un triángulo. Y \nmostrar en pantalla su triangulo es "
                + "(equilátero o isósceles, o escaleno) o (rectángulo o acutángulo u obtusángulo).\n");

        //Solicitud de datos
        System.out.println("---- MENÚ TRIÁNGULO");
        System.out.println("1. Ángulos");
        System.out.println("2. Lados");
        System.out.print("Digite una opción del menú: ");
        objEjerc10.setMenu(objEntrada.nextInt());

        switch (objEjerc10.getMenu()) {
            case 1:
                System.out.print("\nDigite el ángulo A: ");
                objEjerc10.setAngA(objEntrada.nextDouble());
                System.out.print("Digite el ángulo B: ");
                objEjerc10.setAngB(objEntrada.nextDouble());
                objEjerc10.metAngTrian();
                
                //Mostrar en pantalla el resultado
                System.out.println("Valor del ángulo C: " + objEjerc10.getAngC() + "\n" 
                        + "Es un Triángulo: " + objEjerc10.getResText());

                break;
            case 2:
                System.out.print("\nDigite el ladoA: ");
                objEjerc10.setLadoA(objEntrada.nextDouble());
                System.out.print("Digite el ladoB: ");
                objEjerc10.setLadoB(objEntrada.nextDouble());
                System.out.print("Digite el ladoC: ");
                objEjerc10.setLadoC(objEntrada.nextDouble());
                
                objEjerc10.metLadoTrian();
                
                //Mostrar en pantalla el resultado
                System.out.println("Es un triángulo: " + objEjerc10.getResText());

                break;
            default:
                System.out.println("La opción no existe");
        }
    }
}
