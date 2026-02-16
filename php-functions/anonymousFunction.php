// anonymous functions in php
<?php
$greet=function($name){
    return "HELLO,$name";
};
echo $greet("harshu");
?>

// using global variable in anonymous function_exists
// way 1:
<?php
$a=5;
$b=function(){
};
echo $a;
?>

// way 2: using global keyword :
<?php
$a="hello world of mine";
$b= function(): void{
    global $a;
    echo $a;
};
$b();
$b($a);
?>

// way 3: pass it as an argument :
<?php
$a = 5;
$b = function($p): void {
    echo $p;
};
$b($a);
?>


