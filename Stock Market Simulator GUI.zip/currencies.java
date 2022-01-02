public class currencies extends stockProfile {

    private final String from;
    private final String to;
   
    // Class constructor
    public currencies(String f, String t, double sPrice, double bPrice) {

        super(f + "-" + t, sPrice, bPrice, 0.01);
        from = f;
        to = t;
        

    }
    
    // Method to retrieve the margin
    @Override
    public double getMargin() {
        return 0.01;
    }
}