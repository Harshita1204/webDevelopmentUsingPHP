<?php

$names = ["Harshita", "Aman", "Ravi"];

$result = array_map(fn($name) => "Hello " . $name, $names);

print_r($result);

?>