public class companies extends stockProfile {
    
    private final String ticker;

    // Class constructor
    public companies(String t, String name, double m, double sPrice, double bPrice) {
        super(name, sPrice, bPrice, m);
        ticker = t;

    }

}