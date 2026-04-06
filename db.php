<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed".mysqli_conneect_error());
}
else{
    echo"connection successful";
}
?>