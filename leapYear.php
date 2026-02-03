<?php
$year=2030;
if($year/4&&$year%100!=0||$year/400){
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";  // In php you are not supposed to give the echo condition inside the parenthesis, it works without it only! just print the else statemnt
}
