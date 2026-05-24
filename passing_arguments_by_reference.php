<?php

function update(&$x)
{
    $x = $x + 5;
}

$num = 10;

update($num);

echo $num;

?>