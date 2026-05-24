<?php

class Shape
{
    function draw()
    {
        echo "Drawing Shape";
    }
}

class Circle extends Shape
{
    function draw()
    {
        echo "Drawing Circle";
    }
}

?>