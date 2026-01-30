<?php
$year=2030;
if($year/4&&$year%100!=0||$year/400){
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";
}