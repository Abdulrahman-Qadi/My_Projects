import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;

import javax.swing.border.Border;
import java.util.*;

public class mainWindow {

    // CURRENCY STOCK TEXT FIELDS
    JTextField EURUSD;
    JTextField diffEURUSD;

    JTextField GBPUSD;
    JTextField diffGBPUSD;

    JTextField EURGBP;
    JTextField diffEURGBP;

    JTextField GBPJPY;
    JTextField diffGBPJPY;

    // COMPANY STOCK TEXT FIELDS
    JTextField facebook;
    JTextField difffacebook;

    JTextField apple;
    JTextField diffapple;

    JTextField microsoft;
    JTextField diffmicrosoft;

    JTextField tesla;
    JTextField difftesla;

    // CRYPTO STOCK TEXT FIELDS
    JTextField bitcoin;
    JTextField diffBTC;

    JTextField ethereum;
    JTextField diffETH;

    JTextField xrp;
    JTextField diffXRP;

    JTextField litecoin;
    JTextField diffLTC;

    JTextField[][] textFields;
    JTextField[][] differenceTextFields;

    accountProfile accProfile;
    stockProfile[][] stocksProfiles;

    // Class constructor
    public mainWindow(stockProfile[][] profiles) {

        stocksProfiles = profiles;

        ButtonListener listener = new ButtonListener();

        JFrame frame = new JFrame("Stock Market");
        frame.setLayout(new FlowLayout(FlowLayout.CENTER, 50, 20));

        textFields = new JTextField[3][4];
        differenceTextFields = new JTextField[3][4];

        JPanel stockInfo = new JPanel();
        Border stockInfoBorder = BorderFactory.createTitledBorder("MY WATCHLIST");
        stockInfo.setBorder(stockInfoBorder);
        stockInfo.setLayout(new GridLayout(2, 0, 10, 0));

        // CURRENCY STOCK PANEL
        JLabel labelEURUSD = new JLabel("EUR/USD", SwingConstants.CENTER);
        JLabel labelGBPUSD = new JLabel("GBP/USD", SwingConstants.CENTER);
        JLabel labelEURGBP = new JLabel("EUR/GBP", SwingConstants.CENTER);
        JLabel labelGBPJPY = new JLabel("GBP/JPY", SwingConstants.CENTER);

        EURUSD = new JTextField("");
        GBPUSD = new JTextField("");
        EURGBP = new JTextField("");
        GBPJPY = new JTextField("");

        textFields[0][0] = EURUSD;
        textFields[0][1] = GBPUSD;
        textFields[0][2] = EURGBP;
        textFields[0][3] = GBPJPY;

        diffEURUSD = new JTextField("");
        diffGBPUSD = new JTextField("");
        diffEURGBP = new JTextField("");
        diffGBPJPY = new JTextField("");

        differenceTextFields[0][0] = diffEURUSD;
        differenceTextFields[0][1] = diffGBPUSD;
        differenceTextFields[0][2] = diffEURGBP;
        differenceTextFields[0][3] = diffGBPJPY;

        JPanel currencyPanel = new JPanel();
        currencyPanel.setLayout(new GridLayout(5, 3, 5, 5));

        Border currencyBorder = BorderFactory.createTitledBorder("Currencies");
        currencyPanel.setBorder(currencyBorder);

        currencyPanel.add(new JLabel(""));
        currencyPanel.add(new JLabel("Buy/Sell", SwingConstants.CENTER));
        currencyPanel.add(new JLabel(""));

        currencyPanel.add(labelEURUSD);
        currencyPanel.add(textFields[0][0]);
        currencyPanel.add(differenceTextFields[0][0]);

        currencyPanel.add(labelGBPUSD);
        currencyPanel.add(textFields[0][1]);
        currencyPanel.add(differenceTextFields[0][1]);

        currencyPanel.add(labelEURGBP);
        currencyPanel.add(textFields[0][2]);
        currencyPanel.add(differenceTextFields[0][2]);

        currencyPanel.add(labelGBPJPY);
        currencyPanel.add(textFields[0][3]);
        currencyPanel.add(differenceTextFields[0][3]);

        // COMPANY STOCK PANEL
        JLabel labelfacebook = new JLabel("Facebook", SwingConstants.CENTER);
        JLabel labelapple = new JLabel("Apple", SwingConstants.CENTER);
        JLabel labelmicrosoft = new JLabel("Microsoft", SwingConstants.CENTER);
        JLabel labeltesla = new JLabel("Tesla", SwingConstants.CENTER);

        facebook = new JTextField("");
        apple = new JTextField("");
        microsoft = new JTextField("");
        tesla = new JTextField("");

        textFields[1][0] = facebook;
        textFields[1][1] = apple;
        textFields[1][2] = microsoft;
        textFields[1][3] = tesla;

        difffacebook = new JTextField("");
        diffapple = new JTextField("");
        diffmicrosoft = new JTextField("");
        difftesla = new JTextField("");

        differenceTextFields[1][0] = difffacebook;
        differenceTextFields[1][1] = diffapple;
        differenceTextFields[1][2] = diffmicrosoft;
        differenceTextFields[1][3] = difftesla;

        JPanel companyPanel = new JPanel();
        companyPanel.setLayout(new GridLayout(5, 3, 5, 5));

        Border companyBorder = BorderFactory.createTitledBorder("Companies");
        companyPanel.setBorder(companyBorder);

        companyPanel.add(new JLabel(""));
        companyPanel.add(new JLabel("Buy/Sell", SwingConstants.CENTER));
        companyPanel.add(new JLabel(""));

        companyPanel.add(labelfacebook);
        companyPanel.add(textFields[1][0]);
        companyPanel.add(differenceTextFields[1][0]);

        companyPanel.add(labelapple);
        companyPanel.add(textFields[1][1]);
        companyPanel.add(differenceTextFields[1][1]);

        companyPanel.add(labelmicrosoft);
        companyPanel.add(textFields[1][2]);
        companyPanel.add(differenceTextFields[1][2]);

        companyPanel.add(labeltesla);
        companyPanel.add(textFields[1][3]);
        companyPanel.add(differenceTextFields[1][3]);

        // CRYPTO STOCK PANEL
        JPanel currencyCompanyHolder = new JPanel();
        currencyCompanyHolder.setLayout(new GridLayout(1, 2, 10, 0));

        currencyCompanyHolder.add(currencyPanel);
        currencyCompanyHolder.add(companyPanel);

        JLabel labelbtc = new JLabel("Bitcoin", SwingConstants.CENTER);
        JLabel labeleth = new JLabel("Ethereum", SwingConstants.CENTER);
        JLabel labelxrp = new JLabel("XRP", SwingConstants.CENTER);
        JLabel labelltc = new JLabel("Litecoin", SwingConstants.CENTER);

        bitcoin = new JTextField("");
        ethereum = new JTextField("");
        xrp = new JTextField("");
        litecoin = new JTextField("");

        textFields[2][0] = bitcoin;
        textFields[2][1] = ethereum;
        textFields[2][2] = xrp;
        textFields[2][3] = litecoin;

        diffBTC = new JTextField("");
        diffETH = new JTextField("");
        diffXRP = new JTextField("");
        diffLTC = new JTextField("");

        differenceTextFields[2][0] = diffBTC;
        differenceTextFields[2][1] = diffETH;
        differenceTextFields[2][2] = diffXRP;
        differenceTextFields[2][3] = diffLTC;

        JPanel economyPanel = new JPanel();
        economyPanel.setLayout(new GridLayout(5, 3, 5, 5));

        Border economyBorder = BorderFactory.createTitledBorder("Crypto Currencies");
        economyPanel.setBorder(economyBorder);

        economyPanel.add(new JLabel(""));
        economyPanel.add(new JLabel("Buy/Sell", SwingConstants.CENTER));
        economyPanel.add(new JLabel(""));

        economyPanel.add(labelbtc);
        economyPanel.add(textFields[2][0]);
        economyPanel.add(differenceTextFields[2][0]);

        economyPanel.add(labeleth);
        economyPanel.add(textFields[2][1]);
        economyPanel.add(differenceTextFields[2][1]);

        economyPanel.add(labelxrp);
        economyPanel.add(textFields[2][2]);
        economyPanel.add(differenceTextFields[2][2]);

        economyPanel.add(labelltc);
        economyPanel.add(textFields[2][3]);
        economyPanel.add(differenceTextFields[2][3]);

        for (JTextField[] textFieldArray : textFields) {
            for (JTextField textField : textFieldArray) {
                textField.setSize(new Dimension(150, 50));
            }
        }

        JPanel economyHolder = new JPanel();
        economyHolder.setLayout(new FlowLayout(FlowLayout.CENTER));
        economyHolder.add(economyPanel);

        stockInfo.add(currencyCompanyHolder, BorderLayout.CENTER);
        stockInfo.add(economyHolder, BorderLayout.PAGE_END);

        JPanel mainPanel = new JPanel();
        mainPanel.setLayout(new GridLayout(1, 2));

        mainPanel.add(stockInfo);

        mainPanel.setLayout(new FlowLayout(FlowLayout.CENTER, 50, 20));

        JPanel buttonPanel = new JPanel();
        Border graphViewBorder = BorderFactory.createEtchedBorder();
        buttonPanel.setBorder(graphViewBorder);

        Button btnBuySell = new Button("Buy/Sell Stock");
        btnBuySell.addActionListener(listener);

        buttonPanel.setLayout(new GridLayout(1, 3, 5, 5));
        buttonPanel.setLayout(new FlowLayout(FlowLayout.CENTER, 20, 20));
        buttonPanel.add(btnBuySell);

        frame.add(mainPanel);
        frame.add(buttonPanel);

        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(1000, 600);
        frame.setLocationRelativeTo(null);

        frame.setVisible(true);

    }

    // Event handler for when buttons are pressed
    public class ButtonListener implements ActionListener {

        @Override
        public void actionPerformed(ActionEvent et) {

            String btnName = et.getActionCommand();

    }
}
    
    // Method to set the values of the text boxes with the stock prices
    public void setTextBoxValues(stockProfile[][] stocksProfiles) {

        for (int i = 0; i < stocksProfiles.length; i++) {
            for (int j = 0; j < stocksProfiles[i].length; j++) {

                stockProfile stock = stocksProfiles[i][j];

                setStockPriceTextField(textFields[i][j], stock);
                setDifferenceTextField(differenceTextFields[i][j], stock.getChange());
                setTextFieldColour(differenceTextFields[i][j], stock.getChange());

            }
        }
    }

    // Method to set the buy and sell rates for a stock
    public void setStockPriceTextField(JTextField field, stockProfile profile) {
        field.setText(
                String.valueOf(profile.getBuyPrice()) + "/" + String.valueOf(profile.getSellPrice()));

    }

    // Setting the difference between current rate and previous rates
    public void setDifferenceTextField(JTextField field, double change) {
        String difference = (change > 0) ? ("+" + change) : ("" + change);
        field.setText(difference + "%");
    }

    // Method to set the font colour of the difference
    public void setTextFieldColour(JTextField field, double change) {
        if (change >= 0) {
            field.setForeground(Color.green);
        } else {
            field.setForeground(Color.red);
        }
    }
    
    // Rounding to 2 decimal place
    public static Double roundTo2DP(double number) {
        DecimalFormat roundFormat = new DecimalFormat(".##");
        return (Double.parseDouble(roundFormat.format(number)));
    }

}