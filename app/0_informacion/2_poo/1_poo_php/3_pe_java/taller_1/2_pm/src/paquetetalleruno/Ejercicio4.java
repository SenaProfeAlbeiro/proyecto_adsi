package paquetetalleruno;

import java.util.Scanner;

public class Ejercicio4 {
    
    //Declaración y creación de objetos
    String resTxt;
    
    //Declaración de variables y asignación de valores
    double num1, num2, res;

    public void metPrincipalEjercicio4() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);

        //Declaración y asignación de variables locales
        double par1 = 0, 
                par2 = 0;

        //Descripción del ejercicio
        System.out.println("\nEjercicio 4. Diseñe un programa (en consola) que por teclado "
                + "solicite dos números y los divida, \ncomo resultado debe mostrar en pantalla "
                + "la división de su numero A sobre su numero B es resultado; \nsi el num dos "
                + "el denominador es cero debe salir las palabras “Error división por 0.\n");

        //Solicitud de datos
        System.out.print("Digite el primer número: ");
        par1 = objEntrada.nextDouble();
        System.out.print("Digite el segundo número: ");
        par2 = objEntrada.nextDouble();

        //Proceso
        metSolicitar(par1, par2); // Llama al método para pasar datos: metDatos()            
        metDividir(); // Llama al método para sumar: metDividir()
        
        //Imprime resultados en pantalla concatenando con el método Imprimir
        System.out.println("La división de su número " + par1 + " sobre su número " + par2 + " es " + metImprimir());
    }

    //Método para solicitar datos
    public void metSolicitar(double par1, double par2) {
        this.num1 = par1;
        this.num2 = par2;
    }

    //Método para procesar: Sumar
    public void metDividir() {
        if (num2 != 0) {
            res = num1 / num2;            
            resTxt = String.valueOf(res);            
        } else {
            resTxt = "imposible, división por cero";
        }
    }

    //Método para imprimir resultados
    public String metImprimir() {
        return resTxt;
    }

}
