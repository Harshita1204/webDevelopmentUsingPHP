<?php
$a = "hello world";
$b = function(){
    global $a;
    echo $a;
};
$b();
?>