import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Prac3 extends JApplet {
    private JPanel panelApp;
    private JTextField texto3;
    private JButton realizaOperacionButton;
    private JTextField texto1;
    private JTextField texto2;
    private JTextField resul;
    private JButton SALIRButton;
    private JButton nuevaEcuacionButton;
    private JTextField visibleEcuacion;
    private double var1 = 0, var2 = 0, var3 = 0;
    private Ecuacion ecuacion = new Ecuacion();

    public Prac3() {
        SALIRButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });
        realizaOperacionButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                realizaOperacionButton.setSelected(true);
                if (realizaOperacionButton.isSelected() == true) {
                    if (texto1.getText().equals("") || texto2.getText().equals("") || texto3.equals("")) {
                        JOptionPane.showMessageDialog(null, "Faltan datos", "error", JOptionPane.WARNING_MESSAGE);
                    }
                    try {
                        var1 = Double.parseDouble(texto1.getText());
                        var2 = Double.parseDouble(texto2.getText());
                        var3 = Double.parseDouble(texto3.getText());
                        double operacion[] = ecuacion.Calcular(var2, var1, var3);
                        resul.setText(String.valueOf(operacion[0]));

                    } catch (NumberFormatException n) {
                        JOptionPane.showMessageDialog(null, "DIGITA SOLO NUMEROS", "error", JOptionPane.WARNING_MESSAGE);
                        texto1.setText("");
                        texto2.setText("");
                        texto3.setText("");
                        var1 = 0;
                        var2 = 0;
                        var3 = 0;


                    }
                    visibleEcuacion.setText(texto1.getText() + "x^2" + "+" + texto2.getText() + "x" + "+" + texto3.getText() + "=0");

                }

            }
        });
        nuevaEcuacionButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                nuevaEcuacionButton.setSelected(true);
                if (nuevaEcuacionButton.isSelected() == true) {
                    texto1.setText("");
                    texto2.setText("");
                    texto3.setText("");
                    resul.setText("");
                }
            }
        });
    }


    @Override
    public void init() {
        super.init();
        Container container = this.getContentPane();
        container.setLayout(new FlowLayout());
        container.add(panelApp);
    }
}
