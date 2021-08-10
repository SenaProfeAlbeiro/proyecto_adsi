package vista;

import java.util.Scanner;
import modelo.MEjercicio9;

public class VEjercicio9 {
    
    public void metPrincipalEjercicio9() {

        //Creación de objetos
        Scanner objEntrada = new Scanner(System.in);
        MEjercicio9 objEjerc9 = new MEjercicio9();
        
        //Descripción del ejercicio
        System.out.println("\nEjercicio 9. Utilizando el método RANDOM diseñe un programa "
                + "(en consola) que de dos números aleatorios del 1 al 6 \n(como los dados), "
                + "de sacar dos números pares (1,1 o 2,2 o 3,3 o 4,4 o 5,5 o 6,6) saldrá un "
                + "mensaje en pantalla que \ndice lanzar de nuevo, de lazar en dos ocasiones "
                + "mas y de nuevo en las dos ocasiones sean pares saldrá un mensaje en "
                + "\npantalla que diga “saque una ficha”, de no sacar pares saldrá en pantalla "
                + "un mensaje fin del juego. \n(como en el juego parques).");

        do {
            //Solicitud de datos
            System.out.print("\nPara el primer lanzamiento, presione cualquier tecla y después ENTER: ");
            objEntrada.next().charAt(0);

            //Procesos            
            objEjerc9.setDado1(objEjerc9.getProcAleat());
            objEjerc9.setDado2(objEjerc9.getProcAleat());

            //Muestra de resultados
            if (objEjerc9.getDado1() == objEjerc9.getDado2()) {
                System.out.println("Ha sacado par de: " + objEjerc9.getDado1());
                System.out.print("\nPara el segundo lanzamiento, presione cualquier tecla y después ENTER: ");
                objEntrada.next().charAt(0);
                objEjerc9.setDado1(objEjerc9.getProcAleat());
                objEjerc9.setDado2(objEjerc9.getProcAleat());                
                if (objEjerc9.getDado1() == objEjerc9.getDado2()) {
                    System.out.println("Ha sacado par de: " + objEjerc9.getDado1());
                    System.out.print("\nPara el tercer lanzamiento, presione cualquier tecla y después ENTER: ");
                    objEntrada.next().charAt(0);
                    objEjerc9.setDado1(objEjerc9.getProcAleat());
                    objEjerc9.setDado2(objEjerc9.getProcAleat());                    
                    if (objEjerc9.getDado1() == objEjerc9.getDado2()) {
                        System.out.println("Ha sacado par de: " + objEjerc9.getDado1());
                        System.out.println("Saque una ficha");
                    } else {
                        System.out.println("Ha sacado " + objEjerc9.getDado1() + " y " + objEjerc9.getDado2());
                    }
                } else {
                    System.out.println("Ha sacado " + objEjerc9.getDado1() + " y " + objEjerc9.getDado2());
                }
            } else {
                System.out.println("Ha sacado " + objEjerc9.getDado1() + " y " + objEjerc9.getDado2());
            }
            System.out.print("\nCAMBIO DE JUGADOR");
            System.out.print("\nDesea intentarlo (s/n): ");
            objEjerc9.setVolver(objEntrada.next().toLowerCase().charAt(0));

        } while (objEjerc9.getVolver() == 's');
    }

    
}
