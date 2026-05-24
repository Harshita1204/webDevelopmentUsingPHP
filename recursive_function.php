<?php

function countNum($num)
{
    if($num <= 5)
    {
        echo $num;

        countNum($num + 1);
    }
}

countNum(1);

?>