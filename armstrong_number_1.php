<?php

if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    $sum = 0;

    // Count total digits
    $digits = strlen($num);

    // Store original number
    $original = $num;

    while($num > 0)
    {
        // Get last digit
        $digit = $num % 10;

        // Add power of digit
        $sum = $sum + ($digit ** $digits);

        // Remove last digit
        $num = (int)($num / 10);
    }

    if($sum == $original)
    {
        echo "Armstrong Number";
    }
    else
    {
        echo "Not Armstrong Number";
    }
}

?>