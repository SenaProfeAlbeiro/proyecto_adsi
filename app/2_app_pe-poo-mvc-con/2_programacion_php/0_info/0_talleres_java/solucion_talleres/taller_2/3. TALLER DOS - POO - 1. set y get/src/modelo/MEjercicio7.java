package modelo;

public class MEjercicio7 {
    
    //Creación de objetos    
    int[] vector;
    

    //Declaración de variables y asignación de valores
    int cant, aux, menu;

    public MEjercicio7() {
    }

    public int[] getVector() {
        return vector;
    }

    public void setVector(int[] vecGlobal) {
        this.vector = vecGlobal;
    }

    public int getCant() {
        return cant;
    }

    public void setCant(int cant) {
        vector = new int[cant];
        this.cant = cant;
    }

    public int getAux() {
        return aux;
    }

    public void setAux(int aux) {
        this.aux = aux;
    }

    public int getMenu() {
        return menu;
    }

    public void setMenu(int menu) {
        this.menu = menu;
    }
    
    public void metOrdenar() {
        
        for (int i = 0; i < vector.length - 1; i++) {
            for (int j = 0; j < vector.length - 1; j++) {
                if (vector[j] >= vector[j + 1]) {
                    aux = vector[j];
                    vector[j] = vector[j + 1];
                    vector[j + 1] = aux;
                }
            }
        }
    }
}
