package modelo;

public class MEjercicio7 {
    
    //Creación de objetos
    private String art;

    //Declaración de variables y asignación de valores
    private double vrUnid, total, totalParcial, totalPagar, iva, acumIva;
    char canasta, cargar, volver;
    int cant;

    public MEjercicio7() {
    }

    public String getArt() {
        return art;
    }

    public void setArt(String art) {
        this.art = art;
    }

    public double getVrUnid() {
        return vrUnid;
    }

    public void setVrUnid(double vrUnid) {
        this.vrUnid = vrUnid;
    }

    public double getTotal() {
        return total;
    }

    public void setTotal(double total) {
        this.total = total;
    }

    public double getTotalParcial() {
        return totalParcial;
    }

    public void setTotalParcial(double totalParcial) {
        this.totalParcial = totalParcial;
    }

    public double getTotalPagar() {
        return totalPagar;
    }

    public void setTotalPagar(double totalPagar) {
        this.totalPagar = totalPagar;
    }

    public double getIva() {
        return iva;
    }

    public void setIva(double iva) {
        this.iva = iva;
    }

    public double getAcumIva() {
        return acumIva;
    }

    public void setAcumIva(double acumIva) {
        this.acumIva = acumIva;
    }

    public char getCanasta() {
        return canasta;
    }

    public void setCanasta(char canasta) {
        this.canasta = canasta;
    }

    public char getCargar() {
        return cargar;
    }

    public void setCargar(char cargar) {
        this.cargar = cargar;
    }

    public int getCant() {
        return cant;
    }

    public void setCant(int cant) {
        this.cant = cant;
    }

    public char getVolver() {
        return volver;
    }

    public void setVolver(char volver) {
        this.volver = volver;
    }
    
    //Método para procesar: Total parcial     
    public double getTlParcial() {
        totalParcial = (vrUnid * cant);
        return totalParcial;
    }

    //Método para procesar: Total parcial, con o sin IVA     
    public double getObtIva() {
        if (canasta == 's') {
            iva = 0;
        } else {
            iva = (totalParcial * 0.16);
        }
        return iva;
    }

    //Método para procesar: Cargar el artículo, si o no
    public void cargarArt(char cargArt) {
        if (cargArt == 's') {
            //Proceso de acumulación precio total e iva
            total = total + totalParcial;
            acumIva = acumIva + iva;
            iva = 0;
        }
    }

    //Método para procesar: Pagar el total
    public double getTlPagar() {
        totalPagar = total + acumIva;
        return totalPagar;
    }
    
}
