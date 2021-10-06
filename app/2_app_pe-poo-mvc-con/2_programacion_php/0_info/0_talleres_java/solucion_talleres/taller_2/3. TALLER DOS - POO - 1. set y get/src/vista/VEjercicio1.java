package vista;

import java.util.Scanner;
import modelo.MEjercicio1;

public class VEjercicio1 {
    
    public void metPrincipalEjercicio1() {
        
        //Declaración y creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio1 objEjerc1 = new MEjercicio1();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que permita hacer "
                + "las operaciones suma, resta, multiplicación, \ndivisión, raiz, potencia y porcentaje, "
                + "con un menú utilizando el switch.\n");
        
        //Muestra en pantalla las opciones del menú Calculadora
        System.out.println("----- MENÚ CALCULADORA -----\n");
        System.out.println("1. Sumar");
        System.out.println("2. Restar");
        System.out.println("3. Multiplicar");
        System.out.println("4. Dividir");
        System.out.println("5. Raíz");
        System.out.println("6. Potencia");
        System.out.println("7. Porcentaje");
        System.out.print("\nSeleccione una opción del menú: ");
        objEjerc1.setMenu(objEntrada.nextInt());
        
        //Ingreso de datos
        if (objEjerc1.getMenu() <= 7 && objEjerc1.getMenu() > 0) {
            System.out.print("\nIngrese el primer número:  ");
            objEjerc1.setNum1(objEntrada.nextDouble());
            System.out.print("Ingrese el segundo número: ");
            objEjerc1.setNum2(objEntrada.nextDouble());            
        }
        
        //Condicional que permite el paso de parámetros y el método operar si es diferente
        //De la división
        if (objEjerc1.getMenu() != 4) {
            //Uso de métodos            
            objEjerc1.metOperar();
        }
        
        //Ejecuta la opción registrada por el usuario
        switch (objEjerc1.getMenu()) {
            case 1:
                System.out.println("El resultado de sumar " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2() 
                        + " es: " + objEjerc1.getRes());
                break;
            case 2:
                System.out.println("El resultado de la resta entre " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2() 
                        + " es: " + objEjerc1.getRes());
                break;
            case 3:
                System.out.println("El resultado de multiplicar " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2() 
                        + " es: " + objEjerc1.getRes());
                break;
            case 4:
                //valida para la división que el segundo número no sea cero
                while (objEjerc1.getNum2() == 0) {
                    System.out.println("Imposible división por cero");
                    System.out.print("Digite nuevamente el número 2: ");
                    objEjerc1.setNum2(objEntrada.nextDouble());
                }
                objEjerc1.metOperar();
                System.out.print("El resultado de dividir " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2()); 
                System.out.printf(" es: %.2f", objEjerc1.getRes());
                System.out.println("");
                break;
            case 5:
                System.out.print("El resultado de la raiz de " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2()); 
                System.out.printf(" es: %.2f", objEjerc1.getRes());
                System.out.println("");                
                break;
            case 6:
                System.out.println("El resultado de la potencia de " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2() 
                        + " es: " + objEjerc1.getRes());
                break;
            case 7:
                System.out.println("El resultado del porcentaje de " 
                        + objEjerc1.getNum1() + " y " + objEjerc1.getNum2() 
                        + " es: " + objEjerc1.getRes());
                System.out.println("");
                break;
            default:
                System.out.println("\nOpción incorrecta");
        }
    }
}
