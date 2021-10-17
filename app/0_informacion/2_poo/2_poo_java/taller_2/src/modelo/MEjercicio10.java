package modelo;

public class MEjercicio10 {
    
    //Creación de objetos    
    String[][] matrizUno = new String[11][4];
    String[][] matrizDos = new String[11][7];

    //Declaración de variables y asignación de valores
    int art, cant, contArt;
    double vt, tap;    
    char otroArt;

    public MEjercicio10() {
    }

    public String[][] getMatrizUno() {
        return matrizUno;
    }

    public void setMatrizUno(String[][] matrizUnoGlobal) {
        this.matrizUno = matrizUnoGlobal;
    }

    public String[][] getMatrizDos() {
        return matrizDos;
    }

    public void setMatrizDos(String[][] matrizDosGlobal) {
        this.matrizDos = matrizDosGlobal;
    }

    public int getArt() {
        return art;
    }

    public void setArt(int art) {
        this.art = art;
    }

    public int getCant() {
        return cant;
    }

    public void setCant(int cant) {
        this.cant = cant;
    }

    public int getContArt() {
        return contArt;
    }

    public void setContArt(int contArt) {
        this.contArt = contArt;
    }

    public double getVt() {
        return vt;
    }

    public void setVt(double vt) {
        this.vt = vt;
    }

    public double getTap() {
        return tap;
    }

    public void setTap(double tap) {
        this.tap = tap;
    }

    public char getOtroArt() {
        return otroArt;
    }

    public void setOtroArt(char otroArt) {
        this.otroArt = otroArt;
    }    
    
    public void metContArt(){
        contArt = contArt + cant;       
    }
    
    public int getCantArt(){
        return contArt;
    }
    
    public void metTap(){        
        for (int i = 1; i < 11; i++) {
            if (!"0".equalsIgnoreCase(matrizDos[i][6])) {
                tap = tap + Double.parseDouble(matrizDos[i][6]);                
            }
        }
    }
    
    public void metInMatGlbUno() {
        matrizUno[0][0]="ID"; matrizUno[0][1]="Nombre    ";matrizUno[0][2]="Val/U";matrizUno[0][3]="Iva";
        matrizUno[1][0]="1"; matrizUno[1][1]="Arroz L ";  matrizUno[1][2]="2500"; matrizUno[1][3]="no";
        matrizUno[2][0]="2"; matrizUno[2][1]="Azucar L";  matrizUno[2][2]="1800"; matrizUno[2][3]="si";
        matrizUno[3][0]="3"; matrizUno[3][1]="Sal L   ";  matrizUno[3][2]="900";  matrizUno[3][3]="si";
        matrizUno[4][0]="4"; matrizUno[4][1]="cafe L  ";  matrizUno[4][2]="4000"; matrizUno[4][3]="si";
        matrizUno[5][0]="5"; matrizUno[5][1]="panela  ";  matrizUno[5][2]="800";  matrizUno[5][3]="no";
        matrizUno[6][0]="6"; matrizUno[6][1]="chocolat";  matrizUno[6][2]="3200"; matrizUno[6][3]="si";
        matrizUno[7][0]="7"; matrizUno[7][1]="huevos  ";  matrizUno[7][2]="250";  matrizUno[7][3]="no";
        matrizUno[8][0]="8"; matrizUno[8][1]="leche   ";  matrizUno[8][2]="3800"; matrizUno[8][3]="no";
        matrizUno[9][0]="9"; matrizUno[9][1]="aceite L";  matrizUno[9][2]="10000";matrizUno[9][3]="si";
        matrizUno[10][0]="10";matrizUno[10][1]="gaseosa "; matrizUno[10][2]="3000";matrizUno[10][3]="si";
    }
    
    public void metInMatGlbDos(){
        //llenar los nombres de las columnas matrizDos[0][0:6]
        matrizDos[0][0]="Item";   matrizDos[0][1]="ID"; matrizDos[0][2]="Nombre P";matrizDos[0][3]="Cantidad";
        matrizDos[0][4]="Valor U";matrizDos[0][5]="IVA";matrizDos[0][6]="Valor T";
        
        for (int i = 1; i < 11 ; i++) {
            for (int j = 1; j < 7 ; j++) {
                matrizDos[i][j] = "0";                
            }
        }
        //llenar con los números las columna matrizDos[0:10][0]
        matrizDos[1][0]="1";matrizDos[2][0]="2";matrizDos[3][0]="3";matrizDos[4][0]="4";matrizDos[5][0]="5";
        matrizDos[6][0]="6";matrizDos[7][0]="7";matrizDos[8][0]="8";matrizDos[9][0]="9";matrizDos[10][0]="10";
    }
    
    public void metOpera(int i) {

        if ("si".equals(matrizUno[i][3])) {
            vt = cant * (Integer.parseInt(matrizUno[i][2])) * 1.16; //Convierte String a Entero
        } else {
            vt = cant * (Integer.parseInt(matrizUno[i][2]));
        }
    }
    
}
