<?php
class Animal {

    public $name;

    function set_name($name) {
        $this->name = $name;
    }

    function speak() {
        echo "Animal makes a sound";
    }
}

class Dog extends Animal {

    function speak() {
        echo $this->name . " barks";
    }
}

$dog = new Dog();
$dog->set_name("Tommy");
$dog->speak();
?>