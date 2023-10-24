<?php
if (isset($_GET['submit'])) {
    $note = isset($_GET['note']) ? $_GET['note'] : 0;

    switch ($note){
        case $note < 4:
            echo "This work is really bad. What a dumb kid! ";
            break;
        case $note >= 5 && $note < 9:
            echo "This is not sufficient. More studying is required.";
            break;
        case $note == 10:
            echo "barely enough!";
            break;
        case $note == 11 || $note == 12 || $note == 13 || $note == 14:
            echo "Not bad!";
            break;
        case $note == 15 || $note == 16 || $note == 17 || $note == 18:
            echo "Bravo, bravissimo!";
            break;
        case $note == 19 || $note == 20:
            echo "Too good to be true : confront the cheater!";
            break;
        default:
            echo "Invalid note";
    }
}

?>

<form method="get" action="">
    <label for="note">Enter your note</label>
    <input type="text" name="note">
    <input type="submit" name="submit" value="Send note">
</form>