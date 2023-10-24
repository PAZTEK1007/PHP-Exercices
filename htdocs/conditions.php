<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if($room_is_filthy){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    0 => 'health hazard',
    1 => 'filthy',
    2 => 'dirty',
    3 => 'clean',
    4 => 'immaculate'
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == 'health hazard' ){
	echo "<br>Yuk, Room is very very crade! Let's clean it up !";
} else if($room_filthiness == 'filthy' ){
    echo "<br>Yuk, Room is filthy : let's clean it up !";
} else if($room_filthiness == 'dirty' ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if($room_filthiness == 'clean' ){
    echo "<br>Nothing to do, room is clean.";
} else {
    echo "<br>Woow it's immacutate !.";
}

// 2. "Different greetings according to time" Exercise

$now = date('H'); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.

if ($now >= 5 AND $now <= 9){
    echo "<br>Good Morning !";
} else if ($now >= 9 AND $now <= 12){
    echo "<br>Good Day !";
} else if ($now >= 12 AND $now <= 16){
    echo "<br>Good Afternoon !";
} else if ($now >= 16 AND $now <= 21){
    echo "<br>Good Evening !";
} else {
    echo "<br>Good Night !";
}
// 3. "Different greetings according to age" Exercise

if (isset($_GET['submit'])) {
    $age = isset($_GET['age']) ? $_GET['age'] : 0;
    
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'unchecked';

    $english = isset($_GET['english']) ? $_GET['english'] : 'unchecked';

    $name = isset($_GET['name']) ? $_GET['name'] : '';

    $note = isset($_GET['note']) ? $_GET['note'] : 0;

    if ($age < 12) {
        if ($english == 'yes') {
            if ($gender == "man") {
                echo "<br>Hello Little Boy!";
            } else if ($gender == 'woman') {
                echo "<br>Hello Little Girl!";
            } else {
                echo "<br>Hello kiddo!";
            } 
        } else if ($english == 'no'){
            if ($gender == "man") {
                echo "<br>Aloha Little Boy!";
            } else if ($gender == 'woman') {
                echo "<br>Aloha Little Girl!";
            } else {
                echo "<br>Aloha kiddo!";
            } 
        }
    } else if ($age >= 12 && $age < 18) {
        if ($english == 'yes'){
            if ($gender == 'man') {
                echo "<br>Hello Teenage Boy!";
            } else if ($gender == 'woman') {
                echo "<br>Hello Teenage Girl!";
            } else {
                echo "<br>Hello Teenager!";
            }
        } else if ($english == 'no'){
            if ($gender == 'man') {
                echo "<br>Aloha Teenage Boy!";
            } else if ($gender == 'woman') {
                echo "<br>Aloha Teenage Girl!";
            } else {
                echo "<br>Aloha Teenager!";
            }
        }
    } else if ($age >= 18 && $age < 115) {
        if ($english == 'yes'){
            if ($gender == 'man') {
                echo "<br>Hello Sir!";
            } else if ($gender == 'woman') {
                echo "<br>Hello Lady!";
            } else {
                echo "<br>Hello Adult!";
            }
        } else if ($english =='no'){
            if ($gender == 'man') {
                echo "<br>Aloha Sir!";
            } else if ($gender == 'woman') {
                echo "<br>Aloha Lady!";
            } else {
                echo "<br>Aloha Adult!";
            }
        }
      
    } else {
        echo "<br>Invalid Age!";
    }

/* Uncomment for the exercice 6

    if ($age >= 21 AND $age <= 40){
        if ($gender == 'woman'){
            echo "<br> Welcome to the team! $name";
        }  else if ($gender == 'man'){
            echo "<br> $name You are not a Girl Man !";
        }
    } else {
        echo "<br> Sorry $name, you don't fit the criteria";
    }
*/

/* Uncomment for the exercice 7 

   if ($gender == 'woman' AND $age >= 21 AND $age <= 40){
        $message = `Welcome to the team! $name`;
        echo `<br> $message`;
    }
} 
*/

// 8. "School sucks!" Exercise


    if ($note < 4){
        echo "<br>This work is really bad. What a dumb kid!";
    } else if ($note >= 5 AND $note <= 9){
        echo "<br>This is not sufficient. More studying is required.";
    } else if ($note == 10){
        echo "<br>Barely enough!";
    } else if ($note >= 11 AND $note <= 14){
        echo "<br>Not bad!";
    } else if ($note >= 15 AND $note <= 18){
        echo "<br>Bravo, bravissimo!";
    } else if ($note == 19 OR $note == 20){
        echo "<br>Too good to be true : confront the cheater!";
    } else {
        echo "<br>Invalid Note!";
    }
}
?>
<form method="get" action="">
    <!--label for="name">Enter your name:</label> // Uncomment for the exercice 6 & 7
    <input type="text" name="name"-->
    <label for="age">Enter your age</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    <p>Man or Woman ?</p>
    <label for="man">Man</label>
    <input type="radio" name="gender" value="man">
    <label for="woman">Woman</label>
    <input type="radio" name="gender" value="woman">
    <p>Do you speak English ?</p>
    <label for="yes">Yes</label>
    <input type="radio" name="english" value="yes">
    <label for="no">No</label>
    <input type="radio" name="english" value="no">
    <p>Exercices 8 </p>
    <label for="note">Enter your note</label>
    <input type="text" name="note">
    <input type="submit" name="submit" value="Send note">
</form>
