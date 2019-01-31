import javax.swing.*;

public class Ecuacion {

    public  double[] Calcular(double b, double a, double c) {
        double t[] = new double[2], re = 0, im = 0, d = 0;

        t[0] = ((-b)+Math.sqrt(b*b-4*a*c))/2*a;

        t[1] = ((-b)-Math.sqrt(b*b-4*a*c))/2*a;
        return t;
    }
}
