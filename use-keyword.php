<?php
$a = 5;
$b = function()use($a){
    echo $a;
};
$b();
?>