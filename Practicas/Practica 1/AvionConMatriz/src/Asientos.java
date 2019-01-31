import org.omg.Messaging.SYNC_WITH_TRANSPORT;

import java.util.Scanner;

public class Asientos {

    private int columna = 0, i, j;
    private int fila = 0;
    private int vector[][] = new int[24][6];
    private Leer lee = new Leer();
    Scanner sc = new Scanner(System.in);

    public Asientos(int columna, int fila) {
        this.columna = columna;
        this.fila = fila;
    }

    public Asientos() {
    }

    public int getColumna() {
        return columna;
    }

    public void setColumna(int columna) {
        this.columna = columna;
    }

    public int getFila() {
        return fila;
    }

    public void setFila(int fila) {
        this.fila = fila;
    }

    public void reserva() {

        System.out.println("Dame fila en la que te quieres sentar");
        setFila(lee.leeInt());
        System.out.println("Dame Columna en la que te quieres sentar");
        setColumna(lee.leeInt());

        vector[getFila()][getColumna()] = 1;




    }

    public void visualizar() {
        int g = 0;
        for (i = 0; i < 24; i++) {
            System.out.println("\n");
            g++;
            for (j = 0; j < 6; j++) {
                System.out.println("[" + i + "]" + "[" + j + "]" +"Asiento"+ vector[i][j] );
            }


        }
    }

    public void cancelar() {
        System.out.println("Dame la fila del asiento a cancelar");
        setFila(lee.leeInt());
        System.out.println("dame la columna del asiento que vas a cancelar\n");
        setColumna(lee.leeInt());
        vector[getFila()][getColumna()] = 0;
    }

    public void hacerAvion() {
        int op;
        for (i = 0; i < 24; i++) {
            System.out.println("");

            for (j = 0; j < 6; j++) {

                System.out.print(" \nAsiento" + "[" + i + "]" + "[" + j + "]");
                System.out.print(vector[i][j] = 0);

            }
        }
        System.out.println("\n");
        do {
            System.out.println("\tMenu");
            System.out.println("\n Opciones \n 1.Reservar \n 2.-Cancelar \n 3.-Visualizar \n");
            op = lee.leeInt();
            switch (op) {
                case 1:
                    reserva();
                    break;
                case 2:
                    cancelar();
                    break;
                case 3:
                    visualizar();
                    break;
            }
            System.out.println("Deseas volver al menu oprime (si/no)");
        } while (sc.next().charAt(0) == 's');

    }
}





