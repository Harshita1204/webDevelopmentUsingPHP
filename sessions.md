Definition

A session is used to store user data on the server across multiple pages.

Why we use sessions

Sessions are used for:

login systems
shopping carts
storing user information

# ex
<?php
session_start();

$_SESSION["user"]="Harshita";

echo $_SESSION["user"];
?>