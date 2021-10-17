package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio7 {


    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String articulo;

        //Declaración de variables y asignación de valores
        double valorUnidad = 0,
                total = 0,
                totalParcial = 0,
                totalPagar = 0,
                iva = 0,
                acumIva = 0;
        char canasta, volver;
        int cantidad = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 7. Diseñe un programa (en consola) que solicite por "
                + "teclado el nombre de un artículo, \nsu valor de unidad, cantidad a llevar, y "
                + "si es o no de la canasta familiar, como resultado debe \nmostrar el total del "
                + "valor de los productos a llevar y si no son de la canasta familiar se le "
                + "\nsume el IVA 16%.");

        //Solicitud de datos
        do {
            System.out.print("\nNombre del artículo:    ");
            articulo = objEntrada.next();
            System.out.print("Valor X unidad:         ");
            valorUnidad = objEntrada.nextDouble();
            System.out.print("Cantidad:               ");
            cantidad = objEntrada.nextInt();
            System.out.print("Canasta familiar?(s/n): ");
            canasta = objEntrada.next().toLowerCase().charAt(0);

            //Proceso parcial
            totalParcial = (valorUnidad * cantidad);

            //Proceso precio con IVA
            if (canasta != 's') {
                iva = (totalParcial * 0.16);
            }

            //Muestra de resultados parciales
            System.out.println("\n         Total Parcial: " + totalParcial);
            System.out.println("            Precio IVA: " + iva);

            //Pregunta si se desea cargar el artículo
            System.out.print("\nDesea cargar el artículo a la compra(s/n): ");
            volver = objEntrada.next().toLowerCase().charAt(0);

            //Se carga o no el artículo dependiendo de la elección del usuario
            if (volver == 's') {
                //Proceso de acumulación precio total e iva
                total = total + totalParcial;
                acumIva = acumIva + iva;
                iva = 0;
            }

            //Proceso para sumar el total parcial y el iva
            totalPagar = total + acumIva;

            //Muestra de resultados
            System.out.println("\n                  Total: " + total);
            System.out.println("                    IVA: " + acumIva);
            System.out.println("          Total a pagar: " + totalPagar);

            //repetir el ingreso de artículo
            System.out.print("\nDesea ingresar otro artículo (s/n): ");
            volver = objEntrada.next().toLowerCase().charAt(0);

        } while (volver == 's');
        //Muestra de resultados
        System.out.println("\n----- ¡GRACIAS POR SU COMPRA, VUELVA PRONTO! ----- ");
        System.out.println("\n                  Total: " + total);
        System.out.println("                    IVA: " + acumIva);
        System.out.println("          Total a pagar: " + totalPagar);
    }
}
