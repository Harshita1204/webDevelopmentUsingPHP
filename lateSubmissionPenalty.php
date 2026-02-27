<?php
$max_penalty=15;
function rawPenalty($late){
    $penaltyPerDay = 2;
    return $penaltyPerDay * $late;
}

$checkPenalty=function($penalty)use($max_penalty){
    if($penalty<$max_penalty){
        return max(0,$max_penalty);
    }else{
        return $max_penalty;
    }
};

if($_SERVER['REQUEST_METHOD']==='POST'){
    $student_name=$_POST['name'];
    $marks=$_POST['marks'];
    $late=$_POST['late'];

    if($student_name && $marks && $late){
       $penalty= rawPenalty($late, $marks);
       $final_penalty=$rawPenalty($penalty);

       echo "Name: $student_name, penalty: $final_penalty";
       echo "<br>Final marks: ".($marks-$final_penalty);
    }   
}
?>
