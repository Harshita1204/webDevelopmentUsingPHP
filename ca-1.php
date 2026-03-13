<!DOCTYPE html>
<html>
<title>candidate evaluation summary</title>
<style>
 *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#E8CAE8;
    border:8px inset #BA51E0;   
}
.container{
    background-color:#D0A5E8;
    padding:40px;
    border-radius:10px;
    width:450px;
    border: 10px solid #BA51E0;
}
    </style>
<body>
<div class = "container">
<form method="POST" action="">
    Candidate name:
    <input type="text" name="name" placeholder="candidate name"><br>
    Programming language known:
    <input type="text" name="language" placeholder="programming language"><br>
    Experience:
    <input type="number" name="years" placeholder="experience"><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $candidate_name = $_POST['name'];
    $programming_languages_known = $_POST['language'];
    $experience = $_POST['years'];
    $projects_completed = $_POST['years'];

 /* question 2 */
    function analyzeName($candidate_name){
        $to_uppercase = strtoupper($candidate_name);
        $to_count = strlen($candidate_name);
        $first_letter = $candidate_name[0];
        $reverse = strrev($candidate_name);
        echo "Candidate Name: $to_uppercase <br>";
        echo "Total Characters: $to_count <br>";
        echo "First Letter: $first_letter <br>";
        echo "reverse:   $reverse <br><br>";
    }
    analyzeName($candidate_name);

    /* question 3 */
    function checkEligibility($experience,$projects_completed){
        if($experience >= 2 && $projects_completed >= 3){
            echo "Candidate is shortlisted <br>";
        }
        else if($projects_completed > 5){
            echo "Candidate is highly recommended <br>";
        }
        else{
            echo "Candidate is not eligible <br>";
        }
    }
    checkEligibility($experience,$projects_completed);

    /* question 4 */
    $string = $programming_languages_known;
    for($i = 0; $i < strlen($string); $i++){
        echo $string[$i] . "<br>";
    }
}
?>
</body>
</html>