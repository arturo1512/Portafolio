
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Leer {

    private int ban = 0;
    private String dato = "";
    private BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

    public String leeString() {
        try {

            while(this.leeString().equals("")) {
                System.out.println("Dame dato");
                this.dato = br.readLine();
            }
        } catch (IOException e) {
        }

        return this.dato;
    }


    public int leeInt() {

        do {
            try {
                this.ban = 0;
                return Integer.valueOf(this.br.readLine());
            } catch (NumberFormatException var4) {
                System.out.println("Error dato no valido");
                this.ban = 1;
            } catch (IOException e) {
                e.printStackTrace();
            }
        } while (this.ban != 0);


        return 0;
    }
}


