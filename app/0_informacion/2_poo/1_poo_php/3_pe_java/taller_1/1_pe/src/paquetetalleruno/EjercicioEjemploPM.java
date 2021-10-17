package paquetetalleruno;

import java.util.Scanner;

public class EjercicioEjemploPM {


    //Declaración de variables Globlales o de Clase
    double num1 = 0,
            num2 = 0,
            res = 0;

    public void metPrincipalEjercicio1() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        
        //Declarar variables locales. Propias del método
        double num1, num2;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los sume, \ncomo resultado debe mostrar en pantalla "
                + "la suma de su número A más su número B es resultado.\n");
        
        //Solicitud de datos        
        System.out.print("Digite el primer número: ");
        num1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        num2 = objEntrada.nextDouble();
        
        metEntrada(num1, num2); 
        metProceso(); //Proceso        
        //metImprimir(); //Muestra de resultados
        System.out.println("La suma de su número " + num1 + " más su número " + num2 + " es " + metImprimir());
    }
    public void metEntrada(double num1, double num2) {
        this.num1 = num1;
        this.num2 = num2;
    }

    public void metProceso() {
        res = num1 + num2;
    }

    public double metImprimir() {
        return res;
    }
}
