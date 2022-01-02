// Slot Machine Game - Program

var fruits = ["Orange", "Star", "Bell", "Cherry", "Skull", "Lemon"]

function start() {
    var amount = readLine("Welcome to the slot machine game, please enter the amount you wish to start with ");
    var startGame = fruit_slot_machine(amount);
    println(startGame);
}
/*
This function prints out the random fruits in the slot machine,
and the total amount of credit that the user ends up with after each roll.
The user chooses to start with an initial amount that is passed as a parameter into the function.
*/
function fruit_slot_machine(amount) {
    var credit = amount;
    var quit = false;
    while (quit == false) {
        readLine("Your credit to start with is £" + credit + " Press enter to roll");
        var roll1 = Math.floor(Math.random() * 6);
        var roll2 = Math.floor(Math.random() * 6);
        var roll3 = Math.floor(Math.random() * 6);
        println(fruits[roll1] + " " + fruits[roll2] + " " + fruits[roll3]);
        if (fruits[roll1] == "Skull" && fruits[roll2] == "Skull" && fruits[roll3] == "Skull") {
            println("Unlucky!, You lose all your money!");
            credit = 0;
            println("You have 0 credit");
        } else if (fruits[roll1] == "Skull" && fruits[roll2] == "Skull" || fruits[roll2] == "Skull" && fruits[roll3] == "Skull" || fruits[roll1] == "Skull" && fruits[roll3] == "Skull") {
            print("You lose £10!");
            credit = credit - 10;

            println("Your new credit is £" + credit);
        } else if (fruits[roll1] == "Bell" && fruits[roll2] == "Bell" && fruits[roll3] == "Bell") {
            println("You have rolled three Bells!!!");
            credit = credit * 5;
            println("Your new credit is £" + credit);
        } else if (fruits[roll1] == fruits[roll2] && fruits[roll2] == fruits[roll3]) {
            println("You have rolled three of the same fruits!!!");
            credit = credit * 3;
            println("Your new credit is £" + credit);
        } else if (fruits[roll1] == fruits[roll2] || fruits[roll1] == fruits[roll3] || fruits[roll2] == fruits[roll3]) {
            print("You have rolled two of the same fruits!!");
            credit = credit * 2;
            println("Your new credit is £" + credit);
        } else {
            println("You win nothing");
            println("Your credit is still £" + credit);
        }
        var answer = readLine("Do you wish to play again?");
        if (answer == "no") {
            println("Goodbye!");
            quit = true;
        } else {
            quit = false;
        }
    }
    return ("Your total credit is £" + credit);
}