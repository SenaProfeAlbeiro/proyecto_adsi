package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio1 {
    
    //Declaración y asignación de variables globales
    double num1, num2, res;

    public void metPrincipalEjercicio1() {
        
        //Creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);        
        
        //Declaración y asignación de variables locales
        double par1 = 0, 
                par2 = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 1. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los sume, \ncomo resultado debe mostrar en pantalla "
                + "la suma de su número A más su número B es resultado.\n");

        //Solicitar datos
        System.out.print("Digite el primer número: ");
        par1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        par2 = objEntrada.nextDouble();
        
        metSolicitar(par1, par2); // Llama al método para pasar datos: metDatos()
        metSumar(); // Llama al método para sumar: metSumar()
        
        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La suma de su número " + par1 + " más su número " + par2 + " es " + metImprimir());        
    }
    
    //Método para solicitar datos
    public void metSolicitar(double par1, double par2){
        this.num1 = par1;
        this.num2 = par2;
    }
    
    //Método para procesar: Sumar
    public void metSumar(){
        res = num1 + num2;        
    }
    
    //Método para imprimir resultados
    public double metImprimir(){        
        return res;
    }
    
}
