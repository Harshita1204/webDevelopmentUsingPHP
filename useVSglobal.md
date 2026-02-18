<?php
$a=10;
$b=function() use($a){ // use only copy 
    $a=$a+10; // value will be 20 for this block only 
};
$b();
echo $a; // 10 
?>

-------------------------------------------------------------------------------

<?php
$a=10;
$b=function() use(&$a){  // if you want to access this then use & to access it outside the block
    $a=$a+10; 
$b();
echo $a; // 20
?>

-------------------------------------------------------------------------------

<?php
$a=10;
$b=function() { 
    global $a;
    $a=$a+10; 
};
$b();
echo $a; // 20
?>
