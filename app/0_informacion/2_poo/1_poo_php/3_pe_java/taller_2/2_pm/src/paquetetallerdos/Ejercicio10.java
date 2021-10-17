package paquetetallerdos;

import java.util.Scanner;

public class Ejercicio10 {

    //Creación de objetos    
    String[][] matrizUnoGlobal = new String[11][4];
    String[][] matrizDosGlobal = new String[11][7];

    //Declaración de variables y asignación de valores
    int art = 0, cant = 0, contArt = 0;
    double vt = 0, tap = 0;    
    char otroArt;

    public void metPrincipalEjercicio10() {
        
        //Creación de objetos
    Scanner objEntrada = new Scanner(System.in);
    String[][] matrizUno = new String[11][4];
    String[][] matrizDos = new String[11][7];

    //Declaración de variables y asignación de valores
    int art = 0, 
            cant = 0, 
            contArt = 0;
    double vt = 0, 
            tap = 0;
    char otroArt;
        //Descripción del ejercicio
        System.out.println("\nEjercicio 10. Diseñe un programa (en consola) con 2 matrices, "
                + "la primera de 11 por 4 con 10 productos con el ID, \nnombre de producto, "
                + "precio unidad, y si tiene o no IVA, la segunda se debe llenar dinámicamente, "
                + "debe ser de 11 \npor 7 con el ítem, ID, nombre producto, cantidad valor unidad, "
                + "IVA, valor total. Se creara una factura el programa \nsolicitara en consola que "
                + "digite el id del producto que desea llevar, luego la cantidad y si desea llevar "
                + "otro \nproducto, puede llevar hasta 10 productos el usuario, luego imprimirá la "
                + "factura.\n");
        
        //Llenar la Matriz Uno para mostrar los artículos a seleccionar
        metInMatGlbUno();
        matrizUno = getMatrizGlobalUno();
        metInMatGlbDos();
        
       
        
        //Controla la selección de todos los pedidos
        for (int i = 1; i < 11; i++) {
             //Mostrar en pantalla la Matriz Uno
            System.out.println("\n        BIENVENIDOS A LA TIENDITA EL CHAVO");
            System.out.println("        __________________________________");
            for (int k = 0; k < 11; k++) {
                System.out.println("");
                for (int j = 0; j < 4; j++) {
                    System.out.print("\t" + (matrizUno[k][j])); // \t = Tabulaciones
                }
            }
            System.out.println("");
            //Valida la existencia del artículo que desea llevar (de 1 a 10)
            do {
                System.out.print("\nNo. Artículo:   ");
                art = objEntrada.nextInt();
                setArt(art);
                if (getArt() > 10 || getArt() < 1) {
                    System.out.println("\nOpcion errada");
                }
            } while (getArt() > 10 || getArt() < 1);

            //Valida la cantidad de artículos que desea llevar, máximo 10 artículos
            do {
                System.out.print("Cantidad:       ");
                cant = objEntrada.nextInt();
                setCant(cant);                
                
                if ((getCant() + getCantArt()) > 10 || getCant() < 1) {
                    System.out.println("\nEscribió: " + getCant() + " artículos y lleva acumulados " + getCantArt());
                    System.out.println("o tal vez la cantidad es negativa\n");
                }
//                if (getCantArt() > 10) {
//                    System.out.println("\nLa cantidad de artículos supera los 10");
//                }                
            } while ((getCant() > 11 || getCant() < 1) || (getCant() + getCantArt()) > 10);

            metContArt();            
            //Almacena los artículos y cantidades seleccionadas en la matriz Dos            
            
            matrizDos = getMatrizGlobalDos();            
            for (int j = 1; j < 11; j++) {
                if (getArt() == Integer.parseInt(matrizUno[j][0])) {
                    matrizDos[i][1] = matrizUno[j][0];
                    matrizDos[i][2] = matrizUno[j][1];
                    matrizDos[i][3] = "   " + getCant() + "\t"; //Cantidad de productos mas un espacio y tabulación
                    matrizDos[i][4] = matrizUno[j][2];
                    matrizDos[i][5] = matrizUno[j][3];
                    setMatrizGlobalDos(matrizDos);
                    metOpera(i);
                    matrizDos[i][6] = "" + getVt();
                    setMatrizGlobalDos(matrizDos);                    
                }
            }

            //Pregunta si desea seleccionar otro artículo
            System.out.print("\nDesea llevar otro articulo marque 's' de lo contrario otra letra: ");
            otroArt = objEntrada.next().toLowerCase().charAt(0);
            setOtroArt(otroArt);
            if ('s' != getOtroArt() || getCantArt() >= 10) {
                i = i + 10;
            }

        }
        //Imprime la MatrizDos, es decir, la Factura
        for (int i = 0; i < 11; i++) {
            System.out.println("");
            for (int j = 0; j < 7; j++) {
                System.out.print("\t" + (matrizDos[i][j]));
            }
        }
        System.out.println("");
        System.out.println("                                                    Valor Total a Pagar " + getTap());
    }
    
    public void setArt(int art){
        this.art = art;
    }
    
    public int getArt(){
        return art;
    }
    
    public void setCant(int cant){
        this.cant = cant;
    }
    
    public int getCant(){
        return cant;
    }
    
    public void metContArt(){
        contArt = contArt + cant;       
    }
    
    public int getCantArt(){
        return contArt;
    }
    
    public double getVt(){        
        return vt;
    }
    
    public void setOtroArt(char otroArt){
        this.otroArt = otroArt;
    }
    
    public char getOtroArt(){     
        return otroArt;
    }
    
    public double getTap(){        
        for (int i = 1; i < 11; i++) {
            if (!"0".equalsIgnoreCase(matrizDosGlobal[i][6])) {
                tap = tap + Double.parseDouble(matrizDosGlobal[i][6]);                
            }
        }
        return tap;
    }
    
    public void metInMatGlbUno() {
        matrizUnoGlobal[0][0]="ID"; matrizUnoGlobal[0][1]="Nombre    ";matrizUnoGlobal[0][2]="Val/U";matrizUnoGlobal[0][3]="Iva";
        matrizUnoGlobal[1][0]="1"; matrizUnoGlobal[1][1]="Arroz L ";  matrizUnoGlobal[1][2]="2500"; matrizUnoGlobal[1][3]="no";
        matrizUnoGlobal[2][0]="2"; matrizUnoGlobal[2][1]="Azucar L";  matrizUnoGlobal[2][2]="1800"; matrizUnoGlobal[2][3]="si";
        matrizUnoGlobal[3][0]="3"; matrizUnoGlobal[3][1]="Sal L   ";  matrizUnoGlobal[3][2]="900";  matrizUnoGlobal[3][3]="si";
        matrizUnoGlobal[4][0]="4"; matrizUnoGlobal[4][1]="cafe L  ";  matrizUnoGlobal[4][2]="4000"; matrizUnoGlobal[4][3]="si";
        matrizUnoGlobal[5][0]="5"; matrizUnoGlobal[5][1]="panela  ";  matrizUnoGlobal[5][2]="800";  matrizUnoGlobal[5][3]="no";
        matrizUnoGlobal[6][0]="6"; matrizUnoGlobal[6][1]="chocolat";  matrizUnoGlobal[6][2]="3200"; matrizUnoGlobal[6][3]="si";
        matrizUnoGlobal[7][0]="7"; matrizUnoGlobal[7][1]="huevos  ";  matrizUnoGlobal[7][2]="250";  matrizUnoGlobal[7][3]="no";
        matrizUnoGlobal[8][0]="8"; matrizUnoGlobal[8][1]="leche   ";  matrizUnoGlobal[8][2]="3800"; matrizUnoGlobal[8][3]="no";
        matrizUnoGlobal[9][0]="9"; matrizUnoGlobal[9][1]="aceite L";  matrizUnoGlobal[9][2]="10000";matrizUnoGlobal[9][3]="si";
        matrizUnoGlobal[10][0]="10";matrizUnoGlobal[10][1]="gaseosa "; matrizUnoGlobal[10][2]="3000";matrizUnoGlobal[10][3]="si";
    }
    
    public void metInMatGlbDos(){
        //llenar los nombres de las columnas matrizDos[0][0:6]
        matrizDosGlobal[0][0]="Item";   matrizDosGlobal[0][1]="ID"; matrizDosGlobal[0][2]="Nombre P";matrizDosGlobal[0][3]="Cantidad";
        matrizDosGlobal[0][4]="Valor U";matrizDosGlobal[0][5]="IVA";matrizDosGlobal[0][6]="Valor T";
        
        for (int i = 1; i < 11 ; i++) {
            for (int j = 1; j < 7 ; j++) {
                matrizDosGlobal[i][j] = "0";                
            }
        }
        //llenar con los números las columna matrizDos[0:10][0]
        matrizDosGlobal[1][0]="1";matrizDosGlobal[2][0]="2";matrizDosGlobal[3][0]="3";matrizDosGlobal[4][0]="4";matrizDosGlobal[5][0]="5";
        matrizDosGlobal[6][0]="6";matrizDosGlobal[7][0]="7";matrizDosGlobal[8][0]="8";matrizDosGlobal[9][0]="9";matrizDosGlobal[10][0]="10";
    }
    
    public void setMatrizGlobalUno(String[][] matrizLocalUno){
        this.matrizUnoGlobal = matrizLocalUno;
    }
    
    public String[][] getMatrizGlobalUno() {
        return matrizUnoGlobal;
    }
    
    public void metOpera(int i) {

        if ("si".equals(matrizUnoGlobal[i][3])) {
            vt = cant * (Integer.parseInt(matrizUnoGlobal[i][2])) * 1.16; //Convierte String a Entero
        } else {
            vt = cant * (Integer.parseInt(matrizUnoGlobal[i][2]));
        }
    }
    
    public void setMatrizGlobalDos(String[][] matrizLocalDos){
        this.matrizDosGlobal = matrizLocalDos;
    }
    
    public String[][] getMatrizGlobalDos() {
        return matrizDosGlobal;
    }
    
}
