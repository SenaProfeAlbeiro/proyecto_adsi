package paquetevector;

public class ClasePasoVector {
    
    //Declaración del vector global
    int[] vector;

    public static void main(String[] args) {
        
        //Declaración de objetos
        ClasePasoVector po = new ClasePasoVector();
        int[] vecInt;        
        int[] test;
        
        //Creación del primer vector local (tipo objeto) con 10 posiciones
        vecInt = new int[10];
        
        //Se llena el vector local
        for (int i = 0; i < vecInt.length; i++) {
            vecInt[i] = i + 1;
        }
        
        //El método recibe el primer vector local y lo pasa compo parametro
        po.recibir(vecInt);

        //El segundo vector local es llenado con el vector global
        test = po.volver();
        
        //Imprime
        for (int i = 0; i < test.length; i++) {
            System.out.println(test[i]);
        }

    }

    public void recibir(int[] vecInt) {
        //El vector global recibe los valores y las posiciones del vector local
        this.vector = vecInt;
    }
    
    public int[] volver() {
        return vector;
    }

}
