<!DOCTYPE html>
<html>
<head>
    <title>Frequency Counter</title>
</head>
<body>

<h2>Count Frequency of Elements</h2>

<form method="post">
    Enter Elements Separated by Comma:
    <input type="text" name="elements" required>
    <input type="submit" name="submit" value="Count">
</form>

<?php
if(isset($_POST['submit']))
{
    $elements = explode(',', $_POST['elements']);

    $frequency = array_count_values($elements);

    echo "<h3>Frequency of Elements</h3>";

    foreach($frequency as $key => $value)
    {
        echo $key . " = " . $value . "<br>";
    }
}
?>

</body>
</html>