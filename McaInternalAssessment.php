<!DOCTYPE html>
<html>
<head>
    <title>MCA Internal Assessment</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5faff;
            margin: 0;
            padding: 0;
            text-align:left;
        }
        .student-box {
        padding: 15px 0;
        margin-bottom: 15px 0;
    }

    .student-box p {
    margin: 6px 0;
}

    .separator {
    border: none;
    border-top: 1px solid #140d0d;
    margin: 15px 0;
}

        .header {
            background-color: skyblue;
            color: #003366;
            text-align: center;
            padding: 30px;
            font-size: 26px;
            font-weight: bold;
        }

        .student-box b {
            color: #003366;
        }
        

        
    </style>
</head>
<body>

<div class="header">
    MCA Internal Assessment
</div>
<?php
$student1_Name = "harshita";
$attendance_percentage1 = 99;
$internal_marks1 = 100;

$student2_Name = "hazel";
$attendance_percentage2 = 67;
$internal_marks2 = 56;

$student3_Name = "siya";
$attendance_percentage3 = 79;
$internal_marks3 = 76;

for($i=0;$i<3;$i++){
    echo "<div class='student-box'>";

    if($i==0){
        echo "<b>Student name:</b> $student1_Name <br>";
        echo "<b>Attendance percentage: </b>$attendance_percentage1 <br>";
        echo "<b>Internal marks:</b> $internal_marks1 <br>";

         $attendance_percentage = $attendance_percentage1;
    }
    else if($i==1){
        echo "<b>Student name: </b>$student2_Name <br>";
        echo "<b>Attendance percentage: </b>$attendance_percentage2 <br>";
        echo "<b>Internal marks: </b>$internal_marks2 <br>";

         $attendance_percentage = $attendance_percentage2;
    }
    else{
        echo "<b>Student name: </b>$student3_Name <br>";
        echo "<b>Attendance percentage:</b> $attendance_percentage3 <br>";
        echo "<b>Internal marks: </b>$internal_marks3 <br>";

         $attendance_percentage = $attendance_percentage3;
    }
    if($attendance_percentage<75){
        echo"<b>Status : </b> Not eligible due to low attendance<br>";
        echo "<hr class='separator'>";
        continue;
    }else{

        if($attendance_percentage>=85){
            echo"<b>Result: </b> excellent performance<br>";
            echo "<hr class='separator'>";
        }
        else if($attendance_percentage>=70 && $attendance_percentage<=85){
            echo" <b>Result: </b> very good performance<br>";
            echo "<hr class='separator'>";
        }
        else if($attendance_percentage>=50 && $attendance_percentage<70){
            echo"<b> Result: </b> satisfactory<br>";
            echo "<hr class='separator'>";
        }
        else{
            echo"<b>Result:</b> Fail";
        }
    }
}
     
     echo "</div>";
   # echo "<hr class='separator'>";

?>

</body>
</html>
