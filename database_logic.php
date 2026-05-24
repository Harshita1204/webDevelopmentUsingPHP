<?php

$conn = mysqli_connect("localhost","root","","college");

$result = mysqli_query($conn,"SELECT * FROM students");

while($row = mysqli_fetch_array($result))
{
    echo $row['name'];
}

?>