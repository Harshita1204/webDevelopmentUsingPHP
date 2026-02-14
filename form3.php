<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>

<form method="post" action="">
    Enter your name:
    <input type="text" name="name" placeholder="Enter your name">
    <br><br>

    Enter your age:
    <input type="number" name="age" placeholder="Enter your age">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age  = $_POST['age'];

    echo "<h1>Name: $name</h1>";
    echo "<h2>Age: $age</h2>";
    echo "<h3>Roll No: 10</h3>";
 }
}
?>

</body>
</html>
