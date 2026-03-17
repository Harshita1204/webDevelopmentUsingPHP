<?php

$names = ["Harshita", "Aman", "Ravi"];

$result = array_map(function($name){
    return "Hello " . $name;
}, $names);

print_r($result);

?>