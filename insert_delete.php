<?php
require 'db1.php';
/* INSERT */
if(isset($_POST['submit'])){
$name=$_POST['name'];
$reg_no=$_POST['reg_no'];
$age=$_POST['age'];
$marks=$_POST['marks'];

$sql="INSERT INTO student(name,reg_no,age,marks)
VALUES('$name','$reg_no','$age','$marks')";

mysqli_query($conn,$sql);
}

/* DELETE */
if(isset($_GET['delete'])){
$reg=$_GET['delete'];
mysqli_query($conn,"DELETE FROM student WHERE reg_no='$reg'");
}

/* ORDER BY */

$order="";

if(isset($_GET['asc'])){
$order="ORDER BY marks ASC";
}

if(isset($_GET['desc'])){
$order="ORDER BY marks DESC";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>

<style>

body{
font-family:Arial;
background:#ffd1dc;
display:flex;
justify-content:center;
padding:40px;
}

.container{
background:white;
padding:30px;
border-radius:10px;
width:450px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

input{
width:100%;
padding:10px;
margin:8px 0;
border-radius:6px;
border:1px solid #ccc;
}

button{
padding:10px;
border:none;
background:#ff4b7d;
color:white;
border-radius:6px;
cursor:pointer;
}

.sort-btn{
margin-top:10px;
margin-bottom:10px;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

th,td{
padding:8px;
text-align:center;
border-bottom:1px solid #ddd;
}

th{
background:#ff4b7d;
color:white;
}

a{
color:red;
text-decoration:none;
}

</style>
</head>
<body>
<div class="container">
<h2>Student Registration</h2>
<form method="post">
<input type="text" name="name" placeholder="Name" required>
<input type="text" name="reg_no" placeholder="Registration No" required>
<input type="text" name="age" placeholder="Age" required>
<input type="text" name="marks" placeholder="Marks" required>
<button type="submit" name="submit">Submit</button>
</form>
<div class="sort-btn">
<a href="?asc"><button>Marks Ascending</button></a>
<a href="?desc"><button>Marks Descending</button></a>
</div>
<table>
<tr>
<th>Name</th>
<th>Reg No</th>
<th>Age</th>
<th>Marks</th>
<th>Delete</th>
</tr>

<?php
$sql="SELECT * FROM student $order";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo "<tr>
<td>".$row['name']."</td>
<td>".$row['reg_no']."</td>
<td>".$row['age']."</td>
<td>".$row['marks']."</td>
<td><a href='?delete=".$row['reg_no']."'>Delete</a></td>
</tr>";

}

?>

</table>

</div>

</body>
</html>