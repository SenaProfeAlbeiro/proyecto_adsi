package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio7 {

    //Creación de objetos
    String art;

    //Declaración de variables y asignación de valores
    double vrUnid, total, totalParcial, totalPagar, iva, acumIva;
    char canasta, cargar;
    int cant;

    public void metPrincipalEjercicio7() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        String art;

        //Declaración de variables y asignación de valores
        double vrUnid = 0;
        int cant = 0;
        char canasta, volver, cargArt;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 7. Diseñe un programa (en consola) que solicite por "
                + "teclado el nombre de un artículo, \nsu valor de unidad, cantidad a llevar, y "
                + "si es o no de la canasta familiar, como resultado debe \nmostrar el total del "
                + "valor de los productos a llevar y si no son de la canasta familiar se le "
                + "\nsume el IVA 16%.");

        //Solicitud de datos
        do {
            System.out.print("\nNombre del artículo:    ");
            art = objEntrada.next();
            System.out.print("Valor X unidad:         ");
            vrUnid = objEntrada.nextDouble();
            System.out.print("Cantidad:               ");
            cant = objEntrada.nextInt();
            System.out.print("Canasta familiar?(s/n): ");
            canasta = objEntrada.next().toLowerCase().charAt(0);

            //Llama al método para pasar datos
            metSolDatos(art, vrUnid, cant, canasta);

            //Muestra de resultados parciales
            System.out.println("\n         Total Parcial: " + metTlParcial());
            System.out.println("            Precio IVA: " + metObtIva());

            //Pregunta si se desea cargar el artículo
            System.out.print("\nDesea cargar el artículo a la compra(s/n): ");
            cargArt = objEntrada.next().toLowerCase().charAt(0);

            //Se carga o no el artículo dependiendo de la elección del usuario
            cargarArt(cargArt);

            //Muestra de resultados
            System.out.println("\n                  Total: " + getTotal());
            System.out.println("                    IVA: " + getAcumIva());
            System.out.println("          Total a pagar: " + metTlPagar());

            //repetir el ingreso de artículo
            System.out.print("\nDesea ingresar otro artículo (s/n): ");
            volver = objEntrada.next().toLowerCase().charAt(0);

        } while (volver == 's');
        //Muestra de resultados
        System.out.println("\n----- ¡GRACIAS POR SU COMPRA, VUELVA PRONTO! ----- ");
        System.out.println("\n                  Total: " + getTotal());
        System.out.println("                    IVA: " + getAcumIva());
        System.out.println("          Total a pagar: " + metTlPagar());
    }

    //Método para solicitar del rectángulo
    public void metSolDatos(String art, double vrUnid, int cant, char canasta) {
        this.art = art;
        this.vrUnid = vrUnid;
        this.cant = cant;
        this.canasta = canasta;
    }

    //Método para procesar: Total parcial     
    public double metTlParcial() {
        totalParcial = (vrUnid * cant);
        return totalParcial;
    }

    //Método para procesar: Total parcial, con o sin IVA     
    public double metObtIva() {
        if (canasta == 's') {
            iva = 0;
        } else {
            iva = (totalParcial * 0.16);
        }
        return iva;
    }

    //Método para procesar: Cargar el artículo, si o no
    public void cargarArt(char cargArt) {
        if (cargArt == 's') {
            //Proceso de acumulación precio total e iva
            total = total + totalParcial;
            acumIva = acumIva + iva;
            iva = 0;
        }
    }

    //Método para procesar: Acumulado total
    public double getTotal() {
        return total;
    }

    //Método para procesar: Acumulado del IVA total
    public double getAcumIva() {
        return acumIva;
    }

    //Método para procesar: Pagar el total
    public double metTlPagar() {
        totalPagar = total + acumIva;
        return totalPagar;
    }
}
