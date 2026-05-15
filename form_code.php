<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    
    <br><br>

    Email:
    <input type="email" name="email" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    Gender:
    
    <input type="radio" name="gender" value="Male"> Male
    
    <input type="radio" name="gender" value="Female"> Female

    <br><br>

    Hobbies:
    
    <input type="checkbox" name="hobby[]" value="Reading"> Reading
    
    <input type="checkbox" name="hobby[]" value="Music"> Music
    
    <input type="checkbox" name="hobby[]" value="Gaming"> Gaming

    <br><br>

    City:
    
    <select name="city">
        <option value="Delhi">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Chandigarh">Chandigarh</option>
    </select>

    <br><br>

    Message:
    
    <textarea name="message"></textarea>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    
    $password = $_POST['password'];
    
    $gender = $_POST['gender'];
    
    $city = $_POST['city'];
    
    $message = $_POST['message'];

    echo "<h2>User Details</h2>";

    echo "Name: ".$name."<br>";

    echo "Email: ".$email."<br>";

    echo "Password: ".$password."<br>";

    echo "Gender: ".$gender."<br>";

    echo "City: ".$city."<br>";

    echo "Message: ".$message."<br>";

    echo "Hobbies: ";

    if(isset($_POST['hobby']))
    {
        foreach($_POST['hobby'] as $hobby)
        {
            echo $hobby." ";
        }
    }
}

?>

</body>
</html>