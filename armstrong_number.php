<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number</title>
</head>
<body>

<h2>Armstrong Number Checker</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" required>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $temp = $num;
    $sum = 0;

    $digits = strlen($num);

    while($temp > 0)
    {
        $rem = $temp % 10;
        $sum += pow($rem, $digits);
        $temp = (int)($temp / 10);
    }

    if($sum == $num)
    {
        echo "<h3>$num is an Armstrong Number</h3>";
    }
    else
    {
        echo "<h3>$num is not an Armstrong Number</h3>";
    }
}
?>

</body>
</html>