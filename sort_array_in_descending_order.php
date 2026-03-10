<?php
$cars = array("volvo","BMW","toyata");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++){
    echo $cars[$x];
    echo "\n";
}
?>