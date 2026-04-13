<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_db";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed \n".mysqli_conneect_error());
}
else{
    echo"connection successful";
}
?>