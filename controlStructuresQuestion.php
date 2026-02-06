<?php
$student_name="harshita";
$attendance_percentage=56;
$internal_marks=97;

echo"Student name: $student_name \n";
echo"Attendance percentage: $attendance_percentage \n";

if($attendance_percentage<75){
    echo"Not elligle due to low attendance \n";
    exit;
}
echo"Internal marks: $internal_marks \n";
if($attendance_percentage>=75){
    if($internal_marks<40){
        echo"fail \n";
    }
    if($internal_marks>40&&$internal_marks<59){
        echo"Passc\n";
    }
    if($internal_marks>=60){
        echo"Merit \n";
    }
}