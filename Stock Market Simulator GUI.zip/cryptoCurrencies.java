public class cryptoCurrencies extends stockProfile {

    private final String ticker;
    private final double margin;
    
    // Class constructor
    public cryptoCurrencies(String t, String name, double m, double sPrice, double bPrice) {
        super(name, sPrice, bPrice, m);
        ticker = t;
        margin = m;
    }

    
}