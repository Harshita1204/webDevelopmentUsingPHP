<?php
$a = 5;
$b = 4;
$c = function($p) use ($b): void {
    echo $p + $b;
};
$c($a);
?>
