package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio6 {

    //Declaración y creación de objetos
    String resTxt;

    //Declaración de variables y asignación de valores
    double ladoA, ladoB, radio, area, perimetro;

    public void metPrincipalEjercicio6() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración y asignación de variables locales
        int menu = 0;
        double parLadoA = 0, 
                parLadoB = 0, 
                parRadio = 0;

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
        menu = objEntrada.nextInt();

        switch (menu) {
            case 1:
                System.out.println("\n¡Ha seleccionado el RECTÁNGULO!, digite los lados");
                System.out.print("\nDigite el lado A: ");
                parLadoA = objEntrada.nextDouble();
                System.out.print("Digite el lado B: ");
                parLadoB = objEntrada.nextDouble();

                //Proceso
                metSolRect(parLadoA, parLadoB); // Llama al método para pasar datos: metDatos()            
                metValRect();

                //Imprimir resultados del rectángulo
                System.out.println("\n" + metImprimir());
                break;
            case 2:
                System.out.println("\n¡Ha seleccionado el CÍRCULO!");
                System.out.print("\nDigite el radio: ");
                parRadio = objEntrada.nextDouble();

                //Proceso
                metSolCir(parRadio);
                metValCir();

                //Imprimir resultados del rectángulo
                System.out.println("\n" + metImprimir());
                break;
            default:
                System.out.println("\nOpción incorrecta");
        }
    }

    //Método para solicitar del rectángulo
    public void metSolRect(double parLadoA, double parLadoB) {
        this.ladoA = parLadoA;
        this.ladoB = parLadoB;
    }

    //Método para procesar: Validar lados del rectángulo
    public void metValRect() {
        if (ladoA <= 0 || ladoB <= 0) {
            resTxt = "Los lados no pueden ser menores o iguales cero";
        } else {
            perimetro = (2 * ladoA) + (2 * ladoB);
            area = ladoA * ladoB;
            resTxt = "El perímetro es: " + String.format("%.2f", perimetro) + " metros" + "\n"
                    + "El área es:      " + String.format("%.2f", area) + " metros cuadrados";
        }
    }

    //Método para solicitar del rectángulo
    public void metSolCir(double parRadio) {
        this.radio = parRadio;
    }

    //Método para procesar: Validar lados del rectángulo    
    public void metValCir() {
        if (radio <= 0) {
            resTxt = "El radio no puede ser menor o igual cero";
        } else {
            perimetro = 2 * radio * Math.PI;
            area = Math.PI * Math.pow(radio, 2);
            resTxt = "La circunferencia es: " + String.format("%.2f", perimetro) + " metros" + "\n"
                    + "El área es:           " + String.format("%.2f", area) + " metros cuadrados";
        }
    }

    //Método para imprimir resultados
    public String metImprimir() {
        return resTxt;
    }

}
