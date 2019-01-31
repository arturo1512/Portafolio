public class Producto {
    private int idProducto;
    private String nomProducto;
    private String Descripcion;

    public Producto() {
    }

    public Producto(String nomProducto, String descripcion) {

        this.nomProducto = nomProducto;
        Descripcion = descripcion;

    }

    public int getIdProducto() {
        return idProducto;
    }

    public void setIdProducto(int idProducto) {
        this.idProducto = idProducto;
    }

    public String getNomProducto() {
        return nomProducto;
    }

    public void setNomProducto(String nomProducto) {
        this.nomProducto = nomProducto;
    }

    public String getDescripcion() {
        return Descripcion;
    }

    public void setDescripcion(String descripcion) {
        Descripcion = descripcion;
    }


    @Override
    public String toString() {
        return "Producto{" +
                "idProducto=" + idProducto +
                ", nomProducto='" + nomProducto + '\'' +
                ", Descripcion='" + Descripcion + '\'' +
                '}';
    }
}


