<?php
$name="harshitapreet kaur";
$email="harshitak1204@gmail.com";
$phone="9888518057";
$location="India";

$objective= "To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills.";
$skills= ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

$education= [
    ["degree" => "Bachelor in computer applications", "institution" => "Dav college", "year" => "2025"],
    ["degree" => "High School", "institution" => "guru amar dass public School", "year" => "2022"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title> My CV </title>
    <style>
        body{
            font-family:Arial, sans-serif;
            background:#F2C2E3;
            margin:0px;
            padding:40px;
        }
        .cv-box{
            background:#fff;
            padding:20px 40px;
            max-width:800px;
            margin:0 ;
            border: 2px solid #333;
            box-shadow:0 0 10px rgba(0,0,0,0.1);

        }
        .cv-title{
            text-align:center;
            font-size:28 px;
            font-weight:bold;
            margin-bottom:30px;
            text-transform:uppercase;
            border-bottom:2px solid #333;
            padding-bottom:10px;
        }
        h1,h2{
            border-bottom:1px solid #ccc;
            padding-bottom:5px;
            margin-top:25px;
        }
        p{
            margin:6px 0;
        }
        ul{
            padding-left:20px;
        }
        .info{
            margin-bottom:20px;
            text-align:center;
        }
    </style>
    </head>
    <body>
        <div class="cv-box">
        <h1><?php echo $name;?></h1>
        <p>Email: <?php echo $email;?></p>
        <p>Phone: <?php echo $phone;?></p>
        <p>Location: <?php echo $location;?></p>    
        <h2>Objective</h2>
        <p><?php echo $objective;?></p>
        <h2>Skills</h2>
        <ul>    
            <?php foreach($skills as $skill){
                echo "<li>$skill</li>";
            }?>
        </ul>
        <h2>Education</h2>      
        <ul>
            <?php foreach($education as $edu){
                echo "<li>{$edu['degree']} from {$edu['institution']} ({$edu['year']})</li>";
            }?>     
        </ul>
    </div>          
    </body>
</html>
            
