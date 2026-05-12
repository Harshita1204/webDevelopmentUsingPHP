<?php
include "database.php";

$message = "";

/* Insert Student */

if(isset($_POST['submit'])){

    $student_name = $_POST['student_name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $marks = $_POST['marks'];

    $insert_query = "INSERT INTO students 
    (student_name, course, email, marks)

    VALUES
    ('$student_name', '$course', '$email', '$marks')";

    if(mysqli_query($conn, $insert_query)){
        $message = "Student Added Successfully";
    } else {
        $message = "Insert Error: " . mysqli_error($conn);
    }
}


$all_students = mysqli_query($conn, "SELECT * FROM students");

if(!$all_students){
    die("Query Error: " . mysqli_error($conn));
}

/* Students Marks > 70 */

$top_students = mysqli_query($conn, "SELECT * FROM students WHERE marks > 70");

if(!$top_students){
    die("Query Error: " . mysqli_error($conn));
}

/* Sorted Students */

$sorted_students = mysqli_query($conn, "SELECT * FROM students ORDER BY student_name ASC");

if(!$sorted_students){
    die("Query Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Management System</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 40px;
        }

        .container{
            width: 900px;
            margin: auto;
        }

        h1{
            text-align: center;
            color: #1e3a8a;
            margin-bottom: 30px;
        }

        h2{
            color: #1e3a8a;
        }

        .form-box{
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        input{
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button{
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover{
            background: #1d4ed8;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-bottom: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.08);
        }

        table th{
            background: #2563eb;
            color: white;
            padding: 12px;
        }

        table td{
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .message{
            background: #dcfce7;
            color: #166534;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Student Management System</h1>

    <?php
    if($message != ""){
        echo "<div class='message'>$message</div>";
    }
    ?>

    <div class="form-box">

        <form method="POST">

            <input type="text" name="student_name" placeholder="Enter Student Name" required>

            <input type="text" name="course" placeholder="Enter Course" required>

            <input type="email" name="email" placeholder="Enter Email" required>

            <input type="number" name="marks" placeholder="Enter Marks" required>

            <button type="submit" name="submit">
                Add Student
            </button>

        </form>

    </div>

    <!-- All Students -->

    <h2>All Student Records</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
            <th>Marks</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($all_students)){
        ?>

        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['marks']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

    <!-- Marks Greater than 70 -->

    <h2>Students with Marks Greater than 70</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
            <th>Marks</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($top_students)){
        ?>

        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['marks']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

    <!-- Sorted Students -->

    <h2>Students Sorted by Name</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
            <th>Marks</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($sorted_students)){
        ?>

        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['marks']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

</div>

</body>
</html>