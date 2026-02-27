<?php
class Fruit {
    public $name;
    public $color;

    function set_value($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function get_value() {
        return "Name: " . $this->name . " - Color: " . $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_value('Apple', 'Red');
$banana->set_value('Banana', 'Yellow');

echo $apple->get_value();
echo "\n";
echo $banana->get_value();
?>
