public class stockProfile {

    private final String stockName;
    private double buyPrice;
    private double sellPrice;
    private double change;
    private double margin;
    // Class constructor for stock that has been bought 
    public stockProfile(String pName, double sPrice, double bPrice) {
        stockName = pName;
        buyPrice = bPrice;
        sellPrice = sPrice;
    }

    // Class constructor for all stocks when the program runs
    public stockProfile(String pName, double sPrice, double bPrice, double m) {
        stockName = pName;
        buyPrice = bPrice;
        sellPrice = sPrice;
        margin = m;
        change = 0;
    }

    // Method to retrieve the profile name
    public String getStockName() {
        return stockName;
    }

    // Method to retrieve the buy price
    public double getBuyPrice() {
        return buyPrice;
    }

    // Method to retrieve the sell price
    public double getSellPrice() {
        return sellPrice;
    }

    // Method to set the buy price
    public void setBuyPrice(double bPrice) {
        buyPrice = bPrice;
    }

    // Method to set the sell price
    public void setSellPrice(double sPrice) {
        sellPrice = sPrice;
    }

    // Method to get the margin
    public double getMargin() {
        return margin;
    }

    // Method to set the change in current and previous rate
    public void setChange(double c) {
        change = c;
    }
    
    // Method to get the change in current and previous rate
    public double getChange() {
        return change;
    }
}
