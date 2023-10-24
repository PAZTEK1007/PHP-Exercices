<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuse Generator</title>
</head>
<body>

<?php
if (isset($_GET["submit"])){

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $teacher = isset($_GET['teacher']) ? $_GET['teacher'] : '';
    $other = isset($_GET['other']) ? $_GET['other'] : '';

    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'unchecked';
    $reason = isset($_GET['reason']) ? $_GET['reason'] : 'unchecked';

    $dateInput = isset($_GET['date']) ? $_GET['date'] : '';
    $date = date_create($dateInput);

    $polite = "Thank you for your understanding and patience. Please accept my sincerest apologies.";
   

    switch($reason AND $gender){
        case $reason == 'illness' AND $gender == 'male';
            $message = "Dear $teacher, My son $name is sick and will not be able to come to school today.";
            break;
        case $reason == 'death'AND $gender == 'male';
            $message = "Dear $teacher, My son $name, $name's pet died and he will not be able to come to school today.";
            break;
        case $reason == 'extra' AND $gender == 'male';
            $message = "Dear $teacher, My son $name has an extra-curricular activity and will not be able to come to school today.";
            break;
        case $reason == 'other' AND $gender == 'male';
            $message = "Dear $teacher, My son$name will not be able to come to school today because $other.";
            break;
        case $reason == 'illness' AND $gender == 'female';
            $message = "Dear $teacher, My daughter $name is sick and will not be able to come to school today.";
            break;
        case $reason == 'death'AND $gender == 'female';
            $message = "Dear $teacher, My daughter $name, $name's pet died and he will not be able to come to school today.";
            break;
        case $reason == 'extra' AND $gender == 'female';
            $message = "Dear $teacher, My daughter $name has an extra-curricular activity and will not be able to come to school today.";
            break;
        case $reason == 'other' AND $gender == 'female';
            $message = "Dear $teacher, My daughter $name will not be able to come to school today because $other.";
            break;
          
    }
    echo "<span>" . $message . "<br>" . $polite . "<br>" . date_format($date, "l jS F Y") . "</span>";
}

?>
<div class="formContainer">
<form method="get" action="">
    <div class="firstContent">
        <div class="name">
            <label for="name">Name :</label>
            <input type="text" name="name" placeholder="Name of the child">
        </div>
        <div class="teacher">
            <label for="teacher">Teacher :</label>
            <input type="text" name="teacher" placeholder="Name of the teacher">
        </div>
    </div>
    <div class="gender">
        <label for="gender">Gender :</label>
        <input type="radio" name="gender" value="male">
        <label for="male">M</label>
        <input type="radio" name="gender" value="female">
        <label for="female">F</label>
    </div>
    <label for="date" id="date">Date :</label>
    <input id="date" type="date" name="date" placeholder="Date">
    <div class="reason">
        <label for="reason">Reason :</label>
        <input type="radio" name="reason" value="illness">
        <label for="illness">Illness</label>
        <input type="radio" name="reason" value="death">
        <label for="death">Death of ...</label>
        <input type="radio" name="reason" value="extra">
        <label for="extra">Extra-curricular activity</label>
        <input type="radio" name="reason" value="other">
        <label for="other" id="other">Other</label>
        <input id="other" type="text" name="other" placeholder="Other reason">
    </div>
        
        <input id="submit" type="submit" name="submit" value="Generate Excuse">
</form>
</div>
</body>
</html>


