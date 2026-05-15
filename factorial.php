<!DOCTYPE html>
<html>
<head>
    <title>Factorial Using Recursion</title>
</head>
<body>

<h2>Factorial Program</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" required>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
function factorial($n)
{
    if($n == 0 || $n == 1)
    {
        return 1;
    }
    else
    {
        return $n * factorial($n - 1);
    }
}

if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $result = factorial($num);

    echo "<h3>Factorial of $num is : $result</h3>";
}
?>

</body>
</html>