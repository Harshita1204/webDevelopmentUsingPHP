<?php

$x = 100;

function test()
{
    global $x;
    echo $x;
}

test();

?>