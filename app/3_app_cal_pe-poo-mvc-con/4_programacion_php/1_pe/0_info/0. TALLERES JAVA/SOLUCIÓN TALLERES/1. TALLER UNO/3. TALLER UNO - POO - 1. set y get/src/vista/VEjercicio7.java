package vista;

import java.util.Scanner;
import modelo.MEjercicio7;

public class VEjercicio7 {

    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio7 objEjercicio7 = new MEjercicio7();
        String art;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 7. Diseñe un programa (en consola) que solicite por "
                + "teclado el nombre de un artículo, \nsu valor de unidad, cantidad a llevar, y "
                + "si es o no de la canasta familiar, como resultado debe \nmostrar el total del "
                + "valor de los productos a llevar y si no son de la canasta familiar se le "
                + "\nsume el IVA 16%.");

        //Solicitud de datos
        do {
            System.out.print("\nNombre del artículo:    ");
            objEjercicio7.setArt(objEntrada.next());
            System.out.print("Valor X unidad:         ");
            objEjercicio7.setVrUnid(objEntrada.nextDouble());
            System.out.print("Cantidad:               ");
            objEjercicio7.setCant(objEntrada.nextInt());
            System.out.print("Canasta familiar?(s/n): ");
            objEjercicio7.setCanasta(objEntrada.next().toLowerCase().charAt(0));

            //Muestra de resultados parciales
            System.out.println("\n         Total Parcial: " + objEjercicio7.getTlParcial());
            System.out.println("            Precio IVA: " + objEjercicio7.getObtIva());

            //Pregunta si se desea cargar el artículo
            System.out.print("\nDesea cargar el artículo a la compra(s/n): ");
            objEjercicio7.setCargar(objEntrada.next().toLowerCase().charAt(0));

            //Muestra de resultados
            System.out.println("\n                  Total: " + objEjercicio7.getTotal());
            System.out.println("                    IVA: " + objEjercicio7.getAcumIva());
            System.out.println("          Total a pagar: " + objEjercicio7.getTlPagar());

            //repetir el ingreso de artículo
            System.out.print("\nDesea ingresar otro artículo (s/n): ");
            objEjercicio7.setVolver(objEntrada.next().toLowerCase().charAt(0));

        } while (objEjercicio7.getVolver() == 's');

        //Muestra de resultados
        System.out.println("\n----- ¡GRACIAS POR SU COMPRA, VUELVA PRONTO! ----- ");
        System.out.println("\n                  Total: " + objEjercicio7.getTotal());
        System.out.println("                    IVA: " + objEjercicio7.getAcumIva());
        System.out.println("          Total a pagar: " + objEjercicio7.getTlPagar());
    }

}
