<!DOCTYPE html>
<html>
<head>
    <title>Database Connection</title>
</head>
<body>

<h2>MySQL Connection Form</h2>

<form method="post">
    Host:
    <input type="text" name="host" required><br><br>

    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password"><br><br>

    Database Name:
    <input type="text" name="database" required><br><br>

    <input type="submit" name="submit" value="Connect">
</form>

<?php
if(isset($_POST['submit']))
{
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $database = $_POST['database'];

    $conn = mysqli_connect($host, $username, $password, $database);

    if($conn)
    {
        echo "<h3>Database Connected Successfully</h3>";
    }
    else
    {
        echo "Connection Failed: " . mysqli_connect_error();
    }
}
?>

</body>
</html>