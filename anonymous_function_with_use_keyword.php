<?php

$message = "Hello";

$greet = function($name) use ($message) {
    return $message . " " . $name;
};

echo $greet("Harshita");

?>