<!DOCTYPE html>
<html>
<head>
<title>MCA Internal Assessment Result</title>

<style>
body{
    font-family: Georgia, serif;
}

.container{
    width: 70%;
    margin: auto;
}

h1{
    text-align: center;
}

.student{
    margin-top:20px;
}

hr{
    margin:20px 0;
}
</style>
</head>

<body>

<div class="container">

<h1>MCA Internal Assessment Result</h1>
<hr>

<?php

function displayResult($name,$attendance,$marks){

    echo "<div class='student'>";
    echo "<b>Student Name:</b> $name <br>";
    echo "<b>Attendance:</b> $attendance% <br>";
    echo "<b>Marks:</b> $marks <br>";

    if($attendance < 75){
        echo "<b>Status:</b> Not eligible due to low attendance";
    }
    else{

        if($marks >= 75){
            echo "<b>Result:</b> Very Good Performance";
        }
        elseif($marks >= 50){
            echo "<b>Result:</b> Pass";
        }
        else{
            echo "<b>Result:</b> Fail";
        }

    }

    echo "</div>";
    echo "<hr>";
}

displayResult("Aman",72,88);
displayResult("Kajal",85,76);
displayResult("Rohit",90,45);

?>

</div>

</body>
</html>