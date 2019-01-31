import java.sql.SQLException;

public class Main {
    public static void main(String[] args){
      Conexion con = new Conexion();

        try {
            //con.muestraSelect();
            con.innerJoin();
            con.close();
            System.out.println("Deveria pintar algo");

        }catch (SQLException e) {
            System.out.println(e);

        }

    }
}
