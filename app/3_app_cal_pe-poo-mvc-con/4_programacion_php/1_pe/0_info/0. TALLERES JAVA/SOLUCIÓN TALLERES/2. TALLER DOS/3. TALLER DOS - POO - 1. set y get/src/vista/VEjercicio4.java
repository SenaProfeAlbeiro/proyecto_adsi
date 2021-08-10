package vista;

import java.util.Scanner;
import modelo.MEjercicio4;

public class VEjercicio4 {

    public void metPrincipalEjercicio4() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio4 objEjerc4 = new MEjercicio4();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 4. Diseñe un programa (en consola) que solicite 3 "
                + "números por teclado y saque los números \nordenados ascendente o "
                + "descendente según lo decida el usuario.");

        //Solicitud de datos
        do {
            System.out.println("\nRecuerde no digitar números repetidos");
            System.out.print("\nDigite el primer número: ");
            objEjerc4.setNum1(objEntrada.nextInt());
            System.out.print("Digite el segundo número: ");
            objEjerc4.setNum2(objEntrada.nextInt());
            System.out.print("Digite el tercer número: ");
            objEjerc4.setNum3(objEntrada.nextInt());
        } while (objEjerc4.getNum1() == objEjerc4.getNum2() || objEjerc4.getNum1() == objEjerc4.getNum3()
                || objEjerc4.getNum2() == objEjerc4.getNum3());
        
        objEjerc4.metOperar();

        //Muestra de resultados: 
        do {
            System.out.println("\n----- MENÚ DE ORDENAMIENTO -----\n");
            System.out.println("1. Ascendente");
            System.out.println("2. Descendente");
            System.out.println("3. Salir");
            System.out.print("\nDigite una opción del menú: ");
            objEjerc4.setMenu(objEntrada.nextInt());

            //Selección del menú
            switch (objEjerc4.getMenu()) {
                case 1:
                    System.out.print("\nOrden ascendente: ");
                    System.out.println(objEjerc4.getNum1() + " - " + objEjerc4.getNum2() 
                            + " - " + objEjerc4.getNum3());
                    break;
                case 2:
                    System.out.print("\nOrden descendente: ");
                    System.out.println(objEjerc4.getNum3() + " - " + objEjerc4.getNum2() 
                            + " - " + objEjerc4.getNum1());
                    break;
            }
            //Repite el menú hasta que sea menú sea diferente de 1 o 2    
        } while (objEjerc4.getMenu() == 1 || objEjerc4.getMenu() == 2);
    }    
}
