package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio2 {
    
    //Declaración y creación de objetos globales
    int[] res;
    
    //Declaración de variables y asignación de valores globales
    int num, ant = 0, post = 1, aux;

    public void metPrincipalEjercicio2() {
        
        //Declaración y creación de objetos locales
        Scanner objEntrada = new Scanner(System.in);
        int[] vector;
        
        //Declaración de variables y asignación de valores locales
        int num;
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 2. Diseñe un programa (en consola) que encuentre "
                + "x números de la sucesión de Fibonacci, \nde acuerdo al número digitado "
                + "por el usuario. \n");
        
        //Ingreso de datos
        System.out.print("Ingrese la cantidad de números de la serie Fibonacci: ");
        num = objEntrada.nextInt();
        
        //Uso de métodos
        setDatos(num);
        metOperar();
        vector = getRes(); //Paso de valores del vector global al local
        
        //Impresión de datos almacenados en el vector
        for (int i = 0; i < vector.length; i++) {
            System.out.print(vector[i] + " ");
        }
        System.out.println("");
    }

    public void setDatos(int num) {
        this.num = num;
    }

    public void metOperar() {
        res = new int[num];
        for (int i = 0; i < res.length; i++) {
            res[i] = ant;
            aux = ant + post;
            post = ant;
            ant = aux;
        }
    }

    public int[] getRes() {
        return res;
    }
}
