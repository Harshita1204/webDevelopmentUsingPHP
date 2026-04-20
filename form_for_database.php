<?php
require 'db1.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$reg_no = $_POST['reg_no'];
$age = $_POST['age'];
$marks = $_POST['marks'];

$sql = "INSERT INTO student (name,reg_no,age,marks)
        VALUES ('$name','$reg_no','$age','$marks')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('Student Registered Successfully');</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    font-family: Arial;
    background: linear-gradient(135deg,#ff9a9e,#fad0c4);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.main-box{
    background:white;
    padding:40px;
    border-radius:15px;
    width:400px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}
.form-container{
    width:420px;
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 15px 35px rgba(0,0,0,0.2);
}
.form-container h2{
    text-align:center;
    margin-bottom:25px;
    color:#333;
}

input[type="text"]{
    width:100%;
    padding:12px;
    margin-top:6px;
    margin-bottom:18px;
    border-radius:8px;
    border:1px solid #ccc;
    transition:0.3s;
}

label{
    font-weight:bold;
    color:#444;
}
h2{
    text-align:center;
    margin-bottom:20px;
}

input[type=text]{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:8px;
    border:1px solid #ccc;
}

input[type=submit]{
    width:100%;
    padding:12px;
    background:#ff4b7d;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
}

input[type=submit]:hover{
    background:#ff2a63;
}

</style>

</head>

<body>

<div class="main-box">

<h2>Student Registration</h2>

<form method="post">

Name
<input type="text" name="name" required>

Registration No
<input type="text" name="reg_no" required>

Age
<input type="text" name="age" required>

Marks
<input type="text" name="marks" required>

<input type="submit" name="submit" value="Submit">

</form>

</div>

</body>
</html>