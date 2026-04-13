<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>
</head>
<body>
<h2>Student Registration</h2>
<form method="post" action="">
        Name:<br>
    <input type="text" name="name"><br><br>
    Registration No:<br>
    <input type="text" name="reg_no"><br><br>
    Age:<br>
    <input type="text" name="age"><br><br>
    Marks:<br>
    <input type="text" name="marks"><br><br>
    <input type="submit" name="submit" value="Submit">
    <br>
</form>
</body>
</html>

<?php
require 'db1.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$reg_no = $_POST['reg_no'];
$age = $_POST['age'];
$marks = $_POST['marks'];
$sql = "INSERT INTO student (name,reg_no,age,marks) VALUES ('$name','$reg_no','$age','$marks')";
$result = mysqli_query($conn,$sql);
if($result){
    echo"\n";
    echo "Data inserted successfully";
}
else{
    echo "Failed to insert data ".mysqli_error($conn);
}
}
?>