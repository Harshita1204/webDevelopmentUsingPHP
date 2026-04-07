Definition

A cookie is a small piece of data stored in the user's browser.

Why we use cookies

Cookies are used to:

remember users
store preferences
track website activity

#ex
<?php
setcookie("user","Harshita",time()+3600);

echo $_COOKIE["user"];
?>