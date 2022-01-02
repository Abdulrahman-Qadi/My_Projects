
import javafx.scene.shape.Polygon;
import javafx.scene.shape.Rectangle;
import javafx.scene.shape.Circle;

public class Porsche extends Car {
	/** Construct and animate a default CarPane */
	Porsche() {
		super();
		name = "Porsche";
	}

	/** Create a car an place it in the pane */
	protected void drawCar() {
		getChildren().clear();
		rectangle = new Rectangle(x, y - 20, 50, 10);
		rectangle.setStyle("-fx-fill: teal; -fx-stroke: silver");
		polygon = new Polygon(x + 10, y - 20, x + 20, y - 30, x + 30, 
			y - 30, x + 40, y - 20);
		polygon.setStyle("-fx-fill: silver");
		circle1 = new Circle(x + 15, y - 5, radius);
		circle2 = new Circle(x + 35, y - 5, radius);
		getChildren().addAll(rectangle, circle1, circle2, polygon);
	}

	
}