<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

<h2>Student Result System</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Roll Number:
    <input type="text" name="roll" required><br><br>

    Marks in Subject 1:
    <input type="number" name="m1" required><br><br>

    Marks in Subject 2:
    <input type="number" name="m2" required><br><br>

    Marks in Subject 3:
    <input type="number" name="m3" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
class Student
{
    public $name;
    public $roll;
    public $m1;
    public $m2;
    public $m3;

    
    function __construct($name, $roll, $m1, $m2, $m3)
    {
        $this->name = $name;
        $this->roll = $roll;
        $this->m1 = $m1;
        $this->m2 = $m2;
        $this->m3 = $m3;
    }

    function percentage()
    {
        $total = $this->m1 + $this->m2 + $this->m3;
        return ($total / 300) * 100;
    }

    function display()
    {
        echo "<h3>Student Details</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->roll . "<br>";
        echo "Percentage: " . $this->percentage() . "%";
    }
}

if(isset($_POST['submit']))
{
    $student = new Student(
        $_POST['name'],
        $_POST['roll'],
        $_POST['m1'],
        $_POST['m2'],
        $_POST['m3']
    );

    $student->display();
}
?>

</body>
</html>