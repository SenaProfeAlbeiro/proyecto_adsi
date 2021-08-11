package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio1 {
    
    //Declaración de variables y asignación de valores globales
    double num1 = 0, num2 = 0, res = 0;
    int menu = 0;

    public void metPrincipalEjercicio1() {
        
        //Declaración y creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);
        
        //Declaración de varialbes y asignación de valores locales
        double num1, num2;
        int menu;
        
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
        menu = objEntrada.nextInt();
        
        //Ingreso de datos
        System.out.print("\nIngrese el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Ingrese el segundo número: ");
        num2 = objEntrada.nextDouble();
        
        //Condicional que permite el paso de parámetros y el método operar si es diferente
        //De la división
        if (menu != 4) {
            //Uso de métodos
            setDatos(num1, num2, menu);
            metOperar();
        }
        
        //Ejecuta la opción registrada por el usuario
        switch (getMenu()) {
            case 1:
                System.out.println("El resultado de sumar " 
                        + getNum1() + " y " + getNum2() + " es: " + getRes());
                break;
            case 2:
                System.out.println("El resultado de la resta entre " 
                        + getNum1() + " y " + getNum2() + " es: " + getRes());
                break;
            case 3:
                System.out.println("El resultado de multiplicar " 
                        + getNum1() + " y " + getNum2() + " es: " + getRes());
                break;
            case 4:
                //valida para la división que el segundo número no sea cero
                while (num2 == 0) {
                    System.out.println("Imposible división por cero");
                    System.out.print("Digite nuevamente el número 2: ");
                    num2 = objEntrada.nextDouble();
                }
                setDatos(num1, num2, menu);
                metOperar();
                System.out.print("El resultado de dividir " 
                        + getNum1() + " y " + getNum2()); 
                System.out.printf(" es: %.2f", getRes());
                System.out.println("");
                break;
            case 5:
                System.out.print("El resultado de la raiz de " 
                        + getNum1() + " y " + getNum2()); 
                System.out.printf(" es: %.2f", getRes());
                System.out.println("");                
                break;
            case 6:
                System.out.println("El resultado de la potencia de " 
                        + getNum1() + " y " + getNum2() + " es: " + getRes());
                break;
            case 7:
                System.out.println("El resultado del porcentaje de " 
                        + getNum1() + " y " + getNum2() + " es: " + getRes());                
                System.out.println("");
                break;
            default:
                System.out.println("Opción incorrecta");
        }

    }
    
    public void setDatos(double par1, double par2, int menu) {
        this.num1 = par1;
        this.num2 = par2;
        this.menu = menu;
    }

    public double getNum1() {
        return num1;
    }

    public double getNum2() {
        return num2;
    }
    
    public int getMenu(){
        return menu;
    }
    
    public void metOperar() {
        switch (menu) {
            case 1:
                res = num1 + num2;
                break;
            case 2:
                res = num1 - num2;
                break;
            case 3:
                res = num1 * num2;
                break;
            case 4:
                res = num1 / num2;
                break;
            case 5:
                res = Math.pow(num1, (1 / num2));
                break;
            case 6:
                res = Math.pow(num1, num2);
                break;
            case 7:
                res = (num1 * num2) / 100;
                break;
        }
    }
    
    public double getRes() {
        return res;
    }

}
