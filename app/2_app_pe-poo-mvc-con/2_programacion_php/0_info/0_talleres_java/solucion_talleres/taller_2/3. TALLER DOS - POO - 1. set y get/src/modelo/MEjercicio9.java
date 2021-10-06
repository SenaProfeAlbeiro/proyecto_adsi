package modelo;

public class MEjercicio9 {
    //Creación de objetos    
    String[][] matrizGlobal = new String[6][6];

    public MEjercicio9() {
    }

    public String[][] getMatrizGlobal() {
        return matrizGlobal;
    }

    public void setMatrizGlobal(String[][] matrizGlobal) {
        this.matrizGlobal = matrizGlobal;
    }

    public void metInMatGlb() {
        matrizGlobal[0][0] = "Nro";
        matrizGlobal[0][1] = "Nombre";
        matrizGlobal[0][2] = "Sexo";
        matrizGlobal[0][3] = "Cumple Años";
        matrizGlobal[0][4] = "EstCiv";
        matrizGlobal[0][5] = "Teléfono";
    }
}
