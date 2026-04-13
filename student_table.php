<?php
require 'db1.php';

$name = "aman";
$reg_no = "1001";
$age = "23";
$marks = "56";

$sql = "INSERT INTO student (name, reg_no, age, marks) VALUES ('$name','$reg_no','$age','$marks')";
$result = mysqli_query($conn,$sql);
echo"\n";
if($result){
    echo "Data inserted successfully";
}
else{
    echo "Failed to insert data ".mysqli_error($conn);
}
?>