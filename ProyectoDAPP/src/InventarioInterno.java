public class InventarioInterno {
    private int fila;
    private String nomProducto;
    private int cantoidad;
    private int precioCompra;
    private int precioVenta;

    public InventarioInterno() {
    }

    public InventarioInterno(int fila, String nomProducto, int cantoidad, int precioCompra, int precioVenta) {
        this.fila = fila;
        this.nomProducto = nomProducto;
        this.cantoidad = cantoidad;
        this.precioCompra = precioCompra;
        this.precioVenta = precioVenta;
    }

    public int getfila() {
        return fila;
    }

    public void setfila(int fila) {
        this.fila = fila;
    }

    public String getNomProducto() {
        return nomProducto;
    }

    public void setNomProducto(String nomProducto) {
        this.nomProducto = nomProducto;
    }

    public int getCantoidad() {
        return cantoidad;
    }

    public void setCantoidad(int cantoidad) {
        this.cantoidad = cantoidad;
    }

    public int getPrecioCompra() {
        return precioCompra;
    }

    public void setPrecioCompra(int precioCompra) {
        this.precioCompra = precioCompra;
    }

    public int getPrecioVenta() {
        return precioVenta;
    }

    public void setPrecioVenta(int precioVenta) {
        this.precioVenta = precioVenta;
    }
}
