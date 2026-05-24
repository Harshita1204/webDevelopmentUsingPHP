<!DOCTYPE html>
<html>

<body>

<form action="process.php" method="post">

Name:
<input type="text" name="username">

<br><br>

Password:
<input type="password" name="password">

<br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female

<br><br>

Hobbies:
<input type="checkbox" name="hobby[]" value="Music"> Music
<input type="checkbox" name="hobby[]" value="Sports"> Sports

<br><br>

Message:
<textarea name="message"></textarea>

<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>