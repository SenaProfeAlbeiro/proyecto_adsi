package vista;

import java.math.BigInteger;
import java.util.Scanner;
import modelo.MEjercicio3;

public class VEjercicio3 {

    public void metPrincipalEjercicio3() {

        //Declaración y creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio3 objEjerc3 = new MEjercicio3();

        //Descripción del ejercicio
        System.out.println("Ejercicio 3. Programa que encuentre el factorial "
                + "de un número de 0 al 20 (150), si el número es mayor debe salir "
                + "el factorial es infinito.");

        //Forma normal de hallar el factorial
        do {
            //Solicitud de datos
            System.out.print("\nIngrese el número factorial: ");
            objEjerc3.setNum(objEntrada.nextInt());

            //Imprime el factorial de un número
            if (objEjerc3.getNum() >= 0 && objEjerc3.getNum() <= 20) {
                objEjerc3.metOperar();
                System.out.print("El factorial es: " + objEjerc3.getFactorial());
            } else {
                System.out.println("El factorial (" + objEjerc3.getNum() + ") es negativo o tiende a infinito");
            }
        } while (objEjerc3.getNum() <= 0 || objEjerc3.getNum() > 20);
        System.out.println("");

        //Forma alternativa de hallar el factorial (números extremadamente grandes)
//        do {
//            System.out.print("\nIngrese el número factorial: ");
//            objEjerc3.setNum(objEntrada.nextInt());
//            
//            if (objEjerc3.getNum() > 0) {
//                objEjerc3.metOperar2();
//                System.out.println("El factorial es: " + objEjerc3.getFactorialBig());
//            } else {
//                System.out.println("El factorial debe ser diferente de cero y positivo");
//            }
//        } while (objEjerc3.getNum() <= 0);        
    }

   
}
