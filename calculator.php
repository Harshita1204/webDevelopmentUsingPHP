<?php
if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        $result = $num1 + $num2;

    } elseif ($operator == '-') {
        $result = $num1 - $num2;

    } elseif ($operator == '*') {
        $result = $num1 * $num2;

    } elseif ($operator == '/') {

        if ($num2 == 0) {
            $result = "Division by zero is not allowed";
        } else {
            $result = $num1 / $num2;
        }
    }

    echo "<div class='result'>$num1 $operator $num2 = $result</div>";
}
?>
