package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio3 {

    //Declaración de variables y asignación de valores
    double num1, num2, res;

    public void metPrincipalEjercicio3() {
        
        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        
        //Declaración y asignación de variables locales
        double par1 = 0, 
                par2 = 0;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 3. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los multiplique, \ncomo resultado debe mostrar en "
                + "pantalla la multiplicacion de su numero A por su numero B es resultado.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        par1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        par2 = objEntrada.nextDouble();

        //Proceso
        metSolicitar(par1, par2); // Llama al método para pasar datos: metDatos()
        metMultiplicar(); // Llama al método para sumar: metMultiplicar()

        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La multiplicación de su número " + par1 + " por su número " + par2 + " es " + metImprimir());
    }
    
    //Método para solicitar datos
    public void metSolicitar(double par1, double par2){
        this.num1 = par1;
        this.num2 = par2;
    }
    
    //Método para procesar: Sumar
    public void metMultiplicar(){
        res = num1 * num2;        
    }
    
    //Método para imprimir resultados
    public double metImprimir(){        
        return res;
    }
}
