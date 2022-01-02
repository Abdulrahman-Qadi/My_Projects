import java.text.DecimalFormat;
import java.util.TimerTask;
import java.util.Timer;
import java.io.File;
import java.io.IOException;
import java.io.FileWriter;
import java.util.Random;

public class StockMarket{
    
    public static void main(String[] args) throws IOException {

        stockProfile[][] stockProfile = createAllStocks();
        
        mainWindow window = new mainWindow(stockProfile);

        recalculateStock(stockProfile, window);

    }

    // Using a timer to recalculate the stock prices every 5 seconds and displaying them
    public static void recalculateStock(stockProfile[][] stockProfile, mainWindow window) {
        Timer t1 = new Timer();
        t1.schedule(new TimerTask() {
            @Override
            public void run() {
                recalculate(stockProfile);
                window.setTextBoxValues(stockProfile);

            }
        }, 0, 5000);
    }
    
    // This is a procedure to recalculate the stock price when the timer is executed
    public static void recalculate(stockProfile[][] stocks) {

        Random sharePrice = new Random();

        double changePrice;
        stockProfile editStock;

        for (stockProfile[] stockArray : stocks) {
            for (stockProfile stock : stockArray) {
                changePrice = sharePrice.nextDouble() + 0.2;
                int bullOrbear = sharePrice.nextInt(10) + 1;

                editStock = stock;
                if (bullOrbear > 5) {
                    bullish(editStock, changePrice);

                } else {
                    bearish(editStock, changePrice);
                }

            }
        }

    }
    
    // Setting the stock prices once they have been recalculated by the procedure above
    public static void setPriceChange(stockProfile profile, double changeSellPrice, double changeBuyPrice) {
        double rateChange = ((changeSellPrice - profile.getSellPrice()) / profile.getSellPrice() * 100);
        profile.setChange(twoDecimalPlaces(rateChange));
        profile.setSellPrice(twoDecimalPlaces(changeSellPrice));
        profile.setBuyPrice(twoDecimalPlaces(changeBuyPrice));

    }
    
    // Calculating the increase in stock price
    public static void bullish(stockProfile profile, double rateChange) {
        double sellChange = rateChange
                + (profile.getSellPrice() + ((profile.getSellPrice() * profile.getMargin()) / 2));
        double buyChange = rateChange
                + (profile.getBuyPrice() + ((profile.getBuyPrice() * profile.getMargin()) / 2));

        setPriceChange(profile, sellChange, buyChange);

    }
    
    // Calculating the decrease in stock price
    public static void bearish(stockProfile profile, double rateChange) {
        double sellChange = rateChange
                + (profile.getSellPrice() - ((profile.getSellPrice() * profile.getMargin()) / 2));
        double buyChange = rateChange
                + (profile.getBuyPrice() + ((profile.getBuyPrice() * profile.getMargin()) / 2));

        setPriceChange(profile, sellChange, buyChange);

    }
    
    // Rounding to 2 decimal places
    public static Double twoDecimalPlaces(double number) {
        DecimalFormat round = new DecimalFormat(".##");
        return (Double.parseDouble(round.format(number)));
    }
    
    // Method to create all stocks
    public static stockProfile[][] createAllStocks() {
        // FOR CURRENCY STOCKS
        String[][] currencyPair = {{"EUR", "USD"}, {"GBP", "USD"}, {"EUR", "GBP"}, {"GBP", "JPY"}};
        double[][] currencyPrice = {{1.2183, 1.2185}, {1.3767, 1.3768}, {0.88491, 0.88511},
        {147.279, 147.320}};

        // FOR COMPANY STOCKS
        String[] companyTicker = {"FB", "AAPL", "MSFT", "TSLA"};
        String[] companyName = {"Facebook", "Apple", "Microsoft","Tesla"};
        double[] companyMargin = {0.05, 0.05, 0.05, 0.5};
        double[][] companyPrice = {{273.67, 273.34}, {123.82, 123.70}, {234.80, 234.58}, {707.57, 706.71}};

        // FOR CRYPTO CURRENCY STOCKS
        String[] cryptoTicker = {"BTC", "ETH", "XRP", "LTC"};
        String[] cryptoName = {"Bitcoin", "Ethereum", "XRP", "Litecoin"};
        double[] cryptoMargin = {0.005, 0.005, 0.01, 0.01, 0.01};
        double[][] cryptoPrice = {{55429.85, 55392.24}, {1823.22, 1822.28}, {0.47, 0.46}, {203.56, 199.57}};

        stockProfile[][] stocks = {createCurrencyStock(currencyPair, currencyPrice),
            createCompanyStock(companyTicker, companyName, companyMargin, companyPrice),
            createCrypto(cryptoTicker, cryptoName, cryptoMargin, cryptoPrice)};

        return stocks;
    }

    // Function to create the currency stocks
    public static currencies[] createCurrencyStock(String[][] currencyPair, double[][] price) {
        currencies[] stocks = new currencies[currencyPair.length];

        for (int i = 0; i < currencyPair.length; i++) {
            stocks[i] = new currencies(currencyPair[i][0], currencyPair[i][1], price[i][0], price[i][1]);

        }

        return stocks;
    }

    // Function to create the company stocks
    public static companies[] createCompanyStock(String[] ticker, String[] companyName, double[] margin, double[][] price) {
        companies[] stocks = new companies[companyName.length];

        for (int i = 0; i < companyName.length; i++) {

            stocks[i] = new companies(ticker[i], companyName[i], margin[i], price[i][0], price[i][1]);

        }

        return stocks;
    }

    // Function to create the Crypto Currencies
    public static cryptoCurrencies[] createCrypto(String[] cryptoTicker, String[] cryptoName, double[] margin,
            double[][] price) {
        cryptoCurrencies[] stocks = new cryptoCurrencies[cryptoTicker.length];

        for (int i = 0; i < cryptoTicker.length; i++) {

            stocks[i] = new cryptoCurrencies(cryptoTicker[i], cryptoName[i], margin[i], price[i][0], price[i][1]);

        }

        return stocks;
    }
}