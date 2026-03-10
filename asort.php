<?php
$cars = array("volvo","BMW","toyata");
asort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++){
    echo $cars[$x];
    echo "\n";
}
?>