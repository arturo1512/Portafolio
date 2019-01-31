import javax.swing.*;

public class Asientos {
    private int i, j;
    private int vector[][] = new int[4][2];

    public void reserva(int fila, int columnas) {
        JOptionPane.showMessageDialog(null, "ASIENTO RESERVADO", "CORRECTO", JOptionPane.INFORMATION_MESSAGE);

        vector[fila][columnas] = 1;
    }

    public void cancelar(int fila, int columna) {

        if (vector[fila][columna] == 0) {
            JOptionPane.showMessageDialog(null, "Error", "Confirma Asiento", JOptionPane.ERROR_MESSAGE);

        }

    }

    public void visualizar() {
        int g = 0;
        for (i = 0; i < 4; i++) {
            System.out.println("\n");
            g++;
            for (j = 0; j < 2; j++) {
                System.out.println("[" + i + "]" + "[" + j + "]" + "Asiento" + vector[i][j]);
            }


        }
    }
}
