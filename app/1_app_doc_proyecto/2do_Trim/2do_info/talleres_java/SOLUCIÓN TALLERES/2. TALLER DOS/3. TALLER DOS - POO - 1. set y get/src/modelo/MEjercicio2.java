package modelo;

public class MEjercicio2 {
    
    //Declaración y creación de objetos globales
    private int[] res;
    
    //Declaración de variables y asignación de valores globales
    private int num, ant, post, aux;

    public MEjercicio2() {
        ant = 0;
        post = 1;
    }

    public int[] getRes() {
        return res;
    }

    public void setRes(int[] res) {
        this.res = res;
    }

    public int getNum() {
        return num;
    }

    public void setNum(int num) {
        this.num = num;
    }

    public int getAnt() {
        return ant;
    }

    public void setAnt(int ant) {
        this.ant = ant;
    }

    public int getPost() {
        return post;
    }

    public void setPost(int post) {
        this.post = post;
    }

    public int getAux() {
        return aux;
    }

    public void setAux(int aux) {
        this.aux = aux;
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
}
