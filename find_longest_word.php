<!DOCTYPE html>
<html>
<head>
    <title>Longest Word Finder</title>
</head>
<body>

<h2>Find Longest Word</h2>

<form method="post">
    Enter Sentence:
    <textarea name="sentence" required></textarea><br><br>

    <input type="submit" name="submit" value="Find">
</form>

<?php
if(isset($_POST['submit']))
{
    $sentence = $_POST['sentence'];

    $words = explode(' ', $sentence);

    $longest = "";

    foreach($words as $word)
    {
        if(strlen($word) > strlen($longest))
        {
            $longest = $word;
        }
    }

    echo "<h3>Longest Word: $longest</h3>";
}
?>

</body>
</html>