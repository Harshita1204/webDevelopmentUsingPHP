<!DOCTYPE html>
<html>
<head>
    <title>Sum Using Variable Arguments</title>
</head>
<body>

<h2>Sum of Multiple Numbers</h2>

<form method="post">
    Enter Numbers Separated by Comma:
    <input type="text" name="numbers" required>
    <input type="submit" name="submit" value="Calculate Sum">
</form>

<?php
function sumNumbers()
{
    $args = func_get_args();
    $sum = 0;

    foreach($args as $value)
    {
        $sum += $value;
    }

    return $sum;
}

if(isset($_POST['submit']))
{
    $numbers = explode(',', $_POST['numbers']);

    $result = sumNumbers(...$numbers);

    echo "<h3>Total Sum = $result</h3>";
}
?>

</body>
</html>