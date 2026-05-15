<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest</title>
</head>
<body>

<h2>Simple Interest Calculator</h2>

<form method="post">
    Principal:
    <input type="number" name="principal" required><br><br>

    Rate:
    <input type="number" step="0.01" name="rate" required><br><br>

    Time:
    <input type="number" name="time" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
function simpleInterest($p, $r, $t)
{
    return ($p * $r * $t) / 100;
}

if(isset($_POST['submit']))
{
    $p = $_POST['principal'];
    $r = $_POST['rate'];
    $t = $_POST['time'];

    $si = simpleInterest($p, $r, $t);

    echo "<h3>Simple Interest = $si</h3>";
}
?>

</body>
</html>