import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.layout.BorderPane;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.geometry.Pos;
import javafx.collections.ObservableList;
import javafx.scene.Node;
import javafx.scene.input.KeyCode;

public class Main extends Application {
    protected HBox paneForSpeed = new HBox(5);
    protected VBox paneForCars = new VBox(5);
    //ArrayLists
    
    protected ObservableList<Node> textFields = paneForSpeed.getChildren();
    protected ObservableList<Node> cars = paneForCars.getChildren();

    @Override // Override the start method in the Application class
    public void start(Stage primaryStage) {
        final int PREF_COLUMN_COUNT = 2;

        paneForSpeed.setAlignment(Pos.CENTER);
        
        // Set specified properties for each text field in a list
        for (int i = 1; i < textFields.size(); i+= 2) {
            ((TextField)textFields.get(i)).setPrefColumnCount(PREF_COLUMN_COUNT);
        }

        // Place nodes in a pane for cars
            paneForCars.getChildren().add(new Audi());
            paneForCars.getChildren().add(new Mercedes());
            paneForCars.getChildren().add(new BMW());
            paneForCars.getChildren().add(new Porsche());
        

        // Set specified properties for each element in a list-POLYMORPHISM
        for (Node car: cars) {
            ((Car)car).setStyle("-fx-border-color: black");
            // Place labels and text fields in a pane
            paneForSpeed.getChildren().addAll(new Label(((Car)car).getName() + ":"), new TextField());
            ((Car)car).setY(40);
        }

        // Create and register handlers
        for (int i = 1; i < textFields.size(); i += 2) {
            ((TextField)textFields.get(i)).setOnKeyPressed(e -> {
                if (e.getCode() == KeyCode.ENTER) {
                    setSpeed();
                }
            });

        }
        
        // Create a border pane
        BorderPane pane = new BorderPane();
        pane.setTop(paneForSpeed);
        pane.setCenter(paneForCars);

        // Create a scene and place it in the stage
        Scene scene = new Scene(pane, 400, 200);
        primaryStage.setTitle("Car Simulation"); // Set the stage title
        primaryStage.setScene(scene); // Place the scene in the stage
        primaryStage.show(); // Display the stage
    }

    /** Set specified rate for a Car list */
    private void setSpeed() {
        for (int i = 1, j = 0; i < textFields.size(); i += 2, j++) {
            if (((TextField)textFields.get(i)).getText().length() > 0) {
                ((Car)cars.get(j)).setSpeed(
                    Double.parseDouble(((TextField)textFields.get(i)).getText()));
                ((Car)cars.get(j)).play();
            }
            else {
                ((Car)cars.get(j)).pause();
            }
        }
    }
}