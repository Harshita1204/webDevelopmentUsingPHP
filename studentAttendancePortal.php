<?php
 $totalDays=90;
 function calculateAttendance(){
    $attendedDays=72;
    global $totalDays;
    $attendancePercentage=($attendedDays/$totalDays)*100;

echo "<h1 style='text-align:center;background-color:#ff00ff'>Student Attendance Portal</h1><br>";
echo "<h2 style='text-align:center'>Total working days: $totalDays <br>";
echo "<h2 style='text-align:center'>Attended days: $attendedDays <br>";
echo "<h2 style='text-align:center'>Attendance percentage: $attendancePercentage% <br>";
 }
 calculateAttendance();
?>

 
