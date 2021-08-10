package vista;

import java.util.Scanner;
import modelo.MEjercicio5;

public class VEjercicio5 {

    public void metPrincipalEjercicio5() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio5 objEjerc5 = new MEjercicio5();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 5. Diseñe un programa (en consola) que solicite un "
                + "número a luego un número b, luego le pregunte \nal usuario que si desea la "
                + "serie par o impar, el programa mostrara la serie seleccionada desde el "
                + "número menor \nde los ingresados, hasta el número mayor de los ingresados.");

        //Solicitud de datos
        System.out.print("\nDigite el primer número: ");
        objEjerc5.setNum1(objEntrada.nextInt());

        //En caso que los números sean repetidos
        do {
            System.out.print("Digite el segundo número: ");
            objEjerc5.setNum2(objEntrada.nextInt());
            if (objEjerc5.getNum1() == objEjerc5.getNum2()) {
                System.out.println("\nDigite nuevamente el segundo número, ya que no puede ser igual al primero\n");
            }
        } while (objEjerc5.getNum1() == objEjerc5.getNum2());
        
        objEjerc5.metOrdenar();
        objEjerc5.metParImpar();

        //Muestra de resultados: Menú para seleccionar la serie par o impar
        do {
            System.out.println("\n----- MENU SERIE -----\n");
            System.out.println("1. Impar");
            System.out.println("2. Par");
            System.out.println("3. Salir");
            System.out.print("Digite una opción del menú: ");
            objEjerc5.setMenu(objEntrada.nextInt());

            switch (objEjerc5.getMenu()) {
                case 1:
                    System.out.print("\nSerie impar: ");                    
                    if (objEjerc5.getNum1() % 2 != 0 && objEjerc5.getNum2() % 2 != 0) {
                        for (int i = 0; i <= objEjerc5.getCont(); i++) {
                            System.out.print(objEjerc5.getImpar()[i] + " ");
                        }
                    } else if (objEjerc5.getNum1() % 2 == 0 && objEjerc5.getNum2() % 2 == 0) {
                        for (int i = 0; i < objEjerc5.getCont() - 1; i++) {
                            System.out.print(objEjerc5.getImpar()[i] + " ");
                        }
                    } else {
                        for (int i = 0; i < objEjerc5.getCont(); i++) {
                            System.out.print(objEjerc5.getImpar()[i] + " ");
                        }
                    }
                    System.out.println("");
                    break;
                case 2:
                    System.out.print("\nSerie par: ");
                    if (objEjerc5.getNum1() % 2 != 0 && objEjerc5.getNum2() % 2 != 0) {
                        for (int i = 0; i <= objEjerc5.getCont() - 1; i++) {
                            System.out.print(objEjerc5.getPar()[i] + " ");
                        }
                    } else if (objEjerc5.getNum1() % 2 == 0 && objEjerc5.getNum2() % 2 == 0) {
                        for (int i = 0; i < objEjerc5.getCont(); i++) {
                            System.out.print(objEjerc5.getPar()[i] + " ");
                        }
                    } else {
                        for (int i = 0; i < objEjerc5.getCont(); i++) {
                            System.out.print(objEjerc5.getPar()[i] + " ");
                        }
                    }
                    System.out.println("");
                    break;
            }
        } while (objEjerc5.getMenu() == 1 || objEjerc5.getMenu() == 2);
    }

    
}
