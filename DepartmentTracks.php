<?php
$total_no_of_faculty = 60;
$approved_leave = 15;
$external_duty = 5;
$minimum_required_faculty = 30;
$present_faculty = $total_no_of_faculty - ($approved_leave + $external_duty);

# if total faculty = present faculty
if($approved_leave && $external_duty == 0 ){
    echo "Department is fully operational with complete staff availability";
}
else if($present_faculty>=$minimum_required_faculty){
    echo " Department is operating normally, but staff availability is not full";
}
else{
    echo "Department operations may be impacted due to insufficient staff";
}
?>

