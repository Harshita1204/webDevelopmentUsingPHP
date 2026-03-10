<?php
$a=5;

function sm(){
    global $a;
    echo $a."\n";
}
sm();
echo $a;
?>