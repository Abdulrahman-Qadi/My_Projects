// Currency Conversion - Program

var currency_symbols = ['USD-1', 'EUR-2', 'GBP-3', 'JPY-4', 'CAD-5'];
var currencies = ['US Dollars', 'Euros', 'British Pounds', 'Japanese Yens', 'Canadian Dollars'];
var length_of_list = currencies.length;

function start() {
    println("Welcome to my currency conversion!");
    println(currency_symbols);
    var from_currency = readLine("Please select the number corresponding to the currency you would like to convert from: ");
    // Call function to print the currency conversion 
    var result = calculate_conversion(from_currency);
    println(result)
}
/*
This function prints out the conversion of different currency pairs that are passed as a parameter. 
It returns the results of the calculation.
*/
function calculate_conversion(from_currency) {
    var currency_pair = [];
    var value = 0.0 // Holds the conversion result 
    if (from_currency == 1) {
        value = readLine("How many " + currencies[0] + " would you like to convert? ");
        var dollar_to_euro = value * 0.82;
        var dollar_to_pound = value * 0.72;
        var dollar_to_yen = value * 108.6;
        var dollar_to_canadian = value * 1.21;
        currency_pair = [value, dollar_to_euro, dollar_to_pound, dollar_to_yen, dollar_to_canadian];
    } else if (from_currency == 2) {
        value = readLine("How many " + currencies[1] + " would you like to convert? ");
        var euro_to_dollar = value * 1.22;
        var euro_to_pound = value * 0.87;
        var euro_to_yen = value * 132.1;
        var euro_to_canadian = value * 1.47;
        currency_pair = [euro_to_dollar, value, euro_to_pound, euro_to_yen, euro_to_canadian]
    } else if (from_currency == 3) {
        value = readLine("How many " + currencies[2] + " would you like to convert? ");
        var pound_to_dollar = value * 1.40;
        var pound_to_euro = value * 1.15;
        var pound_to_yen = value * 151.9;
        var pound_to_canadian = value * 1.70;
        currency_pair = [pound_to_dollar, pound_to_euro, value, pound_to_yen, pound_to_canadian]
    } else if (from_currency == 4) {
        value = readLine("How many " + currencies[3] + " would you like to convert? ");
        var yen_to_dollar = value * 0.009;
        var yen_to_euro = value * 0.007;
        var yen_to_pound = value * 0.0065;
        var yen_to_canadian = value * 0.011;
        currency_pair = [yen_to_dollar, yen_to_euro, yen_to_pound, value, yen_to_canadian]
    } else if (from_currency == 5) {
        value = readLine("How many " + currencies[4] + " would you like to convert? ");
        var canadian_to_dollar = value * 0.82;
        var canadian_to_euro = value * 0.68;
        var canadian_to_pound = value * 0.59;
        var canadian_to_yen = value * 89.5;
        currency_pair = [canadian_to_dollar, canadian_to_euro, canadian_to_pound, canadian_to_yen, value]
    } else {
        println("Not a valid currency in the list");
    }
    println("Your value in different currencies are: ");
    var result = "";
    for (var i = 0; i < length_of_list; i++) {
        result += ("In " + currencies[i] + " : " + currency_pair[i] + "\n");
    }
    return result;
}