<?php
$a=5;
$b=function()use($a): void {
    echo $a;
};
$b();
?>