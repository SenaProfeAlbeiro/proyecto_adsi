package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio4 {

    //Creación de objetos
    Scanner objEntrada = new Scanner(System.in);

    //Declaración de variables y asignación de valores
    int num1, num2, num3, aux;

    public void metPrincipalEjercicio4() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración de variables y asignación de valores
        int num1 = 0,
                num2 = 0,
                num3 = 0,
                menu = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 4. Diseñe un programa (en consola) que solicite 3 "
                + "números por teclado y saque los números \nordenados ascendente o "
                + "descendente según lo decida el usuario.");

        //Solicitud de datos
        do {
            System.out.println("\nRecuerde no digitar números repetidos");
            System.out.print("\nDigite el primer número: ");
            num1 = objEntrada.nextInt();
            System.out.print("Digite el segundo número: ");
            num2 = objEntrada.nextInt();
            System.out.print("Digite el tercer número: ");
            num3 = objEntrada.nextInt();
        } while (num1 == num2 || num1 == num3 || num2 == num3);

        setDatos(num1, num2, num3);
        metOperar();

        //Muestra de resultados: 
        do {
            System.out.println("\n----- MENÚ DE ORDENAMIENTO -----\n");
            System.out.println("1. Ascendente");
            System.out.println("2. Descendente");
            System.out.println("3. Salir");
            System.out.print("\nDigite una opción del menú: ");
            menu = objEntrada.nextInt();

            //Selección del menú
            switch (menu) {
                case 1:
                    System.out.print("\nOrden ascendente: ");
                    System.out.println(getNum1() + " - " + getNum2() + " - " + getNum3());
                    break;
                case 2:
                    System.out.print("\nOrden descendente: ");
                    System.out.println(getNum3() + " - " + getNum2() + " - " + getNum1());
                    break;
            }
            //Repite el menú hasta que sea menú sea diferente de 1 o 2    
        } while (menu == 1 || menu == 2);
    }

    public void setDatos(int num1, int num2, int num3) {
        this.num1 = num1;
        this.num2 = num2;
        this.num3 = num3;
    }

    public void metOperar() {
        for (int i = 0; i < 2; i++) {
            if (num1 >= num2) {
                aux = num1;
                num1 = num2;
                num2 = aux;
            }
            if (num2 >= num3) {
                aux = num2;
                num2 = num3;
                num3 = aux;
            }
        }
    }

    public int getNum1() {
        return num1;
    }

    public int getNum2() {
        return num2;
    }

    public int getNum3() {
        return num3;
    }
}
