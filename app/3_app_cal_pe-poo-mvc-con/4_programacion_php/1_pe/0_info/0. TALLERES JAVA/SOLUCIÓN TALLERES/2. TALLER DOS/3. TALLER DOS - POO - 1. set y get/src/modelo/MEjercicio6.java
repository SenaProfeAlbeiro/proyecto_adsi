package modelo;

public class MEjercicio6 {
    
    //Declaración y creación de objetos
    int[] vector = new int[10];

    //Declaración de variables y asignación de valores
    int aux;

    public MEjercicio6() {
    }

    public int[] getVector() {
        return vector;
    }

    public void setVector(int[] vecGlobal) {
        this.vector = vecGlobal;
    }

    public int getAux() {
        return aux;
    }

    public void setAux(int aux) {
        this.aux = aux;
    }

    public void metOrdenar() {
        for (int i = 0; i < 9; i++) {
            for (int j = 0; j < 9; j++) {
                if (vector[j] >= vector[j + 1]) {
                    aux = vector[j];
                    vector[j] = vector[j + 1];
                    vector[j + 1] = aux;
                }
            }
        }
    }
}
