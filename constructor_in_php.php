<?php
class Car {

    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function display() {
        echo "Car: " . $this->name . " - Color: " . $this->color;
    }
}

$car1 = new Car("BMW", "Black");
$car2 = new Car("Audi", "White");

$car1->display();
echo "<br>";
$car2->display();
?>