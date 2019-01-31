import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Avion {
    private JButton b1Button;
    private JButton a3Button;
    private JButton b5Button;
    private JButton b4Button;
    private JButton a4Button;
    private JButton a2Button;
    private JButton a1Button;
    private JButton b2Button;
    private JLabel Avion;
    private JButton aceptarButton;
    private JButton salirButton;
    private JPanel PanelAvion;
    private JCheckBox RESERVARCheckBox;
    private JCheckBox CANCELARCheckBox;
    private JButton cancelarButton;
    private Asientos asiento = new Asientos();

    public static void main(String[] args) {
        JFrame frame = new JFrame("Avion");
        frame.setContentPane(new Avion().PanelAvion);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.pack();
        frame.setVisible(true);
    }

    public Avion() {
        a1Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                /*ImageIcon icon = new ImageIcon("C:/Users/walmart 3858/IdeaProjects/AvionGrafico/src/s1.jpg");
                Image imag = icon.getImage();
                Image otr = imag.getScaledInstance(50,50,Image.SCALE_SMOOTH);
                ImageIcon iconFinal = new ImageIcon(otr);
                a1Button.setText("X");
                a1Button.setIcon(iconFinal);
*/
                a1Button.setSelected(true);

                if (CANCELARCheckBox.isSelected() == true && a1Button.getText().equals("Reservado")) {
                    a1Button.setBackground(Color.WHITE);
                    a1Button.setText("DISPONIBLE");
                    asiento.cancelar(0,0);
                    CANCELARCheckBox.setSelected(false);


                } else if (RESERVARCheckBox.isSelected() == true &&a1Button.isSelected() == true) {
                    a1Button.setBackground(Color.RED);
                    a1Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(0, 0);

                }
            }
        });
        b1Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                b1Button.setSelected(true);

                if (CANCELARCheckBox.isSelected() == true && b1Button.getText().equals("Reservado")) {
                    b1Button.setBackground(Color.WHITE);
                    b1Button.setText("DISPONIBLE");
                    asiento.cancelar(0,1);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true &&b1Button.isSelected() == true) {
                    b1Button.setBackground(Color.RED);
                    b1Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(0, 1);
                }

            }
        });
        a2Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                a2Button.setSelected(true);
                if (CANCELARCheckBox.isSelected() == true && a2Button.getText().equals("Reservado")) {
                    a2Button.setBackground(Color.WHITE);
                    a2Button.setText("DISPONIBLE");
                    asiento.cancelar(1, 0);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && a2Button.isSelected() == true) {
                    a2Button.setBackground(Color.RED);
                    a2Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(1, 0);
                }

            }
        });
        b2Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                b2Button.setSelected(true);
                if (CANCELARCheckBox.isSelected() == true && b2Button.getText().equals("Reservado")) {
                    b2Button.setBackground(Color.WHITE);
                    b2Button.setText("DISPONIBLE");
                    asiento.cancelar(1, 1);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && b2Button.isSelected() == true) {
                    b2Button.setBackground(Color.RED);
                    b2Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(1, 1);
                }


            }
        });
        a3Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                a3Button.setSelected(true);

                if (CANCELARCheckBox.isSelected() == true && a3Button.getText().equals("Reservado")) {
                    a3Button.setBackground(Color.WHITE);
                    a3Button.setText("DISPONIBLE");
                    asiento.cancelar(2, 0);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && a3Button.isSelected() == true) {
                    a3Button.setBackground(Color.RED);
                    a3Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(2, 0);
                }
            }

        });
        b4Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                b4Button.setSelected(true);

                if (CANCELARCheckBox.isSelected() == true && b4Button.getText().equals("Reservado")) {
                    b4Button.setBackground(Color.WHITE);
                    b4Button.setText("DISPONIBLE");
                    asiento.cancelar(2, 1);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && b4Button.isSelected() == true) {
                    b4Button.setBackground(Color.RED);
                    b4Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(2, 1);
                }

            }
        });
        a4Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                a4Button.setSelected(true);
                if (CANCELARCheckBox.isSelected() == true && a4Button.getText().equals("Reservado")) {
                    a4Button.setBackground(Color.WHITE);
                    a4Button.setText("DISPONIBLE");
                    asiento.cancelar(3, 0);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && a4Button.isSelected() == true) {
                    a4Button.setBackground(Color.RED);
                    a4Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(3, 0);
                }

            }
        });
        b5Button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                b5Button.setSelected(true);
                if (CANCELARCheckBox.isSelected() == true && b5Button.getText().equals("Reservado")) {
                    b5Button.setBackground(Color.WHITE);
                    b5Button.setText("DISPONIBLE");
                    asiento.cancelar(3, 1);
                    CANCELARCheckBox.setSelected(false);
                } else if (RESERVARCheckBox.isSelected() == true && b5Button.isSelected() == true) {
                   /* JOptionPane.showMessageDialog(null, "Error", "Confirma Asiento", JOptionPane.ERROR_MESSAGE);*/
                    b5Button.setBackground(Color.RED);
                    b5Button.setText("Reservado");
                    RESERVARCheckBox.setSelected(false);
                    asiento.reserva(3, 1);
                }


            }
        });
        aceptarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                aceptarButton.setSelected(true);
                if (aceptarButton.isSelected() == true) {
                    RESERVARCheckBox.setSelected(true);
                    asiento.visualizar();
                }

            }
        });
        salirButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });

        CANCELARCheckBox.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {


                if (CANCELARCheckBox.isSelected() == false) {
                    JOptionPane.showMessageDialog(null, "Error", "Confirma Asiento Para cancelar", JOptionPane.ERROR_MESSAGE);
                }

            }
        });
        RESERVARCheckBox.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
               /* if (RESERVARCheckBox.isSelected() == false) {
                    JOptionPane.showMessageDialog(null, "Error", "Confirma Asiento", JOptionPane.ERROR_MESSAGE);
                }*/

            }
        });
        cancelarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                cancelarButton.setSelected(true);
                CANCELARCheckBox.setSelected(true);

            }
        });

    }
}
