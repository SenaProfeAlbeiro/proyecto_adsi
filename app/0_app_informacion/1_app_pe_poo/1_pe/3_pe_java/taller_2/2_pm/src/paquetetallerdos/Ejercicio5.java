package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio5 {

    //Declaración y creación de objetos
    int[] par = new int[100];
    int[] impar = new int[100];

    //Declaración de variables y asignación de valores
    int menu, num1, num2, aux, cont;
    boolean band1, band2;

    public void metPrincipalEjercicio5() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        int[] vecImpar;
        int[] vecPar;

        //Declaración de variables y asignación de valores
        int menu = 0,
                num1 = 0,
                num2 = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 5. Diseñe un programa (en consola) que solicite un "
                + "número a luego un número b, luego le pregunte \nal usuario que si desea la "
                + "serie par o impar, el programa mostrara la serie seleccionada desde el "
                + "número menor \nde los ingresados, hasta el número mayor de los ingresados.");

        //Solicitud de datos
        System.out.print("\nDigite el primer número: ");
        num1 = objEntrada.nextInt();

        //En caso que los números sean repetidos
        do {
            System.out.print("Digite el segundo número: ");
            num2 = objEntrada.nextInt();
            if (num1 == num2) {
                System.out.println("\nDigite nuevamente el segundo número, ya que no puede ser igual al primero\n");
            }
        } while (num1 == num2);

        //Llamado de métodos
        setDatos(num1, num2);
        metOrdenar();
        metParImpar();
        vecImpar = getImpar();
        vecPar = getPar();

        //Muestra de resultados: Menú para seleccionar la serie par o impar
        do {
            System.out.println("\n----- MENU SERIE -----\n");
            System.out.println("1. Impar");
            System.out.println("2. Par");
            System.out.println("3. Salir");
            System.out.print("Digite una opción del menú: ");
            menu = objEntrada.nextInt();

            switch (menu) {
                case 1:
                    System.out.print("\nSerie impar: ");
                    if (num2 % 2 != 0) {
                        for (int i = 0; i < getCont(); i++) {
                            System.out.print(vecImpar[i] + " ");
                        }
                    } else {
                        for (int i = 0; i < getCont() - 1; i++) {
                            System.out.print(vecImpar[i] + " ");
                        }
                    }
                    System.out.println("");
                    break;
                case 2:
                    System.out.print("\nSerie par: ");
                    if (num1 % 2 == 0) {
                        for (int i = 0; i < getCont(); i++) {
                            System.out.print(vecPar[i] + " ");
                        }
                    } else {
                        for (int i = 0; i < getCont() - 1; i++) {
                            System.out.print(vecPar[i] + " ");
                        }
                    }
                    System.out.println("");
                    break;
            }
        } while (menu == 1 || menu == 2);
    }

    public void setDatos(int num1, int num2) {
        this.num1 = num1;
        this.num2 = num2;
    }

    public void metOrdenar() {
        if (num1 > num2) {
            aux = num1;
            num1 = num2;
            num2 = aux;
        }
    }

    public void metParImpar() {
        cont = (int) (num2) / 2;
        for (int i = 0; i < cont; i++) {
            band1 = true;
            band2 = true;
            do {
                aux = num1;
                if (aux % 2 == 0) {
                    par[i] = num1;
                    band1 = false;
                } else {
                    impar[i] = num1;
                    band2 = false;
                }
                num1++;
            } while (band1 != band2);
        }
    }

    public int getCont() {
        return cont;
    }

    public int[] getImpar() {
        return impar;
    }

    public int[] getPar() {
        return par;
    }
}
