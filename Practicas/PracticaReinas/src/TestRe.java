import javax.swing.*;
import java.awt.*;
import java.awt.event.KeyEvent;
import java.util.ArrayList;

public class TestRe extends JFrame {
    JButton[][] botones = new JButton[8][8];
    int[][] arreglo = new int[8][8];
    JMenuBar Barra;
    JMenu Menu;
    JMenuItem salir, solucion;
    int[] arre = new int[7];
    String incrementa= "";
    int in = 1;


    public static void main(String[] args) {
        TestRe tab = new TestRe();
        tab.tablero();


    }

    public int ward(int entero) {

        return entero;
    }

    public void tablero() {
        ImageIcon icon = new ImageIcon("C:/Users/walmart 3858/IdeaProjects/PracticaReinas/src/reina.png");
        Image imag = icon.getImage();
        Image otr = imag.getScaledInstance(50, 50, Image.SCALE_SMOOTH);
        ImageIcon iconFinal = new ImageIcon(otr);
        NReinas reinas = new NReinas(8);

        int[] guarda = new int[8];
        int[] guardb = new int[8];

        reinas.buscarSoluciones();
        ArrayList soluciones = reinas.getSoluciones();
        //for (int i = 0; i < soluciones.size(); i++) {
//en la parte de abajo se ve que pongo in es una variable con valor de uno el cual es la primera solicion si pongo otro numero de solucion el tablero cambiara de posicion no la puse por falta de tiempo
        //sin embargo el programa cumple con lo pedido de mostrar una solicion donde las reinas no se maten 

        for (int i = 0; i < in; i++) {
            int[] aux = (int[]) soluciones.get(i);
            System.out.println("Solucion " + (i + 1) + ":");
            for (int j = 0; j < aux.length; j++) {

                System.out.print("(" + String.valueOf(j + 1) + "," + String.valueOf(aux[j] + 1) + ")");
                guardb[j] = aux[j];
                guarda[j] = j;

            }
        }


        setSize(800, 600);
        setLocation(300, 100);
        setLayout(new GridLayout(8, 8));
        for (int i = 0; i < 8; i++) {

            for (int j = 0; j < 8; j++) {
                if (i == guarda[0] && j == guardb[0] || i == guarda[1] && j == guardb[1] || i == guarda[2] && j == guardb[2] || i == guarda[3] && j == guardb[3] || i == guarda[4] && j == guardb[4] || i == guarda[5] && j == guardb[5] || i == guarda[6] && j == guardb[6] || i == guarda[7] && j == guardb[7])


                    botones[i][j] = new JButton(iconFinal);
                else
                    botones[i][j] = new JButton("");
                if (i % 2 == 0) {
                    if (j % 2 == 0) {
                        botones[i][j].setBackground(Color.white);
                    } else botones[i][j].setBackground(Color.blue);
                } else {
                    if (j % 2 != 0) botones[i][j].setBackground(Color.white);
                    else botones[i][j].setBackground(Color.blue);
                }
                add(botones[i][j]);
                arreglo[i][j] = 0;

            }
        }
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);


        Barra = new JMenuBar();
        Menu = new JMenu();
        Menu.setText("MENU");
        Barra.add(Menu);
        solucion = new JMenuItem();
        solucion.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_P, 0));
        solucion.setText("Solución");
        solucion.setText("+1");
        solucion.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                if (solucion.getText().equals("+1")) {
                    String incrementa = solucion.getText();
                    int in = Integer.parseInt(incrementa);
    /*String */
                }
            }
        });
        Menu.add(solucion);

        salir = new JMenuItem();
        salir.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_F4, 0));
        salir.setMnemonic('S');
        salir.setText("Salir");
        salir.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                System.exit(0);
            }
        });
        Menu.add(salir);

        setJMenuBar(Barra);
        setVisible(true);


    }
}
