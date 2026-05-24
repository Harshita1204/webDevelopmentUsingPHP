<?php

class Animal
{
    function sound()
    {
        echo "Animal Sound";
    }
}

class Dog extends Animal
{
}

$dog = new Dog();

$dog->sound();

?>