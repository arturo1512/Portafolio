import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.sql.*;
import java.util.ArrayList;
import java.util.Properties;
import java.util.Vector;

public class Conexion {

    private static String driver = "com.mysql.jdbc.Driver";
    private static String dataBase = "proyectodapp";
    private static String user = "root";
    private static String password = "sobrevivalgame";
    private static String dataBaseURL = "jdbc:mysql://localhost:3306/";
    private static String dataBaseURLFinal = dataBaseURL + dataBase;
    private static PreparedStatement prst = null;
    private static ResultSet resul = null;
    private static Connection cone = null;

    public Conexion() {
    }
    public Connection open() {
        try {
            Properties props = new Properties();
            props.put("user", user);
            props.put("password", password);
            cone = DriverManager.getConnection(dataBaseURLFinal, props);
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, ex, "Error en la conexión a la base de datos: " + ex.getMessage(), JOptionPane.ERROR_MESSAGE);
            cone = null;
        } catch (Exception ex) {
            JOptionPane.showMessageDialog(null, ex, "Error en la conexión a la base de datos: " + ex.getMessage(), JOptionPane.ERROR_MESSAGE);
            cone = null;
        } finally {
            //Muestra Menseje en un dialogo
            //JOptionPane.showMessageDialog(null, "Conexión Exitosa");
            return cone;
        }
    }
    public void close() throws SQLException {
        if (cone != null) {
            JOptionPane.showMessageDialog(null, "Conexión Cerrada");
            cone.close();
        }
    }
    public ArrayList<InventarioInterno> listInventario() {
        cone = open();
        ArrayList<InventarioInterno> listInvent = null;
        prst = null;
        resul = null;
        String sql = "SELECT fila, nomProducto, Cantidad, PrecioCompra, PrecioVencta FROM InventarioInterno";
        try {
            prst = cone.prepareStatement(sql);
            resul = prst.executeQuery();
            listInvent = new ArrayList<>();
            while (resul.next()) {
                InventarioInterno inv = new InventarioInterno();
                inv.setfila(resul.getInt(1));
                inv.setNomProducto(resul.getString(2));
                inv.setCantoidad(resul.getInt(3));
                inv.setPrecioCompra(resul.getInt(4));
                inv.setPrecioVenta(resul.getInt(5));
                listInvent.add(inv);
            }
        }catch (SQLException e) {
            System.out.println("Error: " + e.getMessage());
        }
        return listInvent;
    }

    public void muestraSelect() throws SQLException {
        cone = open();
        prst = null;
        resul = null;
        String sql;
        //sql = "select NomProducto, Cantidad, PrecioCompra, PrecioVencta from InventarioInterno";
        sql = "SELECT NomProducto, Cantidad, PrecioCompra, PrecioVencta FROM InventarioInterno";
        prst = cone.prepareStatement(sql);
        //ResultSet rs = prst.executeQuery(sql);
        resul = prst.executeQuery(sql);
        while(resul.next()) {
            //del Rresulset va a una variable
            //int idInventario = resul.getInt("idInventario");
            String nomProducto = resul.getString("NomProducto");
            int cantoidad = resul.getInt("Cantidad");
            int precioCompra = resul.getInt("PrecioCompra");
            int precioVenta = resul.getInt("PrecioVencta");
            //Se imprime los resultados
           // System.out.print("idProducto: " + idInventario + ", ");
            System.out.print("NombrePro: " + nomProducto + ", ");
            System.out.print("Canti: " + cantoidad + ", ");
            System.out.print("PreCompra: " + precioCompra + ", ");
            System.out.print("PreVenta: " + precioVenta +"\n");
        }
    }


    public void innerJoin() throws SQLException {
        cone = open();
        prst = null;
        resul = null;
        String sql;
        //sql = "select NomProducto, Cantidad, PrecioCompra, PrecioVencta from InventarioInterno";
        sql = "select pr.NomProducto, pr.Descripcion, inv.Cantidad, inv.PrecioCompra, inv.PrecioVencta FROM producto as pr inner join inventariointerno as inv on inv.idInventario = pr.idProducto";
        prst = cone.prepareStatement(sql);
        //ResultSet rs = prst.executeQuery(sql);
        resul = prst.executeQuery(sql);
        while(resul.next()) {
            //del Rresulset va a una variable
            //int idInventario = resul.getInt("idInventario");
            String nomProducto = resul.getString("NomProducto");
            String Descripcion = resul.getString("Descripcion");
            int cantoidad = resul.getInt("Cantidad");
            int precioCompra = resul.getInt("PrecioCompra");
            int precioVenta = resul.getInt("PrecioVencta");
            //Se imprime los resultados
            // System.out.print("idProducto: " + idInventario + ", ");
            System.out.print("NombrePro: " + nomProducto + ", ");
            System.out.print("Descripcion: " + Descripcion + ", ");
            System.out.print("Canti: " + cantoidad + ", ");
            System.out.print("PreCompra: " + precioCompra + ", ");
            System.out.print("PreVenta: " + precioVenta +"\n");
        }
    }
    public DefaultTableModel muestraInnerJoin() throws SQLException {
        cone = open();
        DefaultTableModel tablaModelo = new DefaultTableModel();
        prst = null;
        resul = null;
        String sql;
        sql = "select pr.idProducto, pr.NomProducto, pr.Descripcion, inv.Cantidad, inv.PrecioCompra, inv.PrecioVencta FROM producto as pr inner join inventariointerno as inv on inv.NomProducto = pr.NomProducto";
        prst = cone.prepareStatement(sql);
        //ResultSet rs = prst.executeQuery(sql);
        resul = prst.executeQuery(sql);
        tablaModelo = bilTable(resul);
        resul.close();
        cone.close();


        return tablaModelo;
    }

    public static DefaultTableModel bilTable(ResultSet rs) throws SQLException {
        ResultSetMetaData metaData = rs.getMetaData(); //tarae el numero de columnas
        Vector<String> columName = new Vector<>();
        int columCount = metaData.getColumnCount();
        for(int column = 1; column <= columCount; column++) {
            columName.add(metaData.getColumnName(column));
        }
        Vector<Vector<Object>> data = new Vector<>();
        while (rs.next()) {
            Vector<Object> vector = new Vector<>();
            for(int columnIndex = 1; columnIndex <= columCount; columnIndex++) {
                vector.add(rs.getObject(columnIndex));
            }
            data.add(vector);
        }
        return new DefaultTableModel(data, columName);
    }

    public ArrayList<Producto> listProducto() {
        cone = open();
        ArrayList<Producto> listPro = null;
        prst = null;
        resul = null;
        String sql = "SELECT * FROM Producto";
        try {
            prst = cone.prepareStatement(sql);
            resul = prst.executeQuery();
            listPro = new ArrayList<>();
            while (resul.next()) {
                Producto pro = new Producto();
                pro.setIdProducto(resul.getInt(1));
                pro.setNomProducto(resul.getString(2));
                pro.setDescripcion(resul.getString(3));
                listPro.add(pro);
            }
        }catch (SQLException e) {
            System.out.println("Error: " + e.getMessage());
        }
        return listPro;
    }
    public String insertaDato(Producto pro) {
        prst = null;
        String resutl = null;
        String sql = "INSERT INTO producto VALUES (?,?,?)";
        try {
            prst = cone.prepareStatement(sql);
            prst.setInt(1,pro.getIdProducto());
            prst.setString(2, pro.getNomProducto());
            prst.setString(3,pro.getDescripcion());
            int x = prst.executeUpdate();
            if(x == 1) {
                resutl = "Se inserto corrctamente";
                //JOptionPane.showMessageDialog(null, "Producto Insertado Correctamente");

            }
        }catch (Exception e) {
            System.out.println("Error al Insertar datos" + e.getMessage());
            resutl = e.getMessage();
        }
        return resutl;
    }
    public String insertaDatoInventa(InventarioInterno inv) {
        prst = null;
        String resutl = null;
        String sql = "INSERT INTO InventarioInterno VALUES (?,?,?,?,?)";
        try {
            prst = cone.prepareStatement(sql);
            prst.setInt(1,inv.getfila());
            prst.setString(2, inv.getNomProducto());
            prst.setInt(3,inv.getCantoidad());
            prst.setInt(4,inv.getPrecioCompra());
            prst.setInt(5, inv.getPrecioVenta());
            int x = prst.executeUpdate();
            if(x == 1) {
                resutl = "Se inserto corrctamente";
                JOptionPane.showMessageDialog(null, "Producto Insertado Correctamente");

            }
        }catch (Exception e) {
            System.out.println("Error al Insertar datos" + e.getMessage());
            resutl = e.getMessage();
        }
        return resutl;
    }
    public String modUpdate(InventarioInterno inv ,Integer id) {
        prst = null;
        String result = null;
        String sql = "update InventarioInterno set Cantidad = ?, PrecioCompra = ?, PrecioVencta = ? where fila = ?";
        try {
            prst = cone.prepareStatement(sql);
            prst.setInt(1,inv.getCantoidad());
            prst.setInt(2,inv.getPrecioCompra());
            prst.setInt(3, inv.getPrecioVenta());
            prst.setInt(4, id);
            int x = prst.executeUpdate();

            if (x == 1) {
                result = "Se Actualizo Correctamente";
                JOptionPane.showMessageDialog(null,"Se Actualizo Correctamente");
            }
        }catch (Exception e) {
            System.out.println("Error " + e.getMessage());
            result = e.getMessage();
        }
        return result;
    }
    public String daleteFilaPro(Integer id) {
        prst = null;
        String result = null;
        String sql = "delete from Producto where idProducto = ?";
        try {
            prst = cone.prepareStatement(sql);
            prst.setInt(1,id);
            prst.executeUpdate();

        }catch (Exception e) {
            System.out.println("Error " + e.getMessage());
            result = e.getMessage();
        }
        return result;
    }
    public String daleteFilaInve(Integer id) {
        prst = null;
        String result = null;
        String sql = "delete from InventarioInterno where fila = ?";
        try {
            prst = cone.prepareStatement(sql);
            prst.setInt(1,id);
            int x = prst.executeUpdate();
            if (x == 1) {
                result = "Producto Eliminado";
                JOptionPane.showMessageDialog(null,"Producto Eliminado");
            }

        }catch (Exception e) {
            System.out.println("Error " + e.getMessage());
            result = e.getMessage();
        }
        return result;
    }



}
