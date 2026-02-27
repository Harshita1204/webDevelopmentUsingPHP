<!DOCTYPE html>
<html lang ="en">
    <head>
        <title> Late Fee System </title>
        <style>
            .container{
                background-color: white;
                padding: 40px;
                width: 400px;
                border-radius: 10px;
                align-items:center;
                justify-content:center;
                text-align: center;
                border: dashed 10px black;
            }
            body{
                background-color:#2D7A69;
                display:flex;
                text-align:center;
                align-items:center;
                justify-content:center;
                margin:0px;
                height:93vh;
                padding:20px;
                border: dashed 15px black;
            }
            h2{
                background-color:#7ECFBD;
    
            }
            </style>
            </head>
    <body>
    <div class = "container">
        <h2> Digital Library Late fee system</h2>
        <form method = "post" >
            Enter your name: <input type = "text" name = "name" placeholder=" Enter your name ">
            <br><br>
           <label>BookType: </label>
           <select name = "bookType">
            <option value ="regular">regular</option>
            <option value ="reference">reference</option>
</select><br><br>
            Enter days late: <input type = "number" name="late" placeholder = "Enter days late"><br><br>
            <input type="submit" value="submit">
        </form>
        <?php
        function calculateFine($fine,$late){
            $finePerDay=10;
            return $fine=$finePerDay*$late;
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $student_name=$_POST['name'];
            $Days_late=$_POST['late'];

            $cap=function($value){
                $capLimit=1000;
                if($value>1000)
                    return $capLimit;
                };
            }
        ?>
    </body>
</html>