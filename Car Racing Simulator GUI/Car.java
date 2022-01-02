
import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.scene.layout.Pane;
import javafx.scene.shape.Polygon;
import javafx.scene.shape.Rectangle;
import javafx.scene.shape.Circle;
import javafx.util.Duration;

public abstract class Car extends Pane {
    protected double x;
    protected double y = 40;
    protected double radius = 5;
    protected Rectangle rectangle;
    protected Polygon polygon;
    protected Circle circle1;
    protected Circle circle2;
    private Timeline animation;
    protected String name;

    /** Construct and animate a default CarPane */
    Car() {
        drawCar();
        animation = new Timeline(
            new KeyFrame(Duration.millis(50), e -> moveCar()));
        animation.setCycleCount(Timeline.INDEFINITE);
    }

    /** Create a car an place it in the pane */
    protected abstract void drawCar(); 

    /** Set y to specified value */
    public void setY(double y) {
        this.y = y;
    }

    /** Set x to specified value */
    public void setX(double x) {
        this.x = x;
    }

    /** return x */
    public double getX() {
        return x;
    }

    /** return y */
    public double getY() {
        return y;
    }
    
    public String getName() {
        return name;
    }

    /** Pause animation */
    public void pause() {
        animation.pause();
    }

    /** Play animation */
    public void play() {
        animation.play();
    }

    /** Set the animation rate to a specified amount */
    public void setSpeed(double speed) {
        if (speed <= 100)
            animation.setRate(speed);
    }

    /** Increase rate by 1 */
    public void increaseSpeed() {
        animation.setRate(animation.getRate() + 1);
    }

    /** decrease rate by 1 */
    public void decreaseSpeed() {
        animation.setRate(animation.getRate() > 0 ? animation.getRate() - 1 : 0);
    }

    /** Redraw car with new x value */
    protected void moveCar() {
        if (x <= getWidth()) {
            x += 1;    
        } 
        else
            x = 0;
        drawCar();
    }
}