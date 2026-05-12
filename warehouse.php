<?php

$warehouse1 = 15;
$warehouse2 = 20;
$stock_to_order = 40;

if($stock_to_order <= $warehouse1+$warehouse2){
    if($stock_to_order <= $warehouse1){
        $warehouse1 -= $stock_to_order;
    }
    else{
       $warehouse2 = $warehouse2 - ($stock_to_order - $warehouse1);
       $warehouse1 = 0;
        
    } 

    echo "warehouse1 stock is $warehouse1 \n";
    echo "warehouse2 stock is $warehouse2";
}else{
    echo "Not enough stock";
}

