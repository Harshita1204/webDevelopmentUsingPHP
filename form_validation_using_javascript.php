<!DOCTYPE html>
<html>
<head>
    <title>PHP with JavaScript</title>

    <script>
        function showMessage()
        {
            alert("Hello from JavaScript");
        }
    </script>
</head>

<body>

<?php
echo "<h1>Welcome to PHP</h1>";
?>

<button onclick="showMessage()">Click Me</button>

</body>
</html>