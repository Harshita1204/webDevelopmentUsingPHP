<?php
$marks=85;
if($marks>=90){
    echo "Grade A";
}
else if($marks>=80 && $marks<90){
    echo "Grade B";
}
elseif($marks>=70 && $marks<80){
    echo "Grade C";
}
else{
    echo"Grade F";
}
?>