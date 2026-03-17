<?php

$tax = 0.10;

$calculate = fn($price) => $price + ($price * $tax);

echo "Total price for Harshita: " . $calculate(100);

?>