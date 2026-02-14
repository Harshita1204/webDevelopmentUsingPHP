<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<h2>Feedback Form</h2>

<form method="POST">

    <b>Rate the Session:</b><br>
    <input type="radio" name="rating" value="1" required> 1
    <input type="radio" name="rating" value="2"> 2
    <input type="radio" name="rating" value="3"> 3
    <input type="radio" name="rating" value="4"> 4
    <input type="radio" name="rating" value="5"> 5
    <br><br>

    <b>How satisfied are you?</b><br>
    <select name="satisfaction" required>
        <option value="">Select</option>
        <option value="Very Satisfied">Very Satisfied</option>
        <option value="Satisfied">Satisfied</option>
        <option value="Neutral">Neutral</option>
        <option value="Unsatisfied">Unsatisfied</option>
    </select>
    <br><br>

    <b>Would you recommend this session?</b><br>
    <input type="radio" name="recommend" value="Yes" required> Yes
    <input type="radio" name="recommend" value="No"> No
    <br><br>

    <button type="submit" name="SubmitFeedback">Submit Feedback</button>
</form>

<?php
if(isset($_POST['SubmitFeedback'])){
    $rating = $_POST['rating'];
    $satisfaction = $_POST['satisfaction'];
    $recommend = $_POST['recommend'];

    echo "<h3>Thank you for your feedback!</h3>";
    echo "Rating: $rating / 5 <br>";
    echo "Satisfaction: $satisfaction <br>";
    echo "Recommend: $recommend <br>";
}
?>

</body>
</html>

