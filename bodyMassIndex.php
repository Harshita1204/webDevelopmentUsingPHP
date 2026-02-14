<!DOCTYPE html>
<html>
    <head>
        <title>Body Mass Index</title>
        <style>
            </style>
            </head>
            <body>
                <form method="POST" action="">
        <table>
            <tr>
                <td>Weight</td>
                <td>Age</td>
</tr>

<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $weight=$_POST[];
    $height=$_POST[];
    $BMI;
    $BMI=weight/(height*height);

    if(BMI<18.5){
        echo"Underweight";
    }
    else if(BMI>=18.5&&BMI<24.9){
        echo"normal";
    }
    else if(BMI>=25&&BMI<29.9){
        echo"overweight";
    }
    else{
        echo"obesity";
    }
}