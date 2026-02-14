<!DOCTYPE html>
<html lang ="en">
    <head>
        <style>
            body{
                background-color:skyblue;
                display:flex;
                text-align:center;
                align-items:center;
                justify-content:center;
                margin:0px;
                height:93vh;
                padding:20px;
                border: dashed 15px black;
            }
            .container{
         background-color: white;
         padding: 40px;
         width: 400px;
         border-radius: 10px;
         box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
         text-align: center;
         border: dashed 10px black;
}
        <title>  Registration form </title>
        </style>
</head>
<body>
<div class ="container">
    <form method = "POST" action = "feedbackForm.php">
       <b> Name:</b>
    <input type="text" name="name" placeholder="Enter your name" required>
    <br><br>

    <b> Email: </b>
    <input type="email" name="email" placeholder="Enter your email" required>
    <br><br>

     <b>phone number:</b>
    <input type="number" name="number" placeholder="Enter your phone number" required>
    <br><br>

    <label><b> Session selection: <b></label>
    <select name= "session" required>
        <option value="" disabled selected>Select a session</option>
        <option value = "Artificial Intelligence">Artificial intelligence</option>
        <option value = "Cloud computing">cloud computing</option>
        <option value = "cyber security"> cyber security</option>
</select><br><br>

<label>Experience: </label>
         <input type ="radio" name="experience" value="begineer">begineer
         <input type ="radio" name="experience" value="intermediate">intermediate
         <input type ="radio" name="experience" value="expert">expert
    <br><br>
          <button type="submit" name="Register" value="Submit">Register</button><br><br>

</form>
<?php
if(isset($_POST['Register'])){
    echo '<h1 style="color:red;">Registration successful !</h1><br>';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneNumber=$_POST['number'];
    $session=$_POST['session'];
    
    echo"$name <br>";
    echo"$email <br>";
    echo"$phoneNumber <br>";
    echo"$session <br>";

     // Feedback button
    echo '<a href="feedback.php">
            <button>Feedback</button>
          </a>';
}
?>
</div>
</body>
</html>

