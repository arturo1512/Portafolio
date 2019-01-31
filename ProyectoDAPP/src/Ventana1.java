import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;

public class Ventana1 {
    private JTabbedPane tabbedPane1;
    private JPanel PanelPrincipal;
    private JTabbedPane tabbedPane2;
    private JTabbedPane tabbedPane3;
    private JTable table1;
    private JButton actualizarButton;
    private JScrollPane scroll;
    private JTabbedPane tabbedPane4;
    private JLabel imagen;
    private JTextField textIDPro;
    private JTextField textNomProducto;
    private JTextField textDescripcion;
    private JButton aceptarButtonAltas;
    private JComboBox comboBox1;
    private JLabel preComp;
    private JLabel Canti;
    private JLabel PreVenta;
    private JTextField textCantidad;
    private JTextField textCompra;
    private JTextField textVenta;
    private JButton aceptarButtonModificar;
    private JTextField textCantiEnInve;
    private JTextField textPreComEnInve;
    private JTextField textPreVentEnInve;
    private JButton eliminarButton;
    private ImageIcon ima = new ImageIcon("C:/Users/Ernesto/Documents/GitSemestre3/DAPP1/OcejoErnesto/ProyectoDAPP/src/Nutri.jpg");
    private ArrayList<Producto> pro = null;
    private ArrayList<InventarioInterno> inv = null;
    private Conexion con = new Conexion();
    private int auxActualiza;

    public Ventana1() {
        imagen.setIcon(ima);
        mostrarTabla();
        comboBox1.addItem("<selecciona producto>");
        comboBox();


        actualizarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                mostrarTabla();
                comboBox1.removeAllItems();
                comboBox1.addItem("<selecciona producto>");
                comboBox();
            }
        });
        comboBox1.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                auxActualiza = selcProducto();
            }
        });
        aceptarButtonAltas.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                insertar();
                reiniciar();
                comboBox1.removeAllItems();
                comboBox1.addItem("<selecciona producto>");
                comboBox();
            }
        });
        aceptarButtonModificar.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                actualiza(auxActualiza);
                reiniciar();
            }
        });
        eliminarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                elimina(auxActualiza);
                reiniciar();
            }
        });
    }

    /*
    Este metodo sirve para mostrar los datos
    detro de un JTable
     */
    public void mostrarTabla() {
        DefaultTableModel modTabla = new DefaultTableModel();
        Conexion cone = new Conexion();
        try {
            modTabla = cone.muestraInnerJoin();

        } catch (Exception e) {
            e.printStackTrace();
        }
        table1.setModel(modTabla);
        modTabla.fireTableDataChanged();
        scroll.setViewportView(table1);
    }

    public void comboBox() {
        int aux;
        int x = 1; //contador
        pro = new ArrayList<>();
        pro = con.listProducto();
        aux = pro.size();
        for (Producto p : pro) {
            comboBox1.addItem(p.getNomProducto());
            if (p.getIdProducto() != x) {
                textIDPro.setText((String.valueOf(x)));
            } else if (p.getIdProducto() == x) {
                textIDPro.setText((String.valueOf(x + 1)));
            }
            x++;
        }
    }

    public int selcProducto() {
        int cont = 0;
        int aux = 0;
        inv = con.listInventario();
        for (InventarioInterno in : inv) {
            if ((String.valueOf(comboBox1.getSelectedItem())).equalsIgnoreCase(in.getNomProducto())) {
                textCantidad.setText((String.valueOf(inv.get(cont).getCantoidad())));
                textCompra.setText((String.valueOf(inv.get(cont).getPrecioCompra())));
                textVenta.setText((String.valueOf(inv.get(cont).getPrecioVenta())));
                System.out.println("Entro");
                aux = cont;
            }
            cont++;
        }
        return aux + 1;
    }

    public void insertar() {
        Producto prod = new Producto();
        InventarioInterno inven = new InventarioInterno();
        int aux;
        aux = con.listInventario().size();
        try {
            prod.setIdProducto(Integer.parseInt(textIDPro.getText()));
        } catch (NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "No es un numero");
        }
        prod.setNomProducto(textNomProducto.getText());
        prod.setDescripcion(textDescripcion.getText());
        con.insertaDato(prod);
        try {
            inven.setfila(Integer.parseInt(textIDPro.getText()));
        } catch (NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "No es un numero");
        }

        inven.setNomProducto(textNomProducto.getText());
        try {
            inven.setCantoidad(Integer.parseInt(textCantiEnInve.getText()));
            inven.setPrecioCompra(Integer.parseInt(textPreComEnInve.getText()));
            inven.setPrecioVenta(Integer.parseInt(textPreVentEnInve.getText()));
        } catch (NumberFormatException e) {
        }
        con.insertaDatoInventa(inven);
    }

    public void actualiza(Integer in) {
        InventarioInterno inve = new InventarioInterno();
        int aux;
        aux = con.listInventario().size();
        try {
            inve.setCantoidad(Integer.parseInt(textCantidad.getText()));
            inve.setPrecioCompra(Integer.parseInt(textCompra.getText()));
            inve.setPrecioVenta(Integer.parseInt(textVenta.getText()));
        } catch (NumberFormatException e) {
        }
        con.modUpdate(inve, in);
    }

    public void elimina(int ax) {
        con.daleteFilaPro(ax);
        con.daleteFilaInve(ax);
    }

    public void reiniciar() {
        int aux;
        comboBox1.getItemAt(0);
        aux = con.listProducto().size();
        //textIDPro.setText((String.valueOf(aux + 1)));
        comboBox();
        textNomProducto.setText("");
        textDescripcion.setText("");
        textCantiEnInve.setText("");
        textPreComEnInve.setText("");
        textPreVentEnInve.setText("");
        textCompra.setText("");
        textCantidad.setText("");
        textVenta.setText("");
    }


    public static void main(String[] args) {
        JFrame frame = new JFrame("Ventana1");
        frame.setContentPane(new Ventana1().PanelPrincipal);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.pack();
        frame.setVisible(true);
    }
}
