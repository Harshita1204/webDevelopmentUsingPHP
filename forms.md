Definition

Forms allow users to send data from a webpage to the server.

Why we use forms

Forms are used for:

login systems
registration
feedback forms
search forms

# html form ex:
<form method="post" action="process.php">
Name:
<input type="text" name="name">

<input type="submit">
</form>

# php processing
<?php
$name = $_POST['name'];
echo "Hello ".$name;
?>