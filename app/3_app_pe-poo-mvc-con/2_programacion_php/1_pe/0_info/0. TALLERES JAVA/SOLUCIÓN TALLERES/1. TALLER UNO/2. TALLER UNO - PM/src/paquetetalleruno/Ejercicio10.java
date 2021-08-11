package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio10 {

    //Creación de objetos
    String resText;

    //Declaración de variables y asignación de valores
    double angA, angB, angC,
            ladoA, ladoB, ladoC,
            sumaAng;

    public void metPrincipalEjercicio10() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        double angA = 0,
                angB = 0,
                angC = 0,
                ladoA = 0,
                ladoB = 0,
                ladoC = 0,
                sumaAng = 0;
        int menu = 0;

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
        menu = objEntrada.nextInt();

        switch (menu) {
            case 1:
                System.out.print("\nDigite el ángulo A: ");
                angA = objEntrada.nextDouble();
                System.out.print("Digite el ángulo B: ");
                angB = objEntrada.nextDouble();

                //Método para recibir datos por parámetro
                setAngulos(angA, angB);
                metAngTrian();
                //Mostrar en pantalla el resultado
                System.out.println("Valor del ángulo C: " + getAngC() + "\n" + getResTrian());

                break;
            case 2:
                System.out.print("\nDigite el ladoA: ");
                ladoA = objEntrada.nextDouble();
                System.out.print("Digite el ladoB: ");
                ladoB = objEntrada.nextDouble();
                System.out.print("Digite el ladoC: ");
                ladoC = objEntrada.nextDouble();

                //Método para recibir datos por parámetro
                setLados(ladoA, ladoB, ladoC);
                metLadoTrian();
                //Mostrar en pantalla el resultado
                System.out.println(getResTrian());

                break;
            default:
                System.out.println("La opción no existe");
        }
    }

    //Método que recibe valores por parámetro
    public void setAngulos(double angA, double angB) {
        this.angA = angA;
        this.angB = angB;
    }

    //Método para procesar: Sumar
    public void setLados(double ladoA, double ladoB, double ladoC) {
        this.ladoA = ladoA;
        this.ladoB = ladoB;
        this.ladoC = ladoC;
    }

    //Método para validar el triángulo según el ángulo
    public void metAngTrian() {
        angC = 180 - (angA + angB);
        if (angA > 0 && angB > 0 && angC > 0) {
            if (angA == 90 || angB == 90 || angC == 90) {
                resText = "RECTÁNGULO";
            } else if (angA < 90 && angB < 90 && angC < 90) {
                resText = "ACUTÁNGULO";
            } else {
                resText = "OBTUSÁNGULO";
            }
        } else {
            resText = "ÁNGULOS INCORRECTOS";
        }
    }

    //Método para validar el triángulo según el ángulo
    public void metLadoTrian() {
        if (ladoA < ladoB + ladoC && ladoB < ladoA + ladoC && ladoC < ladoA + ladoB) {
            if (ladoA == ladoB && ladoB == ladoC) {
                resText = "EQUILATERO";
            } else if (ladoA == ladoB || ladoB == ladoC || ladoC == ladoA) {
                resText = "ISÓSCELES";
            } else {
                resText = "ESCALENO";
            }
        } else {
            resText = "LADOS INCORRECTOS";
        }
    }

    //Método que devuelve el valor del ángulo C
    public double getAngC() {
        return angC;
    }

    //Método para devolver el valor
    public String getResTrian() {
        return "Es un triángulo: " + resText;
    }

}
