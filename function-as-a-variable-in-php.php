<?php
$callback = function($a,$b){
    return $a+$b;
};
$sum = $callback(10,20);
echo $sum;
?>
