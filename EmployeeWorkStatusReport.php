<?php
$total_working_days = 30;
$days_absent;
$days_present=$total_working_days-$days_absent;
$attendance_percentage=$days_present/$total_working_days;
for($i=0;$i<=4;$i++){
    if($i==0){
        $employee_name="hazel";
        $days_absent=4;

    }
    else if($i==1){
        $employee_name="maya";
        $days_absent=6;
    }
    else if($i==2){
        $employee_name="komal";
        $days_absent=14;
    }
    else{
        $employee_name="siya";
        $days_absent=12;
    }
}
if($attendance_percentage>=95){
    echo"Status: OUTSTANDING  eligibible for work from home";
}
else if($attendance_percentage>=85&&$attendance_percentage<95){
    echo"Status: REGULAR  on-site work";
}
else if($attendance_percentage>=75&&$attendance_percentage<85){
    echo"Status: WARNING  attendance improvement needed";
}
else{
    echo"Status: CRITICAL  salary deduction applicable";

}

for($i=0;$i<=4;$i++){
    echo"Employee name: $employee_name \n";
    echo"Total_working_days: $total_working_days \n";
    echo"days absent: $days_absent \n";
    echo"attendance percentage: $attendance_percentage \n \n";
}


